<?php

/* IfeAloesBundle:Assessment2:AS_XX.html.twig */
class __TwigTemplate_169b9cf88742dd7fb8f9492b79b2bd03a6586e091c485a780c11fb566b8ea438 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["macros"] = $this->loadTemplate("IfeAloesBundle:Course:linking.html.twig", "IfeAloesBundle:Assessment2:AS_XX.html.twig", 1);
        echo " 
 
 ";
        // line 3
        if ((array_key_exists("entete", $context) && ((isset($context["entete"]) ? $context["entete"] : $this->getContext($context, "entete")) == true))) {
            // line 4
            echo " \t\t\t<div id=\"AS_";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "id", array()), "html", null, true);
            echo "\" class=\"row block1\">
 ";
        }
        // line 5
        echo " 

\t\t<div id=\"AS_";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "id", array()), "html", null, true);
        echo "_A\" class=\"col-sm-12\">  
 
 \t\t\t<div id=\"AS_";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "id", array()), "html", null, true);
        echo "_list\" class=\"col-sm-3\">
 \t\t\t\t\t\t\t
\t\t\t\t<span  id=\"OS_";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "id", array()), "html", null, true);
        echo "_A_bloc\"  class=\"button2\"  > \t  
\t\t\t\t\t\t\t";
        // line 12
        if ((array_key_exists("type", $context) && ((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "new"))) {
            echo " 
\t\t\t\t\t\t\t\t<span id=\"ASS";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "id", array()), "html", null, true);
            echo "\" onclick=\"HideShow2('#AS_";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "id", array()), "html", null, true);
            echo "_B','#ASS";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "id", array()), "html", null, true);
            echo "');\"><span class=\"glyphicon glyphicon-collapse-up\"></span></span>
\t\t\t\t\t\t\t";
        } else {
            // line 15
            echo "\t\t\t\t\t\t\t\t<span id=\"ASS";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "id", array()), "html", null, true);
            echo "\" onclick=\"HideShow2('#AS_";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "id", array()), "html", null, true);
            echo "_B','#ASS";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "id", array()), "html", null, true);
            echo "');\"><span class=\"glyphicon glyphicon-collapse-down\"></span></span>
\t\t\t\t\t\t\t";
        }
        // line 16
        echo "\t\t\t
\t\t\t\t</span>  

 \t\t\t\t<span id=\"AS_";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "id", array()), "html", null, true);
        echo "_title\" >\t
 \t\t\t\t\t";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "title", array()), "html", null, true);
        echo " \t    
 \t\t    \t</span>    

 \t\t    </div>       

\t\t\t<div id=\"AS_";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "id", array()), "html", null, true);
        echo "_evt\" class=\"col-sm-3\">
\t\t\t\t\t ";
        // line 26
        if ( !(null === $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "event", array()))) {
            // line 27
            echo "\t\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "event", array()), "title", array()), "html", null, true);
            echo " 
\t\t\t\t\t ";
        } else {
            // line 29
            echo "\t\t\t\t\t\t  <span class=\"text-muted small\"> Non spécifié </span>
\t\t\t\t\t ";
        }
        // line 30
        echo "\t
\t\t\t</div>
 
 \t\t\t<div id=\"AS_";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "id", array()), "html", null, true);
        echo "_deadline\" class=\"col-sm-2\">\t
                    ";
        // line 34
        if ( !(null === $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "deadline", array()))) {
            // line 35
            echo "                        ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "deadline", array()), "d/m/Y"), "html", null, true);
            echo "
                    ";
        } else {
            // line 37
            echo "                        <span class=\"text-muted small\"> Non spécifiée </span>
                    ";
        }
        // line 38
        echo " \t\t\t
 \t\t\t</div>
 \t\t\t
 \t\t\t<div id=\"AS_";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "id", array()), "html", null, true);
        echo "_update\" class=\"col-sm-1\"  style=\"text-align:center\" >
\t\t\t\t\t";
        // line 42
        if ($this->getAttribute((isset($context["assessmentObjectives"]) ? $context["assessmentObjectives"] : null), $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "id", array()), array(), "array", true, true)) {
            // line 43
            echo "\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["assessmentObjectives"]) ? $context["assessmentObjectives"] : $this->getContext($context, "assessmentObjectives")), $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "id", array()), array(), "array")), "html", null, true);
            echo " 
\t\t\t\t\t";
        }
        // line 45
        echo " \t\t\t</div>
 \t\t\t
 \t\t\t<div id=\"AS_";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "id", array()), "html", null, true);
        echo "_weight\" class=\"col-sm-1\">";
        echo $context["macros"]->getprogress_bar($this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "weight", array()), "warning");
        echo "</div>  \t\t\t \t\t\t
\t\t\t
 \t\t\t<div id=\"AS_";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "id", array()), "html", null, true);
        echo "_update\" class=\"col-sm-2\"  style=\"text-align:right\" >\t
\t\t\t\t";
        // line 50
        if (((($this->env->getExtension('security')->isGranted("ROLE_ENSEIGNANT") && $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "isRedacteur", array(0 => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array())), "method")) || ($this->env->getExtension('security')->isGranted("ROLE_RESPONSABLE") && $this->getAttribute(        // line 51
(isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "isRedacteur", array(0 => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array())), "method"))) || $this->env->getExtension('security')->isGranted("ROLE_ADMIN"))) {
            // line 53
            echo "\t     \t\t\t \t\t                    
\t\t\t\t\t<a data-toggle=\"modal\" class=\"btn2 btn-warning\" href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("topic_assessment_edit_2", array("id" => $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "id", array()))), "html", null, true);
            echo "\" data-target=\"#myModal\"><span class=\"glyphicon glyphicon-edit\"></span> </a> \t\t\t\t        

\t\t\t\t  \t<a data-toggle=\"modal\" class=\"btn2 btn-danger\" href=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("topic_assessment_del_2", array("id" => $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "id", array()))), "html", null, true);
            echo "\" data-target=\"#myModal\"><span class=\"glyphicon glyphicon-trash\"></span> </a> \t\t\t\t \t\t\t\t  \t               

                  ";
        }
        // line 59
        echo " \t
             \t\t 
 \t\t\t</div>
          
        </div> 

            

\t\t   <div id=\"AS_";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "id", array()), "html", null, true);
        echo "_B\"  style=\"display: none;background-color:white\"  class=\"col-sm-12 block1\">  
\t\t            
\t       ";
        // line 69
        if (($this->getAttribute((isset($context["assessmentObjectives"]) ? $context["assessmentObjectives"] : null), $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "id", array()), array(), "array", true, true) && ($this->getAttribute((isset($context["assessmentObjectives"]) ? $context["assessmentObjectives"] : $this->getContext($context, "assessmentObjectives")), $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "id", array()), array(), "array") != null))) {
            echo " 

\t        \t<div class=\"col-sm-2 col-sm-offset-1 label2\">
\t        \t\tObjectifs
\t        \t</div>
\t        \t<div class=\"col-sm-9 label2\">
\t        \t\tCompétences
\t        \t</div>\t        \t

\t\t\t            
\t\t            \t\t";
            // line 79
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["assessmentObjectives"]) ? $context["assessmentObjectives"] : $this->getContext($context, "assessmentObjectives")), $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "id", array()), array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["ao"]) {
                // line 80
                echo "\t\t            \t\t\t<div id=\"AS_";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "id", array()), "html", null, true);
                echo "_B_titre\" class=\"col-sm-11 col-sm-offset-1\">
\t\t            \t\t\t\t<span class=\"glyphicon glyphicon-unchecked\"></span>   
\t\t            \t\t\t\t
\t\t            \t\t\t\t";
                // line 83
                echo twig_escape_filter($this->env, $this->getAttribute($context["ao"], "title", array()), "html", null, true);
                echo "
\t\t            \t\t\t\t
\t\t            \t\t\t\t
\t\t\t\t\t            \t";
                // line 86
                if (($this->getAttribute($context["ao"], "rating", array()) == 1)) {
                    // line 87
                    echo "\t\t\t\t\t            \t\t\t\t \t<span title=\"";
                    echo twig_escape_filter($this->env, ($this->getAttribute($context["ao"], "weight", array()) * 100), "html", null, true);
                    echo "%\">[secondaire]</span>\t\t\t \t\t\t\t\t\t\t            \t\t\t\t
\t\t\t\t\t            \t";
                } elseif (($this->getAttribute(                // line 88
$context["ao"], "rating", array()) == 2)) {
                    // line 89
                    echo "\t\t\t\t\t            \t\t\t\t\t<span title=\"";
                    echo twig_escape_filter($this->env, ($this->getAttribute($context["ao"], "weight", array()) * 100), "html", null, true);
                    echo "%\">[principale]</span>\t\t\t \t\t\t\t\t\t\t\t            \t\t\t\t
\t\t\t\t\t            \t";
                }
                // line 90
                echo "\t\t\t            \t\t\t\t
\t\t            \t\t\t\t
\t\t            \t\t\t\t<br/>
\t\t            \t\t\t</div>\t\t\t
\t\t            \t\t\t\t";
                // line 94
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["ao"], "competences", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["cs"]) {
                    // line 95
                    echo "\t\t            \t\t\t\t\t<div id=\"AS_";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "id", array()), "html", null, true);
                    echo "_B_titre\" class=\"col-sm-9 col-sm-offset-3\">\t  
\t\t            \t\t\t\t\t\t*  ";
                    // line 96
                    echo twig_escape_filter($this->env, $this->getAttribute($context["cs"], "title", array()), "html", null, true);
                    echo "\t 
\t\t            \t\t\t\t\t\t
\t\t\t\t\t            \t\t\t\t";
                    // line 98
                    if (($this->getAttribute($context["cs"], "rating", array()) == 1)) {
                        // line 99
                        echo "\t\t\t\t\t            \t\t\t\t \t<span title=\"";
                        echo twig_escape_filter($this->env, ($this->getAttribute($context["cs"], "weight", array()) * 100), "html", null, true);
                        echo "%\">[secondaire]</span>\t\t\t \t\t\t\t\t\t\t            \t\t\t\t
\t\t\t\t\t            \t\t\t\t";
                    } elseif (($this->getAttribute(                    // line 100
$context["cs"], "rating", array()) == 2)) {
                        // line 101
                        echo "\t\t\t\t\t            \t\t\t\t\t<span title=\"";
                        echo twig_escape_filter($this->env, ($this->getAttribute($context["cs"], "weight", array()) * 100), "html", null, true);
                        echo "%\">[principale]</span>\t\t\t \t\t\t\t\t\t\t\t            \t\t\t\t
\t\t\t\t\t            \t\t\t\t";
                    }
                    // line 102
                    echo "\t\t
\t\t\t\t\t            \t\t\t\t
\t\t\t\t\t            \t\t\t\t           \t\t\t\t\t\t
\t\t            \t\t\t\t\t\t
\t\t            \t\t\t\t\t\t<br/>
\t\t            \t\t\t\t\t</div>\t
\t\t            \t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cs'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 109
                echo "\t\t            \t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ao'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 110
            echo "\t\t\t          
           ";
        } else {
            // line 112
            echo "           \tAucun objectif associé actuellement 
           ";
        }
        // line 113
        echo "  
                
           </div>\t       
           
 

 
  ";
        // line 120
        if ((array_key_exists("entete", $context) && ((isset($context["entete"]) ? $context["entete"] : $this->getContext($context, "entete")) == true))) {
            echo "\t\t\t
\t\t  \t</div>\t \t\t\t\t\t\t
 ";
        }
        // line 122
        echo " 
            ";
    }

    public function getTemplateName()
    {
        return "IfeAloesBundle:Assessment2:AS_XX.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  312 => 122,  306 => 120,  297 => 113,  293 => 112,  289 => 110,  283 => 109,  271 => 102,  265 => 101,  263 => 100,  258 => 99,  256 => 98,  251 => 96,  246 => 95,  242 => 94,  236 => 90,  230 => 89,  228 => 88,  223 => 87,  221 => 86,  215 => 83,  208 => 80,  204 => 79,  191 => 69,  186 => 67,  176 => 59,  170 => 56,  165 => 54,  162 => 53,  160 => 51,  159 => 50,  155 => 49,  148 => 47,  144 => 45,  138 => 43,  136 => 42,  132 => 41,  127 => 38,  123 => 37,  117 => 35,  115 => 34,  111 => 33,  106 => 30,  102 => 29,  96 => 27,  94 => 26,  90 => 25,  82 => 20,  78 => 19,  73 => 16,  63 => 15,  54 => 13,  50 => 12,  46 => 11,  41 => 9,  36 => 7,  32 => 5,  26 => 4,  24 => 3,  19 => 1,);
    }
}
/* {% import 'IfeAloesBundle:Course:linking.html.twig' as macros %} */
/*  */
/*  {% if entete is defined and entete==true%}*/
/*  			<div id="AS_{{child.id}}" class="row block1">*/
/*  {% endif %} */
/* */
/* 		<div id="AS_{{child.id}}_A" class="col-sm-12">  */
/*  */
/*  			<div id="AS_{{child.id}}_list" class="col-sm-3">*/
/*  							*/
/* 				<span  id="OS_{{child.id}}_A_bloc"  class="button2"  > 	  */
/* 							{% if type is defined and type=="new"%} */
/* 								<span id="ASS{{child.id}}" onclick="HideShow2('#AS_{{child.id}}_B','#ASS{{child.id}}');"><span class="glyphicon glyphicon-collapse-up"></span></span>*/
/* 							{% else %}*/
/* 								<span id="ASS{{child.id}}" onclick="HideShow2('#AS_{{child.id}}_B','#ASS{{child.id}}');"><span class="glyphicon glyphicon-collapse-down"></span></span>*/
/* 							{% endif %}			*/
/* 				</span>  */
/* */
/*  				<span id="AS_{{child.id}}_title" >	*/
/*  					{{ child.title }} 	    */
/*  		    	</span>    */
/* */
/*  		    </div>       */
/* */
/* 			<div id="AS_{{child.id}}_evt" class="col-sm-3">*/
/* 					 {% if child.event is not null %}*/
/* 							{{ child.event.title }} */
/* 					 {% else %}*/
/* 						  <span class="text-muted small"> Non spécifié </span>*/
/* 					 {% endif %}	*/
/* 			</div>*/
/*  */
/*  			<div id="AS_{{child.id}}_deadline" class="col-sm-2">	*/
/*                     {% if child.deadline is not null %}*/
/*                         {{ child.deadline|date('d/m/Y') }}*/
/*                     {% else %}*/
/*                         <span class="text-muted small"> Non spécifiée </span>*/
/*                     {% endif %} 			*/
/*  			</div>*/
/*  			*/
/*  			<div id="AS_{{child.id}}_update" class="col-sm-1"  style="text-align:center" >*/
/* 					{% if assessmentObjectives[child.id] is defined %}*/
/* 						{{ assessmentObjectives[child.id]|length }} */
/* 					{% endif %}*/
/*  			</div>*/
/*  			*/
/*  			<div id="AS_{{child.id}}_weight" class="col-sm-1">{{macros.progress_bar(child.weight,'warning')}}</div>  			 			*/
/* 			*/
/*  			<div id="AS_{{child.id}}_update" class="col-sm-2"  style="text-align:right" >	*/
/* 				{% if ( is_granted("ROLE_ENSEIGNANT")  and course.isRedacteur(app.user.id) ) or */
/* 						       ( is_granted("ROLE_RESPONSABLE") and course.isRedacteur(app.user.id) ) or  */
/* 						       ( is_granted("ROLE_ADMIN") )*/
/* 				%}	     			 		                    */
/* 					<a data-toggle="modal" class="btn2 btn-warning" href="{{ path('topic_assessment_edit_2', {id:child.id}) }}" data-target="#myModal"><span class="glyphicon glyphicon-edit"></span> </a> 				        */
/* */
/* 				  	<a data-toggle="modal" class="btn2 btn-danger" href="{{ path('topic_assessment_del_2', {id:child.id}) }}" data-target="#myModal"><span class="glyphicon glyphicon-trash"></span> </a> 				 				  	               */
/* */
/*                   {% endif */
/*                  %} 	*/
/*              		 */
/*  			</div>*/
/*           */
/*         </div> */
/* */
/*             */
/* */
/* 		   <div id="AS_{{child.id}}_B"  style="display: none;background-color:white"  class="col-sm-12 block1">  */
/* 		            */
/* 	       {% if assessmentObjectives[child.id] is defined and assessmentObjectives[child.id]!= null   %} */
/* */
/* 	        	<div class="col-sm-2 col-sm-offset-1 label2">*/
/* 	        		Objectifs*/
/* 	        	</div>*/
/* 	        	<div class="col-sm-9 label2">*/
/* 	        		Compétences*/
/* 	        	</div>	        	*/
/* */
/* 			            */
/* 		            		{% for ao in assessmentObjectives[child.id]  %}*/
/* 		            			<div id="AS_{{child.id}}_B_titre" class="col-sm-11 col-sm-offset-1">*/
/* 		            				<span class="glyphicon glyphicon-unchecked"></span>   */
/* 		            				*/
/* 		            				{{ ao.title }}*/
/* 		            				*/
/* 		            				*/
/* 					            	{% if ao.rating==1   			%}*/
/* 					            				 	<span title="{{ ao.weight*100}}%">[secondaire]</span>			 							            				*/
/* 					            	{% elseif ao.rating==2   	    %}*/
/* 					            					<span title="{{ ao.weight*100}}%">[principale]</span>			 								            				*/
/* 					            	{% endif				 		%}			            				*/
/* 		            				*/
/* 		            				<br/>*/
/* 		            			</div>			*/
/* 		            				{% for cs  in ao.competences  %}*/
/* 		            					<div id="AS_{{child.id}}_B_titre" class="col-sm-9 col-sm-offset-3">	  */
/* 		            						*  {{ cs.title }}	 */
/* 		            						*/
/* 					            				{% if cs.rating==1   			%}*/
/* 					            				 	<span title="{{ cs.weight*100}}%">[secondaire]</span>			 							            				*/
/* 					            				{% elseif cs.rating==2   	    %}*/
/* 					            					<span title="{{ cs.weight*100}}%">[principale]</span>			 								            				*/
/* 					            				{% endif				 		%}		*/
/* 					            				*/
/* 					            				           						*/
/* 		            						*/
/* 		            						<br/>*/
/* 		            					</div>	*/
/* 		            				{% endfor%}*/
/* 		            		{% endfor %}*/
/* 			          */
/*            {% else %}*/
/*            	Aucun objectif associé actuellement */
/*            {% endif %}  */
/*                 */
/*            </div>	       */
/*            */
/*  */
/* */
/*  */
/*   {% if entete is defined and entete==true%}			*/
/* 		  	</div>	 						*/
/*  {% endif %} */
/*             */
