<?php

/* IfeAloesBundle:Course:url.html.twig */
class __TwigTemplate_9edb3e7cf0000d8f67f07851e2463634863847819271aeb93d0ab43ecb428860 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("IfeAloesBundle:Course:layout.html.twig", "IfeAloesBundle:Course:url.html.twig", 1);
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

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<h2> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "title", array()), "html", null, true);
        echo "</h2>


\t<fieldset>
\t\t<div  class=\"col-sm-9 col-xs-12\">\t
\t\t\t<form action=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_url", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
        echo "\" method=\"post\">\t
\t\t\t\t<div  class=\"col-sm-8  col-xs-8\">\t
\t\t\t\t\t";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "url", array()), 'widget');
        echo "
\t\t\t\t</div>\t\t\t\t   \t\t\t
\t\t\t\t";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "\t
\t\t\t\t<div  class=\"col-sm-4  col-xs-14\">\t
\t\t\t\t\t<button type=\"submit\" class=\"btn  btn-button-cancel \">Enregistrer</button>
\t\t\t\t</div>
\t\t\t</form>
\t\t</div>\t\t\t\t\t\t\t    
\t</fieldset>\t
\t
\t
\t";
        // line 22
        if ((array_key_exists("param", $context) && ((isset($context["param"]) ? $context["param"] : $this->getContext($context, "param")) != ""))) {
            echo " 
\t<fieldset>\t\t
\t\t<a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_resum", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "param" => (isset($context["param"]) ? $context["param"] : $this->getContext($context, "param")))), "html", null, true);
            echo "\" target='_blank'>http://ife.ens-lyon.fr/";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_resum", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "param" => (isset($context["param"]) ? $context["param"] : $this->getContext($context, "param")))), "html", null, true);
            echo "</a>
\t</fieldset>
\t";
        }
        // line 27
        echo "\t        
";
    }

    public function getTemplateName()
    {
        return "IfeAloesBundle:Course:url.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 27,  67 => 24,  62 => 22,  50 => 13,  45 => 11,  40 => 9,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'IfeAloesBundle:Course:layout.html.twig' %}*/
/* */
/* {% block content -%} */
/*     <h2> {{ course.title }}</h2>*/
/* */
/* */
/* 	<fieldset>*/
/* 		<div  class="col-sm-9 col-xs-12">	*/
/* 			<form action="{{ path('course_url', { 'id' : course.id  }) }}" method="post">	*/
/* 				<div  class="col-sm-8  col-xs-8">	*/
/* 					{{ form_widget(form.url) }}*/
/* 				</div>				   			*/
/* 				{{ form_rest(form) }}	*/
/* 				<div  class="col-sm-4  col-xs-14">	*/
/* 					<button type="submit" class="btn  btn-button-cancel ">Enregistrer</button>*/
/* 				</div>*/
/* 			</form>*/
/* 		</div>							    */
/* 	</fieldset>	*/
/* 	*/
/* 	*/
/* 	{% if param is defined and param!="" %} */
/* 	<fieldset>		*/
/* 		<a href="{{path('course_resum', {id:course.id,param:param}) }}" target='_blank'>http://ife.ens-lyon.fr/{{path('course_resum', {id:course.id,param:param}) }}</a>*/
/* 	</fieldset>*/
/* 	{% endif %}*/
/* 	        */
/* {% endblock %}*/
/* */
