<?php

/* IfeAloesBundle:GeneralCompetence2:newAjaxComp.html.twig */
class __TwigTemplate_8fd11c0c97fd3bf841b85d55045600180c89f606ba3e2fd1711a17ce6820d926 extends Twig_Template
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
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ifealoes/js/bootstrap3-typeahead.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ifealoes/js/categories.js"), "html", null, true);
        echo "\"></script>


<div class=\"modal-header color1\"> 
\t";
        // line 6
        if ((array_key_exists("type", $context) && ((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "new"))) {
            // line 7
            echo "\t\t<b>Créer une compétence générale</b>
\t";
        } else {
            // line 9
            echo "\t\t<b>Modifier une compétence générale</b>\t
\t";
        }
        // line 10
        echo "\t\t\t
\t
\t<button type=\"button\" id=\"close\"  class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
</div>

<div id=\"modal-body\" class=\"modal-body\" >

  <form id=\"aloes_generalcompetence\" action=\"\" method=\"post\" name=\"\" method=\"post\"   ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">

\t   \t ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "\t 
\t    
\t   \t ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'row');
        echo "\t\t   \t 

\t\t\t<div class=\"col-sm-12\">
\t\t\t\t<div class='col-sm-2'> \t  \t  
\t\t\t\t    <b>Catégorisation</b>
\t\t\t\t</div> \t  
\t\t\t\t<div class=\"col-sm-5\">\t 
\t\t\t\t\t<div id=\"categorie-control\" class=\"control-group col-sm-12\">
\t\t\t\t\t\t<div class=\"input-append\">
\t\t\t\t\t\t\t<input   id=\"new-categorie\" type=\"text\">\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> \t\t\t\t
\t\t\t\t</div>\t
\t\t\t\t<div class=\"col-sm-1\">
\t\t\t\t\t<button id=\"add-another-categorie\" class=\"btn\" type=\"button\">+</button>\t
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-4\">\t\t\t\t\t
\t\t\t\t\t<ul id=\"categories-list\">
\t\t\t\t\t</ul>
\t\t\t\t\t 
\t\t\t\t\t<div id=\"hiddens\">
\t\t\t\t\t\t";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categories", array()), 'widget');
        echo "
\t\t\t\t\t</div> \t\t\t\t\t
\t\t\t\t</div>\t\t   
\t\t\t</div>  \t   \t \t\t\t
\t\t\t
\t   \t 
\t   \t ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "\t   \t 
\t   \t   \t
\t   \t <hr/>
\t   \t \t 
\t     <button class=\"btn btn-color1\" type=\"submit\"><i class=\"icon icon-check icon-lg\"></i>Enregistrer</button>
    \t <button class=\"btn btn-inverse\" type=\"button\" data-dismiss=\"modal\"><i class=\"icon icon-times icon-lg\"></i> Fermer</button>\t    
\t    
  </form> 

  <script type=\"text/javascript\">

\t\t\t\$('input:text:visible:first').focus();
\t\t\t\t   
\t\t\t\$(\"#aloes_generalcompetence\").submit(function() {
\t\t\t\t            
\t\t\tdata = \$(this).serialize();\t\t \t
 \t 
\t\t\t\$.ajax({  
\t\t\t\t\ttype: \"POST\",
\t\t\t\t\t 
\t\t\t\t\t";
        // line 69
        if ((array_key_exists("type", $context) && ((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "new"))) {
            echo "\t\t\t\t\t
\t\t\t\t\t\turl: \"";
            // line 70
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("program_competences_create2", array("id" => $this->getAttribute((isset($context["program"]) ? $context["program"] : $this->getContext($context, "program")), "id", array()))), "html", null, true);
            echo "\",
\t\t\t\t\t";
        } elseif ((        // line 71
array_key_exists("type", $context) && ((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "update"))) {
            echo "\t\t\t\t\t\t
\t\t\t\t\t\turl: \"";
            // line 72
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("program_competences_update2", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
            echo "\",\t\t\t\t\t
\t\t\t\t\t";
        }
        // line 73
        echo "\t
\t\t\t\t\tdata: data, 
\t\t\t\t\tdataType : 'json',\t\t\t\t \t\t\t\t\t\t\t\t
\t\t\t\t\tcache: false, 
\t\t\t\t\tsuccess: function(data) 
\t\t\t\t\t\t{ 
\t\t\t\t\t\tif (data.result==false)\t\t\t\t\t  
\t\t\t\t\t\t\t\$(\"#modal-content\").empty().append(data.content);  
\t\t\t\t\t\telse
\t\t\t\t\t\t\t{\t\t\t\t\t
\t\t\t\t\t\t\t";
        // line 83
        if ((array_key_exists("type", $context) && ((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "new"))) {
            echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\$(\"#CGS\").append(data.content);  \t
\t\t\t\t\t\t\t";
        } elseif ((        // line 85
array_key_exists("type", $context) && ((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "update"))) {
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t\t\$(\"#CG_";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
            echo "_A_title2\").empty().append(data.content);  
\t\t\t\t\t\t\t\t\$(\"#CG_";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
            echo "_A_categorie\").empty().append(data.categorie);  \t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
        }
        // line 89
        echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\$('#myModal').modal('hide');\t\t\t\t\t\t\t
\t\t\t\t\t\t\t}   
\t\t\t\t\t\t}   \t\t\t\t\t
\t\t\t});\t             \t\t\t             
\t
\t\t\treturn false;\t\t           \t\t\t\t       \t\t\t\t 
\t\t});
\t
  </script>
</div>\t
";
    }

    public function getTemplateName()
    {
        return "IfeAloesBundle:GeneralCompetence2:newAjaxComp.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 89,  159 => 87,  155 => 86,  151 => 85,  146 => 83,  134 => 73,  129 => 72,  125 => 71,  121 => 70,  117 => 69,  94 => 49,  85 => 43,  60 => 21,  55 => 19,  50 => 17,  41 => 10,  37 => 9,  33 => 7,  31 => 6,  24 => 2,  19 => 1,);
    }
}
/* <script src="{{asset('bundles/ifealoes/js/bootstrap3-typeahead.min.js')}}"></script>*/
/* <script src="{{asset('bundles/ifealoes/js/categories.js')}}"></script>*/
/* */
/* */
/* <div class="modal-header color1"> */
/* 	{% if type is defined and type=="new" %}*/
/* 		<b>Créer une compétence générale</b>*/
/* 	{% else %}*/
/* 		<b>Modifier une compétence générale</b>	*/
/* 	{% endif%}			*/
/* 	*/
/* 	<button type="button" id="close"  class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>*/
/* </div>*/
/* */
/* <div id="modal-body" class="modal-body" >*/
/* */
/*   <form id="aloes_generalcompetence" action="" method="post" name="" method="post"   {{ form_enctype(form) }}>*/
/* */
/* 	   	 {{ form_errors(form) }}	 */
/* 	    */
/* 	   	 {{ form_row(form.title) }}		   	 */
/* */
/* 			<div class="col-sm-12">*/
/* 				<div class='col-sm-2'> 	  	  */
/* 				    <b>Catégorisation</b>*/
/* 				</div> 	  */
/* 				<div class="col-sm-5">	 */
/* 					<div id="categorie-control" class="control-group col-sm-12">*/
/* 						<div class="input-append">*/
/* 							<input   id="new-categorie" type="text">	*/
/* 									*/
/* 						</div>*/
/* 					</div> 				*/
/* 				</div>	*/
/* 				<div class="col-sm-1">*/
/* 					<button id="add-another-categorie" class="btn" type="button">+</button>	*/
/* 				</div>*/
/* 				<div class="col-sm-4">					*/
/* 					<ul id="categories-list">*/
/* 					</ul>*/
/* 					 */
/* 					<div id="hiddens">*/
/* 						{{ form_widget(form.categories) }}*/
/* 					</div> 					*/
/* 				</div>		   */
/* 			</div>  	   	 			*/
/* 			*/
/* 	   	 */
/* 	   	 {{ form_rest(form) }}	   	 */
/* 	   	   	*/
/* 	   	 <hr/>*/
/* 	   	 	 */
/* 	     <button class="btn btn-color1" type="submit"><i class="icon icon-check icon-lg"></i>Enregistrer</button>*/
/*     	 <button class="btn btn-inverse" type="button" data-dismiss="modal"><i class="icon icon-times icon-lg"></i> Fermer</button>	    */
/* 	    */
/*   </form> */
/* */
/*   <script type="text/javascript">*/
/* */
/* 			$('input:text:visible:first').focus();*/
/* 				   */
/* 			$("#aloes_generalcompetence").submit(function() {*/
/* 				            */
/* 			data = $(this).serialize();		 	*/
/*  	 */
/* 			$.ajax({  */
/* 					type: "POST",*/
/* 					 */
/* 					{% if 		type is defined and type=="new" 														%}					*/
/* 						url: "{{ path("program_competences_create2", {id:program.id }) }}",*/
/* 					{% elseif type is defined and type=="update" 														%}						*/
/* 						url: "{{ path("program_competences_update2", {id:entity.id}) }}",					*/
/* 					{% endif 																							%}	*/
/* 					data: data, */
/* 					dataType : 'json',				 								*/
/* 					cache: false, */
/* 					success: function(data) */
/* 						{ */
/* 						if (data.result==false)					  */
/* 							$("#modal-content").empty().append(data.content);  */
/* 						else*/
/* 							{					*/
/* 							{% if 		type is defined and type=="new" 														%}							*/
/* 								$("#CGS").append(data.content);  	*/
/* 							{% elseif type is defined and type=="update" 														%}																		 */
/* 								$("#CG_{{entity.id}}_A_title2").empty().append(data.content);  */
/* 								$("#CG_{{entity.id}}_A_categorie").empty().append(data.categorie);  							*/
/* 							{% endif 					 																		%}*/
/* 							*/
/* 							$('#myModal').modal('hide');							*/
/* 							}   */
/* 						}   					*/
/* 			});	             			             */
/* 	*/
/* 			return false;		           				       				 */
/* 		});*/
/* 	*/
/*   </script>*/
/* </div>	*/
/* */
