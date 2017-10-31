<?php

/* IfeAloesBundle:ObjectiveCompetence:select.html.twig */
class __TwigTemplate_95d119a953f0c50a96444b1799a55a342c0950602e5c4b4cec58f271200cac0c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("IfeAloesBundle:Course:link-layout.html.twig", "IfeAloesBundle:ObjectiveCompetence:select.html.twig", 1);
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
        $context["macros"] = $this->loadTemplate("IfeAloesBundle:Course:linking.html.twig", "IfeAloesBundle:ObjectiveCompetence:select.html.twig", 3);
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
        echo "
    <div class=\"alert alert-info\">
        <span class=\"glyphicon glyphicon-info-sign\"> </span>
        Sélectionnez les compétences spécifiques liées à cet
        objectif. Passez ensuite à l'onglet
        <strong> Pondération </strong> 
        pour indiquer l'importance relative de chacune.
    </div>
";
    }

    // line 20
    public function block_link_title($context, array $blocks = array())
    {
        // line 21
        echo "
   \t<div class='title-one'> ";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "title", array()), "html", null, true);
        echo " </div>
    <div class='title-two'> Compétences liées à l'objectif: </div>  

    
    ";
        // line 26
        if ((array_key_exists("msg", $context) && ((isset($context["msg"]) ? $context["msg"] : $this->getContext($context, "msg")) == 1))) {
            echo " 
    \t<br/><p><center><span  class=\"alert alert-success\"> SELECTION ENREGITREE AVEC SUCCES </span></center></p>
    ";
        }
    }

    public function getTemplateName()
    {
        return "IfeAloesBundle:ObjectiveCompetence:select.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 26,  64 => 22,  61 => 21,  58 => 20,  46 => 10,  43 => 9,  36 => 6,  33 => 5,  29 => 1,  27 => 3,  11 => 1,);
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
/* */
/*     <div class="alert alert-info">*/
/*         <span class="glyphicon glyphicon-info-sign"> </span>*/
/*         Sélectionnez les compétences spécifiques liées à cet*/
/*         objectif. Passez ensuite à l'onglet*/
/*         <strong> Pondération </strong> */
/*         pour indiquer l'importance relative de chacune.*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block link_title %}*/
/* */
/*    	<div class='title-one'> {{ course.title }} </div>*/
/*     <div class='title-two'> Compétences liées à l'objectif: </div>  */
/* */
/*     */
/*     {% if msg is defined and msg==1 %} */
/*     	<br/><p><center><span  class="alert alert-success"> SELECTION ENREGITREE AVEC SUCCES </span></center></p>*/
/*     {% endif%}*/
/* {% endblock %}*/
/* */
