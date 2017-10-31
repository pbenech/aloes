<?php

/* IfeAloesBundle:Langue:edit.html.twig */
class __TwigTemplate_bf5ea2f95ba4e839884ddc7d833cdc95e84fad442a07ca0c2c77847d2786c811 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("IfeAloesBundle:Aloes:layout-outils.html.twig", "IfeAloesBundle:Langue:edit.html.twig", 1);
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

    // line 4
    public function block_header_nav($context, array $blocks = array())
    {
        // line 5
        echo "    <div class=\"btn-group btn-breadcrumb\">   
        <a  class=\"btn btn-default\"href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("admin_outil");
        echo "\"> Réglages</a></li>
        <a  class=\"btn btn-default\" href=\"\">Langues</a>
    </div> 
";
    }

    // line 11
    public function block_content_10($context, array $blocks = array())
    {
        // line 14
        echo "<div class='title-two1a col-md-12 col-sm-12'> 
\t\t\tModifier langue
\t</div>
  \t
     \t  
    <div class='col-sm-12 block3'>
\t\t\t<form class=\"form-inline\" id=\"roles\" action=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("langues_update", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "page" => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "sort" => (isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")), "direction" => (isset($context["direction"]) ? $context["direction"] : $this->getContext($context, "direction")))), "html", null, true);
        echo "\" method=\"post\">\t

\t\t\t\t<div class='col-sm-2'> \t  \t  
\t\t\t    \t";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "title", array()), 'label');
        echo "
\t\t\t\t</div> \t  \t\t    \t
\t\t\t\t<div class='col-sm-10'> \t  \t  
\t\t\t    \t";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "title", array()), 'widget');
        echo "
\t\t\t \t    ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "title", array()), 'errors');
        echo "\t
\t\t\t\t</div> \t

\t\t\t\t";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'rest');
        echo "\t\t\t\t


\t\t\t\t<div class='col-sm-12'> 
\t\t\t\t\t<hr/>
\t\t\t\t</div>
  \t\t\t
\t\t\t\t<div class='row'>\t
\t\t\t\t\t\t<div class='col-sm-3'> 
\t\t\t\t\t\t    <button type=\"submit\"  class=\"btn btn-success btn\" >Enregistrer</button>  
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class='col-sm-9'>
\t\t\t\t\t\t\t    <a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("langues");
        echo "\"><span class=\"glyphicon glyphicon-arrow-left\"></span> Retour à la liste des langues </a>
\t\t\t\t\t\t</div>
\t\t\t\t</div>\t\t

    </div> 
\t          
\t          
    
";
    }

    public function getTemplateName()
    {
        return "IfeAloesBundle:Langue:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 42,  76 => 30,  70 => 27,  66 => 26,  60 => 23,  54 => 20,  46 => 14,  43 => 11,  35 => 6,  32 => 5,  29 => 4,  11 => 1,);
    }
}
/* {% extends 'IfeAloesBundle:Aloes:layout-outils.html.twig' %}*/
/* */
/* */
/* {% block header_nav %}*/
/*     <div class="btn-group btn-breadcrumb">   */
/*         <a  class="btn btn-default"href="{{path('admin_outil')}}"> Réglages</a></li>*/
/*         <a  class="btn btn-default" href="">Langues</a>*/
/*     </div> */
/* {% endblock %}*/
/* */
/* {% block content_10 -%}*/
/* */
/*    	*/
/*     <div class='title-two1a col-md-12 col-sm-12'> */
/* 			Modifier langue*/
/* 	</div>*/
/*   	*/
/*      	  */
/*     <div class='col-sm-12 block3'>*/
/* 			<form class="form-inline" id="roles" action="{{ path('langues_update', { 'id' : entity.id ,'page' : page, 'sort' : sort, 'direction' : direction  }) }}" method="post">	*/
/* */
/* 				<div class='col-sm-2'> 	  	  */
/* 			    	{{ form_label(edit_form.title) }}*/
/* 				</div> 	  		    	*/
/* 				<div class='col-sm-10'> 	  	  */
/* 			    	{{ form_widget(edit_form.title) }}*/
/* 			 	    {{ form_errors(edit_form.title) }}	*/
/* 				</div> 	*/
/* */
/* 				{{ form_rest(edit_form) }}				*/
/* */
/* */
/* 				<div class='col-sm-12'> */
/* 					<hr/>*/
/* 				</div>*/
/*   			*/
/* 				<div class='row'>	*/
/* 						<div class='col-sm-3'> */
/* 						    <button type="submit"  class="btn btn-success btn" >Enregistrer</button>  */
/* 						</div>*/
/* 						<div class='col-sm-9'>*/
/* 							    <a href="{{ path('langues') }}"><span class="glyphicon glyphicon-arrow-left"></span> Retour à la liste des langues </a>*/
/* 						</div>*/
/* 				</div>		*/
/* */
/*     </div> */
/* 	          */
/* 	          */
/*     */
/* {% endblock %} */
/* */
/* */
/*     */
/* */
/* */
