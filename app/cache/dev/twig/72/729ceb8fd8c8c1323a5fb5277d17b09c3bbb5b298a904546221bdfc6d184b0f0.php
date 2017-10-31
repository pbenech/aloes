<?php

/* IfeAloesBundle:SpecificObjective2:delAjaxSpecObj.html.twig */
class __TwigTemplate_1eea7397df4113150014e16e87c433ad03426e2a34fa8fadd6d2cdd964f0073a extends Twig_Template
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
        echo "<div class=\"modal-header color2\"> 
\t<b>Suppression Objectif spécifique </b><button type=\"button\" id=\"close\"  class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
</div>

<div id=\"modal-body\" class=\"modal-body\" >


    Etes-vous sûr de vouloir supprimer définitivement cet objectif spécifique suivant  ?
 
    <br/>    
    <br/>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "title", array()), "html", null, true);
        echo "

\t<br/>\t
\t    
    ";
        // line 15
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
    
\t<hr/>     

    ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), "delete", array()), 'widget');
        echo "
      
    ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), "nodelete", array()), 'widget');
        echo "
      
    ";
        // line 23
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
    
\t<script type=\"text/javascript\">

\t\t\t\$(\"#form_delete\").click(function() {
\t\t\t
\t\t\t\t\tdata = \$(this).serialize();\t\t
\t\t
\t\t\t\t\t\$.ajax({ 
\t\t\t\t\t\t\ttype: \"POST\",\t\t\t\t\t\t
\t\t\t\t\t\t\turl: \"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("general_objective_specific_objective_delete_2", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\",\t\t\t\t\t
\t\t\t\t\t\t\tdata: data, 
\t\t\t\t\t\t\tdataType : 'json',\t\t\t\t \t\t\t\t\t\t\t\t
\t\t\t\t\t\t\tcache: false, 
\t\t\t\t\t\t\tsuccess: function(data) 
\t\t\t\t\t\t\t\t{ 
\t\t\t\t\t\t\t\tif (data.result==false)\t\t\t\t\t  
\t\t\t\t\t\t\t\t\t\$(\"#modal-content\").empty().append(data.content);  
\t\t\t\t\t\t\t\telse
\t\t\t\t\t\t\t\t\t{
\t\t\t\t\t\t\t\t\tvar x = data.content;
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\tvar cpt=0;

\t\t\t\t\t\t\t\t\t\$.each( x, function( key, value ) {
\t\t\t\t\t\t\t\t\t\tkey \t= value['key'];
\t\t\t\t\t\t\t\t\t\tweight \t= value['weight'];
\t\t\t\t\t\t\t\t\t\ttype \t= value['type'];
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\tif (type==\"GEN\")
\t\t\t\t\t\t\t\t\t\t\t{
\t\t\t\t\t\t\t\t\t\t\tif (weight==null)
\t\t\t\t\t\t\t\t\t\t\t\tweight=0;
\t\t\t\t\t\t\t\t\t\t\t\$(\"#OG_\"+key+\"_A_weight\").empty().append(progress_bar(weight,'success')); 
\t\t\t\t\t\t\t\t\t\t\tcpt = cpt +\tweight;\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\tif (type==\"SPE\")
\t\t\t\t\t\t\t\t\t\t\t{
\t\t\t\t\t\t\t\t\t\t\tif (weight==null)
\t\t\t\t\t\t\t\t\t\t\t\tweight=0;
\t\t\t\t\t\t\t\t\t\t\t\$(\"#OS_\"+key+\"_weight\").empty().append(progress_bar(weight,'warning')); \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t}\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t}); 
   \t\t\t\t\t\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t\t\t\$( \"#OS_";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "\" ).remove();\t 
\t\t\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t\t\t\$(\"#general-item-weight\").empty().append(progress_bar(cpt,'info')); 
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\$(\"#OG_";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "id", array()), "html", null, true);
        echo "_A_nb_specs\").empty().append(\"Spécifiques(\"+data.nb_spec+\")\"); 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\$('#myModal').modal('hide');\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t}   
\t\t\t\t\t\t\t\t}   \t
\t\t\t\t\t});\t      

         \t\t\t\t 
\t\t\t\t\treturn false;\t\t
\t\t\t});
\t\t\t
\t\t\t 
\t\t\t\$(\"#form_nodelete\").click(function() {
\t\t\t\t\$('#myModal').modal('hide');\t         \t\t\t\t 
\t\t\t\treturn false;\t\t\t\t\t\t\t
\t\t\t});\t\t

\t</script>
</div> 
";
    }

    public function getTemplateName()
    {
        return "IfeAloesBundle:SpecificObjective2:delAjaxSpecObj.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 72,  105 => 67,  68 => 33,  55 => 23,  50 => 21,  45 => 19,  38 => 15,  31 => 11,  19 => 1,);
    }
}
/* <div class="modal-header color2"> */
/* 	<b>Suppression Objectif spécifique </b><button type="button" id="close"  class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>*/
/* </div>*/
/* */
/* <div id="modal-body" class="modal-body" >*/
/* */
/* */
/*     Etes-vous sûr de vouloir supprimer définitivement cet objectif spécifique suivant  ?*/
/*  */
/*     <br/>    */
/*     <br/>{{ entity.title }}*/
/* */
/* 	<br/>	*/
/* 	    */
/*     {{ form_start(delete_form) }}*/
/*     */
/* 	<hr/>     */
/* */
/*     {{ form_widget(delete_form.delete) }}*/
/*       */
/*     {{ form_widget(delete_form.nodelete) }}*/
/*       */
/*     {{ form_end(delete_form) }}*/
/*     */
/* 	<script type="text/javascript">*/
/* */
/* 			$("#form_delete").click(function() {*/
/* 			*/
/* 					data = $(this).serialize();		*/
/* 		*/
/* 					$.ajax({ */
/* 							type: "POST",						*/
/* 							url: "{{ path("general_objective_specific_objective_delete_2", {id:entity.id}) }}",					*/
/* 							data: data, */
/* 							dataType : 'json',				 								*/
/* 							cache: false, */
/* 							success: function(data) */
/* 								{ */
/* 								if (data.result==false)					  */
/* 									$("#modal-content").empty().append(data.content);  */
/* 								else*/
/* 									{*/
/* 									var x = data.content;*/
/* 									*/
/* 									var cpt=0;*/
/* */
/* 									$.each( x, function( key, value ) {*/
/* 										key 	= value['key'];*/
/* 										weight 	= value['weight'];*/
/* 										type 	= value['type'];*/
/* 										*/
/* 										if (type=="GEN")*/
/* 											{*/
/* 											if (weight==null)*/
/* 												weight=0;*/
/* 											$("#OG_"+key+"_A_weight").empty().append(progress_bar(weight,'success')); */
/* 											cpt = cpt +	weight;												*/
/* 											}*/
/* 										if (type=="SPE")*/
/* 											{*/
/* 											if (weight==null)*/
/* 												weight=0;*/
/* 											$("#OS_"+key+"_weight").empty().append(progress_bar(weight,'warning')); 																					*/
/* 											}																	*/
/* 									}); */
/*    												 */
/* 									$( "#OS_{{entity.id}}" ).remove();	 */
/* 									 */
/* 									$("#general-item-weight").empty().append(progress_bar(cpt,'info')); */
/* 									*/
/* 									*/
/* 									$("#OG_{{parent.id}}_A_nb_specs").empty().append("Spécifiques("+data.nb_spec+")"); */
/* 																							*/
/* 									$('#myModal').modal('hide');							*/
/* 									}   */
/* 								}   	*/
/* 					});	      */
/* */
/*          				 */
/* 					return false;		*/
/* 			});*/
/* 			*/
/* 			 */
/* 			$("#form_nodelete").click(function() {*/
/* 				$('#myModal').modal('hide');	         				 */
/* 				return false;							*/
/* 			});		*/
/* */
/* 	</script>*/
/* </div> */
/* */
