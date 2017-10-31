<?php

/* IfeAloesBundle:ObjectiveCompetence:rate.html.twig */
class __TwigTemplate_10cb57ed2d5a84beafdf2e2ecc11797e1cd6947a467514e3f20bb226b3ef8b43 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("IfeAloesBundle:Course:link-layout.html.twig", "IfeAloesBundle:ObjectiveCompetence:rate.html.twig", 1);
        $this->blocks = array(
            'link_content' => array($this, 'block_link_content'),
            'link_title' => array($this, 'block_link_title'),
            'link_help_message' => array($this, 'block_link_help_message'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "IfeAloesBundle:Course:link-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["macros"] = $this->loadTemplate("IfeAloesBundle:Course:linking.html.twig", "IfeAloesBundle:ObjectiveCompetence:rate.html.twig", 3);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_link_content($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        if ( !(null === (isset($context["rating_form"]) ? $context["rating_form"] : $this->getContext($context, "rating_form")))) {
            // line 7
            echo "        ";
            echo $context["macros"]->getlink_rating_form((isset($context["rating_form"]) ? $context["rating_form"] : $this->getContext($context, "rating_form")), "competenceLinks", "competence");
            echo "
    ";
        } else {
            // line 9
            echo "        <p class=\"alert alert-warning\"> 
            Il n'y a pas encore de compétences liées à cet objectif. Vous pouvez
            en ajouter depuis l'onglet 'Selection'.
        </p>
    ";
        }
    }

    // line 16
    public function block_link_title($context, array $blocks = array())
    {
        // line 17
        echo "   \t<div class='title-one'> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "title", array()), "html", null, true);
        echo " </div>
    <div class='title-two'> Pondération des compétences liées à l'objectif:</div>  

    ";
        // line 20
        if ((array_key_exists("msg", $context) && ((isset($context["msg"]) ? $context["msg"] : $this->getContext($context, "msg")) == 1))) {
            // line 21
            echo "    \t<br/><p><center><span  class=\"alert alert-success\"> PONDERATION ENREGITREE AVEC SUCCES </span></center></p>
    ";
        }
        // line 22
        echo "        
    
";
    }

    // line 26
    public function block_link_help_message($context, array $blocks = array())
    {
        // line 27
        echo "    <div class=\"alert alert-info\">
        <span class=\"glyphicon glyphicon-info-sign\"> </span>
        Indiquez sur une échelle de 1 à 3 le niveau de compétence atteint par cet objectif
    </div>
";
    }

    public function getTemplateName()
    {
        return "IfeAloesBundle:ObjectiveCompetence:rate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 27,  76 => 26,  70 => 22,  66 => 21,  64 => 20,  57 => 17,  54 => 16,  45 => 9,  39 => 7,  36 => 6,  33 => 5,  29 => 1,  27 => 3,  11 => 1,);
    }
}
/* {% extends 'IfeAloesBundle:Course:link-layout.html.twig' %}*/
/* */
/* {% import 'IfeAloesBundle:Course:linking.html.twig' as macros %}*/
/* */
/* {% block link_content %}*/
/*     {% if rating_form is not null %}*/
/*         {{ macros.link_rating_form(rating_form, 'competenceLinks', 'competence') }}*/
/*     {% else %}*/
/*         <p class="alert alert-warning"> */
/*             Il n'y a pas encore de compétences liées à cet objectif. Vous pouvez*/
/*             en ajouter depuis l'onglet 'Selection'.*/
/*         </p>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block link_title %}*/
/*    	<div class='title-one'> {{ course.title }} </div>*/
/*     <div class='title-two'> Pondération des compétences liées à l'objectif:</div>  */
/* */
/*     {% if msg is defined and msg==1 %}*/
/*     	<br/><p><center><span  class="alert alert-success"> PONDERATION ENREGITREE AVEC SUCCES </span></center></p>*/
/*     {% endif%}        */
/*     */
/* {% endblock %}*/
/* */
/* {% block link_help_message %}*/
/*     <div class="alert alert-info">*/
/*         <span class="glyphicon glyphicon-info-sign"> </span>*/
/*         Indiquez sur une échelle de 1 à 3 le niveau de compétence atteint par cet objectif*/
/*     </div>*/
/* {% endblock %}*/
/* */
