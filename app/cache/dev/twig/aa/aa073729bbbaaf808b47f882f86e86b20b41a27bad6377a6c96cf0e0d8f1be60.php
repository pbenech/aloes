<?php

/* IfeAloesBundle:Tableaux:index.html.twig */
class __TwigTemplate_0eabf25b345129a490dd56740145a20010e1666c416b44afdde66e5d07e49de8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'sidebar_nav' => array($this, 'block_sidebar_nav'),
            'header_nav' => array($this, 'block_header_nav'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((isset($context["parent_template_var"]) ? $context["parent_template_var"] : $this->getContext($context, "parent_template_var")), "IfeAloesBundle:Tableaux:index.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "<div class='title-two1a col-md-12 col-sm-12'> 
    \tTableaux de bord
    </div>

\t<br/>
\t<form id=\"aloes_tableaux\" action=\"\" method=\"post\" ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">\t    

\t\t<div class='col-sm-12 block3'  > \t
\t\t\t<div class='col-sm-2' id= \"block_left\" style=\"padding:0px;\">
\t\t\t\t\t<br/>\t
\t\t\t\t\t<div id=\"ProgramPanel\"  class=\"panel-group\" id=\"accordion1\" role=\"tablist1\" aria-multiselectable=\"true\">
\t\t\t\t\t  <div class=\"panel panel-default\">
\t\t\t\t\t    <div class=\"panel-heading\" role=\"tab\" id=\"heading1\">
\t\t\t\t\t      <h4 class=\"panel-title\">
\t\t\t\t\t        <a role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapse1\" aria-expanded=\"true\" aria-controls=\"collapse1\">
\t\t\t\t\t          Programme
\t\t\t\t\t        </a>
\t\t\t\t\t      </h4>
\t\t\t\t\t    </div>
\t\t\t\t\t    <div id=\"collapse1\" class=\"panel-collapse collapse in\" role=\"tabpanel\" aria-labelledby=\"heading1\">
\t\t\t\t\t      <div class=\"panel-body\">
\t\t\t\t\t\t\t";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "programs", array()), 'widget', array("attr" => array("id" => "programs", "onChange" => "populate_program();")));
        echo " \t
\t\t\t\t\t      </div>
\t\t\t\t\t    </div>
\t\t\t\t\t  </div>
\t\t\t\t\t</div>  

\t\t\t\t\t<div id=\"ParcoursPanel\" class=\"panel-group \" id=\"accordion2\" role=\"tablist2\" aria-multiselectable=\"true\">
\t\t\t\t\t  <div class=\"panel panel-default\">
\t\t\t\t\t    <div class=\"panel-heading\" role=\"tab\" id=\"heading2\">
\t\t\t\t\t      <h4 class=\"panel-title\">
\t\t\t\t\t        <a role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapse2\" aria-expanded=\"true\" aria-controls=\"collapse2\">
\t\t\t\t\t          Filtre : Parcours
\t\t\t\t\t        </a>
\t\t\t\t\t      </h4>
\t\t\t\t\t    </div>
\t\t\t\t\t    <div id=\"collapse2\" class=\"panel-collapse collapse in\" role=\"tabpanel\" aria-labelledby=\"heading2\">
\t\t\t\t\t      <div class=\"panel-body\">
\t\t\t\t\t\t\t\t<div id=\"aloes_tableaux_parcours\"  onchange=\"populate_filtre();\">\t\t\t\t\t\t  \t
\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t      </div>
\t\t\t\t\t    </div>
\t\t\t\t\t  </div>
\t\t\t\t\t</div> 


\t\t\t\t\t<div id=\"SemestresPanel\" class=\"panel-group\" id=\"accordion3\" role=\"tablist3\" aria-multiselectable=\"true\">
\t\t\t\t\t  <div class=\"panel panel-default\">
\t\t\t\t\t    <div class=\"panel-heading\" role=\"tab\" id=\"heading3\">
\t\t\t\t\t      <h4 class=\"panel-title\">
\t\t\t\t\t        <a role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapse3\" aria-expanded=\"true\" aria-controls=\"collapse3\">
\t\t\t\t\t          Filtre : Semestres
\t\t\t\t\t        </a>
\t\t\t\t\t      </h4>
\t\t\t\t\t    </div>
\t\t\t\t\t    <div id=\"collapse3\" class=\"panel-collapse collapse in\" role=\"tabpanel\" aria-labelledby=\"heading3\">
\t\t\t\t\t      <div class=\"panel-body\">
\t\t\t\t\t\t\t\t<div id=\"aloes_tableaux_semestres\" onchange=\"populate_filtre();\">\t\t\t\t\t\t  \t
\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t      </div>
\t\t\t\t\t    </div>
\t\t\t\t\t  </div>
\t\t\t\t\t</div> 

\t\t\t\t\t<br/>
\t\t\t\t\t
\t\t\t</div>
\t\t\t<div class='col-sm-10' >\t\t
\t\t\t\t<div class='col-sm-12 block3' >\t
\t\t\t\t\t<br/>
\t\t\t\t\t<label>Type de rapports</label>\t
\t\t\t\t\t<select id=\"aloes_tableaux_rapports\" name=\"aloes_tableaux[rapports][]\" onchange=\"populate_rapport();\">
\t\t\t\t\t\t    <option value=\"0\">Programme</option>
\t\t\t\t\t\t    <option value=\"1\">Plan de cours</option>
\t\t\t\t\t\t    <option value=\"2\">Référentiel de compétences</option>
\t\t\t\t\t\t    <option value=\"3\">Evaluations</option> 
\t\t\t\t\t</select>\t
\t\t\t\t\t<br/><br/>\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  \t
\t\t\t \t</div>\t\t\t
\t\t\t\t<br/>  
\t\t\t\t<div class='col-sm-12 block3'  id=\"ChampsPanel\">\t\t\t\t
\t\t\t\t\t\t<label>Champs</label><br/> \t
\t\t\t\t\t\t\t<div id=\"aloes_tableaux_champs\">\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class='col-sm-3' >\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"checkbox\" >
\t\t\t\t\t\t\t\t\t\t<label class=\"\">
\t\t\t\t\t\t\t\t\t\t\t<input checked id=\"aloes_tableaux_champs_A\" type=\"checkbox\" name=\"aloes_tableaux[champs][]\" value=\"A\">
\t\t\t\t\t\t\t\t\t\t\tDescription
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t\t\t<label class=\"\">
\t\t\t\t\t\t\t\t\t\t\t<input checked id=\"aloes_tableaux_champs_B\" type=\"checkbox\" name=\"aloes_tableaux[champs][]\" value=\"B\">
\t\t\t\t\t\t\t\t\t\t\tMéthodes pédagogiques
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t\t  \t
\t\t\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t\t\t<label class=\"\">
\t\t\t\t\t\t\t\t\t\t\t<input checked id=\"aloes_tableaux_champs_C\" type=\"checkbox\" name=\"aloes_tableaux[champs][]\" value=\"C\">
\t\t\t\t\t\t\t\t\t\t\tEvaluation
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t</div>\t

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class='col-sm-3' >\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t\t\t<label class=\"\">
\t\t\t\t\t\t\t\t\t\t\t<input checked id=\"aloes_tableaux_champs_D\" type=\"checkbox\" name=\"aloes_tableaux[champs][]\" value=\"D\">
\t\t\t\t\t\t\t\t\t\t\tRessources
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t\t\t<label class=\"\">
\t\t\t\t\t\t\t\t\t\t\t<input checked id=\"aloes_tableaux_champs_E\" type=\"checkbox\" name=\"aloes_tableaux[champs][]\" value=\"E\">
\t\t\t\t\t\t\t\t\t\t\tRèglements
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t\t\t<label class=\"\">
\t\t\t\t\t\t\t\t\t\t\t<input checked id=\"aloes_tableaux_champs_F\" type=\"checkbox\" name=\"aloes_tableaux[champs][]\" value=\"F\">
\t\t\t\t\t\t\t\t\t\t\tAutres informations utiles
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class='col-sm-3' >\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t\t\t<label class=\"\">
\t\t\t\t\t\t\t\t\t\t\t<input checked id=\"aloes_tableaux_champs_G\" type=\"checkbox\" name=\"aloes_tableaux[champs][]\" value=\"G\">
\t\t\t\t\t\t\t\t\t\t\tObjectifs généraux
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t\t\t<label class=\"\">
\t\t\t\t\t\t\t\t\t\t\t<input checked id=\"aloes_tableaux_champs_H\" type=\"checkbox\" name=\"aloes_tableaux[champs][]\" value=\"H\">
\t\t\t\t\t\t\t\t\t\t\tObjectifs spécifiques
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t\t\t<label class=\"\">
\t\t\t\t\t\t\t\t\t\t\t<input checked id=\"aloes_tableaux_champs_I\" type=\"checkbox\" name=\"aloes_tableaux[champs][]\" value=\"I\">
\t\t\t\t\t\t\t\t\t\t\tCompétences générales
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class='col-sm-3' >\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t\t\t<label class=\"\">
\t\t\t\t\t\t\t\t\t\t\t<input checked id=\"aloes_tableaux_champs_J\" type=\"checkbox\" name=\"aloes_tableaux[champs][]\" value=\"J\">
\t\t\t\t\t\t\t\t\t\t\tCompétences spécifiques
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t\t\t<label class=\"\">
\t\t\t\t\t\t\t\t\t\t\t<input checked id=\"aloes_tableaux_champs_K\" type=\"checkbox\" name=\"aloes_tableaux[champs][]\" value=\"K\">
\t\t\t\t\t\t\t\t\t\t\tSéquences
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t\t\t<label class=\"\">
\t\t\t\t\t\t\t\t\t\t\t<input checked id=\"aloes_tableaux_champs_L\" type=\"checkbox\" name=\"aloes_tableaux[champs][]\" value=\"L\">
\t\t\t\t\t\t\t\t\t\t\tTravail à réaliser
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t\t\t<label class=\"\">
\t\t\t\t\t\t\t\t\t\t\t<input  id=\"aloes_tableaux_champs_M\" type=\"checkbox\" name=\"aloes_tableaux[champs][]\" value=\"M\">
\t\t\t\t\t\t\t\t\t\t\tEvènements
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div> \t  \t  \t\t\t\t\t
\t\t\t\t</div>\t\t\t\t\t\t\t
\t\t\t\t


\t\t\t\t<div class='col-sm-12 block3'  id=\"ChampsUE\" > 
\t\t\t\t\t<div class='col-sm-12' >
\t\t\t\t\t\t\t<label>UE</label>
\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t<div id=\"aloes_tableaux_ue\">\t


\t\t\t\t\t\t<div class='col-sm-12' >
\t\t\t\t\t\t
\t\t\t\t\t\t\t";
        // line 198
        if (((isset($context["niveau"]) ? $context["niveau"] : $this->getContext($context, "niveau")) == 3)) {
            // line 199
            echo "\t\t\t\t\t\t\t\t<input checked  id=\"aloes_tableaux_cue_";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "html", null, true);
            echo "\" type=\"checkbox\" name=\"aloes_tableaux[ue][]\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "label", array()), "html", null, true);
            echo "
\t\t\t\t\t\t\t";
        } else {
            // line 200
            echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\tSélectionner un programme
\t\t\t\t\t\t\t";
        }
        // line 203
        echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>\t\t\t\t\t\t\t  \t
\t\t\t\t\t</div>\t\t
\t\t\t\t</div>

\t\t\t\t<div class='col-sm-12' >
\t\t\t\t\t<button class=\"btn btn-color1\" type=\"submit\"><i class=\"icon icon-check icon-lg\"></i>Valider</button>\t
\t\t\t\t\t<br/><br/>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t
\t\t\t</div>
\t\t</div>

\t\t";
        // line 217
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "\t
    
\t</form>\t\t    


\t<div id=\"aloes_tableaux_result\" class=\"col-sm-12 block3\"  >\t
\t\t<br/><br/>
\t</div>

<script type=\"text/javascript\">

      \$(\"#ChampsPanel\").hide();
      \$(\"#ChampsUE\").hide();      \t  

\t  ";
        // line 231
        if ((array_key_exists("niveau", $context) && (((isset($context["niveau"]) ? $context["niveau"] : $this->getContext($context, "niveau")) == 2) || ((isset($context["niveau"]) ? $context["niveau"] : $this->getContext($context, "niveau")) == 3)))) {
            // line 232
            echo "\t  
\t\t  populate_program(";
            // line 233
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["program"]) ? $context["program"] : $this->getContext($context, "program")), "id", array()), "html", null, true);
            echo "); 
\t\t  
      \t  \$(\"#aloes_tableaux_programs_";
            // line 235
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["program"]) ? $context["program"] : $this->getContext($context, "program")), "id", array()), "html", null, true);
            echo "\").prop( \"checked\", true);\t\t
      \t  \$(\"#block_left\").hide();
\t\t  \$(\"#ProgramPanel\").hide();
\t\t  \$(\"#ParcoursPanel\").hide();
\t\t  \$(\"#SemestresPanel\").hide();\t\t  \t\t  
\t  ";
        }
        // line 241
        echo "\t  
\t  ";
        // line 242
        if (((isset($context["niveau"]) ? $context["niveau"] : $this->getContext($context, "niveau")) == 3)) {
            // line 243
            echo "      \t  \$(\"#aloes_tableaux_ue_";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "html", null, true);
            echo "\").prop( \"checked\", true);\t
      \t  
      \t  \$(\"#ChampsUE\").hide();\t  
\t  ";
        }
        // line 246
        echo "\t \t  

      function populate_program(id_select){
      
 \t      if (id_select==null)
\t \t      var id_select = \$(\"#aloes_tableaux_programs input[type='radio']:checked\").val();
 \t       
          \$.ajax({
            url: \"";
        // line 254
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tableaux_bord_programs", array("niv" => (isset($context["niveau"]) ? $context["niveau"] : $this->getContext($context, "niveau")))), "html", null, true);
        echo "\",
            type: 'POST',
            data: {'id': id_select},
            dataType: 'json',
            success: function(json){
            
            
\t          \$('#aloes_tableaux_parcours').empty();
              \$.each(json.parcours, function(index, value) 
              \t\t{              \t\t
           \t\t\t\$('#aloes_tableaux_parcours').append(\"<div class='checkbox'><label class=''><input id='aloes_tableaux_parcours_\"+index+\"' type='checkbox' value='\"+index+\"' name='aloes_tableaux[parcours][]'>\"+value+\"</label></div>\");
              \t\t});
              

            ";
        // line 268
        if (((isset($context["niveau"]) ? $context["niveau"] : $this->getContext($context, "niveau")) != 3)) {
            echo "  \t\t\t
\t
\t              \$('#aloes_tableaux_ue').empty();\t
\t              \$('#aloes_tableaux_ue').append(\"<div class='col-sm-12'>\");\t
\t              \$.each(json.ue, function(index, value) 
\t              \t\t{          \t\t
\t           \t\t\t\$('#aloes_tableaux_ue').append(\"<div  class='col-sm-3 col-md-3'><input id='aloes_tableaux_ue_\"+value.id+\"' type='checkbox' value='\"+value.id+\"' name='aloes_tableaux[ue][]'> \"+value.label+\"</div>\");
\t               \t\t}); 
\t              \$('#aloes_tableaux_ue').append(\"</div>\");\t
      
            ";
        }
        // line 278
        echo "        
                              \t\t
              \$('#aloes_tableaux_semestres').empty();\t\t
              \$.each(json.semestres, function(index, value) 
              \t\t{              \t\t
           \t\t\t\$('#aloes_tableaux_semestres').append(\"<div class='checkbox'><label class=''><input id='aloes_tableaux_semestres_\"+value.id+\"' type='checkbox' value='\"+value.id+\"' name='aloes_tableaux[semestres][]'>\"+value.label+\"</label></div>\");
               \t\t});                \t\t
            }
          });  
          
      } 
      

      function populate_filtre(){

\t\t  var form=\$(\"#aloes_tableaux\");

  \t      data = form.serialize();\t\t 
  \t        \t\t\t 

          \$.ajax({ 
            url: \"";
        // line 299
        echo $this->env->getExtension('routing')->getPath("tableaux_bord_filtre");
        echo "\",
            type: 'POST',
            data: data,
            dataType: 'json',
            success: function(json){
             
            \$('#aloes_tableaux_ue').empty();\t
            \$('#aloes_tableaux_ue').append(\"\");
             
            \$.each(json.ue, function(index, value) 
              \t\t{               \t\t
           \t\t\t\$('#aloes_tableaux_ue').append(\"<div class='col-sm-3 col-md-3' ><input \"+value.checked+\" id='aloes_tableaux_ue_\"+value.id+\"' type='checkbox' value='\"+value.id+\"' name='aloes_tableaux[ue][]'> \"+value.label+\"</div>\");
              \t\t}); 
              \t\t
              \t\t
            }

          });   

          
      }


\t\t\$(\"#aloes_tableaux\").submit(function() {\t

 \t\t\tvar form=\$(\"#aloes_tableaux\");

  \t      \tdata = form.serialize();\t         
\t
\t\t\t\$.ajax({
\t\t\t\t\ttype: \"POST\",\t\t\t\t
\t\t\t\t\turl: \"";
        // line 330
        echo $this->env->getExtension('routing')->getPath("tableaux_bord_rapport");
        echo "\",\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\tdata: data,
\t\t\t\t\t
\t\t\t\t\tdataType : 'html',\t \t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\tcache: false,
\t\t\t\t\tsuccess: function(data) 
\t\t\t\t\t\t{\t
\t\t\t\t\t\t\$('#aloes_tableaux_result').empty().append(data);\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t}   
\t\t\t});\t             \t\t\t             \t
\t\t\treturn false;\t
  \t        \t      
\t\t\t
\t\t});\t             \t\t\t             \t
\t
      function populate_rapport(){

 \t\t\tvar form=\$(\"#aloes_tableaux\");

  \t      \tdata = form.serialize();\t

\t\t\tif \t\t\t(   \$(\"#aloes_tableaux_rapports\").val()==\"0\"  )\t\t\t
      \t\t\t{
        \t\t\$(\"#ChampsPanel\").hide();    \t\t\t
        \t\t\$(\"#ChampsUE\").hide();  
      \t\t\t}  \t      \t
\t\t\telse if \t\t\t(   \$(\"#aloes_tableaux_rapports\").val()==\"1\"  )\t\t\t
      \t\t\t{
        \t\t\$(\"#ChampsPanel\").show();
        \t\t\$(\"#ChampsUE\").show();
        \t\t        \t\t  
      \t\t\t\$(\"#aloes_tableaux_champs_A\").prop( \"checked\", true);\t\t\t\t   
      \t\t\t\$(\"#aloes_tableaux_champs_B\").prop( \"checked\", true);\t\t\t\t\t   \t
      \t\t\t\$(\"#aloes_tableaux_champs_C\").prop( \"checked\", true);\t\t\t\t   
      \t\t\t\$(\"#aloes_tableaux_champs_D\").prop( \"checked\", true);\t
      \t\t\t\$(\"#aloes_tableaux_champs_E\").prop( \"checked\", true);\t\t\t\t   
      \t\t\t\$(\"#aloes_tableaux_champs_F\").prop( \"checked\", true);\t
      \t\t\t\$(\"#aloes_tableaux_champs_G\").prop( \"checked\", true);\t\t\t\t   
      \t\t\t\$(\"#aloes_tableaux_champs_H\").prop( \"checked\", true);\t\t\t\t\t   \t
      \t\t\t\$(\"#aloes_tableaux_champs_I\").prop( \"checked\", true);\t\t\t\t   
      \t\t\t\$(\"#aloes_tableaux_champs_J\").prop( \"checked\", true);\t
      \t\t\t\$(\"#aloes_tableaux_champs_K\").prop( \"checked\", true);\t\t\t\t   
      \t\t\t\$(\"#aloes_tableaux_champs_L\").prop( \"checked\", true);\t      \t\t\t      \t\t\t

   \t\t\t\t\$(\"#aloes_tableaux_champs_A\").prop( \"disabled\", false);\t\t\t\t   
      \t\t\t\$(\"#aloes_tableaux_champs_B\").prop( \"disabled\", false);\t\t\t\t\t   \t
      \t\t\t\$(\"#aloes_tableaux_champs_C\").prop( \"disabled\", false);\t\t\t\t   
      \t\t\t\$(\"#aloes_tableaux_champs_D\").prop( \"disabled\", false);\t
      \t\t\t\$(\"#aloes_tableaux_champs_E\").prop( \"disabled\", false);\t\t\t\t   
      \t\t\t\$(\"#aloes_tableaux_champs_F\").prop( \"disabled\", false);\t
      \t\t\t\$(\"#aloes_tableaux_champs_G\").prop( \"disabled\", false);\t\t\t\t   
      \t\t\t\$(\"#aloes_tableaux_champs_H\").prop( \"disabled\", false);\t\t\t\t\t   \t
      \t\t\t\$(\"#aloes_tableaux_champs_I\").prop( \"disabled\", false);\t\t\t\t   
      \t\t\t\$(\"#aloes_tableaux_champs_J\").prop( \"disabled\", false);\t
      \t\t\t\$(\"#aloes_tableaux_champs_K\").prop( \"disabled\", false);\t\t\t\t   
      \t\t\t\$(\"#aloes_tableaux_champs_L\").prop( \"disabled\", false);\t
      \t\t\t
      \t\t\t} 
      \t\telse if (   \$(\"#aloes_tableaux_rapports\").val()==\"2\"  )\t\t
      \t\t\t{
        \t\t\$(\"#ChampsPanel\").hide();      \t\t\t
        \t\t\$(\"#ChampsUE\").show();
        \t\t
      \t\t\t\$(\"#aloes_tableaux_champs_A\").prop( \"checked\", false);\t\t\t\t   
      \t\t\t\$(\"#aloes_tableaux_champs_B\").prop( \"checked\", false);\t\t\t\t\t   \t
      \t\t\t\$(\"#aloes_tableaux_champs_C\").prop( \"checked\", false);\t\t\t\t   
      \t\t\t\$(\"#aloes_tableaux_champs_D\").prop( \"checked\", false);\t
      \t\t\t\$(\"#aloes_tableaux_champs_E\").prop( \"checked\", false);\t\t\t\t   
      \t\t\t\$(\"#aloes_tableaux_champs_F\").prop( \"checked\", false);\t
      \t\t\t\$(\"#aloes_tableaux_champs_G\").prop( \"checked\", false);\t\t\t\t   
      \t\t\t\$(\"#aloes_tableaux_champs_H\").prop( \"checked\", false);\t\t\t\t\t   \t
      \t\t\t\$(\"#aloes_tableaux_champs_I\").prop( \"checked\", true);\t\t\t\t   
      \t\t\t\$(\"#aloes_tableaux_champs_J\").prop( \"checked\", true);\t
      \t\t\t\$(\"#aloes_tableaux_champs_K\").prop( \"checked\", false);\t\t\t\t   
      \t\t\t\$(\"#aloes_tableaux_champs_L\").prop( \"checked\", false);\t  \t


      \t\t\t\$(\"#aloes_tableaux_champs_A\").prop( \"disabled\", true);\t\t\t\t   
      \t\t\t\$(\"#aloes_tableaux_champs_B\").prop( \"disabled\", true);\t\t\t\t\t   \t
      \t\t\t\$(\"#aloes_tableaux_champs_C\").prop( \"disabled\", true);\t\t\t\t   
      \t\t\t\$(\"#aloes_tableaux_champs_D\").prop( \"disabled\", true);\t
      \t\t\t\$(\"#aloes_tableaux_champs_E\").prop( \"disabled\", true);\t\t\t\t   
      \t\t\t\$(\"#aloes_tableaux_champs_F\").prop( \"disabled\", true);\t
      \t\t\t\$(\"#aloes_tableaux_champs_G\").prop( \"disabled\", true);\t\t\t\t   
      \t\t\t\$(\"#aloes_tableaux_champs_H\").prop( \"disabled\", true);\t\t\t\t\t   \t
      \t\t\t\$(\"#aloes_tableaux_champs_I\").prop( \"disabled\", false);\t\t\t\t   
      \t\t\t\$(\"#aloes_tableaux_champs_J\").prop( \"disabled\", false);\t
      \t\t\t\$(\"#aloes_tableaux_champs_K\").prop( \"disabled\", true);\t\t\t\t   
      \t\t\t\$(\"#aloes_tableaux_champs_L\").prop( \"disabled\", true);\t 

      \t\t\t \t\t
      \t\t\t}
\t\t\telse if \t\t\t(   \$(\"#aloes_tableaux_rapports\").val()==\"3\"  )\t\t\t
      \t\t\t{
        \t\t\$(\"#ChampsUE\").show();      \t\t\t     \t\t\t
      \t\t\t}
      \t\t\t
      }

 \t  
\t  

    </script>


 
";
    }

    // line 438
    public function block_sidebar_nav($context, array $blocks = array())
    {
        // line 439
        echo " ";
        $this->displayParentBlock("sidebar_nav", $context, $blocks);
        echo "
";
    }

    // line 442
    public function block_header_nav($context, array $blocks = array())
    {
        echo "\t  
 ";
        // line 443
        $this->displayParentBlock("header_nav", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "IfeAloesBundle:Tableaux:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  539 => 443,  534 => 442,  527 => 439,  524 => 438,  413 => 330,  379 => 299,  356 => 278,  342 => 268,  325 => 254,  315 => 246,  307 => 243,  305 => 242,  302 => 241,  293 => 235,  288 => 233,  285 => 232,  283 => 231,  266 => 217,  250 => 203,  245 => 200,  235 => 199,  233 => 198,  58 => 26,  39 => 10,  32 => 5,  29 => 3,  20 => 1,);
    }
}
/* {% extends  parent_template_var %} */
/* */
/* {% block content -%}*/
/* */
/*     <div class='title-two1a col-md-12 col-sm-12'> */
/*     	Tableaux de bord*/
/*     </div>*/
/* */
/* 	<br/>*/
/* 	<form id="aloes_tableaux" action="" method="post" {{ form_enctype(form) }}>	    */
/* */
/* 		<div class='col-sm-12 block3'  > 	*/
/* 			<div class='col-sm-2' id= "block_left" style="padding:0px;">*/
/* 					<br/>	*/
/* 					<div id="ProgramPanel"  class="panel-group" id="accordion1" role="tablist1" aria-multiselectable="true">*/
/* 					  <div class="panel panel-default">*/
/* 					    <div class="panel-heading" role="tab" id="heading1">*/
/* 					      <h4 class="panel-title">*/
/* 					        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="true" aria-controls="collapse1">*/
/* 					          Programme*/
/* 					        </a>*/
/* 					      </h4>*/
/* 					    </div>*/
/* 					    <div id="collapse1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading1">*/
/* 					      <div class="panel-body">*/
/* 							{{ form_widget(form.programs, {'attr': { 'id': 'programs',   'onChange':'populate_program();'}}) }} 	*/
/* 					      </div>*/
/* 					    </div>*/
/* 					  </div>*/
/* 					</div>  */
/* */
/* 					<div id="ParcoursPanel" class="panel-group " id="accordion2" role="tablist2" aria-multiselectable="true">*/
/* 					  <div class="panel panel-default">*/
/* 					    <div class="panel-heading" role="tab" id="heading2">*/
/* 					      <h4 class="panel-title">*/
/* 					        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="true" aria-controls="collapse2">*/
/* 					          Filtre : Parcours*/
/* 					        </a>*/
/* 					      </h4>*/
/* 					    </div>*/
/* 					    <div id="collapse2" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading2">*/
/* 					      <div class="panel-body">*/
/* 								<div id="aloes_tableaux_parcours"  onchange="populate_filtre();">						  	*/
/* 								</div>	*/
/* 					      </div>*/
/* 					    </div>*/
/* 					  </div>*/
/* 					</div> */
/* */
/* */
/* 					<div id="SemestresPanel" class="panel-group" id="accordion3" role="tablist3" aria-multiselectable="true">*/
/* 					  <div class="panel panel-default">*/
/* 					    <div class="panel-heading" role="tab" id="heading3">*/
/* 					      <h4 class="panel-title">*/
/* 					        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="true" aria-controls="collapse3">*/
/* 					          Filtre : Semestres*/
/* 					        </a>*/
/* 					      </h4>*/
/* 					    </div>*/
/* 					    <div id="collapse3" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading3">*/
/* 					      <div class="panel-body">*/
/* 								<div id="aloes_tableaux_semestres" onchange="populate_filtre();">						  	*/
/* 								</div>	*/
/* 					      </div>*/
/* 					    </div>*/
/* 					  </div>*/
/* 					</div> */
/* */
/* 					<br/>*/
/* 					*/
/* 			</div>*/
/* 			<div class='col-sm-10' >		*/
/* 				<div class='col-sm-12 block3' >	*/
/* 					<br/>*/
/* 					<label>Type de rapports</label>	*/
/* 					<select id="aloes_tableaux_rapports" name="aloes_tableaux[rapports][]" onchange="populate_rapport();">*/
/* 						    <option value="0">Programme</option>*/
/* 						    <option value="1">Plan de cours</option>*/
/* 						    <option value="2">Référentiel de compétences</option>*/
/* 						    <option value="3">Evaluations</option> */
/* 					</select>	*/
/* 					<br/><br/>																  	*/
/* 			 	</div>			*/
/* 				<br/>  */
/* 				<div class='col-sm-12 block3'  id="ChampsPanel">				*/
/* 						<label>Champs</label><br/> 	*/
/* 							<div id="aloes_tableaux_champs">		*/
/* 							*/
/* 								<div class='col-sm-3' >	*/
/* 																*/
/* 									<div class="checkbox" >*/
/* 										<label class="">*/
/* 											<input checked id="aloes_tableaux_champs_A" type="checkbox" name="aloes_tableaux[champs][]" value="A">*/
/* 											Description*/
/* 										</label>*/
/* 									</div>					*/
/* 									<div class="checkbox">*/
/* 										<label class="">*/
/* 											<input checked id="aloes_tableaux_champs_B" type="checkbox" name="aloes_tableaux[champs][]" value="B">*/
/* 											Méthodes pédagogiques*/
/* 										</label>*/
/* 									</div>										  	*/
/* 									<div class="checkbox">*/
/* 										<label class="">*/
/* 											<input checked id="aloes_tableaux_champs_C" type="checkbox" name="aloes_tableaux[champs][]" value="C">*/
/* 											Evaluation*/
/* 										</label>*/
/* 									</div>	*/
/* */
/* 								</div>*/
/* 								<div class='col-sm-3' >											*/
/* 									*/
/* 									<div class="checkbox">*/
/* 										<label class="">*/
/* 											<input checked id="aloes_tableaux_champs_D" type="checkbox" name="aloes_tableaux[champs][]" value="D">*/
/* 											Ressources*/
/* 										</label>*/
/* 									</div>	*/
/* 									<div class="checkbox">*/
/* 										<label class="">*/
/* 											<input checked id="aloes_tableaux_champs_E" type="checkbox" name="aloes_tableaux[champs][]" value="E">*/
/* 											Règlements*/
/* 										</label>*/
/* 									</div>*/
/* 									<div class="checkbox">*/
/* 										<label class="">*/
/* 											<input checked id="aloes_tableaux_champs_F" type="checkbox" name="aloes_tableaux[champs][]" value="F">*/
/* 											Autres informations utiles*/
/* 										</label>*/
/* 									</div>*/
/* */
/* 								</div>*/
/* 								<div class='col-sm-3' >		*/
/* 								*/
/* 									<div class="checkbox">*/
/* 										<label class="">*/
/* 											<input checked id="aloes_tableaux_champs_G" type="checkbox" name="aloes_tableaux[champs][]" value="G">*/
/* 											Objectifs généraux*/
/* 										</label>*/
/* 									</div>*/
/* 									<div class="checkbox">*/
/* 										<label class="">*/
/* 											<input checked id="aloes_tableaux_champs_H" type="checkbox" name="aloes_tableaux[champs][]" value="H">*/
/* 											Objectifs spécifiques*/
/* 										</label>*/
/* 									</div>*/
/* 									<div class="checkbox">*/
/* 										<label class="">*/
/* 											<input checked id="aloes_tableaux_champs_I" type="checkbox" name="aloes_tableaux[champs][]" value="I">*/
/* 											Compétences générales*/
/* 										</label>*/
/* 									</div>*/
/* 									*/
/* */
/* 								</div>*/
/* 								<div class='col-sm-3' >											*/
/* 									*/
/* 									<div class="checkbox">*/
/* 										<label class="">*/
/* 											<input checked id="aloes_tableaux_champs_J" type="checkbox" name="aloes_tableaux[champs][]" value="J">*/
/* 											Compétences spécifiques*/
/* 										</label>*/
/* 									</div>*/
/* 									<div class="checkbox">*/
/* 										<label class="">*/
/* 											<input checked id="aloes_tableaux_champs_K" type="checkbox" name="aloes_tableaux[champs][]" value="K">*/
/* 											Séquences*/
/* 										</label>*/
/* 									</div>*/
/* 									<div class="checkbox">*/
/* 										<label class="">*/
/* 											<input checked id="aloes_tableaux_champs_L" type="checkbox" name="aloes_tableaux[champs][]" value="L">*/
/* 											Travail à réaliser*/
/* 										</label>*/
/* 									</div>*/
/* 									<div class="checkbox">*/
/* 										<label class="">*/
/* 											<input  id="aloes_tableaux_champs_M" type="checkbox" name="aloes_tableaux[champs][]" value="M">*/
/* 											Evènements*/
/* 										</label>*/
/* 									</div>*/
/* 								</div>									*/
/* 							</div> 	  	  					*/
/* 				</div>							*/
/* 				*/
/* */
/* */
/* 				<div class='col-sm-12 block3'  id="ChampsUE" > */
/* 					<div class='col-sm-12' >*/
/* 							<label>UE</label>*/
/* 					</div>*/
/* 						*/
/* 					<div id="aloes_tableaux_ue">	*/
/* */
/* */
/* 						<div class='col-sm-12' >*/
/* 						*/
/* 							{% if niveau==3				%}*/
/* 								<input checked  id="aloes_tableaux_cue_{{course.id}}" type="checkbox" name="aloes_tableaux[ue][]" value="{{course.id}}">{{course.label}}*/
/* 							{% else %}							*/
/* 								Sélectionner un programme*/
/* 							{% endif %}*/
/* 							*/
/* 						</div>							  	*/
/* 					</div>		*/
/* 				</div>*/
/* */
/* 				<div class='col-sm-12' >*/
/* 					<button class="btn btn-color1" type="submit"><i class="icon icon-check icon-lg"></i>Valider</button>	*/
/* 					<br/><br/>*/
/* 				</div>*/
/* 				*/
/* 				*/
/* 			</div>*/
/* 		</div>*/
/* */
/* 		{{ form_errors(form) }}	*/
/*     */
/* 	</form>		    */
/* */
/* */
/* 	<div id="aloes_tableaux_result" class="col-sm-12 block3"  >	*/
/* 		<br/><br/>*/
/* 	</div>*/
/* */
/* <script type="text/javascript">*/
/* */
/*       $("#ChampsPanel").hide();*/
/*       $("#ChampsUE").hide();      	  */
/* */
/* 	  {% if niveau is defined and (niveau==2 or niveau==3) 	%}*/
/* 	  */
/* 		  populate_program({{ program.id}}); */
/* 		  */
/*       	  $("#aloes_tableaux_programs_{{ program.id}}").prop( "checked", true);		*/
/*       	  $("#block_left").hide();*/
/* 		  $("#ProgramPanel").hide();*/
/* 		  $("#ParcoursPanel").hide();*/
/* 		  $("#SemestresPanel").hide();		  		  */
/* 	  {% endif %}*/
/* 	  */
/* 	  {% if niveau==3 	%}*/
/*       	  $("#aloes_tableaux_ue_{{ course.id}}").prop( "checked", true);	*/
/*       	  */
/*       	  $("#ChampsUE").hide();	  */
/* 	  {% endif %}	 	  */
/* */
/*       function populate_program(id_select){*/
/*       */
/*  	      if (id_select==null)*/
/* 	 	      var id_select = $("#aloes_tableaux_programs input[type='radio']:checked").val();*/
/*  	       */
/*           $.ajax({*/
/*             url: "{{ path('tableaux_bord_programs', {niv: niveau}) }}",*/
/*             type: 'POST',*/
/*             data: {'id': id_select},*/
/*             dataType: 'json',*/
/*             success: function(json){*/
/*             */
/*             */
/* 	          $('#aloes_tableaux_parcours').empty();*/
/*               $.each(json.parcours, function(index, value) */
/*               		{              		*/
/*            			$('#aloes_tableaux_parcours').append("<div class='checkbox'><label class=''><input id='aloes_tableaux_parcours_"+index+"' type='checkbox' value='"+index+"' name='aloes_tableaux[parcours][]'>"+value+"</label></div>");*/
/*               		});*/
/*               */
/* */
/*             {% if niveau!=3				%}  			*/
/* 	*/
/* 	              $('#aloes_tableaux_ue').empty();	*/
/* 	              $('#aloes_tableaux_ue').append("<div class='col-sm-12'>");	*/
/* 	              $.each(json.ue, function(index, value) */
/* 	              		{          		*/
/* 	           			$('#aloes_tableaux_ue').append("<div  class='col-sm-3 col-md-3'><input id='aloes_tableaux_ue_"+value.id+"' type='checkbox' value='"+value.id+"' name='aloes_tableaux[ue][]'> "+value.label+"</div>");*/
/* 	               		}); */
/* 	              $('#aloes_tableaux_ue').append("</div>");	*/
/*       */
/*             {% endif				%}        */
/*                               		*/
/*               $('#aloes_tableaux_semestres').empty();		*/
/*               $.each(json.semestres, function(index, value) */
/*               		{              		*/
/*            			$('#aloes_tableaux_semestres').append("<div class='checkbox'><label class=''><input id='aloes_tableaux_semestres_"+value.id+"' type='checkbox' value='"+value.id+"' name='aloes_tableaux[semestres][]'>"+value.label+"</label></div>");*/
/*                		});                		*/
/*             }*/
/*           });  */
/*           */
/*       } */
/*       */
/* */
/*       function populate_filtre(){*/
/* */
/* 		  var form=$("#aloes_tableaux");*/
/* */
/*   	      data = form.serialize();		 */
/*   	        			 */
/* */
/*           $.ajax({ */
/*             url: "{{ path('tableaux_bord_filtre') }}",*/
/*             type: 'POST',*/
/*             data: data,*/
/*             dataType: 'json',*/
/*             success: function(json){*/
/*              */
/*             $('#aloes_tableaux_ue').empty();	*/
/*             $('#aloes_tableaux_ue').append("");*/
/*              */
/*             $.each(json.ue, function(index, value) */
/*               		{               		*/
/*            			$('#aloes_tableaux_ue').append("<div class='col-sm-3 col-md-3' ><input "+value.checked+" id='aloes_tableaux_ue_"+value.id+"' type='checkbox' value='"+value.id+"' name='aloes_tableaux[ue][]'> "+value.label+"</div>");*/
/*               		}); */
/*               		*/
/*               		*/
/*             }*/
/* */
/*           });   */
/* */
/*           */
/*       }*/
/* */
/* */
/* 		$("#aloes_tableaux").submit(function() {	*/
/* */
/*  			var form=$("#aloes_tableaux");*/
/* */
/*   	      	data = form.serialize();	         */
/* 	*/
/* 			$.ajax({*/
/* 					type: "POST",				*/
/* 					url: "{{ path("tableaux_bord_rapport") }}",										*/
/* 					data: data,*/
/* 					*/
/* 					dataType : 'html',	 												*/
/* 					cache: false,*/
/* 					success: function(data) */
/* 						{	*/
/* 						$('#aloes_tableaux_result').empty().append(data);															*/
/* 						}   */
/* 			});	             			             	*/
/* 			return false;	*/
/*   	        	      */
/* 			*/
/* 		});	             			             	*/
/* 	*/
/*       function populate_rapport(){*/
/* */
/*  			var form=$("#aloes_tableaux");*/
/* */
/*   	      	data = form.serialize();	*/
/* */
/* 			if 			(   $("#aloes_tableaux_rapports").val()=="0"  )			*/
/*       			{*/
/*         		$("#ChampsPanel").hide();    			*/
/*         		$("#ChampsUE").hide();  */
/*       			}  	      	*/
/* 			else if 			(   $("#aloes_tableaux_rapports").val()=="1"  )			*/
/*       			{*/
/*         		$("#ChampsPanel").show();*/
/*         		$("#ChampsUE").show();*/
/*         		        		  */
/*       			$("#aloes_tableaux_champs_A").prop( "checked", true);				   */
/*       			$("#aloes_tableaux_champs_B").prop( "checked", true);					   	*/
/*       			$("#aloes_tableaux_champs_C").prop( "checked", true);				   */
/*       			$("#aloes_tableaux_champs_D").prop( "checked", true);	*/
/*       			$("#aloes_tableaux_champs_E").prop( "checked", true);				   */
/*       			$("#aloes_tableaux_champs_F").prop( "checked", true);	*/
/*       			$("#aloes_tableaux_champs_G").prop( "checked", true);				   */
/*       			$("#aloes_tableaux_champs_H").prop( "checked", true);					   	*/
/*       			$("#aloes_tableaux_champs_I").prop( "checked", true);				   */
/*       			$("#aloes_tableaux_champs_J").prop( "checked", true);	*/
/*       			$("#aloes_tableaux_champs_K").prop( "checked", true);				   */
/*       			$("#aloes_tableaux_champs_L").prop( "checked", true);	      			      			*/
/* */
/*    				$("#aloes_tableaux_champs_A").prop( "disabled", false);				   */
/*       			$("#aloes_tableaux_champs_B").prop( "disabled", false);					   	*/
/*       			$("#aloes_tableaux_champs_C").prop( "disabled", false);				   */
/*       			$("#aloes_tableaux_champs_D").prop( "disabled", false);	*/
/*       			$("#aloes_tableaux_champs_E").prop( "disabled", false);				   */
/*       			$("#aloes_tableaux_champs_F").prop( "disabled", false);	*/
/*       			$("#aloes_tableaux_champs_G").prop( "disabled", false);				   */
/*       			$("#aloes_tableaux_champs_H").prop( "disabled", false);					   	*/
/*       			$("#aloes_tableaux_champs_I").prop( "disabled", false);				   */
/*       			$("#aloes_tableaux_champs_J").prop( "disabled", false);	*/
/*       			$("#aloes_tableaux_champs_K").prop( "disabled", false);				   */
/*       			$("#aloes_tableaux_champs_L").prop( "disabled", false);	*/
/*       			*/
/*       			} */
/*       		else if (   $("#aloes_tableaux_rapports").val()=="2"  )		*/
/*       			{*/
/*         		$("#ChampsPanel").hide();      			*/
/*         		$("#ChampsUE").show();*/
/*         		*/
/*       			$("#aloes_tableaux_champs_A").prop( "checked", false);				   */
/*       			$("#aloes_tableaux_champs_B").prop( "checked", false);					   	*/
/*       			$("#aloes_tableaux_champs_C").prop( "checked", false);				   */
/*       			$("#aloes_tableaux_champs_D").prop( "checked", false);	*/
/*       			$("#aloes_tableaux_champs_E").prop( "checked", false);				   */
/*       			$("#aloes_tableaux_champs_F").prop( "checked", false);	*/
/*       			$("#aloes_tableaux_champs_G").prop( "checked", false);				   */
/*       			$("#aloes_tableaux_champs_H").prop( "checked", false);					   	*/
/*       			$("#aloes_tableaux_champs_I").prop( "checked", true);				   */
/*       			$("#aloes_tableaux_champs_J").prop( "checked", true);	*/
/*       			$("#aloes_tableaux_champs_K").prop( "checked", false);				   */
/*       			$("#aloes_tableaux_champs_L").prop( "checked", false);	  	*/
/* */
/* */
/*       			$("#aloes_tableaux_champs_A").prop( "disabled", true);				   */
/*       			$("#aloes_tableaux_champs_B").prop( "disabled", true);					   	*/
/*       			$("#aloes_tableaux_champs_C").prop( "disabled", true);				   */
/*       			$("#aloes_tableaux_champs_D").prop( "disabled", true);	*/
/*       			$("#aloes_tableaux_champs_E").prop( "disabled", true);				   */
/*       			$("#aloes_tableaux_champs_F").prop( "disabled", true);	*/
/*       			$("#aloes_tableaux_champs_G").prop( "disabled", true);				   */
/*       			$("#aloes_tableaux_champs_H").prop( "disabled", true);					   	*/
/*       			$("#aloes_tableaux_champs_I").prop( "disabled", false);				   */
/*       			$("#aloes_tableaux_champs_J").prop( "disabled", false);	*/
/*       			$("#aloes_tableaux_champs_K").prop( "disabled", true);				   */
/*       			$("#aloes_tableaux_champs_L").prop( "disabled", true);	 */
/* */
/*       			 		*/
/*       			}*/
/* 			else if 			(   $("#aloes_tableaux_rapports").val()=="3"  )			*/
/*       			{*/
/*         		$("#ChampsUE").show();      			     			*/
/*       			}*/
/*       			*/
/*       }*/
/* */
/*  	  */
/* 	  */
/* */
/*     </script>*/
/* */
/* */
/*  */
/* {% endblock %}*/
/*     */
/* {% block sidebar_nav %}*/
/*  {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block header_nav %}	  */
/*  {{ parent() }}*/
/* {% endblock %} */
/* */
