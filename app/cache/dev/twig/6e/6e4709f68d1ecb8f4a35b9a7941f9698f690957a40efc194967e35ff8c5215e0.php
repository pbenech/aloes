<?php

/* IfeAloesBundle:GeneralObjective2:index.html.twig */
class __TwigTemplate_3a13c2ea711d24f05a26d6cba8ce206f0ba69c3dd9576d93ec5624afd9f19ae0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("IfeAloesBundle:Course:layout.html.twig", "IfeAloesBundle:GeneralObjective2:index.html.twig", 1);
        $this->blocks = array(
            'scripts' => array($this, 'block_scripts'),
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
        $context["macros"] = $this->loadTemplate("IfeAloesBundle:Course:linking.html.twig", "IfeAloesBundle:GeneralObjective2:index.html.twig", 2);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_scripts($context, array $blocks = array())
    {
        // line 5
        echo "  ";
        $this->displayParentBlock("scripts", $context, $blocks);
        echo " 
";
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        // line 10
        echo "<div class='title-two1a col-sm-12'>  Objectifs \"généraux\" d'apprentissage</div>    \t


    \t";
        // line 13
        $this->loadTemplate("IfeAloesBundle:GeneralObjective2:index.html.twig", "IfeAloesBundle:GeneralObjective2:index.html.twig", 13, "1737301202")->display(array_merge($context, array("children" => "specificObjectives")));
        // line 81
        echo "
  \t<script>            
\t\t\$(document.body).on('hidden.bs.modal', function () {
\t\t\t\t\$('#myModal').removeData('bs.modal');\t    \t
\t\t\t\t\$(\"#modal-content\").html('');\t\t\t\t\t\t\t\t
\t\t\t\t\t
\t\t});\t\t\t\t\t\t\t\t \t\t                     
\t</script>
\t  
\t\t<div class=\"modal fade in \" data-backdrop=\"static\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\"  data-target=\".bs-example-modal-lg\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
\t\t\t<div class=\"modal-dialog modal-lg\">  
\t\t\t\t<div id=\"modal-content\" class=\"modal-content\"> \t\t\t\t\t  \t
\t\t\t    </div>
\t\t\t</div>   
\t\t</div>

";
    }

    public function getTemplateName()
    {
        return "IfeAloesBundle:GeneralObjective2:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 81,  50 => 13,  45 => 10,  42 => 8,  35 => 5,  32 => 4,  28 => 1,  26 => 2,  11 => 1,);
    }
}


/* IfeAloesBundle:GeneralObjective2:index.html.twig */
class __TwigTemplate_3a13c2ea711d24f05a26d6cba8ce206f0ba69c3dd9576d93ec5624afd9f19ae0_1737301202 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 13
        $this->parent = $this->loadTemplate("IfeAloesBundle:Aloes:list2.html.twig", "IfeAloesBundle:GeneralObjective2:index.html.twig", 13);
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
        return "IfeAloesBundle:Aloes:list2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_parent_item($context, array $blocks = array())
    {
        echo " 
  \t\t\t<div id=\"OG_";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "id", array()), "html", null, true);
        echo "_A\" class=\"row\" >      
        \t\t";
        // line 17
        $this->loadTemplate("IfeAloesBundle:GeneralObjective2:OG_XX_A.html.twig", "IfeAloesBundle:GeneralObjective2:index.html.twig", 17)->display($context);
        // line 18
        echo "\t\t\t</div>
        ";
    }

    // line 21
    public function block_child_item($context, array $blocks = array())
    {
        echo "   
\t\t\t<div id=\"OS_";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "id", array()), "html", null, true);
        echo "\" class=\"row block1\">                 
\t\t  \t\t";
        // line 23
        $this->loadTemplate("IfeAloesBundle:SpecificObjective2:OS_XX.html.twig", "IfeAloesBundle:GeneralObjective2:index.html.twig", 23)->display($context);
        echo "\t\t\t\t
\t\t  \t</div>\t 
        ";
    }

    // line 27
    public function block_children_header($context, array $blocks = array())
    {
        // line 28
        echo "        \t\t<div class=\"col-sm-12\">
\t            \t<div class=\"col-sm-6 entete2\" style=\"text-align:left\"> Objectifs spécifiques</div> 
\t            \t<div class=\"col-md-2 entete2\" style=\"text-align:center\"> Compétences spécifiques</div>
\t            \t<div class=\"col-md-2 entete2\" style=\"text-align:center\"> % </div>
\t            \t<div class=\"col-md-2 entete2\" style=\"text-align:center\"> </div>        
        \t\t</div>
        \t\t
        \t\t<div class=\"col-sm-12\">
\t\t\t\t\t<ul id=\"sortable";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "id", array()), "html", null, true);
        echo "\" class=\"connectedSortable\">\t\t   \t\t 
\t\t\t\t    \t<br/>      
\t\t\t    \t\t";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), (isset($context["children"]) ? $context["children"] : $this->getContext($context, "children"))));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 39
            echo "\t\t\t\t    \t\t";
            $this->displayBlock("child_item", $context, $blocks);
            echo "                                 
\t\t\t\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "\t\t    \t\t\t
\t\t\t   \t\t</ul>         
\t\t\t    </div>
\t\t\t   
\t\t\t   ";
        // line 44
        $this->loadTemplate("IfeAloesBundle:GeneralObjective2:sortJavascript.html.twig", "IfeAloesBundle:GeneralObjective2:index.html.twig", 44)->display($context);
        echo "\t\t\t\t     \t         
        ";
    }

    // line 47
    public function block_new_parent($context, array $blocks = array())
    {
        echo "\t\t         
\t\t\t";
        // line 48
        if (((($this->env->getExtension('security')->isGranted("ROLE_ENSEIGNANT") && $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "isRedacteur", array(0 => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array())), "method")) || ($this->env->getExtension('security')->isGranted("ROLE_RESPONSABLE") && $this->getAttribute(        // line 49
(isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "isRedacteur", array(0 => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array())), "method"))) || $this->env->getExtension('security')->isGranted("ROLE_ADMIN"))) {
            // line 51
            echo "\t
\t\t\t<div id=\"button_gen\" class=\"col-sm-12\" style=\"text-align:right\">   \t   
\t\t\t  <a data-toggle=\"modal\" class=\"btn1 btn-success\" href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_objective_new2", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
            echo "\" data-target=\"#myModal\">
\t\t\t  \t\t<span class=\"glyphicon glyphicon-plus-sign\"> Ajouter un objectif général
\t\t\t  </a> \t\t\t\t\t\t             
\t\t\t</div>  \t\t\t
\t\t 
            ";
        }
        // line 58
        echo " 
        ";
    }

    // line 61
    public function block_new_child($context, array $blocks = array())
    {
        echo " 
 \t\t         
\t\t\t";
        // line 63
        if (((($this->env->getExtension('security')->isGranted("ROLE_ENSEIGNANT") && $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "isRedacteur", array(0 => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array())), "method")) || ($this->env->getExtension('security')->isGranted("ROLE_RESPONSABLE") && $this->getAttribute(        // line 64
(isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "isRedacteur", array(0 => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array())), "method"))) || $this->env->getExtension('security')->isGranted("ROLE_ADMIN"))) {
            // line 66
            echo "\t       
\t\t\t
\t\t\t  <div id=\"button_gen\" class=\"col-sm-12\" style=\"text-align:right\">  \t\t  
\t\t\t  \t<a data-toggle=\"modal\" class=\"btn2 btn-warning\" href=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("general_objective_specific_objective_new_2", array("id" => $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "id", array()))), "html", null, true);
            echo "\" data-target=\"#myModal\">
\t\t\t  \t\t<span class=\"glyphicon glyphicon-plus-sign\"> Ajouter un objectif spécifique
\t\t\t  \t</a> 
\t\t\t  \t<br/>&nbsp; \t\t\t\t
\t          </div> \t\t\t

          ";
        }
        // line 76
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "IfeAloesBundle:GeneralObjective2:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  263 => 76,  253 => 69,  248 => 66,  246 => 64,  245 => 63,  239 => 61,  234 => 58,  225 => 53,  221 => 51,  219 => 49,  218 => 48,  213 => 47,  207 => 44,  201 => 40,  184 => 39,  167 => 38,  162 => 36,  152 => 28,  149 => 27,  142 => 23,  138 => 22,  133 => 21,  128 => 18,  126 => 17,  122 => 16,  117 => 15,  96 => 13,  52 => 81,  50 => 13,  45 => 10,  42 => 8,  35 => 5,  32 => 4,  28 => 1,  26 => 2,  11 => 1,);
    }
}
/* {% extends 'IfeAloesBundle:Course:layout.html.twig' %}*/
/* {% import 'IfeAloesBundle:Course:linking.html.twig' as macros %}*/
/* */
/* {% block scripts %}*/
/*   {{ parent() }} */
/* {% endblock %} */
/*  */
/* {% block content -%}*/
/*         */
/*     <div class='title-two1a col-sm-12'>  Objectifs "généraux" d'apprentissage</div>    	*/
/* */
/* */
/*     	{% embed 'IfeAloesBundle:Aloes:list2.html.twig' with {'children': 'specificObjectives'} %}*/
/* */
/*         {% block parent_item %} */
/*   			<div id="OG_{{parent.id}}_A" class="row" >      */
/*         		{% include 'IfeAloesBundle:GeneralObjective2:OG_XX_A.html.twig' %}*/
/* 			</div>*/
/*         {% endblock %}*/
/*  */
/*         {% block child_item %}   */
/* 			<div id="OS_{{child.id}}" class="row block1">                 */
/* 		  		{% include 'IfeAloesBundle:SpecificObjective2:OS_XX.html.twig' %}				*/
/* 		  	</div>	 */
/*         {% endblock %}  */
/* */
/*         {% block children_header %}*/
/*         		<div class="col-sm-12">*/
/* 	            	<div class="col-sm-6 entete2" style="text-align:left"> Objectifs spécifiques</div> */
/* 	            	<div class="col-md-2 entete2" style="text-align:center"> Compétences spécifiques</div>*/
/* 	            	<div class="col-md-2 entete2" style="text-align:center"> % </div>*/
/* 	            	<div class="col-md-2 entete2" style="text-align:center"> </div>        */
/*         		</div>*/
/*         		*/
/*         		<div class="col-sm-12">*/
/* 					<ul id="sortable{{parent.id}}" class="connectedSortable">		   		 */
/* 				    	<br/>      */
/* 			    		{% for child in attribute(parent,children) %}*/
/* 				    		{{ block('child_item') }}                                 */
/* 						{% endfor %}		    			*/
/* 			   		</ul>         */
/* 			    </div>*/
/* 			   */
/* 			   {% include 'IfeAloesBundle:GeneralObjective2:sortJavascript.html.twig' %}				     	         */
/*         {% endblock %} */
/* */
/*         {% block new_parent %}		         */
/* 			{% if ( is_granted("ROLE_ENSEIGNANT")  and course.isRedacteur(app.user.id) ) or */
/* 				  ( is_granted("ROLE_RESPONSABLE") and course.isRedacteur(app.user.id) ) or  */
/* 				  ( is_granted("ROLE_ADMIN") )*/
/* 			%}	*/
/* 			<div id="button_gen" class="col-sm-12" style="text-align:right">   	   */
/* 			  <a data-toggle="modal" class="btn1 btn-success" href="{{path('course_objective_new2', {id:course.id})}}" data-target="#myModal">*/
/* 			  		<span class="glyphicon glyphicon-plus-sign"> Ajouter un objectif général*/
/* 			  </a> 						             */
/* 			</div>  			*/
/* 		 */
/*             {% endif %} */
/*         {% endblock %}   */
/*  */
/*         {% block new_child %} */
/*  		         */
/* 			{% if ( is_granted("ROLE_ENSEIGNANT")  and course.isRedacteur(app.user.id) ) or */
/* 				  ( is_granted("ROLE_RESPONSABLE") and course.isRedacteur(app.user.id) ) or  */
/* 				  ( is_granted("ROLE_ADMIN") )*/
/* 			%}	       */
/* 			*/
/* 			  <div id="button_gen" class="col-sm-12" style="text-align:right">  		  */
/* 			  	<a data-toggle="modal" class="btn2 btn-warning" href="{{ path("general_objective_specific_objective_new_2", {id:parent.id}) }}" data-target="#myModal">*/
/* 			  		<span class="glyphicon glyphicon-plus-sign"> Ajouter un objectif spécifique*/
/* 			  	</a> */
/* 			  	<br/>&nbsp; 				*/
/* 	          </div> 			*/
/* */
/*           {% endif %}*/
/* */
/*         {% endblock %}*/
/* */
/* */
/*     {% endembed %}*/
/* */
/*   	<script>            */
/* 		$(document.body).on('hidden.bs.modal', function () {*/
/* 				$('#myModal').removeData('bs.modal');	    	*/
/* 				$("#modal-content").html('');								*/
/* 					*/
/* 		});								 		                     */
/* 	</script>*/
/* 	  */
/* 		<div class="modal fade in " data-backdrop="static" id="myModal" tabindex="-1" role="dialog"  data-target=".bs-example-modal-lg" aria-labelledby="myModalLabel" aria-hidden="true">*/
/* 			<div class="modal-dialog modal-lg">  */
/* 				<div id="modal-content" class="modal-content"> 					  	*/
/* 			    </div>*/
/* 			</div>   */
/* 		</div>*/
/* */
/* {% endblock %}*/
/* */
/* */
/* */
