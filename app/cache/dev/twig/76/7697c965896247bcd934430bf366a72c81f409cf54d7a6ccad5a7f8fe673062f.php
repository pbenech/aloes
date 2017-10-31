<?php

/* IfeAloesBundle:GeneralCompetence2:CG_XX_A.html.twig */
class __TwigTemplate_94a1e757fc3192154a08e1483ebd337d214afa60247e648c87d5df0e03a42337 extends Twig_Template
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
        $context["macros"] = $this->loadTemplate("IfeAloesBundle:Course:linking.html.twig", "IfeAloesBundle:GeneralCompetence2:CG_XX_A.html.twig", 1);
        // line 2
        echo " 
<div  id=\"CG_";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "id", array()), "html", null, true);
        echo "_A_title\" class=\"col-sm-5\"  > \t

\t<span  id=\"CG_";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "id", array()), "html", null, true);
        echo "_A_bloc\" class=\"button1\"   > \t  
\t\t";
        // line 6
        if ((array_key_exists("type", $context) && ((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "new"))) {
            // line 7
            echo "\t\t\t<span id=\"COMP";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "id", array()), "html", null, true);
            echo "\" onclick=\"HideShow2('#CG_";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "id", array()), "html", null, true);
            echo "_B','#COMP";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "id", array()), "html", null, true);
            echo "');\"><span class=\"glyphicon glyphicon-collapse-up\"></span></span>    \t
\t\t";
        } else {
            // line 9
            echo "\t\t\t<span id=\"COMP";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "id", array()), "html", null, true);
            echo "\" onclick=\"HideShow2('#CG_";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "id", array()), "html", null, true);
            echo "_B','#COMP";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "id", array()), "html", null, true);
            echo "');\"><span class=\"glyphicon glyphicon-collapse-down\"></span></span>    \t\t\t
\t\t";
        }
        // line 10
        echo "\t\t\t
\t</span>  
\t<span  id=\"CG_";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "id", array()), "html", null, true);
        echo "_A_title2\"   > 
\t\t";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "title", array()), "html", null, true);
        echo "  
\t</span> 
</div> 

<div class=\"col-sm-2\"  id=\"CG_";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "id", array()), "html", null, true);
        echo "_A_categorie\" style=\"text-align:center\" >      \t\t
\t ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "categories", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 19
            echo "\t ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cat"], "title", array()), "html", null, true);
            echo "
\t ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "</div> 

";
        // line 23
        $context["nb_competences"] = twig_length_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "specificCompetences", array()));
        echo "\t \t \t \t              \t              
<div class=\"col-sm-1\"  id=\"CG_";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "id", array()), "html", null, true);
        echo "_A_nb_specs\" style=\"text-align:center\" >      \t\t
\t ";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["nb_competences"]) ? $context["nb_competences"] : $this->getContext($context, "nb_competences")), "html", null, true);
        echo "
</div> 


<div   id=\"CG_";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "id", array()), "html", null, true);
        echo "_A_weight\" class=\"col-sm-2\" > 
\t";
        // line 30
        echo $context["macros"]->getprogress_bar($this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "weight", array()), "success");
        echo " 
</div> 


<div class=\"col-sm-2\"   id=\"CG_";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "id", array()), "html", null, true);
        echo "_A_bupdate\" style=\"text-align:right\">  \t\t         
\t";
        // line 35
        if ((((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")) == "update") && (($this->env->getExtension('security')->isGranted("ROLE_RESPONSABLE") && $this->getAttribute(        // line 36
(isset($context["program"]) ? $context["program"] : $this->getContext($context, "program")), "isResp", array(0 => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array())), "method")) || $this->env->getExtension('security')->isGranted("ROLE_ADMIN")))) {
            // line 37
            echo "\t 

\t\t<a  data-cache=\"false\"  data-toggle=\"modal\" class=\"btn1 btn-success\" href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("program_competences_edit2", array("id" => $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "id", array()))), "html", null, true);
            echo "\" data-target=\"#myModal\"><span class=\"glyphicon glyphicon-edit\"></span> </a> \t\t\t\t\t\t                    
\t\t        
\t\t<a  data-cache=\"false\"  data-toggle=\"modal\" class=\"btn1 btn-danger\" href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("program_competences_del2", array("id" => $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "id", array()))), "html", null, true);
            echo "\" data-target=\"#myModal\"><span class=\"glyphicon glyphicon-trash\"></span> </a> \t\t\t\t\t\t                    
\t\t
\t";
        }
        // line 44
        echo "</div>\t 
";
    }

    public function getTemplateName()
    {
        return "IfeAloesBundle:GeneralCompetence2:CG_XX_A.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 44,  133 => 41,  128 => 39,  124 => 37,  122 => 36,  121 => 35,  117 => 34,  110 => 30,  106 => 29,  99 => 25,  95 => 24,  91 => 23,  87 => 21,  78 => 19,  74 => 18,  70 => 17,  63 => 13,  59 => 12,  55 => 10,  45 => 9,  35 => 7,  33 => 6,  29 => 5,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% import 'IfeAloesBundle:Course:linking.html.twig' as macros %}*/
/*  */
/* <div  id="CG_{{parent.id}}_A_title" class="col-sm-5"  > 	*/
/* */
/* 	<span  id="CG_{{parent.id}}_A_bloc" class="button1"   > 	  */
/* 		{% if type is defined and type=="new"%}*/
/* 			<span id="COMP{{parent.id}}" onclick="HideShow2('#CG_{{parent.id}}_B','#COMP{{parent.id}}');"><span class="glyphicon glyphicon-collapse-up"></span></span>    	*/
/* 		{% else %}*/
/* 			<span id="COMP{{parent.id}}" onclick="HideShow2('#CG_{{parent.id}}_B','#COMP{{parent.id}}');"><span class="glyphicon glyphicon-collapse-down"></span></span>    			*/
/* 		{% endif %}			*/
/* 	</span>  */
/* 	<span  id="CG_{{parent.id}}_A_title2"   > */
/* 		{{ parent.title }}  */
/* 	</span> */
/* </div> */
/* */
/* <div class="col-sm-2"  id="CG_{{parent.id}}_A_categorie" style="text-align:center" >      		*/
/* 	 {% for cat in parent.categories  %}*/
/* 	 {{ cat.title}}*/
/* 	 {% endfor %}*/
/* </div> */
/* */
/* {% set nb_competences = parent.specificCompetences|length %}	 	 	 	              	              */
/* <div class="col-sm-1"  id="CG_{{parent.id}}_A_nb_specs" style="text-align:center" >      		*/
/* 	 {{nb_competences}}*/
/* </div> */
/* */
/* */
/* <div   id="CG_{{parent.id}}_A_weight" class="col-sm-2" > */
/* 	{{ macros.progress_bar(parent.weight,'success') }} */
/* </div> */
/* */
/* */
/* <div class="col-sm-2"   id="CG_{{parent.id}}_A_bupdate" style="text-align:right">  		         */
/* 	{% if   (action=="update") and*/
/* 			((  is_granted("ROLE_RESPONSABLE") and program.isResp(app.user.id)) or ( is_granted("ROLE_ADMIN"))) 		  */
/* 	%}	 */
/* */
/* 		<a  data-cache="false"  data-toggle="modal" class="btn1 btn-success" href="{{ path('program_competences_edit2', {id:parent.id}) }}" data-target="#myModal"><span class="glyphicon glyphicon-edit"></span> </a> 						                    */
/* 		        */
/* 		<a  data-cache="false"  data-toggle="modal" class="btn1 btn-danger" href="{{ path('program_competences_del2', {id:parent.id}) }}" data-target="#myModal"><span class="glyphicon glyphicon-trash"></span> </a> 						                    */
/* 		*/
/* 	{% endif %}*/
/* </div>	 */
/* */
