<?php

/* IfeAloesBundle:Topic:edit.html.twig */
class __TwigTemplate_89ef217abd5b1ec7007cf8e525bb12f915c69ae0656e83a54de33b3810faadc0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("IfeAloesBundle:Course:layout.html.twig", "IfeAloesBundle:Topic:edit.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 5
        $this->loadTemplate("IfeAloesBundle:Topic:edit.html.twig", "IfeAloesBundle:Topic:edit.html.twig", 5, "184606270")->display(array_merge($context, array("children" => $this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "assessments", array()))));
        // line 118
        echo "   
\t
\t<input id=\"datepicker\" type=\"text\">
\t
\t<p id=\"dateoutput\"></p>
\t<script>
\t\t/*
\t\t * jQuery UI Datepicker: Parse and Format Dates
\t\t * http://salman-w.blogspot.com/2013/01/jquery-ui-datepicker-examples.html
\t\t */
\t\t\$(function() {
\t\t\t\$(\"#datepicker\").datepicker({
\t\t\t\tdateFormat: \"dd-mm-yy\",
\t\t\t\tonSelect: function(dateText, inst) {
\t\t\t\t\tvar date = \$.datepicker.parseDate(inst.settings.dateFormat || \$.datepicker._defaults.dateFormat, dateText, inst.settings);
\t\t\t\t\tvar dateText1 = \$.datepicker.formatDate(\"D, d M yy\", date, inst.settings);
\t\t\t\t\tdate.setDate(date.getDate() + 7);
\t\t\t\t\tvar dateText2 = \$.datepicker.formatDate(\"D, d M yy\", date, inst.settings);
\t\t\t\t\t\$(\"#dateoutput\").html(\"Chosen date is <b>\" + dateText1 + \"</b>; chosen date + 7 days yields <b>\" + dateText2 + \"</b>\");
\t\t\t\t}
\t\t\t});
\t\t});
\t</script>
\t   
    
<!--    
\t<div id=\"sandbox-container\" class=\"span5 col-md-5\">
\t\t<input class=\"form-control\" type=\"text\"> 
\t</div> 

\t<script>
\t \$(function () {\t    
\t\t\t\$('#sandbox-container input').multiDatesPicker({
\t\t\t      multidate: true
\t\t\t}).on('changeDate', function(e){
\t\t\t    alert(\"TOTO\"); 
\t\t\t     
\t\t\t});\t 
\t\t\t
\t\t\t   \t     
     });\t    
\t</script>
-->    
    

";
    }

    public function getTemplateName()
    {
        return "IfeAloesBundle:Topic:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 118,  31 => 5,  28 => 3,  11 => 1,);
    }
}


/* IfeAloesBundle:Topic:edit.html.twig */
class __TwigTemplate_89ef217abd5b1ec7007cf8e525bb12f915c69ae0656e83a54de33b3810faadc0_184606270 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 5
        $this->parent = $this->loadTemplate("IfeAloesBundle:Aloes:edit-general-item.html.twig", "IfeAloesBundle:Topic:edit.html.twig", 5);
        $this->blocks = array(
            'parent_title' => array($this, 'block_parent_title'),
            'parent_form' => array($this, 'block_parent_form'),
            'children_title' => array($this, 'block_children_title'),
            'back_to_index' => array($this, 'block_back_to_index'),
            'child_form' => array($this, 'block_child_form'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "IfeAloesBundle:Aloes:edit-general-item.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_parent_title($context, array $blocks = array())
    {
        echo " 
  \t\t<div class='title-one'> ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "title", array()), "html", null, true);
        echo " </div>
    \t<div class='title-two'> Séquences & Evaluations : Edition</div>    \t
        

        ";
    }

    // line 14
    public function block_parent_form($context, array $blocks = array())
    {
        // line 15
        echo "\t\t\t";
        echo $this->env->getExtension('stfalcon_tinymce')->tinymceInit();
        echo " 

\t \t\t";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'stylesheet');
        echo "
    \t\t";
        // line 18
        echo $this->env->getExtension('collot.twig.extension.form')->renderJavascript((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")));
        echo "\t\t\t
\t\t\t
\t\t\t<div class=\"container-fluid\">

            ";
        // line 22
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "

\t\t\t<fieldset>\t            
 \t\t\t\t<div class='row'>\t
\t\t\t\t\t<div class='col-md-2'> \t  \t  
\t\t\t\t    \t";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "title", array()), 'label');
        echo "
\t\t\t\t\t</div> \t  \t\t    \t
\t\t\t\t\t<div class='col-md-10'> \t  \t  
\t\t\t\t    \t";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "title", array()), 'widget');
        echo "
\t\t\t\t\t</div> \t  \t
\t\t\t\t</div>   
\t\t\t\t
 \t\t\t\t<div class='row'>\t
\t\t\t\t\t<div class='col-md-2'> \t  \t  
\t\t\t\t    \t";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "startDate", array()), 'label');
        echo "
\t\t\t\t\t</div> \t  \t\t    \t
\t\t\t\t\t<div class='col-md-4'> \t  \t  
\t\t\t\t    \t";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "startDate", array()), 'widget');
        echo "
\t\t\t\t\t</div> \t  \t
\t\t\t\t\t<div class='col-md-2'> \t  \t  
\t\t\t\t    \t";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "endDate", array()), 'label');
        echo "
\t\t\t\t\t</div> \t  \t\t    \t
\t\t\t\t\t<div class='col-md-4'> \t  \t  
\t\t\t\t    \t";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "endDate", array()), 'widget');
        echo "
\t\t\t\t\t</div> \t\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t</div> \t\t\t\t

 \t\t\t\t<div class='row'>\t
\t\t\t\t\t<div class='col-md-2'> \t  \t  
\t\t\t\t    \t";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "description", array()), 'label');
        echo "
\t\t\t\t\t</div> \t  \t\t    \t
\t\t\t\t\t<div class='col-md-10'> \t  \t  
\t\t\t\t    \t";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "description", array()), 'widget');
        echo "
\t\t\t\t\t</div> \t  \t
\t\t\t\t</div> 


\t\t\t</fieldset>\t

\t\t\t";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "_token", array()), 'widget');
        echo "
\t            
            </div>
        ";
    }

    // line 67
    public function block_children_title($context, array $blocks = array())
    {
        // line 68
        echo "            <h4>Travail à réaliser</h4>
            (*) Coefficient (poids relatif de l'évaluation dans la note finale)
        ";
    }

    // line 72
    public function block_back_to_index($context, array $blocks = array())
    {
        // line 73
        echo "            <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_assessment", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
        echo "\">
                <span class=\"glyphicon glyphicon-arrow-left\"></span>
                Retour à la liste des séquences 
            </a>
        ";
    }

    // line 79
    public function block_child_form($context, array $blocks = array())
    {
        // line 80
        echo "\t\t<fieldset>\t
 \t\t\t\t<div class='row'>\t
\t\t\t\t\t<div class='col-md-2'> \t  \t  
\t\t\t\t    \t";
        // line 83
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "title", array()), 'label');
        echo "
\t\t\t\t\t</div> \t  \t\t    \t
\t\t\t\t\t<div class='col-md-10'> \t  \t  
\t\t\t\t    \t";
        // line 86
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "title", array()), 'widget');
        echo "
\t\t\t\t\t</div> \t  \t
\t\t\t\t</div>
\t\t\t\t

 \t\t\t\t<div class='row'>\t
\t\t\t\t\t<div class='col-md-2'> \t  \t  
\t\t\t\t    \t";
        // line 93
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "weight", array()), 'label');
        echo "
\t\t\t\t\t</div> \t  \t\t    \t
\t\t\t\t\t<div class='col-md-4'> \t  \t  
\t\t\t\t    \t";
        // line 96
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "weight", array()), 'widget');
        echo "
\t\t\t\t\t</div> \t  \t

\t\t\t\t\t<div class='col-md-2'> \t  \t  
\t\t\t\t    \t";
        // line 100
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "deadline", array()), 'label');
        echo "
\t\t\t\t\t</div> \t  \t\t    \t
\t\t\t\t\t<div class='col-md-4'> \t  \t  
\t\t\t\t    \t";
        // line 103
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "deadline", array()), 'widget');
        echo "
\t\t\t\t\t</div> \t  \t
\t\t\t\t</div>\t\t\t\t         


\t\t</fieldset>\t
\t\t
        \t<!--
            ";
        // line 111
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "title", array()), 'row', array("label" => "Titre"));
        echo "
            ";
        // line 112
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "weight", array()), 'row', array("label" => "Coefficient", "required" => false));
        echo "
            ";
        // line 113
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "deadline", array()), 'row', array("label" => "Deadline"));
        echo "
            -->
        ";
    }

    public function getTemplateName()
    {
        return "IfeAloesBundle:Topic:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  320 => 113,  316 => 112,  312 => 111,  301 => 103,  295 => 100,  288 => 96,  282 => 93,  272 => 86,  266 => 83,  261 => 80,  258 => 79,  248 => 73,  245 => 72,  239 => 68,  236 => 67,  228 => 62,  218 => 55,  212 => 52,  202 => 45,  196 => 42,  190 => 39,  184 => 36,  175 => 30,  169 => 27,  161 => 22,  154 => 18,  150 => 17,  144 => 15,  141 => 14,  132 => 8,  127 => 7,  106 => 5,  33 => 118,  31 => 5,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'IfeAloesBundle:Course:layout.html.twig' %}*/
/* */
/* {% block content -%}*/
/* */
/*     {% embed 'IfeAloesBundle:Aloes:edit-general-item.html.twig' with {'children':edit_form.assessments} %}*/
/* */
/*         {% block parent_title %} */
/*   		<div class='title-one'> {{ course.title }} </div>*/
/*     	<div class='title-two'> Séquences & Evaluations : Edition</div>    	*/
/*         */
/* */
/*         {% endblock %}*/
/* */
/*         {% block parent_form %}*/
/* 			{{ tinymce_init() }} */
/* */
/* 	 		{{ form_stylesheet(edit_form) }}*/
/*     		{{ form_javascript(edit_form) }}			*/
/* 			*/
/* 			<div class="container-fluid">*/
/* */
/*             {{ form_start(edit_form) }}*/
/* */
/* 			<fieldset>	            */
/*  				<div class='row'>	*/
/* 					<div class='col-md-2'> 	  	  */
/* 				    	{{ form_label(edit_form.title) }}*/
/* 					</div> 	  		    	*/
/* 					<div class='col-md-10'> 	  	  */
/* 				    	{{ form_widget(edit_form.title) }}*/
/* 					</div> 	  	*/
/* 				</div>   */
/* 				*/
/*  				<div class='row'>	*/
/* 					<div class='col-md-2'> 	  	  */
/* 				    	{{ form_label(edit_form.startDate) }}*/
/* 					</div> 	  		    	*/
/* 					<div class='col-md-4'> 	  	  */
/* 				    	{{ form_widget(edit_form.startDate) }}*/
/* 					</div> 	  	*/
/* 					<div class='col-md-2'> 	  	  */
/* 				    	{{ form_label(edit_form.endDate) }}*/
/* 					</div> 	  		    	*/
/* 					<div class='col-md-4'> 	  	  */
/* 				    	{{ form_widget(edit_form.endDate) }}*/
/* 					</div> 						*/
/* 					*/
/* 				</div> 				*/
/* */
/*  				<div class='row'>	*/
/* 					<div class='col-md-2'> 	  	  */
/* 				    	{{ form_label(edit_form.description) }}*/
/* 					</div> 	  		    	*/
/* 					<div class='col-md-10'> 	  	  */
/* 				    	{{ form_widget(edit_form.description) }}*/
/* 					</div> 	  	*/
/* 				</div> */
/* */
/* */
/* 			</fieldset>	*/
/* */
/* 			{{ form_widget(edit_form._token) }}*/
/* 	            */
/*             </div>*/
/*         {% endblock %}*/
/* */
/*         {% block children_title %}*/
/*             <h4>Travail à réaliser</h4>*/
/*             (*) Coefficient (poids relatif de l'évaluation dans la note finale)*/
/*         {% endblock %} */
/* */
/*         {% block back_to_index %}*/
/*             <a href="{{ path('course_assessment', {id:course.id}) }}">*/
/*                 <span class="glyphicon glyphicon-arrow-left"></span>*/
/*                 Retour à la liste des séquences */
/*             </a>*/
/*         {% endblock %}*/
/* */
/*         {% block child_form %}*/
/* 		<fieldset>	*/
/*  				<div class='row'>	*/
/* 					<div class='col-md-2'> 	  	  */
/* 				    	{{ form_label(child.title) }}*/
/* 					</div> 	  		    	*/
/* 					<div class='col-md-10'> 	  	  */
/* 				    	{{ form_widget(child.title) }}*/
/* 					</div> 	  	*/
/* 				</div>*/
/* 				*/
/* */
/*  				<div class='row'>	*/
/* 					<div class='col-md-2'> 	  	  */
/* 				    	{{ form_label(child.weight) }}*/
/* 					</div> 	  		    	*/
/* 					<div class='col-md-4'> 	  	  */
/* 				    	{{ form_widget(child.weight) }}*/
/* 					</div> 	  	*/
/* */
/* 					<div class='col-md-2'> 	  	  */
/* 				    	{{ form_label(child.deadline) }}*/
/* 					</div> 	  		    	*/
/* 					<div class='col-md-4'> 	  	  */
/* 				    	{{ form_widget(child.deadline) }}*/
/* 					</div> 	  	*/
/* 				</div>				         */
/* */
/* */
/* 		</fieldset>	*/
/* 		*/
/*         	<!--*/
/*             {{ form_row(child.title, {'label':'Titre'}) }}*/
/*             {{ form_row(child.weight, {'label':'Coefficient', required:false}) }}*/
/*             {{ form_row(child.deadline, {'label':'Deadline'}) }}*/
/*             -->*/
/*         {% endblock %}*/
/* */
/*     {% endembed %}*/
/*    */
/* 	*/
/* 	<input id="datepicker" type="text">*/
/* 	*/
/* 	<p id="dateoutput"></p>*/
/* 	<script>*/
/* 		/**/
/* 		 * jQuery UI Datepicker: Parse and Format Dates*/
/* 		 * http://salman-w.blogspot.com/2013/01/jquery-ui-datepicker-examples.html*/
/* 		 *//* */
/* 		$(function() {*/
/* 			$("#datepicker").datepicker({*/
/* 				dateFormat: "dd-mm-yy",*/
/* 				onSelect: function(dateText, inst) {*/
/* 					var date = $.datepicker.parseDate(inst.settings.dateFormat || $.datepicker._defaults.dateFormat, dateText, inst.settings);*/
/* 					var dateText1 = $.datepicker.formatDate("D, d M yy", date, inst.settings);*/
/* 					date.setDate(date.getDate() + 7);*/
/* 					var dateText2 = $.datepicker.formatDate("D, d M yy", date, inst.settings);*/
/* 					$("#dateoutput").html("Chosen date is <b>" + dateText1 + "</b>; chosen date + 7 days yields <b>" + dateText2 + "</b>");*/
/* 				}*/
/* 			});*/
/* 		});*/
/* 	</script>*/
/* 	   */
/*     */
/* <!--    */
/* 	<div id="sandbox-container" class="span5 col-md-5">*/
/* 		<input class="form-control" type="text"> */
/* 	</div> */
/* */
/* 	<script>*/
/* 	 $(function () {	    */
/* 			$('#sandbox-container input').multiDatesPicker({*/
/* 			      multidate: true*/
/* 			}).on('changeDate', function(e){*/
/* 			    alert("TOTO"); */
/* 			     */
/* 			});	 */
/* 			*/
/* 			   	     */
/*      });	    */
/* 	</script>*/
/* -->    */
/*     */
/* */
/* {% endblock %}*/
/* */
