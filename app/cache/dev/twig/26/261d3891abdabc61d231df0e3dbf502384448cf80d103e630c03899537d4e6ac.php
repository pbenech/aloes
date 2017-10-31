<?php

/* IfeAloesBundle:ObjectiveCompetence:show.html.twig */
class __TwigTemplate_31260c03c98e79fdf9b110b51589bcb407a280c732358672af042cd32bfcc830 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("IfeAloesBundle:Course:link-layout.html.twig", "IfeAloesBundle:ObjectiveCompetence:show.html.twig", 1);
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
        $context["macros"] = $this->loadTemplate("IfeAloesBundle:Course:linking.html.twig", "IfeAloesBundle:ObjectiveCompetence:show.html.twig", 2);
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
    <div class='title-two'> Compétences liées à l'objectif:</div>

";
    }

    // line 10
    public function block_link_help_message($context, array $blocks = array())
    {
        // line 11
        echo "    <div class=\"alert alert-info\">
        <span class=\"glyphicon glyphicon-info-sign\"> </span>
        L'importance de chaque compétence dans la poursuite de
        l'objectif, calculée en fonction des pondérations, et telle
        que présentée aux étudiants.
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
            Il n'y a pas encore de compétences liées à cet objectif. Vous pouvez
            en ajouter depuis l'onglet 'Selection'.
        </p>
    ";
        }
    }

    public function getTemplateName()
    {
        return "IfeAloesBundle:ObjectiveCompetence:show.html.twig";
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
/*     <div class='title-two'> Compétences liées à l'objectif:</div>*/
/* */
/* {% endblock %}*/
/* */
/* {% block link_help_message %}*/
/*     <div class="alert alert-info">*/
/*         <span class="glyphicon glyphicon-info-sign"> </span>*/
/*         L'importance de chaque compétence dans la poursuite de*/
/*         l'objectif, calculée en fonction des pondérations, et telle*/
/*         que présentée aux étudiants.*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block link_content %}*/
/*     {% if targets|length > 0 %}*/
/*         {{ macros.link_weights(targets) }}*/
/*     {% else %}*/
/*         <p class="alert alert-warning"> */
/*             Il n'y a pas encore de compétences liées à cet objectif. Vous pouvez*/
/*             en ajouter depuis l'onglet 'Selection'.*/
/*         </p>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
/* */
/* */
/* */
/* */
