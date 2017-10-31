<?php

/* IfeAloesBundle:Aloes:layout-outils.html.twig */
class __TwigTemplate_ef60c4430b77fc913e2f7b083619aec2aff69399b849254922798d974931d3a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("IfeAloesBundle:Aloes:layout.html.twig", "IfeAloesBundle:Aloes:layout-outils.html.twig", 1);
        $this->blocks = array(
            'content_2' => array($this, 'block_content_2'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "IfeAloesBundle:Aloes:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content_2($context, array $blocks = array())
    {
        // line 4
        echo "
    <ul class=\"nav nav-sidebar\" style='background-color:#DCDCDC'> 

        ";
        // line 7
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 8
            echo "\t\t\t\t
\t        <li><a href=\"";
            // line 9
            echo $this->env->getExtension('routing')->getPath("admin_utilisateurs");
            echo "\"
\t        \t";
            // line 10
            if ((array_key_exists("menu", $context) && ((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")) == "adm-util"))) {
                // line 11
                echo "\t        \t\tclass=\"current\"
\t        \t";
            }
            // line 12
            echo "><span class=\"glyphicon glyphicon-play\"></span> Gestion des utilisateurs </a></li>
        ";
        } elseif ($this->env->getExtension('security')->isGranted("ROLE_RESPONSABLE")) {
            // line 13
            echo "\t\t\t\t
\t        <li><a href=\"";
            // line 14
            echo $this->env->getExtension('routing')->getPath("resp_utilisateurs");
            echo "\"
\t        \t";
            // line 15
            if ((array_key_exists("menu", $context) && ((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")) == "adm-util"))) {
                // line 16
                echo "\t        \t\tclass=\"current\"
\t        \t";
            }
            // line 17
            echo "><span class=\"glyphicon glyphicon-play\"></span> Gestion des utilisateurs </a></li>
        ";
        }
        // line 18
        echo "\t

        
        ";
        // line 21
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 22
            echo "\t       
                
        <hr/>
        ";
        }
        // line 25
        echo "\t 
                
        ";
        // line 27
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 28
            echo "\t\t\t\t
\t        <li><a href=\"";
            // line 29
            echo $this->env->getExtension('routing')->getPath("admin_parameters");
            echo "\"
\t        \t";
            // line 30
            if ((array_key_exists("menu", $context) && ((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")) == "adm-param"))) {
                // line 31
                echo "\t        \t\tclass=\"current\"
\t        \t";
            }
            // line 32
            echo "><span class=\"glyphicon glyphicon-play\"></span> Paramètres </a></li>
        ";
        }
        // line 33
        echo "\t 
        ";
        // line 34
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 35
            echo "\t\t\t\t
\t        <li><a href=\"";
            // line 36
            echo $this->env->getExtension('routing')->getPath("levels");
            echo "\"
\t        \t";
            // line 37
            if ((array_key_exists("menu", $context) && ((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")) == "adm-level"))) {
                // line 38
                echo "\t        \t\tclass=\"current\"
\t        \t";
            }
            // line 39
            echo "><span class=\"glyphicon glyphicon-play\"></span> Niveaux </a></li>
        ";
        }
        // line 40
        echo "\t
        ";
        // line 41
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 42
            echo "\t\t\t\t
\t        <li><a href=\"";
            // line 43
            echo $this->env->getExtension('routing')->getPath("langues");
            echo "\"
\t        \t";
            // line 44
            if ((array_key_exists("menu", $context) && ((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")) == "adm-lang"))) {
                // line 45
                echo "\t        \t\tclass=\"current\"
\t        \t";
            }
            // line 46
            echo "><span class=\"glyphicon glyphicon-play\"></span> Langues </a></li>
        ";
        }
        // line 47
        echo "\t
        ";
        // line 48
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 49
            echo "\t\t\t\t 
\t        <li><a href=\"";
            // line 50
            echo $this->env->getExtension('routing')->getPath("semestres");
            echo "\"
\t        \t";
            // line 51
            if ((array_key_exists("menu", $context) && ((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")) == "adm-sem"))) {
                // line 52
                echo "\t        \t\tclass=\"current\"
\t        \t";
            }
            // line 53
            echo "><span class=\"glyphicon glyphicon-play\"></span> Semestres </a></li>
        ";
        }
        // line 54
        echo "\t        

    </ul>
";
    }

    public function getTemplateName()
    {
        return "IfeAloesBundle:Aloes:layout-outils.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 54,  170 => 53,  166 => 52,  164 => 51,  160 => 50,  157 => 49,  155 => 48,  152 => 47,  148 => 46,  144 => 45,  142 => 44,  138 => 43,  135 => 42,  133 => 41,  130 => 40,  126 => 39,  122 => 38,  120 => 37,  116 => 36,  113 => 35,  111 => 34,  108 => 33,  104 => 32,  100 => 31,  98 => 30,  94 => 29,  91 => 28,  89 => 27,  85 => 25,  79 => 22,  77 => 21,  72 => 18,  68 => 17,  64 => 16,  62 => 15,  58 => 14,  55 => 13,  51 => 12,  47 => 11,  45 => 10,  41 => 9,  38 => 8,  36 => 7,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'IfeAloesBundle:Aloes:layout.html.twig' %}*/
/* */
/* {% block content_2 %}*/
/* */
/*     <ul class="nav nav-sidebar" style='background-color:#DCDCDC'> */
/* */
/*         {% if  ( is_granted("ROLE_ADMIN") )*/
/*         %}				*/
/* 	        <li><a href="{{path('admin_utilisateurs')}}"*/
/* 	        	{% if menu is defined and menu=="adm-util"%}*/
/* 	        		class="current"*/
/* 	        	{% endif%}><span class="glyphicon glyphicon-play"></span> Gestion des utilisateurs </a></li>*/
/*         {% elseif  ( is_granted("ROLE_RESPONSABLE") ) %}				*/
/* 	        <li><a href="{{path('resp_utilisateurs')}}"*/
/* 	        	{% if menu is defined and menu=="adm-util"%}*/
/* 	        		class="current"*/
/* 	        	{% endif%}><span class="glyphicon glyphicon-play"></span> Gestion des utilisateurs </a></li>*/
/*         {% endif %}	*/
/* */
/*         */
/*         {% if  ( is_granted("ROLE_ADMIN") )*/
/*         %}	       */
/*                 */
/*         <hr/>*/
/*         {% endif %}	 */
/*                 */
/*         {% if  ( is_granted("ROLE_ADMIN") )*/
/*         %}				*/
/* 	        <li><a href="{{path('admin_parameters')}}"*/
/* 	        	{% if menu is defined and menu=="adm-param"%}*/
/* 	        		class="current"*/
/* 	        	{% endif%}><span class="glyphicon glyphicon-play"></span> Paramètres </a></li>*/
/*         {% endif %}	 */
/*         {% if  ( is_granted("ROLE_ADMIN") )*/
/*         %}				*/
/* 	        <li><a href="{{path('levels')}}"*/
/* 	        	{% if menu is defined and menu=="adm-level"%}*/
/* 	        		class="current"*/
/* 	        	{% endif%}><span class="glyphicon glyphicon-play"></span> Niveaux </a></li>*/
/*         {% endif %}	*/
/*         {% if  ( is_granted("ROLE_ADMIN") )*/
/*         %}				*/
/* 	        <li><a href="{{path('langues')}}"*/
/* 	        	{% if menu is defined and menu=="adm-lang"%}*/
/* 	        		class="current"*/
/* 	        	{% endif%}><span class="glyphicon glyphicon-play"></span> Langues </a></li>*/
/*         {% endif %}	*/
/*         {% if  ( is_granted("ROLE_ADMIN") )*/
/*         %}				 */
/* 	        <li><a href="{{path('semestres')}}"*/
/* 	        	{% if menu is defined and menu=="adm-sem"%}*/
/* 	        		class="current"*/
/* 	        	{% endif%}><span class="glyphicon glyphicon-play"></span> Semestres </a></li>*/
/*         {% endif %}	        */
/* */
/*     </ul>*/
/* {% endblock %} */
