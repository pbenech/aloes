<?php

/* IfeAloesBundle:Event:show.html.twig */
class __TwigTemplate_5535735abfa75227ecc4a3916b9f16ee4dfd882ceafe8fa28a59dd104973236c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("IfeAloesBundle:Course:layout.html.twig", "IfeAloesBundle:Event:show.html.twig", 1);
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
        echo "
   \t<div class='title-one'> ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "title", array()), "html", null, true);
        echo " </div>
    <div class='row'>    \t
    \t<div class='title-two col-md-9 col-sm-9'> 
\t\t\tEdition d'un évènement
\t\t</div>
    \t<div class='col-md-3 col-sm-3'>
\t\t\t";
        // line 11
        if (((($this->env->getExtension('security')->isGranted("ROLE_ENSEIGNANT") && $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "isRedacteur", array(0 => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array())), "method")) || ($this->env->getExtension('security')->isGranted("ROLE_RESPONSABLE") && $this->getAttribute(        // line 12
(isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "isRedacteur", array(0 => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array())), "method"))) || $this->env->getExtension('security')->isGranted("ROLE_ADMIN"))) {
            // line 15
            echo "\t\t        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("event_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
            echo "\">
\t\t            <span class=\"glyphicon glyphicon-edit\"></span> Modifier évènement
\t\t        </a>
\t\t\t";
        }
        // line 18
        echo "    \t
    \t</div> \t\t
    </div>
 
 
 \t<div class='container-fluid'>\t

\t\t<fieldset>\t

\t       ";
        // line 27
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "title", array()) != "")) {
            echo "               
\t\t\t\t<div class='row'>\t
\t\t\t\t\t<div class='col-md-3 attribut'> \t  \t  
\t\t\t\t    \tTitre
\t\t\t\t\t</div> \t  \t\t    \t
\t\t\t\t\t<div class='col-md-9'> \t  \t  
\t\t\t\t    \t";
            // line 33
            echo $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "title", array());
            echo " 
\t\t\t\t\t</div> \t  \t
\t\t\t\t</div>               
\t       ";
        }
        // line 36
        echo "\t 
        
\t       ";
        // line 38
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "startDate", array()) != "")) {
            echo "               
\t\t\t\t<div class='row'>\t
\t\t\t\t\t<div class='col-md-3 attribut'> \t  \t  
\t\t\t\t    \tDates(s)
\t\t\t\t\t</div> \t  \t\t    \t
\t\t\t\t\t<div class='col-md-9'> \t  \t  
\t\t\t\t    \t";
            // line 44
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "startDate", array()), "Y-m-d H:i:s"), "html", null, true);
            echo " 
\t\t\t\t    \t";
            // line 45
            if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "endDate", array(), "any", true, true) && ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "endDate", array()) != null))) {
                // line 46
                echo "\t\t\t\t    \t-> ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "endDate", array()), "Y-m-d H:i:s"), "html", null, true);
                echo "
\t\t\t\t    \t";
            }
            // line 48
            echo "\t\t\t\t\t</div> \t  \t
\t\t\t\t</div>               
\t       ";
        }
        // line 50
        echo "\t 
\t       
\t       ";
        // line 52
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "description", array()) != "")) {
            echo "               
\t\t\t\t<div class='row'>\t
\t\t\t\t\t<div class='col-md-3 attribut'> \t  \t  
\t\t\t\t    \tDescription
\t\t\t\t\t</div> \t  \t\t    \t
\t\t\t\t\t<div class='col-md-9' > \t  \t  
\t\t\t\t    \t<div  style=\"overflow:auto; height: 200px; width: 100%; padding: 15px; border: 1px solid #AAAAAA\">\t  
\t\t\t\t    \t\t";
            // line 59
            echo $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "description", array());
            echo "
\t\t\t\t        </div>\t
\t\t\t\t\t</div> \t  \t
\t\t\t\t</div>               
\t       ";
        }
        // line 63
        echo "\t\t

\t       ";
        // line 65
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "instructions", array()) != "")) {
            echo "               
\t\t\t\t<div class='row'>\t
\t\t\t\t\t<div class='col-md-3 attribut'> \t  \t  
\t\t\t\t    \tInstructions
\t\t\t\t\t</div> \t  \t\t    \t
\t\t\t\t\t<div class='col-md-9' > \t  \t  
\t\t\t\t    \t<div  style=\"overflow:auto; height: 200px; width: 100%; padding: 15px; border: 1px solid #AAAAAA\">\t \t  
\t\t\t\t    \t";
            // line 72
            echo $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "instructions", array());
            echo "
\t\t\t\t        </div>\t
\t\t\t\t\t</div> \t  \t
\t\t\t\t</div>              
\t       ";
        }
        // line 76
        echo "\t

\t       ";
        // line 78
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "instructions", array()) != "")) {
            echo "               
\t\t\t\t<div class='row'>\t
\t\t\t\t\t<div class='col-md-3 attribut'> \t  \t  
\t\t\t\t    \tTutoring
\t\t\t\t\t</div> \t  \t\t    \t
\t\t\t\t\t<div class='col-md-9' > \t  \t  
\t\t\t\t    \t<div  style=\"overflow:auto; height: 200px; width: 100%; padding: 15px; border: 1px solid #AAAAAA\">  
\t\t\t\t    \t";
            // line 85
            echo $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "tutoring", array());
            echo "
\t\t\t\t        </div>\t
\t\t\t\t\t</div> \t  \t
\t\t\t\t</div>              
\t       ";
        }
        // line 89
        echo "\t
\t       
\t       ";
        // line 91
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "resources", array()) != "")) {
            echo "               
\t\t\t\t<div class='row'>\t
\t\t\t\t\t<div class='col-md-3 attribut'> \t  \t  
\t\t\t\t    \tRessources
\t\t\t\t\t</div> \t  \t\t    \t
\t\t\t\t\t<div class='col-md-9' > \t  \t  
\t\t\t\t    \t<div  style=\"overflow:auto; height: 200px; width: 100%; padding: 15px; border: 1px solid #AAAAAA\">  \t  
\t\t\t\t    \t";
            // line 98
            echo $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "resources", array());
            echo "
\t\t\t\t        </div>\t
\t\t\t\t\t</div> \t  \t
\t\t\t\t</div>             
\t       ";
        }
        // line 102
        echo "\t
\t       
\t\t</fieldset>\t
\t\t
\t\t<div class='row'>\t
\t\t\t<div class='col-md-9'> 
\t\t\t\t<a href=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_event", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
        echo "\" ><span class=\"glyphicon glyphicon-arrow-left\"></span>  Retour à la liste des évènements</a>\t\t
\t\t\t</div>
\t\t</div>\t
\t</div>



";
    }

    public function getTemplateName()
    {
        return "IfeAloesBundle:Event:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 108,  199 => 102,  191 => 98,  181 => 91,  177 => 89,  169 => 85,  159 => 78,  155 => 76,  147 => 72,  137 => 65,  133 => 63,  125 => 59,  115 => 52,  111 => 50,  106 => 48,  100 => 46,  98 => 45,  94 => 44,  85 => 38,  81 => 36,  74 => 33,  65 => 27,  54 => 18,  46 => 15,  44 => 12,  43 => 11,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'IfeAloesBundle:Course:layout.html.twig' %}*/
/* */
/* {% block content %}*/
/* */
/*    	<div class='title-one'> {{ course.title }} </div>*/
/*     <div class='row'>    	*/
/*     	<div class='title-two col-md-9 col-sm-9'> */
/* 			Edition d'un évènement*/
/* 		</div>*/
/*     	<div class='col-md-3 col-sm-3'>*/
/* 			{% if ( is_granted("ROLE_ENSEIGNANT")  and course.isRedacteur(app.user.id) ) or */
/* 			      ( is_granted("ROLE_RESPONSABLE") and course.isRedacteur(app.user.id) ) or  */
/* 			      ( is_granted("ROLE_ADMIN") )*/
/* 			 %}*/
/* 		        <a href="{{ path('event_edit', { 'id': entity.id }) }}">*/
/* 		            <span class="glyphicon glyphicon-edit"></span> Modifier évènement*/
/* 		        </a>*/
/* 			{% endif %}    	*/
/*     	</div> 		*/
/*     </div>*/
/*  */
/*  */
/*  	<div class='container-fluid'>	*/
/* */
/* 		<fieldset>	*/
/* */
/* 	       {% if entity.title !="" %}               */
/* 				<div class='row'>	*/
/* 					<div class='col-md-3 attribut'> 	  	  */
/* 				    	Titre*/
/* 					</div> 	  		    	*/
/* 					<div class='col-md-9'> 	  	  */
/* 				    	{{ entity.title|raw }} */
/* 					</div> 	  	*/
/* 				</div>               */
/* 	       {% endif %}	 */
/*         */
/* 	       {% if entity.startDate !="" %}               */
/* 				<div class='row'>	*/
/* 					<div class='col-md-3 attribut'> 	  	  */
/* 				    	Dates(s)*/
/* 					</div> 	  		    	*/
/* 					<div class='col-md-9'> 	  	  */
/* 				    	{{ entity.startDate|date('Y-m-d H:i:s') }} */
/* 				    	{% if entity.endDate is defined and entity.endDate !=null %}*/
/* 				    	-> {{ entity.endDate|date('Y-m-d H:i:s') }}*/
/* 				    	{% endif %}*/
/* 					</div> 	  	*/
/* 				</div>               */
/* 	       {% endif %}	 */
/* 	       */
/* 	       {% if entity.description !="" %}               */
/* 				<div class='row'>	*/
/* 					<div class='col-md-3 attribut'> 	  	  */
/* 				    	Description*/
/* 					</div> 	  		    	*/
/* 					<div class='col-md-9' > 	  	  */
/* 				    	<div  style="overflow:auto; height: 200px; width: 100%; padding: 15px; border: 1px solid #AAAAAA">	  */
/* 				    		{{ entity.description|raw }}*/
/* 				        </div>	*/
/* 					</div> 	  	*/
/* 				</div>               */
/* 	       {% endif %}		*/
/* */
/* 	       {% if entity.instructions !="" %}               */
/* 				<div class='row'>	*/
/* 					<div class='col-md-3 attribut'> 	  	  */
/* 				    	Instructions*/
/* 					</div> 	  		    	*/
/* 					<div class='col-md-9' > 	  	  */
/* 				    	<div  style="overflow:auto; height: 200px; width: 100%; padding: 15px; border: 1px solid #AAAAAA">	 	  */
/* 				    	{{ entity.instructions|raw }}*/
/* 				        </div>	*/
/* 					</div> 	  	*/
/* 				</div>              */
/* 	       {% endif %}	*/
/* */
/* 	       {% if entity.instructions !="" %}               */
/* 				<div class='row'>	*/
/* 					<div class='col-md-3 attribut'> 	  	  */
/* 				    	Tutoring*/
/* 					</div> 	  		    	*/
/* 					<div class='col-md-9' > 	  	  */
/* 				    	<div  style="overflow:auto; height: 200px; width: 100%; padding: 15px; border: 1px solid #AAAAAA">  */
/* 				    	{{ entity.tutoring|raw }}*/
/* 				        </div>	*/
/* 					</div> 	  	*/
/* 				</div>              */
/* 	       {% endif %}	*/
/* 	       */
/* 	       {% if entity.resources !="" %}               */
/* 				<div class='row'>	*/
/* 					<div class='col-md-3 attribut'> 	  	  */
/* 				    	Ressources*/
/* 					</div> 	  		    	*/
/* 					<div class='col-md-9' > 	  	  */
/* 				    	<div  style="overflow:auto; height: 200px; width: 100%; padding: 15px; border: 1px solid #AAAAAA">  	  */
/* 				    	{{ entity.resources|raw }}*/
/* 				        </div>	*/
/* 					</div> 	  	*/
/* 				</div>             */
/* 	       {% endif %}	*/
/* 	       */
/* 		</fieldset>	*/
/* 		*/
/* 		<div class='row'>	*/
/* 			<div class='col-md-9'> */
/* 				<a href="{{path('course_event', {id:course.id})}}" ><span class="glyphicon glyphicon-arrow-left"></span>  Retour à la liste des évènements</a>		*/
/* 			</div>*/
/* 		</div>	*/
/* 	</div>*/
/* */
/* */
/* */
/* {% endblock %}*/
/* */
