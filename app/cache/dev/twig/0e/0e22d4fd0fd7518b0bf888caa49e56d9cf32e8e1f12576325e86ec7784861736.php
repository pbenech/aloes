<?php

/* IfeAloesBundle:GeneralCompetence:cours.html.twig */
class __TwigTemplate_ef3c510a5d37ed596479d3bcf7dc7dd5dc9fc17a51be6735ca483cbae3b8551f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("IfeAloesBundle:Course:layout.html.twig", "IfeAloesBundle:GeneralCompetence:cours.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'course_selection' => array($this, 'block_course_selection'),
            'course_selection_form' => array($this, 'block_course_selection_form'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "IfeAloesBundle:Course:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["macros"] = $this->loadTemplate("IfeAloesBundle:Course:linking.html.twig", "IfeAloesBundle:GeneralCompetence:cours.html.twig", 2);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<div class='title-one'> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "title", array()), "html", null, true);
        echo " </div>
    <div class='title-two'> Référentiel de compétences du cours </div>    \t

<!--
    ";
        // line 10
        $this->displayBlock("course_selection", $context, $blocks);
        echo "
-->

    ";
        // line 13
        $this->loadTemplate("IfeAloesBundle:GeneralCompetence:cours.html.twig", "IfeAloesBundle:GeneralCompetence:cours.html.twig", 13, "1618615162")->display(array_merge($context, array("children" => "specificCompetences")));
        // line 94
        echo "
";
    }

    // line 97
    public function block_course_selection($context, array $blocks = array())
    {
        // line 98
        echo "    <div class=\"panel-group\" id=\"course-selection\" role=\"tablist\">
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\" role=\"tab\" id=\"course-selection-heading\">
                <h4 class=\"panel-title\">
                    <a role=\"button\" data-toggle=\"collapse\" data-parent=\"#course-selection\" href=\"#course-selection-form\">
                        Selectionner un parcours
                    </a>
                </h4>
            </div>
            <div id=\"course-selection-form\" class=\"panel-collapse collapse\" role=\"tabpanel\">
                <div class=\"panel-body\">
                    <p class=\"alert alert-info\"> 
                        Selectionnez les cours à prendre en compte
                        pour la pondération du référentiel de
                        compétences 
                    </p>
                    ";
        // line 114
        $this->displayBlock("course_selection_form", $context, $blocks);
        echo "
                </div>
            </div>
        </div> 
    </div>
";
    }

    // line 122
    public function block_course_selection_form($context, array $blocks = array())
    {
        // line 123
        echo "    <form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("program_competences", array("id" => $this->getAttribute((isset($context["program"]) ? $context["program"] : $this->getContext($context, "program")), "id", array()))), "html", null, true);
        echo "\" method=\"POST\">
        ";
        // line 124
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["courses"]) ? $context["courses"] : $this->getContext($context, "courses")));
        foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
            // line 125
            echo "            <div class=\"checkbox\">
                <label> 
                    <input type=\"checkbox\" name=\"courses[";
            // line 127
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "id", array()), "html", null, true);
            echo "]\" 
                           ";
            // line 128
            if ((((twig_length_filter($this->env, (isset($context["selection"]) ? $context["selection"] : $this->getContext($context, "selection"))) == 0) && ($this->getAttribute($context["course"], "isOptional", array()) == false)) || twig_in_filter($this->getAttribute($context["course"], "id", array()), (isset($context["selection"]) ? $context["selection"] : $this->getContext($context, "selection"))))) {
                // line 129
                echo "                           checked
                           ";
            }
            // line 130
            echo ">  
                    ";
            // line 131
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "label", array()), "html", null, true);
            echo "
                </label>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 135
        echo "        <button type=\"submit\" class=\"btn btn-success\"> Actualiser la sélection </button> 
    </form>
";
    }

    public function getTemplateName()
    {
        return "IfeAloesBundle:GeneralCompetence:cours.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 135,  117 => 131,  114 => 130,  110 => 129,  108 => 128,  104 => 127,  100 => 125,  96 => 124,  91 => 123,  88 => 122,  78 => 114,  60 => 98,  57 => 97,  52 => 94,  50 => 13,  44 => 10,  36 => 6,  33 => 4,  29 => 1,  27 => 2,  11 => 1,);
    }
}


/* IfeAloesBundle:GeneralCompetence:cours.html.twig */
class __TwigTemplate_ef3c510a5d37ed596479d3bcf7dc7dd5dc9fc17a51be6735ca483cbae3b8551f_1618615162 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 13
        $this->parent = $this->loadTemplate("IfeAloesBundle:Aloes:list-spec.html.twig", "IfeAloesBundle:GeneralCompetence:cours.html.twig", 13);
        $this->blocks = array(
            'parent_item' => array($this, 'block_parent_item'),
            'child_item' => array($this, 'block_child_item'),
            'children_header' => array($this, 'block_children_header'),
            'new_parent' => array($this, 'block_new_parent'),
            'new_child' => array($this, 'block_new_child'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "IfeAloesBundle:Aloes:list-spec.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_parent_item($context, array $blocks = array())
    {
        // line 16
        echo "            <div class=\"row\">

                <!-- Title -->
\t        <div class=\"lead col-md-9 col-sm-9\">
                    ";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "title", array()), "html", null, true);
        echo "
\t        </div>
                
                <!-- Weight -->
\t        <div class=\"general-item-weight cold-md-2 col-sm-2\">
\t            <span class=\"weight lead text-muted\"> ";
        // line 25
        echo twig_escape_filter($this->env, (twig_round($this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "weight", array()), 2) * 100), "html", null, true);
        echo " % </span>
\t        </div> 
                
                <!-- Link to edit -->
            <!--    
\t        <div class=\"col-md-1 col-sm-1\">
                    <a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("generalcompetence_edit", array("id" => $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "id", array()))), "html", null, true);
        echo "\" class=\"pull-right\">
\t                <span class=\"glyphicon glyphicon-edit\"></span>
                    </a>
\t        </div>
\t\t\t-->
\t\t\t
            </div>
        ";
    }

    // line 40
    public function block_child_item($context, array $blocks = array())
    {
        // line 41
        echo "            <tr>
                <td> ";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "title", array()), "html", null, true);
        echo " </td>
                <td> ";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macros"]) ? $context["macros"] : $this->getContext($context, "macros")), "progress_bar", array(0 => $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "weight", array())), "method"), "html", null, true);
        echo " </td>
                <!--
                <td> 
                    <a href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("specificcompetence_delete", array("id" => $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "id", array()))), "html", null, true);
        echo "\">
                        <span class=\"glyphicon glyphicon-remove\"></span>
                    </a>
                </td>
                -->
                
            </tr>
        ";
    }

    // line 56
    public function block_children_header($context, array $blocks = array())
    {
        // line 57
        echo "\t    <thead class=\"list-header\">
\t        <tr>
\t\t    <th class=\"col-md-8\"> Compétences spécifiques </th>
\t\t    <th class=\"col-md-3\"> Poids des évaluations </th>
\t\t    <th class=\"col-md-3\"></th>
\t        </tr>
\t    </thead>
        ";
    }

    // line 66
    public function block_new_parent($context, array $blocks = array())
    {
        // line 67
        echo "        <!--
            <div class=\"node-creator general-item-creator\">
                <form action=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("program_competences_create", array("id" => $this->getAttribute((isset($context["program"]) ? $context["program"] : $this->getContext($context, "program")), "id", array()))), "html", null, true);
        echo "\" method=\"POST\">
                    <div class=\"form-group\">
                        <input name=\"aloes_generalcompetence[title]\" type=\"text\" placeholder=\"Nouvelle compétence générale\" required>
                    </div>
                    <button class=\"btn btn-xs btn-success\" type=\"submit\"> Ajouter </button>
                </form>
            </div>
        -->
        ";
    }

    // line 79
    public function block_new_child($context, array $blocks = array())
    {
        // line 80
        echo "\t\t<!--\t
            <div class=\"child-creator\">
                <form action=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("generalcompetence_specifics_create", array("id" => $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "id", array()))), "html", null, true);
        echo "\" method=\"POST\">
                    <div class=\"form-group\">
                        <input name=\"aloes_specificcompetence[title]\" type=\"text\" placeholder=\"Nouvelle compétence spécifique\" required>
                    </div>
                    <button class=\"btn btn-xs btn-success\" type=\"submit\"> Ajouter </button>
                </form>
            </div>
        -->
            
        ";
    }

    public function getTemplateName()
    {
        return "IfeAloesBundle:GeneralCompetence:cours.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  285 => 82,  281 => 80,  278 => 79,  265 => 69,  261 => 67,  258 => 66,  247 => 57,  244 => 56,  232 => 46,  226 => 43,  222 => 42,  219 => 41,  216 => 40,  204 => 31,  195 => 25,  187 => 20,  181 => 16,  178 => 15,  157 => 13,  127 => 135,  117 => 131,  114 => 130,  110 => 129,  108 => 128,  104 => 127,  100 => 125,  96 => 124,  91 => 123,  88 => 122,  78 => 114,  60 => 98,  57 => 97,  52 => 94,  50 => 13,  44 => 10,  36 => 6,  33 => 4,  29 => 1,  27 => 2,  11 => 1,);
    }
}
/* {% extends 'IfeAloesBundle:Course:layout.html.twig' %}*/
/* {% import 'IfeAloesBundle:Course:linking.html.twig' as macros %}*/
/* */
/* {% block content -%}*/
/* */
/*    	<div class='title-one'> {{ course.title }} </div>*/
/*     <div class='title-two'> Référentiel de compétences du cours </div>    	*/
/* */
/* <!--*/
/*     {{ block('course_selection') }}*/
/* -->*/
/* */
/*     {% embed 'IfeAloesBundle:Aloes:list-spec.html.twig' with {'children':'specificCompetences'} %}*/
/* */
/*         {% block parent_item %}*/
/*             <div class="row">*/
/* */
/*                 <!-- Title -->*/
/* 	        <div class="lead col-md-9 col-sm-9">*/
/*                     {{ parent.title }}*/
/* 	        </div>*/
/*                 */
/*                 <!-- Weight -->*/
/* 	        <div class="general-item-weight cold-md-2 col-sm-2">*/
/* 	            <span class="weight lead text-muted"> {{ parent.weight|round(2) * 100 }} % </span>*/
/* 	        </div> */
/*                 */
/*                 <!-- Link to edit -->*/
/*             <!--    */
/* 	        <div class="col-md-1 col-sm-1">*/
/*                     <a href="{{path('generalcompetence_edit',{id:parent.id})}}" class="pull-right">*/
/* 	                <span class="glyphicon glyphicon-edit"></span>*/
/*                     </a>*/
/* 	        </div>*/
/* 			-->*/
/* 			*/
/*             </div>*/
/*         {% endblock %}*/
/* */
/*         {% block child_item %}*/
/*             <tr>*/
/*                 <td> {{ child.title }} </td>*/
/*                 <td> {{ macros.progress_bar(child.weight) }} </td>*/
/*                 <!--*/
/*                 <td> */
/*                     <a href="{{ path('specificcompetence_delete', {id:child.id}) }}">*/
/*                         <span class="glyphicon glyphicon-remove"></span>*/
/*                     </a>*/
/*                 </td>*/
/*                 -->*/
/*                 */
/*             </tr>*/
/*         {% endblock %}*/
/* */
/* */
/*         {% block children_header %}*/
/* 	    <thead class="list-header">*/
/* 	        <tr>*/
/* 		    <th class="col-md-8"> Compétences spécifiques </th>*/
/* 		    <th class="col-md-3"> Poids des évaluations </th>*/
/* 		    <th class="col-md-3"></th>*/
/* 	        </tr>*/
/* 	    </thead>*/
/*         {% endblock %}*/
/* */
/*         {% block new_parent %}*/
/*         <!--*/
/*             <div class="node-creator general-item-creator">*/
/*                 <form action="{{path('program_competences_create', {id:program.id})}}" method="POST">*/
/*                     <div class="form-group">*/
/*                         <input name="aloes_generalcompetence[title]" type="text" placeholder="Nouvelle compétence générale" required>*/
/*                     </div>*/
/*                     <button class="btn btn-xs btn-success" type="submit"> Ajouter </button>*/
/*                 </form>*/
/*             </div>*/
/*         -->*/
/*         {% endblock %}*/
/* */
/*         {% block new_child %}*/
/* 		<!--	*/
/*             <div class="child-creator">*/
/*                 <form action="{{path('generalcompetence_specifics_create', {id:parent.id})}}" method="POST">*/
/*                     <div class="form-group">*/
/*                         <input name="aloes_specificcompetence[title]" type="text" placeholder="Nouvelle compétence spécifique" required>*/
/*                     </div>*/
/*                     <button class="btn btn-xs btn-success" type="submit"> Ajouter </button>*/
/*                 </form>*/
/*             </div>*/
/*         -->*/
/*             */
/*         {% endblock %}*/
/* */
/*     {% endembed %}*/
/* */
/* {% endblock %}*/
/* */
/* {% block course_selection %}*/
/*     <div class="panel-group" id="course-selection" role="tablist">*/
/*         <div class="panel panel-default">*/
/*             <div class="panel-heading" role="tab" id="course-selection-heading">*/
/*                 <h4 class="panel-title">*/
/*                     <a role="button" data-toggle="collapse" data-parent="#course-selection" href="#course-selection-form">*/
/*                         Selectionner un parcours*/
/*                     </a>*/
/*                 </h4>*/
/*             </div>*/
/*             <div id="course-selection-form" class="panel-collapse collapse" role="tabpanel">*/
/*                 <div class="panel-body">*/
/*                     <p class="alert alert-info"> */
/*                         Selectionnez les cours à prendre en compte*/
/*                         pour la pondération du référentiel de*/
/*                         compétences */
/*                     </p>*/
/*                     {{ block('course_selection_form') }}*/
/*                 </div>*/
/*             </div>*/
/*         </div> */
/*     </div>*/
/* {% endblock %}*/
/* */
/* */
/* {% block course_selection_form %}*/
/*     <form action="{{path('program_competences', {id:program.id})}}" method="POST">*/
/*         {% for course in courses %}*/
/*             <div class="checkbox">*/
/*                 <label> */
/*                     <input type="checkbox" name="courses[{{ course.id }}]" */
/*                            {% if (selection|length == 0 and course.isOptional == false) or course.id in selection %}*/
/*                            checked*/
/*                            {% endif %}>  */
/*                     {{ course.label }}*/
/*                 </label>*/
/*             </div>*/
/*         {% endfor %}*/
/*         <button type="submit" class="btn btn-success"> Actualiser la sélection </button> */
/*     </form>*/
/* {% endblock %}*/
/* */
