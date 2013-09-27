<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRoutes = array(
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