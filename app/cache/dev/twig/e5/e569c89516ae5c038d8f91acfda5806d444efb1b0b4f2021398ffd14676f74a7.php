<?php

/* IfeAloesBundle:Topic:index.html.twig */
class __TwigTemplate_7588ee62cb2ce21393f2203980053f637a1a8e064c28984b7aff7c1bc8193172 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("IfeAloesBundle:Course:layout.html.twig", "IfeAloesBundle:Topic:index.html.twig", 1);
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
        $context["macros"] = $this->loadTemplate("IfeAloesBundle:Course:linking.html.twig", "IfeAloesBundle:Topic:index.html.twig", 2);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "<div class='title-one'>  ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "title", array()), "html", null, true);
        echo " </div>
    <div class='title-two'> Séquences et Evaluations</div>    \t
    <br/>
\t<script type=\"text/javascript\">
\t
\tfunction HideShow(param,param2)
\t\t{
\t  \t\$(param).toggle();
\t  \tstr = \$(param2).html();  
\t  \t
\t\tif (str=='<span class=\"glyphicon glyphicon-resize-full\"></span> Travaux associés')
\t  \t\t\$(param2).html('<span class=\"glyphicon glyphicon-resize-small\"></span> Travaux associés');
\t\telse if (str=='<span class=\"glyphicon glyphicon-resize-small\"></span> Travaux associés')
\t  \t\t\$(param2).html('<span class=\"glyphicon glyphicon-resize-full\"></span> Travaux associés');\t\t
\t\t}  
\t</script>     

    ";
        // line 22
        $this->loadTemplate("IfeAloesBundle:Topic:index.html.twig", "IfeAloesBundle:Topic:index.html.twig", 22, "199505934")->display(array_merge($context, array("children" => "assessments")));
        // line 232
        echo "
";
    }

    public function getTemplateName()
    {
        return "IfeAloesBundle:Topic:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 232,  55 => 22,  34 => 5,  31 => 3,  27 => 1,  25 => 2,  11 => 1,);
    }
}


/* IfeAloesBundle:Topic:index.html.twig */
class __TwigTemplate_7588ee62cb2ce21393f2203980053f637a1a8e064c28984b7aff7c1bc8193172_199505934 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 22
        $this->parent = $this->loadTemplate("IfeAloesBundle:Aloes:list.html.twig", "IfeAloesBundle:Topic:index.html.twig", 22);
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

    // line 26
    public function block_parent_item($context, array $blocks = array())
    {
        // line 27
        echo "\t\t\t

            <div class=\"row\">
\t
\t                <!-- Title -->
\t\t        <div class=\" col-md-6 col-sm-6\">
\t                ";
        // line 33
        if (($this->getAttribute((isset($context["parent"]) ? $context["parent"] : null), "startDate", array(), "any", true, true) &&  !(null === $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "startDate", array())))) {
            // line 34
            echo "\t                    \t";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "startDate", array()), "d/m/Y"), "html", null, true);
            echo "    
\t                ";
        }
        // line 35
        echo "\t\t        \t \t                 
\t                ";
        // line 36
        if (($this->getAttribute((isset($context["parent"]) ? $context["parent"] : null), "endDate", array(), "any", true, true) &&  !(null === $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "endDate", array())))) {
            // line 37
            echo "\t                    \t<span class=\"glyphicon glyphicon-arrow-right\"></span> ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "endDate", array()), "d/m/Y"), "html", null, true);
            echo "    
\t                ";
        }
        // line 38
        echo "\t
\t                
\t\t            <b>";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "title", array()), "html", null, true);
        echo "</b>    
\t                
\t\t        </div>  
\t                
\t\t\t\t ";
        // line 44
        $context["nb_travaux"] = twig_length_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "assessments", array()));
        echo "\t

\t\t\t\t ";
        // line 46
        if ((((($this->env->getExtension('security')->isGranted("ROLE_ENSEIGNANT") && $this->getAttribute(        // line 48
(isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "isRedacteur", array(0 => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array())), "method")) || ($this->env->getExtension('security')->isGranted("ROLE_RESPONSABLE") && $this->getAttribute(        // line 49
(isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "isRedacteur", array(0 => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array())), "method"))) || $this->env->getExtension('security')->isGranted("ROLE_ADMIN")) && (        // line 53
(isset($context["nb_travaux"]) ? $context["nb_travaux"] : $this->getContext($context, "nb_travaux")) > 0))) {
            // line 56
            echo "\t\t\t          
\t\t\t        <div class=\"text-info general-item-weight col-md-2 col-sm-2 \" style=\"text-align:right\">\t\t           \t\t        
\t                    <a  href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("topic_edit", array("id" => $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "id", array()))), "html", null, true);
            echo "\">
\t\t                \t<span class=\"glyphicon glyphicon-edit\"></span><span class=\"text-info weight  text-muted\"> ";
            // line 59
            echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "weight", array()) * 100), "html", null, true);
            echo " %  </span>\t  
\t                    </a> 
\t                </div>
\t              ";
        } else {
            // line 62
            echo "  
\t\t\t        <div class=\"general-item-weight col-md-2 col-sm-2 \"  style=\"text-align:right\">\t                  
      \t\t\t\t\t<span class=\"weight  text-muted\"> ";
            // line 64
            echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "weight", array()) * 100), "html", null, true);
            echo " %  </span>\t                    
\t\t\t\t\t</div>
\t              ";
        }
        // line 66
        echo "\t\t        
\t
\t                
\t                <!-- Link to edit -->
\t\t        <div class=\"text-info  col-md-4 col-sm-4\">
\t\t          
\t\t        \t<span id=\"REF";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "id", array()), "html", null, true);
        echo "\" onclick=\"HideShow('#target";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "id", array()), "html", null, true);
        echo "','#REF";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "id", array()), "html", null, true);
        echo "');\"><span class=\"glyphicon glyphicon-resize-full\"></span> Travaux associés</span>    
\t\t         \t[";
        // line 73
        echo twig_escape_filter($this->env, (isset($context["nb_travaux"]) ? $context["nb_travaux"] : $this->getContext($context, "nb_travaux")), "html", null, true);
        echo "]
\t\t         
\t\t\t\t ";
        // line 75
        if (((($this->env->getExtension('security')->isGranted("ROLE_ENSEIGNANT") && $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "isRedacteur", array(0 => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array())), "method")) || ($this->env->getExtension('security')->isGranted("ROLE_RESPONSABLE") && $this->getAttribute(        // line 76
(isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "isRedacteur", array(0 => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array())), "method"))) || $this->env->getExtension('security')->isGranted("ROLE_ADMIN"))) {
            // line 78
            echo "\t\t\t          
\t\t           \t\t        
\t                    <a  href=\"";
            // line 80
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("topic_edit", array("id" => $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "id", array()))), "html", null, true);
            echo "\" class=\"pull-right\">
\t\t                \t<span class=\"glyphicon glyphicon-edit\"></span> Modifier 
\t                    </a> 
\t              ";
        }
        // line 84
        echo "\t\t        </div>
\t        </div>
\t\t
            ";
        // line 87
        if ((array_key_exists("sequence", $context) && ((isset($context["sequence"]) ? $context["sequence"] : $this->getContext($context, "sequence")) == $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "id", array())))) {
            // line 88
            echo "\t    \t  <div id=\"target";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "id", array()), "html", null, true);
            echo "\" class=\"col-md-12 col-sm-12 block\" > 
            ";
        } else {
            // line 90
            echo "\t    \t  <div id=\"target";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "id", array()), "html", null, true);
            echo "\" class=\"col-md-12 col-sm-12 block\" style=\"display: none;\">             
            ";
        }
        // line 91
        echo "            \t    
\t        \t            
            <div class=\"col-md-12 col-sm-12\">

\t
\t\t        <div class=\"text-info col-md-12 col-sm-12 attribut3\">
\t                    ";
        // line 97
        if (($this->getAttribute((isset($context["parent"]) ? $context["parent"] : null), "startDate", array(), "any", true, true) &&  !(null === $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "startDate", array())))) {
            // line 98
            echo "\t                    \tDate d&eacute;but : ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "startDate", array()), "d/m/Y"), "html", null, true);
            echo " &nbsp;  
\t                    ";
        }
        // line 100
        echo "\t                    ";
        if (($this->getAttribute((isset($context["parent"]) ? $context["parent"] : null), "endDate", array(), "any", true, true) &&  !(null === $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "endDate", array())))) {
            echo "                   
\t                    \tDate fin : ";
            // line 101
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "endDate", array()), "d/m/Y"), "html", null, true);
            echo "
\t                    ";
        }
        // line 102
        echo "                    \t
\t\t        </div>
\t         
\t                <!-- Title -->
\t\t        <div class=\" col-md-12 col-sm-12 attribut3\"  style=\"overflow:auto; height: 200px; width: 100%; padding: 15px; border: 1px solid #AAAAAA\" >
\t                    ";
        // line 107
        echo $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "description", array());
        echo "
\t\t        </div>\t        



            </div>
        ";
    }

    // line 115
    public function block_child_item($context, array $blocks = array())
    {
        // line 116
        echo "            <tr>
                <td> ";
        // line 117
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "title", array()), "html", null, true);
        echo " </td>
                <td> 
                    ";
        // line 119
        if ( !(null === $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "deadline", array()))) {
            // line 120
            echo "                        ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "deadline", array()), "d/m/Y"), "html", null, true);
            echo "
                    ";
        } else {
            // line 122
            echo "                        <span class=\"text-muted small\"> Non spécifiée </span>
                    ";
        }
        // line 124
        echo "                </td>
                <td> ";
        // line 125
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macros"]) ? $context["macros"] : $this->getContext($context, "macros")), "progress_bar", array(0 => (($this->getAttribute((isset($context["child"]) ? $context["child"] : null), "weight", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["child"]) ? $context["child"] : null), "weight", array()), "0")) : ("0"))), "method"), "html", null, true);
        echo " </td>
                <td> 
\t\t\t\t ";
        // line 127
        if (((($this->env->getExtension('security')->isGranted("ROLE_ENSEIGNANT") && $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "isRedacteur", array(0 => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array())), "method")) || ($this->env->getExtension('security')->isGranted("ROLE_RESPONSABLE") && $this->getAttribute(        // line 128
(isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "isRedacteur", array(0 => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array())), "method"))) || $this->env->getExtension('security')->isGranted("ROLE_ADMIN"))) {
            // line 130
            echo "\t                 
                
                    <a href=\"";
            // line 132
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("assessment_objective_selection", array("id" => $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "id", array()), "menu" => "course_assessment")), "html", null, true);
            echo "\">
                        <span class=\"label label-";
            // line 133
            echo ((($this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "objectiveCount", array()) == 0)) ? ("warning") : ("default"));
            echo "\"> 
                            ";
            // line 134
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "objectiveCount", array()), "html", null, true);
            echo " &nbsp;&nbsp;&nbsp;<span class=\"glyphicon glyphicon-edit\"></span> 
                        </span> 
                    </a> 
                ";
        } else {
            // line 138
            echo "                    \t";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "objectiveCount", array()), "html", null, true);
            echo " 
                ";
        }
        // line 139
        echo "                    
                </td>
                <td> 
\t\t         
\t\t\t\t ";
        // line 143
        if (((($this->env->getExtension('security')->isGranted("ROLE_ENSEIGNANT") && $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "isRedacteur", array(0 => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array())), "method")) || ($this->env->getExtension('security')->isGranted("ROLE_RESPONSABLE") && $this->getAttribute(        // line 144
(isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "isRedacteur", array(0 => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array())), "method"))) || $this->env->getExtension('security')->isGranted("ROLE_ADMIN"))) {
            // line 146
            echo "\t          
                    <a href=\"";
            // line 147
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("assessment_delete", array("id" => $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "id", array()))), "html", null, true);
            echo "\">
                        <span class=\"glyphicon glyphicon-remove\"></span>
                    </a>
                  ";
        }
        // line 151
        echo "                </td>
            </tr>
            
            
            ";
        // line 155
        if (($this->getAttribute((isset($context["assessmentObjectives"]) ? $context["assessmentObjectives"] : null), $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "id", array()), array(), "array", true, true) && ($this->getAttribute((isset($context["assessmentObjectives"]) ? $context["assessmentObjectives"] : $this->getContext($context, "assessmentObjectives")), $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "id", array()), array(), "array") != null))) {
            // line 156
            echo "\t             <tr>
\t            \t<td colspan='5' style=\"background-color:white\">
\t            \t\t<div class=\"col-md-2\">
\t            \t\t\tVue étudiant :
\t            \t\t</div>
\t            \t\t<div class=\"col-md-10\">            \t\t
\t\t            \t\t";
            // line 162
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["assessmentObjectives"]) ? $context["assessmentObjectives"] : $this->getContext($context, "assessmentObjectives")), $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "id", array()), array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["ao"]) {
                // line 163
                echo "\t\t            \t\t\t\t<li>   ";
                echo twig_escape_filter($this->env, ($this->getAttribute($context["ao"], "weight", array()) * 100), "html", null, true);
                echo "% ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["ao"], "title", array()), "html", null, true);
                echo "
\t\t            \t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ao'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 165
            echo "\t\t            \t</div>
\t            \t</td>
\t            </tr>         
            ";
        }
        // line 168
        echo "              
            
            
        ";
    }

    // line 173
    public function block_children_header($context, array $blocks = array())
    {
        echo " 
            <thead class=\"list-header\">
\t        <tr>
\t            <th class=\"col-md-7\"> Travail à réaliser</th>
\t            <th class=\"col-md-2\"> Date de rendu </th>
\t            <th class=\"col-md-1\"> Coefficient </th>
                <th class=\"col-md-1\"> Objectifs </th>
\t            <th class=\"col-md-1\"> Supprimer</th>
\t        </tr>
            </thead>
        ";
    }

    // line 185
    public function block_new_parent($context, array $blocks = array())
    {
        // line 186
        echo "\t\t\t";
        if (((($this->env->getExtension('security')->isGranted("ROLE_ENSEIGNANT") && $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "isRedacteur", array(0 => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array())), "method")) || ($this->env->getExtension('security')->isGranted("ROLE_RESPONSABLE") && $this->getAttribute(        // line 187
(isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "isRedacteur", array(0 => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array())), "method"))) || $this->env->getExtension('security')->isGranted("ROLE_ADMIN"))) {
            // line 189
            echo "\t\t       
            <div class=\"node-creator general-item-creatorX\">
                <form action=\"";
            // line 191
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_topic_create", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
            echo "\" method=\"POST\">
                    <div class=\"form-group\">
                        <input name=\"aloes_topic_create[title]\" type=\"text\" placeholder=\"Nouvelle séquence\" required>
                        
\t\t\t\t\t\t<input type=\"hidden\" name=\"aloes_topic_create[_token]\" value=\"";
            // line 195
            echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("aloes_topic_create"), "html", null, true);
            echo "\">                          
                    </div>
                    <button class=\"btn btn-xs btn-success\" type=\"submit\"> Ajouter </button>
                </form>
            </div>

          ";
        }
        // line 202
        echo "        ";
    }

    // line 205
    public function block_new_child($context, array $blocks = array())
    {
        // line 206
        echo "        
 
\t\t\t";
        // line 208
        if (((($this->env->getExtension('security')->isGranted("ROLE_ENSEIGNANT") && $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "isRedacteur", array(0 => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array())), "method")) || ($this->env->getExtension('security')->isGranted("ROLE_RESPONSABLE") && $this->getAttribute(        // line 209
(isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "isRedacteur", array(0 => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array())), "method"))) || $this->env->getExtension('security')->isGranted("ROLE_ADMIN"))) {
            // line 211
            echo "\t\t\t
            <div class=\"child-creator\">
                <form action=\"";
            // line 213
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("topic_assessment_create", array("id" => $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "id", array()))), "html", null, true);
            echo "\" method=\"POST\">
                    <div class=\"form-group\">
                        <input name=\"aloes_assessment[title]\" type=\"text\" placeholder=\"Nouveau travail à réaliser\" required>
                        
\t\t\t\t\t\t<input type=\"hidden\" name=\"aloes_assessment[_token]\" value=\"";
            // line 217
            echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("aloes_assessment"), "html", null, true);
            echo "\">                            
 
                    </div> 
                    <button class=\"btn btn-xs btn-success\" type=\"submit\"> Ajouter </button>
                </form>
            </div>
            
          ";
        }
        // line 225
        echo "          
         </div>
          
        ";
    }

    public function getTemplateName()
    {
        return "IfeAloesBundle:Topic:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  483 => 225,  472 => 217,  465 => 213,  461 => 211,  459 => 209,  458 => 208,  454 => 206,  451 => 205,  447 => 202,  437 => 195,  430 => 191,  426 => 189,  424 => 187,  422 => 186,  419 => 185,  403 => 173,  396 => 168,  390 => 165,  379 => 163,  375 => 162,  367 => 156,  365 => 155,  359 => 151,  352 => 147,  349 => 146,  347 => 144,  346 => 143,  340 => 139,  334 => 138,  327 => 134,  323 => 133,  319 => 132,  315 => 130,  313 => 128,  312 => 127,  307 => 125,  304 => 124,  300 => 122,  294 => 120,  292 => 119,  287 => 117,  284 => 116,  281 => 115,  270 => 107,  263 => 102,  258 => 101,  253 => 100,  247 => 98,  245 => 97,  237 => 91,  231 => 90,  225 => 88,  223 => 87,  218 => 84,  211 => 80,  207 => 78,  205 => 76,  204 => 75,  199 => 73,  191 => 72,  183 => 66,  177 => 64,  173 => 62,  166 => 59,  162 => 58,  158 => 56,  156 => 53,  155 => 49,  154 => 48,  153 => 46,  148 => 44,  141 => 40,  137 => 38,  131 => 37,  129 => 36,  126 => 35,  120 => 34,  118 => 33,  110 => 27,  107 => 26,  86 => 22,  57 => 232,  55 => 22,  34 => 5,  31 => 3,  27 => 1,  25 => 2,  11 => 1,);
    }
}
/* {% extends 'IfeAloesBundle:Course:layout.html.twig' %}*/
/* {% import  'IfeAloesBundle:Course:linking.html.twig' as macros%}*/
/* {% block content -%}*/
/* */
/*    	<div class='title-one'>  {{ course.title }} </div>*/
/*     <div class='title-two'> Séquences et Evaluations</div>    	*/
/*     <br/>*/
/* 	<script type="text/javascript">*/
/* 	*/
/* 	function HideShow(param,param2)*/
/* 		{*/
/* 	  	$(param).toggle();*/
/* 	  	str = $(param2).html();  */
/* 	  	*/
/* 		if (str=='<span class="glyphicon glyphicon-resize-full"></span> Travaux associés')*/
/* 	  		$(param2).html('<span class="glyphicon glyphicon-resize-small"></span> Travaux associés');*/
/* 		else if (str=='<span class="glyphicon glyphicon-resize-small"></span> Travaux associés')*/
/* 	  		$(param2).html('<span class="glyphicon glyphicon-resize-full"></span> Travaux associés');		*/
/* 		}  */
/* 	</script>     */
/* */
/*     {% embed 'IfeAloesBundle:Aloes:list.html.twig' with {'children': 'assessments'} %}*/
/* */
/* */
/* */
/*         {% block parent_item %}*/
/* 			*/
/* */
/*             <div class="row">*/
/* 	*/
/* 	                <!-- Title -->*/
/* 		        <div class=" col-md-6 col-sm-6">*/
/* 	                {% if parent.startDate is defined and parent.startDate is not null %}*/
/* 	                    	{{ parent.startDate|date("d/m/Y") }}    */
/* 	                {% endif %}		        	 	                 */
/* 	                {% if parent.endDate is defined and parent.endDate is not null %}*/
/* 	                    	<span class="glyphicon glyphicon-arrow-right"></span> {{ parent.endDate|date("d/m/Y") }}    */
/* 	                {% endif %}	*/
/* 	                */
/* 		            <b>{{ parent.title }}</b>    */
/* 	                */
/* 		        </div>  */
/* 	                */
/* 				 {% set nb_travaux = parent.assessments|length %}	*/
/* */
/* 				 {% if (*/
/* 				 		  (*/
/* 				 			(( is_granted("ROLE_ENSEIGNANT")  and course.isRedacteur(app.user.id) ) or */
/* 				       		( is_granted("ROLE_RESPONSABLE") and course.isRedacteur(app.user.id) ) or  */
/* 				       		( is_granted("ROLE_ADMIN") )*/
/* 				       	  ) */
/* 				       	  	and*/
/* 				       		( nb_travaux > 0)*/
/* 				       	  ) */
/* 				       ) */
/* 				  %}			          */
/* 			        <div class="text-info general-item-weight col-md-2 col-sm-2 " style="text-align:right">		           		        */
/* 	                    <a  href="{{path('topic_edit',{id:parent.id})}}">*/
/* 		                	<span class="glyphicon glyphicon-edit"></span><span class="text-info weight  text-muted"> {{ parent.weight * 100}} %  </span>	  */
/* 	                    </a> */
/* 	                </div>*/
/* 	              {% else %}  */
/* 			        <div class="general-item-weight col-md-2 col-sm-2 "  style="text-align:right">	                  */
/*       					<span class="weight  text-muted"> {{ parent.weight * 100}} %  </span>	                    */
/* 					</div>*/
/* 	              {% endif %}		        */
/* 	*/
/* 	                */
/* 	                <!-- Link to edit -->*/
/* 		        <div class="text-info  col-md-4 col-sm-4">*/
/* 		          */
/* 		        	<span id="REF{{parent.id}}" onclick="HideShow('#target{{parent.id}}','#REF{{parent.id}}');"><span class="glyphicon glyphicon-resize-full"></span> Travaux associés</span>    */
/* 		         	[{{nb_travaux}}]*/
/* 		         */
/* 				 {% if ( is_granted("ROLE_ENSEIGNANT")  and course.isRedacteur(app.user.id) ) or */
/* 				       ( is_granted("ROLE_RESPONSABLE") and course.isRedacteur(app.user.id) ) or  */
/* 				       ( is_granted("ROLE_ADMIN") )*/
/* 				  %}			          */
/* 		           		        */
/* 	                    <a  href="{{path('topic_edit',{id:parent.id})}}" class="pull-right">*/
/* 		                	<span class="glyphicon glyphicon-edit"></span> Modifier */
/* 	                    </a> */
/* 	              {% endif %}*/
/* 		        </div>*/
/* 	        </div>*/
/* 		*/
/*             {% if sequence is defined and sequence==parent.id %}*/
/* 	    	  <div id="target{{parent.id}}" class="col-md-12 col-sm-12 block" > */
/*             {% else %}*/
/* 	    	  <div id="target{{parent.id}}" class="col-md-12 col-sm-12 block" style="display: none;">             */
/*             {% endif %}            	    */
/* 	        	            */
/*             <div class="col-md-12 col-sm-12">*/
/* */
/* 	*/
/* 		        <div class="text-info col-md-12 col-sm-12 attribut3">*/
/* 	                    {% if parent.startDate is defined and parent.startDate is not null %}*/
/* 	                    	Date d&eacute;but : {{ parent.startDate|date("d/m/Y") }} &nbsp;  */
/* 	                    {% endif %}*/
/* 	                    {% if parent.endDate is defined and parent.endDate is not null%}                   */
/* 	                    	Date fin : {{ parent.endDate|date("d/m/Y") }}*/
/* 	                    {% endif %}                    	*/
/* 		        </div>*/
/* 	         */
/* 	                <!-- Title -->*/
/* 		        <div class=" col-md-12 col-sm-12 attribut3"  style="overflow:auto; height: 200px; width: 100%; padding: 15px; border: 1px solid #AAAAAA" >*/
/* 	                    {{ parent.description|raw }}*/
/* 		        </div>	        */
/* */
/* */
/* */
/*             </div>*/
/*         {% endblock %}*/
/* */
/*         {% block child_item %}*/
/*             <tr>*/
/*                 <td> {{ child.title }} </td>*/
/*                 <td> */
/*                     {% if child.deadline is not null %}*/
/*                         {{ child.deadline|date('d/m/Y') }}*/
/*                     {% else %}*/
/*                         <span class="text-muted small"> Non spécifiée </span>*/
/*                     {% endif %}*/
/*                 </td>*/
/*                 <td> {{ macros.progress_bar(child.weight|default('0'))}} </td>*/
/*                 <td> */
/* 				 {% if ( is_granted("ROLE_ENSEIGNANT")  and course.isRedacteur(app.user.id) ) or */
/* 				       ( is_granted("ROLE_RESPONSABLE") and course.isRedacteur(app.user.id) ) or  */
/* 				       ( is_granted("ROLE_ADMIN") )*/
/* 				  %}	                 */
/*                 */
/*                     <a href="{{ path('assessment_objective_selection', {id:child.id,menu:'course_assessment'})}}">*/
/*                         <span class="label label-{{(child.objectiveCount == 0)?'warning':'default'}}"> */
/*                             {{ child.objectiveCount }} &nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-edit"></span> */
/*                         </span> */
/*                     </a> */
/*                 {% else %}*/
/*                     	{{ child.objectiveCount }} */
/*                 {% endif %}                    */
/*                 </td>*/
/*                 <td> */
/* 		         */
/* 				 {% if ( is_granted("ROLE_ENSEIGNANT")  and course.isRedacteur(app.user.id) ) or */
/* 				       ( is_granted("ROLE_RESPONSABLE") and course.isRedacteur(app.user.id) ) or  */
/* 				       ( is_granted("ROLE_ADMIN") )*/
/* 				  %}	          */
/*                     <a href="{{ path('assessment_delete', {id:child.id}) }}">*/
/*                         <span class="glyphicon glyphicon-remove"></span>*/
/*                     </a>*/
/*                   {% endif %}*/
/*                 </td>*/
/*             </tr>*/
/*             */
/*             */
/*             {% if assessmentObjectives[child.id] is defined and assessmentObjectives[child.id]!= null   %}*/
/* 	             <tr>*/
/* 	            	<td colspan='5' style="background-color:white">*/
/* 	            		<div class="col-md-2">*/
/* 	            			Vue étudiant :*/
/* 	            		</div>*/
/* 	            		<div class="col-md-10">            		*/
/* 		            		{% for ao in assessmentObjectives[child.id]  %}*/
/* 		            				<li>   {{ ao.weight*100}}% {{ ao.title }}*/
/* 		            		{% endfor %}*/
/* 		            	</div>*/
/* 	            	</td>*/
/* 	            </tr>         */
/*             {% endif %}              */
/*             */
/*             */
/*         {% endblock %}*/
/* */
/*         {% block children_header %} */
/*             <thead class="list-header">*/
/* 	        <tr>*/
/* 	            <th class="col-md-7"> Travail à réaliser</th>*/
/* 	            <th class="col-md-2"> Date de rendu </th>*/
/* 	            <th class="col-md-1"> Coefficient </th>*/
/*                 <th class="col-md-1"> Objectifs </th>*/
/* 	            <th class="col-md-1"> Supprimer</th>*/
/* 	        </tr>*/
/*             </thead>*/
/*         {% endblock %} */
/* */
/*         {% block new_parent %}*/
/* 			{% if ( is_granted("ROLE_ENSEIGNANT")  and course.isRedacteur(app.user.id) ) or */
/* 				  ( is_granted("ROLE_RESPONSABLE") and course.isRedacteur(app.user.id) ) or  */
/* 				  ( is_granted("ROLE_ADMIN") )*/
/* 			%}		       */
/*             <div class="node-creator general-item-creatorX">*/
/*                 <form action="{{path('course_topic_create', {id:course.id})}}" method="POST">*/
/*                     <div class="form-group">*/
/*                         <input name="aloes_topic_create[title]" type="text" placeholder="Nouvelle séquence" required>*/
/*                         */
/* 						<input type="hidden" name="aloes_topic_create[_token]" value="{{ csrf_token('aloes_topic_create') }}">                          */
/*                     </div>*/
/*                     <button class="btn btn-xs btn-success" type="submit"> Ajouter </button>*/
/*                 </form>*/
/*             </div>*/
/* */
/*           {% endif %}*/
/*         {% endblock %}*/
/* */
/* */
/*         {% block new_child %}*/
/*         */
/*  */
/* 			{% if ( is_granted("ROLE_ENSEIGNANT")  and course.isRedacteur(app.user.id) ) or */
/* 				       ( is_granted("ROLE_RESPONSABLE") and course.isRedacteur(app.user.id) ) or  */
/* 				       ( is_granted("ROLE_ADMIN") )*/
/* 			%}			*/
/*             <div class="child-creator">*/
/*                 <form action="{{path('topic_assessment_create', {id:parent.id})}}" method="POST">*/
/*                     <div class="form-group">*/
/*                         <input name="aloes_assessment[title]" type="text" placeholder="Nouveau travail à réaliser" required>*/
/*                         */
/* 						<input type="hidden" name="aloes_assessment[_token]" value="{{ csrf_token('aloes_assessment') }}">                            */
/*  */
/*                     </div> */
/*                     <button class="btn btn-xs btn-success" type="submit"> Ajouter </button>*/
/*                 </form>*/
/*             </div>*/
/*             */
/*           {% endif %}*/
/*           */
/*          </div>*/
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
