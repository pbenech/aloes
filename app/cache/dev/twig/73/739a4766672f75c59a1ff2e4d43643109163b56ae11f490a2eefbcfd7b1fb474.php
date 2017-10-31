<?php

/* IfeAloesBundle:Program:pad.html.twig */
class __TwigTemplate_e901c08235a0426998eb7e13f180fa2954616c1c82065fd1264b0f93c18eac17 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("IfeAloesBundle:Aloes:layout.html.twig", "IfeAloesBundle:Program:pad.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
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
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "<iframe src=\"http://ecoweb.ens-lyon.fr/cahier-cours/private/ad9abb56303dfffa1ffc7c54fb2dfe5fd9767c1c/feedback-loes-v2\" 
     width=\"100%\" 
     height=\"5000\"  
     \">
</iframe> 

 
   
 
";
    }

    public function getTemplateName()
    {
        return "IfeAloesBundle:Program:pad.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 5,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'IfeAloesBundle:Aloes:layout.html.twig' %}*/
/* */
/* {% block content -%}*/
/* */
/* <iframe src="http://ecoweb.ens-lyon.fr/cahier-cours/private/ad9abb56303dfffa1ffc7c54fb2dfe5fd9767c1c/feedback-loes-v2" */
/*      width="100%" */
/*      height="5000"  */
/*      ">*/
/* </iframe> */
/* */
/*  */
/*    */
/*  */
/* {% endblock %}*/
/*     */
/* */
/* */
