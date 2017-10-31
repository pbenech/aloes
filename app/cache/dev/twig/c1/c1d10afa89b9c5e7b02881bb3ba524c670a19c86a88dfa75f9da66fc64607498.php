<?php

/* IfeAloesBundle:Tableaux:resums.html.twig */
class __TwigTemplate_fba078240409da3ee9f0de9d254ff6e67044475bb28e1fcbf333c70d1d2cf8da extends Twig_Template
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
<div class='col-sm-12'>

\t<ul class=\"nav nav-tabs\">

\t  ";
        // line 6
        $context["cpt"] = 0;
        echo "\t
\t  ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["liste_cours"]) ? $context["liste_cours"] : $this->getContext($context, "liste_cours")));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 8
            echo "\t  \t ";
            if (((isset($context["cpt"]) ? $context["cpt"] : $this->getContext($context, "cpt")) == 0)) {
                // line 9
                echo "\t  \t\t<li class=\"active\"><a data-toggle=\"tab\" href=\"#menu";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["value"], "cours", array()), "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["value"], "cours", array()), "label", array()), "html", null, true);
                echo "</a></li>
\t  \t\t";
                // line 10
                $context["cpt"] = 1;
                echo "\t  \t 
\t  \t ";
            } else {
                // line 12
                echo "\t\t \t<li><a data-toggle=\"tab\" href=\"#menu";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["value"], "cours", array()), "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["value"], "cours", array()), "label", array()), "html", null, true);
                echo "</a></li>\t  \t 
\t  \t ";
            }
            // line 14
            echo "\t  \t 
\t  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "
\t</ul>
 

\t<div class=\"tab-content\" style=\"border-left:1px solid #ddd ;border-right:1px solid #ddd ;border-bottom:1px solid #ddd ;padding:15px;\">

\t  ";
        // line 22
        $context["cpt"] = 0;
        echo "\t\t
\t  ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["liste_cours"]) ? $context["liste_cours"] : $this->getContext($context, "liste_cours")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 24
            echo "\t  \t ";
            if (((isset($context["cpt"]) ? $context["cpt"] : $this->getContext($context, "cpt")) == 0)) {
                // line 25
                echo "\t\t <div id=\"menu";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["value"], "cours", array()), "id", array()), "html", null, true);
                echo "\" class=\"tab-pane fade in active\">
\t  \t\t";
                // line 26
                $context["cpt"] = 1;
                echo "\t  \t 
\t  \t ";
            } else {
                // line 28
                echo "\t\t <div id=\"menu";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["value"], "cours", array()), "id", array()), "html", null, true);
                echo "\" class=\"tab-pane fade\">  \t 
\t  \t ";
            }
            // line 30
            echo "\t\t\t
\t\t\t";
            // line 31
            $this->loadTemplate("IfeAloesBundle:Tableaux:resum.html.twig", "IfeAloesBundle:Tableaux:resums.html.twig", 31)->display(array_merge($context, array("course" => $this->getAttribute($context["value"], "cours", array()), "comp" => $this->getAttribute($context["value"], "comp", array()), "topics" => $this->getAttribute($context["value"], "topics", array()), "assessments" => $this->getAttribute($context["value"], "assessments", array()), "champs" => $this->getAttribute($context["value"], "champs", array()), "colors" => $this->getAttribute($context["value"], "colors", array()))));
            // line 32
            echo "\t\t\t\t  
\t  \t </div>\t   
\t  \t\t
\t  ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "\t\t  \t\t
\t
\t</div>


</div>




</div> ";
    }

    public function getTemplateName()
    {
        return "IfeAloesBundle:Tableaux:resums.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 35,  117 => 32,  115 => 31,  112 => 30,  106 => 28,  101 => 26,  96 => 25,  93 => 24,  76 => 23,  72 => 22,  64 => 16,  57 => 14,  49 => 12,  44 => 10,  37 => 9,  34 => 8,  30 => 7,  26 => 6,  19 => 1,);
    }
}
/* */
/* <div class='col-sm-12'>*/
/* */
/* 	<ul class="nav nav-tabs">*/
/* */
/* 	  {% set cpt=0 %}	*/
/* 	  {% for value in liste_cours 															%}*/
/* 	  	 {% if cpt==0 %}*/
/* 	  		<li class="active"><a data-toggle="tab" href="#menu{{value.cours.id}}">{{value.cours.label}}</a></li>*/
/* 	  		{% set cpt = 1 %}	  	 */
/* 	  	 {% else     %}*/
/* 		 	<li><a data-toggle="tab" href="#menu{{value.cours.id}}">{{value.cours.label}}</a></li>	  	 */
/* 	  	 {% endif    %}*/
/* 	  	 */
/* 	  {% endfor 																				%}*/
/* */
/* 	</ul>*/
/*  */
/* */
/* 	<div class="tab-content" style="border-left:1px solid #ddd ;border-right:1px solid #ddd ;border-bottom:1px solid #ddd ;padding:15px;">*/
/* */
/* 	  {% set cpt=0 %}		*/
/* 	  {% for value in liste_cours 															%}*/
/* 	  	 {% if cpt==0 %}*/
/* 		 <div id="menu{{value.cours.id}}" class="tab-pane fade in active">*/
/* 	  		{% set cpt = 1 %}	  	 */
/* 	  	 {% else     %}*/
/* 		 <div id="menu{{value.cours.id}}" class="tab-pane fade">  	 */
/* 	  	 {% endif    %}*/
/* 			*/
/* 			{% include "IfeAloesBundle:Tableaux:resum.html.twig" with {"course": value.cours,"comp": value.comp,"topics": value.topics,"assessments": value.assessments,"champs": value.champs,"colors": value.colors} %}*/
/* 				  */
/* 	  	 </div>	   */
/* 	  		*/
/* 	  {% endfor 																			%}		  		*/
/* 	*/
/* 	</div>*/
/* */
/* */
/* </div>*/
/* */
/* */
/* */
/* */
/* </div> */
