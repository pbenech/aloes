<?php

/* IfeAloesBundle:Program:edit.html.twig */
class __TwigTemplate_eaddd3fef5bd44a9ab7dc2afed4764af64de04a6669a71a91d5293263a3770eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("IfeAloesBundle:Program:layout.html.twig", "IfeAloesBundle:Program:edit.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "IfeAloesBundle:Program:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<div class='title-two1a col-md-12 col-sm-12'> 
    \t\tEdition 
\t   \t\t";
        // line 8
        if (($this->getAttribute((isset($context["program"]) ? $context["program"] : null), "level", array(), "any", true, true) && ($this->getAttribute((isset($context["program"]) ? $context["program"] : $this->getContext($context, "program")), "level", array()) != null))) {
            // line 9
            echo "\t\t\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["program"]) ? $context["program"] : $this->getContext($context, "program")), "level", array()), "html", null, true);
            echo " -
\t\t\t";
        }
        // line 11
        echo "\t\t\t";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["program"]) ? $context["program"] : $this->getContext($context, "program")), "title", array()), "html", null, true);
        echo " \t\t\t
\t</div>\t

\t";
        // line 14
        echo $this->env->getExtension('stfalcon_tinymce')->tinymceInit();
        echo " 

  \t";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "

\t<div class='col-sm-12 container-fluid block3'>\t
\t  \t  
\t<br/>  \t  
\t<div class='row'>\t
\t\t<div class='col-md-2'> \t  \t  
\t    \t";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "level", array()), 'label');
        echo "
\t\t</div> \t  \t\t    \t
\t\t<div class='col-md-10'> \t  \t  
\t    \t";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "level", array()), 'widget');
        echo "
\t    \t";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "level", array()), 'errors');
        echo "\t 
\t\t</div> \t  \t
\t</div>  \t  \t  
\t  \t  
\t  \t  
\t<div class='row'>\t
\t\t<div class='col-md-2'> \t  \t  
\t    \t";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "title", array()), 'label');
        echo "
\t\t</div> \t  \t\t    \t
\t\t<div class='col-md-10'> \t  \t  
\t    \t";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "title", array()), 'widget');
        echo "
\t    \t";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "title", array()), 'errors');
        echo "\t    \t
\t\t</div> \t  \t
\t</div>   
\t
\t<div class='row'>\t
\t\t<div class='col-md-2'> \t  \t  
\t    \t";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "label", array()), 'label');
        echo "
\t\t</div> \t  \t\t    \t
\t\t<div class='col-md-10'> \t  \t  
\t    \t";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "label", array()), 'widget');
        echo "
\t    \t";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "label", array()), 'errors');
        echo "\t 
\t\t</div> \t  \t
\t</div>  \t
\t 
  
\t<div class='row'>\t
\t\t<div class='col-md-2'> \t  \t  
\t    \t";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "url", array()), 'label');
        echo "
\t\t</div> \t  \t\t    \t
\t\t<div class='col-md-10'> \t  \t  
\t    \t";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "url", array()), 'widget');
        echo "
\t    \t";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "url", array()), 'errors');
        echo "
\t\t</div> \t  \t
\t</div>  \t


 \t
\t<div class='row'>\t
\t\t<div class='col-md-12'> \t  \t  
\t    \t";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "description", array()), 'label');
        echo "
\t\t</div> \t  \t\t    \t
\t\t<div class='col-md-12'> \t  \t  
\t    \t";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "description", array()), 'widget');
        echo "
\t    \t";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "description", array()), 'errors');
        echo "\t
\t\t</div> \t  \t
\t</div>  
 
    
\t<div class='row'>\t
\t\t\t<div class='col-md-3'> 
\t\t\t\t";
        // line 78
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "submit", array()), 'widget');
        echo " 
\t\t\t</div>
\t    \t<div class='col-md-6'>
\t    \t\t";
        // line 81
        if ((array_key_exists("from", $context) && ((isset($context["from"]) ? $context["from"] : $this->getContext($context, "from")) == "list"))) {
            // line 82
            echo "\t    \t\t\t<a href=\"";
            echo $this->env->getExtension('routing')->getPath("programs");
            echo "\"><span class=\"glyphicon glyphicon-arrow-left\"></span> Retour à la liste des programmes</a>
\t\t\t\t";
        } else {
            // line 84
            echo "\t\t\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("programs_show", array("id" => $this->getAttribute((isset($context["program"]) ? $context["program"] : $this->getContext($context, "program")), "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-arrow-left\"></span> Retour présentation programme</a>
\t\t\t\t";
        }
        // line 85
        echo "\t\t\t\t
\t    \t</div> 
\t</div>

\t</div>

\t";
        // line 91
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

";
    }

    public function getTemplateName()
    {
        return "IfeAloesBundle:Program:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 91,  185 => 85,  179 => 84,  173 => 82,  171 => 81,  165 => 78,  155 => 71,  151 => 70,  145 => 67,  134 => 59,  130 => 58,  124 => 55,  114 => 48,  110 => 47,  104 => 44,  95 => 38,  91 => 37,  85 => 34,  75 => 27,  71 => 26,  65 => 23,  55 => 16,  50 => 14,  43 => 11,  37 => 9,  35 => 8,  31 => 6,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'IfeAloesBundle:Program:layout.html.twig' %}*/
/* */
/* {% block content -%}*/
/*  */
/*   	*/
/*     <div class='title-two1a col-md-12 col-sm-12'> */
/*     		Edition */
/* 	   		{% if program.level is defined and program.level !=null %}*/
/* 				{{ program.level }} -*/
/* 			{% endif %}*/
/* 			{{ program.title }} 			*/
/* 	</div>	*/
/* */
/* 	{{ tinymce_init() }} */
/* */
/*   	{{ form_start(edit_form) }}*/
/* */
/* 	<div class='col-sm-12 container-fluid block3'>	*/
/* 	  	  */
/* 	<br/>  	  */
/* 	<div class='row'>	*/
/* 		<div class='col-md-2'> 	  	  */
/* 	    	{{ form_label(edit_form.level) }}*/
/* 		</div> 	  		    	*/
/* 		<div class='col-md-10'> 	  	  */
/* 	    	{{ form_widget(edit_form.level) }}*/
/* 	    	{{ form_errors(edit_form.level) }}	 */
/* 		</div> 	  	*/
/* 	</div>  	  	  */
/* 	  	  */
/* 	  	  */
/* 	<div class='row'>	*/
/* 		<div class='col-md-2'> 	  	  */
/* 	    	{{ form_label(edit_form.title) }}*/
/* 		</div> 	  		    	*/
/* 		<div class='col-md-10'> 	  	  */
/* 	    	{{ form_widget(edit_form.title) }}*/
/* 	    	{{ form_errors(edit_form.title) }}	    	*/
/* 		</div> 	  	*/
/* 	</div>   */
/* 	*/
/* 	<div class='row'>	*/
/* 		<div class='col-md-2'> 	  	  */
/* 	    	{{ form_label(edit_form.label) }}*/
/* 		</div> 	  		    	*/
/* 		<div class='col-md-10'> 	  	  */
/* 	    	{{ form_widget(edit_form.label) }}*/
/* 	    	{{ form_errors(edit_form.label) }}	 */
/* 		</div> 	  	*/
/* 	</div>  	*/
/* 	 */
/*   */
/* 	<div class='row'>	*/
/* 		<div class='col-md-2'> 	  	  */
/* 	    	{{ form_label(edit_form.url) }}*/
/* 		</div> 	  		    	*/
/* 		<div class='col-md-10'> 	  	  */
/* 	    	{{ form_widget(edit_form.url) }}*/
/* 	    	{{ form_errors(edit_form.url) }}*/
/* 		</div> 	  	*/
/* 	</div>  	*/
/* */
/* */
/*  	*/
/* 	<div class='row'>	*/
/* 		<div class='col-md-12'> 	  	  */
/* 	    	{{ form_label(edit_form.description) }}*/
/* 		</div> 	  		    	*/
/* 		<div class='col-md-12'> 	  	  */
/* 	    	{{ form_widget(edit_form.description) }}*/
/* 	    	{{ form_errors(edit_form.description) }}	*/
/* 		</div> 	  	*/
/* 	</div>  */
/*  */
/*     */
/* 	<div class='row'>	*/
/* 			<div class='col-md-3'> */
/* 				{{ form_widget(edit_form.submit)}} */
/* 			</div>*/
/* 	    	<div class='col-md-6'>*/
/* 	    		{% if from is defined and from=='list' %}*/
/* 	    			<a href="{{path('programs')}}"><span class="glyphicon glyphicon-arrow-left"></span> Retour à la liste des programmes</a>*/
/* 				{% else %}*/
/* 					<a href="{{ path('programs_show', {id:program.id}) }}"><span class="glyphicon glyphicon-arrow-left"></span> Retour présentation programme</a>*/
/* 				{% endif %}				*/
/* 	    	</div> */
/* 	</div>*/
/* */
/* 	</div>*/
/* */
/* 	{{ form_end(edit_form) }}*/
/* */
/* {% endblock %}*/
/* */
