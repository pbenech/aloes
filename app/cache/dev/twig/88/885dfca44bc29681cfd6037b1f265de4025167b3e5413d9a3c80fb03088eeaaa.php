<?php

/* IfeAloesBundle:Aloes:list3.html.twig */
class __TwigTemplate_8b2aff0f5b87bcb1868f384f696b84543d80a7507c42293c9790e32ecc907c05 extends Twig_Template
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
<div id=\"REFS\" >  
  
    <div class=\"col-sm-12 blockheader\"  >       
    \t<div class=\"col-sm-4 entete0\" style=\"text-align:left\"   >
  \t\t\tDates / Séquence
        </div>\t\t
    \t<div class=\"col-sm-2 entete0\" >
  \t\t\tThématique
        </div>\t
    \t<div class=\"col-sm-1 entete0\" style=\"text-align:left\"   >
  \t\t\tEvaluation(s)
        </div>\t
    \t<div class=\"col-sm-1 entete0\" style=\"text-align:center\"   >
  \t\t\tEvènement(s)
        </div>\t        
    \t<div class=\"col-sm-2 entete0\"  style=\"text-align:center\"  >
  \t\t\t%
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
    
    <div id=\"TO_";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["parent"], "id", array()), "html", null, true);
            echo "\" style=\"border-bottom:dotted 1px;\" >  

        ";
            // line 29
            $this->displayBlock("parent_item", $context, $blocks);
            echo "

\t\t<div id=\"TO_";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["parent"], "id", array()), "html", null, true);
            echo "_B\" class=\"col-md-12 col-sm-12 blockc \" style=\"display: none;\">             

 \t\t<div id=\"TO_";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["parent"], "id", array()), "html", null, true);
            echo "_B0\" class=\"col-sm-12 block0\">  
       \t  ";
            // line 34
            $this->loadTemplate("IfeAloesBundle:Topic2:TO_XX_R.html.twig", "IfeAloesBundle:Aloes:list3.html.twig", 34)->display($context);
            // line 35
            echo "\t\t</div>

\t\t  ";
            // line 37
            $this->displayBlock("children_header", $context, $blocks);
            echo "\t
\t\t  <div id=\"TO_";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["parent"], "id", array()), "html", null, true);
            echo "_B1\" class=\"col-sm-12\"  >    
      \t \t\t<div id=\"ASS_";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["parent"], "id", array()), "html", null, true);
            echo "\" > 
  \t      \t  \t
  \t            \t";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["parent"], (isset($context["children"]) ? $context["children"] : $this->getContext($context, "children"))));
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
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 42
                echo "\t                    ";
                $this->displayBlock("child_item", $context, $blocks);
                echo "                                   
\t            \t";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "  \t\t\t\t</div>
    \t    \t";
            // line 45
            $this->displayBlock("new_child", $context, $blocks);
            echo " 

          </div>
          
          ";
            // line 49
            $this->displayBlock("children_header2", $context, $blocks);
            echo " \t
\t\t  <div id=\"TO_";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["parent"], "id", array()), "html", null, true);
            echo "_B2\" class=\"col-sm-12\" >    
 
     \t \t\t<div id=\"ASS2_";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["parent"], "id", array()), "html", null, true);
            echo "\"> 
  \t            
  \t            \t";
            // line 54
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["parent"], (isset($context["children2"]) ? $context["children2"] : $this->getContext($context, "children2"))));
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
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 55
                echo "\t                    ";
                $this->displayBlock("child_item2", $context, $blocks);
                echo "                                   
\t            \t";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "  \t\t\t\t</div>
    \t    \t";
            // line 58
            $this->displayBlock("new_child2", $context, $blocks);
            echo " \t\t  \t  \t

\t\t  </div>
        
\t\t</div>
 
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
        // line 66
        echo "</div>  
  
   
  
<div class=\"row\" class=\"col-sm-12\">
\t";
        // line 71
        if (((isset($context["pourcentage"]) ? $context["pourcentage"] : $this->getContext($context, "pourcentage")) > 100)) {
            // line 72
            echo "\t";
            $context["color"] = "progress-bar-danger";
            echo "\t
\t";
        } else {
            // line 74
            echo "\t";
            $context["color"] = "progress-bar-striped";
            // line 75
            echo "\t";
        }
        // line 76
        echo "
\t<div id='' class=\"col-md-8 col-sm-8\">\t
\t</div>  
\t<div id='general-item-weight' class=\"general-item-weight col-md-2 col-sm-2\">\t
\t\t<div class=\"progress\">\t
\t\t\t<div class=\"progress-bar ";
        // line 81
        echo twig_escape_filter($this->env, (isset($context["color"]) ? $context["color"] : $this->getContext($context, "color")), "html", null, true);
        echo " active\" style=\"width:";
        echo twig_escape_filter($this->env, (isset($context["pourcentage"]) ? $context["pourcentage"] : $this->getContext($context, "pourcentage")), "html", null, true);
        echo "%;\" role=\"progressbar\" progress-bar-info=\"\"> 
\t\t\t\t<span class=\"text-muted\">";
        // line 82
        echo twig_escape_filter($this->env, (isset($context["pourcentage"]) ? $context["pourcentage"] : $this->getContext($context, "pourcentage")), "html", null, true);
        echo "%</span> 
\t\t\t</div>\t\t
\t\t</div>\t
\t</div> 
</div>\t 
 

";
        // line 89
        $this->displayBlock("new_parent", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "IfeAloesBundle:Aloes:list3.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  268 => 89,  258 => 82,  252 => 81,  245 => 76,  242 => 75,  239 => 74,  233 => 72,  231 => 71,  224 => 66,  202 => 58,  199 => 57,  182 => 55,  165 => 54,  160 => 52,  155 => 50,  151 => 49,  144 => 45,  141 => 44,  124 => 42,  107 => 41,  102 => 39,  98 => 38,  94 => 37,  90 => 35,  88 => 34,  84 => 33,  79 => 31,  74 => 29,  69 => 27,  64 => 25,  45 => 24,  21 => 2,  19 => 1,);
    }
}
/* {% set pourcentage = 0 %}*/
/* */
/* <div id="REFS" >  */
/*   */
/*     <div class="col-sm-12 blockheader"  >       */
/*     	<div class="col-sm-4 entete0" style="text-align:left"   >*/
/*   			Dates / Séquence*/
/*         </div>		*/
/*     	<div class="col-sm-2 entete0" >*/
/*   			Thématique*/
/*         </div>	*/
/*     	<div class="col-sm-1 entete0" style="text-align:left"   >*/
/*   			Evaluation(s)*/
/*         </div>	*/
/*     	<div class="col-sm-1 entete0" style="text-align:center"   >*/
/*   			Evènement(s)*/
/*         </div>	        */
/*     	<div class="col-sm-2 entete0"  style="text-align:center"  >*/
/*   			%*/
/*         </div>	  */
/*                 */
/*     </div>*/
/*        */
/*   {% for parent in entities %} 	                    */
/* 	{% set pourcentage = (parent.weight * 100) + pourcentage %}	 */
/*     */
/*     <div id="TO_{{parent.id}}" style="border-bottom:dotted 1px;" >  */
/* */
/*         {{ block('parent_item') }}*/
/* */
/* 		<div id="TO_{{parent.id}}_B" class="col-md-12 col-sm-12 blockc " style="display: none;">             */
/* */
/*  		<div id="TO_{{parent.id}}_B0" class="col-sm-12 block0">  */
/*        	  {% include 'IfeAloesBundle:Topic2:TO_XX_R.html.twig' %}*/
/* 		</div>*/
/* */
/* 		  {{ block('children_header') }}	*/
/* 		  <div id="TO_{{parent.id}}_B1" class="col-sm-12"  >    */
/*       	 		<div id="ASS_{{parent.id}}" > */
/*   	      	  	*/
/*   	            	{% for child in attribute(parent,children) %}*/
/* 	                    {{ block('child_item') }}                                   */
/* 	            	{% endfor %}*/
/*   				</div>*/
/*     	    	{{ block('new_child') }} */
/* */
/*           </div>*/
/*           */
/*           {{ block('children_header2') }} 	*/
/* 		  <div id="TO_{{parent.id}}_B2" class="col-sm-12" >    */
/*  */
/*      	 		<div id="ASS2_{{parent.id}}"> */
/*   	            */
/*   	            	{% for child in attribute(parent,children2) %}*/
/* 	                    {{ block('child_item2') }}                                   */
/* 	            	{% endfor %}*/
/*   				</div>*/
/*     	    	{{ block('new_child2') }} 		  	  	*/
/* */
/* 		  </div>*/
/*         */
/* 		</div>*/
/*  */
/*     </div> */
/*   {% endfor %}*/
/* </div>  */
/*   */
/*    */
/*   */
/* <div class="row" class="col-sm-12">*/
/* 	{% if pourcentage>100 				%}*/
/* 	{% set color="progress-bar-danger"  %}	*/
/* 	{% else 							%}*/
/* 	{% set color="progress-bar-striped" %}*/
/* 	{% endif 							%}*/
/* */
/* 	<div id='' class="col-md-8 col-sm-8">	*/
/* 	</div>  */
/* 	<div id='general-item-weight' class="general-item-weight col-md-2 col-sm-2">	*/
/* 		<div class="progress">	*/
/* 			<div class="progress-bar {{color}} active" style="width:{{ pourcentage }}%;" role="progressbar" progress-bar-info=""> */
/* 				<span class="text-muted">{{ pourcentage }}%</span> */
/* 			</div>		*/
/* 		</div>	*/
/* 	</div> */
/* </div>	 */
/*  */
/* */
/* {{ block('new_parent') }}*/
/* */
