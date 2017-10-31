<?php

/* IfeAloesBundle:GeneralCompetence2:sortJavascript.html.twig */
class __TwigTemplate_52c28e6a849c645095de8e20f0b46b38cbdbc6ee2f7dd7cd00f5e6c7774121bc extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("program_competences_order", array("id" => $this->getAttribute((isset($context["program"]) ? $context["program"] : $this->getContext($context, "program")), "id", array()))), "html", null, true);
        echo "',
\t\t\t\t  dataType : 'json',\t \t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t  cache: false,
\t\t\t\t\tsuccess: function(data) 
\t\t\t\t\t\t{
\t\t\t\t\t\tif (data.result==true)\t\t\t              
\t        \t\t\t\t{\t        \t\t\t\t
\t        \t\t\t\t\$(\"#CG_\"+data.content.key+\"_A_nb_specs\").empty().append(data.content.size);   

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
\t\t\t\t\t\t\t\t\t\t\t\$(\"#CG_\"+key+\"_A_weight\").empty().append(progress_bar(weight,'success'));
\t\t\t\t\t\t\t\t\t\t\tcpt = cpt +\tweight;\t \t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\tif (type==\"SPE\")
\t\t\t\t\t\t\t\t\t\t\t{
\t\t\t\t\t\t\t\t\t\t\tif (weight==null)
\t\t\t\t\t\t\t\t\t\t\t\tweight=0;
\t\t\t\t\t\t\t\t\t\t\t\$(\"#CS_\"+key+\"_weight\").empty().append(progress_bar(weight,'warning')); \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
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
        return "IfeAloesBundle:GeneralCompetence2:sortJavascript.html.twig";
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
/* 	              type: 'POST',*/
/* 	              url: '{{path('program_competences_order',{id:program.id})}}',*/
/* 				  dataType : 'json',	 												*/
/* 				  cache: false,*/
/* 					success: function(data) */
/* 						{*/
/* 						if (data.result==true)			              */
/* 	        				{	        				*/
/* 	        				$("#CG_"+data.content.key+"_A_nb_specs").empty().append(data.content.size);   */
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
/* 											$("#CG_"+key+"_A_weight").empty().append(progress_bar(weight,'success'));*/
/* 											cpt = cpt +	weight;	 													*/
/* 											}*/
/* 										if (type=="SPE")*/
/* 											{*/
/* 											if (weight==null)*/
/* 												weight=0;*/
/* 											$("#CS_"+key+"_weight").empty().append(progress_bar(weight,'warning')); 																					*/
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
