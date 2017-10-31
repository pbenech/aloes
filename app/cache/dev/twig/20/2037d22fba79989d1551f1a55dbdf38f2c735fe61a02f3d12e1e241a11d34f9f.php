<?php

/* IfeAloesBundle:Event2:EV_XX.html.twig */
class __TwigTemplate_b21d01ae51fb8b3585c0a0711a5405c889eb8f3c3d4a2bec40bfb77c60e3445f extends Twig_Template
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
        echo "  ";
        $context["macros"] = $this->loadTemplate("IfeAloesBundle:Course:linking.html.twig", "IfeAloesBundle:Event2:EV_XX.html.twig", 1);
        // line 2
        echo " 
 ";
        // line 3
        if ((array_key_exists("entete", $context) && ((isset($context["entete"]) ? $context["entete"] : $this->getContext($context, "entete")) == true))) {
            // line 4
            echo " \t\t\t<div id=\"AS2_";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "id", array()), "html", null, true);
            echo "\" class=\"row block2\">
 ";
        }
        // line 5
        echo " 

\t\t<div id=\"AS2_";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "id", array()), "html", null, true);
        echo "_A\" class=\"col-sm-12\">  
 
 \t\t\t<div id=\"AS2_";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "id", array()), "html", null, true);
        echo "_list\" class=\"col-sm-3\">
 \t\t\t\t\t\t\t
\t\t\t\t<span  id=\"OS_";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "id", array()), "html", null, true);
        echo "_A_bloc\"  class=\"button3\"  > \t  
\t\t\t\t\t\t\t";
        // line 12
        if ((array_key_exists("type", $context) && ((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "new"))) {
            echo " 
\t\t\t\t\t\t\t\t<span id=\"ASS2";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "id", array()), "html", null, true);
            echo "\" onclick=\"HideShow2('#AS2_";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "id", array()), "html", null, true);
            echo "_B','#ASS2";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "id", array()), "html", null, true);
            echo "');\"><span class=\"glyphicon glyphicon-collapse-up\"></span></span>
\t\t\t\t\t\t\t";
        } else {
            // line 15
            echo "\t\t\t\t\t\t\t\t<span id=\"ASS2";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "id", array()), "html", null, true);
            echo "\" onclick=\"HideShow2('#AS2_";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "id", array()), "html", null, true);
            echo "_B','#ASS2";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "id", array()), "html", null, true);
            echo "');\"><span class=\"glyphicon glyphicon-collapse-down\"></span></span>
\t\t\t\t\t\t\t";
        }
        // line 16
        echo "\t\t\t
\t\t\t\t</span>  

 \t\t\t\t<span id=\"AS2_";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "id", array()), "html", null, true);
        echo "_title\" >\t
 \t\t\t\t\t";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "title", array()), "html", null, true);
        echo " \t    
 \t\t    \t</span>    

 \t\t    </div>       
 
 \t\t\t<div id=\"AS2_";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "id", array()), "html", null, true);
        echo "_ass\" class=\"col-sm-3\">
 \t\t\t\t    ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "assessments", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["ass"]) {
            // line 27
            echo " \t\t\t\t    \t-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ass"], "title", array()), "html", null, true);
            echo " <br/>
 \t\t\t\t    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ass'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo " \t\t\t</div> 

 \t\t\t<div id=\"AS2_";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "id", array()), "html", null, true);
        echo "_deadline\" class=\"col-sm-4\">\t\t\t
\t
\t\t      \t";
        // line 33
        $context["deb"] = twig_date_format_filter($this->env, $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "startDate", array()), "d/m/Y");
        // line 34
        echo "\t\t      \t";
        $context["fin"] = twig_date_format_filter($this->env, $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "endDate", array()), "d/m/Y");
        // line 35
        echo "\t
\t
\t            ";
        // line 37
        if (((isset($context["deb"]) ? $context["deb"] : $this->getContext($context, "deb")) != (isset($context["fin"]) ? $context["fin"] : $this->getContext($context, "fin")))) {
            // line 38
            echo "                \t";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "startDate", array()), "d/m/Y"), "html", null, true);
            echo " <span class=\"glyphicon glyphicon-arrow-right\"></span> ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "endDate", array()), "d/m/Y"), "html", null, true);
            echo "     
\t            ";
        } else {
            // line 40
            echo "\t                ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "startDate", array()), "d/m/Y"), "html", null, true);
            echo "    
\t            ";
        }
        // line 41
        echo "    \t
 \t\t\t</div>
 \t\t\t

 \t\t\t<div id=\"AS2_";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "id", array()), "html", null, true);
        echo "_update\" class=\"col-sm-2\"  style=\"text-align:right\" >\t
\t\t\t\t";
        // line 46
        if (((($this->env->getExtension('security')->isGranted("ROLE_ENSEIGNANT") && $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "isRedacteur", array(0 => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array())), "method")) || ($this->env->getExtension('security')->isGranted("ROLE_RESPONSABLE") && $this->getAttribute(        // line 47
(isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "isRedacteur", array(0 => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array())), "method"))) || $this->env->getExtension('security')->isGranted("ROLE_ADMIN"))) {
            // line 49
            echo "\t     \t\t\t \t\t                    
\t\t\t\t\t<a data-toggle=\"modal\" class=\"btn2 btn-info\" href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("topic_events_edit_2", array("id" => $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "id", array()))), "html", null, true);
            echo "\" data-target=\"#myModal\"><span class=\"glyphicon glyphicon-edit\"></span> </a> \t\t\t\t        

\t\t\t\t  \t<a data-toggle=\"modal\" class=\"btn2 btn-danger\" href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("topic_events_del_2", array("id" => $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "id", array()))), "html", null, true);
            echo "\" data-target=\"#myModal\"><span class=\"glyphicon glyphicon-trash\"></span> </a> \t\t\t\t \t\t\t\t  \t               

                  ";
        }
        // line 55
        echo " \t\t\t 
 \t\t\t</div>
          
        </div>

\t\t<div id=\"AS2_";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "id", array()), "html", null, true);
        echo "_B\"  style=\"display: none;background-color:white\"  class=\"col-sm-12 block2\"> 

 \t\t\t<div  class=\"col-sm-12\">\t \t\t\t  
\t \t\t\t<div  class=\"col-sm-2 label2\">\t\t
\t \t\t\t\tDate :
\t \t\t\t</div>            
\t \t\t\t<div  class=\"col-sm-10\">\t\t
\t\t      \t\t";
        // line 67
        $context["deb"] = twig_date_format_filter($this->env, $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "startDate", array()), "d/m/Y");
        // line 68
        echo "\t\t      \t\t";
        $context["fin"] = twig_date_format_filter($this->env, $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "endDate", array()), "d/m/Y");
        // line 69
        echo "
\t\t      \t\t";
        // line 70
        if (((isset($context["deb"]) ? $context["deb"] : $this->getContext($context, "deb")) != (isset($context["fin"]) ? $context["fin"] : $this->getContext($context, "fin")))) {
            echo "\t\t      \t\t\t\t        
\t\t\t\t  \tDu ";
            // line 71
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "startDate", array()), "d/m/Y"), "html", null, true);
            echo " <i>à ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "startDate", array()), "h"), "html", null, true);
            echo "H";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "startDate", array()), "i"), "html", null, true);
            echo "</i> 
\t\t\t\t  \tau ";
            // line 72
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "endDate", array()), "d/m/Y"), "html", null, true);
            echo "   <i>à ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "endDate", array()), "h"), "html", null, true);
            echo "H";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "endDate", array()), "i"), "html", null, true);
            echo "</i>
\t\t\t\t  \t";
        } else {
            // line 74
            echo "\t\t\t\t  \t\t";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "startDate", array()), "d/m/Y"), "html", null, true);
            echo "  de ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "startDate", array()), "h"), "html", null, true);
            echo "H";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "startDate", array()), "i"), "html", null, true);
            echo " à ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "endDate", array()), "h"), "html", null, true);
            echo "H";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "endDate", array()), "i"), "html", null, true);
            echo "
\t\t\t\t  \t";
        }
        // line 76
        echo "\t \t\t\t</div>    
 \t\t\t</div>

\t\t\t";
        // line 79
        if (($this->getAttribute((isset($context["child"]) ? $context["child"] : null), "contexte", array(), "any", true, true) &&  !(null === $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "contexte", array())))) {
            // line 80
            echo "\t \t\t\t<div  class=\"col-sm-12\">\t \t\t\t  
\t\t \t\t\t<div  class=\"col-sm-2 label2\">\t\t
\t\t \t\t\t\tContexte :
\t\t \t\t\t</div>            
\t\t \t\t\t<div  class=\"col-sm-10\">
\t\t\t\t\t    <div  style=\"overflow:auto; height: 200px; width: 100%; padding: 15px; border: 1px solid #AAAAAA\">
\t\t\t\t\t    \t\t";
            // line 86
            echo $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "contexte", array());
            echo "
\t\t\t\t\t    </div>\t \t\t\t
\t\t \t\t\t</div>   
\t \t\t\t</div> 
\t \t\t";
        }
        // line 91
        echo "
\t\t\t";
        // line 92
        if (($this->getAttribute((isset($context["child"]) ? $context["child"] : null), "description", array(), "any", true, true) &&  !(null === $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "description", array())))) {
            // line 93
            echo "\t \t\t\t<div  class=\"col-sm-12\">\t \t\t\t  
\t\t \t\t\t<div  class=\"col-sm-2 label2\">\t\t
\t\t \t\t\t\tIntroduction :
\t\t \t\t\t</div>            
\t\t \t\t\t<div  class=\"col-sm-10\">
\t\t\t\t\t    <div  style=\"overflow:auto; height: 200px; width: 100%; padding: 15px; border: 1px solid #AAAAAA\">
\t\t\t\t\t    \t\t";
            // line 99
            echo $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "description", array());
            echo "
\t\t\t\t\t    </div>\t \t\t\t
\t\t \t\t\t</div>   
\t \t\t\t</div>
\t \t\t";
        }
        // line 104
        echo "
\t\t\t";
        // line 105
        if (($this->getAttribute((isset($context["child"]) ? $context["child"] : null), "instructions", array(), "any", true, true) &&  !(null === $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "instructions", array())))) {
            echo " \t\t\t
\t \t\t\t<div  class=\"col-sm-12\">\t \t\t\t \t\t\t
\t\t \t\t\t<div  class=\"col-sm-2 label2\">\t\t
\t\t \t\t\t\tConsignes et modalités :
\t\t \t\t\t</div>            
\t\t \t\t\t<div  class=\"col-sm-10\">\t
\t\t\t\t\t    <div  style=\"overflow:auto; height: 200px; width: 100%; padding: 15px; border: 1px solid #AAAAAA\">
\t\t\t\t\t    \t\t";
            // line 112
            echo $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "instructions", array());
            echo "
\t\t\t\t\t    </div>\t \t\t
\t\t \t\t\t</div>   \t\t\t
\t \t\t\t</div>
\t \t\t";
        }
        // line 117
        echo "
\t\t\t";
        // line 118
        if (($this->getAttribute((isset($context["child"]) ? $context["child"] : null), "resources", array(), "any", true, true) &&  !(null === $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "resources", array())))) {
            echo " \t\t \t\t
\t \t\t\t<div  class=\"col-sm-12\"> \t \t\t \t \t\t\t
\t\t \t\t\t<div  class=\"col-sm-2 label2\">\t\t
\t\t \t\t\t\tSupport (document,etc ) :
\t\t \t\t\t</div>            
\t\t \t\t\t<div  class=\"col-sm-10\">
\t\t\t\t\t    <div  style=\"overflow:auto; height: 200px; width: 100%; padding: 15px; border: 1px solid #AAAAAA\">
\t\t\t\t\t    \t\t";
            // line 125
            echo $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "resources", array());
            echo "
\t\t\t\t\t    </div>\t
\t\t \t\t\t</div>   
\t     \t\t</div>
\t \t\t";
        }
        // line 130
        echo "

\t\t\t";
        // line 132
        if (($this->getAttribute((isset($context["child"]) ? $context["child"] : null), "resources", array(), "any", true, true) &&  !(null === $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "resources", array())))) {
            echo " \t\t \t\t
\t \t\t\t<div  class=\"col-sm-12\"> \t \t\t \t \t\t\t
\t\t \t\t\t<div  class=\"col-sm-2 label2\">\t\t
\t\t \t\t\t\tOutils :
\t\t \t\t\t</div>            
\t\t \t\t\t<div  class=\"col-sm-10\">
\t\t\t\t\t    <div  style=\"overflow:auto; height: 200px; width: 100%; padding: 15px; border: 1px solid #AAAAAA\">
\t\t\t\t\t    \t\t";
            // line 139
            echo $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "outils", array());
            echo "
\t\t\t\t\t    </div>\t
\t\t \t\t\t</div>   
\t     \t\t</div>
\t \t\t";
        }
        // line 144
        echo "\t \t\t \t\t\t 
\t\t\t";
        // line 145
        if (($this->getAttribute((isset($context["child"]) ? $context["child"] : null), "tutoring", array(), "any", true, true) &&  !(null === $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "tutoring", array())))) {
            echo " \t
\t \t\t\t<div  class=\"col-sm-12\"> \t\t\t
\t\t \t\t\t<div  class=\"col-sm-2 label2\">\t\t
\t\t \t\t\t\tTutorat :
\t\t \t\t\t</div>            
\t\t \t\t\t<div  class=\"col-sm-10\">\t\t
\t\t\t\t\t    <div  style=\"overflow:auto; height: 200px; width: 100%; padding: 15px; border: 1px solid #AAAAAA\">
\t\t\t\t\t    \t\t";
            // line 152
            echo $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "tutoring", array());
            echo "
\t\t\t\t\t    </div>\t
\t\t \t\t\t</div>   
\t \t\t\t</div>
\t \t\t";
        }
        // line 157
        echo "


        </div>\t   

            

 
  ";
        // line 165
        if ((array_key_exists("entete", $context) && ((isset($context["entete"]) ? $context["entete"] : $this->getContext($context, "entete")) == true))) {
            echo "\t\t\t
\t\t  \t</div>\t \t\t\t\t\t\t
 ";
        }
        // line 167
        echo " 
            ";
    }

    public function getTemplateName()
    {
        return "IfeAloesBundle:Event2:EV_XX.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  374 => 167,  368 => 165,  358 => 157,  350 => 152,  340 => 145,  337 => 144,  329 => 139,  319 => 132,  315 => 130,  307 => 125,  297 => 118,  294 => 117,  286 => 112,  276 => 105,  273 => 104,  265 => 99,  257 => 93,  255 => 92,  252 => 91,  244 => 86,  236 => 80,  234 => 79,  229 => 76,  215 => 74,  206 => 72,  198 => 71,  194 => 70,  191 => 69,  188 => 68,  186 => 67,  176 => 60,  169 => 55,  163 => 52,  158 => 50,  155 => 49,  153 => 47,  152 => 46,  148 => 45,  142 => 41,  136 => 40,  128 => 38,  126 => 37,  122 => 35,  119 => 34,  117 => 33,  112 => 31,  108 => 29,  99 => 27,  95 => 26,  91 => 25,  83 => 20,  79 => 19,  74 => 16,  64 => 15,  55 => 13,  51 => 12,  47 => 11,  42 => 9,  37 => 7,  33 => 5,  27 => 4,  25 => 3,  22 => 2,  19 => 1,);
    }
}
/*   {% import 'IfeAloesBundle:Course:linking.html.twig' as macros %}*/
/*  */
/*  {% if entete is defined and entete==true%}*/
/*  			<div id="AS2_{{child.id}}" class="row block2">*/
/*  {% endif %} */
/* */
/* 		<div id="AS2_{{child.id}}_A" class="col-sm-12">  */
/*  */
/*  			<div id="AS2_{{child.id}}_list" class="col-sm-3">*/
/*  							*/
/* 				<span  id="OS_{{child.id}}_A_bloc"  class="button3"  > 	  */
/* 							{% if type is defined and type=="new"%} */
/* 								<span id="ASS2{{child.id}}" onclick="HideShow2('#AS2_{{child.id}}_B','#ASS2{{child.id}}');"><span class="glyphicon glyphicon-collapse-up"></span></span>*/
/* 							{% else %}*/
/* 								<span id="ASS2{{child.id}}" onclick="HideShow2('#AS2_{{child.id}}_B','#ASS2{{child.id}}');"><span class="glyphicon glyphicon-collapse-down"></span></span>*/
/* 							{% endif %}			*/
/* 				</span>  */
/* */
/*  				<span id="AS2_{{child.id}}_title" >	*/
/*  					{{ child.title }} 	    */
/*  		    	</span>    */
/* */
/*  		    </div>       */
/*  */
/*  			<div id="AS2_{{child.id}}_ass" class="col-sm-3">*/
/*  				    {% for ass in child.assessments %}*/
/*  				    	-{{ ass.title }} <br/>*/
/*  				    {% endfor %}*/
/*  			</div> */
/* */
/*  			<div id="AS2_{{child.id}}_deadline" class="col-sm-4">			*/
/* 	*/
/* 		      	{% set deb = child.startDate|date("d/m/Y")  %}*/
/* 		      	{% set fin = child.endDate|date("d/m/Y")    %}*/
/* 	*/
/* 	*/
/* 	            {% if deb!=fin %}*/
/*                 	{{ child.startDate|date("d/m/Y") }} <span class="glyphicon glyphicon-arrow-right"></span> {{ child.endDate|date("d/m/Y") }}     */
/* 	            {% else %}*/
/* 	                {{ child.startDate|date("d/m/Y") }}    */
/* 	            {% endif %}    	*/
/*  			</div>*/
/*  			*/
/* */
/*  			<div id="AS2_{{child.id}}_update" class="col-sm-2"  style="text-align:right" >	*/
/* 				{% if ( is_granted("ROLE_ENSEIGNANT")  and course.isRedacteur(app.user.id) ) or */
/* 						       ( is_granted("ROLE_RESPONSABLE") and course.isRedacteur(app.user.id) ) or  */
/* 						       ( is_granted("ROLE_ADMIN") )*/
/* 				%}	     			 		                    */
/* 					<a data-toggle="modal" class="btn2 btn-info" href="{{ path('topic_events_edit_2', {id:child.id}) }}" data-target="#myModal"><span class="glyphicon glyphicon-edit"></span> </a> 				        */
/* */
/* 				  	<a data-toggle="modal" class="btn2 btn-danger" href="{{ path('topic_events_del_2', {id:child.id}) }}" data-target="#myModal"><span class="glyphicon glyphicon-trash"></span> </a> 				 				  	               */
/* */
/*                   {% endif  */
/*                  %} 			 */
/*  			</div>*/
/*           */
/*         </div>*/
/* */
/* 		<div id="AS2_{{child.id}}_B"  style="display: none;background-color:white"  class="col-sm-12 block2"> */
/* */
/*  			<div  class="col-sm-12">	 			  */
/* 	 			<div  class="col-sm-2 label2">		*/
/* 	 				Date :*/
/* 	 			</div>            */
/* 	 			<div  class="col-sm-10">		*/
/* 		      		{% set deb = child.startDate|date("d/m/Y")  %}*/
/* 		      		{% set fin = child.endDate|date("d/m/Y")    %}*/
/* */
/* 		      		{% if deb!=fin    %}		      				        */
/* 				  	Du {{child.startDate|date("d/m/Y")}} <i>à {{child.startDate|date("h")}}H{{child.startDate|date("i")}}</i> */
/* 				  	au {{child.endDate|date("d/m/Y")}}   <i>à {{child.endDate|date("h")}}H{{child.endDate|date("i")}}</i>*/
/* 				  	{% else %}*/
/* 				  		{{child.startDate|date("d/m/Y")}}  de {{child.startDate|date("h")}}H{{child.startDate|date("i")}} à {{child.endDate|date("h")}}H{{child.endDate|date("i")}}*/
/* 				  	{% endif %}*/
/* 	 			</div>    */
/*  			</div>*/
/* */
/* 			{% if child.contexte is defined and 	child.contexte is not null  %}*/
/* 	 			<div  class="col-sm-12">	 			  */
/* 		 			<div  class="col-sm-2 label2">		*/
/* 		 				Contexte :*/
/* 		 			</div>            */
/* 		 			<div  class="col-sm-10">*/
/* 					    <div  style="overflow:auto; height: 200px; width: 100%; padding: 15px; border: 1px solid #AAAAAA">*/
/* 					    		{{ child.contexte|raw  }}*/
/* 					    </div>	 			*/
/* 		 			</div>   */
/* 	 			</div> */
/* 	 		{% endif %}*/
/* */
/* 			{% if child.description is defined and 	child.description is not null  %}*/
/* 	 			<div  class="col-sm-12">	 			  */
/* 		 			<div  class="col-sm-2 label2">		*/
/* 		 				Introduction :*/
/* 		 			</div>            */
/* 		 			<div  class="col-sm-10">*/
/* 					    <div  style="overflow:auto; height: 200px; width: 100%; padding: 15px; border: 1px solid #AAAAAA">*/
/* 					    		{{ child.description|raw  }}*/
/* 					    </div>	 			*/
/* 		 			</div>   */
/* 	 			</div>*/
/* 	 		{% endif %}*/
/* */
/* 			{% if child.instructions is defined and 	child.instructions is not null  %} 			*/
/* 	 			<div  class="col-sm-12">	 			 			*/
/* 		 			<div  class="col-sm-2 label2">		*/
/* 		 				Consignes et modalités :*/
/* 		 			</div>            */
/* 		 			<div  class="col-sm-10">	*/
/* 					    <div  style="overflow:auto; height: 200px; width: 100%; padding: 15px; border: 1px solid #AAAAAA">*/
/* 					    		{{ child.instructions|raw  }}*/
/* 					    </div>	 		*/
/* 		 			</div>   			*/
/* 	 			</div>*/
/* 	 		{% endif %}*/
/* */
/* 			{% if child.resources is defined and 	child.resources is not null  %} 		 		*/
/* 	 			<div  class="col-sm-12"> 	 		 	 			*/
/* 		 			<div  class="col-sm-2 label2">		*/
/* 		 				Support (document,etc ) :*/
/* 		 			</div>            */
/* 		 			<div  class="col-sm-10">*/
/* 					    <div  style="overflow:auto; height: 200px; width: 100%; padding: 15px; border: 1px solid #AAAAAA">*/
/* 					    		{{ child.resources|raw  }}*/
/* 					    </div>	*/
/* 		 			</div>   */
/* 	     		</div>*/
/* 	 		{% endif %}*/
/* */
/* */
/* 			{% if child.resources is defined and 	child.resources is not null  %} 		 		*/
/* 	 			<div  class="col-sm-12"> 	 		 	 			*/
/* 		 			<div  class="col-sm-2 label2">		*/
/* 		 				Outils :*/
/* 		 			</div>            */
/* 		 			<div  class="col-sm-10">*/
/* 					    <div  style="overflow:auto; height: 200px; width: 100%; padding: 15px; border: 1px solid #AAAAAA">*/
/* 					    		{{ child.outils|raw  }}*/
/* 					    </div>	*/
/* 		 			</div>   */
/* 	     		</div>*/
/* 	 		{% endif %}*/
/* 	 		 			 */
/* 			{% if child.tutoring is defined and 	child.tutoring is not null  %} 	*/
/* 	 			<div  class="col-sm-12"> 			*/
/* 		 			<div  class="col-sm-2 label2">		*/
/* 		 				Tutorat :*/
/* 		 			</div>            */
/* 		 			<div  class="col-sm-10">		*/
/* 					    <div  style="overflow:auto; height: 200px; width: 100%; padding: 15px; border: 1px solid #AAAAAA">*/
/* 					    		{{ child.tutoring|raw  }}*/
/* 					    </div>	*/
/* 		 			</div>   */
/* 	 			</div>*/
/* 	 		{% endif %}*/
/* */
/* */
/* */
/*         </div>	   */
/* */
/*             */
/* */
/*  */
/*   {% if entete is defined and entete==true%}			*/
/* 		  	</div>	 						*/
/*  {% endif %} */
/*             */
