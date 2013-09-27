<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appDevUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRoutes = array(
        '_wdt' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:toolbarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_wdt',    ),  ),  4 =>   array (  ),),
        '_profiler_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/',    ),  ),  4 =>   array (  ),),
        '_profiler_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search',    ),  ),  4 =>   array (  ),),
        '_profiler_search_bar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchBarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search_bar',    ),  ),  4 =>   array (  ),),
        '_profiler_purge' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:purgeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/purge',    ),  ),  4 =>   array (  ),),
        '_profiler_info' => array (  0 =>   array (    0 => 'about',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:infoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'about',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler/info',    ),  ),  4 =>   array (  ),),
        '_profiler_import' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:importAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/import',    ),  ),  4 =>   array (  ),),
        '_profiler_export' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:exportAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '.txt',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/\\.]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler/export',    ),  ),  4 =>   array (  ),),
        '_profiler_phpinfo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/phpinfo',    ),  ),  4 =>   array (  ),),
        '_profiler_search_results' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchResultsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search/results',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),),
        '_profiler' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),),
        '_profiler_router' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.router:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/router',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),),
        '_profiler_exception' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),),
        '_profiler_exception_css' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:cssAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception.css',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),),
        '_configurator_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_configurator/',    ),  ),  4 =>   array (  ),),
        '_configurator_step' => array (  0 =>   array (    0 => 'index',  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'index',    ),    1 =>     array (      0 => 'text',      1 => '/_configurator/step',    ),  ),  4 =>   array (  ),),
        '_configurator_final' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_configurator/final',    ),  ),  4 =>   array (  ),),
        'dc_admin_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'DC\\AdminBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (    0 =>     array (      0 => 'text',      1 => 'admin.deliveryclub.cz',    ),  ),),
        'dc_admin_manage_users' => array (  0 =>   array (    0 => 'search',    1 => 'page',  ),  1 =>   array (    '_controller' => 'DC\\AdminBundle\\Controller\\UserController::listAction',    'search' => '-1',    'page' => '0',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'page',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'search',    ),    2 =>     array (      0 => 'text',      1 => '/users',    ),  ),  4 =>   array (    0 =>     array (      0 => 'text',      1 => 'admin.deliveryclub.cz',    ),  ),),
        'dc_admin_edit_users' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'DC\\AdminBundle\\Controller\\UserController::editAction',    'id' => '-1',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/user',    ),  ),  4 =>   array (    0 =>     array (      0 => 'text',      1 => 'admin.deliveryclub.cz',    ),  ),),
        'dc_admin_bann_users' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'DC\\AdminBundle\\Controller\\UserController::bannAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/bannhammer/user',    ),  ),  4 =>   array (    0 =>     array (      0 => 'text',      1 => 'admin.deliveryclub.cz',    ),  ),),
        'dc_admin_manage_restaurants' => array (  0 =>   array (    0 => 'search',    1 => 'page',  ),  1 =>   array (    '_controller' => 'DC\\AdminBundle\\Controller\\RestaurantController::listAction',    'search' => '-1',    'page' => '0',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'page',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'search',    ),    2 =>     array (      0 => 'text',      1 => '/restaurants',    ),  ),  4 =>   array (    0 =>     array (      0 => 'text',      1 => 'admin.deliveryclub.cz',    ),  ),),
        'dc_admin_moderate_restaurant' => array (  0 =>   array (    0 => 'id',    1 => 'page',  ),  1 =>   array (    '_controller' => 'DC\\AdminBundle\\Controller\\RestaurantController::listAction',    'id' => '-1',    'page' => '0',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'page',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/moderate/restaurants',    ),  ),  4 =>   array (    0 =>     array (      0 => 'text',      1 => 'admin.deliveryclub.cz',    ),  ),),
        'dc_admin_manage_orders' => array (  0 =>   array (    0 => 'search',    1 => 'page',  ),  1 =>   array (    '_controller' => 'DC\\AdminBundle\\Controller\\OrderController::listAction',    'search' => '-1',    'page' => '0',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'page',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'search',    ),    2 =>     array (      0 => 'text',      1 => '/moderate/orders',    ),  ),  4 =>   array (    0 =>     array (      0 => 'text',      1 => 'admin.deliveryclub.cz',    ),  ),),
        'dc_managerer_homepage' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'DC\\ManagererBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/hello',    ),  ),  4 =>   array (    0 =>     array (      0 => 'text',      1 => 'lcab.deliveryclub.cz',    ),  ),),
        'dc_showcase_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'DC\\ShowcaseBundle\\Controller\\DefaultController::indexAction',    '_locale' => 'cs',    'name' => 'test',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (    0 =>     array (      0 => 'text',      1 => 'www.deliveryclub.cz',    ),  ),),
        'dc_showcase_homepage_lang' => array (  0 =>   array (    0 => '_locale',    1 => 'name',  ),  1 =>   array (    '_controller' => 'DC\\ShowcaseBundle\\Controller\\DefaultController::indexAction',    '_locale' => 'en',  ),  2 =>   array (    '_locale' => 'cs|ru|en',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => 'cs|ru|en',      3 => '_locale',    ),  ),  4 =>   array (    0 =>     array (      0 => 'text',      1 => 'www.deliveryclub.cz',    ),  ),),
        'dc_set_locale' => array (  0 =>   array (    0 => '_locale',  ),  1 =>   array (    '_controller' => 'DC\\ShowcaseBundle\\Controller\\DefaultController::setLocaleAction',  ),  2 =>   array (    '_locale' => 'cs|ru|en',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => 'cs|ru|en',      3 => '_locale',    ),    1 =>     array (      0 => 'text',      1 => '/set_locale',    ),  ),  4 =>   array (    0 =>     array (      0 => 'text',      1 => 'www.deliveryclub.cz',    ),  ),),
        'login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'DC\\ShowcaseBundle\\Controller\\AuthController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (    0 =>     array (      0 => 'text',      1 => 'www.deliveryclub.cz',    ),  ),),
        'login_check' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login_check',    ),  ),  4 =>   array (    0 =>     array (      0 => 'text',      1 => 'www.deliveryclub.cz',    ),  ),),
        'basket' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'DCShowcaseBundle:Basket:index',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/basket',    ),  ),  4 =>   array (    0 =>     array (      0 => 'text',      1 => 'www.deliveryclub.cz',    ),  ),),
        'restaurant' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'DCShowcaseBundle:Restaurant:index',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/restaurant',    ),  ),  4 =>   array (    0 =>     array (      0 => 'text',      1 => 'www.deliveryclub.cz',    ),  ),),
        'restaurant_menu' => array (  0 =>   array (    0 => 'name',    1 => 'menu',  ),  1 =>   array (    '_controller' => 'DCShowcaseBundle:Restaurant:menu',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'menu',    ),    1 =>     array (      0 => 'text',      1 => '/menu',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    3 =>     array (      0 => 'text',      1 => '/restaurant',    ),  ),  4 =>   array (    0 =>     array (      0 => 'text',      1 => 'www.deliveryclub.cz',    ),  ),),
        'restaurant_category' => array (  0 =>   array (    0 => 'name',    1 => 'category',  ),  1 =>   array (    '_controller' => 'DCShowcaseBundle:Restaurant:category',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'category',    ),    1 =>     array (      0 => 'text',      1 => '/category',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    3 =>     array (      0 => 'text',      1 => '/restaurant',    ),  ),  4 =>   array (    0 =>     array (      0 => 'text',      1 => 'www.deliveryclub.cz',    ),  ),),
        'global_category_root' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'DCShowcaseBundle:Restaurant:list',    'category' => '-1',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/category',    ),  ),  4 =>   array (    0 =>     array (      0 => 'text',      1 => 'www.deliveryclub.cz',    ),  ),),
        'global_category' => array (  0 =>   array (    0 => 'category',  ),  1 =>   array (    '_controller' => 'DCShowcaseBundle:Restaurant:list',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'category',    ),    1 =>     array (      0 => 'text',      1 => '/category',    ),  ),  4 =>   array (    0 =>     array (      0 => 'text',      1 => 'www.deliveryclub.cz',    ),  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens);
    }
}
