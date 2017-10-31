<?php

/* IfeAloesBundle:Topic2:TO_XX_R.html.twig */
class __TwigTemplate_73fbde551b3a6701cf94a66d1cf0cb44143a43d774bf5616e90c35a74b5e78db extends Twig_Template
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
        echo "\t\t 

\t\t\t  <div  class=\"col-sm-2 label2\" >  
\t\t\t\t  \tDate(s) 
\t\t      </div>
\t\t      <div  class=\"col-sm-10 \" >
\t\t      \t\t";
        // line 7
        $context["deb"] = twig_date_format_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "startDate", array()), "d/m/Y");
        // line 8
        echo "\t\t      \t\t";
        $context["fin"] = twig_date_format_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "endDate", array()), "d/m/Y");
        // line 9
        echo "
\t\t      \t\t";
        // line 10
        if (((isset($context["deb"]) ? $context["deb"] : $this->getContext($context, "deb")) != (isset($context["fin"]) ? $context["fin"] : $this->getContext($context, "fin")))) {
            echo "\t\t      \t\t\t\t        
\t\t\t\t  \tDu ";
            // line 11
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "startDate", array()), "d/m/Y"), "html", null, true);
            echo " <i>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "startDate", array()), "G"), "html", null, true);
            echo "H";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "startDate", array()), "i"), "html", null, true);
            echo "</i> 
\t\t\t\t  \tau ";
            // line 12
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "endDate", array()), "d/m/Y"), "html", null, true);
            echo "   <i>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "endDate", array()), "G"), "html", null, true);
            echo "H";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "endDate", array()), "i"), "html", null, true);
            echo "</i>
\t\t\t\t  \t";
        } else {
            // line 14
            echo "\t\t\t\t  \t\t";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "startDate", array()), "d/m/Y"), "html", null, true);
            echo "  de ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "startDate", array()), "G"), "html", null, true);
            echo "H";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "startDate", array()), "i"), "html", null, true);
            echo " à ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "endDate", array()), "G"), "html", null, true);
            echo "H";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "endDate", array()), "i"), "html", null, true);
            echo "
\t\t\t\t  \t";
        }
        // line 16
        echo "\t\t\t  </div>\t   
\t\t\t  
\t\t  \t  ";
        // line 18
        if (($this->getAttribute((isset($context["parent"]) ? $context["parent"] : null), "place", array(), "any", true, true) &&  !(null === $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "place", array())))) {
            echo "\t\t    
\t\t\t\t  <div  class=\"col-sm-2 label2\" >  
\t\t\t\t  \tLieu\t\t\t  
\t\t\t\t  </div>
\t\t\t\t  <div  class=\"col-sm-10\">  
\t\t\t\t\t\t";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "place", array()), "html", null, true);
            echo "&nbsp;
\t\t\t\t  </div>\t 
\t\t  \t  ";
        }
        // line 26
        echo "\t\t  
\t\t  \t  ";
        // line 27
        if (($this->getAttribute((isset($context["parent"]) ? $context["parent"] : null), "isFaceToFace", array(), "any", true, true) &&  !(null === $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "isFaceToFace", array())))) {
            echo "\t\t    
\t\t\t\t  <div  class=\"col-sm-2 label2\" >  
\t\t\t\t  \t";
            // line 29
            if (($this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "isFaceToFace", array()) == 1)) {
                echo "\t
\t\t\t\t  \t\tSéquence en présentiel
\t\t\t\t  \t";
            } else {
                // line 31
                echo "\t
\t\t\t\t  \t\tSéquence à distance
\t\t\t\t  \t";
            }
            // line 33
            echo "\t\t\t\t  
\t\t\t\t  </div>
\t\t\t\t  <div  class=\"col-sm-10 \" >  
\t\t\t\t\t\t&nbsp;
\t\t\t\t  </div>\t 
\t\t  \t  ";
        }
        // line 38
        echo "\t

\t\t  \t  ";
        // line 40
        if (($this->getAttribute((isset($context["parent"]) ? $context["parent"] : null), "description", array(), "any", true, true) &&  !(null === $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "description", array())))) {
            echo "\t
\t\t\t\t  <div  class=\"col-sm-2 label2\" >  
\t\t\t\t  \tDescription 
\t\t\t\t  </div>
\t\t\t\t  <div class=\"col-sm-10 \" > 
\t\t\t\t\t    <div  style=\"overflow:auto; height: 200px; width: 100%; padding: 15px; border: 1px solid #AAAAAA\">
\t\t\t\t\t    \t\t";
            // line 46
            echo $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "description", array());
            echo "
\t\t\t\t\t    </div>
\t\t\t\t\t    <br/>
\t\t\t\t  </div>\t
\t\t  \t  ";
        }
        // line 50
        echo "\t

\t\t  \t  
";
    }

    public function getTemplateName()
    {
        return "IfeAloesBundle:Topic2:TO_XX_R.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 50,  128 => 46,  119 => 40,  115 => 38,  107 => 33,  102 => 31,  96 => 29,  91 => 27,  88 => 26,  82 => 23,  74 => 18,  70 => 16,  56 => 14,  47 => 12,  39 => 11,  35 => 10,  32 => 9,  29 => 8,  27 => 7,  19 => 1,);
    }
}
/* 		 */
/* */
/* 			  <div  class="col-sm-2 label2" >  */
/* 				  	Date(s) */
/* 		      </div>*/
/* 		      <div  class="col-sm-10 " >*/
/* 		      		{% set deb = parent.startDate|date("d/m/Y")  %}*/
/* 		      		{% set fin = parent.endDate|date("d/m/Y")    %}*/
/* */
/* 		      		{% if deb!=fin    %}		      				        */
/* 				  	Du {{parent.startDate|date("d/m/Y")}} <i>{{parent.startDate|date("G")}}H{{parent.startDate|date("i")}}</i> */
/* 				  	au {{parent.endDate|date("d/m/Y")}}   <i>{{parent.endDate|date("G")}}H{{parent.endDate|date("i")}}</i>*/
/* 				  	{% else %}*/
/* 				  		{{parent.startDate|date("d/m/Y")}}  de {{parent.startDate|date("G")}}H{{parent.startDate|date("i")}} à {{parent.endDate|date("G")}}H{{parent.endDate|date("i")}}*/
/* 				  	{% endif %}*/
/* 			  </div>	   */
/* 			  */
/* 		  	  {% if parent.place is defined and parent.place is not null %}		    */
/* 				  <div  class="col-sm-2 label2" >  */
/* 				  	Lieu			  */
/* 				  </div>*/
/* 				  <div  class="col-sm-10">  */
/* 						{{ parent.place}}&nbsp;*/
/* 				  </div>	 */
/* 		  	  {% endif %}*/
/* 		  */
/* 		  	  {% if parent.isFaceToFace is defined and parent.isFaceToFace is not null %}		    */
/* 				  <div  class="col-sm-2 label2" >  */
/* 				  	{% if parent.isFaceToFace==1 %}	*/
/* 				  		Séquence en présentiel*/
/* 				  	{% else %}	*/
/* 				  		Séquence à distance*/
/* 				  	{% endif%}				  */
/* 				  </div>*/
/* 				  <div  class="col-sm-10 " >  */
/* 						&nbsp;*/
/* 				  </div>	 */
/* 		  	  {% endif %}	*/
/* */
/* 		  	  {% if parent.description is defined and parent.description is not null %}	*/
/* 				  <div  class="col-sm-2 label2" >  */
/* 				  	Description */
/* 				  </div>*/
/* 				  <div class="col-sm-10 " > */
/* 					    <div  style="overflow:auto; height: 200px; width: 100%; padding: 15px; border: 1px solid #AAAAAA">*/
/* 					    		{{ parent.description|raw  }}*/
/* 					    </div>*/
/* 					    <br/>*/
/* 				  </div>	*/
/* 		  	  {% endif %}	*/
/* */
/* 		  	  */
/* */
