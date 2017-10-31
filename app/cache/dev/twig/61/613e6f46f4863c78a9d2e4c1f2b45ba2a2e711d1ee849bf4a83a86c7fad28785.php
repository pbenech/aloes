<?php

/* IfeAloesBundle:Event:new.html.twig */
class __TwigTemplate_b7ffddbd76c5c8412c28a20540da6b530004ec7600a0da530b971e5ba108b5e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("IfeAloesBundle:Course:layout.html.twig", "IfeAloesBundle:Event:new.html.twig", 1);
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
    <div class='title-two'> Nouvel évènement   </div> 
       
\t";
        // line 7
        echo $this->env->getExtension('stfalcon_tinymce')->tinymceInit();
        echo "
 
 \t";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'stylesheet');
        echo "
    ";
        // line 10
        echo $this->env->getExtension('collot.twig.extension.form')->renderJavascript((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        echo "

    ";
        // line 12
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "    
 
\t<fieldset>
\t<div class='container-fluid'>\t 
    
\t\t<div class='row'>\t
\t\t\t<div class='col-md-2'> \t  \t  
\t\t    \t";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'label');
        echo "
\t\t\t</div> \t  \t\t    \t
\t\t\t<div class='col-md-10'> \t  \t  
\t\t    \t";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'widget');
        echo "
\t    \t\t";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'errors');
        echo "\t
\t\t\t</div> \t  \t
\t\t</div>     
   
\t\t<div class='row'>\t
\t\t\t<div class='col-md-2'> \t  \t  
\t\t    \t";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "startDate", array()), 'label');
        echo "
\t\t\t</div> \t  \t\t    \t
\t\t\t<div class='col-md-4'> \t  \t  
\t\t    \t";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "startDate", array()), 'widget');
        echo "
\t    \t\t";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "startDate", array()), 'errors');
        echo "\t
\t\t\t</div> \t  \t
\t\t\t<div class='col-md-2'> \t  \t  
\t\t    \t";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "endDate", array()), 'label');
        echo "
\t\t\t</div> \t  \t\t    \t
\t\t\t<div class='col-md-4'> \t  \t  
\t\t    \t";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "endDate", array()), 'widget');
        echo "
\t    \t\t";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "endDate", array()), 'errors');
        echo "\t
\t\t\t</div> \t  \t
\t\t</div> 

\t\t<div class='row'>\t
\t\t\t<div class='col-md-2'> \t  \t  
\t\t    \t";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'label');
        echo "
\t\t\t</div> \t  \t\t    \t
\t\t\t<div class='col-md-10'> \t  \t  
\t\t    \t";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'widget');
        echo "
\t    \t\t";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'errors');
        echo "\t
\t\t\t</div> \t  \t
\t\t</div>     
\t\t
\t\t<div class='row'>\t
\t\t\t<div class='col-md-2'> \t  \t  
\t\t    \t";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "instructions", array()), 'label');
        echo "
\t\t\t</div> \t  \t\t    \t
\t\t\t<div class='col-md-10'> \t  \t  
\t\t    \t";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "instructions", array()), 'widget');
        echo "
\t    \t\t";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "instructions", array()), 'errors');
        echo "\t
\t\t\t</div> \t  \t
\t\t</div>  

\t\t<div class='row'>\t
\t\t\t<div class='col-md-2'> \t  \t  
\t\t    \t";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tutoring", array()), 'label');
        echo "
\t\t\t</div> \t  \t\t    \t
\t\t\t<div class='col-md-10'> \t  \t  
\t\t    \t";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tutoring", array()), 'widget');
        echo "
\t    \t\t";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tutoring", array()), 'errors');
        echo "\t
\t\t\t</div> \t  \t
\t\t</div>  

\t\t<div class='row'>\t
\t\t\t<div class='col-md-2'> \t  \t  
\t\t    \t";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "resources", array()), 'label');
        echo "
\t\t\t</div> \t  \t\t    \t
\t\t\t<div class='col-md-10'> \t  \t  
\t\t    \t";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "resources", array()), 'widget');
        echo "
\t    \t\t";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "resources", array()), 'errors');
        echo "\t
\t\t\t</div> \t  \t
\t\t</div> 
\t\t
\t\t<div class='row'>\t\t  \t\t    \t
\t\t\t<div class='col-md-12'>
\t\t\t\t<br/>
\t\t\t\t<b>Sélectionner travaux</b> \t  
\t\t\t</div>
\t\t\t<div class='col-md-5'> \t  \t  
\t\t    \t";
        // line 90
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "assessments", array()), 'widget');
        echo "
\t    \t\t";
        // line 91
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "assessments", array()), 'errors');
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
        // line 103
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "assessments_selected", array()), 'widget');
        echo "
\t    \t\t";
        // line 104
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "assessments_selected", array()), 'errors');
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
\t\t</div> \t\t\t\t
\t\t
\t\t
\t 
\t \t";
        // line 127
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "
\t \t
\t\t<div class='row'>\t
\t\t\t\t<div class='col-md-3'> 
\t\t\t\t\t";
        // line 131
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit", array()), 'widget');
        echo " 
\t\t\t\t</div>
\t\t    \t<div class='col-md-6'>
\t\t    \t\t<a href=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_event", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
        echo "\"><span class=\"glyphicon glyphicon-arrow-left\"></span>  Retour à la liste des évènements</a>
\t\t    \t</div>
\t\t</div>   
   </div>
   </fieldset>



";
    }

    public function getTemplateName()
    {
        return "IfeAloesBundle:Event:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  258 => 134,  252 => 131,  245 => 127,  219 => 104,  215 => 103,  200 => 91,  196 => 90,  183 => 80,  179 => 79,  173 => 76,  164 => 70,  160 => 69,  154 => 66,  145 => 60,  141 => 59,  135 => 56,  126 => 50,  122 => 49,  116 => 46,  107 => 40,  103 => 39,  97 => 36,  91 => 33,  87 => 32,  81 => 29,  72 => 23,  68 => 22,  62 => 19,  52 => 12,  47 => 10,  43 => 9,  38 => 7,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'IfeAloesBundle:Course:layout.html.twig' %}*/
/* */
/* {% block content -%}*/
/*    	<div class='title-one'> {{ course.title }} </div>*/
/*     <div class='title-two'> Nouvel évènement   </div> */
/*        */
/* 	{{ tinymce_init() }}*/
/*  */
/*  	{{ form_stylesheet(form) }}*/
/*     {{ form_javascript(form) }}*/
/* */
/*     {{ form_start(form) }}    */
/*  */
/* 	<fieldset>*/
/* 	<div class='container-fluid'>	 */
/*     */
/* 		<div class='row'>	*/
/* 			<div class='col-md-2'> 	  	  */
/* 		    	{{ form_label(form.title) }}*/
/* 			</div> 	  		    	*/
/* 			<div class='col-md-10'> 	  	  */
/* 		    	{{ form_widget(form.title) }}*/
/* 	    		{{ form_errors(form.title) }}	*/
/* 			</div> 	  	*/
/* 		</div>     */
/*    */
/* 		<div class='row'>	*/
/* 			<div class='col-md-2'> 	  	  */
/* 		    	{{ form_label(form.startDate) }}*/
/* 			</div> 	  		    	*/
/* 			<div class='col-md-4'> 	  	  */
/* 		    	{{ form_widget(form.startDate) }}*/
/* 	    		{{ form_errors(form.startDate) }}	*/
/* 			</div> 	  	*/
/* 			<div class='col-md-2'> 	  	  */
/* 		    	{{ form_label(form.endDate) }}*/
/* 			</div> 	  		    	*/
/* 			<div class='col-md-4'> 	  	  */
/* 		    	{{ form_widget(form.endDate) }}*/
/* 	    		{{ form_errors(form.endDate) }}	*/
/* 			</div> 	  	*/
/* 		</div> */
/* */
/* 		<div class='row'>	*/
/* 			<div class='col-md-2'> 	  	  */
/* 		    	{{ form_label(form.description) }}*/
/* 			</div> 	  		    	*/
/* 			<div class='col-md-10'> 	  	  */
/* 		    	{{ form_widget(form.description) }}*/
/* 	    		{{ form_errors(form.description) }}	*/
/* 			</div> 	  	*/
/* 		</div>     */
/* 		*/
/* 		<div class='row'>	*/
/* 			<div class='col-md-2'> 	  	  */
/* 		    	{{ form_label(form.instructions) }}*/
/* 			</div> 	  		    	*/
/* 			<div class='col-md-10'> 	  	  */
/* 		    	{{ form_widget(form.instructions) }}*/
/* 	    		{{ form_errors(form.instructions) }}	*/
/* 			</div> 	  	*/
/* 		</div>  */
/* */
/* 		<div class='row'>	*/
/* 			<div class='col-md-2'> 	  	  */
/* 		    	{{ form_label(form.tutoring) }}*/
/* 			</div> 	  		    	*/
/* 			<div class='col-md-10'> 	  	  */
/* 		    	{{ form_widget(form.tutoring) }}*/
/* 	    		{{ form_errors(form.tutoring) }}	*/
/* 			</div> 	  	*/
/* 		</div>  */
/* */
/* 		<div class='row'>	*/
/* 			<div class='col-md-2'> 	  	  */
/* 		    	{{ form_label(form.resources) }}*/
/* 			</div> 	  		    	*/
/* 			<div class='col-md-10'> 	  	  */
/* 		    	{{ form_widget(form.resources) }}*/
/* 	    		{{ form_errors(form.resources) }}	*/
/* 			</div> 	  	*/
/* 		</div> */
/* 		*/
/* 		<div class='row'>		  		    	*/
/* 			<div class='col-md-12'>*/
/* 				<br/>*/
/* 				<b>Sélectionner travaux</b> 	  */
/* 			</div>*/
/* 			<div class='col-md-5'> 	  	  */
/* 		    	{{ form_widget(form.assessments) }}*/
/* 	    		{{ form_errors(form.assessments) }}	*/
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
/* 		    	{{ form_widget(form.assessments_selected) }}*/
/* 	    		{{ form_errors(form.assessments_selected) }}	*/
/* 			    */
/* 			</div> 			*/
/* 			 */
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
/* 		</div> 				*/
/* 		*/
/* 		*/
/* 	 */
/* 	 	{{ form_widget(form._token) }}*/
/* 	 	*/
/* 		<div class='row'>	*/
/* 				<div class='col-md-3'> */
/* 					{{ form_widget(form.submit)}} */
/* 				</div>*/
/* 		    	<div class='col-md-6'>*/
/* 		    		<a href="{{ path('course_event', {id:course.id}) }}"><span class="glyphicon glyphicon-arrow-left"></span>  Retour à la liste des évènements</a>*/
/* 		    	</div>*/
/* 		</div>   */
/*    </div>*/
/*    </fieldset>*/
/* */
/* */
/* */
/* {% endblock %}*/
/* */
