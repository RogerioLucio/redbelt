<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelDevDebugContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;
    private $defaultLocale;

    public function __construct(RequestContext $context, LoggerInterface $logger = null, string $defaultLocale = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        $this->defaultLocale = $defaultLocale;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = [
        '_twig_error_test' => [['code', '_format'], ['_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
        'incidente_list' => [[], ['_controller' => 'App\\Controller\\IncidenteController::list'], [], [['text', '/incidente/list']], [], []],
        'incidente_show' => [[], ['_controller' => 'App\\Controller\\IncidenteController::show'], [], [['text', '/incidente/show/{$id}']], [], []],
        'app_incidente_update' => [[], ['_controller' => 'App\\Controller\\IncidenteController::update'], [], [['text', '/incidente']], [], []],
        'incidente_delete' => [[], ['_controller' => 'App\\Controller\\IncidenteController::delete'], [], [['text', '/incidente/delete']], [], []],
        'index' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], ['_method' => 'GET'], [['text', '/']], [], []],
        'incidenteList' => [[], ['_controller' => 'App\\Controller\\IncidenteController:list'], ['_method' => 'GET'], [['text', '/incidente/list']], [], []],
        'incidenteShow' => [['id'], ['_controller' => 'App\\Controller\\IncidenteController:show'], ['_method' => 'GET'], [['variable', '/', '[^/]++', 'id', true], ['text', '/incidente/show']], [], []],
        'incidenteAlter' => [[], ['_controller' => 'App\\Controller\\IncidenteController:update'], ['_method' => 'POST'], [['text', '/incidente']], [], []],
    ];
        }
    }

    public function generate($name, $parameters = [], $referenceType = self::ABSOLUTE_PATH)
    {
        $locale = $parameters['_locale']
            ?? $this->context->getParameter('_locale')
            ?: $this->defaultLocale;

        if (null !== $locale && null !== $name) {
            do {
                if ((self::$declaredRoutes[$name.'.'.$locale][1]['_canonical_route'] ?? null) === $name) {
                    unset($parameters['_locale']);
                    $name .= '.'.$locale;
                    break;
                }
            } while (false !== $locale = strstr($locale, '_', true));
        }

        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
