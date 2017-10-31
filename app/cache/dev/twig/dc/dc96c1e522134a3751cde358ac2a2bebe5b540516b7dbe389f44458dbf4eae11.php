<?php

/* IfeAloesBundle:Public:about.html.twig */
class __TwigTemplate_88ae2a265656d7295294d05554de78037c3f500f6228d4600783b10e74b21278 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("IfeAloesBundle:Public:layout.html.twig", "IfeAloesBundle:Public:about.html.twig", 1);
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
\t\t\t A propos
\t</div> 
\t
   \t<div class=\"col-sm-12 block3\" style=\"min-height:500px\">
    ";
        // line 10
        if ((array_key_exists("parameter", $context) &&  !(null === (isset($context["parameter"]) ? $context["parameter"] : $this->getContext($context, "parameter"))))) {
            // line 11
            echo "   \t\t";
            echo $this->getAttribute((isset($context["parameter"]) ? $context["parameter"] : $this->getContext($context, "parameter")), "about", array());
            echo "
   \t";
        }
        // line 13
        echo "   \t<br/><br/>
   \t</div>
 
";
    }

    public function getTemplateName()
    {
        return "IfeAloesBundle:Public:about.html.twig";
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
/* 			 A propos*/
/* 	</div> */
/* 	*/
/*    	<div class="col-sm-12 block3" style="min-height:500px">*/
/*     {% if parameter is defined and parameter is not null %}*/
/*    		{{ parameter.about|raw }}*/
/*    	{% endif %}*/
/*    	<br/><br/>*/
/*    	</div>*/
/*  */
/* {% endblock %}*/
/*     */
/* */
