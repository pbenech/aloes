<?php

/* IfeAloesBundle:GeneralObjective2:sortJavascript.html.twig */
class __TwigTemplate_feaec586f5dc55c39a2fd963a1f5759e2e053e2ece41f0c567c9b044558fb298 extends Twig_Template
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
        echo "\t<script>\t\t
\t    \$(\"#sortable";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "id", array()), "html", null, true);
        echo "\").sortable({
\t      connectWith: \".connectedSortable\",
\t      update: function (event, ui) { 
\t          var data = \t\$(this).sortable('serialize', {attribute: \"id\"});    \t\t          
\t          \t               \t\t              \t           \t\t   
\t          \$.ajax({   
\t              data: \"sortable=\"+this.getAttribute(\"id\")+\"&\"+data,
\t              type: 'POST', 
\t              url: '";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_objective_order", array("id" => $this->getAttribute($this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "course", array()), "id", array()))), "html", null, true);
        echo "',
\t\t\t\t  dataType : 'json',\t \t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t  cache: false,
\t\t\t\t\tsuccess: function(data) 
\t\t\t\t\t\t{
\t\t\t\t\t\tif (data.result==true)\t\t\t              
\t        \t\t\t\t{\t        \t\t\t\t
\t        \t\t\t\t\$(\"#OG_\"+data.content.key+\"_A_nb_specs\").empty().append(data.content.size);   

\t\t\t\t\t\t\tvar x = data.content.order;
\t\t\t\t\t\t
\t\t\t\t\t\t\tvar cpt=0;
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\$.each( x, function( key, value ) {
\t\t\t\t\t\t\t\t\t\tkey \t= value['key'];
\t\t\t\t\t\t\t\t\t\tweight \t= value['weight'];
\t\t\t\t\t\t\t\t\t\ttype \t= value['type'];
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\tif (type==\"GEN\")
\t\t\t\t\t\t\t\t\t\t\t{
\t\t\t\t\t\t\t\t\t\t\tif (weight==null)
\t\t\t\t\t\t\t\t\t\t\t\tweight=0;
\t\t\t\t\t\t\t\t\t\t\t\$(\"#OG_\"+key+\"_A_weight\").empty().append(progress_bar(weight,'success'));
\t\t\t\t\t\t\t\t\t\t\tcpt = cpt +\tweight;\t \t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\tif (type==\"SPE\")
\t\t\t\t\t\t\t\t\t\t\t{
\t\t\t\t\t\t\t\t\t\t\tif (weight==null)
\t\t\t\t\t\t\t\t\t\t\t\tweight=0;
\t\t\t\t\t\t\t\t\t\t\t\$(\"#OS_\"+key+\"_weight\").empty().append(progress_bar(weight,'warning')); \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t}\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t}); 
   \t\t\t\t\t\t\t\t\t\t\t\t \t        \t\t\t\t
\t        \t\t\t\t\$(\"#general-item-weight\").empty().append(progress_bar(cpt,'info')); 
\t        \t\t\t\t
\t        \t\t\t\t}
\t              \t\t} 
\t          }); 
\t        
\t      }      
\t    }).disableSelection();  
\t\t
\t</script>";
    }

    public function getTemplateName()
    {
        return "IfeAloesBundle:GeneralObjective2:sortJavascript.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 10,  22 => 2,  19 => 1,);
    }
}
/* 	<script>		*/
/* 	    $("#sortable{{parent.id}}").sortable({*/
/* 	      connectWith: ".connectedSortable",*/
/* 	      update: function (event, ui) { */
/* 	          var data = 	$(this).sortable('serialize', {attribute: "id"});    		          */
/* 	          	               		              	           		   */
/* 	          $.ajax({   */
/* 	              data: "sortable="+this.getAttribute("id")+"&"+data,*/
/* 	              type: 'POST', */
/* 	              url: '{{path('course_objective_order',{id:parent.course.id})}}',*/
/* 				  dataType : 'json',	 												*/
/* 				  cache: false,*/
/* 					success: function(data) */
/* 						{*/
/* 						if (data.result==true)			              */
/* 	        				{	        				*/
/* 	        				$("#OG_"+data.content.key+"_A_nb_specs").empty().append(data.content.size);   */
/* */
/* 							var x = data.content.order;*/
/* 						*/
/* 							var cpt=0;*/
/* 									*/
/* 							$.each( x, function( key, value ) {*/
/* 										key 	= value['key'];*/
/* 										weight 	= value['weight'];*/
/* 										type 	= value['type'];*/
/* 										*/
/* 										if (type=="GEN")*/
/* 											{*/
/* 											if (weight==null)*/
/* 												weight=0;*/
/* 											$("#OG_"+key+"_A_weight").empty().append(progress_bar(weight,'success'));*/
/* 											cpt = cpt +	weight;	 													*/
/* 											}*/
/* 										if (type=="SPE")*/
/* 											{*/
/* 											if (weight==null)*/
/* 												weight=0;*/
/* 											$("#OS_"+key+"_weight").empty().append(progress_bar(weight,'warning')); 																					*/
/* 											}																	*/
/* 							}); */
/*    												 	        				*/
/* 	        				$("#general-item-weight").empty().append(progress_bar(cpt,'info')); */
/* 	        				*/
/* 	        				}*/
/* 	              		} */
/* 	          }); */
/* 	        */
/* 	      }      */
/* 	    }).disableSelection();  */
/* 		*/
/* 	</script>*/
