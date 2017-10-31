<?php

/* IfeAloesBundle:Level:new.html.twig */
class __TwigTemplate_bb76382001c5e39c6f631350670379a737f94be21fbe72c6f4abf74e176d2f74 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("IfeAloesBundle:Aloes:layout-outils.html.twig", "IfeAloesBundle:Level:new.html.twig", 1);
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

    // line 13
    public function block_content_10($context, array $blocks = array())
    {
        // line 17
        echo "<div class='title-two1a col-md-12 col-sm-12'> 
\t\t\tAjouter niveau
\t</div>


 \t<div class='col-sm-12 block3'>
\t\t<form class=\"form-inline\" id=\"roles\" action=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("levels_create", array("page" => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "sort" => (isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")), "direction" => (isset($context["direction"]) ? $context["direction"] : $this->getContext($context, "direction")))), "html", null, true);
        echo "\" method=\"post\">\t


\t\t\t\t<div class='col-sm-2'> \t  \t  
\t\t\t    \t";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sigle", array()), 'label');
        echo "
\t\t\t\t</div> \t  \t\t    \t
\t\t\t\t<div class='col-sm-10'> \t  \t  
\t\t\t    \t";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sigle", array()), 'widget');
        echo "
\t\t\t \t    ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sigle", array()), 'errors');
        echo "\t
\t\t\t\t</div> \t
\t\t\t\t

\t\t\t\t<div class='col-sm-2'> \t  \t  
\t\t\t    \t";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'label');
        echo "
\t\t\t\t</div> \t  \t\t    \t
\t\t\t\t<div class='col-sm-10'> \t  \t  
\t\t\t    \t";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'widget');
        echo "
\t\t\t \t    ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'errors');
        echo "\t
\t\t\t\t</div> \t


\t\t\t\t<div class='col-sm-12'>
\t\t\t\t\t<hr/>\t
\t\t\t\t</div>
\t\t\t\t";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "\t\t\t\t
  \t\t\t
\t\t\t\t<div class='col-sm-12'>\t
\t\t\t\t\t\t<div class='col-sm-3'> 
\t\t\t\t\t\t    <button type=\"submit\"  class=\"btn btn-success btn\" >Enregistrer</button>  
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class='col-sm-9'>
\t\t\t\t\t\t\t    <a href=\"";
        // line 54
        echo $this->env->getExtension('routing')->getPath("levels");
        echo "\"><span class=\"glyphicon glyphicon-arrow-left\"></span>  Retour à la liste des niveaux </a>
\t\t\t\t\t\t</div>
\t\t\t\t</div>\t\t
\t\t\t\t\t\t\t
\t\t\t\t<div class='col-sm-12'>

\t\t\t\t</div>\t\t\t\t
\t\t\t\t
\t\t</form>\t\t
\t</div>
\t          
    
";
    }

    public function getTemplateName()
    {
        return "IfeAloesBundle:Level:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 54,  99 => 47,  89 => 40,  85 => 39,  79 => 36,  71 => 31,  67 => 30,  61 => 27,  54 => 23,  46 => 17,  43 => 13,  35 => 7,  32 => 6,  29 => 5,  11 => 1,);
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
/*  */
/* */
/* {% block content_10 -%}*/
/* */
/*     */
/* */
/*     <div class='title-two1a col-md-12 col-sm-12'> */
/* 			Ajouter niveau*/
/* 	</div>*/
/* */
/* */
/*  	<div class='col-sm-12 block3'>*/
/* 		<form class="form-inline" id="roles" action="{{ path('levels_create', { 'page' : page, 'sort' : sort, 'direction' : direction  }) }}" method="post">	*/
/* */
/* */
/* 				<div class='col-sm-2'> 	  	  */
/* 			    	{{ form_label(form.sigle) }}*/
/* 				</div> 	  		    	*/
/* 				<div class='col-sm-10'> 	  	  */
/* 			    	{{ form_widget(form.sigle) }}*/
/* 			 	    {{ form_errors(form.sigle) }}	*/
/* 				</div> 	*/
/* 				*/
/* */
/* 				<div class='col-sm-2'> 	  	  */
/* 			    	{{ form_label(form.title) }}*/
/* 				</div> 	  		    	*/
/* 				<div class='col-sm-10'> 	  	  */
/* 			    	{{ form_widget(form.title) }}*/
/* 			 	    {{ form_errors(form.title) }}	*/
/* 				</div> 	*/
/* */
/* */
/* 				<div class='col-sm-12'>*/
/* 					<hr/>	*/
/* 				</div>*/
/* 				{{ form_rest(form) }}				*/
/*   			*/
/* 				<div class='col-sm-12'>	*/
/* 						<div class='col-sm-3'> */
/* 						    <button type="submit"  class="btn btn-success btn" >Enregistrer</button>  */
/* 						</div>*/
/* 						<div class='col-sm-9'>*/
/* 							    <a href="{{ path('levels') }}"><span class="glyphicon glyphicon-arrow-left"></span>  Retour à la liste des niveaux </a>*/
/* 						</div>*/
/* 				</div>		*/
/* 							*/
/* 				<div class='col-sm-12'>*/
/* */
/* 				</div>				*/
/* 				*/
/* 		</form>		*/
/* 	</div>*/
/* 	          */
/*     */
/* {% endblock %} */
/* */
/* */
/*     */
/* */
/* */
