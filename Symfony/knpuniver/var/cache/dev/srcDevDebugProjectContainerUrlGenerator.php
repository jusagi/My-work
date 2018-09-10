<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcDevDebugProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;
    private $defaultLocale;

    public function __construct(RequestContext $context, LoggerInterface $logger = null, string $defaultLocale = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        $this->defaultLocale = $defaultLocale;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'app_articleadmin_new' => array(array(), array('_controller' => 'App\\Controller\\ArticleAdminController::new'), array(), array(array('text', '/admin/article/new')), array(), array()),
        'app_homepage' => array(array(), array('_controller' => 'App\\Controller\\ArticleController::homepage'), array(), array(array('text', '/')), array(), array()),
        'article_show' => array(array('slug'), array('_controller' => 'App\\Controller\\ArticleController::show'), array(), array(array('variable', '/', '[^/]++', 'slug'), array('text', '/news')), array(), array()),
        'article_toggle_heart' => array(array('slug'), array('_controller' => 'App\\Controller\\ArticleController::toggleArticleHeart'), array(), array(array('text', '/heart'), array('variable', '/', '[^/]++', 'slug'), array('text', '/news')), array(), array()),
        'sonata_admin_redirect' => array(array(), array('_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction', 'route' => 'sonata_admin_dashboard', 'permanent' => 'true'), array(), array(array('text', '/admin/')), array(), array()),
        'sonata_admin_dashboard' => array(array(), array('_controller' => 'Sonata\\AdminBundle\\Action\\DashboardAction'), array(), array(array('text', '/admin/dashboard')), array(), array()),
        'sonata_admin_retrieve_form_element' => array(array(), array('_controller' => 'sonata.admin.action.retrieve_form_field_element'), array(), array(array('text', '/admin/core/get-form-field-element')), array(), array()),
        'sonata_admin_append_form_element' => array(array(), array('_controller' => 'sonata.admin.action.append_form_field_element'), array(), array(array('text', '/admin/core/append-form-field-element')), array(), array()),
        'sonata_admin_short_object_information' => array(array('_format'), array('_controller' => 'sonata.admin.action.get_short_object_description', '_format' => 'html'), array('_format' => 'html|json'), array(array('variable', '.', 'html|json', '_format'), array('text', '/admin/core/get-short-object-description')), array(), array()),
        'sonata_admin_set_object_field_value' => array(array(), array('_controller' => 'sonata.admin.action.set_object_field_value'), array(), array(array('text', '/admin/core/set-object-field-value')), array(), array()),
        'sonata_admin_search' => array(array(), array('_controller' => 'Sonata\\AdminBundle\\Action\\SearchAction'), array(), array(array('text', '/admin/search')), array(), array()),
        'sonata_admin_retrieve_autocomplete_items' => array(array(), array('_controller' => 'sonata.admin.action.retrieve_autocomplete_items'), array(), array(array('text', '/admin/core/get-autocomplete-items')), array(), array()),
        'admin_app_category_list' => array(array(), array('_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction', '_sonata_admin' => 'admin.category', '_sonata_name' => 'admin_app_category_list'), array(), array(array('text', '/admin/app/category/list')), array(), array()),
        'admin_app_category_create' => array(array(), array('_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction', '_sonata_admin' => 'admin.category', '_sonata_name' => 'admin_app_category_create'), array(), array(array('text', '/admin/app/category/create')), array(), array()),
        'admin_app_category_batch' => array(array(), array('_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction', '_sonata_admin' => 'admin.category', '_sonata_name' => 'admin_app_category_batch'), array(), array(array('text', '/admin/app/category/batch')), array(), array()),
        'admin_app_category_edit' => array(array('id'), array('_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction', '_sonata_admin' => 'admin.category', '_sonata_name' => 'admin_app_category_edit'), array(), array(array('text', '/edit'), array('variable', '/', '[^/]++', 'id'), array('text', '/admin/app/category')), array(), array()),
        'admin_app_category_delete' => array(array('id'), array('_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction', '_sonata_admin' => 'admin.category', '_sonata_name' => 'admin_app_category_delete'), array(), array(array('text', '/delete'), array('variable', '/', '[^/]++', 'id'), array('text', '/admin/app/category')), array(), array()),
        'admin_app_category_show' => array(array('id'), array('_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction', '_sonata_admin' => 'admin.category', '_sonata_name' => 'admin_app_category_show'), array(), array(array('text', '/show'), array('variable', '/', '[^/]++', 'id'), array('text', '/admin/app/category')), array(), array()),
        'admin_app_category_export' => array(array(), array('_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction', '_sonata_admin' => 'admin.category', '_sonata_name' => 'admin_app_category_export'), array(), array(array('text', '/admin/app/category/export')), array(), array()),
        'admin_app_blogpost_list' => array(array(), array('_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction', '_sonata_admin' => 'admin.blog_post', '_sonata_name' => 'admin_app_blogpost_list'), array(), array(array('text', '/admin/app/blogpost/list')), array(), array()),
        'admin_app_blogpost_create' => array(array(), array('_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction', '_sonata_admin' => 'admin.blog_post', '_sonata_name' => 'admin_app_blogpost_create'), array(), array(array('text', '/admin/app/blogpost/create')), array(), array()),
        'admin_app_blogpost_batch' => array(array(), array('_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction', '_sonata_admin' => 'admin.blog_post', '_sonata_name' => 'admin_app_blogpost_batch'), array(), array(array('text', '/admin/app/blogpost/batch')), array(), array()),
        'admin_app_blogpost_edit' => array(array('id'), array('_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction', '_sonata_admin' => 'admin.blog_post', '_sonata_name' => 'admin_app_blogpost_edit'), array(), array(array('text', '/edit'), array('variable', '/', '[^/]++', 'id'), array('text', '/admin/app/blogpost')), array(), array()),
        'admin_app_blogpost_delete' => array(array('id'), array('_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction', '_sonata_admin' => 'admin.blog_post', '_sonata_name' => 'admin_app_blogpost_delete'), array(), array(array('text', '/delete'), array('variable', '/', '[^/]++', 'id'), array('text', '/admin/app/blogpost')), array(), array()),
        'admin_app_blogpost_show' => array(array('id'), array('_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction', '_sonata_admin' => 'admin.blog_post', '_sonata_name' => 'admin_app_blogpost_show'), array(), array(array('text', '/show'), array('variable', '/', '[^/]++', 'id'), array('text', '/admin/app/blogpost')), array(), array()),
        'admin_app_blogpost_export' => array(array(), array('_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction', '_sonata_admin' => 'admin.blog_post', '_sonata_name' => 'admin_app_blogpost_export'), array(), array(array('text', '/admin/app/blogpost/export')), array(), array()),
        'admin_app_classroom_list' => array(array(), array('_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction', '_sonata_admin' => 'admin.classroom', '_sonata_name' => 'admin_app_classroom_list'), array(), array(array('text', '/admin/app/classroom/list')), array(), array()),
        'admin_app_classroom_create' => array(array(), array('_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction', '_sonata_admin' => 'admin.classroom', '_sonata_name' => 'admin_app_classroom_create'), array(), array(array('text', '/admin/app/classroom/create')), array(), array()),
        'admin_app_classroom_batch' => array(array(), array('_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction', '_sonata_admin' => 'admin.classroom', '_sonata_name' => 'admin_app_classroom_batch'), array(), array(array('text', '/admin/app/classroom/batch')), array(), array()),
        'admin_app_classroom_edit' => array(array('id'), array('_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction', '_sonata_admin' => 'admin.classroom', '_sonata_name' => 'admin_app_classroom_edit'), array(), array(array('text', '/edit'), array('variable', '/', '[^/]++', 'id'), array('text', '/admin/app/classroom')), array(), array()),
        'admin_app_classroom_delete' => array(array('id'), array('_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction', '_sonata_admin' => 'admin.classroom', '_sonata_name' => 'admin_app_classroom_delete'), array(), array(array('text', '/delete'), array('variable', '/', '[^/]++', 'id'), array('text', '/admin/app/classroom')), array(), array()),
        'admin_app_classroom_show' => array(array('id'), array('_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction', '_sonata_admin' => 'admin.classroom', '_sonata_name' => 'admin_app_classroom_show'), array(), array(array('text', '/show'), array('variable', '/', '[^/]++', 'id'), array('text', '/admin/app/classroom')), array(), array()),
        'admin_app_classroom_export' => array(array(), array('_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction', '_sonata_admin' => 'admin.classroom', '_sonata_name' => 'admin_app_classroom_export'), array(), array(array('text', '/admin/app/classroom/export')), array(), array()),
        'admin_app_student_list' => array(array(), array('_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction', '_sonata_admin' => 'admin.student', '_sonata_name' => 'admin_app_student_list'), array(), array(array('text', '/admin/app/student/list')), array(), array()),
        'admin_app_student_create' => array(array(), array('_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction', '_sonata_admin' => 'admin.student', '_sonata_name' => 'admin_app_student_create'), array(), array(array('text', '/admin/app/student/create')), array(), array()),
        'admin_app_student_batch' => array(array(), array('_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction', '_sonata_admin' => 'admin.student', '_sonata_name' => 'admin_app_student_batch'), array(), array(array('text', '/admin/app/student/batch')), array(), array()),
        'admin_app_student_edit' => array(array('id'), array('_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction', '_sonata_admin' => 'admin.student', '_sonata_name' => 'admin_app_student_edit'), array(), array(array('text', '/edit'), array('variable', '/', '[^/]++', 'id'), array('text', '/admin/app/student')), array(), array()),
        'admin_app_student_delete' => array(array('id'), array('_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction', '_sonata_admin' => 'admin.student', '_sonata_name' => 'admin_app_student_delete'), array(), array(array('text', '/delete'), array('variable', '/', '[^/]++', 'id'), array('text', '/admin/app/student')), array(), array()),
        'admin_app_student_show' => array(array('id'), array('_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction', '_sonata_admin' => 'admin.student', '_sonata_name' => 'admin_app_student_show'), array(), array(array('text', '/show'), array('variable', '/', '[^/]++', 'id'), array('text', '/admin/app/student')), array(), array()),
        'admin_app_student_export' => array(array(), array('_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction', '_sonata_admin' => 'admin.student', '_sonata_name' => 'admin_app_student_export'), array(), array(array('text', '/admin/app/student/export')), array(), array()),
        '_twig_error_test' => array(array('code', '_format'), array('_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'), array('code' => '\\d+'), array(array('variable', '.', '[^/]++', '_format'), array('variable', '/', '\\d+', 'code'), array('text', '/_error')), array(), array()),
        '_wdt' => array(array('token'), array('_controller' => 'web_profiler.controller.profiler::toolbarAction'), array(), array(array('variable', '/', '[^/]++', 'token'), array('text', '/_wdt')), array(), array()),
        '_profiler_home' => array(array(), array('_controller' => 'web_profiler.controller.profiler::homeAction'), array(), array(array('text', '/_profiler/')), array(), array()),
        '_profiler_search' => array(array(), array('_controller' => 'web_profiler.controller.profiler::searchAction'), array(), array(array('text', '/_profiler/search')), array(), array()),
        '_profiler_search_bar' => array(array(), array('_controller' => 'web_profiler.controller.profiler::searchBarAction'), array(), array(array('text', '/_profiler/search_bar')), array(), array()),
        '_profiler_phpinfo' => array(array(), array('_controller' => 'web_profiler.controller.profiler::phpinfoAction'), array(), array(array('text', '/_profiler/phpinfo')), array(), array()),
        '_profiler_search_results' => array(array('token'), array('_controller' => 'web_profiler.controller.profiler::searchResultsAction'), array(), array(array('text', '/search/results'), array('variable', '/', '[^/]++', 'token'), array('text', '/_profiler')), array(), array()),
        '_profiler_open_file' => array(array(), array('_controller' => 'web_profiler.controller.profiler::openAction'), array(), array(array('text', '/_profiler/open')), array(), array()),
        '_profiler' => array(array('token'), array('_controller' => 'web_profiler.controller.profiler::panelAction'), array(), array(array('variable', '/', '[^/]++', 'token'), array('text', '/_profiler')), array(), array()),
        '_profiler_router' => array(array('token'), array('_controller' => 'web_profiler.controller.router::panelAction'), array(), array(array('text', '/router'), array('variable', '/', '[^/]++', 'token'), array('text', '/_profiler')), array(), array()),
        '_profiler_exception' => array(array('token'), array('_controller' => 'web_profiler.controller.exception::showAction'), array(), array(array('text', '/exception'), array('variable', '/', '[^/]++', 'token'), array('text', '/_profiler')), array(), array()),
        '_profiler_exception_css' => array(array('token'), array('_controller' => 'web_profiler.controller.exception::cssAction'), array(), array(array('text', '/exception.css'), array('variable', '/', '[^/]++', 'token'), array('text', '/_profiler')), array(), array()),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        $locale = $parameters['_locale']
            ?? $this->context->getParameter('_locale')
            ?: $this->defaultLocale;

        if (null !== $locale && (self::$declaredRoutes[$name.'.'.$locale][1]['_canonical_route'] ?? null) === $name) {
            unset($parameters['_locale']);
            $name .= '.'.$locale;
        } elseif (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
