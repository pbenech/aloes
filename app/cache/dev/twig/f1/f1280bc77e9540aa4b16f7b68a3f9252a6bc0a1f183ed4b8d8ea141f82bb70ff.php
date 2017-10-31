<?php

/* IfeAloesBundle:Parcours:edit.html.twig */
class __TwigTemplate_5d1c997331f9784c18be527b2e4a03dd5cca117961af5fef9acc0e43f566b0e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("IfeAloesBundle:Program:layout.html.twig", "IfeAloesBundle:Parcours:edit.html.twig", 1);
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
\t\t\tEdition parcours
\t</div>

\t";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
\t

\t<div class='col-sm-12 container-fluid block3'>
\t<br/>    
\t
\t\t\t
\t<div class='col-sm-12'>\t
\t\t<div class='col-md-2'> \t  \t  
\t\t\t    \t";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "title", array()), 'label');
        echo "
\t\t</div> \t  \t\t    \t
\t\t<div class='col-md-10'> \t  \t  
\t\t\t    \t";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "title", array()), 'widget');
        echo "
\t\t\t \t    ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "title", array()), 'errors');
        echo "\t
\t\t</div> \t  \t
\t</div>   \t
 
 
 
\t<div class='col-sm-12'>\t
\t\t<div class='col-md-2'> \t  \t  
\t    \t";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "cours", array()), 'label');
        echo "
\t\t</div> \t  \t\t    \t
\t\t<div class='col-md-10'> \t  \t  
\t    \t";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "cours", array()), 'widget');
        echo "
\t \t    ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "cours", array()), 'errors');
        echo "\t
\t\t</div> \t  \t
\t</div>   
 

\t";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "_token", array()), 'widget');
        echo "
        
\t<div class='row'>\t
\t\t\t<div class='col-md-3'> 
\t\t\t\t";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "submit", array()), 'widget');
        echo " 
\t\t\t</div>
\t    \t<div class='col-md-3'>
\t    \t\t<a href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("parcours_list", array("id" => $this->getAttribute((isset($context["program"]) ? $context["program"] : $this->getContext($context, "program")), "id", array()))), "html", null, true);
        echo "\"><span class=\"glyphicon glyphicon-arrow-left\"></span>  Retour à la liste des parcours</a>
\t    \t</div>
\t</div>


\t
";
    }

    public function getTemplateName()
    {
        return "IfeAloesBundle:Parcours:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 47,  95 => 44,  88 => 40,  80 => 35,  76 => 34,  70 => 31,  59 => 23,  55 => 22,  49 => 19,  37 => 10,  31 => 6,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'IfeAloesBundle:Program:layout.html.twig' %}*/
/* */
/* {% block content -%}*/
/* */
/* 	*/
/*     <div class='title-two1a col-md-12 col-sm-12'> */
/* 			Edition parcours*/
/* 	</div>*/
/* */
/* 	{{ form_start(edit_form) }}*/
/* 	*/
/* */
/* 	<div class='col-sm-12 container-fluid block3'>*/
/* 	<br/>    */
/* 	*/
/* 			*/
/* 	<div class='col-sm-12'>	*/
/* 		<div class='col-md-2'> 	  	  */
/* 			    	{{ form_label(edit_form.title) }}*/
/* 		</div> 	  		    	*/
/* 		<div class='col-md-10'> 	  	  */
/* 			    	{{ form_widget(edit_form.title) }}*/
/* 			 	    {{ form_errors(edit_form.title) }}	*/
/* 		</div> 	  	*/
/* 	</div>   	*/
/*  */
/*  */
/*  */
/* 	<div class='col-sm-12'>	*/
/* 		<div class='col-md-2'> 	  	  */
/* 	    	{{ form_label(edit_form.cours) }}*/
/* 		</div> 	  		    	*/
/* 		<div class='col-md-10'> 	  	  */
/* 	    	{{ form_widget(edit_form.cours) }}*/
/* 	 	    {{ form_errors(edit_form.cours) }}	*/
/* 		</div> 	  	*/
/* 	</div>   */
/*  */
/* */
/* 	{{ form_widget(edit_form._token) }}*/
/*         */
/* 	<div class='row'>	*/
/* 			<div class='col-md-3'> */
/* 				{{ form_widget(edit_form.submit)}} */
/* 			</div>*/
/* 	    	<div class='col-md-3'>*/
/* 	    		<a href="{{ path('parcours_list',{id:program.id}) }}"><span class="glyphicon glyphicon-arrow-left"></span>  Retour à la liste des parcours</a>*/
/* 	    	</div>*/
/* 	</div>*/
/* */
/* */
/* 	*/
/* {% endblock %}*/
/* */
