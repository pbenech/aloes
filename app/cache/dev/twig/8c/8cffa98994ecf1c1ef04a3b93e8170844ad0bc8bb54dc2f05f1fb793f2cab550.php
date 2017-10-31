<?php

/* IfeAloesBundle:GeneralObjective2:addAjaxObj.html.twig */
class __TwigTemplate_3d279916f729fe77c9e2e2becaecce5784b4ac3bd12e840e72b6aab06edf1b7c extends Twig_Template
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
        $context["macros"] = $this->loadTemplate("IfeAloesBundle:Course:linking.html.twig", "IfeAloesBundle:GeneralObjective2:addAjaxObj.html.twig", 1);
        // line 2
        echo "
<div id=\"OG_";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "id", array()), "html", null, true);
        echo "\" style=\"border-bottom:dotted 1px;\">           
\t<div id=\"OG_";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "id", array()), "html", null, true);
        echo "_A\" class=\"row\">
\t      ";
        // line 5
        $this->loadTemplate("IfeAloesBundle:GeneralObjective2:OG_XX_A.html.twig", "IfeAloesBundle:GeneralObjective2:addAjaxObj.html.twig", 5)->display($context);
        // line 6
        echo "\t</div>\t
\t<div id=\"OG_";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "id", array()), "html", null, true);
        echo "_B\" class=\"col-md-12 col-sm-12 blockc\" >
\t
\t\t\t<div class=\"col-sm-12\">
\t            <div class=\"col-sm-6 entete2\" style=\"text-align:left\"> Objectifs spécifiques</div> 
\t            <div class=\"col-md-2 entete2\" style=\"text-align:center\"> Compétences spécifiques</div>
\t            <div class=\"col-md-2 entete2\" style=\"text-align:center\"> % </div> 
\t            <div class=\"col-md-2 entete2\" style=\"text-align:center\"> </div> \t
\t\t\t</div>
\t
\t\t\t<div class=\"col-sm-12\">
\t\t\t\t<ul id=\"sortable";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "id", array()), "html", null, true);
        echo "\" class=\"connectedSortable  ui-sortable\">\t\t   \t\t 
\t\t\t\t    <br class=\"ui-sortable-handle\">   \t    \t\t\t
\t\t\t\t</ul> 
\t\t\t</div>

    \t\t<script>
\t\t\t    \$( \"#sortable";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "id", array()), "html", null, true);
        echo "\").sortable({
\t\t\t      connectWith: \".connectedSortable\",
\t\t\t      update: function (event, ui) { 
\t\t\t          var data = \t\$(this).sortable('serialize', {attribute: \"id\"});    \t\t          
\t\t\t          \t               \t\t              \t           \t\t   
\t\t\t          \$.ajax({   
\t\t\t              data: \"sortable=\"+this.getAttribute(\"id\")+\"&\"+data,
\t\t\t              type: 'POST',
\t\t\t              url: '";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_objective_order", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
        echo "'
\t\t\t          });
\t\t\t        
\t\t\t      }      
\t\t\t    }).disableSelection();  
\t\t\t</script> 
  
\t\t\t  <div id=\"button_gen\" class=\"col-sm-12\" style=\"text-align:right\">  \t\t  
\t\t\t  \t<a data-toggle=\"modal\" class=\"btn2 btn-warning\" href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("general_objective_specific_objective_new_2", array("id" => $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "id", array()))), "html", null, true);
        echo "\" data-target=\"#myModal\">
\t\t\t  \t\t<span class=\"glyphicon glyphicon-plus-sign\"> Ajouter un objectif spécifique
\t\t\t  \t</a> 
\t\t\t  \t<br/>&nbsp; \t\t\t\t
\t          </div>    
\t \t
\t</div>

</div>    


\t\t
   
\t\t";
    }

    public function getTemplateName()
    {
        return "IfeAloesBundle:GeneralObjective2:addAjaxObj.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 39,  70 => 31,  59 => 23,  50 => 17,  37 => 7,  34 => 6,  32 => 5,  28 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% import 'IfeAloesBundle:Course:linking.html.twig' as macros %}*/
/* */
/* <div id="OG_{{parent.id}}" style="border-bottom:dotted 1px;">           */
/* 	<div id="OG_{{parent.id}}_A" class="row">*/
/* 	      {% include 'IfeAloesBundle:GeneralObjective2:OG_XX_A.html.twig'  %}*/
/* 	</div>	*/
/* 	<div id="OG_{{parent.id}}_B" class="col-md-12 col-sm-12 blockc" >*/
/* 	*/
/* 			<div class="col-sm-12">*/
/* 	            <div class="col-sm-6 entete2" style="text-align:left"> Objectifs spécifiques</div> */
/* 	            <div class="col-md-2 entete2" style="text-align:center"> Compétences spécifiques</div>*/
/* 	            <div class="col-md-2 entete2" style="text-align:center"> % </div> */
/* 	            <div class="col-md-2 entete2" style="text-align:center"> </div> 	*/
/* 			</div>*/
/* 	*/
/* 			<div class="col-sm-12">*/
/* 				<ul id="sortable{{parent.id}}" class="connectedSortable  ui-sortable">		   		 */
/* 				    <br class="ui-sortable-handle">   	    			*/
/* 				</ul> */
/* 			</div>*/
/* */
/*     		<script>*/
/* 			    $( "#sortable{{parent.id}}").sortable({*/
/* 			      connectWith: ".connectedSortable",*/
/* 			      update: function (event, ui) { */
/* 			          var data = 	$(this).sortable('serialize', {attribute: "id"});    		          */
/* 			          	               		              	           		   */
/* 			          $.ajax({   */
/* 			              data: "sortable="+this.getAttribute("id")+"&"+data,*/
/* 			              type: 'POST',*/
/* 			              url: '{{path('course_objective_order',{id:course.id})}}'*/
/* 			          });*/
/* 			        */
/* 			      }      */
/* 			    }).disableSelection();  */
/* 			</script> */
/*   */
/* 			  <div id="button_gen" class="col-sm-12" style="text-align:right">  		  */
/* 			  	<a data-toggle="modal" class="btn2 btn-warning" href="{{ path("general_objective_specific_objective_new_2", {id:parent.id}) }}" data-target="#myModal">*/
/* 			  		<span class="glyphicon glyphicon-plus-sign"> Ajouter un objectif spécifique*/
/* 			  	</a> */
/* 			  	<br/>&nbsp; 				*/
/* 	          </div>    */
/* 	 	*/
/* 	</div>*/
/* */
/* </div>    */
/* */
/* */
/* 		*/
/*    */
/* 		*/
