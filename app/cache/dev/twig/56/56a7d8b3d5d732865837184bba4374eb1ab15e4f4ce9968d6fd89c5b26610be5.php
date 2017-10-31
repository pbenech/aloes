<?php

/* IfeAloesBundle:SpecificCompetence2:CS_XX.html.twig */
class __TwigTemplate_0e3856e6616327351e4c68fb5e0913e31672b04e0fbe551644bf3fc6ea0add2b extends Twig_Template
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
        $context["macros"] = $this->loadTemplate("IfeAloesBundle:Course:linking.html.twig", "IfeAloesBundle:SpecificCompetence2:CS_XX.html.twig", 1);
        // line 2
        echo " 
 ";
        // line 3
        if ((array_key_exists("entete", $context) && ((isset($context["entete"]) ? $context["entete"] : $this->getContext($context, "entete")) == true))) {
            // line 4
            echo " \t\t\t<div id=\"CS_";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "id", array()), "html", null, true);
            echo "\" class=\"row block1\" >
 ";
        }
        // line 5
        echo " 


  \t\t\t<div id=\"CS_";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "id", array()), "html", null, true);
        echo "_title\" class=\"col-sm-8 button2\">
\t\t\t\t\t\t<span  id=\"CS_";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "id", array()), "html", null, true);
        echo "_A_bloc\"  class=\"button2\"  > \t  
\t\t\t\t\t\t\t";
        // line 10
        if ((array_key_exists("type", $context) && ((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "new"))) {
            echo " 
\t\t\t\t\t\t\t\t<span id=\"OBJS";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "id", array()), "html", null, true);
            echo "\" onclick=\"HideShow2('#CS_";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "id", array()), "html", null, true);
            echo "_B','#OBJS";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "id", array()), "html", null, true);
            echo "');\"><span class=\"glyphicon glyphicon-collapse-up\"></span></span>
\t\t\t\t\t\t\t";
        } else {
            // line 13
            echo "\t\t\t\t\t\t\t\t<span id=\"OBJS";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "id", array()), "html", null, true);
            echo "\" onclick=\"HideShow2('#CS_";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "id", array()), "html", null, true);
            echo "_B','#OBJS";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "id", array()), "html", null, true);
            echo "');\"><span class=\"glyphicon glyphicon-collapse-down\"></span></span>
\t\t\t\t\t\t\t";
        }
        // line 14
        echo "\t\t\t
\t\t\t\t\t\t</span>       \t\t\t
\t\t\t\t\t\t<span  id=\"CS_";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "id", array()), "html", null, true);
        echo "_A_title2\"   > 
\t\t\t\t\t\t\t";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "title", array()), "html", null, true);
        echo "  
\t\t\t\t\t\t</span>   \t\t\t
  \t\t\t
  \t\t\t
  \t\t\t\t<!--
  \t\t\t\t<span class=\"glyphicon glyphicon-unchecked\"></span> ";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "title", array()), "html", null, true);
        echo "  
  \t\t\t\t--> 
\t\t    </div>    
         
  \t\t\t<div id=\"CS_";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "id", array()), "html", null, true);
        echo "_weight\" class=\"col-sm-2\">
  \t\t\t ";
        // line 27
        echo $context["macros"]->getprogress_bar($this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "weight", array()), "warning");
        echo " 
\t\t    </div>     

  \t\t\t<div id=\"CS_";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "id", array()), "html", null, true);
        echo "_but\" class=\"col-sm-2\" style=\"text-align:right\">
  \t\t\t

\t\t\t\t  ";
        // line 33
        if ((((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")) == "update") && (($this->env->getExtension('security')->isGranted("ROLE_RESPONSABLE") && $this->getAttribute(        // line 35
(isset($context["program"]) ? $context["program"] : $this->getContext($context, "program")), "isResp", array(0 => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array())), "method")) || $this->env->getExtension('security')->isGranted("ROLE_ADMIN")))) {
            // line 38
            echo "\t

\t\t\t\t  \t<a data-toggle=\"modal\" class=\"btn2 btn-warning\" href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("specificcompetence_edit_2", array("id" => $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "id", array()))), "html", null, true);
            echo "\" data-target=\"#myModal\"><span class=\"glyphicon glyphicon-edit\"></span> </a> \t\t\t\t \t\t\t\t  \t               
 \t\t\t\t  \t
\t\t\t\t  \t<a data-toggle=\"modal\" class=\"btn2 btn-danger\" href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("specificcompetence_del_2", array("id" => $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "id", array()))), "html", null, true);
            echo "\" data-target=\"#myModal\"><span class=\"glyphicon glyphicon-trash\"></span> </a> \t\t\t\t \t\t\t\t  \t               
              
                  ";
        }
        // line 44
        echo " 
\t\t    </div>   
\t\t    
\t\t    

\t\t   <div id=\"CS_";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "id", array()), "html", null, true);
        echo "_B\"  style=\"display: none;background-color:white\"  class=\"col-sm-12 block1\">  \t\t        
 
\t\t\t            <div id=\"CS_";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "id", array()), "html", null, true);
        echo "_B_label\" class=\"col-sm-2\">
\t\t\t            \tDescription :
\t\t\t            </div>\t\t\t         
\t\t\t            <div class=\"col-sm-10\">
\t\t\t\t\t\t    <div  style=\"overflow:auto; height: 200px; width: 100%; padding: 15px; border: 1px solid #AAAAAA\">
\t\t\t\t\t\t    \t\t<span id=\"CS_";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "id", array()), "html", null, true);
        echo "_B_description\" >";
        echo $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "description", array());
        echo "</span>
\t\t\t\t\t\t    </div>\t \t\t\t            
\t\t\t            </div>\t\t\t        

\t\t\t</div>    \t\t    
\t\t    
\t\t    
 
  ";
        // line 64
        if ((array_key_exists("entete", $context) && ((isset($context["entete"]) ? $context["entete"] : $this->getContext($context, "entete")) == true))) {
            echo "\t\t\t
\t\t  \t</div>\t \t\t\t\t\t\t
 ";
        }
        // line 66
        echo " 
            ";
    }

    public function getTemplateName()
    {
        return "IfeAloesBundle:SpecificCompetence2:CS_XX.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 66,  159 => 64,  146 => 56,  138 => 51,  133 => 49,  126 => 44,  120 => 42,  115 => 40,  111 => 38,  109 => 35,  108 => 33,  102 => 30,  96 => 27,  92 => 26,  85 => 22,  77 => 17,  73 => 16,  69 => 14,  59 => 13,  50 => 11,  46 => 10,  42 => 9,  38 => 8,  33 => 5,  27 => 4,  25 => 3,  22 => 2,  19 => 1,);
    }
}
/*  {% import 'IfeAloesBundle:Course:linking.html.twig' as macros %}*/
/*  */
/*  {% if entete is defined and entete==true%}*/
/*  			<div id="CS_{{child.id}}" class="row block1" >*/
/*  {% endif %} */
/* */
/* */
/*   			<div id="CS_{{child.id}}_title" class="col-sm-8 button2">*/
/* 						<span  id="CS_{{child.id}}_A_bloc"  class="button2"  > 	  */
/* 							{% if type is defined and type=="new"%} */
/* 								<span id="OBJS{{child.id}}" onclick="HideShow2('#CS_{{child.id}}_B','#OBJS{{child.id}}');"><span class="glyphicon glyphicon-collapse-up"></span></span>*/
/* 							{% else %}*/
/* 								<span id="OBJS{{child.id}}" onclick="HideShow2('#CS_{{child.id}}_B','#OBJS{{child.id}}');"><span class="glyphicon glyphicon-collapse-down"></span></span>*/
/* 							{% endif %}			*/
/* 						</span>       			*/
/* 						<span  id="CS_{{child.id}}_A_title2"   > */
/* 							{{ child.title }}  */
/* 						</span>   			*/
/*   			*/
/*   			*/
/*   				<!--*/
/*   				<span class="glyphicon glyphicon-unchecked"></span> {{ child.title }}  */
/*   				--> */
/* 		    </div>    */
/*          */
/*   			<div id="CS_{{child.id}}_weight" class="col-sm-2">*/
/*   			 {{ macros.progress_bar(child.weight,'warning') }} */
/* 		    </div>     */
/* */
/*   			<div id="CS_{{child.id}}_but" class="col-sm-2" style="text-align:right">*/
/*   			*/
/* */
/* 				  {% if   (action=="update") and */
/* 				  		(*/
/* 				  			( is_granted("ROLE_RESPONSABLE") and program.isResp(app.user.id)) or */
/* 				  			( is_granted("ROLE_ADMIN"))*/
/* 				  		)*/
/* 				  %}	*/
/* */
/* 				  	<a data-toggle="modal" class="btn2 btn-warning" href="{{ path('specificcompetence_edit_2', {id:child.id}) }}" data-target="#myModal"><span class="glyphicon glyphicon-edit"></span> </a> 				 				  	               */
/*  				  	*/
/* 				  	<a data-toggle="modal" class="btn2 btn-danger" href="{{ path('specificcompetence_del_2', {id:child.id}) }}" data-target="#myModal"><span class="glyphicon glyphicon-trash"></span> </a> 				 				  	               */
/*               */
/*                   {% endif %} */
/* 		    </div>   */
/* 		    */
/* 		    */
/* */
/* 		   <div id="CS_{{child.id}}_B"  style="display: none;background-color:white"  class="col-sm-12 block1">  		        */
/*  */
/* 			            <div id="CS_{{child.id}}_B_label" class="col-sm-2">*/
/* 			            	Description :*/
/* 			            </div>			         */
/* 			            <div class="col-sm-10">*/
/* 						    <div  style="overflow:auto; height: 200px; width: 100%; padding: 15px; border: 1px solid #AAAAAA">*/
/* 						    		<span id="CS_{{child.id}}_B_description" >{{ child.description|raw  }}</span>*/
/* 						    </div>	 			            */
/* 			            </div>			        */
/* */
/* 			</div>    		    */
/* 		    */
/* 		    */
/*  */
/*   {% if entete is defined and entete==true%}			*/
/* 		  	</div>	 						*/
/*  {% endif %} */
/*             */
