<?php

/* IfeAloesBundle:Topic2:newAjaxTopic.html.twig */
class __TwigTemplate_b40532f6101eff50ef0e687d849f059b72d588e3e058f788eb561890b163e74c extends Twig_Template
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

<script src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ifealoes/js/bootstrap3-typeahead.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ifealoes/js/typologie.js"), "html", null, true);
        echo "\"></script>


                    
<script type=\"text/javascript\"> 


\t\ttinymce.init({
\t\t\t\t\t selector: \"textarea\",\t
  \t\t\t\t\t cache_suffix: '?v=4.1.6',\t\t\t\t\t \t\t 
\t\t\t \t   \t menubar: false,\t\t
\t\t\t \t   \t \"toolbar1\":\"code preview |bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link unlink  \",
//\t\t\t \t   \t \"plugins\":\"link image \"\t\t\t\t\t\t
\t\t\t \t   \t \"plugins\":\"code preview link fullscreen \"\t\t
\t\t\t\t\t });\t

  \t\t\$('input:text:visible:first').focus();\t
  
 
  
\t\t\$(\"#aloes_assessment2\").submit(function() {
\t\t\t            
\t\tdata = \$(this).serialize();\t\t         

\t\t\$.ajax({ 
\t\t\t\ttype: \"POST\",\t\t\t\t\t
\t\t\t\turl: \"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("topic_update2", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\",\t\t\t\t\t

\t\t\t\tdata: data, 
\t\t\t\tdataType : 'json',\t\t\t\t \t\t\t\t\t\t\t\t
\t\t\t\tcache: false, 
\t\t\t\tsuccess: function(data) 
\t\t\t\t\t{ 
\t\t\t\t\tif (data.result==false)\t\t\t\t\t  
\t\t\t\t\t\t\$(\"#modal-content\").empty().append(data.content);  
\t\t\t\t\telse\t\t\t\t\t\t
\t\t\t\t\t\t{\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t 
\t\t\t\t\t\t\$(\"#TO_";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "_A\").empty().append(data.content);  
\t\t\t\t\t\t\$(\"#TO_";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "_B0\").empty().append(data.view);  
\t\t\t\t\t\t\$('#myModal').modal('hide');\t\t\t\t\t\t\t
\t\t\t\t\t\t}   
\t\t\t\t\ttinyMCE.remove();  \t
\t\t\t\t\t}   \t
\t\t});\t             \t\t\t             
\t\treturn false;\t\t            \t\t\t\t \t\t\t           \t\t\t\t 
\t});\t 
\t\t  \t\t  \t\t\t 
</script>

 
<div class=\"modal-header color1\"> 
\t<b>Séquence mise à jour</b><button type=\"button\" id=\"close\"  class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
</div>
 
<div id=\"modal-body\" class=\"modal-body\" >

<form  id=\"aloes_assessment2\" class=\"form-inline\" action=\"\" method=\"post\"  ";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
\t
\t";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t

\t<div class=\"col-md-12 col-sm-12\">
\t\t<div class=\"col-md-2 col-sm-2\">
\t\t\t  ";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'label');
        echo "
\t\t</div>
\t\t<div class=\"col-md-10 col-sm-10\">
\t\t\t  ";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'widget');
        echo "
\t\t\t  ";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'errors');
        echo "
\t\t</div>
\t</div>
\t
\t\t<div class='col-sm-12'> 
\t\t\t<div class='col-sm-2'> \t  \t  
\t\t\t    <b>Date et Heure</b>
\t\t\t</div> \t  \t\t    \t
\t\t\t<div class='col-sm-2'> \t  \t  
\t\t\t    Du
\t\t\t</div> \t
\t\t\t<div class='col-sm-3'> \t  \t  
\t\t\t    ";
        // line 84
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "startDate", array()), 'widget');
        echo "
\t\t    \t";
        // line 85
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "startDate", array()), 'errors');
        echo "\t
\t\t\t</div> \t


\t\t\t<script type=\"text/javascript\">
\t\t\t\t\$(function() {
\t\t\t\t    \$('#aloes_assessment2_startDate').datetimepicker({
\t\t\t                minView: 0, pickTime: false, autoclose: true 
\t\t\t\t    });
\t\t\t\t}); 
\t\t\t</script>
\t\t
\t\t\t<div class='col-sm-2'> \t  \t  
\t\t\t    Au
\t\t\t</div> \t\t\t  \t\t\t
\t\t\t<div class='col-sm-3'> \t  \t  
\t\t\t\t";
        // line 101
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "endDate", array()), 'widget');
        echo "
\t\t    \t";
        // line 102
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "endDate", array()), 'errors');
        echo "\t
\t\t\t</div> \t  
\t\t</div>
\t\t
\t\t\t 
\t\t<script type=\"text/javascript\">
\t\t\t\$(function() {
\t\t\t    \$('#aloes_assessment2_endDate').datetimepicker({
\t\t\t            minView: 0, pickTime: false, autoclose: true 
\t\t\t    });
\t\t\t});
\t\t</script>\t\t
 
  \t\t
\t<div class=\"col-md-12 col-sm-12\">
\t\t<div class=\"col-md-2 col-sm-2\">
\t\t\t  ";
        // line 118
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "place", array()), 'label');
        echo "
\t\t</div>
\t\t<div class=\"col-md-10 col-sm-10\">
\t\t\t  ";
        // line 121
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "place", array()), 'widget');
        echo "
\t\t\t  ";
        // line 122
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "place", array()), 'errors');
        echo "
\t\t</div>
\t</div>
\t
\t
\t<div class=\"col-md-12 col-sm-12\">
\t\t<div class=\"col-md-2 col-sm-2\">
\t\t\t
\t\t</div>
\t\t<div class=\"col-md-10 col-sm-10\">
\t\t\t  ";
        // line 132
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "isFaceToFace", array()), 'widget');
        echo "
\t\t\t  ";
        // line 133
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "isFaceToFace", array()), 'errors');
        echo "
\t\t</div>
\t</div>\t\t
\t
\t<div class=\"col-md-12 col-sm-12\">
\t\t<div class=\"col-md-2 col-sm-2\">
\t\t\t  ";
        // line 139
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'label');
        echo "
\t\t</div>
\t\t<div class=\"col-md-10 col-sm-10\">
\t\t\t  ";
        // line 142
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'widget');
        echo "
\t\t\t  ";
        // line 143
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'errors');
        echo "
\t\t</div>
\t</div>\t
\t


\t\t<div class=\"col-sm-12\">
\t\t\t<div class='col-sm-2'> \t  \t  
\t\t\t\t   <b>Thématique</b>
\t\t\t</div> \t  
\t\t\t<div class=\"col-sm-5\">\t 
\t\t\t\t<div id=\"typologie-control\" class=\"control-group col-sm-12\">
\t\t\t\t\t<div class=\"input-append\">
\t\t\t\t\t\t<input   id=\"new-typologie\" type=\"text\">\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div> \t\t\t\t
\t\t\t</div>\t
\t\t\t<div class=\"col-sm-1\">
\t\t\t\t<button id=\"add-another-typologie\" class=\"btn\" type=\"button\">+</button>\t
\t\t\t</div>
\t\t\t<div class=\"col-sm-4\">\t\t\t\t\t
\t\t\t\t<ul id=\"typologies-list\">
\t\t\t\t</ul>
\t\t\t\t\t
\t\t\t\t<div id=\"hiddens\">
\t\t\t\t\t";
        // line 169
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "typologies", array()), 'widget');
        echo "
\t\t\t\t</div> \t\t\t\t\t
\t\t\t</div>\t\t  
\t\t</div>  \t\t
\t
\t
\t";
        // line 175
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "\t   \t\t
\t
\t<div class=\"col-md-12 col-sm-12\">
\t \t<hr/>\t    
\t</div>


\t<button class=\"btn btn-color1\" type=\"submit\"><i class=\"icon icon-check icon-lg\"></i> Enregistrer</button>
\t<button class=\"btn btn-inverse\" type=\"button\" data-dismiss=\"modal\"><i class=\"icon icon-times icon-lg\"></i> Fermer</button>
\t
</form>
 
</div>
";
    }

    public function getTemplateName()
    {
        return "IfeAloesBundle:Topic2:newAjaxTopic.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  269 => 175,  260 => 169,  231 => 143,  227 => 142,  221 => 139,  212 => 133,  208 => 132,  195 => 122,  191 => 121,  185 => 118,  166 => 102,  162 => 101,  143 => 85,  139 => 84,  124 => 72,  120 => 71,  114 => 68,  106 => 63,  101 => 61,  80 => 43,  76 => 42,  62 => 31,  33 => 5,  29 => 4,  24 => 2,  19 => 1,);
    }
}
/* <script src="{{asset('bundles/stfalcontinymce/vendor/tinymce/jquery.tinymce.min.js')}}"></script> */
/* <script src="{{asset('bundles/stfalcontinymce/vendor/tinymce/tinymce.min.js')}}"></script>*/
/* */
/* <script src="{{asset('bundles/ifealoes/js/bootstrap3-typeahead.min.js')}}"></script>*/
/* <script src="{{asset('bundles/ifealoes/js/typologie.js')}}"></script>*/
/* */
/* */
/*                     */
/* <script type="text/javascript"> */
/* */
/* */
/* 		tinymce.init({*/
/* 					 selector: "textarea",	*/
/*   					 cache_suffix: '?v=4.1.6',					 		 */
/* 			 	   	 menubar: false,		*/
/* 			 	   	 "toolbar1":"code preview |bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link unlink  ",*/
/* //			 	   	 "plugins":"link image "						*/
/* 			 	   	 "plugins":"code preview link fullscreen "		*/
/* 					 });	*/
/* */
/*   		$('input:text:visible:first').focus();	*/
/*   */
/*  */
/*   */
/* 		$("#aloes_assessment2").submit(function() {*/
/* 			            */
/* 		data = $(this).serialize();		         */
/* */
/* 		$.ajax({ */
/* 				type: "POST",					*/
/* 				url: "{{ path("topic_update2", {id:entity.id}) }}",					*/
/* */
/* 				data: data, */
/* 				dataType : 'json',				 								*/
/* 				cache: false, */
/* 				success: function(data) */
/* 					{ */
/* 					if (data.result==false)					  */
/* 						$("#modal-content").empty().append(data.content);  */
/* 					else						*/
/* 						{																						 */
/* 						$("#TO_{{entity.id}}_A").empty().append(data.content);  */
/* 						$("#TO_{{entity.id}}_B0").empty().append(data.view);  */
/* 						$('#myModal').modal('hide');							*/
/* 						}   */
/* 					tinyMCE.remove();  	*/
/* 					}   	*/
/* 		});	             			             */
/* 		return false;		            				 			           				 */
/* 	});	 */
/* 		  		  			 */
/* </script>*/
/* */
/*  */
/* <div class="modal-header color1"> */
/* 	<b>Séquence mise à jour</b><button type="button" id="close"  class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>*/
/* </div>*/
/*  */
/* <div id="modal-body" class="modal-body" >*/
/* */
/* <form  id="aloes_assessment2" class="form-inline" action="" method="post"  {{ form_enctype(form) }}>*/
/* 	*/
/* 	{{ form_errors( form ) }}*/
/* 	*/
/* */
/* 	<div class="col-md-12 col-sm-12">*/
/* 		<div class="col-md-2 col-sm-2">*/
/* 			  {{ form_label(form.title) }}*/
/* 		</div>*/
/* 		<div class="col-md-10 col-sm-10">*/
/* 			  {{ form_widget(form.title) }}*/
/* 			  {{ form_errors(form.title) }}*/
/* 		</div>*/
/* 	</div>*/
/* 	*/
/* 		<div class='col-sm-12'> */
/* 			<div class='col-sm-2'> 	  	  */
/* 			    <b>Date et Heure</b>*/
/* 			</div> 	  		    	*/
/* 			<div class='col-sm-2'> 	  	  */
/* 			    Du*/
/* 			</div> 	*/
/* 			<div class='col-sm-3'> 	  	  */
/* 			    {{ form_widget(form.startDate) }}*/
/* 		    	{{ form_errors(form.startDate) }}	*/
/* 			</div> 	*/
/* */
/* */
/* 			<script type="text/javascript">*/
/* 				$(function() {*/
/* 				    $('#aloes_assessment2_startDate').datetimepicker({*/
/* 			                minView: 0, pickTime: false, autoclose: true */
/* 				    });*/
/* 				}); */
/* 			</script>*/
/* 		*/
/* 			<div class='col-sm-2'> 	  	  */
/* 			    Au*/
/* 			</div> 			  			*/
/* 			<div class='col-sm-3'> 	  	  */
/* 				{{ form_widget(form.endDate) }}*/
/* 		    	{{ form_errors(form.endDate) }}	*/
/* 			</div> 	  */
/* 		</div>*/
/* 		*/
/* 			 */
/* 		<script type="text/javascript">*/
/* 			$(function() {*/
/* 			    $('#aloes_assessment2_endDate').datetimepicker({*/
/* 			            minView: 0, pickTime: false, autoclose: true */
/* 			    });*/
/* 			});*/
/* 		</script>		*/
/*  */
/*   		*/
/* 	<div class="col-md-12 col-sm-12">*/
/* 		<div class="col-md-2 col-sm-2">*/
/* 			  {{ form_label(form.place) }}*/
/* 		</div>*/
/* 		<div class="col-md-10 col-sm-10">*/
/* 			  {{ form_widget(form.place) }}*/
/* 			  {{ form_errors(form.place) }}*/
/* 		</div>*/
/* 	</div>*/
/* 	*/
/* 	*/
/* 	<div class="col-md-12 col-sm-12">*/
/* 		<div class="col-md-2 col-sm-2">*/
/* 			*/
/* 		</div>*/
/* 		<div class="col-md-10 col-sm-10">*/
/* 			  {{ form_widget(form.isFaceToFace) }}*/
/* 			  {{ form_errors(form.isFaceToFace) }}*/
/* 		</div>*/
/* 	</div>		*/
/* 	*/
/* 	<div class="col-md-12 col-sm-12">*/
/* 		<div class="col-md-2 col-sm-2">*/
/* 			  {{ form_label(form.description) }}*/
/* 		</div>*/
/* 		<div class="col-md-10 col-sm-10">*/
/* 			  {{ form_widget(form.description) }}*/
/* 			  {{ form_errors(form.description) }}*/
/* 		</div>*/
/* 	</div>	*/
/* 	*/
/* */
/* */
/* 		<div class="col-sm-12">*/
/* 			<div class='col-sm-2'> 	  	  */
/* 				   <b>Thématique</b>*/
/* 			</div> 	  */
/* 			<div class="col-sm-5">	 */
/* 				<div id="typologie-control" class="control-group col-sm-12">*/
/* 					<div class="input-append">*/
/* 						<input   id="new-typologie" type="text">	*/
/* 									*/
/* 					</div>*/
/* 				</div> 				*/
/* 			</div>	*/
/* 			<div class="col-sm-1">*/
/* 				<button id="add-another-typologie" class="btn" type="button">+</button>	*/
/* 			</div>*/
/* 			<div class="col-sm-4">					*/
/* 				<ul id="typologies-list">*/
/* 				</ul>*/
/* 					*/
/* 				<div id="hiddens">*/
/* 					{{ form_widget(form.typologies) }}*/
/* 				</div> 					*/
/* 			</div>		  */
/* 		</div>  		*/
/* 	*/
/* 	*/
/* 	{{ form_rest(form) }}	   		*/
/* 	*/
/* 	<div class="col-md-12 col-sm-12">*/
/* 	 	<hr/>	    */
/* 	</div>*/
/* */
/* */
/* 	<button class="btn btn-color1" type="submit"><i class="icon icon-check icon-lg"></i> Enregistrer</button>*/
/* 	<button class="btn btn-inverse" type="button" data-dismiss="modal"><i class="icon icon-times icon-lg"></i> Fermer</button>*/
/* 	*/
/* </form>*/
/*  */
/* </div>*/
/* */
