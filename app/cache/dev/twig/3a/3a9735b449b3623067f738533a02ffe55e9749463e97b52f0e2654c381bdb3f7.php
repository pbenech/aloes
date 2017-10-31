<?php

/* IfeAloesBundle:Topic2:index.html.twig */
class __TwigTemplate_5d457b81efcb538baf492276e213a29798387848ab99fb172708ab65bc05e17a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("IfeAloesBundle:Course:layout.html.twig", "IfeAloesBundle:Topic2:index.html.twig", 1);
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
        $context["macros"] = $this->loadTemplate("IfeAloesBundle:Course:linking.html.twig", "IfeAloesBundle:Topic2:index.html.twig", 2);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "<div class='title-two1a col-sm-12'> Séquences et Evaluations</div>    \t

\t<script type=\"text/javascript\">\t\t
\t\t
\t\t\$(document).on('focusin', function(e) {
\t\t    if (\$(e.target).closest(\".mce-window\").length || \$(e.target).closest(\".moxman-window\").length) {
\t\t        e.stopImmediatePropagation();
\t\t    }
\t\t});\t\t
\t\t
\t</script>     

    ";
        // line 20
        $this->loadTemplate("IfeAloesBundle:Topic2:index.html.twig", "IfeAloesBundle:Topic2:index.html.twig", 20, "660825115")->display(array_merge($context, array("children" => "assessments", "children2" => "events")));
        // line 122
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
\t\t\t<div class=\"modal-dialog modal-lg\" style=\"z-index: 1050\">  
\t\t\t\t<div id=\"modal-content\" class=\"modal-content\"> \t\t\t\t\t  \t
\t\t\t    </div>
\t\t\t</div>   
\t\t</div>    
    

";
    }

    public function getTemplateName()
    {
        return "IfeAloesBundle:Topic2:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 122,  48 => 20,  34 => 8,  31 => 5,  27 => 1,  25 => 2,  11 => 1,);
    }
}


/* IfeAloesBundle:Topic2:index.html.twig */
class __TwigTemplate_5d457b81efcb538baf492276e213a29798387848ab99fb172708ab65bc05e17a_660825115 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 20
        $this->parent = $this->loadTemplate("IfeAloesBundle:Aloes:list3.html.twig", "IfeAloesBundle:Topic2:index.html.twig", 20);
        $this->blocks = array(
            'parent_item' => array($this, 'block_parent_item'),
            'child_item' => array($this, 'block_child_item'),
            'child_item2' => array($this, 'block_child_item2'),
            'children_header' => array($this, 'block_children_header'),
            'children_header2' => array($this, 'block_children_header2'),
            'new_parent' => array($this, 'block_new_parent'),
            'new_child' => array($this, 'block_new_child'),
            'new_child2' => array($this, 'block_new_child2'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "IfeAloesBundle:Aloes:list3.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 22
    public function block_parent_item($context, array $blocks = array())
    {
        // line 23
        echo "  \t\t\t<div id=\"TO_";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "id", array()), "html", null, true);
        echo "_A\" class=\"row\" >      
        \t\t";
        // line 24
        $this->loadTemplate("IfeAloesBundle:Topic2:TO_XX_A.html.twig", "IfeAloesBundle:Topic2:index.html.twig", 24)->display($context);
        // line 25
        echo "\t\t\t</div>\t\t\t
        ";
    }

    // line 28
    public function block_child_item($context, array $blocks = array())
    {
        // line 29
        echo "\t\t\t<div id=\"AS_";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "id", array()), "html", null, true);
        echo "\" class=\"row block1\" > 
        \t\t";
        // line 30
        $this->loadTemplate("IfeAloesBundle:Assessment2:AS_XX.html.twig", "IfeAloesBundle:Topic2:index.html.twig", 30)->display($context);
        echo "\t \t\t
\t\t\t</div>        
        ";
    }

    // line 35
    public function block_child_item2($context, array $blocks = array())
    {
        echo " 
\t\t\t<div id=\"AS2_";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "id", array()), "html", null, true);
        echo "\" class=\"row block2\"  > 
        \t\t";
        // line 37
        $this->loadTemplate("IfeAloesBundle:Event2:EV_XX.html.twig", "IfeAloesBundle:Topic2:index.html.twig", 37)->display($context);
        echo "\t\t\t
\t\t\t</div>        
        ";
    }

    // line 42
    public function block_children_header($context, array $blocks = array())
    {
        echo " 
        \t<div class=\"row col-sm-12\">
\t            <div class=\"col-sm-3 entete2\"> Travaux</div> 
\t            <div class=\"col-sm-3 entete2\"> Evènement(s) Associé(s)</div> 
\t            <div class=\"col-sm-2 entete2\"> Date de rendu</div>
                <div class=\"col-sm-1 entete2\"> Objectifs</div>\t            
\t            <div class=\"col-sm-1 entete2\"> Coefficient</div>
\t            <div class=\"col-sm-2 entete2\"> </div>
\t\t\t</div>
        ";
    }

    // line 53
    public function block_children_header2($context, array $blocks = array())
    {
        echo " 
        \t<div class=\"row col-sm-12\">
\t            <div class=\"col-sm-3 entete3\"> Evènement(s)</div>
\t            <div class=\"col-sm-3 entete3\"> Travaux Associé(s)</div>
                <div class=\"col-sm-1 entete3\"> Dates </div>\t            
\t            <div class=\"col-sm-1 entete3\">  </div>
\t            <div class=\"col-sm-2 entete3\">  </div> 
\t\t\t</div>
        ";
    }

    // line 64
    public function block_new_parent($context, array $blocks = array())
    {
        echo "        
 \t\t\t";
        // line 65
        if (((($this->env->getExtension('security')->isGranted("ROLE_ENSEIGNANT") && $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "isRedacteur", array(0 => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array())), "method")) || ($this->env->getExtension('security')->isGranted("ROLE_RESPONSABLE") && $this->getAttribute(        // line 66
(isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "isRedacteur", array(0 => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array())), "method"))) || $this->env->getExtension('security')->isGranted("ROLE_ADMIN"))) {
            // line 68
            echo "\t
\t\t\t<!--\t       
            <div class=\"node-creator general-item-creatorX\">
             
            \t<a href=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_topic21_create", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "init" => true)), "html", null, true);
            echo "\">Créer une nouvelle séquence ou plusieurs séquences </a> \t

            </div>  
\t\t \t-->
\t\t 
\t\t\t<div id=\"button_gen\" class=\"col-sm-12\" style=\"text-align:right\">   \t   
\t\t\t  <a class=\"btn1 btn-success\" href=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_topic21_create", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "init" => true)), "html", null, true);
            echo "\">
\t\t\t  \t\t<span class=\"glyphicon glyphicon-plus-sign\"> Créer une nouvelle séquence ou plusieurs séquences
\t\t\t  </a> \t\t\t\t\t\t             
\t\t\t</div>    \t\t 
\t\t 
          ";
        }
        // line 83
        echo "             
        ";
    }

    // line 87
    public function block_new_child($context, array $blocks = array())
    {
        // line 88
        echo "\t\t\t";
        if (((($this->env->getExtension('security')->isGranted("ROLE_ENSEIGNANT") && $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "isRedacteur", array(0 => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array())), "method")) || ($this->env->getExtension('security')->isGranted("ROLE_RESPONSABLE") && $this->getAttribute(        // line 89
(isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "isRedacteur", array(0 => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array())), "method"))) || $this->env->getExtension('security')->isGranted("ROLE_ADMIN"))) {
            // line 91
            echo "\t\t\t
\t\t\t\t\t\t
\t\t\t  <div id=\"button_gen\" class=\"col-sm-12\" style=\"text-align:right\">  \t  
\t\t\t  \t<a title=\"Ajouter un travail\"  data-toggle=\"modal\" class=\"btn2 btn-warning\" href=\"";
            // line 94
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("topic_assessment_new_2", array("id" => $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "id", array()))), "html", null, true);
            echo "\" data-target=\"#myModal\">
\t\t\t  \t\t<span class=\"glyphicon glyphicon-plus-sign\">Ajouter
\t\t\t  \t</a> 
\t\t\t  \t<br/>&nbsp; \t\t\t\t
\t          </div> \t\t\t

          ";
        }
        // line 101
        echo "        ";
    }

    // line 104
    public function block_new_child2($context, array $blocks = array())
    {
        // line 105
        echo "\t\t\t";
        if (((($this->env->getExtension('security')->isGranted("ROLE_ENSEIGNANT") && $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "isRedacteur", array(0 => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array())), "method")) || ($this->env->getExtension('security')->isGranted("ROLE_RESPONSABLE") && $this->getAttribute(        // line 106
(isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "isRedacteur", array(0 => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array())), "method"))) || $this->env->getExtension('security')->isGranted("ROLE_ADMIN"))) {
            // line 108
            echo "\t\t\t
\t\t\t\t\t\t
\t\t\t  <div id=\"button_gen\" class=\"col-sm-12\" style=\"text-align:right\">  \t\t   
\t\t\t  \t<a title=\"Ajouter un évènement\" data-toggle=\"modal\" class=\"btn2 btn-info\" href=\"";
            // line 111
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("topic_events_new_2", array("id" => $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "id", array()))), "html", null, true);
            echo "\" data-target=\"#myModal\">
\t\t\t  \t\t<span class=\"glyphicon glyphicon-plus-sign\">Ajouter
\t\t\t  \t</a>  
\t\t\t  \t<br/>&nbsp; \t\t\t \t
\t          </div> \t\t\t

          ";
        }
        // line 118
        echo "        ";
    }

    public function getTemplateName()
    {
        return "IfeAloesBundle:Topic2:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  280 => 118,  270 => 111,  265 => 108,  263 => 106,  261 => 105,  258 => 104,  254 => 101,  244 => 94,  239 => 91,  237 => 89,  235 => 88,  232 => 87,  227 => 83,  218 => 78,  209 => 72,  203 => 68,  201 => 66,  200 => 65,  195 => 64,  181 => 53,  166 => 42,  159 => 37,  155 => 36,  150 => 35,  143 => 30,  138 => 29,  135 => 28,  130 => 25,  128 => 24,  123 => 23,  120 => 22,  96 => 20,  50 => 122,  48 => 20,  34 => 8,  31 => 5,  27 => 1,  25 => 2,  11 => 1,);
    }
}
/* {% extends 'IfeAloesBundle:Course:layout.html.twig' %}*/
/* {% import  'IfeAloesBundle:Course:linking.html.twig' as macros%}*/
/* */
/* */
/* {% block content -%}*/
/* */
/* */
/*     <div class='title-two1a col-sm-12'> Séquences et Evaluations</div>    	*/
/* */
/* 	<script type="text/javascript">		*/
/* 		*/
/* 		$(document).on('focusin', function(e) {*/
/* 		    if ($(e.target).closest(".mce-window").length || $(e.target).closest(".moxman-window").length) {*/
/* 		        e.stopImmediatePropagation();*/
/* 		    }*/
/* 		});		*/
/* 		*/
/* 	</script>     */
/* */
/*     {% embed 'IfeAloesBundle:Aloes:list3.html.twig' with {'children': 'assessments','children2': 'events'} %}*/
/* */
/*         {% block parent_item %}*/
/*   			<div id="TO_{{parent.id}}_A" class="row" >      */
/*         		{% include 'IfeAloesBundle:Topic2:TO_XX_A.html.twig' %}*/
/* 			</div>			*/
/*         {% endblock %}*/
/* */
/*         {% block child_item %}*/
/* 			<div id="AS_{{child.id}}" class="row block1" > */
/*         		{% include 'IfeAloesBundle:Assessment2:AS_XX.html.twig' %}	 		*/
/* 			</div>        */
/*         {% endblock %} */
/*   */
/* */
/*         {% block child_item2 %} */
/* 			<div id="AS2_{{child.id}}" class="row block2"  > */
/*         		{% include 'IfeAloesBundle:Event2:EV_XX.html.twig' %}			*/
/* 			</div>        */
/*         {% endblock %} */
/* */
/* */
/*         {% block children_header %} */
/*         	<div class="row col-sm-12">*/
/* 	            <div class="col-sm-3 entete2"> Travaux</div> */
/* 	            <div class="col-sm-3 entete2"> Evènement(s) Associé(s)</div> */
/* 	            <div class="col-sm-2 entete2"> Date de rendu</div>*/
/*                 <div class="col-sm-1 entete2"> Objectifs</div>	            */
/* 	            <div class="col-sm-1 entete2"> Coefficient</div>*/
/* 	            <div class="col-sm-2 entete2"> </div>*/
/* 			</div>*/
/*         {% endblock %} */
/* */
/*         {% block children_header2 %} */
/*         	<div class="row col-sm-12">*/
/* 	            <div class="col-sm-3 entete3"> Evènement(s)</div>*/
/* 	            <div class="col-sm-3 entete3"> Travaux Associé(s)</div>*/
/*                 <div class="col-sm-1 entete3"> Dates </div>	            */
/* 	            <div class="col-sm-1 entete3">  </div>*/
/* 	            <div class="col-sm-2 entete3">  </div> */
/* 			</div>*/
/*         {% endblock %} */
/* */
/* */
/*         {% block new_parent %}        */
/*  			{% if ( is_granted("ROLE_ENSEIGNANT")  and course.isRedacteur(app.user.id) ) or */
/* 				  ( is_granted("ROLE_RESPONSABLE") and course.isRedacteur(app.user.id) ) or  */
/* 				  ( is_granted("ROLE_ADMIN") )*/
/* 			%}	*/
/* 			<!--	       */
/*             <div class="node-creator general-item-creatorX">*/
/*              */
/*             	<a href="{{ path('course_topic21_create',{id:course.id, init:true}) }}">Créer une nouvelle séquence ou plusieurs séquences </a> 	*/
/* */
/*             </div>  */
/* 		 	-->*/
/* 		 */
/* 			<div id="button_gen" class="col-sm-12" style="text-align:right">   	   */
/* 			  <a class="btn1 btn-success" href="{{ path('course_topic21_create',{id:course.id, init:true}) }}">*/
/* 			  		<span class="glyphicon glyphicon-plus-sign"> Créer une nouvelle séquence ou plusieurs séquences*/
/* 			  </a> 						             */
/* 			</div>    		 */
/* 		 */
/*           {% endif %}             */
/*         {% endblock %}*/
/* */
/* */
/*         {% block new_child %}*/
/* 			{% if ( is_granted("ROLE_ENSEIGNANT")  and course.isRedacteur(app.user.id) ) or */
/* 				       ( is_granted("ROLE_RESPONSABLE") and course.isRedacteur(app.user.id) ) or  */
/* 				       ( is_granted("ROLE_ADMIN") )*/
/* 			%}			*/
/* 						*/
/* 			  <div id="button_gen" class="col-sm-12" style="text-align:right">  	  */
/* 			  	<a title="Ajouter un travail"  data-toggle="modal" class="btn2 btn-warning" href="{{ path("topic_assessment_new_2", {id:parent.id}) }}" data-target="#myModal">*/
/* 			  		<span class="glyphicon glyphicon-plus-sign">Ajouter*/
/* 			  	</a> */
/* 			  	<br/>&nbsp; 				*/
/* 	          </div> 			*/
/* */
/*           {% endif %}*/
/*         {% endblock %}*/
/* */
/* */
/*         {% block new_child2 %}*/
/* 			{% if ( is_granted("ROLE_ENSEIGNANT")  and course.isRedacteur(app.user.id) ) or */
/* 				       ( is_granted("ROLE_RESPONSABLE") and course.isRedacteur(app.user.id) ) or  */
/* 				       ( is_granted("ROLE_ADMIN") )*/
/* 			%}			*/
/* 						*/
/* 			  <div id="button_gen" class="col-sm-12" style="text-align:right">  		   */
/* 			  	<a title="Ajouter un évènement" data-toggle="modal" class="btn2 btn-info" href="{{ path("topic_events_new_2", {id:parent.id}) }}" data-target="#myModal">*/
/* 			  		<span class="glyphicon glyphicon-plus-sign">Ajouter*/
/* 			  	</a>  */
/* 			  	<br/>&nbsp; 			 	*/
/* 	          </div> 			*/
/* */
/*           {% endif %}*/
/*         {% endblock %}*/
/* */
/* */
/*     {% endembed %}*/
/*     */
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
/* 			<div class="modal-dialog modal-lg" style="z-index: 1050">  */
/* 				<div id="modal-content" class="modal-content"> 					  	*/
/* 			    </div>*/
/* 			</div>   */
/* 		</div>    */
/*     */
/* */
/* {% endblock %}*/
/* */
/* */
/* */
