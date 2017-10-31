<?php

/* IfeAloesBundle:Semestre:new.html.twig */
class __TwigTemplate_54515060bbd61efe9a25f38b4cc4bcd72f60002232a62be599b9e7c282c40383 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("IfeAloesBundle:Aloes:layout-outils.html.twig", "IfeAloesBundle:Semestre:new.html.twig", 1);
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
        <a  class=\"btn btn-default\" href=\"\">Semestres</a>
    </div> 
";
    }

    // line 11
    public function block_content_10($context, array $blocks = array())
    {
        // line 14
        echo "<div class='title-two1a col-md-12 col-sm-12'> 
\t\t\tAjouter semestre
\t</div>


\t<form class=\"form-inline\" id=\"roles\" action=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("semestres_create", array("page" => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "sort" => (isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")), "direction" => (isset($context["direction"]) ? $context["direction"] : $this->getContext($context, "direction")))), "html", null, true);
        echo "\" method=\"post\">\t


\t\t<div class='col-sm-12 block3'>
\t\t\t\t<div class='col-sm-2'> \t  \t  
\t\t\t    \t";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'label');
        echo "
\t\t\t\t</div> \t  \t\t    \t
\t\t\t\t<div class='col-sm-10'> \t  \t  
\t\t\t    \t";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'widget');
        echo "
\t\t\t \t    ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'errors');
        echo "\t
\t\t\t\t</div> \t



\t\t\t\t";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "\t\t\t\t

\t\t\t\t<div class='col-sm-12'>\t
\t\t\t\t\t<hr/>
\t\t\t\t</div>
  \t\t\t
\t\t\t\t<div class='col-sm-12'>\t
\t\t\t\t\t\t<div class='col-sm-3'> 
\t\t\t\t\t\t    <button type=\"submit\"  class=\"btn btn-success btn\" >Enregistrer</button>  
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class='col-sm-9'>
\t\t\t\t\t\t\t    <a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("semestres");
        echo "\"><span class=\"glyphicon glyphicon-arrow-left\"></span>  Retour à la liste </a>
\t\t\t\t\t\t</div>
\t\t\t\t</div>\t\t\t\t\t\t\t

\t\t\t\t<div class='col-sm-12'>\t
\t\t\t\t</div>
\t\t</div>
\t\t\t\t\t\t\t\t
\t</form>\t\t

\t          
\t          
    
";
    }

    public function getTemplateName()
    {
        return "IfeAloesBundle:Semestre:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 44,  79 => 33,  71 => 28,  67 => 27,  61 => 24,  53 => 19,  46 => 14,  43 => 11,  35 => 6,  32 => 5,  29 => 4,  11 => 1,);
    }
}
/* {% extends 'IfeAloesBundle:Aloes:layout-outils.html.twig' %}*/
/* */
/* */
/* {% block header_nav %}*/
/*     <div class="btn-group btn-breadcrumb">   */
/*         <a  class="btn btn-default"href="{{path('admin_outil')}}"> Réglages</a></li>*/
/*         <a  class="btn btn-default" href="">Semestres</a>*/
/*     </div> */
/* {% endblock %}*/
/* */
/* {% block content_10 -%}*/
/* */
/* 	*/
/*     <div class='title-two1a col-md-12 col-sm-12'> */
/* 			Ajouter semestre*/
/* 	</div>*/
/* */
/* */
/* 	<form class="form-inline" id="roles" action="{{ path('semestres_create', { 'page' : page, 'sort' : sort, 'direction' : direction  }) }}" method="post">	*/
/* */
/* */
/* 		<div class='col-sm-12 block3'>*/
/* 				<div class='col-sm-2'> 	  	  */
/* 			    	{{ form_label(form.title) }}*/
/* 				</div> 	  		    	*/
/* 				<div class='col-sm-10'> 	  	  */
/* 			    	{{ form_widget(form.title) }}*/
/* 			 	    {{ form_errors(form.title) }}	*/
/* 				</div> 	*/
/* */
/* */
/* */
/* 				{{ form_rest(form) }}				*/
/* */
/* 				<div class='col-sm-12'>	*/
/* 					<hr/>*/
/* 				</div>*/
/*   			*/
/* 				<div class='col-sm-12'>	*/
/* 						<div class='col-sm-3'> */
/* 						    <button type="submit"  class="btn btn-success btn" >Enregistrer</button>  */
/* 						</div>*/
/* 						<div class='col-sm-9'>*/
/* 							    <a href="{{ path('semestres') }}"><span class="glyphicon glyphicon-arrow-left"></span>  Retour à la liste </a>*/
/* 						</div>*/
/* 				</div>							*/
/* */
/* 				<div class='col-sm-12'>	*/
/* 				</div>*/
/* 		</div>*/
/* 								*/
/* 	</form>		*/
/* */
/* 	          */
/* 	          */
/*     */
/* {% endblock %} */
/* */
/* */
/*     */
/* */
/* */
