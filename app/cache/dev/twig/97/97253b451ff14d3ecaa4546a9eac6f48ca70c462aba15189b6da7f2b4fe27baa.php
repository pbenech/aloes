<?php

/* IfeAloesBundle:Tableaux:program.html.twig */
class __TwigTemplate_5f39b97def51d493862a6815494ee6498a85660163882d03e824eccb80ca79ff extends Twig_Template
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
        echo "<legend>PRESENTATION</legend>
\t  \t\t\t
\t<fieldset>\t

\t<div class='row'>\t
\t\t<div class='col-sm-2 attribut'> \t  \t  
\t\t\t Titre :
\t\t</div> \t  \t\t    \t
\t\t<div class='col-sm-10'> \t  \t  
\t\t\t";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["program"]) ? $context["program"] : $this->getContext($context, "program")), "title", array()), "html", null, true);
        echo "
\t\t</div> \t  \t
\t</div>  

\t<div class='row'>\t
\t\t<div class='col-sm-2 attribut'> \t  \t  
\t\t\t Niveau :
\t\t</div> \t  \t\t    \t
\t\t<div class='col-sm-10'> \t  \t  
\t\t\t";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["program"]) ? $context["program"] : $this->getContext($context, "program")), "level", array()), "html", null, true);
        echo "
\t\t</div> \t  \t
\t</div>  
\t

\t<div class='row'>\t
\t\t<div class='col-md-2 attribut'> \t
\t\t\t\t\t\t";
        // line 26
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["program"]) ? $context["program"] : $this->getContext($context, "program")), "resps", array())) > 1)) {
            echo "  \t  
\t\t\t\t\t    \tResponsables <br/>de la formation
\t\t\t\t\t\t";
        } else {
            // line 29
            echo "\t\t\t\t\t    \tResponsable <br/>de la formation\t\t\t\t\t\t
\t\t\t\t\t\t";
        }
        // line 30
        echo "\t\t\t\t\t\t  
\t\t</div> \t  \t\t    \t
\t\t<div class='col-md-10'> 
\t\t\t\t\t\t";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["program"]) ? $context["program"] : $this->getContext($context, "program")), "resps", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            echo "  \t  
\t\t\t\t    \t\t";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "sn", array()), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "givenname", array()), "html", null, true);
            echo "<br/>\t
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "\t\t</div> \t  \t
\t</div> \t \t\t\t

\t\t\t
\t

\t<div class='row'>\t
\t\t<div class='col-sm-2 attribut'> \t  \t  
\t\t\t Sigle :
\t\t</div> \t  \t\t    \t
\t\t<div class='col-sm-10'> \t  \t  
\t\t\t";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["program"]) ? $context["program"] : $this->getContext($context, "program")), "label", array()), "html", null, true);
        echo "
\t\t</div> \t  \t
\t</div>  

\t<div class='row'>\t
\t\t<div class='col-sm-2 attribut'> \t  \t  
\t\t\t Url :
\t\t</div> \t  \t\t    \t
\t\t<div class='col-sm-10'> \t  \t  
\t\t\t";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["program"]) ? $context["program"] : $this->getContext($context, "program")), "url", array()), "html", null, true);
        echo "
\t\t</div> \t  \t
\t</div>  

\t<div class='row'>\t
\t\t<div class='col-sm-2 attribut'> \t  \t  
\t\t\t Description :
\t\t</div> \t  \t\t    \t
\t\t<div class='col-sm-10'> \t  \t  
\t\t\t";
        // line 65
        echo $this->getAttribute((isset($context["program"]) ? $context["program"] : $this->getContext($context, "program")), "description", array());
        echo "
\t\t</div> \t  \t
\t</div>  
\t
\t</fieldset>\t
\t
\t
<br/> 
\t
<legend>Compétences</legend>\t
\t<fieldset>\t
\t<div class='row'>\t
\t\t<div class='col-sm-2 attribut'> \t  \t  
\t\t\t Description :
\t\t</div> \t  \t\t    \t
\t\t<div class='col-sm-10'> \t  \t  
\t\t\t";
        // line 81
        echo $this->getAttribute((isset($context["program"]) ? $context["program"] : $this->getContext($context, "program")), "competences", array());
        echo "
\t\t</div> \t  \t
\t</div>  \t
\t</fieldset>\t\t
\t
<br/>
\t
<legend>UE</legend>
\t  \t\t\t
\t<fieldset>\t
\t  ";
        // line 91
        $context["isOptional"] = "X";
        // line 92
        echo "\t
\t  ";
        // line 93
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["courses"]) ? $context["courses"] : $this->getContext($context, "courses")));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 94
            echo "\t  
\t\t";
            // line 95
            if (((isset($context["isOptional"]) ? $context["isOptional"] : $this->getContext($context, "isOptional")) != $this->getAttribute($context["value"], "isOptional", array()))) {
                echo "\t
\t\t\t";
                // line 96
                if (($this->getAttribute($context["value"], "isOptional", array()) == "1")) {
                    // line 97
                    echo "\t\t\t\t<br/><br/><br/><span class = \"attribut\">UE facultatives :\t</span><br/><br/>\t\t\t
\t\t\t";
                } else {
                    // line 99
                    echo "\t\t\t\t<br/><br/><span class = \"attribut\">UE obligatoires :\t</span><br/><br/>
\t\t\t";
                }
                // line 100
                echo "\t\t\t
\t\t";
            }
            // line 101
            echo "\t\t\t  
\t  \t<div class=\"col-sm-12\">
\t\t\t<span class=\"glyphicon glyphicon-triangle-right\"  style=\"color:#888\"></span>";
            // line 103
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "label", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "title", array()), "html", null, true);
            echo "   
\t\t</div>\t 
\t\t";
            // line 105
            $context["isOptional"] = $this->getAttribute($context["value"], "isOptional", array());
            // line 106
            echo "\t\t<br/>
\t  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 107
        echo "\t
\t</fieldset>\t
\t
<br/><br/>\t

\t\t";
    }

    public function getTemplateName()
    {
        return "IfeAloesBundle:Tableaux:program.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 107,  195 => 106,  193 => 105,  186 => 103,  182 => 101,  178 => 100,  174 => 99,  170 => 97,  168 => 96,  164 => 95,  161 => 94,  157 => 93,  154 => 92,  152 => 91,  139 => 81,  120 => 65,  108 => 56,  96 => 47,  83 => 36,  73 => 34,  67 => 33,  62 => 30,  58 => 29,  52 => 26,  42 => 19,  30 => 10,  19 => 1,);
    }
}
/* <legend>PRESENTATION</legend>*/
/* 	  			*/
/* 	<fieldset>	*/
/* */
/* 	<div class='row'>	*/
/* 		<div class='col-sm-2 attribut'> 	  	  */
/* 			 Titre :*/
/* 		</div> 	  		    	*/
/* 		<div class='col-sm-10'> 	  	  */
/* 			{{ program.title }}*/
/* 		</div> 	  	*/
/* 	</div>  */
/* */
/* 	<div class='row'>	*/
/* 		<div class='col-sm-2 attribut'> 	  	  */
/* 			 Niveau :*/
/* 		</div> 	  		    	*/
/* 		<div class='col-sm-10'> 	  	  */
/* 			{{ program.level }}*/
/* 		</div> 	  	*/
/* 	</div>  */
/* 	*/
/* */
/* 	<div class='row'>	*/
/* 		<div class='col-md-2 attribut'> 	*/
/* 						{% if program.resps|length > 1 %}  	  */
/* 					    	Responsables <br/>de la formation*/
/* 						{% else %}*/
/* 					    	Responsable <br/>de la formation						*/
/* 						{% endif %}						  */
/* 		</div> 	  		    	*/
/* 		<div class='col-md-10'> */
/* 						{% for user in program.resps %}  	  */
/* 				    		{{ user.sn}}, {{ user.givenname}}<br/>	*/
/* 						{% endfor %}*/
/* 		</div> 	  	*/
/* 	</div> 	 			*/
/* */
/* 			*/
/* 	*/
/* */
/* 	<div class='row'>	*/
/* 		<div class='col-sm-2 attribut'> 	  	  */
/* 			 Sigle :*/
/* 		</div> 	  		    	*/
/* 		<div class='col-sm-10'> 	  	  */
/* 			{{ program.label }}*/
/* 		</div> 	  	*/
/* 	</div>  */
/* */
/* 	<div class='row'>	*/
/* 		<div class='col-sm-2 attribut'> 	  	  */
/* 			 Url :*/
/* 		</div> 	  		    	*/
/* 		<div class='col-sm-10'> 	  	  */
/* 			{{ program.url }}*/
/* 		</div> 	  	*/
/* 	</div>  */
/* */
/* 	<div class='row'>	*/
/* 		<div class='col-sm-2 attribut'> 	  	  */
/* 			 Description :*/
/* 		</div> 	  		    	*/
/* 		<div class='col-sm-10'> 	  	  */
/* 			{{ program.description|raw }}*/
/* 		</div> 	  	*/
/* 	</div>  */
/* 	*/
/* 	</fieldset>	*/
/* 	*/
/* 	*/
/* <br/> */
/* 	*/
/* <legend>Compétences</legend>	*/
/* 	<fieldset>	*/
/* 	<div class='row'>	*/
/* 		<div class='col-sm-2 attribut'> 	  	  */
/* 			 Description :*/
/* 		</div> 	  		    	*/
/* 		<div class='col-sm-10'> 	  	  */
/* 			{{ program.competences|raw }}*/
/* 		</div> 	  	*/
/* 	</div>  	*/
/* 	</fieldset>		*/
/* 	*/
/* <br/>*/
/* 	*/
/* <legend>UE</legend>*/
/* 	  			*/
/* 	<fieldset>	*/
/* 	  {% set isOptional="X" %}*/
/* 	*/
/* 	  {% for value in courses 															%}*/
/* 	  */
/* 		{% if isOptional!=value.isOptional %}	*/
/* 			{% if value.isOptional=="1" %}*/
/* 				<br/><br/><br/><span class = "attribut">UE facultatives :	</span><br/><br/>			*/
/* 			{% else  %}*/
/* 				<br/><br/><span class = "attribut">UE obligatoires :	</span><br/><br/>*/
/* 			{% endif %}			*/
/* 		{% endif %}			  */
/* 	  	<div class="col-sm-12">*/
/* 			<span class="glyphicon glyphicon-triangle-right"  style="color:#888"></span>{{ value.label }} - {{ value.title}}   */
/* 		</div>	 */
/* 		{% set isOptional=value.isOptional %}*/
/* 		<br/>*/
/* 	  {% endfor %}	*/
/* 	</fieldset>	*/
/* 	*/
/* <br/><br/>	*/
/* */
/* 		*/
