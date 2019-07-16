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
            '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
            '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
            '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
            '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
            '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
            '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\PostController::home'], null, null, null, false, false, null]],
            '/creatPost' => [[['_route' => 'creatPost', '_controller' => 'App\\Controller\\PostController::creatPost'], null, null, null, false, false, null]],
            '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
            '/logout' => [[['_route' => 'logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
            '/forgot' => [[['_route' => 'forgot', '_controller' => 'App\\Controller\\SecurityController::forgot'], null, null, null, false, false, null]],
            '/register' => [[['_route' => 'register', '_controller' => 'App\\Controller\\UserController::register'], null, null, null, false, false, null]],
            '/profil' => [[['_route' => 'profil', '_controller' => 'App\\Controller\\UserController::profil'], null, null, null, false, false, null]],
        ];
        $this->regexpList = [
            0 => '{^(?'
                    .'|/_(?'
                        .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                        .'|wdt/([^/]++)(*:57)'
                        .'|profiler/([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:102)'
                                .'|router(*:116)'
                                .'|exception(?'
                                    .'|(*:136)'
                                    .'|\\.css(*:149)'
                                .')'
                            .')'
                            .'|(*:159)'
                        .')'
                    .')'
                    .'|/update(?'
                        .'|Img/([^/]++)(*:191)'
                        .'|Post/([^/]++)(*:212)'
                        .'|vid/([^/]++)(*:232)'
                    .')'
                    .'|/delete(?'
                        .'|Img(?'
                            .'|/([^/]++)(*:266)'
                            .'|Post/([^/]++)(*:287)'
                        .')'
                        .'|Post/([^/]++)(*:309)'
                        .'|User/([^/]++)(*:330)'
                        .'|Vid/([^/]++)(*:350)'
                    .')'
                    .'|/p(?'
                        .'|ost/([^/]++)(*:376)'
                        .'|assword/([^/]++)(*:400)'
                    .')'
                    .'|/UpdatePassword/([^/]++)(*:433)'
                    .'|/ConfirmMailRegister/([^/]++)(*:470)'
                .')/?$}sDu',
        ];
        $this->dynamicRoutes = [
            38 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
            57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
            102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
            116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
            136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'], ['token'], null, null, false, false, null]],
            149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'], ['token'], null, null, false, false, null]],
            159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
            191 => [[['_route' => 'updateImg', '_controller' => 'App\\Controller\\FigureController::updateImg'], ['id'], null, null, false, true, null]],
            212 => [[['_route' => 'updatePost', '_controller' => 'App\\Controller\\PostController::updatePost'], ['id'], null, null, false, true, null]],
            232 => [[['_route' => 'updateVideo', '_controller' => 'App\\Controller\\VideoController::updateVideo'], ['id'], null, null, false, true, null]],
            266 => [[['_route' => 'deleteImg', '_controller' => 'App\\Controller\\FigureController::deleteImg'], ['id'], null, null, false, true, null]],
            287 => [[['_route' => 'deleteImgPost', '_controller' => 'App\\Controller\\PostController::deleteImgPost'], ['id'], null, null, false, true, null]],
            309 => [[['_route' => 'deletePost', '_controller' => 'App\\Controller\\PostController::deletePost'], ['id'], null, null, false, true, null]],
            330 => [[['_route' => 'deleteUser', '_controller' => 'App\\Controller\\UserController::deleteUser'], ['id'], null, null, false, true, null]],
            350 => [[['_route' => 'deleteVid', '_controller' => 'App\\Controller\\VideoController::deleteVid'], ['id'], null, null, false, true, null]],
            376 => [[['_route' => 'post', '_controller' => 'App\\Controller\\PostController::post'], ['id'], null, null, false, true, null]],
            400 => [[['_route' => 'password', '_controller' => 'App\\Controller\\UserController::password'], ['id'], null, null, false, true, null]],
            433 => [[['_route' => 'updatePass', '_controller' => 'App\\Controller\\SecurityController::updatePass'], ['token'], null, null, false, true, null]],
            470 => [[['_route' => 'ConfirmMailRegister', '_controller' => 'App\\Controller\\UserController::ConfirmMailRegister'], ['token'], null, null, false, true, null]],
        ];
    }
}
