<?php

/* ::macro.html.twig */
class __TwigTemplate_7c9b87aaeb29c512d186ca7cd544543ecaa39043d9ea58445f029441849eebb0 extends Twig_Template
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
        // line 9
        echo "\t
";
    }

    // line 1
    public function gettri($__name__ = null, $__sort__ = null, $__direction__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "sort" => $__sort__,
            "direction" => $__direction__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            echo "            \t
\t";
            // line 2
            if ((((isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")) == (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))) && ((isset($context["direction"]) ? $context["direction"] : $this->getContext($context, "direction")) == "asc"))) {
                // line 3
                echo "     \t<span class=\"glyphicon glyphicon-sort-by-attributes\" style=\"color:#23527c;font-size: 0.9em;\"></span>
    ";
            } elseif (((            // line 4
(isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")) == (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))) && ((isset($context["direction"]) ? $context["direction"] : $this->getContext($context, "direction")) == "desc"))) {
                echo "           \t\t
    \t<span class=\"glyphicon glyphicon-sort-by-attributes-alt\" style=\"color:#23527c;font-size: 0.9em;\"></span>             \t
    ";
            } else {
                // line 6
                echo " 
    \t<span class=\"glyphicon glyphicon-sort\" style=\"color:#23527c;font-size: 0.9em;\"></span>
    ";
            }
            // line 8
            echo "   
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "::macro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  51 => 6,  45 => 4,  42 => 3,  40 => 2,  24 => 1,  19 => 9,);
    }
}
/* {% macro tri(name, sort,direction) %}            	*/
/* 	{% if sort==name and direction=='asc' %}*/
/*      	<span class="glyphicon glyphicon-sort-by-attributes" style="color:#23527c;font-size: 0.9em;"></span>*/
/*     {% elseif sort==name and direction=='desc'%}           		*/
/*     	<span class="glyphicon glyphicon-sort-by-attributes-alt" style="color:#23527c;font-size: 0.9em;"></span>             	*/
/*     {% else %} */
/*     	<span class="glyphicon glyphicon-sort" style="color:#23527c;font-size: 0.9em;"></span>*/
/*     {% endif %}   */
/* {% endmacro %}	*/
/* */
