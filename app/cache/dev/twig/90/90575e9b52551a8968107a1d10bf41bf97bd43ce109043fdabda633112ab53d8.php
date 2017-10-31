<?php

/* IfeAloesBundle:GeneralObjective2:delAjaxObj.html.twig */
class __TwigTemplate_6aeb9b626c5c4f13e05e58a2a2c5cba346a9eab0a3de950b7263308dc68c17cb extends Twig_Template
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
        echo "<div class=\"modal-header color1\"> 
\t<b>Supprimer une objectif général</b><button type=\"button\" id=\"close\"  class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
</div>

<div id=\"modal-body\" class=\"modal-body\" >


    Etes-vous sûr de vouloir supprimer définitivement le(s) enregistrement(s) suivant  ?     
    <br/> 
    <br/>Objectif général :
    <br/>- ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "title", array()), "html", null, true);
        echo "

\t<br/>\t
\t<br/>
\t";
        // line 15
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "specificObjectives", array())) > 0)) {
            // line 16
            echo "\t\t\tObjectifs spécifiques : <br/>
\t\t\t";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "specificObjectives", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["os"]) {
                // line 18
                echo "\t\t\t    - ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["os"], "title", array()), "html", null, true);
                echo "<br/>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['os'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "    \t\t
\t";
        }
        // line 20
        echo "    \t
\t    
    ";
        // line 22
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "

\t<hr/> 
\t\t
    ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), "delete", array()), 'widget');
        echo "
      
    ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), "nodelete", array()), 'widget');
        echo "
      
    ";
        // line 30
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
    
\t<script type=\"text/javascript\">
\t\t\t\$(\"#form_delete\").click(function() {


\t\t\t\t\tdata = \$(this).serialize();\t

\t\t\t\t\t\$.ajax({ 
\t\t\t\t\t\t\ttype: \"POST\",\t\t\t\t\t\t
\t\t\t\t\t\t\turl: \"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_objective_delete2", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
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
\t\t\t\t\t\t\t\t\t\t\tcpt = cpt +\tweight;\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\tif (type==\"SPE\")
\t\t\t\t\t\t\t\t\t\t\t{
\t\t\t\t\t\t\t\t\t\t\tif (weight==null)
\t\t\t\t\t\t\t\t\t\t\t\tweight=0;
\t\t\t\t\t\t\t\t\t\t\t\$(\"#OS_\"+key+\"_weight\").empty().append(progress_bar(weight,'warning')); \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t}\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t}); \t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\$(\"#general-item-weight\").empty().append(progress_bar(cpt,'info')); \t\t\t
\t\t\t\t\t\t\t\t\t\$( \"#OG_";
        // line 76
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "\" ).remove();\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\$('#myModal').modal('hide');\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t}   
\t\t\t\t\t\t\t\t}   
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
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
        return "IfeAloesBundle:GeneralObjective2:delAjaxObj.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 76,  94 => 40,  81 => 30,  76 => 28,  71 => 26,  64 => 22,  60 => 20,  56 => 19,  47 => 18,  43 => 17,  40 => 16,  38 => 15,  31 => 11,  19 => 1,);
    }
}
/* <div class="modal-header color1"> */
/* 	<b>Supprimer une objectif général</b><button type="button" id="close"  class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>*/
/* </div>*/
/* */
/* <div id="modal-body" class="modal-body" >*/
/* */
/* */
/*     Etes-vous sûr de vouloir supprimer définitivement le(s) enregistrement(s) suivant  ?     */
/*     <br/> */
/*     <br/>Objectif général :*/
/*     <br/>- {{ entity.title }}*/
/* */
/* 	<br/>	*/
/* 	<br/>*/
/* 	{% if entity.specificObjectives|length > 0 %}*/
/* 			Objectifs spécifiques : <br/>*/
/* 			{% for os in entity.specificObjectives %}*/
/* 			    - {{ os.title }}<br/>*/
/* 			{% endfor %}    		*/
/* 	{% endif %}    	*/
/* 	    */
/*     {{ form_start(delete_form) }}*/
/* */
/* 	<hr/> */
/* 		*/
/*     {{ form_widget(delete_form.delete) }}*/
/*       */
/*     {{ form_widget(delete_form.nodelete) }}*/
/*       */
/*     {{ form_end(delete_form) }}*/
/*     */
/* 	<script type="text/javascript">*/
/* 			$("#form_delete").click(function() {*/
/* */
/* */
/* 					data = $(this).serialize();	*/
/* */
/* 					$.ajax({ */
/* 							type: "POST",						*/
/* 							url: "{{ path("course_objective_delete2", {id:entity.id}) }}",					*/
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
/* */
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
/* 											cpt = cpt +	weight;														*/
/* 																								*/
/* 											}*/
/* 										if (type=="SPE")*/
/* 											{*/
/* 											if (weight==null)*/
/* 												weight=0;*/
/* 											$("#OS_"+key+"_weight").empty().append(progress_bar(weight,'warning')); 																					*/
/* 											}																	*/
/* 									}); 										*/
/* 									*/
/* 									$("#general-item-weight").empty().append(progress_bar(cpt,'info')); 			*/
/* 									$( "#OG_{{entity.id}}" ).remove();									*/
/* 									*/
/* 									$('#myModal').modal('hide');							*/
/* 									}   */
/* 								}   */
/* 								*/
/* 								*/
/* 								*/
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
