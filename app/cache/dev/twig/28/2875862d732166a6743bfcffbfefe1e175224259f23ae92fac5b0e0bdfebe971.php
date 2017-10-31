<?php

/* IfeAloesBundle:Assessment2:newAjaxAss.html.twig */
class __TwigTemplate_6c18ea21c8cfb3bceccf694368071070333c0bbcb3ff653797f8bc3ebcbf1f1f extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ifealoes/js/bootstrap3-typeahead.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ifealoes/js/typologie.js"), "html", null, true);
        echo "\"></script>


<div class=\"modal-header color2\"> 
\t";
        // line 6
        if ((array_key_exists("type", $context) && ((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "new"))) {
            echo " 
\t\t<b>Créer une évaluation</b>
\t";
        } else {
            // line 9
            echo "\t\t<b>Modifier une évaluation</b>\t
\t";
        }
        // line 10
        echo "\t\t\t
\t
\t<button type=\"button\" id=\"close\"  class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
</div>

<div id=\"modal-body\" class=\"modal-body\" > 

\t<script type=\"text/javascript\">


\t\t\$('.panel').each(function()
\t\t{\t
\t\t    var that = this;\t\t    
\t\t    var cpt=0;\t
\t\t    \t    
\t\t    \$(\"input[type='radio']:checked\", this).each(function()
\t\t\t    {\t\t
\t\t\t    if (\$(this).val()!=0)
\t\t\t    \t{
\t\t\t        cpt=cpt+1;    \t\t    \t
\t\t\t\t\t}
\t\t\t    });\t  
\t\t\t      
\t\t    if(cpt>0)
\t\t    \t\$(\".panel-collapse\", this).addClass(\"in\");\t
\t\t    else
\t\t    \t\$(\".panel-collapse\", this).removeClass(\"in\");\t\t\t    \t     
\t\t});

\t\t\t\t 
\t\t\$('input:radio').click(function() {

\t\t\t\t\$('.panel').each(function()
\t\t\t\t{\t
\t\t\t\t    var that = this;\t\t    
\t\t\t\t    var cpt=0;\t
\t\t\t\t    \t    
\t\t\t\t    \$(\"input[type='radio']:checked\", this).each(function()
\t\t\t\t\t    {\t\t
\t\t\t\t\t    if (\$(this).val()!=0)
\t\t\t\t\t    \t{
\t\t\t\t\t        cpt=cpt+1;    \t\t    \t
\t\t\t\t\t\t\t}
\t\t\t\t\t    });\t  
\t\t\t\t\t      
\t\t\t\t    if(cpt>0)
\t\t\t\t    \t\$(\".panel-collapse\", this).addClass(\"in\");\t
\t\t\t\t    else
\t\t\t\t    \t\$(\".panel-collapse\", this).removeClass(\"in\");\t\t\t    \t     
\t\t\t\t});
\t\t\t\t\t
\t\t});\t 
\t\t\t\t\t
\t\t\t\t
\t\t\$(\"#aloes_assessment2\").submit(function() {\t\t\t           
\t\t\t\t                \t\t\t\t             
\t\t\tdata = \$(this).serialize();\t\t         
\t
\t\t\t\$.ajax({
\t\t\t\t\ttype: \"POST\",
\t\t\t\t\t";
        // line 70
        if ((array_key_exists("type", $context) && ((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "new"))) {
            echo "\t\t\t\t\t
\t\t\t\t\t\turl: \"";
            // line 71
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("topic_assessment_create_2", array("id" => $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "id", array()))), "html", null, true);
            echo "\",
\t\t\t\t\t";
        } elseif ((        // line 72
array_key_exists("type", $context) && ((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "update"))) {
            echo "\t\t\t\t\t
\t\t\t\t\t\turl: \"";
            // line 73
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("topic_assessment_update_2", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
            echo "\",\t
\t\t\t\t\t";
        }
        // line 74
        echo "\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\tdata: data,
\t \t\t\t\t//dataType : 'html',\t
\t\t\t\t\tdataType : 'json',\t \t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\tcache: false,
\t\t\t\t\tsuccess: function(data) 
\t\t\t\t\t\t{
\t\t\t\t\t\t";
        // line 81
        if ((array_key_exists("type", $context) && ((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "new"))) {
            echo "\t
\t\t\t\t\t\t\tif (data.result==false)\t\t\t\t\t  
\t\t\t\t\t\t\t\t\$(\"#modal-content\").empty().append(data.content);  
\t\t\t\t\t\t\telse
\t\t\t\t\t\t\t\t{\t\t \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\tvar content = \$(data);

\t\t\t\t\t\t\t\t\$(\"#TO_";
            // line 88
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "id", array()), "html", null, true);
            echo "_A_travaux\").empty().append(data.nb_spec);\t
\t\t\t\t\t\t\t\t\$(\"#TO_";
            // line 89
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "id", array()), "html", null, true);
            echo "_A_weight\").empty().append(progress_bar(data.weight,'success'));
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\$(\"#general-item-weight\").empty().append(progress_bar(data.sum,'info'));
\t\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t\$(\"#ASS_";
            // line 93
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "id", array()), "html", null, true);
            echo "\").append(data.content); 
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\$('#myModal').modal('hide');\t\t\t\t\t \t\t\t
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t";
        } elseif ((        // line 97
array_key_exists("type", $context) && ((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "update"))) {
            echo "\t\t
\t\t\t\t\t\t\tif (data.result==false)\t\t\t\t\t  
\t\t\t\t\t\t\t\t\$(\"#modal-content\").empty().append(data.content);  
\t\t\t\t\t\t\telse
\t\t\t\t\t\t\t\t{\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\$(\"#AS_";
            // line 102
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
            echo "\").empty().append(data.content); \t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\$(\"#TO_";
            // line 104
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "id", array()), "html", null, true);
            echo "_A_weight\").empty().append(progress_bar(data.weight,'success'));\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\tvar x = data.events;
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\$.each( x, function( key, value ) {
\t\t\t\t\t\t\t\t\t\t\tkey \t= value['key'];
\t\t\t\t\t\t\t\t\t\t\tevent \t= value['event'];

\t\t\t\t\t\t\t\t  \$(\"#AS2_\"+key+\"_ass\").empty().append(event);
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t});\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\$(\"#general-item-weight\").empty().append(progress_bar(data.sum,'info'));\t\t\t\t
\t\t 
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\$('#myModal').modal('hide');\t 
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t";
        }
        // line 123
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t}   
\t\t\t});\t             \t\t\t             \t
\t\t\treturn false;\t\t           \t\t\t\t  
\t
\t\t 
\t\t});
\t\t
\t</script>\t \t 

\t<form class=\"form-inline\" id=\"aloes_assessment2\" action=\"\" method=\"post\" ";
        // line 133
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">\t   


\t\t  \t\t
\t\t<div class=\"row\">    \t

\t\t";
        // line 139
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "\t
\t\t\t
\t\t\t<div class='col-sm-12'> \t
\t\t\t\t<div class='col-sm-2'> \t  \t  
\t\t\t\t    ";
        // line 143
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'label');
        echo "
\t\t\t\t</div> \t  \t\t    \t
\t\t\t\t<div class='col-sm-10'> \t  \t  
\t\t\t\t    ";
        // line 146
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'widget');
        echo "
\t\t\t    \t";
        // line 147
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'errors');
        echo "\t
\t\t\t\t</div> \t  \t
\t\t\t</div>\t\t\t


\t\t\t";
        // line 152
        $context["size"] = twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "event", array()), "vars", array()), "choices", array()));
        // line 153
        echo "
\t\t\t";
        // line 154
        if (((isset($context["size"]) ? $context["size"] : $this->getContext($context, "size")) > 0)) {
            // line 155
            echo "\t\t\t<div class=\"col-sm-12\"> \t\t\t
\t\t\t";
        } else {
            // line 157
            echo "\t\t\t<div class=\"col-sm-12\" style=\"display: none;\"> \t\t\t
\t\t\t";
        }
        // line 159
        echo "\t\t\t\t
\t\t\t\t<div class='col-sm-2'> \t  \t  
\t\t\t\t    ";
        // line 161
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "event", array()), 'label');
        echo "
\t\t\t\t</div> \t  \t\t    \t
\t\t\t\t<div class='col-sm-10'> \t  \t  
\t\t\t\t    ";
        // line 164
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "event", array()), 'widget');
        echo "
\t\t\t    \t";
        // line 165
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "event", array()), 'errors');
        echo "\t
\t\t\t\t</div> \t\t\t\t\t
\t
\t\t\t</div> 


\t\t\t<div class='col-sm-12'> \t
\t\t\t\t<div class='col-sm-2'> \t  \t  
\t\t\t\t    ";
        // line 173
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "deadline", array()), 'label');
        echo "
\t\t\t\t</div> \t  \t\t    \t
\t\t\t\t<div class='col-sm-10'> \t  \t  
\t\t\t\t    ";
        // line 176
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "deadline", array()), 'widget');
        echo "
\t\t\t    \t";
        // line 177
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "deadline", array()), 'errors');
        echo "\t
\t\t\t\t</div> \t  \t
\t\t\t</div>

\t
\t\t\t<script type=\"text/javascript\">
\t\t\t  \$(function() {
\t\t\t    \$('#aloes_assessment2_deadline').datetimepicker({
\t\t                minView: 0, pickTime: false,autoclose: true 
\t\t\t    });
\t\t\t  });
\t\t\t</script>\t\t


\t\t\t<div class='col-sm-12'> \t
\t\t\t\t<div class='col-sm-2'> \t  \t  
\t\t\t\t    ";
        // line 193
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "weight", array()), 'label');
        echo "
\t\t\t\t</div> \t  \t\t    \t
\t\t\t\t<div class='col-sm-10'> \t  \t  
\t\t\t\t    ";
        // line 196
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "weight", array()), 'widget');
        echo "
\t\t\t    \t";
        // line 197
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "weight", array()), 'errors');
        echo "\t
\t\t\t\t</div> \t  \t
\t\t\t</div>


\t\t\t<div class='col-sm-12'> \t
\t\t\t\t<div class='col-sm-2'> \t  \t  
\t\t\t\t    ";
        // line 204
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "isIndividual", array()), 'label');
        echo "
\t\t\t\t</div> \t  \t\t    \t
\t\t\t\t<div class='col-sm-10'> \t  \t  
\t\t\t\t    ";
        // line 207
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "isIndividual", array()), 'widget');
        echo "
\t\t\t    \t";
        // line 208
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "isIndividual", array()), 'errors');
        echo "\t
\t\t\t\t</div> \t  \t
\t\t\t</div>


\t\t\t<div class=\"col-sm-12\">
\t\t\t\t<div class='col-sm-2'> \t  \t  
\t\t\t\t    <b>Type de travaux</b>
\t\t\t\t</div> \t  
\t\t\t\t<div class=\"col-sm-5\">\t 
\t\t\t\t\t<div id=\"typologie-control\" class=\"control-group col-sm-12\">
\t\t\t\t\t\t<div class=\"input-append\">
\t\t\t\t\t\t\t<input   id=\"new-typologie\" type=\"text\">\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> \t\t\t\t
\t\t\t\t</div>\t
\t\t\t\t<div class=\"col-sm-1\">
\t\t\t\t\t<button id=\"add-another-typologie\" class=\"btn\" type=\"button\">+</button>\t
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-4\">\t\t\t\t\t
\t\t\t\t\t<ul id=\"typologies-list\">
\t\t\t\t\t</ul>
\t\t\t\t\t
\t\t\t\t\t<div id=\"hiddens\">
\t\t\t\t\t\t";
        // line 233
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "typologies", array()), 'widget');
        echo "
\t\t\t\t\t</div> \t\t\t\t\t
\t\t\t\t</div>\t\t  
\t\t\t</div>  




\t  ";
        // line 241
        $context["size"] = twig_length_filter($this->env, (isset($context["objectives"]) ? $context["objectives"] : $this->getContext($context, "objectives")));
        // line 242
        echo "\t  
\t  \t";
        // line 243
        if (((isset($context["size"]) ? $context["size"] : $this->getContext($context, "size")) > 0)) {
            // line 244
            echo "\t\t\t<div class=\"col-sm-12\"> \t\t\t
\t\t";
        } else {
            // line 246
            echo "\t\t\t<div class=\"col-sm-12\" style=\"display: none;\"> \t\t\t
\t\t";
        }
        // line 248
        echo "\t   \t
\t  \t<b>Sélectionner les objectifs spécifiques associés à cette séquence :</b>
\t  
\t\t<div class=\"panel-group\" id=\"accordion\" role=\"tablist\" aria-multiselectable=\"true\">
\t\t
\t\t";
        // line 253
        $context["gc"] = "";
        echo "\t
\t\t\t
\t    ";
        // line 255
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["objectives"]) ? $context["objectives"] : $this->getContext($context, "objectives")));
        foreach ($context['_seq'] as $context["_key"] => $context["assObj"]) {
            // line 256
            echo "
\t\t\t";
            // line 257
            if ((((isset($context["gc"]) ? $context["gc"] : $this->getContext($context, "gc")) != $this->getAttribute($context["assObj"], "gc_id", array())) && ((isset($context["gc"]) ? $context["gc"] : $this->getContext($context, "gc")) != ""))) {
                // line 258
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t  </div>
\t\t\t\t  </div>\t  \t
\t\t\t";
            }
            // line 261
            echo "\t\t\t
\t\t\t    
\t\t\t";
            // line 263
            if (((isset($context["gc"]) ? $context["gc"] : $this->getContext($context, "gc")) != $this->getAttribute($context["assObj"], "gc_id", array()))) {
                // line 264
                echo "\t\t\t\t  <div class=\"panel panel-default\">
\t\t\t\t    <div class=\"panel-heading\" role=\"tab2\" id=\"heading";
                // line 265
                echo twig_escape_filter($this->env, $this->getAttribute($context["assObj"], "gc_id", array()), "html", null, true);
                echo "\">
\t\t\t\t      <h4 class=\"panel-title\">
\t\t\t\t        <a role=\"button\" data-toggle=\"collapse\"  href=\"#collapse";
                // line 267
                echo twig_escape_filter($this->env, $this->getAttribute($context["assObj"], "gc_id", array()), "html", null, true);
                echo "\" aria-expanded=\"true\" aria-controls=\"collapse";
                echo twig_escape_filter($this->env, $this->getAttribute($context["assObj"], "gc_id", array()), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t ";
                // line 268
                echo twig_escape_filter($this->env, $this->getAttribute($context["assObj"], "gc_title", array()), "html", null, true);
                echo "
\t\t\t\t        </a>   
\t\t\t\t      </h4>
\t\t\t\t    </div>
\t\t\t\t    <div id=\"collapse";
                // line 272
                echo twig_escape_filter($this->env, $this->getAttribute($context["assObj"], "gc_id", array()), "html", null, true);
                echo "\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"heading";
                echo twig_escape_filter($this->env, $this->getAttribute($context["assObj"], "gc_id", array()), "html", null, true);
                echo "\">
      \t\t\t\t\t<div class=\"panel-body\">
\t\t\t";
            }
            // line 275
            echo "\t\t\t
\t\t\t<div class=\"col-sm-12\"> 
\t\t\t\t<div class=\"col-sm-5\">
\t     \t\t\t";
            // line 278
            echo twig_escape_filter($this->env, $this->getAttribute($context["assObj"], "sc_title", array()), "html", null, true);
            echo " 
\t     \t\t</div>\t
\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t";
            // line 281
            if (($this->getAttribute($context["assObj"], "rating", array()) == 2)) {
                // line 282
                echo "\t     \t\t\t\t<input type=\"radio\" name=\"radio";
                echo twig_escape_filter($this->env, $this->getAttribute($context["assObj"], "gc_id", array()), "html", null, true);
                echo "#";
                echo twig_escape_filter($this->env, $this->getAttribute($context["assObj"], "sc_id", array()), "html", null, true);
                echo "\" checked=\"checked\"  value=\"2\"> Principale
\t     \t\t\t";
            } else {
                // line 284
                echo "\t     \t\t\t\t<input type=\"radio\" name=\"radio";
                echo twig_escape_filter($this->env, $this->getAttribute($context["assObj"], "gc_id", array()), "html", null, true);
                echo "#";
                echo twig_escape_filter($this->env, $this->getAttribute($context["assObj"], "sc_id", array()), "html", null, true);
                echo "\" value=\"2\"> Principale
\t     \t\t\t";
            }
            // line 286
            echo "\t     \t\t</div>\t
\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t";
            // line 288
            if (($this->getAttribute($context["assObj"], "rating", array()) == 1)) {
                // line 289
                echo "\t     \t\t\t\t<input type=\"radio\" name=\"radio";
                echo twig_escape_filter($this->env, $this->getAttribute($context["assObj"], "gc_id", array()), "html", null, true);
                echo "#";
                echo twig_escape_filter($this->env, $this->getAttribute($context["assObj"], "sc_id", array()), "html", null, true);
                echo "\" checked=\"checked\"  value=\"1\"> Secondaire
\t     \t\t\t";
            } else {
                // line 291
                echo "\t     \t\t\t\t<input type=\"radio\" name=\"radio";
                echo twig_escape_filter($this->env, $this->getAttribute($context["assObj"], "gc_id", array()), "html", null, true);
                echo "#";
                echo twig_escape_filter($this->env, $this->getAttribute($context["assObj"], "sc_id", array()), "html", null, true);
                echo "\" value=\"1\"> Secondaire
\t     \t\t\t";
            }
            // line 293
            echo "\t     \t\t</div>\t  
\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t";
            // line 295
            if (($this->getAttribute($context["assObj"], "rating", array()) == "")) {
                // line 296
                echo "\t     \t\t\t\t<input type=\"radio\" name=\"radio";
                echo twig_escape_filter($this->env, $this->getAttribute($context["assObj"], "gc_id", array()), "html", null, true);
                echo "#";
                echo twig_escape_filter($this->env, $this->getAttribute($context["assObj"], "sc_id", array()), "html", null, true);
                echo "\" checked=\"checked\"  value=\"0\"> Non sélectionné
\t     \t\t\t";
            } else {
                // line 298
                echo "\t     \t\t\t\t<input type=\"radio\" name=\"radio";
                echo twig_escape_filter($this->env, $this->getAttribute($context["assObj"], "gc_id", array()), "html", null, true);
                echo "#";
                echo twig_escape_filter($this->env, $this->getAttribute($context["assObj"], "sc_id", array()), "html", null, true);
                echo "\" value=\"0\"> Non sélectionné
\t     \t\t\t";
            }
            // line 299
            echo " 
\t     \t\t</div>   \t
\t     \t
\t     \t</div>   \t\t 
\t 
\t\t\t";
            // line 304
            $context["gc"] = $this->getAttribute($context["assObj"], "gc_id", array());
            echo "     \t\t
    \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['assObj'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 305
        echo "\t
    
\t\t";
        // line 307
        if (((isset($context["gc"]) ? $context["gc"] : $this->getContext($context, "gc")) != "")) {
            echo "    \t
\t\t\t\t</div>
\t\t\t</div>\t
\t\t</div>\t
\t\t";
        }
        // line 311
        echo "\t\t
\t\t\t    
\t\t</div>  
\t  </div>
\t\t
\t\t<hr/>  
\t\t<div class=\"col-sm-12\">\t\t 
\t   \t\t<button class=\"btn btn-color2\" type=\"submit\"><i class=\"icon icon-check icon-lg\"></i> Enregistrer</button>
    \t\t<button class=\"btn btn-inverse\" type=\"button\" data-dismiss=\"modal\"><i class=\"icon icon-times icon-lg\"></i> Fermer</button>\t \t   
  \t
 \t\t";
        // line 321
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
 \t\t
 \t\t</div>
 
\t</form> 

</div>";
    }

    public function getTemplateName()
    {
        return "IfeAloesBundle:Assessment2:newAjaxAss.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  566 => 321,  554 => 311,  546 => 307,  542 => 305,  534 => 304,  527 => 299,  519 => 298,  511 => 296,  509 => 295,  505 => 293,  497 => 291,  489 => 289,  487 => 288,  483 => 286,  475 => 284,  467 => 282,  465 => 281,  459 => 278,  454 => 275,  446 => 272,  439 => 268,  433 => 267,  428 => 265,  425 => 264,  423 => 263,  419 => 261,  413 => 258,  411 => 257,  408 => 256,  404 => 255,  399 => 253,  392 => 248,  388 => 246,  384 => 244,  382 => 243,  379 => 242,  377 => 241,  366 => 233,  338 => 208,  334 => 207,  328 => 204,  318 => 197,  314 => 196,  308 => 193,  289 => 177,  285 => 176,  279 => 173,  268 => 165,  264 => 164,  258 => 161,  254 => 159,  250 => 157,  246 => 155,  244 => 154,  241 => 153,  239 => 152,  231 => 147,  227 => 146,  221 => 143,  214 => 139,  205 => 133,  193 => 123,  170 => 104,  165 => 102,  157 => 97,  150 => 93,  143 => 89,  139 => 88,  129 => 81,  120 => 74,  115 => 73,  111 => 72,  107 => 71,  103 => 70,  41 => 10,  37 => 9,  31 => 6,  24 => 2,  19 => 1,);
    }
}
/* <script src="{{asset('bundles/ifealoes/js/bootstrap3-typeahead.min.js')}}"></script>*/
/* <script src="{{asset('bundles/ifealoes/js/typologie.js')}}"></script>*/
/* */
/* */
/* <div class="modal-header color2"> */
/* 	{% if type is defined and type=="new" %} */
/* 		<b>Créer une évaluation</b>*/
/* 	{% else %}*/
/* 		<b>Modifier une évaluation</b>	*/
/* 	{% endif%}			*/
/* 	*/
/* 	<button type="button" id="close"  class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>*/
/* </div>*/
/* */
/* <div id="modal-body" class="modal-body" > */
/* */
/* 	<script type="text/javascript">*/
/* */
/* */
/* 		$('.panel').each(function()*/
/* 		{	*/
/* 		    var that = this;		    */
/* 		    var cpt=0;	*/
/* 		    	    */
/* 		    $("input[type='radio']:checked", this).each(function()*/
/* 			    {		*/
/* 			    if ($(this).val()!=0)*/
/* 			    	{*/
/* 			        cpt=cpt+1;    		    	*/
/* 					}*/
/* 			    });	  */
/* 			      */
/* 		    if(cpt>0)*/
/* 		    	$(".panel-collapse", this).addClass("in");	*/
/* 		    else*/
/* 		    	$(".panel-collapse", this).removeClass("in");			    	     */
/* 		});*/
/* */
/* 				 */
/* 		$('input:radio').click(function() {*/
/* */
/* 				$('.panel').each(function()*/
/* 				{	*/
/* 				    var that = this;		    */
/* 				    var cpt=0;	*/
/* 				    	    */
/* 				    $("input[type='radio']:checked", this).each(function()*/
/* 					    {		*/
/* 					    if ($(this).val()!=0)*/
/* 					    	{*/
/* 					        cpt=cpt+1;    		    	*/
/* 							}*/
/* 					    });	  */
/* 					      */
/* 				    if(cpt>0)*/
/* 				    	$(".panel-collapse", this).addClass("in");	*/
/* 				    else*/
/* 				    	$(".panel-collapse", this).removeClass("in");			    	     */
/* 				});*/
/* 					*/
/* 		});	 */
/* 					*/
/* 				*/
/* 		$("#aloes_assessment2").submit(function() {			           */
/* 				                				             */
/* 			data = $(this).serialize();		         */
/* 	*/
/* 			$.ajax({*/
/* 					type: "POST",*/
/* 					{% if type is defined and type=="new" %}					*/
/* 						url: "{{ path("topic_assessment_create_2", {id:parent.id}) }}",*/
/* 					{% elseif type is defined and type=="update" %}					*/
/* 						url: "{{ path("topic_assessment_update_2", {id:entity.id}) }}",	*/
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
/* 								$("#TO_{{parent.id}}_A_travaux").empty().append(data.nb_spec);	*/
/* 								$("#TO_{{parent.id}}_A_weight").empty().append(progress_bar(data.weight,'success'));*/
/* 								*/
/* 								$("#general-item-weight").empty().append(progress_bar(data.sum,'info'));*/
/* 								  */
/* 								$("#ASS_{{parent.id}}").append(data.content); */
/* 								*/
/* 								$('#myModal').modal('hide');					 			*/
/* 								}*/
/* 						{% elseif type is defined and type=="update" %}		*/
/* 							if (data.result==false)					  */
/* 								$("#modal-content").empty().append(data.content);  */
/* 							else*/
/* 								{							*/
/* 								$("#AS_{{entity.id}}").empty().append(data.content); 	*/
/* 								*/
/* 								$("#TO_{{parent.id}}_A_weight").empty().append(progress_bar(data.weight,'success'));					*/
/* 								*/
/* 									*/
/* 								var x = data.events;*/
/* 										*/
/* 								$.each( x, function( key, value ) {*/
/* 											key 	= value['key'];*/
/* 											event 	= value['event'];*/
/* */
/* 								  $("#AS2_"+key+"_ass").empty().append(event);*/
/* 																*/
/* 								});											*/
/* 									*/
/* 									*/
/* 								$("#general-item-weight").empty().append(progress_bar(data.sum,'info'));				*/
/* 		 */
/* 								*/
/* 								$('#myModal').modal('hide');	 */
/* 								}*/
/* 						{% endif 																							%}																*/
/* 						}   */
/* 			});	             			             	*/
/* 			return false;		           				  */
/* 	*/
/* 		 */
/* 		});*/
/* 		*/
/* 	</script>	 	 */
/* */
/* 	<form class="form-inline" id="aloes_assessment2" action="" method="post" {{ form_enctype(form) }}>	   */
/* */
/* */
/* 		  		*/
/* 		<div class="row">    	*/
/* */
/* 		{{ form_errors(form) }}	*/
/* 			*/
/* 			<div class='col-sm-12'> 	*/
/* 				<div class='col-sm-2'> 	  	  */
/* 				    {{ form_label(form.title) }}*/
/* 				</div> 	  		    	*/
/* 				<div class='col-sm-10'> 	  	  */
/* 				    {{ form_widget(form.title) }}*/
/* 			    	{{ form_errors(form.title) }}	*/
/* 				</div> 	  	*/
/* 			</div>			*/
/* */
/* */
/* 			{% set size = form.event.vars.choices |length %}*/
/* */
/* 			{% if size > 0 %}*/
/* 			<div class="col-sm-12"> 			*/
/* 			{% else %}*/
/* 			<div class="col-sm-12" style="display: none;"> 			*/
/* 			{% endif %}*/
/* 				*/
/* 				<div class='col-sm-2'> 	  	  */
/* 				    {{ form_label(form.event) }}*/
/* 				</div> 	  		    	*/
/* 				<div class='col-sm-10'> 	  	  */
/* 				    {{ form_widget(form.event) }}*/
/* 			    	{{ form_errors(form.event) }}	*/
/* 				</div> 					*/
/* 	*/
/* 			</div> */
/* */
/* */
/* 			<div class='col-sm-12'> 	*/
/* 				<div class='col-sm-2'> 	  	  */
/* 				    {{ form_label(form.deadline) }}*/
/* 				</div> 	  		    	*/
/* 				<div class='col-sm-10'> 	  	  */
/* 				    {{ form_widget(form.deadline) }}*/
/* 			    	{{ form_errors(form.deadline) }}	*/
/* 				</div> 	  	*/
/* 			</div>*/
/* */
/* 	*/
/* 			<script type="text/javascript">*/
/* 			  $(function() {*/
/* 			    $('#aloes_assessment2_deadline').datetimepicker({*/
/* 		                minView: 0, pickTime: false,autoclose: true */
/* 			    });*/
/* 			  });*/
/* 			</script>		*/
/* */
/* */
/* 			<div class='col-sm-12'> 	*/
/* 				<div class='col-sm-2'> 	  	  */
/* 				    {{ form_label(form.weight) }}*/
/* 				</div> 	  		    	*/
/* 				<div class='col-sm-10'> 	  	  */
/* 				    {{ form_widget(form.weight) }}*/
/* 			    	{{ form_errors(form.weight) }}	*/
/* 				</div> 	  	*/
/* 			</div>*/
/* */
/* */
/* 			<div class='col-sm-12'> 	*/
/* 				<div class='col-sm-2'> 	  	  */
/* 				    {{ form_label(form.isIndividual) }}*/
/* 				</div> 	  		    	*/
/* 				<div class='col-sm-10'> 	  	  */
/* 				    {{ form_widget(form.isIndividual) }}*/
/* 			    	{{ form_errors(form.isIndividual) }}	*/
/* 				</div> 	  	*/
/* 			</div>*/
/* */
/* */
/* 			<div class="col-sm-12">*/
/* 				<div class='col-sm-2'> 	  	  */
/* 				    <b>Type de travaux</b>*/
/* 				</div> 	  */
/* 				<div class="col-sm-5">	 */
/* 					<div id="typologie-control" class="control-group col-sm-12">*/
/* 						<div class="input-append">*/
/* 							<input   id="new-typologie" type="text">	*/
/* 									*/
/* 						</div>*/
/* 					</div> 				*/
/* 				</div>	*/
/* 				<div class="col-sm-1">*/
/* 					<button id="add-another-typologie" class="btn" type="button">+</button>	*/
/* 				</div>*/
/* 				<div class="col-sm-4">					*/
/* 					<ul id="typologies-list">*/
/* 					</ul>*/
/* 					*/
/* 					<div id="hiddens">*/
/* 						{{ form_widget(form.typologies) }}*/
/* 					</div> 					*/
/* 				</div>		  */
/* 			</div>  */
/* */
/* */
/* */
/* */
/* 	  {% set size = objectives |length %}*/
/* 	  */
/* 	  	{% if size > 0 %}*/
/* 			<div class="col-sm-12"> 			*/
/* 		{% else %}*/
/* 			<div class="col-sm-12" style="display: none;"> 			*/
/* 		{% endif %}*/
/* 	   	*/
/* 	  	<b>Sélectionner les objectifs spécifiques associés à cette séquence :</b>*/
/* 	  */
/* 		<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">*/
/* 		*/
/* 		{% set gc = "" %}	*/
/* 			*/
/* 	    {% for assObj in objectives %}*/
/* */
/* 			{% if  gc != assObj.gc_id  and  gc !="" %}*/
/* 						</div>*/
/* 					  </div>*/
/* 				  </div>	  	*/
/* 			{% endif %}			*/
/* 			    */
/* 			{% if  gc != assObj.gc_id %}*/
/* 				  <div class="panel panel-default">*/
/* 				    <div class="panel-heading" role="tab2" id="heading{{assObj.gc_id}}">*/
/* 				      <h4 class="panel-title">*/
/* 				        <a role="button" data-toggle="collapse"  href="#collapse{{assObj.gc_id}}" aria-expanded="true" aria-controls="collapse{{assObj.gc_id}}">*/
/* 							 {{ assObj.gc_title}}*/
/* 				        </a>   */
/* 				      </h4>*/
/* 				    </div>*/
/* 				    <div id="collapse{{assObj.gc_id}}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading{{assObj.gc_id}}">*/
/*       					<div class="panel-body">*/
/* 			{% endif %}*/
/* 			*/
/* 			<div class="col-sm-12"> */
/* 				<div class="col-sm-5">*/
/* 	     			{{ assObj.sc_title}} */
/* 	     		</div>	*/
/* 				<div class="col-sm-2">*/
/* 					{% if assObj.rating==2 %}*/
/* 	     				<input type="radio" name="radio{{assObj.gc_id }}#{{assObj.sc_id}}" checked="checked"  value="2"> Principale*/
/* 	     			{% else %}*/
/* 	     				<input type="radio" name="radio{{assObj.gc_id }}#{{assObj.sc_id}}" value="2"> Principale*/
/* 	     			{% endif %}*/
/* 	     		</div>	*/
/* 				<div class="col-sm-2">*/
/* 					{% if assObj.rating==1 %}*/
/* 	     				<input type="radio" name="radio{{assObj.gc_id }}#{{assObj.sc_id}}" checked="checked"  value="1"> Secondaire*/
/* 	     			{% else %}*/
/* 	     				<input type="radio" name="radio{{assObj.gc_id }}#{{assObj.sc_id}}" value="1"> Secondaire*/
/* 	     			{% endif %}*/
/* 	     		</div>	  */
/* 				<div class="col-sm-3">*/
/* 					{% if assObj.rating=='' %}*/
/* 	     				<input type="radio" name="radio{{assObj.gc_id }}#{{assObj.sc_id}}" checked="checked"  value="0"> Non sélectionné*/
/* 	     			{% else %}*/
/* 	     				<input type="radio" name="radio{{assObj.gc_id }}#{{assObj.sc_id}}" value="0"> Non sélectionné*/
/* 	     			{% endif %} */
/* 	     		</div>   	*/
/* 	     	*/
/* 	     	</div>   		 */
/* 	 */
/* 			{% set gc = assObj.gc_id %}     		*/
/*     	{% endfor %}	*/
/*     */
/* 		{% if   gc !="" %}    	*/
/* 				</div>*/
/* 			</div>	*/
/* 		</div>	*/
/* 		{% endif %}		*/
/* 			    */
/* 		</div>  */
/* 	  </div>*/
/* 		*/
/* 		<hr/>  */
/* 		<div class="col-sm-12">		 */
/* 	   		<button class="btn btn-color2" type="submit"><i class="icon icon-check icon-lg"></i> Enregistrer</button>*/
/*     		<button class="btn btn-inverse" type="button" data-dismiss="modal"><i class="icon icon-times icon-lg"></i> Fermer</button>	 	   */
/*   	*/
/*  		{{ form_rest(form) }}*/
/*  		*/
/*  		</div>*/
/*  */
/* 	</form> */
/* */
/* </div>*/
