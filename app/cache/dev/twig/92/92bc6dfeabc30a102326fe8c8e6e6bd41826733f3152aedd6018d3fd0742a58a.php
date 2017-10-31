<?php

/* IfeAloesBundle:Resp:utilisateurs.html.twig */
class __TwigTemplate_865a7398831f1ff2acb6212abbae77210d5972aa35dfdf7606c115e2af376038 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("IfeAloesBundle:Aloes:layout.html.twig", "IfeAloesBundle:Resp:utilisateurs.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "IfeAloesBundle:Aloes:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<div class='title-one'> Liste des utilisateurs </div>

\t   \t 
\t<fieldset>
\t\t<div  class=\"col-sm-9 col-xs-12\">\t
\t\t\t<form class=\"form-inline\" action=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("resp_utilisateurs", array("page" => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "sort" => (isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")), "direction" => (isset($context["direction"]) ? $context["direction"] : $this->getContext($context, "direction")))), "html", null, true);
        echo "\" method=\"post\">\t
\t\t\t\t<div  class=\"col-sm-4  col-xs-12\">\t
\t\t\t\t\t";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "search", array()), 'widget');
        echo "
\t\t\t\t</div>\t\t\t\t   \t\t\t
\t\t\t\t";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "\t
\t\t\t\t<div  class=\"col-sm-4  col-xs-12\">\t
\t\t\t\t\t<button type=\"submit\" class=\"btn  btn-button-cancel \">Ok</button>
\t\t\t\t</div>
\t\t\t</form>
\t\t</div>\t\t\t
\t\t
\t\t\t\t\t
\t\t<div  class=\"col-sm-3 col-xs-12\">\t
\t\t      <a href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("resp_utilisateurs_add_ldap", array("page" => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "sort" => (isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")), "direction" => (isset($context["direction"]) ? $context["direction"] : $this->getContext($context, "direction")))), "html", null, true);
        echo "\">
\t\t      \t<i class=\"icon-plus\"></i> Ajouter un utilisateur LDAP
\t\t      </a><br/>
\t\t      <a href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("resp_utilisateurs_add_user", array("page" => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "sort" => (isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")), "direction" => (isset($context["direction"]) ? $context["direction"] : $this->getContext($context, "direction")))), "html", null, true);
        echo "\">
\t\t      \t<i class=\"icon-plus\"></i> Ajouter un utilisateur 
\t\t      </a>
\t\t</div>\t\t\t\t 
\t\t    
\t</fieldset>\t\t\t\t\t\t\t

\t<fieldset>

    <table class=\"table\">
        <thead>
            <th width='15%'>";
        // line 36
        echo $this->env->getExtension('knp_pagination')->sortable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Nom", "sn");
        echo "<span class=\"glyphicon glyphicon-sort\" style=\"color:#23527c;font-size: 0.6em;\"></span></th>
            <th width='15%'>";
        // line 37
        echo $this->env->getExtension('knp_pagination')->sortable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Prénom", "givenname");
        echo "<span class=\"glyphicon glyphicon-sort\" style=\"color:#23527c;font-size: 0.6em;\"></span></th>
            <th width='25%'>";
        // line 38
        echo $this->env->getExtension('knp_pagination')->sortable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Courriel", "email");
        echo "<span class=\"glyphicon glyphicon-sort\" style=\"color:#23527c;font-size: 0.6em;\"></span></th>        
            <th width='15%' style=\"text-align:center\"> Administrateur </th> 
            <th width='15%' style=\"text-align:center\"> Responsable de formation </th>  
            <th width='15%' style=\"text-align:center\"> Enseignant </th>  
  
            <th width='10%' style=\"text-align:center\"> Consulter</th>
            <th width='10%' style=\"text-align:center\"> Modifier</th> 
            <th width='10%' style=\"text-align:center\"> Supprimer</th>            
   
        </thead>
        <tbody>
        
\t\t";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 51
            echo "            <tr>
                <td> 
\t            \t";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "sn", array()), "html", null, true);
            echo " 
                </td>
                <td> 
                \t";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "givenname", array()), "html", null, true);
            echo "                  
                </td>
                <td> 
                \t";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "email", array()), "html", null, true);
            echo "          
                </td>         
                <td style=\"text-align:center\"> 
                \t";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "ROLE_ADMIN", array()), "html", null, true);
            echo "                \t \t                  
                </td>    
                <td style=\"text-align:center\"> 
                \t";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "ROLE_RESPONSABLE", array()), "html", null, true);
            echo "                        \t \t                  
                </td>  
                <td style=\"text-align:center\"> 
                \t";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "ROLE_ENSEIGNANT", array()), "html", null, true);
            echo "                         \t \t                  
                </td>  
                <td style=\"text-align:center\">  
\t\t\t    \t<a href=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("resp_utilisateurs_showuser", array("id" => $this->getAttribute($context["entity"], "id", array()), "page" => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "sort" => (isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")), "direction" => (isset($context["direction"]) ? $context["direction"] : $this->getContext($context, "direction")))), "html", null, true);
            echo "\">
\t\t\t        \t<span class=\"glyphicon glyphicon-eye-open\"></span>
\t\t\t   \t\t</a>     \t \t                  
                </td>                  

                <td style=\"text-align:center\">  
\t\t\t    \t<a href=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("resp_utilisateurs_updateuser", array("id" => $this->getAttribute($context["entity"], "id", array()), "page" => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "sort" => (isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")), "direction" => (isset($context["direction"]) ? $context["direction"] : $this->getContext($context, "direction")))), "html", null, true);
            echo "\">
\t\t\t        \t<span class=\"glyphicon glyphicon-edit\"></span>
\t\t\t   \t\t</a>     \t \t                  
                </td>  

                <td style=\"text-align:center\">  
\t\t\t    \t<a href=\"";
            // line 83
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("resp_utilisateurs_deleteuser", array("id" => $this->getAttribute($context["entity"], "id", array()), "page" => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "sort" => (isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")), "direction" => (isset($context["direction"]) ? $context["direction"] : $this->getContext($context, "direction")))), "html", null, true);
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
        // line 91
        echo "\t\t
        </tbody>
    </table>
    
\t</fieldset>    

\t<center>
\t";
        // line 98
        echo $this->env->getExtension('knp_pagination')->render((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
\t</center>
\t          
    
";
    }

    public function getTemplateName()
    {
        return "IfeAloesBundle:Resp:utilisateurs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 98,  179 => 91,  165 => 83,  156 => 77,  147 => 71,  141 => 68,  135 => 65,  129 => 62,  123 => 59,  117 => 56,  111 => 53,  107 => 51,  103 => 50,  88 => 38,  84 => 37,  80 => 36,  66 => 25,  60 => 22,  48 => 13,  43 => 11,  38 => 9,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'IfeAloesBundle:Aloes:layout.html.twig' %}*/
/* */
/* {% block content -%}*/
/*     <div class='title-one'> Liste des utilisateurs </div>*/
/* */
/* 	   	 */
/* 	<fieldset>*/
/* 		<div  class="col-sm-9 col-xs-12">	*/
/* 			<form class="form-inline" action="{{ path('resp_utilisateurs', { 'page' : page, 'sort' : sort, 'direction' : direction  }) }}" method="post">	*/
/* 				<div  class="col-sm-4  col-xs-12">	*/
/* 					{{ form_widget(form.search) }}*/
/* 				</div>				   			*/
/* 				{{ form_rest(form) }}	*/
/* 				<div  class="col-sm-4  col-xs-12">	*/
/* 					<button type="submit" class="btn  btn-button-cancel ">Ok</button>*/
/* 				</div>*/
/* 			</form>*/
/* 		</div>			*/
/* 		*/
/* 					*/
/* 		<div  class="col-sm-3 col-xs-12">	*/
/* 		      <a href="{{ path('resp_utilisateurs_add_ldap', { 'page' : page, 'sort' : sort, 'direction' : direction  } ) }}">*/
/* 		      	<i class="icon-plus"></i> Ajouter un utilisateur LDAP*/
/* 		      </a><br/>*/
/* 		      <a href="{{ path('resp_utilisateurs_add_user', { 'page' : page, 'sort' : sort, 'direction' : direction  } ) }}">*/
/* 		      	<i class="icon-plus"></i> Ajouter un utilisateur */
/* 		      </a>*/
/* 		</div>				 */
/* 		    */
/* 	</fieldset>							*/
/* */
/* 	<fieldset>*/
/* */
/*     <table class="table">*/
/*         <thead>*/
/*             <th width='15%'>{{ knp_pagination_sortable(pagination, 'Nom', 'sn') }}<span class="glyphicon glyphicon-sort" style="color:#23527c;font-size: 0.6em;"></span></th>*/
/*             <th width='15%'>{{ knp_pagination_sortable(pagination, 'Prénom', 'givenname') }}<span class="glyphicon glyphicon-sort" style="color:#23527c;font-size: 0.6em;"></span></th>*/
/*             <th width='25%'>{{ knp_pagination_sortable(pagination, 'Courriel', 'email') }}<span class="glyphicon glyphicon-sort" style="color:#23527c;font-size: 0.6em;"></span></th>        */
/*             <th width='15%' style="text-align:center"> Administrateur </th> */
/*             <th width='15%' style="text-align:center"> Responsable de formation </th>  */
/*             <th width='15%' style="text-align:center"> Enseignant </th>  */
/*   */
/*             <th width='10%' style="text-align:center"> Consulter</th>*/
/*             <th width='10%' style="text-align:center"> Modifier</th> */
/*             <th width='10%' style="text-align:center"> Supprimer</th>            */
/*    */
/*         </thead>*/
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
/*                 	{{ entity.ROLE_RESPONSABLE}}                        	 	                  */
/*                 </td>  */
/*                 <td style="text-align:center"> */
/*                 	{{ entity.ROLE_ENSEIGNANT}}                         	 	                  */
/*                 </td>  */
/*                 <td style="text-align:center">  */
/* 			    	<a href="{{ path('resp_utilisateurs_showuser', { 'id': entity.id, 'page' : page, 'sort' : sort, 'direction' : direction  }) }}">*/
/* 			        	<span class="glyphicon glyphicon-eye-open"></span>*/
/* 			   		</a>     	 	                  */
/*                 </td>                  */
/* */
/*                 <td style="text-align:center">  */
/* 			    	<a href="{{ path('resp_utilisateurs_updateuser', { 'id': entity.id, 'page' : page, 'sort' : sort, 'direction' : direction  }) }}">*/
/* 			        	<span class="glyphicon glyphicon-edit"></span>*/
/* 			   		</a>     	 	                  */
/*                 </td>  */
/* */
/*                 <td style="text-align:center">  */
/* 			    	<a href="{{ path('resp_utilisateurs_deleteuser', { 'id': entity.id, 'page' : page, 'sort' : sort, 'direction' : direction  }) }}">*/
/* 			        	<span class="glyphicon glyphicon-remove"></span> */
/* 			   		</a>     	 	                  */
/*                 </td>                  */
/*    */
/* */
/*             </tr>		*/
/* 		{% endfor %}*/
/* 		*/
/*         </tbody>*/
/*     </table>*/
/*     */
/* 	</fieldset>    */
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
