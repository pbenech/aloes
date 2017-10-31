<?php

/* IfeAloesBundle:Aloes:layout.html.twig */
class __TwigTemplate_22b3041112711906aa9b599ba2e936179fa83ff5299fcc87b87d9d8ffbc991bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "IfeAloesBundle:Aloes:layout.html.twig", 1);
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
        echo "<!--
    <div class=\"btn-group btn-breadcrumb\">
        <a   class=\"btn btn-default\" href=\"#\"> Accueil</a>
    </div>
    <br/><br/>
    -->
";
    }

    // line 16
    public function block_sidebar_nav($context, array $blocks = array())
    {
        // line 17
        echo " 
\t<nav class=\"navbar navbar-default\"> 
  \t\t<div class=\"container-fluid\">
\t\t    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
\t\t      <ul class=\"nav navbar-nav\">

\t\t\t        <li><a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("programs");
        echo "\"
\t\t\t        \t";
        // line 24
        if ((array_key_exists("menu", $context) && ((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")) == "programs"))) {
            // line 25
            echo "\t\t\t        \t\tclass=\"current\"
\t\t\t        \t";
        }
        // line 26
        echo "          
\t\t\t        > Liste des programmes </a></li>
\t\t\t        
\t\t\t        <li><a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("tableaux_bord", array("niv" => 1));
        echo "\"
\t\t\t        \t";
        // line 30
        if ((array_key_exists("menu", $context) && ((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")) == "tableaux"))) {
            // line 31
            echo "\t\t\t        \t\tclass=\"current\"
\t\t\t        \t";
        }
        // line 32
        echo "> Tableaux de bord </a></li>\t\t\t        
\t\t\t        

\t\t\t        ";
        // line 35
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 36
            echo "\t
\t\t\t\t        <li><a href=\"";
            // line 37
            echo $this->env->getExtension('routing')->getPath("admin_outil");
            echo "\"
\t\t\t          \t\t";
            // line 38
            if ((array_key_exists("menu", $context) && (((((((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")) == "adm-out") || ((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")) == "adm-util")) || ((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")) == "adm-param")) || ((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")) == "adm-level")) || ((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")) == "adm-lang")) || ((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")) == "adm-sem")))) {
                // line 39
                echo "\t\t\t\t        \t\tclass=\"current\" 
\t\t\t\t        \t";
            }
            // line 40
            echo "> <span class=\"glyphicon glyphicon-cog\"></span>  </a></li>

\t\t\t        ";
        }
        // line 42
        echo "\t\t\t\t        

\t\t\t\t    <li><a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\">
\t\t\t\t        \t Déconnexion </a></li>   


\t\t      </ul>
\t\t    </div><!-- /.navbar-collapse -->  
  \t\t</div><!-- /.container-fluid -->
\t</nav>
\t
 
    
";
    }

    public function getTemplateName()
    {
        return "IfeAloesBundle:Aloes:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 44,  112 => 42,  107 => 40,  103 => 39,  101 => 38,  97 => 37,  94 => 36,  92 => 35,  87 => 32,  83 => 31,  81 => 30,  77 => 29,  72 => 26,  68 => 25,  66 => 24,  62 => 23,  54 => 17,  51 => 16,  41 => 8,  38 => 7,  33 => 4,  30 => 3,  11 => 1,);
    }
}
/* {% extends '::layout.html.twig' %}*/
/* */
/* {% block title %}*/
/*     <title> @loes </title>*/
/* {% endblock %}*/
/* */
/* {% block header_nav %}*/
/* <!--*/
/*     <div class="btn-group btn-breadcrumb">*/
/*         <a   class="btn btn-default" href="#"> Accueil</a>*/
/*     </div>*/
/*     <br/><br/>*/
/*     -->*/
/* {% endblock %} */
/* */
/* {% block sidebar_nav %}*/
/*  */
/* 	<nav class="navbar navbar-default"> */
/*   		<div class="container-fluid">*/
/* 		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">*/
/* 		      <ul class="nav navbar-nav">*/
/* */
/* 			        <li><a href="{{path('programs')}}"*/
/* 			        	{% if menu is defined and menu=="programs"%}*/
/* 			        		class="current"*/
/* 			        	{% endif%}          */
/* 			        > Liste des programmes </a></li>*/
/* 			        */
/* 			        <li><a href="{{path('tableaux_bord', {niv:1})}}"*/
/* 			        	{% if menu is defined and menu=="tableaux"%}*/
/* 			        		class="current"*/
/* 			        	{% endif%}> Tableaux de bord </a></li>			        */
/* 			        */
/* */
/* 			        {% if  ( is_granted("ROLE_ADMIN") )*/
/* 			        %}	*/
/* 				        <li><a href="{{path('admin_outil')}}"*/
/* 			          		{% if menu is defined and ( menu=="adm-out" or menu=="adm-util" or  menu=="adm-param" or  menu=="adm-level" or  menu=="adm-lang" or  menu=="adm-sem" )%}*/
/* 				        		class="current" */
/* 				        	{% endif%}> <span class="glyphicon glyphicon-cog"></span>  </a></li>*/
/* */
/* 			        {% endif %}				        */
/* */
/* 				    <li><a href="{{ path('fos_user_security_logout') }}">*/
/* 				        	 Déconnexion </a></li>   */
/* */
/* */
/* 		      </ul>*/
/* 		    </div><!-- /.navbar-collapse -->  */
/*   		</div><!-- /.container-fluid -->*/
/* 	</nav>*/
/* 	*/
/*  */
/*     */
/* {% endblock %}*/
/* */
/* */
/* */
