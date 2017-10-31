<?php

/* IfeAloesBundle:Aloes:list4.html.twig */
class __TwigTemplate_427d791d5fe1b7dfb3fe0f4805f64f1d5653baf4521747c349a6aae994bae2a9 extends Twig_Template
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
<div id=\"CGS\" >     

    <div class=\"col-sm-12 blockheader\"  >       
    \t<div class=\"col-sm-5 entete0\" style=\"text-align:left\"   >
  \t\t\tCompétences générales
        </div>\t\t
    \t<div class=\"col-sm-2 entete0\" style=\"text-align:center\"   >
  \t\t\tCatégorie
        </div>\t
    \t<div class=\"col-sm-2 entete0\" style=\"text-align:center\"   >
  \t\t\tCompétences spécifiques
        </div>\t
    \t<div class=\"col-sm-1 entete0\" style=\"text-align:center\"   >
  \t\t\t%
        </div>\t        
    \t<div class=\"col-sm-2 entete0\"  style=\"text-align:center\"  >
  \t\t\t
        </div>\t  
                
    </div>   
   
  ";
        // line 24
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
            // line 25
            $context["pourcentage"] = (($this->getAttribute($context["parent"], "weight", array()) * 100) + (isset($context["pourcentage"]) ? $context["pourcentage"] : $this->getContext($context, "pourcentage")));
            echo "\t 
  
    <div id=\"CG_";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["parent"], "id", array()), "html", null, true);
            echo "\"  style=\"border-bottom:dotted 1px;\"> 

        ";
            // line 29
            $this->displayBlock("parent_item", $context, $blocks);
            echo "
        
\t     <div id=\"CG_";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["parent"], "id", array()), "html", null, true);
            echo "_B\" class=\"col-md-12 col-sm-12 blockc\" style=\"display: none;\">  
      \t        \t    
\t\t  \t  \t";
            // line 33
            $this->displayBlock("children_header", $context, $blocks);
            echo "
  
    \t    \t";
            // line 35
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
        // line 41
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
        echo "\t
\t
\t<div id='' class=\"col-md-8 col-sm-8\">\t
\t</div>  
\t<div id='general-item-weight' class=\"general-item-weight col-md-2 col-sm-2\">\t
\t\t<div class=\"progress\">\t
\t\t
\t\t\t";
        // line 57
        $context["pourcentage"] = twig_round((isset($context["pourcentage"]) ? $context["pourcentage"] : $this->getContext($context, "pourcentage")), 1);
        // line 58
        echo "\t\t\t
\t\t\t<div class=\"progress-bar ";
        // line 59
        echo twig_escape_filter($this->env, (isset($context["color"]) ? $context["color"] : $this->getContext($context, "color")), "html", null, true);
        echo " \" style=\"width:";
        echo twig_escape_filter($this->env, (isset($context["pourcentage"]) ? $context["pourcentage"] : $this->getContext($context, "pourcentage")), "html", null, true);
        echo "%;\"  > 
\t\t\t\t<span class=\"text-muted\">";
        // line 60
        echo twig_escape_filter($this->env, (isset($context["pourcentage"]) ? $context["pourcentage"] : $this->getContext($context, "pourcentage")), "html", null, true);
        echo "%</span> 
\t\t\t</div>\t\t
\t\t</div>\t
\t</div> 
</div>\t 

";
        // line 66
        $this->displayBlock("new_parent", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "IfeAloesBundle:Aloes:list4.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 66,  149 => 60,  143 => 59,  140 => 58,  138 => 57,  129 => 50,  126 => 49,  123 => 48,  117 => 46,  115 => 45,  109 => 41,  89 => 35,  84 => 33,  79 => 31,  74 => 29,  69 => 27,  64 => 25,  45 => 24,  21 => 2,  19 => 1,);
    }
}
/* {% set pourcentage = 0 %}*/
/* */
/* <div id="CGS" >     */
/* */
/*     <div class="col-sm-12 blockheader"  >       */
/*     	<div class="col-sm-5 entete0" style="text-align:left"   >*/
/*   			Compétences générales*/
/*         </div>		*/
/*     	<div class="col-sm-2 entete0" style="text-align:center"   >*/
/*   			Catégorie*/
/*         </div>	*/
/*     	<div class="col-sm-2 entete0" style="text-align:center"   >*/
/*   			Compétences spécifiques*/
/*         </div>	*/
/*     	<div class="col-sm-1 entete0" style="text-align:center"   >*/
/*   			%*/
/*         </div>	        */
/*     	<div class="col-sm-2 entete0"  style="text-align:center"  >*/
/*   			*/
/*         </div>	  */
/*                 */
/*     </div>   */
/*    */
/*   {% for parent in entities %} 	                    */
/* 	{% set pourcentage = (parent.weight * 100) + pourcentage %}	 */
/*   */
/*     <div id="CG_{{parent.id}}"  style="border-bottom:dotted 1px;"> */
/* */
/*         {{ block('parent_item') }}*/
/*         */
/* 	     <div id="CG_{{parent.id}}_B" class="col-md-12 col-sm-12 blockc" style="display: none;">  */
/*       	        	    */
/* 		  	  	{{ block('children_header') }}*/
/*   */
/*     	    	{{ block('new_child') }}  */
/* */
/*           </div>	*/
/*  */
/*     </div> */
/*   {% endfor %}*/
/* </div>  */
/*   */
/*   */
/* <div class="row">*/
/* 	{% if pourcentage>100 				%}*/
/* 	{% set color="progress-bar-danger"  %}	*/
/* 	{% else 							%}*/
/* 	{% set color="progress-bar-striped" %}*/
/* 	{% endif 							%}*/
/* 	*/
/* 	*/
/* 	<div id='' class="col-md-8 col-sm-8">	*/
/* 	</div>  */
/* 	<div id='general-item-weight' class="general-item-weight col-md-2 col-sm-2">	*/
/* 		<div class="progress">	*/
/* 		*/
/* 			{% set pourcentage = pourcentage|round(1)  %}*/
/* 			*/
/* 			<div class="progress-bar {{color}} " style="width:{{ pourcentage }}%;"  > */
/* 				<span class="text-muted">{{ pourcentage }}%</span> */
/* 			</div>		*/
/* 		</div>	*/
/* 	</div> */
/* </div>	 */
/* */
/* {{ block('new_parent') }}*/
/* */
