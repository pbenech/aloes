<?php

/* IfeAloesBundle:AssessmentObjective:show.html.twig */
class __TwigTemplate_b80d26106e2c8cea6a54018782dfc5b23115b90968b2673e20e3fa2dadcae692 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("IfeAloesBundle:Course:link-layout.html.twig", "IfeAloesBundle:AssessmentObjective:show.html.twig", 1);
        $this->blocks = array(
            'link_title' => array($this, 'block_link_title'),
            'link_help_message' => array($this, 'block_link_help_message'),
            'link_content' => array($this, 'block_link_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "IfeAloesBundle:Course:link-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["macros"] = $this->loadTemplate("IfeAloesBundle:Course:linking.html.twig", "IfeAloesBundle:AssessmentObjective:show.html.twig", 2);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_link_title($context, array $blocks = array())
    {
        // line 5
        echo "   \t<div class='title-one'> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "title", array()), "html", null, true);
        echo " </div>
    <div class='title-two'> Objectifs liés à l'évaluation:  </div>  

";
    }

    // line 10
    public function block_link_help_message($context, array $blocks = array())
    {
        // line 11
        echo "    <div class=\"alert alert-info\">
        <span class=\"glyphicon glyphicon-info-sign\"> </span>
        La place que prend chaque objectif dans l'évaluation, calculée
        en fonction des pondérations, et telle que présentée aux
        étudiants.
    </div>
";
    }

    // line 19
    public function block_link_content($context, array $blocks = array())
    {
        // line 20
        echo "    ";
        if ((twig_length_filter($this->env, (isset($context["targets"]) ? $context["targets"] : $this->getContext($context, "targets"))) > 0)) {
            // line 21
            echo "        ";
            echo $context["macros"]->getlink_weights((isset($context["targets"]) ? $context["targets"] : $this->getContext($context, "targets")));
            echo "
    ";
        } else {
            // line 23
            echo "        <p class=\"alert alert-warning\"> 
            Il n'y a pas encore d'objectifs liés à cette évaluation. Vous pouvez
            en ajouter depuis l'onglet 'Selection'.
        </p>
    ";
        }
    }

    public function getTemplateName()
    {
        return "IfeAloesBundle:AssessmentObjective:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 23,  64 => 21,  61 => 20,  58 => 19,  48 => 11,  45 => 10,  36 => 5,  33 => 4,  29 => 1,  27 => 2,  11 => 1,);
    }
}
/* {% extends 'IfeAloesBundle:Course:link-layout.html.twig' %}*/
/* {% import  'IfeAloesBundle:Course:linking.html.twig' as macros %}*/
/* */
/* {% block link_title %}*/
/*    	<div class='title-one'> {{ course.title }} </div>*/
/*     <div class='title-two'> Objectifs liés à l'évaluation:  </div>  */
/* */
/* {% endblock %}*/
/* */
/* {% block link_help_message %}*/
/*     <div class="alert alert-info">*/
/*         <span class="glyphicon glyphicon-info-sign"> </span>*/
/*         La place que prend chaque objectif dans l'évaluation, calculée*/
/*         en fonction des pondérations, et telle que présentée aux*/
/*         étudiants.*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block link_content %}*/
/*     {% if targets|length > 0 %}*/
/*         {{ macros.link_weights(targets) }}*/
/*     {% else %}*/
/*         <p class="alert alert-warning"> */
/*             Il n'y a pas encore d'objectifs liés à cette évaluation. Vous pouvez*/
/*             en ajouter depuis l'onglet 'Selection'.*/
/*         </p>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
/* */
/* */
/* */
/* */
