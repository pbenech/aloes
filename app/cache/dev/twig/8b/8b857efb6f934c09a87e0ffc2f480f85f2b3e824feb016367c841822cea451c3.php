<?php

/* IfeAloesBundle:Course:layout.html.twig */
class __TwigTemplate_3cad859a4b6660f2feda6cfe8247ae99e7648f4e1b0a42fd9a578f85ff3f668e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout.html.twig", "IfeAloesBundle:Course:layout.html.twig", 3);
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
        // line 6
        $context["program"] = $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "program", array());
        // line 3
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        // line 9
        echo "    <title> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "label", array()), "html", null, true);
        echo " </title>
";
    }

    // line 12
    public function block_header_nav($context, array $blocks = array())
    {
        // line 13
        echo "    <div class=\"btn-group btn-breadcrumb\">
        <a  class=\"btn btn-default\" href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("programs");
        echo "\"> Liste des programmes </a>
        <a  class=\"btn btn-default\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("programs_courses", array("id" => $this->getAttribute((isset($context["program"]) ? $context["program"] : $this->getContext($context, "program")), "id", array()))), "html", null, true);
        echo "\"> 
\t   \t\t";
        // line 16
        if (($this->getAttribute((isset($context["program"]) ? $context["program"] : null), "level", array(), "any", true, true) && ($this->getAttribute((isset($context["program"]) ? $context["program"] : $this->getContext($context, "program")), "level", array()) != null))) {
            // line 17
            echo "\t\t\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["program"]) ? $context["program"] : $this->getContext($context, "program")), "level", array()), "html", null, true);
            echo " - 
\t\t\t";
        }
        // line 19
        echo "\t\t\t";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["program"]) ? $context["program"] : $this->getContext($context, "program")), "title", array()), "html", null, true);
        echo "           
        
        </a>
         <a  class=\"btn btn-default active\" href=\"#\">";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "label", array()), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "title", array()), "html", null, true);
        echo " </a>
    </div>
    <br/><br/>
";
    }

    // line 27
    public function block_sidebar_nav($context, array $blocks = array())
    {
        // line 28
        echo "
\t<nav class=\"navbar navbar-default\">
  \t\t<div class=\"container-fluid\">
\t\t    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
\t\t      <ul class=\"nav navbar-nav\">
\t\t\t\t\t      
\t\t\t        <li><a href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
        echo "\"
\t\t\t            ";
        // line 35
        if ((array_key_exists("menu", $context) && ((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")) == "programs_courses"))) {
            // line 36
            echo "\t\t\t        \t\tclass=\"current\"
\t\t\t        \t";
        }
        // line 37
        echo "   
\t\t\t        > Présentation </a></li>
\t\t\t         
\t\t\t        <li><a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_infos_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
        echo "\"
\t\t\t            ";
        // line 41
        if ((array_key_exists("menu", $context) && ((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")) == "infos_courses"))) {
            // line 42
            echo "\t\t\t        \t\tclass=\"current\"
\t\t\t        \t";
        }
        // line 43
        echo "  
\t\t\t        > Informations</a></li>        
\t\t\t        
\t\t\t        <li><a href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_objective2", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
        echo "\"
\t\t\t            ";
        // line 47
        if ((array_key_exists("menu", $context) && ((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")) == "course_objective2"))) {
            // line 48
            echo "\t\t\t        \t\tclass=\"current\"
\t\t\t        \t";
        }
        // line 49
        echo "          
\t\t\t        > Objectifs </a></li> 
\t\t\t        
\t\t\t        <li><a href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_assessment2", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
        echo "\"
\t\t\t            ";
        // line 53
        if ((array_key_exists("menu", $context) && ((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")) == "course_assessment2"))) {
            // line 54
            echo "\t\t\t        \t\tclass=\"current\"
\t\t\t        \t";
        }
        // line 55
        echo "              
\t\t\t          
\t\t\t        > Séquences & Evaluations </a></li> 


\t\t\t    \t<li><a href=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tableaux_bord", array("niv" => 3, "course" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
        echo "\"
\t\t\t        \t";
        // line 61
        if ((array_key_exists("menu", $context) && ((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")) == "tableaux"))) {
            // line 62
            echo "\t\t\t        \t\tclass=\"current\"
\t\t\t        \t";
        }
        // line 63
        echo "> Tableaux de bord </a></li>\t\t
\t\t\t     \t\t
\t\t\t     \t<!--\t   
\t\t\t        <li><a href=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("program_competences_cours", array("id" => $this->getAttribute((isset($context["program"]) ? $context["program"] : $this->getContext($context, "program")), "id", array()), "selection" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
        echo "\"
\t\t\t            ";
        // line 67
        if ((array_key_exists("menu", $context) && ((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")) == "competence_assessment"))) {
            // line 68
            echo "\t\t\t        \t\tclass=\"current\"
\t\t\t        \t";
        }
        // line 69
        echo "             
\t\t\t                
\t\t\t        
\t\t\t        > Compétences </a></li>
\t\t\t\t\t-->
\t\t\t\t\t
\t\t\t\t\t<!--\t\t
\t\t\t        <li><a href=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_graph", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
        echo "\"
\t\t\t            ";
        // line 77
        if ((array_key_exists("menu", $context) && ((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")) == "course_graph"))) {
            // line 78
            echo "\t\t\t        \t\tclass=\"current\"
\t\t\t        \t";
        }
        // line 79
        echo "             \t\t\t        
\t\t\t        > Graphe </a></li>
\t\t\t        -->

\t\t\t\t\t<!--
\t\t\t        <li><a href=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_resum", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
        echo "\"
\t\t\t            ";
        // line 85
        if ((array_key_exists("menu", $context) && ((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")) == "course_resum"))) {
            // line 86
            echo "\t\t\t        \t\tclass=\"current\"
\t\t\t        \t";
        }
        // line 87
        echo "                   
\t\t\t         target=\"_blank\"> Plan du cours  </a></li> 
\t\t\t        -->
\t\t\t          
\t\t\t        <!-- 
\t\t\t        <li><a href=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_url", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
        echo "\"
\t\t\t            ";
        // line 93
        if ((array_key_exists("menu", $context) && ((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")) == "course_url"))) {
            // line 94
            echo "\t\t\t        \t\tclass=\"current\"
\t\t\t        \t";
        }
        // line 95
        echo "                   
\t\t\t\t\t\t> Url plan du cours  </a></li> 
\t\t\t\t\t-->
\t\t\t\t\t
\t\t\t        
\t\t\t\t        <li><a href=\"";
        // line 100
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\">
\t\t\t\t        \t Déconnexion </a></li>  
\t\t      </ul>
\t\t    </div><!-- /.navbar-collapse -->  
  \t\t</div><!-- /.container-fluid -->
\t</nav>

\t<!--
 \t<u>
\t<fieldset>
\t\t";
        // line 110
        if ($this->getAttribute((isset($context["program"]) ? $context["program"] : null), "level", array(), "any", true, true)) {
            // line 111
            echo "\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["program"]) ? $context["program"] : $this->getContext($context, "program")), "level", array()), "html", null, true);
            echo "
\t";
        }
        // line 113
        echo "\t";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "program", array()), "label", array()), "html", null, true);
        echo "</u><br/>Cours (UE) <br/><b> <span class=\"glyphicon glyphicon-pushpin\"></span> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "label", array()), "html", null, true);
        echo "</b> </fieldset> \t
\t<br/>
\t-->
\t  
\t 
\t <!--
\t 
    <ul class=\"nav nav-sidebar\">
        <li><a href=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
        echo "\"
            ";
        // line 122
        if ((array_key_exists("menu", $context) && ((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")) == "programs_courses"))) {
            // line 123
            echo "        \t\tclass=\"current\"
        \t";
        }
        // line 124
        echo "  
        > Présentation </a></li>
        
        <li><a href=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_infos_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
        echo "\"
            ";
        // line 128
        if ((array_key_exists("menu", $context) && ((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")) == "infos_courses"))) {
            // line 129
            echo "        \t\tclass=\"current\"
        \t";
        }
        // line 130
        echo "  
        > Informations</a></li>        
        
        <li><a href=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_objective", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
        echo "\"
            ";
        // line 134
        if ((array_key_exists("menu", $context) && ((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")) == "course_objective"))) {
            // line 135
            echo "        \t\tclass=\"current\"
        \t";
        }
        // line 136
        echo "          
        > Objectifs </a></li>
        <li><a href=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_assessment", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
        echo "\"
            ";
        // line 139
        if ((array_key_exists("menu", $context) && ((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")) == "course_assessment"))) {
            // line 140
            echo "        \t\tclass=\"current\"
        \t";
        }
        // line 141
        echo "             
         
        > Séquences & Evaluations </a></li> 
  
     \t<hr>\t
     \t\t   
        <li><a href=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("program_competences_cours", array("id" => $this->getAttribute((isset($context["program"]) ? $context["program"] : $this->getContext($context, "program")), "id", array()), "selection" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
        echo "\"
            ";
        // line 148
        if ((array_key_exists("menu", $context) && ((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")) == "competence_assessment"))) {
            // line 149
            echo "        \t\tclass=\"current\"
        \t";
        }
        // line 150
        echo "             
                
        
        > Compétences </a></li>


        <li><a href=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_graph", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
        echo "\"
            ";
        // line 157
        if ((array_key_exists("menu", $context) && ((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")) == "course_graph"))) {
            // line 158
            echo "        \t\tclass=\"current\"
        \t";
        }
        // line 159
        echo "             
                
        
        > Graphe </a></li>
\t

        <li><a href=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_event", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
        echo "\"   
            ";
        // line 166
        if ((array_key_exists("menu", $context) && ((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")) == "course_event"))) {
            // line 167
            echo "        \t\tclass=\"current\"
        \t";
        }
        // line 168
        echo "         
        > Ev&egrave;nements </a></li>
 
\t\t<hr/>
        <li><a href=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_resum", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
        echo "\"
            ";
        // line 173
        if ((array_key_exists("menu", $context) && ((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")) == "course_resum"))) {
            // line 174
            echo "        \t\tclass=\"current\"
        \t";
        }
        // line 175
        echo "                   
         target=\"_blank\"> Plan du cours  </a></li> 
        <li><a href=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_url", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
        echo "\"
            ";
        // line 178
        if ((array_key_exists("menu", $context) && ((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")) == "course_url"))) {
            // line 179
            echo "        \t\tclass=\"current\"
        \t";
        }
        // line 180
        echo "                   
\t\t\t> Url plan du cours  </a></li> 


        <hr>
        <li><a href=\"http://ecoweb.ens-lyon.fr/cahier-cours/private/ad9abb56303dfffa1ffc7c54fb2dfe5fd9767c1c/feedback-loes-v2\" target='pad'>Pad</a></li>       
\t\t<hr> 
        
\t        <li><a href=\"";
        // line 188
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\">
\t        \t Déconnexion </a></li>        
        
 
    </ul>
    --> 
";
    }

    public function getTemplateName()
    {
        return "IfeAloesBundle:Course:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  423 => 188,  413 => 180,  409 => 179,  407 => 178,  403 => 177,  399 => 175,  395 => 174,  393 => 173,  389 => 172,  383 => 168,  379 => 167,  377 => 166,  373 => 165,  365 => 159,  361 => 158,  359 => 157,  355 => 156,  347 => 150,  343 => 149,  341 => 148,  337 => 147,  329 => 141,  325 => 140,  323 => 139,  319 => 138,  315 => 136,  311 => 135,  309 => 134,  305 => 133,  300 => 130,  296 => 129,  294 => 128,  290 => 127,  285 => 124,  281 => 123,  279 => 122,  275 => 121,  261 => 113,  255 => 111,  253 => 110,  240 => 100,  233 => 95,  229 => 94,  227 => 93,  223 => 92,  216 => 87,  212 => 86,  210 => 85,  206 => 84,  199 => 79,  195 => 78,  193 => 77,  189 => 76,  180 => 69,  176 => 68,  174 => 67,  170 => 66,  165 => 63,  161 => 62,  159 => 61,  155 => 60,  148 => 55,  144 => 54,  142 => 53,  138 => 52,  133 => 49,  129 => 48,  127 => 47,  123 => 46,  118 => 43,  114 => 42,  112 => 41,  108 => 40,  103 => 37,  99 => 36,  97 => 35,  93 => 34,  85 => 28,  82 => 27,  72 => 22,  65 => 19,  59 => 17,  57 => 16,  53 => 15,  49 => 14,  46 => 13,  43 => 12,  36 => 9,  33 => 8,  29 => 3,  27 => 6,  11 => 3,);
    }
}
/* */
/* */
/* {% extends '::layout.html.twig' %}*/
/* */
/* */
/* {% set program = course.program %}*/
/* */
/* {% block title %}*/
/*     <title> {{ course.label }} </title>*/
/* {% endblock %}*/
/* */
/* {% block header_nav %}*/
/*     <div class="btn-group btn-breadcrumb">*/
/*         <a  class="btn btn-default" href="{{path('programs')}}"> Liste des programmes </a>*/
/*         <a  class="btn btn-default" href="{{path('programs_courses', {id:program.id})}}"> */
/* 	   		{% if program.level is defined and program.level !=null %}*/
/* 				{{ program.level }} - */
/* 			{% endif %}*/
/* 			{{ program.title }}           */
/*         */
/*         </a>*/
/*          <a  class="btn btn-default active" href="#">{{course.label}} - {{course.title}} </a>*/
/*     </div>*/
/*     <br/><br/>*/
/* {% endblock %}*/
/* */
/* {% block sidebar_nav %}*/
/* */
/* 	<nav class="navbar navbar-default">*/
/*   		<div class="container-fluid">*/
/* 		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">*/
/* 		      <ul class="nav navbar-nav">*/
/* 					      */
/* 			        <li><a href="{{path('course_show', {id:course.id})}}"*/
/* 			            {% if menu is defined and menu=="programs_courses"%}*/
/* 			        		class="current"*/
/* 			        	{% endif%}   */
/* 			        > Présentation </a></li>*/
/* 			         */
/* 			        <li><a href="{{path('course_infos_show', {id:course.id})}}"*/
/* 			            {% if menu is defined and menu=="infos_courses"%}*/
/* 			        		class="current"*/
/* 			        	{% endif%}  */
/* 			        > Informations</a></li>        */
/* 			        */
/* 			        <li><a href="{{path('course_objective2', {id:course.id})}}"*/
/* 			            {% if menu is defined and menu=="course_objective2"%}*/
/* 			        		class="current"*/
/* 			        	{% endif%}          */
/* 			        > Objectifs </a></li> */
/* 			        */
/* 			        <li><a href="{{path('course_assessment2', {id:course.id })}}"*/
/* 			            {% if menu is defined and menu=="course_assessment2"%}*/
/* 			        		class="current"*/
/* 			        	{% endif%}              */
/* 			          */
/* 			        > Séquences & Evaluations </a></li> */
/* */
/* */
/* 			    	<li><a href="{{path('tableaux_bord', {niv:3, course:course.id })}}"*/
/* 			        	{% if menu is defined and menu=="tableaux"%}*/
/* 			        		class="current"*/
/* 			        	{% endif%}> Tableaux de bord </a></li>		*/
/* 			     		*/
/* 			     	<!--	   */
/* 			        <li><a href="{{path('program_competences_cours', {id:program.id,selection:course.id}) }}"*/
/* 			            {% if menu is defined and menu=="competence_assessment"%}*/
/* 			        		class="current"*/
/* 			        	{% endif%}             */
/* 			                */
/* 			        */
/* 			        > Compétences </a></li>*/
/* 					-->*/
/* 					*/
/* 					<!--		*/
/* 			        <li><a href="{{path('course_graph', {id:course.id}) }}"*/
/* 			            {% if menu is defined and menu=="course_graph"%}*/
/* 			        		class="current"*/
/* 			        	{% endif%}             			        */
/* 			        > Graphe </a></li>*/
/* 			        -->*/
/* */
/* 					<!--*/
/* 			        <li><a href="{{path('course_resum', {id:course.id}) }}"*/
/* 			            {% if menu is defined and menu=="course_resum"%}*/
/* 			        		class="current"*/
/* 			        	{% endif%}                   */
/* 			         target="_blank"> Plan du cours  </a></li> */
/* 			        -->*/
/* 			          */
/* 			        <!-- */
/* 			        <li><a href="{{path('course_url', {id:course.id}) }}"*/
/* 			            {% if menu is defined and menu=="course_url"%}*/
/* 			        		class="current"*/
/* 			        	{% endif%}                   */
/* 						> Url plan du cours  </a></li> */
/* 					-->*/
/* 					*/
/* 			        */
/* 				        <li><a href="{{ path('fos_user_security_logout') }}">*/
/* 				        	 Déconnexion </a></li>  */
/* 		      </ul>*/
/* 		    </div><!-- /.navbar-collapse -->  */
/*   		</div><!-- /.container-fluid -->*/
/* 	</nav>*/
/* */
/* 	<!--*/
/*  	<u>*/
/* 	<fieldset>*/
/* 		{% if program.level is defined %}*/
/* 		{{ program.level }}*/
/* 	{% endif %}*/
/* 	{{course.program.label}}</u><br/>Cours (UE) <br/><b> <span class="glyphicon glyphicon-pushpin"></span> {{course.label}}</b> </fieldset> 	*/
/* 	<br/>*/
/* 	-->*/
/* 	  */
/* 	 */
/* 	 <!--*/
/* 	 */
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
/*         > Informations</a></li>        */
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
/*         > Séquences & Evaluations </a></li> */
/*   */
/*      	<hr>	*/
/*      		   */
/*         <li><a href="{{path('program_competences_cours', {id:program.id,selection:course.id}) }}"*/
/*             {% if menu is defined and menu=="competence_assessment"%}*/
/*         		class="current"*/
/*         	{% endif%}             */
/*                 */
/*         */
/*         > Compétences </a></li>*/
/* */
/* */
/*         <li><a href="{{path('course_graph', {id:course.id}) }}"*/
/*             {% if menu is defined and menu=="course_graph"%}*/
/*         		class="current"*/
/*         	{% endif%}             */
/*                 */
/*         */
/*         > Graphe </a></li>*/
/* 	*/
/* */
/*         <li><a href="{{path('course_event', {id:course.id})}}"   */
/*             {% if menu is defined and menu=="course_event"%}*/
/*         		class="current"*/
/*         	{% endif%}         */
/*         > Ev&egrave;nements </a></li>*/
/*  */
/* 		<hr/>*/
/*         <li><a href="{{path('course_resum', {id:course.id}) }}"*/
/*             {% if menu is defined and menu=="course_resum"%}*/
/*         		class="current"*/
/*         	{% endif%}                   */
/*          target="_blank"> Plan du cours  </a></li> */
/*         <li><a href="{{path('course_url', {id:course.id}) }}"*/
/*             {% if menu is defined and menu=="course_url"%}*/
/*         		class="current"*/
/*         	{% endif%}                   */
/* 			> Url plan du cours  </a></li> */
/* */
/* */
/*         <hr>*/
/*         <li><a href="http://ecoweb.ens-lyon.fr/cahier-cours/private/ad9abb56303dfffa1ffc7c54fb2dfe5fd9767c1c/feedback-loes-v2" target='pad'>Pad</a></li>       */
/* 		<hr> */
/*         */
/* 	        <li><a href="{{ path('fos_user_security_logout') }}">*/
/* 	        	 Déconnexion </a></li>        */
/*         */
/*  */
/*     </ul>*/
/*     --> */
/* {% endblock %}*/
/* */
