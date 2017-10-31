<?php

/* IfeAloesBundle:GeneralObjective2:OG_XX_A.html.twig */
class __TwigTemplate_256d2cff9d88a04241b3d7bca5bfa4799ae3b72d4bcdb3b77c40355ee474e578 extends Twig_Template
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
        $context["macros"] = $this->loadTemplate("IfeAloesBundle:Course:linking.html.twig", "IfeAloesBundle:GeneralObjective2:OG_XX_A.html.twig", 1);
        // line 2
        echo " 
\t\t\t\t<div  id=\"OG_";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "id", array()), "html", null, true);
        echo "_A_title\" class=\"col-sm-6\"  > \t
\t\t\t\t
\t\t\t\t\t<span  id=\"OG_";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "id", array()), "html", null, true);
        echo "_A_bloc\" class=\"button1\"  > \t  
\t\t\t\t\t\t";
        // line 6
        if ((array_key_exists("type", $context) && ((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "new"))) {
            // line 7
            echo "\t\t\t\t\t\t\t<span id=\"OBJG";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "id", array()), "html", null, true);
            echo "\" onclick=\"HideShow2('#OG_";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "id", array()), "html", null, true);
            echo "_B','#OBJG";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "id", array()), "html", null, true);
            echo "');\"><span class=\"glyphicon glyphicon-collapse-up\"></span></span>    \t
\t\t\t\t\t\t";
        } else {
            // line 9
            echo "\t\t\t\t\t\t\t<span id=\"OBJG";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "id", array()), "html", null, true);
            echo "\" onclick=\"HideShow2('#OG_";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "id", array()), "html", null, true);
            echo "_B','#OBJG";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "id", array()), "html", null, true);
            echo "');\"><span class=\"glyphicon glyphicon-collapse-down\"></span></span>    \t\t\t
\t\t\t\t\t\t";
        }
        // line 10
        echo "\t\t\t
\t\t\t\t\t</span>  
\t\t\t\t\t<span  id=\"OG_";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "id", array()), "html", null, true);
        echo "_A_title2\"   > 
\t\t\t\t\t\t";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "title", array()), "html", null, true);
        echo "  
\t\t\t\t\t</span> 
\t\t\t\t</div> 

\t\t\t\t";
        // line 17
        $context["nb_specs"] = twig_length_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "specificObjectives", array()));
        echo "\t \t               \t              
\t\t        <div class=\"col-sm-2\"  id=\"OG_";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "id", array()), "html", null, true);
        echo "_A_nb_specs\" style=\"text-align:center\" >      \t\t
\t          \t\t";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["nb_specs"]) ? $context["nb_specs"] : $this->getContext($context, "nb_specs")), "html", null, true);
        echo "
\t          \t</div>\t

\t\t        <div   id=\"OG_";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "id", array()), "html", null, true);
        echo "_A_weight\" class=\"col-sm-2\" >\t\t            
\t\t\t\t\t";
        // line 23
        echo $context["macros"]->getprogress_bar($this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "weight", array()), "success");
        echo " \t\t            
\t\t        </div> 
\t 

\t          \t
\t\t\t\t<div class=\"col-sm-2\"   id=\"CG_";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "id", array()), "html", null, true);
        echo "_A_button\" style=\"text-align:right\">  \t\t\t          \t
\t\t\t\t\t ";
        // line 29
        if (((($this->env->getExtension('security')->isGranted("ROLE_ENSEIGNANT") && $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "isRedacteur", array(0 => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array())), "method")) || ($this->env->getExtension('security')->isGranted("ROLE_RESPONSABLE") && $this->getAttribute(        // line 30
(isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "isRedacteur", array(0 => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array())), "method"))) || $this->env->getExtension('security')->isGranted("ROLE_ADMIN"))) {
            // line 32
            echo "\t\t      
\t\t\t\t\t         
\t\t\t\t\t\t\t<a  data-cache=\"false\"  data-toggle=\"modal\" class=\"btn1 btn-success\" href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_objective_edit2", array("id" => $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "id", array()))), "html", null, true);
            echo "\" data-target=\"#myModal\"><span class=\"glyphicon glyphicon-edit\"></span> </a> \t\t\t\t\t\t                    

\t\t\t\t\t\t\t<a  data-cache=\"false\"  data-toggle=\"modal\" class=\"btn1 btn-danger\" href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_objective_del2", array("id" => $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "id", array()))), "html", null, true);
            echo "\" data-target=\"#myModal\"><span class=\"glyphicon glyphicon-trash\"></span> </a> \t\t\t\t\t\t                    

\t\t                    
\t\t             ";
        }
        // line 39
        echo "\t          \t
\t          \t</div>
\t        ";
    }

    public function getTemplateName()
    {
        return "IfeAloesBundle:GeneralObjective2:OG_XX_A.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 39,  112 => 36,  107 => 34,  103 => 32,  101 => 30,  100 => 29,  96 => 28,  88 => 23,  84 => 22,  78 => 19,  74 => 18,  70 => 17,  63 => 13,  59 => 12,  55 => 10,  45 => 9,  35 => 7,  33 => 6,  29 => 5,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% import 'IfeAloesBundle:Course:linking.html.twig' as macros %}*/
/*  */
/* 				<div  id="OG_{{parent.id}}_A_title" class="col-sm-6"  > 	*/
/* 				*/
/* 					<span  id="OG_{{parent.id}}_A_bloc" class="button1"  > 	  */
/* 						{% if type is defined and type=="new"%}*/
/* 							<span id="OBJG{{parent.id}}" onclick="HideShow2('#OG_{{parent.id}}_B','#OBJG{{parent.id}}');"><span class="glyphicon glyphicon-collapse-up"></span></span>    	*/
/* 						{% else %}*/
/* 							<span id="OBJG{{parent.id}}" onclick="HideShow2('#OG_{{parent.id}}_B','#OBJG{{parent.id}}');"><span class="glyphicon glyphicon-collapse-down"></span></span>    			*/
/* 						{% endif %}			*/
/* 					</span>  */
/* 					<span  id="OG_{{parent.id}}_A_title2"   > */
/* 						{{ parent.title }}  */
/* 					</span> */
/* 				</div> */
/* */
/* 				{% set nb_specs = parent.specificObjectives|length %}	 	               	              */
/* 		        <div class="col-sm-2"  id="OG_{{parent.id}}_A_nb_specs" style="text-align:center" >      		*/
/* 	          		{{nb_specs}}*/
/* 	          	</div>	*/
/* */
/* 		        <div   id="OG_{{parent.id}}_A_weight" class="col-sm-2" >		            */
/* 					{{ macros.progress_bar(parent.weight,'success') }} 		            */
/* 		        </div> */
/* 	 */
/* */
/* 	          	*/
/* 				<div class="col-sm-2"   id="CG_{{parent.id}}_A_button" style="text-align:right">  			          	*/
/* 					 {% if ( is_granted("ROLE_ENSEIGNANT")  and course.isRedacteur(app.user.id) ) or */
/* 					       ( is_granted("ROLE_RESPONSABLE") and course.isRedacteur(app.user.id) ) or  */
/* 					       ( is_granted("ROLE_ADMIN") )*/
/* 					  %}		      */
/* 					         */
/* 							<a  data-cache="false"  data-toggle="modal" class="btn1 btn-success" href="{{ path('course_objective_edit2', {id:parent.id}) }}" data-target="#myModal"><span class="glyphicon glyphicon-edit"></span> </a> 						                    */
/* */
/* 							<a  data-cache="false"  data-toggle="modal" class="btn1 btn-danger" href="{{ path('course_objective_del2', {id:parent.id}) }}" data-target="#myModal"><span class="glyphicon glyphicon-trash"></span> </a> 						                    */
/* */
/* 		                    */
/* 		             {% endif %}	          	*/
/* 	          	</div>*/
/* 	        */
