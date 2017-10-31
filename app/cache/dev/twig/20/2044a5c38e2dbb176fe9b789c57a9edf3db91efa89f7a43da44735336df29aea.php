<?php

/* IfeAloesBundle:GeneralCompetence2:addAjaxComp.html.twig */
class __TwigTemplate_31e1b7057fb22b54607d5fc0790415c5f687357239ebb9751757c4623a257640 extends Twig_Template
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
        $context["macros"] = $this->loadTemplate("IfeAloesBundle:Course:linking.html.twig", "IfeAloesBundle:GeneralCompetence2:addAjaxComp.html.twig", 1);
        // line 2
        echo "
<div id=\"CG_";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "id", array()), "html", null, true);
        echo "\" style=\"border-bottom:dotted 1px;\">           
\t<div id=\"CG_";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "id", array()), "html", null, true);
        echo "_A\" class=\"row\">
\t      ";
        // line 5
        $this->loadTemplate("IfeAloesBundle:GeneralCompetence2:CG_XX_A.html.twig", "IfeAloesBundle:GeneralCompetence2:addAjaxComp.html.twig", 5)->display(array_merge($context, array("action" => "update")));
        // line 6
        echo "\t</div>\t 
\t<div id=\"CG_";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "id", array()), "html", null, true);
        echo "_B\" class=\"col-md-12 col-sm-12 blockc\" >
\t\t\t<div class=\"col-sm-12\">  \t
\t\t\t\t<div class=\"col-sm-8 entete2\" style=\"text-align:left\"> Compétences spécifiques</div>
\t\t\t\t<div class=\"col-sm-2 entete2\" style=\"text-align:center\"> % </div>
\t\t\t\t<div class=\"col-sm-2 entete2\" style=\"text-align:center\"> </div>\t
\t\t\t</div>

\t\t\t<div class=\"col-sm-12\"> 
\t\t\t\t<ul id=\"sortable";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "id", array()), "html", null, true);
        echo "\" class=\"connectedSortable  ui-sortable\">\t\t   \t\t 
\t\t\t\t    <br class=\"ui-sortable-handle\">   \t    \t\t\t
\t\t\t\t</ul> 
\t \t\t</div>
 
\t\t\t";
        // line 20
        $this->loadTemplate("IfeAloesBundle:GeneralCompetence2:sortJavascript.html.twig", "IfeAloesBundle:GeneralCompetence2:addAjaxComp.html.twig", 20)->display($context);
        echo "\t\t\t\t\t
\t\t\t
  
\t\t  \t";
        // line 23
        if ((($this->env->getExtension('security')->isGranted("ROLE_RESPONSABLE") && $this->getAttribute((isset($context["program"]) ? $context["program"] : $this->getContext($context, "program")), "isResp", array(0 => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array())), "method")) || $this->env->getExtension('security')->isGranted("ROLE_ADMIN"))) {
            // line 25
            echo "\t
\t\t\t  <div id=\"button_gen\" class=\"col-sm-12\" style=\"text-align:right\">  \t\t  
\t\t\t  \t<a data-toggle=\"modal\" class=\"btn2 btn-warning\" href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("specificcompetence_new_2", array("id" => $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "id", array()))), "html", null, true);
            echo "\" data-target=\"#myModal\">
\t\t\t  \t\t<span class=\"glyphicon glyphicon-plus-sign\"> Ajouter une compétence spécifique
\t\t\t  \t</a> 
\t\t\t  \t<br/>&nbsp; \t\t\t\t
\t          </div>  
          \t";
        }
        // line 32
        echo "    \t
\t</div> 

</div>    


\t\t
   
\t\t";
    }

    public function getTemplateName()
    {
        return "IfeAloesBundle:GeneralCompetence2:addAjaxComp.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 32,  68 => 27,  64 => 25,  62 => 23,  56 => 20,  48 => 15,  37 => 7,  34 => 6,  32 => 5,  28 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% import 'IfeAloesBundle:Course:linking.html.twig' as macros %}*/
/* */
/* <div id="CG_{{parent.id}}" style="border-bottom:dotted 1px;">           */
/* 	<div id="CG_{{parent.id}}_A" class="row">*/
/* 	      {% include 'IfeAloesBundle:GeneralCompetence2:CG_XX_A.html.twig'   with {'action':'update'}  %}*/
/* 	</div>	 */
/* 	<div id="CG_{{parent.id}}_B" class="col-md-12 col-sm-12 blockc" >*/
/* 			<div class="col-sm-12">  	*/
/* 				<div class="col-sm-8 entete2" style="text-align:left"> Compétences spécifiques</div>*/
/* 				<div class="col-sm-2 entete2" style="text-align:center"> % </div>*/
/* 				<div class="col-sm-2 entete2" style="text-align:center"> </div>	*/
/* 			</div>*/
/* */
/* 			<div class="col-sm-12"> */
/* 				<ul id="sortable{{parent.id}}" class="connectedSortable  ui-sortable">		   		 */
/* 				    <br class="ui-sortable-handle">   	    			*/
/* 				</ul> */
/* 	 		</div>*/
/*  */
/* 			{% include 'IfeAloesBundle:GeneralCompetence2:sortJavascript.html.twig' %}					*/
/* 			*/
/*   */
/* 		  	{% if ( is_granted("ROLE_RESPONSABLE") and program.isResp(app.user.id)) or */
/* 		  		( is_granted("ROLE_ADMIN") )*/
/* 		  	%}	*/
/* 			  <div id="button_gen" class="col-sm-12" style="text-align:right">  		  */
/* 			  	<a data-toggle="modal" class="btn2 btn-warning" href="{{ path("specificcompetence_new_2", {id:parent.id}) }}" data-target="#myModal">*/
/* 			  		<span class="glyphicon glyphicon-plus-sign"> Ajouter une compétence spécifique*/
/* 			  	</a> */
/* 			  	<br/>&nbsp; 				*/
/* 	          </div>  */
/*           	{% endif %}    	*/
/* 	</div> */
/* */
/* </div>    */
/* */
/* */
/* 		*/
/*    */
/* 		*/
