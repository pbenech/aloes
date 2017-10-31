<?php

/* IfeAloesBundle:Semestre:index.html.twig */
class __TwigTemplate_d9bd73b540f713b115df1aae8f1e09f7eba759f9e81967ebaf95a1480d4a70d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("IfeAloesBundle:Aloes:layout-outils.html.twig", "IfeAloesBundle:Semestre:index.html.twig", 1);
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
        $context["macro"] = $this->loadTemplate("::macro.html.twig", "IfeAloesBundle:Semestre:index.html.twig", 3);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_header_nav($context, array $blocks = array())
    {
        // line 7
        echo "    <div class=\"btn-group btn-breadcrumb\">   
        <a  class=\"btn btn-default\"href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("admin_outil");
        echo "\"> Réglages</a></li>
        <a  class=\"btn btn-default\" href=\"\">Semestres</a>
    </div>
";
    }

    // line 14
    public function block_content_10($context, array $blocks = array())
    {
        // line 17
        echo "<div class='title-two1a col-md-9 col-sm-9'> 
\t\t\tListe des semestres\t
\t</div>
    <div class='title-two1b  col-md-3 col-sm-3' style='text-align:right'>
\t\t\t<a class=\"btn1 btn-color4\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("semestres_new", array("page" => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "sort" => (isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")), "direction" => (isset($context["direction"]) ? $context["direction"] : $this->getContext($context, "direction")))), "html", null, true);
        echo "\">
\t\t    \t<span class=\"glyphicon glyphicon-pencil\"></span> Ajouter 
\t\t    </a>\t
    </div> \t\t

    <div class=\"col-sm-12 block3\">
    <table class=\"table   table-striped  table-hover col-sm-12\">
        <thead>

            <th width='70%'>";
        // line 30
        echo $this->env->getExtension('knp_pagination')->sortable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Titre", "l.title");
        echo "
            \t";
        // line 31
        echo $context["macro"]->gettri("l.title", (isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")), (isset($context["direction"]) ? $context["direction"] : $this->getContext($context, "direction")));
        echo "  
            </th>
  
            <th width='10%' style=\"text-align:center\"> Consulter</th>
            <th width='10%' style=\"text-align:center\"> Modifier</th> 
            <th width='10%' style=\"text-align:center\"> Supprimer</th>            
    
        </thead> 
        <tbody>
        
\t\t";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 42
            echo "            <tr>

                <td> 
\t            \t";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "title", array()), "html", null, true);
            echo " 
                </td>
 \t
            \t<td style=\"text-align:center\">  
\t\t\t    \t<a class=\"btn1 btn-color4\" href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("semestres_show", array("id" => $this->getAttribute($context["entity"], "id", array()), "page" => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "sort" => (isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")), "direction" => (isset($context["direction"]) ? $context["direction"] : $this->getContext($context, "direction")))), "html", null, true);
            echo "\">
\t\t\t        \t<span class=\"glyphicon glyphicon-eye-open\"></span>
\t\t\t   \t\t</a>     \t \t                  
                </td>                  

                <td style=\"text-align:center\">  
\t\t\t    \t<a  class=\"btn1 btn-color4\" href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("semestres_edit", array("id" => $this->getAttribute($context["entity"], "id", array()), "page" => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "sort" => (isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")), "direction" => (isset($context["direction"]) ? $context["direction"] : $this->getContext($context, "direction")))), "html", null, true);
            echo "\">
\t\t\t        \t<span class=\"glyphicon glyphicon-edit\"></span>
\t\t\t   \t\t</a>     \t \t                  
                </td>  
 
                <td style=\"text-align:center\">  

\t\t\t\t    \t<a  class=\"btn1 btn-danger\" href=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("semestres_delete", array("id" => $this->getAttribute($context["entity"], "id", array()), "page" => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "sort" => (isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")), "direction" => (isset($context["direction"]) ? $context["direction"] : $this->getContext($context, "direction")))), "html", null, true);
            echo "\">
\t\t\t\t        \t<span class=\"glyphicon glyphicon-remove\"></span> 
\t\t\t\t   \t\t</a>     \t \t                  

                </td>                  
    

            </tr>\t\t
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "\t\t
        </tbody>
    </table>
  \t</div>

\t<center>
\t";
        // line 77
        echo $this->env->getExtension('knp_pagination')->render((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
\t</center>
\t          
    
";
    }

    public function getTemplateName()
    {
        return "IfeAloesBundle:Semestre:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 77,  134 => 71,  119 => 62,  109 => 55,  100 => 49,  93 => 45,  88 => 42,  84 => 41,  71 => 31,  67 => 30,  55 => 21,  49 => 17,  46 => 14,  38 => 8,  35 => 7,  32 => 6,  28 => 1,  26 => 3,  11 => 1,);
    }
}
/* {% extends 'IfeAloesBundle:Aloes:layout-outils.html.twig' %}*/
/* */
/* {% import "::macro.html.twig" as macro %}*/
/* */
/* */
/* {% block header_nav %}*/
/*     <div class="btn-group btn-breadcrumb">   */
/*         <a  class="btn btn-default"href="{{path('admin_outil')}}"> Réglages</a></li>*/
/*         <a  class="btn btn-default" href="">Semestres</a>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* */
/* {% block content_10 -%}*/
/* */
/*  	*/
/*     <div class='title-two1a col-md-9 col-sm-9'> */
/* 			Liste des semestres	*/
/* 	</div>*/
/*     <div class='title-two1b  col-md-3 col-sm-3' style='text-align:right'>*/
/* 			<a class="btn1 btn-color4" href="{{ path('semestres_new', { 'page' : page, 'sort' : sort, 'direction' : direction  } ) }}">*/
/* 		    	<span class="glyphicon glyphicon-pencil"></span> Ajouter */
/* 		    </a>	*/
/*     </div> 		*/
/* */
/*     <div class="col-sm-12 block3">*/
/*     <table class="table   table-striped  table-hover col-sm-12">*/
/*         <thead>*/
/* */
/*             <th width='70%'>{{ knp_pagination_sortable(pagination, 'Titre', 'l.title') }}*/
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
/* */
/*                 <td> */
/* 	            	{{ entity.title}} */
/*                 </td>*/
/*  	*/
/*             	<td style="text-align:center">  */
/* 			    	<a class="btn1 btn-color4" href="{{ path('semestres_show', { 'id': entity.id, 'page' : page, 'sort' : sort, 'direction' : direction  }) }}">*/
/* 			        	<span class="glyphicon glyphicon-eye-open"></span>*/
/* 			   		</a>     	 	                  */
/*                 </td>                  */
/* */
/*                 <td style="text-align:center">  */
/* 			    	<a  class="btn1 btn-color4" href="{{ path('semestres_edit', { 'id': entity.id, 'page' : page, 'sort' : sort, 'direction' : direction  }) }}">*/
/* 			        	<span class="glyphicon glyphicon-edit"></span>*/
/* 			   		</a>     	 	                  */
/*                 </td>  */
/*  */
/*                 <td style="text-align:center">  */
/* */
/* 				    	<a  class="btn1 btn-danger" href="{{ path('semestres_delete', { 'id': entity.id, 'page' : page, 'sort' : sort, 'direction' : direction  }) }}">*/
/* 				        	<span class="glyphicon glyphicon-remove"></span> */
/* 				   		</a>     	 	                  */
/* */
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
