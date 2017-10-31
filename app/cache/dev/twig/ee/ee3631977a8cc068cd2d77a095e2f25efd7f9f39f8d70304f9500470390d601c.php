<?php

/* IfeAloesBundle:Topic2:form1.html.twig */
class __TwigTemplate_e5c8058aba93ebfb561fda18220a42c77c144655bb7d613bb931573a4f0160c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("IfeAloesBundle:Course:layout.html.twig", "IfeAloesBundle:Topic2:form1.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'scripts' => array($this, 'block_scripts'),
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
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
  
\t<link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ifealoes/fullcalendar/css/fullcalendar.min.css"), "html", null, true);
        echo "\" rel='stylesheet' />
\t<!--
\t<link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ifealoes/fullcalendar/css/fullcalendar.print.css"), "html", null, true);
        echo "\" rel='stylesheet' media='print' />         
\t-->
\t  
\t<style>      
\t\t#calendar { 
\t\t\tmax-width: 50%;
\t\t\tmargin: 0 auto;
\t\t}\t  
\t\t.fc-event {
\t\t    font-size: 0.4em;
\t\t    font-weight: normal;
\t\t    line-height: 0.3;
\t\t}

\t</style>
\t \t        
";
    }

    // line 26
    public function block_scripts($context, array $blocks = array())
    {
        // line 27
        echo "\t";
        $this->displayParentBlock("scripts", $context, $blocks);
        echo "
\t<!--
\t<script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ifealoes/fullcalendar/js/moment.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ifealoes/fullcalendar/js/fullcalendar.min.js"), "html", null, true);
        echo "\"></script>\t 
\t-->

\t<script type='text/javascript'>
\t  \$(document).ready(function() { 
\t    \$('#next').click(function() {
 \t\t
\t \t\tvar data = \$('#form').serialize()
 \t\t
\t\t    \$.ajax({
\t\t        url: '";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_topic22_create", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
        echo "',
\t\t        type: 'POST',
\t\t        //dataType   : 'json',\t        
\t\t        data: data,
\t\t        cache: false,
\t\t        success: function (response) {
\t\t        \t\$(\"#formulaire\").empty().append(response); \t
\t\t        } 
\t
\t\t    });
\t\t    
\t\t\treturn false;
\t
\t    });
\t  });
\t </script> 

";
    }

    // line 61
    public function block_content($context, array $blocks = array())
    {
        // line 63
        echo "<div id=\"formulaire\">

\t<span class=\"label label-primary\">1. Général</span>
\t<span class=\"label label-default\">2. Propositions dates</span>
\t<span class=\"label label-default\">3. Titres</span>
\t<br/>
\t
\t<form class=\"form-inline\" id=\"form\" action=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_topic22_create", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
        echo "\" method=\"post\">\t
\t\t\t<fieldset>\t

\t\t\t\t<div class='col-sm-12'> \t  \t  \t  \t  
\t\t\t    \t";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "isFaceToFace", array()), 'widget');
        echo "
\t\t\t \t    ";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "isFaceToFace", array()), 'errors');
        echo "\t
\t\t\t\t</div> 

\t\t\t\t<div class='col-sm-2'> \t  \t  
\t\t\t    \t";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lieu", array()), 'label');
        echo "
\t\t\t\t</div> \t  \t\t    \t
\t\t\t\t<div class='col-sm-10'> \t  \t  
\t\t\t    \t";
        // line 82
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lieu", array()), 'widget');
        echo "
\t\t\t \t    ";
        // line 83
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lieu", array()), 'errors');
        echo "\t
\t\t\t\t</div> \t

\t\t\t\t<div class='col-sm-2'> \t  \t  
\t\t\t    \t";
        // line 87
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hdeb", array()), 'label');
        echo "
\t\t\t\t</div> \t  \t\t    \t
\t\t\t\t<div class='col-sm-3'> \t  \t  
\t\t\t    \t";
        // line 90
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hdeb", array()), 'widget');
        echo "
\t\t\t \t    ";
        // line 91
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hdeb", array()), 'errors');
        echo "\t
\t\t\t\t</div> \t

\t\t\t\t<div class='col-sm-1'> \t  \t  
\t\t\t    \tà
\t\t\t\t</div> \t  \t\t    \t 
\t\t\t\t<div class='col-sm-4'> \t  \t  
\t\t\t    \t";
        // line 98
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hfin", array()), 'widget');
        echo "
\t\t\t \t    ";
        // line 99
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hfin", array()), 'errors');
        echo "\t
\t\t\t\t</div> \t
\t\t\t\t\t\t\t\t
\t\t\t\t";
        // line 102
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "\t\t\t\t
  \t\t\t 
\t\t\t\t<div class='col-sm-12'> \t
\t\t\t\t\t<hr/>
\t\t\t\t\t<button type=\"submit\"  class=\"btn btn-success btn\"  id=\"next\">Suivant</button>  

\t\t\t\t\t<a class=\"btn btn-primary\" type=\"button\" href=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_assessment2", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
        echo "\">Annuler</a>
\t\t\t\t</div>\t\t \t
\t\t\t\t
\t\t\t</fieldset>\t
\t</form>\t

\t 
</div>\t

";
    }

    public function getTemplateName()
    {
        return "IfeAloesBundle:Topic2:form1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 108,  190 => 102,  184 => 99,  180 => 98,  170 => 91,  166 => 90,  160 => 87,  153 => 83,  149 => 82,  143 => 79,  136 => 75,  132 => 74,  125 => 70,  116 => 63,  113 => 61,  91 => 40,  78 => 30,  74 => 29,  68 => 27,  65 => 26,  44 => 8,  39 => 6,  33 => 4,  30 => 3,  11 => 1,);
    }
}
/* {% extends 'IfeAloesBundle:Course:layout.html.twig' %}*/
/* */
/* {% block stylesheets %}*/
/* 	{{ parent() }}*/
/*   */
/* 	<link href="{{asset('bundles/ifealoes/fullcalendar/css/fullcalendar.min.css')}}" rel='stylesheet' />*/
/* 	<!--*/
/* 	<link href="{{asset('bundles/ifealoes/fullcalendar/css/fullcalendar.print.css')}}" rel='stylesheet' media='print' />         */
/* 	-->*/
/* 	  */
/* 	<style>      */
/* 		#calendar { */
/* 			max-width: 50%;*/
/* 			margin: 0 auto;*/
/* 		}	  */
/* 		.fc-event {*/
/* 		    font-size: 0.4em;*/
/* 		    font-weight: normal;*/
/* 		    line-height: 0.3;*/
/* 		}*/
/* */
/* 	</style>*/
/* 	 	        */
/* {% endblock %}*/
/*         */
/* {% block scripts %}*/
/* 	{{ parent() }}*/
/* 	<!--*/
/* 	<script src="{{asset('bundles/ifealoes/fullcalendar/js/moment.min.js')}}"></script>*/
/* 	<script src="{{asset('bundles/ifealoes/fullcalendar/js/fullcalendar.min.js')}}"></script>	 */
/* 	-->*/
/* */
/* 	<script type='text/javascript'>*/
/* 	  $(document).ready(function() { */
/* 	    $('#next').click(function() {*/
/*  		*/
/* 	 		var data = $('#form').serialize()*/
/*  		*/
/* 		    $.ajax({*/
/* 		        url: '{{ path('course_topic22_create',{id:course.id}) }}',*/
/* 		        type: 'POST',*/
/* 		        //dataType   : 'json',	        */
/* 		        data: data,*/
/* 		        cache: false,*/
/* 		        success: function (response) {*/
/* 		        	$("#formulaire").empty().append(response); 	*/
/* 		        } */
/* 	*/
/* 		    });*/
/* 		    */
/* 			return false;*/
/* 	*/
/* 	    });*/
/* 	  });*/
/* 	 </script> */
/* */
/* {% endblock %}*/
/*         */
/*  */
/* */
/* {% block content -%}*/
/*  */
/* <div id="formulaire">*/
/* */
/* 	<span class="label label-primary">1. Général</span>*/
/* 	<span class="label label-default">2. Propositions dates</span>*/
/* 	<span class="label label-default">3. Titres</span>*/
/* 	<br/>*/
/* 	*/
/* 	<form class="form-inline" id="form" action="{{ path('course_topic22_create',{id:course.id}) }}" method="post">	*/
/* 			<fieldset>	*/
/* */
/* 				<div class='col-sm-12'> 	  	  	  	  */
/* 			    	{{ form_widget(form.isFaceToFace) }}*/
/* 			 	    {{ form_errors(form.isFaceToFace) }}	*/
/* 				</div> */
/* */
/* 				<div class='col-sm-2'> 	  	  */
/* 			    	{{ form_label(form.lieu) }}*/
/* 				</div> 	  		    	*/
/* 				<div class='col-sm-10'> 	  	  */
/* 			    	{{ form_widget(form.lieu) }}*/
/* 			 	    {{ form_errors(form.lieu) }}	*/
/* 				</div> 	*/
/* */
/* 				<div class='col-sm-2'> 	  	  */
/* 			    	{{ form_label(form.hdeb) }}*/
/* 				</div> 	  		    	*/
/* 				<div class='col-sm-3'> 	  	  */
/* 			    	{{ form_widget(form.hdeb) }}*/
/* 			 	    {{ form_errors(form.hdeb) }}	*/
/* 				</div> 	*/
/* */
/* 				<div class='col-sm-1'> 	  	  */
/* 			    	à*/
/* 				</div> 	  		    	 */
/* 				<div class='col-sm-4'> 	  	  */
/* 			    	{{ form_widget(form.hfin) }}*/
/* 			 	    {{ form_errors(form.hfin) }}	*/
/* 				</div> 	*/
/* 								*/
/* 				{{ form_rest(form) }}				*/
/*   			 */
/* 				<div class='col-sm-12'> 	*/
/* 					<hr/>*/
/* 					<button type="submit"  class="btn btn-success btn"  id="next">Suivant</button>  */
/* */
/* 					<a class="btn btn-primary" type="button" href="{{path('course_assessment2', {id:course.id })}}">Annuler</a>*/
/* 				</div>		 	*/
/* 				*/
/* 			</fieldset>	*/
/* 	</form>	*/
/* */
/* 	 */
/* </div>	*/
/* */
/* {% endblock %}*/
/* */
/* */
