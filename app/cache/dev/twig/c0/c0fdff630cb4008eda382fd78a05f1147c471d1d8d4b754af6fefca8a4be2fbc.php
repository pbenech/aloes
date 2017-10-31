<?php

/* IfeAloesBundle:GeneralCompetence2:cours.html.twig */
class __TwigTemplate_6831ffc2cbbb84f2eec0f70fc22c41c7fb6d8e8d364cd02184be1351da523f41 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("IfeAloesBundle:Course:layout.html.twig", "IfeAloesBundle:GeneralCompetence2:cours.html.twig", 1);
        $this->blocks = array(
            'scripts' => array($this, 'block_scripts'),
            'content' => array($this, 'block_content'),
            'course_selection' => array($this, 'block_course_selection'),
            'course_selection_form' => array($this, 'block_course_selection_form'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "IfeAloesBundle:Course:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["macros"] = $this->loadTemplate("IfeAloesBundle:Course:linking.html.twig", "IfeAloesBundle:GeneralCompetence2:cours.html.twig", 2);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_scripts($context, array $blocks = array())
    {
        // line 5
        echo "  ";
        $this->displayParentBlock("scripts", $context, $blocks);
        echo " 
";
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        // line 11
        echo "<div class='title-two1a col-md-12 col-sm-12'> 
\t\t\tRéférentiel de compétences 
\t\t</div>

    ";
        // line 15
        $this->displayBlock("course_selection", $context, $blocks);
        echo "

    ";
        // line 17
        $this->loadTemplate("IfeAloesBundle:GeneralCompetence2:cours.html.twig", "IfeAloesBundle:GeneralCompetence2:cours.html.twig", 17, "718637642")->display(array_merge($context, array("children" => "specificCompetences")));
        // line 62
        echo " 


  \t<script>            
\t\t\$(document.body).on('hidden.bs.modal', function () {
\t\t\t\t\$('#myModal').removeData('bs.modal');\t    \t
\t\t\t\t\$(\"#modal-content\").html('');\t\t\t\t\t\t\t\t
\t\t\t\t\t
\t\t});\t\t\t\t\t\t\t\t \t\t                     
\t</script>
\t  
\t\t<div class=\"modal fade in \" data-backdrop=\"static\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\"  data-target=\".bs-example-modal-lg\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
\t\t\t<div class=\"modal-dialog modal-lg\">  
\t\t\t\t<div id=\"modal-content\" class=\"modal-content\"> \t\t\t\t\t  \t
\t\t\t    </div>
\t\t\t</div>   
\t\t</div>    
    

";
    }

    // line 83
    public function block_course_selection($context, array $blocks = array())
    {
        echo "  
";
    }

    // line 87
    public function block_course_selection_form($context, array $blocks = array())
    {
        echo "  
";
    }

    public function getTemplateName()
    {
        return "IfeAloesBundle:GeneralCompetence2:cours.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 87,  83 => 83,  60 => 62,  58 => 17,  53 => 15,  47 => 11,  44 => 8,  37 => 5,  34 => 4,  30 => 1,  28 => 2,  11 => 1,);
    }
}


/* IfeAloesBundle:GeneralCompetence2:cours.html.twig */
class __TwigTemplate_6831ffc2cbbb84f2eec0f70fc22c41c7fb6d8e8d364cd02184be1351da523f41_718637642 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 17
        $this->parent = $this->loadTemplate("IfeAloesBundle:Aloes:list4.html.twig", "IfeAloesBundle:GeneralCompetence2:cours.html.twig", 17);
        $this->blocks = array(
            'parent_item' => array($this, 'block_parent_item'),
            'child_item' => array($this, 'block_child_item'),
            'children_header' => array($this, 'block_children_header'),
            'new_parent' => array($this, 'block_new_parent'),
            'new_child' => array($this, 'block_new_child'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "IfeAloesBundle:Aloes:list4.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 20
    public function block_parent_item($context, array $blocks = array())
    {
        // line 21
        echo "  \t\t\t<div id=\"CG_";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "id", array()), "html", null, true);
        echo "_A\" class=\"row\" >      
        \t\t";
        // line 22
        $this->loadTemplate("IfeAloesBundle:GeneralCompetence2:CG_XX_A.html.twig", "IfeAloesBundle:GeneralCompetence2:cours.html.twig", 22)->display(array_merge($context, array("action" => "consult")));
        // line 23
        echo "\t\t\t</div>   \t\t\t
\t\t\t           
        ";
    }

    // line 27
    public function block_child_item($context, array $blocks = array())
    {
        // line 28
        echo "\t\t\t<div id=\"CS_";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "id", array()), "html", null, true);
        echo "\" class=\"row block1\">                 
\t\t  \t\t";
        // line 29
        $this->loadTemplate("IfeAloesBundle:SpecificCompetence2:CS_XX.html.twig", "IfeAloesBundle:GeneralCompetence2:cours.html.twig", 29)->display(array_merge($context, array("action" => "consult")));
        echo "\t\t\t\t
\t\t  \t</div>\t         
        ";
    }

    // line 33
    public function block_children_header($context, array $blocks = array())
    {
        // line 34
        echo "        
\t            <div class=\"col-sm-8 entete2\" style=\"text-align:center\"> Compétences spécifiques</div> 
\t            <div class=\"col-sm-2 entete2\" style=\"text-align:center\"> % </div>
\t            <div class=\"col-sm-2 entete2\" style=\"text-align:center\"> </div>        
        
        \t\t<!--
\t\t\t\t<ul id=\"sortable";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "id", array()), "html", null, true);
        echo "\" class=\"connectedSortable\">\t\t   \t\t 
\t\t\t\t    <br/>      
\t\t\t\t-->    
\t\t\t    \t";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), (isset($context["children"]) ? $context["children"] : $this->getContext($context, "children"))));
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
            // line 44
            echo "\t\t\t\t    \t";
            $this->displayBlock("child_item", $context, $blocks);
            echo "                                 
\t\t\t\t\t";
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
        // line 45
        echo "\t\t    \t\t\t
\t\t\t    <!--
\t\t\t    </ul>
\t\t\t    -->  
\t\t\t \t
\t\t\t   ";
        // line 50
        $this->loadTemplate("IfeAloesBundle:GeneralCompetence2:sortJavascript.html.twig", "IfeAloesBundle:GeneralCompetence2:cours.html.twig", 50)->display($context);
        echo "\t\t\t\t   
\t\t\t    
        ";
    }

    // line 54
    public function block_new_parent($context, array $blocks = array())
    {
        // line 55
        echo "   
        ";
    }

    // line 58
    public function block_new_child($context, array $blocks = array())
    {
        // line 59
        echo "                     
        ";
    }

    public function getTemplateName()
    {
        return "IfeAloesBundle:GeneralCompetence2:cours.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 59,  246 => 58,  241 => 55,  238 => 54,  231 => 50,  224 => 45,  207 => 44,  190 => 43,  184 => 40,  176 => 34,  173 => 33,  166 => 29,  161 => 28,  158 => 27,  152 => 23,  150 => 22,  145 => 21,  142 => 20,  121 => 17,  90 => 87,  83 => 83,  60 => 62,  58 => 17,  53 => 15,  47 => 11,  44 => 8,  37 => 5,  34 => 4,  30 => 1,  28 => 2,  11 => 1,);
    }
}
/* {% extends 'IfeAloesBundle:Course:layout.html.twig' %}*/
/* {% import 'IfeAloesBundle:Course:linking.html.twig' as macros %}*/
/* */
/* {% block scripts %}*/
/*   {{ parent() }} */
/* {% endblock %} */
/* */
/* {% block content -%}*/
/* */
/*   	*/
/*     	<div class='title-two1a col-md-12 col-sm-12'> */
/* 			Référentiel de compétences */
/* 		</div>*/
/* */
/*     {{ block('course_selection') }}*/
/* */
/*     {% embed 'IfeAloesBundle:Aloes:list4.html.twig' with {'children':'specificCompetences'} %}*/
/* */
/* */
/*         {% block parent_item %}*/
/*   			<div id="CG_{{parent.id}}_A" class="row" >      */
/*         		{% include 'IfeAloesBundle:GeneralCompetence2:CG_XX_A.html.twig'  with {'action': 'consult'} %}*/
/* 			</div>   			*/
/* 			           */
/*         {% endblock %}*/
/* */
/*         {% block child_item %}*/
/* 			<div id="CS_{{child.id}}" class="row block1">                 */
/* 		  		{% include 'IfeAloesBundle:SpecificCompetence2:CS_XX.html.twig'  with {'action':  'consult'} %}				*/
/* 		  	</div>	         */
/*         {% endblock %}*/
/* */
/*         {% block children_header %}*/
/*         */
/* 	            <div class="col-sm-8 entete2" style="text-align:center"> Compétences spécifiques</div> */
/* 	            <div class="col-sm-2 entete2" style="text-align:center"> % </div>*/
/* 	            <div class="col-sm-2 entete2" style="text-align:center"> </div>        */
/*         */
/*         		<!--*/
/* 				<ul id="sortable{{parent.id}}" class="connectedSortable">		   		 */
/* 				    <br/>      */
/* 				-->    */
/* 			    	{% for child in attribute(parent,children) %}*/
/* 				    	{{ block('child_item') }}                                 */
/* 					{% endfor %}		    			*/
/* 			    <!--*/
/* 			    </ul>*/
/* 			    -->  */
/* 			 	*/
/* 			   {% include 'IfeAloesBundle:GeneralCompetence2:sortJavascript.html.twig' %}				   */
/* 			    */
/*         {% endblock %}*/
/* */
/*         {% block new_parent %}*/
/*    */
/*         {% endblock %}  */
/* */
/*         {% block new_child %}*/
/*                      */
/*         {% endblock %}*/
/* */
/*     {% endembed %} */
/* */
/* */
/*   	<script>            */
/* 		$(document.body).on('hidden.bs.modal', function () {*/
/* 				$('#myModal').removeData('bs.modal');	    	*/
/* 				$("#modal-content").html('');								*/
/* 					*/
/* 		});								 		                     */
/* 	</script>*/
/* 	  */
/* 		<div class="modal fade in " data-backdrop="static" id="myModal" tabindex="-1" role="dialog"  data-target=".bs-example-modal-lg" aria-labelledby="myModalLabel" aria-hidden="true">*/
/* 			<div class="modal-dialog modal-lg">  */
/* 				<div id="modal-content" class="modal-content"> 					  	*/
/* 			    </div>*/
/* 			</div>   */
/* 		</div>    */
/*     */
/* */
/* {% endblock %}*/
/* */
/* {% block course_selection %}  */
/* {% endblock %}*/
/* */
/* */
/* {% block course_selection_form %}  */
/* {% endblock %}*/
/* */
