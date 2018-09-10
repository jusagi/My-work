<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = $allowSchemes = array();
        if ($ret = $this->doMatch($pathinfo, $allow, $allowSchemes)) {
            return $ret;
        }
        if ($allow) {
            throw new MethodNotAllowedException(array_keys($allow));
        }
        if (!in_array($this->context->getMethod(), array('HEAD', 'GET'), true)) {
            // no-op
        } elseif ($allowSchemes) {
            redirect_scheme:
            $scheme = $this->context->getScheme();
            $this->context->setScheme(key($allowSchemes));
            try {
                if ($ret = $this->doMatch($pathinfo)) {
                    return $this->redirect($pathinfo, $ret['_route'], $this->context->getScheme()) + $ret;
                }
            } finally {
                $this->context->setScheme($scheme);
            }
        } elseif ('/' !== $pathinfo) {
            $pathinfo = '/' !== $pathinfo[-1] ? $pathinfo.'/' : substr($pathinfo, 0, -1);
            if ($ret = $this->doMatch($pathinfo, $allow, $allowSchemes)) {
                return $this->redirect($pathinfo, $ret['_route']) + $ret;
            }
            if ($allowSchemes) {
                goto redirect_scheme;
            }
        }

        throw new ResourceNotFoundException();
    }

    private function doMatch(string $rawPathinfo, array &$allow = array(), array &$allowSchemes = array()): ?array
    {
        $allow = $allowSchemes = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $context = $this->context;
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        switch ($pathinfo) {
            default:
                $routes = array(
                    '/admin/article/new' => array(array('_route' => 'app_articleadmin_new', '_controller' => 'App\\Controller\\ArticleAdminController::new'), null, null, null),
                    '/' => array(array('_route' => 'app_homepage', '_controller' => 'App\\Controller\\ArticleController::homepage'), null, null, null),
                    '/admin/' => array(array('_route' => 'sonata_admin_redirect', '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction', 'route' => 'sonata_admin_dashboard', 'permanent' => 'true'), null, null, null),
                    '/admin/dashboard' => array(array('_route' => 'sonata_admin_dashboard', '_controller' => 'Sonata\\AdminBundle\\Action\\DashboardAction'), null, null, null),
                    '/admin/core/get-form-field-element' => array(array('_route' => 'sonata_admin_retrieve_form_element', '_controller' => 'sonata.admin.action.retrieve_form_field_element'), null, null, null),
                    '/admin/core/append-form-field-element' => array(array('_route' => 'sonata_admin_append_form_element', '_controller' => 'sonata.admin.action.append_form_field_element'), null, null, null),
                    '/admin/core/set-object-field-value' => array(array('_route' => 'sonata_admin_set_object_field_value', '_controller' => 'sonata.admin.action.set_object_field_value'), null, null, null),
                    '/admin/search' => array(array('_route' => 'sonata_admin_search', '_controller' => 'Sonata\\AdminBundle\\Action\\SearchAction'), null, null, null),
                    '/admin/core/get-autocomplete-items' => array(array('_route' => 'sonata_admin_retrieve_autocomplete_items', '_controller' => 'sonata.admin.action.retrieve_autocomplete_items'), null, null, null),
                    '/admin/app/category/list' => array(array('_route' => 'admin_app_category_list', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction', '_sonata_admin' => 'admin.category', '_sonata_name' => 'admin_app_category_list'), null, null, null),
                    '/admin/app/category/create' => array(array('_route' => 'admin_app_category_create', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction', '_sonata_admin' => 'admin.category', '_sonata_name' => 'admin_app_category_create'), null, null, null),
                    '/admin/app/category/batch' => array(array('_route' => 'admin_app_category_batch', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction', '_sonata_admin' => 'admin.category', '_sonata_name' => 'admin_app_category_batch'), null, null, null),
                    '/admin/app/category/export' => array(array('_route' => 'admin_app_category_export', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction', '_sonata_admin' => 'admin.category', '_sonata_name' => 'admin_app_category_export'), null, null, null),
                    '/admin/app/blogpost/list' => array(array('_route' => 'admin_app_blogpost_list', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction', '_sonata_admin' => 'admin.blog_post', '_sonata_name' => 'admin_app_blogpost_list'), null, null, null),
                    '/admin/app/blogpost/create' => array(array('_route' => 'admin_app_blogpost_create', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction', '_sonata_admin' => 'admin.blog_post', '_sonata_name' => 'admin_app_blogpost_create'), null, null, null),
                    '/admin/app/blogpost/batch' => array(array('_route' => 'admin_app_blogpost_batch', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction', '_sonata_admin' => 'admin.blog_post', '_sonata_name' => 'admin_app_blogpost_batch'), null, null, null),
                    '/admin/app/blogpost/export' => array(array('_route' => 'admin_app_blogpost_export', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction', '_sonata_admin' => 'admin.blog_post', '_sonata_name' => 'admin_app_blogpost_export'), null, null, null),
                    '/admin/app/classroom/list' => array(array('_route' => 'admin_app_classroom_list', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction', '_sonata_admin' => 'admin.classroom', '_sonata_name' => 'admin_app_classroom_list'), null, null, null),
                    '/admin/app/classroom/create' => array(array('_route' => 'admin_app_classroom_create', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction', '_sonata_admin' => 'admin.classroom', '_sonata_name' => 'admin_app_classroom_create'), null, null, null),
                    '/admin/app/classroom/batch' => array(array('_route' => 'admin_app_classroom_batch', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction', '_sonata_admin' => 'admin.classroom', '_sonata_name' => 'admin_app_classroom_batch'), null, null, null),
                    '/admin/app/classroom/export' => array(array('_route' => 'admin_app_classroom_export', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction', '_sonata_admin' => 'admin.classroom', '_sonata_name' => 'admin_app_classroom_export'), null, null, null),
                    '/admin/app/student/list' => array(array('_route' => 'admin_app_student_list', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction', '_sonata_admin' => 'admin.student', '_sonata_name' => 'admin_app_student_list'), null, null, null),
                    '/admin/app/student/create' => array(array('_route' => 'admin_app_student_create', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction', '_sonata_admin' => 'admin.student', '_sonata_name' => 'admin_app_student_create'), null, null, null),
                    '/admin/app/student/batch' => array(array('_route' => 'admin_app_student_batch', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction', '_sonata_admin' => 'admin.student', '_sonata_name' => 'admin_app_student_batch'), null, null, null),
                    '/admin/app/student/export' => array(array('_route' => 'admin_app_student_export', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction', '_sonata_admin' => 'admin.student', '_sonata_name' => 'admin_app_student_export'), null, null, null),
                    '/_profiler/' => array(array('_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'), null, null, null),
                    '/_profiler/search' => array(array('_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'), null, null, null),
                    '/_profiler/search_bar' => array(array('_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'), null, null, null),
                    '/_profiler/phpinfo' => array(array('_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'), null, null, null),
                    '/_profiler/open' => array(array('_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'), null, null, null),
                );

                if (!isset($routes[$pathinfo])) {
                    break;
                }
                list($ret, $requiredHost, $requiredMethods, $requiredSchemes) = $routes[$pathinfo];

                $hasRequiredScheme = !$requiredSchemes || isset($requiredSchemes[$context->getScheme()]);
                if ($requiredMethods && !isset($requiredMethods[$canonicalMethod]) && !isset($requiredMethods[$requestMethod])) {
                    if ($hasRequiredScheme) {
                        $allow += $requiredMethods;
                    }
                    break;
                }
                if (!$hasRequiredScheme) {
                    $allowSchemes += $requiredSchemes;
                    break;
                }

                return $ret;
        }

        $matchedPathinfo = $pathinfo;
        $regexList = array(
            0 => '{^(?'
                    .'|/news/([^/]++)(?'
                        .'|(*:24)'
                        .'|/heart(*:37)'
                    .')'
                    .'|/admin/(?'
                        .'|core/get\\-short\\-object\\-description(?:\\.(html|json))?(*:109)'
                        .'|app/(?'
                            .'|c(?'
                                .'|ategory/([^/]++)/(?'
                                    .'|edit(*:152)'
                                    .'|delete(*:166)'
                                    .'|show(*:178)'
                                .')'
                                .'|lassroom/([^/]++)/(?'
                                    .'|edit(*:212)'
                                    .'|delete(*:226)'
                                    .'|show(*:238)'
                                .')'
                            .')'
                            .'|blogpost/([^/]++)/(?'
                                .'|edit(*:273)'
                                .'|delete(*:287)'
                                .'|show(*:299)'
                            .')'
                            .'|student/([^/]++)/(?'
                                .'|edit(*:332)'
                                .'|delete(*:346)'
                                .'|show(*:358)'
                            .')'
                        .')'
                    .')'
                    .'|/_(?'
                        .'|error/(\\d+)(?:\\.([^/]++))?(*:400)'
                        .'|wdt/([^/]++)(*:420)'
                        .'|profiler/([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:466)'
                                .'|router(*:480)'
                                .'|exception(?'
                                    .'|(*:500)'
                                    .'|\\.css(*:513)'
                                .')'
                            .')'
                            .'|(*:523)'
                        .')'
                    .')'
                .')$}sD',
        );

        foreach ($regexList as $offset => $regex) {
            while (preg_match($regex, $matchedPathinfo, $matches)) {
                switch ($m = (int) $matches['MARK']) {
                    default:
                        $routes = array(
                            24 => array(array('_route' => 'article_show', '_controller' => 'App\\Controller\\ArticleController::show'), array('slug'), null, null),
                            37 => array(array('_route' => 'article_toggle_heart', '_controller' => 'App\\Controller\\ArticleController::toggleArticleHeart'), array('slug'), array('POST' => 0), null),
                            109 => array(array('_route' => 'sonata_admin_short_object_information', '_controller' => 'sonata.admin.action.get_short_object_description', '_format' => 'html'), array('_format'), null, null),
                            152 => array(array('_route' => 'admin_app_category_edit', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction', '_sonata_admin' => 'admin.category', '_sonata_name' => 'admin_app_category_edit'), array('id'), null, null),
                            166 => array(array('_route' => 'admin_app_category_delete', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction', '_sonata_admin' => 'admin.category', '_sonata_name' => 'admin_app_category_delete'), array('id'), null, null),
                            178 => array(array('_route' => 'admin_app_category_show', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction', '_sonata_admin' => 'admin.category', '_sonata_name' => 'admin_app_category_show'), array('id'), null, null),
                            212 => array(array('_route' => 'admin_app_classroom_edit', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction', '_sonata_admin' => 'admin.classroom', '_sonata_name' => 'admin_app_classroom_edit'), array('id'), null, null),
                            226 => array(array('_route' => 'admin_app_classroom_delete', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction', '_sonata_admin' => 'admin.classroom', '_sonata_name' => 'admin_app_classroom_delete'), array('id'), null, null),
                            238 => array(array('_route' => 'admin_app_classroom_show', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction', '_sonata_admin' => 'admin.classroom', '_sonata_name' => 'admin_app_classroom_show'), array('id'), null, null),
                            273 => array(array('_route' => 'admin_app_blogpost_edit', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction', '_sonata_admin' => 'admin.blog_post', '_sonata_name' => 'admin_app_blogpost_edit'), array('id'), null, null),
                            287 => array(array('_route' => 'admin_app_blogpost_delete', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction', '_sonata_admin' => 'admin.blog_post', '_sonata_name' => 'admin_app_blogpost_delete'), array('id'), null, null),
                            299 => array(array('_route' => 'admin_app_blogpost_show', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction', '_sonata_admin' => 'admin.blog_post', '_sonata_name' => 'admin_app_blogpost_show'), array('id'), null, null),
                            332 => array(array('_route' => 'admin_app_student_edit', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction', '_sonata_admin' => 'admin.student', '_sonata_name' => 'admin_app_student_edit'), array('id'), null, null),
                            346 => array(array('_route' => 'admin_app_student_delete', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction', '_sonata_admin' => 'admin.student', '_sonata_name' => 'admin_app_student_delete'), array('id'), null, null),
                            358 => array(array('_route' => 'admin_app_student_show', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction', '_sonata_admin' => 'admin.student', '_sonata_name' => 'admin_app_student_show'), array('id'), null, null),
                            400 => array(array('_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'), array('code', '_format'), null, null),
                            420 => array(array('_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'), array('token'), null, null),
                            466 => array(array('_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'), array('token'), null, null),
                            480 => array(array('_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'), array('token'), null, null),
                            500 => array(array('_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'), array('token'), null, null),
                            513 => array(array('_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'), array('token'), null, null),
                            523 => array(array('_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'), array('token'), null, null),
                        );

                        list($ret, $vars, $requiredMethods, $requiredSchemes) = $routes[$m];

                        foreach ($vars as $i => $v) {
                            if (isset($matches[1 + $i])) {
                                $ret[$v] = $matches[1 + $i];
                            }
                        }

                        $hasRequiredScheme = !$requiredSchemes || isset($requiredSchemes[$context->getScheme()]);
                        if ($requiredMethods && !isset($requiredMethods[$canonicalMethod]) && !isset($requiredMethods[$requestMethod])) {
                            if ($hasRequiredScheme) {
                                $allow += $requiredMethods;
                            }
                            break;
                        }
                        if (!$hasRequiredScheme) {
                            $allowSchemes += $requiredSchemes;
                            break;
                        }

                        return $ret;
                }

                if (523 === $m) {
                    break;
                }
                $regex = substr_replace($regex, 'F', $m - $offset, 1 + strlen($m));
                $offset += strlen($m);
            }
        }
        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        return null;
    }
}
