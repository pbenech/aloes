<?php

/* IfeAloesBundle:Langue:show.html.twig */
class __TwigTemplate_06835e76441f7a6233a2e2b015ba6bd3c581a317a2aa0d30770eaa2fd83f12e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("IfeAloesBundle:Aloes:layout-outils.html.twig", "IfeAloesBundle:Langue:show.html.twig", 1);
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

    // line 4
    public function block_header_nav($context, array $blocks = array())
    {
        // line 5
        echo "    <div class=\"btn-group btn-breadcrumb\">   
        <a  class=\"btn btn-default\"href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("admin_outil");
        echo "\"> Réglages</a></li>
        <a  class=\"btn btn-default\" href=\"\">Langues</a>
    </div> 
";
    }

    // line 11
    public function block_content_10($context, array $blocks = array())
    {
        // line 14
        echo "<div class='title-two1a col-md-9 col-sm-9'> 
\t\t\tConsulter langue
\t\t</div>
    \t<div class='title-two1b  col-md-3 col-sm-3' style='text-align:right'>
\t        <a class=\"btn1 btn-color4\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("langues_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">
\t            <span class=\"glyphicon glyphicon-edit\"></span>  Modifier la langue
\t        </a>

    \t</div> \t\t


    \t<div class='col-sm-12 block3'> 
\t
\t\t\t\t\t<div class='col-sm-2 attribut'> \t  \t  
\t\t\t\t    \tLibellé
\t\t\t\t\t</div> \t  \t\t    \t
\t\t\t\t\t<div class='col-sm-10' > \t  \t  
\t\t\t\t    \t<div>
\t\t\t\t    \t\t";
        // line 32
        echo $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "title", array());
        echo "\t\t\t\t    \t\t\t\t\t\t    \t\t
\t\t\t\t    \t</div>
\t\t\t\t\t</div> \t  \t
\t

\t\t\t";
        // line 37
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 38
            echo "\t\t    \t<div class='col-sm-12'> 
\t\t    \t\t<hr/>
\t\t    \t</div>
\t\t    \t<div class='col-sm-12 '> 
\t\t\t\t\t<a  class=\"btn  btn-button-cancel \"  href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("langues", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "page" => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "sort" => (isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")), "direction" => (isset($context["direction"]) ? $context["direction"] : $this->getContext($context, "direction")))), "html", null, true);
            echo "\">
\t\t\t\t\t\t<span class=\"glyphicon glyphicon-arrow-left\"></span>   Retour à la liste des langues
\t\t\t\t\t</a>  
\t\t\t\t</div>
\t\t    \t<div class='col-sm-12'> 
\t\t    \t</div>
\t\t\t";
        }
        // line 48
        echo "\t


 \t\t</div>  
\t



";
    }

    public function getTemplateName()
    {
        return "IfeAloesBundle:Langue:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 48,  85 => 42,  79 => 38,  77 => 37,  69 => 32,  52 => 18,  46 => 14,  43 => 11,  35 => 6,  32 => 5,  29 => 4,  11 => 1,);
    }
}
/* {% extends 'IfeAloesBundle:Aloes:layout-outils.html.twig' %}*/
/* */
/* */
/* {% block header_nav %}*/
/*     <div class="btn-group btn-breadcrumb">   */
/*         <a  class="btn btn-default"href="{{path('admin_outil')}}"> Réglages</a></li>*/
/*         <a  class="btn btn-default" href="">Langues</a>*/
/*     </div> */
/* {% endblock %}*/
/* */
/* {% block content_10 -%}*/
/* */
/* 	*/
/*     	<div class='title-two1a col-md-9 col-sm-9'> */
/* 			Consulter langue*/
/* 		</div>*/
/*     	<div class='title-two1b  col-md-3 col-sm-3' style='text-align:right'>*/
/* 	        <a class="btn1 btn-color4" href="{{ path('langues_edit', { 'id': entity.id}) }}">*/
/* 	            <span class="glyphicon glyphicon-edit"></span>  Modifier la langue*/
/* 	        </a>*/
/* */
/*     	</div> 		*/
/* */
/* */
/*     	<div class='col-sm-12 block3'> */
/* 	*/
/* 					<div class='col-sm-2 attribut'> 	  	  */
/* 				    	Libellé*/
/* 					</div> 	  		    	*/
/* 					<div class='col-sm-10' > 	  	  */
/* 				    	<div>*/
/* 				    		{{ entity.title|raw  }}				    						    		*/
/* 				    	</div>*/
/* 					</div> 	  	*/
/* 	*/
/* */
/* 			{% if (  is_granted("ROLE_ADMIN") ) %}*/
/* 		    	<div class='col-sm-12'> */
/* 		    		<hr/>*/
/* 		    	</div>*/
/* 		    	<div class='col-sm-12 '> */
/* 					<a  class="btn  btn-button-cancel "  href="{{ path('langues', { 'id': entity.id, 'page': page, 'sort': sort, 'direction': direction  }) }}">*/
/* 						<span class="glyphicon glyphicon-arrow-left"></span>   Retour à la liste des langues*/
/* 					</a>  */
/* 				</div>*/
/* 		    	<div class='col-sm-12'> */
/* 		    	</div>*/
/* 			{% endif %}	*/
/* */
/* */
/*  		</div>  */
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
