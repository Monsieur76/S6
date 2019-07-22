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
            '/' => [[['_route' => 'index', '_controller' => 'App\\Controller\\FigureController::index'], null, null, null, false, false, null]],
            '/creatFigure' => [[['_route' => 'creatFigure', '_controller' => 'App\\Controller\\FigureController::creatFigure'], null, null, null, false, false, null]],
            '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
            '/logout' => [[['_route' => 'logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
            '/forgot' => [[['_route' => 'forgot', '_controller' => 'App\\Controller\\SecurityController::forgot'], null, null, null, false, false, null]],
            '/register' => [[['_route' => 'register', '_controller' => 'App\\Controller\\UserController::register'], null, null, null, false, false, null]],
            '/profile' => [[['_route' => 'profile', '_controller' => 'App\\Controller\\UserController::profile'], null, null, null, false, false, null]],
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
                    .'|/figure/([^/]++)(*:185)'
                    .'|/update(?'
                        .'|Figure/([^/]++)(*:218)'
                        .'|Img/([^/]++)(*:238)'
                        .'|vid/([^/]++)(*:258)'
                    .')'
                    .'|/delete(?'
                        .'|Figure/([^/]++)(*:292)'
                        .'|Img(?'
                            .'|Figure/([^/]++)(*:321)'
                            .'|/([^/]++)(*:338)'
                        .')'
                        .'|User/([^/]++)(*:360)'
                        .'|Vid/([^/]++)(*:380)'
                    .')'
                    .'|/UpdatePassword/([^/]++)(*:413)'
                    .'|/password/([^/]++)(*:439)'
                    .'|/ConfirmMailRegister/([^/]++)(*:476)'
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
            185 => [[['_route' => 'figure', '_controller' => 'App\\Controller\\FigureController::figure'], ['id'], null, null, false, true, null]],
            218 => [[['_route' => 'updateFigure', '_controller' => 'App\\Controller\\FigureController::updateFigure'], ['id'], null, null, false, true, null]],
            238 => [[['_route' => 'updateImg', '_controller' => 'App\\Controller\\ImgController::updateImg'], ['id'], null, null, false, true, null]],
            258 => [[['_route' => 'updateVideo', '_controller' => 'App\\Controller\\VideoController::updateVideo'], ['id'], null, null, false, true, null]],
            292 => [[['_route' => 'deleteFigure', '_controller' => 'App\\Controller\\FigureController::deleteFigure'], ['id'], null, null, false, true, null]],
            321 => [[['_route' => 'deleteImgFigure', '_controller' => 'App\\Controller\\FigureController::deleteImgFigure'], ['id'], null, null, false, true, null]],
            338 => [[['_route' => 'deleteImg', '_controller' => 'App\\Controller\\ImgController::deleteImg'], ['id'], null, null, false, true, null]],
            360 => [[['_route' => 'deleteUser', '_controller' => 'App\\Controller\\UserController::deleteUser'], ['id'], null, null, false, true, null]],
            380 => [[['_route' => 'deleteVid', '_controller' => 'App\\Controller\\VideoController::deleteVid'], ['id'], null, null, false, true, null]],
            413 => [[['_route' => 'updatePass', '_controller' => 'App\\Controller\\SecurityController::updatePass'], ['token'], null, null, false, true, null]],
            439 => [[['_route' => 'password', '_controller' => 'App\\Controller\\UserController::password'], ['id'], null, null, false, true, null]],
            476 => [[['_route' => 'ConfirmMailRegister', '_controller' => 'App\\Controller\\UserController::ConfirmMailRegister'], ['token'], null, null, false, true, null]],
        ];
    }
}
