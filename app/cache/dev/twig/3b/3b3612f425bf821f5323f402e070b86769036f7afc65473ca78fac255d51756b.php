<?php

/* IfeAloesBundle:Course:resum.html.twig */
class __TwigTemplate_6fe617bbb962cc68c9efd0b10084676ef4b2311c7b3f980d5d6d6f30c91ea95e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("IfeAloesBundle:Course:public.html.twig", "IfeAloesBundle:Course:resum.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "IfeAloesBundle:Course:public.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "<h2> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "title", array()), "html", null, true);
        echo "</h2>

<div class='container-fluid'>\t
\t
";
        // line 9
        if (twig_in_filter("0", (isset($context["param"]) ? $context["param"] : $this->getContext($context, "param")))) {
            echo "\t\t
\t  \t   <legend>PRESENTATION</legend>
\t  \t\t\t
\t   \t   <fieldset>\t
     
\t       ";
            // line 14
            if (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "program", array()) != "")) {
                echo "               
\t\t\t\t<div class='row'>\t
\t\t\t\t\t<div class='col-sm-2 '> \t  \t  
\t\t\t\t    \tProgramme :
\t\t\t\t\t</div> \t  \t\t    \t
\t\t\t\t\t<div class='col-sm-10'> \t  \t  
\t\t\t\t    \t";
                // line 20
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "program", array()), "html", null, true);
                echo "
\t\t\t\t\t</div> \t  \t
\t\t\t\t</div>               
\t       ";
            }
            // line 23
            echo "\t       



\t       ";
            // line 27
            if (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "label", array()) != "")) {
                // line 28
                echo "\t\t\t\t<div class='row'>\t
\t\t\t\t\t<div class='col-sm-2 '> \t  \t  
\t\t\t\t    \tSigle :
\t\t\t\t\t</div> \t  \t\t    \t
\t\t\t\t\t<div class='col-sm-10'> \t  \t  
\t\t\t\t    \t";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "label", array()), "html", null, true);
                echo "
\t\t\t\t\t</div> \t  \t
\t\t\t\t</div>  \t         \t       
\t       ";
            }
            // line 37
            echo "\t       
\t       
\t       ";
            // line 39
            if (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "title", array()) != "")) {
                echo "\t
\t\t\t\t<div class='row'>\t
\t\t\t\t\t<div class='col-sm-2 '> \t  \t  
\t\t\t\t    \tTitre :
\t\t\t\t\t</div> \t  \t\t    \t
\t\t\t\t\t<div class='col-sm-10'> \t  \t  
\t\t\t\t    \t";
                // line 45
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "title", array()), "html", null, true);
                echo "
\t\t\t\t\t</div> \t  \t
\t\t\t\t</div>  \t        \t       
\t       ";
            }
            // line 48
            echo "\t\t       

\t       
\t       ";
            // line 51
            if (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "semester", array()) != "")) {
                // line 52
                echo "\t\t\t\t<div class='row'>\t
\t\t\t\t\t<div class='col-sm-2 '> \t  \t  
\t\t\t\t    \tSemestre :
\t\t\t\t\t</div> \t  \t\t    \t
\t\t\t\t\t<div class='col-sm-10'> \t  \t  
\t\t\t\t    \t";
                // line 57
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "semester", array()), "html", null, true);
                echo "
\t\t\t\t\t</div> \t  \t
\t\t\t\t</div>  \t\t       \t       
\t       ";
            }
            // line 60
            echo "\t
\t       
\t       ";
            // line 62
            if (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "year", array()) != "")) {
                echo "\t
\t\t\t\t<div class='row'>\t
\t\t\t\t\t<div class='col-sm-2 '> \t  \t  
\t\t\t\t    \tAnnée :
\t\t\t\t\t</div> \t  \t\t    \t
\t\t\t\t\t<div class='col-sm-10'> \t  \t  
\t\t\t\t    \t";
                // line 68
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "year", array()), "html", null, true);
                echo "
\t\t\t\t\t</div> \t  \t
\t\t\t\t</div>   \t       
\t       ";
            }
            // line 71
            echo "\t\t        

\t       ";
            // line 73
            if (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "isOptional", array()) != "")) {
                echo "\t
\t\t\t\t<div class='row'>\t
\t\t\t\t\t<div class='col-sm-2 '> \t  \t  
\t\t\t\t    \tOptionnel :
\t\t\t\t\t</div> \t  \t\t    \t
\t\t\t\t\t<div class='col-sm-10'> \t  \t  
\t\t\t\t    \t";
                // line 79
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "isOptional", array()), "html", null, true);
                echo "
\t\t\t\t\t</div> \t  \t
\t\t\t\t</div>  \t         \t       
\t       ";
            }
            // line 82
            echo "\t
\t       
\t       
\t       ";
            // line 85
            if (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "language", array()) != "")) {
                // line 86
                echo "\t\t\t\t<div class='row'>\t
\t\t\t\t\t<div class='col-sm-2 '> \t  \t  
\t\t\t\t    \tLangue(s) du cours :
\t\t\t\t\t</div> \t  \t\t    \t
\t\t\t\t\t<div class='col-sm-10'> \t  \t  
\t\t\t\t    \t";
                // line 91
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "language", array()), "html", null, true);
                echo "
\t\t\t\t\t</div> \t  \t
\t\t\t\t</div> \t        \t       
\t       ";
            }
            // line 94
            echo "\t\t       

\t       ";
            // line 96
            if (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "credits", array()) != "")) {
                echo "\t
\t\t\t\t<div class='row'>\t
\t\t\t\t\t<div class='col-sm-2 '> \t  \t  
\t\t\t\t    \tNombre de crédits :
\t\t\t\t\t</div> \t  \t\t    \t
\t\t\t\t\t<div class='col-sm-10'> \t  \t  
\t\t\t\t    \t";
                // line 102
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "credits", array()), "html", null, true);
                echo "
\t\t\t\t\t</div> \t  \t
\t\t\t\t</div> \t \t  \t       
\t       ";
            }
            // line 105
            echo "\t

\t       
\t   \t   </fieldset>

\t       ";
            // line 110
            if (((twig_length_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "prerequisites", array())) > 0) || (twig_length_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "concurrentCourses", array())) > 0))) {
                echo "\t\t   
\t\t\t   <fieldset> 
\t\t\t       ";
                // line 112
                if ((twig_length_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "prerequisites", array())) > 0)) {
                    echo "\t
\t\t\t\t\t\t<div class='row'>\t
\t\t\t\t\t\t\t<div class='col-sm-2 '> \t  \t  
\t\t\t\t\t\t    \tPréalable(s) :
\t\t\t\t\t\t\t</div> \t  \t\t    \t
\t\t\t\t\t\t\t<div class='col-sm-10'> \t  \t  
\t\t\t\t\t\t    \t";
                    // line 118
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "prerequisites", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["pre"]) {
                        // line 119
                        echo "\t\t\t\t                    ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["pre"], "label", array()), "html", null, true);
                        echo "&nbsp
\t\t\t\t                    <br>
\t\t\t\t                  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pre'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 121
                    echo " 
\t\t\t\t\t\t\t</div> \t  \t
\t\t\t\t\t\t</div> \t   \t       
\t\t\t       ";
                }
                // line 124
                echo "\t
\t
\t\t\t       ";
                // line 126
                if ((twig_length_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "concurrentCourses", array())) > 0)) {
                    // line 127
                    echo "\t\t\t\t\t\t<div class='row'>\t
\t\t\t\t\t\t\t<div class='col-sm-2 '> \t  \t  
\t\t\t\t\t\t    \tConcomitant(s) : 
\t\t\t\t\t\t\t</div> \t  \t\t    \t
\t\t\t\t\t\t\t<div class='col-sm-10'> \t  \t  
\t\t\t \t              ";
                    // line 132
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "concurrentCourses", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["conc"]) {
                        // line 133
                        echo "\t\t\t                    ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["conc"], "label", array()), "html", null, true);
                        echo "
\t\t\t                    <br>
\t\t\t                  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['conc'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 136
                    echo "\t\t\t\t\t\t\t</div> \t  \t
\t\t\t\t\t\t</div> \t        \t       
\t\t\t       ";
                }
                // line 138
                echo "\t
\t\t\t   </fieldset>
\t\t   ";
            }
            // line 140
            echo "\t

\t\t   
\t\t   ";
            // line 143
            if ((((((((($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "isFaceToFace", array()) > 0) || ($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "location", array()) != null)) || ($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "timeSlot", array()) != null)) || ($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "isRemote", array()) > 0)) || ($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "UrlPed", array()) != "")) || ($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "UrlWeb", array()) != "")) || ($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "UrlTwi", array()) != "")) || ($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "UrlAut", array()) != ""))) {
                echo " \t   
\t\t   \t\t<fieldset>
\t\t   ";
            }
            // line 145
            echo "\t\t
\t\t   \t\t       \t\t   
\t\t\t\t       ";
            // line 147
            if (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "isFaceToFace", array()) > 0)) {
                echo " 
\t\t\t\t\t\t\t<div class='row'>\t
\t\t\t\t\t\t\t\t<div class='col-sm-2 '> \t  \t  
\t\t\t\t\t\t\t    \tEn présentiel :
\t\t\t\t\t\t\t\t</div> \t  \t\t    \t
\t\t\t\t\t\t\t\t<div class='col-sm-10'> \t  \t  
\t\t\t\t\t\t\t    \t";
                // line 153
                if (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "isFaceToFace", array()) == 1)) {
                    // line 154
                    echo "\t\t\t\t\t\t\t    \t\tOui
\t\t\t\t\t\t\t    \t";
                } else {
                    // line 156
                    echo "\t\t\t\t\t\t\t    \t\tNon
\t\t\t\t\t\t\t    \t";
                }
                // line 157
                echo "\t\t\t\t    \t\t\t\t\t    \t\t
\t\t\t\t\t\t\t\t</div> \t  \t
\t\t\t\t\t\t\t</div> \t \t       \t\t  \t       
\t\t\t\t       ";
            }
            // line 160
            echo "\t
\t\t\t
\t\t\t
\t\t\t\t       ";
            // line 163
            if (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "location", array()) != "")) {
                // line 164
                echo "\t\t\t\t\t\t\t<div class='row'>\t
\t\t\t\t\t\t\t\t<div class='col-sm-2 '> \t  \t  
\t\t\t\t\t\t\t    \tLocal :
\t\t\t\t\t\t\t\t</div> \t  \t\t    \t
\t\t\t\t\t\t\t\t<div class='col-sm-10'> \t  \t  
\t\t\t\t\t\t\t    \t";
                // line 169
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "location", array()), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t</div> \t  \t
\t\t\t\t\t\t\t</div> \t\t       \t  \t       
\t\t\t\t       ";
            }
            // line 172
            echo "\t
\t\t\t
\t\t\t\t       ";
            // line 174
            if (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "timeSlot", array()) != "")) {
                echo "\t
\t\t\t\t\t\t\t<div class='row'>\t
\t\t\t\t\t\t\t\t<div class='col-sm-2 '> \t  \t  
\t\t\t\t\t\t\t    \tHoraire :
\t\t\t\t\t\t\t\t</div> \t  \t\t    \t
\t\t\t\t\t\t\t\t<div class='col-sm-10'> \t  \t  
\t\t\t\t\t\t\t    \t";
                // line 180
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "timeSlot", array()), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t</div> \t  \t
\t\t\t\t\t\t\t</div> \t\t       \t       
\t\t\t\t       ";
            }
            // line 183
            echo "\t
\t\t\t

\t\t\t\t       
\t\t\t\t       
\t

\t       ";
            // line 190
            if ((((($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "UrlPed", array()) != "") || ($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "UrlWeb", array()) != "")) || ($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "UrlTwi", array()) != "")) || ($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "UrlAut", array()) != ""))) {
                echo "\t

\t\t   \t
\t\t\t\t<div class='row'>\t
\t\t\t\t\t<div class='col-sm-12 attribut'> \t  \t  
\t\t\t\t    \tUrls :
\t\t\t\t\t</div> \t  \t\t    \t  \t
\t\t\t\t</div> \t\t   \t
\t\t   \t
\t\t   ";
            }
            // line 199
            echo "\t\t\t   
\t\t   
\t       ";
            // line 201
            if (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "UrlPed", array()) != "")) {
                echo "\t
\t\t\t\t<div class='row'>\t
\t\t\t\t\t<div class='col-sm-2 '> \t  \t  
\t\t\t\t    \tPlateforme pédagogique 
\t\t\t\t\t</div> \t  \t\t    \t
\t\t\t\t\t<div class='col-sm-10'> \t  \t  
\t\t\t\t    \t<a href=\"";
                // line 207
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "UrlPed", array()), "html", null, true);
                echo "\" target='cible'>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "UrlPed", array()), "html", null, true);
                echo "</a>
\t\t\t\t\t</div> \t  \t
\t\t\t\t</div> \t\t\t       \t  \t       
\t       ";
            }
            // line 210
            echo "\t


\t       ";
            // line 213
            if (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "UrlWeb", array()) != "")) {
                echo "\t
\t\t\t\t<div class='row'>\t
\t\t\t\t\t<div class='col-sm-2 '> \t  \t  
\t\t\t\t    \tSite web (hypotheses, etc) 
\t\t\t\t\t</div> \t  \t\t    \t
\t\t\t\t\t<div class='col-sm-10'> \t  \t  
\t\t\t\t    \t<a href=\"";
                // line 219
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "UrlWeb", array()), "html", null, true);
                echo "\" target='cible'>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "UrlWeb", array()), "html", null, true);
                echo "</a>
\t\t\t\t\t</div> \t  \t
\t\t\t\t</div> \t\t         \t       
\t       ";
            }
            // line 222
            echo "\t

\t       ";
            // line 224
            if (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "UrlTwi", array()) != "")) {
                // line 225
                echo "\t\t\t\t<div class='row'>\t
\t\t\t\t\t<div class='col-sm-2 '> \t  \t  
\t\t\t\t    \tTwitter 
\t\t\t\t\t</div> \t  \t\t    \t
\t\t\t\t\t<div class='col-sm-10'> \t  \t  
\t\t\t\t    \t<a href=\"";
                // line 230
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "UrlTwi", array()), "html", null, true);
                echo "\" target='cible'>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "UrlTwi", array()), "html", null, true);
                echo "</a>
\t\t\t\t\t</div> \t  \t
\t\t\t\t</div> \t\t       \t  \t       
\t       ";
            }
            // line 233
            echo "\t

\t       ";
            // line 235
            if (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "UrlAut", array()) != "")) {
                echo "\t
\t\t\t\t<div class='row'>\t
\t\t\t\t\t<div class='col-sm-2 '> \t  \t  
\t\t\t\t    \tAutre :
\t\t\t\t\t</div> \t  \t\t    \t
\t\t\t\t\t<div class='col-sm-10'> \t  \t  
\t\t\t\t    \t<a href=\"";
                // line 241
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "UrlAut", array()), "html", null, true);
                echo "\" target='cible'>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "UrlAut", array()), "html", null, true);
                echo "</a>
\t\t\t\t\t</div> \t  \t
\t\t\t\t</div> \t  \t       
\t       ";
            }
            // line 244
            echo "\t
\t       
\t       ";
            // line 246
            if ((((((((($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "UrlPed", array()) != "") || ($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "UrlWeb", array()) != "")) || ($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "UrlTwi", array()) != "")) || ($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "UrlAut", array()) != "")) || ($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "UrlPed", array()) != "")) || ($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "UrlWeb", array()) != "")) || ($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "UrlTwi", array()) != "")) || ($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "UrlAut", array()) != ""))) {
                echo "\t\t       
\t\t   </fieldset>\t
\t       ";
            }
            // line 248
            echo "\t

<br/>\t       
";
        }
        // line 251
        echo "\t       
\t       
";
        // line 253
        if (twig_in_filter("1", (isset($context["param"]) ? $context["param"] : $this->getContext($context, "param")))) {
            echo "       \t 
  
\t    ";
            // line 255
            if (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "publicationState", array()) != "")) {
                echo "\t       \t     
\t\t  \t<legend>DESCRIPTION</legend>
\t\t  \t  

\t       ";
                // line 259
                if (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "description", array()) != "")) {
                    echo "    
\t\t\t\t<div class='row'>\t    \t
\t\t\t\t\t<div class='col-sm-12' > \t  \t  
\t\t\t\t    \t<div  style=\"overflow:auto; height: 200px; width: 100%; padding: 15px; border: 1px solid #AAAAAA\">
\t\t\t\t    \t\t";
                    // line 263
                    echo $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "description", array());
                    echo "
\t\t\t\t    \t</div>
\t\t\t\t\t</div> \t  \t
\t\t\t\t</div>  \t                  
\t       ";
                }
                // line 267
                echo "\t  
 \t    ";
            }
            // line 268
            echo "\t     
<br/>\t\t    
";
        }
        // line 270
        echo "   \t    
 
 
 \t\t<div class='row col-md-12 '>\t

\t\t\t";
        // line 275
        if ((twig_in_filter("2", (isset($context["param"]) ? $context["param"] : $this->getContext($context, "param"))) && twig_in_filter("3", (isset($context["param"]) ? $context["param"] : $this->getContext($context, "param"))))) {
            // line 276
            echo "\t\t\t\t<div class='col-sm-6 '>
\t\t\t";
        }
        // line 278
        echo "\t\t\t";
        if (twig_in_filter("2", (isset($context["param"]) ? $context["param"] : $this->getContext($context, "param")))) {
            // line 279
            echo "\t\t\t\t\t
\t\t\t\t<div class='col-sm-12 '>
\t\t\t\t\t<legend>OBJECTIFS D'APPRENTISSAGE</legend> 
\t\t\t\t</div>
\t\t\t\t\t\t
\t\t     \t";
            // line 284
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "objectives", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["oa"]) {
                // line 285
                echo "\t\t     \t
\t\t\t     \t";
                // line 286
                if (($this->getAttribute($context["oa"], "weight", array()) > 0)) {
                    // line 287
                    echo "\t\t\t\t     \t<div class=' block col-sm-12'>
\t\t\t\t     \t\t<div class='col-sm-10 '>
\t\t\t\t     \t\t\t";
                    // line 289
                    echo twig_escape_filter($this->env, $this->getAttribute($context["oa"], "title", array()), "html", null, true);
                    echo "
\t\t\t\t     \t\t</div>
\t\t\t\t     \t\t<div class='col-sm-2'>
\t\t\t\t     \t\t\t";
                    // line 292
                    echo twig_escape_filter($this->env, ($this->getAttribute($context["oa"], "weight", array()) * 100), "html", null, true);
                    echo "%
\t\t\t\t     \t\t</div>
\t\t\t\t\t\t</div>
\t\t\t     \t\t
\t\t\t     \t\t<div class='row '>
\t\t\t     \t\t\t\t     \t
\t\t\t     \t\t";
                    // line 298
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["oa"], "specificObjectives", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["oas"]) {
                        echo "     \t
\t\t\t     \t\t
\t\t\t     \t\t\t";
                        // line 300
                        if (($this->getAttribute($this->getAttribute($context["oas"], "assessmentLinks", array()), "count", array()) > 0)) {
                            echo "\t
\t\t\t     \t\t\t\t<div class='  col-sm-9 col-md-offset-1'>
\t\t\t\t     \t\t\t\t- ";
                            // line 302
                            echo twig_escape_filter($this->env, $this->getAttribute($context["oas"], "title", array()), "html", null, true);
                            echo "  
\t\t\t\t     \t\t\t</div>
\t\t\t     \t\t\t\t<div class='  col-sm-2 '>
\t\t\t     \t\t\t\t\t";
                            // line 305
                            echo twig_escape_filter($this->env, ($this->getAttribute($context["oas"], "weight", array()) * 100), "html", null, true);
                            echo "%
\t\t\t     \t\t\t\t</div>
\t\t\t\t     \t\t\t<!--
\t\t\t\t     \t\t\tPoids ";
                            // line 308
                            echo twig_escape_filter($this->env, $this->getAttribute($context["oas"], "weight", array()), "html", null, true);
                            echo " / ";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["oas"], "position", array()), "html", null, true);
                            echo " <br/>
\t\t\t\t     \t\t\tEvaluations  ";
                            // line 309
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["oas"], "competenceLinks", array()), "count", array()), "html", null, true);
                            echo "  <br/>
\t\t\t\t     \t\t\tCompetences ";
                            // line 310
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["oas"], "assessmentLinks", array()), "count", array()), "html", null, true);
                            echo "  <br/>
\t\t\t\t     \t\t\t-->
\t\t\t\t     \t\t\t";
                        }
                        // line 313
                        echo "\t\t\t     \t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oas'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 314
                    echo "\t\t\t     \t\t
\t\t\t     \t\t</div>
\t\t\t   
\t\t\t     \t";
                }
                // line 317
                echo "     \t\t
\t\t     \t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oa'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 318
            echo "  \t\t
\t\t\t";
        }
        // line 319
        echo "\t\t

\t\t\t";
        // line 321
        if ((twig_in_filter("2", (isset($context["param"]) ? $context["param"] : $this->getContext($context, "param"))) && twig_in_filter("3", (isset($context["param"]) ? $context["param"] : $this->getContext($context, "param"))))) {
            // line 322
            echo "\t\t\t\t</div>\t\t\t\t
\t\t\t\t<div class='col-sm-6 '>\t
\t\t\t";
        }
        // line 324
        echo "\t\t

\t\t\t
\t\t\t\t\t
\t\t\t";
        // line 328
        if (twig_in_filter("3", (isset($context["param"]) ? $context["param"] : $this->getContext($context, "param")))) {
            // line 329
            echo "\t\t\t\t<div class='col-sm-12 '>
\t\t\t\t\t<legend>REFERENTIEL DE COMPETENCES</legend> 
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t";
            // line 333
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["comp"]) ? $context["comp"] : $this->getContext($context, "comp")));
            foreach ($context['_seq'] as $context["_key"] => $context["cp"]) {
                echo "   

\t\t\t\t     \t<div class=' block col-sm-12'>
\t\t\t\t     \t\t<div class='col-sm-10 '>
\t\t\t\t     \t\t\t";
                // line 337
                echo twig_escape_filter($this->env, $this->getAttribute($context["cp"], "title", array()), "html", null, true);
                echo "
\t\t\t\t     \t\t</div>
\t\t\t\t     \t\t<div class='col-sm-2'>
\t\t\t\t     \t\t\t ";
                // line 340
                echo twig_escape_filter($this->env, ($this->getAttribute($context["cp"], "weight", array()) * 100), "html", null, true);
                echo "%
\t\t\t\t     \t\t</div>
\t\t\t\t\t\t</div>

\t     \t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cp'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 344
            echo "\t
\t\t\t";
        }
        // line 345
        echo "\t   
\t\t\t";
        // line 346
        if ((twig_in_filter("2", (isset($context["param"]) ? $context["param"] : $this->getContext($context, "param"))) && twig_in_filter("3", (isset($context["param"]) ? $context["param"] : $this->getContext($context, "param"))))) {
            echo "  \t\t\t
\t\t\t</div>
\t\t\t";
        }
        // line 348
        echo "\t\t\t 
\t\t</div>
\t\t
\t\t<br/>
     \t
";
        // line 353
        if (twig_in_filter("4", (isset($context["param"]) ? $context["param"] : $this->getContext($context, "param")))) {
            echo "     \t
\t    ";
            // line 354
            if (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "Pedagogy", array()) != "")) {
                echo "   
\t            \t
\t  \t<legend>METHODES PEDAGOGIQUES</legend>
\t  \t\t\t 
\t   \t<fieldset>\t

\t\t\t\t<div class='row'>\t\t    \t
\t\t\t\t\t<div class='col-sm-12'> \t  \t  
\t\t\t\t    \t";
                // line 362
                echo $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "Pedagogy", array());
                echo "
\t\t\t\t\t</div> \t  \t
\t\t\t\t</div>               
\t   \t</fieldset>
\t    ";
            }
            // line 366
            echo "\t \t\t        \t\t       
\t\t<br/>
";
        }
        // line 368
        echo "  \t\t

";
        // line 370
        if (twig_in_filter("5", (isset($context["param"]) ? $context["param"] : $this->getContext($context, "param")))) {
            echo "        \t
\t\t<legend>CALENDRIER</legend> \t  
\t\t
     \t";
            // line 373
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["topics"]) ? $context["topics"] : $this->getContext($context, "topics")));
            foreach ($context['_seq'] as $context["_key"] => $context["se"]) {
                echo " 
     \t
\t\t";
                // line 375
                if (($this->getAttribute($context["se"], "endDate", array()) != null)) {
                    echo "\t\t
\t\t";
                    // line 376
                    $context["endSequence"] = twig_date_format_filter($this->env, $this->getAttribute($context["se"], "endDate", array()), "d-m-Y");
                    // line 377
                    echo "\t\t";
                } else {
                    // line 378
                    echo "\t\t";
                    $context["endSequence"] = twig_date_format_filter($this->env, $this->getAttribute($context["se"], "startDate", array()), "d-m-Y");
                    echo "\t\t\t\t\t
\t\t";
                }
                // line 379
                echo "\t  


\t\t";
                // line 382
                $context["cptAR"] = 0;
                echo "\t\t\t
\t\t     \t
     \t<fieldset>
\t\t\t\t<div class='row block'>\t
\t\t\t\t\t<div class='col-sm-3 '>
\t\t\t\t\t\t";
                // line 387
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["se"], "startDate", array()), "d-m-Y"), "html", null, true);
                echo "  \t
\t\t\t\t\t\t
\t\t\t\t\t\t<!--
\t\t\t\t\t\t";
                // line 390
                if (($this->getAttribute($context["se"], "endDate", array()) != null)) {
                    // line 391
                    echo "\t\t\t\t\t\t au ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["se"], "endDate", array()), "d-m-Y"), "html", null, true);
                    echo "  \t\t\t\t\t
\t\t\t\t\t\t";
                }
                // line 392
                echo " 
\t\t\t\t\t\t-->
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t</div>     \t
\t\t\t\t\t<div class='col-sm-7 '>
\t\t\t\t\t\t<h4>";
                // line 397
                echo twig_escape_filter($this->env, $this->getAttribute($context["se"], "title", array()), "html", null, true);
                echo "</h4> \t 
\t\t\t\t\t</div>     \t\t\t\t\t\t\t\t\t\t\t\t\t\t
  \t\t\t\t\t<div class='col-sm-2 '>
\t\t\t\t\t<!--\t";
                // line 400
                echo twig_escape_filter($this->env, ($this->getAttribute($context["se"], "weight", array()) * 100), "html", null, true);
                echo "% -->
\t\t\t\t\t</div>   
\t\t\t\t</div>\t\t
\t\t\t\t<div class='row '>\t
\t\t\t\t\t<div class='col-sm-6 '>
\t\t\t\t\t\t";
                // line 405
                echo $this->getAttribute($context["se"], "description", array());
                echo "\t
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class='col-sm-6 '>\t\t\t\t
\t\t\t\t\t\t
\t       \t\t\t\t";
                // line 410
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["se"], "assessments", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["sea"]) {
                    echo "   \t       \t\t\t\t
\t       \t\t\t\t\t";
                    // line 411
                    if (((twig_date_format_filter($this->env, $this->getAttribute($context["sea"], "deadline", array()), "Ymd") >= twig_date_format_filter($this->env, $this->getAttribute($context["se"], "startDate", array()), "Ymd")) && (twig_date_format_filter($this->env, $this->getAttribute($context["sea"], "deadline", array()), "Ymd") <= twig_date_format_filter($this->env, $this->getAttribute($context["se"], "endDate", array()), "Ymd")))) {
                        // line 412
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t";
                    } else {
                        // line 413
                        echo "    \t\t\t
\t\t\t\t\t\t\t\t";
                        // line 414
                        if (((isset($context["cptAR"]) ? $context["cptAR"] : $this->getContext($context, "cptAR")) == 0)) {
                            echo "\t\t
\t\t\t\t\t\t\t\t\t<div class='col-sm-12 '>
\t\t\t\t\t\t\t\t\t\t<b><i>Travail à réaliser : </i></b>
\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
                        }
                        // line 418
                        echo "\t\t\t
\t\t\t\t\t\t\t\t<div class='col-sm-10 '>
\t\t\t\t\t\t\t\t\t";
                        // line 420
                        echo twig_escape_filter($this->env, $this->getAttribute($context["sea"], "title", array()), "html", null, true);
                        echo " 
\t\t\t\t\t\t\t\t</div>        \t\t\t\t
\t\t\t   \t\t\t\t\t<div class='col-sm-2 '> 
\t\t\t\t\t\t\t    </div> 
\t\t\t\t\t\t\t    
\t\t\t\t\t\t\t    ";
                        // line 425
                        $context["cptAR"] = ((isset($context["cptAR"]) ? $context["cptAR"] : $this->getContext($context, "cptAR")) + 1);
                        echo "\t\t  
\t\t\t\t\t\t\t";
                    }
                    // line 426
                    echo "          \t\t\t\t\t\t\t\t     \t\t
\t\t 
\t       \t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sea'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 428
                echo "  
\t\t\t\t\t\t
\t\t\t\t\t\t";
                // line 430
                $context["find"] = 0;
                // line 431
                echo "\t\t\t\t\t\t
\t       \t\t\t\t";
                // line 432
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["assessment"]) ? $context["assessment"] : $this->getContext($context, "assessment")));
                foreach ($context['_seq'] as $context["_key"] => $context["ass"]) {
                    echo "  

\t\t\t\t\t\t  ";
                    // line 434
                    if (($this->getAttribute($context["ass"], "deadline", array()) != null)) {
                        // line 435
                        echo "
\t\t\t\t\t\t\t";
                        // line 436
                        if (((twig_date_format_filter($this->env, $this->getAttribute($context["ass"], "deadline", array()), "Ymd") >= twig_date_format_filter($this->env, $this->getAttribute($context["se"], "startDate", array()), "Ymd")) && (twig_date_format_filter($this->env, $this->getAttribute($context["ass"], "deadline", array()), "Ymd") <= twig_date_format_filter($this->env, $this->getAttribute($context["se"], "endDate", array()), "Ymd")))) {
                            // line 437
                            echo " \t
 \t\t\t\t\t\t\t\t";
                            // line 438
                            if (((isset($context["find"]) ? $context["find"] : $this->getContext($context, "find")) == 0)) {
                                // line 439
                                echo "\t\t\t \t\t\t\t\t\t<div class='col-sm-12 '>
\t\t\t\t\t\t\t\t\t\t<br/><b><i>Travail à rendre : </i></b>
\t\t\t\t\t\t\t\t\t</div>
 \t\t\t\t\t\t\t\t";
                            }
                            // line 442
                            echo " 
 
\t\t\t\t\t\t\t\t<div class='col-sm-10 '> 
\t
\t\t\t\t\t\t\t\t\t";
                            // line 446
                            if (($this->getAttribute($context["ass"], "deadline", array()) != null)) {
                                // line 447
                                echo "\t\t\t\t\t\t\t\t\t <i>";
                                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["ass"], "deadline", array()), "d-m-Y"), "html", null, true);
                                echo "</i> : 
\t\t\t\t\t\t\t\t\t";
                            }
                            // line 449
                            echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
                            // line 450
                            echo twig_escape_filter($this->env, $this->getAttribute($context["ass"], "title", array()), "html", null, true);
                            echo "
\t\t\t\t\t\t\t\t\t
\t
\t\t\t\t\t\t\t\t</div>        \t\t\t\t
\t\t\t   \t\t\t\t\t<div class='col-sm-2 '>
\t\t\t\t\t\t\t\t\t";
                            // line 455
                            if (($this->getAttribute($context["ass"], "weight", array()) != 0)) {
                                // line 456
                                echo "\t\t\t\t\t\t\t\t\t\t";
                                echo twig_escape_filter($this->env, ($this->getAttribute($context["ass"], "weight", array()) * 100), "html", null, true);
                                echo "%
\t\t\t\t\t\t\t\t\t";
                            }
                            // line 458
                            echo "\t\t\t\t\t\t\t\t</div>         \t \t\t\t\t\t\t\t     \t\t
\t
\t\t\t\t\t\t\t\t";
                            // line 460
                            $context["find"] = 1;
                            // line 461
                            echo "\t
\t\t\t\t\t\t\t";
                        }
                        // line 462
                        echo "\t
\t\t\t\t\t\t  ";
                    }
                    // line 463
                    echo "\t\t
\t       \t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ass'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 464
                echo "  \t\t\t\t\t\t

\t\t\t\t\t</div>\t\t\t\t\t

 
 
\t\t\t\t\t
\t\t\t\t</div>\t   \t


       \t</fieldset>\t     \t\t     \t
     \t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['se'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 475
            echo "\t\t
     \t<br/>
";
        }
        // line 477
        echo "  
   \t
";
        // line 479
        if (twig_in_filter("3", (isset($context["param"]) ? $context["param"] : $this->getContext($context, "param")))) {
            echo "        \t

\t
     \t
";
        }
        // line 483
        echo "     \t
   \t
";
        // line 485
        if (twig_in_filter("6", (isset($context["param"]) ? $context["param"] : $this->getContext($context, "param")))) {
            echo "        \t

     \t
\t\t<legend>EVALUATIONS</legend> \t 

     \t<fieldset>\t\t
     \t  ";
            // line 491
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["topics"]) ? $context["topics"] : $this->getContext($context, "topics")));
            foreach ($context['_seq'] as $context["_key"] => $context["se"]) {
                echo " 
\t\t    ";
                // line 492
                if (($this->getAttribute($context["se"], "weight", array()) != 0)) {
                    // line 493
                    echo "\t\t\t\t\t\t\t
\t\t\t\t<div class='row '>\t
\t       \t\t\t\t";
                    // line 495
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["se"], "assessments", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["sea"]) {
                        echo "   
\t       \t\t\t\t
\t\t\t\t\t\t\t";
                        // line 497
                        if (($this->getAttribute($context["sea"], "weight", array()) != 0)) {
                            // line 498
                            echo "\t\t\t\t\t\t\t<div class='col-sm-12'>\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class='col-sm-5'>
\t\t\t\t\t\t\t\t\t";
                            // line 500
                            echo twig_escape_filter($this->env, $this->getAttribute($context["sea"], "title", array()), "html", null, true);
                            echo " 
\t\t\t\t\t\t\t\t</div>       \t\t\t\t
\t\t\t   \t\t\t\t\t<div class='col-sm-5'>
\t\t\t   \t\t\t\t\t\t";
                            // line 503
                            if (($this->getAttribute($context["sea"], "deadline", array(), "any", true, true) && ($this->getAttribute($context["sea"], "deadline", array()) != null))) {
                                // line 504
                                echo "\t\t\t\t\t\t\t\t\tDate de rendu : ";
                                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["sea"], "deadline", array()), "d/m/Y"), "html", null, true);
                                echo "
\t\t\t\t\t\t\t\t\t";
                            }
                            // line 505
                            echo "&nbsp;
\t\t\t\t\t\t\t\t</div>   
\t\t\t   \t\t\t\t\t<div class='col-sm-2'>\t\t   \t\t
\t\t\t\t\t\t\t\t\t";
                            // line 508
                            echo twig_escape_filter($this->env, ($this->getAttribute($context["sea"], "weight", array()) * 100), "html", null, true);
                            echo "% \t\t   \t\t\t\t\t
\t\t\t\t\t\t\t\t</div>         \t\t\t\t\t\t\t\t     \t\t
\t\t\t\t\t\t\t</div> 
\t\t\t\t\t     \t";
                        }
                        // line 511
                        echo " 
\t       \t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sea'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 512
                    echo "  \t \t\t\t\t
\t\t\t\t</div>\t   \t


   \t\t    ";
                }
                // line 516
                echo "   \t
     \t  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['se'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 517
            echo "\t\t
       \t</fieldset>\t  
     \t<br/>     \t
     \t
";
        }
        // line 521
        echo "  
   \t
";
        // line 523
        if (twig_in_filter("7", (isset($context["param"]) ? $context["param"] : $this->getContext($context, "param")))) {
            echo "    \t
\t    ";
            // line 524
            if (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "resources", array()) != "")) {
                echo "   \t            \t
\t\t  \t<legend>RESSOURCES</legend>  \t\t\t
\t\t   \t<fieldset>\t
\t  
\t    \t\t\t    
\t            
\t\t\t\t\t<div class='row'>\t\t    \t
\t\t\t\t\t\t<div class='col-sm-12'> \t  \t  
\t\t\t\t\t    \t";
                // line 532
                echo $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "resources", array());
                echo "
\t\t\t\t\t\t</div> \t  \t
\t\t\t\t\t</div>  
\t\t\t</fieldset>\t\t             
\t    ";
            }
            // line 536
            echo "\t     \t
     \t<br/>
";
        }
        // line 538
        echo "       \t

";
        // line 540
        if (twig_in_filter("8", (isset($context["param"]) ? $context["param"] : $this->getContext($context, "param")))) {
            echo "       \t
\t    ";
            // line 541
            if (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "rules", array()) != "")) {
                echo "   
\t            \t
\t  \t<legend>REGLEMENTS</legend>
\t  \t\t\t
\t   \t<fieldset>\t

\t\t\t\t<div class='row'>\t\t    \t
\t\t\t\t\t<div class='col-sm-12'> \t  \t  
\t\t\t\t    \t";
                // line 549
                echo $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "rules", array());
                echo "
\t\t\t\t\t</div> \t  \t
\t\t\t\t</div>               
\t    ";
            }
            // line 552
            echo "\t \t\t       \t\t       
";
        }
        // line 553
        echo "  
\t
</div>
        
";
    }

    public function getTemplateName()
    {
        return "IfeAloesBundle:Course:resum.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1158 => 553,  1154 => 552,  1147 => 549,  1136 => 541,  1132 => 540,  1128 => 538,  1123 => 536,  1115 => 532,  1104 => 524,  1100 => 523,  1096 => 521,  1089 => 517,  1082 => 516,  1075 => 512,  1068 => 511,  1061 => 508,  1056 => 505,  1050 => 504,  1048 => 503,  1042 => 500,  1038 => 498,  1036 => 497,  1029 => 495,  1025 => 493,  1023 => 492,  1017 => 491,  1008 => 485,  1004 => 483,  996 => 479,  992 => 477,  987 => 475,  970 => 464,  963 => 463,  959 => 462,  955 => 461,  953 => 460,  949 => 458,  943 => 456,  941 => 455,  933 => 450,  930 => 449,  924 => 447,  922 => 446,  916 => 442,  910 => 439,  908 => 438,  905 => 437,  903 => 436,  900 => 435,  898 => 434,  891 => 432,  888 => 431,  886 => 430,  882 => 428,  874 => 426,  869 => 425,  861 => 420,  857 => 418,  849 => 414,  846 => 413,  842 => 412,  840 => 411,  834 => 410,  826 => 405,  818 => 400,  812 => 397,  805 => 392,  799 => 391,  797 => 390,  791 => 387,  783 => 382,  778 => 379,  772 => 378,  769 => 377,  767 => 376,  763 => 375,  756 => 373,  750 => 370,  746 => 368,  741 => 366,  733 => 362,  722 => 354,  718 => 353,  711 => 348,  705 => 346,  702 => 345,  698 => 344,  687 => 340,  681 => 337,  672 => 333,  666 => 329,  664 => 328,  658 => 324,  653 => 322,  651 => 321,  647 => 319,  643 => 318,  636 => 317,  630 => 314,  624 => 313,  618 => 310,  614 => 309,  608 => 308,  602 => 305,  596 => 302,  591 => 300,  584 => 298,  575 => 292,  569 => 289,  565 => 287,  563 => 286,  560 => 285,  556 => 284,  549 => 279,  546 => 278,  542 => 276,  540 => 275,  533 => 270,  528 => 268,  524 => 267,  516 => 263,  509 => 259,  502 => 255,  497 => 253,  493 => 251,  487 => 248,  481 => 246,  477 => 244,  468 => 241,  459 => 235,  455 => 233,  446 => 230,  439 => 225,  437 => 224,  433 => 222,  424 => 219,  415 => 213,  410 => 210,  401 => 207,  392 => 201,  388 => 199,  375 => 190,  366 => 183,  359 => 180,  350 => 174,  346 => 172,  339 => 169,  332 => 164,  330 => 163,  325 => 160,  319 => 157,  315 => 156,  311 => 154,  309 => 153,  300 => 147,  296 => 145,  290 => 143,  285 => 140,  280 => 138,  275 => 136,  265 => 133,  261 => 132,  254 => 127,  252 => 126,  248 => 124,  242 => 121,  232 => 119,  228 => 118,  219 => 112,  214 => 110,  207 => 105,  200 => 102,  191 => 96,  187 => 94,  180 => 91,  173 => 86,  171 => 85,  166 => 82,  159 => 79,  150 => 73,  146 => 71,  139 => 68,  130 => 62,  126 => 60,  119 => 57,  112 => 52,  110 => 51,  105 => 48,  98 => 45,  89 => 39,  85 => 37,  78 => 33,  71 => 28,  69 => 27,  63 => 23,  56 => 20,  47 => 14,  39 => 9,  31 => 5,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'IfeAloesBundle:Course:public.html.twig' %}*/
/* */
/* {% block content -%} */
/* */
/* <h2> {{ course.title }}</h2>*/
/* */
/* <div class='container-fluid'>	*/
/* 	*/
/* {% if '0' in param	 	%}		*/
/* 	  	   <legend>PRESENTATION</legend>*/
/* 	  			*/
/* 	   	   <fieldset>	*/
/*      */
/* 	       {% if course.program !="" %}               */
/* 				<div class='row'>	*/
/* 					<div class='col-sm-2 '> 	  	  */
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
/* 					<div class='col-sm-2 '> 	  	  */
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
/* 					<div class='col-sm-2 '> 	  	  */
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
/* 					<div class='col-sm-2 '> 	  	  */
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
/* 					<div class='col-sm-2 '> 	  	  */
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
/* 					<div class='col-sm-2 '> 	  	  */
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
/* 					<div class='col-sm-2 '> 	  	  */
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
/* 					<div class='col-sm-2 '> 	  	  */
/* 				    	Nombre de crédits :*/
/* 					</div> 	  		    	*/
/* 					<div class='col-sm-10'> 	  	  */
/* 				    	{{ course.credits }}*/
/* 					</div> 	  	*/
/* 				</div> 	 	  	       */
/* 	       {% endif %}	*/
/* */
/* 	       */
/* 	   	   </fieldset>*/
/* */
/* 	       {% if course.prerequisites|length >0 or course.concurrentCourses|length >0 %}		   */
/* 			   <fieldset> */
/* 			       {% if course.prerequisites|length >0 %}	*/
/* 						<div class='row'>	*/
/* 							<div class='col-sm-2 '> 	  	  */
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
/* 							<div class='col-sm-2 '> 	  	  */
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
/* 			   </fieldset>*/
/* 		   {% endif %}	*/
/* */
/* 		   */
/* 		   {% if course.isFaceToFace>0 or course.location!=null or course.timeSlot!=null or course.isRemote>0 or course.UrlPed !="" or course.UrlWeb !="" or course.UrlTwi !="" or course.UrlAut !=""  %} 	   */
/* 		   		<fieldset>*/
/* 		   {% endif %}		*/
/* 		   		       		   */
/* 				       {% if course.isFaceToFace>0 %} */
/* 							<div class='row'>	*/
/* 								<div class='col-sm-2 '> 	  	  */
/* 							    	En présentiel :*/
/* 								</div> 	  		    	*/
/* 								<div class='col-sm-10'> 	  	  */
/* 							    	{% if course.isFaceToFace==1 %}*/
/* 							    		Oui*/
/* 							    	{% else %}*/
/* 							    		Non*/
/* 							    	{% endif %}				    					    		*/
/* 								</div> 	  	*/
/* 							</div> 	 	       		  	       */
/* 				       {% endif %}	*/
/* 			*/
/* 			*/
/* 				       {% if course.location !="" %}*/
/* 							<div class='row'>	*/
/* 								<div class='col-sm-2 '> 	  	  */
/* 							    	Local :*/
/* 								</div> 	  		    	*/
/* 								<div class='col-sm-10'> 	  	  */
/* 							    	{{ course.location }}*/
/* 								</div> 	  	*/
/* 							</div> 		       	  	       */
/* 				       {% endif %}	*/
/* 			*/
/* 				       {% if course.timeSlot !="" %}	*/
/* 							<div class='row'>	*/
/* 								<div class='col-sm-2 '> 	  	  */
/* 							    	Horaire :*/
/* 								</div> 	  		    	*/
/* 								<div class='col-sm-10'> 	  	  */
/* 							    	{{ course.timeSlot }}*/
/* 								</div> 	  	*/
/* 							</div> 		       	       */
/* 				       {% endif %}	*/
/* 			*/
/* */
/* 				       */
/* 				       */
/* 	*/
/* */
/* 	       {% if course.UrlPed !="" or course.UrlWeb !="" or course.UrlTwi !="" or course.UrlAut !=""   %}	*/
/* */
/* 		   	*/
/* 				<div class='row'>	*/
/* 					<div class='col-sm-12 attribut'> 	  	  */
/* 				    	Urls :*/
/* 					</div> 	  		    	  	*/
/* 				</div> 		   	*/
/* 		   	*/
/* 		   {% endif %}			   */
/* 		   */
/* 	       {% if course.UrlPed !="" %}	*/
/* 				<div class='row'>	*/
/* 					<div class='col-sm-2 '> 	  	  */
/* 				    	Plateforme pédagogique */
/* 					</div> 	  		    	*/
/* 					<div class='col-sm-10'> 	  	  */
/* 				    	<a href="{{ course.UrlPed }}" target='cible'>{{ course.UrlPed }}</a>*/
/* 					</div> 	  	*/
/* 				</div> 			       	  	       */
/* 	       {% endif %}	*/
/* */
/* */
/* 	       {% if course.UrlWeb !="" %}	*/
/* 				<div class='row'>	*/
/* 					<div class='col-sm-2 '> 	  	  */
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
/* 					<div class='col-sm-2 '> 	  	  */
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
/* 					<div class='col-sm-2 '> 	  	  */
/* 				    	Autre :*/
/* 					</div> 	  		    	*/
/* 					<div class='col-sm-10'> 	  	  */
/* 				    	<a href="{{ course.UrlAut }}" target='cible'>{{ course.UrlAut }}</a>*/
/* 					</div> 	  	*/
/* 				</div> 	  	       */
/* 	       {% endif %}	*/
/* 	       */
/* 	       {% if course.UrlPed !="" or course.UrlWeb !="" or course.UrlTwi !="" or course.UrlAut !="" or course.UrlPed !="" or course.UrlWeb !="" or course.UrlTwi !="" or course.UrlAut !=""   %}		       */
/* 		   </fieldset>	*/
/* 	       {% endif %}	*/
/* */
/* <br/>	       */
/* {% endif %}	       */
/* 	       */
/* {% if '1' in param	 	%}       	 */
/*   */
/* 	    {% if course.publicationState !="" %}	       	     */
/* 		  	<legend>DESCRIPTION</legend>*/
/* 		  	  */
/* */
/* 	       {% if course.description !="" %}    */
/* 				<div class='row'>	    	*/
/* 					<div class='col-sm-12' > 	  	  */
/* 				    	<div  style="overflow:auto; height: 200px; width: 100%; padding: 15px; border: 1px solid #AAAAAA">*/
/* 				    		{{ course.description|raw  }}*/
/* 				    	</div>*/
/* 					</div> 	  	*/
/* 				</div>  	                  */
/* 	       {% endif %}	  */
/*  	    {% endif %}	     */
/* <br/>		    */
/* {% endif	 	%}   	    */
/*  */
/*  */
/*  		<div class='row col-md-12 '>	*/
/* */
/* 			{% if '2' in param	and  '3' in param	%}*/
/* 				<div class='col-sm-6 '>*/
/* 			{% endif %}*/
/* 			{% if '2' in param	 	%}*/
/* 					*/
/* 				<div class='col-sm-12 '>*/
/* 					<legend>OBJECTIFS D'APPRENTISSAGE</legend> */
/* 				</div>*/
/* 						*/
/* 		     	{% for oa in course.objectives %}*/
/* 		     	*/
/* 			     	{% if oa.weight>0 %}*/
/* 				     	<div class=' block col-sm-12'>*/
/* 				     		<div class='col-sm-10 '>*/
/* 				     			{{ oa.title }}*/
/* 				     		</div>*/
/* 				     		<div class='col-sm-2'>*/
/* 				     			{{ oa.weight * 100 }}%*/
/* 				     		</div>*/
/* 						</div>*/
/* 			     		*/
/* 			     		<div class='row '>*/
/* 			     				     	*/
/* 			     		{% for oas in oa.specificObjectives %}     	*/
/* 			     		*/
/* 			     			{% if oas.assessmentLinks.count >0 %}	*/
/* 			     				<div class='  col-sm-9 col-md-offset-1'>*/
/* 				     				- {{ oas.title}}  */
/* 				     			</div>*/
/* 			     				<div class='  col-sm-2 '>*/
/* 			     					{{ oas.weight * 100}}%*/
/* 			     				</div>*/
/* 				     			<!--*/
/* 				     			Poids {{ oas.weight }} / {{ oas.position }} <br/>*/
/* 				     			Evaluations  {{ oas.competenceLinks.count }}  <br/>*/
/* 				     			Competences {{ oas.assessmentLinks.count }}  <br/>*/
/* 				     			-->*/
/* 				     			{% endif %}*/
/* 			     		{% endfor %}*/
/* 			     		*/
/* 			     		</div>*/
/* 			   */
/* 			     	{% endif %}     		*/
/* 		     	{% endfor %}  		*/
/* 			{% endif 	%}		*/
/* */
/* 			{% if '2' in param	and  '3' in param	%}*/
/* 				</div>				*/
/* 				<div class='col-sm-6 '>	*/
/* 			{% endif %}		*/
/* */
/* 			*/
/* 					*/
/* 			{% if '3' in param	 	%}*/
/* 				<div class='col-sm-12 '>*/
/* 					<legend>REFERENTIEL DE COMPETENCES</legend> */
/* 				</div>*/
/* 				*/
/* 				{% for cp in comp%}   */
/* */
/* 				     	<div class=' block col-sm-12'>*/
/* 				     		<div class='col-sm-10 '>*/
/* 				     			{{ cp.title }}*/
/* 				     		</div>*/
/* 				     		<div class='col-sm-2'>*/
/* 				     			 {{ cp.weight * 100 }}%*/
/* 				     		</div>*/
/* 						</div>*/
/* */
/* 	     		{% endfor %}	*/
/* 			{% endif	 	%}	   */
/* 			{% if '2' in param	and  '3' in param	%}  			*/
/* 			</div>*/
/* 			{% endif %}			 */
/* 		</div>*/
/* 		*/
/* 		<br/>*/
/*      	*/
/* {% if '4' in param	 	%}     	*/
/* 	    {% if course.Pedagogy !="" %}   */
/* 	            	*/
/* 	  	<legend>METHODES PEDAGOGIQUES</legend>*/
/* 	  			 */
/* 	   	<fieldset>	*/
/* */
/* 				<div class='row'>		    	*/
/* 					<div class='col-sm-12'> 	  	  */
/* 				    	{{ course.Pedagogy|raw }}*/
/* 					</div> 	  	*/
/* 				</div>               */
/* 	   	</fieldset>*/
/* 	    {% endif %}	 		        		       */
/* 		<br/>*/
/* {% endif 	%}  		*/
/* */
/* {% if '5' in param	 	%}        	*/
/* 		<legend>CALENDRIER</legend> 	  */
/* 		*/
/*      	{% for se in topics %} */
/*      	*/
/* 		{% if se.endDate != null 						  %}		*/
/* 		{%   set endSequence = se.endDate|date('d-m-Y')   %}*/
/* 		{% else 										  %}*/
/* 		{%   set endSequence = se.startDate|date('d-m-Y') %}					*/
/* 		{% endif 									      %}	  */
/* */
/* */
/* 		{%   set cptAR = 0 %}			*/
/* 		     	*/
/*      	<fieldset>*/
/* 				<div class='row block'>	*/
/* 					<div class='col-sm-3 '>*/
/* 						{{se.startDate|date('d-m-Y') }}  	*/
/* 						*/
/* 						<!--*/
/* 						{% if se.endDate != null %}*/
/* 						 au {{se.endDate|date('d-m-Y') }}  					*/
/* 						{% endif %} */
/* 						-->*/
/* 												*/
/* 					</div>     	*/
/* 					<div class='col-sm-7 '>*/
/* 						<h4>{{ se.title }}</h4> 	 */
/* 					</div>     														*/
/*   					<div class='col-sm-2 '>*/
/* 					<!--	{{ se.weight * 100 }}% -->*/
/* 					</div>   */
/* 				</div>		*/
/* 				<div class='row '>	*/
/* 					<div class='col-sm-6 '>*/
/* 						{{se.description|raw}}	*/
/* 					</div>*/
/* 					*/
/* 					<div class='col-sm-6 '>				*/
/* 						*/
/* 	       				{% for sea in se.assessments %}   	       				*/
/* 	       					{% if ( sea.deadline|date('Ymd')   >=   se.startDate|date('Ymd')) and ( sea.deadline|date('Ymd')   <=   se.endDate|date('Ymd'))  %}*/
/* 															 */
/* 							{%  else %}    			*/
/* 								{% if cptAR==0 %}		*/
/* 									<div class='col-sm-12 '>*/
/* 										<b><i>Travail à réaliser : </i></b>*/
/* 									</div>								*/
/* 								{% endif %}			*/
/* 								<div class='col-sm-10 '>*/
/* 									{{ sea.title }} */
/* 								</div>        				*/
/* 			   					<div class='col-sm-2 '> */
/* 							    </div> */
/* 							    */
/* 							    {%   set cptAR = cptAR + 1 %}		  */
/* 							{%  endif %}          								     		*/
/* 		 */
/* 	       				{% endfor %}  */
/* 						*/
/* 						{% set find=0 %}*/
/* 						*/
/* 	       				{% for ass in assessment %}  */
/* */
/* 						  {% if (  ass.deadline !=null )  %}*/
/* */
/* 							{% if (  ass.deadline|date('Ymd')  >= se.startDate|date('Ymd')  ) and ( ass.deadline|date('Ymd') <=  se.endDate|date('Ymd') )  %}*/
/*  	*/
/*  								{% if find==0 %}*/
/* 			 						<div class='col-sm-12 '>*/
/* 										<br/><b><i>Travail à rendre : </i></b>*/
/* 									</div>*/
/*  								{% endif %} */
/*  */
/* 								<div class='col-sm-10 '> */
/* 	*/
/* 									{% if ass.deadline !=null %}*/
/* 									 <i>{{ass.deadline|date('d-m-Y')}}</i> : */
/* 									{% endif %}*/
/* 									*/
/* 									{{ ass.title }}*/
/* 									*/
/* 	*/
/* 								</div>        				*/
/* 			   					<div class='col-sm-2 '>*/
/* 									{% if ass.weight!=0 %}*/
/* 										{{ ass.weight * 100}}%*/
/* 									{% endif %}*/
/* 								</div>         	 							     		*/
/* 	*/
/* 								{% set find=1 %}*/
/* 	*/
/* 							{% endif %}	*/
/* 						  {% endif %}		*/
/* 	       				{% endfor %}  						*/
/* */
/* 					</div>					*/
/* */
/*  */
/*  */
/* 					*/
/* 				</div>	   	*/
/* */
/* */
/*        	</fieldset>	     		     	*/
/*      	{% endfor%}		*/
/*      	<br/>*/
/* {% endif	 	%}  */
/*    	*/
/* {% if '3' in param	 	%}        	*/
/* */
/* 	*/
/*      	*/
/* {% endif	 	%}     	*/
/*    	*/
/* {% if '6' in param	 	%}        	*/
/* */
/*      	*/
/* 		<legend>EVALUATIONS</legend> 	 */
/* */
/*      	<fieldset>		*/
/*      	  {% for se in topics %} */
/* 		    {% if se.weight!=0 %}*/
/* 							*/
/* 				<div class='row '>	*/
/* 	       				{% for sea in se.assessments %}   */
/* 	       				*/
/* 							{% if sea.weight!=0 %}*/
/* 							<div class='col-sm-12'>							*/
/* 								<div class='col-sm-5'>*/
/* 									{{ sea.title }} */
/* 								</div>       				*/
/* 			   					<div class='col-sm-5'>*/
/* 			   						{% if sea.deadline is defined and sea.deadline !=null%}*/
/* 									Date de rendu : {{ sea.deadline|date('d/m/Y') }}*/
/* 									{% endif %}&nbsp;*/
/* 								</div>   */
/* 			   					<div class='col-sm-2'>		   		*/
/* 									{{ sea.weight * 100}}% 		   					*/
/* 								</div>         								     		*/
/* 							</div> */
/* 					     	{% endif %} */
/* 	       				{% endfor %}  	 				*/
/* 				</div>	   	*/
/* */
/* */
/*    		    {% endif %}   	*/
/*      	  {% endfor%}		*/
/*        	</fieldset>	  */
/*      	<br/>     	*/
/*      	*/
/* {% endif	 	%}  */
/*    	*/
/* {% if '7' in param	 	%}    	*/
/* 	    {% if course.resources !="" %}   	            	*/
/* 		  	<legend>RESSOURCES</legend>  			*/
/* 		   	<fieldset>	*/
/* 	  */
/* 	    			    */
/* 	            */
/* 					<div class='row'>		    	*/
/* 						<div class='col-sm-12'> 	  	  */
/* 					    	{{ course.resources|raw }}*/
/* 						</div> 	  	*/
/* 					</div>  */
/* 			</fieldset>		             */
/* 	    {% endif %}	     	*/
/*      	<br/>*/
/* {% endif	 	%}       	*/
/* */
/* {% if '8' in param	 	%}       	*/
/* 	    {% if course.rules !="" %}   */
/* 	            	*/
/* 	  	<legend>REGLEMENTS</legend>*/
/* 	  			*/
/* 	   	<fieldset>	*/
/* */
/* 				<div class='row'>		    	*/
/* 					<div class='col-sm-12'> 	  	  */
/* 				    	{{ course.rules|raw }}*/
/* 					</div> 	  	*/
/* 				</div>               */
/* 	    {% endif %}	 		       		       */
/* {% endif	 	%}  */
/* 	*/
/* </div>*/
/*         */
/* {% endblock %}*/
/* */
/* */
