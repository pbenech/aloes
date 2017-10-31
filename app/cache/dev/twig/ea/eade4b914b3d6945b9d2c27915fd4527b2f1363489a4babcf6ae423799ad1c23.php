<?php

/* IfeAloesBundle:Course:graph.html.twig */
class __TwigTemplate_79026a05c3fddfb4b03ed4f6e91e0189fd7961b4a0a70b98b2a3ec8617976ee7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("IfeAloesBundle:Course:layout.html.twig", "IfeAloesBundle:Course:graph.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'scripts' => array($this, 'block_scripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "IfeAloesBundle:Course:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
<style>
canvas { 
  height: 800px!important; 

  display: block;
}
</style>

  <script type=\"text/javascript\">
    var nodes = null;
    var edges = null;
    var network = null;

    var LENGTH_MAIN = 700, 
        LENGTH_SERVER = 300,
        LENGTH_SERVER2 = 600,
        LENGTH_SUB = 300,
        WIDTH_SCALE = 3,
        WIDTH_SCALE2 = 5,
        GREEN = 'green',
        YELLOW = '#FFFF00',
        RED = '#C5000B',
        ORANGE = 'orange',
    \tGRAY = '#666666', 
        BLACK = '#2B1B17';

    // Called when the Visualization API is loaded.
    function draw() {
    
    
      // Create a data table with nodes.
      nodes = [];
      // Create a data table with links.
      edges = [];
      
      
      /* NOEUDS */
      ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["assessments"]) ? $context["assessments"] : $this->getContext($context, "assessments")));
        foreach ($context['_seq'] as $context["_key"] => $context["assessment"]) {
            echo "      \t        
      \tnodes.push({id: 'T";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["assessment"], "id", array()), "html", null, true);
            echo "', label: \"";
            echo twig_escape_filter($this->env, twig_replace_filter(twig_escape_filter($this->env, $this->getAttribute($context["assessment"], "title", array())), array("&#039;" => " ")), "html", null, true);
            echo "\", group: 'travaux', value: 10});
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['assessment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo " 
    
      ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["objectives"]) ? $context["objectives"] : $this->getContext($context, "objectives")));
        foreach ($context['_seq'] as $context["_key"] => $context["objective"]) {
            echo "      \t        
      \tnodes.push({id: 'O";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["objective"], "id", array()), "html", null, true);
            echo "', label: \"";
            echo twig_escape_filter($this->env, twig_replace_filter(twig_escape_filter($this->env, $this->getAttribute($context["objective"], "title", array())), array("&#039;" => " ")), "html", null, true);
            echo "\", group: 'objectifs', value: 10});
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['objective'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "    
      
      ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["competences"]) ? $context["competences"] : $this->getContext($context, "competences")));
        foreach ($context['_seq'] as $context["_key"] => $context["competence"]) {
            echo "      \t        
      \tnodes.push({id: 'C";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["competence"], "id", array()), "html", null, true);
            echo "', label: \"";
            echo twig_escape_filter($this->env, twig_replace_filter(twig_escape_filter($this->env, $this->getAttribute($context["competence"], "title", array())), array("&#039;" => " ")), "html", null, true);
            echo "\", group: 'competences', value: 10});
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['competence'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "    
      
      /* EDGES */      
      ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["assessmentsObjectives"]) ? $context["assessmentsObjectives"] : $this->getContext($context, "assessmentsObjectives")));
        foreach ($context['_seq'] as $context["_key"] => $context["ao"]) {
            echo "      \t        
      \t edges.push({from: 'T";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["ao"], "assessment_id", array()), "html", null, true);
            echo "', to: 'O";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ao"], "objective_id", array()), "html", null, true);
            echo "', length: LENGTH_SERVER, color: YELLOW, width: WIDTH_SCALE, label: '";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ao"], "weight", array()), "html", null, true);
            echo "'});
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ao'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "           

      ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["objectivesCompetences"]) ? $context["objectivesCompetences"] : $this->getContext($context, "objectivesCompetences")));
        foreach ($context['_seq'] as $context["_key"] => $context["oc"]) {
            echo "      \t        
      \t edges.push({from: 'O";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["oc"], "objective_id", array()), "html", null, true);
            echo "', to: 'C";
            echo twig_escape_filter($this->env, $this->getAttribute($context["oc"], "competence_id", array()), "html", null, true);
            echo "', length: LENGTH_SERVER, color: RED, width: WIDTH_SCALE, label: '";
            echo twig_escape_filter($this->env, $this->getAttribute($context["oc"], "weight", array()), "html", null, true);
            echo "'});
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "           
      
      /*
      ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["assessementsCompetences"]) ? $context["assessementsCompetences"] : $this->getContext($context, "assessementsCompetences")));
        foreach ($context['_seq'] as $context["_key"] => $context["ac"]) {
            echo "      \t        
      \t edges.push({from: 'C";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($context["ac"], "competence_id", array()), "html", null, true);
            echo "', to: 'T";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ac"], "assessment_id", array()), "html", null, true);
            echo "', length: LENGTH_SERVER2, color: GREEN, width: WIDTH_SCALE, label: '";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ac"], "weight", array()), "html", null, true);
            echo "'});
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ac'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "       
\t  */
\t  
      // create a network
      var container = document.getElementById('mynetwork');
      
      var data = {
        nodes: nodes,
        edges: edges
      };
      
      var options = {
        nodes: {
          scaling: {
            min: 20,
            max: 50
          }
        },
        edges: {
          color: GRAY,
          smooth: false
        },
        physics:{
          barnesHut:{gravitationalConstant:-30000},
          stabilization: {iterations:2500}
        },
        groups: {
          travaux: {
            shape: 'triangle',
            color: 'yellow' // orange
          },
          objectifs: {
            shape: 'square',
            color: \"red\" // red
          },
          competences: {
            shape: 'square',
            color: \"green\" // green
          },
          courses: {
              shape: 'square',
              color: \"orange\" // green
            }          
        }
      };
      network = new vis.Network(container, data, options);
    }
      
  </script>


  <div id=\"mynetwork\"></div>  
\t

\t        
";
    }

    // line 123
    public function block_scripts($context, array $blocks = array())
    {
        // line 124
        echo "\t 
  ";
        // line 125
        $this->displayParentBlock("scripts", $context, $blocks);
        echo "
  
  <script type=\"text/javascript\">  
\t\$(document).ready(function() {
\t    draw();
\t});    
  </script>\t\t
  
";
    }

    public function getTemplateName()
    {
        return "IfeAloesBundle:Course:graph.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  261 => 125,  258 => 124,  255 => 123,  196 => 66,  184 => 65,  178 => 64,  173 => 61,  161 => 60,  155 => 59,  151 => 57,  139 => 56,  133 => 55,  128 => 52,  118 => 51,  112 => 50,  108 => 48,  98 => 47,  92 => 46,  88 => 44,  78 => 43,  72 => 42,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'IfeAloesBundle:Course:layout.html.twig' %}*/
/* */
/* {% block content %}*/
/* */
/* <style>*/
/* canvas { */
/*   height: 800px!important; */
/* */
/*   display: block;*/
/* }*/
/* </style>*/
/* */
/*   <script type="text/javascript">*/
/*     var nodes = null;*/
/*     var edges = null;*/
/*     var network = null;*/
/* */
/*     var LENGTH_MAIN = 700, */
/*         LENGTH_SERVER = 300,*/
/*         LENGTH_SERVER2 = 600,*/
/*         LENGTH_SUB = 300,*/
/*         WIDTH_SCALE = 3,*/
/*         WIDTH_SCALE2 = 5,*/
/*         GREEN = 'green',*/
/*         YELLOW = '#FFFF00',*/
/*         RED = '#C5000B',*/
/*         ORANGE = 'orange',*/
/*     	GRAY = '#666666', */
/*         BLACK = '#2B1B17';*/
/* */
/*     // Called when the Visualization API is loaded.*/
/*     function draw() {*/
/*     */
/*     */
/*       // Create a data table with nodes.*/
/*       nodes = [];*/
/*       // Create a data table with links.*/
/*       edges = [];*/
/*       */
/*       */
/*       /* NOEUDS *//* */
/*       {% for assessment in assessments %}      	        */
/*       	nodes.push({id: 'T{{assessment.id}}', label: "{{assessment.title|e|replace({'&#039;': " "}) }}", group: 'travaux', value: 10});*/
/*       {% endfor %} */
/*     */
/*       {% for objective in objectives %}      	        */
/*       	nodes.push({id: 'O{{objective.id}}', label: "{{objective.title|e|replace({'&#039;': " "}) }}", group: 'objectifs', value: 10});*/
/*       {% endfor %}    */
/*       */
/*       {% for competence in competences %}      	        */
/*       	nodes.push({id: 'C{{competence.id}}', label: "{{competence.title|e|replace({'&#039;': " "}) }}", group: 'competences', value: 10});*/
/*       {% endfor %}    */
/*       */
/*       /* EDGES *//*       */
/*       {% for ao in assessmentsObjectives %}      	        */
/*       	 edges.push({from: 'T{{ao.assessment_id}}', to: 'O{{ao.objective_id}}', length: LENGTH_SERVER, color: YELLOW, width: WIDTH_SCALE, label: '{{ao.weight}}'});*/
/*       {% endfor %}           */
/* */
/*       {% for oc in objectivesCompetences %}      	        */
/*       	 edges.push({from: 'O{{oc.objective_id}}', to: 'C{{oc.competence_id}}', length: LENGTH_SERVER, color: RED, width: WIDTH_SCALE, label: '{{oc.weight}}'});*/
/*       {% endfor %}           */
/*       */
/*       /**/
/*       {% for ac in assessementsCompetences %}      	        */
/*       	 edges.push({from: 'C{{ac.competence_id}}', to: 'T{{ac.assessment_id}}', length: LENGTH_SERVER2, color: GREEN, width: WIDTH_SCALE, label: '{{ac.weight}}'});*/
/*       {% endfor %}       */
/* 	  *//* */
/* 	  */
/*       // create a network*/
/*       var container = document.getElementById('mynetwork');*/
/*       */
/*       var data = {*/
/*         nodes: nodes,*/
/*         edges: edges*/
/*       };*/
/*       */
/*       var options = {*/
/*         nodes: {*/
/*           scaling: {*/
/*             min: 20,*/
/*             max: 50*/
/*           }*/
/*         },*/
/*         edges: {*/
/*           color: GRAY,*/
/*           smooth: false*/
/*         },*/
/*         physics:{*/
/*           barnesHut:{gravitationalConstant:-30000},*/
/*           stabilization: {iterations:2500}*/
/*         },*/
/*         groups: {*/
/*           travaux: {*/
/*             shape: 'triangle',*/
/*             color: 'yellow' // orange*/
/*           },*/
/*           objectifs: {*/
/*             shape: 'square',*/
/*             color: "red" // red*/
/*           },*/
/*           competences: {*/
/*             shape: 'square',*/
/*             color: "green" // green*/
/*           },*/
/*           courses: {*/
/*               shape: 'square',*/
/*               color: "orange" // green*/
/*             }          */
/*         }*/
/*       };*/
/*       network = new vis.Network(container, data, options);*/
/*     }*/
/*       */
/*   </script>*/
/* */
/* */
/*   <div id="mynetwork"></div>  */
/* 	*/
/* */
/* 	        */
/* {% endblock %}*/
/*   */
/* {% block scripts %}*/
/* 	 */
/*   {{ parent() }}*/
/*   */
/*   <script type="text/javascript">  */
/* 	$(document).ready(function() {*/
/* 	    draw();*/
/* 	});    */
/*   </script>		*/
/*   */
/* {% endblock  %}*/
/* */
/* */
