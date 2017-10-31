<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_b9d2cb001007a33e7119fd557d2c3d8eee73b080297794eabcebd25e83f57af6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "FOSUserBundle::layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
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
        echo "\tAccueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "
<fieldset>
\t    <table class=\"table\">
\t        <thead>

\t        </thead>
\t        <tbody>

\t\t\t\t<form  class=\"form-horizontal\"  action=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">

\t\t\t\t    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

\t\t\t\t\t<div class='container-fluid'>\t \t\t\t\t
\t\t\t\t\t\t<div class='row'>\t
\t\t\t\t\t\t  <div class='col-md-2'>
\t\t\t\t\t    \t<label for=\"username\">";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
\t\t\t\t\t      </div>
\t\t\t\t\t\t  <div class='col-md-10'>\t\t\t\t      \t
\t\t\t\t\t    \t<input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />
\t\t\t\t\t \t  </div>
                        </div>
                          
\t\t\t\t\t\t<div class='row'>\t
\t\t\t\t\t\t  <div class='col-md-2'>
\t\t\t\t\t    \t<label for=\"password\">";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
\t\t\t\t\t      </div>
\t\t\t\t\t\t  <div class='col-md-10'>\t\t\t\t      \t
\t\t\t\t\t    \t <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />
\t\t\t\t\t \t  </div>
\t\t\t\t\t \t</div> 

\t\t\t\t\t\t<div class='row'>\t
\t\t\t\t\t\t  <div class='col-md-12'>
\t\t\t\t\t\t    <label for=\"remember_me\">
\t\t\t\t\t\t    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
\t\t\t\t\t\t    ";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "
\t\t\t\t\t\t    </label>
\t\t\t\t\t \t  </div>
\t\t\t\t\t \t</div> 
\t\t\t\t\t \t
\t\t\t\t\t\t<div class='row'>\t
\t\t\t\t\t\t  <div class='col-md-12'>
\t\t\t\t\t\t    <input type=\"submit\" id=\"_submit\" class=\"btn btn-primary\" name=\"_submit\" value=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />\t\t\t \t
\t\t\t\t\t \t  </div>
\t\t\t\t\t \t</div> 
\t\t\t\t\t \t\t\t\t\t\t \t
\t\t\t\t\t</div> \t

\t\t\t\t</form>



\t\t\t</tbody>
\t\t</table>\t
\t\t
\t\t<div class='row'>\t
\t\t\t<div class='col-sm-12'>\t
\t\t\t 
\t\t\t\t<a href=\"";
        // line 66
        echo $this->env->getExtension('routing')->getPath("password_reset");
        echo "\" >
\t\t\t\t\t<i>
\t\t\t\t\tMot de passe oublié ?
\t\t\t\t\t</i>
\t\t\t\t</a>\t\t\t\t
\t\t\t</div>
\t\t</div>\t\t
\t\t
</fieldset>


";
    }

    // line 79
    public function block_header_nav($context, array $blocks = array())
    {
        // line 80
        echo "
";
    }

    // line 83
    public function block_sidebar_nav($context, array $blocks = array())
    {
        // line 84
        echo "
\t<nav class=\"navbar navbar-default\">
  \t\t<div class=\"container-fluid\">
\t\t    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
\t\t      <ul class=\"nav navbar-nav\">

\t\t        <li><a href=\"";
        // line 90
        echo $this->env->getExtension('routing')->getPath("aloes_about");
        echo "\"
\t\t        \t";
        // line 91
        if ((array_key_exists("menu", $context) && ((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")) == "about"))) {
            // line 92
            echo "\t\t        \t\tclass=\"current\"
\t\t        \t";
        }
        // line 93
        echo "> A propos</a></li>
\t\t        <li><a href=\"";
        // line 94
        echo $this->env->getExtension('routing')->getPath("aloes_credits");
        echo "\"
\t\t        \t";
        // line 95
        if ((array_key_exists("menu", $context) && ((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")) == "credits"))) {
            // line 96
            echo "\t\t        \t\tclass=\"current\"
\t\t        \t";
        }
        // line 97
        echo "> Credits </a></li>
\t\t        <li><a href=\"";
        // line 98
        echo $this->env->getExtension('routing')->getPath("tableaux_bord");
        echo "\"
\t\t        \t";
        // line 99
        if ((array_key_exists("menu", $context) && ((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")) == "tableaux"))) {
            // line 100
            echo "\t\t        \t\tclass=\"current\"
\t\t        \t";
        }
        // line 101
        echo "> Tableaux de bord </a></li>\t\t        \t
\t\t        \t
\t\t        \t
\t\t        <li><a href=\"";
        // line 104
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\">
\t\t        \t Connexion </a></li>     
\t\t      
\t\t      </ul>
\t\t    </div><!-- /.navbar-collapse -->  
  \t\t</div><!-- /.container-fluid -->
\t</nav>

\t<!--
    <ul class=\"nav nav-sidebar\">

        <li><a href=\"";
        // line 115
        echo $this->env->getExtension('routing')->getPath("aloes_about");
        echo "\"
        \t";
        // line 116
        if ((array_key_exists("menu", $context) && ((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")) == "about"))) {
            // line 117
            echo "        \t\tclass=\"current\"
        \t";
        }
        // line 118
        echo "> A propos</a></li>
        <li><a href=\"";
        // line 119
        echo $this->env->getExtension('routing')->getPath("aloes_credits");
        echo "\"
        \t";
        // line 120
        if ((array_key_exists("menu", $context) && ((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")) == "credits"))) {
            // line 121
            echo "        \t\tclass=\"current\"
        \t";
        }
        // line 122
        echo "> Credits </a></li>
        <hr>
        <li><a href=\"";
        // line 124
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\">
        \t Connexion </a></li>             \t
    </ul>
    --> 
    
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 124,  238 => 122,  234 => 121,  232 => 120,  228 => 119,  225 => 118,  221 => 117,  219 => 116,  215 => 115,  201 => 104,  196 => 101,  192 => 100,  190 => 99,  186 => 98,  183 => 97,  179 => 96,  177 => 95,  173 => 94,  170 => 93,  166 => 92,  164 => 91,  160 => 90,  152 => 84,  149 => 83,  144 => 80,  141 => 79,  125 => 66,  106 => 50,  96 => 43,  82 => 32,  73 => 26,  67 => 23,  59 => 18,  54 => 16,  44 => 8,  41 => 7,  34 => 4,  31 => 3,  11 => 1,);
    }
}
/* {% extends '::layout.html.twig' %}*/
/* */
/* {% block title %}*/
/* 	Accueil - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/* */
/* <fieldset>*/
/* 	    <table class="table">*/
/* 	        <thead>*/
/* */
/* 	        </thead>*/
/* 	        <tbody>*/
/* */
/* 				<form  class="form-horizontal"  action="{{ path("fos_user_security_check") }}" method="post">*/
/* */
/* 				    <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/* */
/* 					<div class='container-fluid'>	 				*/
/* 						<div class='row'>	*/
/* 						  <div class='col-md-2'>*/
/* 					    	<label for="username">{{ 'security.login.username'|trans({}, 'FOSUserBundle') }}</label>*/
/* 					      </div>*/
/* 						  <div class='col-md-10'>				      	*/
/* 					    	<input type="text" id="username" name="_username" value="{{ last_username }}" required="required" />*/
/* 					 	  </div>*/
/*                         </div>*/
/*                           */
/* 						<div class='row'>	*/
/* 						  <div class='col-md-2'>*/
/* 					    	<label for="password">{{ 'security.login.password'|trans({}, 'FOSUserBundle') }}</label>*/
/* 					      </div>*/
/* 						  <div class='col-md-10'>				      	*/
/* 					    	 <input type="password" id="password" name="_password" required="required" />*/
/* 					 	  </div>*/
/* 					 	</div> */
/* */
/* 						<div class='row'>	*/
/* 						  <div class='col-md-12'>*/
/* 						    <label for="remember_me">*/
/* 						    <input type="checkbox" id="remember_me" name="_remember_me" value="on" />*/
/* 						    {{ 'security.login.remember_me'|trans({}, 'FOSUserBundle') }}*/
/* 						    </label>*/
/* 					 	  </div>*/
/* 					 	</div> */
/* 					 	*/
/* 						<div class='row'>	*/
/* 						  <div class='col-md-12'>*/
/* 						    <input type="submit" id="_submit" class="btn btn-primary" name="_submit" value="{{ 'security.login.submit'|trans({}, 'FOSUserBundle') }}" />			 	*/
/* 					 	  </div>*/
/* 					 	</div> */
/* 					 						 	*/
/* 					</div> 	*/
/* */
/* 				</form>*/
/* */
/* */
/* */
/* 			</tbody>*/
/* 		</table>	*/
/* 		*/
/* 		<div class='row'>	*/
/* 			<div class='col-sm-12'>	*/
/* 			 */
/* 				<a href="{{ path('password_reset') }}" >*/
/* 					<i>*/
/* 					Mot de passe oublié ?*/
/* 					</i>*/
/* 				</a>				*/
/* 			</div>*/
/* 		</div>		*/
/* 		*/
/* </fieldset>*/
/* */
/* */
/* {% endblock %}*/
/* */
/* {% block header_nav %}*/
/* */
/* {% endblock %}		*/
/* */
/* {% block sidebar_nav %}*/
/* */
/* 	<nav class="navbar navbar-default">*/
/*   		<div class="container-fluid">*/
/* 		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">*/
/* 		      <ul class="nav navbar-nav">*/
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
/* 		        	{% endif%}> Tableaux de bord </a></li>		        	*/
/* 		        	*/
/* 		        	*/
/* 		        <li><a href="{{ path('fos_user_security_login') }}">*/
/* 		        	 Connexion </a></li>     */
/* 		      */
/* 		      </ul>*/
/* 		    </div><!-- /.navbar-collapse -->  */
/*   		</div><!-- /.container-fluid -->*/
/* 	</nav>*/
/* */
/* 	<!--*/
/*     <ul class="nav nav-sidebar">*/
/* */
/*         <li><a href="{{path('aloes_about')}}"*/
/*         	{% if menu is defined and menu=="about"%}*/
/*         		class="current"*/
/*         	{% endif%}> A propos</a></li>*/
/*         <li><a href="{{path('aloes_credits')}}"*/
/*         	{% if menu is defined and menu=="credits"%}*/
/*         		class="current"*/
/*         	{% endif%}> Credits </a></li>*/
/*         <hr>*/
/*         <li><a href="{{ path('fos_user_security_login') }}">*/
/*         	 Connexion </a></li>             	*/
/*     </ul>*/
/*     --> */
/*     */
/* {% endblock %}*/
/* */
