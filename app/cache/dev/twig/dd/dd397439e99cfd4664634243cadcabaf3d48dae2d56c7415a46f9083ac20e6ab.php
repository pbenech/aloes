<?php

/* IfeAloesBundle:Program:new.html.twig */
class __TwigTemplate_2ba3992696aaaec97337be348d53fa4bab926af427d50fca91f91615e36aed14 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("IfeAloesBundle:Aloes:layout.html.twig", "IfeAloesBundle:Program:new.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "IfeAloesBundle:Aloes:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<div class='title-two1a  col-md-12 col-sm-12'> 
    \t\tCréation programme\t\t\t
\t</div>

\t";
        // line 10
        echo $this->env->getExtension('stfalcon_tinymce')->tinymceInit();
        echo " 

    ";
        // line 12
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    
    <br/>

\t<div class='col-sm-12 container-fluid block3'>\t 
    
\t<div class='row'>\t
\t\t<div class='col-md-2'> \t  \t  
\t    \t";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "level", array()), 'label');
        echo "
\t\t</div> \t  \t\t    \t
\t\t<div class='col-md-10'> \t  \t  
\t    \t";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "level", array()), 'widget');
        echo "
\t    \t";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "level", array()), 'errors');
        echo "\t 
\t\t</div> \t  \t
\t</div>      
    
    
\t<div class='row'>\t
\t\t<div class='col-md-2'> \t  \t  
\t    \t";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'label');
        echo "
\t\t</div> \t  \t\t    \t
\t\t<div class='col-md-10'> \t  \t  
\t    \t";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'widget');
        echo "
\t    \t";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'errors');
        echo "\t
\t\t</div> \t  \t
\t</div>   
\t    
\t<div class='row'>\t
\t\t<div class='col-md-2'> \t  \t  
\t    \t";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "label", array()), 'label');
        echo "
\t\t</div> \t  \t\t    \t
\t\t<div class='col-md-10'> \t  \t  
\t    \t";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "label", array()), 'widget');
        echo "
\t    \t";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "label", array()), 'errors');
        echo "
\t\t</div> \t  \t
\t</div>  \t
\t
  
\t<div class='row'>\t
\t\t<div class='col-md-2'> \t  \t  
\t    \t";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "url", array()), 'label');
        echo "
\t\t</div> \t  \t\t    \t
\t\t<div class='col-md-10'> \t  \t  
\t    \t";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "url", array()), 'widget');
        echo "
\t    \t";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "url", array()), 'errors');
        echo "
\t\t</div> \t  \t
\t</div>  \t


 \t
\t<div class='row'>\t
\t\t<div class='col-md-12'> \t  \t  
\t    \t";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'label');
        echo "
\t\t</div> \t  \t\t    \t
\t\t<div class='col-md-12'> \t  \t  
\t    \t";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'widget');
        echo "
\t    \t";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'errors');
        echo "\t
\t\t</div> \t  \t
\t</div> \t
\t
\t  \t 
\t";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "
\t  \t 
\t<div class='row'>\t
\t\t\t<div class='col-md-3'> 
\t\t\t\t";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit", array()), 'widget');
        echo " 
\t\t\t</div>
\t    \t<div class='col-md-6'>
\t    \t\t<a href=\"";
        // line 80
        echo $this->env->getExtension('routing')->getPath("programs");
        echo "\"><span class=\"glyphicon glyphicon-arrow-left\"></span> Retour à la liste des programmes</a>
\t    \t</div>
\t</div>
\t
\t</div> 


";
    }

    public function getTemplateName()
    {
        return "IfeAloesBundle:Program:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 80,  158 => 77,  151 => 73,  143 => 68,  139 => 67,  133 => 64,  122 => 56,  118 => 55,  112 => 52,  102 => 45,  98 => 44,  92 => 41,  83 => 35,  79 => 34,  73 => 31,  63 => 24,  59 => 23,  53 => 20,  42 => 12,  37 => 10,  31 => 6,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'IfeAloesBundle:Aloes:layout.html.twig' %}*/
/* */
/* {% block content -%}*/
/* */
/*  	*/
/*     <div class='title-two1a  col-md-12 col-sm-12'> */
/*     		Création programme			*/
/* 	</div>*/
/* */
/* 	{{ tinymce_init() }} */
/* */
/*     {{ form_start(form) }}*/
/*     */
/*     <br/>*/
/* */
/* 	<div class='col-sm-12 container-fluid block3'>	 */
/*     */
/* 	<div class='row'>	*/
/* 		<div class='col-md-2'> 	  	  */
/* 	    	{{ form_label(form.level) }}*/
/* 		</div> 	  		    	*/
/* 		<div class='col-md-10'> 	  	  */
/* 	    	{{ form_widget(form.level) }}*/
/* 	    	{{ form_errors(form.level) }}	 */
/* 		</div> 	  	*/
/* 	</div>      */
/*     */
/*     */
/* 	<div class='row'>	*/
/* 		<div class='col-md-2'> 	  	  */
/* 	    	{{ form_label(form.title) }}*/
/* 		</div> 	  		    	*/
/* 		<div class='col-md-10'> 	  	  */
/* 	    	{{ form_widget(form.title) }}*/
/* 	    	{{ form_errors(form.title) }}	*/
/* 		</div> 	  	*/
/* 	</div>   */
/* 	    */
/* 	<div class='row'>	*/
/* 		<div class='col-md-2'> 	  	  */
/* 	    	{{ form_label(form.label) }}*/
/* 		</div> 	  		    	*/
/* 		<div class='col-md-10'> 	  	  */
/* 	    	{{ form_widget(form.label) }}*/
/* 	    	{{ form_errors(form.label) }}*/
/* 		</div> 	  	*/
/* 	</div>  	*/
/* 	*/
/*   */
/* 	<div class='row'>	*/
/* 		<div class='col-md-2'> 	  	  */
/* 	    	{{ form_label(form.url) }}*/
/* 		</div> 	  		    	*/
/* 		<div class='col-md-10'> 	  	  */
/* 	    	{{ form_widget(form.url) }}*/
/* 	    	{{ form_errors(form.url) }}*/
/* 		</div> 	  	*/
/* 	</div>  	*/
/* */
/* */
/*  	*/
/* 	<div class='row'>	*/
/* 		<div class='col-md-12'> 	  	  */
/* 	    	{{ form_label(form.description) }}*/
/* 		</div> 	  		    	*/
/* 		<div class='col-md-12'> 	  	  */
/* 	    	{{ form_widget(form.description) }}*/
/* 	    	{{ form_errors(form.description) }}	*/
/* 		</div> 	  	*/
/* 	</div> 	*/
/* 	*/
/* 	  	 */
/* 	{{ form_widget(form._token) }}*/
/* 	  	 */
/* 	<div class='row'>	*/
/* 			<div class='col-md-3'> */
/* 				{{ form_widget(form.submit)}} */
/* 			</div>*/
/* 	    	<div class='col-md-6'>*/
/* 	    		<a href="{{ path('programs') }}"><span class="glyphicon glyphicon-arrow-left"></span> Retour à la liste des programmes</a>*/
/* 	    	</div>*/
/* 	</div>*/
/* 	*/
/* 	</div> */
/* */
/* */
/* {% endblock %}*/
/* */
