<?php

/* IfeAloesBundle:Public:credits.html.twig */
class __TwigTemplate_247f62063eb1722bc265ee2104ed2f11c1b3cd63f0884b673ba2e80d672b12a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("IfeAloesBundle:Public:layout.html.twig", "IfeAloesBundle:Public:credits.html.twig", 1);
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
\t\t\t Crédits
\t</div>
\t
   \t<div class=\"col-sm-12 block3\"  style=\"min-height:500px\">
    \t";
        // line 10
        if ((array_key_exists("parameter", $context) &&  !(null === (isset($context["parameter"]) ? $context["parameter"] : $this->getContext($context, "parameter"))))) {
            // line 11
            echo "   \t\t\t";
            echo $this->getAttribute((isset($context["parameter"]) ? $context["parameter"] : $this->getContext($context, "parameter")), "credits", array());
            echo "
   \t\t";
        }
        // line 13
        echo "   \t\t<br/><br/>  \t
   \t</div>
   
 
";
    }

    public function getTemplateName()
    {
        return "IfeAloesBundle:Public:credits.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 13,  40 => 11,  38 => 10,  31 => 5,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'IfeAloesBundle:Public:layout.html.twig' %}*/
/* */
/* {% block content -%}*/
/* */
/*     <div class='title-two1a col-md-12 col-sm-12'> */
/* 			 Crédits*/
/* 	</div>*/
/* 	*/
/*    	<div class="col-sm-12 block3"  style="min-height:500px">*/
/*     	{% if parameter is defined and parameter is not null %}*/
/*    			{{ parameter.credits|raw }}*/
/*    		{% endif %}*/
/*    		<br/><br/>  	*/
/*    	</div>*/
/*    */
/*  */
/* {% endblock %}*/
/* */
