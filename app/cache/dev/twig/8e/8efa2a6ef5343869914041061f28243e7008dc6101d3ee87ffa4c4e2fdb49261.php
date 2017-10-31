<?php

/* IfeAloesBundle:Parcours:new.html.twig */
class __TwigTemplate_15802390aa1cfdc585802b132d16cc30b164862bf92eaab3e6b383c17f4f45b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("IfeAloesBundle:Program:layout.html.twig", "IfeAloesBundle:Parcours:new.html.twig", 1);
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
        // line 5
        echo "<div class='title-two1a col-md-12 col-sm-12'>     \t
  \t\tNouveau parcours\t\t
  </div>

  ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

  <div class='col-sm-12 container-fluid block3'>\t 
    <br/> 


\t<div class='row'>\t
\t\t<div class='col-md-2'> \t  \t  
\t    \t";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'label');
        echo "
\t\t</div> \t  \t\t    \t
\t\t<div class='col-md-10'> \t  \t  
\t    \t";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'widget');
        echo "
\t \t    ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'errors');
        echo "\t
\t\t</div> \t  \t
\t</div>   
\t


\t<div class='row'>\t
\t\t<div class='col-md-2'> \t  \t  
\t    \t";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cours", array()), 'label');
        echo "
\t\t</div> \t  \t\t    \t
\t\t<div class='col-md-10'> \t  \t  
\t    \t";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cours", array()), 'widget');
        echo "
\t \t    ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cours", array()), 'errors');
        echo "\t
\t\t</div> \t  \t
\t</div>   
\t


\t";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "
        
\t<div class='row'>\t
\t\t\t<div class='col-md-3'> 
\t\t\t\t";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit", array()), 'widget');
        echo " 
\t\t\t</div>
\t    \t<div class='col-md-3'>
\t    \t\t<a href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("parcours_list", array("id" => $this->getAttribute((isset($context["program"]) ? $context["program"] : $this->getContext($context, "program")), "id", array()))), "html", null, true);
        echo "\"><span class=\"glyphicon glyphicon-arrow-left\"></span>  Retour à la liste des parcours</a>
\t    \t</div>
\t</div>
\t
  </div>         
  
   

";
    }

    public function getTemplateName()
    {
        return "IfeAloesBundle:Parcours:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 46,  95 => 43,  88 => 39,  79 => 33,  75 => 32,  69 => 29,  58 => 21,  54 => 20,  48 => 17,  37 => 9,  31 => 5,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'IfeAloesBundle:Program:layout.html.twig' %}*/
/* */
/* {% block content -%}*/
/* */
/*   <div class='title-two1a col-md-12 col-sm-12'>     	*/
/*   		Nouveau parcours		*/
/*   </div>*/
/* */
/*   {{ form_start(form) }}*/
/* */
/*   <div class='col-sm-12 container-fluid block3'>	 */
/*     <br/> */
/* */
/* */
/* 	<div class='row'>	*/
/* 		<div class='col-md-2'> 	  	  */
/* 	    	{{ form_label(form.title) }}*/
/* 		</div> 	  		    	*/
/* 		<div class='col-md-10'> 	  	  */
/* 	    	{{ form_widget(form.title) }}*/
/* 	 	    {{ form_errors(form.title) }}	*/
/* 		</div> 	  	*/
/* 	</div>   */
/* 	*/
/* */
/* */
/* 	<div class='row'>	*/
/* 		<div class='col-md-2'> 	  	  */
/* 	    	{{ form_label(form.cours) }}*/
/* 		</div> 	  		    	*/
/* 		<div class='col-md-10'> 	  	  */
/* 	    	{{ form_widget(form.cours) }}*/
/* 	 	    {{ form_errors(form.cours) }}	*/
/* 		</div> 	  	*/
/* 	</div>   */
/* 	*/
/* */
/* */
/* 	{{ form_widget(form._token) }}*/
/*         */
/* 	<div class='row'>	*/
/* 			<div class='col-md-3'> */
/* 				{{ form_widget(form.submit)}} */
/* 			</div>*/
/* 	    	<div class='col-md-3'>*/
/* 	    		<a href="{{ path('parcours_list',{id:program.id}) }}"><span class="glyphicon glyphicon-arrow-left"></span>  Retour à la liste des parcours</a>*/
/* 	    	</div>*/
/* 	</div>*/
/* 	*/
/*   </div>         */
/*   */
/*    */
/* */
/* {% endblock %}*/
/* */
