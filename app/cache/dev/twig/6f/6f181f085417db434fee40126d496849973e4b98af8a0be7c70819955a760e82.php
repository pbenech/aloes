<?php

/* IfeAloesBundle:GeneralObjective2:newAjaxObj.html.twig */
class __TwigTemplate_3704869a36c41b037e8c5db040707533d790e389c57d61495689036f7130fb04 extends Twig_Template
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
\t";
        // line 2
        if ((array_key_exists("type", $context) && ((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "new"))) {
            // line 3
            echo "\t\t<b>Créer un objectif général</b>
\t";
        } else {
            // line 5
            echo "\t\t<b>Modifier un objectif général</b>\t
\t";
        }
        // line 6
        echo "\t\t\t 
\t
\t<button type=\"button\" id=\"close\"  class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
</div>
 
 
<div id=\"modal-body\" class=\"modal-body\" >


<form id=\"aloes_general_objective\" action=\"\" method=\"post\" name=\"aloes_general_objective\"  ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">

\t";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

\t";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'row');
        echo "\t

\t";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

\t<hr/>   
    
\t<button class=\"btn btn-color1\" type=\"submit\"><i class=\"icon icon-check icon-lg\"></i>Enregistrer</button>
    <button class=\"btn btn-inverse\" type=\"button\" data-dismiss=\"modal\"><i class=\"icon icon-times icon-lg\"></i> Fermer</button>\t    
     
</form>

<script type=\"text/javascript\">
    
\t\t\$('input:text:visible:first').focus();    
    
\t\t\$(\"#aloes_general_objective\").submit(function() {
\t\t\t            
\t\tdata = \$(this).serialize();\t\t         

\t\t\$.ajax({ 
\t\t\t\ttype: \"POST\",
\t\t\t\t 
\t\t\t\t";
        // line 41
        if ((array_key_exists("type", $context) && ((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "new"))) {
            echo "\t\t\t\t\t
\t\t\t\t\turl: \"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_objective_create2", array("id" => $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "course", array()), "id", array()))), "html", null, true);
            echo "\",
\t\t\t\t";
        } elseif ((        // line 43
array_key_exists("type", $context) && ((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "update"))) {
            echo "\t\t\t\t\t\t
\t\t\t\t\turl: \"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_objective_update2", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
            echo "\",\t\t\t\t\t
\t\t\t\t";
        }
        // line 45
        echo "\t
\t\t\t\tdata: data, 
\t\t\t\tdataType : 'json',\t\t\t\t \t\t\t\t\t\t\t\t
\t\t\t\tcache: false, 
\t\t\t\tsuccess: function(data) 
\t\t\t\t\t{ 
\t\t\t\t\tif (data.result==false)\t\t\t\t\t  
\t\t\t\t\t\t\$(\"#modal-content\").empty().append(data.content);  
\t\t\t\t\telse
\t\t\t\t\t\t{\t\t\t\t\t
\t\t\t\t\t\t";
        // line 55
        if ((array_key_exists("type", $context) && ((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "new"))) {
            echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\$(\"#OGS\").append(data.content);  \t
\t\t\t\t\t\t";
        } elseif ((        // line 57
array_key_exists("type", $context) && ((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "update"))) {
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t\$(\"#OG_";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
            echo "_A_title2\").empty().append(data.content);  
\t\t\t\t\t\t";
        }
        // line 60
        echo "\t\t\t\t\t\t
\t\t\t\t\t\t\$('#myModal').modal('hide');\t\t\t\t\t\t\t
\t\t\t\t\t\t}   
\t\t\t\t\t}   
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t
\t\t});\t             \t\t\t             

\t\treturn false;\t\t           \t\t\t\t 
\t\t\t           \t\t\t\t 
\t});

</script>
</div>
";
    }

    public function getTemplateName()
    {
        return "IfeAloesBundle:GeneralObjective2:newAjaxObj.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 60,  119 => 58,  115 => 57,  110 => 55,  98 => 45,  93 => 44,  89 => 43,  85 => 42,  81 => 41,  58 => 21,  53 => 19,  48 => 17,  43 => 15,  32 => 6,  28 => 5,  24 => 3,  22 => 2,  19 => 1,);
    }
}
/* <div class="modal-header color1"> */
/* 	{% if type is defined and type=="new" %}*/
/* 		<b>Créer un objectif général</b>*/
/* 	{% else %}*/
/* 		<b>Modifier un objectif général</b>	*/
/* 	{% endif%}			 */
/* 	*/
/* 	<button type="button" id="close"  class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>*/
/* </div>*/
/*  */
/*  */
/* <div id="modal-body" class="modal-body" >*/
/* */
/* */
/* <form id="aloes_general_objective" action="" method="post" name="aloes_general_objective"  {{ form_enctype(form) }}>*/
/* */
/* 	{{ form_errors( form ) }}*/
/* */
/* 	{{ form_row(form.title) }}	*/
/* */
/* 	{{ form_rest(form) }}*/
/* */
/* 	<hr/>   */
/*     */
/* 	<button class="btn btn-color1" type="submit"><i class="icon icon-check icon-lg"></i>Enregistrer</button>*/
/*     <button class="btn btn-inverse" type="button" data-dismiss="modal"><i class="icon icon-times icon-lg"></i> Fermer</button>	    */
/*      */
/* </form>*/
/* */
/* <script type="text/javascript">*/
/*     */
/* 		$('input:text:visible:first').focus();    */
/*     */
/* 		$("#aloes_general_objective").submit(function() {*/
/* 			            */
/* 		data = $(this).serialize();		         */
/* */
/* 		$.ajax({ */
/* 				type: "POST",*/
/* 				 */
/* 				{% if 		type is defined and type=="new" 														%}					*/
/* 					url: "{{ path("course_objective_create2", {id:entity.course.id }) }}",*/
/* 				{% elseif type is defined and type=="update" 														%}						*/
/* 					url: "{{ path("course_objective_update2", {id:entity.id}) }}",					*/
/* 				{% endif 																							%}	*/
/* 				data: data, */
/* 				dataType : 'json',				 								*/
/* 				cache: false, */
/* 				success: function(data) */
/* 					{ */
/* 					if (data.result==false)					  */
/* 						$("#modal-content").empty().append(data.content);  */
/* 					else*/
/* 						{					*/
/* 						{% if 		type is defined and type=="new" 														%}							*/
/* 							$("#OGS").append(data.content);  	*/
/* 						{% elseif type is defined and type=="update" 														%}																		 */
/* 							$("#OG_{{entity.id}}_A_title2").empty().append(data.content);  */
/* 						{% endif 																							%}*/
/* 						*/
/* 						$('#myModal').modal('hide');							*/
/* 						}   */
/* 					}   */
/* 					*/
/* 					*/
/* 					*/
/* 		});	             			             */
/* */
/* 		return false;		           				 */
/* 			           				 */
/* 	});*/
/* */
/* </script>*/
/* </div>*/
/* */
