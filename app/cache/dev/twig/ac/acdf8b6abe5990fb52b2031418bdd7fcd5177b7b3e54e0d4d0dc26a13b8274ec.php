<?php

/* IfeAloesBundle:Topic2:form2.html.twig */
class __TwigTemplate_7c94f02106ec0f8784129d16dd98a8340ff76b09becf59b2946b488169463af8 extends Twig_Template
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
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ifealoes/fullcalendar/js/moment.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ifealoes/fullcalendar/js/fullcalendar.min.js"), "html", null, true);
        echo "\"></script>\t 

       
<script type='text/javascript'>
\t\t\$(document).ready(function() {
\t\t\t
\t\t\t\$('#calendar').fullCalendar({
\t\t\t\theader: {
\t\t\t\t\tleft: 'prev',
\t\t\t\t\tcenter: 'title',
\t\t\t//\t\tright: 'month,agendaWeek,agendaDay'
\t\t\t\t\tright: 'next'
\t\t\t\t},
\t\t\t//\tdefaultDate: '2016-01-12',
\t\t\t\tselectable: true,
\t\t\t\tselectHelper: true,
\t\t\t\theight: \"auto\",
\t\t\t\t
\t\t\t\t
\t\t\t\teventClick: function(calEvent, jsEvent, view) {
\t\t\t\t    \$('#calendar').fullCalendar('removeEvents', function (event) {
\t\t\t\t        return event == calEvent;
\t\t\t\t    });
\t\t\t\t},\t\t
\t\t\t\tselect: function(start, end) {
\t\t\t\t\t//var title = prompt('Event Title:');
\t\t\t\t\tvar eventData;
\t\t\t\t\t//if (title) {
\t\t\t\t\t\teventData = {
\t\t\t\t\t\t\ttitle: \"\", 
\t\t\t\t\t\t\tstart: start,
\t\t\t\t\t\t\tend: end,
\t\t\t\t\t\t\tfc : Math.random()
\t\t\t\t\t\t}; 
\t\t\t\t\t\t\$('#calendar').fullCalendar('renderEvent', eventData, true); // stick? = true
\t\t\t\t\t//}
\t\t\t\t\t\$('#calendar').fullCalendar('unselect');
\t\t\t\t},
\t\t\t\teditable: true,
\t\t\t\teventLimit: true, // allow \"more\" link when too many events
\t\t\t\tevents: [
\t\t\t\t
\t\t\t\t";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["array_dates"]) ? $context["array_dates"] : $this->getContext($context, "array_dates")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            echo "   
\t\t\t\t\t{\t\t\t\t        
    \t\t\t\t\ttitle:  '',
    \t\t\t\t\tstart:  '";
            // line 47
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "start", array()), "Y-m-d"), "html", null, true);
            echo "',
    \t\t\t\t\tend:  \t'";
            // line 48
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "end", array()), "Y-m-d"), "html", null, true);
            echo "',
    \t\t\t\t\tfc: \t'";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "fc", array()), "html", null, true);
            echo "'
\t\t\t\t\t},    \t\t\t\t\t        
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "\t\t\t\t \t\t\t
\t\t\t\t]
\t\t\t});
\t\t\t
\t\t});\t
\t</script>\t
\t
\t<script type='text/javascript'>
\t  \$(document).ready(function() { 
\t    \$('#next').click(function() {
\t\t\t\t
\t\t\tvar clientevents = \$('#calendar').fullCalendar('clientEvents');
\t
\t\t\tvar clientdata =\"\";
\t\t\t\$cpt =0;
\t\t\tfor (var prop in clientevents) {
\t\t\t\t  console.log(\"obj.\" + prop + \" = \" + clientevents[prop]);
\t\t\t\t  
\t\t\t\t\tfor (var prop2 in clientevents[prop]) {
\t\t\t\t\t\t  console.log(\$cpt +\"--\"+ prop2 + \" = \" + clientevents[prop][prop2]);
\t\t\t\t\t\t  if (prop2!=\"source\")
\t\t\t\t\t\t  clientdata = clientdata + \$cpt +\"__\"+ prop2 + \"=\" + encodeURIComponent(clientevents[prop][prop2])+\"&\";
\t\t\t\t\t\t}\t
\t\t\t\t\t\$cpt++;   
\t\t\t 
\t\t\t}\t
 \t\t
\t\t    \$.ajax({
\t\t        url: '";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_topic23_create", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
        echo "',
\t\t        type: 'POST',
\t\t        //dataType   : 'json',\t        
\t\t        data: clientdata,
\t\t        cache: false,
\t\t        success: function (response) {
\t\t        \t\$(\"#formulaire\").empty().append(response); \t
\t\t        } 
\t
\t\t    });
\t\t    
\t\t\treturn false;
\t
\t    });
\t  });
\t </script> 
 
\t\t
\t<span class=\"label label-default\">1. Général</span>
\t<span class=\"label label-primary\">2. Propositions dates</span>
\t<span class=\"label label-default\">3. Titres</span>
\t<br/>
\t
  \t<div id='calendar'></div> 
  \t 
  \t<div class='col-sm-12'> \t
\t  \t<hr/>
\t  \t\t  \t  \t
\t\t<a class=\"btn btn-success\" href=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_topic21_create", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
        echo "\" id=\"previous\"> Précedent </a>    \t  \t
\t\t<a class=\"btn btn-success\" href=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_topic23_create", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
        echo "\" id=\"next\"> Suivant </a>  \t
\t\t<a class=\"btn btn-primary\" type=\"button\" href=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_assessment2", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
        echo "\">Annuler</a>
\t</div> 


";
    }

    public function getTemplateName()
    {
        return "IfeAloesBundle:Topic2:form2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 110,  159 => 109,  155 => 108,  124 => 80,  94 => 52,  85 => 49,  81 => 48,  77 => 47,  69 => 44,  24 => 2,  19 => 1,);
    }
}
/* <script src="{{asset('bundles/ifealoes/fullcalendar/js/moment.min.js')}}"></script>*/
/* <script src="{{asset('bundles/ifealoes/fullcalendar/js/fullcalendar.min.js')}}"></script>	 */
/* */
/*        */
/* <script type='text/javascript'>*/
/* 		$(document).ready(function() {*/
/* 			*/
/* 			$('#calendar').fullCalendar({*/
/* 				header: {*/
/* 					left: 'prev',*/
/* 					center: 'title',*/
/* 			//		right: 'month,agendaWeek,agendaDay'*/
/* 					right: 'next'*/
/* 				},*/
/* 			//	defaultDate: '2016-01-12',*/
/* 				selectable: true,*/
/* 				selectHelper: true,*/
/* 				height: "auto",*/
/* 				*/
/* 				*/
/* 				eventClick: function(calEvent, jsEvent, view) {*/
/* 				    $('#calendar').fullCalendar('removeEvents', function (event) {*/
/* 				        return event == calEvent;*/
/* 				    });*/
/* 				},		*/
/* 				select: function(start, end) {*/
/* 					//var title = prompt('Event Title:');*/
/* 					var eventData;*/
/* 					//if (title) {*/
/* 						eventData = {*/
/* 							title: "", */
/* 							start: start,*/
/* 							end: end,*/
/* 							fc : Math.random()*/
/* 						}; */
/* 						$('#calendar').fullCalendar('renderEvent', eventData, true); // stick? = true*/
/* 					//}*/
/* 					$('#calendar').fullCalendar('unselect');*/
/* 				},*/
/* 				editable: true,*/
/* 				eventLimit: true, // allow "more" link when too many events*/
/* 				events: [*/
/* 				*/
/* 				{% for entity in array_dates %}   */
/* 					{				        */
/*     					title:  '',*/
/*     					start:  '{{ entity.start|date("Y-m-d") }}',*/
/*     					end:  	'{{ entity.end|date("Y-m-d") }}',*/
/*     					fc: 	'{{ entity.fc }}'*/
/* 					},    					        */
/* 				{% endfor %}*/
/* 				 			*/
/* 				]*/
/* 			});*/
/* 			*/
/* 		});	*/
/* 	</script>	*/
/* 	*/
/* 	<script type='text/javascript'>*/
/* 	  $(document).ready(function() { */
/* 	    $('#next').click(function() {*/
/* 				*/
/* 			var clientevents = $('#calendar').fullCalendar('clientEvents');*/
/* 	*/
/* 			var clientdata ="";*/
/* 			$cpt =0;*/
/* 			for (var prop in clientevents) {*/
/* 				  console.log("obj." + prop + " = " + clientevents[prop]);*/
/* 				  */
/* 					for (var prop2 in clientevents[prop]) {*/
/* 						  console.log($cpt +"--"+ prop2 + " = " + clientevents[prop][prop2]);*/
/* 						  if (prop2!="source")*/
/* 						  clientdata = clientdata + $cpt +"__"+ prop2 + "=" + encodeURIComponent(clientevents[prop][prop2])+"&";*/
/* 						}	*/
/* 					$cpt++;   */
/* 			 */
/* 			}	*/
/*  		*/
/* 		    $.ajax({*/
/* 		        url: '{{ path('course_topic23_create',{id:course.id}) }}',*/
/* 		        type: 'POST',*/
/* 		        //dataType   : 'json',	        */
/* 		        data: clientdata,*/
/* 		        cache: false,*/
/* 		        success: function (response) {*/
/* 		        	$("#formulaire").empty().append(response); 	*/
/* 		        } */
/* 	*/
/* 		    });*/
/* 		    */
/* 			return false;*/
/* 	*/
/* 	    });*/
/* 	  });*/
/* 	 </script> */
/*  */
/* 		*/
/* 	<span class="label label-default">1. Général</span>*/
/* 	<span class="label label-primary">2. Propositions dates</span>*/
/* 	<span class="label label-default">3. Titres</span>*/
/* 	<br/>*/
/* 	*/
/*   	<div id='calendar'></div> */
/*   	 */
/*   	<div class='col-sm-12'> 	*/
/* 	  	<hr/>*/
/* 	  		  	  	*/
/* 		<a class="btn btn-success" href="{{ path('course_topic21_create',{id:course.id}) }}" id="previous"> Précedent </a>    	  	*/
/* 		<a class="btn btn-success" href="{{ path('course_topic23_create',{id:course.id}) }}" id="next"> Suivant </a>  	*/
/* 		<a class="btn btn-primary" type="button" href="{{path('course_assessment2', {id:course.id })}}">Annuler</a>*/
/* 	</div> */
/* */
/* */
/* */
