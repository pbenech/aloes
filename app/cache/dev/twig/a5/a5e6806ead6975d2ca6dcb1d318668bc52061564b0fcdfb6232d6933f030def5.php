<?php

/* IfeAloesBundle:Admin:parameter-edit.html.twig */
class __TwigTemplate_e7bb73fd43cb03bd8bb75afafb9b6132593985f9d7befa0c6aa288672345b973 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("IfeAloesBundle:Aloes:layout-outils.html.twig", "IfeAloesBundle:Admin:parameter-edit.html.twig", 1);
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
        <a  class=\"btn btn-default\" href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("admin_outil");
        echo "\"> Réglages</a></li>
        <a  class=\"btn btn-default\" href=\"\">Paramètres</a>
    </div> 
";
    }

    // line 11
    public function block_content_10($context, array $blocks = array())
    {
        // line 13
        echo "<div class='title-two1a col-md-12 col-sm-12'> 
\t\tModifier paramètres
\t</div>

\t";
        // line 17
        echo $this->env->getExtension('stfalcon_tinymce')->tinymceInit();
        echo "
 
\t";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'stylesheet');
        echo "
    ";
        // line 20
        echo $this->env->getExtension('collot.twig.extension.form')->renderJavascript((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")));
        echo "\t

    \t\t
\t<form    class=\"form-horizontal\" action=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("admin_parameters_update", array("id" => 1));
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'enctype');
        echo ">

\t\t<div class='col-sm-12 container-fluid block3'>

\t\t\t<div class='col-sm-12'>
\t\t\t\t<div class='col-sm-2'> \t  \t  
\t\t\t\t\t    \t";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "about", array()), 'label');
        echo "
\t\t\t\t</div> \t  \t\t    \t
\t\t\t\t<div class='col-sm-10'> \t  \t  
\t\t\t\t\t    \t";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "about", array()), 'widget');
        echo "
\t\t\t\t\t \t    ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "about", array()), 'errors');
        echo "\t
\t\t\t\t</div> \t  \t
 \t\t\t</div>
\t\t
\t\t\t<div class='col-sm-12'>
\t\t\t\t<div class='col-sm-2'> \t  \t  
\t\t\t\t\t    \t";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "credits", array()), 'label');
        echo "
\t\t\t\t</div> \t  \t\t    \t
\t\t\t\t<div class='col-sm-10'> \t  \t  
\t\t\t\t\t    \t";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "credits", array()), 'widget');
        echo "
\t\t\t\t\t \t    ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "credits", array()), 'errors');
        echo "\t
\t\t\t\t</div> \t  
\t\t\t</div>\t\t

\t\t\t<div class='col-sm-12'> 
\t\t\t\t<hr/>
\t\t\t</div>     
\t\t\t

\t\t\t<div class='col-sm-12'> 
\t\t\t\t<div class='col-sm-3'> 
\t\t\t\t\t\t\t<button type=\"submit\" value=\"Enregistrer\" class=\"btn btn-success\">
\t\t\t\t\t\t\t\tEnregistrer&nbsp;
\t\t\t\t\t\t\t\t<i class=\"icon-ok icon-white\"></i>
\t\t\t\t\t\t\t</button>
\t\t\t\t</div>\t\t\t
\t\t\t\t<div class='col-sm-9'>
\t\t\t\t\t<a href=\"";
        // line 60
        echo $this->env->getExtension('routing')->getPath("admin_parameters");
        echo "\"><span class=\"glyphicon glyphicon-arrow-left\"></span> Retour paramètres</a>\t\t
\t\t\t\t</div> 
\t\t\t</div>
\t\t
\t\t    ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'rest');
        echo "\t\t\t

\t\t\t<div class='col-sm-12'> 
\t\t\t</div>    
\t\t
    \t</div>\t
    </form>
 
    
";
    }

    public function getTemplateName()
    {
        return "IfeAloesBundle:Admin:parameter-edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 64,  127 => 60,  107 => 43,  103 => 42,  97 => 39,  88 => 33,  84 => 32,  78 => 29,  67 => 23,  61 => 20,  57 => 19,  52 => 17,  46 => 13,  43 => 11,  35 => 6,  32 => 5,  29 => 4,  11 => 1,);
    }
}
/* {% extends 'IfeAloesBundle:Aloes:layout-outils.html.twig' %}*/
/* */
/* */
/* {% block header_nav %}*/
/*     <div class="btn-group btn-breadcrumb">   */
/*         <a  class="btn btn-default" href="{{path('admin_outil')}}"> Réglages</a></li>*/
/*         <a  class="btn btn-default" href="">Paramètres</a>*/
/*     </div> */
/* {% endblock %}*/
/* */
/* {% block content_10 -%}*/
/* 	*/
/*     <div class='title-two1a col-md-12 col-sm-12'> */
/* 		Modifier paramètres*/
/* 	</div>*/
/* */
/* 	{{ tinymce_init() }}*/
/*  */
/* 	{{ form_stylesheet(edit_form) }}*/
/*     {{ form_javascript(edit_form) }}	*/
/* */
/*     		*/
/* 	<form    class="form-horizontal" action="{{ path('admin_parameters_update' , { 'id': 1}) }}" method="post" {{ form_enctype(edit_form) }}>*/
/* */
/* 		<div class='col-sm-12 container-fluid block3'>*/
/* */
/* 			<div class='col-sm-12'>*/
/* 				<div class='col-sm-2'> 	  	  */
/* 					    	{{ form_label(edit_form.about) }}*/
/* 				</div> 	  		    	*/
/* 				<div class='col-sm-10'> 	  	  */
/* 					    	{{ form_widget(edit_form.about) }}*/
/* 					 	    {{ form_errors(edit_form.about) }}	*/
/* 				</div> 	  	*/
/*  			</div>*/
/* 		*/
/* 			<div class='col-sm-12'>*/
/* 				<div class='col-sm-2'> 	  	  */
/* 					    	{{ form_label(edit_form.credits) }}*/
/* 				</div> 	  		    	*/
/* 				<div class='col-sm-10'> 	  	  */
/* 					    	{{ form_widget(edit_form.credits) }}*/
/* 					 	    {{ form_errors(edit_form.credits) }}	*/
/* 				</div> 	  */
/* 			</div>		*/
/* */
/* 			<div class='col-sm-12'> */
/* 				<hr/>*/
/* 			</div>     */
/* 			*/
/* */
/* 			<div class='col-sm-12'> */
/* 				<div class='col-sm-3'> */
/* 							<button type="submit" value="Enregistrer" class="btn btn-success">*/
/* 								Enregistrer&nbsp;*/
/* 								<i class="icon-ok icon-white"></i>*/
/* 							</button>*/
/* 				</div>			*/
/* 				<div class='col-sm-9'>*/
/* 					<a href="{{path('admin_parameters')}}"><span class="glyphicon glyphicon-arrow-left"></span> Retour paramètres</a>		*/
/* 				</div> */
/* 			</div>*/
/* 		*/
/* 		    {{ form_rest(edit_form) }}			*/
/* */
/* 			<div class='col-sm-12'> */
/* 			</div>    */
/* 		*/
/*     	</div>	*/
/*     </form>*/
/*  */
/*     */
/* {% endblock %} */
/* */
/* */
/*     */
/* */
/* */
