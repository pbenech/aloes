<?php

/* IfeAloesBundle:SpecificObjective2:OS_XX.html.twig */
class __TwigTemplate_4085ece7918628711544f25184e122b25d084ca9d2d50c0fa0b4b5f393ec53ca extends Twig_Template
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
        echo " ";
        $context["macros"] = $this->loadTemplate("IfeAloesBundle:Course:linking.html.twig", "IfeAloesBundle:SpecificObjective2:OS_XX.html.twig", 1);
        // line 2
        echo " 
 ";
        // line 3
        if ((array_key_exists("entete", $context) && ((isset($context["entete"]) ? $context["entete"] : $this->getContext($context, "entete")) == true))) {
            // line 4
            echo " \t\t\t<div id=\"OS_";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "id", array()), "html", null, true);
            echo "\" class=\"row block1 \" >
 ";
        }
        // line 5
        echo " \t\t
\t
\t\t <table style=\"width:100%\"> 
\t\t  \t 
\t\t      <div id=\"OS_";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "id", array()), "html", null, true);
        echo "_A\" class=\"col-sm-12 \">  
 
\t\t\t\t\t<div  id=\"OS_";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "id", array()), "html", null, true);
        echo "_A_title\" class=\"col-sm-6\"  > \t\t\t\t\t
\t\t\t\t\t\t<span  id=\"OS_";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "id", array()), "html", null, true);
        echo "_A_bloc\"  class=\"button2\"  > \t  
\t\t\t\t\t\t\t";
        // line 13
        if ((array_key_exists("type", $context) && ((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "new"))) {
            echo " 
\t\t\t\t\t\t\t\t<span id=\"OBJS";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "id", array()), "html", null, true);
            echo "\" onclick=\"HideShow2('#OS_";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "id", array()), "html", null, true);
            echo "_B','#OBJS";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "id", array()), "html", null, true);
            echo "');\"><span class=\"glyphicon glyphicon-collapse-up\"></span></span>
\t\t\t\t\t\t\t";
        } else {
            // line 16
            echo "\t\t\t\t\t\t\t\t<span id=\"OBJS";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "id", array()), "html", null, true);
            echo "\" onclick=\"HideShow2('#OS_";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "id", array()), "html", null, true);
            echo "_B','#OBJS";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "id", array()), "html", null, true);
            echo "');\"><span class=\"glyphicon glyphicon-collapse-down\"></span></span>
\t\t\t\t\t\t\t";
        }
        // line 17
        echo "\t\t\t
\t\t\t\t\t\t</span>     
\t\t\t\t\t\t<span  id=\"OS_";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "id", array()), "html", null, true);
        echo "_A_title2\"   > 
\t\t\t\t\t\t\t";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "title", array()), "html", null, true);
        echo "  
\t\t\t\t\t\t</span> 
\t\t\t\t\t</div>  
 
\t\t            <div id=\"OS_";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "id", array()), "html", null, true);
        echo "_cl\" class=\"col-sm-2\" style=\"text-align:center\">
\t\t\t\t\t";
        // line 25
        if ($this->getAttribute((isset($context["objectifCompetences"]) ? $context["objectifCompetences"] : null), $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "id", array()), array(), "array", true, true)) {
            // line 26
            echo "\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["objectifCompetences"]) ? $context["objectifCompetences"] : $this->getContext($context, "objectifCompetences")), $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "id", array()), array(), "array")), "html", null, true);
            echo " \t\t\t\t\t\t
\t\t\t\t\t";
        }
        // line 28
        echo "\t\t            </div>\t\t\t\t\t\t\t         
\t\t      \t             
\t\t            <div id=\"OS_";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "id", array()), "html", null, true);
        echo "_weight\" class=\"col-sm-2\">
\t\t            \t";
        // line 31
        echo $context["macros"]->getprogress_bar($this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "weight", array()), "warning");
        echo " 
\t\t            </div>\t
\t\t            <!--
\t\t            <div id=\"OS_";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "id", array()), "html", null, true);
        echo "_al\" class=\"col-sm-1\">
\t\t            \t";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "assessmentLinks", array()), "count", array()), "html", null, true);
        echo "
\t\t            </div>\t 
\t\t            -->         

\t\t            <div id=\"OS_";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "id", array()), "html", null, true);
        echo "_update\" class=\"col-sm-2\"  style=\"text-align:right\"> 
\t\t\t\t\t \t  ";
        // line 40
        if (((($this->env->getExtension('security')->isGranted("ROLE_ENSEIGNANT") && $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "isRedacteur", array(0 => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array())), "method")) || ($this->env->getExtension('security')->isGranted("ROLE_RESPONSABLE") && $this->getAttribute(        // line 41
(isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "isRedacteur", array(0 => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array())), "method"))) || $this->env->getExtension('security')->isGranted("ROLE_ADMIN"))) {
            // line 43
            echo "\t    
\t\t\t \t\t                    
\t\t\t\t\t\t\t<a data-toggle=\"modal\" class=\"btn2 btn-warning\" href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("general_objective_specific_objective_edit_2", array("id" => $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "id", array()))), "html", null, true);
            echo "\" data-target=\"#myModal\"><span class=\"glyphicon glyphicon-edit\"></span> </a> \t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t  \t\t\t<a data-toggle=\"modal\" class=\"btn2 btn-danger\" href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("general_objective_specific_objective_del_2", array("id" => $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "id", array()))), "html", null, true);
            echo "\" data-target=\"#myModal\"><span class=\"glyphicon glyphicon-trash\"></span> </a> \t\t\t\t \t\t\t\t  \t               

\t\t                  ";
        }
        // line 49
        echo "\t\t            
\t\t            </div>

\t\t           </div>  
\t\t     

\t\t            <div id=\"OS_";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "id", array()), "html", null, true);
        echo "_B\"  style=\"display: none;background-color:white\"  class=\"col-sm-12 block1\">  \t\t        
\t\t            ";
        // line 56
        if (($this->getAttribute((isset($context["objectifCompetences"]) ? $context["objectifCompetences"] : null), $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "id", array()), array(), "array", true, true) && ($this->getAttribute((isset($context["objectifCompetences"]) ? $context["objectifCompetences"] : $this->getContext($context, "objectifCompetences")), $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "id", array()), array(), "array") != null))) {
            echo "\t 
\t\t\t            <div id=\"OS_";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "id", array()), "html", null, true);
            echo "_B_titre\" class=\"col-sm-3\">
\t\t\t            \tCompétences spécifiques :
\t\t\t            </div>\t\t\t         
\t\t\t            <div id=\"OS_";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "id", array()), "html", null, true);
            echo "_B_titre\" class=\"col-sm-9\">
\t\t\t            \t\t\t\t";
            // line 61
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["objectifCompetences"]) ? $context["objectifCompetences"] : $this->getContext($context, "objectifCompetences")), $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "id", array()), array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["oc"]) {
                echo " 
\t\t\t\t\t            \t\t\t\t
\t\t\t\t\t            \t\t\t\t<span class=\"glyphicon glyphicon-unchecked\"></span>  
\t\t\t\t\t            \t\t\t\t
\t\t\t\t\t            \t\t\t\t";
                // line 65
                echo twig_escape_filter($this->env, $this->getAttribute($context["oc"], "title", array()), "html", null, true);
                echo " 
\t\t\t\t\t            \t\t\t\t
\t\t\t\t\t            \t\t\t\t
\t\t\t\t\t            \t\t\t\t";
                // line 68
                if (($this->getAttribute($context["oc"], "rating", array()) == 1)) {
                    // line 69
                    echo "\t\t\t\t\t            \t\t\t\t \t<span title=\"";
                    echo twig_escape_filter($this->env, ($this->getAttribute($context["oc"], "weight", array()) * 100), "html", null, true);
                    echo "%\">[secondaire]</span>\t\t\t \t\t\t\t\t\t\t            \t\t\t\t
\t\t\t\t\t            \t\t\t\t";
                } elseif (($this->getAttribute(                // line 70
$context["oc"], "rating", array()) == 2)) {
                    // line 71
                    echo "\t\t\t\t\t            \t\t\t\t\t<span title=\"";
                    echo twig_escape_filter($this->env, ($this->getAttribute($context["oc"], "weight", array()) * 100), "html", null, true);
                    echo "%\">[principale]</span>\t\t\t \t\t\t\t\t\t\t\t            \t\t\t\t
\t\t\t\t\t            \t\t\t\t";
                }
                // line 72
                echo "\t\t\t\t\t\t            \t\t\t\t
\t\t\t\t\t            \t\t\t\t<br/>
\t\t\t\t\t            \t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oc'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 75
            echo "\t\t\t            </div>\t\t\t        
\t\t            ";
        }
        // line 76
        echo "  
\t\t\t        </div>    
           
\t\t     </div> 
\t\t          

\t\t</table> 
\t\t\t 
 ";
        // line 84
        if ((array_key_exists("entete", $context) && ((isset($context["entete"]) ? $context["entete"] : $this->getContext($context, "entete")) == true))) {
            echo "\t\t\t
\t\t  \t</div>\t \t\t\t\t\t\t
 ";
        }
        // line 86
        echo " \t\t  \t\t\t ";
    }

    public function getTemplateName()
    {
        return "IfeAloesBundle:SpecificObjective2:OS_XX.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  233 => 86,  227 => 84,  217 => 76,  213 => 75,  205 => 72,  199 => 71,  197 => 70,  192 => 69,  190 => 68,  184 => 65,  175 => 61,  171 => 60,  165 => 57,  161 => 56,  157 => 55,  149 => 49,  143 => 47,  138 => 45,  134 => 43,  132 => 41,  131 => 40,  127 => 39,  120 => 35,  116 => 34,  110 => 31,  106 => 30,  102 => 28,  96 => 26,  94 => 25,  90 => 24,  83 => 20,  79 => 19,  75 => 17,  65 => 16,  56 => 14,  52 => 13,  48 => 12,  44 => 11,  39 => 9,  33 => 5,  27 => 4,  25 => 3,  22 => 2,  19 => 1,);
    }
}
/*  {% import 'IfeAloesBundle:Course:linking.html.twig' as macros %}*/
/*  */
/*  {% if entete is defined and entete==true%}*/
/*  			<div id="OS_{{child.id}}" class="row block1 " >*/
/*  {% endif %} 		*/
/* 	*/
/* 		 <table style="width:100%"> */
/* 		  	 */
/* 		      <div id="OS_{{child.id}}_A" class="col-sm-12 ">  */
/*  */
/* 					<div  id="OS_{{child.id}}_A_title" class="col-sm-6"  > 					*/
/* 						<span  id="OS_{{child.id}}_A_bloc"  class="button2"  > 	  */
/* 							{% if type is defined and type=="new"%} */
/* 								<span id="OBJS{{child.id}}" onclick="HideShow2('#OS_{{child.id}}_B','#OBJS{{child.id}}');"><span class="glyphicon glyphicon-collapse-up"></span></span>*/
/* 							{% else %}*/
/* 								<span id="OBJS{{child.id}}" onclick="HideShow2('#OS_{{child.id}}_B','#OBJS{{child.id}}');"><span class="glyphicon glyphicon-collapse-down"></span></span>*/
/* 							{% endif %}			*/
/* 						</span>     */
/* 						<span  id="OS_{{parent.id}}_A_title2"   > */
/* 							{{ child.title }}  */
/* 						</span> */
/* 					</div>  */
/*  */
/* 		            <div id="OS_{{child.id}}_cl" class="col-sm-2" style="text-align:center">*/
/* 					{% if objectifCompetences[child.id] is defined %}*/
/* 						{{ objectifCompetences[child.id]|length }} 						*/
/* 					{% endif %}*/
/* 		            </div>							         */
/* 		      	             */
/* 		            <div id="OS_{{child.id}}_weight" class="col-sm-2">*/
/* 		            	{{ macros.progress_bar(child.weight,'warning') }} */
/* 		            </div>	*/
/* 		            <!--*/
/* 		            <div id="OS_{{child.id}}_al" class="col-sm-1">*/
/* 		            	{{ child.assessmentLinks.count }}*/
/* 		            </div>	 */
/* 		            -->         */
/* */
/* 		            <div id="OS_{{child.id}}_update" class="col-sm-2"  style="text-align:right"> */
/* 					 	  {% if ( is_granted("ROLE_ENSEIGNANT")  and course.isRedacteur(app.user.id) ) or */
/* 						       ( is_granted("ROLE_RESPONSABLE") and course.isRedacteur(app.user.id) ) or  */
/* 						       ( is_granted("ROLE_ADMIN") )*/
/* 						  %}	    */
/* 			 		                    */
/* 							<a data-toggle="modal" class="btn2 btn-warning" href="{{ path('general_objective_specific_objective_edit_2', {id:child.id}) }}" data-target="#myModal"><span class="glyphicon glyphicon-edit"></span> </a> 				*/
/* 							*/
/* 				  			<a data-toggle="modal" class="btn2 btn-danger" href="{{ path('general_objective_specific_objective_del_2', {id:child.id}) }}" data-target="#myModal"><span class="glyphicon glyphicon-trash"></span> </a> 				 				  	               */
/* */
/* 		                  {% endif %}		            */
/* 		            </div>*/
/* */
/* 		           </div>  */
/* 		     */
/* */
/* 		            <div id="OS_{{child.id}}_B"  style="display: none;background-color:white"  class="col-sm-12 block1">  		        */
/* 		            {% if objectifCompetences[child.id] is defined and objectifCompetences[child.id]!= null   %}	 */
/* 			            <div id="OS_{{child.id}}_B_titre" class="col-sm-3">*/
/* 			            	Compétences spécifiques :*/
/* 			            </div>			         */
/* 			            <div id="OS_{{child.id}}_B_titre" class="col-sm-9">*/
/* 			            				{% for oc in objectifCompetences[child.id]  %} */
/* 					            				*/
/* 					            				<span class="glyphicon glyphicon-unchecked"></span>  */
/* 					            				*/
/* 					            				{{ oc.title }} */
/* 					            				*/
/* 					            				*/
/* 					            				{% if oc.rating==1   			%}*/
/* 					            				 	<span title="{{ oc.weight*100}}%">[secondaire]</span>			 							            				*/
/* 					            				{% elseif oc.rating==2   	    %}*/
/* 					            					<span title="{{ oc.weight*100}}%">[principale]</span>			 								            				*/
/* 					            				{% endif				 		%}						            				*/
/* 					            				<br/>*/
/* 					            		{% endfor %}*/
/* 			            </div>			        */
/* 		            {% endif %}  */
/* 			        </div>    */
/*            */
/* 		     </div> */
/* 		          */
/* */
/* 		</table> */
/* 			 */
/*  {% if entete is defined and entete==true%}			*/
/* 		  	</div>	 						*/
/*  {% endif %} 		  			 */
