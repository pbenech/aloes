<?php

/* IfeAloesBundle:Course:infos_show.html.twig */
class __TwigTemplate_8915b8f4879a3309516a76e4ee934e02ebc430606f67dc30a4e744487c1de193 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("IfeAloesBundle:Course:layout.html.twig", "IfeAloesBundle:Course:infos_show.html.twig", 1);
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
        // line 6
        echo "<div class='title-two1a col-md-9 col-sm-9'> 
\t\t\tInformations du cours
\t\t</div>
    \t<div class='title-two1b col-md-3 col-sm-3' style=\"text-align:right\">
\t\t\t";
        // line 10
        if (((($this->env->getExtension('security')->isGranted("ROLE_ENSEIGNANT") && $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "isRedacteur", array(0 => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array())), "method")) || ($this->env->getExtension('security')->isGranted("ROLE_RESPONSABLE") && $this->getAttribute(        // line 11
(isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "isRedacteur", array(0 => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array())), "method"))) || $this->env->getExtension('security')->isGranted("ROLE_ADMIN"))) {
            // line 14
            echo "\t\t\t        <a class=\"btn1 btn-color4\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("courses_infos_edit", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
            echo "\">
\t\t\t            <span class=\"glyphicon glyphicon-edit\"></span> Modifier informations
\t\t\t        </a>
\t\t\t";
        }
        // line 17
        echo "\t
    \t</div> \t\t


\t
\t
\t<div class='col-sm-12 container-fluid block3'>\t
\t\t\t<br/>
\t       ";
        // line 25
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "description", array()) != "")) {
            echo "    
\t\t\t\t<div class='row'>\t
\t\t\t\t\t<div class='col-md-2 attribut'> \t  \t  
\t\t\t\t    \tDescription : 
\t\t\t\t\t</div> \t  \t\t    \t
\t\t\t\t\t<div class='col-md-10' > \t  \t  
\t\t\t\t    \t<div  style=\"overflow:auto; height: 200px; width: 100%; padding: 15px; border: 1px solid #AAAAAA\">
\t\t\t\t    \t\t";
            // line 32
            echo $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "description", array());
            echo "
\t\t\t\t    \t</div>
\t\t\t\t\t</div> \t  \t
\t\t\t\t</div>  \t                  
\t       ";
        }
        // line 36
        echo "\t    
\t       

\t       ";
        // line 39
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "Pedagogy", array()) != "")) {
            echo " 
\t\t\t\t<div class='row'>\t
\t\t\t\t\t<div class='col-md-2 attribut'> \t  \t  
\t\t\t\t    \tMéthodes Pédagogiques&nbsp;: 
\t\t\t\t\t</div> \t  \t\t    \t
\t\t\t\t\t<div class='col-md-10'> \t 
\t\t\t\t\t \t<div  style=\"overflow:auto; height: 200px; width: 100%; padding: 15px; border: 1px solid #AAAAAA\">  
\t\t\t\t    \t\t";
            // line 46
            echo $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "Pedagogy", array());
            echo "
\t\t\t\t    \t</div>
\t\t\t\t\t</div> \t  \t
\t\t\t\t</div>  \t              \t       
\t       ";
        }
        // line 50
        echo "\t    \t       



\t       ";
        // line 54
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "evaluation", array()) != "")) {
            echo "  
 \t\t\t\t<div class='row'>\t
\t\t\t\t\t<div class='col-md-2 attribut'> \t  \t  
\t\t\t\t    \tEvaluation : 
\t\t\t\t\t</div> \t  \t\t    \t
\t\t\t\t\t<div class='col-md-10'> \t
\t\t\t\t    \t<div  style=\"overflow:auto; height: 200px; width: 100%; padding: 15px; border: 1px solid #AAAAAA\">\t  
\t\t\t\t    \t\t";
            // line 61
            echo $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "evaluation", array());
            echo "
\t\t\t\t    \t</div>
\t\t\t\t\t</div> \t  \t
\t\t\t\t</div>    \t             
\t       ";
        }
        // line 65
        echo "\t

\t       ";
        // line 67
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "resources", array()) != "")) {
            echo "  
 \t\t\t\t<div class='row'>\t
\t\t\t\t\t<div class='col-md-2 attribut'> \t  \t  
\t\t\t\t    \tRessources : 
\t\t\t\t\t</div> \t  \t\t    \t
\t\t\t\t\t<div class='col-md-10'> \t
\t\t\t\t    \t<div  style=\"overflow:auto; height: 200px; width: 100%; padding: 15px; border: 1px solid #AAAAAA\">\t\t\t\t\t  \t  
\t\t\t\t    \t\t";
            // line 74
            echo $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "resources", array());
            echo "
\t\t\t\t    \t</div>\t
\t\t\t\t\t</div> \t  \t
\t\t\t\t</div>      \t       
\t       ";
        }
        // line 78
        echo "\t \t       

\t       ";
        // line 80
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "rules", array()) != "")) {
            echo "        
 \t\t\t\t<div class='row'>\t
\t\t\t\t\t<div class='col-md-2 attribut'> \t  \t  
\t\t\t\t    \tRèglements : 
\t\t\t\t\t</div> \t  \t\t    \t
\t\t\t\t\t<div class='col-md-10'> \t 
\t\t\t\t    \t<div  style=\"overflow:auto; height: 200px; width: 100%; padding: 15px; border: 1px solid #AAAAAA\">\t  
\t\t\t\t    \t\t";
            // line 87
            echo $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "rules", array());
            echo "
\t\t\t\t    \t</div>\t
\t\t\t\t\t</div> \t  \t
\t\t\t\t</div>    \t       
\t       ";
        }
        // line 91
        echo "\t
 
\t       ";
        // line 93
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "infos", array()) != "")) {
            echo "  
 \t\t\t\t<div class='row'>\t
\t\t\t\t\t<div class='col-md-2 attribut'> \t  \t  
\t\t\t\t    \tAutres informations utiles : 
\t\t\t\t\t</div> \t  \t\t    \t
\t\t\t\t\t<div class='col-md-10'> \t
\t\t\t\t    \t<div  style=\"overflow:auto; height: 200px; width: 100%; padding: 15px; border: 1px solid #AAAAAA\">\t  
\t\t\t\t    \t\t";
            // line 100
            echo $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "infos", array());
            echo "
\t\t\t\t    \t</div>
\t\t\t\t\t</div> \t  \t
\t\t\t\t</div>    \t             
\t       ";
        }
        // line 104
        echo "\t


\t</div>

\t
\t
";
    }

    public function getTemplateName()
    {
        return "IfeAloesBundle:Course:infos_show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 104,  181 => 100,  171 => 93,  167 => 91,  159 => 87,  149 => 80,  145 => 78,  137 => 74,  127 => 67,  123 => 65,  115 => 61,  105 => 54,  99 => 50,  91 => 46,  81 => 39,  76 => 36,  68 => 32,  58 => 25,  48 => 17,  40 => 14,  38 => 11,  37 => 10,  31 => 6,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'IfeAloesBundle:Course:layout.html.twig' %}*/
/* */
/* {% block content -%}*/
/*    	*/
/*    	*/
/*     	<div class='title-two1a col-md-9 col-sm-9'> */
/* 			Informations du cours*/
/* 		</div>*/
/*     	<div class='title-two1b col-md-3 col-sm-3' style="text-align:right">*/
/* 			{% if ( is_granted("ROLE_ENSEIGNANT")  and course.isRedacteur(app.user.id) ) or */
/* 			      ( is_granted("ROLE_RESPONSABLE") and course.isRedacteur(app.user.id) ) or  */
/* 			      ( is_granted("ROLE_ADMIN") )*/
/* 			 %}*/
/* 			        <a class="btn1 btn-color4" href="{{ path('courses_infos_edit', { 'id': course.id }) }}">*/
/* 			            <span class="glyphicon glyphicon-edit"></span> Modifier informations*/
/* 			        </a>*/
/* 			{% endif %}	*/
/*     	</div> 		*/
/* */
/* */
/* 	*/
/* 	*/
/* 	<div class='col-sm-12 container-fluid block3'>	*/
/* 			<br/>*/
/* 	       {% if course.description !="" %}    */
/* 				<div class='row'>	*/
/* 					<div class='col-md-2 attribut'> 	  	  */
/* 				    	Description : */
/* 					</div> 	  		    	*/
/* 					<div class='col-md-10' > 	  	  */
/* 				    	<div  style="overflow:auto; height: 200px; width: 100%; padding: 15px; border: 1px solid #AAAAAA">*/
/* 				    		{{ course.description|raw  }}*/
/* 				    	</div>*/
/* 					</div> 	  	*/
/* 				</div>  	                  */
/* 	       {% endif %}	    */
/* 	       */
/* */
/* 	       {% if course.Pedagogy !="" %} */
/* 				<div class='row'>	*/
/* 					<div class='col-md-2 attribut'> 	  	  */
/* 				    	Méthodes Pédagogiques&nbsp;: */
/* 					</div> 	  		    	*/
/* 					<div class='col-md-10'> 	 */
/* 					 	<div  style="overflow:auto; height: 200px; width: 100%; padding: 15px; border: 1px solid #AAAAAA">  */
/* 				    		{{ course.Pedagogy|raw   }}*/
/* 				    	</div>*/
/* 					</div> 	  	*/
/* 				</div>  	              	       */
/* 	       {% endif %}	    	       */
/* */
/* */
/* */
/* 	       {% if course.evaluation !="" %}  */
/*  				<div class='row'>	*/
/* 					<div class='col-md-2 attribut'> 	  	  */
/* 				    	Evaluation : */
/* 					</div> 	  		    	*/
/* 					<div class='col-md-10'> 	*/
/* 				    	<div  style="overflow:auto; height: 200px; width: 100%; padding: 15px; border: 1px solid #AAAAAA">	  */
/* 				    		{{ course.evaluation|raw   }}*/
/* 				    	</div>*/
/* 					</div> 	  	*/
/* 				</div>    	             */
/* 	       {% endif %}	*/
/* */
/* 	       {% if course.resources !="" %}  */
/*  				<div class='row'>	*/
/* 					<div class='col-md-2 attribut'> 	  	  */
/* 				    	Ressources : */
/* 					</div> 	  		    	*/
/* 					<div class='col-md-10'> 	*/
/* 				    	<div  style="overflow:auto; height: 200px; width: 100%; padding: 15px; border: 1px solid #AAAAAA">					  	  */
/* 				    		{{ course.resources|raw    }}*/
/* 				    	</div>	*/
/* 					</div> 	  	*/
/* 				</div>      	       */
/* 	       {% endif %}	 	       */
/* */
/* 	       {% if course.rules !="" %}        */
/*  				<div class='row'>	*/
/* 					<div class='col-md-2 attribut'> 	  	  */
/* 				    	Règlements : */
/* 					</div> 	  		    	*/
/* 					<div class='col-md-10'> 	 */
/* 				    	<div  style="overflow:auto; height: 200px; width: 100%; padding: 15px; border: 1px solid #AAAAAA">	  */
/* 				    		{{ course.rules|raw    }}*/
/* 				    	</div>	*/
/* 					</div> 	  	*/
/* 				</div>    	       */
/* 	       {% endif %}	*/
/*  */
/* 	       {% if course.infos !="" %}  */
/*  				<div class='row'>	*/
/* 					<div class='col-md-2 attribut'> 	  	  */
/* 				    	Autres informations utiles : */
/* 					</div> 	  		    	*/
/* 					<div class='col-md-10'> 	*/
/* 				    	<div  style="overflow:auto; height: 200px; width: 100%; padding: 15px; border: 1px solid #AAAAAA">	  */
/* 				    		{{ course.infos|raw   }}*/
/* 				    	</div>*/
/* 					</div> 	  	*/
/* 				</div>    	             */
/* 	       {% endif %}	*/
/* */
/* */
/* 	</div>*/
/* */
/* 	*/
/* 	*/
/* {% endblock %}*/
/* */
