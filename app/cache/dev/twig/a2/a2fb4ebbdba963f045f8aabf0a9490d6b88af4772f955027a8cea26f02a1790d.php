<?php

/* IfeAloesBundle:AssessmentObjective:select.html.twig */
class __TwigTemplate_d2a8b05b8a05a441273f27847af2088d4e48093e9a1a8b97535c65e45425d997 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("IfeAloesBundle:Course:link-layout.html.twig", "IfeAloesBundle:AssessmentObjective:select.html.twig", 1);
        $this->blocks = array(
            'link_content' => array($this, 'block_link_content'),
            'link_help_message' => array($this, 'block_link_help_message'),
            'link_title' => array($this, 'block_link_title'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "IfeAloesBundle:Course:link-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["macros"] = $this->loadTemplate("IfeAloesBundle:Course:linking.html.twig", "IfeAloesBundle:AssessmentObjective:select.html.twig", 3);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_link_content($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        echo $context["macros"]->getlink_selection_form((isset($context["target_name"]) ? $context["target_name"] : $this->getContext($context, "target_name")), $this->getAttribute((isset($context["routes"]) ? $context["routes"] : $this->getContext($context, "routes")), "update_selection", array()), (isset($context["source"]) ? $context["source"] : $this->getContext($context, "source")), (isset($context["target_parents"]) ? $context["target_parents"] : $this->getContext($context, "target_parents")), (isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")));
        echo "
";
    }

    // line 9
    public function block_link_help_message($context, array $blocks = array())
    {
        // line 10
        echo "    <div class=\"alert alert-info\">
        <span class=\"glyphicon glyphicon-info-sign\"> </span>
        Sélectionnez les objectifs spécifiques liés à cette
        évaluation. <br> Passez ensuite à l'onglet
        <strong> Pondération </strong> pour
        indiquer l'importance relative de chacun.
    </div>
";
    }

    // line 19
    public function block_link_title($context, array $blocks = array())
    {
        // line 20
        echo "   \t<div class='title-one'> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "title", array()), "html", null, true);
        echo " </div>
    <div class='title-two'> Objectifs liés à l'évaluation: </div>  
    
    ";
        // line 23
        if ((array_key_exists("msg", $context) && ((isset($context["msg"]) ? $context["msg"] : $this->getContext($context, "msg")) == 1))) {
            // line 24
            echo "    \t<br/><p><center><span  class=\"alert alert-success\"> SELECTION ENREGITREE AVEC SUCCES </span></center></p>
    ";
        }
        // line 25
        echo "    
";
    }

    public function getTemplateName()
    {
        return "IfeAloesBundle:AssessmentObjective:select.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 25,  69 => 24,  67 => 23,  60 => 20,  57 => 19,  46 => 10,  43 => 9,  36 => 6,  33 => 5,  29 => 1,  27 => 3,  11 => 1,);
    }
}
/* {% extends 'IfeAloesBundle:Course:link-layout.html.twig' %}*/
/* */
/* {% import 'IfeAloesBundle:Course:linking.html.twig' as macros %}*/
/* */
/* {% block link_content %}*/
/*     {{ macros.link_selection_form(target_name, routes.update_selection, source, target_parents,menu) }}*/
/* {% endblock %}*/
/* */
/* {% block link_help_message %}*/
/*     <div class="alert alert-info">*/
/*         <span class="glyphicon glyphicon-info-sign"> </span>*/
/*         Sélectionnez les objectifs spécifiques liés à cette*/
/*         évaluation. <br> Passez ensuite à l'onglet*/
/*         <strong> Pondération </strong> pour*/
/*         indiquer l'importance relative de chacun.*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block link_title %}*/
/*    	<div class='title-one'> {{ course.title }} </div>*/
/*     <div class='title-two'> Objectifs liés à l'évaluation: </div>  */
/*     */
/*     {% if msg is defined and msg==1 %}*/
/*     	<br/><p><center><span  class="alert alert-success"> SELECTION ENREGITREE AVEC SUCCES </span></center></p>*/
/*     {% endif%}    */
/* {% endblock %}*/
/* */
