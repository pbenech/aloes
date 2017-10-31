<?php

/* IfeAloesBundle:Event2:delAjaxEvt.html.twig */
class __TwigTemplate_fa40a1e6f19d9330a5da3a2b84afe95d10dc1aaeee0cca1822cf2218796adede extends Twig_Template
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
        echo "<div class=\"modal-header color3\"> 
\t<b>Suppression évènement </b>
\t<button type=\"button\" id=\"close\"  class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
</div>

<div id=\"modal-body\" class=\"modal-body\" >


    Etes-vous sûr de vouloir supprimer définitivement cet évènement  ?
  
    <br/>    
    <br/>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "title", array()), "html", null, true);
        echo "

\t<br/>\t
\t    
    ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
    
\t<hr/>     

    ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), "delete", array()), 'widget');
        echo "
      
    ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), "nodelete", array()), 'widget');
        echo "
      
    ";
        // line 24
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
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("topic_events_delete_2", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\",\t\t\t\t\t
\t\t\t\t\t\t\tdata: data, 
\t\t\t\t\t\t\tdataType : 'json',\t\t\t\t \t\t\t\t\t\t\t\t
\t\t\t\t\t\t\tcache: false, 
\t\t\t\t\t\t\tsuccess: function(data) 
\t\t\t\t\t\t\t\t{ 
\t\t\t\t\t\t\t\tif (data.result==false)\t\t\t\t\t  
\t\t\t\t\t\t\t\t\t\$(\"#modal-content\").empty().append(data.content);  
\t\t\t\t\t\t\t\telse
\t\t\t\t\t\t\t\t\t{   \t\t\t\t\t\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t\t\t\$( \"#AS2_";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "\" ).remove();\t 
\t\t\t\t\t\t\t\t\t\$(\"#TO_";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "id", array()), "html", null, true);
        echo "_A_events\").empty().append(data.nb_spec); 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\tvar x = data.assessments;
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\$.each( x, function( key, value ) {
\t\t\t\t\t\t\t\t\t\t\t\tkey \t= value['key'];
\t\t\t\t\t\t\t\t\t\t\t\tevent \t= value['event'];
\t
\t\t\t\t\t\t\t\t\t  \$(\"#AS_\"+key+\"_evt\").empty().append(event);
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t});\t\t\t\t\t \t\t\t\t\t\t\t\t\t\t\t\t
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
        return "IfeAloesBundle:Event2:delAjaxEvt.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 45,  82 => 44,  69 => 34,  56 => 24,  51 => 22,  46 => 20,  39 => 16,  32 => 12,  19 => 1,);
    }
}
/* <div class="modal-header color3"> */
/* 	<b>Suppression évènement </b>*/
/* 	<button type="button" id="close"  class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>*/
/* </div>*/
/* */
/* <div id="modal-body" class="modal-body" >*/
/* */
/* */
/*     Etes-vous sûr de vouloir supprimer définitivement cet évènement  ?*/
/*   */
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
/* 							url: "{{ path("topic_events_delete_2", {id:entity.id}) }}",					*/
/* 							data: data, */
/* 							dataType : 'json',				 								*/
/* 							cache: false, */
/* 							success: function(data) */
/* 								{ */
/* 								if (data.result==false)					  */
/* 									$("#modal-content").empty().append(data.content);  */
/* 								else*/
/* 									{   												 */
/* 									$( "#AS2_{{entity.id}}" ).remove();	 */
/* 									$("#TO_{{parent.id}}_A_events").empty().append(data.nb_spec); */
/* 															*/
/* 									var x = data.assessments;*/
/* 											*/
/* 									$.each( x, function( key, value ) {*/
/* 												key 	= value['key'];*/
/* 												event 	= value['event'];*/
/* 	*/
/* 									  $("#AS_"+key+"_evt").empty().append(event);*/
/* 																	*/
/* 									});					 												*/
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
