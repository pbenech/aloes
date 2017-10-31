<?php

/* IfeAloesBundle:Semestre:show.html.twig */
class __TwigTemplate_4db53735a947b1535c3c8f7ef24cc1d340cb54918275c102b3db5e11c7a8c04f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("IfeAloesBundle:Aloes:layout-outils.html.twig", "IfeAloesBundle:Semestre:show.html.twig", 1);
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
        <a  class=\"btn btn-default\" href=\"\">Semestres</a>
    </div> 
";
    }

    // line 11
    public function block_content_10($context, array $blocks = array())
    {
        // line 13
        echo "<div class='title-two1a col-md-9 col-sm-9'> 
\t\t\tConsulter semestre
\t\t</div>
    \t<div class='title-two1b col-md-3 col-sm-3' style='text-align:right'>
\t        <a class='btn1 btn-color4' href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("semestres_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">
\t            <span class=\"glyphicon glyphicon-edit\"></span> Modifier 
\t        </a>
    \t</div> \t\t


\t<div class='col-sm-12 block3'>
\t\t\t\t<div class='row'>\t
\t\t\t\t\t<div class='col-sm-2 attribut'> \t  \t  
\t\t\t\t    \tLibellé
\t\t\t\t\t</div> \t  \t\t    \t
\t\t\t\t\t<div class='col-sm-10' > \t  \t  
\t\t\t\t    \t<div>
\t\t\t\t    \t\t";
        // line 30
        echo $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "title", array());
        echo "\t\t\t\t    \t\t\t\t\t\t    \t\t
\t\t\t\t    \t</div>
\t\t\t\t\t</div> \t  \t
\t\t\t\t</div>  \t

\t
\t";
        // line 36
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 37
            echo "\t\t<div class='col-sm-12'>
\t\t\t<hr/>
\t\t</div>
\t\t<div class='col-sm-12'>
\t\t\t<a  class=\"btn  btn-button-cancel \"  href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("semestres", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "page" => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "sort" => (isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")), "direction" => (isset($context["direction"]) ? $context["direction"] : $this->getContext($context, "direction")))), "html", null, true);
            echo "\">
\t\t\t\t\t<span class=\"glyphicon glyphicon-arrow-left\"></span>   Retour à la liste 
\t\t\t</a> 
\t\t</div>      
\t\t<div class='col-sm-12'>
\t\t</div>
\t";
        }
        // line 47
        echo "\t

\t</div>



";
    }

    public function getTemplateName()
    {
        return "IfeAloesBundle:Semestre:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 47,  85 => 41,  79 => 37,  77 => 36,  68 => 30,  52 => 17,  46 => 13,  43 => 11,  35 => 6,  32 => 5,  29 => 4,  11 => 1,);
    }
}
/* {% extends 'IfeAloesBundle:Aloes:layout-outils.html.twig' %}*/
/* */
/* */
/* {% block header_nav %}*/
/*     <div class="btn-group btn-breadcrumb">   */
/*         <a  class="btn btn-default"href="{{path('admin_outil')}}"> Réglages</a></li>*/
/*         <a  class="btn btn-default" href="">Semestres</a>*/
/*     </div> */
/* {% endblock %}*/
/* */
/* {% block content_10 -%}*/
/* 	*/
/*     	<div class='title-two1a col-md-9 col-sm-9'> */
/* 			Consulter semestre*/
/* 		</div>*/
/*     	<div class='title-two1b col-md-3 col-sm-3' style='text-align:right'>*/
/* 	        <a class='btn1 btn-color4' href="{{ path('semestres_edit', { 'id': entity.id}) }}">*/
/* 	            <span class="glyphicon glyphicon-edit"></span> Modifier */
/* 	        </a>*/
/*     	</div> 		*/
/* */
/* */
/* 	<div class='col-sm-12 block3'>*/
/* 				<div class='row'>	*/
/* 					<div class='col-sm-2 attribut'> 	  	  */
/* 				    	Libellé*/
/* 					</div> 	  		    	*/
/* 					<div class='col-sm-10' > 	  	  */
/* 				    	<div>*/
/* 				    		{{ entity.title|raw  }}				    						    		*/
/* 				    	</div>*/
/* 					</div> 	  	*/
/* 				</div>  	*/
/* */
/* 	*/
/* 	{% if (  is_granted("ROLE_ADMIN") ) %}*/
/* 		<div class='col-sm-12'>*/
/* 			<hr/>*/
/* 		</div>*/
/* 		<div class='col-sm-12'>*/
/* 			<a  class="btn  btn-button-cancel "  href="{{ path('semestres', { 'id': entity.id, 'page': page, 'sort': sort, 'direction': direction  }) }}">*/
/* 					<span class="glyphicon glyphicon-arrow-left"></span>   Retour à la liste */
/* 			</a> */
/* 		</div>      */
/* 		<div class='col-sm-12'>*/
/* 		</div>*/
/* 	{% endif %}	*/
/* */
/* 	</div>*/
/* */
/* */
/* */
/* {% endblock %} */
/* */
/* */
/*     */
/* */
/* */
