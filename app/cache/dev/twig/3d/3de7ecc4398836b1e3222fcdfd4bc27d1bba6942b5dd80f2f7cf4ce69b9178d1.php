<?php

/* IfeAloesBundle:GeneralCompetence:course-index.html.twig */
class __TwigTemplate_ec0ec003ffdbf94b268b3e8156f72b3a37ebb5296b6653ca3bd9583a3abb0493 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("IfeAloesBundle:Course:layout.html.twig", "IfeAloesBundle:GeneralCompetence:course-index.html.twig", 1);
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
        // line 2
        $context["macros"] = $this->loadTemplate("IfeAloesBundle:Course:linking.html.twig", "IfeAloesBundle:GeneralCompetence:course-index.html.twig", 2);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<div class='title-one'>  ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "title", array()), "html", null, true);
        echo " </div>
    <div class='title-two'> Compétences mobilisées dans ce cours</div>    \t
    <br/>   \t

    ";
        // line 10
        $this->loadTemplate("IfeAloesBundle:GeneralCompetence:course-index.html.twig", "IfeAloesBundle:GeneralCompetence:course-index.html.twig", 10, "1662053908")->display(array_merge($context, array("children" => "specificCompetences")));
        // line 94
        echo "
";
    }

    public function getTemplateName()
    {
        return "IfeAloesBundle:GeneralCompetence:course-index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 94,  42 => 10,  34 => 6,  31 => 4,  27 => 1,  25 => 2,  11 => 1,);
    }
}


/* IfeAloesBundle:GeneralCompetence:course-index.html.twig */
class __TwigTemplate_ec0ec003ffdbf94b268b3e8156f72b3a37ebb5296b6653ca3bd9583a3abb0493_1662053908 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 10
        $this->parent = $this->loadTemplate("IfeAloesBundle:Aloes:list.html.twig", "IfeAloesBundle:GeneralCompetence:course-index.html.twig", 10);
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
        return "IfeAloesBundle:Aloes:list.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 12
    public function block_parent_item($context, array $blocks = array())
    {
        // line 13
        echo "            <div class=\"row\">

                <!-- Title -->
\t        <div class=\"lead col-md-10 col-sm-10\">
                    ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "title", array()), "html", null, true);
        echo "
\t        </div>
                
                <!-- Weight -->
\t        <div class=\"general-item-weight cold-md-1 col-sm-1\">
\t            <span class=\"weight lead text-muted\"> ";
        // line 22
        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "weight", array()) * 100), "html", null, true);
        echo " % </span>
\t        </div> 
                
                <!-- Link to edit -->
\t        <div class=\"col-md-1 col-sm-1\">
\t        \t\t";
        // line 27
        if ($this->env->getExtension('security')->isGranted("ROLE_RESPONSABLE")) {
            // line 28
            echo "\t                    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("generalcompetence_edit", array("id" => $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "id", array()))), "html", null, true);
            echo "\" class=\"pull-right\">
\t\t                <span class=\"glyphicon glyphicon-edit\"></span>
\t                    </a>
\t                ";
        }
        // line 32
        echo "\t        </div>

            </div>
        ";
    }

    // line 37
    public function block_child_item($context, array $blocks = array())
    {
        // line 38
        echo "            <tr>
                <td> ";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "title", array()), "html", null, true);
        echo " </td>
                <td> ";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macros"]) ? $context["macros"] : $this->getContext($context, "macros")), "progress_bar", array(0 => $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "weight", array())), "method"), "html", null, true);
        echo " </td>
                <td> 
                \t";
        // line 42
        if ($this->env->getExtension('security')->isGranted("ROLE_RESPONSABLE")) {
            // line 43
            echo "\t                    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("specificcompetence_delete", array("id" => $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "id", array()))), "html", null, true);
            echo "\">
\t                        <span class=\"glyphicon glyphicon-remove\"></span>
\t                    </a>
                    ";
        }
        // line 47
        echo "                </td>
            </tr>
        ";
    }

    // line 52
    public function block_children_header($context, array $blocks = array())
    {
        // line 53
        echo "\t    <thead class=\"list-header\">
\t        <tr>
\t\t    <th class=\"col-md-8\"> Compétences spécifiques </th>
\t\t    <th class=\"col-md-3\"> Poids </th>
\t\t    <th class=\"col-md-3\"></th>
\t        </tr>
\t    </thead>
        ";
    }

    // line 62
    public function block_new_parent($context, array $blocks = array())
    {
        // line 63
        echo "  
\t\t  ";
        // line 64
        if ($this->env->getExtension('security')->isGranted("ROLE_RESPONSABLE")) {
            echo "\t                   
\t            <div class=\"node-creator general-item-creator\">
\t                <form action=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("program_competences_create", array("id" => $this->getAttribute((isset($context["program"]) ? $context["program"] : $this->getContext($context, "program")), "id", array()))), "html", null, true);
            echo "\" method=\"POST\">
\t                    <div class=\"form-group\">
\t                        <input name=\"aloes_generalcompetence[title]\" type=\"text\" placeholder=\"Nouvelle compétence générale\" required>
\t                    </div>
\t                    <button class=\"btn btn-xs btn-success\" type=\"submit\"> Ajouter </button>
\t                </form>
\t            </div>
          ";
        }
        // line 74
        echo "
        ";
    }

    // line 77
    public function block_new_child($context, array $blocks = array())
    {
        // line 78
        echo "
\t\t  ";
        // line 79
        if ($this->env->getExtension('security')->isGranted("ROLE_RESPONSABLE")) {
            echo "\t   
            <div class=\"child-creator\">
                <form action=\"";
            // line 81
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("generalcompetence_specifics_create", array("id" => $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "id", array()))), "html", null, true);
            echo "\" method=\"POST\">
                    <div class=\"form-group\">
                        <input name=\"aloes_specificcompetence[title]\" type=\"text\" placeholder=\"Nouvelle compétence spécifique\" required>
                    </div>
                    <button class=\"btn btn-xs btn-success\" type=\"submit\"> Ajouter </button>
                </form>
            </div>
    \t  ";
        }
        // line 88
        echo " 
 
    \t             
        ";
    }

    public function getTemplateName()
    {
        return "IfeAloesBundle:GeneralCompetence:course-index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  230 => 88,  219 => 81,  214 => 79,  211 => 78,  208 => 77,  203 => 74,  192 => 66,  187 => 64,  184 => 63,  181 => 62,  170 => 53,  167 => 52,  161 => 47,  153 => 43,  151 => 42,  146 => 40,  142 => 39,  139 => 38,  136 => 37,  129 => 32,  121 => 28,  119 => 27,  111 => 22,  103 => 17,  97 => 13,  94 => 12,  73 => 10,  44 => 94,  42 => 10,  34 => 6,  31 => 4,  27 => 1,  25 => 2,  11 => 1,);
    }
}
/* {% extends 'IfeAloesBundle:Course:layout.html.twig' %}*/
/* {% import 'IfeAloesBundle:Course:linking.html.twig' as macros %}*/
/* */
/* {% block content -%}*/
/*  */
/*    	<div class='title-one'>  {{ course.title }} </div>*/
/*     <div class='title-two'> Compétences mobilisées dans ce cours</div>    	*/
/*     <br/>   	*/
/* */
/*     {% embed 'IfeAloesBundle:Aloes:list.html.twig' with {'children':'specificCompetences'} %}*/
/*  */
/*         {% block parent_item %}*/
/*             <div class="row">*/
/* */
/*                 <!-- Title -->*/
/* 	        <div class="lead col-md-10 col-sm-10">*/
/*                     {{ parent.title }}*/
/* 	        </div>*/
/*                 */
/*                 <!-- Weight -->*/
/* 	        <div class="general-item-weight cold-md-1 col-sm-1">*/
/* 	            <span class="weight lead text-muted"> {{ parent.weight * 100 }} % </span>*/
/* 	        </div> */
/*                 */
/*                 <!-- Link to edit -->*/
/* 	        <div class="col-md-1 col-sm-1">*/
/* 	        		{% if is_granted("ROLE_RESPONSABLE") %}*/
/* 	                    <a href="{{path('generalcompetence_edit',{id:parent.id})}}" class="pull-right">*/
/* 		                <span class="glyphicon glyphicon-edit"></span>*/
/* 	                    </a>*/
/* 	                {% endif %}*/
/* 	        </div>*/
/* */
/*             </div>*/
/*         {% endblock %}*/
/* */
/*         {% block child_item %}*/
/*             <tr>*/
/*                 <td> {{ child.title }} </td>*/
/*                 <td> {{ macros.progress_bar(child.weight) }} </td>*/
/*                 <td> */
/*                 	{% if is_granted("ROLE_RESPONSABLE") %}*/
/* 	                    <a href="{{ path('specificcompetence_delete', {id:child.id}) }}">*/
/* 	                        <span class="glyphicon glyphicon-remove"></span>*/
/* 	                    </a>*/
/*                     {% endif %}*/
/*                 </td>*/
/*             </tr>*/
/*         {% endblock %}*/
/* */
/* */
/*         {% block children_header %}*/
/* 	    <thead class="list-header">*/
/* 	        <tr>*/
/* 		    <th class="col-md-8"> Compétences spécifiques </th>*/
/* 		    <th class="col-md-3"> Poids </th>*/
/* 		    <th class="col-md-3"></th>*/
/* 	        </tr>*/
/* 	    </thead>*/
/*         {% endblock %}*/
/* */
/*         {% block new_parent %}*/
/*   */
/* 		  {% if is_granted("ROLE_RESPONSABLE") %}	                   */
/* 	            <div class="node-creator general-item-creator">*/
/* 	                <form action="{{path('program_competences_create', {id:program.id})}}" method="POST">*/
/* 	                    <div class="form-group">*/
/* 	                        <input name="aloes_generalcompetence[title]" type="text" placeholder="Nouvelle compétence générale" required>*/
/* 	                    </div>*/
/* 	                    <button class="btn btn-xs btn-success" type="submit"> Ajouter </button>*/
/* 	                </form>*/
/* 	            </div>*/
/*           {% endif %}*/
/* */
/*         {% endblock %}*/
/* */
/*         {% block new_child %}*/
/* */
/* 		  {% if is_granted("ROLE_RESPONSABLE") %}	   */
/*             <div class="child-creator">*/
/*                 <form action="{{path('generalcompetence_specifics_create', {id:parent.id})}}" method="POST">*/
/*                     <div class="form-group">*/
/*                         <input name="aloes_specificcompetence[title]" type="text" placeholder="Nouvelle compétence spécifique" required>*/
/*                     </div>*/
/*                     <button class="btn btn-xs btn-success" type="submit"> Ajouter </button>*/
/*                 </form>*/
/*             </div>*/
/*     	  {% endif %} */
/*  */
/*     	             */
/*         {% endblock %}*/
/* */
/*     {% endembed %}*/
/* */
/* {% endblock %}*/
/* */
/* */
/* */
/* */
