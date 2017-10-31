<?php

/* IfeAloesBundle:Topic2:delAjaxTopic.html.twig */
class __TwigTemplate_accd30cde11719f172d1b924c49952f78e9d5098a4e36db0f7d8d455e45092df extends Twig_Template
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
        echo "<div class=\"modal-header color1\"> 
\t<b>Suppression séquence </b><button type=\"button\" id=\"close\"  class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
</div> 

<div id=\"modal-body\" class=\"modal-body\" >

    Etes-vous sûr de vouloir supprimer définitivement le(s) enregistrement(s) suivant  ?
    <br/> 
    <br/>Séquence : 
    <br/>- ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "title", array()), "html", null, true);
        echo "  

\t<br/>\t
\t<br/>


\t";
        // line 16
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "assessments", array())) > 0)) {
            // line 17
            echo "\t\t\tTravaux : <br/>
\t\t\t";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "assessments", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["wk"]) {
                // line 19
                echo "\t\t\t    - ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["wk"], "title", array()), "html", null, true);
                echo "<br/>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['wk'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "    \t\t
\t";
        }
        // line 21
        echo "    
\t
\t<br/>\t
\t<br/>


\t";
        // line 27
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "events", array())) > 0)) {
            // line 28
            echo "\t\t\tEvènements : <br/>
\t\t\t";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "events", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["ev"]) {
                // line 30
                echo "\t\t\t    - ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["ev"], "title", array()), "html", null, true);
                echo "<br/>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ev'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "    \t\t
\t";
        }
        // line 32
        echo "   \t\t
\t    
    ";
        // line 34
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
\t<hr/>
    ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), "delete", array()), 'widget');
        echo "
      
    ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), "nodelete", array()), 'widget');
        echo "
      
    ";
        // line 40
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
    
\t<script type=\"text/javascript\">

\t\t\t\$(\"#form_delete\").click(function() {

\t\t\t\t\t\$.ajax({ 
\t\t\t\t\t\t\ttype: \"POST\",\t\t\t\t\t\t
\t\t\t\t\t\t\turl: \"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("topic_delete2", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\",\t\t\t\t\t 
\t\t\t\t\t\t\tdataType : 'json',\t\t\t\t \t\t\t\t\t\t\t\t
\t\t\t\t\t\t\tcache: false, 
\t\t\t\t\t\t\tsuccess: function(data) 
\t\t\t\t\t\t\t\t{ 
\t\t\t\t\t\t\t\tif (data.result==false)\t\t\t\t\t  
\t\t\t\t\t\t\t\t\t\$(\"#modal-content\").empty().append(data.content);  
\t\t\t\t\t\t\t\telse
\t\t\t\t\t\t\t\t\t{\t\t\t
\t\t\t\t\t\t\t\t\t\$( \"#TO_";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "\" ).remove();\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\$(\"#general-item-weight\").empty().append(progress_bar(data.sum,'info'));
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\$('#myModal').modal('hide');\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t}   
\t\t\t\t\t\t\t\t}    \t\t
\t\t\t\t\t});\t               \t\t\t\t 
\t\t\t\t\treturn false;\t\t
\t\t\t});\t\t\t
\t\t\t 
\t\t\t\$(\"#form_nodelete\").click(function() {
\t\t\t\t\$('#myModal').modal('hide');\t         \t\t\t\t 
\t\t\t\treturn false;\t\t\t\t\t\t\t
\t\t\t});\t\t

\t</script>
</div> 
";
    }

    public function getTemplateName()
    {
        return "IfeAloesBundle:Topic2:delAjaxTopic.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 57,  121 => 48,  110 => 40,  105 => 38,  100 => 36,  95 => 34,  91 => 32,  87 => 31,  78 => 30,  74 => 29,  71 => 28,  69 => 27,  61 => 21,  57 => 20,  48 => 19,  44 => 18,  41 => 17,  39 => 16,  30 => 10,  19 => 1,);
    }
}
/* <div class="modal-header color1"> */
/* 	<b>Suppression séquence </b><button type="button" id="close"  class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>*/
/* </div> */
/* */
/* <div id="modal-body" class="modal-body" >*/
/* */
/*     Etes-vous sûr de vouloir supprimer définitivement le(s) enregistrement(s) suivant  ?*/
/*     <br/> */
/*     <br/>Séquence : */
/*     <br/>- {{ entity.title }}  */
/* */
/* 	<br/>	*/
/* 	<br/>*/
/* */
/* */
/* 	{% if entity.assessments|length > 0 %}*/
/* 			Travaux : <br/>*/
/* 			{% for wk in entity.assessments %}*/
/* 			    - {{ wk.title }}<br/>*/
/* 			{% endfor %}    		*/
/* 	{% endif %}    */
/* 	*/
/* 	<br/>	*/
/* 	<br/>*/
/* */
/* */
/* 	{% if entity.events|length > 0 %}*/
/* 			Evènements : <br/>*/
/* 			{% for ev in entity.events %}*/
/* 			    - {{ ev.title }}<br/>*/
/* 			{% endfor %}    		*/
/* 	{% endif %}   		*/
/* 	    */
/*     {{ form_start(delete_form) }}*/
/* 	<hr/>*/
/*     {{ form_widget(delete_form.delete) }}*/
/*       */
/*     {{ form_widget(delete_form.nodelete) }}*/
/*       */
/*     {{ form_end(delete_form) }}*/
/*     */
/* 	<script type="text/javascript">*/
/* */
/* 			$("#form_delete").click(function() {*/
/* */
/* 					$.ajax({ */
/* 							type: "POST",						*/
/* 							url: "{{ path("topic_delete2", {id:entity.id}) }}",					 */
/* 							dataType : 'json',				 								*/
/* 							cache: false, */
/* 							success: function(data) */
/* 								{ */
/* 								if (data.result==false)					  */
/* 									$("#modal-content").empty().append(data.content);  */
/* 								else*/
/* 									{			*/
/* 									$( "#TO_{{entity.id}}" ).remove();									*/
/* 										*/
/* 									$("#general-item-weight").empty().append(progress_bar(data.sum,'info'));*/
/* 										*/
/* 									$('#myModal').modal('hide');							*/
/* 									}   */
/* 								}    		*/
/* 					});	               				 */
/* 					return false;		*/
/* 			});			*/
/* 			 */
/* 			$("#form_nodelete").click(function() {*/
/* 				$('#myModal').modal('hide');	         				 */
/* 				return false;							*/
/* 			});		*/
/* */
/* 	</script>*/
/* </div> */
/* */
