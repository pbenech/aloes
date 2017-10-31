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

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/a')) {
            if (0 === strpos($pathinfo, '/aloes')) {
                if (0 === strpos($pathinfo, '/aloes/programs')) {
                    // programs
                    if (0 === strpos($pathinfo, '/aloes/programs/list') && preg_match('#^/aloes/programs/list(?:/(?P<page>[^/]++)(?:/(?P<sort>[^/]++)(?:/(?P<direction>[^/]++))?)?)?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'programs')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\ProgramController::indexAction',  'page' => 1,  'sort' => 'p.title',  'direction' => 'asc',));
                    }

                    // program_pad
                    if (preg_match('#^/aloes/programs/(?P<id>[^/]++)/pad$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'program_pad')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\ProgramController::programpadAction',));
                    }

                    // programs_pad
                    if ($pathinfo === '/aloes/programs/pad') {
                        return array (  '_controller' => 'Ife\\AloesBundle\\Controller\\ProgramController::padAction',  '_route' => 'programs_pad',);
                    }

                    // cours_pad
                    if (preg_match('#^/aloes/programs/(?P<id>[^/]++)/courspad$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'cours_pad')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\CourseController::courspadAction',));
                    }

                    // programs_about
                    if ($pathinfo === '/aloes/programs/about') {
                        return array (  '_controller' => 'Ife\\AloesBundle\\Controller\\ProgramController::aboutAction',  '_route' => 'programs_about',);
                    }

                    // programs_credits
                    if ($pathinfo === '/aloes/programs/credits') {
                        return array (  '_controller' => 'Ife\\AloesBundle\\Controller\\ProgramController::creditsAction',  '_route' => 'programs_credits',);
                    }

                    // programs_show
                    if (preg_match('#^/aloes/programs/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'programs_show')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\ProgramController::showAction',));
                    }

                    // programs_new
                    if ($pathinfo === '/aloes/programs/new') {
                        return array (  '_controller' => 'Ife\\AloesBundle\\Controller\\ProgramController::newAction',  '_route' => 'programs_new',);
                    }

                    // programs_create
                    if ($pathinfo === '/aloes/programs/create') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_programs_create;
                        }

                        return array (  '_controller' => 'Ife\\AloesBundle\\Controller\\ProgramController::createAction',  '_route' => 'programs_create',);
                    }
                    not_programs_create:

                    // programs_edit
                    if (preg_match('#^/aloes/programs/(?P<id>[^/]++)/edit/(?P<from>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'programs_edit')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\ProgramController::editAction',));
                    }

                    // programs_update
                    if (preg_match('#^/aloes/programs/(?P<id>[^/]++)/update/(?P<from>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                            $allow = array_merge($allow, array('POST', 'PUT'));
                            goto not_programs_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'programs_update')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\ProgramController::updateAction',));
                    }
                    not_programs_update:

                    // programs_delete
                    if (preg_match('#^/aloes/programs/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'programs_delete')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\ProgramController::deleteAction',));
                    }

                    // programs_del2
                    if (preg_match('#^/aloes/programs/(?P<id>[^/]++)/del$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'programs_del2')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\ProgramController::delAction',));
                    }

                    // programs_delete2
                    if (preg_match('#^/aloes/programs/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'programs_delete2')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\ProgramController::deleteAction',));
                    }

                    // programs_courses
                    if (preg_match('#^/aloes/programs/(?P<id>[^/]++)/courses/list(?:/(?P<page>[^/]++)(?:/(?P<sort>[^/]++)(?:/(?P<direction>[^/]++))?)?)?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'programs_courses')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\CourseController::indexAction',  'page' => 1,  'sort' => 'c.label',  'direction' => 'asc',));
                    }

                    // programs_courses_new
                    if (preg_match('#^/aloes/programs/(?P<id>[^/]++)/courses/new$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'programs_courses_new')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\CourseController::newAction',));
                    }

                    // programs_courses_create
                    if (preg_match('#^/aloes/programs/(?P<id>[^/]++)/courses/create$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_programs_courses_create;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'programs_courses_create')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\CourseController::createAction',));
                    }
                    not_programs_courses_create:

                    // program_competences
                    if (preg_match('#^/aloes/programs/(?P<id>[^/]++)/competences(?:/(?P<sequence>[^/]++))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'program_competences')), array (  '_controller' => 'IfeAloesBundle:GeneralCompetence:index',  'sequence' => 'ND',));
                    }

                    // program_competences_new2
                    if (preg_match('#^/aloes/programs/(?P<id>[^/]++)/competences2/new$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'program_competences_new2')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\GeneralCompetence2Controller::newAction',));
                    }

                    // program_competences2
                    if (preg_match('#^/aloes/programs/(?P<id>[^/]++)/competences2$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'program_competences2')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\GeneralCompetence2Controller::indexAction',));
                    }

                    // program_competences_cours
                    if (preg_match('#^/aloes/programs/(?P<id>[^/]++)/competences_cours/(?P<selection>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'program_competences_cours')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\GeneralCompetence2Controller::coursAction',));
                    }

                    // program_edit_competences
                    if (preg_match('#^/aloes/programs/(?P<id>[^/]++)/edit_competences$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'program_edit_competences')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\GeneralCompetence2Controller::edit_competencesAction',));
                    }

                    // program_update_competences
                    if (preg_match('#^/aloes/programs/(?P<id>[^/]++)/update_competences$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'program_update_competences')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\GeneralCompetence2Controller::update_competencesAction',));
                    }

                    // program_competences_edit2
                    if (preg_match('#^/aloes/programs/(?P<id>[^/]++)/competence2/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'program_competences_edit2')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\GeneralCompetence2Controller::editAction',));
                    }

                    // program_competences_del2
                    if (preg_match('#^/aloes/programs/(?P<id>[^/]++)/competence2/del$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'program_competences_del2')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\GeneralCompetence2Controller::delAction',));
                    }

                    // program_competences_delete2
                    if (preg_match('#^/aloes/programs/(?P<id>[^/]++)/competence2/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'program_competences_delete2')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\GeneralCompetence2Controller::deleteAction',));
                    }

                    // program_competences_update2
                    if (preg_match('#^/aloes/programs/(?P<id>[^/]++)/competence2/update$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_program_competences_update2;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'program_competences_update2')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\GeneralCompetence2Controller::updateAction',));
                    }
                    not_program_competences_update2:

                    // program_competences_create2
                    if (preg_match('#^/aloes/programs/(?P<id>[^/]++)/competence2/create$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_program_competences_create2;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'program_competences_create2')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\GeneralCompetence2Controller::createAction',));
                    }
                    not_program_competences_create2:

                    // program_competences_create
                    if (preg_match('#^/aloes/programs/(?P<id>[^/]++)/competence/create$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_program_competences_create;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'program_competences_create')), array (  '_controller' => 'IfeAloesBundle:GeneralCompetence:create',));
                    }
                    not_program_competences_create:

                    // program_competences_order
                    if (preg_match('#^/aloes/programs/(?P<id>[^/]++)/competences_order$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'program_competences_order')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\GeneralCompetence2Controller::orderAction',));
                    }

                }

                if (0 === strpos($pathinfo, '/aloes/courses')) {
                    // courses
                    if (rtrim($pathinfo, '/') === '/aloes/courses') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'courses');
                        }

                        return array (  '_controller' => 'Ife\\AloesBundle\\Controller\\CourseController::indexAction',  '_route' => 'courses',);
                    }

                    // course_show
                    if (preg_match('#^/aloes/courses/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_show')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\CourseController::showAction',));
                    }

                    // course_graph
                    if (preg_match('#^/aloes/courses/(?P<id>[^/]++)/graph/?$#s', $pathinfo, $matches)) {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'course_graph');
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_graph')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\CourseController::graphAction',));
                    }

                    // course_statut
                    if (preg_match('#^/aloes/courses/(?P<id>[^/]++)/statut$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_statut')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\CourseController::statutAction',));
                    }

                    // course_infos_show
                    if (preg_match('#^/aloes/courses/(?P<id>[^/]++)/infos_show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_infos_show')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\CourseController::infos_showAction',));
                    }

                    // courses_new
                    if ($pathinfo === '/aloes/courses/new') {
                        return array (  '_controller' => 'Ife\\AloesBundle\\Controller\\CourseController::newAction',  '_route' => 'courses_new',);
                    }

                    // courses_create
                    if ($pathinfo === '/aloes/courses/create') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_courses_create;
                        }

                        return array (  '_controller' => 'Ife\\AloesBundle\\Controller\\CourseController::createAction',  '_route' => 'courses_create',);
                    }
                    not_courses_create:

                    // courses_edit
                    if (preg_match('#^/aloes/courses/(?P<id>[^/]++)/edit/(?P<from>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'courses_edit')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\CourseController::editAction',));
                    }

                    // courses_infos_edit
                    if (preg_match('#^/aloes/courses/(?P<id>[^/]++)/infos_edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'courses_infos_edit')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\CourseController::infos_editAction',));
                    }

                    // courses_update
                    if (preg_match('#^/aloes/courses/(?P<id>[^/]++)/update/(?P<from>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                            $allow = array_merge($allow, array('POST', 'PUT'));
                            goto not_courses_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'courses_update')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\CourseController::updateAction',));
                    }
                    not_courses_update:

                    // courses_infos_update
                    if (preg_match('#^/aloes/courses/(?P<id>[^/]++)/infos_update$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                            $allow = array_merge($allow, array('POST', 'PUT'));
                            goto not_courses_infos_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'courses_infos_update')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\CourseController::infos_updateAction',));
                    }
                    not_courses_infos_update:

                    // courses_delete
                    if (preg_match('#^/aloes/courses/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'courses_delete')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\CourseController::deleteAction',));
                    }

                    // courses_del2
                    if (preg_match('#^/aloes/courses/(?P<id>[^/]++)/del$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'courses_del2')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\CourseController::delAction',));
                    }

                    // courses_delete2
                    if (preg_match('#^/aloes/courses/(?P<id>[^/]++)/delete2$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'courses_delete2')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\CourseController::deleteAction',));
                    }

                    // course_objective
                    if (preg_match('#^/aloes/courses/(?P<id>[^/]++)/objectives(?:/(?P<sequence>[^/]++))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_objective')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\GeneralObjectiveController::indexAction',  'sequence' => 'ND',));
                    }

                    // course_objective_order
                    if (preg_match('#^/aloes/courses/(?P<id>[^/]++)/objectives_order$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_objective_order')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\GeneralObjective2Controller::orderAction',));
                    }

                    // course_objective_create
                    if (preg_match('#^/aloes/courses/(?P<id>[^/]++)/objective/create$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_course_objective_create;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_objective_create')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\GeneralObjectiveController::createAction',));
                    }
                    not_course_objective_create:

                    // course_objective_create2
                    if (preg_match('#^/aloes/courses/(?P<id>[^/]++)/objective/create2$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_course_objective_create2;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_objective_create2')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\GeneralObjective2Controller::createAction',));
                    }
                    not_course_objective_create2:

                    // course_objective_new2
                    if (preg_match('#^/aloes/courses/(?P<id>[^/]++)/objective/new2$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_objective_new2')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\GeneralObjective2Controller::new2Action',));
                    }

                    // course_objective_edit2
                    if (preg_match('#^/aloes/courses/(?P<id>[^/]++)/objective/edit2$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_objective_edit2')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\GeneralObjective2Controller::edit2Action',));
                    }

                    // course_objective_del2
                    if (preg_match('#^/aloes/courses/(?P<id>[^/]++)/objective/del2$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_objective_del2')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\GeneralObjective2Controller::del2Action',));
                    }

                    // course_objective_delete2
                    if (preg_match('#^/aloes/courses/(?P<id>[^/]++)/objective/delete2$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_objective_delete2')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\GeneralObjective2Controller::delete2Action',));
                    }

                    // course_objective_update2
                    if (preg_match('#^/aloes/courses/(?P<id>[^/]++)/objective/update2$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_objective_update2')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\GeneralObjective2Controller::update2Action',));
                    }

                    // course_objective2
                    if (preg_match('#^/aloes/courses/(?P<id>[^/]++)/objectives2(?:/(?P<sequence>[^/]++))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_objective2')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\GeneralObjective2Controller::indexAction',  'sequence' => 'ND',));
                    }

                    // course_assessment
                    if (preg_match('#^/aloes/courses/(?P<id>[^/]++)/topics(?:/(?P<sequence>[^/]++))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_assessment')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\TopicController::indexAction',  'sequence' => 'ND',));
                    }

                    // course_assessment2
                    if (preg_match('#^/aloes/courses/(?P<id>[^/]++)/topics2(?:/(?P<sequence>[^/]++))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_assessment2')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\Topic2Controller::indexAction',  'sequence' => 'ND',));
                    }

                    // course_topic_create
                    if (preg_match('#^/aloes/courses/(?P<id>[^/]++)/topic/create$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_course_topic_create;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_topic_create')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\TopicController::createAction',));
                    }
                    not_course_topic_create:

                    // course_topic21_create
                    if (preg_match('#^/aloes/courses/(?P<id>[^/]++)/topics21(?:/(?P<init>[^/]++)(?:/(?P<sequence>[^/]++))?)?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_topic21_create')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\Topic2Controller::create1Action',  'sequence' => 'ND',  'init' => false,));
                    }

                    // course_topic22_create
                    if (preg_match('#^/aloes/courses/(?P<id>[^/]++)/topics22(?:/(?P<sequence>[^/]++))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_topic22_create')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\Topic2Controller::create2Action',  'sequence' => 'ND',));
                    }

                    // course_topic23_create
                    if (preg_match('#^/aloes/courses/(?P<id>[^/]++)/topics23(?:/(?P<sequence>[^/]++))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_topic23_create')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\Topic2Controller::create3Action',  'sequence' => 'ND',));
                    }

                    // course_topic24_create
                    if (preg_match('#^/aloes/courses/(?P<id>[^/]++)/topics24(?:/(?P<sequence>[^/]++))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_topic24_create')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\Topic2Controller::create4Action',  'sequence' => 'ND',));
                    }

                    // course_competence
                    if (preg_match('#^/aloes/courses/(?P<id>[^/]++)/competence$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_competence')), array (  '_controller' => 'IfeAloesBundle:GeneralCompetence:courseIndex',));
                    }

                    // course_event
                    if (preg_match('#^/aloes/courses/(?P<id>[^/]++)/event/list(?:/(?P<page>[^/]++)(?:/(?P<sort>[^/]++)(?:/(?P<direction>[^/]++))?)?)?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_event')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\EventController::indexAction',  'page' => 1,  'sort' => 'e.title',  'direction' => 'asc',));
                    }

                    // course_event_new
                    if (preg_match('#^/aloes/courses/(?P<id>[^/]++)/events/new$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_event_new')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\EventController::newAction',));
                    }

                    // course_event_create
                    if (preg_match('#^/aloes/courses/(?P<id>[^/]++)/events/create$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_event_create')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\EventController::createAction',));
                    }

                }

                if (0 === strpos($pathinfo, '/aloes/parcours')) {
                    // parcours_list
                    if (preg_match('#^/aloes/parcours/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'parcours_list')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\ParcoursController::indexAction',));
                    }

                    // parcours_new
                    if (preg_match('#^/aloes/parcours/(?P<id>[^/]++)/new$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'parcours_new')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\ParcoursController::newAction',));
                    }

                    // parcours_create
                    if (preg_match('#^/aloes/parcours/(?P<id>[^/]++)/create$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_parcours_create;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'parcours_create')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\ParcoursController::createAction',));
                    }
                    not_parcours_create:

                    // parcours_edit
                    if (preg_match('#^/aloes/parcours/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'parcours_edit')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\ParcoursController::editAction',));
                    }

                    // parcours_update
                    if (preg_match('#^/aloes/parcours/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'parcours_update')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\ParcoursController::updateAction',));
                    }

                    // parcours_del
                    if (preg_match('#^/aloes/parcours/(?P<id>[^/]++)/del$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'parcours_del')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\ParcoursController::delAction',));
                    }

                    // parcours_delete
                    if (preg_match('#^/aloes/parcours/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'parcours_delete')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\ParcoursController::deleteAction',));
                    }

                }

                if (0 === strpos($pathinfo, '/aloes/generalcompetence')) {
                    // generalcompetence
                    if (rtrim($pathinfo, '/') === '/aloes/generalcompetence') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'generalcompetence');
                        }

                        return array (  '_controller' => 'IfeAloesBundle:GeneralCompetence:index',  '_route' => 'generalcompetence',);
                    }

                    // generalcompetence_show
                    if (preg_match('#^/aloes/generalcompetence/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'generalcompetence_show')), array (  '_controller' => 'IfeAloesBundle:GeneralCompetence:show',));
                    }

                    // generalcompetence_new
                    if ($pathinfo === '/aloes/generalcompetence/new') {
                        return array (  '_controller' => 'IfeAloesBundle:GeneralCompetence:new',  '_route' => 'generalcompetence_new',);
                    }

                    // generalcompetence_new2
                    if (preg_match('#^/aloes/generalcompetence/(?P<id>[^/]++)/new$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_generalcompetence_new2;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'generalcompetence_new2')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\GeneralCompetence2Controller::newAction',));
                    }
                    not_generalcompetence_new2:

                    // generalcompetence_create
                    if ($pathinfo === '/aloes/generalcompetence/create') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_generalcompetence_create;
                        }

                        return array (  '_controller' => 'IfeAloesBundle:GeneralCompetence:create',  '_route' => 'generalcompetence_create',);
                    }
                    not_generalcompetence_create:

                    // generalcompetence_edit
                    if (preg_match('#^/aloes/generalcompetence/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'generalcompetence_edit')), array (  '_controller' => 'IfeAloesBundle:GeneralCompetence:edit',));
                    }

                    // generalcompetence_update
                    if (preg_match('#^/aloes/generalcompetence/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                            $allow = array_merge($allow, array('POST', 'PUT'));
                            goto not_generalcompetence_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'generalcompetence_update')), array (  '_controller' => 'IfeAloesBundle:GeneralCompetence:update',));
                    }
                    not_generalcompetence_update:

                    // generalcompetence_delete
                    if (preg_match('#^/aloes/generalcompetence/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                            $allow = array_merge($allow, array('POST', 'DELETE'));
                            goto not_generalcompetence_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'generalcompetence_delete')), array (  '_controller' => 'IfeAloesBundle:GeneralCompetence:delete',));
                    }
                    not_generalcompetence_delete:

                    // generalcompetence_specifics_create
                    if (preg_match('#^/aloes/generalcompetence/(?P<id>[^/]++)/specifics/create$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_generalcompetence_specifics_create;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'generalcompetence_specifics_create')), array (  '_controller' => 'IfeAloesBundle:SpecificCompetence:create',));
                    }
                    not_generalcompetence_specifics_create:

                }

                if (0 === strpos($pathinfo, '/aloes/specific-competence')) {
                    // specific-competence
                    if (rtrim($pathinfo, '/') === '/aloes/specific-competence') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'specific-competence');
                        }

                        return array (  '_controller' => 'IfeAloesBundle:SpecificCompetence:index',  '_route' => 'specific-competence',);
                    }

                    // specific-competence_show
                    if (preg_match('#^/aloes/specific\\-competence/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'specific-competence_show')), array (  '_controller' => 'IfeAloesBundle:SpecificCompetence:show',));
                    }

                    // specific-competence_new
                    if ($pathinfo === '/aloes/specific-competence/new') {
                        return array (  '_controller' => 'IfeAloesBundle:SpecificCompetence:new',  '_route' => 'specific-competence_new',);
                    }

                    // specific-competence_create
                    if ($pathinfo === '/aloes/specific-competence/create') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_specificcompetence_create;
                        }

                        return array (  '_controller' => 'IfeAloesBundle:SpecificCompetence:create',  '_route' => 'specific-competence_create',);
                    }
                    not_specificcompetence_create:

                    // specific-competence_edit
                    if (preg_match('#^/aloes/specific\\-competence/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'specific-competence_edit')), array (  '_controller' => 'IfeAloesBundle:SpecificCompetence:edit',));
                    }

                    // specific-competence_update
                    if (preg_match('#^/aloes/specific\\-competence/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                            $allow = array_merge($allow, array('POST', 'PUT'));
                            goto not_specificcompetence_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'specific-competence_update')), array (  '_controller' => 'IfeAloesBundle:SpecificCompetence:update',));
                    }
                    not_specificcompetence_update:

                    // specificcompetence_delete
                    if (preg_match('#^/aloes/specific\\-competence/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'specificcompetence_delete')), array (  '_controller' => 'IfeAloesBundle:SpecificCompetence:delete',));
                    }

                    // specificcompetence_new_2
                    if (preg_match('#^/aloes/specific\\-competence/(?P<id>[^/]++)/new2$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'specificcompetence_new_2')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\SpecificCompetence2Controller::newAction',));
                    }

                    // specificcompetence_create_2
                    if (preg_match('#^/aloes/specific\\-competence/(?P<id>[^/]++)/create2$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_specificcompetence_create_2;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'specificcompetence_create_2')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\SpecificCompetence2Controller::createAction',));
                    }
                    not_specificcompetence_create_2:

                    // specificcompetence_edit_2
                    if (preg_match('#^/aloes/specific\\-competence/(?P<id>[^/]++)/edit2$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'specificcompetence_edit_2')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\SpecificCompetence2Controller::editAction',));
                    }

                    // specificcompetence_update2
                    if (preg_match('#^/aloes/specific\\-competence/(?P<id>[^/]++)/update2$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                            $allow = array_merge($allow, array('POST', 'PUT'));
                            goto not_specificcompetence_update2;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'specificcompetence_update2')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\SpecificCompetence2Controller::updateAction',));
                    }
                    not_specificcompetence_update2:

                    // specificcompetence_del_2
                    if (preg_match('#^/aloes/specific\\-competence/(?P<id>[^/]++)/del2$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'specificcompetence_del_2')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\SpecificCompetence2Controller::delAction',));
                    }

                    // specificcompetence_delete2
                    if (preg_match('#^/aloes/specific\\-competence/(?P<id>[^/]++)/delete2$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                            $allow = array_merge($allow, array('POST', 'PUT'));
                            goto not_specificcompetence_delete2;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'specificcompetence_delete2')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\SpecificCompetence2Controller::deleteAction',));
                    }
                    not_specificcompetence_delete2:

                }

                if (0 === strpos($pathinfo, '/aloes/general_objective')) {
                    // general_objective_create
                    if ($pathinfo === '/aloes/general_objective/create') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_general_objective_create;
                        }

                        return array (  '_controller' => 'Ife\\AloesBundle\\Controller\\GeneralObjectiveController::createAction',  '_route' => 'general_objective_create',);
                    }
                    not_general_objective_create:

                    // general_objective_edit
                    if (preg_match('#^/aloes/general_objective/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'general_objective_edit')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\GeneralObjectiveController::editAction',));
                    }

                    // general_objective_update
                    if (preg_match('#^/aloes/general_objective/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                            $allow = array_merge($allow, array('POST', 'PUT'));
                            goto not_general_objective_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'general_objective_update')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\GeneralObjectiveController::updateAction',));
                    }
                    not_general_objective_update:

                    // general_objective_delete
                    if (preg_match('#^/aloes/general_objective/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                            $allow = array_merge($allow, array('POST', 'DELETE'));
                            goto not_general_objective_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'general_objective_delete')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\GeneralObjectiveController::deleteAction',));
                    }
                    not_general_objective_delete:

                    // general_objective_specific_objective_create
                    if (preg_match('#^/aloes/general_objective/(?P<id>[^/]++)/specifics/create$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_general_objective_specific_objective_create;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'general_objective_specific_objective_create')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\SpecificObjectiveController::createAction',));
                    }
                    not_general_objective_specific_objective_create:

                    // general_objective_specific_objective_new_2
                    if (preg_match('#^/aloes/general_objective/(?P<id>[^/]++)/specifics_2/new$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'general_objective_specific_objective_new_2')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\SpecificObjective2Controller::newAction',));
                    }

                    // general_objective_specific_objective_create_2
                    if (preg_match('#^/aloes/general_objective/(?P<id>[^/]++)/specifics_2/create$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_general_objective_specific_objective_create_2;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'general_objective_specific_objective_create_2')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\SpecificObjective2Controller::createAction',));
                    }
                    not_general_objective_specific_objective_create_2:

                    // general_objective_specific_objective_edit_2
                    if (preg_match('#^/aloes/general_objective/(?P<id>[^/]++)/specifics_2/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'general_objective_specific_objective_edit_2')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\SpecificObjective2Controller::editAction',));
                    }

                    // general_objective_specific_objective_update_2
                    if (preg_match('#^/aloes/general_objective/(?P<id>[^/]++)/specifics_2/update$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_general_objective_specific_objective_update_2;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'general_objective_specific_objective_update_2')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\SpecificObjective2Controller::updateAction',));
                    }
                    not_general_objective_specific_objective_update_2:

                    // general_objective_specific_objective_del_2
                    if (preg_match('#^/aloes/general_objective/(?P<id>[^/]++)/specifics_2/del$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'general_objective_specific_objective_del_2')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\SpecificObjective2Controller::delAction',));
                    }

                    // general_objective_specific_objective_delete_2
                    if (preg_match('#^/aloes/general_objective/(?P<id>[^/]++)/specifics_2/delete$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_general_objective_specific_objective_delete_2;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'general_objective_specific_objective_delete_2')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\SpecificObjective2Controller::deleteAction',));
                    }
                    not_general_objective_specific_objective_delete_2:

                }

                if (0 === strpos($pathinfo, '/aloes/specific_objective')) {
                    // specific_objective
                    if (rtrim($pathinfo, '/') === '/aloes/specific_objective') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'specific_objective');
                        }

                        return array (  '_controller' => 'Ife\\AloesBundle\\Controller\\SpecificObjectiveController::indexAction',  '_route' => 'specific_objective',);
                    }

                    // specific_objective_show
                    if (preg_match('#^/aloes/specific_objective/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'specific_objective_show')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\SpecificObjectiveController::showAction',));
                    }

                    // specific_objective_new
                    if ($pathinfo === '/aloes/specific_objective/new') {
                        return array (  '_controller' => 'Ife\\AloesBundle\\Controller\\SpecificObjectiveController::newAction',  '_route' => 'specific_objective_new',);
                    }

                    if (0 === strpos($pathinfo, '/aloes/specific_objective/create')) {
                        // specific_objective_create
                        if ($pathinfo === '/aloes/specific_objective/create') {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_specific_objective_create;
                            }

                            return array (  '_controller' => 'Ife\\AloesBundle\\Controller\\SpecificObjectiveController::createAction',  '_route' => 'specific_objective_create',);
                        }
                        not_specific_objective_create:

                        // specific_objective_create_2
                        if ($pathinfo === '/aloes/specific_objective/create2') {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_specific_objective_create_2;
                            }

                            return array (  '_controller' => 'Ife\\AloesBundle\\Controller\\SpecificObjective2Controller::createAction',  '_route' => 'specific_objective_create_2',);
                        }
                        not_specific_objective_create_2:

                    }

                    // specific_objective_edit
                    if (preg_match('#^/aloes/specific_objective/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'specific_objective_edit')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\SpecificObjectiveController::editAction',));
                    }

                    // specific_objective_update
                    if (preg_match('#^/aloes/specific_objective/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                            $allow = array_merge($allow, array('POST', 'PUT'));
                            goto not_specific_objective_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'specific_objective_update')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\SpecificObjectiveController::updateAction',));
                    }
                    not_specific_objective_update:

                    // specific_objective_delete
                    if (preg_match('#^/aloes/specific_objective/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'specific_objective_delete')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\SpecificObjectiveController::deleteAction',));
                    }

                    // specific_objective_delete_2
                    if (preg_match('#^/aloes/specific_objective/(?P<id>[^/]++)/delete_2$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'specific_objective_delete_2')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\SpecificObjective2Controller::deleteAction',));
                    }

                    // objective_competence_selection
                    if (preg_match('#^/aloes/specific_objective/(?P<id>[^/]++)/competences/selection/(?P<menu>[^/]++)(?:/(?P<msg>[^/]++))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'objective_competence_selection')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\ObjectiveCompetenceController::selectAction',  'msg' => 0,));
                    }

                    // objective_competence_selection_update
                    if (preg_match('#^/aloes/specific_objective/(?P<id>[^/]++)/competences/update\\-selection/(?P<menu>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_objective_competence_selection_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'objective_competence_selection_update')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\ObjectiveCompetenceController::updateSelectionAction',));
                    }
                    not_objective_competence_selection_update:

                    // objective_competence_rating
                    if (preg_match('#^/aloes/specific_objective/(?P<id>[^/]++)/competences/rating/(?P<menu>[^/]++)(?:/(?P<msg>[^/]++))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'objective_competence_rating')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\ObjectiveCompetenceController::rateAction',  'msg' => 0,));
                    }

                    // objective_competence_rating_update
                    if (preg_match('#^/aloes/specific_objective/(?P<id>[^/]++)/competences/update\\-rating/(?P<menu>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_objective_competence_rating_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'objective_competence_rating_update')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\ObjectiveCompetenceController::updateRatingAction',));
                    }
                    not_objective_competence_rating_update:

                    // objective_competence_weights
                    if (preg_match('#^/aloes/specific_objective/(?P<id>[^/]++)/competences/weights/(?P<menu>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'objective_competence_weights')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\ObjectiveCompetenceController::showAction',));
                    }

                }

                if (0 === strpos($pathinfo, '/aloes/topic')) {
                    // topic_create
                    if ($pathinfo === '/aloes/topic/create') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_topic_create;
                        }

                        return array (  '_controller' => 'Ife\\AloesBundle\\Controller\\TopicController::createAction',  '_route' => 'topic_create',);
                    }
                    not_topic_create:

                    // topic_edit
                    if (preg_match('#^/aloes/topic/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'topic_edit')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\TopicController::editAction',));
                    }

                    // topic_update
                    if (preg_match('#^/aloes/topic/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                            $allow = array_merge($allow, array('POST', 'PUT'));
                            goto not_topic_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'topic_update')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\TopicController::updateAction',));
                    }
                    not_topic_update:

                    // topic_delete
                    if (preg_match('#^/aloes/topic/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                            $allow = array_merge($allow, array('POST', 'DELETE'));
                            goto not_topic_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'topic_delete')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\TopicController::deleteAction',));
                    }
                    not_topic_delete:

                    // topic_del2
                    if (preg_match('#^/aloes/topic/(?P<id>[^/]++)/del2$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'topic_del2')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\Topic2Controller::delAction',));
                    }

                    // topic_delete2
                    if (preg_match('#^/aloes/topic/(?P<id>[^/]++)/delete2$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                            $allow = array_merge($allow, array('POST', 'DELETE'));
                            goto not_topic_delete2;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'topic_delete2')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\Topic2Controller::deleteAction',));
                    }
                    not_topic_delete2:

                    // topic_edit2
                    if (preg_match('#^/aloes/topic/(?P<id>[^/]++)/edit2$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'topic_edit2')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\Topic2Controller::editAction',));
                    }

                    // topic_update2
                    if (preg_match('#^/aloes/topic/(?P<id>[^/]++)/update2$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                            $allow = array_merge($allow, array('POST', 'PUT'));
                            goto not_topic_update2;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'topic_update2')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\Topic2Controller::updateAction',));
                    }
                    not_topic_update2:

                    // topic_assessment_create
                    if (preg_match('#^/aloes/topic/(?P<id>[^/]++)/assessments/create$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'topic_assessment_create')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\AssessmentController::createAction',));
                    }

                    // topic_assessment_new_2
                    if (preg_match('#^/aloes/topic/(?P<id>[^/]++)/assessments_2/new$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'topic_assessment_new_2')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\Assessment2Controller::newAction',));
                    }

                    // topic_events_new_2
                    if (preg_match('#^/aloes/topic/(?P<id>[^/]++)/events_2/new$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'topic_events_new_2')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\Event2Controller::newAction',));
                    }

                    // topic_assessment_create_2
                    if (preg_match('#^/aloes/topic/(?P<id>[^/]++)/assessments_2/create$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_topic_assessment_create_2;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'topic_assessment_create_2')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\Assessment2Controller::createAction',));
                    }
                    not_topic_assessment_create_2:

                    // topic_events_create_2
                    if (preg_match('#^/aloes/topic/(?P<id>[^/]++)/events_2/create$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_topic_events_create_2;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'topic_events_create_2')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\Event2Controller::createAction',));
                    }
                    not_topic_events_create_2:

                    // topic_assessment_edit_2
                    if (preg_match('#^/aloes/topic/(?P<id>[^/]++)/assessments_2/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'topic_assessment_edit_2')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\Assessment2Controller::editAction',));
                    }

                    // topic_events_edit_2
                    if (preg_match('#^/aloes/topic/(?P<id>[^/]++)/events_2/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'topic_events_edit_2')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\Event2Controller::editAction',));
                    }

                    // topic_assessment_update_2
                    if (preg_match('#^/aloes/topic/(?P<id>[^/]++)/assessments_2/update$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_topic_assessment_update_2;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'topic_assessment_update_2')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\Assessment2Controller::updateAction',));
                    }
                    not_topic_assessment_update_2:

                    // topic_events_update_2
                    if (preg_match('#^/aloes/topic/(?P<id>[^/]++)/events_2/update$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_topic_events_update_2;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'topic_events_update_2')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\Event2Controller::updateAction',));
                    }
                    not_topic_events_update_2:

                    // topic_assessment_del_2
                    if (preg_match('#^/aloes/topic/(?P<id>[^/]++)/assessments_2/del$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'topic_assessment_del_2')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\Assessment2Controller::delAction',));
                    }

                    // topic_assessment_delete_2
                    if (preg_match('#^/aloes/topic/(?P<id>[^/]++)/assessments_2/delete$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_topic_assessment_delete_2;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'topic_assessment_delete_2')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\Assessment2Controller::deleteAction',));
                    }
                    not_topic_assessment_delete_2:

                    // topic_events_del_2
                    if (preg_match('#^/aloes/topic/(?P<id>[^/]++)/events_2/del$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'topic_events_del_2')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\Event2Controller::delAction',));
                    }

                    // topic_events_delete_2
                    if (preg_match('#^/aloes/topic/(?P<id>[^/]++)/events_2/delete$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_topic_events_delete_2;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'topic_events_delete_2')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\Event2Controller::deleteAction',));
                    }
                    not_topic_events_delete_2:

                }

                if (0 === strpos($pathinfo, '/aloes/assessment')) {
                    // assessment
                    if (rtrim($pathinfo, '/') === '/aloes/assessment') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'assessment');
                        }

                        return array (  '_controller' => 'Ife\\AloesBundle\\Controller\\AssessmentController::indexAction',  '_route' => 'assessment',);
                    }

                    // assessment_show
                    if (preg_match('#^/aloes/assessment/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'assessment_show')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\AssessmentController::showAction',));
                    }

                    // assessment_new
                    if ($pathinfo === '/aloes/assessment/new') {
                        return array (  '_controller' => 'Ife\\AloesBundle\\Controller\\AssessmentController::newAction',  '_route' => 'assessment_new',);
                    }

                    // assessment_create
                    if ($pathinfo === '/aloes/assessment/create') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_assessment_create;
                        }

                        return array (  '_controller' => 'Ife\\AloesBundle\\Controller\\AssessmentController::createAction',  '_route' => 'assessment_create',);
                    }
                    not_assessment_create:

                    // assessment_edit
                    if (preg_match('#^/aloes/assessment/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'assessment_edit')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\AssessmentController::editAction',));
                    }

                    // assessment_update
                    if (preg_match('#^/aloes/assessment/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                            $allow = array_merge($allow, array('POST', 'PUT'));
                            goto not_assessment_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'assessment_update')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\AssessmentController::updateAction',));
                    }
                    not_assessment_update:

                    // assessment_delete
                    if (preg_match('#^/aloes/assessment/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'assessment_delete')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\AssessmentController::deleteAction',));
                    }

                    // assessment_objective_selection
                    if (preg_match('#^/aloes/assessment/(?P<id>[^/]++)/objectives/selection/(?P<menu>[^/]++)(?:/(?P<msg>[^/]++))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'assessment_objective_selection')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\AssessmentObjectiveController::selectAction',  'msg' => 0,));
                    }

                    // assessment_objective_selection_update
                    if (preg_match('#^/aloes/assessment/(?P<id>[^/]++)/objectives/update\\-selection/(?P<menu>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_assessment_objective_selection_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'assessment_objective_selection_update')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\AssessmentObjectiveController::updateSelectionAction',));
                    }
                    not_assessment_objective_selection_update:

                    // assessment_objective_rating
                    if (preg_match('#^/aloes/assessment/(?P<id>[^/]++)/objectives/rating/(?P<menu>[^/]++)(?:/(?P<msg>[^/]++))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'assessment_objective_rating')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\AssessmentObjectiveController::rateAction',  'msg' => 0,));
                    }

                    // assessment_objective_rating_update
                    if (preg_match('#^/aloes/assessment/(?P<id>[^/]++)/objectives/update\\-rating/(?P<menu>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_assessment_objective_rating_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'assessment_objective_rating_update')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\AssessmentObjectiveController::updateRatingAction',));
                    }
                    not_assessment_objective_rating_update:

                    // assessment_objective_weights
                    if (preg_match('#^/aloes/assessment/(?P<id>[^/]++)/objectives/weights/(?P<menu>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'assessment_objective_weights')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\AssessmentObjectiveController::showAction',));
                    }

                }

                if (0 === strpos($pathinfo, '/aloes/event')) {
                    // event
                    if (rtrim($pathinfo, '/') === '/aloes/event') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'event');
                        }

                        return array (  '_controller' => 'Ife\\AloesBundle\\Controller\\EventController::indexAction',  '_route' => 'event',);
                    }

                    // event_show
                    if (preg_match('#^/aloes/event/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'event_show')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\EventController::showAction',));
                    }

                    // event_new
                    if ($pathinfo === '/aloes/event/new') {
                        return array (  '_controller' => 'Ife\\AloesBundle\\Controller\\EventController::newAction',  '_route' => 'event_new',);
                    }

                    // event_create
                    if ($pathinfo === '/aloes/event/create') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_event_create;
                        }

                        return array (  '_controller' => 'Ife\\AloesBundle\\Controller\\EventController::createAction',  '_route' => 'event_create',);
                    }
                    not_event_create:

                    // event_edit
                    if (preg_match('#^/aloes/event/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'event_edit')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\EventController::editAction',));
                    }

                    // event_update
                    if (preg_match('#^/aloes/event/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                            $allow = array_merge($allow, array('POST', 'PUT'));
                            goto not_event_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'event_update')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\EventController::updateAction',));
                    }
                    not_event_update:

                    // event_delete
                    if (preg_match('#^/aloes/event/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'event_delete')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\EventController::deleteAction',));
                    }

                }

                if (0 === strpos($pathinfo, '/aloes/resp')) {
                    if (0 === strpos($pathinfo, '/aloes/resp/resp_utilisateurs')) {
                        // resp_utilisateurs
                        if (preg_match('#^/aloes/resp/resp_utilisateurs(?:/(?P<page>[^/]++)(?:/(?P<sort>[^/]++)(?:/(?P<direction>[^/]++))?)?)?$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'resp_utilisateurs')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\RespController::utilisateursAction',  'page' => 1,  'sort' => 'sn',  'direction' => 'asc',));
                        }

                        if (0 === strpos($pathinfo, '/aloes/resp/resp_utilisateurs_')) {
                            // resp_utilisateurs_showuser
                            if (0 === strpos($pathinfo, '/aloes/resp/resp_utilisateurs_show') && preg_match('#^/aloes/resp/resp_utilisateurs_show/(?P<id>[^/]++)(?:/(?P<page>[^/]++)(?:/(?P<sort>[^/]++)(?:/(?P<direction>[^/]++))?)?)?$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'resp_utilisateurs_showuser')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\RespController::showuserAction',  'page' => 1,  'sort' => 'sn',  'direction' => 'asc',));
                            }

                            // resp_utilisateurs_updateuser
                            if (0 === strpos($pathinfo, '/aloes/resp/resp_utilisateurs_updateuser') && preg_match('#^/aloes/resp/resp_utilisateurs_updateuser/(?P<id>[^/]++)(?:/(?P<page>[^/]++)(?:/(?P<sort>[^/]++)(?:/(?P<direction>[^/]++))?)?)?$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'resp_utilisateurs_updateuser')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\RespController::updateuserAction',  'page' => 1,  'sort' => 'sn',  'direction' => 'asc',));
                            }

                        }

                    }

                    // resp_utilisateurs_updateuser_valid
                    if (preg_match('#^/aloes/resp/(?P<id>[^/]++)/resp_utilisateurs_updateuser_valid(?:/(?P<page>[^/]++)(?:/(?P<sort>[^/]++)(?:/(?P<direction>[^/]++))?)?)?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'resp_utilisateurs_updateuser_valid')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\RespController::validuserAction',  'page' => 1,  'sort' => 'sn',  'direction' => 'asc',));
                    }

                    if (0 === strpos($pathinfo, '/aloes/resp/resp_utilisateurs_')) {
                        // resp_utilisateurs_deleteuser
                        if (0 === strpos($pathinfo, '/aloes/resp/resp_utilisateurs_deleteuser') && preg_match('#^/aloes/resp/resp_utilisateurs_deleteuser/(?P<id>[^/]++)(?:/(?P<page>[^/]++)(?:/(?P<sort>[^/]++)(?:/(?P<direction>[^/]++))?)?)?$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'resp_utilisateurs_deleteuser')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\RespController::deleteuserAction',  'page' => 1,  'sort' => 'sn',  'direction' => 'asc',));
                        }

                        // resp_utilisateurs_add_ldap
                        if (0 === strpos($pathinfo, '/aloes/resp/resp_utilisateurs_add_ldap') && preg_match('#^/aloes/resp/resp_utilisateurs_add_ldap(?:/(?P<page>[^/]++)(?:/(?P<sort>[^/]++)(?:/(?P<direction>[^/]++))?)?)?$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'resp_utilisateurs_add_ldap')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\RespController::addLdapAction',  'page' => 1,  'sort' => 'sn',  'direction' => 'asc',));
                        }

                        // resp_utilisateurs_create_ldap
                        if (0 === strpos($pathinfo, '/aloes/resp/resp_utilisateurs_create_ldap') && preg_match('#^/aloes/resp/resp_utilisateurs_create_ldap(?:/(?P<page>[^/]++)(?:/(?P<sort>[^/]++)(?:/(?P<direction>[^/]++))?)?)?$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'resp_utilisateurs_create_ldap')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\RespController::createLdapAction',  'page' => 1,  'sort' => 'sn',  'direction' => 'asc',));
                        }

                        // resp_utilisateurs_add_user
                        if (0 === strpos($pathinfo, '/aloes/resp/resp_utilisateurs_add_user') && preg_match('#^/aloes/resp/resp_utilisateurs_add_user(?:/(?P<page>[^/]++)(?:/(?P<sort>[^/]++)(?:/(?P<direction>[^/]++))?)?)?$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'resp_utilisateurs_add_user')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\RespController::addUserAction',  'page' => 1,  'sort' => 'sn',  'direction' => 'asc',));
                        }

                        // resp_utilisateurs_create_user
                        if (0 === strpos($pathinfo, '/aloes/resp/resp_utilisateurs_create_user') && preg_match('#^/aloes/resp/resp_utilisateurs_create_user(?:/(?P<page>[^/]++)(?:/(?P<sort>[^/]++)(?:/(?P<direction>[^/]++))?)?)?$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'resp_utilisateurs_create_user')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\RespController::createUserAction',  'page' => 1,  'sort' => 'sn',  'direction' => 'asc',));
                        }

                    }

                }

                // typologies_ajax
                if ($pathinfo === '/aloes/typologies/ajaxt/typologies.js') {
                    return array (  '_controller' => 'Ife\\AloesBundle\\Controller\\TypologieController::typologiesAction',  '_route' => 'typologies_ajax',);
                }

                // categories_ajax
                if ($pathinfo === '/aloes/categories/ajaxc/categories.js') {
                    return array (  '_controller' => 'Ife\\AloesBundle\\Controller\\CategorieController::categoriesAction',  '_route' => 'categories_ajax',);
                }

                if (0 === strpos($pathinfo, '/aloes-public')) {
                    if (0 === strpos($pathinfo, '/aloes-public/aloes')) {
                        // course_resum
                        if (preg_match('#^/aloes\\-public/aloes/(?P<id>[^/]++)/resum(?:/(?P<param>[^/]++))?$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_resum')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\CourseController::resumAction',  'param' => '012345678',));
                        }

                        // course_url
                        if (preg_match('#^/aloes\\-public/aloes/(?P<id>[^/]++)/url$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_url')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\CourseController::urlAction',));
                        }

                        // aloes_about
                        if ($pathinfo === '/aloes-public/aloes/about') {
                            return array (  '_controller' => 'Ife\\AloesBundle\\Controller\\PublicController::aboutAction',  '_route' => 'aloes_about',);
                        }

                        // aloes_credits
                        if ($pathinfo === '/aloes-public/aloes/credits') {
                            return array (  '_controller' => 'Ife\\AloesBundle\\Controller\\PublicController::creditsAction',  '_route' => 'aloes_credits',);
                        }

                        if (0 === strpos($pathinfo, '/aloes-public/aloes/password_re')) {
                            // password_reset
                            if ($pathinfo === '/aloes-public/aloes/password_reset') {
                                return array (  '_controller' => 'Ife\\AloesBundle\\Controller\\PublicController::password_resetAction',  '_route' => 'password_reset',);
                            }

                            // password_re_init
                            if ($pathinfo === '/aloes-public/aloes/password_re_init') {
                                return array (  '_controller' => 'Ife\\AloesBundle\\Controller\\PublicController::password_re_initAction',  '_route' => 'password_re_init',);
                            }

                        }

                    }

                    if (0 === strpos($pathinfo, '/aloes-public/tableaux')) {
                        // tableaux_bord
                        if (0 === strpos($pathinfo, '/aloes-public/tableaux/niveau') && preg_match('#^/aloes\\-public/tableaux/niveau(?:/(?P<niv>[^/]++)(?:/(?P<program>[^/]++)(?:/(?P<course>[^/]++))?)?)?$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'tableaux_bord')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\TableauxController::indexAction',  'niv' => 0,  'program' => 0,  'course' => 0,));
                        }

                        // tableaux_calendar
                        if (preg_match('#^/aloes\\-public/tableaux/(?P<id>[^/]++)/calendar$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'tableaux_calendar')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\TableauxController::calendarAction',));
                        }

                        // tableaux_bord_programs
                        if (0 === strpos($pathinfo, '/aloes-public/tableaux/programs') && preg_match('#^/aloes\\-public/tableaux/programs/(?P<niv>[^/]++)$#s', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_tableaux_bord_programs;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'tableaux_bord_programs')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\TableauxController::programsAction',));
                        }
                        not_tableaux_bord_programs:

                        // tableaux_bord_filtre
                        if ($pathinfo === '/aloes-public/tableaux/filtre') {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_tableaux_bord_filtre;
                            }

                            return array (  '_controller' => 'Ife\\AloesBundle\\Controller\\TableauxController::filtreAction',  '_route' => 'tableaux_bord_filtre',);
                        }
                        not_tableaux_bord_filtre:

                        // tableaux_bord_rapport
                        if ($pathinfo === '/aloes-public/tableaux/rapport') {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_tableaux_bord_rapport;
                            }

                            return array (  '_controller' => 'Ife\\AloesBundle\\Controller\\TableauxController::rapportAction',  '_route' => 'tableaux_bord_rapport',);
                        }
                        not_tableaux_bord_rapport:

                        // tableaux_bord_resum
                        if (preg_match('#^/aloes\\-public/tableaux/(?P<id>[^/]++)/resum/(?P<param>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'tableaux_bord_resum')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\TableauxController::resumAction',));
                        }

                    }

                }

            }

            if (0 === strpos($pathinfo, '/admin/aloes_admin')) {
                // test_admin
                if ($pathinfo === '/admin/aloes_admin/test_admin') {
                    return array (  '_controller' => 'Ife\\AloesBundle\\Controller\\AdminController::testAction',  '_route' => 'test_admin',);
                }

                if (0 === strpos($pathinfo, '/admin/aloes_admin/admin_')) {
                    // admin_parameters
                    if ($pathinfo === '/admin/aloes_admin/admin_parameters') {
                        return array (  '_controller' => 'Ife\\AloesBundle\\Controller\\AdminController::parametersAction',  '_route' => 'admin_parameters',);
                    }

                    // admin_outil
                    if ($pathinfo === '/admin/aloes_admin/admin_outil') {
                        return array (  '_controller' => 'Ife\\AloesBundle\\Controller\\AdminController::outilAction',  '_route' => 'admin_outil',);
                    }

                    if (0 === strpos($pathinfo, '/admin/aloes_admin/admin_parameters_')) {
                        // admin_parameters_edit
                        if (0 === strpos($pathinfo, '/admin/aloes_admin/admin_parameters_edit') && preg_match('#^/admin/aloes_admin/admin_parameters_edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_parameters_edit')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\AdminController::parametersEditAction',));
                        }

                        // admin_parameters_update
                        if (0 === strpos($pathinfo, '/admin/aloes_admin/admin_parameters_update') && preg_match('#^/admin/aloes_admin/admin_parameters_update(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_parameters_update')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\AdminController::parametersUpdateAction',  'id' => 1,));
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/aloes_admin/admin_utilisateurs')) {
                        // admin_utilisateurs
                        if (preg_match('#^/admin/aloes_admin/admin_utilisateurs(?:/(?P<page>[^/]++)(?:/(?P<sort>[^/]++)(?:/(?P<direction>[^/]++))?)?)?$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_utilisateurs')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\AdminController::utilisateursAction',  'page' => 1,  'sort' => 'sn',  'direction' => 'asc',));
                        }

                        if (0 === strpos($pathinfo, '/admin/aloes_admin/admin_utilisateurs_')) {
                            if (0 === strpos($pathinfo, '/admin/aloes_admin/admin_utilisateurs_add_')) {
                                // admin_utilisateurs_add_ldap
                                if (0 === strpos($pathinfo, '/admin/aloes_admin/admin_utilisateurs_add_ldap') && preg_match('#^/admin/aloes_admin/admin_utilisateurs_add_ldap(?:/(?P<page>[^/]++)(?:/(?P<sort>[^/]++)(?:/(?P<direction>[^/]++))?)?)?$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_utilisateurs_add_ldap')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\AdminController::addLdapAction',  'page' => 1,  'sort' => 'sn',  'direction' => 'asc',));
                                }

                                // admin_utilisateurs_add_user
                                if (0 === strpos($pathinfo, '/admin/aloes_admin/admin_utilisateurs_add_user') && preg_match('#^/admin/aloes_admin/admin_utilisateurs_add_user(?:/(?P<page>[^/]++)(?:/(?P<sort>[^/]++)(?:/(?P<direction>[^/]++))?)?)?$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_utilisateurs_add_user')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\AdminController::addUserAction',  'page' => 1,  'sort' => 'sn',  'direction' => 'asc',));
                                }

                            }

                            if (0 === strpos($pathinfo, '/admin/aloes_admin/admin_utilisateurs_create_')) {
                                // admin_utilisateurs_create_ldap
                                if (0 === strpos($pathinfo, '/admin/aloes_admin/admin_utilisateurs_create_ldap') && preg_match('#^/admin/aloes_admin/admin_utilisateurs_create_ldap(?:/(?P<page>[^/]++)(?:/(?P<sort>[^/]++)(?:/(?P<direction>[^/]++))?)?)?$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_utilisateurs_create_ldap')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\AdminController::createLdapAction',  'page' => 1,  'sort' => 'sn',  'direction' => 'asc',));
                                }

                                // admin_utilisateurs_create_user
                                if (0 === strpos($pathinfo, '/admin/aloes_admin/admin_utilisateurs_create_user') && preg_match('#^/admin/aloes_admin/admin_utilisateurs_create_user(?:/(?P<page>[^/]++)(?:/(?P<sort>[^/]++)(?:/(?P<direction>[^/]++))?)?)?$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_utilisateurs_create_user')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\AdminController::createUserAction',  'page' => 1,  'sort' => 'sn',  'direction' => 'asc',));
                                }

                            }

                            // admin_utilisateurs_showuser
                            if (0 === strpos($pathinfo, '/admin/aloes_admin/admin_utilisateurs_show') && preg_match('#^/admin/aloes_admin/admin_utilisateurs_show/(?P<id>[^/]++)(?:/(?P<page>[^/]++)(?:/(?P<sort>[^/]++)(?:/(?P<direction>[^/]++))?)?)?$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_utilisateurs_showuser')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\AdminController::showuserAction',  'page' => 1,  'sort' => 'sn',  'direction' => 'asc',));
                            }

                            // admin_utilisateurs_deleteuser
                            if (0 === strpos($pathinfo, '/admin/aloes_admin/admin_utilisateurs_deleteuser') && preg_match('#^/admin/aloes_admin/admin_utilisateurs_deleteuser/(?P<id>[^/]++)(?:/(?P<page>[^/]++)(?:/(?P<sort>[^/]++)(?:/(?P<direction>[^/]++))?)?)?$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_utilisateurs_deleteuser')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\AdminController::deleteuserAction',  'page' => 1,  'sort' => 'sn',  'direction' => 'asc',));
                            }

                            // admin_utilisateurs_updateuser
                            if (0 === strpos($pathinfo, '/admin/aloes_admin/admin_utilisateurs_updateuser') && preg_match('#^/admin/aloes_admin/admin_utilisateurs_updateuser/(?P<id>[^/]++)(?:/(?P<page>[^/]++)(?:/(?P<sort>[^/]++)(?:/(?P<direction>[^/]++))?)?)?$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_utilisateurs_updateuser')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\AdminController::updateuserAction',  'page' => 1,  'sort' => 'sn',  'direction' => 'asc',));
                            }

                        }

                    }

                }

                // admin_utilisateurs_updateuser_valid
                if (preg_match('#^/admin/aloes_admin/(?P<id>[^/]++)/admin_utilisateurs_updateuser_valid(?:/(?P<page>[^/]++)(?:/(?P<sort>[^/]++)(?:/(?P<direction>[^/]++))?)?)?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_utilisateurs_updateuser_valid')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\AdminController::validuserAction',  'page' => 1,  'sort' => 'sn',  'direction' => 'asc',));
                }

                if (0 === strpos($pathinfo, '/admin/aloes_admin_')) {
                    if (0 === strpos($pathinfo, '/admin/aloes_admin_l')) {
                        if (0 === strpos($pathinfo, '/admin/aloes_admin_level')) {
                            // levels
                            if (0 === strpos($pathinfo, '/admin/aloes_admin_level/list') && preg_match('#^/admin/aloes_admin_level/list(?:/(?P<page>[^/]++)(?:/(?P<sort>[^/]++)(?:/(?P<direction>[^/]++))?)?)?$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'levels')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\LevelController::indexAction',  'page' => 1,  'sort' => 'l.title',  'direction' => 'asc',));
                            }

                            // levels_show
                            if (preg_match('#^/admin/aloes_admin_level/(?P<id>[^/]++)/show(?:/(?P<page>[^/]++)(?:/(?P<sort>[^/]++)(?:/(?P<direction>[^/]++))?)?)?$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'levels_show')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\LevelController::showAction',  'page' => 1,  'sort' => 'l.title',  'direction' => 'asc',));
                            }

                            // levels_new
                            if (0 === strpos($pathinfo, '/admin/aloes_admin_level/new') && preg_match('#^/admin/aloes_admin_level/new(?:/(?P<page>[^/]++)(?:/(?P<sort>[^/]++)(?:/(?P<direction>[^/]++))?)?)?$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'levels_new')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\LevelController::newAction',  'page' => 1,  'sort' => 'l.title',  'direction' => 'asc',));
                            }

                            // levels_create
                            if (0 === strpos($pathinfo, '/admin/aloes_admin_level/create') && preg_match('#^/admin/aloes_admin_level/create(?:/(?P<page>[^/]++)(?:/(?P<sort>[^/]++)(?:/(?P<direction>[^/]++))?)?)?$#s', $pathinfo, $matches)) {
                                if ($this->context->getMethod() != 'POST') {
                                    $allow[] = 'POST';
                                    goto not_levels_create;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'levels_create')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\LevelController::createAction',  'page' => 1,  'sort' => 'l.title',  'direction' => 'asc',));
                            }
                            not_levels_create:

                            // levels_edit
                            if (preg_match('#^/admin/aloes_admin_level/(?P<id>[^/]++)/edit(?:/(?P<page>[^/]++)(?:/(?P<sort>[^/]++)(?:/(?P<direction>[^/]++))?)?)?$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'levels_edit')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\LevelController::editAction',  'page' => 1,  'sort' => 'l.title',  'direction' => 'asc',));
                            }

                            // levels_update
                            if (preg_match('#^/admin/aloes_admin_level/(?P<id>[^/]++)/update(?:/(?P<page>[^/]++)(?:/(?P<sort>[^/]++)(?:/(?P<direction>[^/]++))?)?)?$#s', $pathinfo, $matches)) {
                                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                                    $allow = array_merge($allow, array('POST', 'PUT'));
                                    goto not_levels_update;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'levels_update')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\LevelController::updateAction',  'page' => 1,  'sort' => 'l.title',  'direction' => 'asc',));
                            }
                            not_levels_update:

                            // levels_delete
                            if (preg_match('#^/admin/aloes_admin_level/(?P<id>[^/]++)/delete(?:/(?P<page>[^/]++)(?:/(?P<sort>[^/]++)(?:/(?P<direction>[^/]++))?)?)?$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'levels_delete')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\LevelController::deleteAction',  'page' => 1,  'sort' => 'l.title',  'direction' => 'asc',));
                            }

                        }

                        if (0 === strpos($pathinfo, '/admin/aloes_admin_langue')) {
                            // langues
                            if (0 === strpos($pathinfo, '/admin/aloes_admin_langue/list') && preg_match('#^/admin/aloes_admin_langue/list(?:/(?P<page>[^/]++)(?:/(?P<sort>[^/]++)(?:/(?P<direction>[^/]++))?)?)?$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'langues')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\LangueController::indexAction',  'page' => 1,  'sort' => 'l.title',  'direction' => 'asc',));
                            }

                            // langues_show
                            if (preg_match('#^/admin/aloes_admin_langue/(?P<id>[^/]++)/show(?:/(?P<page>[^/]++)(?:/(?P<sort>[^/]++)(?:/(?P<direction>[^/]++))?)?)?$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'langues_show')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\LangueController::showAction',  'page' => 1,  'sort' => 'l.title',  'direction' => 'asc',));
                            }

                            // langues_new
                            if (0 === strpos($pathinfo, '/admin/aloes_admin_langue/new') && preg_match('#^/admin/aloes_admin_langue/new(?:/(?P<page>[^/]++)(?:/(?P<sort>[^/]++)(?:/(?P<direction>[^/]++))?)?)?$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'langues_new')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\LangueController::newAction',  'page' => 1,  'sort' => 'l.title',  'direction' => 'asc',));
                            }

                            // langues_create
                            if (0 === strpos($pathinfo, '/admin/aloes_admin_langue/create') && preg_match('#^/admin/aloes_admin_langue/create(?:/(?P<page>[^/]++)(?:/(?P<sort>[^/]++)(?:/(?P<direction>[^/]++))?)?)?$#s', $pathinfo, $matches)) {
                                if ($this->context->getMethod() != 'POST') {
                                    $allow[] = 'POST';
                                    goto not_langues_create;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'langues_create')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\LangueController::createAction',  'page' => 1,  'sort' => 'l.title',  'direction' => 'asc',));
                            }
                            not_langues_create:

                            // langues_edit
                            if (preg_match('#^/admin/aloes_admin_langue/(?P<id>[^/]++)/edit(?:/(?P<page>[^/]++)(?:/(?P<sort>[^/]++)(?:/(?P<direction>[^/]++))?)?)?$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'langues_edit')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\LangueController::editAction',  'page' => 1,  'sort' => 'l.title',  'direction' => 'asc',));
                            }

                            // langues_update
                            if (preg_match('#^/admin/aloes_admin_langue/(?P<id>[^/]++)/update(?:/(?P<page>[^/]++)(?:/(?P<sort>[^/]++)(?:/(?P<direction>[^/]++))?)?)?$#s', $pathinfo, $matches)) {
                                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                                    $allow = array_merge($allow, array('POST', 'PUT'));
                                    goto not_langues_update;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'langues_update')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\LangueController::updateAction',  'page' => 1,  'sort' => 'l.title',  'direction' => 'asc',));
                            }
                            not_langues_update:

                            // langues_delete
                            if (preg_match('#^/admin/aloes_admin_langue/(?P<id>[^/]++)/delete(?:/(?P<page>[^/]++)(?:/(?P<sort>[^/]++)(?:/(?P<direction>[^/]++))?)?)?$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'langues_delete')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\LangueController::deleteAction',  'page' => 1,  'sort' => 'l.title',  'direction' => 'asc',));
                            }

                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/aloes_admin_semestre')) {
                        // semestres
                        if (0 === strpos($pathinfo, '/admin/aloes_admin_semestre/list') && preg_match('#^/admin/aloes_admin_semestre/list(?:/(?P<page>[^/]++)(?:/(?P<sort>[^/]++)(?:/(?P<direction>[^/]++))?)?)?$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'semestres')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\SemestreController::indexAction',  'page' => 1,  'sort' => 'l.title',  'direction' => 'asc',));
                        }

                        // semestres_show
                        if (preg_match('#^/admin/aloes_admin_semestre/(?P<id>[^/]++)/show(?:/(?P<page>[^/]++)(?:/(?P<sort>[^/]++)(?:/(?P<direction>[^/]++))?)?)?$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'semestres_show')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\SemestreController::showAction',  'page' => 1,  'sort' => 'l.title',  'direction' => 'asc',));
                        }

                        // semestres_new
                        if (0 === strpos($pathinfo, '/admin/aloes_admin_semestre/new') && preg_match('#^/admin/aloes_admin_semestre/new(?:/(?P<page>[^/]++)(?:/(?P<sort>[^/]++)(?:/(?P<direction>[^/]++))?)?)?$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'semestres_new')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\SemestreController::newAction',  'page' => 1,  'sort' => 'l.title',  'direction' => 'asc',));
                        }

                        // semestres_create
                        if (0 === strpos($pathinfo, '/admin/aloes_admin_semestre/create') && preg_match('#^/admin/aloes_admin_semestre/create(?:/(?P<page>[^/]++)(?:/(?P<sort>[^/]++)(?:/(?P<direction>[^/]++))?)?)?$#s', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_semestres_create;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'semestres_create')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\SemestreController::createAction',  'page' => 1,  'sort' => 'l.title',  'direction' => 'asc',));
                        }
                        not_semestres_create:

                        // semestres_edit
                        if (preg_match('#^/admin/aloes_admin_semestre/(?P<id>[^/]++)/edit(?:/(?P<page>[^/]++)(?:/(?P<sort>[^/]++)(?:/(?P<direction>[^/]++))?)?)?$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'semestres_edit')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\SemestreController::editAction',  'page' => 1,  'sort' => 'l.title',  'direction' => 'asc',));
                        }

                        // semestres_update
                        if (preg_match('#^/admin/aloes_admin_semestre/(?P<id>[^/]++)/update(?:/(?P<page>[^/]++)(?:/(?P<sort>[^/]++)(?:/(?P<direction>[^/]++))?)?)?$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                                $allow = array_merge($allow, array('POST', 'PUT'));
                                goto not_semestres_update;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'semestres_update')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\SemestreController::updateAction',  'page' => 1,  'sort' => 'l.title',  'direction' => 'asc',));
                        }
                        not_semestres_update:

                        // semestres_delete
                        if (preg_match('#^/admin/aloes_admin_semestre/(?P<id>[^/]++)/delete(?:/(?P<page>[^/]++)(?:/(?P<sort>[^/]++)(?:/(?P<direction>[^/]++))?)?)?$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'semestres_delete')), array (  '_controller' => 'Ife\\AloesBundle\\Controller\\SemestreController::deleteAction',  'page' => 1,  'sort' => 'l.title',  'direction' => 'asc',));
                        }

                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }

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
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }

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
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }

        }

        // nelmio_api_doc_index
        if (0 === strpos($pathinfo, '/api/doc') && preg_match('#^/api/doc(?:/(?P<view>[^/]++))?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_nelmio_api_doc_index;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'nelmio_api_doc_index')), array (  '_controller' => 'Nelmio\\ApiDocBundle\\Controller\\ApiDocController::indexAction',  'view' => 'default',));
        }
        not_nelmio_api_doc_index:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
