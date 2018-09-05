<?php

/* article/show.html.twig */
class __TwigTemplate_e501414b0fd9f12819c3014c9000ca341526274302c45ee8fb44f9cd2d9504ef extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "article/show.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "This is ";
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new Twig_Error_Runtime('Variable "title" does not exist.', 3, $this->source); })()), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-12\">
                <div class=\"show-article-container p-3 mt-4\">
                    <div class=\"row\">
                        <div class=\"col-sm-12\">
                            <img class=\"show-article-img\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/asteroid.jpeg"), "html", null, true);
        echo "\">
                            <div class=\"show-article-title-container d-inline-block pl-3 align-middle\">
                                <span class=\"show-article-title \">";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new Twig_Error_Runtime('Variable "title" does not exist.', 15, $this->source); })()), "html", null, true);
        echo "</span>
                                <br>
                                <span class=\"align-left article-details\"><img class=\"article-author-img rounded-circle\" src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/alien-profile.png"), "html", null, true);
        echo "\"> Mike Ferengi </span>
                                <span class=\"pl-2 article-details\"> 4 hours ago</span>
                                <span class=\"pl-2 article-details\">
                                    <span class=\"js-like-article-count\">5</span>
                                        <a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_toggle_heart", array("slug" => (isset($context["slug"]) || array_key_exists("slug", $context) ? $context["slug"] : (function () { throw new Twig_Error_Runtime('Variable "slug" does not exist.', 21, $this->source); })()))), "html", null, true);
        echo "\" class=\"fa fa-heart-o like-article js-like-article\"></a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-sm-12\">
                            <div class=\"article-text\">
                                ";
        // line 29
        echo (isset($context["articleContent"]) || array_key_exists("articleContent", $context) ? $context["articleContent"] : (function () { throw new Twig_Error_Runtime('Variable "articleContent" does not exist.', 29, $this->source); })());
        echo "
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-sm-12\">
                            <p class=\"share-icons mb-5\"><span class=\"pr-1\">Share:</span> <i class=\"pr-1 fa fa-facebook-square\"></i><i class=\"pr-1 fa fa-twitter-square\"></i><i class=\"pr-1 fa fa-reddit-square\"></i><i class=\"pr-1 fa fa-share-alt-square\"></i></p>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-sm-12\">
                            <h3><i class=\"pr-3 fa fa-comment\"></i>";
        // line 40
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new Twig_Error_Runtime('Variable "comments" does not exist.', 40, $this->source); })())), "html", null, true);
        echo "</h3>
                            <hr>

                            <div class=\"row mb-5\">
                                <div class=\"col-sm-12\">
                                    <img class=\"comment-img rounded-circle\" src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/astronaut-profile.png"), "html", null, true);
        echo "\">
                                    <div class=\"comment-container d-inline-block pl-3 align-top\">
                                        <span class=\"commenter-name\">Amy Oort</span>
                                        <div class=\"form-group\">
                                            <textarea class=\"form-control comment-form\" id=\"articleText\" rows=\"1\"></textarea>
                                        </div>
                                        <button type=\"submit\" class=\"btn btn-info\">Comment</button>
                                    </div>
                                </div>
                            </div>

                            ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new Twig_Error_Runtime('Variable "comments" does not exist.', 56, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 57
            echo "                            <div class=\"row\">
                                <div class=\"col-sm-12\">
                                    <img class=\"comment-img rounded-circle\" src=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/alien-profile.png"), "html", null, true);
            echo "\">
                                    <div class=\"comment-container d-inline-block pl-3 align-top\">
                                        <span class=\"commenter-name\">Mike Ferengi</span>
                                        <br>
                                        <span class=\"comment\"> ";
            // line 63
            echo twig_escape_filter($this->env, $context["comment"], "html", null, true);
            echo " </span>
                                        <p><a href=\"#\">Reply</a></p>
                                    </div>
                                </div>
                            </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 79
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 80
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/article_show.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "article/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 82,  201 => 80,  192 => 79,  174 => 69,  162 => 63,  155 => 59,  151 => 57,  147 => 56,  133 => 45,  125 => 40,  111 => 29,  100 => 21,  93 => 17,  88 => 15,  83 => 13,  74 => 6,  65 => 5,  46 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{%  extends 'base.html.twig' %}

{% block title %}This is {{ title }}{% endblock title %}

{% block body %}

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-12\">
                <div class=\"show-article-container p-3 mt-4\">
                    <div class=\"row\">
                        <div class=\"col-sm-12\">
                            <img class=\"show-article-img\" src=\"{{ asset('images/asteroid.jpeg') }}\">
                            <div class=\"show-article-title-container d-inline-block pl-3 align-middle\">
                                <span class=\"show-article-title \">{{ title }}</span>
                                <br>
                                <span class=\"align-left article-details\"><img class=\"article-author-img rounded-circle\" src=\"{{ asset('images/alien-profile.png') }}\"> Mike Ferengi </span>
                                <span class=\"pl-2 article-details\"> 4 hours ago</span>
                                <span class=\"pl-2 article-details\">
                                    <span class=\"js-like-article-count\">5</span>
                                        <a href=\"{{ path('article_toggle_heart', {slug:slug}) }}\" class=\"fa fa-heart-o like-article js-like-article\"></a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-sm-12\">
                            <div class=\"article-text\">
                                {{ articleContent|raw }}
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-sm-12\">
                            <p class=\"share-icons mb-5\"><span class=\"pr-1\">Share:</span> <i class=\"pr-1 fa fa-facebook-square\"></i><i class=\"pr-1 fa fa-twitter-square\"></i><i class=\"pr-1 fa fa-reddit-square\"></i><i class=\"pr-1 fa fa-share-alt-square\"></i></p>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-sm-12\">
                            <h3><i class=\"pr-3 fa fa-comment\"></i>{{ comments|length }}</h3>
                            <hr>

                            <div class=\"row mb-5\">
                                <div class=\"col-sm-12\">
                                    <img class=\"comment-img rounded-circle\" src=\"{{ asset('images/astronaut-profile.png') }}\">
                                    <div class=\"comment-container d-inline-block pl-3 align-top\">
                                        <span class=\"commenter-name\">Amy Oort</span>
                                        <div class=\"form-group\">
                                            <textarea class=\"form-control comment-form\" id=\"articleText\" rows=\"1\"></textarea>
                                        </div>
                                        <button type=\"submit\" class=\"btn btn-info\">Comment</button>
                                    </div>
                                </div>
                            </div>

                            {% for comment in comments %}
                            <div class=\"row\">
                                <div class=\"col-sm-12\">
                                    <img class=\"comment-img rounded-circle\" src=\"{{ asset('images/alien-profile.png') }}\">
                                    <div class=\"comment-container d-inline-block pl-3 align-top\">
                                        <span class=\"commenter-name\">Mike Ferengi</span>
                                        <br>
                                        <span class=\"comment\"> {{ comment }} </span>
                                        <p><a href=\"#\">Reply</a></p>
                                    </div>
                                </div>
                            </div>
                            {% endfor %}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

{% endblock body %}

{% block javascripts %}
    {{ parent() }}

    <script src=\"{{ asset('js/article_show.js') }}\"></script>
{%  endblock javascripts %}", "article/show.html.twig", "D:\\the_spacebar\\templates\\article\\show.html.twig");
    }
}
