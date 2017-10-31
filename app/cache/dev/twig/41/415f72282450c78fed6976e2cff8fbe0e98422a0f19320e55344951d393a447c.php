<?php

/* IfeAloesBundle:Program:layout.html.twig */
class __TwigTemplate_0edfb22182acc9bd4524cfb2c3708d92e0050ca6d4c9582ac3e97d652315c14d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "IfeAloesBundle:Program:layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header_nav' => array($this, 'block_header_nav'),
            'sidebar_nav' => array($this, 'block_sidebar_nav'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "    <title> @loes </title>
";
    }

    // line 7
    public function block_header_nav($context, array $blocks = array())
    {
        // line 8
        echo "    <div class=\"btn-group btn-breadcrumb\">
        <a class=\"btn btn-default\" href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("programs");
        echo "\"> Liste des programmes </a></li> 
        <a class=\"btn btn-default active\" href=\"#\"> 
\t   \t\t";
        // line 11
        if (($this->getAttribute((isset($context["program"]) ? $context["program"] : null), "level", array(), "any", true, true) && ($this->getAttribute((isset($context["program"]) ? $context["program"] : $this->getContext($context, "program")), "level", array()) != null))) {
            // line 12
            echo "\t\t\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["program"]) ? $context["program"] : $this->getContext($context, "program")), "level", array()), "html", null, true);
            echo " - 
\t\t\t";
        }
        // line 14
        echo "\t\t\t";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["program"]) ? $context["program"] : $this->getContext($context, "program")), "title", array()), "html", null, true);
        echo " 
        </a>
        
    </div> 
    <br/><br/>
";
    }

    // line 21
    public function block_sidebar_nav($context, array $blocks = array())
    {
        // line 22
        echo "  
\t<nav class=\"navbar navbar-default\">
  \t\t<div class=\"container-fluid\">
\t\t    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
\t\t      <ul class=\"nav navbar-nav \"> 

\t\t        <li><a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("programs_show", array("id" => $this->getAttribute((isset($context["program"]) ? $context["program"] : $this->getContext($context, "program")), "id", array()))), "html", null, true);
        echo "\"
\t\t        \t";
        // line 29
        if ((array_key_exists("menu", $context) && ((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")) == "programs_show"))) {
            // line 30
            echo "\t\t        \t\tclass=\"current\"
\t\t        \t";
        }
        // line 31
        echo "         
\t\t        \t> Présentation </a></li>\t\t        \t
\t\t        \t
\t\t        <li><a href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("parcours_list", array("id" => $this->getAttribute((isset($context["program"]) ? $context["program"] : $this->getContext($context, "program")), "id", array()))), "html", null, true);
        echo "\"
\t\t        \t";
        // line 35
        if ((array_key_exists("menu", $context) && ((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")) == "parcours_list"))) {
            // line 36
            echo "\t\t        \t\tclass=\"current\"
\t\t        \t";
        }
        // line 37
        echo "         
\t\t        \t> Parcours </a></li>\t\t        \t\t\t        \t\t        \t
\t\t        \t
\t\t        <li><a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("programs_courses", array("id" => $this->getAttribute((isset($context["program"]) ? $context["program"] : $this->getContext($context, "program")), "id", array()))), "html", null, true);
        echo "\"
\t\t            ";
        // line 41
        if ((array_key_exists("menu", $context) && ((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")) == "programs_courses"))) {
            // line 42
            echo "\t\t        \t\tclass=\"current\"
\t\t        \t";
        }
        // line 43
        echo "  
\t\t        \t> Cours (UE) </a></li>
\t\t        \t
\t\t        \t
\t\t        <li><a href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("program_competences2", array("id" => $this->getAttribute((isset($context["program"]) ? $context["program"] : $this->getContext($context, "program")), "id", array()))), "html", null, true);
        echo "\"
\t\t            ";
        // line 48
        if ((array_key_exists("menu", $context) && ((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")) == "program_competences2"))) {
            // line 49
            echo "\t\t        \t\tclass=\"current\"
\t\t        \t";
        }
        // line 50
        echo "                  
\t\t        > Référentiel de compétences </a></li>
\t\t        
\t\t\t    <li><a href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tableaux_bord", array("niv" => 2, "program" => $this->getAttribute((isset($context["program"]) ? $context["program"] : $this->getContext($context, "program")), "id", array()))), "html", null, true);
        echo "\"
\t\t\t        \t";
        // line 54
        if ((array_key_exists("menu", $context) && ((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")) == "tableaux"))) {
            // line 55
            echo "\t\t\t        \t\tclass=\"current\"
\t\t\t        \t";
        }
        // line 56
        echo "> Tableaux de bord </a></li>\t\t

\t\t        
\t\t\t    <li><a href=\"";
        // line 59
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\">
\t\t\t        \t Déconnexion </a></li>  
\t\t  
\t\t      </ul>
\t\t    </div><!-- /.navbar-collapse -->  
  \t\t</div><!-- /.container-fluid -->
\t</nav>
 
\t

    
";
    }

    public function getTemplateName()
    {
        return "IfeAloesBundle:Program:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 59,  150 => 56,  146 => 55,  144 => 54,  140 => 53,  135 => 50,  131 => 49,  129 => 48,  125 => 47,  119 => 43,  115 => 42,  113 => 41,  109 => 40,  104 => 37,  100 => 36,  98 => 35,  94 => 34,  89 => 31,  85 => 30,  83 => 29,  79 => 28,  71 => 22,  68 => 21,  57 => 14,  51 => 12,  49 => 11,  44 => 9,  41 => 8,  38 => 7,  33 => 4,  30 => 3,  11 => 1,);
    }
}
/* {% extends '::layout.html.twig' %}*/
/* */
/* {% block title %}*/
/*     <title> @loes </title>*/
/* {% endblock %}*/
/* */
/* {% block header_nav %}*/
/*     <div class="btn-group btn-breadcrumb">*/
/*         <a class="btn btn-default" href="{{path('programs')}}"> Liste des programmes </a></li> */
/*         <a class="btn btn-default active" href="#"> */
/* 	   		{% if program.level is defined and program.level !=null %}*/
/* 				{{ program.level }} - */
/* 			{% endif %}*/
/* 			{{ program.title }} */
/*         </a>*/
/*         */
/*     </div> */
/*     <br/><br/>*/
/* {% endblock %}*/
/* */
/* {% block sidebar_nav %}*/
/*   */
/* 	<nav class="navbar navbar-default">*/
/*   		<div class="container-fluid">*/
/* 		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">*/
/* 		      <ul class="nav navbar-nav "> */
/* */
/* 		        <li><a href="{{path('programs_show',{id:program.id})}}"*/
/* 		        	{% if menu is defined and menu=="programs_show"%}*/
/* 		        		class="current"*/
/* 		        	{% endif%}         */
/* 		        	> Présentation </a></li>		        	*/
/* 		        	*/
/* 		        <li><a href="{{path('parcours_list',{id:program.id})}}"*/
/* 		        	{% if menu is defined and menu=="parcours_list"%}*/
/* 		        		class="current"*/
/* 		        	{% endif%}         */
/* 		        	> Parcours </a></li>		        			        		        	*/
/* 		        	*/
/* 		        <li><a href="{{path('programs_courses', {id:program.id})}}"*/
/* 		            {% if menu is defined and menu=="programs_courses"%}*/
/* 		        		class="current"*/
/* 		        	{% endif%}  */
/* 		        	> Cours (UE) </a></li>*/
/* 		        	*/
/* 		        	*/
/* 		        <li><a href="{{path('program_competences2', {id:program.id})}}"*/
/* 		            {% if menu is defined and menu=="program_competences2"%}*/
/* 		        		class="current"*/
/* 		        	{% endif%}                  */
/* 		        > Référentiel de compétences </a></li>*/
/* 		        */
/* 			    <li><a href="{{path('tableaux_bord', {niv:2, program:program.id})}}"*/
/* 			        	{% if menu is defined and menu=="tableaux"%}*/
/* 			        		class="current"*/
/* 			        	{% endif%}> Tableaux de bord </a></li>		*/
/* */
/* 		        */
/* 			    <li><a href="{{ path('fos_user_security_logout') }}">*/
/* 			        	 Déconnexion </a></li>  */
/* 		  */
/* 		      </ul>*/
/* 		    </div><!-- /.navbar-collapse -->  */
/*   		</div><!-- /.container-fluid -->*/
/* 	</nav>*/
/*  */
/* 	*/
/* */
/*     */
/* {% endblock %}*/
/* */
