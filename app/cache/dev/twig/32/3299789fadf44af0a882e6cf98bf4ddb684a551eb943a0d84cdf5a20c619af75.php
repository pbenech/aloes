<?php

/* IfeAloesBundle:Parcours:index.html.twig */
class __TwigTemplate_72b063b4793c7cb7399e524135aebfdc37a21fc8fd24aa56f8b97ac11db202e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("IfeAloesBundle:Program:layout.html.twig", "IfeAloesBundle:Parcours:index.html.twig", 1);
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
        $context["macro"] = $this->loadTemplate("::macro.html.twig", "IfeAloesBundle:Parcours:index.html.twig", 3);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "<div class='title-two1a col-md-9 col-sm-9'> 
\t\t\tListe des parcours
\t\t</div>
    \t<div class='title-two1b col-md-3 col-sm-3' style='text-align:right'>
\t\t \t";
        // line 11
        if (((($this->env->getExtension('security')->isGranted("ROLE_ENSEIGNANT") && $this->getAttribute((isset($context["program"]) ? $context["program"] : $this->getContext($context, "program")), "isEnseignant", array(0 => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array())), "method")) || ($this->env->getExtension('security')->isGranted("ROLE_RESPONSABLE") && $this->getAttribute(        // line 12
(isset($context["program"]) ? $context["program"] : $this->getContext($context, "program")), "isResp", array(0 => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array())), "method"))) || $this->env->getExtension('security')->isGranted("ROLE_ADMIN"))) {
            // line 14
            echo "\t
\t\t \t

\t\t\t\t\t<div id=\"button_gen\" class=\"col-sm-12\" style=\"text-align:right\">   \t   
\t\t\t\t\t  <a class=\"btn1 btn-color4\" href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("parcours_new", array("id" => $this->getAttribute((isset($context["program"]) ? $context["program"] : $this->getContext($context, "program")), "id", array()))), "html", null, true);
            echo "\" >
\t\t\t\t\t  \t\t<span class=\"glyphicon glyphicon-plus-sign\"> Ajouter un parcours 
\t\t\t\t\t  </a> \t\t\t\t\t\t             
\t\t\t\t\t</div>  \t\t\t \t
\t\t\t\t\t
\t\t\t";
        }
        // line 23
        echo "\t \t
    \t</div> \t
 
\t
\t<div class=\"col-sm-12 block3\">
\t    <table class=\"table   table-striped  table-hover\">
\t        <thead>
\t            <tr>
\t                <th width='85%'>";
        // line 31
        echo $this->env->getExtension('knp_pagination')->sortable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Parcours", "title");
        echo "
  
\t                </th>
                
\t            
\t                <th width='5%' style='text-align:center'> Modifier </th>
\t                <th width='5%' style='text-align:center'> Supprimer </th>
\t            </tr>
\t        </thead>
\t        <tbody> 
 
\t\t\t";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 43
            echo "\t\t            <tr>
\t\t                <td> 
\t\t\t            \t";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "title", array()), "html", null, true);
            echo "
\t\t                </td>

\t\t                <td>
\t\t                \t<a class=\"btn1 btn-color4\" href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("parcours_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-edit\"></span></a>                \t        \t\t\t\t
\t\t                </td>\t\t
\t\t                <td>\t\t                
\t\t                \t<a  data-cache=\"false\"  data-toggle=\"modal\" class=\"btn1 btn-danger\" href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("parcours_del", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" data-target=\"#myModal\"><span class=\"glyphicon glyphicon-trash\"></span> </a> \t\t\t\t\t\t                    
\t\t                </td>                
\t\t            </tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "  
\t        </tbody>
\t    </table>
\t</div>\t     
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
\t 
    
";
    }

    // line 81
    public function block_scripts($context, array $blocks = array())
    {
        // line 82
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
        return "IfeAloesBundle:Parcours:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 82,  141 => 81,  114 => 55,  104 => 52,  98 => 49,  91 => 45,  87 => 43,  83 => 42,  69 => 31,  59 => 23,  50 => 18,  44 => 14,  42 => 12,  41 => 11,  35 => 7,  32 => 5,  28 => 1,  26 => 3,  11 => 1,);
    }
}
/* {% extends 'IfeAloesBundle:Program:layout.html.twig' %}*/
/* */
/* {% import "::macro.html.twig" as macro %}*/
/* */
/* {% block content -%}*/
/* */
/*     	<div class='title-two1a col-md-9 col-sm-9'> */
/* 			Liste des parcours*/
/* 		</div>*/
/*     	<div class='title-two1b col-md-3 col-sm-3' style='text-align:right'>*/
/* 		 	{% if    ( is_granted("ROLE_ENSEIGNANT")  and program.isEnseignant(app.user.id)) or		 */
/* 		 			 ( is_granted("ROLE_RESPONSABLE") and program.isResp(app.user.id) ) or */
/* 		             ( is_granted("ROLE_ADMIN") )*/
/* 		 	%}	*/
/* 		 	*/
/* */
/* 					<div id="button_gen" class="col-sm-12" style="text-align:right">   	   */
/* 					  <a class="btn1 btn-color4" href="{{ path('parcours_new', {id:program.id}) }}" >*/
/* 					  		<span class="glyphicon glyphicon-plus-sign"> Ajouter un parcours */
/* 					  </a> 						             */
/* 					</div>  			 	*/
/* 					*/
/* 			{% endif %}	 	*/
/*     	</div> 	*/
/*  */
/* 	*/
/* 	<div class="col-sm-12 block3">*/
/* 	    <table class="table   table-striped  table-hover">*/
/* 	        <thead>*/
/* 	            <tr>*/
/* 	                <th width='85%'>{{ knp_pagination_sortable(pagination, 'Parcours', 'title') }}*/
/*   */
/* 	                </th>*/
/*                 */
/* 	            */
/* 	                <th width='5%' style='text-align:center'> Modifier </th>*/
/* 	                <th width='5%' style='text-align:center'> Supprimer </th>*/
/* 	            </tr>*/
/* 	        </thead>*/
/* 	        <tbody> */
/*  */
/* 			{% for entity in pagination %}*/
/* 		            <tr>*/
/* 		                <td> */
/* 			            	{{ entity.title}}*/
/* 		                </td>*/
/* */
/* 		                <td>*/
/* 		                	<a class="btn1 btn-color4" href="{{ path('parcours_edit', { 'id': entity.id}) }}"><span class="glyphicon glyphicon-edit"></span></a>                	        				*/
/* 		                </td>		*/
/* 		                <td>		                */
/* 		                	<a  data-cache="false"  data-toggle="modal" class="btn1 btn-danger" href="{{ path('parcours_del', {id:entity.id}) }}" data-target="#myModal"><span class="glyphicon glyphicon-trash"></span> </a> 						                    */
/* 		                </td>                */
/* 		            </tr>*/
/* 			{% endfor %}  */
/* 	        </tbody>*/
/* 	    </table>*/
/* 	</div>	     */
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
/* 	 */
/*     */
/* {% endblock %} */
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
/* */
