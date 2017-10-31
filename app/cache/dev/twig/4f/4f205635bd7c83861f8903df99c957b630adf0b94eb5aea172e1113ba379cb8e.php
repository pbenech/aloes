<?php

/* IfeAloesBundle:GeneralObjective:edit.html.twig */
class __TwigTemplate_b2c327b3cc9b62278f96a85a665d53d8d568fb297c7a63131e460d2854ffb78a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("IfeAloesBundle:Course:layout.html.twig", "IfeAloesBundle:GeneralObjective:edit.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "IfeAloesBundle:Course:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 5
        $this->loadTemplate("IfeAloesBundle:GeneralObjective:edit.html.twig", "IfeAloesBundle:GeneralObjective:edit.html.twig", 5, "1457526638")->display(array_merge($context, array("children" => $this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "specificObjectives", array()))));
        // line 27
        echo "
";
    }

    public function getTemplateName()
    {
        return "IfeAloesBundle:GeneralObjective:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 27,  31 => 5,  28 => 3,  11 => 1,);
    }
}


/* IfeAloesBundle:GeneralObjective:edit.html.twig */
class __TwigTemplate_b2c327b3cc9b62278f96a85a665d53d8d568fb297c7a63131e460d2854ffb78a_1457526638 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 5
        $this->parent = $this->loadTemplate("IfeAloesBundle:Aloes:edit-general-item.html.twig", "IfeAloesBundle:GeneralObjective:edit.html.twig", 5);
        $this->blocks = array(
            'parent_title' => array($this, 'block_parent_title'),
            'children_title' => array($this, 'block_children_title'),
            'back_to_index' => array($this, 'block_back_to_index'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "IfeAloesBundle:Aloes:edit-general-item.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_parent_title($context, array $blocks = array())
    {
        // line 9
        echo "   \t\t<div class='title-one'> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "title", array()), "html", null, true);
        echo " </div>
    \t<div class='title-two'> Objectif général : Edition</div>    \t
        
        ";
    }

    // line 14
    public function block_children_title($context, array $blocks = array())
    {
        // line 15
        echo "            <h2> Objectifs spécifiques associés </h2>
        ";
    }

    // line 18
    public function block_back_to_index($context, array $blocks = array())
    {
        echo " 
        
            <a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_objective", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
        echo "\">
                <span class=\"glyphicon glyphicon-arrow-left\"></span>
                Retour à la liste des objectifs
            </a>
        ";
    }

    public function getTemplateName()
    {
        return "IfeAloesBundle:GeneralObjective:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 20,  101 => 18,  96 => 15,  93 => 14,  84 => 9,  81 => 8,  62 => 5,  33 => 27,  31 => 5,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'IfeAloesBundle:Course:layout.html.twig' %}*/
/* */
/* {% block content -%}*/
/* */
/*     {% embed 'IfeAloesBundle:Aloes:edit-general-item.html.twig' with {'children':edit_form.specificObjectives} %}*/
/* */
/* 	*/
/*         {% block parent_title %}*/
/*    		<div class='title-one'> {{ course.title }} </div>*/
/*     	<div class='title-two'> Objectif général : Edition</div>    	*/
/*         */
/*         {% endblock %}*/
/* */
/*         {% block children_title %}*/
/*             <h2> Objectifs spécifiques associés </h2>*/
/*         {% endblock %}*/
/* */
/*         {% block back_to_index %} */
/*         */
/*             <a href="{{ path('course_objective', {id:course.id}) }}">*/
/*                 <span class="glyphicon glyphicon-arrow-left"></span>*/
/*                 Retour à la liste des objectifs*/
/*             </a>*/
/*         {% endblock %}*/
/* */
/*     {% endembed %}*/
/* */
/* {% endblock %}*/
/* */
