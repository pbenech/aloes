<?php

/* IfeAloesBundle:Aloes:list.html.twig */
class __TwigTemplate_95fce52dc961483fe10950dfcdfeac41a387cbdd68aa2996d0a441952644c3cc extends Twig_Template
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
\t";
            // line 5
            $context["pourcentage"] = (($this->getAttribute($context["parent"], "weight", array()) * 100) + (isset($context["pourcentage"]) ? $context["pourcentage"] : $this->getContext($context, "pourcentage")));
            echo "\t 

    <div class=\"item-nodeX\" >

        ";
            // line 9
            $this->displayBlock("parent_item", $context, $blocks);
            echo "
        

\t        <table class=\"table\">
\t
\t            ";
            // line 14
            $this->displayBlock("children_header", $context, $blocks);
            echo "
\t
\t\t   \t\t <tbody class=\"children\">
\t                ";
            // line 17
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
                // line 18
                echo "\t                    ";
                $this->displayBlock("child_item", $context, $blocks);
                echo "                                   
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
            echo "\t                 

\t            </tbody>
\t
\t\t\t\t</div>
\t
\t        </table>
        
        \t";
            // line 28
            $this->displayBlock("new_child", $context, $blocks);
            echo " 

  
        
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
        // line 34
        echo "
<div class=\"row\">
\t<div class=\" col-md-6 col-sm-6\">
\t</div>
\t<div class=\"general-item-weight cold-md-2 col-sm-2\">\t
\t\t<b>";
        // line 39
        echo twig_escape_filter($this->env, (isset($context["pourcentage"]) ? $context["pourcentage"] : $this->getContext($context, "pourcentage")), "html", null, true);
        echo "% Total</b>
\t</div>
</div>\t

";
        // line 43
        $this->displayBlock("new_parent", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "IfeAloesBundle:Aloes:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 43,  136 => 39,  129 => 34,  109 => 28,  99 => 20,  82 => 18,  65 => 17,  59 => 14,  51 => 9,  44 => 5,  41 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% set pourcentage = 0 %}*/
/*         */
/* {% for parent in entities %}*/
/* 	                    */
/* 	{% set pourcentage = (parent.weight * 100) + pourcentage %}	 */
/* */
/*     <div class="item-nodeX" >*/
/* */
/*         {{ block('parent_item') }}*/
/*         */
/* */
/* 	        <table class="table">*/
/* 	*/
/* 	            {{ block('children_header') }}*/
/* 	*/
/* 		   		 <tbody class="children">*/
/* 	                {% for child in attribute(parent,children) %}*/
/* 	                    {{ block('child_item') }}                                   */
/* 	                {% endfor %}*/
/* 	                 */
/* */
/* 	            </tbody>*/
/* 	*/
/* 				</div>*/
/* 	*/
/* 	        </table>*/
/*         */
/*         	{{ block('new_child') }} */
/* */
/*   */
/*         */
/*     </div>*/
/* {% endfor %}*/
/* */
/* <div class="row">*/
/* 	<div class=" col-md-6 col-sm-6">*/
/* 	</div>*/
/* 	<div class="general-item-weight cold-md-2 col-sm-2">	*/
/* 		<b>{{ pourcentage }}% Total</b>*/
/* 	</div>*/
/* </div>	*/
/* */
/* {{ block('new_parent') }}*/
/* */
