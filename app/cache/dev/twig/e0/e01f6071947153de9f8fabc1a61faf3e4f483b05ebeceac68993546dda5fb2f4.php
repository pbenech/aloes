<?php

/* IfeAloesBundle:Course:edit.html.twig */
class __TwigTemplate_2a71f2480f21bcdea33f5ea7ac63559abab64f2e6b060eaf26b7571401d62298 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("IfeAloesBundle:Course:layout.html.twig", "IfeAloesBundle:Course:edit.html.twig", 1);
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

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "<div class='title-two1a col-md-12 col-sm-12'> 
\t\t\tEdition présentation du cours (UE)
\t\t</div>

\t";
        // line 11
        echo $this->env->getExtension('stfalcon_tinymce')->tinymceInit();
        echo "

 
\t";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'stylesheet');
        echo "
    ";
        // line 15
        echo $this->env->getExtension('collot.twig.extension.form')->renderJavascript((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")));
        echo "\t
    \t\t

\t";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
\t

\t<div class='col-sm-12 container-fluid block3'>
\t<br/>    
\t<div class=\"col-sm-12 block3b\">     
\t\t<div class='row'>\t
\t\t\t<div class='col-md-2'> \t  \t  
\t\t    \t";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "program", array()), 'label');
        echo "
\t\t\t</div> \t  \t\t    \t
\t\t\t<div class='col-md-10'> \t  \t  
\t\t    \t";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "program", array()), 'widget');
        echo "
\t\t \t    ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "program", array()), 'errors');
        echo "\t
\t\t\t</div> \t  \t
\t\t</div>   \t
\t    
\t\t<div class='row'>\t
\t\t\t<div class='col-md-2'> \t  \t  
\t\t    \t";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "label", array()), 'label');
        echo "
\t\t\t</div> \t  \t\t    \t
\t\t\t<div class='col-md-10'> \t  \t  
\t\t    \t";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "label", array()), 'widget');
        echo "
\t\t \t    ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "label", array()), 'errors');
        echo "\t
\t\t\t</div> \t  \t
\t\t</div>   \t
\t\t
\t\t<div class='row'>\t
\t\t\t<div class='col-md-2'> \t  \t  
\t\t    \t";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "title", array()), 'label');
        echo "
\t\t\t</div> \t  \t\t    \t
\t\t\t<div class='col-md-10'> \t  \t  
\t\t    \t";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "title", array()), 'widget');
        echo "
\t\t \t    ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "title", array()), 'errors');
        echo "\t
\t\t\t</div> \t  \t
\t\t</div>   \t
\t

\t\t<div class='row'>\t
\t\t\t<div class='col-md-2'> \t  \t  
\t\t    \t";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "parcours", array()), 'label');
        echo "
\t\t\t</div> \t  \t\t    \t
\t\t\t<div class='col-md-10'> \t  \t  
\t\t    \t";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "parcours", array()), 'widget');
        echo "
\t\t \t    ";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "parcours", array()), 'errors');
        echo "\t
\t\t\t</div> \t  \t
\t\t</div>   \t
\t
\t
\t\t<div class='row'>\t
\t\t\t<div class='col-md-2'> \t  \t  
\t\t    \t";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "semestres", array()), 'label');
        echo "
\t\t\t</div> \t  \t\t    \t
\t\t\t<div class='col-md-4'> \t  \t  
\t\t    \t";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "semestres", array()), 'widget');
        echo "
\t\t \t    ";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "semestres", array()), 'errors');
        echo "\t
\t\t\t</div> \t  \t
\t\t\t<div class='col-md-2'> \t  \t  
\t\t    \t";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "year", array()), 'label');
        echo "
\t\t\t</div> \t  \t\t    \t
\t\t\t<div class='col-md-4'> \t  \t  
\t\t    \t";
        // line 78
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "year", array()), 'widget');
        echo "
\t\t \t    ";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "year", array()), 'errors');
        echo "\t
\t\t\t</div> \t  \t
\t\t</div>  \t\t
\t\t
\t
          
\t
\t\t<div class='row'>\t
\t\t\t<div class='col-md-2'> \t  \t  
\t\t    \t";
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "langues", array()), 'label');
        echo "
\t\t\t</div> \t  \t\t    \t
\t\t\t<div class='col-md-10'> \t  \t  
\t\t    \t";
        // line 91
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "langues", array()), 'widget');
        echo "
\t\t \t    ";
        // line 92
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "langues", array()), 'errors');
        echo "\t
\t\t\t</div> \t  \t
\t\t</div>             
\t
\t\t<div class='row'>\t
\t\t\t<div class='col-md-2'> \t  \t  
\t\t    \t";
        // line 98
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "credits", array()), 'label');
        echo "
\t\t\t</div> \t  \t\t    \t
\t\t\t<div class='col-md-10'> \t  \t  
\t\t    \t";
        // line 101
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "credits", array()), 'widget');
        echo "
\t\t \t    ";
        // line 102
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "credits", array()), 'errors');
        echo "
\t\t\t</div> \t  \t
\t\t</div>  

\t\t<div class='row'>\t\t\t
\t\t\t<div class='col-md-2'> \t  \t  
\t\t    \t";
        // line 108
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "isOptional", array()), 'label');
        echo "
\t\t\t</div> \t  \t\t    \t 
\t\t\t<div class='col-md-10'> \t  \t  
\t\t    \t";
        // line 111
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "isOptional", array()), 'widget');
        echo "
\t \t    \t";
        // line 112
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "isOptional", array()), 'errors');
        echo "
\t\t\t</div> \t\t
\t\t</div>  
\t\t
\t</div>
\t
\t<div class=\"col-sm-12 block3b\">    
\t\t<div class='row'>\t
\t\t\t<div class='col-md-2'> \t  \t  
\t\t    \t";
        // line 121
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "prerequisites", array()), 'label');
        echo "
\t\t\t</div> \t  \t\t    \t
\t\t\t<div class='col-md-10'> \t  \t  
\t\t    \t";
        // line 124
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "prerequisites", array()), 'widget');
        echo "
\t \t    \t";
        // line 125
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "prerequisites", array()), 'errors');
        echo "
\t\t\t</div> \t  \t
\t\t</div>  
\t  
\t\t<div class='row'>\t
\t\t\t<div class='col-md-2'> \t  \t  
\t\t    \t";
        // line 131
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "concurrentCourses", array()), 'label');
        echo "
\t\t\t</div> \t  \t\t    \t
\t\t\t<div class='col-md-10'> \t  \t  
\t\t    \t";
        // line 134
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "concurrentCourses", array()), 'widget');
        echo "
\t \t    \t";
        // line 135
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "concurrentCourses", array()), 'errors');
        echo "
\t\t\t</div> \t  \t
\t\t</div>   
\t</div>\t


\t



\t<div class=\"col-sm-12 block3b\">    
\t\t<div class='row'>\t
\t\t\t<div class='col-md-2'> \t  \t  
\t\t    \t";
        // line 148
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "url_ped", array()), 'label');
        echo "
\t\t\t</div> \t  \t\t    \t
\t\t\t<div class='col-md-10'> \t  \t  
\t\t    \t";
        // line 151
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "url_ped", array()), 'widget');
        echo "
\t \t   \t \t";
        // line 152
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "url_ped", array()), 'errors');
        echo "
\t\t\t</div> \t  \t
\t\t</div> \t            

\t\t<div class='row'>\t
\t\t\t<div class='col-md-2'> \t  \t  
\t\t    \t";
        // line 158
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "url_web", array()), 'label');
        echo "
\t\t\t</div> \t  \t\t    \t
\t\t\t<div class='col-md-10'> \t  \t  
\t\t    \t";
        // line 161
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "url_web", array()), 'widget');
        echo "
\t \t   \t \t";
        // line 162
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "url_web", array()), 'errors');
        echo "
\t\t\t</div> \t  \t
\t\t</div> \t            
\t
\t\t<div class='row'>\t
\t\t\t<div class='col-md-2'> \t  \t  
\t\t    \t";
        // line 168
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "url_twi", array()), 'label');
        echo "
\t\t\t</div> \t  \t\t    \t
\t\t\t<div class='col-md-10'> \t  \t  
\t\t    \t";
        // line 171
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "url_twi", array()), 'widget');
        echo "
\t \t   \t \t";
        // line 172
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "url_twi", array()), 'errors');
        echo "
\t\t\t</div> \t  \t
\t\t</div> \t      
\t
\t\t<div class='row'>\t
\t\t\t<div class='col-md-2'> \t  \t  
\t\t    \t";
        // line 178
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "url_aut", array()), 'label');
        echo "
\t\t\t</div> \t  \t\t    \t
\t\t\t<div class='col-md-10'> \t  \t  
\t\t    \t";
        // line 181
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "url_aut", array()), 'widget');
        echo "
\t \t   \t \t";
        // line 182
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "url_aut", array()), 'errors');
        echo "
\t\t\t</div> \t  \t
\t\t</div> \t   
\t                          
     
\t</div>\t

\t
\t\t<div class='row'>\t
\t\t\t<div class='col-md-2'> \t  \t  
\t\t    \t";
        // line 192
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "publicationState", array()), 'label');
        echo "
\t\t\t</div> \t  \t\t    \t
\t\t\t<div class='col-md-10'> \t  \t  
\t\t    \t";
        // line 195
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "publicationState", array()), 'widget');
        echo "
\t\t \t    ";
        // line 196
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "publicationState", array()), 'errors');
        echo "\t
\t\t\t</div> \t  \t 
\t\t</div>   
\t
\t
\t<div class='row'>\t
\t\t\t<div class='col-md-3'> 
\t\t\t\t";
        // line 203
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "submit", array()), 'widget');
        echo "
\t\t\t\t
\t\t\t\t";
        // line 205
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "
\t\t\t</div>
\t    \t<div class='col-md-3'>\t    \t
\t\t    \t";
        // line 208
        if ((array_key_exists("from", $context) && ((isset($context["from"]) ? $context["from"] : $this->getContext($context, "from")) == "list"))) {
            // line 209
            echo "\t\t    \t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("programs_courses", array("id" => $this->getAttribute((isset($context["program"]) ? $context["program"] : $this->getContext($context, "program")), "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-arrow-left\"></span> Retour liste des cours (UE)</a> \t
\t\t    \t";
        } else {
            // line 211
            echo "\t\t    \t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-arrow-left\"></span> Retour présentation </a>
\t\t    \t";
        }
        // line 212
        echo "\t    \t
\t    \t</div>
\t    <!--\t
\t    \t<div class='col-md-3'> 
\t    \t\t";
        // line 216
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo " \t
\t    \t</div>
\t    -->
\t</div>\t
\t
\t</div>

\t
";
    }

    public function getTemplateName()
    {
        return "IfeAloesBundle:Course:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  416 => 216,  410 => 212,  404 => 211,  398 => 209,  396 => 208,  390 => 205,  385 => 203,  375 => 196,  371 => 195,  365 => 192,  352 => 182,  348 => 181,  342 => 178,  333 => 172,  329 => 171,  323 => 168,  314 => 162,  310 => 161,  304 => 158,  295 => 152,  291 => 151,  285 => 148,  269 => 135,  265 => 134,  259 => 131,  250 => 125,  246 => 124,  240 => 121,  228 => 112,  224 => 111,  218 => 108,  209 => 102,  205 => 101,  199 => 98,  190 => 92,  186 => 91,  180 => 88,  168 => 79,  164 => 78,  158 => 75,  152 => 72,  148 => 71,  142 => 68,  132 => 61,  128 => 60,  122 => 57,  112 => 50,  108 => 49,  102 => 46,  93 => 40,  89 => 39,  83 => 36,  74 => 30,  70 => 29,  64 => 26,  53 => 18,  47 => 15,  43 => 14,  37 => 11,  31 => 7,  28 => 4,  11 => 1,);
    }
}
/* {% extends 'IfeAloesBundle:Course:layout.html.twig' %}*/
/* */
/* */
/* {% block content -%}*/
/* */
/* 	*/
/*     	<div class='title-two1a col-md-12 col-sm-12'> */
/* 			Edition présentation du cours (UE)*/
/* 		</div>*/
/* */
/* 	{{ tinymce_init() }}*/
/* */
/*  */
/* 	{{ form_stylesheet(edit_form) }}*/
/*     {{ form_javascript(edit_form) }}	*/
/*     		*/
/* */
/* 	{{ form_start(edit_form) }}*/
/* 	*/
/* */
/* 	<div class='col-sm-12 container-fluid block3'>*/
/* 	<br/>    */
/* 	<div class="col-sm-12 block3b">     */
/* 		<div class='row'>	*/
/* 			<div class='col-md-2'> 	  	  */
/* 		    	{{ form_label(edit_form.program) }}*/
/* 			</div> 	  		    	*/
/* 			<div class='col-md-10'> 	  	  */
/* 		    	{{ form_widget(edit_form.program) }}*/
/* 		 	    {{ form_errors(edit_form.program) }}	*/
/* 			</div> 	  	*/
/* 		</div>   	*/
/* 	    */
/* 		<div class='row'>	*/
/* 			<div class='col-md-2'> 	  	  */
/* 		    	{{ form_label(edit_form.label) }}*/
/* 			</div> 	  		    	*/
/* 			<div class='col-md-10'> 	  	  */
/* 		    	{{ form_widget(edit_form.label) }}*/
/* 		 	    {{ form_errors(edit_form.label) }}	*/
/* 			</div> 	  	*/
/* 		</div>   	*/
/* 		*/
/* 		<div class='row'>	*/
/* 			<div class='col-md-2'> 	  	  */
/* 		    	{{ form_label(edit_form.title) }}*/
/* 			</div> 	  		    	*/
/* 			<div class='col-md-10'> 	  	  */
/* 		    	{{ form_widget(edit_form.title) }}*/
/* 		 	    {{ form_errors(edit_form.title) }}	*/
/* 			</div> 	  	*/
/* 		</div>   	*/
/* 	*/
/* */
/* 		<div class='row'>	*/
/* 			<div class='col-md-2'> 	  	  */
/* 		    	{{ form_label(edit_form.parcours) }}*/
/* 			</div> 	  		    	*/
/* 			<div class='col-md-10'> 	  	  */
/* 		    	{{ form_widget(edit_form.parcours) }}*/
/* 		 	    {{ form_errors(edit_form.parcours) }}	*/
/* 			</div> 	  	*/
/* 		</div>   	*/
/* 	*/
/* 	*/
/* 		<div class='row'>	*/
/* 			<div class='col-md-2'> 	  	  */
/* 		    	{{ form_label(edit_form.semestres) }}*/
/* 			</div> 	  		    	*/
/* 			<div class='col-md-4'> 	  	  */
/* 		    	{{ form_widget(edit_form.semestres) }}*/
/* 		 	    {{ form_errors(edit_form.semestres) }}	*/
/* 			</div> 	  	*/
/* 			<div class='col-md-2'> 	  	  */
/* 		    	{{ form_label(edit_form.year) }}*/
/* 			</div> 	  		    	*/
/* 			<div class='col-md-4'> 	  	  */
/* 		    	{{ form_widget(edit_form.year) }}*/
/* 		 	    {{ form_errors(edit_form.year) }}	*/
/* 			</div> 	  	*/
/* 		</div>  		*/
/* 		*/
/* 	*/
/*           */
/* 	*/
/* 		<div class='row'>	*/
/* 			<div class='col-md-2'> 	  	  */
/* 		    	{{ form_label(edit_form.langues) }}*/
/* 			</div> 	  		    	*/
/* 			<div class='col-md-10'> 	  	  */
/* 		    	{{ form_widget(edit_form.langues) }}*/
/* 		 	    {{ form_errors(edit_form.langues) }}	*/
/* 			</div> 	  	*/
/* 		</div>             */
/* 	*/
/* 		<div class='row'>	*/
/* 			<div class='col-md-2'> 	  	  */
/* 		    	{{ form_label(edit_form.credits) }}*/
/* 			</div> 	  		    	*/
/* 			<div class='col-md-10'> 	  	  */
/* 		    	{{ form_widget(edit_form.credits) }}*/
/* 		 	    {{ form_errors(edit_form.credits) }}*/
/* 			</div> 	  	*/
/* 		</div>  */
/* */
/* 		<div class='row'>			*/
/* 			<div class='col-md-2'> 	  	  */
/* 		    	{{ form_label(edit_form.isOptional) }}*/
/* 			</div> 	  		    	 */
/* 			<div class='col-md-10'> 	  	  */
/* 		    	{{ form_widget(edit_form.isOptional) }}*/
/* 	 	    	{{ form_errors(edit_form.isOptional) }}*/
/* 			</div> 		*/
/* 		</div>  */
/* 		*/
/* 	</div>*/
/* 	*/
/* 	<div class="col-sm-12 block3b">    */
/* 		<div class='row'>	*/
/* 			<div class='col-md-2'> 	  	  */
/* 		    	{{ form_label(edit_form.prerequisites) }}*/
/* 			</div> 	  		    	*/
/* 			<div class='col-md-10'> 	  	  */
/* 		    	{{ form_widget(edit_form.prerequisites) }}*/
/* 	 	    	{{ form_errors(edit_form.prerequisites) }}*/
/* 			</div> 	  	*/
/* 		</div>  */
/* 	  */
/* 		<div class='row'>	*/
/* 			<div class='col-md-2'> 	  	  */
/* 		    	{{ form_label(edit_form.concurrentCourses) }}*/
/* 			</div> 	  		    	*/
/* 			<div class='col-md-10'> 	  	  */
/* 		    	{{ form_widget(edit_form.concurrentCourses) }}*/
/* 	 	    	{{ form_errors(edit_form.concurrentCourses) }}*/
/* 			</div> 	  	*/
/* 		</div>   */
/* 	</div>	*/
/* */
/* */
/* 	*/
/* */
/* */
/* */
/* 	<div class="col-sm-12 block3b">    */
/* 		<div class='row'>	*/
/* 			<div class='col-md-2'> 	  	  */
/* 		    	{{ form_label(edit_form.url_ped) }}*/
/* 			</div> 	  		    	*/
/* 			<div class='col-md-10'> 	  	  */
/* 		    	{{ form_widget(edit_form.url_ped) }}*/
/* 	 	   	 	{{ form_errors(edit_form.url_ped) }}*/
/* 			</div> 	  	*/
/* 		</div> 	            */
/* */
/* 		<div class='row'>	*/
/* 			<div class='col-md-2'> 	  	  */
/* 		    	{{ form_label(edit_form.url_web) }}*/
/* 			</div> 	  		    	*/
/* 			<div class='col-md-10'> 	  	  */
/* 		    	{{ form_widget(edit_form.url_web) }}*/
/* 	 	   	 	{{ form_errors(edit_form.url_web) }}*/
/* 			</div> 	  	*/
/* 		</div> 	            */
/* 	*/
/* 		<div class='row'>	*/
/* 			<div class='col-md-2'> 	  	  */
/* 		    	{{ form_label(edit_form.url_twi) }}*/
/* 			</div> 	  		    	*/
/* 			<div class='col-md-10'> 	  	  */
/* 		    	{{ form_widget(edit_form.url_twi) }}*/
/* 	 	   	 	{{ form_errors(edit_form.url_twi) }}*/
/* 			</div> 	  	*/
/* 		</div> 	      */
/* 	*/
/* 		<div class='row'>	*/
/* 			<div class='col-md-2'> 	  	  */
/* 		    	{{ form_label(edit_form.url_aut) }}*/
/* 			</div> 	  		    	*/
/* 			<div class='col-md-10'> 	  	  */
/* 		    	{{ form_widget(edit_form.url_aut) }}*/
/* 	 	   	 	{{ form_errors(edit_form.url_aut) }}*/
/* 			</div> 	  	*/
/* 		</div> 	   */
/* 	                          */
/*      */
/* 	</div>	*/
/* */
/* 	*/
/* 		<div class='row'>	*/
/* 			<div class='col-md-2'> 	  	  */
/* 		    	{{ form_label(edit_form.publicationState) }}*/
/* 			</div> 	  		    	*/
/* 			<div class='col-md-10'> 	  	  */
/* 		    	{{ form_widget(edit_form.publicationState) }}*/
/* 		 	    {{ form_errors(edit_form.publicationState) }}	*/
/* 			</div> 	  	 */
/* 		</div>   */
/* 	*/
/* 	*/
/* 	<div class='row'>	*/
/* 			<div class='col-md-3'> */
/* 				{{ form_widget(edit_form.submit)}}*/
/* 				*/
/* 				{{ form_end(edit_form) }}*/
/* 			</div>*/
/* 	    	<div class='col-md-3'>	    	*/
/* 		    	{% if from is defined and from=='list' %}*/
/* 		    		<a href="{{ path('programs_courses',{id:program.id}) }}"><span class="glyphicon glyphicon-arrow-left"></span> Retour liste des cours (UE)</a> 	*/
/* 		    	{% else %}*/
/* 		    		<a href="{{ path('course_show', { 'id': entity.id }) }}"><span class="glyphicon glyphicon-arrow-left"></span> Retour présentation </a>*/
/* 		    	{% endif %}	    	*/
/* 	    	</div>*/
/* 	    <!--	*/
/* 	    	<div class='col-md-3'> */
/* 	    		{{ form(delete_form) }} 	*/
/* 	    	</div>*/
/* 	    -->*/
/* 	</div>	*/
/* 	*/
/* 	</div>*/
/* */
/* 	*/
/* {% endblock %}*/
/* */
