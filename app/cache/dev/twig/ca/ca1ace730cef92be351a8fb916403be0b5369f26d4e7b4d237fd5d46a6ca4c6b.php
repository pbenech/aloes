<?php

/* IfeAloesBundle:Tableaux:plan.html.twig */
class __TwigTemplate_9d29f1896f0a4f50a025f23b16103aa8a3866fbd040d9e94827f30ff1c960209 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::public.html.twig", "IfeAloesBundle:Tableaux:plan.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'title' => array($this, 'block_title'),
            'sidebar_nav' => array($this, 'block_sidebar_nav'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::public.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 4
        $context["program"] = $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "program", array());
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        $this->loadTemplate("IfeAloesBundle:Tableaux:resum.html.twig", "IfeAloesBundle:Tableaux:plan.html.twig", 7)->display($context);
        // line 8
        echo "\t\t
";
    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        // line 12
        echo "    <title> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "label", array()), "html", null, true);
        echo " </title>
";
    }

    // line 16
    public function block_sidebar_nav($context, array $blocks = array())
    {
        echo "\t
";
    }

    public function getTemplateName()
    {
        return "IfeAloesBundle:Tableaux:plan.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 16,  46 => 12,  43 => 11,  38 => 8,  36 => 7,  33 => 6,  29 => 1,  27 => 4,  11 => 1,);
    }
}
/* {% extends '::public.html.twig' %}*/
/* */
/* */
/* {% set program = course.program %}*/
/* */
/* {% block content -%} */
/* 	{% include "IfeAloesBundle:Tableaux:resum.html.twig"  %}*/
/* 		*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     <title> {{ course.label }} </title>*/
/* {% endblock %}*/
/* */
/* */
/* {% block sidebar_nav %}	*/
/* {% endblock %}*/
/* */
