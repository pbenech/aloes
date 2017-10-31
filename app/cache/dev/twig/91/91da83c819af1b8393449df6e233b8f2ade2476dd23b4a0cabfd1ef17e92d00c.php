<?php

/* IfeAloesBundle:Event:edit.html.twig */
class __TwigTemplate_6a47996acbd161358c9e7c4e61ca587dabab358ed9293bb7d3c9bd9793a4a67d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("IfeAloesBundle:Course:layout.html.twig", "IfeAloesBundle:Event:edit.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "IfeAloesBundle:Course:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<div class='title-one'> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "title", array()), "html", null, true);
        echo " </div>
    <div class='title-two'> Edition d'un évènement   </div> 

\t";
        // line 7
        echo $this->env->getExtension('stfalcon_tinymce')->tinymceInit();
        echo "
 
 
 \t";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'stylesheet');
        echo "
    ";
        // line 11
        echo $this->env->getExtension('collot.twig.extension.form')->renderJavascript((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")));
        echo "
    

    ";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "    
 
\t<fieldset>
\t<div class='container-fluid'>\t
\t
    
\t\t<div class='row'>\t
\t\t\t<div class='col-md-2'> \t  \t  
\t\t    \t";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "title", array()), 'label');
        echo "
\t\t\t</div> \t  \t\t    \t
\t\t\t<div class='col-md-10'> \t  \t  
\t\t    \t";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "title", array()), 'widget');
        echo "
\t    \t\t";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "title", array()), 'errors');
        echo "\t  
\t\t\t</div> \t  \t
\t\t</div>     
   
\t\t<div class='row'>\t
\t\t\t<div class='col-md-2'> \t  \t  
\t\t    \t";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "startDate", array()), 'label');
        echo "
\t\t\t</div> \t  \t\t    \t
\t\t\t<div class='col-md-4'> \t  \t  
\t\t    \t";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "startDate", array()), 'widget');
        echo "
\t    \t\t";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "startDate", array()), 'errors');
        echo "\t  
\t\t\t</div> \t  \t
\t\t\t<div class='col-md-2'> \t  \t  
\t\t    \t";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "endDate", array()), 'label');
        echo "
\t\t\t</div> \t  \t\t    \t
\t\t\t<div class='col-md-4'> \t  \t  
\t\t    \t";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "endDate", array()), 'widget');
        echo "
\t    \t\t";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "endDate", array()), 'errors');
        echo "\t
\t\t\t</div> \t  \t
\t\t</div> 

\t\t<div class='row'>\t
\t\t\t<div class='col-md-2'> \t  \t  
\t\t    \t";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "description", array()), 'label');
        echo "
\t\t\t</div> \t  \t\t    \t
\t\t\t<div class='col-md-10'> \t  \t  
\t\t    \t";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "description", array()), 'widget');
        echo "
\t    \t\t";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "description", array()), 'errors');
        echo "\t\t\t    \t
\t\t\t</div> \t  \t
\t\t</div>     
\t\t
\t\t<div class='row'>\t
\t\t\t<div class='col-md-2'> \t  \t  
\t\t    \t";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "instructions", array()), 'label');
        echo "
\t\t\t</div> \t  \t\t    \t
\t\t\t<div class='col-md-10'> \t  \t  
\t\t    \t";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "instructions", array()), 'widget');
        echo "
\t    \t\t";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "instructions", array()), 'errors');
        echo "\t
\t\t\t</div> \t  \t
\t\t</div>  

\t\t<div class='row'>\t
\t\t\t<div class='col-md-2'> \t  \t  
\t\t    \t";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "tutoring", array()), 'label');
        echo "
\t\t\t</div> \t  \t\t    \t
\t\t\t<div class='col-md-10'> \t  \t  
\t\t    \t";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "tutoring", array()), 'widget');
        echo "
\t    \t\t";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "tutoring", array()), 'errors');
        echo "\t
\t\t\t</div> \t  \t
\t\t</div>  

\t\t<div class='row'>\t
\t\t\t<div class='col-md-2'> \t  \t  
\t\t    \t";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "resources", array()), 'label');
        echo "
\t\t\t</div> \t  \t\t    \t
\t\t\t<div class='col-md-10'> \t  \t  
\t\t    \t";
        // line 82
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "resources", array()), 'widget');
        echo "
\t    \t\t";
        // line 83
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "resources", array()), 'errors');
        echo "\t
\t\t\t</div> \t  \t
\t\t</div> \t
\t
\t\t<div class='row'>\t\t  \t\t    \t
\t\t\t<div class='col-md-12'>
\t\t\t\t<br/>
\t\t\t\t<b>Sélectionner travaux</b> \t  
\t\t\t</div>
\t\t\t<div class='col-md-5'> \t  \t  
\t\t    \t";
        // line 93
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "assessments", array()), 'widget');
        echo "
\t    \t\t";
        // line 94
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "assessments", array()), 'errors');
        echo "\t
\t\t\t</div> \t  \t
\t\t\t<div class='col-md-2'> \t  \t  

\t\t\t\t<input id=\"button1\" type=\"button\" value=\">\" /></input>
\t\t\t\t
\t\t\t\t<br/><br/>

\t\t\t\t<input id=\"button2\" type=\"button\" value=\"<\" />
\t\t\t\t
\t\t\t</div> \t  
\t\t\t<div class='col-md-5'> \t  \t  
\t\t    \t";
        // line 106
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "assessments_selected", array()), 'widget');
        echo "
\t    \t\t";
        // line 107
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "assessments_selected", array()), 'errors');
        echo "\t
\t\t\t    
\t\t\t</div> \t\t\t
\t\t\t
\t\t\t<script>
\t\t\t\$(function(){
\t\t\t    \$(\"#button1\").click(function(){
\t\t\t        \$(\"#aloes_event_assessments > option:selected\").each(function(){
\t\t\t            \$(this).remove().appendTo(\"#aloes_event_assessments_selected\");
\t\t\t        });
\t\t\t    });
\t\t\t    
\t\t\t    \$(\"#button2\").click(function(){\t\t\t    \t\t    \t
\t\t\t        \$(\"#aloes_event_assessments_selected > option:selected\").each(function(){
\t\t\t            \$(this).remove().appendTo(\"#aloes_event_assessments\");
\t\t\t        });
\t\t\t    });
\t\t\t});
\t\t\t</script>\t
\t\t</div> \t\t
\t

 
\t
\t\t<div class='row'>\t
\t\t\t\t<div class='col-md-3'> 
\t\t\t\t\t";
        // line 133
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "submit", array()), 'widget');
        echo " 
\t\t\t\t\t";
        // line 134
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "  
\t\t\t\t</div>
\t\t\t\t<div class='col-md-3'> 
\t\t\t\t\t";
        // line 137
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "
\t\t\t\t</div>
\t\t    \t<div class='col-md-6'>
\t\t    \t\t<a href=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_event", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
        echo "\"><span class=\"glyphicon glyphicon-arrow-left\"></span>Retour à la liste des évènements</a>
\t\t    \t</div>
\t\t</div>    
   </div>
   </fieldset>

<script>
\t\$( \"#aloes_event_submit\" ).click(function() {
\t\t\$('#aloes_event_assessments_selected option').each(function () {\t\t\t\t
\t\t\t\t\$(this).prop(\"selected\",true);
\t\t});\t\t\t\t\t\t\t 
\t \t\$( \"#aloes_event_submit\" ).submit();
\t});
</script>
      
    
";
    }

    public function getTemplateName()
    {
        return "IfeAloesBundle:Event:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  267 => 140,  261 => 137,  255 => 134,  251 => 133,  222 => 107,  218 => 106,  203 => 94,  199 => 93,  186 => 83,  182 => 82,  176 => 79,  167 => 73,  163 => 72,  157 => 69,  148 => 63,  144 => 62,  138 => 59,  129 => 53,  125 => 52,  119 => 49,  110 => 43,  106 => 42,  100 => 39,  94 => 36,  90 => 35,  84 => 32,  75 => 26,  71 => 25,  65 => 22,  54 => 14,  48 => 11,  44 => 10,  38 => 7,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'IfeAloesBundle:Course:layout.html.twig' %}*/
/* */
/* {% block content -%}*/
/*    	<div class='title-one'> {{ course.title }} </div>*/
/*     <div class='title-two'> Edition d'un évènement   </div> */
/* */
/* 	{{ tinymce_init() }}*/
/*  */
/*  */
/*  	{{ form_stylesheet(edit_form) }}*/
/*     {{ form_javascript(edit_form) }}*/
/*     */
/* */
/*     {{ form_start(edit_form) }}    */
/*  */
/* 	<fieldset>*/
/* 	<div class='container-fluid'>	*/
/* 	*/
/*     */
/* 		<div class='row'>	*/
/* 			<div class='col-md-2'> 	  	  */
/* 		    	{{ form_label(edit_form.title) }}*/
/* 			</div> 	  		    	*/
/* 			<div class='col-md-10'> 	  	  */
/* 		    	{{ form_widget(edit_form.title) }}*/
/* 	    		{{ form_errors(edit_form.title) }}	  */
/* 			</div> 	  	*/
/* 		</div>     */
/*    */
/* 		<div class='row'>	*/
/* 			<div class='col-md-2'> 	  	  */
/* 		    	{{ form_label(edit_form.startDate) }}*/
/* 			</div> 	  		    	*/
/* 			<div class='col-md-4'> 	  	  */
/* 		    	{{ form_widget(edit_form.startDate) }}*/
/* 	    		{{ form_errors(edit_form.startDate) }}	  */
/* 			</div> 	  	*/
/* 			<div class='col-md-2'> 	  	  */
/* 		    	{{ form_label(edit_form.endDate) }}*/
/* 			</div> 	  		    	*/
/* 			<div class='col-md-4'> 	  	  */
/* 		    	{{ form_widget(edit_form.endDate) }}*/
/* 	    		{{ form_errors(edit_form.endDate) }}	*/
/* 			</div> 	  	*/
/* 		</div> */
/* */
/* 		<div class='row'>	*/
/* 			<div class='col-md-2'> 	  	  */
/* 		    	{{ form_label(edit_form.description) }}*/
/* 			</div> 	  		    	*/
/* 			<div class='col-md-10'> 	  	  */
/* 		    	{{ form_widget(edit_form.description) }}*/
/* 	    		{{ form_errors(edit_form.description) }}			    	*/
/* 			</div> 	  	*/
/* 		</div>     */
/* 		*/
/* 		<div class='row'>	*/
/* 			<div class='col-md-2'> 	  	  */
/* 		    	{{ form_label(edit_form.instructions) }}*/
/* 			</div> 	  		    	*/
/* 			<div class='col-md-10'> 	  	  */
/* 		    	{{ form_widget(edit_form.instructions) }}*/
/* 	    		{{ form_errors(edit_form.instructions) }}	*/
/* 			</div> 	  	*/
/* 		</div>  */
/* */
/* 		<div class='row'>	*/
/* 			<div class='col-md-2'> 	  	  */
/* 		    	{{ form_label(edit_form.tutoring) }}*/
/* 			</div> 	  		    	*/
/* 			<div class='col-md-10'> 	  	  */
/* 		    	{{ form_widget(edit_form.tutoring) }}*/
/* 	    		{{ form_errors(edit_form.tutoring) }}	*/
/* 			</div> 	  	*/
/* 		</div>  */
/* */
/* 		<div class='row'>	*/
/* 			<div class='col-md-2'> 	  	  */
/* 		    	{{ form_label(edit_form.resources) }}*/
/* 			</div> 	  		    	*/
/* 			<div class='col-md-10'> 	  	  */
/* 		    	{{ form_widget(edit_form.resources) }}*/
/* 	    		{{ form_errors(edit_form.resources) }}	*/
/* 			</div> 	  	*/
/* 		</div> 	*/
/* 	*/
/* 		<div class='row'>		  		    	*/
/* 			<div class='col-md-12'>*/
/* 				<br/>*/
/* 				<b>Sélectionner travaux</b> 	  */
/* 			</div>*/
/* 			<div class='col-md-5'> 	  	  */
/* 		    	{{ form_widget(edit_form.assessments) }}*/
/* 	    		{{ form_errors(edit_form.assessments) }}	*/
/* 			</div> 	  	*/
/* 			<div class='col-md-2'> 	  	  */
/* */
/* 				<input id="button1" type="button" value=">" /></input>*/
/* 				*/
/* 				<br/><br/>*/
/* */
/* 				<input id="button2" type="button" value="<" />*/
/* 				*/
/* 			</div> 	  */
/* 			<div class='col-md-5'> 	  	  */
/* 		    	{{ form_widget(edit_form.assessments_selected) }}*/
/* 	    		{{ form_errors(edit_form.assessments_selected) }}	*/
/* 			    */
/* 			</div> 			*/
/* 			*/
/* 			<script>*/
/* 			$(function(){*/
/* 			    $("#button1").click(function(){*/
/* 			        $("#aloes_event_assessments > option:selected").each(function(){*/
/* 			            $(this).remove().appendTo("#aloes_event_assessments_selected");*/
/* 			        });*/
/* 			    });*/
/* 			    */
/* 			    $("#button2").click(function(){			    		    	*/
/* 			        $("#aloes_event_assessments_selected > option:selected").each(function(){*/
/* 			            $(this).remove().appendTo("#aloes_event_assessments");*/
/* 			        });*/
/* 			    });*/
/* 			});*/
/* 			</script>	*/
/* 		</div> 		*/
/* 	*/
/* */
/*  */
/* 	*/
/* 		<div class='row'>	*/
/* 				<div class='col-md-3'> */
/* 					{{ form_widget(edit_form.submit)}} */
/* 					{{ form_end(edit_form) }}  */
/* 				</div>*/
/* 				<div class='col-md-3'> */
/* 					{{ form(delete_form) }}*/
/* 				</div>*/
/* 		    	<div class='col-md-6'>*/
/* 		    		<a href="{{ path('course_event', {id:course.id}) }}"><span class="glyphicon glyphicon-arrow-left"></span>Retour à la liste des évènements</a>*/
/* 		    	</div>*/
/* 		</div>    */
/*    </div>*/
/*    </fieldset>*/
/* */
/* <script>*/
/* 	$( "#aloes_event_submit" ).click(function() {*/
/* 		$('#aloes_event_assessments_selected option').each(function () {				*/
/* 				$(this).prop("selected",true);*/
/* 		});							 */
/* 	 	$( "#aloes_event_submit" ).submit();*/
/* 	});*/
/* </script>*/
/*       */
/*     */
/* {% endblock %}*/
/* */
