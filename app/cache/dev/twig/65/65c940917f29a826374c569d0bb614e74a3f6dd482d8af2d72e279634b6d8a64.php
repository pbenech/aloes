<?php

/* IfeAloesBundle:Course:index.html.twig */
class __TwigTemplate_5c03f6d1ce4e094bb1a2683762aacb67dc39d2084142b00be13cffbc59735c16 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("IfeAloesBundle:Program:layout.html.twig", "IfeAloesBundle:Course:index.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'scripts' => array($this, 'block_scripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "IfeAloesBundle:Program:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["macro"] = $this->loadTemplate("::macro.html.twig", "IfeAloesBundle:Course:index.html.twig", 3);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "<div class='title-two1a col-md-9 col-sm-9'> 
\t\t\tListe des cours (UE) 
\t\t</div>
    \t<div class='title-two1b col-md-3 col-sm-3' style='text-align:right'>
\t\t \t";
        // line 12
        if (((($this->env->getExtension('security')->isGranted("ROLE_ENSEIGNANT") && $this->getAttribute((isset($context["program"]) ? $context["program"] : $this->getContext($context, "program")), "isEnseignant", array(0 => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array())), "method")) || ($this->env->getExtension('security')->isGranted("ROLE_RESPONSABLE") && $this->getAttribute(        // line 13
(isset($context["program"]) ? $context["program"] : $this->getContext($context, "program")), "isResp", array(0 => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array())), "method"))) || $this->env->getExtension('security')->isGranted("ROLE_ADMIN"))) {
            // line 15
            echo "\t
\t\t \t
\t\t \t
\t\t\t\t\t<div id=\"button_gen\" class=\"col-sm-12\" style=\"text-align:right\">   \t   
\t\t\t\t\t  <a class=\"btn1 btn-color4\" href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("programs_courses_new", array("id" => $this->getAttribute((isset($context["program"]) ? $context["program"] : $this->getContext($context, "program")), "id", array()))), "html", null, true);
            echo "\" >
\t\t\t\t\t  \t\t<span class=\"glyphicon glyphicon-plus-sign\"> Ajouter un cours (UE)
\t\t\t\t\t  </a> \t\t\t\t\t\t             
\t\t\t\t\t</div>  \t\t\t \t

\t\t\t";
        }
        // line 24
        echo "\t \t
    \t</div> \t\t

\t
\t<div class=\"col-sm-12 block3\">
\t    <table class=\"table   table-striped  table-hover \">
\t        <thead>
\t            <tr>
\t                <th width='10%'>";
        // line 32
        echo $this->env->getExtension('knp_pagination')->sortable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Statut", "c.publicationState");
        echo "
            \t\t\t";
        // line 33
        echo $context["macro"]->gettri("c.publicationState", (isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")), (isset($context["direction"]) ? $context["direction"] : $this->getContext($context, "direction")));
        echo "   
\t                 </th>
\t                <th width='10%'>";
        // line 35
        echo $this->env->getExtension('knp_pagination')->sortable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Sigle", "c.label");
        echo "
            \t\t\t";
        // line 36
        echo $context["macro"]->gettri("c.label", (isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")), (isset($context["direction"]) ? $context["direction"] : $this->getContext($context, "direction")));
        echo "   
\t                 </th>
\t                <th width='45%'>";
        // line 38
        echo $this->env->getExtension('knp_pagination')->sortable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Ensemble des cours (UE)", "c.title");
        echo "
            \t\t\t";
        // line 39
        echo $context["macro"]->gettri("c.title", (isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")), (isset($context["direction"]) ? $context["direction"] : $this->getContext($context, "direction")));
        echo " 
\t                </th>
\t                <th width='10%' style='text-align:center'>";
        // line 41
        echo $this->env->getExtension('knp_pagination')->sortable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Crédits", "c.credits");
        echo "
            \t\t\t";
        // line 42
        echo $context["macro"]->gettri("c.credits", (isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")), (isset($context["direction"]) ? $context["direction"] : $this->getContext($context, "direction")));
        echo " 
\t                 </th>
\t\t            <th width='10%' style=\"text-align:center\"> ";
        // line 44
        echo $this->env->getExtension('knp_pagination')->sortable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Optionnel", "c.isOptional");
        echo "
\t\t            ";
        // line 45
        echo $context["macro"]->gettri("c.isOptional", (isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")), (isset($context["direction"]) ? $context["direction"] : $this->getContext($context, "direction")));
        echo " 
\t\t            </th>\t    
\t\t            <th width='5%' style=\"text-align:center\"> Visualiser</th>\t                
\t            
\t                <th width='5%' style='text-align:center'> Modifier </th>
\t                <th width='5%' style='text-align:center'> Supprimer </th>
\t            </tr>
\t        </thead>
\t        <tbody>
\t        ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 55
            echo "\t            <tr>
\t               <td >
\t                    ";
            // line 57
            if (((($this->env->getExtension('security')->isGranted("ROLE_ENSEIGNANT") && $this->getAttribute($context["entity"], "isRedacteur", array(0 => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array())), "method")) || ($this->env->getExtension('security')->isGranted("ROLE_RESPONSABLE") && $this->getAttribute(            // line 58
$context["entity"], "isRedacteur", array(0 => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array())), "method"))) || $this->env->getExtension('security')->isGranted("ROLE_ADMIN"))) {
                // line 60
                echo " 
\t                   \t<a class=\"btn1\" href=\"";
                // line 61
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_statut", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\">
\t\t               ";
            }
            // line 62
            echo "     
\t                   \t
\t\t\t\t\t\t";
            // line 64
            if (($this->getAttribute($context["entity"], "publicationState", array(), "any", true, true) && ($this->getAttribute($context["entity"], "publicationState", array()) == 1))) {
                // line 65
                echo "\t\t                \t\t<span class=\"glyphicon glyphicon-eye-open\" style='color:green' title='Public&nbsp;'> 
\t\t                ";
            } else {
                // line 66
                echo "                \t
\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-eye-close\" style='color:red'  title='Brouillon'> 
\t\t                ";
            }
            // line 68
            echo "  \t                   \t

\t                    ";
            // line 70
            if (((($this->env->getExtension('security')->isGranted("ROLE_ENSEIGNANT") && $this->getAttribute($context["entity"], "isRedacteur", array(0 => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array())), "method")) || ($this->env->getExtension('security')->isGranted("ROLE_RESPONSABLE") && $this->getAttribute(            // line 71
$context["entity"], "isRedacteur", array(0 => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array())), "method"))) || $this->env->getExtension('security')->isGranted("ROLE_ADMIN"))) {
                // line 73
                echo "\t                   \t
\t                   \t</a>
\t\t               ";
            }
            // line 75
            echo "  \t                   \t              
\t\t                \t  
\t                </td>            
\t            
\t                <td> ";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "label", array()), "html", null, true);
            echo "</td>
\t                <td> ";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "title", array()), "html", null, true);
            echo "</td>
\t                <td style='text-align:center'>";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "credits", array()), "html", null, true);
            echo "</td>  

\t                <td style='text-align:center'>
\t                ";
            // line 84
            if (($this->getAttribute($context["entity"], "isOptional", array(), "any", true, true) && ($this->getAttribute($context["entity"], "isOptional", array()) == "1"))) {
                echo "\t                
\t               \t\t*
\t               \t";
            }
            // line 87
            echo "\t                
\t                </td>  
\t                
\t                <td  style=\"text-align:center\"><a  class=\"btn1 btn-color4\" href=\"";
            // line 90
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-eye-open\"></span></a></td>\t                
\t                 

\t                <td style='text-align:center'>
\t                    ";
            // line 94
            if (((($this->env->getExtension('security')->isGranted("ROLE_ENSEIGNANT") && $this->getAttribute($context["entity"], "isRedacteur", array(0 => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array())), "method")) || ($this->env->getExtension('security')->isGranted("ROLE_RESPONSABLE") && $this->getAttribute(            // line 95
$context["entity"], "isRedacteur", array(0 => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array())), "method"))) || $this->env->getExtension('security')->isGranted("ROLE_ADMIN"))) {
                // line 98
                echo "\t        \t\t\t\t<a class=\"btn1 btn-color4\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("courses_edit", array("id" => $this->getAttribute($context["entity"], "id", array()), "from" => "list")), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-edit\"></span></a>                \t        \t\t\t\t
\t        \t\t\t";
            }
            // line 99
            echo " 
\t                </td>
\t                <td style='text-align:center'> 
\t                    ";
            // line 102
            if (((($this->env->getExtension('security')->isGranted("ROLE_ENSEIGNANT") && $this->getAttribute($context["entity"], "isRedacteur", array(0 => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array())), "method")) || ($this->env->getExtension('security')->isGranted("ROLE_RESPONSABLE") && $this->getAttribute(            // line 103
$context["entity"], "isRedacteur", array(0 => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array())), "method"))) || $this->env->getExtension('security')->isGranted("ROLE_ADMIN"))) {
                // line 106
                echo "\t                   \t
\t\t\t\t\t\t\t<a  data-cache=\"false\"  data-toggle=\"modal\" class=\"btn1 btn-danger\" href=\"";
                // line 107
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("courses_del2", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\" data-target=\"#myModal\"><span class=\"glyphicon glyphicon-trash\"></span> </a> \t\t\t\t\t\t                    
\t               \t
\t                   \t
\t    \t\t\t\t\t<!--               \t
\t\t                \t<a   class=\"btn_delete\"  href=\"";
                // line 111
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("courses_delete", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\">
\t\t                \t\t<span class=\"glyphicon glyphicon-remove\"></span>
\t\t                \t</a> 
\t\t                \t--> 
\t\t                ";
            }
            // line 116
            echo "\t                </td>
\t            </tr>
\t        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        echo "\t        </tbody>
\t    </table>
\t</div>\t    
    
\t\t<center>
\t\t";
        // line 124
        echo $this->env->getExtension('knp_pagination')->render((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
\t\t</center>\t    
\t

  \t<script>            
\t\t\$(document.body).on('hidden.bs.modal', function () {
\t\t\t\t\$('#myModal').removeData('bs.modal');\t    \t
\t\t\t\t\$(\"#modal-content\").html('');\t\t\t\t\t\t\t\t
\t\t\t\t\t
\t\t});\t\t\t\t\t\t\t\t \t\t                     
\t</script>
\t  
\t<div class=\"modal fade in \" data-backdrop=\"static\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\"  data-target=\".bs-example-modal-lg\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
\t\t\t<div class=\"modal-dialog modal-lg\" style=\"z-index: 1050\">  
\t\t\t\t<div id=\"modal-content\" class=\"modal-content\"> \t\t\t\t\t  \t
\t\t\t    </div>
\t\t\t</div>   
\t</div>   \t
\t

";
    }

    // line 147
    public function block_scripts($context, array $blocks = array())
    {
        // line 148
        echo "\t";
        $this->displayParentBlock("scripts", $context, $blocks);
        echo "

\t<script type=\"text/javascript\">
\t\t\t
\t\t\$('.btn_delete').click(function(e) {
\t\t\te.preventDefault(); 
\t\t\tvar path = \$(this).attr('href');
\t\t\t\$('#btn_comfirm_delete').attr('href', path);
\t\t\t\$('#modal_confirm_delete').modal({'show':true});  
\t\t}); 
\t</script> 
";
    }

    public function getTemplateName()
    {
        return "IfeAloesBundle:Course:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  283 => 148,  280 => 147,  255 => 124,  248 => 119,  240 => 116,  232 => 111,  225 => 107,  222 => 106,  220 => 103,  219 => 102,  214 => 99,  208 => 98,  206 => 95,  205 => 94,  198 => 90,  193 => 87,  187 => 84,  181 => 81,  177 => 80,  173 => 79,  167 => 75,  162 => 73,  160 => 71,  159 => 70,  155 => 68,  150 => 66,  146 => 65,  144 => 64,  140 => 62,  135 => 61,  132 => 60,  130 => 58,  129 => 57,  125 => 55,  121 => 54,  109 => 45,  105 => 44,  100 => 42,  96 => 41,  91 => 39,  87 => 38,  82 => 36,  78 => 35,  73 => 33,  69 => 32,  59 => 24,  50 => 19,  44 => 15,  42 => 13,  41 => 12,  35 => 8,  32 => 5,  28 => 1,  26 => 3,  11 => 1,);
    }
}
/* {% extends 'IfeAloesBundle:Program:layout.html.twig' %}*/
/* */
/* {% import "::macro.html.twig" as macro %}*/
/* */
/* {% block content -%}*/
/* 	*/
/*    	*/
/*     	<div class='title-two1a col-md-9 col-sm-9'> */
/* 			Liste des cours (UE) */
/* 		</div>*/
/*     	<div class='title-two1b col-md-3 col-sm-3' style='text-align:right'>*/
/* 		 	{% if    ( is_granted("ROLE_ENSEIGNANT")  and program.isEnseignant(app.user.id)) or		 */
/* 		 			 ( is_granted("ROLE_RESPONSABLE") and program.isResp(app.user.id) ) or */
/* 		             ( is_granted("ROLE_ADMIN") )*/
/* 		 	%}	*/
/* 		 	*/
/* 		 	*/
/* 					<div id="button_gen" class="col-sm-12" style="text-align:right">   	   */
/* 					  <a class="btn1 btn-color4" href="{{ path('programs_courses_new', {id:program.id}) }}" >*/
/* 					  		<span class="glyphicon glyphicon-plus-sign"> Ajouter un cours (UE)*/
/* 					  </a> 						             */
/* 					</div>  			 	*/
/* */
/* 			{% endif %}	 	*/
/*     	</div> 		*/
/* */
/* 	*/
/* 	<div class="col-sm-12 block3">*/
/* 	    <table class="table   table-striped  table-hover ">*/
/* 	        <thead>*/
/* 	            <tr>*/
/* 	                <th width='10%'>{{ knp_pagination_sortable(pagination, 'Statut', 'c.publicationState') }}*/
/*             			{{ macro.tri('c.publicationState',sort,direction) }}   */
/* 	                 </th>*/
/* 	                <th width='10%'>{{ knp_pagination_sortable(pagination, 'Sigle', 'c.label') }}*/
/*             			{{ macro.tri('c.label',sort,direction) }}   */
/* 	                 </th>*/
/* 	                <th width='45%'>{{ knp_pagination_sortable(pagination, 'Ensemble des cours (UE)', 'c.title') }}*/
/*             			{{ macro.tri('c.title',sort,direction) }} */
/* 	                </th>*/
/* 	                <th width='10%' style='text-align:center'>{{ knp_pagination_sortable(pagination, 'Crédits', 'c.credits') }}*/
/*             			{{ macro.tri('c.credits',sort,direction) }} */
/* 	                 </th>*/
/* 		            <th width='10%' style="text-align:center"> {{ knp_pagination_sortable(pagination, 'Optionnel', 'c.isOptional') }}*/
/* 		            {{ macro.tri('c.isOptional',sort,direction) }} */
/* 		            </th>	    */
/* 		            <th width='5%' style="text-align:center"> Visualiser</th>	                */
/* 	            */
/* 	                <th width='5%' style='text-align:center'> Modifier </th>*/
/* 	                <th width='5%' style='text-align:center'> Supprimer </th>*/
/* 	            </tr>*/
/* 	        </thead>*/
/* 	        <tbody>*/
/* 	        {% for entity in pagination %}*/
/* 	            <tr>*/
/* 	               <td >*/
/* 	                    {% if ( is_granted("ROLE_ENSEIGNANT")  and entity.isRedacteur(app.user.id) ) or */
/* 	                    	  ( is_granted("ROLE_RESPONSABLE") and entity.isRedacteur(app.user.id) ) or  */
/* 	                    	  ( is_granted("ROLE_ADMIN") )*/
/* 	                   	%} */
/* 	                   	<a class="btn1" href="{{ path('course_statut', { 'id': entity.id }) }}">*/
/* 		               {% endif  %}     */
/* 	                   	*/
/* 						{% if entity.publicationState is defined and entity.publicationState==1 %}*/
/* 		                		<span class="glyphicon glyphicon-eye-open" style='color:green' title='Public&nbsp;'> */
/* 		                {% else  %}                	*/
/* 								<span class="glyphicon glyphicon-eye-close" style='color:red'  title='Brouillon'> */
/* 		                {% endif  %}  	                   	*/
/* */
/* 	                    {% if ( is_granted("ROLE_ENSEIGNANT")  and entity.isRedacteur(app.user.id) ) or */
/* 	                    	  ( is_granted("ROLE_RESPONSABLE") and entity.isRedacteur(app.user.id) ) or  */
/* 	                    	  ( is_granted("ROLE_ADMIN") )*/
/* 	                   	%}	                   	*/
/* 	                   	</a>*/
/* 		               {% endif  %}  	                   	              */
/* 		                	  */
/* 	                </td>            */
/* 	            */
/* 	                <td> {{ entity.label }}</td>*/
/* 	                <td> {{ entity.title }}</td>*/
/* 	                <td style='text-align:center'>{{ entity.credits }}</td>  */
/* */
/* 	                <td style='text-align:center'>*/
/* 	                {% if entity.isOptional is defined and entity.isOptional=="1" %}	                */
/* 	               		**/
/* 	               	{% endif %}*/
/* 	                */
/* 	                </td>  */
/* 	                */
/* 	                <td  style="text-align:center"><a  class="btn1 btn-color4" href="{{ path('course_show', { 'id': entity.id }) }}"><span class="glyphicon glyphicon-eye-open"></span></a></td>	                */
/* 	                 */
/* */
/* 	                <td style='text-align:center'>*/
/* 	                    {% if ( is_granted("ROLE_ENSEIGNANT")  and entity.isRedacteur(app.user.id) ) or */
/* 	                    	  ( is_granted("ROLE_RESPONSABLE") and entity.isRedacteur(app.user.id) ) or  */
/* 	                    	  ( is_granted("ROLE_ADMIN") )*/
/* 	                   	%}*/
/* 	        				<a class="btn1 btn-color4" href="{{ path('courses_edit', { 'id': entity.id, 'from': 'list' }) }}"><span class="glyphicon glyphicon-edit"></span></a>                	        				*/
/* 	        			{% endif %} */
/* 	                </td>*/
/* 	                <td style='text-align:center'> */
/* 	                    {% if ( is_granted("ROLE_ENSEIGNANT")  and entity.isRedacteur(app.user.id) ) or */
/* 	                    	  ( is_granted("ROLE_RESPONSABLE") and entity.isRedacteur(app.user.id) ) or  */
/* 	                    	  ( is_granted("ROLE_ADMIN") )*/
/* 	                   	%}*/
/* 	                   	*/
/* 							<a  data-cache="false"  data-toggle="modal" class="btn1 btn-danger" href="{{ path('courses_del2', {id:entity.id}) }}" data-target="#myModal"><span class="glyphicon glyphicon-trash"></span> </a> 						                    */
/* 	               	*/
/* 	                   	*/
/* 	    					<!--               	*/
/* 		                	<a   class="btn_delete"  href="{{path('courses_delete',{id:entity.id})}}">*/
/* 		                		<span class="glyphicon glyphicon-remove"></span>*/
/* 		                	</a> */
/* 		                	--> */
/* 		                {% endif %}*/
/* 	                </td>*/
/* 	            </tr>*/
/* 	        {% endfor %}*/
/* 	        </tbody>*/
/* 	    </table>*/
/* 	</div>	    */
/*     */
/* 		<center>*/
/* 		{{ knp_pagination_render(pagination) }}*/
/* 		</center>	    */
/* 	*/
/* */
/*   	<script>            */
/* 		$(document.body).on('hidden.bs.modal', function () {*/
/* 				$('#myModal').removeData('bs.modal');	    	*/
/* 				$("#modal-content").html('');								*/
/* 					*/
/* 		});								 		                     */
/* 	</script>*/
/* 	  */
/* 	<div class="modal fade in " data-backdrop="static" id="myModal" tabindex="-1" role="dialog"  data-target=".bs-example-modal-lg" aria-labelledby="myModalLabel" aria-hidden="true">*/
/* 			<div class="modal-dialog modal-lg" style="z-index: 1050">  */
/* 				<div id="modal-content" class="modal-content"> 					  	*/
/* 			    </div>*/
/* 			</div>   */
/* 	</div>   	*/
/* 	*/
/* */
/* {% endblock %}*/
/* */
/* */
/* {% block scripts %}*/
/* 	{{ parent() }}*/
/* */
/* 	<script type="text/javascript">*/
/* 			*/
/* 		$('.btn_delete').click(function(e) {*/
/* 			e.preventDefault(); */
/* 			var path = $(this).attr('href');*/
/* 			$('#btn_comfirm_delete').attr('href', path);*/
/* 			$('#modal_confirm_delete').modal({'show':true});  */
/* 		}); */
/* 	</script> */
/* {% endblock %}*/
/* */
