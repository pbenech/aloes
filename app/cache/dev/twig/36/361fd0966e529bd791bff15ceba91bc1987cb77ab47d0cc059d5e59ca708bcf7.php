<?php

/* IfeAloesBundle:Admin:utilisateurs.html.twig */
class __TwigTemplate_a39e642b56acb43291a099c2dbcb05d98fc8b84f2ab3e9e26f4e35162333c24e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("IfeAloesBundle:Aloes:layout-outils.html.twig", "IfeAloesBundle:Admin:utilisateurs.html.twig", 1);
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
        $context["macro"] = $this->loadTemplate("::macro.html.twig", "IfeAloesBundle:Admin:utilisateurs.html.twig", 3);
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
        <a  class=\"btn btn-default\" href=\"\">Gestion utilisateurs</a>
    </div>       
";
    }

    // line 12
    public function block_content_10($context, array $blocks = array())
    {
        // line 15
        echo "<div class='title-two1a col-md-12 col-sm-12'> 
\t\t\t\tListe des utilisateurs 
\t</div>

\t   \t 
\t<div class=\"col-sm-12 block3\">
\t
\t\t<div  class=\"col-sm-6\">\t
\t\t\t<form class=\"form-inline\" action=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_utilisateurs", array("page" => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "sort" => (isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")), "direction" => (isset($context["direction"]) ? $context["direction"] : $this->getContext($context, "direction")))), "html", null, true);
        echo "\" method=\"post\">\t
\t\t\t\t<div  class=\"col-sm-4  col-xs-12\">\t
\t\t\t\t\t";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "search", array()), 'widget');
        echo "
\t\t\t\t</div>\t\t\t\t   \t\t\t
\t\t\t\t";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "\t
\t\t\t\t<div  class=\"col-sm-8  col-xs-12\">\t
\t\t\t\t\t<button type=\"submit\" class=\"btn  btn-button-cancel \">Ok</button>
\t\t\t\t</div>
\t\t\t</form>
\t\t</div>\t\t\t

\t\t<div  class=\"col-sm-3\" style=\"valign:middle\">\t
\t\t      <a class=\"btn1 btn-color4\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_utilisateurs_add_ldap", array("page" => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "sort" => (isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")), "direction" => (isset($context["direction"]) ? $context["direction"] : $this->getContext($context, "direction")))), "html", null, true);
        echo "\">
\t\t      \t<span class=\"glyphicon glyphicon-pencil\"></span> Ajouter un utilisateur LDAP
\t\t      </a><br/><br/>

\t\t</div>\t\t\t
\t\t\t\t\t
\t\t<div  class=\"col-sm-3\">\t
\t\t      <a  class=\"btn1 btn-color4\" href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_utilisateurs_add_user", array("page" => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "sort" => (isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")), "direction" => (isset($context["direction"]) ? $context["direction"] : $this->getContext($context, "direction")))), "html", null, true);
        echo "\">
\t\t      \t<span class=\"glyphicon glyphicon-pencil\"></span> Ajouter un utilisateur 
\t\t      </a>
\t\t</div>\t\t\t\t\t    
\t</div>\t\t\t\t\t\t


\t<div class=\"col-sm-12 block3\">
      <table class=\"table   table-striped  table-hover col-sm-12\">
        <thead>
            <th >";
        // line 52
        echo $this->env->getExtension('knp_pagination')->sortable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Nom", "sn");
        echo "
            \t";
        // line 53
        echo $context["macro"]->gettri("sn", (isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")), (isset($context["direction"]) ? $context["direction"] : $this->getContext($context, "direction")));
        echo " 
            </th>
            <th>";
        // line 55
        echo $this->env->getExtension('knp_pagination')->sortable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Prénom", "givenname");
        echo "
            \t";
        // line 56
        echo $context["macro"]->gettri("givenname", (isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")), (isset($context["direction"]) ? $context["direction"] : $this->getContext($context, "direction")));
        echo " 
            </th>
            <th>";
        // line 58
        echo $this->env->getExtension('knp_pagination')->sortable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Courriel", "email");
        echo "
            \t";
        // line 59
        echo $context["macro"]->gettri("email", (isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")), (isset($context["direction"]) ? $context["direction"] : $this->getContext($context, "direction")));
        echo " 
            </th>        
            <th  style=\"text-align:center\"> Administrateur </th> 
            <th  style=\"text-align:center\"> Responsable de formation </th>  
            <th  style=\"text-align:center\"> Enseignant </th>  
  
            <th  style=\"text-align:center\"> </th>
            <th  style=\"text-align:center\"> </th> 
            <th  style=\"text-align:center\"> </th>            
   
        </thead> 
        <tbody>
        
\t\t";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 73
            echo "            <tr>
                <td> 
\t            \t";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "sn", array()), "html", null, true);
            echo " 
                </td>
                <td> 
                \t";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "givenname", array()), "html", null, true);
            echo "                  
                </td>
                <td> 
                \t";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "email", array()), "html", null, true);
            echo "          
                </td>         
                <td style=\"text-align:center\"> 
                \t";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "ROLE_ADMIN", array()), "html", null, true);
            echo "                \t \t                  
                </td>    
                <td style=\"text-align:center\"> 
                <!--\t\t";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "ROLE_RESPONSABLE", array()), "html", null, true);
            echo "  --> 
                \t";
            // line 88
            echo $this->getAttribute($context["entity"], "programs", array());
            echo "                      \t \t                  
                </td>  
                <td style=\"text-align:center\"> 
                <!--\t";
            // line 91
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "ROLE_ENSEIGNANT", array()), "html", null, true);
            echo " -->
                \t";
            // line 92
            echo $this->getAttribute($context["entity"], "courses", array());
            echo "       \t \t                  
                </td>  
                <td style=\"text-align:center\">  
\t\t\t    \t<a href=\"";
            // line 95
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_utilisateurs_showuser", array("id" => $this->getAttribute($context["entity"], "id", array()), "page" => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "sort" => (isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")), "direction" => (isset($context["direction"]) ? $context["direction"] : $this->getContext($context, "direction")))), "html", null, true);
            echo "\">
\t\t\t        \t<span class=\"glyphicon glyphicon-eye-open\"></span>
\t\t\t   \t\t</a>     \t \t                  
                </td>                  

                <td style=\"text-align:center\">  
\t\t\t    \t<a href=\"";
            // line 101
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_utilisateurs_updateuser", array("id" => $this->getAttribute($context["entity"], "id", array()), "page" => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "sort" => (isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")), "direction" => (isset($context["direction"]) ? $context["direction"] : $this->getContext($context, "direction")))), "html", null, true);
            echo "\">
\t\t\t        \t<span class=\"glyphicon glyphicon-edit\"></span>
\t\t\t   \t\t</a>     \t \t                  
                </td>  

                <td style=\"text-align:center\">  
\t\t\t    \t<a href=\"";
            // line 107
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_utilisateurs_deleteuser", array("id" => $this->getAttribute($context["entity"], "id", array()), "page" => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "sort" => (isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")), "direction" => (isset($context["direction"]) ? $context["direction"] : $this->getContext($context, "direction")))), "html", null, true);
            echo "\">
\t\t\t        \t<span class=\"glyphicon glyphicon-remove\"></span> 
\t\t\t   \t\t</a>     \t \t                  
                </td>                  
   

            </tr>\t\t
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 115
        echo "\t\t
        </tbody>
      </table>
\t  
\t</div>

\t<center>
\t";
        // line 122
        echo $this->env->getExtension('knp_pagination')->render((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
\t</center>
\t          
    
";
    }

    public function getTemplateName()
    {
        return "IfeAloesBundle:Admin:utilisateurs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 122,  225 => 115,  211 => 107,  202 => 101,  193 => 95,  187 => 92,  183 => 91,  177 => 88,  173 => 87,  167 => 84,  161 => 81,  155 => 78,  149 => 75,  145 => 73,  141 => 72,  125 => 59,  121 => 58,  116 => 56,  112 => 55,  107 => 53,  103 => 52,  90 => 42,  80 => 35,  69 => 27,  64 => 25,  59 => 23,  49 => 15,  46 => 12,  38 => 7,  35 => 6,  32 => 5,  28 => 1,  26 => 3,  11 => 1,);
    }
}
/* {% extends 'IfeAloesBundle:Aloes:layout-outils.html.twig' %}*/
/* */
/* {% import "::macro.html.twig" as macro %} */
/* */
/* {% block header_nav %}*/
/*     <div class="btn-group btn-breadcrumb">   */
/*         <a  class="btn btn-default" href="{{path('admin_outil')}}"> Réglages</a></li>*/
/*         <a  class="btn btn-default" href="">Gestion utilisateurs</a>*/
/*     </div>       */
/* {% endblock %}*/
/* */
/* {% block content_10 -%}*/
/* */
/* 	*/
/* 	<div class='title-two1a col-md-12 col-sm-12'> */
/* 				Liste des utilisateurs */
/* 	</div>*/
/* */
/* 	   	 */
/* 	<div class="col-sm-12 block3">*/
/* 	*/
/* 		<div  class="col-sm-6">	*/
/* 			<form class="form-inline" action="{{ path('admin_utilisateurs', { 'page' : page, 'sort' : sort, 'direction' : direction  }) }}" method="post">	*/
/* 				<div  class="col-sm-4  col-xs-12">	*/
/* 					{{ form_widget(form.search) }}*/
/* 				</div>				   			*/
/* 				{{ form_rest(form) }}	*/
/* 				<div  class="col-sm-8  col-xs-12">	*/
/* 					<button type="submit" class="btn  btn-button-cancel ">Ok</button>*/
/* 				</div>*/
/* 			</form>*/
/* 		</div>			*/
/* */
/* 		<div  class="col-sm-3" style="valign:middle">	*/
/* 		      <a class="btn1 btn-color4" href="{{ path('admin_utilisateurs_add_ldap', { 'page' : page, 'sort' : sort, 'direction' : direction  } ) }}">*/
/* 		      	<span class="glyphicon glyphicon-pencil"></span> Ajouter un utilisateur LDAP*/
/* 		      </a><br/><br/>*/
/* */
/* 		</div>			*/
/* 					*/
/* 		<div  class="col-sm-3">	*/
/* 		      <a  class="btn1 btn-color4" href="{{ path('admin_utilisateurs_add_user', { 'page' : page, 'sort' : sort, 'direction' : direction  } ) }}">*/
/* 		      	<span class="glyphicon glyphicon-pencil"></span> Ajouter un utilisateur */
/* 		      </a>*/
/* 		</div>					    */
/* 	</div>						*/
/* */
/* */
/* 	<div class="col-sm-12 block3">*/
/*       <table class="table   table-striped  table-hover col-sm-12">*/
/*         <thead>*/
/*             <th >{{ knp_pagination_sortable(pagination, 'Nom', 'sn') }}*/
/*             	{{ macro.tri('sn',sort,direction) }} */
/*             </th>*/
/*             <th>{{ knp_pagination_sortable(pagination, 'Prénom', 'givenname') }}*/
/*             	{{ macro.tri('givenname',sort,direction) }} */
/*             </th>*/
/*             <th>{{ knp_pagination_sortable(pagination, 'Courriel', 'email') }}*/
/*             	{{ macro.tri('email',sort,direction) }} */
/*             </th>        */
/*             <th  style="text-align:center"> Administrateur </th> */
/*             <th  style="text-align:center"> Responsable de formation </th>  */
/*             <th  style="text-align:center"> Enseignant </th>  */
/*   */
/*             <th  style="text-align:center"> </th>*/
/*             <th  style="text-align:center"> </th> */
/*             <th  style="text-align:center"> </th>            */
/*    */
/*         </thead> */
/*         <tbody>*/
/*         */
/* 		{% for entity in pagination %}*/
/*             <tr>*/
/*                 <td> */
/* 	            	{{ entity.sn}} */
/*                 </td>*/
/*                 <td> */
/*                 	{{ entity.givenname }}                  */
/*                 </td>*/
/*                 <td> */
/*                 	{{ entity.email }}          */
/*                 </td>         */
/*                 <td style="text-align:center"> */
/*                 	{{ entity.ROLE_ADMIN}}                	 	                  */
/*                 </td>    */
/*                 <td style="text-align:center"> */
/*                 <!--		{{ entity.ROLE_RESPONSABLE}}  --> */
/*                 	{{ entity.programs|raw }}                      	 	                  */
/*                 </td>  */
/*                 <td style="text-align:center"> */
/*                 <!--	{{ entity.ROLE_ENSEIGNANT}} -->*/
/*                 	{{ entity.courses|raw }}       	 	                  */
/*                 </td>  */
/*                 <td style="text-align:center">  */
/* 			    	<a href="{{ path('admin_utilisateurs_showuser', { 'id': entity.id, 'page' : page, 'sort' : sort, 'direction' : direction  }) }}">*/
/* 			        	<span class="glyphicon glyphicon-eye-open"></span>*/
/* 			   		</a>     	 	                  */
/*                 </td>                  */
/* */
/*                 <td style="text-align:center">  */
/* 			    	<a href="{{ path('admin_utilisateurs_updateuser', { 'id': entity.id, 'page' : page, 'sort' : sort, 'direction' : direction  }) }}">*/
/* 			        	<span class="glyphicon glyphicon-edit"></span>*/
/* 			   		</a>     	 	                  */
/*                 </td>  */
/* */
/*                 <td style="text-align:center">  */
/* 			    	<a href="{{ path('admin_utilisateurs_deleteuser', { 'id': entity.id, 'page' : page, 'sort' : sort, 'direction' : direction  }) }}">*/
/* 			        	<span class="glyphicon glyphicon-remove"></span> */
/* 			   		</a>     	 	                  */
/*                 </td>                  */
/*    */
/* */
/*             </tr>		*/
/* 		{% endfor %}*/
/* 		*/
/*         </tbody>*/
/*       </table>*/
/* 	  */
/* 	</div>*/
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
