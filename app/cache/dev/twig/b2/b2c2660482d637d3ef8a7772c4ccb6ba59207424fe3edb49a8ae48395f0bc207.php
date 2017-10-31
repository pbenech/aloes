<?php

/* IfeAloesBundle:Admin:parameter-show.html.twig */
class __TwigTemplate_6768c4b4a2f70c0676623e2f1d8aa4bab67fe100455315bf6e6e5469598d3931 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("IfeAloesBundle:Aloes:layout-outils.html.twig", "IfeAloesBundle:Admin:parameter-show.html.twig", 1);
        $this->blocks = array(
            'header_nav' => array($this, 'block_header_nav'),
            'content_10' => array($this, 'block_content_10'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "IfeAloesBundle:Aloes:layout-outils.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_header_nav($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"btn-group btn-breadcrumb\">   
        <a  class=\"btn btn-default\" href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("admin_outil");
        echo "\"> Réglages</a></li>
        <a  class=\"btn btn-default\" href=\"\">Paramètres</a>
    </div>     
";
    }

    // line 10
    public function block_content_10($context, array $blocks = array())
    {
        // line 12
        echo "<div class='title-two1a col-md-9 col-sm-9'> 
\t\t\tConsulter paramètres
\t\t</div>
    \t<div class='title-two1b  col-md-3 col-sm-3' style='text-align:right'>
\t\t\t";
        // line 16
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 17
            echo "\t\t\t        <a class=\"btn1 btn-color4\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_parameters_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
            echo "\">
\t\t\t            <span class=\"glyphicon glyphicon-edit\"></span> Modifier les paramètres
\t\t\t        </a>
\t\t\t";
        }
        // line 20
        echo "\t
    \t</div> \t\t



    \t<div class='col-sm-12 block3'>         

\t\t\t\t\t<div class='col-sm-2 attribut'> \t  \t  
\t\t\t\t    \tAbout
\t\t\t\t\t</div> \t  \t\t    \t
\t\t\t\t\t<div class='col-sm-10' > \t  \t  
\t\t\t\t    \t<div  style=\"overflow:auto; height: 400px; width: 100%; padding: 15px; border: 1px solid #AAAAAA\">
\t\t\t\t    \t\t";
        // line 32
        echo $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "about", array());
        echo "\t\t\t\t    \t\t\t\t\t\t    \t\t
\t\t\t\t    \t</div>
\t\t\t\t\t</div> \t  \t
\t


\t\t\t\t\t<div class='col-sm-2 attribut'> \t  \t  
\t\t\t\t    \tCredits
\t\t\t\t\t</div> \t  \t\t    \t
\t\t\t\t\t<div class='col-sm-10' > \t  \t  
\t\t\t\t    \t<div  style=\"overflow:auto; height: 400px; width: 100%; padding: 15px; border: 1px solid #AAAAAA\">
\t\t\t\t    \t\t";
        // line 43
        echo $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "credits", array());
        echo "
\t\t\t\t    \t</div>
\t\t\t\t\t</div> \t  \t
 
 \t\t</div> 
\t



";
    }

    public function getTemplateName()
    {
        return "IfeAloesBundle:Admin:parameter-show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 43,  76 => 32,  62 => 20,  54 => 17,  52 => 16,  46 => 12,  43 => 10,  35 => 5,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'IfeAloesBundle:Aloes:layout-outils.html.twig' %}*/
/* */
/* {% block header_nav %}*/
/*     <div class="btn-group btn-breadcrumb">   */
/*         <a  class="btn btn-default" href="{{path('admin_outil')}}"> Réglages</a></li>*/
/*         <a  class="btn btn-default" href="">Paramètres</a>*/
/*     </div>     */
/* {% endblock %} */
/* */
/* {% block content_10 -%}*/
/*    	*/
/*     	<div class='title-two1a col-md-9 col-sm-9'> */
/* 			Consulter paramètres*/
/* 		</div>*/
/*     	<div class='title-two1b  col-md-3 col-sm-3' style='text-align:right'>*/
/* 			{% if (  is_granted("ROLE_ADMIN") ) %}*/
/* 			        <a class="btn1 btn-color4" href="{{ path('admin_parameters_edit', { 'id': entity.id}) }}">*/
/* 			            <span class="glyphicon glyphicon-edit"></span> Modifier les paramètres*/
/* 			        </a>*/
/* 			{% endif %}	*/
/*     	</div> 		*/
/* */
/* */
/* */
/*     	<div class='col-sm-12 block3'>         */
/* */
/* 					<div class='col-sm-2 attribut'> 	  	  */
/* 				    	About*/
/* 					</div> 	  		    	*/
/* 					<div class='col-sm-10' > 	  	  */
/* 				    	<div  style="overflow:auto; height: 400px; width: 100%; padding: 15px; border: 1px solid #AAAAAA">*/
/* 				    		{{ entity.about|raw  }}				    						    		*/
/* 				    	</div>*/
/* 					</div> 	  	*/
/* 	*/
/* */
/* */
/* 					<div class='col-sm-2 attribut'> 	  	  */
/* 				    	Credits*/
/* 					</div> 	  		    	*/
/* 					<div class='col-sm-10' > 	  	  */
/* 				    	<div  style="overflow:auto; height: 400px; width: 100%; padding: 15px; border: 1px solid #AAAAAA">*/
/* 				    		{{ entity.credits|raw  }}*/
/* 				    	</div>*/
/* 					</div> 	  	*/
/*  */
/*  		</div> */
/* 	*/
/* */
/* */
/* */
/* {% endblock %} */
/* */
/* */
/*     */
/* */
/* */
