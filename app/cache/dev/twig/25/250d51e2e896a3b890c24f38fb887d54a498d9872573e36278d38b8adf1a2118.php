<?php

/* IfeAloesBundle:Aloes:list-spec.html.twig */
class __TwigTemplate_96938ad1b1bc8dc05ac283047d2a4c3fdb1c308ed3de2c229c39cda8bd7f740d extends Twig_Template
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
";
        // line 3
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
            // line 4
            echo "\t                    
  ";
            // line 5
            $context["pourcentage"] = (($this->getAttribute($context["parent"], "weight", array()) * 100) + (isset($context["pourcentage"]) ? $context["pourcentage"] : $this->getContext($context, "pourcentage")));
            echo "\t 
  ";
            // line 6
            if ((($this->getAttribute($context["parent"], "weight", array()) * 100) > 0)) {
                // line 7
                echo "    <div class=\"item-nodeX\" >

        ";
                // line 9
                $this->displayBlock("parent_item", $context, $blocks);
                echo "
\t        <table class=\"table\">
\t
\t            ";
                // line 12
                $this->displayBlock("children_header", $context, $blocks);
                echo "
\t
\t\t   \t\t <tbody class=\"children\">
\t\t   \t\t 
\t                ";
                // line 16
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
                    // line 17
                    echo "\t\t\t   \t\t  ";
                    if (($this->getAttribute($context["child"], "weight", array()) > 0)) {
                        echo "  \t            
\t                     ";
                        // line 18
                        $this->displayBlock("child_item", $context, $blocks);
                        echo "                           
\t             \t  ";
                    }
                    // line 19
                    echo "  \t                
\t                ";
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
                // line 20
                echo "                  

\t            </tbody>
\t
\t\t\t\t</div>
\t
\t        </table>       
        \t";
                // line 27
                $this->displayBlock("new_child", $context, $blocks);
                echo "  
    </div>
    
  ";
            }
            // line 31
            echo "    
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
        // line 33
        echo "
<div class=\"col-md-12 col-sm-12\">
\t<b>TOTAL : ";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["pourcentage"]) ? $context["pourcentage"] : $this->getContext($context, "pourcentage")), "html", null, true);
        echo "%</b>
</div>
";
        // line 37
        $this->displayBlock("new_parent", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "IfeAloesBundle:Aloes:list-spec.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 37,  144 => 35,  140 => 33,  125 => 31,  118 => 27,  109 => 20,  94 => 19,  89 => 18,  84 => 17,  67 => 16,  60 => 12,  54 => 9,  50 => 7,  48 => 6,  44 => 5,  41 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% set pourcentage = 0 %}*/
/*         */
/* {% for parent in entities %}*/
/* 	                    */
/*   {% set pourcentage = (parent.weight * 100) + pourcentage %}	 */
/*   {% if (parent.weight * 100) > 0 %}*/
/*     <div class="item-nodeX" >*/
/* */
/*         {{ block('parent_item') }}*/
/* 	        <table class="table">*/
/* 	*/
/* 	            {{ block('children_header') }}*/
/* 	*/
/* 		   		 <tbody class="children">*/
/* 		   		 */
/* 	                {% for child in attribute(parent,children) %}*/
/* 			   		  {% if child.weight > 0 %}  	            */
/* 	                     {{ block('child_item') }}                           */
/* 	             	  {% endif %}  	                */
/* 	                {% endfor %}                  */
/* */
/* 	            </tbody>*/
/* 	*/
/* 				</div>*/
/* 	*/
/* 	        </table>       */
/*         	{{ block('new_child') }}  */
/*     </div>*/
/*     */
/*   {% endif %}*/
/*     */
/* {% endfor %}*/
/* */
/* <div class="col-md-12 col-sm-12">*/
/* 	<b>TOTAL : {{ pourcentage }}%</b>*/
/* </div>*/
/* {{ block('new_parent') }}*/
/* */
