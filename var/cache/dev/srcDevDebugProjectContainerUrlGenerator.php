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
        'account' => array(array(), array('_controller' => 'App\\Controller\\AccountController::index'), array(), array(array('text', '/account')), array(), array()),
        'ceaccount_list' => array(array(), array('_controller' => 'App\\Controller\\AccountController::accountList'), array(), array(array('text', '/account/list')), array(), array()),
        'ceaccount_credits' => array(array('id'), array('_controller' => 'App\\Controller\\AccountController::accountCredits'), array(), array(array('text', '/credits'), array('variable', '/', '[^/]++', 'id'), array('text', '/account')), array(), array()),
        'ceaccount_debits' => array(array('id'), array('_controller' => 'App\\Controller\\AccountController::accountDebits'), array(), array(array('text', '/debits'), array('variable', '/', '[^/]++', 'id'), array('text', '/account')), array(), array()),
        'ceaccount_new' => array(array(), array('_controller' => 'App\\Controller\\AccountController::ceAccountForm'), array(), array(array('text', '/account/new')), array(), array()),
        'ceaccount_edit' => array(array('id'), array('_controller' => 'App\\Controller\\AccountController::ceAccountForm'), array(), array(array('text', '/edit'), array('variable', '/', '[^/]++', 'id'), array('text', '/account')), array(), array()),
        'ceaccount_receive' => array(array('id'), array('_controller' => 'App\\Controller\\AccountController::accountReceive'), array(), array(array('text', '/receive'), array('variable', '/', '[^/]++', 'id'), array('text', '/account')), array(), array()),
        'ceaccount_transfer' => array(array('id'), array('_controller' => 'App\\Controller\\AccountController::accountTransfer'), array(), array(array('text', '/transfer'), array('variable', '/', '[^/]++', 'id'), array('text', '/account')), array(), array()),
        'ceaccount_deposit' => array(array('id'), array('_controller' => 'App\\Controller\\AccountController::accountDeposit'), array(), array(array('text', '/deposit'), array('variable', '/', '[^/]++', 'id'), array('text', '/account')), array(), array()),
        'ceaccount_buy' => array(array('id'), array('_controller' => 'App\\Controller\\AccountController::accountBuy'), array(), array(array('text', '/buy'), array('variable', '/', '[^/]++', 'id'), array('text', '/account')), array(), array()),
        'ceaccount_show' => array(array('id'), array('_controller' => 'App\\Controller\\AccountController::showOrder'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/account')), array(), array()),
        'ceorder_single' => array(array(), array('_controller' => 'App\\Controller\\CeorderController::index'), array(), array(array('text', '/order')), array(), array()),
        'ceorder_list' => array(array(), array('_controller' => 'App\\Controller\\CeorderController::orderList'), array(), array(array('text', '/orders/list')), array(), array()),
        'ceorders_new' => array(array(), array('_controller' => 'App\\Controller\\CeorderController::ordersNew'), array(), array(array('text', '/orders/new')), array(), array()),
        'ceorder_abandon' => array(array('id'), array('_controller' => 'App\\Controller\\CeorderController::abandonOrder'), array(), array(array('text', '/abandon'), array('variable', '/', '[^/]++', 'id'), array('text', '/order')), array(), array()),
        'ceorder_reopen' => array(array('id'), array('_controller' => 'App\\Controller\\CeorderController::reopenOrder'), array(), array(array('text', '/reopen'), array('variable', '/', '[^/]++', 'id'), array('text', '/order')), array(), array()),
        'ceorder_complete' => array(array('id'), array('_controller' => 'App\\Controller\\CeorderController::completeOrder'), array(), array(array('text', '/complete'), array('variable', '/', '[^/]++', 'id'), array('text', '/order')), array(), array()),
        'ceorder_delete' => array(array('id'), array('_controller' => 'App\\Controller\\CeorderController::deleteOrder'), array(), array(array('text', '/delete'), array('variable', '/', '[^/]++', 'id'), array('text', '/order')), array(), array()),
        'ceorder_new' => array(array(), array('_controller' => 'App\\Controller\\CeorderController::ceorderForm'), array(), array(array('text', '/order/new')), array(), array()),
        'ceorder_edit' => array(array('id'), array('_controller' => 'App\\Controller\\CeorderController::ceorderForm'), array(), array(array('text', '/edit'), array('variable', '/', '[^/]++', 'id'), array('text', '/order')), array(), array()),
        'ceorder_show' => array(array('id'), array('_controller' => 'App\\Controller\\CeorderController::showOrder'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/order')), array(), array()),
        'customer' => array(array(), array('_controller' => 'App\\Controller\\CustomerController::index'), array(), array(array('text', '/customer')), array(), array()),
        'customer_new' => array(array(), array('_controller' => 'App\\Controller\\CustomerController::customerForm'), array(), array(array('text', '/customer/new')), array(), array()),
        'customer_edit' => array(array('id'), array('_controller' => 'App\\Controller\\CustomerController::customerForm'), array(), array(array('text', '/edit'), array('variable', '/', '[^/]++', 'id'), array('text', '/customer')), array(), array()),
        'dashboard' => array(array(), array('_controller' => 'App\\Controller\\DashboardController::index'), array(), array(array('text', '/dashboard')), array(), array()),
        'admin' => array(array(), array('_controller' => 'App\\Controller\\DashboardController::index'), array(), array(array('text', '/admin')), array(), array()),
        'home' => array(array(), array('_controller' => 'App\\Controller\\DashboardController::index'), array(), array(array('text', '/')), array(), array()),
        'cesecurity_signup' => array(array(), array('_controller' => 'App\\Controller\\SecurityController::registrations'), array(), array(array('text', '/signup')), array(), array()),
        'cesecurity_signin' => array(array(), array('_controller' => 'App\\Controller\\SecurityController::ceSignIn'), array(), array(array('text', '/signin')), array(), array()),
        'cesecurity_signout' => array(array(), array('_controller' => 'App\\Controller\\SecurityController::ceSignOut'), array(), array(array('text', '/signout')), array(), array()),
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
