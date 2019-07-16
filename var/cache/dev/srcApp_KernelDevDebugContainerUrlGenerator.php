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
        '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], []],
        '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
        '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
        '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
        '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
        '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
        '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
        '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
        '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
        '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception::showAction'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
        '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception::cssAction'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
        'updateImg' => [['id'], ['_controller' => 'App\\Controller\\FigureController::updateImg'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/updateImg']], [], []],
        'deleteImg' => [['id'], ['_controller' => 'App\\Controller\\FigureController::deleteImg'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/deleteImg']], [], []],
        'home' => [[], ['_controller' => 'App\\Controller\\PostController::home'], [], [['text', '/']], [], []],
        'post' => [['id'], ['_controller' => 'App\\Controller\\PostController::post'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/post']], [], []],
        'updatePost' => [['id'], ['_controller' => 'App\\Controller\\PostController::updatePost'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/updatePost']], [], []],
        'creatPost' => [[], ['_controller' => 'App\\Controller\\PostController::creatPost'], [], [['text', '/creatPost']], [], []],
        'deletePost' => [['id'], ['_controller' => 'App\\Controller\\PostController::deletePost'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/deletePost']], [], []],
        'deleteImgPost' => [['id'], ['_controller' => 'App\\Controller\\PostController::deleteImgPost'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/deleteImgPost']], [], []],
        'login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], []],
        'logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], []],
        'forgot' => [[], ['_controller' => 'App\\Controller\\SecurityController::forgot'], [], [['text', '/forgot']], [], []],
        'updatePass' => [['token'], ['_controller' => 'App\\Controller\\SecurityController::updatePass'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/UpdatePassword']], [], []],
        'register' => [[], ['_controller' => 'App\\Controller\\UserController::register'], [], [['text', '/register']], [], []],
        'profil' => [[], ['_controller' => 'App\\Controller\\UserController::profil'], [], [['text', '/profil']], [], []],
        'deleteUser' => [['id'], ['_controller' => 'App\\Controller\\UserController::deleteUser'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/deleteUser']], [], []],
        'password' => [['id'], ['_controller' => 'App\\Controller\\UserController::password'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/password']], [], []],
        'ConfirmMailRegister' => [['token'], ['_controller' => 'App\\Controller\\UserController::ConfirmMailRegister'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/ConfirmMailRegister']], [], []],
        'updateVideo' => [['id'], ['_controller' => 'App\\Controller\\VideoController::updateVideo'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/updatevid']], [], []],
        'deleteVid' => [['id'], ['_controller' => 'App\\Controller\\VideoController::deleteVid'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/deleteVid']], [], []],
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
