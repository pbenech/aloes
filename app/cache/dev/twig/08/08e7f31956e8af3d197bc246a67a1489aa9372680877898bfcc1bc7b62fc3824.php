<?php

/* IfeAloesBundle:Tableaux:error.html.twig */
class __TwigTemplate_52d99f9dafb36405f4329b7657c338e3c7f26c860641ffa5606d8326d68a553b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"alert alert-danger\">
\t";
        // line 2
        echo (isset($context["msg"]) ? $context["msg"] : $this->getContext($context, "msg"));
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "IfeAloesBundle:Tableaux:error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }
}
/* <div class="alert alert-danger">*/
/* 	{{ msg|raw }}*/
/* </div>*/
