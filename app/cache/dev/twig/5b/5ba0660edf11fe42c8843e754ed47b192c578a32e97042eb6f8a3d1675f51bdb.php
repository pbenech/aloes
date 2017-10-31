<?php

/* IfeAloesBundle:Program:edit_competences.html.twig */
class __TwigTemplate_5899666462df0e571a85885af1c0559d5fffaa61af067e468b1fb9333296d93d extends Twig_Template
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


<div class=\"modal-header color4\"> 

\t\t<b>Description compétences</b>

\t\t
\t<button type=\"button\" id=\"close\"  class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
</div>

<div id=\"modal-body\" class=\"modal-body\" > 
<form id=\"description_generale\" action=\"program_update_competences\" method=\"post\" name=\"description_generale\"  ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">

\t";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

\t";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "competences", array()), 'row');
        echo "\t

\t";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

\t<hr/>    
    
\t<button class=\"btn btn-color4\" type=\"submit\"><i class=\"icon icon-check icon-lg\"></i>Enregistrer</button>
    <button class=\"btn btn-inverse\" type=\"button\" data-dismiss=\"modal\"><i class=\"icon icon-times icon-lg\"></i> Fermer</button>\t    
     
</form>

<script type=\"text/javascript\">
    
\t\t\$('input:text:visible:first').focus();   
\t\t
\t\ttinymce.init({
\t\t\t\t\t selector: \"textarea\",\t
  \t\t\t\t\t cache_suffix: '?v=4.1.6',\t\t\t\t\t \t\t 
\t\t\t \t   \t menubar: false,\t\t
\t\t\t \t   \t \"toolbar1\":\"code preview |bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link unlink  \",
//\t\t\t \t   \t \"plugins\":\"link image \"\t\t\t\t\t\t
\t\t\t \t   \t \"plugins\":\"code preview link fullscreen \"\t\t
\t\t\t\t\t });\t\t\t\t
\t\t 
    
\t\t\$(\"#description_generale\").submit(function() {
\t\t\t            
\t\tdata = \$(this).serialize();\t\t         

\t\t\$.ajax({ 
\t\t\t\ttype: \"POST\",
\t\t\t\t
\t\t\t\turl: \"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("program_update_competences", array("id" => $this->getAttribute((isset($context["program"]) ? $context["program"] : $this->getContext($context, "program")), "id", array()))), "html", null, true);
        echo "\",
\t\t\t\tdata: data, 
\t\t\t\tdataType : 'json',\t\t\t\t \t\t\t\t\t\t\t\t
\t\t\t\tcache: false, 
\t\t\t\tsuccess: function(data) 
\t\t\t\t\t{
\t\t\t\t\t\tif (data.result==false)\t\t\t\t\t  
\t\t\t\t\t\t\t\$(\"#modal-content\").empty().append(data.content);  
\t\t\t\t\t\telse
\t\t\t\t\t\t\t{\t
\t\t\t\t\t\t\t\$(\"#CSSDESCR\").empty().append(data.content);  \t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t\t\$('#myModal').modal('hide');\t\t\t\t\t\t\t
\t\t\t\t\t\t\t}   \t\t\t\t\t 
\t\t\t\t\t}    \t
\t\t});\t             \t\t\t             

\t\treturn false;\t\t           \t\t\t\t 
\t\t\t           \t\t\t\t 
\t});

</script>
</div>";
    }

    public function getTemplateName()
    {
        return "IfeAloesBundle:Program:edit_competences.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 50,  54 => 20,  49 => 18,  44 => 16,  39 => 14,  24 => 2,  19 => 1,);
    }
}
/* <script src="{{asset('bundles/stfalcontinymce/vendor/tinymce/jquery.tinymce.min.js')}}"></script> */
/* <script src="{{asset('bundles/stfalcontinymce/vendor/tinymce/tinymce.min.js')}}"></script>*/
/* */
/* */
/* <div class="modal-header color4"> */
/* */
/* 		<b>Description compétences</b>*/
/* */
/* 		*/
/* 	<button type="button" id="close"  class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>*/
/* </div>*/
/* */
/* <div id="modal-body" class="modal-body" > */
/* <form id="description_generale" action="program_update_competences" method="post" name="description_generale"  {{ form_enctype(form) }}>*/
/* */
/* 	{{ form_errors( form ) }}*/
/* */
/* 	{{ form_row(form.competences) }}	*/
/* */
/* 	{{ form_rest(form) }}*/
/* */
/* 	<hr/>    */
/*     */
/* 	<button class="btn btn-color4" type="submit"><i class="icon icon-check icon-lg"></i>Enregistrer</button>*/
/*     <button class="btn btn-inverse" type="button" data-dismiss="modal"><i class="icon icon-times icon-lg"></i> Fermer</button>	    */
/*      */
/* </form>*/
/* */
/* <script type="text/javascript">*/
/*     */
/* 		$('input:text:visible:first').focus();   */
/* 		*/
/* 		tinymce.init({*/
/* 					 selector: "textarea",	*/
/*   					 cache_suffix: '?v=4.1.6',					 		 */
/* 			 	   	 menubar: false,		*/
/* 			 	   	 "toolbar1":"code preview |bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link unlink  ",*/
/* //			 	   	 "plugins":"link image "						*/
/* 			 	   	 "plugins":"code preview link fullscreen "		*/
/* 					 });				*/
/* 		 */
/*     */
/* 		$("#description_generale").submit(function() {*/
/* 			            */
/* 		data = $(this).serialize();		         */
/* */
/* 		$.ajax({ */
/* 				type: "POST",*/
/* 				*/
/* 				url: "{{ path("program_update_competences", {id:program.id }) }}",*/
/* 				data: data, */
/* 				dataType : 'json',				 								*/
/* 				cache: false, */
/* 				success: function(data) */
/* 					{*/
/* 						if (data.result==false)					  */
/* 							$("#modal-content").empty().append(data.content);  */
/* 						else*/
/* 							{	*/
/* 							$("#CSSDESCR").empty().append(data.content);  				*/
/* 						*/
/* 							$('#myModal').modal('hide');							*/
/* 							}   					 */
/* 					}    	*/
/* 		});	             			             */
/* */
/* 		return false;		           				 */
/* 			           				 */
/* 	});*/
/* */
/* </script>*/
/* </div>*/
