<?php

use Symfony\Component\Routing\Matcher\Dumper\PhpMatcherTrait;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelDevDebugContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    use PhpMatcherTrait;

    public function __construct(RequestContext $context)
    {
        $this->context = $context;
        $this->staticRoutes = [
            '/incidente/list' => [
                [['_route' => 'incidente_list', '_controller' => 'App\\Controller\\IncidenteController::list'], null, ['GET' => 0, 'HEAD' => 1], null, false, false, null],
                [['_route' => 'incidenteList', '_controller' => 'App\\Controller\\IncidenteController:list'], null, null, null, false, false, null],
            ],
            '/incidente/show/{$id}' => [[['_route' => 'incidente_show', '_controller' => 'App\\Controller\\IncidenteController::show'], null, null, null, false, false, null]],
            '/incidente' => [
                [['_route' => 'app_incidente_update', '_controller' => 'App\\Controller\\IncidenteController::update'], null, ['POST' => 0, 'HEAD' => 1], null, false, false, null],
                [['_route' => 'incidenteAlter', '_controller' => 'App\\Controller\\IncidenteController:update'], null, null, null, false, false, null],
            ],
            '/incidente/delete' => [
                [['_route' => 'incidente_delete', '_controller' => 'App\\Controller\\IncidenteController::delete'], null, ['POST' => 0, 'HEAD' => 1], null, true, false, null],
                [['_route' => 'incidenteDelete', '_controller' => 'App\\Controller\\IncidenteController:delete'], null, null, null, false, false, null],
            ],
            '/' => [[['_route' => 'index', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        ];
        $this->regexpList = [
            0 => '{^(?'
                    .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                    .'|/incidente/show/([^/]++)(*:66)'
                .')/?$}sDu',
        ];
        $this->dynamicRoutes = [
            35 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
            66 => [[['_route' => 'incidenteShow', '_controller' => 'App\\Controller\\IncidenteController:show'], ['id'], null, null, false, true, null]],
        ];
    }
}
