<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = $allowSchemes = array();
        if ($ret = $this->doMatch($pathinfo, $allow, $allowSchemes)) {
            return $ret;
        }
        if ($allow) {
            throw new MethodNotAllowedException(array_keys($allow));
        }
        if (!in_array($this->context->getMethod(), array('HEAD', 'GET'), true)) {
            // no-op
        } elseif ($allowSchemes) {
            redirect_scheme:
            $scheme = $this->context->getScheme();
            $this->context->setScheme(key($allowSchemes));
            try {
                if ($ret = $this->doMatch($pathinfo)) {
                    return $this->redirect($pathinfo, $ret['_route'], $this->context->getScheme()) + $ret;
                }
            } finally {
                $this->context->setScheme($scheme);
            }
        } elseif ('/' !== $pathinfo) {
            $pathinfo = '/' !== $pathinfo[-1] ? $pathinfo.'/' : substr($pathinfo, 0, -1);
            if ($ret = $this->doMatch($pathinfo, $allow, $allowSchemes)) {
                return $this->redirect($pathinfo, $ret['_route']) + $ret;
            }
            if ($allowSchemes) {
                goto redirect_scheme;
            }
        }

        throw new ResourceNotFoundException();
    }

    private function doMatch(string $rawPathinfo, array &$allow = array(), array &$allowSchemes = array()): ?array
    {
        $allow = $allowSchemes = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $context = $this->context;
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        switch ($pathinfo) {
            default:
                $routes = array(
                    '/account' => array(array('_route' => 'account', '_controller' => 'App\\Controller\\AccountController::index'), null, null, null),
                    '/account/list' => array(array('_route' => 'ceaccount_list', '_controller' => 'App\\Controller\\AccountController::accountList'), null, null, null),
                    '/account/new' => array(array('_route' => 'ceaccount_new', '_controller' => 'App\\Controller\\AccountController::ceAccountForm'), null, null, null),
                    '/order' => array(array('_route' => 'ceorder_single', '_controller' => 'App\\Controller\\CeorderController::index'), null, null, null),
                    '/orders/list' => array(array('_route' => 'ceorder_list', '_controller' => 'App\\Controller\\CeorderController::orderList'), null, null, null),
                    '/orders/new' => array(array('_route' => 'ceorders_new', '_controller' => 'App\\Controller\\CeorderController::ordersNew'), null, null, null),
                    '/order/new' => array(array('_route' => 'ceorder_new', '_controller' => 'App\\Controller\\CeorderController::ceorderForm'), null, null, null),
                    '/customer' => array(array('_route' => 'customer', '_controller' => 'App\\Controller\\CustomerController::index'), null, null, null),
                    '/customer/new' => array(array('_route' => 'customer_new', '_controller' => 'App\\Controller\\CustomerController::customerForm'), null, null, null),
                    '/dashboard' => array(array('_route' => 'dashboard', '_controller' => 'App\\Controller\\DashboardController::index'), null, null, null),
                    '/admin' => array(array('_route' => 'admin', '_controller' => 'App\\Controller\\DashboardController::index'), null, null, null),
                    '/' => array(array('_route' => 'home', '_controller' => 'App\\Controller\\DashboardController::index'), null, null, null),
                    '/signup' => array(array('_route' => 'cesecurity_signup', '_controller' => 'App\\Controller\\SecurityController::registrations'), null, null, null),
                    '/signin' => array(array('_route' => 'cesecurity_signin', '_controller' => 'App\\Controller\\SecurityController::ceSignIn'), null, null, null),
                    '/signout' => array(array('_route' => 'cesecurity_signout', '_controller' => 'App\\Controller\\SecurityController::ceSignOut'), null, null, null),
                    '/_profiler/' => array(array('_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'), null, null, null),
                    '/_profiler/search' => array(array('_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'), null, null, null),
                    '/_profiler/search_bar' => array(array('_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'), null, null, null),
                    '/_profiler/phpinfo' => array(array('_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'), null, null, null),
                    '/_profiler/open' => array(array('_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'), null, null, null),
                );
    
                if (!isset($routes[$pathinfo])) {
                    break;
                }
                list($ret, $requiredHost, $requiredMethods, $requiredSchemes) = $routes[$pathinfo];
    
                $hasRequiredScheme = !$requiredSchemes || isset($requiredSchemes[$context->getScheme()]);
                if ($requiredMethods && !isset($requiredMethods[$canonicalMethod]) && !isset($requiredMethods[$requestMethod])) {
                    if ($hasRequiredScheme) {
                        $allow += $requiredMethods;
                    }
                    break;
                }
                if (!$hasRequiredScheme) {
                    $allowSchemes += $requiredSchemes;
                    break;
                }
    
                return $ret;
        }

        $matchedPathinfo = $pathinfo;
        $regexList = array(
            0 => '{^(?'
                    .'|/account/([^/]++)(?'
                        .'|/(?'
                            .'|credits(*:38)'
                            .'|de(?'
                                .'|bits(*:54)'
                                .'|posit(*:66)'
                            .')'
                            .'|edit(*:78)'
                            .'|receive(*:92)'
                            .'|transfer(*:107)'
                            .'|buy(*:118)'
                        .')'
                        .'|(*:127)'
                    .')'
                    .'|/order/([^/]++)(?'
                        .'|/(?'
                            .'|abandon(*:165)'
                            .'|reopen(*:179)'
                            .'|complete(*:195)'
                            .'|delete(*:209)'
                            .'|edit(*:221)'
                        .')'
                        .'|(*:230)'
                    .')'
                    .'|/customer/([^/]++)/edit(*:262)'
                    .'|/_(?'
                        .'|error/(\\d+)(?:\\.([^/]++))?(*:301)'
                        .'|wdt/([^/]++)(*:321)'
                        .'|profiler/([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:367)'
                                .'|router(*:381)'
                                .'|exception(?'
                                    .'|(*:401)'
                                    .'|\\.css(*:414)'
                                .')'
                            .')'
                            .'|(*:424)'
                        .')'
                    .')'
                .')$}sD',
        );

        foreach ($regexList as $offset => $regex) {
            while (preg_match($regex, $matchedPathinfo, $matches)) {
                switch ($m = (int) $matches['MARK']) {
                    default:
                        $routes = array(
                            38 => array(array('_route' => 'ceaccount_credits', '_controller' => 'App\\Controller\\AccountController::accountCredits'), array('id'), null, null),
                            54 => array(array('_route' => 'ceaccount_debits', '_controller' => 'App\\Controller\\AccountController::accountDebits'), array('id'), null, null),
                            66 => array(array('_route' => 'ceaccount_deposit', '_controller' => 'App\\Controller\\AccountController::accountDeposit'), array('id'), null, null),
                            78 => array(array('_route' => 'ceaccount_edit', '_controller' => 'App\\Controller\\AccountController::ceAccountForm'), array('id'), null, null),
                            92 => array(array('_route' => 'ceaccount_receive', '_controller' => 'App\\Controller\\AccountController::accountReceive'), array('id'), null, null),
                            107 => array(array('_route' => 'ceaccount_transfer', '_controller' => 'App\\Controller\\AccountController::accountTransfer'), array('id'), null, null),
                            118 => array(array('_route' => 'ceaccount_buy', '_controller' => 'App\\Controller\\AccountController::accountBuy'), array('id'), null, null),
                            127 => array(array('_route' => 'ceaccount_show', '_controller' => 'App\\Controller\\AccountController::showOrder'), array('id'), null, null),
                            165 => array(array('_route' => 'ceorder_abandon', '_controller' => 'App\\Controller\\CeorderController::abandonOrder'), array('id'), null, null),
                            179 => array(array('_route' => 'ceorder_reopen', '_controller' => 'App\\Controller\\CeorderController::reopenOrder'), array('id'), null, null),
                            195 => array(array('_route' => 'ceorder_complete', '_controller' => 'App\\Controller\\CeorderController::completeOrder'), array('id'), null, null),
                            209 => array(array('_route' => 'ceorder_delete', '_controller' => 'App\\Controller\\CeorderController::deleteOrder'), array('id'), null, null),
                            221 => array(array('_route' => 'ceorder_edit', '_controller' => 'App\\Controller\\CeorderController::ceorderForm'), array('id'), null, null),
                            230 => array(array('_route' => 'ceorder_show', '_controller' => 'App\\Controller\\CeorderController::showOrder'), array('id'), null, null),
                            262 => array(array('_route' => 'customer_edit', '_controller' => 'App\\Controller\\CustomerController::customerForm'), array('id'), null, null),
                            301 => array(array('_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'), array('code', '_format'), null, null),
                            321 => array(array('_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'), array('token'), null, null),
                            367 => array(array('_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'), array('token'), null, null),
                            381 => array(array('_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'), array('token'), null, null),
                            401 => array(array('_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'), array('token'), null, null),
                            414 => array(array('_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'), array('token'), null, null),
                            424 => array(array('_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'), array('token'), null, null),
                        );
            
                        list($ret, $vars, $requiredMethods, $requiredSchemes) = $routes[$m];
            
                        foreach ($vars as $i => $v) {
                            if (isset($matches[1 + $i])) {
                                $ret[$v] = $matches[1 + $i];
                            }
                        }
            
                        $hasRequiredScheme = !$requiredSchemes || isset($requiredSchemes[$context->getScheme()]);
                        if ($requiredMethods && !isset($requiredMethods[$canonicalMethod]) && !isset($requiredMethods[$requestMethod])) {
                            if ($hasRequiredScheme) {
                                $allow += $requiredMethods;
                            }
                            break;
                        }
                        if (!$hasRequiredScheme) {
                            $allowSchemes += $requiredSchemes;
                            break;
                        }
            
                        return $ret;
                }

                if (424 === $m) {
                    break;
                }
                $regex = substr_replace($regex, 'F', $m - $offset, 1 + strlen($m));
                $offset += strlen($m);
            }
        }
        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        return null;
    }
}
