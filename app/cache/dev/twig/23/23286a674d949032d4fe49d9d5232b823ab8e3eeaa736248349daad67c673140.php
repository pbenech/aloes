<?php

/* IfeAloesBundle:Level:edit.html.twig */
class __TwigTemplate_318ed38cab0893a797c407af2213a88fa7310066063fb3ed15b308de55bbbf7c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("IfeAloesBundle:Aloes:layout-outils.html.twig", "IfeAloesBundle:Level:edit.html.twig", 1);
        $this->blocks = array(
            'header_nav' => array($this, 'block_header_nav'),
            'content_10' => array($this, 'block_content_10'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "IfeAloesBundle:Aloes:layout-outils.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_header_nav($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"btn-group btn-breadcrumb\">   
        <a  class=\"btn btn-default\"href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("admin_outil");
        echo "\"> Réglages</a></li>
        <a  class=\"btn btn-default\" href=\"\">Niveaux</a>
    </div>  
";
    }

    // line 12
    public function block_content_10($context, array $blocks = array())
    {
        // line 15
        echo "<div class='title-two1a col-md-12 col-sm-12'> 
\t\t\tModifier niveau
\t\t</div>

   \t
 \t\t<div class='col-sm-12 block3'>
 \t
\t\t\t<form class=\"form-inline\" id=\"roles\" action=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("levels_update", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "page" => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "sort" => (isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")), "direction" => (isset($context["direction"]) ? $context["direction"] : $this->getContext($context, "direction")))), "html", null, true);
        echo "\" method=\"post\">\t


\t
\t\t\t\t<div class='col-md-2'> \t  \t  
\t\t\t    \t";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "sigle", array()), 'label');
        echo "
\t\t\t\t</div> \t  \t\t    \t
\t\t\t\t<div class='col-md-10'> \t  \t  
\t\t\t    \t";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "sigle", array()), 'widget');
        echo "
\t\t\t \t    ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "sigle", array()), 'errors');
        echo "\t
\t\t\t\t</div> \t


\t\t\t\t<div class='col-md-2'> \t  \t  
\t\t\t    \t";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "title", array()), 'label');
        echo "
\t\t\t\t</div> \t  \t\t    \t
\t\t\t\t<div class='col-md-10'> \t  \t  
\t\t\t    \t";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "title", array()), 'widget');
        echo "
\t\t\t \t    ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "title", array()), 'errors');
        echo "\t
\t\t\t\t</div> \t

\t\t\t\t";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'rest');
        echo "\t

\t\t\t\t<div class='col-sm-12'>
\t\t\t\t\t<hr/>\t
\t\t\t\t</div>  
 \t\t  \t\t\t
\t\t\t\t<div class='row'>\t
\t\t\t\t\t\t<div class='col-md-3'> 
\t\t\t\t\t\t    <button type=\"submit\"  class=\"btn btn-success btn\" >Enregistrer</button>  
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class='col-md-3'>
\t\t\t\t\t\t\t    <a href=\"";
        // line 54
        echo $this->env->getExtension('routing')->getPath("levels");
        echo "\"><span class=\"glyphicon glyphicon-arrow-left\"></span> Retour à la liste des niveaux </a>
\t\t\t\t\t\t</div>
\t\t\t\t</div>\t\t
\t\t\t\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t</form>\t\t

 \t\t</div>  
\t          
    
";
    }

    public function getTemplateName()
    {
        return "IfeAloesBundle:Level:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 54,  97 => 43,  91 => 40,  87 => 39,  81 => 36,  73 => 31,  69 => 30,  63 => 27,  55 => 22,  46 => 15,  43 => 12,  35 => 7,  32 => 6,  29 => 5,  11 => 1,);
    }
}
/* {% extends 'IfeAloesBundle:Aloes:layout-outils.html.twig' %}*/
/* */
/*  */
/*  */
/* {% block header_nav %}*/
/*     <div class="btn-group btn-breadcrumb">   */
/*         <a  class="btn btn-default"href="{{path('admin_outil')}}"> Réglages</a></li>*/
/*         <a  class="btn btn-default" href="">Niveaux</a>*/
/*     </div>  */
/* {% endblock %}*/
/* */
/* {% block content_10 -%}*/
/* */
/*    	*/
/*     	<div class='title-two1a col-md-12 col-sm-12'> */
/* 			Modifier niveau*/
/* 		</div>*/
/* */
/*    	*/
/*  		<div class='col-sm-12 block3'>*/
/*  	*/
/* 			<form class="form-inline" id="roles" action="{{ path('levels_update', { 'id' : entity.id ,'page' : page, 'sort' : sort, 'direction' : direction  }) }}" method="post">	*/
/* */
/* */
/* 	*/
/* 				<div class='col-md-2'> 	  	  */
/* 			    	{{ form_label(edit_form.sigle) }}*/
/* 				</div> 	  		    	*/
/* 				<div class='col-md-10'> 	  	  */
/* 			    	{{ form_widget(edit_form.sigle) }}*/
/* 			 	    {{ form_errors(edit_form.sigle) }}	*/
/* 				</div> 	*/
/* */
/* */
/* 				<div class='col-md-2'> 	  	  */
/* 			    	{{ form_label(edit_form.title) }}*/
/* 				</div> 	  		    	*/
/* 				<div class='col-md-10'> 	  	  */
/* 			    	{{ form_widget(edit_form.title) }}*/
/* 			 	    {{ form_errors(edit_form.title) }}	*/
/* 				</div> 	*/
/* */
/* 				{{ form_rest(edit_form) }}	*/
/* */
/* 				<div class='col-sm-12'>*/
/* 					<hr/>	*/
/* 				</div>  */
/*  		  			*/
/* 				<div class='row'>	*/
/* 						<div class='col-md-3'> */
/* 						    <button type="submit"  class="btn btn-success btn" >Enregistrer</button>  */
/* 						</div>*/
/* 						<div class='col-md-3'>*/
/* 							    <a href="{{ path('levels') }}"><span class="glyphicon glyphicon-arrow-left"></span> Retour à la liste des niveaux </a>*/
/* 						</div>*/
/* 				</div>		*/
/* 							*/
/* 				*/
/* 				*/
/* 			</form>		*/
/* */
/*  		</div>  */
/* 	          */
/*     */
/* {% endblock %} */
/* */
/* */
/*     */
/* */
/* */
