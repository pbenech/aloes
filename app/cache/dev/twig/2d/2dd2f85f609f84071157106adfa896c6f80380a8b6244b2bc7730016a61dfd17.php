<?php

/* IfeAloesBundle:Course:courspad.html.twig */
class __TwigTemplate_f7f82f801c6781a238e5d553279aa282008e8fac1e84c5afe2038043a6c8b26f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("IfeAloesBundle:Course:layout.html.twig", "IfeAloesBundle:Course:courspad.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "IfeAloesBundle:Course:layout.html.twig";
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
\t        
";
    }

    public function getTemplateName()
    {
        return "IfeAloesBundle:Course:courspad.html.twig";
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
/* {% extends 'IfeAloesBundle:Course:layout.html.twig' %}*/
/* */
/* {% block content -%}*/
/* <iframe src="http://ecoweb.ens-lyon.fr/cahier-cours/private/ad9abb56303dfffa1ffc7c54fb2dfe5fd9767c1c/feedback-loes-v2" */
/*      width="100%" */
/*      height="5000"  */
/*      ">*/
/* </iframe> */
/* 	        */
/* {% endblock %}*/
/* */
