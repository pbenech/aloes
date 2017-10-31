<?php

/* IfeAloesBundle:Public:layout.html.twig */
class __TwigTemplate_7d10aaaa7d9195e4addb7ee7c9dce79f58abc41e8c4b5bed8f42d1e4a4af7af1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "IfeAloesBundle:Public:layout.html.twig", 1);
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
        echo "
";
    }

    // line 11
    public function block_sidebar_nav($context, array $blocks = array())
    {
        // line 12
        echo "\t<nav class=\"navbar navbar-default\">
  \t\t<div class=\"container-fluid\">
\t\t    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
\t\t      <ul class=\"nav navbar-nav\">


\t\t        <li><a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("aloes_about");
        echo "\"
\t\t        \t";
        // line 19
        if ((array_key_exists("menu", $context) && ((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")) == "about"))) {
            // line 20
            echo "\t\t        \t\tclass=\"current\"
\t\t        \t";
        }
        // line 21
        echo "> A propos</a></li>
\t\t        <li><a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("aloes_credits");
        echo "\"
\t\t        \t";
        // line 23
        if ((array_key_exists("menu", $context) && ((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")) == "credits"))) {
            // line 24
            echo "\t\t        \t\tclass=\"current\"
\t\t        \t";
        }
        // line 25
        echo "> Credits </a></li>
\t\t        <li><a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("tableaux_bord");
        echo "\"
\t\t        \t";
        // line 27
        if ((array_key_exists("menu", $context) && ((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")) == "tableaux"))) {
            // line 28
            echo "\t\t        \t\tclass=\"current\"
\t\t        \t";
        }
        // line 29
        echo "> Tableaux de bord </a></li>




\t\t        <li><a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\">
\t\t        \t Connexion </a></li>     
\t\t        \t         \t
\t\t      </ul>
\t\t    </div><!-- /.navbar-collapse -->  
  \t\t</div><!-- /.container-fluid -->
\t</nav>
";
    }

    public function getTemplateName()
    {
        return "IfeAloesBundle:Public:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 34,  93 => 29,  89 => 28,  87 => 27,  83 => 26,  80 => 25,  76 => 24,  74 => 23,  70 => 22,  67 => 21,  63 => 20,  61 => 19,  57 => 18,  49 => 12,  46 => 11,  41 => 8,  38 => 7,  33 => 4,  30 => 3,  11 => 1,);
    }
}
/* {% extends '::layout.html.twig' %}*/
/* */
/* {% block title %}*/
/*     <title> @loes </title>*/
/* {% endblock %}*/
/* */
/* {% block header_nav %}*/
/* */
/* {% endblock %}*/
/* */
/* {% block sidebar_nav %}*/
/* 	<nav class="navbar navbar-default">*/
/*   		<div class="container-fluid">*/
/* 		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">*/
/* 		      <ul class="nav navbar-nav">*/
/* */
/* */
/* 		        <li><a href="{{path('aloes_about')}}"*/
/* 		        	{% if menu is defined and menu=="about"%}*/
/* 		        		class="current"*/
/* 		        	{% endif%}> A propos</a></li>*/
/* 		        <li><a href="{{path('aloes_credits')}}"*/
/* 		        	{% if menu is defined and menu=="credits"%}*/
/* 		        		class="current"*/
/* 		        	{% endif%}> Credits </a></li>*/
/* 		        <li><a href="{{path('tableaux_bord')}}"*/
/* 		        	{% if menu is defined and menu=="tableaux"%}*/
/* 		        		class="current"*/
/* 		        	{% endif%}> Tableaux de bord </a></li>*/
/* */
/* */
/* */
/* */
/* 		        <li><a href="{{ path('fos_user_security_login') }}">*/
/* 		        	 Connexion </a></li>     */
/* 		        	         	*/
/* 		      </ul>*/
/* 		    </div><!-- /.navbar-collapse -->  */
/*   		</div><!-- /.container-fluid -->*/
/* 	</nav>*/
/* {% endblock %}*/
