<?php

/* IfeAloesBundle:Tableaux:result.html.twig */
class __TwigTemplate_560ed2cef096db2d22ed78dbaf188fa3616d25bd6deba7a297c2f0efd90aa062 extends Twig_Template
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
        return "IfeAloesBundle:Tableaux:result.html.twig";
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
