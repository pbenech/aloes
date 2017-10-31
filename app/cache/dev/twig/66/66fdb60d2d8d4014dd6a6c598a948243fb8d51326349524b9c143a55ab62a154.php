<?php

/* IfeAloesBundle:Topic2:form3.html.twig */
class __TwigTemplate_33e113934bfe1daea9c34ea7d4974c8344d3d441e0d464ba9391f307df36bd31 extends Twig_Template
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
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ifealoes/js/jquery.min.js"), "html", null, true);
        echo "\"></script>    
    
\t<link rel=\"stylesheet\" href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ifealoes/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\">                                       
    <script src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ifealoes/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

        
\t <script type='text/javascript'>
\t  \$(document).ready(function() { 
\t    \$('#previous').click(function() {
 \t\t
 \t\t
\t \t\tvar data = \$('#aloes_topic_form3').serialize() \t\t
 \t\t
\t\t    \$.ajax({
\t\t        url: '";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_topic22_create", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
        echo "',
\t\t        type: 'POST',
\t\t        //dataType   : 'json',\t        
\t\t        data: data,
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
\t\t
\t<span class=\"label label-default\">1. Général</span>
\t<span class=\"label label-default\">2. Propositions dates</span>
\t<span class=\"label label-primary\">3. Titres</span>
<br/>


\t";
        // line 39
        echo $this->env->getExtension('stfalcon_tinymce')->tinymceInit();
        echo " 


\t<form  id=\"aloes_topic_form3\" class=\"form-inline\" action=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_topic24_create", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
        echo "\"  method=\"post\">
\t
\t \t\t\t <div class=\"col-md-12 col-sm-12\">
\t\t          \t<hr/>
      \t\t\t </div>\t\t
\t\t
        ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "topics", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["topic"]) {
            // line 49
            echo "\t 
\t \t\t\t <div class=\"col-sm-12\">
\t \t\t\t \t<div class=\"col-sm-3\">
\t \t\t\t \t
\t \t\t\t \t\t<span class=\"glyphicon glyphicon-menu-right\"></span>
\t \t\t\t \t\t 
\t\t\t\t\t\t";
            // line 55
            $context["year1"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["topic"], "startDate", array()), "vars", array()), "value", array()), "date", array()), "year", array());
            // line 56
            echo "\t\t\t\t\t\t";
            $context["month1"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["topic"], "startDate", array()), "vars", array()), "value", array()), "date", array()), "month", array());
            // line 57
            echo "\t\t\t\t\t\t";
            $context["day1"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["topic"], "startDate", array()), "vars", array()), "value", array()), "date", array()), "day", array());
            // line 58
            echo "\t\t\t\t\t\t";
            $context["day1"] = (((((isset($context["day1"]) ? $context["day1"] : $this->getContext($context, "day1")) . "/") . (isset($context["month1"]) ? $context["month1"] : $this->getContext($context, "month1"))) . "/") . (isset($context["year1"]) ? $context["year1"] : $this->getContext($context, "year1")));
            // line 59
            echo "\t\t\t\t\t\t";
            $context["year2"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["topic"], "endDate", array()), "vars", array()), "value", array()), "date", array()), "year", array());
            // line 60
            echo "\t\t\t\t\t\t";
            $context["month2"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["topic"], "endDate", array()), "vars", array()), "value", array()), "date", array()), "month", array());
            // line 61
            echo "\t\t\t\t\t\t";
            $context["day2"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["topic"], "endDate", array()), "vars", array()), "value", array()), "date", array()), "day", array());
            // line 62
            echo "\t\t\t\t\t\t";
            $context["day2"] = (((((isset($context["day2"]) ? $context["day2"] : $this->getContext($context, "day2")) . "/") . (isset($context["month2"]) ? $context["month2"] : $this->getContext($context, "month2"))) . "/") . (isset($context["year2"]) ? $context["year2"] : $this->getContext($context, "year2")));
            // line 63
            echo "\t\t\t\t\t\t
\t\t\t\t\t\t";
            // line 64
            if (((isset($context["day1"]) ? $context["day1"] : $this->getContext($context, "day1")) == (isset($context["day2"]) ? $context["day2"] : $this->getContext($context, "day2")))) {
                // line 65
                echo "\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, (isset($context["day1"]) ? $context["day1"] : $this->getContext($context, "day1")), "html", null, true);
                echo "
\t\t\t\t\t\t";
            } else {
                // line 67
                echo "\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, ((("Du " . (isset($context["day1"]) ? $context["day1"] : $this->getContext($context, "day1"))) . " au ") . (isset($context["day2"]) ? $context["day2"] : $this->getContext($context, "day2"))), "html", null, true);
                echo "
\t\t\t\t\t\t";
            }
            // line 69
            echo "\t\t\t
\t\t\t       \t\t";
            // line 70
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["topic"], "startDate", array()), 'widget');
            echo "
\t\t\t       \t\t";
            // line 71
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["topic"], "endDate", array()), 'widget');
            echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-1\">
\t\t          \t\t";
            // line 74
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["topic"], "title", array()), 'label');
            echo "
\t\t          \t</div>\t\t\t\t\t
\t\t\t\t\t<div class=\"col-sm-8\">
\t\t          \t\t";
            // line 77
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["topic"], "title", array()), 'widget');
            echo "
\t\t          \t\t";
            // line 78
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["topic"], "title", array()), 'errors');
            echo "
\t\t          \t</div>\t
\t\t\t\t  </div>\t

\t \t\t\t <div class=\"col-sm-12\">
\t \t\t\t \t<div class=\"col-sm-6\">
 \t\t\t\t\t  <div class=\"col-sm-12\">
\t\t\t\t\t\t\t<div class=\"col-sm-2\">\t\t
\t\t\t\t\t          \t\tHoraire
\t\t\t\t          \t</div> 
\t\t\t\t\t\t\t<div class=\"col-sm-4\">\t\t
\t\t\t\t\t          \t\t";
            // line 89
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["topic"], "hdeb", array()), 'widget');
            echo " 
\t\t\t\t          \t</div> 
\t\t\t\t\t\t\t<div class=\"col-sm-2\">\t\t
\t\t\t\t\t          \t\tà
\t\t\t\t          \t</div>  
\t\t\t\t\t\t\t<div class=\"col-sm-4\">\t\t
\t\t\t\t\t          \t";
            // line 95
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["topic"], "hfin", array()), 'widget');
            echo "
\t\t\t\t          \t</div>  
\t\t\t\t      </div>      \t
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-sm-3\">
\t\t          \t\t";
            // line 100
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["topic"], "place", array()), 'widget');
            echo "
\t\t          \t\t";
            // line 101
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["topic"], "place", array()), 'errors');
            echo "
\t\t          \t\t";
            // line 102
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["topic"], "fc", array()), 'row');
            echo "
\t\t          \t</div>\t\t\t\t\t
\t\t\t\t\t<div class=\"col-sm-3\">
\t\t          \t\t";
            // line 105
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["topic"], "isFaceToFace", array()), 'widget');
            echo "
\t\t          \t\t";
            // line 106
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["topic"], "isFaceToFace", array()), 'errors');
            echo "
\t\t          \t</div>
\t\t\t\t</div>
\t

\t \t\t\t <div class=\"col-md-12 col-sm-12\">
\t\t          \t<hr/>
      \t\t\t </div>\t
    \t
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['topic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 115
        echo "\t
        
        ";
        // line 117
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "
         
\t  \t<div class='col-sm-12'> 

\t\t\t<a class=\"btn btn-success\"  href=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_topic22_create", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
        echo "\" id=\"previous\"> Précédent </a> \t

    \t    <button type=\"submit\"  class=\"btn btn-success btn\" >Enregistrer</button>          
\t\t\t<a class=\"btn btn-primary\" type=\"button\" href=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_assessment2", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
        echo "\">Annuler</a>\t
\t\t</div>
\t</form> 



 ";
    }

    public function getTemplateName()
    {
        return "IfeAloesBundle:Topic2:form3.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 124,  236 => 121,  229 => 117,  225 => 115,  209 => 106,  205 => 105,  199 => 102,  195 => 101,  191 => 100,  183 => 95,  174 => 89,  160 => 78,  156 => 77,  150 => 74,  144 => 71,  140 => 70,  137 => 69,  131 => 67,  125 => 65,  123 => 64,  120 => 63,  117 => 62,  114 => 61,  111 => 60,  108 => 59,  105 => 58,  102 => 57,  99 => 56,  97 => 55,  89 => 49,  85 => 48,  76 => 42,  70 => 39,  43 => 15,  29 => 4,  25 => 3,  19 => 1,);
    }
}
/*     <script src="{{asset('bundles/ifealoes/js/jquery.min.js')}}"></script>    */
/*     */
/* 	<link rel="stylesheet" href="{{asset('bundles/ifealoes/bootstrap/css/bootstrap.min.css')}}" type="text/css">                                       */
/*     <script src="{{asset('bundles/ifealoes/bootstrap/js/bootstrap.min.js')}}"></script>*/
/* */
/*         */
/* 	 <script type='text/javascript'>*/
/* 	  $(document).ready(function() { */
/* 	    $('#previous').click(function() {*/
/*  		*/
/*  		*/
/* 	 		var data = $('#aloes_topic_form3').serialize() 		*/
/*  		*/
/* 		    $.ajax({*/
/* 		        url: '{{ path('course_topic22_create',{id:course.id}) }}',*/
/* 		        type: 'POST',*/
/* 		        //dataType   : 'json',	        */
/* 		        data: data,*/
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
/* 		*/
/* 		*/
/* 	<span class="label label-default">1. Général</span>*/
/* 	<span class="label label-default">2. Propositions dates</span>*/
/* 	<span class="label label-primary">3. Titres</span>*/
/* <br/>*/
/* */
/* */
/* 	{{ tinymce_init() }} */
/* */
/* */
/* 	<form  id="aloes_topic_form3" class="form-inline" action="{{ path('course_topic24_create',{id:course.id}) }}"  method="post">*/
/* 	*/
/* 	 			 <div class="col-md-12 col-sm-12">*/
/* 		          	<hr/>*/
/*       			 </div>		*/
/* 		*/
/*         {% for topic in form.topics %}*/
/* 	 */
/* 	 			 <div class="col-sm-12">*/
/* 	 			 	<div class="col-sm-3">*/
/* 	 			 	*/
/* 	 			 		<span class="glyphicon glyphicon-menu-right"></span>*/
/* 	 			 		 */
/* 						{% set year1	 =  topic.startDate.vars.value.date.year %}*/
/* 						{% set month1 =  topic.startDate.vars.value.date.month %}*/
/* 						{% set day1 =  topic.startDate.vars.value.date.day %}*/
/* 						{% set day1 = day1~'/'~month1~'/'~year1 %}*/
/* 						{% set year2	 =  topic.endDate.vars.value.date.year %}*/
/* 						{% set month2 =  topic.endDate.vars.value.date.month %}*/
/* 						{% set day2 =  topic.endDate.vars.value.date.day %}*/
/* 						{% set day2 = day2~'/'~month2~'/'~year2 %}*/
/* 						*/
/* 						{% if day1==day2 %}*/
/* 							{{ day1 }}*/
/* 						{% else %}*/
/* 							{{ "Du "~day1~" au "~day2 }}*/
/* 						{% endif %}*/
/* 			*/
/* 			       		{{ form_widget(topic.startDate) }}*/
/* 			       		{{ form_widget(topic.endDate) }}*/
/* 					</div>*/
/* 					<div class="col-sm-1">*/
/* 		          		{{ form_label(topic.title) }}*/
/* 		          	</div>					*/
/* 					<div class="col-sm-8">*/
/* 		          		{{ form_widget(topic.title) }}*/
/* 		          		{{ form_errors(topic.title) }}*/
/* 		          	</div>	*/
/* 				  </div>	*/
/* */
/* 	 			 <div class="col-sm-12">*/
/* 	 			 	<div class="col-sm-6">*/
/*  					  <div class="col-sm-12">*/
/* 							<div class="col-sm-2">		*/
/* 					          		Horaire*/
/* 				          	</div> */
/* 							<div class="col-sm-4">		*/
/* 					          		{{ form_widget(topic.hdeb) }} */
/* 				          	</div> */
/* 							<div class="col-sm-2">		*/
/* 					          		à*/
/* 				          	</div>  */
/* 							<div class="col-sm-4">		*/
/* 					          	{{ form_widget(topic.hfin) }}*/
/* 				          	</div>  */
/* 				      </div>      	*/
/* 					</div> */
/* 					<div class="col-sm-3">*/
/* 		          		{{ form_widget(topic.place) }}*/
/* 		          		{{ form_errors(topic.place) }}*/
/* 		          		{{ form_row(topic.fc) }}*/
/* 		          	</div>					*/
/* 					<div class="col-sm-3">*/
/* 		          		{{ form_widget(topic.isFaceToFace) }}*/
/* 		          		{{ form_errors(topic.isFaceToFace) }}*/
/* 		          	</div>*/
/* 				</div>*/
/* 	*/
/* */
/* 	 			 <div class="col-md-12 col-sm-12">*/
/* 		          	<hr/>*/
/*       			 </div>	*/
/*     	*/
/*         {% endfor %}	*/
/*         */
/*         {{ form_widget(form._token) }}*/
/*          */
/* 	  	<div class='col-sm-12'> */
/* */
/* 			<a class="btn btn-success"  href="{{ path('course_topic22_create',{id:course.id}) }}" id="previous"> Précédent </a> 	*/
/* */
/*     	    <button type="submit"  class="btn btn-success btn" >Enregistrer</button>          */
/* 			<a class="btn btn-primary" type="button" href="{{path('course_assessment2', {id:course.id })}}">Annuler</a>	*/
/* 		</div>*/
/* 	</form> */
/* */
/* */
/* */
/*  */
