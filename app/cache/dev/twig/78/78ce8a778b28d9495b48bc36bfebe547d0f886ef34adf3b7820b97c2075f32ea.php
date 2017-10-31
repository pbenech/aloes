<?php

/* IfeAloesBundle:GeneralCompetence2:delAjaxComp.html.twig */
class __TwigTemplate_c3ca9364408de1fa0b80bdf76613c89ffbc495dcfb13d126b775a37a98b0b8b5 extends Twig_Template
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
\t<b>Supprimer une compétence générale </b><button type=\"button\" id=\"close\"  class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
</div> 
 
<div id=\"modal-body\" class=\"modal-body\" >
 

    Etes-vous sûr de vouloir supprimer définitivement le(s) enregistrement(s) suivant  ?
    \t<br/>
\t    <br/>Compétence générale : <br/>
\t    - ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "title", array()), "html", null, true);
        echo "\t
\t\t<br/>\t
\t\t<br/>


\t\t";
        // line 16
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "specificCompetences", array())) > 0)) {
            // line 17
            echo "\t\t\tCompétence(s) spécifique(s) associée(s) : <br/>
\t\t\t";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "specificCompetences", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["sc"]) {
                // line 19
                echo "\t\t\t    - ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["sc"], "title", array()), "html", null, true);
                echo "<br/>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sc'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "    \t\t
\t\t";
        }
        // line 21
        echo "    

\t\t    
\t    ";
        // line 24
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
\t
\t\t<hr/> 
\t\t
\t    ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), "delete", array()), 'widget');
        echo "
\t      
\t    ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), "nodelete", array()), 'widget');
        echo "

      
    ";
        // line 33
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
    
\t<script type=\"text/javascript\">

\t\t\t\$(\"#form_delete\").click(function() {

\t\t\t\t\tdata = \$(this).serialize();\t\t
\t\t
\t\t\t\t\t\$.ajax({ 
\t\t\t\t\t\t\ttype: \"POST\",\t\t\t\t\t\t
\t\t\t\t\t\t\turl: \"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("program_competences_delete2", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\",\t\t\t\t\t
\t\t\t\t\t\t\tdata: data, 
\t\t\t\t\t\t\tdataType : 'json',\t\t\t\t \t\t\t\t\t\t\t\t
\t\t\t\t\t\t\tcache: false, 
\t\t\t\t\t\t\tsuccess: function(data) 
\t\t\t\t\t\t\t\t{ 
\t\t\t\t\t\t\t\tif (data.result==false)\t\t\t\t\t  
\t\t\t\t\t\t\t\t\t\$(\"#modal-content\").empty().append(data.content);  
\t\t\t\t\t\t\t\telse
\t\t\t\t\t\t\t\t\t{\t\t\t
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
\t\t\t\t\t\t\t\t\t\t\t\$(\"#CG_\"+key+\"_A_weight\").empty().append(progress_bar(weight,'success')); 
\t\t\t\t\t\t\t\t\t\t\tcpt = cpt +\tweight;\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\tif (type==\"SPE\")
\t\t\t\t\t\t\t\t\t\t\t{
\t\t\t\t\t\t\t\t\t\t\tif (weight==null)
\t\t\t\t\t\t\t\t\t\t\t\tweight=0;
\t\t\t\t\t\t\t\t\t\t\t\$(\"#CS_\"+key+\"_weight\").empty().append(progress_bar(weight,'warning')); \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t}\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t}); \t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\$(\"#general-item-weight\").empty().append(progress_bar(cpt,'info')); \t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\$( \"#CG_";
        // line 80
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "\" ).remove();\t\t\t\t\t\t\t\t\t\t
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
        return "IfeAloesBundle:GeneralCompetence2:delAjaxComp.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 80,  97 => 43,  84 => 33,  78 => 30,  73 => 28,  66 => 24,  61 => 21,  57 => 20,  48 => 19,  44 => 18,  41 => 17,  39 => 16,  31 => 11,  19 => 1,);
    }
}
/* <div class="modal-header color1"> */
/* 	<b>Supprimer une compétence générale </b><button type="button" id="close"  class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>*/
/* </div> */
/*  */
/* <div id="modal-body" class="modal-body" >*/
/*  */
/* */
/*     Etes-vous sûr de vouloir supprimer définitivement le(s) enregistrement(s) suivant  ?*/
/*     	<br/>*/
/* 	    <br/>Compétence générale : <br/>*/
/* 	    - {{ entity.title }}	*/
/* 		<br/>	*/
/* 		<br/>*/
/* */
/* */
/* 		{% if entity.specificCompetences|length > 0 %}*/
/* 			Compétence(s) spécifique(s) associée(s) : <br/>*/
/* 			{% for sc in entity.specificCompetences %}*/
/* 			    - {{ sc.title }}<br/>*/
/* 			{% endfor %}    		*/
/* 		{% endif %}    */
/* */
/* 		    */
/* 	    {{ form_start(delete_form) }}*/
/* 	*/
/* 		<hr/> */
/* 		*/
/* 	    {{ form_widget(delete_form.delete) }}*/
/* 	      */
/* 	    {{ form_widget(delete_form.nodelete) }}*/
/* */
/*       */
/*     {{ form_end(delete_form) }}*/
/*     */
/* 	<script type="text/javascript">*/
/* */
/* 			$("#form_delete").click(function() {*/
/* */
/* 					data = $(this).serialize();		*/
/* 		*/
/* 					$.ajax({ */
/* 							type: "POST",						*/
/* 							url: "{{ path("program_competences_delete2", {id:entity.id}) }}",					*/
/* 							data: data, */
/* 							dataType : 'json',				 								*/
/* 							cache: false, */
/* 							success: function(data) */
/* 								{ */
/* 								if (data.result==false)					  */
/* 									$("#modal-content").empty().append(data.content);  */
/* 								else*/
/* 									{			*/
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
/* 											$("#CG_"+key+"_A_weight").empty().append(progress_bar(weight,'success')); */
/* 											cpt = cpt +	weight;														*/
/* 																								*/
/* 											}*/
/* 										if (type=="SPE")*/
/* 											{*/
/* 											if (weight==null)*/
/* 												weight=0;*/
/* 											$("#CS_"+key+"_weight").empty().append(progress_bar(weight,'warning')); 																					*/
/* 											}																	*/
/* 									}); 									*/
/* 									*/
/* 									*/
/* 									$("#general-item-weight").empty().append(progress_bar(cpt,'info')); 									*/
/* 									$( "#CG_{{entity.id}}" ).remove();										*/
/* 									 */
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
/*  */
/* 	</script>*/
/* </div> */
/* */
