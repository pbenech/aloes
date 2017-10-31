<?php

/* IfeAloesBundle:Event:index.html.twig */
class __TwigTemplate_5f289777be3965583875216472ded6faeeaf15080d8ab85942e09322bdcbe3d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("IfeAloesBundle:Course:layout.html.twig", "IfeAloesBundle:Event:index.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "IfeAloesBundle:Course:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["macro"] = $this->loadTemplate("::macro.html.twig", "IfeAloesBundle:Event:index.html.twig", 3);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "<div class='title-one'> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "title", array()), "html", null, true);
        echo " </div>
\t
    <div class='row'>    \t
    \t<div class='title-two col-md-9 col-sm-9'> 
\t\t\tListe des évènements 
\t\t</div>
    \t<div class='col-md-3 col-sm-3' style='text-align:right'>\t\t \t
\t\t\t";
        // line 15
        if (((($this->env->getExtension('security')->isGranted("ROLE_ENSEIGNANT") && $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "isRedacteur", array(0 => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array())), "method")) || ($this->env->getExtension('security')->isGranted("ROLE_RESPONSABLE") && $this->getAttribute(        // line 16
(isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "isRedacteur", array(0 => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array())), "method"))) || $this->env->getExtension('security')->isGranted("ROLE_ADMIN"))) {
            // line 18
            echo "\t\t \t
        \t\t<a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_event_new", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-pencil\"></span>  Ajouter un événement </a>
\t\t\t";
        }
        // line 20
        echo "\t \t
    \t</div> \t\t
    </div>
    
\t<fieldset>

    <table class=\"table\">
        <thead>
            <th width='20%'>";
        // line 28
        echo $this->env->getExtension('knp_pagination')->sortable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Sigle", "e.startDate");
        echo "
            \t";
        // line 29
        echo $context["macro"]->gettri("e.startDate", (isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")), (isset($context["direction"]) ? $context["direction"] : $this->getContext($context, "direction")));
        echo "  
            </th>
            <th width='50%'>";
        // line 31
        echo $this->env->getExtension('knp_pagination')->sortable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Titre", "e.title");
        echo "
            \t";
        // line 32
        echo $context["macro"]->gettri("e.title", (isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")), (isset($context["direction"]) ? $context["direction"] : $this->getContext($context, "direction")));
        echo " 
            </th>
  
            <th width='10%' style=\"text-align:center\"> Consulter</th>
            <th width='10%' style=\"text-align:center\"> Modifier</th> 
            <th width='10%' style=\"text-align:center\"> Supprimer</th>            
    
        </thead> 
        <tbody>
        
\t\t    ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 43
            echo "\t\t        <tr>
\t\t
\t\t            <td>
\t\t\t\t\t\t";
            // line 46
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "startDate", array()), "d/m/Y"), "html", null, true);
            echo "
\t\t                ";
            // line 47
            if ( !(null === $this->getAttribute($context["entity"], "endDate", array()))) {
                // line 48
                echo "\t\t                        <span class=\"glyphicon glyphicon-arrow-right\"></span>
\t\t                        ";
                // line 49
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "endDate", array()), "d/m/Y"), "html", null, true);
                echo "
\t\t                ";
            }
            // line 51
            echo "\t\t            </td>         
\t\t            <td>
\t\t           \t\t";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "title", array()), "html", null, true);
            echo "
\t\t            </td>
\t\t            
\t\t            <td style=\"text-align:center\">
\t\t                    <a href=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("event_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-eye-open\"></span></a>
\t\t            </td>
\t\t            \t\t            
\t\t            <td style=\"text-align:center\">
\t\t\t\t\t\t";
            // line 61
            if (((($this->env->getExtension('security')->isGranted("ROLE_ENSEIGNANT") && $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "isRedacteur", array(0 => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array())), "method")) || ($this->env->getExtension('security')->isGranted("ROLE_RESPONSABLE") && $this->getAttribute(            // line 62
(isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "isRedacteur", array(0 => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array())), "method"))) || $this->env->getExtension('security')->isGranted("ROLE_ADMIN"))) {
                // line 64
                echo "\t\t\t            
\t\t                    <a href=\"";
                // line 65
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("event_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-edit\"></span></a>
\t\t                ";
            }
            // line 66
            echo "\t\t                    
\t\t            </td>

\t\t            <td style=\"text-align:center\">
\t\t\t\t\t\t";
            // line 70
            if (((($this->env->getExtension('security')->isGranted("ROLE_ENSEIGNANT") && $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "isRedacteur", array(0 => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array())), "method")) || ($this->env->getExtension('security')->isGranted("ROLE_RESPONSABLE") && $this->getAttribute(            // line 71
(isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "isRedacteur", array(0 => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array())), "method"))) || $this->env->getExtension('security')->isGranted("ROLE_ADMIN"))) {
                // line 73
                echo "\t\t\t            
\t\t                    <a href=\"";
                // line 74
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("event_delete", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-remove\"></span> </a>
\t\t                ";
            }
            // line 75
            echo "\t\t\t\t                    
\t\t            </td>
\t\t\t\t
\t\t\t\t\t<!--
\t\t            <div class=\"row\">                    
\t\t                <div class=\"col-md-8 col-md-offset-3\">
\t\t                    ";
            // line 81
            echo $this->getAttribute($context["entity"], "description", array());
            echo " 
\t\t                </div>
\t\t            </div>
\t\t\t\t\t-->
\t\t\t\t\t
\t\t        </tr>
\t\t    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "        
        
        </tbody>
    </table>
    
\t</fieldset>     
    

\t<center>
\t";
        // line 96
        echo $this->env->getExtension('knp_pagination')->render((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
\t</center>


";
    }

    public function getTemplateName()
    {
        return "IfeAloesBundle:Event:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 96,  182 => 87,  169 => 81,  161 => 75,  156 => 74,  153 => 73,  151 => 71,  150 => 70,  144 => 66,  139 => 65,  136 => 64,  134 => 62,  133 => 61,  126 => 57,  119 => 53,  115 => 51,  110 => 49,  107 => 48,  105 => 47,  101 => 46,  96 => 43,  92 => 42,  79 => 32,  75 => 31,  70 => 29,  66 => 28,  56 => 20,  51 => 19,  48 => 18,  46 => 16,  45 => 15,  34 => 8,  31 => 5,  27 => 1,  25 => 3,  11 => 1,);
    }
}
/* {% extends 'IfeAloesBundle:Course:layout.html.twig' %}*/
/* */
/* {% import "::macro.html.twig" as macro %}*/
/* */
/* {% block content -%}*/
/* */
/* */
/*    	<div class='title-one'> {{ course.title }} </div>*/
/* 	*/
/*     <div class='row'>    	*/
/*     	<div class='title-two col-md-9 col-sm-9'> */
/* 			Liste des évènements */
/* 		</div>*/
/*     	<div class='col-md-3 col-sm-3' style='text-align:right'>		 	*/
/* 			{% if ( is_granted("ROLE_ENSEIGNANT")  and course.isRedacteur(app.user.id) ) or */
/* 			      ( is_granted("ROLE_RESPONSABLE") and course.isRedacteur(app.user.id) ) or  */
/* 			      ( is_granted("ROLE_ADMIN") )*/
/* 			 %}		 	*/
/*         		<a href="{{ path('course_event_new', {id:course.id})}}"><span class="glyphicon glyphicon-pencil"></span>  Ajouter un événement </a>*/
/* 			{% endif %}	 	*/
/*     	</div> 		*/
/*     </div>*/
/*     */
/* 	<fieldset>*/
/* */
/*     <table class="table">*/
/*         <thead>*/
/*             <th width='20%'>{{ knp_pagination_sortable(pagination, 'Sigle', 'e.startDate') }}*/
/*             	{{ macro.tri('e.startDate',sort,direction) }}  */
/*             </th>*/
/*             <th width='50%'>{{ knp_pagination_sortable(pagination, 'Titre', 'e.title') }}*/
/*             	{{ macro.tri('e.title',sort,direction) }} */
/*             </th>*/
/*   */
/*             <th width='10%' style="text-align:center"> Consulter</th>*/
/*             <th width='10%' style="text-align:center"> Modifier</th> */
/*             <th width='10%' style="text-align:center"> Supprimer</th>            */
/*     */
/*         </thead> */
/*         <tbody>*/
/*         */
/* 		    {% for entity in pagination %}*/
/* 		        <tr>*/
/* 		*/
/* 		            <td>*/
/* 						{{ entity.startDate|date('d/m/Y') }}*/
/* 		                {% if entity.endDate is not null %}*/
/* 		                        <span class="glyphicon glyphicon-arrow-right"></span>*/
/* 		                        {{ entity.endDate|date('d/m/Y') }}*/
/* 		                {% endif %}*/
/* 		            </td>         */
/* 		            <td>*/
/* 		           		{{ entity.title }}*/
/* 		            </td>*/
/* 		            */
/* 		            <td style="text-align:center">*/
/* 		                    <a href="{{ path('event_show', {id:entity.id})}}"><span class="glyphicon glyphicon-eye-open"></span></a>*/
/* 		            </td>*/
/* 		            		            */
/* 		            <td style="text-align:center">*/
/* 						{% if ( is_granted("ROLE_ENSEIGNANT")  and course.isRedacteur(app.user.id) ) or */
/* 						      ( is_granted("ROLE_RESPONSABLE") and course.isRedacteur(app.user.id) ) or  */
/* 						      ( is_granted("ROLE_ADMIN") )*/
/* 						 %}			            */
/* 		                    <a href="{{ path('event_edit', {id:entity.id})}}"><span class="glyphicon glyphicon-edit"></span></a>*/
/* 		                {% endif %}		                    */
/* 		            </td>*/
/* */
/* 		            <td style="text-align:center">*/
/* 						{% if ( is_granted("ROLE_ENSEIGNANT")  and course.isRedacteur(app.user.id) ) or */
/* 						      ( is_granted("ROLE_RESPONSABLE") and course.isRedacteur(app.user.id) ) or  */
/* 						      ( is_granted("ROLE_ADMIN") )*/
/* 						 %}			            */
/* 		                    <a href="{{ path('event_delete', {id:entity.id})}}"><span class="glyphicon glyphicon-remove"></span> </a>*/
/* 		                {% endif %}				                    */
/* 		            </td>*/
/* 				*/
/* 					<!--*/
/* 		            <div class="row">                    */
/* 		                <div class="col-md-8 col-md-offset-3">*/
/* 		                    {{ entity.description|raw }} */
/* 		                </div>*/
/* 		            </div>*/
/* 					-->*/
/* 					*/
/* 		        </tr>*/
/* 		    {% endfor %}        */
/*         */
/*         </tbody>*/
/*     </table>*/
/*     */
/* 	</fieldset>     */
/*     */
/* */
/* 	<center>*/
/* 	{{ knp_pagination_render(pagination) }}*/
/* 	</center>*/
/* */
/* */
/* {% endblock %}*/
/* */
