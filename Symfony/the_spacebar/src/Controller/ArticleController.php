<?php

namespace App\Controller;

use App\Service\MarkdownHelper;
use App\Service\SlackClient;
use Nexy\Slack\Client;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class ArticleController extends AbstractController
{
    private $isDebug;

    /**
     * @Route("/", name="app_homepage")
     */
    public function homepage()
    {
        return $this->render('article/homepage.html.twig');
    }

    public function __construct(bool $isDebug, Client $slack)
    {
        $this->isDebug = $isDebug;
    }

    /**
     * @Route("/news/{slug}", name="article_show")
     */
    public function show($slug, MarkdownHelper $markdownHelper,SlackClient $slack)
    {
        if ($slug === 'khaaaaaan') {
            $slack->sendMessage('Khan', 'Ah, Kirk, my old friend...');
        }
        $comments = [
            'Something funny',
            'Something hilarious',
            'Something dumb'
        ];

        $articleContent = <<<EOF
Spicy **jalapeno bacon** ipsum dolor amet veniam shank in dolore. Ham hock nisi landjaeger cow,
lorem proident [beef ribs](https://www.healthline.com/nutrition/jalapeno-health-benefits) aute enim veniam ut cillum pork chuck picanha. Dolore reprehenderit
labore minim pork belly spare ribs cupim short loin in. Elit exercitation eiusmod dolore cow
**turkey** shank eu pork belly meatball non cupim.
EOF;

        $articleContent = $markdownHelper->parse($articleContent);

        return $this->render('article/show.html.twig', [
            'title' => ucwords(str_replace('-', ' ', $slug)),
            'articleContent' => $articleContent,
            'slug' => $slug,
            'comments' => $comments,
        ]);

    }

    /**
     * @Route("/news/{slug}/heart", name="article_toggle_heart", methods={"POST"})
     */
    public function toggleArticleHeart($slug, LoggerInterface $logger)
    {
        $logger->info('Loved');

        return new JsonResponse(['hearts' => rand(5, 100)]);
    }
}