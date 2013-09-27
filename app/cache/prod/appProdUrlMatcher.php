<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);

        $host = $this->context->getHost();

        if (preg_match('#^admin\\.deliveryclub\\.cz$#s', $host, $hostMatches)) {
            // dc_admin_homepage
            if (rtrim($pathinfo, '/') === '') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'dc_admin_homepage');
                }

                return array (  '_controller' => 'DC\\AdminBundle\\Controller\\DefaultController::indexAction',  '_route' => 'dc_admin_homepage',);
            }

            if (0 === strpos($pathinfo, '/user')) {
                // dc_admin_manage_users
                if (0 === strpos($pathinfo, '/users') && preg_match('#^/users(?:/(?P<search>[^/]++)(?:/(?P<page>[^/]++))?)?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'dc_admin_manage_users')), array (  '_controller' => 'DC\\AdminBundle\\Controller\\UserController::listAction',  'search' => '-1',  'page' => '0',));
                }

                // dc_admin_edit_users
                if (preg_match('#^/user(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'dc_admin_edit_users')), array (  '_controller' => 'DC\\AdminBundle\\Controller\\UserController::editAction',  'id' => '-1',));
                }

            }

            // dc_admin_bann_users
            if (0 === strpos($pathinfo, '/bannhammer/user') && preg_match('#^/bannhammer/user/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'dc_admin_bann_users')), array (  '_controller' => 'DC\\AdminBundle\\Controller\\UserController::bannAction',));
            }

            // dc_admin_manage_restaurants
            if (0 === strpos($pathinfo, '/restaurants') && preg_match('#^/restaurants(?:/(?P<search>[^/]++)(?:/(?P<page>[^/]++))?)?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'dc_admin_manage_restaurants')), array (  '_controller' => 'DC\\AdminBundle\\Controller\\RestaurantController::listAction',  'search' => '-1',  'page' => '0',));
            }

            if (0 === strpos($pathinfo, '/moderate')) {
                // dc_admin_moderate_restaurant
                if (0 === strpos($pathinfo, '/moderate/restaurants') && preg_match('#^/moderate/restaurants(?:/(?P<id>[^/]++)(?:/(?P<page>[^/]++))?)?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'dc_admin_moderate_restaurant')), array (  '_controller' => 'DC\\AdminBundle\\Controller\\RestaurantController::listAction',  'id' => '-1',  'page' => '0',));
                }

                // dc_admin_manage_orders
                if (0 === strpos($pathinfo, '/moderate/orders') && preg_match('#^/moderate/orders(?:/(?P<search>[^/]++)(?:/(?P<page>[^/]++))?)?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'dc_admin_manage_orders')), array (  '_controller' => 'DC\\AdminBundle\\Controller\\OrderController::listAction',  'search' => '-1',  'page' => '0',));
                }

            }

        }

        if (preg_match('#^lcab\\.deliveryclub\\.cz$#s', $host, $hostMatches)) {
            // dc_managerer_homepage
            if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'dc_managerer_homepage')), array (  '_controller' => 'DC\\ManagererBundle\\Controller\\DefaultController::indexAction',));
            }

        }

        if (preg_match('#^www\\.deliveryclub\\.cz$#s', $host, $hostMatches)) {
            // dc_showcase_homepage
            if (rtrim($pathinfo, '/') === '') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'dc_showcase_homepage');
                }

                return array (  '_controller' => 'DC\\ShowcaseBundle\\Controller\\DefaultController::indexAction',  '_locale' => 'cs',  'name' => 'test',  '_route' => 'dc_showcase_homepage',);
            }

            // dc_showcase_homepage_lang
            if (preg_match('#^/(?P<_locale>cs|ru|en)/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'dc_showcase_homepage_lang')), array (  '_controller' => 'DC\\ShowcaseBundle\\Controller\\DefaultController::indexAction',  '_locale' => 'en',));
            }

            // dc_set_locale
            if (0 === strpos($pathinfo, '/set_locale') && preg_match('#^/set_locale/(?P<_locale>cs|ru|en)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'dc_set_locale')), array (  '_controller' => 'DC\\ShowcaseBundle\\Controller\\DefaultController::setLocaleAction',));
            }

            if (0 === strpos($pathinfo, '/login')) {
                // login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'DC\\ShowcaseBundle\\Controller\\AuthController::loginAction',  '_route' => 'login',);
                }

                // login_check
                if ($pathinfo === '/login_check') {
                    return array('_route' => 'login_check');
                }

            }

            // basket
            if ($pathinfo === '/basket') {
                return array (  '_controller' => 'DCShowcaseBundle:Basket:index',  '_route' => 'basket',);
            }

            if (0 === strpos($pathinfo, '/restaurant')) {
                // restaurant
                if (preg_match('#^/restaurant/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'restaurant')), array (  '_controller' => 'DCShowcaseBundle:Restaurant:index',));
                }

                // restaurant_menu
                if (preg_match('#^/restaurant/(?P<name>[^/]++)/menu/(?P<menu>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'restaurant_menu')), array (  '_controller' => 'DCShowcaseBundle:Restaurant:menu',));
                }

                // restaurant_category
                if (preg_match('#^/restaurant/(?P<name>[^/]++)/category/(?P<category>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'restaurant_category')), array (  '_controller' => 'DCShowcaseBundle:Restaurant:category',));
                }

            }

            if (0 === strpos($pathinfo, '/category')) {
                // global_category_root
                if ($pathinfo === '/category') {
                    return array (  '_controller' => 'DCShowcaseBundle:Restaurant:list',  'category' => '-1',  '_route' => 'global_category_root',);
                }

                // global_category
                if (preg_match('#^/category/(?P<category>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'global_category')), array (  '_controller' => 'DCShowcaseBundle:Restaurant:list',));
                }

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
