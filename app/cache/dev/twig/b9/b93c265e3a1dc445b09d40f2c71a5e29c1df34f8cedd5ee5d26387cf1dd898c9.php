<?php

/* IfeAloesBundle:Tableaux:travaux.html.twig */
class __TwigTemplate_206fcc3a4d0d7859ed498dbe05be54ad7b7ec18c5067a3a59403f66eece215c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ifealoes/fullcalendar/css/fullcalendar.min.css"), "html", null, true);
        echo "\" rel='stylesheet' />

<script src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ifealoes/fullcalendar/js/moment.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ifealoes/fullcalendar/js/fullcalendar.min.js"), "html", null, true);
        echo "\"></script>\t
    
    
         
\t  
\t<style>      
\t\t#calendar { 
\t\t\tmax-width: 95%;
\t\t\tmargin: 0 auto;
\t\t}\t  
\t\t.fc-event {
\t\t    font-size: 0.8em;
\t\t    font-weight: normal;
\t\t    line-height: 1.2;
\t\t}

\t</style>
\t \t     

<script type='text/javascript'>
\t\t\$(document).ready(function() {
\t\t\t
\t\t\t\$('#calendar').fullCalendar({
\t\t\t\theader: {
\t\t\t\tleft: 'prev,next today',
\t\t\t\tcenter: 'title',
\t\t\t\tright: 'month,basicWeek,basicDay'
\t\t\t\t},
\t\t\t\t
\t\t        eventRender: function(event, element) {
\t\t          \$(element).popover({title: event.title, content: event.description, placement:\"auto\",html:true,animation : 'true'});             
\t\t        },\t\t\t 
\t\t\t\teditable: false,
\t\t\t\teventLimit: false, 
\t\t\t\tevents: [
\t\t\t\t
\t\t\t\t\t\t";
        // line 40
        $context["color"] = "red";
        // line 41
        echo "             
\t\t\t\t\t\t";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["liste_travaux"]) ? $context["liste_travaux"] : $this->getContext($context, "liste_travaux")));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 43
            echo "\t\t\t
\t\t
\t\t\t\t\t\t\t\t";
            // line 45
            $context["color"] = $this->getAttribute($context["value"], "color", array());
            echo "\t\t
\t\t\t\t\t\t
\t\t\t\t \t\t\t\t";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["value"], "assessments", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["assessment"]) {
                // line 48
                echo "\t\t\t\t\t\t\t\t\t\t{\t\t\t\t        
\t\t\t\t    \t\t\t\t\ttitle:  '[";
                // line 49
                echo twig_escape_filter($this->env, ($this->getAttribute($context["assessment"], "weight", array()) * 100), "html", null, true);
                echo "%] ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["value"], "course", array()), "label", array()), "html", null, true);
                echo " ',
\t\t\t\t    \t\t\t\t\tdescription:  '";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute($context["assessment"], "title", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["assessment"], "description", array()), "html", null, true);
                echo "',
\t\t\t\t    \t\t\t\t\tstart:  '";
                // line 51
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["assessment"], "deadline", array()), "Y-m-d"), "html", null, true);
                echo "',
\t\t\t\t    \t\t\t\t\tend:  \t'";
                // line 52
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["assessment"], "deadline", array()), "Y-m-d"), "html", null, true);
                echo "',
\t\t\t\t\t\t\t\t\t    color: '";
                // line 53
                echo twig_escape_filter($this->env, (isset($context["color"]) ? $context["color"] : $this->getContext($context, "color")), "html", null, true);
                echo "',   // an option!
\t\t\t\t\t\t\t\t\t    textColor: 'white' // an option!\t\t\t\t    \t\t\t\t\t
\t\t\t\t\t\t\t\t\t}, \t\t\t \t\t\t\t
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['assessment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
 \t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo " \t\t\t
\t\t\t\t]
\t\t\t});
\t\t\t
\t\t});\t
\t</script>\t
\t 
<br/>
\t
<div class='col-sm-12'>

\t<div class='col-sm-6'>
\t\t<div id='calendar'></div> \t   
\t</div>
\t<div class='col-sm-6'>\t
\t\t<ul class=\"nav nav-tabs\">
\t
\t\t  ";
        // line 77
        $context["cpt"] = 0;
        echo "\t
\t\t  ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["liste_travaux"]) ? $context["liste_travaux"] : $this->getContext($context, "liste_travaux")));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 79
            echo "\t\t  \t ";
            if (((isset($context["cpt"]) ? $context["cpt"] : $this->getContext($context, "cpt")) == 0)) {
                // line 80
                echo "\t\t  \t\t<li class=\"active\"><a data-toggle=\"tab\" href=\"#menu";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["value"], "course", array()), "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["value"], "course", array()), "label", array()), "html", null, true);
                echo "<font color=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "color", array()), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-stop\"></font></span></a></li>
\t\t  \t\t";
                // line 81
                $context["cpt"] = 1;
                echo "\t  \t 
\t\t  \t ";
            } else {
                // line 83
                echo "\t\t\t \t<li><a data-toggle=\"tab\" href=\"#menu";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["value"], "course", array()), "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["value"], "course", array()), "label", array()), "html", null, true);
                echo "<font color=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "color", array()), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-stop\"></font></a></li>\t  \t 
\t\t  \t ";
            }
            // line 85
            echo "\t\t  \t 
\t\t  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "\t
\t\t</ul>



\t\t<div class=\"tab-content\"  style=\"border-left:1px solid #ddd ;border-right:1px solid #ddd ;border-bottom:1px solid #ddd ;padding:15px;\">
\t
\t\t  ";
        // line 94
        $context["cpt"] = 0;
        echo "\t\t
\t\t  ";
        // line 95
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["liste_travaux"]) ? $context["liste_travaux"] : $this->getContext($context, "liste_travaux")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 96
            echo "\t\t  \t ";
            if (((isset($context["cpt"]) ? $context["cpt"] : $this->getContext($context, "cpt")) == 0)) {
                // line 97
                echo "\t\t\t <div id=\"menu";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["value"], "course", array()), "id", array()), "html", null, true);
                echo "\" class=\"tab-pane fade in active\">
\t\t  \t\t";
                // line 98
                $context["cpt"] = 1;
                echo "\t  \t 
\t\t  \t ";
            } else {
                // line 100
                echo "\t\t\t <div id=\"menu";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["value"], "course", array()), "id", array()), "html", null, true);
                echo "\" class=\"tab-pane fade\">  \t 
\t\t  \t ";
            }
            // line 102
            echo "\t\t\t\t
\t\t\t\t";
            // line 103
            $this->loadTemplate("IfeAloesBundle:Tableaux:trav_cours.html.twig", "IfeAloesBundle:Tableaux:travaux.html.twig", 103)->display(array_merge($context, array("course" => $this->getAttribute($context["value"], "course", array()), "color" => $this->getAttribute($context["value"], "color", array()), "assessments" => $this->getAttribute($context["value"], "assessments", array()))));
            // line 104
            echo "\t\t\t\t\t  
\t\t  \t </div>\t  
\t\t  \t\t
\t\t  ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 107
        echo "\t\t  \t\t
\t\t
\t\t</div>
\t</div>\t

</div>

\t";
    }

    public function getTemplateName()
    {
        return "IfeAloesBundle:Tableaux:travaux.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  263 => 107,  246 => 104,  244 => 103,  241 => 102,  235 => 100,  230 => 98,  225 => 97,  222 => 96,  205 => 95,  201 => 94,  192 => 87,  185 => 85,  175 => 83,  170 => 81,  161 => 80,  158 => 79,  154 => 78,  150 => 77,  131 => 60,  123 => 57,  113 => 53,  109 => 52,  105 => 51,  99 => 50,  93 => 49,  90 => 48,  86 => 47,  81 => 45,  77 => 43,  73 => 42,  70 => 41,  68 => 40,  29 => 4,  25 => 3,  19 => 1,);
    }
}
/* <link href="{{asset('bundles/ifealoes/fullcalendar/css/fullcalendar.min.css')}}" rel='stylesheet' />*/
/* */
/* <script src="{{asset('bundles/ifealoes/fullcalendar/js/moment.min.js')}}"></script>*/
/* <script src="{{asset('bundles/ifealoes/fullcalendar/js/fullcalendar.min.js')}}"></script>	*/
/*     */
/*     */
/*          */
/* 	  */
/* 	<style>      */
/* 		#calendar { */
/* 			max-width: 95%;*/
/* 			margin: 0 auto;*/
/* 		}	  */
/* 		.fc-event {*/
/* 		    font-size: 0.8em;*/
/* 		    font-weight: normal;*/
/* 		    line-height: 1.2;*/
/* 		}*/
/* */
/* 	</style>*/
/* 	 	     */
/* */
/* <script type='text/javascript'>*/
/* 		$(document).ready(function() {*/
/* 			*/
/* 			$('#calendar').fullCalendar({*/
/* 				header: {*/
/* 				left: 'prev,next today',*/
/* 				center: 'title',*/
/* 				right: 'month,basicWeek,basicDay'*/
/* 				},*/
/* 				*/
/* 		        eventRender: function(event, element) {*/
/* 		          $(element).popover({title: event.title, content: event.description, placement:"auto",html:true,animation : 'true'});             */
/* 		        },			 */
/* 				editable: false,*/
/* 				eventLimit: false, */
/* 				events: [*/
/* 				*/
/* 						{% set color= "red" %}*/
/*              */
/* 						{% for value in liste_travaux						%}*/
/* 			*/
/* 		*/
/* 								{% set color= value.color					%}		*/
/* 						*/
/* 				 				{% for assessment in value.assessments			%}*/
/* 										{				        */
/* 				    					title:  '[{{assessment.weight*100}}%] {{value.course.label}} ',*/
/* 				    					description:  '{{assessment.title}} {{assessment.description}}',*/
/* 				    					start:  '{{assessment.deadline|date("Y-m-d") }}',*/
/* 				    					end:  	'{{assessment.deadline|date("Y-m-d") }}',*/
/* 									    color: '{{color}}',   // an option!*/
/* 									    textColor: 'white' // an option!				    					*/
/* 									}, 			 				*/
/* 								{% endfor										%}*/
/* 								*/
/* 								*/
/*  						{% endfor										%}*/
/*  			*/
/* 				]*/
/* 			});*/
/* 			*/
/* 		});	*/
/* 	</script>	*/
/* 	 */
/* <br/>*/
/* 	*/
/* <div class='col-sm-12'>*/
/* */
/* 	<div class='col-sm-6'>*/
/* 		<div id='calendar'></div> 	   */
/* 	</div>*/
/* 	<div class='col-sm-6'>	*/
/* 		<ul class="nav nav-tabs">*/
/* 	*/
/* 		  {% set cpt=0 %}	*/
/* 		  {% for value in liste_travaux 															%}*/
/* 		  	 {% if cpt==0 %}*/
/* 		  		<li class="active"><a data-toggle="tab" href="#menu{{value.course.id}}">{{value.course.label}}<font color="{{value.color}}"><span class="glyphicon glyphicon-stop"></font></span></a></li>*/
/* 		  		{% set cpt = 1 %}	  	 */
/* 		  	 {% else     %}*/
/* 			 	<li><a data-toggle="tab" href="#menu{{value.course.id}}">{{value.course.label}}<font color="{{value.color}}"><span class="glyphicon glyphicon-stop"></font></a></li>	  	 */
/* 		  	 {% endif    %}*/
/* 		  	 */
/* 		  {% endfor 																				%}*/
/* 	*/
/* 		</ul>*/
/* */
/* */
/* */
/* 		<div class="tab-content"  style="border-left:1px solid #ddd ;border-right:1px solid #ddd ;border-bottom:1px solid #ddd ;padding:15px;">*/
/* 	*/
/* 		  {% set cpt=0 %}		*/
/* 		  {% for value in liste_travaux 															%}*/
/* 		  	 {% if cpt==0 %}*/
/* 			 <div id="menu{{value.course.id}}" class="tab-pane fade in active">*/
/* 		  		{% set cpt = 1 %}	  	 */
/* 		  	 {% else     %}*/
/* 			 <div id="menu{{value.course.id}}" class="tab-pane fade">  	 */
/* 		  	 {% endif    %}*/
/* 				*/
/* 				{% include "IfeAloesBundle:Tableaux:trav_cours.html.twig" with {"course": value.course,"color": value.color,"assessments": value.assessments} %}*/
/* 					  */
/* 		  	 </div>	  */
/* 		  		*/
/* 		  {% endfor 																			%}		  		*/
/* 		*/
/* 		</div>*/
/* 	</div>	*/
/* */
/* </div>*/
/* */
/* 	*/
