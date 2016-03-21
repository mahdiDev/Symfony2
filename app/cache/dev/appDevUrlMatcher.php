<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/css')) {
            if (0 === strpos($pathinfo, '/css/bf42e3b')) {
                // _assetic_bf42e3b
                if ($pathinfo === '/css/bf42e3b.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'bf42e3b',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_bf42e3b',);
                }

                // _assetic_bf42e3b_0
                if ($pathinfo === '/css/bf42e3b_bootstrap_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'bf42e3b',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_bf42e3b_0',);
                }

            }

            if (0 === strpos($pathinfo, '/css/4a2f504')) {
                // _assetic_4a2f504
                if ($pathinfo === '/css/4a2f504.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '4a2f504',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_4a2f504',);
                }

                // _assetic_4a2f504_0
                if ($pathinfo === '/css/4a2f504_bootstrap-responsive_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '4a2f504',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_4a2f504_0',);
                }

            }

            if (0 === strpos($pathinfo, '/css/77051b0')) {
                // _assetic_77051b0
                if ($pathinfo === '/css/77051b0.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '77051b0',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_77051b0',);
                }

                // _assetic_77051b0_0
                if ($pathinfo === '/css/77051b0_jquery-ui-1.10.3.custom_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '77051b0',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_77051b0_0',);
                }

            }

            if (0 === strpos($pathinfo, '/css/4033b07')) {
                // _assetic_4033b07
                if ($pathinfo === '/css/4033b07.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '4033b07',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_4033b07',);
                }

                // _assetic_4033b07_0
                if ($pathinfo === '/css/4033b07_jquery.switchButton_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '4033b07',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_4033b07_0',);
                }

            }

            if (0 === strpos($pathinfo, '/css/655f5eb')) {
                // _assetic_655f5eb
                if ($pathinfo === '/css/655f5eb.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '655f5eb',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_655f5eb',);
                }

                // _assetic_655f5eb_0
                if ($pathinfo === '/css/655f5eb_global_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '655f5eb',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_655f5eb_0',);
                }

            }

            if (0 === strpos($pathinfo, '/css/e473790')) {
                // _assetic_e473790
                if ($pathinfo === '/css/e473790.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'e473790',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_e473790',);
                }

                // _assetic_e473790_0
                if ($pathinfo === '/css/e473790_global-responsive_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'e473790',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_e473790_0',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/js')) {
            if (0 === strpos($pathinfo, '/js/2da0991')) {
                // _assetic_2da0991
                if ($pathinfo === '/js/2da0991.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '2da0991',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_2da0991',);
                }

                // _assetic_2da0991_0
                if ($pathinfo === '/js/2da0991_jquery-2.0.3_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '2da0991',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_2da0991_0',);
                }

            }

            if (0 === strpos($pathinfo, '/js/3a00546')) {
                // _assetic_3a00546
                if ($pathinfo === '/js/3a00546.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '3a00546',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_3a00546',);
                }

                // _assetic_3a00546_0
                if ($pathinfo === '/js/3a00546_bootstrap_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '3a00546',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_3a00546_0',);
                }

            }

            if (0 === strpos($pathinfo, '/js/ca')) {
                if (0 === strpos($pathinfo, '/js/cae960c')) {
                    // _assetic_cae960c
                    if ($pathinfo === '/js/cae960c.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'cae960c',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_cae960c',);
                    }

                    // _assetic_cae960c_0
                    if ($pathinfo === '/js/cae960c_jquery-ui-1.10.3.custom_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'cae960c',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_cae960c_0',);
                    }

                }

                if (0 === strpos($pathinfo, '/js/ca6ea29')) {
                    // _assetic_ca6ea29
                    if ($pathinfo === '/js/ca6ea29.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'ca6ea29',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_ca6ea29',);
                    }

                    // _assetic_ca6ea29_0
                    if ($pathinfo === '/js/ca6ea29_jquery.switchButton_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'ca6ea29',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_ca6ea29_0',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/js/3572f14')) {
                // _assetic_3572f14
                if ($pathinfo === '/js/3572f14.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '3572f14',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_3572f14',);
                }

                // _assetic_3572f14_0
                if ($pathinfo === '/js/3572f14_index_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '3572f14',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_3572f14_0',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // carnet_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'carnet_homepage');
            }

            return array (  '_controller' => 'CarnetBundle\\Controller\\DefaultController::indexAction',  '_route' => 'carnet_homepage',);
        }

        if (0 === strpos($pathinfo, '/contact')) {
            // carnet_contact_ajout
            if ($pathinfo === '/contact/add') {
                return array (  '_controller' => 'CarnetBundle\\Controller\\DefaultController::addAction',  '_route' => 'carnet_contact_ajout',);
            }

            // carnet_contact_update
            if (0 === strpos($pathinfo, '/contact/update') && preg_match('#^/contact/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'carnet_contact_update')), array (  '_controller' => 'CarnetBundle\\Controller\\DefaultController::updateAction',));
            }

            // carnet_contact_delete
            if (0 === strpos($pathinfo, '/contact/delete') && preg_match('#^/contact/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'carnet_contact_delete')), array (  '_controller' => 'CarnetBundle\\Controller\\DefaultController::deleteAction',));
            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_registration_register;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }
                not_fos_user_registration_register:

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
