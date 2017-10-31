<?php

/* IfeAloesBundle:Public:password_reset.html.twig */
class __TwigTemplate_903097707e18562d277da5a92d97a69c04e61ae0453c01bb529f5e0fed4f3678 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("IfeAloesBundle:Public:layout.html.twig", "IfeAloesBundle:Public:password_reset.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "IfeAloesBundle:Public:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "<div class='title-two1a col-md-12 col-sm-12'> 
\t\t\t Réinitialiser votre mot de passe
\t</div> 
\t
   \t<div class=\"col-sm-12 block3\" style=\"min-height:500px\">
\t\tIl n'est pas possible de réinitialiser votre mot de passe si vous vous identifier à partir de l'annuaire LDAP.
   \t<br/><br/>
   \t
\t\t\t<form class=\"form-inline\" action=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("password_re_init");
        echo "\" method=\"post\">\t
\t\t\t\t<div  class=\"col-sm-12\">\t
    \t\t\t\t";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget');
        echo "
    \t\t\t</div>
    \t\t\t
\t\t\t\t<div  class=\"col-sm-12\">\t
\t\t\t\t\t<button type=\"submit\" class=\"btn  btn-button-cancel \">Ok</button>
\t\t\t\t</div>
\t\t\t</form>   \t
   \t
   \t
   \t    
   \t</div>
 
";
    }

    public function getTemplateName()
    {
        return "IfeAloesBundle:Public:password_reset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 15,  41 => 13,  31 => 5,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'IfeAloesBundle:Public:layout.html.twig' %}*/
/* */
/* {% block content -%}*/
/* */
/*     <div class='title-two1a col-md-12 col-sm-12'> */
/* 			 Réinitialiser votre mot de passe*/
/* 	</div> */
/* 	*/
/*    	<div class="col-sm-12 block3" style="min-height:500px">*/
/* 		Il n'est pas possible de réinitialiser votre mot de passe si vous vous identifier à partir de l'annuaire LDAP.*/
/*    	<br/><br/>*/
/*    	*/
/* 			<form class="form-inline" action="{{ path('password_re_init') }}" method="post">	*/
/* 				<div  class="col-sm-12">	*/
/*     				{{ form_widget(form.email) }}*/
/*     			</div>*/
/*     			*/
/* 				<div  class="col-sm-12">	*/
/* 					<button type="submit" class="btn  btn-button-cancel ">Ok</button>*/
/* 				</div>*/
/* 			</form>   	*/
/*    	*/
/*    	*/
/*    	    */
/*    	</div>*/
/*  */
/* {% endblock %}*/
/*     */
/* */
