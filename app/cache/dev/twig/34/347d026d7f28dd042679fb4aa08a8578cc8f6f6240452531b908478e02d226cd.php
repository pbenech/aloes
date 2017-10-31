<?php

/* IfeAloesBundle:Public:password.html.twig */
class __TwigTemplate_e7038c83fea26f7f8fc2c23381a4cfd3eb1ebc7d2389f96b8d9e06193d3adaca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("IfeAloesBundle:Public:layout.html.twig", "IfeAloesBundle:Public:password.html.twig", 1);
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
\t
\t\t";
        // line 11
        if ((array_key_exists("msg", $context) && ((isset($context["msg"]) ? $context["msg"] : $this->getContext($context, "msg")) != ""))) {
            // line 12
            echo "\t\t\t\t";
            echo twig_escape_filter($this->env, (isset($context["msg"]) ? $context["msg"] : $this->getContext($context, "msg")), "html", null, true);
            echo "
\t\t";
        }
        // line 14
        echo "   \t    
   \t</div>
 
";
    }

    public function getTemplateName()
    {
        return "IfeAloesBundle:Public:password.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 14,  41 => 12,  39 => 11,  31 => 5,  28 => 3,  11 => 1,);
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
/* 	*/
/* 		{% if msg is defined and msg!=""   %}*/
/* 				{{ msg }}*/
/* 		{% endif 						   %}*/
/*    	    */
/*    	</div>*/
/*  */
/* {% endblock %}*/
/*     */
/* */
