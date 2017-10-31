<?php

/* IfeAloesBundle:Tableaux:resum.html.twig */
class __TwigTemplate_a5d4634b6371e3f5709229a8b69be68f0f5c90228135cc40a464fc18ca61b057 extends Twig_Template
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
        echo "<br/>\t   

<div class=\"col-sm-12 block3\">\t            
\t\t\t\t<div class='row'>\t\t    \t
\t\t\t\t\t<div class='col-sm-12'> \t 
\t\t\t\t\t\t\t";
        // line 6
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 7
            echo "\t\t\t\t\t\t\t\t\t <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tableaux_bord_resum", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "param" => twig_join_filter((isset($context["champs"]) ? $context["champs"] : $this->getContext($context, "champs")), ""))), "html", null, true);
            echo "\" target='_blank'>Présentation cours (url)</a>
\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t";
        }
        // line 10
        echo "\t\t\t\t\t\t\t\t\t<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tableaux_calendar", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
        echo "\" target='_blank'> Calendrier Ical</a>

\t\t\t\t\t</div> \t  \t
\t\t\t\t</div>  
</div>
<br/>
<br/>\t
\t  \t   <legend>PRESENTATION</legend>
\t  \t\t\t
\t   \t   <div class=\"col-sm-12 block3\">\t
     
\t       ";
        // line 21
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "program", array()) != "")) {
            echo "               
\t\t\t\t<div class='row'>\t
\t\t\t\t\t<div class='col-sm-2 attribut'> \t  \t  
\t\t\t\t    \tProgramme :
\t\t\t\t\t</div> \t  \t\t    \t
\t\t\t\t\t<div class='col-sm-10'> \t  \t  
\t\t\t\t    \t";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "program", array()), "html", null, true);
            echo "
\t\t\t\t\t</div> \t  \t
\t\t\t\t</div>               
\t       ";
        }
        // line 30
        echo "\t       



\t       ";
        // line 34
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "label", array()) != "")) {
            // line 35
            echo "\t\t\t\t<div class='row'>\t
\t\t\t\t\t<div class='col-sm-2  attribut'> \t  \t  
\t\t\t\t    \tSigle :
\t\t\t\t\t</div> \t  \t\t    \t
\t\t\t\t\t<div class='col-sm-10'> \t  \t  
\t\t\t\t    \t";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "label", array()), "html", null, true);
            echo "
\t\t\t\t\t</div> \t  \t
\t\t\t\t</div>  \t         \t       
\t       ";
        }
        // line 44
        echo "\t       
\t       
\t       ";
        // line 46
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "title", array()) != "")) {
            echo "\t
\t\t\t\t<div class='row'>\t
\t\t\t\t\t<div class='col-sm-2  attribut'> \t  \t  
\t\t\t\t    \tTitre :
\t\t\t\t\t</div> \t  \t\t    \t
\t\t\t\t\t<div class='col-sm-10'> \t  \t  
\t\t\t\t    \t";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "title", array()), "html", null, true);
            echo "
\t\t\t\t\t</div> \t  \t
\t\t\t\t</div>  \t        \t       
\t       ";
        }
        // line 55
        echo "\t\t       

\t       
\t       ";
        // line 58
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "semester", array()) != "")) {
            // line 59
            echo "\t\t\t\t<div class='row'>\t
\t\t\t\t\t<div class='col-sm-2  attribut'> \t  \t  
\t\t\t\t    \tSemestre :
\t\t\t\t\t</div> \t  \t\t    \t
\t\t\t\t\t<div class='col-sm-10'> \t  \t  
\t\t\t\t    \t";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "semester", array()), "html", null, true);
            echo "
\t\t\t\t\t</div> \t  \t
\t\t\t\t</div>  \t\t       \t       
\t       ";
        }
        // line 67
        echo "\t
\t       
\t       ";
        // line 69
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "year", array()) != "")) {
            echo "\t
\t\t\t\t<div class='row'>\t
\t\t\t\t\t<div class='col-sm-2  attribut'> \t  \t  
\t\t\t\t    \tAnnée :
\t\t\t\t\t</div> \t  \t\t    \t
\t\t\t\t\t<div class='col-sm-10'> \t  \t  
\t\t\t\t    \t";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "year", array()), "html", null, true);
            echo "
\t\t\t\t\t</div> \t  \t
\t\t\t\t</div>   \t       
\t       ";
        }
        // line 78
        echo "\t\t        

\t       ";
        // line 80
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "isOptional", array()) != "")) {
            echo "\t
\t\t\t\t<div class='row'>\t
\t\t\t\t\t<div class='col-sm-2  attribut'> \t  \t  
\t\t\t\t    \tOptionnel :
\t\t\t\t\t</div> \t  \t\t    \t
\t\t\t\t\t<div class='col-sm-10'> \t  \t  
\t\t\t\t    \t";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "isOptional", array()), "html", null, true);
            echo "
\t\t\t\t\t</div> \t  \t
\t\t\t\t</div>  \t         \t       
\t       ";
        }
        // line 89
        echo "\t
\t       
\t       
\t       ";
        // line 92
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "language", array()) != "")) {
            // line 93
            echo "\t\t\t\t<div class='row'>\t
\t\t\t\t\t<div class='col-sm-2  attribut'> \t  \t  
\t\t\t\t    \tLangue(s) du cours :
\t\t\t\t\t</div> \t  \t\t    \t
\t\t\t\t\t<div class='col-sm-10'> \t  \t  
\t\t\t\t    \t";
            // line 98
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "language", array()), "html", null, true);
            echo "
\t\t\t\t\t</div> \t  \t
\t\t\t\t</div> \t        \t       
\t       ";
        }
        // line 101
        echo "\t\t       

\t       ";
        // line 103
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "credits", array()) != "")) {
            echo "\t
\t\t\t\t<div class='row'>\t
\t\t\t\t\t<div class='col-sm-2  attribut'> \t  \t  
\t\t\t\t    \tNombre de crédits :
\t\t\t\t\t</div> \t  \t\t    \t
\t\t\t\t\t<div class='col-sm-10'> \t  \t  
\t\t\t\t    \t";
            // line 109
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "credits", array()), "html", null, true);
            echo "
\t\t\t\t\t</div> \t  \t
\t\t\t\t</div> \t \t  \t       
\t       ";
        }
        // line 112
        echo "\t
\t        
\t       
\t   \t   \t\t<div class=\"row\">\t\t   \t   
\t\t\t\t\t<div class='col-sm-2 attribut'> \t  \t  
\t\t\t\t    \tEnseignant(s) associé(s) :
\t\t\t\t\t</div> \t  \t\t    \t
\t\t\t\t\t<div class='col-sm-10'> \t  \t  
\t\t\t\t\t \t";
        // line 120
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "redacteurs", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 121
            echo "\t\t\t\t    \t\t";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "sn", array()), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "givenname", array()), "html", null, true);
            echo "</br>
\t\t\t\t    \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
        echo "\t\t\t\t\t</div> \t  \t
\t\t\t\t</div> \t \t   \t   
       

\t       
\t   \t   </div>

\t       ";
        // line 130
        if (((twig_length_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "prerequisites", array())) > 0) || (twig_length_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "concurrentCourses", array())) > 0))) {
            echo "\t\t   
\t\t\t   <div class=\"col-sm-12 block3\"> 
\t\t\t       ";
            // line 132
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "prerequisites", array())) > 0)) {
                echo "\t
\t\t\t\t\t\t<div class='row'>\t
\t\t\t\t\t\t\t<div class='col-sm-2  attribut'> \t  \t  
\t\t\t\t\t\t    \tPréalable(s) :
\t\t\t\t\t\t\t</div> \t  \t\t    \t
\t\t\t\t\t\t\t<div class='col-sm-10'> \t  \t  
\t\t\t\t\t\t    \t";
                // line 138
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "prerequisites", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["pre"]) {
                    // line 139
                    echo "\t\t\t\t                    ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["pre"], "label", array()), "html", null, true);
                    echo "&nbsp
\t\t\t\t                    <br>
\t\t\t\t                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pre'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 141
                echo " 
\t\t\t\t\t\t\t</div> \t  \t
\t\t\t\t\t\t</div> \t   \t       
\t\t\t       ";
            }
            // line 144
            echo "\t
\t
\t\t\t       ";
            // line 146
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "concurrentCourses", array())) > 0)) {
                // line 147
                echo "\t\t\t\t\t\t<div class='row'>\t
\t\t\t\t\t\t\t<div class='col-sm-2  attribut'> \t  \t  
\t\t\t\t\t\t    \tConcomitant(s) : 
\t\t\t\t\t\t\t</div> \t  \t\t    \t
\t\t\t\t\t\t\t<div class='col-sm-10'> \t  \t  
\t\t\t \t              ";
                // line 152
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "concurrentCourses", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["conc"]) {
                    // line 153
                    echo "\t\t\t                    ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["conc"], "label", array()), "html", null, true);
                    echo "
\t\t\t                    <br>
\t\t\t                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['conc'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 156
                echo "\t\t\t\t\t\t\t</div> \t  \t
\t\t\t\t\t\t</div> \t        \t       
\t\t\t       ";
            }
            // line 158
            echo "\t
\t\t\t   </div>
\t\t   ";
        }
        // line 160
        echo "\t
\t
\t\t   
\t\t   ";
        // line 163
        if ((((($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "UrlPed", array()) != "") || ($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "UrlWeb", array()) != "")) || ($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "UrlTwi", array()) != "")) || ($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "UrlAut", array()) != ""))) {
            echo " \t   
\t\t   \t\t<div class=\"col-sm-12 block3\">
\t\t   ";
        }
        // line 165
        echo "\t\t
\t\t   \t\t       \t\t   
\t       ";
        // line 167
        if ((((($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "UrlPed", array()) != "") || ($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "UrlWeb", array()) != "")) || ($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "UrlTwi", array()) != "")) || ($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "UrlAut", array()) != ""))) {
            echo "\t

\t\t   \t
\t\t\t\t<div class='row'>\t
\t\t\t\t\t<div class='col-sm-12 '> \t  \t  
\t\t\t\t    \t<span class=\"attribut\">Urls :</span>
\t\t\t\t\t</div> \t  \t\t    \t  \t
\t\t\t\t</div> \t\t   \t
\t\t   \t
\t\t   ";
        }
        // line 176
        echo "\t\t\t   
\t\t   
\t       ";
        // line 178
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "UrlPed", array()) != "")) {
            echo "\t
\t\t\t\t<div class='row'>\t
\t\t\t\t\t<div class='col-sm-2 attribut'> \t  \t  
\t\t\t\t    \tPlateforme pédagogique 
\t\t\t\t\t</div> \t  \t\t    \t
\t\t\t\t\t<div class='col-sm-10'> \t  \t  
\t\t\t\t    \t<a href=\"";
            // line 184
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "UrlPed", array()), "html", null, true);
            echo "\" target='cible'>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "UrlPed", array()), "html", null, true);
            echo "</a>
\t\t\t\t\t</div> \t  \t
\t\t\t\t</div> \t\t\t       \t  \t       
\t       ";
        }
        // line 187
        echo "\t

\t       ";
        // line 189
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "UrlWeb", array()) != "")) {
            echo "\t
\t\t\t\t<div class='row'>\t
\t\t\t\t\t<div class='col-sm-2 attribut'> \t  \t  
\t\t\t\t    \tSite web (hypotheses, etc) 
\t\t\t\t\t</div> \t  \t\t    \t
\t\t\t\t\t<div class='col-sm-10'> \t  \t  
\t\t\t\t    \t<a href=\"";
            // line 195
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "UrlWeb", array()), "html", null, true);
            echo "\" target='cible'>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "UrlWeb", array()), "html", null, true);
            echo "</a>
\t\t\t\t\t</div> \t  \t
\t\t\t\t</div> \t\t         \t       
\t       ";
        }
        // line 198
        echo "\t

\t       ";
        // line 200
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "UrlTwi", array()) != "")) {
            // line 201
            echo "\t\t\t\t<div class='row'>\t
\t\t\t\t\t<div class='col-sm-2 attribut'> \t  \t  
\t\t\t\t    \tTwitter 
\t\t\t\t\t</div> \t  \t\t    \t
\t\t\t\t\t<div class='col-sm-10'> \t  \t  
\t\t\t\t    \t<a href=\"";
            // line 206
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "UrlTwi", array()), "html", null, true);
            echo "\" target='cible'>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "UrlTwi", array()), "html", null, true);
            echo "</a>
\t\t\t\t\t</div> \t  \t
\t\t\t\t</div> \t\t       \t  \t       
\t       ";
        }
        // line 209
        echo "\t

\t       ";
        // line 211
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "UrlAut", array()) != "")) {
            echo "\t
\t\t\t\t<div class='row'>\t
\t\t\t\t\t<div class='col-sm-2 attribut'> \t  \t  
\t\t\t\t    \tAutre :
\t\t\t\t\t</div> \t  \t\t    \t
\t\t\t\t\t<div class='col-sm-10'> \t  \t  
\t\t\t\t    \t<a href=\"";
            // line 217
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "UrlAut", array()), "html", null, true);
            echo "\" target='cible'>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "UrlAut", array()), "html", null, true);
            echo "</a>
\t\t\t\t\t</div> \t  \t
\t\t\t\t</div> \t  \t       
\t       ";
        }
        // line 220
        echo "\t
\t       
\t       ";
        // line 222
        if ((((($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "UrlPed", array()) != "") || ($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "UrlWeb", array()) != "")) || ($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "UrlTwi", array()) != "")) || ($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "UrlAut", array()) != ""))) {
            echo "\t\t       
\t\t   </div>\t
\t       ";
        }
        // line 224
        echo "\t

 
 <!--    DESCRIPTION : 1\t\t\t-->\t\t\t\t
";
        // line 228
        if (twig_in_filter("A", (isset($context["champs"]) ? $context["champs"] : $this->getContext($context, "champs")))) {
            echo "    \t 
<br/>\t       
     
 \t  \t   <legend>DESCRIPTION</legend>    
\t\t   <div class=\"col-sm-12 block3\">\t
\t       ";
            // line 233
            if (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "description", array()) != "")) {
                echo "    
\t\t\t\t<div class='row'>\t    \t
\t\t\t\t\t<div class='col-sm-12' > \t  \t  
\t\t\t\t    \t\t";
                // line 236
                echo $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "description", array());
                echo "
\t\t\t\t\t</div> \t  \t
\t\t\t\t</div>  \t                  
\t       ";
            }
            // line 239
            echo "\t
\t       </div>\t  
";
        }
        // line 241
        echo "   


 <!--    REFERENTIEL DE COMPETENCES : 9\t\t\t-->\t\t\t\t
";
        // line 245
        if (twig_in_filter("I", (isset($context["champs"]) ? $context["champs"] : $this->getContext($context, "champs")))) {
            echo "  
<br/>    
\t
\t\t\t\t<legend>COMPETENCES VISEES</legend> 
\t\t\t\t<div class=\"col-sm-12 block3\">\t
\t\t\t\t<div class='row'>
\t\t\t\t";
            // line 251
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["comp"]) ? $context["comp"] : $this->getContext($context, "comp")));
            foreach ($context['_seq'] as $context["_key"] => $context["cp"]) {
                echo "   

\t\t\t\t\t\t\t
\t\t\t\t     \t\t<div class='col-sm-10 attribut2'>
\t\t\t\t     \t\t\t<br/><span class=\"glyphicon glyphicon-triangle-bottom\"></span>
\t\t\t\t     \t\t\t";
                // line 256
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["cp"], "categories", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
                    // line 257
                    echo "\t\t\t\t     \t\t\t\t";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "title", array()), "html", null, true);
                    echo " : 
\t\t\t\t     \t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 259
                echo "\t\t\t\t     \t\t\t
\t\t\t\t     \t\t\t";
                // line 260
                echo twig_escape_filter($this->env, $this->getAttribute($context["cp"], "title", array()), "html", null, true);
                echo "
\t\t\t\t     \t\t</div>
\t\t\t\t     \t\t<div class='col-sm-2'>
\t\t\t\t     \t\t\t\t   ";
                // line 263
                $context["taux1"] = ($this->getAttribute($context["cp"], "weight", array()) * 100);
                // line 264
                echo "\t\t\t\t     \t\t\t\t   ";
                $context["color1"] = "progress-bar-success";
                // line 265
                echo "\t\t\t\t\t\t\t\t\t\t<div class=\"progress\">\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar ";
                // line 266
                echo twig_escape_filter($this->env, (isset($context["color1"]) ? $context["color1"] : $this->getContext($context, "color1")), "html", null, true);
                echo " \" style=\"width:";
                echo twig_escape_filter($this->env, (isset($context["taux1"]) ? $context["taux1"] : $this->getContext($context, "taux1")), "html", null, true);
                echo "%;\" role=\"progressbar\" > 
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted\">";
                // line 267
                echo twig_escape_filter($this->env, (isset($context["taux1"]) ? $context["taux1"] : $this->getContext($context, "taux1")), "html", null, true);
                echo "%</span>
\t\t\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t     \t\t\t\t
\t\t\t\t     \t\t\t\t\t</div>\t\t\t\t     \t\t

\t\t\t\t     \t\t</div>
\t\t


\t\t\t\t\t\t <!--    REFERENTIEL DE COMPETENCES SPECIFIQUES : 10\t\t\t-->\t\t\t\t
\t\t\t\t\t\t";
                // line 276
                if (twig_in_filter("J", (isset($context["champs"]) ? $context["champs"] : $this->getContext($context, "champs")))) {
                    echo " \t\t\t\t\t\t
\t\t\t     \t\t\t\t     \t
\t\t\t\t     \t\t";
                    // line 278
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["cp"], "specificCompetences", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["cps"]) {
                        echo "     \t
\t\t\t\t     \t\t
\t\t\t\t     \t\t\t";
                        // line 280
                        if (($this->getAttribute($context["cps"], "weight", array()) != 0)) {
                            // line 281
                            echo "\t\t\t\t     \t\t\t\t<div class='col-sm-10 col-sm-offset-1'>
\t\t\t\t\t     \t\t\t\t<span class=\"glyphicon glyphicon-triangle-right\" style=\"color:#888\"></span> ";
                            // line 282
                            echo twig_escape_filter($this->env, $this->getAttribute($context["cps"], "title", array()), "html", null, true);
                            echo "  
\t\t\t\t\t     \t\t\t</div>
\t\t\t\t     \t\t\t\t<div class='  col-sm-1 '>
\t\t\t\t     \t\t\t\t   ";
                            // line 285
                            $context["taux2"] = ($this->getAttribute($context["cps"], "weight", array()) * 100);
                            // line 286
                            echo "\t\t\t\t     \t\t\t\t   ";
                            $context["color2"] = "progress-bar-warning";
                            // line 287
                            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"progress\">\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar ";
                            // line 288
                            echo twig_escape_filter($this->env, (isset($context["color2"]) ? $context["color2"] : $this->getContext($context, "color2")), "html", null, true);
                            echo " \" style=\"width:";
                            echo twig_escape_filter($this->env, (isset($context["taux2"]) ? $context["taux2"] : $this->getContext($context, "taux2")), "html", null, true);
                            echo "%;\" role=\"progressbar\" > 
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted\">";
                            // line 289
                            echo twig_escape_filter($this->env, (isset($context["taux2"]) ? $context["taux2"] : $this->getContext($context, "taux2")), "html", null, true);
                            echo "%</span>
\t\t\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t     \t\t\t\t
\t\t\t\t     \t\t\t\t\t</div>
\t\t\t\t     \t\t\t\t
\t\t\t\t     \t\t\t\t</div>
\t\t\t\t     \t\t\t\t";
                            // line 294
                            if (($this->getAttribute($context["cps"], "description", array()) != "")) {
                                // line 295
                                echo "\t\t\t\t\t     \t\t\t\t<div class='  col-sm-10 col-sm-offset-2'>
\t\t\t\t\t\t     \t\t\t\t";
                                // line 296
                                echo $this->getAttribute($context["cps"], "description", array());
                                echo "  
\t\t\t\t\t\t     \t\t\t</div>
\t\t\t\t\t     \t\t\t";
                            }
                            // line 298
                            echo "\t\t\t\t     \t\t\t\t
\t\t\t\t\t\t\t\t";
                        }
                        // line 300
                        echo "\t\t\t\t     \t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cps'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo "\t\t     \t\t
\t\t\t\t\t
\t\t\t\t\t\t";
                }
                // line 303
                echo "
\t     \t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cp'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 305
            echo "\t     \t\t</div>
\t\t\t\t</div>\t     \t\t\t
";
        }
        // line 307
        echo "\t    


 <!--    OBJECTIFS D'APPRENTISSAGE : 7\t\t\t-->\t\t\t\t
";
        // line 311
        if (twig_in_filter("G", (isset($context["champs"]) ? $context["champs"] : $this->getContext($context, "champs")))) {
            echo "     \t\t            
<br/>    


\t\t\t\t<legend>OBJECTIFS D'APPRENTISSAGE</legend> 
\t\t\t\t<div class=\"col-sm-12 block3\">\t
\t\t\t\t<div class='row'>\t\t\t\t\t\t
\t\t     \t";
            // line 318
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "objectives", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["oa"]) {
                // line 319
                echo "\t\t     \t
\t\t\t     \t";
                // line 320
                if (($this->getAttribute($context["oa"], "weight", array()) > 0)) {
                    // line 321
                    echo "\t\t
\t\t\t\t     \t\t<div class='col-sm-10 attribut2'>
\t\t\t\t     \t\t\t<span class=\"glyphicon glyphicon-triangle-bottom\"></span> ";
                    // line 323
                    echo twig_escape_filter($this->env, $this->getAttribute($context["oa"], "title", array()), "html", null, true);
                    echo "
\t\t\t\t     \t\t</div>
\t\t\t\t     \t\t<div class='col-sm-2'>

\t\t\t\t     \t\t\t
\t\t\t\t     \t\t\t";
                    // line 328
                    $context["taux1"] = ($this->getAttribute($context["oa"], "weight", array()) * 100);
                    // line 329
                    echo "\t\t\t\t     \t\t\t";
                    $context["color1"] = "progress-bar-success";
                    // line 330
                    echo "\t\t\t\t\t\t\t\t<div class=\"progress\">\t
\t\t\t\t\t\t\t\t\t<div class=\"progress-bar ";
                    // line 331
                    echo twig_escape_filter($this->env, (isset($context["color1"]) ? $context["color1"] : $this->getContext($context, "color1")), "html", null, true);
                    echo " \" style=\"width:";
                    echo twig_escape_filter($this->env, (isset($context["taux1"]) ? $context["taux1"] : $this->getContext($context, "taux1")), "html", null, true);
                    echo "%;\" role=\"progressbar\" > 
\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted\">";
                    // line 332
                    echo twig_escape_filter($this->env, (isset($context["taux1"]) ? $context["taux1"] : $this->getContext($context, "taux1")), "html", null, true);
                    echo "%</span>
\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t     \t\t\t\t
\t\t\t\t     \t\t\t</div>\t
\t\t\t\t     \t\t</div>
\t
\t\t\t     \t\t
\t\t\t     \t\t
\t\t\t     \t\t
\t\t\t\t\t\t<!--    OBJECTIFS SPECIFIQUES : 8\t\t\t-->\t\t\t\t
\t\t\t\t\t\t";
                    // line 341
                    if (twig_in_filter("H", (isset($context["champs"]) ? $context["champs"] : $this->getContext($context, "champs")))) {
                        echo "    

\t\t\t\t     \t\t\t\t     \t
\t\t\t\t     \t\t";
                        // line 344
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["oa"], "specificObjectives", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["oas"]) {
                            echo "     \t
\t\t\t\t     \t\t
\t\t\t\t     \t\t\t";
                            // line 346
                            if (($this->getAttribute($this->getAttribute($context["oas"], "assessmentLinks", array()), "count", array()) > 0)) {
                                echo "\t
\t\t\t\t     \t\t\t\t<div class='  col-sm-10 col-md-offset-1'>
\t\t\t\t\t     \t\t\t\t<span class=\"glyphicon glyphicon-triangle-right\" style=\"color:#888\"></span> ";
                                // line 348
                                echo twig_escape_filter($this->env, $this->getAttribute($context["oas"], "title", array()), "html", null, true);
                                echo "  
\t\t\t\t\t     \t\t\t</div>
\t\t\t\t     \t\t\t\t<div class='  col-sm-1 '>
\t\t
\t\t\t     \t\t\t\t   \t   ";
                                // line 352
                                $context["taux2"] = ($this->getAttribute($context["oas"], "weight", array()) * 100);
                                // line 353
                                echo "\t\t\t\t     \t\t\t\t   ";
                                $context["color2"] = "progress-bar-warning";
                                // line 354
                                echo "\t\t\t\t\t\t\t\t\t\t<div class=\"progress\">\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar ";
                                // line 355
                                echo twig_escape_filter($this->env, (isset($context["color2"]) ? $context["color2"] : $this->getContext($context, "color2")), "html", null, true);
                                echo " \" style=\"width:";
                                echo twig_escape_filter($this->env, (isset($context["taux2"]) ? $context["taux2"] : $this->getContext($context, "taux2")), "html", null, true);
                                echo "%;\" role=\"progressbar\" > 
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted\">";
                                // line 356
                                echo twig_escape_filter($this->env, (isset($context["taux2"]) ? $context["taux2"] : $this->getContext($context, "taux2")), "html", null, true);
                                echo "%</span>
\t\t\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t     \t\t\t\t
\t\t\t\t     \t\t\t\t\t</div>\t\t\t\t     \t\t\t\t\t
\t\t\t\t     \t\t\t\t\t
\t\t\t\t     \t\t\t\t</div>
\t\t\t\t\t     \t\t\t<!--
\t\t\t\t\t     \t\t\tPoids ";
                                // line 362
                                echo twig_escape_filter($this->env, $this->getAttribute($context["oas"], "weight", array()), "html", null, true);
                                echo " / ";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["oas"], "position", array()), "html", null, true);
                                echo " <br/>
\t\t\t\t\t     \t\t\tEvaluations  ";
                                // line 363
                                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["oas"], "competenceLinks", array()), "count", array()), "html", null, true);
                                echo "  <br/>
\t\t\t\t\t     \t\t\tCompetences ";
                                // line 364
                                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["oas"], "assessmentLinks", array()), "count", array()), "html", null, true);
                                echo "  <br/>
\t\t\t\t\t     \t\t\t-->
\t\t\t\t\t     \t\t\t";
                            }
                            // line 367
                            echo "\t\t\t\t     \t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oas'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 368
                        echo "\t\t\t\t     \t\t

\t\t\t\t     \t";
                    }
                    // line 370
                    echo "\t
\t\t\t   
\t\t\t     \t";
                }
                // line 372
                echo "     \t\t
\t\t     \t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oa'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 373
            echo " 
\t\t     \t</div> \t
\t\t     \t</div>\t\t
";
        }
        // line 377
        echo "

 \t\t
   
 <!--    METHODES PEDAGOGIQUES : 2\t\t\t-->\t\t\t\t
";
        // line 382
        if (twig_in_filter("B", (isset($context["champs"]) ? $context["champs"] : $this->getContext($context, "champs")))) {
            echo "    \t   
<br/>\t        
 
\t       ";
            // line 385
            if (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "pedagogy", array()) != "")) {
                echo "       
 \t  \t   \t <legend>METHODES PEDAGOGIQUES</legend>    
\t\t   \t <div class=\"col-sm-12 block3\">\t
  
\t\t\t\t<div class='row'>\t    \t
\t\t\t\t\t<div class='col-sm-12' > \t  \t  
\t\t\t\t    \t\t";
                // line 391
                echo $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "pedagogy", array());
                echo "
\t\t\t\t\t</div> \t  \t
\t\t\t\t</div>  \t                  
\t       \t </div>\t  
\t       ";
            }
            // line 395
            echo "\t\t       
";
        }
        // line 396
        echo "\t       
\t       

 <!--    METHODES SEQUENCES : 11\t\t\t-->\t\t\t\t
";
        // line 400
        if (twig_in_filter("K", (isset($context["champs"]) ? $context["champs"] : $this->getContext($context, "champs")))) {
            echo "  \t            
<br/>

\t\t<legend>CALENDRIER</legend> \t  
\t\t
     \t";
            // line 405
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["topics"]) ? $context["topics"] : $this->getContext($context, "topics")));
            foreach ($context['_seq'] as $context["_key"] => $context["se"]) {
                echo " 

\t
\t\t";
                // line 408
                if (($this->getAttribute($context["se"], "endDate", array()) != null)) {
                    echo "\t\t
\t\t";
                    // line 409
                    $context["endSequence"] = twig_date_format_filter($this->env, $this->getAttribute($context["se"], "endDate", array()), "d-m-Y");
                    // line 410
                    echo "\t\t";
                } else {
                    // line 411
                    echo "\t\t";
                    $context["endSequence"] = twig_date_format_filter($this->env, $this->getAttribute($context["se"], "startDate", array()), "d-m-Y");
                    echo "\t\t\t\t\t
\t\t";
                }
                // line 412
                echo "\t  




\t\t";
                // line 417
                $context["cptAR"] = 0;
                echo "\t\t\t 
\t\t     \t
     \t<div class=\"col-sm-12 block3\">
\t\t\t\t<div class='row block col-sm-12'>\t
\t\t\t\t
\t\t\t\t\t";
                // line 422
                $context["backgroundcolor"] = "#D3D3D3";
                // line 423
                echo "\t\t\t\t\t";
                $context["typo"] = "";
                // line 424
                echo "\t\t\t\t\t
\t\t\t\t\t";
                // line 425
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["se"], "typologies", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["typologie"]) {
                    // line 426
                    echo "\t\t\t\t\t\t\t";
                    $context["backgroundcolor"] = $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), $this->getAttribute($context["typologie"], "title", array()), array(), "array");
                    // line 427
                    echo "\t\t\t\t\t\t\t";
                    $context["typo"] = $this->getAttribute($context["typologie"], "title", array());
                    // line 428
                    echo "\t\t\t\t    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['typologie'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 429
                echo "

\t\t\t\t\t<div class='col-sm-2 ' style=\"background-color:";
                // line 431
                echo twig_escape_filter($this->env, (isset($context["backgroundcolor"]) ? $context["backgroundcolor"] : $this->getContext($context, "backgroundcolor")), "html", null, true);
                echo ";color:white;padding:5px;\">
\t\t\t\t\t\t";
                // line 432
                $context["deb"] = twig_date_format_filter($this->env, $this->getAttribute($context["se"], "startDate", array()), "d/m/Y");
                // line 433
                echo "\t\t\t\t\t\t";
                $context["fin"] = twig_date_format_filter($this->env, $this->getAttribute($context["se"], "endDate", array()), "d/m/Y");
                // line 434
                echo "\t\t\t\t
\t\t\t\t\t\t";
                // line 435
                if (((isset($context["deb"]) ? $context["deb"] : $this->getContext($context, "deb")) != (isset($context["fin"]) ? $context["fin"] : $this->getContext($context, "fin")))) {
                    echo "\t\t      \t\t\t\t        
\t\t\t\t\t\t\t\t  \tdu ";
                    // line 436
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["se"], "startDate", array()), "d/m/Y"), "html", null, true);
                    echo " <i>à  ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["se"], "startDate", array()), "G"), "html", null, true);
                    echo "H";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["se"], "startDate", array()), "i"), "html", null, true);
                    echo "</i> 
\t\t\t\t\t\t\t\t  \tau ";
                    // line 437
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["se"], "endDate", array()), "d/m/Y"), "html", null, true);
                    echo "   <i>à  ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["se"], "endDate", array()), "G"), "html", null, true);
                    echo "H";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["se"], "endDate", array()), "i"), "html", null, true);
                    echo "</i>
\t\t\t\t\t\t";
                } else {
                    // line 439
                    echo "\t\t\t\t\t\t\t\t  \t";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["se"], "startDate", array()), "d/m/Y"), "html", null, true);
                    echo "  <br/><i>de ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["se"], "startDate", array()), "G"), "html", null, true);
                    echo "H";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["se"], "startDate", array()), "i"), "html", null, true);
                    echo " à ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["se"], "endDate", array()), "G"), "html", null, true);
                    echo "H";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["se"], "endDate", array()), "i"), "html", null, true);
                    echo "</i>
\t\t\t\t\t\t";
                }
                // line 440
                echo "\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t    ";
                // line 443
                if (($this->getAttribute($context["se"], "place", array()) != "")) {
                    // line 444
                    echo "\t\t\t\t\t\t<br/><br/> \t
\t\t\t\t\t\t";
                    // line 445
                    echo twig_escape_filter($this->env, $this->getAttribute($context["se"], "place", array()), "html", null, true);
                    echo "
\t\t\t\t\t\t";
                }
                // line 447
                echo "\t\t\t\t\t\t
\t\t\t\t\t\t <br/><br/>
\t\t\t\t\t\t <span class=\"col-sm-12\" style=\"text-align:center\">
\t\t\t\t\t\t";
                // line 450
                if (($this->getAttribute($context["se"], "isFaceToFace", array()) == 1)) {
                    // line 451
                    echo "\t\t\t\t\t\t\tEn présentiel
\t\t\t\t\t\t";
                } else {
                    // line 453
                    echo "\t\t\t\t\t\t\tA distance
\t\t\t\t\t\t";
                }
                // line 455
                echo "\t\t\t\t\t\t</span>
\t\t\t\t\t\t<br/> 
\t\t\t\t\t\t<hr/>
\t\t\t\t\t\t<span class=\"glyphicon glyphicon-tag\" style=\"color:white;font-weight:bold;padding: 0 5px 0 0\"> ";
                // line 458
                echo twig_escape_filter($this->env, $this->getAttribute($context["se"], "title", array()), "html", null, true);
                echo "</span>
\t\t\t\t\t\t<br/>
\t\t\t\t\t\t<hr/>
\t\t\t\t\t\t<span class=\"col-sm-12\" style=\"color:white;text-align:center\">";
                // line 461
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, (isset($context["typo"]) ? $context["typo"] : $this->getContext($context, "typo"))), "html", null, true);
                echo "</span>
\t\t\t\t\t\t<br/><br/>\t\t\t\t \t\t 
\t\t\t\t\t</div>   
\t\t\t\t\t<div class='col-sm-7 ' style=\"border-right: 1px solid #AAAAAA;min-height:250px;\">\t\t\t\t\t   \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t 
\t\t\t\t\t\t<div class='col-sm-6 '>\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
                // line 467
                echo $this->getAttribute($context["se"], "description", array());
                echo "\t
\t\t\t\t\t\t</div> 
\t\t\t\t\t\t
\t\t\t\t\t\t<div class='col-sm-6 '>\t\t\t\t
\t\t\t\t\t\t\t
\t\t       \t\t\t\t";
                // line 472
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["se"], "assessments", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["sea"]) {
                    echo "   
\t\t       \t\t\t\t

\t\t       \t\t\t\t\t       \t\t\t\t
\t\t       \t\t\t\t\t";
                    // line 476
                    if (((twig_date_format_filter($this->env, $this->getAttribute($context["sea"], "deadline", array()), "Y-m-d G:i:s") >= twig_date_format_filter($this->env, $this->getAttribute($context["se"], "startDate", array()), "Y-m-d G:i:s")) && (twig_date_format_filter($this->env, $this->getAttribute($context["sea"], "deadline", array()), "Y-m-d G:i:s") <= twig_date_format_filter($this->env, $this->getAttribute($context["se"], "endDate", array()), "Y-m-d G:i:s")))) {
                        // line 477
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t \t 

\t\t\t\t\t\t\t\t";
                    } else {
                        // line 479
                        echo "    \t\t\t
\t\t\t\t\t\t\t\t\t";
                        // line 480
                        if (((isset($context["cptAR"]) ? $context["cptAR"] : $this->getContext($context, "cptAR")) == 0)) {
                            echo "\t\t
\t\t\t\t\t\t\t\t\t\t<div class='col-sm-12 '>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"attribut2\">Travail à réaliser : </span><br/>
\t\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 484
                        echo "\t\t\t
\t\t\t\t\t\t\t\t\t<div class='col-sm-12 '>
\t\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-triangle-right\" style=\"color:#888\"></span> ";
                        // line 486
                        echo twig_escape_filter($this->env, $this->getAttribute($context["sea"], "title", array()), "html", null, true);
                        echo " 
\t\t\t\t\t\t\t\t\t</div>        \t\t\t\t
\t\t\t\t   \t\t
\t\t\t\t\t\t\t\t    
\t\t\t\t\t\t\t\t    ";
                        // line 490
                        $context["cptAR"] = ((isset($context["cptAR"]) ? $context["cptAR"] : $this->getContext($context, "cptAR")) + 1);
                        echo "\t\t  
\t\t\t\t\t\t\t\t";
                    }
                    // line 491
                    echo "          \t\t\t\t\t\t\t\t     \t\t
\t\t\t 
\t\t       \t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sea'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 493
                echo "  
\t\t\t\t\t\t</div>\t

\t\t\t\t\t</div>\t\t\t
\t\t\t\t\t<div class='col-sm-3 ' style=\"\">\t

\t\t\t\t\t
\t\t\t\t\t\t";
                // line 500
                $context["find"] = 0;
                // line 501
                echo "\t\t\t\t\t\t
\t       \t\t\t\t";
                // line 502
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["assessments"]) ? $context["assessments"] : $this->getContext($context, "assessments")));
                foreach ($context['_seq'] as $context["_key"] => $context["ass"]) {
                    echo "  

\t\t\t\t\t\t  ";
                    // line 504
                    if (($this->getAttribute($context["ass"], "deadline", array()) != null)) {
                        // line 505
                        echo "
\t\t\t\t\t\t\t";
                        // line 506
                        if (((twig_date_converter($this->env, $this->getAttribute($context["ass"], "deadline", array())) >= twig_date_converter($this->env, $this->getAttribute($context["se"], "startDate", array()))) && (twig_date_converter($this->env, $this->getAttribute($context["ass"], "deadline", array())) <= twig_date_converter($this->env, $this->getAttribute($context["se"], "endDate", array()))))) {
                            // line 507
                            echo " \t
 \t\t\t\t\t\t\t\t";
                            // line 508
                            if (((isset($context["find"]) ? $context["find"] : $this->getContext($context, "find")) == 0)) {
                                // line 509
                                echo "\t\t\t \t\t\t\t\t\t<div class='col-sm-12 '>
\t\t\t\t\t\t\t\t\t\t<span class=\"attribut2\"><span class=\"glyphicon glyphicon-pushpin\" style=\"color:#888\"></span> Travail à rendre : </span><br/>
\t\t\t\t\t\t\t\t\t</div>
 \t\t\t\t\t\t\t\t";
                            }
                            // line 512
                            echo " 
 
\t\t\t\t\t\t\t\t<div class='col-sm-12 '> 
\t
\t\t\t\t\t\t\t\t\t";
                            // line 516
                            if (($this->getAttribute($context["ass"], "deadline", array()) != null)) {
                                echo " 
\t\t\t\t\t\t\t\t\t<span class=\"attribut2\">";
                                // line 517
                                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["ass"], "deadline", array()), "d-m-Y"), "html", null, true);
                                echo "</span> :<br/> 
\t\t\t\t\t\t\t\t\t";
                            }
                            // line 519
                            echo "\t\t\t\t\t\t\t\t\t";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["ass"], "typologies", array()));
                            foreach ($context['_seq'] as $context["_key"] => $context["typologie"]) {
                                // line 520
                                echo "\t\t\t\t\t\t\t\t\t\t<span class=\"attribut2\">";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["typologie"], "title", array()), "html", null, true);
                                echo " : </span>
\t\t\t\t\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['typologie'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 522
                            echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-triangle-right\" style=\"color:#888\"></span> ";
                            // line 523
                            echo twig_escape_filter($this->env, $this->getAttribute($context["ass"], "title", array()), "html", null, true);
                            echo "
\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t";
                            // line 525
                            if (($this->getAttribute($context["ass"], "isIndividual", array()) == 1)) {
                                // line 526
                                echo "\t\t\t\t\t\t\t\t\t\tIndividuel
\t\t\t\t\t\t\t\t\t";
                            } else {
                                // line 528
                                echo "\t\t\t\t\t\t\t\t\t\tGroupe
\t\t\t\t\t\t\t\t\t";
                            }
                            // line 530
                            echo "\t\t\t\t\t\t\t\t\t";
                            if (($this->getAttribute($context["ass"], "weight", array()) != 0)) {
                                // line 531
                                echo "\t\t\t\t\t\t\t\t\t\t[";
                                echo twig_escape_filter($this->env, ($this->getAttribute($context["ass"], "weight", array()) * 100), "html", null, true);
                                echo "%]
\t\t\t\t\t\t\t\t\t";
                            }
                            // line 533
                            echo "\t\t\t\t\t\t\t\t\t<br/>\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>        \t\t\t\t    \t \t\t\t\t\t\t\t     \t\t

\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
                            // line 537
                            $context["find"] = 1;
                            // line 538
                            echo "\t
\t\t\t\t\t\t\t";
                        }
                        // line 539
                        echo "\t
\t\t\t\t\t\t  ";
                    }
                    // line 540
                    echo "\t\t
\t       \t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ass'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 541
                echo " \t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t</div>\t
\t\t

\t\t\t\t</div>\t   \t

       \t</div>\t     \t\t     \t
     \t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['se'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 550
            echo "\t\t


";
        }
        // line 554
        echo "
<br/>
";
        // line 556
        if ((twig_in_filter("C", (isset($context["champs"]) ? $context["champs"] : $this->getContext($context, "champs"))) || twig_in_filter("L", (isset($context["champs"]) ? $context["champs"] : $this->getContext($context, "champs"))))) {
            echo "   
 \t  \t   <legend>EVALUATION</legend>   
 
\t\t   <div class=\"col-sm-12 block3\">\t
";
        }
        // line 560
        echo " 
 <!--    EVALUATION : 3\t\t\t-->\t\t\t\t
";
        // line 562
        if (twig_in_filter("C", (isset($context["champs"]) ? $context["champs"] : $this->getContext($context, "champs")))) {
            echo "    \t   
<br/>\t       
\t       ";
            // line 564
            if (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "evaluation", array()) != "")) {
                echo "    
\t\t\t\t<div class='row'>\t    \t
\t\t\t\t\t<div class='col-sm-12' > \t  \t  
\t\t\t\t    \t\t";
                // line 567
                echo $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "evaluation", array());
                echo "
\t\t\t\t\t</div> \t  \t
\t\t\t\t</div>  \t                  
\t       ";
            }
            // line 570
            echo "\t
 
";
        }
        // line 572
        echo "\t 


 <!--    EVALUATIONS : 12\t\t\t-->\t\t\t\t
";
        // line 576
        if (twig_in_filter("L", (isset($context["champs"]) ? $context["champs"] : $this->getContext($context, "champs")))) {
            echo "    
<br/>\t           

\t\t";
            // line 579
            $context["pourcentage1"] = 0;
            echo "  
\t\t";
            // line 580
            $context["pourcentage2"] = 0;
            echo "  
\t\t";
            // line 581
            $context["pourcentage3"] = 0;
            echo " \t\t

 
\t\t  <div class='row '>\t

\t\t\t\t\t\t\t<div class='col-sm-12' style='border-bottom: 1px solid grey;'>\t
\t\t\t\t\t\t\t\t<div class='col-sm-2 attribut'>\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<span class=\"attribut\">Typologie</span>
\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class='col-sm-4 attribut'>\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<span class=\"attribut\">Titre</span>
\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class='col-sm-3 attribut'>\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<span class=\"attribut\">Date de rendu</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class='col-sm-2 attribut'>\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<span class=\"attribut\">%</span>
\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class='col-sm-1 attribut'>\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<span class=\"attribut\">Type</span>
\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t
     \t  ";
            // line 604
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["topics"]) ? $context["topics"] : $this->getContext($context, "topics")));
            foreach ($context['_seq'] as $context["_key"] => $context["se"]) {
                echo " 
\t\t    ";
                // line 605
                if (($this->getAttribute($context["se"], "weight", array()) != 0)) {
                    // line 606
                    echo "\t       \t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["se"], "assessments", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["sea"]) {
                        echo "   
\t       \t\t\t\t
\t\t\t\t\t\t\t";
                        // line 608
                        if (($this->getAttribute($context["sea"], "weight", array()) != 0)) {
                            // line 609
                            echo "\t\t\t\t\t\t\t<div class='col-sm-12'>\t\t

\t\t\t\t\t\t\t\t";
                            // line 611
                            $context["backgroundcolor2"] = "white";
                            // line 612
                            echo "\t\t\t\t\t\t\t\t";
                            $context["typo2"] = "";
                            echo "\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
                            // line 614
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["sea"], "typologies", array()));
                            foreach ($context['_seq'] as $context["_key"] => $context["typologie"]) {
                                // line 615
                                echo "\t\t\t\t\t\t\t\t\t";
                                $context["backgroundcolor2"] = $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), $this->getAttribute($context["typologie"], "title", array()), array(), "array");
                                // line 616
                                echo "\t\t\t\t\t\t\t\t\t";
                                $context["typo2"] = $this->getAttribute($context["typologie"], "title", array());
                                // line 617
                                echo "\t\t\t\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['typologie'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 618
                            echo "
\t\t\t\t\t\t\t\t<div class='col-sm-2' style=\"background-color:";
                            // line 619
                            echo twig_escape_filter($this->env, (isset($context["backgroundcolor2"]) ? $context["backgroundcolor2"] : $this->getContext($context, "backgroundcolor2")), "html", null, true);
                            echo ";color:white;\">\t \t
\t\t\t\t\t\t\t\t\t";
                            // line 620
                            echo twig_escape_filter($this->env, (isset($context["typo2"]) ? $context["typo2"] : $this->getContext($context, "typo2")), "html", null, true);
                            echo "
\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class='col-sm-4'>
\t\t\t\t\t\t\t\t\t";
                            // line 623
                            echo twig_escape_filter($this->env, $this->getAttribute($context["sea"], "title", array()), "html", null, true);
                            echo " 
\t\t\t\t\t\t\t\t</div>       \t\t\t\t
\t\t\t   \t\t\t\t\t<div class='col-sm-3'>
\t\t\t   \t\t\t\t\t\t";
                            // line 626
                            if (($this->getAttribute($context["sea"], "deadline", array(), "any", true, true) && ($this->getAttribute($context["sea"], "deadline", array()) != null))) {
                                // line 627
                                echo "\t\t\t\t\t\t\t\t\t\t ";
                                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["sea"], "deadline", array()), "d/m/Y"), "html", null, true);
                                echo "  
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t à  ";
                                // line 629
                                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["sea"], "deadline", array()), "G"), "html", null, true);
                                echo "H";
                                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["sea"], "deadline", array()), "i"), "html", null, true);
                                echo "
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
                            }
                            // line 631
                            echo "&nbsp;
\t\t\t\t\t\t\t\t</div>   
\t\t\t   \t\t\t\t\t<div class='col-sm-2'>\t\t   \t\t
\t\t\t\t\t\t\t\t\t";
                            // line 634
                            echo twig_escape_filter($this->env, ($this->getAttribute($context["sea"], "weight", array()) * 100), "html", null, true);
                            echo "% \t\t   \t\t\t\t\t
\t\t\t\t\t\t\t\t</div>     
\t\t\t   \t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
                            // line 637
                            if (($this->getAttribute($context["sea"], "isIndividual", array()) == 1)) {
                                // line 638
                                echo "\t\t\t\t\t\t\t\t\t\t<div class='col-sm-1 progress-bar-success center'> 
\t\t\t\t\t\t\t\t\t\t\tIndividuel
\t\t\t\t\t\t\t\t\t\t\t";
                                // line 640
                                $context["pourcentage1"] = ((isset($context["pourcentage1"]) ? $context["pourcentage1"] : $this->getContext($context, "pourcentage1")) + ($this->getAttribute($context["sea"], "weight", array()) * 100));
                                echo "  
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                            } elseif (($this->getAttribute(                            // line 642
$context["sea"], "isIndividual", array()) == 2)) {
                                // line 643
                                echo "\t\t\t\t\t\t\t\t\t\t<div class='col-sm-1 progress-bar-warning center'> \t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\tGroupe
\t\t\t\t\t\t\t\t\t\t\t";
                                // line 645
                                $context["pourcentage2"] = ((isset($context["pourcentage2"]) ? $context["pourcentage2"] : $this->getContext($context, "pourcentage2")) + ($this->getAttribute($context["sea"], "weight", array()) * 100));
                                echo "  
\t\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t\t";
                            } else {
                                // line 648
                                echo "\t\t\t\t\t\t\t\t\t\t<div class='col-sm-1 progress-bar-danger'> \t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t\t\t\t\t";
                                // line 650
                                $context["pourcentage3"] = ((isset($context["pourcentage3"]) ? $context["pourcentage3"] : $this->getContext($context, "pourcentage3")) + ($this->getAttribute($context["sea"], "weight", array()) * 100));
                                echo " 
\t\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t\t";
                            }
                            // line 653
                            echo "\t\t\t \t\t\t\t
\t\t\t\t\t\t\t\t    \t\t\t\t\t\t\t\t     \t\t
\t\t\t\t\t\t\t</div> 
\t\t\t\t\t     \t";
                        }
                        // line 656
                        echo " 
\t       \t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sea'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 657
                    echo "  \t \t\t\t\t
\t\t\t\t   \t


   \t\t    ";
                }
                // line 661
                echo "   \t
     \t  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['se'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 662
            echo "\t
     \t  \t
\t\t  </div>\t
\t\t  

\t\t";
            // line 667
            $context["color1"] = "progress-bar-success";
            echo "  
\t\t";
            // line 668
            $context["color2"] = "progress-bar-warning";
            echo "  
\t\t";
            // line 669
            $context["color3"] = "progress-bar-danger";
            echo " 
\t\t\t\t\t\t\t\t   
\t\t<div class=\"progress\">\t
\t\t\t<div class=\"progress-bar ";
            // line 672
            echo twig_escape_filter($this->env, (isset($context["color1"]) ? $context["color1"] : $this->getContext($context, "color1")), "html", null, true);
            echo " \" style=\"width:";
            echo twig_escape_filter($this->env, (isset($context["pourcentage1"]) ? $context["pourcentage1"] : $this->getContext($context, "pourcentage1")), "html", null, true);
            echo "%;\" role=\"progressbar\" > 
\t\t\t\t";
            // line 673
            echo twig_escape_filter($this->env, (isset($context["pourcentage1"]) ? $context["pourcentage1"] : $this->getContext($context, "pourcentage1")), "html", null, true);
            echo "%
\t\t\t</div>\t\t
\t\t\t<div class=\"progress-bar ";
            // line 675
            echo twig_escape_filter($this->env, (isset($context["color2"]) ? $context["color2"] : $this->getContext($context, "color2")), "html", null, true);
            echo " \" style=\"width:";
            echo twig_escape_filter($this->env, (isset($context["pourcentage2"]) ? $context["pourcentage2"] : $this->getContext($context, "pourcentage2")), "html", null, true);
            echo "%;\" role=\"progressbar\" > 
\t\t\t\t";
            // line 676
            echo twig_escape_filter($this->env, (isset($context["pourcentage2"]) ? $context["pourcentage2"] : $this->getContext($context, "pourcentage2")), "html", null, true);
            echo "%
\t\t\t</div>\t\t
\t\t\t<div class=\"progress-bar ";
            // line 678
            echo twig_escape_filter($this->env, (isset($context["color3"]) ? $context["color3"] : $this->getContext($context, "color3")), "html", null, true);
            echo " \" style=\"width:";
            echo twig_escape_filter($this->env, (isset($context["pourcentage3"]) ? $context["pourcentage3"] : $this->getContext($context, "pourcentage3")), "html", null, true);
            echo "%;\" role=\"progressbar\" > 
\t\t\t\t";
            // line 679
            echo twig_escape_filter($this->env, (isset($context["pourcentage3"]) ? $context["pourcentage3"] : $this->getContext($context, "pourcentage3")), "html", null, true);
            echo "%
\t\t\t</div>\t\t\t\t\t\t\t
\t\t</div>\t
\t\t  
\t\t  
";
        }
        // line 684
        echo "       \t
       \t

";
        // line 687
        if ((twig_in_filter("C", (isset($context["champs"]) ? $context["champs"] : $this->getContext($context, "champs"))) || twig_in_filter("L", (isset($context["champs"]) ? $context["champs"] : $this->getContext($context, "champs"))))) {
            echo "   
\t\t   </div>\t
";
        }
        // line 689
        echo " 


 <!--    RESSOURCES : 4\t\t\t-->\t\t\t\t
";
        // line 693
        if (twig_in_filter("D", (isset($context["champs"]) ? $context["champs"] : $this->getContext($context, "champs")))) {
            echo "    
<br/>             
\t    ";
            // line 695
            if (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "resources", array()) != "")) {
                echo "   \t            \t
\t\t  \t<legend>RESSOURCES</legend>  \t\t\t
\t\t   \t<div class=\"col-sm-12 block3\">\t
\t  
\t    \t\t\t    
\t            
\t\t\t\t\t<div class='row'>\t\t    \t
\t\t\t\t\t\t<div class='col-sm-12'> \t  \t  
\t\t\t\t\t    \t";
                // line 703
                echo $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "resources", array());
                echo "
\t\t\t\t\t\t</div> \t  \t
\t\t\t\t\t</div>  
\t\t\t</div>\t\t             
\t    ";
            }
            // line 707
            echo "\t     
\t    
";
        }
        // line 709
        echo "\t    
\t    \t


 <!--    REGLEMENTS : 5\t\t\t-->\t\t\t\t
";
        // line 714
        if (twig_in_filter("E", (isset($context["champs"]) ? $context["champs"] : $this->getContext($context, "champs")))) {
            echo "    
<br/>\t            
\t            
\t    ";
            // line 717
            if (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "rules", array()) != "")) {
                echo "   
\t            \t
\t  \t<legend>REGLEMENTS</legend>
\t  \t\t\t
\t   \t<div class=\"col-sm-12 block3\">\t

\t\t\t\t<div class='row'>\t\t    \t
\t\t\t\t\t<div class='col-sm-12'> \t  \t  
\t\t\t\t    \t";
                // line 725
                echo $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "rules", array());
                echo "
\t\t\t\t\t</div> \t  \t
\t\t\t\t</div>               
\t   \t</div>\t
\t    ";
            }
            // line 729
            echo "\t \t
\t    
";
        }
        // line 731
        echo "\t 


 <!--    REGLEMENTS : 5\t\t\t-->\t\t\t\t
";
        // line 735
        if (twig_in_filter("F", (isset($context["champs"]) ? $context["champs"] : $this->getContext($context, "champs")))) {
            echo "    
<br/>\t            
\t            
\t    ";
            // line 738
            if (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "infos", array()) != "")) {
                echo "   
\t            \t
\t  \t<legend>AUTRES INFORMATIONS UTILES</legend>
\t  \t\t\t
\t   \t<div class=\"col-sm-12 block3\">\t

\t\t\t\t<div class='row'>\t\t    \t
\t\t\t\t\t<div class='col-sm-12'> \t  \t  
\t\t\t\t    \t";
                // line 746
                echo $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "infos", array());
                echo "
\t\t\t\t\t</div> \t  \t
\t\t\t\t</div>               

\t   \t</div>\t
\t    ";
            }
            // line 751
            echo "\t \t
\t    
";
        }
        // line 753
        echo "\t 

&nbsp;
<br/><br/>
";
    }

    public function getTemplateName()
    {
        return "IfeAloesBundle:Tableaux:resum.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1608 => 753,  1603 => 751,  1594 => 746,  1583 => 738,  1577 => 735,  1571 => 731,  1566 => 729,  1558 => 725,  1547 => 717,  1541 => 714,  1534 => 709,  1529 => 707,  1521 => 703,  1510 => 695,  1505 => 693,  1499 => 689,  1493 => 687,  1488 => 684,  1479 => 679,  1473 => 678,  1468 => 676,  1462 => 675,  1457 => 673,  1451 => 672,  1445 => 669,  1441 => 668,  1437 => 667,  1430 => 662,  1423 => 661,  1416 => 657,  1409 => 656,  1403 => 653,  1397 => 650,  1393 => 648,  1387 => 645,  1383 => 643,  1381 => 642,  1376 => 640,  1372 => 638,  1370 => 637,  1364 => 634,  1359 => 631,  1351 => 629,  1345 => 627,  1343 => 626,  1337 => 623,  1331 => 620,  1327 => 619,  1324 => 618,  1318 => 617,  1315 => 616,  1312 => 615,  1308 => 614,  1302 => 612,  1300 => 611,  1296 => 609,  1294 => 608,  1286 => 606,  1284 => 605,  1278 => 604,  1252 => 581,  1248 => 580,  1244 => 579,  1238 => 576,  1232 => 572,  1227 => 570,  1220 => 567,  1214 => 564,  1209 => 562,  1205 => 560,  1197 => 556,  1193 => 554,  1187 => 550,  1172 => 541,  1165 => 540,  1161 => 539,  1157 => 538,  1155 => 537,  1149 => 533,  1143 => 531,  1140 => 530,  1136 => 528,  1132 => 526,  1130 => 525,  1125 => 523,  1122 => 522,  1113 => 520,  1108 => 519,  1103 => 517,  1099 => 516,  1093 => 512,  1087 => 509,  1085 => 508,  1082 => 507,  1080 => 506,  1077 => 505,  1075 => 504,  1068 => 502,  1065 => 501,  1063 => 500,  1054 => 493,  1046 => 491,  1041 => 490,  1034 => 486,  1030 => 484,  1022 => 480,  1019 => 479,  1014 => 477,  1012 => 476,  1003 => 472,  995 => 467,  986 => 461,  980 => 458,  975 => 455,  971 => 453,  967 => 451,  965 => 450,  960 => 447,  955 => 445,  952 => 444,  950 => 443,  945 => 440,  931 => 439,  922 => 437,  914 => 436,  910 => 435,  907 => 434,  904 => 433,  902 => 432,  898 => 431,  894 => 429,  888 => 428,  885 => 427,  882 => 426,  878 => 425,  875 => 424,  872 => 423,  870 => 422,  862 => 417,  855 => 412,  849 => 411,  846 => 410,  844 => 409,  840 => 408,  832 => 405,  824 => 400,  818 => 396,  814 => 395,  806 => 391,  797 => 385,  791 => 382,  784 => 377,  778 => 373,  771 => 372,  766 => 370,  761 => 368,  755 => 367,  749 => 364,  745 => 363,  739 => 362,  730 => 356,  724 => 355,  721 => 354,  718 => 353,  716 => 352,  709 => 348,  704 => 346,  697 => 344,  691 => 341,  679 => 332,  673 => 331,  670 => 330,  667 => 329,  665 => 328,  657 => 323,  653 => 321,  651 => 320,  648 => 319,  644 => 318,  634 => 311,  628 => 307,  623 => 305,  616 => 303,  606 => 300,  602 => 298,  596 => 296,  593 => 295,  591 => 294,  583 => 289,  577 => 288,  574 => 287,  571 => 286,  569 => 285,  563 => 282,  560 => 281,  558 => 280,  551 => 278,  546 => 276,  534 => 267,  528 => 266,  525 => 265,  522 => 264,  520 => 263,  514 => 260,  511 => 259,  502 => 257,  498 => 256,  488 => 251,  479 => 245,  473 => 241,  468 => 239,  461 => 236,  455 => 233,  447 => 228,  441 => 224,  435 => 222,  431 => 220,  422 => 217,  413 => 211,  409 => 209,  400 => 206,  393 => 201,  391 => 200,  387 => 198,  378 => 195,  369 => 189,  365 => 187,  356 => 184,  347 => 178,  343 => 176,  330 => 167,  326 => 165,  320 => 163,  315 => 160,  310 => 158,  305 => 156,  295 => 153,  291 => 152,  284 => 147,  282 => 146,  278 => 144,  272 => 141,  262 => 139,  258 => 138,  249 => 132,  244 => 130,  235 => 123,  224 => 121,  220 => 120,  210 => 112,  203 => 109,  194 => 103,  190 => 101,  183 => 98,  176 => 93,  174 => 92,  169 => 89,  162 => 86,  153 => 80,  149 => 78,  142 => 75,  133 => 69,  129 => 67,  122 => 64,  115 => 59,  113 => 58,  108 => 55,  101 => 52,  92 => 46,  88 => 44,  81 => 40,  74 => 35,  72 => 34,  66 => 30,  59 => 27,  50 => 21,  35 => 10,  28 => 7,  26 => 6,  19 => 1,);
    }
}
/* <br/>	   */
/* */
/* <div class="col-sm-12 block3">	            */
/* 				<div class='row'>		    	*/
/* 					<div class='col-sm-12'> 	 */
/* 							{% if is_granted('IS_AUTHENTICATED_FULLY') %}*/
/* 									 <a href="{{path('tableaux_bord_resum', {id:course.id,param: champs|join('') }) }}" target='_blank'>Présentation cours (url)</a>*/
/* 									<br/>*/
/* 							{% endif %}*/
/* 									<a href="{{path('tableaux_calendar', {id:course.id }) }}" target='_blank'> Calendrier Ical</a>*/
/* */
/* 					</div> 	  	*/
/* 				</div>  */
/* </div>*/
/* <br/>*/
/* <br/>	*/
/* 	  	   <legend>PRESENTATION</legend>*/
/* 	  			*/
/* 	   	   <div class="col-sm-12 block3">	*/
/*      */
/* 	       {% if course.program !="" %}               */
/* 				<div class='row'>	*/
/* 					<div class='col-sm-2 attribut'> 	  	  */
/* 				    	Programme :*/
/* 					</div> 	  		    	*/
/* 					<div class='col-sm-10'> 	  	  */
/* 				    	{{ course.program }}*/
/* 					</div> 	  	*/
/* 				</div>               */
/* 	       {% endif %}	       */
/* */
/* */
/* */
/* 	       {% if course.label !="" %}*/
/* 				<div class='row'>	*/
/* 					<div class='col-sm-2  attribut'> 	  	  */
/* 				    	Sigle :*/
/* 					</div> 	  		    	*/
/* 					<div class='col-sm-10'> 	  	  */
/* 				    	{{ course.label }}*/
/* 					</div> 	  	*/
/* 				</div>  	         	       */
/* 	       {% endif %}*/
/* 	       */
/* 	       */
/* 	       {% if course.title !="" %}	*/
/* 				<div class='row'>	*/
/* 					<div class='col-sm-2  attribut'> 	  	  */
/* 				    	Titre :*/
/* 					</div> 	  		    	*/
/* 					<div class='col-sm-10'> 	  	  */
/* 				    	{{ course.title }}*/
/* 					</div> 	  	*/
/* 				</div>  	        	       */
/* 	       {% endif %}		       */
/* */
/* 	       */
/* 	       {% if course.semester !="" %}*/
/* 				<div class='row'>	*/
/* 					<div class='col-sm-2  attribut'> 	  	  */
/* 				    	Semestre :*/
/* 					</div> 	  		    	*/
/* 					<div class='col-sm-10'> 	  	  */
/* 				    	{{ course.semester }}*/
/* 					</div> 	  	*/
/* 				</div>  		       	       */
/* 	       {% endif %}	*/
/* 	       */
/* 	       {% if course.year !="" %}	*/
/* 				<div class='row'>	*/
/* 					<div class='col-sm-2  attribut'> 	  	  */
/* 				    	Année :*/
/* 					</div> 	  		    	*/
/* 					<div class='col-sm-10'> 	  	  */
/* 				    	{{ course.year }}*/
/* 					</div> 	  	*/
/* 				</div>   	       */
/* 	       {% endif %}		        */
/* */
/* 	       {% if course.isOptional !="" %}	*/
/* 				<div class='row'>	*/
/* 					<div class='col-sm-2  attribut'> 	  	  */
/* 				    	Optionnel :*/
/* 					</div> 	  		    	*/
/* 					<div class='col-sm-10'> 	  	  */
/* 				    	{{ course.isOptional }}*/
/* 					</div> 	  	*/
/* 				</div>  	         	       */
/* 	       {% endif %}	*/
/* 	       */
/* 	       */
/* 	       {% if course.language !="" %}*/
/* 				<div class='row'>	*/
/* 					<div class='col-sm-2  attribut'> 	  	  */
/* 				    	Langue(s) du cours :*/
/* 					</div> 	  		    	*/
/* 					<div class='col-sm-10'> 	  	  */
/* 				    	{{ course.language }}*/
/* 					</div> 	  	*/
/* 				</div> 	        	       */
/* 	       {% endif %}		       */
/* */
/* 	       {% if course.credits !="" %}	*/
/* 				<div class='row'>	*/
/* 					<div class='col-sm-2  attribut'> 	  	  */
/* 				    	Nombre de crédits :*/
/* 					</div> 	  		    	*/
/* 					<div class='col-sm-10'> 	  	  */
/* 				    	{{ course.credits }}*/
/* 					</div> 	  	*/
/* 				</div> 	 	  	       */
/* 	       {% endif %}	*/
/* 	        */
/* 	       */
/* 	   	   		<div class="row">		   	   */
/* 					<div class='col-sm-2 attribut'> 	  	  */
/* 				    	Enseignant(s) associé(s) :*/
/* 					</div> 	  		    	*/
/* 					<div class='col-sm-10'> 	  	  */
/* 					 	{% for user in course.redacteurs %}*/
/* 				    		{{user.sn }}, {{ user.givenname }}</br>*/
/* 				    	{% endfor %}*/
/* 					</div> 	  	*/
/* 				</div> 	 	   	   */
/*        */
/* */
/* 	       */
/* 	   	   </div>*/
/* */
/* 	       {% if course.prerequisites|length >0 or course.concurrentCourses|length >0 %}		   */
/* 			   <div class="col-sm-12 block3"> */
/* 			       {% if course.prerequisites|length >0 %}	*/
/* 						<div class='row'>	*/
/* 							<div class='col-sm-2  attribut'> 	  	  */
/* 						    	Préalable(s) :*/
/* 							</div> 	  		    	*/
/* 							<div class='col-sm-10'> 	  	  */
/* 						    	{% for pre in course.prerequisites %}*/
/* 				                    {{ pre.label }}&nbsp*/
/* 				                    <br>*/
/* 				                  {% endfor %} */
/* 							</div> 	  	*/
/* 						</div> 	   	       */
/* 			       {% endif %}	*/
/* 	*/
/* 			       {% if course.concurrentCourses|length >0  %}*/
/* 						<div class='row'>	*/
/* 							<div class='col-sm-2  attribut'> 	  	  */
/* 						    	Concomitant(s) : */
/* 							</div> 	  		    	*/
/* 							<div class='col-sm-10'> 	  	  */
/* 			 	              {% for conc in course.concurrentCourses %}*/
/* 			                    {{ conc.label }}*/
/* 			                    <br>*/
/* 			                  {% endfor %}*/
/* 							</div> 	  	*/
/* 						</div> 	        	       */
/* 			       {% endif %}	*/
/* 			   </div>*/
/* 		   {% endif %}	*/
/* 	*/
/* 		   */
/* 		   {% if course.UrlPed !="" or course.UrlWeb !="" or course.UrlTwi !="" or course.UrlAut !=""  %} 	   */
/* 		   		<div class="col-sm-12 block3">*/
/* 		   {% endif %}		*/
/* 		   		       		   */
/* 	       {% if course.UrlPed !="" or course.UrlWeb !="" or course.UrlTwi !="" or course.UrlAut !=""   %}	*/
/* */
/* 		   	*/
/* 				<div class='row'>	*/
/* 					<div class='col-sm-12 '> 	  	  */
/* 				    	<span class="attribut">Urls :</span>*/
/* 					</div> 	  		    	  	*/
/* 				</div> 		   	*/
/* 		   	*/
/* 		   {% endif %}			   */
/* 		   */
/* 	       {% if course.UrlPed !="" %}	*/
/* 				<div class='row'>	*/
/* 					<div class='col-sm-2 attribut'> 	  	  */
/* 				    	Plateforme pédagogique */
/* 					</div> 	  		    	*/
/* 					<div class='col-sm-10'> 	  	  */
/* 				    	<a href="{{ course.UrlPed }}" target='cible'>{{ course.UrlPed }}</a>*/
/* 					</div> 	  	*/
/* 				</div> 			       	  	       */
/* 	       {% endif %}	*/
/* */
/* 	       {% if course.UrlWeb !="" %}	*/
/* 				<div class='row'>	*/
/* 					<div class='col-sm-2 attribut'> 	  	  */
/* 				    	Site web (hypotheses, etc) */
/* 					</div> 	  		    	*/
/* 					<div class='col-sm-10'> 	  	  */
/* 				    	<a href="{{ course.UrlWeb }}" target='cible'>{{ course.UrlWeb }}</a>*/
/* 					</div> 	  	*/
/* 				</div> 		         	       */
/* 	       {% endif %}	*/
/* */
/* 	       {% if course.UrlTwi !="" %}*/
/* 				<div class='row'>	*/
/* 					<div class='col-sm-2 attribut'> 	  	  */
/* 				    	Twitter */
/* 					</div> 	  		    	*/
/* 					<div class='col-sm-10'> 	  	  */
/* 				    	<a href="{{ course.UrlTwi }}" target='cible'>{{ course.UrlTwi }}</a>*/
/* 					</div> 	  	*/
/* 				</div> 		       	  	       */
/* 	       {% endif %}	*/
/* */
/* 	       {% if course.UrlAut !="" %}	*/
/* 				<div class='row'>	*/
/* 					<div class='col-sm-2 attribut'> 	  	  */
/* 				    	Autre :*/
/* 					</div> 	  		    	*/
/* 					<div class='col-sm-10'> 	  	  */
/* 				    	<a href="{{ course.UrlAut }}" target='cible'>{{ course.UrlAut }}</a>*/
/* 					</div> 	  	*/
/* 				</div> 	  	       */
/* 	       {% endif %}	*/
/* 	       */
/* 	       {% if  course.UrlPed !="" or course.UrlWeb !="" or course.UrlTwi !="" or course.UrlAut !=""  %}		       */
/* 		   </div>	*/
/* 	       {% endif %}	*/
/* */
/*  */
/*  <!--    DESCRIPTION : 1			-->				*/
/* {% if 'A' in champs	 					%}    	 */
/* <br/>	       */
/*      */
/*  	  	   <legend>DESCRIPTION</legend>    */
/* 		   <div class="col-sm-12 block3">	*/
/* 	       {% if course.description !="" %}    */
/* 				<div class='row'>	    	*/
/* 					<div class='col-sm-12' > 	  	  */
/* 				    		{{ course.description|raw  }}*/
/* 					</div> 	  	*/
/* 				</div>  	                  */
/* 	       {% endif %}	*/
/* 	       </div>	  */
/* {% endif	 							%}   */
/* */
/* */
/*  <!--    REFERENTIEL DE COMPETENCES : 9			-->				*/
/* {% if 'I' in champs	 					%}  */
/* <br/>    */
/* 	*/
/* 				<legend>COMPETENCES VISEES</legend> */
/* 				<div class="col-sm-12 block3">	*/
/* 				<div class='row'>*/
/* 				{% for cp in comp%}   */
/* */
/* 							*/
/* 				     		<div class='col-sm-10 attribut2'>*/
/* 				     			<br/><span class="glyphicon glyphicon-triangle-bottom"></span>*/
/* 				     			{% for categorie in  cp.categories %}*/
/* 				     				{{ categorie.title}} : */
/* 				     			{% endfor %}*/
/* 				     			*/
/* 				     			{{ cp.title }}*/
/* 				     		</div>*/
/* 				     		<div class='col-sm-2'>*/
/* 				     				   {% set taux1 = cp.weight * 100 %}*/
/* 				     				   {% set color1 = "progress-bar-success" %}*/
/* 										<div class="progress">	*/
/* 											<div class="progress-bar {{color1}} " style="width:{{ taux1 }}%;" role="progressbar" > */
/* 												<span class="text-muted">{{ taux1 }}%</span>*/
/* 											</div>					     				*/
/* 				     					</div>				     		*/
/* */
/* 				     		</div>*/
/* 		*/
/* */
/* */
/* 						 <!--    REFERENTIEL DE COMPETENCES SPECIFIQUES : 10			-->				*/
/* 						{% if 'J' in champs	 					%} 						*/
/* 			     				     	*/
/* 				     		{% for cps in cp.specificCompetences %}     	*/
/* 				     		*/
/* 				     			{% if cps.weight!=0 %}*/
/* 				     				<div class='col-sm-10 col-sm-offset-1'>*/
/* 					     				<span class="glyphicon glyphicon-triangle-right" style="color:#888"></span> {{ cps.title}}  */
/* 					     			</div>*/
/* 				     				<div class='  col-sm-1 '>*/
/* 				     				   {% set taux2 = cps.weight * 100 %}*/
/* 				     				   {% set color2 = "progress-bar-warning" %}*/
/* 										<div class="progress">	*/
/* 											<div class="progress-bar {{color2}} " style="width:{{ taux2 }}%;" role="progressbar" > */
/* 												<span class="text-muted">{{ taux2 }}%</span>*/
/* 											</div>					     				*/
/* 				     					</div>*/
/* 				     				*/
/* 				     				</div>*/
/* 				     				{% if cps.description!="" %}*/
/* 					     				<div class='  col-sm-10 col-sm-offset-2'>*/
/* 						     				{{ cps.description|raw}}  */
/* 						     			</div>*/
/* 					     			{% endif %}				     				*/
/* 								{% endif %}*/
/* 				     		{% endfor %}		     		*/
/* 					*/
/* 						{% endif %}*/
/* */
/* 	     		{% endfor %}*/
/* 	     		</div>*/
/* 				</div>	     			*/
/* {%   endif %}	    */
/* */
/* */
/*  <!--    OBJECTIFS D'APPRENTISSAGE : 7			-->				*/
/* {% if 'G' in champs	 					%}     		            */
/* <br/>    */
/* */
/* */
/* 				<legend>OBJECTIFS D'APPRENTISSAGE</legend> */
/* 				<div class="col-sm-12 block3">	*/
/* 				<div class='row'>						*/
/* 		     	{% for oa in course.objectives %}*/
/* 		     	*/
/* 			     	{% if oa.weight>0 %}*/
/* 		*/
/* 				     		<div class='col-sm-10 attribut2'>*/
/* 				     			<span class="glyphicon glyphicon-triangle-bottom"></span> {{ oa.title }}*/
/* 				     		</div>*/
/* 				     		<div class='col-sm-2'>*/
/* */
/* 				     			*/
/* 				     			{% set taux1 = oa.weight * 100 %}*/
/* 				     			{% set color1 = "progress-bar-success" %}*/
/* 								<div class="progress">	*/
/* 									<div class="progress-bar {{color1}} " style="width:{{ taux1 }}%;" role="progressbar" > */
/* 										<span class="text-muted">{{ taux1 }}%</span>*/
/* 									</div>					     				*/
/* 				     			</div>	*/
/* 				     		</div>*/
/* 	*/
/* 			     		*/
/* 			     		*/
/* 			     		*/
/* 						<!--    OBJECTIFS SPECIFIQUES : 8			-->				*/
/* 						{% if 'H' in champs	 					%}    */
/* */
/* 				     				     	*/
/* 				     		{% for oas in oa.specificObjectives %}     	*/
/* 				     		*/
/* 				     			{% if oas.assessmentLinks.count >0 %}	*/
/* 				     				<div class='  col-sm-10 col-md-offset-1'>*/
/* 					     				<span class="glyphicon glyphicon-triangle-right" style="color:#888"></span> {{ oas.title}}  */
/* 					     			</div>*/
/* 				     				<div class='  col-sm-1 '>*/
/* 		*/
/* 			     				   	   {% set taux2 = oas.weight * 100 %}*/
/* 				     				   {% set color2 = "progress-bar-warning" %}*/
/* 										<div class="progress">	*/
/* 											<div class="progress-bar {{color2}} " style="width:{{ taux2 }}%;" role="progressbar" > */
/* 												<span class="text-muted">{{ taux2 }}%</span>*/
/* 											</div>					     				*/
/* 				     					</div>				     					*/
/* 				     					*/
/* 				     				</div>*/
/* 					     			<!--*/
/* 					     			Poids {{ oas.weight }} / {{ oas.position }} <br/>*/
/* 					     			Evaluations  {{ oas.competenceLinks.count }}  <br/>*/
/* 					     			Competences {{ oas.assessmentLinks.count }}  <br/>*/
/* 					     			-->*/
/* 					     			{% endif %}*/
/* 				     		{% endfor %}*/
/* 				     		*/
/* */
/* 				     	{% endif %}	*/
/* 			   */
/* 			     	{% endif %}     		*/
/* 		     	{% endfor %} */
/* 		     	</div> 	*/
/* 		     	</div>		*/
/* {%   endif  %}*/
/* */
/* */
/*  		*/
/*    */
/*  <!--    METHODES PEDAGOGIQUES : 2			-->				*/
/* {% if 'B' in champs	 					%}    	   */
/* <br/>	        */
/*  */
/* 	       {% if course.pedagogy !="" %}       */
/*  	  	   	 <legend>METHODES PEDAGOGIQUES</legend>    */
/* 		   	 <div class="col-sm-12 block3">	*/
/*   */
/* 				<div class='row'>	    	*/
/* 					<div class='col-sm-12' > 	  	  */
/* 				    		{{ course.pedagogy|raw  }}*/
/* 					</div> 	  	*/
/* 				</div>  	                  */
/* 	       	 </div>	  */
/* 	       {% endif %}		       */
/* {%  endif %}	       */
/* 	       */
/* */
/*  <!--    METHODES SEQUENCES : 11			-->				*/
/* {% if 'K' in champs	 					%}  	            */
/* <br/>*/
/* */
/* 		<legend>CALENDRIER</legend> 	  */
/* 		*/
/*      	{% for se in topics %} */
/* */
/* 	*/
/* 		{% if se.endDate != null 						  %}		*/
/* 		{%   set endSequence = se.endDate|date('d-m-Y')   %}*/
/* 		{% else 										  %}*/
/* 		{%   set endSequence = se.startDate|date('d-m-Y') %}					*/
/* 		{% endif 									      %}	  */
/* */
/* */
/* */
/* */
/* 		{%   set cptAR = 0 %}			 */
/* 		     	*/
/*      	<div class="col-sm-12 block3">*/
/* 				<div class='row block col-sm-12'>	*/
/* 				*/
/* 					{% set backgroundcolor= "#D3D3D3" %}*/
/* 					{% set typo = "" %}*/
/* 					*/
/* 					{% for typologie in se.typologies %}*/
/* 							{% set backgroundcolor= colors[typologie.title] %}*/
/* 							{% set typo = typologie.title %}*/
/* 				    {% endfor %}*/
/* */
/* */
/* 					<div class='col-sm-2 ' style="background-color:{{backgroundcolor}};color:white;padding:5px;">*/
/* 						{% set deb = se.startDate|date("d/m/Y")  %}*/
/* 						{% set fin = se.endDate|date("d/m/Y")    %}*/
/* 				*/
/* 						{% if deb!=fin    %}		      				        */
/* 								  	du {{se.startDate|date("d/m/Y")}} <i>à  {{se.startDate|date("G")}}H{{se.startDate|date("i")}}</i> */
/* 								  	au {{se.endDate|date("d/m/Y")}}   <i>à  {{se.endDate|date("G")}}H{{se.endDate|date("i")}}</i>*/
/* 						{% else %}*/
/* 								  	{{se.startDate|date("d/m/Y")}}  <br/><i>de {{se.startDate|date("G")}}H{{se.startDate|date("i")}} à {{se.endDate|date("G")}}H{{se.endDate|date("i")}}</i>*/
/* 						{% endif %}					*/
/* 										*/
/* 					*/
/* 					    {% if se.place!=""%}*/
/* 						<br/><br/> 	*/
/* 						{{ se.place }}*/
/* 						{% endif %}*/
/* 						*/
/* 						 <br/><br/>*/
/* 						 <span class="col-sm-12" style="text-align:center">*/
/* 						{% if se.isFaceToFace == 1%}*/
/* 							En présentiel*/
/* 						{% else	%}*/
/* 							A distance*/
/* 						{% endif %}*/
/* 						</span>*/
/* 						<br/> */
/* 						<hr/>*/
/* 						<span class="glyphicon glyphicon-tag" style="color:white;font-weight:bold;padding: 0 5px 0 0"> {{ se.title }}</span>*/
/* 						<br/>*/
/* 						<hr/>*/
/* 						<span class="col-sm-12" style="color:white;text-align:center">{{ typo|upper }}</span>*/
/* 						<br/><br/>				 		 */
/* 					</div>   */
/* 					<div class='col-sm-7 ' style="border-right: 1px solid #AAAAAA;min-height:250px;">					   															*/
/* 	 */
/* 						<div class='col-sm-6 '>											*/
/* 								{{se.description|raw}}	*/
/* 						</div> */
/* 						*/
/* 						<div class='col-sm-6 '>				*/
/* 							*/
/* 		       				{% for sea in se.assessments %}   */
/* 		       				*/
/* */
/* 		       					       				*/
/* 		       					{% if ( sea.deadline|date('Y-m-d G:i:s')   >=   se.startDate|date('Y-m-d G:i:s')) and ( sea.deadline|date('Y-m-d G:i:s')   <=   se.endDate|date('Y-m-d G:i:s'))  %}*/
/* 															 	 */
/* */
/* 								{%  else %}    			*/
/* 									{% if cptAR==0 %}		*/
/* 										<div class='col-sm-12 '>*/
/* 											<span class="attribut2">Travail à réaliser : </span><br/>*/
/* 										</div>								*/
/* 									{% endif %}			*/
/* 									<div class='col-sm-12 '>*/
/* 										<span class="glyphicon glyphicon-triangle-right" style="color:#888"></span> {{ sea.title }} */
/* 									</div>        				*/
/* 				   		*/
/* 								    */
/* 								    {%   set cptAR = cptAR + 1 %}		  */
/* 								{%  endif %}          								     		*/
/* 			 */
/* 		       				{% endfor %}  */
/* 						</div>	*/
/* */
/* 					</div>			*/
/* 					<div class='col-sm-3 ' style="">	*/
/* */
/* 					*/
/* 						{% set find=0 %}*/
/* 						*/
/* 	       				{% for ass in assessments %}  */
/* */
/* 						  {% if (  ass.deadline !=null )  %}*/
/* */
/* 							{% if (  date(ass.deadline)  >= date(se.startDate)  ) and ( date(ass.deadline) <=  date(se.endDate) )  %}*/
/*  	*/
/*  								{% if find==0 %}*/
/* 			 						<div class='col-sm-12 '>*/
/* 										<span class="attribut2"><span class="glyphicon glyphicon-pushpin" style="color:#888"></span> Travail à rendre : </span><br/>*/
/* 									</div>*/
/*  								{% endif %} */
/*  */
/* 								<div class='col-sm-12 '> */
/* 	*/
/* 									{% if ass.deadline !=null %} */
/* 									<span class="attribut2">{{ass.deadline|date('d-m-Y')}}</span> :<br/> */
/* 									{% endif %}*/
/* 									{% for typologie in ass.typologies %}*/
/* 										<span class="attribut2">{{ typologie.title }} : </span>*/
/* 									{% endfor %}*/
/* 									*/
/* 									<span class="glyphicon glyphicon-triangle-right" style="color:#888"></span> {{ ass.title }}*/
/* 									<br/>*/
/* 									{% if ass.isIndividual==1 %}*/
/* 										Individuel*/
/* 									{% else %}*/
/* 										Groupe*/
/* 									{% endif%}*/
/* 									{% if ass.weight!=0 %}*/
/* 										[{{ ass.weight * 100}}%]*/
/* 									{% endif %}*/
/* 									<br/>									*/
/* 								</div>        				    	 							     		*/
/* */
/* 									*/
/* 								{% set find=1 %}*/
/* 	*/
/* 							{% endif %}	*/
/* 						  {% endif %}		*/
/* 	       				{% endfor %} 					*/
/* 					*/
/* 					*/
/* 					</div>	*/
/* 		*/
/* */
/* 				</div>	   	*/
/* */
/*        	</div>	     		     	*/
/*      	{% endfor%}		*/
/* */
/* */
/* {% endif %}*/
/* */
/* <br/>*/
/* {% if 'C' in champs or 	 'L' in champs						%}   */
/*  	  	   <legend>EVALUATION</legend>   */
/*  */
/* 		   <div class="col-sm-12 block3">	*/
/* {% endif					%} */
/*  <!--    EVALUATION : 3			-->				*/
/* {% if 'C' in champs	 					%}    	   */
/* <br/>	       */
/* 	       {% if course.evaluation !="" %}    */
/* 				<div class='row'>	    	*/
/* 					<div class='col-sm-12' > 	  	  */
/* 				    		{{ course.evaluation |raw  }}*/
/* 					</div> 	  	*/
/* 				</div>  	                  */
/* 	       {% endif %}	*/
/*  */
/* {%  endif %}	 */
/* */
/* */
/*  <!--    EVALUATIONS : 12			-->				*/
/* {% if 'L' in champs	 					%}    */
/* <br/>	           */
/* */
/* 		{% set pourcentage1=0 %}  */
/* 		{% set pourcentage2=0 %}  */
/* 		{% set pourcentage3=0 %} 		*/
/* */
/*  */
/* 		  <div class='row '>	*/
/* */
/* 							<div class='col-sm-12' style='border-bottom: 1px solid grey;'>	*/
/* 								<div class='col-sm-2 attribut'>							*/
/* 									<span class="attribut">Typologie</span>*/
/* 								</div>								*/
/* 								<div class='col-sm-4 attribut'>							*/
/* 									<span class="attribut">Titre</span>*/
/* 								</div>							*/
/* 								<div class='col-sm-3 attribut'>							*/
/* 									<span class="attribut">Date de rendu</span>*/
/* 								</div>*/
/* 								<div class='col-sm-2 attribut'>							*/
/* 									<span class="attribut">%</span>*/
/* 								</div>								*/
/* 								<div class='col-sm-1 attribut'>							*/
/* 									<span class="attribut">Type</span>*/
/* 								</div>	*/
/* 							</div>*/
/* 					*/
/*      	  {% for se in topics %} */
/* 		    {% if se.weight!=0 %}*/
/* 	       				{% for sea in se.assessments %}   */
/* 	       				*/
/* 							{% if sea.weight!=0 %}*/
/* 							<div class='col-sm-12'>		*/
/* */
/* 								{% set backgroundcolor2= "white" %}*/
/* 								{% set typo2 = "" %}								*/
/* 																	*/
/* 								{% for typologie in sea.typologies %}*/
/* 									{% set backgroundcolor2= colors[typologie.title] %}*/
/* 									{% set typo2 = typologie.title %}*/
/* 								{% endfor %}*/
/* */
/* 								<div class='col-sm-2' style="background-color:{{backgroundcolor2}};color:white;">	 	*/
/* 									{{ typo2 }}*/
/* 								</div>												*/
/* 								<div class='col-sm-4'>*/
/* 									{{ sea.title }} */
/* 								</div>       				*/
/* 			   					<div class='col-sm-3'>*/
/* 			   						{% if sea.deadline is defined and sea.deadline !=null%}*/
/* 										 {{ sea.deadline|date('d/m/Y') }}  */
/* 									*/
/* 									 à  {{sea.deadline|date("G") }}H{{sea.deadline|date("i") }}*/
/* 									*/
/* 									{% endif %}&nbsp;*/
/* 								</div>   */
/* 			   					<div class='col-sm-2'>		   		*/
/* 									{{ sea.weight * 100}}% 		   					*/
/* 								</div>     */
/* 			   					*/
/* 									{% if sea.isIndividual==1 %}*/
/* 										<div class='col-sm-1 progress-bar-success center'> */
/* 											Individuel*/
/* 											{% set pourcentage1=pourcentage1 + sea.weight * 100 %}  */
/* 										</div>*/
/* 									{% elseif sea.isIndividual==2 %}*/
/* 										<div class='col-sm-1 progress-bar-warning center'> 									*/
/* 											Groupe*/
/* 											{% set pourcentage2=pourcentage2 + sea.weight * 100 %}  */
/* 										</div>	*/
/* 									{% else %}*/
/* 										<div class='col-sm-1 progress-bar-danger'> 									*/
/* 											&nbsp;*/
/* 											{% set pourcentage3=pourcentage3 + sea.weight * 100 %} */
/* 										</div>	*/
/* 									{% endif %}*/
/* 			 				*/
/* 								    								     		*/
/* 							</div> */
/* 					     	{% endif %} */
/* 	       				{% endfor %}  	 				*/
/* 				   	*/
/* */
/* */
/*    		    {% endif %}   	*/
/*      	  {% endfor%}	*/
/*      	  	*/
/* 		  </div>	*/
/* 		  */
/* */
/* 		{% set color1="progress-bar-success" %}  */
/* 		{% set color2="progress-bar-warning" %}  */
/* 		{% set color3="progress-bar-danger" %} */
/* 								   */
/* 		<div class="progress">	*/
/* 			<div class="progress-bar {{color1}} " style="width:{{ pourcentage1 }}%;" role="progressbar" > */
/* 				{{ pourcentage1 }}%*/
/* 			</div>		*/
/* 			<div class="progress-bar {{color2}} " style="width:{{ pourcentage2 }}%;" role="progressbar" > */
/* 				{{ pourcentage2 }}%*/
/* 			</div>		*/
/* 			<div class="progress-bar {{color3}} " style="width:{{ pourcentage3 }}%;" role="progressbar" > */
/* 				{{ pourcentage3 }}%*/
/* 			</div>							*/
/* 		</div>	*/
/* 		  */
/* 		  */
/* {%   endif %}       	*/
/*        	*/
/* */
/* {% if 'C' in champs or 	 'L' in champs						%}   */
/* 		   </div>	*/
/* {% endif					%} */
/* */
/* */
/*  <!--    RESSOURCES : 4			-->				*/
/* {% if 'D' in champs	 					%}    */
/* <br/>             */
/* 	    {% if course.resources !="" %}   	            	*/
/* 		  	<legend>RESSOURCES</legend>  			*/
/* 		   	<div class="col-sm-12 block3">	*/
/* 	  */
/* 	    			    */
/* 	            */
/* 					<div class='row'>		    	*/
/* 						<div class='col-sm-12'> 	  	  */
/* 					    	{{ course.resources|raw }}*/
/* 						</div> 	  	*/
/* 					</div>  */
/* 			</div>		             */
/* 	    {% endif %}	     */
/* 	    */
/* {%   endif %}	    */
/* 	    	*/
/* */
/* */
/*  <!--    REGLEMENTS : 5			-->				*/
/* {% if 'E' in champs	 					%}    */
/* <br/>	            */
/* 	            */
/* 	    {% if course.rules !="" %}   */
/* 	            	*/
/* 	  	<legend>REGLEMENTS</legend>*/
/* 	  			*/
/* 	   	<div class="col-sm-12 block3">	*/
/* */
/* 				<div class='row'>		    	*/
/* 					<div class='col-sm-12'> 	  	  */
/* 				    	{{ course.rules|raw }}*/
/* 					</div> 	  	*/
/* 				</div>               */
/* 	   	</div>	*/
/* 	    {% endif %}	 	*/
/* 	    */
/* {%   endif %}	 */
/* */
/* */
/*  <!--    REGLEMENTS : 5			-->				*/
/* {% if 'F' in champs	 					%}    */
/* <br/>	            */
/* 	            */
/* 	    {% if course.infos !="" %}   */
/* 	            	*/
/* 	  	<legend>AUTRES INFORMATIONS UTILES</legend>*/
/* 	  			*/
/* 	   	<div class="col-sm-12 block3">	*/
/* */
/* 				<div class='row'>		    	*/
/* 					<div class='col-sm-12'> 	  	  */
/* 				    	{{ course.infos|raw }}*/
/* 					</div> 	  	*/
/* 				</div>               */
/* */
/* 	   	</div>	*/
/* 	    {% endif %}	 	*/
/* 	    */
/* {%   endif %}	 */
/* */
/* &nbsp;*/
/* <br/><br/>*/
/* */
