<?php

/* IfeAloesBundle:Tableaux:trav_cours.html.twig */
class __TwigTemplate_2bb6c621e6fde97674e9ac37ebcd5a7e81c63574e791c07d9691de9ef5c2fc89 extends Twig_Template
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
        echo "
<font color=\"";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["color"]) ? $context["color"] : $this->getContext($context, "color")), "html", null, true);
        echo "\">
\t<br/><b>";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "label", array()), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "title", array()), "html", null, true);
        echo "\t\t\t</b><br/><br/>

\t";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["assessments"]) ? $context["assessments"] : $this->getContext($context, "assessments")));
        foreach ($context['_seq'] as $context["_key"] => $context["assessment"]) {
            // line 6
            echo "\t\t<span class=\"glyphicon glyphicon-triangle-right\"></span>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["assessment"], "deadline", array()), "d/m/Y"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["assessment"], "title", array()), "html", null, true);
            echo " \t - [";
            echo twig_escape_filter($this->env, ($this->getAttribute($context["assessment"], "weight", array()) * 100), "html", null, true);
            echo "%] <br/>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['assessment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "</font>
";
    }

    public function getTemplateName()
    {
        return "IfeAloesBundle:Tableaux:trav_cours.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 8,  37 => 6,  33 => 5,  26 => 3,  22 => 2,  19 => 1,);
    }
}
/* */
/* <font color="{{color}}">*/
/* 	<br/><b>{{ course.label }} - {{ course.title }}			</b><br/><br/>*/
/* */
/* 	{% for assessment in assessments			%}*/
/* 		<span class="glyphicon glyphicon-triangle-right"></span>{{ assessment.deadline|date("d/m/Y")	}} - {{ assessment.title	}} 	 - [{{ assessment.weight*100	}}%] <br/>*/
/* 	{% endfor										%}*/
/* </font>*/
/* */
