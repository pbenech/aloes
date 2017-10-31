<?php

/* IfeAloesBundle:SpecificCompetence2:newAjaxSpecComp.html.twig */
class __TwigTemplate_bd6b2178398dffa3824e0dcd2cae8e32c808c8d5ebdffa9877ff390f18b6b912 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/stfalcontinymce/vendor/tinymce/jquery.tinymce.min.js"), "html", null, true);
        echo "\"></script> 
<script src=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/stfalcontinymce/vendor/tinymce/tinymce.min.js"), "html", null, true);
        echo "\"></script>


<div class=\"modal-header color2\"> 
\t";
        // line 6
        if ((array_key_exists("type", $context) && ((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "new"))) {
            // line 7
            echo "\t\t<b>Créer une compétence spécifique</b>
\t";
        } else {
            // line 9
            echo "\t\t<b>Modifier une compétence spécifique</b>\t
\t";
        }
        // line 10
        echo "\t\t\t
\t
\t<button type=\"button\" id=\"close\"  class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
</div>

<div id=\"modal-body\" class=\"modal-body\" > 


\t<form id=\"aloes_specific_competence\" action=\"\" method=\"post\" name=\"aloes_general_objective\"  ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
\t
\t\t";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t
\t   \t";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'row');
        echo "
\t
\t   \t";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "\t   \t\t
\t    
\t   \t<hr/>
\t     
\t    <button class=\"btn btn-color2\" type=\"submit\"><i class=\"icon icon-check icon-lg\"></i>Enregistrer</button>
    \t<button class=\"btn btn-inverse\" type=\"button\" data-dismiss=\"modal\"><i class=\"icon icon-times icon-lg\"></i> Fermer</button>\t \t   
\t    
\t</form>


\t<script type=\"text/javascript\">
\t
\t\t\$('input:text:visible:first').focus();    
\t\t

\t\ttinymce.init({
\t\t\t\t\t selector: \"textarea\",\t
  \t\t\t\t\t cache_suffix: '?v=4.1.6',\t\t\t\t\t \t\t 
\t\t\t \t   \t menubar: false,\t\t
\t\t\t \t   \t \"toolbar1\":\"code preview |bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link unlink  \",
//\t\t\t \t   \t \"plugins\":\"link image \"\t\t\t\t\t\t
\t\t\t \t   \t \"plugins\":\"code preview link fullscreen \"\t\t
\t\t\t\t\t });\t\t\t
\t\t\t
\t
\t\t\$(\"#aloes_specific_competence\").submit(function() {\t\t\t           
\t\t\t\t                \t\t\t\t             
\t\t\tdata = \$(this).serialize();\t\t         
\t
\t\t\t\$.ajax({
\t\t\t\t\ttype: \"POST\",
\t\t\t\t\t";
        // line 55
        if ((array_key_exists("type", $context) && ((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "new"))) {
            echo "\t\t\t\t\t
\t\t\t\t\t\turl: \"";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("specificcompetence_create_2", array("id" => $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "id", array()))), "html", null, true);
            echo "\",
\t\t\t\t\t";
        } elseif ((        // line 57
array_key_exists("type", $context) && ((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "update"))) {
            echo "\t\t\t\t\t
\t\t\t\t\t\turl: \"";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("specificcompetence_update2", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
            echo "\",\t
\t\t\t\t\t";
        }
        // line 59
        echo "\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\tdata: data,
\t \t\t\t\t//dataType : 'html',\t
\t\t\t\t\tdataType : 'json',\t \t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\tcache: false,
\t\t\t\t\tsuccess: function(data) 
\t\t\t\t\t\t{
\t\t\t\t\t\t";
        // line 66
        if ((array_key_exists("type", $context) && ((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "new"))) {
            echo "\t
\t\t\t\t\t\tif (data.result==false)\t\t\t\t\t  
\t\t\t\t\t\t\t\$(\"#modal-content\").empty().append(data.content);  
\t\t\t\t\t\telse
\t\t\t\t\t\t\t{\t\t\t \t\t\t
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\tvar content = \$(data);
\t\t\t\t\t\t\t\$(\"#sortable";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "id", array()), "html", null, true);
            echo "\").append(data.content); 
\t\t\t\t\t\t\t\$(\"#CG_";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "id", array()), "html", null, true);
            echo "_A_nb_specs\").empty().append(data.nb_spec); 
\t\t\t\t\t\t\t\$(\"#CG_";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "id", array()), "html", null, true);
            echo "_A_weight\").empty().append(progress_bar(data.weight,'warning')); \t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\$('#myModal').modal('hide');\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t}
\t\t\t\t\t\t";
        } elseif ((        // line 78
array_key_exists("type", $context) && ((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "update"))) {
            echo "\t\t
\t\t\t\t\t\tif (data.result==false)\t\t\t\t\t  
\t\t\t\t\t\t\t\$(\"#modal-content\").empty().append(data.content);  
\t\t\t\t\t\telse
\t\t\t\t\t\t\t{\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t\$(\"#CS_";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
            echo "_A_title2\").empty().append(data.content); \t\t\t\t\t\t\t
\t\t\t\t\t\t\t\$(\"#CS_";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
            echo "_B_description\").empty().append(data.description); \t
\t\t\t\t\t\t\t\$('#myModal').modal('hide');\t 
\t\t\t\t\t\t\t}
\t\t\t\t\t\t";
        }
        // line 87
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t}   
\t\t\t});\t             \t\t\t             \t
\t\t\treturn false;\t\t           \t\t\t\t 
\t
\t\t 
\t\t});
\t\t
\t</script>\t \t
     

</div>";
    }

    public function getTemplateName()
    {
        return "IfeAloesBundle:SpecificCompetence2:newAjaxSpecComp.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 87,  162 => 84,  158 => 83,  150 => 78,  144 => 75,  140 => 74,  136 => 73,  126 => 66,  117 => 59,  112 => 58,  108 => 57,  104 => 56,  100 => 55,  66 => 24,  61 => 22,  56 => 20,  51 => 18,  41 => 10,  37 => 9,  33 => 7,  31 => 6,  24 => 2,  19 => 1,);
    }
}
/* <script src="{{asset('bundles/stfalcontinymce/vendor/tinymce/jquery.tinymce.min.js')}}"></script> */
/* <script src="{{asset('bundles/stfalcontinymce/vendor/tinymce/tinymce.min.js')}}"></script>*/
/* */
/* */
/* <div class="modal-header color2"> */
/* 	{% if type is defined and type=="new" %}*/
/* 		<b>Créer une compétence spécifique</b>*/
/* 	{% else %}*/
/* 		<b>Modifier une compétence spécifique</b>	*/
/* 	{% endif%}			*/
/* 	*/
/* 	<button type="button" id="close"  class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>*/
/* </div>*/
/* */
/* <div id="modal-body" class="modal-body" > */
/* */
/* */
/* 	<form id="aloes_specific_competence" action="" method="post" name="aloes_general_objective"  {{ form_enctype(form) }}>*/
/* 	*/
/* 		{{ form_errors( form ) }}*/
/* 	*/
/* 	   	{{ form_row(form.title) }}*/
/* 	*/
/* 	   	{{ form_rest(form) }}	   		*/
/* 	    */
/* 	   	<hr/>*/
/* 	     */
/* 	    <button class="btn btn-color2" type="submit"><i class="icon icon-check icon-lg"></i>Enregistrer</button>*/
/*     	<button class="btn btn-inverse" type="button" data-dismiss="modal"><i class="icon icon-times icon-lg"></i> Fermer</button>	 	   */
/* 	    */
/* 	</form>*/
/* */
/* */
/* 	<script type="text/javascript">*/
/* 	*/
/* 		$('input:text:visible:first').focus();    */
/* 		*/
/* */
/* 		tinymce.init({*/
/* 					 selector: "textarea",	*/
/*   					 cache_suffix: '?v=4.1.6',					 		 */
/* 			 	   	 menubar: false,		*/
/* 			 	   	 "toolbar1":"code preview |bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link unlink  ",*/
/* //			 	   	 "plugins":"link image "						*/
/* 			 	   	 "plugins":"code preview link fullscreen "		*/
/* 					 });			*/
/* 			*/
/* 	*/
/* 		$("#aloes_specific_competence").submit(function() {			           */
/* 				                				             */
/* 			data = $(this).serialize();		         */
/* 	*/
/* 			$.ajax({*/
/* 					type: "POST",*/
/* 					{% if type is defined and type=="new" %}					*/
/* 						url: "{{ path("specificcompetence_create_2", {id:parent.id}) }}",*/
/* 					{% elseif type is defined and type=="update" %}					*/
/* 						url: "{{ path("specificcompetence_update2", {id:entity.id}) }}",	*/
/* 					{% endif 																							%}											*/
/* 					data: data,*/
/* 	 				//dataType : 'html',	*/
/* 					dataType : 'json',	 												*/
/* 					cache: false,*/
/* 					success: function(data) */
/* 						{*/
/* 						{% if type is defined and type=="new" %}	*/
/* 						if (data.result==false)					  */
/* 							$("#modal-content").empty().append(data.content);  */
/* 						else*/
/* 							{			 			*/
/* 											*/
/* 							var content = $(data);*/
/* 							$("#sortable{{parent.id}}").append(data.content); */
/* 							$("#CG_{{parent.id}}_A_nb_specs").empty().append(data.nb_spec); */
/* 							$("#CG_{{parent.id}}_A_weight").empty().append(progress_bar(data.weight,'warning')); 								*/
/* 							$('#myModal').modal('hide');								*/
/* 							}*/
/* 						{% elseif type is defined and type=="update" %}		*/
/* 						if (data.result==false)					  */
/* 							$("#modal-content").empty().append(data.content);  */
/* 						else*/
/* 							{							 */
/* 							$("#CS_{{entity.id}}_A_title2").empty().append(data.content); 							*/
/* 							$("#CS_{{entity.id}}_B_description").empty().append(data.description); 	*/
/* 							$('#myModal').modal('hide');	 */
/* 							}*/
/* 						{% endif 																							%}																*/
/* 						}   */
/* 			});	             			             	*/
/* 			return false;		           				 */
/* 	*/
/* 		 */
/* 		});*/
/* 		*/
/* 	</script>	 	*/
/*      */
/* */
/* </div>*/
