<?php

/* IfeAloesBundle:Resp:utilisateur-show.html.twig */
class __TwigTemplate_345787fd1956c24086861d16c6746f0f89d8b4f1b46fe44aac304d376f1fcd58 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("IfeAloesBundle:Aloes:layout.html.twig", "IfeAloesBundle:Resp:utilisateur-show.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "IfeAloesBundle:Aloes:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "<div class='title-one'> Profil utilisateur  </div>\t   \t 

\t<fieldset>

\t    <table class=\"table\">
\t        <thead>
\t  
\t        </thead>
\t        <tbody> 
\t
\t\t\t";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "sn", array()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "givenname", array()), "html", null, true);
        echo "<br/><br/>
\t\t\t
\t\t\t ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "roles", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 21
            echo "\t\t\t 
\t\t\t \t";
            // line 22
            if (($context["role"] == "ROLE_ADMIN")) {
                // line 23
                echo "\t\t\t\t\t<b>Administrateur</b><br/>
\t\t\t \t";
            }
            // line 25
            echo "\t\t\t \t
\t\t\t \t";
            // line 26
            if (($context["role"] == "ROLE_RESPONSABLE")) {
                // line 27
                echo "\t\t\t\t\t <b>Responsable de formation :</b><br/>
\t\t\t\t\t
\t\t\t\t\t ";
                // line 29
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "responsables", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["program"]) {
                    // line 30
                    echo "\t\t\t\t\t \t - ";
                    echo twig_escape_filter($this->env, $context["program"], "html", null, true);
                    echo "<br/>
\t\t\t\t\t \t
\t\t\t\t\t\t";
                    // line 32
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "courses", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
                        // line 33
                        echo "\t\t\t\t\t\t\t";
                        if (($this->getAttribute($this->getAttribute($context["course"], "program", array()), "id", array()) == $this->getAttribute($context["program"], "id", array()))) {
                            // line 34
                            echo "\t\t\t\t\t\t\t--- ";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "title", array()), "html", null, true);
                            echo " ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["course"], "program", array()), "id", array()), "html", null, true);
                            echo " ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["course"], "program", array()), "title", array()), "html", null, true);
                            echo "<br/>
\t\t\t\t\t\t\t";
                        }
                        // line 36
                        echo "\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo "\t\t\t\t\t\t \t
\t\t\t\t\t \t
\t\t\t\t\t ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['program'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 39
                echo "\t\t\t\t\t 
\t\t\t\t 

\t\t\t \t";
            }
            // line 42
            echo "\t
\t\t\t \t\t\t\t\t
\t\t\t \t";
            // line 44
            if (($context["role"] == "ROLE_ENSEIGNANT")) {
                // line 45
                echo "\t\t\t\t\t <b>Enseignant(s) :</b><br/>
\t\t\t\t\t
\t\t\t\t\t ";
                // line 47
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "enseignants", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["program"]) {
                    // line 48
                    echo "\t\t\t\t\t \t- ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["program"], "title", array()), "html", null, true);
                    echo "<br/>
\t\t\t\t\t \t
\t\t\t\t\t\t";
                    // line 50
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "courses", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
                        // line 51
                        echo "\t\t\t\t\t\t\t";
                        if (($this->getAttribute($this->getAttribute($context["course"], "program", array()), "id", array()) == $this->getAttribute($context["program"], "id", array()))) {
                            // line 52
                            echo "\t\t\t\t\t\t\t--- ";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "title", array()), "html", null, true);
                            echo " ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["course"], "program", array()), "id", array()), "html", null, true);
                            echo " ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["course"], "program", array()), "title", array()), "html", null, true);
                            echo "<br/>
\t\t\t\t\t\t\t";
                        }
                        // line 54
                        echo "\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo "\t\t\t\t\t\t \t
\t\t\t\t\t \t
\t\t\t\t\t ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['program'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 57
                echo "\t
\t\t\t \t";
            }
            // line 58
            echo "\t
\t\t\t \t\t\t\t\t
\t\t\t ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "
 \t    
\t        </tbody>
\t    </table>
\t\t
\t    
\t</fieldset>    
\t          
    
\t<div class='row'>\t
\t\t\t<div class='col-md-3'> 
\t\t\t    \t<a href=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("resp_utilisateurs_updateuser", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "page" => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "sort" => (isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")), "direction" => (isset($context["direction"]) ? $context["direction"] : $this->getContext($context, "direction")))), "html", null, true);
        echo "\">
\t\t\t        \tModifier
\t\t\t   \t\t</a>    
\t\t\t</div>
\t\t\t<div class='col-md-3'>
\t\t\t\t    <a href=\"";
        // line 77
        echo $this->env->getExtension('routing')->getPath("resp_utilisateurs");
        echo "\"> Retour à la liste des utilisateurs </a>
\t\t\t</div>
\t</div>\t\t\t\t
\t\t\t\t\t          
\t          
    
";
    }

    public function getTemplateName()
    {
        return "IfeAloesBundle:Resp:utilisateur-show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 77,  193 => 72,  180 => 61,  172 => 58,  168 => 57,  155 => 54,  145 => 52,  142 => 51,  138 => 50,  132 => 48,  128 => 47,  124 => 45,  122 => 44,  118 => 42,  112 => 39,  99 => 36,  89 => 34,  86 => 33,  82 => 32,  76 => 30,  72 => 29,  68 => 27,  66 => 26,  63 => 25,  59 => 23,  57 => 22,  54 => 21,  50 => 20,  43 => 18,  31 => 8,  28 => 5,  11 => 1,);
    }
}
/* {% extends 'IfeAloesBundle:Aloes:layout.html.twig' %}*/
/* */
/*   */
/* */
/* {% block content -%}*/
/* */
/* */
/*     <div class='title-one'> Profil utilisateur  </div>	   	 */
/* */
/* 	<fieldset>*/
/* */
/* 	    <table class="table">*/
/* 	        <thead>*/
/* 	  */
/* 	        </thead>*/
/* 	        <tbody> */
/* 	*/
/* 			{{ entity.sn }}, {{ entity.givenname }}<br/><br/>*/
/* 			*/
/* 			 {% for role in entity.roles %}*/
/* 			 */
/* 			 	{% if role=="ROLE_ADMIN" %}*/
/* 					<b>Administrateur</b><br/>*/
/* 			 	{% endif %}*/
/* 			 	*/
/* 			 	{% if role=="ROLE_RESPONSABLE" %}*/
/* 					 <b>Responsable de formation :</b><br/>*/
/* 					*/
/* 					 {% for program in entity.responsables %}*/
/* 					 	 - {{ program }}<br/>*/
/* 					 	*/
/* 						{% for course in entity.courses %}*/
/* 							{% if course.program.id==program.id %}*/
/* 							--- {{ course.title }} {{ course.program.id }} {{ course.program.title }}<br/>*/
/* 							{% endif %}*/
/* 						{% endfor %}						 	*/
/* 					 	*/
/* 					 {% endfor %}*/
/* 					 */
/* 				 */
/* */
/* 			 	{% endif %}	*/
/* 			 					*/
/* 			 	{% if role=="ROLE_ENSEIGNANT" %}*/
/* 					 <b>Enseignant(s) :</b><br/>*/
/* 					*/
/* 					 {% for program in entity.enseignants %}*/
/* 					 	- {{ program.title }}<br/>*/
/* 					 	*/
/* 						{% for course in entity.courses %}*/
/* 							{% if course.program.id==program.id %}*/
/* 							--- {{ course.title }} {{ course.program.id }} {{ course.program.title }}<br/>*/
/* 							{% endif %}*/
/* 						{% endfor %}						 	*/
/* 					 	*/
/* 					 {% endfor %}*/
/* 	*/
/* 			 	{% endif %}	*/
/* 			 					*/
/* 			 {% endfor %}*/
/* */
/*  	    */
/* 	        </tbody>*/
/* 	    </table>*/
/* 		*/
/* 	    */
/* 	</fieldset>    */
/* 	          */
/*     */
/* 	<div class='row'>	*/
/* 			<div class='col-md-3'> */
/* 			    	<a href="{{ path('resp_utilisateurs_updateuser', { 'id': entity.id, 'page' : page, 'sort' : sort, 'direction' : direction  }) }}">*/
/* 			        	Modifier*/
/* 			   		</a>    */
/* 			</div>*/
/* 			<div class='col-md-3'>*/
/* 				    <a href="{{ path('resp_utilisateurs') }}"> Retour à la liste des utilisateurs </a>*/
/* 			</div>*/
/* 	</div>				*/
/* 					          */
/* 	          */
/*     */
/* {% endblock %} */
/* */
/* */
/*     */
/* */
