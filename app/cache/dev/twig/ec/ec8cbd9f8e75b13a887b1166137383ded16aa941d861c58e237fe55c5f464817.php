<?php

/* IfeAloesBundle:Course:new.html.twig */
class __TwigTemplate_f449477ae83cfcd35e78a5ef67d916b7dcddd349694e58ad3f3567397fbad052 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("IfeAloesBundle:Program:layout.html.twig", "IfeAloesBundle:Course:new.html.twig", 1);
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
        // line 7
        echo "<div class='title-two1a col-md-12 col-sm-12'>     \t
    \t\tNouveau cours (UE)\t\t\t
\t\t</div>

 

  ";
        // line 13
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

  <div class='col-sm-12 container-fluid block3'>\t 
    <br/> 
\t<div class='row'>\t
\t\t<div class='col-md-2'> \t  \t  
\t    \t";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "label", array()), 'label');
        echo "
\t\t</div> \t  \t\t    \t
\t\t<div class='col-md-10'> \t  \t  
\t    \t";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "label", array()), 'widget');
        echo "
\t \t    ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "label", array()), 'errors');
        echo "\t 
\t\t</div> \t  \t
\t</div>   

\t<div class='row'>\t
\t\t<div class='col-md-2'> \t  \t  
\t    \t";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'label');
        echo "
\t\t</div> \t  \t\t    \t
\t\t<div class='col-md-10'> \t  \t  
\t    \t";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'widget');
        echo "
\t \t    ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'errors');
        echo "\t
\t\t</div> \t  \t
\t</div>   



\t<div class='row'>\t
\t\t<div class='col-md-2'> \t  \t  
\t    \t";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parcours", array()), 'label');
        echo "
\t\t</div> \t  \t\t    \t
\t\t<div class='col-md-10'> \t  \t  
\t    \t";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parcours", array()), 'widget');
        echo "
\t \t    ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parcours", array()), 'errors');
        echo "\t
\t\t</div> \t  \t
\t</div>   


\t<div class='row'>\t
\t\t<div class='col-md-2'> \t  \t  
\t    \t";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "credits", array()), 'label');
        echo "
\t\t</div> \t  \t\t    \t
\t\t<div class='col-md-10'> \t  \t  
\t    \t";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "credits", array()), 'widget');
        echo "
\t \t    ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "credits", array()), 'errors');
        echo "\t
\t\t</div> \t  \t
\t</div>  


    <div class='row'>\t\t\t
\t\t\t<div class='col-md-2'> \t  \t  
\t\t    \t";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "isOptional", array()), 'label');
        echo "
\t\t\t</div> \t  \t\t    \t 
\t\t\t<div class='col-md-10'> \t  \t  
\t\t    \t";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "isOptional", array()), 'widget');
        echo "
\t \t    \t";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "isOptional", array()), 'errors');
        echo "
\t\t\t</div> \t\t
    </div>  
    
    <div class='row'>\t    
    \t\t<div class='col-md-2'> \t  \t  
\t\t    \t";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "semestres", array()), 'label');
        echo "
\t\t\t</div> \t  \t\t    \t
\t\t\t<div class='col-md-4'> \t  \t  
\t\t    \t";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "semestres", array()), 'widget');
        echo "
\t\t \t    ";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "semestres", array()), 'errors');
        echo "\t
\t\t\t</div> \t  
\t\t\t<div class='col-md-2'> \t  \t  
\t\t    \t";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year", array()), 'label');
        echo "
\t\t\t</div> \t  \t\t    \t
\t\t\t<div class='col-md-4'> \t  \t  
\t\t    \t";
        // line 83
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year", array()), 'widget');
        echo "
\t\t \t    ";
        // line 84
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year", array()), 'errors');
        echo "\t
\t\t\t</div> \t\t\t\t
\t</div>
\t
\t
\t\t<div class='row'>\t
\t\t\t<div class='col-md-2'> \t  \t  
\t\t    \t";
        // line 91
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "langues", array()), 'label');
        echo "
\t\t\t</div> \t  \t\t    \t
\t\t\t<div class='col-md-10'> \t  \t  
\t\t    \t";
        // line 94
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "langues", array()), 'widget');
        echo "
\t\t \t    ";
        // line 95
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "langues", array()), 'errors');
        echo "\t
\t\t\t</div> \t  \t
\t\t</div>  \t

\t<div class='row'>\t
\t\t<div class='col-md-2'> \t  \t  
\t    \t";
        // line 101
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "publicationState", array()), 'label');
        echo "
\t\t</div> \t  \t\t    \t
\t\t<div class='col-md-10'> \t  \t  
\t    \t";
        // line 104
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "publicationState", array()), 'widget');
        echo "
\t \t    ";
        // line 105
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "publicationState", array()), 'errors');
        echo "\t
\t\t</div> \t  \t
\t</div>   
\t
\t<div class=\"col-sm-12 block3b\">    
\t\t<div class='row'>\t
\t\t\t<div class='col-md-2'> \t  \t  
\t\t    \t";
        // line 112
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "url_ped", array()), 'label');
        echo "
\t\t\t</div> \t  \t\t    \t
\t\t\t<div class='col-md-10'> \t  \t  
\t\t    \t";
        // line 115
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "url_ped", array()), 'widget');
        echo "
\t \t   \t \t";
        // line 116
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "url_ped", array()), 'errors');
        echo "
\t\t\t</div> \t  \t
\t\t</div> \t            

\t\t<div class='row'>\t
\t\t\t<div class='col-md-2'> \t  \t  
\t\t    \t";
        // line 122
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "url_web", array()), 'label');
        echo "
\t\t\t</div> \t  \t\t    \t
\t\t\t<div class='col-md-10'> \t  \t  
\t\t    \t";
        // line 125
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "url_web", array()), 'widget');
        echo "
\t \t   \t \t";
        // line 126
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "url_web", array()), 'errors');
        echo "
\t\t\t</div> \t  \t
\t\t</div> \t            
\t
\t\t<div class='row'>\t
\t\t\t<div class='col-md-2'> \t  \t  
\t\t    \t";
        // line 132
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "url_twi", array()), 'label');
        echo "
\t\t\t</div> \t  \t\t    \t
\t\t\t<div class='col-md-10'> \t  \t  
\t\t    \t";
        // line 135
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "url_twi", array()), 'widget');
        echo "
\t \t   \t \t";
        // line 136
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "url_twi", array()), 'errors');
        echo "
\t\t\t</div> \t  \t
\t\t</div> \t      
\t
\t\t<div class='row'>\t
\t\t\t<div class='col-md-2'> \t  \t  
\t\t    \t";
        // line 142
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "url_aut", array()), 'label');
        echo "
\t\t\t</div> \t  \t\t    \t
\t\t\t<div class='col-md-10'> \t  \t  
\t\t    \t";
        // line 145
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "url_aut", array()), 'widget');
        echo "
\t \t   \t \t";
        // line 146
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "url_aut", array()), 'errors');
        echo "
\t\t\t</div> \t  \t
\t\t</div> \t   
\t                          
     
\t</div>\t\t
\t
\t
\t

\t";
        // line 156
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "
        
\t<div class='row'>\t
\t\t\t<div class='col-md-3'> 
\t\t\t\t";
        // line 160
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit", array()), 'widget');
        echo " 
\t\t\t</div>
\t    \t<div class='col-md-3'>
\t    \t\t<a href=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("programs_courses", array("id" => $this->getAttribute((isset($context["program"]) ? $context["program"] : $this->getContext($context, "program")), "id", array()))), "html", null, true);
        echo "\"><span class=\"glyphicon glyphicon-arrow-left\"></span>  Retour à la liste des cours (UE)</a>
\t    \t</div>
\t</div>
\t
  </div>         
  
   

";
    }

    public function getTemplateName()
    {
        return "IfeAloesBundle:Course:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  315 => 163,  309 => 160,  302 => 156,  289 => 146,  285 => 145,  279 => 142,  270 => 136,  266 => 135,  260 => 132,  251 => 126,  247 => 125,  241 => 122,  232 => 116,  228 => 115,  222 => 112,  212 => 105,  208 => 104,  202 => 101,  193 => 95,  189 => 94,  183 => 91,  173 => 84,  169 => 83,  163 => 80,  157 => 77,  153 => 76,  147 => 73,  138 => 67,  134 => 66,  128 => 63,  118 => 56,  114 => 55,  108 => 52,  98 => 45,  94 => 44,  88 => 41,  77 => 33,  73 => 32,  67 => 29,  58 => 23,  54 => 22,  48 => 19,  39 => 13,  31 => 7,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'IfeAloesBundle:Program:layout.html.twig' %}*/
/* */
/* {% block content -%}*/
/* */
/* */
/*  	*/
/*     	<div class='title-two1a col-md-12 col-sm-12'>     	*/
/*     		Nouveau cours (UE)			*/
/* 		</div>*/
/* */
/*  */
/* */
/*   {{ form_start(form) }}*/
/* */
/*   <div class='col-sm-12 container-fluid block3'>	 */
/*     <br/> */
/* 	<div class='row'>	*/
/* 		<div class='col-md-2'> 	  	  */
/* 	    	{{ form_label(form.label) }}*/
/* 		</div> 	  		    	*/
/* 		<div class='col-md-10'> 	  	  */
/* 	    	{{ form_widget(form.label) }}*/
/* 	 	    {{ form_errors(form.label) }}	 */
/* 		</div> 	  	*/
/* 	</div>   */
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
/* */
/* */
/* */
/* 	<div class='row'>	*/
/* 		<div class='col-md-2'> 	  	  */
/* 	    	{{ form_label(form.parcours) }}*/
/* 		</div> 	  		    	*/
/* 		<div class='col-md-10'> 	  	  */
/* 	    	{{ form_widget(form.parcours) }}*/
/* 	 	    {{ form_errors(form.parcours) }}	*/
/* 		</div> 	  	*/
/* 	</div>   */
/* */
/* */
/* 	<div class='row'>	*/
/* 		<div class='col-md-2'> 	  	  */
/* 	    	{{ form_label(form.credits) }}*/
/* 		</div> 	  		    	*/
/* 		<div class='col-md-10'> 	  	  */
/* 	    	{{ form_widget(form.credits) }}*/
/* 	 	    {{ form_errors(form.credits) }}	*/
/* 		</div> 	  	*/
/* 	</div>  */
/* */
/* */
/*     <div class='row'>			*/
/* 			<div class='col-md-2'> 	  	  */
/* 		    	{{ form_label(form.isOptional) }}*/
/* 			</div> 	  		    	 */
/* 			<div class='col-md-10'> 	  	  */
/* 		    	{{ form_widget(form.isOptional) }}*/
/* 	 	    	{{ form_errors(form.isOptional) }}*/
/* 			</div> 		*/
/*     </div>  */
/*     */
/*     <div class='row'>	    */
/*     		<div class='col-md-2'> 	  	  */
/* 		    	{{ form_label(form.semestres) }}*/
/* 			</div> 	  		    	*/
/* 			<div class='col-md-4'> 	  	  */
/* 		    	{{ form_widget(form.semestres) }}*/
/* 		 	    {{ form_errors(form.semestres) }}	*/
/* 			</div> 	  */
/* 			<div class='col-md-2'> 	  	  */
/* 		    	{{ form_label(form.year) }}*/
/* 			</div> 	  		    	*/
/* 			<div class='col-md-4'> 	  	  */
/* 		    	{{ form_widget(form.year) }}*/
/* 		 	    {{ form_errors(form.year) }}	*/
/* 			</div> 				*/
/* 	</div>*/
/* 	*/
/* 	*/
/* 		<div class='row'>	*/
/* 			<div class='col-md-2'> 	  	  */
/* 		    	{{ form_label(form.langues) }}*/
/* 			</div> 	  		    	*/
/* 			<div class='col-md-10'> 	  	  */
/* 		    	{{ form_widget(form.langues) }}*/
/* 		 	    {{ form_errors(form.langues) }}	*/
/* 			</div> 	  	*/
/* 		</div>  	*/
/* */
/* 	<div class='row'>	*/
/* 		<div class='col-md-2'> 	  	  */
/* 	    	{{ form_label(form.publicationState) }}*/
/* 		</div> 	  		    	*/
/* 		<div class='col-md-10'> 	  	  */
/* 	    	{{ form_widget(form.publicationState) }}*/
/* 	 	    {{ form_errors(form.publicationState) }}	*/
/* 		</div> 	  	*/
/* 	</div>   */
/* 	*/
/* 	<div class="col-sm-12 block3b">    */
/* 		<div class='row'>	*/
/* 			<div class='col-md-2'> 	  	  */
/* 		    	{{ form_label(form.url_ped) }}*/
/* 			</div> 	  		    	*/
/* 			<div class='col-md-10'> 	  	  */
/* 		    	{{ form_widget(form.url_ped) }}*/
/* 	 	   	 	{{ form_errors(form.url_ped) }}*/
/* 			</div> 	  	*/
/* 		</div> 	            */
/* */
/* 		<div class='row'>	*/
/* 			<div class='col-md-2'> 	  	  */
/* 		    	{{ form_label(form.url_web) }}*/
/* 			</div> 	  		    	*/
/* 			<div class='col-md-10'> 	  	  */
/* 		    	{{ form_widget(form.url_web) }}*/
/* 	 	   	 	{{ form_errors(form.url_web) }}*/
/* 			</div> 	  	*/
/* 		</div> 	            */
/* 	*/
/* 		<div class='row'>	*/
/* 			<div class='col-md-2'> 	  	  */
/* 		    	{{ form_label(form.url_twi) }}*/
/* 			</div> 	  		    	*/
/* 			<div class='col-md-10'> 	  	  */
/* 		    	{{ form_widget(form.url_twi) }}*/
/* 	 	   	 	{{ form_errors(form.url_twi) }}*/
/* 			</div> 	  	*/
/* 		</div> 	      */
/* 	*/
/* 		<div class='row'>	*/
/* 			<div class='col-md-2'> 	  	  */
/* 		    	{{ form_label(form.url_aut) }}*/
/* 			</div> 	  		    	*/
/* 			<div class='col-md-10'> 	  	  */
/* 		    	{{ form_widget(form.url_aut) }}*/
/* 	 	   	 	{{ form_errors(form.url_aut) }}*/
/* 			</div> 	  	*/
/* 		</div> 	   */
/* 	                          */
/*      */
/* 	</div>		*/
/* 	*/
/* 	*/
/* 	*/
/* */
/* 	{{ form_widget(form._token) }}*/
/*         */
/* 	<div class='row'>	*/
/* 			<div class='col-md-3'> */
/* 				{{ form_widget(form.submit)}} */
/* 			</div>*/
/* 	    	<div class='col-md-3'>*/
/* 	    		<a href="{{ path('programs_courses',{id:program.id}) }}"><span class="glyphicon glyphicon-arrow-left"></span>  Retour à la liste des cours (UE)</a>*/
/* 	    	</div>*/
/* 	</div>*/
/* 	*/
/*   </div>         */
/*   */
/*    */
/* */
/* {% endblock %}*/
/* */
