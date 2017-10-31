<?php

/* IfeAloesBundle:Event2:newAjaxEvt.html.twig */
class __TwigTemplate_5640952f577eda93d45d883a78c59d529c2a112583685488cabb665a1a53281b extends Twig_Template
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
        echo "
<script src=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/stfalcontinymce/vendor/tinymce/jquery.tinymce.min.js"), "html", null, true);
        echo "\"></script> 
<script src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/stfalcontinymce/vendor/tinymce/tinymce.min.js"), "html", null, true);
        echo "\"></script>

<div class=\"modal-header color3\"> 
\t";
        // line 6
        if ((array_key_exists("type", $context) && ((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "new"))) {
            // line 7
            echo "\t\t<b>Créer un évènement</b>
\t";
        } else {
            // line 9
            echo "\t\t<b>Modifier un évènement</b>\t
\t";
        }
        // line 10
        echo "\t\t\t
\t
\t<button type=\"button\" id=\"close\"  class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
</div>

<div id=\"modal-body\" class=\"modal-body\" > 

\t<script type=\"text/javascript\">

  
  \t\t\$('input:text:visible:first').focus();\t

\t\ttinymce.init({
\t\t\t\t\t selector: \"textarea\",\t
  \t\t\t\t\t cache_suffix: '?v=4.1.6',\t\t\t\t\t \t\t 
\t\t\t \t   \t menubar: false,\t\t
\t\t\t \t   \t \"toolbar1\":\"code preview |bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link unlink  \",
//\t\t\t \t   \t \"plugins\":\"link image \"\t\t\t\t\t\t
\t\t\t \t   \t \"plugins\":\"code preview link fullscreen \"\t\t
\t\t\t\t\t });\t\t


\t
\t\t\$(\"#aloes_event2\").submit(function() {\t\t\t           
\t\t\t\t                \t\t\t\t             
\t\t\tdata = \$(this).serialize();\t\t         
\t
\t\t\t\$.ajax({
\t\t\t\t\ttype: \"POST\", 
\t\t\t\t\t";
        // line 39
        if ((array_key_exists("type", $context) && ((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "new"))) {
            echo "\t\t\t\t\t
\t\t\t\t\t\turl: \"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("topic_events_create_2", array("id" => $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "id", array()))), "html", null, true);
            echo "\",
\t\t\t\t\t";
        } elseif ((        // line 41
array_key_exists("type", $context) && ((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "update"))) {
            echo "\t\t\t\t\t
\t\t\t\t\t\turl: \"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("topic_events_update_2", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
            echo "\",\t
\t\t\t\t\t";
        }
        // line 43
        echo "\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\tdata: data,
\t \t\t\t\t//dataType : 'html',\t
\t\t\t\t\tdataType : 'json',\t \t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\tcache: false,
\t\t\t\t\tsuccess: function(data) 
\t\t\t\t\t\t{
\t\t\t\t\t\t";
        // line 50
        if ((array_key_exists("type", $context) && ((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "new"))) {
            echo "\t
\t\t\t\t\t\t\tif (data.result==false)\t\t\t\t\t  
\t\t\t\t\t\t\t\t\$(\"#modal-content\").empty().append(data.content);  
\t\t\t\t\t\t\telse
\t\t\t\t\t\t\t\t{\t\t \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\tvar content = \$(data);

\t\t\t\t\t\t\t\t\$(\"#TO_";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "id", array()), "html", null, true);
            echo "_A_events\").empty().append(data.nb_spec);\t
\t\t\t\t\t\t\t\t//\$(\"#TO_";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "id", array()), "html", null, true);
            echo "_A_weight\").empty().append(progress_bar(data.weight,'success'));
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t\$(\"#ASS2_";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "id", array()), "html", null, true);
            echo "\").append(data.content); 
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\tvar x = data.assessments;
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\$.each( x, function( key, value ) {
\t\t\t\t\t\t\t\t\t\t\tkey \t= value['key'];
\t\t\t\t\t\t\t\t\t\t\tevent \t= value['event'];

\t\t\t\t\t\t\t\t  \$(\"#AS_\"+key+\"_evt\").empty().append(event);
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t});\t\t\t\t \t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\ttinyMCE.remove();  \t
\t\t\t\t\t\t\t\t\$('#myModal').modal('hide');\t\t\t\t\t \t\t\t
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t";
        } elseif ((        // line 76
array_key_exists("type", $context) && ((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "update"))) {
            echo "\t\t
\t\t\t\t\t\t\tif (data.result==false)\t\t\t\t\t  
\t\t\t\t\t\t\t\t\$(\"#modal-content\").empty().append(data.content);  
\t\t\t\t\t\t\telse
\t\t\t\t\t\t\t\t{\t\t  \t\t\t\t\t
\t\t\t\t\t\t\t\t\$(\"#AS2_";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
            echo "\").empty().append(data.content); \t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\tvar x = data.assessments;
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\$.each( x, function( key, value ) {
\t\t\t\t\t\t\t\t\t\t\tkey \t= value['key'];
\t\t\t\t\t\t\t\t\t\t\tevent \t= value['event'];

\t\t\t\t\t\t\t\t  \$(\"#AS_\"+key+\"_evt\").empty().append(event);
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t});\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\ttinyMCE.remove();  \t
\t\t\t\t\t\t\t\t\$('#myModal').modal('hide');\t 
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t";
        }
        // line 96
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t}   
\t\t\t});\t             \t\t\t             \t
\t\t\treturn false;\t\t           \t\t\t\t  
\t
\t\t 
\t\t});
\t\t\t\t\t\t
\t\t
\t\t
\t\t
\t</script>\t \t 

\t<form id=\"aloes_event2\" action=\"\" method=\"post\" ";
        // line 109
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">\t   
\t  <div class=\"row\">    

\t\t";
        // line 112
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "\t
\t\t

\t\t
\t\t  \t\t\t
\t\t<div class='col-sm-12'> \t
\t\t\t<div class='col-sm-2'> \t  \t  
\t\t\t    ";
        // line 119
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'label');
        echo "
\t\t\t</div> \t  \t\t    \t
\t\t\t<div class='col-sm-10'> \t  \t  
\t\t\t    ";
        // line 122
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'widget');
        echo "
\t\t    \t";
        // line 123
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'errors');
        echo "\t
\t\t\t</div> \t  \t
\t\t</div>
  \t\t
\t\t<div class='col-sm-12'> 
\t\t\t<div class='col-sm-2'> \t  \t  
\t\t\t    <b>Date et Heure</b>
\t\t\t</div> \t  \t\t    \t
\t\t\t<div class='col-sm-2'> \t  \t  
\t\t\t    Du
\t\t\t</div> \t
\t\t\t<div class='col-sm-3'> \t  \t  
\t\t\t    ";
        // line 135
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "startDate", array()), 'widget');
        echo "
\t\t    \t";
        // line 136
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "startDate", array()), 'errors');
        echo "\t
\t\t\t</div> \t
\t\t\t<div class='col-sm-2'> \t  \t  
\t\t\t    Au
\t\t\t</div> \t\t\t  \t\t\t
\t\t\t<div class='col-sm-3'> \t  \t  
\t\t\t\t";
        // line 142
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "endDate", array()), 'widget');
        echo "
\t\t    \t";
        // line 143
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "endDate", array()), 'errors');
        echo "\t
\t\t\t</div> \t  
\t\t</div>
 
\t\t<script type=\"text/javascript\">
\t\t\t\$(function() {
\t\t\t    \$('#aloes_event_startDate').datetimepicker({
\t\t                minView: 0, pickTime: false,autoclose: true,format: 'dd/mm/yyyy hh:ii',
\t\t                startDate: \t'";
        // line 151
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "startDate", array()), "d/m/Y G:ii"), "html", null, true);
        echo "',
    \t\t  \t\t    endDate:    '";
        // line 152
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "endDate", array()), "d/m/Y G:ii"), "html", null, true);
        echo "' 
\t\t\t    });
\t\t\t});
\t\t\t
\t\t</script>\t\t\t 
\t\t<script type=\"text/javascript\">
\t\t\t\$(function() {
\t\t\t    \$('#aloes_event_endDate').datetimepicker({
\t\t                minView: 0, pickTime: false,autoclose: true,format: 'dd/mm/yyyy hh:ii',
\t\t                startDate: \t'";
        // line 161
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "startDate", array()), "d/m/Y G:ii"), "html", null, true);
        echo "',
    \t\t  \t\t    endDate:    '";
        // line 162
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "endDate", array()), "d/m/Y G:ii"), "html", null, true);
        echo "'   
\t\t\t    });
\t\t\t}); 
\t\t</script>\t\t
\t\t
\t\t<div class='col-sm-12'> \t\t
\t\t\t<div class='col-sm-2'> \t  \t  
\t\t\t    ";
        // line 169
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contexte", array()), 'label');
        echo "
\t\t\t</div> \t  \t\t    \t
\t\t\t<div class='col-sm-10'> \t  \t  
\t\t\t    ";
        // line 172
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contexte", array()), 'widget');
        echo "
\t\t    \t";
        // line 173
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contexte", array()), 'errors');
        echo "\t
\t\t\t</div> \t 
\t\t</div>\t

\t\t\t\t
\t\t<div class='col-sm-12'> \t\t
\t\t\t<div class='col-sm-2'> \t  \t  
\t\t\t    ";
        // line 180
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'label');
        echo "
\t\t\t</div> \t  \t\t    \t
\t\t\t<div class='col-sm-10'> \t  \t  
\t\t\t    ";
        // line 183
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'widget');
        echo "
\t\t    \t";
        // line 184
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'errors');
        echo "\t
\t\t\t</div> \t 
\t\t</div>\t\t
\t\t
\t\t<div class='col-sm-12'> 
\t\t\t<div class='col-sm-2'> \t  \t  
\t\t\t    ";
        // line 190
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "instructions", array()), 'label');
        echo "
\t\t\t</div> \t  \t\t    \t
\t\t\t<div class='col-sm-10'> \t  \t  
\t\t\t    ";
        // line 193
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "instructions", array()), 'widget');
        echo "
\t\t    \t";
        // line 194
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "instructions", array()), 'errors');
        echo "\t
\t\t\t</div> \t 
\t\t</div>

\t\t<div class='col-sm-12'> 
\t\t\t<div class='col-sm-2'> \t  \t  
\t\t\t    ";
        // line 200
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "resources", array()), 'label');
        echo "
\t\t\t</div> \t  \t\t    \t
\t\t\t<div class='col-sm-10'> \t  \t  
\t\t\t    ";
        // line 203
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "resources", array()), 'widget');
        echo "
\t\t    \t";
        // line 204
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "resources", array()), 'errors');
        echo "\t
\t\t\t</div>
\t\t</div>\t\t \t


\t\t<div class='col-sm-12'> 
\t\t\t<div class='col-sm-2'> \t  \t  
\t\t\t    ";
        // line 211
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "outils", array()), 'label');
        echo "
\t\t\t</div> \t  \t\t    \t
\t\t\t<div class='col-sm-10'> \t  \t  
\t\t\t    ";
        // line 214
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "outils", array()), 'widget');
        echo "
\t\t    \t";
        // line 215
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "outils", array()), 'errors');
        echo "\t
\t\t\t</div>
\t\t</div>\t\t
\t\t
\t\t<div class='col-sm-12'> 
\t\t\t<div class='col-sm-2'> \t  \t  
\t\t\t    ";
        // line 221
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tutoring", array()), 'label');
        echo "
\t\t\t</div> \t  \t\t    \t
\t\t\t<div class='col-sm-10'> \t  \t  
\t\t\t    ";
        // line 224
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tutoring", array()), 'widget');
        echo "
\t\t    \t";
        // line 225
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tutoring", array()), 'errors');
        echo "\t
\t\t\t</div> \t
\t\t</div>

 
\t\t";
        // line 230
        $context["size"] = twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "assessments", array()), "vars", array()), "choices", array()));
        // line 231
        echo "
\t\t";
        // line 232
        if (((isset($context["size"]) ? $context["size"] : $this->getContext($context, "size")) > 0)) {
            // line 233
            echo "\t\t<div class=\"col-sm-12\"> \t\t
\t\t";
        } else {
            // line 235
            echo "\t\t<div class=\"col-sm-12\" style=\"display: none;\"> \t\t\t
\t\t";
        }
        // line 237
        echo "
\t\t\t<div class='col-sm-2'> \t  \t  
\t\t\t    ";
        // line 239
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "assessments", array()), 'label');
        echo "
\t\t\t</div> \t  \t\t    \t
\t\t\t<div class='col-sm-10'> \t  \t  
\t\t\t    ";
        // line 242
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "assessments", array()), 'widget');
        echo "
\t\t    \t";
        // line 243
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "assessments", array()), 'errors');
        echo "\t
\t\t\t</div>
\t\t</div>\t\t \t
\t\t
\t\t";
        // line 247
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
\t\t\t
\t\t<hr/>  
\t\t<div class=\"col-sm-12\">\t\t 
\t   \t\t<button class=\"btn btn-color3\" type=\"submit\"><i class=\"icon icon-check icon-lg\"></i> Enregistrer</button>
    \t\t<button class=\"btn btn-inverse\" type=\"button\" data-dismiss=\"modal\"><i class=\"icon icon-times icon-lg\"></i> Fermer</button>\t \t   
  \t \t\t
 \t\t</div>\t\t
\t  </div>
\t</form> 

</div>";
    }

    public function getTemplateName()
    {
        return "IfeAloesBundle:Event2:newAjaxEvt.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  429 => 247,  422 => 243,  418 => 242,  412 => 239,  408 => 237,  404 => 235,  400 => 233,  398 => 232,  395 => 231,  393 => 230,  385 => 225,  381 => 224,  375 => 221,  366 => 215,  362 => 214,  356 => 211,  346 => 204,  342 => 203,  336 => 200,  327 => 194,  323 => 193,  317 => 190,  308 => 184,  304 => 183,  298 => 180,  288 => 173,  284 => 172,  278 => 169,  268 => 162,  264 => 161,  252 => 152,  248 => 151,  237 => 143,  233 => 142,  224 => 136,  220 => 135,  205 => 123,  201 => 122,  195 => 119,  185 => 112,  179 => 109,  164 => 96,  145 => 81,  137 => 76,  119 => 61,  113 => 58,  109 => 57,  99 => 50,  90 => 43,  85 => 42,  81 => 41,  77 => 40,  73 => 39,  42 => 10,  38 => 9,  34 => 7,  32 => 6,  26 => 3,  22 => 2,  19 => 1,);
    }
}
/* */
/* <script src="{{asset('bundles/stfalcontinymce/vendor/tinymce/jquery.tinymce.min.js')}}"></script> */
/* <script src="{{asset('bundles/stfalcontinymce/vendor/tinymce/tinymce.min.js')}}"></script>*/
/* */
/* <div class="modal-header color3"> */
/* 	{% if type is defined and type=="new" %}*/
/* 		<b>Créer un évènement</b>*/
/* 	{% else %}*/
/* 		<b>Modifier un évènement</b>	*/
/* 	{% endif%}			*/
/* 	*/
/* 	<button type="button" id="close"  class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>*/
/* </div>*/
/* */
/* <div id="modal-body" class="modal-body" > */
/* */
/* 	<script type="text/javascript">*/
/* */
/*   */
/*   		$('input:text:visible:first').focus();	*/
/* */
/* 		tinymce.init({*/
/* 					 selector: "textarea",	*/
/*   					 cache_suffix: '?v=4.1.6',					 		 */
/* 			 	   	 menubar: false,		*/
/* 			 	   	 "toolbar1":"code preview |bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link unlink  ",*/
/* //			 	   	 "plugins":"link image "						*/
/* 			 	   	 "plugins":"code preview link fullscreen "		*/
/* 					 });		*/
/* */
/* */
/* 	*/
/* 		$("#aloes_event2").submit(function() {			           */
/* 				                				             */
/* 			data = $(this).serialize();		         */
/* 	*/
/* 			$.ajax({*/
/* 					type: "POST", */
/* 					{% if type is defined and type=="new" %}					*/
/* 						url: "{{ path("topic_events_create_2", {id:parent.id}) }}",*/
/* 					{% elseif type is defined and type=="update" %}					*/
/* 						url: "{{ path("topic_events_update_2", {id:entity.id}) }}",	*/
/* 					{% endif %}											*/
/* 					data: data,*/
/* 	 				//dataType : 'html',	*/
/* 					dataType : 'json',	 												*/
/* 					cache: false,*/
/* 					success: function(data) */
/* 						{*/
/* 						{% if type is defined and type=="new" %}	*/
/* 							if (data.result==false)					  */
/* 								$("#modal-content").empty().append(data.content);  */
/* 							else*/
/* 								{		 																*/
/* 								var content = $(data);*/
/* */
/* 								$("#TO_{{parent.id}}_A_events").empty().append(data.nb_spec);	*/
/* 								//$("#TO_{{parent.id}}_A_weight").empty().append(progress_bar(data.weight,'success'));*/
/* 								*/
/* 								  */
/* 								$("#ASS2_{{parent.id}}").append(data.content); */
/* 								*/
/* 								var x = data.assessments;*/
/* 										*/
/* 								$.each( x, function( key, value ) {*/
/* 											key 	= value['key'];*/
/* 											event 	= value['event'];*/
/* */
/* 								  $("#AS_"+key+"_evt").empty().append(event);*/
/* 																*/
/* 								});				 					*/
/* 								*/
/* 								tinyMCE.remove();  	*/
/* 								$('#myModal').modal('hide');					 			*/
/* 								}*/
/* 						{% elseif type is defined and type=="update" %}		*/
/* 							if (data.result==false)					  */
/* 								$("#modal-content").empty().append(data.content);  */
/* 							else*/
/* 								{		  					*/
/* 								$("#AS2_{{entity.id}}").empty().append(data.content); 	*/
/* 								*/
/* 								var x = data.assessments;*/
/* 										*/
/* 								$.each( x, function( key, value ) {*/
/* 											key 	= value['key'];*/
/* 											event 	= value['event'];*/
/* */
/* 								  $("#AS_"+key+"_evt").empty().append(event);*/
/* 																*/
/* 								});										*/
/* 								*/
/* 								tinyMCE.remove();  	*/
/* 								$('#myModal').modal('hide');	 */
/* 								}*/
/* 						{% endif 																							%}																*/
/* 						}   */
/* 			});	             			             	*/
/* 			return false;		           				  */
/* 	*/
/* 		 */
/* 		});*/
/* 						*/
/* 		*/
/* 		*/
/* 		*/
/* 	</script>	 	 */
/* */
/* 	<form id="aloes_event2" action="" method="post" {{ form_enctype(form) }}>	   */
/* 	  <div class="row">    */
/* */
/* 		{{ form_errors(form) }}	*/
/* 		*/
/* */
/* 		*/
/* 		  			*/
/* 		<div class='col-sm-12'> 	*/
/* 			<div class='col-sm-2'> 	  	  */
/* 			    {{ form_label(form.title) }}*/
/* 			</div> 	  		    	*/
/* 			<div class='col-sm-10'> 	  	  */
/* 			    {{ form_widget(form.title) }}*/
/* 		    	{{ form_errors(form.title) }}	*/
/* 			</div> 	  	*/
/* 		</div>*/
/*   		*/
/* 		<div class='col-sm-12'> */
/* 			<div class='col-sm-2'> 	  	  */
/* 			    <b>Date et Heure</b>*/
/* 			</div> 	  		    	*/
/* 			<div class='col-sm-2'> 	  	  */
/* 			    Du*/
/* 			</div> 	*/
/* 			<div class='col-sm-3'> 	  	  */
/* 			    {{ form_widget(form.startDate) }}*/
/* 		    	{{ form_errors(form.startDate) }}	*/
/* 			</div> 	*/
/* 			<div class='col-sm-2'> 	  	  */
/* 			    Au*/
/* 			</div> 			  			*/
/* 			<div class='col-sm-3'> 	  	  */
/* 				{{ form_widget(form.endDate) }}*/
/* 		    	{{ form_errors(form.endDate) }}	*/
/* 			</div> 	  */
/* 		</div>*/
/*  */
/* 		<script type="text/javascript">*/
/* 			$(function() {*/
/* 			    $('#aloes_event_startDate').datetimepicker({*/
/* 		                minView: 0, pickTime: false,autoclose: true,format: 'dd/mm/yyyy hh:ii',*/
/* 		                startDate: 	'{{ parent.startDate|date("d/m/Y G:ii") }}',*/
/*     		  		    endDate:    '{{ parent.endDate|date("d/m/Y G:ii") }}' */
/* 			    });*/
/* 			});*/
/* 			*/
/* 		</script>			 */
/* 		<script type="text/javascript">*/
/* 			$(function() {*/
/* 			    $('#aloes_event_endDate').datetimepicker({*/
/* 		                minView: 0, pickTime: false,autoclose: true,format: 'dd/mm/yyyy hh:ii',*/
/* 		                startDate: 	'{{ parent.startDate|date("d/m/Y G:ii") }}',*/
/*     		  		    endDate:    '{{ parent.endDate|date("d/m/Y G:ii") }}'   */
/* 			    });*/
/* 			}); */
/* 		</script>		*/
/* 		*/
/* 		<div class='col-sm-12'> 		*/
/* 			<div class='col-sm-2'> 	  	  */
/* 			    {{ form_label(form.contexte) }}*/
/* 			</div> 	  		    	*/
/* 			<div class='col-sm-10'> 	  	  */
/* 			    {{ form_widget(form.contexte) }}*/
/* 		    	{{ form_errors(form.contexte) }}	*/
/* 			</div> 	 */
/* 		</div>	*/
/* */
/* 				*/
/* 		<div class='col-sm-12'> 		*/
/* 			<div class='col-sm-2'> 	  	  */
/* 			    {{ form_label(form.description) }}*/
/* 			</div> 	  		    	*/
/* 			<div class='col-sm-10'> 	  	  */
/* 			    {{ form_widget(form.description) }}*/
/* 		    	{{ form_errors(form.description) }}	*/
/* 			</div> 	 */
/* 		</div>		*/
/* 		*/
/* 		<div class='col-sm-12'> */
/* 			<div class='col-sm-2'> 	  	  */
/* 			    {{ form_label(form.instructions) }}*/
/* 			</div> 	  		    	*/
/* 			<div class='col-sm-10'> 	  	  */
/* 			    {{ form_widget(form.instructions) }}*/
/* 		    	{{ form_errors(form.instructions) }}	*/
/* 			</div> 	 */
/* 		</div>*/
/* */
/* 		<div class='col-sm-12'> */
/* 			<div class='col-sm-2'> 	  	  */
/* 			    {{ form_label(form.resources) }}*/
/* 			</div> 	  		    	*/
/* 			<div class='col-sm-10'> 	  	  */
/* 			    {{ form_widget(form.resources) }}*/
/* 		    	{{ form_errors(form.resources) }}	*/
/* 			</div>*/
/* 		</div>		 	*/
/* */
/* */
/* 		<div class='col-sm-12'> */
/* 			<div class='col-sm-2'> 	  	  */
/* 			    {{ form_label(form.outils) }}*/
/* 			</div> 	  		    	*/
/* 			<div class='col-sm-10'> 	  	  */
/* 			    {{ form_widget(form.outils) }}*/
/* 		    	{{ form_errors(form.outils) }}	*/
/* 			</div>*/
/* 		</div>		*/
/* 		*/
/* 		<div class='col-sm-12'> */
/* 			<div class='col-sm-2'> 	  	  */
/* 			    {{ form_label(form.tutoring) }}*/
/* 			</div> 	  		    	*/
/* 			<div class='col-sm-10'> 	  	  */
/* 			    {{ form_widget(form.tutoring) }}*/
/* 		    	{{ form_errors(form.tutoring) }}	*/
/* 			</div> 	*/
/* 		</div>*/
/* */
/*  */
/* 		{% set size = form.assessments.vars.choices |length %}*/
/* */
/* 		{% if size > 0 %}*/
/* 		<div class="col-sm-12"> 		*/
/* 		{% else %}*/
/* 		<div class="col-sm-12" style="display: none;"> 			*/
/* 		{% endif %}*/
/* */
/* 			<div class='col-sm-2'> 	  	  */
/* 			    {{ form_label(form.assessments) }}*/
/* 			</div> 	  		    	*/
/* 			<div class='col-sm-10'> 	  	  */
/* 			    {{ form_widget(form.assessments) }}*/
/* 		    	{{ form_errors(form.assessments) }}	*/
/* 			</div>*/
/* 		</div>		 	*/
/* 		*/
/* 		{{ form_rest(form) }}*/
/* 			*/
/* 		<hr/>  */
/* 		<div class="col-sm-12">		 */
/* 	   		<button class="btn btn-color3" type="submit"><i class="icon icon-check icon-lg"></i> Enregistrer</button>*/
/*     		<button class="btn btn-inverse" type="button" data-dismiss="modal"><i class="icon icon-times icon-lg"></i> Fermer</button>	 	   */
/*   	 		*/
/*  		</div>		*/
/* 	  </div>*/
/* 	</form> */
/* */
/* </div>*/
