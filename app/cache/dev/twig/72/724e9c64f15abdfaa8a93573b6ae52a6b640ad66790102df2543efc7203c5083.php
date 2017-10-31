<?php

/* IfeAloesBundle:Course:infos_edit.html.twig */
class __TwigTemplate_a58642eb8a9d34c63e5b930ca56d94c92a62228e2a8f4fcc33fca1becf8bfb73 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("IfeAloesBundle:Course:layout.html.twig", "IfeAloesBundle:Course:infos_edit.html.twig", 1);
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

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<div class='title-two1a col-md-12 col-sm-12'> 
\t\t\tEdition informations du cours
\t\t</div>

\t

\t";
        // line 12
        echo $this->env->getExtension('stfalcon_tinymce')->tinymceInit();
        echo "
\t
    ";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "\t
\t
\t<div class='col-sm-12 container-fluid block3'>\t
\t  \t  
\t\t<div class='row'>\t
\t\t\t<div class='col-md-12'> \t  \t  
\t\t    \t";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "description", array()), 'label');
        echo "
\t\t\t</div> \t  \t\t    \t
\t\t\t<div class='col-md-12'> \t  \t  
\t\t    \t";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "description", array()), 'widget');
        echo "
\t \t   \t \t";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "description", array()), 'errors');
        echo "
\t\t\t</div> \t  \t
\t\t</div>  

\t\t<div class='row'>\t
\t\t\t<div class='col-md-12'> \t  \t  
\t\t    \t";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "pedagogy", array()), 'label');
        echo "
\t\t\t</div> \t  \t\t    \t
\t\t\t<div class='col-md-12'> \t  \t  
\t\t    \t";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "pedagogy", array()), 'widget');
        echo "
\t \t   \t \t";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "pedagogy", array()), 'errors');
        echo "
\t\t\t</div> \t  \t
\t\t</div>  
\t\t
\t\t<div class='row'>\t
\t\t\t<div class='col-md-12'> \t  \t  
\t\t    \t";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "evaluation", array()), 'label');
        echo "
\t\t\t</div> \t  \t\t    \t
\t\t\t<div class='col-md-12'> \t  \t  
\t\t    \t";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "evaluation", array()), 'widget');
        echo "
\t \t   \t \t";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "evaluation", array()), 'errors');
        echo "
\t\t\t</div> \t  \t
\t\t</div> \t\t

\t\t<div class='row'>\t
\t\t\t<div class='col-md-12'> \t  \t  
\t\t    \t";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "resources", array()), 'label');
        echo "
\t\t\t</div> \t  \t\t    \t
\t\t\t<div class='col-md-12'> \t  \t  
\t\t    \t";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "resources", array()), 'widget');
        echo "
\t \t   \t \t";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "resources", array()), 'errors');
        echo "
\t\t\t</div> \t  \t
\t\t</div>  

\t\t<div class='row'>\t
\t\t\t<div class='col-md-12'> \t  \t  
\t\t    \t";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "rules", array()), 'label');
        echo "
\t\t\t</div> \t  \t\t    \t
\t\t\t<div class='col-md-12'> \t  \t  
\t\t    \t";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "rules", array()), 'widget');
        echo "
\t \t   \t \t";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "rules", array()), 'errors');
        echo "
\t\t\t</div> \t  \t
\t\t</div> 


\t\t<div class='row'>\t
\t\t\t<div class='col-md-12'> \t  \t  
\t\t    \t";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "infos", array()), 'label');
        echo "
\t\t\t</div> \t  \t\t    \t
\t\t\t<div class='col-md-12'> \t  \t  
\t\t    \t";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "infos", array()), 'widget');
        echo "
\t \t   \t \t";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "infos", array()), 'errors');
        echo "
\t\t\t</div> \t  \t
\t\t</div> 



\t\t
\t";
        // line 82
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "_token", array()), 'widget');
        echo "
\t  
\t<div class='row'>\t
\t\t\t<div class='col-md-3'> 
\t\t\t\t";
        // line 86
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "submit", array()), 'widget');
        echo " 
\t\t\t</div>
\t    \t<div class='col-md-6'>
\t    \t\t<a href=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_infos_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
        echo "\"><span class=\"glyphicon glyphicon-arrow-left\"></span>  Retour informations</a> 
\t    \t</div>
\t</div>\t

\t
\t</div>\t

";
    }

    public function getTemplateName()
    {
        return "IfeAloesBundle:Course:infos_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 89,  176 => 86,  169 => 82,  159 => 75,  155 => 74,  149 => 71,  139 => 64,  135 => 63,  129 => 60,  120 => 54,  116 => 53,  110 => 50,  101 => 44,  97 => 43,  91 => 40,  82 => 34,  78 => 33,  72 => 30,  63 => 24,  59 => 23,  53 => 20,  44 => 14,  39 => 12,  31 => 6,  28 => 4,  11 => 1,);
    }
}
/* {% extends 'IfeAloesBundle:Course:layout.html.twig' %}*/
/* */
/* */
/* {% block content -%}*/
/*  */
/*     	<div class='title-two1a col-md-12 col-sm-12'> */
/* 			Edition informations du cours*/
/* 		</div>*/
/* */
/* 	*/
/* */
/* 	{{ tinymce_init() }}*/
/* 	*/
/*     {{ form_start(edit_form) }}	*/
/* 	*/
/* 	<div class='col-sm-12 container-fluid block3'>	*/
/* 	  	  */
/* 		<div class='row'>	*/
/* 			<div class='col-md-12'> 	  	  */
/* 		    	{{ form_label(edit_form.description) }}*/
/* 			</div> 	  		    	*/
/* 			<div class='col-md-12'> 	  	  */
/* 		    	{{ form_widget(edit_form.description) }}*/
/* 	 	   	 	{{ form_errors(edit_form.description) }}*/
/* 			</div> 	  	*/
/* 		</div>  */
/* */
/* 		<div class='row'>	*/
/* 			<div class='col-md-12'> 	  	  */
/* 		    	{{ form_label(edit_form.pedagogy) }}*/
/* 			</div> 	  		    	*/
/* 			<div class='col-md-12'> 	  	  */
/* 		    	{{ form_widget(edit_form.pedagogy) }}*/
/* 	 	   	 	{{ form_errors(edit_form.pedagogy) }}*/
/* 			</div> 	  	*/
/* 		</div>  */
/* 		*/
/* 		<div class='row'>	*/
/* 			<div class='col-md-12'> 	  	  */
/* 		    	{{ form_label(edit_form.evaluation) }}*/
/* 			</div> 	  		    	*/
/* 			<div class='col-md-12'> 	  	  */
/* 		    	{{ form_widget(edit_form.evaluation) }}*/
/* 	 	   	 	{{ form_errors(edit_form.evaluation) }}*/
/* 			</div> 	  	*/
/* 		</div> 		*/
/* */
/* 		<div class='row'>	*/
/* 			<div class='col-md-12'> 	  	  */
/* 		    	{{ form_label(edit_form.resources) }}*/
/* 			</div> 	  		    	*/
/* 			<div class='col-md-12'> 	  	  */
/* 		    	{{ form_widget(edit_form.resources) }}*/
/* 	 	   	 	{{ form_errors(edit_form.resources) }}*/
/* 			</div> 	  	*/
/* 		</div>  */
/* */
/* 		<div class='row'>	*/
/* 			<div class='col-md-12'> 	  	  */
/* 		    	{{ form_label(edit_form.rules) }}*/
/* 			</div> 	  		    	*/
/* 			<div class='col-md-12'> 	  	  */
/* 		    	{{ form_widget(edit_form.rules) }}*/
/* 	 	   	 	{{ form_errors(edit_form.rules) }}*/
/* 			</div> 	  	*/
/* 		</div> */
/* */
/* */
/* 		<div class='row'>	*/
/* 			<div class='col-md-12'> 	  	  */
/* 		    	{{ form_label(edit_form.infos) }}*/
/* 			</div> 	  		    	*/
/* 			<div class='col-md-12'> 	  	  */
/* 		    	{{ form_widget(edit_form.infos) }}*/
/* 	 	   	 	{{ form_errors(edit_form.infos) }}*/
/* 			</div> 	  	*/
/* 		</div> */
/* */
/* */
/* */
/* 		*/
/* 	{{ form_widget(edit_form._token) }}*/
/* 	  */
/* 	<div class='row'>	*/
/* 			<div class='col-md-3'> */
/* 				{{ form_widget(edit_form.submit)}} */
/* 			</div>*/
/* 	    	<div class='col-md-6'>*/
/* 	    		<a href="{{path('course_infos_show', {id:course.id})}}"><span class="glyphicon glyphicon-arrow-left"></span>  Retour informations</a> */
/* 	    	</div>*/
/* 	</div>	*/
/* */
/* 	*/
/* 	</div>	*/
/* */
/* {% endblock %}*/
/* */
