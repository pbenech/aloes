<?php

/* IfeAloesBundle:Level:show.html.twig */
class __TwigTemplate_ebdff2e69343253392e90ef53bfd6288b71af74c706cc50933b4f9066267b88e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("IfeAloesBundle:Aloes:layout-outils.html.twig", "IfeAloesBundle:Level:show.html.twig", 1);
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

    // line 5
    public function block_header_nav($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"btn-group btn-breadcrumb\">   
        <a  class=\"btn btn-default\"href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("admin_outil");
        echo "\"> Réglages</a></li>
        <a  class=\"btn btn-default\" href=\"\">Niveaux</a>
    </div>  
";
    }

    // line 13
    public function block_content_10($context, array $blocks = array())
    {
        // line 15
        echo "<div class='title-two1a col-md-9 col-sm-9'> 
\t\t\tConsulter niveau
\t</div>
    <div class='title-two1b  col-md-3 col-sm-3' style='text-align:right'>
\t        <a class=\"btn1 btn-color4\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("levels_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">
\t            <span class=\"glyphicon glyphicon-edit\"></span> Modifier le niveau
\t        </a>
    </div> \t\t

       
    <div class='col-sm-12 block3'>        
\t
\t\t\t\t\t<div class='col-sm-2 attribut'> \t  \t  
\t\t\t\t    \tSigle
\t\t\t\t\t</div> \t  \t\t    \t
\t\t\t\t\t<div class='col-sm-10' > \t  \t  
\t\t\t\t    \t<div>
\t\t\t\t    \t\t";
        // line 32
        echo $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "sigle", array());
        echo "\t\t\t\t    \t\t\t\t\t\t    \t\t
\t\t\t\t    \t</div>
\t\t\t\t\t</div> \t


\t\t\t\t\t<div class='col-sm-2 attribut'> \t  \t  
\t\t\t\t    \tLibellé
\t\t\t\t\t</div> \t  \t\t    \t
\t\t\t\t\t<div class='col-sm-10' > \t  \t  
\t\t\t\t    \t<div>
\t\t\t\t    \t\t";
        // line 42
        echo $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "title", array());
        echo "\t\t\t\t    \t\t\t\t\t\t    \t\t
\t\t\t\t    \t</div>
\t\t\t\t\t</div> \t  \t
\t
\t";
        // line 46
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 47
            echo "\t    <div class='col-sm-12'> 
\t    \t<hr/>
\t    </div>
\t    <div class='col-sm-12'> 
\t\t\t<a  class=\"btn  btn-button-cancel \"  href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("levels", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "page" => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "sort" => (isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")), "direction" => (isset($context["direction"]) ? $context["direction"] : $this->getContext($context, "direction")))), "html", null, true);
            echo "\">
\t\t\t\t\t<span class=\"glyphicon glyphicon-arrow-left\"></span>   Retour à la liste des niveaux
\t\t\t</a> 
\t\t</div>      
\t    <div class='col-sm-12'> 

\t    </div>
\t";
        }
        // line 58
        echo "\t

\t</div>
   
\t



";
    }

    public function getTemplateName()
    {
        return "IfeAloesBundle:Level:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 58,  96 => 51,  90 => 47,  88 => 46,  81 => 42,  68 => 32,  52 => 19,  46 => 15,  43 => 13,  35 => 7,  32 => 6,  29 => 5,  11 => 1,);
    }
}
/* {% extends 'IfeAloesBundle:Aloes:layout-outils.html.twig' %}*/
/* */
/*  */
/*  */
/* {% block header_nav %}*/
/*     <div class="btn-group btn-breadcrumb">   */
/*         <a  class="btn btn-default"href="{{path('admin_outil')}}"> Réglages</a></li>*/
/*         <a  class="btn btn-default" href="">Niveaux</a>*/
/*     </div>  */
/* {% endblock %}*/
/*  */
/* */
/* {% block content_10 -%}*/
/*  	*/
/*     <div class='title-two1a col-md-9 col-sm-9'> */
/* 			Consulter niveau*/
/* 	</div>*/
/*     <div class='title-two1b  col-md-3 col-sm-3' style='text-align:right'>*/
/* 	        <a class="btn1 btn-color4" href="{{ path('levels_edit', { 'id': entity.id}) }}">*/
/* 	            <span class="glyphicon glyphicon-edit"></span> Modifier le niveau*/
/* 	        </a>*/
/*     </div> 		*/
/* */
/*        */
/*     <div class='col-sm-12 block3'>        */
/* 	*/
/* 					<div class='col-sm-2 attribut'> 	  	  */
/* 				    	Sigle*/
/* 					</div> 	  		    	*/
/* 					<div class='col-sm-10' > 	  	  */
/* 				    	<div>*/
/* 				    		{{ entity.sigle|raw  }}				    						    		*/
/* 				    	</div>*/
/* 					</div> 	*/
/* */
/* */
/* 					<div class='col-sm-2 attribut'> 	  	  */
/* 				    	Libellé*/
/* 					</div> 	  		    	*/
/* 					<div class='col-sm-10' > 	  	  */
/* 				    	<div>*/
/* 				    		{{ entity.title|raw  }}				    						    		*/
/* 				    	</div>*/
/* 					</div> 	  	*/
/* 	*/
/* 	{% if (  is_granted("ROLE_ADMIN") ) %}*/
/* 	    <div class='col-sm-12'> */
/* 	    	<hr/>*/
/* 	    </div>*/
/* 	    <div class='col-sm-12'> */
/* 			<a  class="btn  btn-button-cancel "  href="{{ path('levels', { 'id': entity.id, 'page': page, 'sort': sort, 'direction': direction  }) }}">*/
/* 					<span class="glyphicon glyphicon-arrow-left"></span>   Retour à la liste des niveaux*/
/* 			</a> */
/* 		</div>      */
/* 	    <div class='col-sm-12'> */
/* */
/* 	    </div>*/
/* 	{% endif %}	*/
/* */
/* 	</div>*/
/*    */
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
