<?php

/* IfeAloesBundle:GeneralObjective:index.html.twig */
class __TwigTemplate_9070794761f2dfe559314343ada076707a608a5f454cc7fc8feb30df0fce9f69 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("IfeAloesBundle:Course:layout.html.twig", "IfeAloesBundle:GeneralObjective:index.html.twig", 1);
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
        $context["macros"] = $this->loadTemplate("IfeAloesBundle:Course:linking.html.twig", "IfeAloesBundle:GeneralObjective:index.html.twig", 2);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<!--
   \t<div class='title-one'> ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "title", array()), "html", null, true);
        echo " </div>
    -->
    
    <div class='title-two'>  Objectifs \"généraux\" d'apprentissage</div>    \t
 
 
    <br/>
    
\t<script type=\"text/javascript\">   \t
\t\tfunction HideShow(param,param2)
\t\t\t{
\t\t  \t\$(param).toggle();
\t\t  \tstr = \$(param2).html();  
\t\t  \t
\t\t\tif (str=='<span class=\"glyphicon glyphicon-resize-full\"></span> Objectifs \"spécifiques\" associés')
\t\t  \t\t\$(param2).html('<span class=\"glyphicon glyphicon-resize-small\"></span> Objectifs \"spécifiques\" associés');
\t\t\telse if (str=='<span class=\"glyphicon glyphicon-resize-small\"></span> Objectifs \"spécifiques\" associés')
\t\t  \t\t\$(param2).html('<span class=\"glyphicon glyphicon-resize-full\"></span> Objectifs \"spécifiques\" associés');\t\t
\t\t\t}  
\t</script> \t


    ";
        // line 29
        $this->loadTemplate("IfeAloesBundle:GeneralObjective:index.html.twig", "IfeAloesBundle:GeneralObjective:index.html.twig", 29, "1038317445")->display(array_merge($context, array("children" => "specificObjectives")));
        // line 202
        echo "
";
    }

    public function getTemplateName()
    {
        return "IfeAloesBundle:GeneralObjective:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 202,  62 => 29,  37 => 7,  34 => 6,  31 => 4,  27 => 1,  25 => 2,  11 => 1,);
    }
}


/* IfeAloesBundle:GeneralObjective:index.html.twig */
class __TwigTemplate_9070794761f2dfe559314343ada076707a608a5f454cc7fc8feb30df0fce9f69_1038317445 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 29
        $this->parent = $this->loadTemplate("IfeAloesBundle:Aloes:list.html.twig", "IfeAloesBundle:GeneralObjective:index.html.twig", 29);
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

    // line 31
    public function block_parent_item($context, array $blocks = array())
    {
        // line 32
        echo "
 
            <div class=\"row\">

\t                <!-- Title -->
\t\t        <div class=\"col-md-6 col-sm-6\"  >
\t                    ";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "title", array()), "html", null, true);
        echo " 
\t\t        </div> 
\t                
\t                <!-- Weight -->
\t\t        <div class=\"general-item-weight col-md-1 col-sm-1\" >
\t\t            <span class=\"weight   text-muted\"> ";
        // line 43
        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "weight", array()) * 100), "html", null, true);
        echo "% </span>
\t\t        </div> 
\t 
\t\t\t";
        // line 46
        $context["nb_specs"] = twig_length_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "specificObjectives", array()));
        echo "\t \t 
\t              \t              
\t                <!-- Link to edit -->
\t\t        <div class=\"text-info col-md-5 col-sm-5\" > 
\t\t    
\t\t        <span id=\"OBJ";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "id", array()), "html", null, true);
        echo "\" onclick=\"HideShow('#target";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "id", array()), "html", null, true);
        echo "','#OBJ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "id", array()), "html", null, true);
        echo "');\"><span class=\"glyphicon glyphicon-resize-full\"></span> Objectifs \"spécifiques\" associés</span>    
\t          [";
        // line 52
        echo twig_escape_filter($this->env, (isset($context["nb_specs"]) ? $context["nb_specs"] : $this->getContext($context, "nb_specs")), "html", null, true);
        echo "]
\t\t         
\t\t\t\t ";
        // line 54
        if (((($this->env->getExtension('security')->isGranted("ROLE_ENSEIGNANT") && $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "isRedacteur", array(0 => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array())), "method")) || ($this->env->getExtension('security')->isGranted("ROLE_RESPONSABLE") && $this->getAttribute(        // line 55
(isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "isRedacteur", array(0 => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array())), "method"))) || $this->env->getExtension('security')->isGranted("ROLE_ADMIN"))) {
            // line 57
            echo "\t\t             
\t                    <a href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("general_objective_edit", array("id" => $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "id", array()))), "html", null, true);
            echo "\" class=\"pull-right\" title=\"Modifier Objectifs\">
\t\t                <span class=\"glyphicon glyphicon-edit\"></span>&nbsp;Modifier 
\t                    </a>
\t             ";
        }
        // line 62
        echo "\t\t        </div>   \t\t        
\t\t        
            </div>


\t       ";
        // line 67
        if ((array_key_exists("sequence", $context) && ((isset($context["sequence"]) ? $context["sequence"] : $this->getContext($context, "sequence")) == $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "id", array())))) {
            // line 68
            echo "\t\t    \t  <div id=\"target";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "id", array()), "html", null, true);
            echo "\" class=\"col-md-12 col-sm-12 block\" > 
\t       ";
        } else {
            // line 70
            echo "\t\t    \t  <div id=\"target";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "id", array()), "html", null, true);
            echo "\" class=\"col-md-12 col-sm-12 block\" style=\"display: none;\">             
\t       ";
        }
        // line 71
        echo "  
                 
            
        ";
    }

    // line 76
    public function block_child_item($context, array $blocks = array())
    {
        // line 77
        echo "            <tr>
                <td> ";
        // line 78
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "title", array()), "html", null, true);
        echo " </td>
                <td> ";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macros"]) ? $context["macros"] : $this->getContext($context, "macros")), "progress_bar", array(0 => $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "weight", array())), "method"), "html", null, true);
        echo " </td>
                <td  style=\"text-align:center\">
                <!--    <span class=\"label label-";
        // line 81
        echo ((($this->getAttribute($this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "assessmentLinks", array()), "count", array()) == 0)) ? ("warning") : ("default"));
        echo "\"> -->
                            ";
        // line 82
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "assessmentLinks", array()), "count", array()), "html", null, true);
        echo "
                <!--    </span> -->
                </td>
                <td  style=\"text-align:center\"> 
\t\t         
\t\t\t\t ";
        // line 87
        if (((($this->env->getExtension('security')->isGranted("ROLE_ENSEIGNANT") && $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "isRedacteur", array(0 => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array())), "method")) || ($this->env->getExtension('security')->isGranted("ROLE_RESPONSABLE") && $this->getAttribute(        // line 88
(isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "isRedacteur", array(0 => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array())), "method"))) || $this->env->getExtension('security')->isGranted("ROLE_ADMIN"))) {
            // line 90
            echo "\t                  <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("objective_competence_selection", array("id" => $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "id", array()), "menu" => "course_objective")), "html", null, true);
            echo "\" title=\"Modifier les compétences liées à l'objectif\">
                        <span class=\"label label-";
            // line 91
            echo ((($this->getAttribute($this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "competenceLinks", array()), "count", array()) == 0)) ? ("warning") : ("default"));
            echo "\">  
                            ";
            // line 92
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "competenceLinks", array()), "count", array()), "html", null, true);
            echo "&nbsp;&nbsp;&nbsp;<span class=\"glyphicon glyphicon-edit\"></span>
                        </span>
                    </a>
                  ";
        } else {
            // line 95
            echo "  
                  \t";
            // line 96
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "competenceLinks", array()), "count", array()), "html", null, true);
            echo "
                  ";
        }
        // line 97
        echo "  
                </td>
                <td style=\"text-align:center\"> 
\t\t         
\t\t\t\t ";
        // line 101
        if (((($this->env->getExtension('security')->isGranted("ROLE_ENSEIGNANT") && $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "isRedacteur", array(0 => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array())), "method")) || ($this->env->getExtension('security')->isGranted("ROLE_RESPONSABLE") && $this->getAttribute(        // line 102
(isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "isRedacteur", array(0 => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array())), "method"))) || $this->env->getExtension('security')->isGranted("ROLE_ADMIN"))) {
            // line 104
            echo "\t    
\t \t\t                   
                    <a href=\"";
            // line 106
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("specific_objective_delete", array("id" => $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "id", array()))), "html", null, true);
            echo "\"  title=\"Supprimer l'objectif spécifique\">
                        <span class=\"glyphicon glyphicon-remove\"></span>
                    </a>
                  ";
        }
        // line 110
        echo "                </td>    
            </tr>
            
            ";
        // line 113
        if (($this->getAttribute((isset($context["objectifCompetences"]) ? $context["objectifCompetences"] : null), $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "id", array()), array(), "array", true, true) && ($this->getAttribute((isset($context["objectifCompetences"]) ? $context["objectifCompetences"] : $this->getContext($context, "objectifCompetences")), $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "id", array()), array(), "array") != null))) {
            // line 114
            echo "\t             <tr>
\t            \t<td colspan='5' style=\"background-color:white\">
\t            \t\t<div class=\"col-md-2\">
\t            \t\t\tVue étudiant :
\t            \t\t</div>
\t            \t\t<div class=\"col-md-10\">            \t\t
\t\t            \t\t";
            // line 120
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["objectifCompetences"]) ? $context["objectifCompetences"] : $this->getContext($context, "objectifCompetences")), $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "id", array()), array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["oc"]) {
                // line 121
                echo "\t\t            \t\t\t\t<li>   ";
                echo twig_escape_filter($this->env, ($this->getAttribute($context["oc"], "weight", array()) * 100), "html", null, true);
                echo "% ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["oc"], "title", array()), "html", null, true);
                echo "
\t\t            \t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oc'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 123
            echo "\t\t            \t</div>
\t            \t</td>
\t            </tr>         
            ";
        }
        // line 126
        echo "            
       

        ";
    }

    // line 131
    public function block_children_header($context, array $blocks = array())
    {
        // line 132
        echo "            <thead class=\"list-header\">
\t        <tr>
\t            <th class=\"col-md-7\"> Objectifs spécifiques </th>
\t            <th class=\"col-md-2\" colspan='2' style='text-align:center;'> Evaluations </th>

                <th class=\"col-md-1\"> Compétences </th>
\t            <th class=\"col-md-1\"> Supprimer</th>
\t        </tr>
\t        <tr>
\t            <th class=\"col-md-8\"> </th>
\t            <th class=\"col-md-1\"> Poids </th>
                <th class=\"col-md-1\"> Nombre </th>
                <th class=\"col-md-1\">  </th>
\t            <th class=\"col-md-1\"> </th>
\t        </tr>\t        
            </thead>
        ";
    }

    // line 150
    public function block_new_parent($context, array $blocks = array())
    {
        echo "\t\t\t   
\t\t           
\t\t\t";
        // line 152
        if (((($this->env->getExtension('security')->isGranted("ROLE_ENSEIGNANT") && $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "isRedacteur", array(0 => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array())), "method")) || ($this->env->getExtension('security')->isGranted("ROLE_RESPONSABLE") && $this->getAttribute(        // line 153
(isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "isRedacteur", array(0 => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array())), "method"))) || $this->env->getExtension('security')->isGranted("ROLE_ADMIN"))) {
            // line 155
            echo "\t
\t\t\t \t\t\t
\t\t\t
\t\t          
            <div class=\"node-creator general-item-creatorX\">
                <form name=\"aloes_general_objective\" action=\"";
            // line 160
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_objective_create", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
            echo "\" method=\"POST\">
                    <div class=\"form-group\">
                        <input name=\"aloes_general_objective[title]\" type=\"text\" placeholder=\"Nouvel objectif général\" required>
                        
\t\t\t\t\t\t<input type=\"hidden\" name=\"aloes_general_objective[_token]\" value=\"";
            // line 164
            echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("aloes_general_objective"), "html", null, true);
            echo "\">                         
                    </div>   
                     
                    <button class=\"btn btn-xs btn-success\" type=\"submit\"> Ajouter </button>
                </form>
            </div>
          ";
        }
        // line 171
        echo "        ";
    }

    // line 174
    public function block_new_child($context, array $blocks = array())
    {
        // line 175
        echo "\t\t         \t\t         
\t\t         
\t\t\t";
        // line 177
        if (((($this->env->getExtension('security')->isGranted("ROLE_ENSEIGNANT") && $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "isRedacteur", array(0 => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array())), "method")) || ($this->env->getExtension('security')->isGranted("ROLE_RESPONSABLE") && $this->getAttribute(        // line 178
(isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "isRedacteur", array(0 => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array())), "method"))) || $this->env->getExtension('security')->isGranted("ROLE_ADMIN"))) {
            // line 180
            echo "\t \t\t
\t\t\t      
            <div class=\"child-creator\">
                <form action=\"";
            // line 183
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("general_objective_specific_objective_create", array("id" => $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "id", array()))), "html", null, true);
            echo "\" method=\"POST\">
                    <div class=\"form-group\">
                        <input name=\"aloes_specific_objective[title]\" type=\"text\" placeholder=\"Nouvel objectif spécifique\" required>
                        
\t\t\t\t\t\t<input type=\"hidden\" name=\"aloes_specific_objective[_token]\" value=\"";
            // line 187
            echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("aloes_specific_objective"), "html", null, true);
            echo "\">                           
                        
                    </div>
                    <button class=\"btn btn-xs btn-success\" type=\"submit\"> Ajouter </button>
                </form>
            </div>
          ";
        }
        // line 194
        echo "          
          
         </div>          
          
        ";
    }

    public function getTemplateName()
    {
        return "IfeAloesBundle:GeneralObjective:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  410 => 194,  400 => 187,  393 => 183,  388 => 180,  386 => 178,  385 => 177,  381 => 175,  378 => 174,  374 => 171,  364 => 164,  357 => 160,  350 => 155,  348 => 153,  347 => 152,  341 => 150,  321 => 132,  318 => 131,  311 => 126,  305 => 123,  294 => 121,  290 => 120,  282 => 114,  280 => 113,  275 => 110,  268 => 106,  264 => 104,  262 => 102,  261 => 101,  255 => 97,  250 => 96,  247 => 95,  240 => 92,  236 => 91,  231 => 90,  229 => 88,  228 => 87,  220 => 82,  216 => 81,  211 => 79,  207 => 78,  204 => 77,  201 => 76,  194 => 71,  188 => 70,  182 => 68,  180 => 67,  173 => 62,  166 => 58,  163 => 57,  161 => 55,  160 => 54,  155 => 52,  147 => 51,  139 => 46,  133 => 43,  125 => 38,  117 => 32,  114 => 31,  93 => 29,  64 => 202,  62 => 29,  37 => 7,  34 => 6,  31 => 4,  27 => 1,  25 => 2,  11 => 1,);
    }
}
/* {% extends 'IfeAloesBundle:Course:layout.html.twig' %}*/
/* {% import 'IfeAloesBundle:Course:linking.html.twig' as macros %}*/
/* */
/* {% block content -%}*/
/* */
/* 	<!--*/
/*    	<div class='title-one'> {{ course.title }} </div>*/
/*     -->*/
/*     */
/*     <div class='title-two'>  Objectifs "généraux" d'apprentissage</div>    	*/
/*  */
/*  */
/*     <br/>*/
/*     */
/* 	<script type="text/javascript">   	*/
/* 		function HideShow(param,param2)*/
/* 			{*/
/* 		  	$(param).toggle();*/
/* 		  	str = $(param2).html();  */
/* 		  	*/
/* 			if (str=='<span class="glyphicon glyphicon-resize-full"></span> Objectifs "spécifiques" associés')*/
/* 		  		$(param2).html('<span class="glyphicon glyphicon-resize-small"></span> Objectifs "spécifiques" associés');*/
/* 			else if (str=='<span class="glyphicon glyphicon-resize-small"></span> Objectifs "spécifiques" associés')*/
/* 		  		$(param2).html('<span class="glyphicon glyphicon-resize-full"></span> Objectifs "spécifiques" associés');		*/
/* 			}  */
/* 	</script> 	*/
/* */
/* */
/*     {% embed 'IfeAloesBundle:Aloes:list.html.twig' with {'children': 'specificObjectives'} %}*/
/* */
/*         {% block parent_item %}*/
/* */
/*  */
/*             <div class="row">*/
/* */
/* 	                <!-- Title -->*/
/* 		        <div class="col-md-6 col-sm-6"  >*/
/* 	                    {{ parent.title }} */
/* 		        </div> */
/* 	                */
/* 	                <!-- Weight -->*/
/* 		        <div class="general-item-weight col-md-1 col-sm-1" >*/
/* 		            <span class="weight   text-muted"> {{ parent.weight * 100 }}% </span>*/
/* 		        </div> */
/* 	 */
/* 			{% set nb_specs = parent.specificObjectives|length %}	 	 */
/* 	              	              */
/* 	                <!-- Link to edit -->*/
/* 		        <div class="text-info col-md-5 col-sm-5" > */
/* 		    */
/* 		        <span id="OBJ{{parent.id}}" onclick="HideShow('#target{{parent.id}}','#OBJ{{parent.id}}');"><span class="glyphicon glyphicon-resize-full"></span> Objectifs "spécifiques" associés</span>    */
/* 	          [{{nb_specs}}]*/
/* 		         */
/* 				 {% if ( is_granted("ROLE_ENSEIGNANT")  and course.isRedacteur(app.user.id) ) or */
/* 				       ( is_granted("ROLE_RESPONSABLE") and course.isRedacteur(app.user.id) ) or  */
/* 				       ( is_granted("ROLE_ADMIN") )*/
/* 				  %}		             */
/* 	                    <a href="{{path('general_objective_edit',{id:parent.id})}}" class="pull-right" title="Modifier Objectifs">*/
/* 		                <span class="glyphicon glyphicon-edit"></span>&nbsp;Modifier */
/* 	                    </a>*/
/* 	             {% endif %}*/
/* 		        </div>   		        */
/* 		        */
/*             </div>*/
/* */
/* */
/* 	       {% if sequence is defined and sequence==parent.id %}*/
/* 		    	  <div id="target{{parent.id}}" class="col-md-12 col-sm-12 block" > */
/* 	       {% else %}*/
/* 		    	  <div id="target{{parent.id}}" class="col-md-12 col-sm-12 block" style="display: none;">             */
/* 	       {% endif %}  */
/*                  */
/*             */
/*         {% endblock %}*/
/* */
/*         {% block child_item %}*/
/*             <tr>*/
/*                 <td> {{ child.title }} </td>*/
/*                 <td> {{ macros.progress_bar(child.weight) }} </td>*/
/*                 <td  style="text-align:center">*/
/*                 <!--    <span class="label label-{{(child.assessmentLinks.count == 0)?'warning':'default'}}"> -->*/
/*                             {{ child.assessmentLinks.count }}*/
/*                 <!--    </span> -->*/
/*                 </td>*/
/*                 <td  style="text-align:center"> */
/* 		         */
/* 				 {% if ( is_granted("ROLE_ENSEIGNANT")  and course.isRedacteur(app.user.id) ) or */
/* 				       ( is_granted("ROLE_RESPONSABLE") and course.isRedacteur(app.user.id) ) or  */
/* 				       ( is_granted("ROLE_ADMIN") )*/
/* 				  %}	                  <a href="{{ path('objective_competence_selection', {id:child.id, menu:'course_objective'}) }}" title="Modifier les compétences liées à l'objectif">*/
/*                         <span class="label label-{{(child.competenceLinks.count == 0)?'warning':'default'}}">  */
/*                             {{ child.competenceLinks.count }}&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-edit"></span>*/
/*                         </span>*/
/*                     </a>*/
/*                   {% else %}  */
/*                   	{{ child.competenceLinks.count }}*/
/*                   {% endif %}  */
/*                 </td>*/
/*                 <td style="text-align:center"> */
/* 		         */
/* 				 {% if ( is_granted("ROLE_ENSEIGNANT")  and course.isRedacteur(app.user.id) ) or */
/* 				       ( is_granted("ROLE_RESPONSABLE") and course.isRedacteur(app.user.id) ) or  */
/* 				       ( is_granted("ROLE_ADMIN") )*/
/* 				  %}	    */
/* 	 		                   */
/*                     <a href="{{ path('specific_objective_delete', {id:child.id}) }}"  title="Supprimer l'objectif spécifique">*/
/*                         <span class="glyphicon glyphicon-remove"></span>*/
/*                     </a>*/
/*                   {% endif %}*/
/*                 </td>    */
/*             </tr>*/
/*             */
/*             {% if objectifCompetences[child.id] is defined and objectifCompetences[child.id]!= null   %}*/
/* 	             <tr>*/
/* 	            	<td colspan='5' style="background-color:white">*/
/* 	            		<div class="col-md-2">*/
/* 	            			Vue étudiant :*/
/* 	            		</div>*/
/* 	            		<div class="col-md-10">            		*/
/* 		            		{% for oc in objectifCompetences[child.id]  %}*/
/* 		            				<li>   {{ oc.weight*100}}% {{ oc.title }}*/
/* 		            		{% endfor %}*/
/* 		            	</div>*/
/* 	            	</td>*/
/* 	            </tr>         */
/*             {% endif %}            */
/*        */
/* */
/*         {% endblock %}*/
/* */
/*         {% block children_header %}*/
/*             <thead class="list-header">*/
/* 	        <tr>*/
/* 	            <th class="col-md-7"> Objectifs spécifiques </th>*/
/* 	            <th class="col-md-2" colspan='2' style='text-align:center;'> Evaluations </th>*/
/* */
/*                 <th class="col-md-1"> Compétences </th>*/
/* 	            <th class="col-md-1"> Supprimer</th>*/
/* 	        </tr>*/
/* 	        <tr>*/
/* 	            <th class="col-md-8"> </th>*/
/* 	            <th class="col-md-1"> Poids </th>*/
/*                 <th class="col-md-1"> Nombre </th>*/
/*                 <th class="col-md-1">  </th>*/
/* 	            <th class="col-md-1"> </th>*/
/* 	        </tr>	        */
/*             </thead>*/
/*         {% endblock %}*/
/* */
/*         {% block new_parent %}			   */
/* 		           */
/* 			{% if ( is_granted("ROLE_ENSEIGNANT")  and course.isRedacteur(app.user.id) ) or */
/* 				  ( is_granted("ROLE_RESPONSABLE") and course.isRedacteur(app.user.id) ) or  */
/* 				  ( is_granted("ROLE_ADMIN") )*/
/* 			%}	*/
/* 			 			*/
/* 			*/
/* 		          */
/*             <div class="node-creator general-item-creatorX">*/
/*                 <form name="aloes_general_objective" action="{{path('course_objective_create', {id:course.id})}}" method="POST">*/
/*                     <div class="form-group">*/
/*                         <input name="aloes_general_objective[title]" type="text" placeholder="Nouvel objectif général" required>*/
/*                         */
/* 						<input type="hidden" name="aloes_general_objective[_token]" value="{{ csrf_token('aloes_general_objective') }}">                         */
/*                     </div>   */
/*                      */
/*                     <button class="btn btn-xs btn-success" type="submit"> Ajouter </button>*/
/*                 </form>*/
/*             </div>*/
/*           {% endif %}*/
/*         {% endblock %}*/
/*  */
/* */
/*         {% block new_child %}*/
/* 		         		         */
/* 		         */
/* 			{% if ( is_granted("ROLE_ENSEIGNANT")  and course.isRedacteur(app.user.id) ) or */
/* 				  ( is_granted("ROLE_RESPONSABLE") and course.isRedacteur(app.user.id) ) or  */
/* 				  ( is_granted("ROLE_ADMIN") )*/
/* 			%}	 		*/
/* 			      */
/*             <div class="child-creator">*/
/*                 <form action="{{path('general_objective_specific_objective_create', {id:parent.id})}}" method="POST">*/
/*                     <div class="form-group">*/
/*                         <input name="aloes_specific_objective[title]" type="text" placeholder="Nouvel objectif spécifique" required>*/
/*                         */
/* 						<input type="hidden" name="aloes_specific_objective[_token]" value="{{ csrf_token('aloes_specific_objective') }}">                           */
/*                         */
/*                     </div>*/
/*                     <button class="btn btn-xs btn-success" type="submit"> Ajouter </button>*/
/*                 </form>*/
/*             </div>*/
/*           {% endif %}*/
/*           */
/*           */
/*          </div>          */
/*           */
/*         {% endblock %}*/
/* */
/* */
/*     {% endembed %}*/
/* */
/* {% endblock %}*/
/* */
/* */
/* */
