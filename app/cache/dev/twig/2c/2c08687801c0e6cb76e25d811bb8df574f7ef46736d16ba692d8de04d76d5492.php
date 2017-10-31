<?php

/* IfeAloesBundle:GeneralCompetence2:index.html.twig */
class __TwigTemplate_3149167f114f52028b53b835f753a15704fef2e273f68a6ee75f3e1164747a24 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("IfeAloesBundle:Program:layout.html.twig", "IfeAloesBundle:GeneralCompetence2:index.html.twig", 1);
        $this->blocks = array(
            'scripts' => array($this, 'block_scripts'),
            'content' => array($this, 'block_content'),
            'course_selection' => array($this, 'block_course_selection'),
            'course_selection_form' => array($this, 'block_course_selection_form'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "IfeAloesBundle:Program:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["macros"] = $this->loadTemplate("IfeAloesBundle:Course:linking.html.twig", "IfeAloesBundle:GeneralCompetence2:index.html.twig", 2);
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
\t</div>

    <div class=' col-sm-12 block3' >
    \t  <br/>\t
\t\t  <div  class=\"col-sm-9\" >  
\t\t  \t\t    <div id=\"CSSDESCR\"    style=\"overflow:auto; height: 200px; width: 100%; padding: 15px; border: 1px solid #AAAAAA\" >
\t\t\t    \t\t";
        // line 19
        echo $this->getAttribute((isset($context["program"]) ? $context["program"] : $this->getContext($context, "program")), "competences", array());
        echo "
\t\t\t    \t</div>\t
\t\t\t    \t\t<br/>
\t\t  </div>
\t\t  ";
        // line 23
        if ((($this->env->getExtension('security')->isGranted("ROLE_RESPONSABLE") && $this->getAttribute((isset($context["program"]) ? $context["program"] : $this->getContext($context, "program")), "isResp", array(0 => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array())), "method")) || $this->env->getExtension('security')->isGranted("ROLE_ADMIN"))) {
            // line 25
            echo "\t
\t\t  <div id=\"button_gen\" class=\"col-sm-3\" style=\"text-align:right\">  \t\t  
\t\t  \t<a data-toggle=\"modal\" class=\"btn1 btn-color4\" href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("program_edit_competences", array("id" => $this->getAttribute((isset($context["program"]) ? $context["program"] : $this->getContext($context, "program")), "id", array()))), "html", null, true);
            echo "\" data-target=\"#myModal\">
\t\t  \t\t<span class=\"glyphicon glyphicon-plus-sign\"> Modifier Description générale
\t\t  \t</a> 
\t\t  \t<br/>&nbsp; \t\t\t\t
          </div>  
          ";
        }
        // line 32
        echo " \t
\t</div>  

\t<script type=\"text/javascript\">\t\t
\t\t
\t\t\$(document).on('focusin', function(e) {
\t\t    if (\$(e.target).closest(\".mce-window\").length || \$(e.target).closest(\".moxman-window\").length) {
\t\t        e.stopImmediatePropagation();
\t\t    }
\t\t});\t\t
\t\t
\t</script>   \t  
\t  
\t    
    ";
        // line 46
        $this->displayBlock("course_selection", $context, $blocks);
        echo "

    ";
        // line 48
        $this->loadTemplate("IfeAloesBundle:GeneralCompetence2:index.html.twig", "IfeAloesBundle:GeneralCompetence2:index.html.twig", 48, "1128923772")->display(array_merge($context, array("children" => "specificCompetences")));
        // line 110
        echo " 


  \t<script>            
\t\t\$(document.body).on('hidden.bs.modal', function () {
\t\t\t\t\$('#myModal').removeData('bs.modal');\t    \t
\t\t\t\t\$(\"#modal-content\").html('');\t\t\t\t\t\t\t\t
\t\t\t\t\t
\t\t});\t\t
 \t\t \t\t                     
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

    // line 132
    public function block_course_selection($context, array $blocks = array())
    {
        echo " 
  ";
        // line 133
        if ((twig_length_filter($this->env, (isset($context["courses"]) ? $context["courses"] : $this->getContext($context, "courses"))) > 0)) {
            // line 134
            echo "    <div class='col-sm-12 block3'> 
    \t<p> 
                        Sélectionnez les cours à prendre en compte
                        pour la pondération du référentiel de
                        compétences 
        
    
\t      ";
            // line 141
            $this->displayBlock("course_selection_form", $context, $blocks);
            echo "    
\t      
    \t</p>     
    </div>
  ";
        }
        // line 145
        echo "   
";
    }

    // line 149
    public function block_course_selection_form($context, array $blocks = array())
    {
        echo "  

\t    <form class=\"form-inline\" action=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("program_competences2", array("id" => $this->getAttribute((isset($context["program"]) ? $context["program"] : $this->getContext($context, "program")), "id", array()))), "html", null, true);
        echo "\" method=\"POST\">
\t        
\t    <div class='col-sm-9 '> \t        
\t        ";
        // line 154
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["courses"]) ? $context["courses"] : $this->getContext($context, "courses")));
        foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
            // line 155
            echo "\t            <div class=\"checkbox\">
\t                <label> 
\t                    <input type=\"checkbox\" name=\"courses[";
            // line 157
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "id", array()), "html", null, true);
            echo "]\" 
\t                           ";
            // line 158
            if ((((twig_length_filter($this->env, (isset($context["selection"]) ? $context["selection"] : $this->getContext($context, "selection"))) == 0) && ($this->getAttribute($context["course"], "isOptional", array()) == false)) || twig_in_filter($this->getAttribute($context["course"], "id", array()), (isset($context["selection"]) ? $context["selection"] : $this->getContext($context, "selection"))))) {
                // line 159
                echo "\t                           checked
\t                           ";
            }
            // line 160
            echo ">  
\t                    ";
            // line 161
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "label", array()), "html", null, true);
            echo "
\t                </label>
\t            </div>
\t        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 165
        echo "\t     </div>   
\t     <div class='col-sm-3 '>    
\t        <button type=\"submit\" class=\"btn btn-color4\"> Actualiser la sélection </button> 
\t     </div>   
\t    </form>
\t    <br/>
   
";
    }

    public function getTemplateName()
    {
        return "IfeAloesBundle:GeneralCompetence2:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 165,  188 => 161,  185 => 160,  181 => 159,  179 => 158,  175 => 157,  171 => 155,  167 => 154,  161 => 151,  155 => 149,  150 => 145,  142 => 141,  133 => 134,  131 => 133,  126 => 132,  102 => 110,  100 => 48,  95 => 46,  79 => 32,  70 => 27,  66 => 25,  64 => 23,  57 => 19,  47 => 11,  44 => 8,  37 => 5,  34 => 4,  30 => 1,  28 => 2,  11 => 1,);
    }
}


/* IfeAloesBundle:GeneralCompetence2:index.html.twig */
class __TwigTemplate_3149167f114f52028b53b835f753a15704fef2e273f68a6ee75f3e1164747a24_1128923772 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 48
        $this->parent = $this->loadTemplate("IfeAloesBundle:Aloes:list4.html.twig", "IfeAloesBundle:GeneralCompetence2:index.html.twig", 48);
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

    // line 51
    public function block_parent_item($context, array $blocks = array())
    {
        // line 52
        echo "  \t\t\t<div id=\"CG_";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "id", array()), "html", null, true);
        echo "_A\" class=\"row\" >      
        \t\t";
        // line 53
        $this->loadTemplate("IfeAloesBundle:GeneralCompetence2:CG_XX_A.html.twig", "IfeAloesBundle:GeneralCompetence2:index.html.twig", 53)->display(array_merge($context, array("action" => "update")));
        // line 54
        echo "\t\t\t</div>   \t\t\t
\t\t\t           
        ";
    }

    // line 58
    public function block_child_item($context, array $blocks = array())
    {
        // line 59
        echo "\t\t\t<div id=\"CS_";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "id", array()), "html", null, true);
        echo "\" class=\"row block1\">                 
\t\t  \t\t";
        // line 60
        $this->loadTemplate("IfeAloesBundle:SpecificCompetence2:CS_XX.html.twig", "IfeAloesBundle:GeneralCompetence2:index.html.twig", 60)->display(array_merge($context, array("action" => "update")));
        echo "\t\t\t\t
\t\t  \t</div>\t         
        ";
    }

    // line 64
    public function block_children_header($context, array $blocks = array())
    {
        // line 65
        echo "    \t   \t\t<div class=\"col-sm-12\"> \t 
\t    \t        <div class=\"col-sm-8 entete2\" style=\"text-align:left\"> Compétences spécifiques</div> 
\t\t            <div class=\"col-sm-2 entete2\" style=\"text-align:center\"> % </div>
\t        \t    <div class=\"col-sm-2 entete2\" style=\"text-align:center\"> </div>        
        \t\t</div>
        
        \t\t<div class=\"col-sm-12\"> 
\t\t\t\t\t<ul id=\"sortable";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "id", array()), "html", null, true);
        echo "\" class=\"connectedSortable\">\t\t   \t\t 
\t\t\t\t    <br/>      
\t\t\t    \t";
        // line 74
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
            // line 75
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
        // line 76
        echo "\t\t    \t\t\t
\t\t\t\t    </ul>  
\t\t\t\t</div>\t \t
\t\t\t   ";
        // line 79
        $this->loadTemplate("IfeAloesBundle:GeneralCompetence2:sortJavascript.html.twig", "IfeAloesBundle:GeneralCompetence2:index.html.twig", 79)->display($context);
        echo "\t\t\t\t   
\t\t\t    
        ";
    }

    // line 83
    public function block_new_parent($context, array $blocks = array())
    {
        // line 84
        echo "\t\t  ";
        if ((($this->env->getExtension('security')->isGranted("ROLE_RESPONSABLE") && $this->getAttribute((isset($context["program"]) ? $context["program"] : $this->getContext($context, "program")), "isResp", array(0 => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array())), "method")) || $this->env->getExtension('security')->isGranted("ROLE_ADMIN"))) {
            // line 86
            echo "\t         \t  
\t\t\t<div id=\"button_gen\" class=\"col-sm-12\" style=\"text-align:right\">   \t   
\t\t\t  <a data-toggle=\"modal\" class=\"btn1 btn-success\" href=\"";
            // line 88
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("program_competences_new2", array("id" => $this->getAttribute((isset($context["program"]) ? $context["program"] : $this->getContext($context, "program")), "id", array()))), "html", null, true);
            echo "\" data-target=\"#myModal\">
\t\t\t  \t\t<span class=\"glyphicon glyphicon-plus-sign\"> Ajouter une compétence générale
\t\t\t  </a> \t\t\t\t\t\t             
\t\t\t</div>          \t                     
          ";
        }
        // line 92
        echo "  
        ";
    }

    // line 95
    public function block_new_child($context, array $blocks = array())
    {
        // line 96
        echo "\t\t  ";
        if ((($this->env->getExtension('security')->isGranted("ROLE_RESPONSABLE") && $this->getAttribute((isset($context["program"]) ? $context["program"] : $this->getContext($context, "program")), "isResp", array(0 => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array())), "method")) || $this->env->getExtension('security')->isGranted("ROLE_ADMIN"))) {
            // line 98
            echo "\t
\t\t  <div id=\"button_gen\" class=\"col-sm-12\" style=\"text-align:right\">  \t\t  
\t\t  \t<a data-toggle=\"modal\" class=\"btn2 btn-warning\" href=\"";
            // line 100
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("specificcompetence_new_2", array("id" => $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "id", array()))), "html", null, true);
            echo "\" data-target=\"#myModal\">
\t\t  \t\t<span class=\"glyphicon glyphicon-plus-sign\"> Ajouter une compétence spécifique
\t\t  \t</a> 
\t\t  \t<br/>&nbsp; \t\t\t\t
          </div>  
          ";
        }
        // line 105
        echo "       

                 
        ";
    }

    public function getTemplateName()
    {
        return "IfeAloesBundle:GeneralCompetence2:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  390 => 105,  381 => 100,  377 => 98,  374 => 96,  371 => 95,  366 => 92,  358 => 88,  354 => 86,  351 => 84,  348 => 83,  341 => 79,  336 => 76,  319 => 75,  302 => 74,  297 => 72,  288 => 65,  285 => 64,  278 => 60,  273 => 59,  270 => 58,  264 => 54,  262 => 53,  257 => 52,  254 => 51,  233 => 48,  198 => 165,  188 => 161,  185 => 160,  181 => 159,  179 => 158,  175 => 157,  171 => 155,  167 => 154,  161 => 151,  155 => 149,  150 => 145,  142 => 141,  133 => 134,  131 => 133,  126 => 132,  102 => 110,  100 => 48,  95 => 46,  79 => 32,  70 => 27,  66 => 25,  64 => 23,  57 => 19,  47 => 11,  44 => 8,  37 => 5,  34 => 4,  30 => 1,  28 => 2,  11 => 1,);
    }
}
/* {% extends 'IfeAloesBundle:Program:layout.html.twig' %}*/
/* {% import 'IfeAloesBundle:Course:linking.html.twig' as macros %}*/
/* */
/* {% block scripts %}*/
/*   {{ parent() }} */
/* {% endblock %} */
/* */
/* {% block content -%}*/
/* */
/*   	*/
/*     <div class='title-two1a col-md-12 col-sm-12'> */
/* 			Référentiel de compétences */
/* 	</div>*/
/* */
/*     <div class=' col-sm-12 block3' >*/
/*     	  <br/>	*/
/* 		  <div  class="col-sm-9" >  */
/* 		  		    <div id="CSSDESCR"    style="overflow:auto; height: 200px; width: 100%; padding: 15px; border: 1px solid #AAAAAA" >*/
/* 			    		{{ program.competences|raw }}*/
/* 			    	</div>	*/
/* 			    		<br/>*/
/* 		  </div>*/
/* 		  {% if ( is_granted("ROLE_RESPONSABLE") and program.isResp(app.user.id)) or */
/* 		  		( is_granted("ROLE_ADMIN"))	*/
/* 		  %}	*/
/* 		  <div id="button_gen" class="col-sm-3" style="text-align:right">  		  */
/* 		  	<a data-toggle="modal" class="btn1 btn-color4" href="{{ path("program_edit_competences", {id:program.id}) }}" data-target="#myModal">*/
/* 		  		<span class="glyphicon glyphicon-plus-sign"> Modifier Description générale*/
/* 		  	</a> */
/* 		  	<br/>&nbsp; 				*/
/*           </div>  */
/*           {% endif %} 	*/
/* 	</div>  */
/* */
/* 	<script type="text/javascript">		*/
/* 		*/
/* 		$(document).on('focusin', function(e) {*/
/* 		    if ($(e.target).closest(".mce-window").length || $(e.target).closest(".moxman-window").length) {*/
/* 		        e.stopImmediatePropagation();*/
/* 		    }*/
/* 		});		*/
/* 		*/
/* 	</script>   	  */
/* 	  */
/* 	    */
/*     {{ block('course_selection') }}*/
/* */
/*     {% embed 'IfeAloesBundle:Aloes:list4.html.twig' with {'children':'specificCompetences'} %}*/
/* */
/* */
/*         {% block parent_item %}*/
/*   			<div id="CG_{{parent.id}}_A" class="row" >      */
/*         		{% include 'IfeAloesBundle:GeneralCompetence2:CG_XX_A.html.twig' with {'action':'update'} %}*/
/* 			</div>   			*/
/* 			           */
/*         {% endblock %}*/
/* */
/*         {% block child_item %}*/
/* 			<div id="CS_{{child.id}}" class="row block1">                 */
/* 		  		{% include 'IfeAloesBundle:SpecificCompetence2:CS_XX.html.twig' with {'action':'update'}  %}				*/
/* 		  	</div>	         */
/*         {% endblock %}*/
/* */
/*         {% block children_header %}*/
/*     	   		<div class="col-sm-12"> 	 */
/* 	    	        <div class="col-sm-8 entete2" style="text-align:left"> Compétences spécifiques</div> */
/* 		            <div class="col-sm-2 entete2" style="text-align:center"> % </div>*/
/* 	        	    <div class="col-sm-2 entete2" style="text-align:center"> </div>        */
/*         		</div>*/
/*         */
/*         		<div class="col-sm-12"> */
/* 					<ul id="sortable{{parent.id}}" class="connectedSortable">		   		 */
/* 				    <br/>      */
/* 			    	{% for child in attribute(parent,children) %}*/
/* 				    	{{ block('child_item') }}                                 */
/* 					{% endfor %}		    			*/
/* 				    </ul>  */
/* 				</div>	 	*/
/* 			   {% include 'IfeAloesBundle:GeneralCompetence2:sortJavascript.html.twig' %}				   */
/* 			    */
/*         {% endblock %}*/
/* */
/*         {% block new_parent %}*/
/* 		  {% if ( is_granted("ROLE_RESPONSABLE") and program.isResp(app.user.id)) or */
/* 		  		( is_granted("ROLE_ADMIN"))	*/
/* 		  %}	         	  */
/* 			<div id="button_gen" class="col-sm-12" style="text-align:right">   	   */
/* 			  <a data-toggle="modal" class="btn1 btn-success" href="{{path('program_competences_new2', {id:program.id})}}" data-target="#myModal">*/
/* 			  		<span class="glyphicon glyphicon-plus-sign"> Ajouter une compétence générale*/
/* 			  </a> 						             */
/* 			</div>          	                     */
/*           {% endif %}  */
/*         {% endblock %}  */
/* */
/*         {% block new_child %}*/
/* 		  {% if ( is_granted("ROLE_RESPONSABLE") and program.isResp(app.user.id)) or */
/* 		  		( is_granted("ROLE_ADMIN") )*/
/* 		  %}	*/
/* 		  <div id="button_gen" class="col-sm-12" style="text-align:right">  		  */
/* 		  	<a data-toggle="modal" class="btn2 btn-warning" href="{{ path("specificcompetence_new_2", {id:parent.id}) }}" data-target="#myModal">*/
/* 		  		<span class="glyphicon glyphicon-plus-sign"> Ajouter une compétence spécifique*/
/* 		  	</a> */
/* 		  	<br/>&nbsp; 				*/
/*           </div>  */
/*           {% endif %}       */
/* */
/*                  */
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
/* 		});		*/
/*  		 		                     */
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
/* {% block course_selection %} */
/*   {% if courses|length > 0 %}*/
/*     <div class='col-sm-12 block3'> */
/*     	<p> */
/*                         Sélectionnez les cours à prendre en compte*/
/*                         pour la pondération du référentiel de*/
/*                         compétences */
/*         */
/*     */
/* 	      {{ block('course_selection_form') }}    */
/* 	      */
/*     	</p>     */
/*     </div>*/
/*   {% endif %}   */
/* {% endblock %}*/
/* */
/* */
/* {% block course_selection_form %}  */
/* */
/* 	    <form class="form-inline" action="{{path('program_competences2', {id:program.id})}}" method="POST">*/
/* 	        */
/* 	    <div class='col-sm-9 '> 	        */
/* 	        {% for course in courses %}*/
/* 	            <div class="checkbox">*/
/* 	                <label> */
/* 	                    <input type="checkbox" name="courses[{{ course.id }}]" */
/* 	                           {% if (selection|length == 0 and course.isOptional == false) or course.id in selection %}*/
/* 	                           checked*/
/* 	                           {% endif %}>  */
/* 	                    {{ course.label }}*/
/* 	                </label>*/
/* 	            </div>*/
/* 	        {% endfor %}*/
/* 	     </div>   */
/* 	     <div class='col-sm-3 '>    */
/* 	        <button type="submit" class="btn btn-color4"> Actualiser la sélection </button> */
/* 	     </div>   */
/* 	    </form>*/
/* 	    <br/>*/
/*    */
/* {% endblock %}*/
/* */
