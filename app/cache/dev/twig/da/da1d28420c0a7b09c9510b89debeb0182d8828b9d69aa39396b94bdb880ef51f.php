<?php

/* IfeAloesBundle:Aloes:list2.html.twig */
class __TwigTemplate_f6eaf53433ad134ec3f0f62bafeafa9182f24056409a19fe65f0e6d9ed583c28 extends Twig_Template
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
        $context["pourcentage"] = 0;
        // line 2
        echo "
<div id=\"OGS\" >        

    <div class=\"col-sm-12 blockheader\"  >       
    \t<div class=\"col-sm-6 entete0\" style=\"text-align:left\"   >
  \t\t\tObjectif général
        </div>\t\t
    \t<div class=\"col-sm-2 entete0\" style=\"text-align:center\"   >
  \t\t\tObjectifs spécifiques
        </div>\t
    \t<div class=\"col-sm-2 entete0\" style=\"text-align:center\"   >
  \t\t\t%
        </div>\t        
    \t<div class=\"col-sm-2 entete0\"  style=\"text-align:center\"  >
  \t\t\t
        </div>\t  
                
    </div>
       


  ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["parent"]) {
            echo " \t                    
\t";
            // line 24
            $context["pourcentage"] = (($this->getAttribute($context["parent"], "weight", array()) * 100) + (isset($context["pourcentage"]) ? $context["pourcentage"] : $this->getContext($context, "pourcentage")));
            echo "\t 
  
    <div id=\"OG_";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["parent"], "id", array()), "html", null, true);
            echo "\" style=\"border-bottom:dotted 1px;\"> 

        ";
            // line 28
            $this->displayBlock("parent_item", $context, $blocks);
            echo "

\t     <div id=\"OG_";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["parent"], "id", array()), "html", null, true);
            echo "_B\" class=\"col-md-12 col-sm-12 blockc\" style=\"display: none;\"> \t    
\t       \t    
\t\t  \t  \t";
            // line 32
            $this->displayBlock("children_header", $context, $blocks);
            echo "
  
    \t    \t";
            // line 34
            $this->displayBlock("new_child", $context, $blocks);
            echo " 

          </div>\t
 
    </div> 
  ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['parent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "</div>  
  
   
<div class=\"row\">

\t";
        // line 45
        if (((isset($context["pourcentage"]) ? $context["pourcentage"] : $this->getContext($context, "pourcentage")) > 100)) {
            // line 46
            echo "\t";
            $context["color"] = "progress-bar-danger";
            echo "\t
\t";
        } else {
            // line 48
            echo "\t";
            $context["color"] = "progress-bar-striped";
            // line 49
            echo "\t";
        }
        // line 50
        echo "
\t<div id='' class=\"col-md-8 col-sm-8\">\t
\t</div>  
\t<div id='general-item-weight' class=\"general-item-weight cold-md-2 col-sm-2\">\t
\t\t<div class=\"progress\">\t
\t\t\t<div class=\"progress-bar ";
        // line 55
        echo twig_escape_filter($this->env, (isset($context["color"]) ? $context["color"] : $this->getContext($context, "color")), "html", null, true);
        echo " active\" style=\"width:";
        echo twig_escape_filter($this->env, (isset($context["pourcentage"]) ? $context["pourcentage"] : $this->getContext($context, "pourcentage")), "html", null, true);
        echo "%;\" role=\"progressbar\" progress-bar-info=\"\"> 
\t\t\t\t<span class=\"text-muted\">";
        // line 56
        echo twig_escape_filter($this->env, (isset($context["pourcentage"]) ? $context["pourcentage"] : $this->getContext($context, "pourcentage")), "html", null, true);
        echo "%</span>  
\t\t\t</div>\t\t
\t\t</div>\t
\t</div> 
</div>\t 



";
        // line 64
        $this->displayBlock("new_parent", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "IfeAloesBundle:Aloes:list2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 64,  142 => 56,  136 => 55,  129 => 50,  126 => 49,  123 => 48,  117 => 46,  115 => 45,  108 => 40,  88 => 34,  83 => 32,  78 => 30,  73 => 28,  68 => 26,  63 => 24,  44 => 23,  21 => 2,  19 => 1,);
    }
}
/* {% set pourcentage = 0 %}*/
/* */
/* <div id="OGS" >        */
/* */
/*     <div class="col-sm-12 blockheader"  >       */
/*     	<div class="col-sm-6 entete0" style="text-align:left"   >*/
/*   			Objectif général*/
/*         </div>		*/
/*     	<div class="col-sm-2 entete0" style="text-align:center"   >*/
/*   			Objectifs spécifiques*/
/*         </div>	*/
/*     	<div class="col-sm-2 entete0" style="text-align:center"   >*/
/*   			%*/
/*         </div>	        */
/*     	<div class="col-sm-2 entete0"  style="text-align:center"  >*/
/*   			*/
/*         </div>	  */
/*                 */
/*     </div>*/
/*        */
/* */
/* */
/*   {% for parent in entities %} 	                    */
/* 	{% set pourcentage = (parent.weight * 100) + pourcentage %}	 */
/*   */
/*     <div id="OG_{{parent.id}}" style="border-bottom:dotted 1px;"> */
/* */
/*         {{ block('parent_item') }}*/
/* */
/* 	     <div id="OG_{{parent.id}}_B" class="col-md-12 col-sm-12 blockc" style="display: none;"> 	    */
/* 	       	    */
/* 		  	  	{{ block('children_header') }}*/
/*   */
/*     	    	{{ block('new_child') }} */
/* */
/*           </div>	*/
/*  */
/*     </div> */
/*   {% endfor %}*/
/* </div>  */
/*   */
/*    */
/* <div class="row">*/
/* */
/* 	{% if pourcentage>100 				%}*/
/* 	{% set color="progress-bar-danger"  %}	*/
/* 	{% else 							%}*/
/* 	{% set color="progress-bar-striped" %}*/
/* 	{% endif 							%}*/
/* */
/* 	<div id='' class="col-md-8 col-sm-8">	*/
/* 	</div>  */
/* 	<div id='general-item-weight' class="general-item-weight cold-md-2 col-sm-2">	*/
/* 		<div class="progress">	*/
/* 			<div class="progress-bar {{color}} active" style="width:{{ pourcentage }}%;" role="progressbar" progress-bar-info=""> */
/* 				<span class="text-muted">{{ pourcentage }}%</span>  */
/* 			</div>		*/
/* 		</div>	*/
/* 	</div> */
/* </div>	 */
/* */
/* */
/* */
/* {{ block('new_parent') }}*/
/* */
