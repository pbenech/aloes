<?php

/* IfeAloesBundle:Assessment:edit.html.twig */
class __TwigTemplate_fe658e75856988cdb868454a544b9e2527ef8f6aed4d03243d7a693a52f60b82 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("IfeAloesBundle:Course:layout.html.twig", "IfeAloesBundle:Assessment:edit.html.twig", 1);
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
        // line 4
        $this->loadTemplate("IfeAloesBundle:Assessment:edit.html.twig", "IfeAloesBundle:Assessment:edit.html.twig", 4, "46139366")->display(array_merge($context, array("children" => $this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "assessments", array()))));
        // line 26
        echo "
";
    }

    public function getTemplateName()
    {
        return "IfeAloesBundle:Assessment:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 26,  31 => 4,  28 => 3,  11 => 1,);
    }
}


/* IfeAloesBundle:Assessment:edit.html.twig */
class __TwigTemplate_fe658e75856988cdb868454a544b9e2527ef8f6aed4d03243d7a693a52f60b82_46139366 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 4
        $this->parent = $this->loadTemplate("IfeAloesBundle:Aloes:edit-general-item.html.twig", "IfeAloesBundle:Assessment:edit.html.twig", 4);
        $this->blocks = array(
            'parent_title' => array($this, 'block_parent_title'),
            'children_title' => array($this, 'block_children_title'),
            'back_to_index' => array($this, 'block_back_to_index'),
            'child_form' => array($this, 'block_child_form'),
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

    // line 6
    public function block_parent_title($context, array $blocks = array())
    {
        // line 7
        echo "            <h1> Thématique - <small> Edition </small> </h1>
        ";
    }

    // line 10
    public function block_children_title($context, array $blocks = array())
    {
        // line 11
        echo "            <h2> Evaluations associées </h2>
        ";
    }

    // line 14
    public function block_back_to_index($context, array $blocks = array())
    {
        // line 15
        echo "            <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_topic", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
        echo "\">
                <span class=\"glyphicon glyphicon-arrow-left\"></span>
                Retour à la liste des thématiques
            </a>
        ";
    }

    // line 21
    public function block_child_form($context, array $blocks = array())
    {
        // line 22
        echo "           ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), 'form');
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "IfeAloesBundle:Assessment:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 22,  111 => 21,  101 => 15,  98 => 14,  93 => 11,  90 => 10,  85 => 7,  82 => 6,  62 => 4,  33 => 26,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'IfeAloesBundle:Course:layout.html.twig' %}*/
/* */
/* {% block content -%}*/
/*     {% embed 'IfeAloesBundle:Aloes:edit-general-item.html.twig' with {'children':edit_form.assessments} %}*/
/* */
/*         {% block parent_title %}*/
/*             <h1> Thématique - <small> Edition </small> </h1>*/
/*         {% endblock %}*/
/* */
/*         {% block children_title %}*/
/*             <h2> Evaluations associées </h2>*/
/*         {% endblock %}*/
/*  */
/*         {% block back_to_index %}*/
/*             <a href="{{ path('course_topic', {id:course.id}) }}">*/
/*                 <span class="glyphicon glyphicon-arrow-left"></span>*/
/*                 Retour à la liste des thématiques*/
/*             </a>*/
/*         {% endblock %}*/
/* */
/*         {% block child_form %}*/
/*            {{ form(child) }}*/
/*         {% endblock %}*/
/* */
/*     {% endembed %}*/
/* */
/* {% endblock %}*/
/* */
