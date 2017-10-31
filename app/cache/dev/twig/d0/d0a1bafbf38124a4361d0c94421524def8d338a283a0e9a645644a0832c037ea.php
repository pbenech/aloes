<?php

/* IfeAloesBundle:Level:index.html.twig */
class __TwigTemplate_db8a0a4f30bf68b139372d5f8fa1d1838e885833445519dd3b6246c0f306bf2a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("IfeAloesBundle:Aloes:layout-outils.html.twig", "IfeAloesBundle:Level:index.html.twig", 1);
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
        // line 3
        $context["macro"] = $this->loadTemplate("::macro.html.twig", "IfeAloesBundle:Level:index.html.twig", 3);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_header_nav($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"btn-group btn-breadcrumb\">   
        <a  class=\"btn btn-default\" href=\"";
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
        // line 17
        echo "<div class='title-two1a col-md-9 col-sm-9'> 
\t\t\tListe des niveaux
\t\t</div>
    \t<div class='title-two1b col-md-3 col-sm-3' style='text-align:right'>
\t\t\t<a class=\"btn1 btn-color4\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("levels_new", array("page" => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "sort" => (isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")), "direction" => (isset($context["direction"]) ? $context["direction"] : $this->getContext($context, "direction")))), "html", null, true);
        echo "\">
\t\t    \t<span class=\"glyphicon glyphicon-pencil\"></span> Ajouter un niveaux
\t\t    </a>\t
    \t</div> \t\t

\t<div class=\"col-sm-12 block3\">
    <table class=\"table   table-striped  table-hover col-sm-12 \">
        <thead>
            <th width='20%'>";
        // line 29
        echo $this->env->getExtension('knp_pagination')->sortable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Sigle", "l.sigle");
        echo "
            \t";
        // line 30
        echo $context["macro"]->gettri("l.sigle", (isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")), (isset($context["direction"]) ? $context["direction"] : $this->getContext($context, "direction")));
        echo "  
            </th>
            <th width='50%'>";
        // line 32
        echo $this->env->getExtension('knp_pagination')->sortable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Titre", "l.title");
        echo "
            \t";
        // line 33
        echo $context["macro"]->gettri("l.title", (isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")), (isset($context["direction"]) ? $context["direction"] : $this->getContext($context, "direction")));
        echo "  
            </th>
  
            <th width='10%' style=\"text-align:center\"> Consulter</th>
            <th width='10%' style=\"text-align:center\"> Modifier</th> 
            <th width='10%' style=\"text-align:center\"> Supprimer</th>            
    
        </thead> 
        <tbody>
        
\t\t";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 44
            echo "            <tr>
                <td> 
\t            \t";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "sigle", array()), "html", null, true);
            echo " 
                </td>
                <td> 
\t            \t";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "title", array()), "html", null, true);
            echo " 
                </td>
 \t
            \t<td style=\"text-align:center\">  
\t\t\t    \t<a  class=\"btn1 btn-color4\" href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("levels_show", array("id" => $this->getAttribute($context["entity"], "id", array()), "page" => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "sort" => (isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")), "direction" => (isset($context["direction"]) ? $context["direction"] : $this->getContext($context, "direction")))), "html", null, true);
            echo "\">
\t\t\t        \t<span class=\"glyphicon glyphicon-eye-open\"></span>
\t\t\t   \t\t</a>     \t \t                  
                </td>                  

                <td style=\"text-align:center\">  
\t\t\t    \t<a  class=\"btn1 btn-color4\" href=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("levels_edit", array("id" => $this->getAttribute($context["entity"], "id", array()), "page" => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "sort" => (isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")), "direction" => (isset($context["direction"]) ? $context["direction"] : $this->getContext($context, "direction")))), "html", null, true);
            echo "\">
\t\t\t        \t<span class=\"glyphicon glyphicon-edit\"></span>
\t\t\t   \t\t</a>     \t \t                  
                </td>  

                <td style=\"text-align:center\">  
\t                ";
            // line 65
            if ((twig_length_filter($this->env, $this->getAttribute($context["entity"], "levelprograms", array())) == 0)) {
                // line 66
                echo "\t\t\t\t    \t<a  class=\"btn1 btn-danger\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("levels_delete", array("id" => $this->getAttribute($context["entity"], "id", array()), "page" => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "sort" => (isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")), "direction" => (isset($context["direction"]) ? $context["direction"] : $this->getContext($context, "direction")))), "html", null, true);
                echo "\">
\t\t\t\t        \t<span class=\"glyphicon glyphicon-remove\"></span> 
\t\t\t\t   \t\t</a>     \t \t                  
\t\t\t\t   \t";
            }
            // line 69
            echo "\t
                </td>                  
    

            </tr>\t\t
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "\t\t
        </tbody>
    </table>
  \t</div>

\t<center>
\t";
        // line 81
        echo $this->env->getExtension('knp_pagination')->render((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
\t</center>
\t          
    
";
    }

    public function getTemplateName()
    {
        return "IfeAloesBundle:Level:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 81,  152 => 75,  141 => 69,  133 => 66,  131 => 65,  122 => 59,  113 => 53,  106 => 49,  100 => 46,  96 => 44,  92 => 43,  79 => 33,  75 => 32,  70 => 30,  66 => 29,  55 => 21,  49 => 17,  46 => 13,  38 => 7,  35 => 6,  32 => 5,  28 => 1,  26 => 3,  11 => 1,);
    }
}
/* {% extends 'IfeAloesBundle:Aloes:layout-outils.html.twig' %}*/
/* */
/* {% import "::macro.html.twig" as macro %}*/
/*  */
/* {% block header_nav %}*/
/*     <div class="btn-group btn-breadcrumb">   */
/*         <a  class="btn btn-default" href="{{path('admin_outil')}}"> Réglages</a></li>*/
/*         <a  class="btn btn-default" href="">Niveaux</a>*/
/*     </div>          */
/* {% endblock %}*/
/*  */
/* */
/* {% block content_10 -%}*/
/* */
/* 	*/
/* 	*/
/*     	<div class='title-two1a col-md-9 col-sm-9'> */
/* 			Liste des niveaux*/
/* 		</div>*/
/*     	<div class='title-two1b col-md-3 col-sm-3' style='text-align:right'>*/
/* 			<a class="btn1 btn-color4" href="{{ path('levels_new', { 'page' : page, 'sort' : sort, 'direction' : direction  } ) }}">*/
/* 		    	<span class="glyphicon glyphicon-pencil"></span> Ajouter un niveaux*/
/* 		    </a>	*/
/*     	</div> 		*/
/* */
/* 	<div class="col-sm-12 block3">*/
/*     <table class="table   table-striped  table-hover col-sm-12 ">*/
/*         <thead>*/
/*             <th width='20%'>{{ knp_pagination_sortable(pagination, 'Sigle', 'l.sigle') }}*/
/*             	{{ macro.tri('l.sigle',sort,direction) }}  */
/*             </th>*/
/*             <th width='50%'>{{ knp_pagination_sortable(pagination, 'Titre', 'l.title') }}*/
/*             	{{ macro.tri('l.title',sort,direction) }}  */
/*             </th>*/
/*   */
/*             <th width='10%' style="text-align:center"> Consulter</th>*/
/*             <th width='10%' style="text-align:center"> Modifier</th> */
/*             <th width='10%' style="text-align:center"> Supprimer</th>            */
/*     */
/*         </thead> */
/*         <tbody>*/
/*         */
/* 		{% for entity in pagination %}*/
/*             <tr>*/
/*                 <td> */
/* 	            	{{ entity.sigle}} */
/*                 </td>*/
/*                 <td> */
/* 	            	{{ entity.title}} */
/*                 </td>*/
/*  	*/
/*             	<td style="text-align:center">  */
/* 			    	<a  class="btn1 btn-color4" href="{{ path('levels_show', { 'id': entity.id, 'page' : page, 'sort' : sort, 'direction' : direction  }) }}">*/
/* 			        	<span class="glyphicon glyphicon-eye-open"></span>*/
/* 			   		</a>     	 	                  */
/*                 </td>                  */
/* */
/*                 <td style="text-align:center">  */
/* 			    	<a  class="btn1 btn-color4" href="{{ path('levels_edit', { 'id': entity.id, 'page' : page, 'sort' : sort, 'direction' : direction  }) }}">*/
/* 			        	<span class="glyphicon glyphicon-edit"></span>*/
/* 			   		</a>     	 	                  */
/*                 </td>  */
/* */
/*                 <td style="text-align:center">  */
/* 	                {% if entity.levelprograms|length == 0 %}*/
/* 				    	<a  class="btn1 btn-danger" href="{{ path('levels_delete', { 'id': entity.id, 'page' : page, 'sort' : sort, 'direction' : direction  }) }}">*/
/* 				        	<span class="glyphicon glyphicon-remove"></span> */
/* 				   		</a>     	 	                  */
/* 				   	{% endif%}	*/
/*                 </td>                  */
/*     */
/* */
/*             </tr>		*/
/* 		{% endfor %}*/
/* 		*/
/*         </tbody>*/
/*     </table>*/
/*   	</div>*/
/* */
/* 	<center>*/
/* 	{{ knp_pagination_render(pagination) }}*/
/* 	</center>*/
/* 	          */
/*     */
/* {% endblock %} */
/* */
/* */
/*     */
/* */
/* */
