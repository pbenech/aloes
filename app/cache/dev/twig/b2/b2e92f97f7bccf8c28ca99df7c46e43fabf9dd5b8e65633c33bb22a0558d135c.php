<?php

/* IfeAloesBundle:Program:show.html.twig */
class __TwigTemplate_5e184e3fe38553007195fc36d0402fd3eced9dbb9ee1881cc4d81deeb53f189f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("IfeAloesBundle:Program:layout.html.twig", "IfeAloesBundle:Program:show.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "IfeAloesBundle:Program:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "<div class='title-two1a col-md-9 col-sm-9'> 
\t\t\tPrésentation \t
\t</div>
    <div class='title-two1b col-md-3 col-sm-3' style='text-align:right'>
\t\t  ";
        // line 12
        if ((($this->env->getExtension('security')->isGranted("ROLE_RESPONSABLE") && $this->getAttribute((isset($context["program"]) ? $context["program"] : $this->getContext($context, "program")), "isResp", array(0 => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array())), "method")) || $this->env->getExtension('security')->isGranted("ROLE_ADMIN"))) {
            // line 15
            echo "\t\t\t    \t<a class=\"btn1 btn-color4\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("programs_edit", array("id" => $this->getAttribute((isset($context["program"]) ? $context["program"] : $this->getContext($context, "program")), "id", array()), "from" => "entity")), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-edit\"></span> Modifier le programme </a>
\t\t  ";
        }
        // line 16
        echo " \t
    </div> \t\t


\t
\t<div class='col-sm-12 container-fluid block3'>\t

\t\t<div class='row'>\t
\t\t\t<div class='col-md-2 attribut'> \t  \t  
\t\t    \tTitre : 
\t\t\t</div> \t  \t\t    \t
\t\t\t<div class='col-md-10'> \t  \t  
\t\t    \t";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["program"]) ? $context["program"] : $this->getContext($context, "program")), "title", array()), "html", null, true);
        echo "
\t\t\t</div> \t  \t
\t\t</div>   \t
\t
\t\t  \t  
\t\t<div class='row'>\t
\t\t\t<div class='col-md-2 attribut'> \t  \t  
\t\t    \tSigle : 
\t\t\t</div> \t  \t\t    \t
\t\t\t<div class='col-md-10'> \t  \t  
\t\t    \t";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["program"]) ? $context["program"] : $this->getContext($context, "program")), "label", array()), "html", null, true);
        echo "
\t\t\t</div> \t  \t
\t\t</div>   \t
\t\t
\t\t
\t\t";
        // line 43
        if (($this->getAttribute((isset($context["program"]) ? $context["program"] : $this->getContext($context, "program")), "level", array()) != "")) {
            echo "\t\t\t
\t\t\t<div class='row'>\t
\t\t\t\t<div class='col-md-2 attribut'> \t  \t  
\t\t\t    \tNiveau : 
\t\t\t\t</div> \t  \t\t    
\t\t
\t\t\t\t\t\t\t
\t\t\t\t<div class='col-md-10'>
\t\t\t\t\t \t  \t  
\t\t\t    \t<div >
\t\t\t    \t\t";
            // line 53
            echo $this->getAttribute((isset($context["program"]) ? $context["program"] : $this->getContext($context, "program")), "level", array());
            echo "
\t\t\t    \t</div>
\t\t\t\t</div> \t  \t
\t\t\t</div> 
\t\t";
        }
        // line 57
        echo "\t\t\t
\t\t
\t\t";
        // line 59
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["program"]) ? $context["program"] : $this->getContext($context, "program")), "resps", array())) > 0)) {
            // line 60
            echo "\t\t\t\t<div class='row'>\t
\t\t\t\t\t<div class='col-md-2 attribut'> \t
\t\t\t\t\t\t";
            // line 62
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["program"]) ? $context["program"] : $this->getContext($context, "program")), "resps", array())) > 1)) {
                echo "  \t  
\t\t\t\t\t    \tResponsables <br/>de la formation : 
\t\t\t\t\t\t";
            } else {
                // line 65
                echo "\t\t\t\t\t    \tResponsable <br/>de la formation\t: \t\t\t\t\t
\t\t\t\t\t\t";
            }
            // line 66
            echo "\t\t\t\t\t\t  
\t\t\t\t\t</div> \t  \t\t    \t
\t\t\t\t\t<div class='col-md-10'> 
\t\t\t\t\t\t";
            // line 69
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["program"]) ? $context["program"] : $this->getContext($context, "program")), "resps", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                echo "  \t  
\t\t\t\t    \t\t";
                // line 70
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "sn", array()), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "givenname", array()), "html", null, true);
                echo "<br/>\t
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            echo "\t\t\t\t\t</div> \t  \t
\t\t\t\t</div> \t \t\t\t
\t\t";
        }
        // line 75
        echo "\t\t
\t\t";
        // line 76
        if (($this->getAttribute((isset($context["program"]) ? $context["program"] : $this->getContext($context, "program")), "description", array()) != "")) {
            echo "\t\t\t
\t\t\t<div class='row'>\t
\t\t\t\t<div class='col-md-2 attribut'> \t  \t  
\t\t\t    \tDescription : 
\t\t\t\t</div> \t  \t\t    
\t\t
\t\t\t\t\t\t\t
\t\t\t\t<div class='col-md-10'>
\t\t\t\t\t \t  \t  
\t\t\t    \t<div   style=\"overflow:auto; height: 200px; width: 100%; padding: 15px; border: 1px solid #AAAAAA\" >
\t\t\t    \t\t";
            // line 86
            echo $this->getAttribute((isset($context["program"]) ? $context["program"] : $this->getContext($context, "program")), "description", array());
            echo "
\t\t\t    \t</div>
\t\t\t\t</div> \t  \t
\t\t\t</div> 
\t\t";
        }
        // line 90
        echo "\t

\t\t";
        // line 92
        if (($this->getAttribute((isset($context["program"]) ? $context["program"] : $this->getContext($context, "program")), "url", array()) != "")) {
            echo "\t\t
\t\t\t<div class='row'>\t
\t\t\t\t<div class='col-md-2 attribut'> \t  \t  
\t\t\t    \tUrl : 
\t\t\t\t</div> \t  \t\t    \t
\t\t\t\t<div class='col-md-10'> \t  \t  
\t\t\t    \t<a href=\"";
            // line 98
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["program"]) ? $context["program"] : $this->getContext($context, "program")), "url", array()), "html", null, true);
            echo "\" target='cible'>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["program"]) ? $context["program"] : $this->getContext($context, "program")), "url", array()), "html", null, true);
            echo "</a>
\t\t\t\t</div> \t  \t
\t\t\t</div> 
\t\t";
        }
        // line 101
        echo "\t
\t\t
\t</div>




";
    }

    public function getTemplateName()
    {
        return "IfeAloesBundle:Program:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 101,  184 => 98,  175 => 92,  171 => 90,  163 => 86,  150 => 76,  147 => 75,  142 => 72,  132 => 70,  126 => 69,  121 => 66,  117 => 65,  111 => 62,  107 => 60,  105 => 59,  101 => 57,  93 => 53,  80 => 43,  72 => 38,  59 => 28,  45 => 16,  39 => 15,  37 => 12,  31 => 8,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'IfeAloesBundle:Program:layout.html.twig' %}*/
/* */
/* {% block content -%}*/
/* */
/* */
/*   */
/*   	*/
/*     <div class='title-two1a col-md-9 col-sm-9'> */
/* 			Présentation 	*/
/* 	</div>*/
/*     <div class='title-two1b col-md-3 col-sm-3' style='text-align:right'>*/
/* 		  {% if  ( is_granted("ROLE_RESPONSABLE") and program.isResp(app.user.id)) or */
/* 		                	   ( is_granted("ROLE_ADMIN") )*/
/* 		  %}*/
/* 			    	<a class="btn1 btn-color4" href="{{ path('programs_edit', {id:program.id,from:'entity'}) }}"><span class="glyphicon glyphicon-edit"></span> Modifier le programme </a>*/
/* 		  {% endif %} 	*/
/*     </div> 		*/
/* */
/* */
/* 	*/
/* 	<div class='col-sm-12 container-fluid block3'>	*/
/* */
/* 		<div class='row'>	*/
/* 			<div class='col-md-2 attribut'> 	  	  */
/* 		    	Titre : */
/* 			</div> 	  		    	*/
/* 			<div class='col-md-10'> 	  	  */
/* 		    	{{ program.title }}*/
/* 			</div> 	  	*/
/* 		</div>   	*/
/* 	*/
/* 		  	  */
/* 		<div class='row'>	*/
/* 			<div class='col-md-2 attribut'> 	  	  */
/* 		    	Sigle : */
/* 			</div> 	  		    	*/
/* 			<div class='col-md-10'> 	  	  */
/* 		    	{{ program.label }}*/
/* 			</div> 	  	*/
/* 		</div>   	*/
/* 		*/
/* 		*/
/* 		{% if program.level!="" %}			*/
/* 			<div class='row'>	*/
/* 				<div class='col-md-2 attribut'> 	  	  */
/* 			    	Niveau : */
/* 				</div> 	  		    */
/* 		*/
/* 							*/
/* 				<div class='col-md-10'>*/
/* 					 	  	  */
/* 			    	<div >*/
/* 			    		{{ program.level|raw }}*/
/* 			    	</div>*/
/* 				</div> 	  	*/
/* 			</div> */
/* 		{% endif %}			*/
/* 		*/
/* 		{% if program.resps|length >0 %}*/
/* 				<div class='row'>	*/
/* 					<div class='col-md-2 attribut'> 	*/
/* 						{% if program.resps|length > 1 %}  	  */
/* 					    	Responsables <br/>de la formation : */
/* 						{% else %}*/
/* 					    	Responsable <br/>de la formation	: 					*/
/* 						{% endif %}						  */
/* 					</div> 	  		    	*/
/* 					<div class='col-md-10'> */
/* 						{% for user in program.resps %}  	  */
/* 				    		{{ user.sn}}, {{ user.givenname}}<br/>	*/
/* 						{% endfor %}*/
/* 					</div> 	  	*/
/* 				</div> 	 			*/
/* 		{% endif %}*/
/* 		*/
/* 		{% if program.description!="" %}			*/
/* 			<div class='row'>	*/
/* 				<div class='col-md-2 attribut'> 	  	  */
/* 			    	Description : */
/* 				</div> 	  		    */
/* 		*/
/* 							*/
/* 				<div class='col-md-10'>*/
/* 					 	  	  */
/* 			    	<div   style="overflow:auto; height: 200px; width: 100%; padding: 15px; border: 1px solid #AAAAAA" >*/
/* 			    		{{ program.description|raw }}*/
/* 			    	</div>*/
/* 				</div> 	  	*/
/* 			</div> */
/* 		{% endif %}	*/
/* */
/* 		{% if program.url!="" %}		*/
/* 			<div class='row'>	*/
/* 				<div class='col-md-2 attribut'> 	  	  */
/* 			    	Url : */
/* 				</div> 	  		    	*/
/* 				<div class='col-md-10'> 	  	  */
/* 			    	<a href="{{ program.url }}" target='cible'>{{ program.url }}</a>*/
/* 				</div> 	  	*/
/* 			</div> */
/* 		{% endif %}	*/
/* 		*/
/* 	</div>*/
/* */
/* */
/* */
/* */
/* {% endblock %}*/
/* */
