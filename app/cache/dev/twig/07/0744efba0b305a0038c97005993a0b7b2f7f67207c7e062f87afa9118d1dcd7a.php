<?php

/* IfeAloesBundle:Admin:utilisateur-show.html.twig */
class __TwigTemplate_8998304661d1d19407716ae65670cfbd4db47b7659bc2afe14ce707e8cc6f13e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("IfeAloesBundle:Aloes:layout-outils.html.twig", "IfeAloesBundle:Admin:utilisateur-show.html.twig", 1);
        $this->blocks = array(
            'header_nav' => array($this, 'block_header_nav'),
            'content_10' => array($this, 'block_content_10'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "IfeAloesBundle:Aloes:layout-outils.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_header_nav($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"btn-group btn-breadcrumb\">   
        <a  class=\"btn btn-default\" href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("admin_outil");
        echo "\"> Réglages</a></li>
        <a  class=\"btn btn-default\" href=\"\">Gestion utilisateurs</a>
    </div> 
";
    }

    // line 11
    public function block_content_10($context, array $blocks = array())
    {
        // line 14
        echo "<div class='title-two1a col-md-9 col-sm-9'> 
\t\t\tConsulter utilisateur
\t</div>
    <div class='title-two1b col-md-3 col-sm-3' style='text-align:right'>
\t\t\t<a class=\"btn1 btn-color4\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_utilisateurs_updateuser", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "page" => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "sort" => (isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")), "direction" => (isset($context["direction"]) ? $context["direction"] : $this->getContext($context, "direction")))), "html", null, true);
        echo "\">
\t\t\t\t<span class=\"glyphicon glyphicon-edit\"></span> Modifier l'utilisateur
\t\t\t</a>    \t      
    </div> \t\t


\t<div class=\"col-sm-12 block3\">
\t\t\t";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "sn", array()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "givenname", array()), "html", null, true);
        echo "<br/><br/>
\t\t\t
\t\t\t ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "roles", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 28
            echo "\t\t\t 
\t\t\t \t";
            // line 29
            if (($context["role"] == "ROLE_ADMIN")) {
                // line 30
                echo "\t\t\t\t\t<b>Administrateur</b><br/>
\t\t\t \t";
            }
            // line 32
            echo "\t\t\t \t
\t\t\t \t";
            // line 33
            if (($context["role"] == "ROLE_RESPONSABLE")) {
                // line 34
                echo "\t\t\t\t\t <b>Responsable de formation :</b><br/>
\t\t\t\t\t
\t\t\t\t\t ";
                // line 36
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "responsables", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["program"]) {
                    // line 37
                    echo "\t\t\t\t\t \t - ";
                    echo twig_escape_filter($this->env, $context["program"], "html", null, true);
                    echo "<br/>
\t\t\t\t\t \t
\t\t\t\t\t\t";
                    // line 39
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "courses", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
                        // line 40
                        echo "\t\t\t\t\t\t\t";
                        if (($this->getAttribute($this->getAttribute($context["course"], "program", array()), "id", array()) == $this->getAttribute($context["program"], "id", array()))) {
                            // line 41
                            echo "\t\t\t\t\t\t\t--- ";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "title", array()), "html", null, true);
                            echo " ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["course"], "program", array()), "id", array()), "html", null, true);
                            echo " ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["course"], "program", array()), "title", array()), "html", null, true);
                            echo "<br/>
\t\t\t\t\t\t\t";
                        }
                        // line 43
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
                // line 46
                echo "\t\t\t\t\t 
\t\t\t\t 

\t\t\t \t";
            }
            // line 49
            echo "\t
\t\t\t \t\t\t\t\t
\t\t\t \t";
            // line 51
            if (($context["role"] == "ROLE_ENSEIGNANT")) {
                // line 52
                echo "\t\t\t\t\t <b>Enseignant(s) :</b><br/>
\t\t\t\t\t
\t\t\t\t\t ";
                // line 54
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "enseignants", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["program"]) {
                    // line 55
                    echo "\t\t\t\t\t \t- ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["program"], "title", array()), "html", null, true);
                    echo "<br/>
\t\t\t\t\t \t
\t\t\t\t\t\t";
                    // line 57
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "courses", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
                        // line 58
                        echo "\t\t\t\t\t\t\t";
                        if (($this->getAttribute($this->getAttribute($context["course"], "program", array()), "id", array()) == $this->getAttribute($context["program"], "id", array()))) {
                            // line 59
                            echo "\t\t\t\t\t\t\t--- ";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "title", array()), "html", null, true);
                            echo " ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["course"], "program", array()), "id", array()), "html", null, true);
                            echo " ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["course"], "program", array()), "title", array()), "html", null, true);
                            echo "<br/>
\t\t\t\t\t\t\t";
                        }
                        // line 61
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
                // line 64
                echo "\t
\t\t\t \t";
            }
            // line 65
            echo "\t
\t\t\t \t\t\t\t\t
\t\t\t ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "

\t\t<div class='col-sm-12'>
\t\t\t<hr/>
\t\t</div>


\t\t<div class='col-sm-12'>
\t\t\t\t    <a href=\"";
        // line 76
        echo $this->env->getExtension('routing')->getPath("admin_utilisateurs");
        echo "\"><span class=\"glyphicon glyphicon-arrow-left\"></span> Retour à la liste des utilisateurs </a>
\t\t</div>

\t\t<div class='col-sm-12'>
\t\t</div>

\t</div>
\t          
    


\t\t\t
\t\t\t\t\t          
\t          
    
";
    }

    public function getTemplateName()
    {
        return "IfeAloesBundle:Admin:utilisateur-show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 76,  199 => 68,  191 => 65,  187 => 64,  174 => 61,  164 => 59,  161 => 58,  157 => 57,  151 => 55,  147 => 54,  143 => 52,  141 => 51,  137 => 49,  131 => 46,  118 => 43,  108 => 41,  105 => 40,  101 => 39,  95 => 37,  91 => 36,  87 => 34,  85 => 33,  82 => 32,  78 => 30,  76 => 29,  73 => 28,  69 => 27,  62 => 25,  52 => 18,  46 => 14,  43 => 11,  35 => 5,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'IfeAloesBundle:Aloes:layout-outils.html.twig' %}*/
/* */
/* {% block header_nav %}*/
/*     <div class="btn-group btn-breadcrumb">   */
/*         <a  class="btn btn-default" href="{{path('admin_outil')}}"> Réglages</a></li>*/
/*         <a  class="btn btn-default" href="">Gestion utilisateurs</a>*/
/*     </div> */
/* {% endblock %}*/
/*   */
/* */
/* {% block content_10 -%}*/
/* */
/*    	*/
/*     <div class='title-two1a col-md-9 col-sm-9'> */
/* 			Consulter utilisateur*/
/* 	</div>*/
/*     <div class='title-two1b col-md-3 col-sm-3' style='text-align:right'>*/
/* 			<a class="btn1 btn-color4" href="{{ path('admin_utilisateurs_updateuser', { 'id': entity.id, 'page' : page, 'sort' : sort, 'direction' : direction  }) }}">*/
/* 				<span class="glyphicon glyphicon-edit"></span> Modifier l'utilisateur*/
/* 			</a>    	      */
/*     </div> 		*/
/* */
/* */
/* 	<div class="col-sm-12 block3">*/
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
/* */
/* 		<div class='col-sm-12'>*/
/* 			<hr/>*/
/* 		</div>*/
/* */
/* */
/* 		<div class='col-sm-12'>*/
/* 				    <a href="{{ path('admin_utilisateurs') }}"><span class="glyphicon glyphicon-arrow-left"></span> Retour à la liste des utilisateurs </a>*/
/* 		</div>*/
/* */
/* 		<div class='col-sm-12'>*/
/* 		</div>*/
/* */
/* 	</div>*/
/* 	          */
/*     */
/* */
/* */
/* 			*/
/* 					          */
/* 	          */
/*     */
/* {% endblock %} */
/* */
/* */
/*     */
/* */
