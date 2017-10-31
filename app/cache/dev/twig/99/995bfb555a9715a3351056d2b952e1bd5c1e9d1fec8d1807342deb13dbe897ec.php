<?php

/* IfeAloesBundle:Course:show.html.twig */
class __TwigTemplate_fafb4985bcf83b7c9bc1664080b4b80be671220d3112d63ffd40b910143d27c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("IfeAloesBundle:Course:layout.html.twig", "IfeAloesBundle:Course:show.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "IfeAloesBundle:Course:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<div class='title-two1a col-md-9 col-sm-9'> 
\t\t\tPr&eacute;sentation
\t\t</div>
    \t<div class='title-two1b col-md-3 col-sm-3' style=\"text-align:right\">
\t\t\t";
        // line 10
        if (((($this->env->getExtension('security')->isGranted("ROLE_ENSEIGNANT") && $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "isRedacteur", array(0 => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array())), "method")) || ($this->env->getExtension('security')->isGranted("ROLE_RESPONSABLE") && $this->getAttribute(        // line 11
(isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "isRedacteur", array(0 => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array())), "method"))) || $this->env->getExtension('security')->isGranted("ROLE_ADMIN"))) {
            // line 14
            echo "\t\t\t        <a class=\"btn1 btn-color4\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("courses_edit", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "from" => "entity")), "html", null, true);
            echo "\">
\t\t\t            <span class=\"glyphicon glyphicon-edit\"></span> Modifier présentation
\t\t\t        </a>
\t\t\t";
        }
        // line 17
        echo "    \t
    \t</div> \t\t



 
\t<div class='col-sm-12 container-fluid block3'>\t
 \t\t\t<br/>
\t   \t   <div class=\"col-sm-12 block3b\">\t
        
\t       ";
        // line 27
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "program", array()) != "")) {
            echo "               
\t\t\t\t<div class='row'>\t
\t\t\t\t\t<div class='col-md-3 attribut'> \t  \t  
\t\t\t\t    \tProgramme : 
\t\t\t\t\t</div> \t  \t\t    \t
\t\t\t\t\t<div class='col-md-9'> \t  \t  
\t\t\t\t    \t";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "program", array()), "html", null, true);
            echo "
\t\t\t\t\t</div> \t  \t
\t\t\t\t</div>               
\t       ";
        }
        // line 36
        echo "\t       



\t       ";
        // line 40
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "label", array()) != "")) {
            // line 41
            echo "\t\t\t\t<div class='row'>\t
\t\t\t\t\t<div class='col-md-3 attribut'> \t  \t  
\t\t\t\t    \tSigle : 
\t\t\t\t\t</div> \t  \t\t    \t
\t\t\t\t\t<div class='col-md-9'> \t  \t  
\t\t\t\t    \t";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "label", array()), "html", null, true);
            echo "
\t\t\t\t\t</div> \t  \t
\t\t\t\t</div>  \t         \t       
\t       ";
        }
        // line 50
        echo "\t       
\t       
\t       ";
        // line 52
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "title", array()) != "")) {
            echo "\t
\t\t\t\t<div class='row'>\t
\t\t\t\t\t<div class='col-md-3 attribut'> \t  \t  
\t\t\t\t    \tTitre : 
\t\t\t\t\t</div> \t  \t\t    \t
\t\t\t\t\t<div class='col-md-9'> \t  \t  
\t\t\t\t    \t";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "title", array()), "html", null, true);
            echo "
\t\t\t\t\t</div> \t  \t
\t\t\t\t</div>  \t        \t       
\t       ";
        }
        // line 61
        echo "\t\t       

\t       
\t       ";
        // line 64
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "semestres", array())) > 0)) {
            // line 65
            echo "\t\t\t\t<div class='row'>\t
\t\t\t\t\t<div class='col-md-3 attribut'> \t  \t  
\t\t\t\t    \tSemestre(s) : 
\t\t\t\t\t</div> \t  \t\t    \t
\t\t\t\t\t<div class='col-md-9'> \t  \t  
\t\t\t\t\t\t";
            // line 70
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "semestres", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["sem"]) {
                // line 71
                echo "\t\t\t\t        \t";
                echo twig_escape_filter($this->env, $this->getAttribute($context["sem"], "title", array()), "html", null, true);
                echo "&nbsp
\t\t\t\t        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            echo " 
\t\t\t\t\t</div> \t  \t
\t\t\t\t</div>  \t\t       \t       
\t       ";
        }
        // line 75
        echo "\t
\t       
\t       ";
        // line 77
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "year", array()) != "")) {
            echo "\t
\t\t\t\t<div class='row'>\t
\t\t\t\t\t<div class='col-md-3 attribut'> \t  \t  
\t\t\t\t    \tAnnée : 
\t\t\t\t\t</div> \t  \t\t    \t
\t\t\t\t\t<div class='col-md-9'> \t  \t  
\t\t\t\t    \t";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "year", array()), "html", null, true);
            echo "
\t\t\t\t\t</div> \t  \t
\t\t\t\t</div>   \t       
\t       ";
        }
        // line 86
        echo "\t\t        

\t        

\t       ";
        // line 90
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "langues", array())) > 0)) {
            echo "\t\t   

\t\t\t\t<div class='row'>\t
\t\t\t\t\t<div class='col-md-3 attribut'> \t  \t  
\t\t\t\t\t\t    \tLangue(s) :  
\t\t\t\t\t</div> \t  \t\t    \t
\t\t\t\t\t<div class='col-md-9'> \t  \t  
\t\t\t\t\t\t";
            // line 97
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "langues", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["lan"]) {
                // line 98
                echo "\t\t\t\t        \t";
                echo twig_escape_filter($this->env, $this->getAttribute($context["lan"], "title", array()), "html", null, true);
                echo "&nbsp
\t\t\t\t        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lan'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 99
            echo " 
\t\t\t\t\t</div> \t  \t
\t\t\t\t</div> \t   \t       
\t\t\t";
        }
        // line 102
        echo "\t\t       
\t              

\t       ";
        // line 105
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "credits", array()) != "")) {
            echo "\t
\t\t\t\t<div class='row'>\t
\t\t\t\t\t<div class='col-md-3 attribut'> \t  \t  
\t\t\t\t    \tNombre de crédits : 
\t\t\t\t\t</div> \t  \t\t    \t
\t\t\t\t\t<div class='col-md-9'> \t  \t  
\t\t\t\t    \t";
            // line 111
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "credits", array()), "html", null, true);
            echo "
\t\t\t\t\t</div> \t  \t
\t\t\t\t</div> \t \t  \t       
\t       ";
        }
        // line 114
        echo "\t


\t       ";
        // line 117
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "isOptional", array()) != "")) {
            echo "\t
\t\t\t\t<div class='row'>\t
\t\t\t\t\t<div class='col-md-3 attribut'> \t  \t  
\t\t\t\t    \tOptionnel : 
\t\t\t\t\t</div> \t  \t\t    \t
\t\t\t\t\t<div class='col-md-9'> \t  \t  

\t\t\t\t\t\t\t    \t";
            // line 124
            if (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "isOptional", array()) == 1)) {
                // line 125
                echo "\t\t\t\t\t\t\t    \t\tOui
\t\t\t\t\t\t\t    \t";
            } else {
                // line 127
                echo "\t\t\t\t\t\t\t    \t\tNon
\t\t\t\t\t\t\t    \t";
            }
            // line 128
            echo "\t\t\t\t\t    \t
\t\t\t\t    \t
\t\t\t\t\t</div> \t  \t
\t\t\t\t</div>  \t         \t       
\t       ";
        }
        // line 132
        echo "\t
\t   \t   </div>
\t   \t   
\t   \t   <div class=\"col-sm-12 block3b\">\t\t   \t   
\t\t\t\t<div class='row'>\t
\t\t\t\t\t<div class='col-md-3 attribut'> \t  \t  
\t\t\t\t    \tEnseignant(s) associé(s) :
\t\t\t\t\t</div> \t  \t\t    \t
\t\t\t\t\t<div class='col-md-9'> \t  \t  
\t\t\t\t\t \t";
        // line 141
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "redacteurs", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 142
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
        // line 144
        echo "\t\t\t\t\t</div> \t  \t
\t\t\t\t</div> \t \t   \t   
\t   \t   </div>
\t   \t   
\t       ";
        // line 148
        if (((twig_length_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "prerequisites", array())) > 0) || (twig_length_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "concurrentCourses", array())) > 0))) {
            echo "\t\t   
\t\t\t   <div class=\"col-sm-12 block3b\">\t
\t\t\t       ";
            // line 150
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "prerequisites", array())) > 0)) {
                echo "\t
\t\t\t\t\t\t<div class='row'>\t
\t\t\t\t\t\t\t<div class='col-md-3 attribut'> \t  \t  
\t\t\t\t\t\t    \tPréalable(s) : 
\t\t\t\t\t\t\t</div> \t  \t\t    \t
\t\t\t\t\t\t\t<div class='col-md-9'> \t  \t  
\t\t\t\t\t\t    \t";
                // line 156
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "prerequisites", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["pre"]) {
                    // line 157
                    echo "\t\t\t\t                    ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["pre"], "label", array()), "html", null, true);
                    echo "&nbsp
\t\t\t\t                    <br>
\t\t\t\t                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pre'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 159
                echo " 
\t\t\t\t\t\t\t</div> \t  \t
\t\t\t\t\t\t</div> \t   \t       
\t\t\t       ";
            }
            // line 162
            echo "\t
\t
\t\t\t       ";
            // line 164
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "concurrentCourses", array())) > 0)) {
                // line 165
                echo "\t\t\t\t\t\t<div class='row'>\t
\t\t\t\t\t\t\t<div class='col-md-3 attribut'> \t  \t  
\t\t\t\t\t\t    \tConcomitant(s) :  
\t\t\t\t\t\t\t</div> \t  \t\t    \t
\t\t\t\t\t\t\t<div class='col-md-9'> \t  \t  
\t\t\t \t              ";
                // line 170
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "concurrentCourses", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["conc"]) {
                    // line 171
                    echo "\t\t\t                    ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["conc"], "label", array()), "html", null, true);
                    echo "
\t\t\t                    <br>
\t\t\t                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['conc'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 174
                echo "\t\t\t\t\t\t\t</div> \t  \t
\t\t\t\t\t\t</div> \t        \t       
\t\t\t       ";
            }
            // line 176
            echo "\t
\t\t\t   </div>
\t\t   ";
        }
        // line 178
        echo "\t

\t\t   
\t\t   ";
        // line 181
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "isRemote", array()) > 0)) {
            echo " \t   
\t\t   \t<div class=\"col-sm-12 block3b\">\t
\t\t   ";
        }
        // line 183
        echo "\t\t
\t\t   \t\t       \t\t   
\t\t\t

\t\t   ";
        // line 187
        if ((((($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "isFaceToFace", array()) != "") || ($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "location", array()) != null)) || ($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "timeSlot", array()) != null)) || ($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "isRemote", array()) != ""))) {
            echo " \t   
\t\t   \t\t</div> 
\t\t   ";
        }
        // line 189
        echo "\t\t\t\t\t       
\t

\t       ";
        // line 192
        if ((((($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "UrlPed", array()) != "") || ($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "UrlWeb", array()) != "")) || ($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "UrlTwi", array()) != "")) || ($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "UrlAut", array()) != ""))) {
            echo "\t
\t\t   \t\t   \t   <div class=\"col-sm-12 block3b\">\t
\t\t   ";
        }
        // line 194
        echo "\t\t\t   
\t\t   
\t       ";
        // line 196
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "UrlPed", array()) != "")) {
            echo "\t
\t\t\t\t<div class='row'>\t
\t\t\t\t\t<div class='col-md-3 attribut'> \t  \t  
\t\t\t\t    \tPlateforme pédagogique (url) : 
\t\t\t\t\t</div> \t  \t\t    \t
\t\t\t\t\t<div class='col-md-9'> \t  \t  
\t\t\t\t    \t<a href=\"";
            // line 202
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "UrlPed", array()), "html", null, true);
            echo "\" target='cible'>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "UrlPed", array()), "html", null, true);
            echo "</a>
\t\t\t\t\t</div> \t  \t
\t\t\t\t</div> \t\t\t       \t  \t       
\t       ";
        }
        // line 205
        echo "\t


\t       ";
        // line 208
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "UrlWeb", array()) != "")) {
            echo "\t
\t\t\t\t<div class='row'>\t
\t\t\t\t\t<div class='col-md-3 attribut'> \t  \t  
\t\t\t\t    \tSite web (hypotheses, etc) (url) : 
\t\t\t\t\t</div> \t  \t\t    \t
\t\t\t\t\t<div class='col-md-9'> \t  \t  
\t\t\t\t    \t<a href=\"";
            // line 214
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "UrlWeb", array()), "html", null, true);
            echo "\" target='cible'>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "UrlWeb", array()), "html", null, true);
            echo "</a>
\t\t\t\t\t</div> \t  \t
\t\t\t\t</div> \t\t         \t       
\t       ";
        }
        // line 217
        echo "\t

\t       ";
        // line 219
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "UrlTwi", array()) != "")) {
            // line 220
            echo "\t\t\t\t<div class='row'>\t
\t\t\t\t\t<div class='col-md-3 attribut'> \t  \t  
\t\t\t\t    \tTwitter (url) : 
\t\t\t\t\t</div> \t  \t\t    \t
\t\t\t\t\t<div class='col-md-9'> \t  \t  
\t\t\t\t    \t<a href=\"";
            // line 225
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "UrlTwi", array()), "html", null, true);
            echo "\" target='cible'>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "UrlTwi", array()), "html", null, true);
            echo "</a>
\t\t\t\t\t</div> \t  \t
\t\t\t\t</div> \t\t       \t  \t       
\t       ";
        }
        // line 228
        echo "\t

\t       ";
        // line 230
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "UrlAut", array()) != "")) {
            echo "\t
\t\t\t\t<div class='row'>\t
\t\t\t\t\t<div class='col-md-3 attribut'> \t  \t  
\t\t\t\t    \tAutre (url) : 
\t\t\t\t\t</div> \t  \t\t    \t
\t\t\t\t\t<div class='col-md-9'> \t  \t  
\t\t\t\t    \t<a href=\"";
            // line 236
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "UrlAut", array()), "html", null, true);
            echo "\" target='cible'>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "UrlAut", array()), "html", null, true);
            echo "</a>
\t\t\t\t\t</div> \t  \t
\t\t\t\t</div> \t  \t       
\t       ";
        }
        // line 239
        echo "\t
\t       
\t       ";
        // line 241
        if ((((($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "UrlPed", array()) != "") || ($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "UrlWeb", array()) != "")) || ($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "UrlTwi", array()) != "")) || ($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "UrlAut", array()) != ""))) {
            echo "\t\t       
\t\t   </div>\t
\t       ";
        }
        // line 243
        echo "\t
\t       \t\t  
  \t\t   <div class=\"col-sm-12 block3b\">\t\t\t       \t\t   
\t       ";
        // line 246
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "created", array()) != "")) {
            echo "\t
\t\t\t\t<div class='row'>\t
\t\t\t\t\t<div class='col-md-3 attribut'> \t  \t  
\t\t\t\t    \tDernière modification : 
\t\t\t\t\t</div> \t  \t\t    \t
\t\t\t\t\t<div class='col-md-9'> \t  \t  
\t\t\t\t    \t";
            // line 252
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "created", array()), "d/m/Y  H:i:s"), "html", null, true);
            echo "
\t\t\t\t\t</div> \t  \t
\t\t\t\t</div> \t\t       \t  \t       
\t       ";
        }
        // line 255
        echo "\t

\t       ";
        // line 257
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "publicationState", array()) != "")) {
            echo "\t
\t\t\t\t<div class='row'>\t
\t\t\t\t\t<div class='col-md-3 attribut'> \t  \t  
\t\t\t\t    \tStatut : 
\t\t\t\t\t</div> \t  \t\t    \t
\t\t\t\t\t<div class='col-md-9'> \t  \t  
\t\t            \t";
            // line 263
            if (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "publicationState", array()) == 1)) {
                // line 264
                echo "\t\t                \t<span class=\"glyphicon glyphicon-eye-open\" style='color:green'> Publié
\t\t                ";
            } else {
                // line 266
                echo "\t\t                \t<span class=\"glyphicon glyphicon-eye-close\" style='color:red'> Brouillon
\t\t                ";
            }
            // line 267
            echo "  
\t\t\t\t\t</div> \t  \t
\t\t\t\t</div> \t\t\t       
 \t       
\t       ";
        }
        // line 271
        echo "\t
       \t   </div>\t    
 



\t</div>
\t        
";
    }

    public function getTemplateName()
    {
        return "IfeAloesBundle:Course:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  546 => 271,  539 => 267,  535 => 266,  531 => 264,  529 => 263,  520 => 257,  516 => 255,  509 => 252,  500 => 246,  495 => 243,  489 => 241,  485 => 239,  476 => 236,  467 => 230,  463 => 228,  454 => 225,  447 => 220,  445 => 219,  441 => 217,  432 => 214,  423 => 208,  418 => 205,  409 => 202,  400 => 196,  396 => 194,  390 => 192,  385 => 189,  379 => 187,  373 => 183,  367 => 181,  362 => 178,  357 => 176,  352 => 174,  342 => 171,  338 => 170,  331 => 165,  329 => 164,  325 => 162,  319 => 159,  309 => 157,  305 => 156,  296 => 150,  291 => 148,  285 => 144,  274 => 142,  270 => 141,  259 => 132,  252 => 128,  248 => 127,  244 => 125,  242 => 124,  232 => 117,  227 => 114,  220 => 111,  211 => 105,  206 => 102,  200 => 99,  191 => 98,  187 => 97,  177 => 90,  171 => 86,  164 => 83,  155 => 77,  151 => 75,  145 => 72,  136 => 71,  132 => 70,  125 => 65,  123 => 64,  118 => 61,  111 => 58,  102 => 52,  98 => 50,  91 => 46,  84 => 41,  82 => 40,  76 => 36,  69 => 33,  60 => 27,  48 => 17,  40 => 14,  38 => 11,  37 => 10,  31 => 6,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'IfeAloesBundle:Course:layout.html.twig' %}*/
/* */
/* {% block content -%}*/
/* */
/* */
/*     	<div class='title-two1a col-md-9 col-sm-9'> */
/* 			Pr&eacute;sentation*/
/* 		</div>*/
/*     	<div class='title-two1b col-md-3 col-sm-3' style="text-align:right">*/
/* 			{% if ( is_granted("ROLE_ENSEIGNANT")  and course.isRedacteur(app.user.id) ) or */
/* 			      ( is_granted("ROLE_RESPONSABLE") and course.isRedacteur(app.user.id) ) or  */
/* 			      ( is_granted("ROLE_ADMIN") )*/
/* 			 %}*/
/* 			        <a class="btn1 btn-color4" href="{{ path('courses_edit', { 'id': course.id, 'from': 'entity' }) }}">*/
/* 			            <span class="glyphicon glyphicon-edit"></span> Modifier présentation*/
/* 			        </a>*/
/* 			{% endif %}    	*/
/*     	</div> 		*/
/* */
/* */
/* */
/*  */
/* 	<div class='col-sm-12 container-fluid block3'>	*/
/*  			<br/>*/
/* 	   	   <div class="col-sm-12 block3b">	*/
/*         */
/* 	       {% if course.program !="" %}               */
/* 				<div class='row'>	*/
/* 					<div class='col-md-3 attribut'> 	  	  */
/* 				    	Programme : */
/* 					</div> 	  		    	*/
/* 					<div class='col-md-9'> 	  	  */
/* 				    	{{ course.program }}*/
/* 					</div> 	  	*/
/* 				</div>               */
/* 	       {% endif %}	       */
/* */
/* */
/* */
/* 	       {% if course.label !="" %}*/
/* 				<div class='row'>	*/
/* 					<div class='col-md-3 attribut'> 	  	  */
/* 				    	Sigle : */
/* 					</div> 	  		    	*/
/* 					<div class='col-md-9'> 	  	  */
/* 				    	{{ course.label }}*/
/* 					</div> 	  	*/
/* 				</div>  	         	       */
/* 	       {% endif %}*/
/* 	       */
/* 	       */
/* 	       {% if course.title !="" %}	*/
/* 				<div class='row'>	*/
/* 					<div class='col-md-3 attribut'> 	  	  */
/* 				    	Titre : */
/* 					</div> 	  		    	*/
/* 					<div class='col-md-9'> 	  	  */
/* 				    	{{ course.title }}*/
/* 					</div> 	  	*/
/* 				</div>  	        	       */
/* 	       {% endif %}		       */
/* */
/* 	       */
/* 	       {% if course.semestres|length >0 %}*/
/* 				<div class='row'>	*/
/* 					<div class='col-md-3 attribut'> 	  	  */
/* 				    	Semestre(s) : */
/* 					</div> 	  		    	*/
/* 					<div class='col-md-9'> 	  	  */
/* 						{% for sem in course.semestres %}*/
/* 				        	{{ sem.title }}&nbsp*/
/* 				        {% endfor %} */
/* 					</div> 	  	*/
/* 				</div>  		       	       */
/* 	       {% endif %}	*/
/* 	       */
/* 	       {% if course.year !="" %}	*/
/* 				<div class='row'>	*/
/* 					<div class='col-md-3 attribut'> 	  	  */
/* 				    	Année : */
/* 					</div> 	  		    	*/
/* 					<div class='col-md-9'> 	  	  */
/* 				    	{{ course.year }}*/
/* 					</div> 	  	*/
/* 				</div>   	       */
/* 	       {% endif %}		        */
/* */
/* 	        */
/* */
/* 	       {% if course.langues|length >0  %}		   */
/* */
/* 				<div class='row'>	*/
/* 					<div class='col-md-3 attribut'> 	  	  */
/* 						    	Langue(s) :  */
/* 					</div> 	  		    	*/
/* 					<div class='col-md-9'> 	  	  */
/* 						{% for lan in course.langues %}*/
/* 				        	{{ lan.title }}&nbsp*/
/* 				        {% endfor %} */
/* 					</div> 	  	*/
/* 				</div> 	   	       */
/* 			{% endif %}		       */
/* 	              */
/* */
/* 	       {% if course.credits !="" %}	*/
/* 				<div class='row'>	*/
/* 					<div class='col-md-3 attribut'> 	  	  */
/* 				    	Nombre de crédits : */
/* 					</div> 	  		    	*/
/* 					<div class='col-md-9'> 	  	  */
/* 				    	{{ course.credits }}*/
/* 					</div> 	  	*/
/* 				</div> 	 	  	       */
/* 	       {% endif %}	*/
/* */
/* */
/* 	       {% if course.isOptional !="" %}	*/
/* 				<div class='row'>	*/
/* 					<div class='col-md-3 attribut'> 	  	  */
/* 				    	Optionnel : */
/* 					</div> 	  		    	*/
/* 					<div class='col-md-9'> 	  	  */
/* */
/* 							    	{% if course.isOptional==1 %}*/
/* 							    		Oui*/
/* 							    	{% else %}*/
/* 							    		Non*/
/* 							    	{% endif %}					    	*/
/* 				    	*/
/* 					</div> 	  	*/
/* 				</div>  	         	       */
/* 	       {% endif %}	*/
/* 	   	   </div>*/
/* 	   	   */
/* 	   	   <div class="col-sm-12 block3b">		   	   */
/* 				<div class='row'>	*/
/* 					<div class='col-md-3 attribut'> 	  	  */
/* 				    	Enseignant(s) associé(s) :*/
/* 					</div> 	  		    	*/
/* 					<div class='col-md-9'> 	  	  */
/* 					 	{% for user in course.redacteurs %}*/
/* 				    		{{user.sn }}, {{ user.givenname }}</br>*/
/* 				    	{% endfor %}*/
/* 					</div> 	  	*/
/* 				</div> 	 	   	   */
/* 	   	   </div>*/
/* 	   	   */
/* 	       {% if course.prerequisites|length >0 or course.concurrentCourses|length >0 %}		   */
/* 			   <div class="col-sm-12 block3b">	*/
/* 			       {% if course.prerequisites|length >0 %}	*/
/* 						<div class='row'>	*/
/* 							<div class='col-md-3 attribut'> 	  	  */
/* 						    	Préalable(s) : */
/* 							</div> 	  		    	*/
/* 							<div class='col-md-9'> 	  	  */
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
/* 							<div class='col-md-3 attribut'> 	  	  */
/* 						    	Concomitant(s) :  */
/* 							</div> 	  		    	*/
/* 							<div class='col-md-9'> 	  	  */
/* 			 	              {% for conc in course.concurrentCourses %}*/
/* 			                    {{ conc.label }}*/
/* 			                    <br>*/
/* 			                  {% endfor %}*/
/* 							</div> 	  	*/
/* 						</div> 	        	       */
/* 			       {% endif %}	*/
/* 			   </div>*/
/* 		   {% endif %}	*/
/* */
/* 		   */
/* 		   {% if course.isRemote>0  %} 	   */
/* 		   	<div class="col-sm-12 block3b">	*/
/* 		   {% endif %}		*/
/* 		   		       		   */
/* 			*/
/* */
/* 		   {% if    course.isFaceToFace!=""  or course.location!=null or course.timeSlot!=null or course.isRemote!=""   %} 	   */
/* 		   		</div> */
/* 		   {% endif %}					       */
/* 	*/
/* */
/* 	       {% if course.UrlPed !="" or course.UrlWeb !="" or course.UrlTwi !="" or course.UrlAut !=""   %}	*/
/* 		   		   	   <div class="col-sm-12 block3b">	*/
/* 		   {% endif %}			   */
/* 		   */
/* 	       {% if course.UrlPed !="" %}	*/
/* 				<div class='row'>	*/
/* 					<div class='col-md-3 attribut'> 	  	  */
/* 				    	Plateforme pédagogique (url) : */
/* 					</div> 	  		    	*/
/* 					<div class='col-md-9'> 	  	  */
/* 				    	<a href="{{ course.UrlPed }}" target='cible'>{{ course.UrlPed }}</a>*/
/* 					</div> 	  	*/
/* 				</div> 			       	  	       */
/* 	       {% endif %}	*/
/* */
/* */
/* 	       {% if course.UrlWeb !="" %}	*/
/* 				<div class='row'>	*/
/* 					<div class='col-md-3 attribut'> 	  	  */
/* 				    	Site web (hypotheses, etc) (url) : */
/* 					</div> 	  		    	*/
/* 					<div class='col-md-9'> 	  	  */
/* 				    	<a href="{{ course.UrlWeb }}" target='cible'>{{ course.UrlWeb }}</a>*/
/* 					</div> 	  	*/
/* 				</div> 		         	       */
/* 	       {% endif %}	*/
/* */
/* 	       {% if course.UrlTwi !="" %}*/
/* 				<div class='row'>	*/
/* 					<div class='col-md-3 attribut'> 	  	  */
/* 				    	Twitter (url) : */
/* 					</div> 	  		    	*/
/* 					<div class='col-md-9'> 	  	  */
/* 				    	<a href="{{ course.UrlTwi }}" target='cible'>{{ course.UrlTwi }}</a>*/
/* 					</div> 	  	*/
/* 				</div> 		       	  	       */
/* 	       {% endif %}	*/
/* */
/* 	       {% if course.UrlAut !="" %}	*/
/* 				<div class='row'>	*/
/* 					<div class='col-md-3 attribut'> 	  	  */
/* 				    	Autre (url) : */
/* 					</div> 	  		    	*/
/* 					<div class='col-md-9'> 	  	  */
/* 				    	<a href="{{ course.UrlAut }}" target='cible'>{{ course.UrlAut }}</a>*/
/* 					</div> 	  	*/
/* 				</div> 	  	       */
/* 	       {% endif %}	*/
/* 	       */
/* 	       {% if course.UrlPed !="" or course.UrlWeb !="" or course.UrlTwi !="" or course.UrlAut !=""   %}		       */
/* 		   </div>	*/
/* 	       {% endif %}	*/
/* 	       		  */
/*   		   <div class="col-sm-12 block3b">			       		   */
/* 	       {% if course.created !="" %}	*/
/* 				<div class='row'>	*/
/* 					<div class='col-md-3 attribut'> 	  	  */
/* 				    	Dernière modification : */
/* 					</div> 	  		    	*/
/* 					<div class='col-md-9'> 	  	  */
/* 				    	{{ course.created|date('d/m/Y  H:i:s') }}*/
/* 					</div> 	  	*/
/* 				</div> 		       	  	       */
/* 	       {% endif %}	*/
/* */
/* 	       {% if course.publicationState !="" %}	*/
/* 				<div class='row'>	*/
/* 					<div class='col-md-3 attribut'> 	  	  */
/* 				    	Statut : */
/* 					</div> 	  		    	*/
/* 					<div class='col-md-9'> 	  	  */
/* 		            	{% if course.publicationState==1 %}*/
/* 		                	<span class="glyphicon glyphicon-eye-open" style='color:green'> Publié*/
/* 		                {% else %}*/
/* 		                	<span class="glyphicon glyphicon-eye-close" style='color:red'> Brouillon*/
/* 		                {% endif %}  */
/* 					</div> 	  	*/
/* 				</div> 			       */
/*  	       */
/* 	       {% endif %}	*/
/*        	   </div>	    */
/*  */
/* */
/* */
/* */
/* 	</div>*/
/* 	        */
/* {% endblock %}*/
/* */
