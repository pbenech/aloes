<?php

/* IfeAloesBundle:SpecificObjective2:newAjaxSpecObj.html.twig */
class __TwigTemplate_5b9ba51f9e395977bf4a88b929878e93c60014f854c84335f0363f2dfd13d049 extends Twig_Template
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
        echo "<div class=\"modal-header color2\"> 
\t";
        // line 2
        if ((array_key_exists("type", $context) && ((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "new"))) {
            // line 3
            echo "\t\t<b>Créer un objectif spécifique</b>
\t";
        } else {
            // line 5
            echo "\t\t<b>Modifier un objectif spécifique</b>\t
\t";
        }
        // line 6
        echo "\t\t
\t<button type=\"button\" id=\"close\"  class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
</div> 

<div id=\"modal-body\" class=\"modal-body\" > 

\t<script type=\"text/javascript\">
\t
\t\t\$('input:text:visible:first').focus();\t
\t
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
\t
\t
\t\t\$(\"#aloes_specific_objective_2\").submit(function() {\t\t\t           
\t\t\t\t                \t\t\t\t             
\t\t\tdata = \$(this).serialize();\t\t         
\t
\t\t\t\$.ajax({
\t\t\t\t\ttype: \"POST\",
\t\t\t\t\t";
        // line 65
        if ((array_key_exists("type", $context) && ((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "new"))) {
            echo "\t\t\t\t\t
\t\t\t\t\t\turl: \"";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("general_objective_specific_objective_create_2", array("id" => $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "id", array()))), "html", null, true);
            echo "\",
\t\t\t\t\t";
        } elseif ((        // line 67
array_key_exists("type", $context) && ((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "update"))) {
            echo "\t\t\t\t\t
\t\t\t\t\t\turl: \"";
            // line 68
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("general_objective_specific_objective_update_2", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
            echo "\",\t
\t\t\t\t\t";
        }
        // line 69
        echo "\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\tdata: data,
\t \t\t\t\t//dataType : 'html',\t
\t\t\t\t\tdataType : 'json',\t \t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\tcache: false,
\t\t\t\t\tsuccess: function(data) 
\t\t\t\t\t\t{
\t\t\t\t\t\t";
        // line 76
        if ((array_key_exists("type", $context) && ((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "new"))) {
            echo "\t
\t\t\t\t\t\tif (data.result==false)\t\t\t\t\t  
\t\t\t\t\t\t\t\$(\"#modal-content\").empty().append(data.content);  
\t\t\t\t\t\telse
\t\t\t\t\t\t\t{\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\tvar content = \$(data);
\t\t\t\t\t\t\t\$(\"#sortable";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "id", array()), "html", null, true);
            echo "\").append(data.content); 
\t\t\t\t\t
\t\t\t\t\t\t\t\$('#myModal').modal('hide');\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t}
\t\t\t\t\t\t";
        } elseif ((        // line 87
array_key_exists("type", $context) && ((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "update"))) {
            echo "\t\t
\t\t\t\t\t\tif (data.result==false)\t\t\t\t\t  
\t\t\t\t\t\t\t\$(\"#modal-content\").empty().append(data.content);  
\t\t\t\t\t\telse
\t\t\t\t\t\t\t{\t\t\t\t\t\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t\$(\"#OS_";
            // line 92
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
            echo "\").empty().append(data.specifique);
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\tvar x = data.order;
\t\t\t\t\t\t
\t\t\t\t\t\t\tvar cpt=0;
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\$.each( x, function( key, value ) {
\t\t\t\t\t\t\t\t\t\tkey \t= value['key'];
\t\t\t\t\t\t\t\t\t\tweight \t= value['weight'];
\t\t\t\t\t\t\t\t\t\ttype \t= value['type'];
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\tif (type==\"GEN\")
\t\t\t\t\t\t\t\t\t\t\t{
\t\t\t\t\t\t\t\t\t\t\tif (weight==null)
\t\t\t\t\t\t\t\t\t\t\t\tweight=0;
\t\t\t\t\t\t\t\t\t\t\t\$(\"#OG_\"+key+\"_A_weight\").empty().append(progress_bar(weight,'success'));
\t\t\t\t\t\t\t\t\t\t\tcpt = cpt +\tweight;\t \t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\tif (type==\"SPE\")
\t\t\t\t\t\t\t\t\t\t\t{
\t\t\t\t\t\t\t\t\t\t\tif (weight==null)
\t\t\t\t\t\t\t\t\t\t\t\tweight=0;
\t\t\t\t\t\t\t\t\t\t\t\$(\"#OS_\"+key+\"_weight\").empty().append(progress_bar(weight,'warning')); \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t}\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t}); \t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t \t
\t\t\t\t\t\t\t\$('#myModal').modal('hide');\t 
\t\t\t\t\t\t\t}
\t\t\t\t\t\t";
        }
        // line 124
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t}   
\t\t\t});\t             \t\t\t             \t
\t\t\treturn false;\t\t           \t\t\t\t 
\t
\t\t 
\t\t});
\t\t
\t</script>\t \t

\t<form id=\"aloes_specific_objective_2\" action=\"\" method=\"post\" ";
        // line 134
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">\t  
          \t\t   
\t\t";
        // line 136
        $context["gc"] = "";
        echo "\t

\t\t";
        // line 138
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "\t
\t\t  \t\t
\t\t<div class=\"row\">    \t
\t\t\t
\t\t\t<div class=\"col-sm-12\"> \t\t
\t\t  \t\t";
        // line 143
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'row');
        echo "\t
\t\t\t</div> 
\t\t\t    
\t\t
\t\t\t<div class=\"col-sm-12\"> \t\t
\t\t\t  \t<b>Sélectionner les compétences associées à cet objectif :</b>
\t\t\t  
\t\t\t\t<div class=\"panel-group\" id=\"accordion\" role=\"tablist\" aria-multiselectable=\"true\">\t\t
\t\t\t\t
\t\t\t\t";
        // line 152
        $context["gc"] = "";
        echo "\t\t\t
\t\t\t\t
\t\t\t    ";
        // line 154
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["competences"]) ? $context["competences"] : $this->getContext($context, "competences")));
        foreach ($context['_seq'] as $context["_key"] => $context["specificCompetences"]) {
            // line 155
            echo "\t\t\t    
\t\t\t\t\t";
            // line 156
            if ((((isset($context["gc"]) ? $context["gc"] : $this->getContext($context, "gc")) != $this->getAttribute($context["specificCompetences"], "gc_id", array())) && ((isset($context["gc"]) ? $context["gc"] : $this->getContext($context, "gc")) != ""))) {
                // line 157
                echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t  </div>\t  \t
\t\t\t\t\t";
            }
            // line 160
            echo "\t\t\t 
\t\t\t\t\t
\t\t\t\t\t";
            // line 162
            if (((isset($context["gc"]) ? $context["gc"] : $this->getContext($context, "gc")) != $this->getAttribute($context["specificCompetences"], "gc_id", array()))) {
                // line 163
                echo "\t\t\t\t\t\t  <div class=\"panel panel-default\">
\t\t\t\t\t\t    <div class=\"panel-heading\" role=\"tab2\" id=\"heading";
                // line 164
                echo twig_escape_filter($this->env, $this->getAttribute($context["specificCompetences"], "gc_id", array()), "html", null, true);
                echo "\">
\t\t\t\t\t\t      <h4 class=\"panel-title\">
\t\t\t\t\t\t        <a role=\"button\" data-toggle=\"collapse\"  href=\"#collapse";
                // line 166
                echo twig_escape_filter($this->env, $this->getAttribute($context["specificCompetences"], "gc_id", array()), "html", null, true);
                echo "\" aria-expanded=\"true\" aria-controls=\"collapse";
                echo twig_escape_filter($this->env, $this->getAttribute($context["specificCompetences"], "gc_id", array()), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t";
                // line 167
                echo twig_escape_filter($this->env, $this->getAttribute($context["specificCompetences"], "gc_title", array()), "html", null, true);
                echo "
\t\t\t\t\t\t        </a>   
\t\t\t\t\t\t      </h4>
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t    <div id=\"collapse";
                // line 171
                echo twig_escape_filter($this->env, $this->getAttribute($context["specificCompetences"], "gc_id", array()), "html", null, true);
                echo "\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"heading";
                echo twig_escape_filter($this->env, $this->getAttribute($context["specificCompetences"], "gc_id", array()), "html", null, true);
                echo "\">
\t\t      \t\t\t\t\t<div class=\"panel-body\" > 
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\" > 
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\" >
\t\t\t\t\t\t\t\t\t\t\t<b>Compétences</b>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-1\" style=\"text-align:center;font-size:11px;\">
\t\t\t\t\t\t\t\t\t\t\t<b>Principale</b>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-1\" style=\"text-align:center;font-size:11px;\">
\t\t\t\t\t\t\t\t\t\t<b>Secondaire</b>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-1\" style=\"text-align:center;font-size:11px;\">
\t\t\t\t\t\t\t\t\t\t<b>Aucune</b>
\t\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t";
            }
            // line 189
            echo "\t\t\t
\t\t
\t\t\t\t\t\t
\t\t\t\t\t<div class=\"col-sm-12\"> 
\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t     \t\t\t";
            // line 194
            echo twig_escape_filter($this->env, $this->getAttribute($context["specificCompetences"], "sc_title", array()), "html", null, true);
            echo "  ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["specificCompetences"], "rating", array()), "html", null, true);
            echo " 
\t\t\t     \t\t</div>\t
\t\t\t\t\t\t<div class=\"col-sm-1\"  style=\"text-align:center\">
\t\t\t\t\t\t\t";
            // line 197
            if (($this->getAttribute($context["specificCompetences"], "rating", array()) == 2)) {
                // line 198
                echo "\t\t\t     \t\t\t\t<input type=\"radio\" name=\"radio";
                echo twig_escape_filter($this->env, $this->getAttribute($context["specificCompetences"], "sc_id", array()), "html", null, true);
                echo "\" checked=\"checked\"  value=\"2\">
\t\t\t     \t\t\t";
            } else {
                // line 200
                echo "\t\t\t     \t\t\t\t<input type=\"radio\" name=\"radio";
                echo twig_escape_filter($this->env, $this->getAttribute($context["specificCompetences"], "sc_id", array()), "html", null, true);
                echo "\" value=\"2\">
\t\t\t     \t\t\t";
            }
            // line 202
            echo "\t\t\t     \t\t</div>\t 
\t\t\t\t\t\t<div class=\"col-sm-1\"  style=\"text-align:center\">
\t\t\t\t\t\t\t";
            // line 204
            if (($this->getAttribute($context["specificCompetences"], "rating", array()) == 1)) {
                // line 205
                echo "\t\t\t     \t\t\t\t<input type=\"radio\" name=\"radio";
                echo twig_escape_filter($this->env, $this->getAttribute($context["specificCompetences"], "sc_id", array()), "html", null, true);
                echo "\" checked=\"checked\"  value=\"1\">
\t\t\t     \t\t\t";
            } else {
                // line 207
                echo "\t\t\t     \t\t\t\t<input type=\"radio\" name=\"radio";
                echo twig_escape_filter($this->env, $this->getAttribute($context["specificCompetences"], "sc_id", array()), "html", null, true);
                echo "\" value=\"1\">
\t\t\t     \t\t\t";
            }
            // line 209
            echo "\t\t\t     \t\t</div>\t
\t\t\t\t\t\t<div class=\"col-sm-1\"  style=\"text-align:center\">
\t\t\t\t\t\t\t";
            // line 211
            if (($this->getAttribute($context["specificCompetences"], "rating", array()) == "")) {
                // line 212
                echo "\t\t\t     \t\t\t\t<input type=\"radio\" name=\"radio";
                echo twig_escape_filter($this->env, $this->getAttribute($context["specificCompetences"], "sc_id", array()), "html", null, true);
                echo "\" checked=\"checked\"  value=\"0\">
\t\t\t     \t\t\t";
            } else {
                // line 214
                echo "\t\t\t     \t\t\t\t<input type=\"radio\" name=\"radio";
                echo twig_escape_filter($this->env, $this->getAttribute($context["specificCompetences"], "sc_id", array()), "html", null, true);
                echo "\" value=\"0\">
\t\t\t     \t\t\t";
            }
            // line 215
            echo " 
\t\t\t     \t\t</div>   \t
\t\t\t     \t
\t\t\t     \t</div>   \t\t 
\t\t\t 
\t\t\t\t\t";
            // line 220
            $context["gc"] = $this->getAttribute($context["specificCompetences"], "gc_id", array());
            echo "  
\t\t\t\t\t\t\t
\t\t    \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['specificCompetences'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 223
        echo "\t\t    \t
\t\t\t\t";
        // line 224
        if (((isset($context["gc"]) ? $context["gc"] : $this->getContext($context, "gc")) != "")) {
            echo "    \t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>\t
\t\t\t\t</div>\t
\t\t\t\t";
        }
        // line 228
        echo "\t\t    \t
  \t\t\t</div>  
  \t\t  \t 
\t\t</div>
\t\t<hr/>  
\t\t<div class=\"col-sm-12\">\t\t 
\t   \t\t<button class=\"btn btn-color2\" type=\"submit\"><i class=\"icon icon-check icon-lg\"></i> Enregistrer</button>
    \t\t<button class=\"btn btn-inverse\" type=\"button\" data-dismiss=\"modal\"><i class=\"icon icon-times icon-lg\"></i> Fermer</button>\t \t   
  \t
 \t\t";
        // line 237
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
 \t\t
 \t\t</div>
\t</form> 

</div> ";
    }

    public function getTemplateName()
    {
        return "IfeAloesBundle:SpecificObjective2:newAjaxSpecObj.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  396 => 237,  385 => 228,  377 => 224,  374 => 223,  365 => 220,  358 => 215,  352 => 214,  346 => 212,  344 => 211,  340 => 209,  334 => 207,  328 => 205,  326 => 204,  322 => 202,  316 => 200,  310 => 198,  308 => 197,  300 => 194,  293 => 189,  269 => 171,  262 => 167,  256 => 166,  251 => 164,  248 => 163,  246 => 162,  242 => 160,  236 => 157,  234 => 156,  231 => 155,  227 => 154,  222 => 152,  210 => 143,  202 => 138,  197 => 136,  192 => 134,  180 => 124,  144 => 92,  136 => 87,  129 => 83,  119 => 76,  110 => 69,  105 => 68,  101 => 67,  97 => 66,  93 => 65,  32 => 6,  28 => 5,  24 => 3,  22 => 2,  19 => 1,);
    }
}
/* <div class="modal-header color2"> */
/* 	{% if type is defined and type=="new" %}*/
/* 		<b>Créer un objectif spécifique</b>*/
/* 	{% else %}*/
/* 		<b>Modifier un objectif spécifique</b>	*/
/* 	{% endif%}		*/
/* 	<button type="button" id="close"  class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>*/
/* </div> */
/* */
/* <div id="modal-body" class="modal-body" > */
/* */
/* 	<script type="text/javascript">*/
/* 	*/
/* 		$('input:text:visible:first').focus();	*/
/* 	*/
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
/* 		});	*/
/* 	*/
/* 	*/
/* 		$("#aloes_specific_objective_2").submit(function() {			           */
/* 				                				             */
/* 			data = $(this).serialize();		         */
/* 	*/
/* 			$.ajax({*/
/* 					type: "POST",*/
/* 					{% if type is defined and type=="new" %}					*/
/* 						url: "{{ path("general_objective_specific_objective_create_2", {id:parent.id}) }}",*/
/* 					{% elseif type is defined and type=="update" %}					*/
/* 						url: "{{ path("general_objective_specific_objective_update_2", {id:entity.id}) }}",	*/
/* 					{% endif 																							%}											*/
/* 					data: data,*/
/* 	 				//dataType : 'html',	*/
/* 					dataType : 'json',	 												*/
/* 					cache: false,*/
/* 					success: function(data) */
/* 						{*/
/* 						{% if type is defined and type=="new" %}	*/
/* 						if (data.result==false)					  */
/* 							$("#modal-content").empty().append(data.content);  */
/* 						else*/
/* 							{						*/
/* 											*/
/* 							var content = $(data);*/
/* 							$("#sortable{{parent.id}}").append(data.content); */
/* 					*/
/* 							$('#myModal').modal('hide');								*/
/* 							}*/
/* 						{% elseif type is defined and type=="update" %}		*/
/* 						if (data.result==false)					  */
/* 							$("#modal-content").empty().append(data.content);  */
/* 						else*/
/* 							{												 */
/* 							$("#OS_{{entity.id}}").empty().append(data.specifique);*/
/* 							*/
/* 							*/
/* 							*/
/* 							var x = data.order;*/
/* 						*/
/* 							var cpt=0;*/
/* 									*/
/* 							$.each( x, function( key, value ) {*/
/* 										key 	= value['key'];*/
/* 										weight 	= value['weight'];*/
/* 										type 	= value['type'];*/
/* 										*/
/* 										if (type=="GEN")*/
/* 											{*/
/* 											if (weight==null)*/
/* 												weight=0;*/
/* 											$("#OG_"+key+"_A_weight").empty().append(progress_bar(weight,'success'));*/
/* 											cpt = cpt +	weight;	 													*/
/* 											}*/
/* 										if (type=="SPE")*/
/* 											{*/
/* 											if (weight==null)*/
/* 												weight=0;*/
/* 											$("#OS_"+key+"_weight").empty().append(progress_bar(weight,'warning')); 																					*/
/* 											}																	*/
/* 							}); 							*/
/* 							*/
/* 							*/
/* 							 	*/
/* 							$('#myModal').modal('hide');	 */
/* 							}*/
/* 						{% endif 																							%}																*/
/* 						}   */
/* 			});	             			             	*/
/* 			return false;		           				 */
/* 	*/
/* 		 */
/* 		});*/
/* 		*/
/* 	</script>	 	*/
/* */
/* 	<form id="aloes_specific_objective_2" action="" method="post" {{ form_enctype(form) }}>	  */
/*           		   */
/* 		{% set gc = "" %}	*/
/* */
/* 		{{ form_errors(form) }}	*/
/* 		  		*/
/* 		<div class="row">    	*/
/* 			*/
/* 			<div class="col-sm-12"> 		*/
/* 		  		{{ form_row(form.title) }}	*/
/* 			</div> */
/* 			    */
/* 		*/
/* 			<div class="col-sm-12"> 		*/
/* 			  	<b>Sélectionner les compétences associées à cet objectif :</b>*/
/* 			  */
/* 				<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">		*/
/* 				*/
/* 				{% set gc = "" %}			*/
/* 				*/
/* 			    {% for specificCompetences in competences %}*/
/* 			    */
/* 					{% if  gc != specificCompetences.gc_id  and  gc !="" %}*/
/* 								</div>*/
/* 							  </div>*/
/* 						  </div>	  	*/
/* 					{% endif %}			 */
/* 					*/
/* 					{% if  gc != specificCompetences.gc_id %}*/
/* 						  <div class="panel panel-default">*/
/* 						    <div class="panel-heading" role="tab2" id="heading{{specificCompetences.gc_id}}">*/
/* 						      <h4 class="panel-title">*/
/* 						        <a role="button" data-toggle="collapse"  href="#collapse{{specificCompetences.gc_id}}" aria-expanded="true" aria-controls="collapse{{specificCompetences.gc_id}}">*/
/* 									{{ specificCompetences.gc_title}}*/
/* 						        </a>   */
/* 						      </h4>*/
/* 						    </div>*/
/* 						    <div id="collapse{{specificCompetences.gc_id}}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading{{specificCompetences.gc_id}}">*/
/* 		      					<div class="panel-body" > */
/* 									<div class="col-sm-12" > */
/* 										<div class="col-sm-9" >*/
/* 											<b>Compétences</b>*/
/* 										</div>*/
/* 										<div class="col-sm-1" style="text-align:center;font-size:11px;">*/
/* 											<b>Principale</b>*/
/* 										</div>*/
/* 										<div class="col-sm-1" style="text-align:center;font-size:11px;">*/
/* 										<b>Secondaire</b>*/
/* 										</div>*/
/* 										<div class="col-sm-1" style="text-align:center;font-size:11px;">*/
/* 										<b>Aucune</b>*/
/* 										</div>																		*/
/* 									</div>*/
/* */
/* */
/* 					{% endif %}			*/
/* 		*/
/* 						*/
/* 					<div class="col-sm-12"> */
/* 						<div class="col-sm-9">*/
/* 			     			{{ specificCompetences.sc_title}}  {{ specificCompetences.rating}} */
/* 			     		</div>	*/
/* 						<div class="col-sm-1"  style="text-align:center">*/
/* 							{% if specificCompetences.rating==2 %}*/
/* 			     				<input type="radio" name="radio{{specificCompetences.sc_id}}" checked="checked"  value="2">*/
/* 			     			{% else %}*/
/* 			     				<input type="radio" name="radio{{specificCompetences.sc_id}}" value="2">*/
/* 			     			{% endif %}*/
/* 			     		</div>	 */
/* 						<div class="col-sm-1"  style="text-align:center">*/
/* 							{% if specificCompetences.rating==1 %}*/
/* 			     				<input type="radio" name="radio{{specificCompetences.sc_id}}" checked="checked"  value="1">*/
/* 			     			{% else %}*/
/* 			     				<input type="radio" name="radio{{specificCompetences.sc_id}}" value="1">*/
/* 			     			{% endif %}*/
/* 			     		</div>	*/
/* 						<div class="col-sm-1"  style="text-align:center">*/
/* 							{% if specificCompetences.rating=='' %}*/
/* 			     				<input type="radio" name="radio{{specificCompetences.sc_id}}" checked="checked"  value="0">*/
/* 			     			{% else %}*/
/* 			     				<input type="radio" name="radio{{specificCompetences.sc_id}}" value="0">*/
/* 			     			{% endif %} */
/* 			     		</div>   	*/
/* 			     	*/
/* 			     	</div>   		 */
/* 			 */
/* 					{% set gc = specificCompetences.gc_id %}  */
/* 							*/
/* 		    	{% endfor %}*/
/* 		    	*/
/* 				{% if   gc !="" %}    	*/
/* 						</div>*/
/* 					</div>	*/
/* 				</div>	*/
/* 				{% endif %}		    	*/
/*   			</div>  */
/*   		  	 */
/* 		</div>*/
/* 		<hr/>  */
/* 		<div class="col-sm-12">		 */
/* 	   		<button class="btn btn-color2" type="submit"><i class="icon icon-check icon-lg"></i> Enregistrer</button>*/
/*     		<button class="btn btn-inverse" type="button" data-dismiss="modal"><i class="icon icon-times icon-lg"></i> Fermer</button>	 	   */
/*   	*/
/*  		{{ form_rest(form) }}*/
/*  		*/
/*  		</div>*/
/* 	</form> */
/* */
/* </div> */
