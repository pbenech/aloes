<?php

/* IfeAloesBundle:Course:public.html.twig */
class __TwigTemplate_1850cc446e33eac8c4c76f2eb0022749da250d9adb1249e037d645e465235637 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::public.html.twig", "IfeAloesBundle:Course:public.html.twig", 1);
        $this->blocks = array(
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
    public function block_title($context, array $blocks = array())
    {
        // line 7
        echo "    <title> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "label", array()), "html", null, true);
        echo " </title>
";
    }

    // line 11
    public function block_sidebar_nav($context, array $blocks = array())
    {
        // line 12
        echo "<!-- 
\t<h3>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "label", array()), "html", null, true);
        echo " </h3> \t
\t
    <ul class=\"nav nav-sidebar\">
        <li><a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
        echo "\"
            ";
        // line 17
        if ((array_key_exists("menu", $context) && ((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")) == "programs_courses"))) {
            // line 18
            echo "        \t\tclass=\"current\"
        \t";
        }
        // line 19
        echo "  
        > Présentation </a></li>
        
        <li><a href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_infos_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
        echo "\"
            ";
        // line 23
        if ((array_key_exists("menu", $context) && ((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")) == "infos_courses"))) {
            // line 24
            echo "        \t\tclass=\"current\"
        \t";
        }
        // line 25
        echo "  
        > Informations du cours</a></li>        
        
        <li><a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_objective", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
        echo "\"
            ";
        // line 29
        if ((array_key_exists("menu", $context) && ((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")) == "course_objective"))) {
            // line 30
            echo "        \t\tclass=\"current\"
        \t";
        }
        // line 31
        echo "          
        > Objectifs </a></li>
        <li><a href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_assessment", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
        echo "\"
            ";
        // line 34
        if ((array_key_exists("menu", $context) && ((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")) == "course_assessment"))) {
            // line 35
            echo "        \t\tclass=\"current\"
        \t";
        }
        // line 36
        echo "             
         
        > Séquences & Evaluations </a></li>
  
        <li><a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_event", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
        echo "\"   
            ";
        // line 41
        if ((array_key_exists("menu", $context) && ((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")) == "course_event"))) {
            // line 42
            echo "        \t\tclass=\"current\"
        \t";
        }
        // line 43
        echo "         
        > Ev&egrave;nements </a></li>
        
        <li><a href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("program_competences_cours", array("id" => $this->getAttribute((isset($context["program"]) ? $context["program"] : $this->getContext($context, "program")), "id", array()), "selection" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
        echo "\"
            ";
        // line 47
        if ((array_key_exists("menu", $context) && ((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")) == "competence_assessment"))) {
            // line 48
            echo "        \t\tclass=\"current\"
        \t";
        }
        // line 49
        echo "             
                
        
        > Compétences </a></li>


        <li><a href=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_resum", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
        echo "\"
            ";
        // line 56
        if ((array_key_exists("menu", $context) && ((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")) == "course_resum"))) {
            // line 57
            echo "        \t\tclass=\"current\"
        \t";
        }
        // line 58
        echo "                   
        target='student'> Synthèse </a></li> 

    </ul>

-->    
";
    }

    public function getTemplateName()
    {
        return "IfeAloesBundle:Course:public.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 58,  153 => 57,  151 => 56,  147 => 55,  139 => 49,  135 => 48,  133 => 47,  129 => 46,  124 => 43,  120 => 42,  118 => 41,  114 => 40,  108 => 36,  104 => 35,  102 => 34,  98 => 33,  94 => 31,  90 => 30,  88 => 29,  84 => 28,  79 => 25,  75 => 24,  73 => 23,  69 => 22,  64 => 19,  60 => 18,  58 => 17,  54 => 16,  48 => 13,  45 => 12,  42 => 11,  35 => 7,  32 => 6,  28 => 1,  26 => 4,  11 => 1,);
    }
}
/* {% extends '::public.html.twig' %}*/
/* */
/* */
/* {% set program = course.program %}*/
/* */
/* {% block title %}*/
/*     <title> {{ course.label }} </title>*/
/* {% endblock %}*/
/* */
/* */
/* {% block sidebar_nav %}*/
/* <!-- */
/* 	<h3>{{course.label}} </h3> 	*/
/* 	*/
/*     <ul class="nav nav-sidebar">*/
/*         <li><a href="{{path('course_show', {id:course.id})}}"*/
/*             {% if menu is defined and menu=="programs_courses"%}*/
/*         		class="current"*/
/*         	{% endif%}  */
/*         > Présentation </a></li>*/
/*         */
/*         <li><a href="{{path('course_infos_show', {id:course.id})}}"*/
/*             {% if menu is defined and menu=="infos_courses"%}*/
/*         		class="current"*/
/*         	{% endif%}  */
/*         > Informations du cours</a></li>        */
/*         */
/*         <li><a href="{{path('course_objective', {id:course.id})}}"*/
/*             {% if menu is defined and menu=="course_objective"%}*/
/*         		class="current"*/
/*         	{% endif%}          */
/*         > Objectifs </a></li>*/
/*         <li><a href="{{path('course_assessment', {id:course.id })}}"*/
/*             {% if menu is defined and menu=="course_assessment"%}*/
/*         		class="current"*/
/*         	{% endif%}             */
/*          */
/*         > Séquences & Evaluations </a></li>*/
/*   */
/*         <li><a href="{{path('course_event', {id:course.id})}}"   */
/*             {% if menu is defined and menu=="course_event"%}*/
/*         		class="current"*/
/*         	{% endif%}         */
/*         > Ev&egrave;nements </a></li>*/
/*         */
/*         <li><a href="{{path('program_competences_cours', {id:program.id,selection:course.id}) }}"*/
/*             {% if menu is defined and menu=="competence_assessment"%}*/
/*         		class="current"*/
/*         	{% endif%}             */
/*                 */
/*         */
/*         > Compétences </a></li>*/
/* */
/* */
/*         <li><a href="{{path('course_resum', {id:course.id}) }}"*/
/*             {% if menu is defined and menu=="course_resum"%}*/
/*         		class="current"*/
/*         	{% endif%}                   */
/*         target='student'> Synthèse </a></li> */
/* */
/*     </ul>*/
/* */
/* -->    */
/* {% endblock %}*/
/* */
