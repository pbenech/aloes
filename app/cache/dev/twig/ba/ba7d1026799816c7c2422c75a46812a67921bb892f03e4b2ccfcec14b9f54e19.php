<?php

/* IfeAloesBundle:Program:programpad.html.twig */
class __TwigTemplate_40b6c7dd6343e6c1ac326ce902817bf113943185aad7ea83610365199eea92b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("IfeAloesBundle:Program:layout.html.twig", "IfeAloesBundle:Program:programpad.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "IfeAloesBundle:Program:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<iframe src=\"http://ecoweb.ens-lyon.fr/cahier-cours/private/ad9abb56303dfffa1ffc7c54fb2dfe5fd9767c1c/feedback-loes-v2\" 
     width=\"100%\" 
     height=\"5000\"  
     \">
</iframe> 


";
    }

    public function getTemplateName()
    {
        return "IfeAloesBundle:Program:programpad.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'IfeAloesBundle:Program:layout.html.twig' %}*/
/* */
/* {% block content -%}*/
/* <iframe src="http://ecoweb.ens-lyon.fr/cahier-cours/private/ad9abb56303dfffa1ffc7c54fb2dfe5fd9767c1c/feedback-loes-v2" */
/*      width="100%" */
/*      height="5000"  */
/*      ">*/
/* </iframe> */
/* */
/* */
/* {% endblock %}*/
/* */
