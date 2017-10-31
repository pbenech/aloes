<?php

/* IfeAloesBundle:Topic2:TO_XX_A.html.twig */
class __TwigTemplate_6af10facd2376b2ead51eabb52d2d1136459867ca96d828974ef56802d487106 extends Twig_Template
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
        $context["macros"] = $this->loadTemplate("IfeAloesBundle:Course:linking.html.twig", "IfeAloesBundle:Topic2:TO_XX_A.html.twig", 1);
        // line 2
        echo "
 <div  id=\"TO_";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "id", array()), "html", null, true);
        echo "_A_title\" class=\"col-sm-4\"  > 
 
 \t<span  id=\"TO_";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "id", array()), "html", null, true);
        echo "_A_bloc\" class=\"button1\"  > \t
 \t\t";
        // line 6
        if ((array_key_exists("type", $context) && ((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "new"))) {
            // line 7
            echo "\t\t\t<span id=\"REF";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "id", array()), "html", null, true);
            echo "\" onclick=\"HideShow2('#TO_";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "id", array()), "html", null, true);
            echo "_B','#REF";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "id", array()), "html", null, true);
            echo "');\"><span class=\"glyphicon glyphicon-collapse-up\"></span></span>
\t\t";
        } else {
            // line 9
            echo "\t\t\t<span id=\"REF";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "id", array()), "html", null, true);
            echo "\" onclick=\"HideShow2('#TO_";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "id", array()), "html", null, true);
            echo "_B','#REF";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "id", array()), "html", null, true);
            echo "');\"><span class=\"glyphicon glyphicon-collapse-down\"></span></span>
\t\t";
        }
        // line 10
        echo "\t\t\t
 \t</span> 
\t<span  id=\"TO_";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "id", array()), "html", null, true);
        echo "_A_title2\"   >  
\t\t\t\t
\t
\t\t      \t";
        // line 15
        $context["deb"] = twig_date_format_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "startDate", array()), "d/m/Y");
        // line 16
        echo "\t\t      \t";
        $context["fin"] = twig_date_format_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "endDate", array()), "d/m/Y");
        // line 17
        echo "\t
\t
\t            ";
        // line 19
        if (((isset($context["deb"]) ? $context["deb"] : $this->getContext($context, "deb")) == (isset($context["fin"]) ? $context["fin"] : $this->getContext($context, "fin")))) {
            // line 20
            echo "\t                    \t";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "startDate", array()), "d/m/Y"), "html", null, true);
            echo "    
\t            ";
        } else {
            // line 22
            echo "\t                \t";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "startDate", array()), "d/m/Y"), "html", null, true);
            echo " <span class=\"glyphicon glyphicon-arrow-right\"></span> ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "endDate", array()), "d/m/Y"), "html", null, true);
            echo "  
\t            ";
        }
        // line 23
        echo "    \t
\t                
\t\t        <br/><b>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "title", array()), "html", null, true);
        echo "</b>     
\t</span> 
</div>\t  


<div  id=\"TO_";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "id", array()), "html", null, true);
        echo "_A_theme\" class=\"col-sm-2\" style=\"text-align:left\"  >\t
\t";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "typologies", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["theme"]) {
            // line 32
            echo "\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute($context["theme"], "title", array()), "html", null, true);
            echo "
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theme'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "</div>

<div  id=\"TO_";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "id", array()), "html", null, true);
        echo "_A_travaux\" class=\"col-sm-1 text-warning\" style=\"text-align:center\"  >\t\t
\t\t";
        // line 37
        $context["nb_travaux"] = twig_length_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "assessments", array()));
        echo "\t
\t\t";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["nb_travaux"]) ? $context["nb_travaux"] : $this->getContext($context, "nb_travaux")), "html", null, true);
        echo "\t\t
</div>

<div  id=\"TO_";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "id", array()), "html", null, true);
        echo "_A_events\" class=\"col-sm-1 text-info\" style=\"text-align:center\"  >\t\t
\t\t";
        // line 42
        $context["nb_events"] = twig_length_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "events", array()));
        echo "\t
 
\t\t";
        // line 44
        echo twig_escape_filter($this->env, (isset($context["nb_events"]) ? $context["nb_events"] : $this->getContext($context, "nb_events")), "html", null, true);
        echo "\t\t
</div>


<div  id=\"TO_";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "id", array()), "html", null, true);
        echo "_A_weight\" class=\"col-sm-2\"  >";
        echo $context["macros"]->getprogress_bar($this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "weight", array()), "success");
        echo "</div>
 
\t        
<div  id=\"TO_";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "id", array()), "html", null, true);
        echo "_A_button\" class=\"col-sm-2\"  style=\"text-align:right\" >
\t\t
\t\t";
        // line 53
        if (((($this->env->getExtension('security')->isGranted("ROLE_ENSEIGNANT") && $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "isRedacteur", array(0 => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array())), "method")) || ($this->env->getExtension('security')->isGranted("ROLE_RESPONSABLE") && $this->getAttribute(        // line 54
(isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "isRedacteur", array(0 => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array())), "method"))) || $this->env->getExtension('security')->isGranted("ROLE_ADMIN"))) {
            // line 56
            echo "\t\t\t          
\t\t           \t\t  
\t\t\t<a  data-cache=\"false\"  data-toggle=\"modal\" class=\"btn1 btn-success\" href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("topic_edit2", array("id" => $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "id", array()))), "html", null, true);
            echo "\" data-target=\"#myModal\"><span class=\"glyphicon glyphicon-edit\"></span> </a> \t\t\t\t\t\t                    \t\t          
\t\t           \t\t    
\t\t\t<a  data-cache=\"false\"  data-toggle=\"modal\" class=\"btn1 btn-danger\" href=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("topic_del2", array("id" => $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "id", array()))), "html", null, true);
            echo "\" data-target=\"#myModal\"><span class=\"glyphicon glyphicon-trash\"></span> </a> \t\t\t\t\t\t                    
\t\t          

\t    ";
        }
        // line 63
        echo "\t\t
\t\t
</div>\t
 
";
    }

    public function getTemplateName()
    {
        return "IfeAloesBundle:Topic2:TO_XX_A.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 63,  178 => 60,  173 => 58,  169 => 56,  167 => 54,  166 => 53,  161 => 51,  153 => 48,  146 => 44,  141 => 42,  137 => 41,  131 => 38,  127 => 37,  123 => 36,  119 => 34,  110 => 32,  106 => 31,  102 => 30,  94 => 25,  90 => 23,  82 => 22,  76 => 20,  74 => 19,  70 => 17,  67 => 16,  65 => 15,  59 => 12,  55 => 10,  45 => 9,  35 => 7,  33 => 6,  29 => 5,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% import 'IfeAloesBundle:Course:linking.html.twig' as macros %}*/
/* */
/*  <div  id="TO_{{parent.id}}_A_title" class="col-sm-4"  > */
/*  */
/*  	<span  id="TO_{{parent.id}}_A_bloc" class="button1"  > 	*/
/*  		{% if type is defined and type=="new"%}*/
/* 			<span id="REF{{parent.id}}" onclick="HideShow2('#TO_{{parent.id}}_B','#REF{{parent.id}}');"><span class="glyphicon glyphicon-collapse-up"></span></span>*/
/* 		{% else %}*/
/* 			<span id="REF{{parent.id}}" onclick="HideShow2('#TO_{{parent.id}}_B','#REF{{parent.id}}');"><span class="glyphicon glyphicon-collapse-down"></span></span>*/
/* 		{% endif %}			*/
/*  	</span> */
/* 	<span  id="TO_{{parent.id}}_A_title2"   >  */
/* 				*/
/* 	*/
/* 		      	{% set deb = parent.startDate|date("d/m/Y")  %}*/
/* 		      	{% set fin = parent.endDate|date("d/m/Y")    %}*/
/* 	*/
/* 	*/
/* 	            {% if deb==fin %}*/
/* 	                    	{{ parent.startDate|date("d/m/Y") }}    */
/* 	            {% else %}*/
/* 	                	{{ parent.startDate|date("d/m/Y") }} <span class="glyphicon glyphicon-arrow-right"></span> {{ parent.endDate|date("d/m/Y") }}  */
/* 	            {% endif %}    	*/
/* 	                */
/* 		        <br/><b>{{ parent.title }}</b>     */
/* 	</span> */
/* </div>	  */
/* */
/* */
/* <div  id="TO_{{parent.id}}_A_theme" class="col-sm-2" style="text-align:left"  >	*/
/* 	{% for theme in parent.typologies %}*/
/* 		{{ theme.title }}*/
/* 	{% endfor %}*/
/* </div>*/
/* */
/* <div  id="TO_{{parent.id}}_A_travaux" class="col-sm-1 text-warning" style="text-align:center"  >		*/
/* 		{% set nb_travaux = parent.assessments|length %}	*/
/* 		{{nb_travaux}}		*/
/* </div>*/
/* */
/* <div  id="TO_{{parent.id}}_A_events" class="col-sm-1 text-info" style="text-align:center"  >		*/
/* 		{% set nb_events = parent.events|length %}	*/
/*  */
/* 		{{nb_events}}		*/
/* </div>*/
/* */
/* */
/* <div  id="TO_{{parent.id}}_A_weight" class="col-sm-2"  >{{macros.progress_bar(parent.weight,'success')}}</div>*/
/*  */
/* 	        */
/* <div  id="TO_{{parent.id}}_A_button" class="col-sm-2"  style="text-align:right" >*/
/* 		*/
/* 		{% if ( is_granted("ROLE_ENSEIGNANT")  and course.isRedacteur(app.user.id) ) or */
/* 				       ( is_granted("ROLE_RESPONSABLE") and course.isRedacteur(app.user.id) ) or  */
/* 				       ( is_granted("ROLE_ADMIN") )*/
/* 		%}			          */
/* 		           		  */
/* 			<a  data-cache="false"  data-toggle="modal" class="btn1 btn-success" href="{{ path('topic_edit2', {id:parent.id}) }}" data-target="#myModal"><span class="glyphicon glyphicon-edit"></span> </a> 						                    		          */
/* 		           		    */
/* 			<a  data-cache="false"  data-toggle="modal" class="btn1 btn-danger" href="{{ path('topic_del2', {id:parent.id}) }}" data-target="#myModal"><span class="glyphicon glyphicon-trash"></span> </a> 						                    */
/* 		          */
/* */
/* 	    {% endif %}		*/
/* 		*/
/* </div>	*/
/*  */
/* */
