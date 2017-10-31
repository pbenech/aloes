<?php

/* IfeAloesBundle:Program:index.html.twig */
class __TwigTemplate_e3e30269e75c15c06365de2752b07f6119f6f0dc4ca19b6edc69b5046cc47ec6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("IfeAloesBundle:Aloes:layout.html.twig", "IfeAloesBundle:Program:index.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'scripts' => array($this, 'block_scripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "IfeAloesBundle:Aloes:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["macro"] = $this->loadTemplate("::macro.html.twig", "IfeAloesBundle:Program:index.html.twig", 3);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 9
        echo "<div class='title-two1a col-md-9 col-sm-9'> 
\t\t\tListe des programmes
\t\t</div>
    \t<div class='title-two1b col-md-3 col-sm-3' style='text-align:right'>
\t\t\t";
        // line 13
        if (($this->env->getExtension('security')->isGranted("ROLE_RESPONSABLE") || $this->env->getExtension('security')->isGranted("ROLE_ADMIN"))) {
            echo "\t 

\t\t\t\t\t<div id=\"button_gen\" class=\"col-sm-12\" style=\"text-align:right\">   \t   
\t\t\t\t\t  <a class=\"btn1 btn-color4\" href=\"";
            // line 16
            echo $this->env->getExtension('routing')->getPath("programs_new");
            echo "\" >
\t\t\t\t\t  \t\t<span class=\"glyphicon glyphicon-plus-sign\"> Ajouter un programme
\t\t\t\t\t  </a> \t\t\t\t\t\t             
\t\t\t\t\t</div>  \t\t\t

\t\t\t";
        }
        // line 21
        echo "\t \t
    \t</div> \t\t
 
  \t<div class=\"col-sm-12 block3\">
    <table class=\"table  table-striped  table-hover\">
        <thead> 
            <th width='40%'> ";
        // line 27
        echo $this->env->getExtension('knp_pagination')->sortable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Titre", "p.title");
        echo "
            \t";
        // line 28
        echo $context["macro"]->gettri("p.title", (isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")), (isset($context["direction"]) ? $context["direction"] : $this->getContext($context, "direction")));
        echo "       \t            \t\t
            </th>
            <th width='30%'> ";
        // line 30
        echo $this->env->getExtension('knp_pagination')->sortable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Sigle", "p.label");
        echo "
            \t";
        // line 31
        echo $context["macro"]->gettri("p.label", (isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")), (isset($context["direction"]) ? $context["direction"] : $this->getContext($context, "direction")));
        echo " 
            </th> 
            <th width='10%' style=\"text-align:center\"> Visualiser</th>
            <th width='10%' style=\"text-align:center\"> Modifier</th>
            <th width='10%' style=\"text-align:center\"> Supprimer </th>
        </thead>
        <tbody>
        
\t";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 40
            echo "            <tr>
                <td> 
\t            \t";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "title", array()), "html", null, true);
            echo "
                </td>
                <td> ";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "label", array()), "html", null, true);
            echo "  </td>


                <td style=\"text-align:center\"> 
\t            <a  class=\"btn1 btn-color4\" href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("programs_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-eye-open\"></span></a>
                </td>

                <td style=\"text-align:center\">
                ";
            // line 52
            if ((($this->env->getExtension('security')->isGranted("ROLE_RESPONSABLE") && $this->getAttribute($context["entity"], "isResp", array(0 => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array())), "method")) || $this->env->getExtension('security')->isGranted("ROLE_ADMIN"))) {
                // line 55
                echo "        \t\t\t<a  class=\"btn1 btn-color4\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("programs_edit", array("id" => $this->getAttribute($context["entity"], "id", array()), "from" => "list")), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-edit\"></span></a>                
                ";
            }
            // line 57
            echo "                </td>                
                
                <td style=\"text-align:center\"> 
\t                ";
            // line 60
            if ((($this->env->getExtension('security')->isGranted("ROLE_RESPONSABLE") && $this->getAttribute($context["entity"], "isResp", array(0 => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array())), "method")) || $this->env->getExtension('security')->isGranted("ROLE_ADMIN"))) {
                // line 63
                echo "\t               \t
\t               \t
\t\t\t\t\t<a  data-cache=\"false\"  data-toggle=\"modal\" class=\"btn1 btn-danger\" href=\"";
                // line 65
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("programs_del2", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\" data-target=\"#myModal\"><span class=\"glyphicon glyphicon-trash\"></span> </a> \t\t\t\t\t\t                    
\t               \t
\t                ";
            }
            // line 68
            echo "                </td> 
            </tr>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "        </tbody>
    </table>
    </div>
\t<center>
\t";
        // line 75
        echo $this->env->getExtension('knp_pagination')->render((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
\t</center>
     
\t          
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

";
    }

    // line 98
    public function block_scripts($context, array $blocks = array())
    {
        // line 99
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
        return "IfeAloesBundle:Program:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 99,  180 => 98,  154 => 75,  148 => 71,  140 => 68,  134 => 65,  130 => 63,  128 => 60,  123 => 57,  117 => 55,  115 => 52,  108 => 48,  101 => 44,  96 => 42,  92 => 40,  88 => 39,  77 => 31,  73 => 30,  68 => 28,  64 => 27,  56 => 21,  47 => 16,  41 => 13,  35 => 9,  32 => 5,  28 => 1,  26 => 3,  11 => 1,);
    }
}
/* {% extends 'IfeAloesBundle:Aloes:layout.html.twig' %}*/
/* */
/* {% import "::macro.html.twig" as macro %}*/
/* */
/* {% block content -%}*/
/* */
/*     */
/*  	*/
/*     	<div class='title-two1a col-md-9 col-sm-9'> */
/* 			Liste des programmes*/
/* 		</div>*/
/*     	<div class='title-two1b col-md-3 col-sm-3' style='text-align:right'>*/
/* 			{% if is_granted("ROLE_RESPONSABLE") or is_granted("ROLE_ADMIN") %}	 */
/* */
/* 					<div id="button_gen" class="col-sm-12" style="text-align:right">   	   */
/* 					  <a class="btn1 btn-color4" href="{{path('programs_new')}}" >*/
/* 					  		<span class="glyphicon glyphicon-plus-sign"> Ajouter un programme*/
/* 					  </a> 						             */
/* 					</div>  			*/
/* */
/* 			{% endif %}	 	*/
/*     	</div> 		*/
/*  */
/*   	<div class="col-sm-12 block3">*/
/*     <table class="table  table-striped  table-hover">*/
/*         <thead> */
/*             <th width='40%'> {{ knp_pagination_sortable(pagination, 'Titre', 'p.title') }}*/
/*             	{{ macro.tri('p.title',sort,direction) }}       	            		*/
/*             </th>*/
/*             <th width='30%'> {{ knp_pagination_sortable(pagination, 'Sigle', 'p.label') }}*/
/*             	{{ macro.tri('p.label',sort,direction) }} */
/*             </th> */
/*             <th width='10%' style="text-align:center"> Visualiser</th>*/
/*             <th width='10%' style="text-align:center"> Modifier</th>*/
/*             <th width='10%' style="text-align:center"> Supprimer </th>*/
/*         </thead>*/
/*         <tbody>*/
/*         */
/* 	{% for entity in pagination %}*/
/*             <tr>*/
/*                 <td> */
/* 	            	{{ entity.title}}*/
/*                 </td>*/
/*                 <td> {{ entity.label }}  </td>*/
/* */
/* */
/*                 <td style="text-align:center"> */
/* 	            <a  class="btn1 btn-color4" href="{{path('programs_show', {'id':entity.id})}}"><span class="glyphicon glyphicon-eye-open"></span></a>*/
/*                 </td>*/
/* */
/*                 <td style="text-align:center">*/
/*                 {% if  ( is_granted("ROLE_RESPONSABLE") and entity.isResp(app.user.id)) or */
/*                 	   ( is_granted("ROLE_ADMIN") )*/
/*                 %}*/
/*         			<a  class="btn1 btn-color4" href="{{ path('programs_edit', { 'id': entity.id, 'from': 'list' }) }}"><span class="glyphicon glyphicon-edit"></span></a>                */
/*                 {% endif %}*/
/*                 </td>                */
/*                 */
/*                 <td style="text-align:center"> */
/* 	                {% if ( is_granted("ROLE_RESPONSABLE") and entity.isResp(app.user.id)) or*/
/*                 	   ( is_granted("ROLE_ADMIN") )	                 */
/* 	               	%}*/
/* 	               	*/
/* 	               	*/
/* 					<a  data-cache="false"  data-toggle="modal" class="btn1 btn-danger" href="{{ path('programs_del2', {id:entity.id}) }}" data-target="#myModal"><span class="glyphicon glyphicon-trash"></span> </a> 						                    */
/* 	               	*/
/* 	                {% endif %}*/
/*                 </td> */
/*             </tr>*/
/* 	{% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/*     </div>*/
/* 	<center>*/
/* 	{{ knp_pagination_render(pagination) }}*/
/* 	</center>*/
/*      */
/* 	          */
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
/* */
/* {% endblock %} */
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
/*     */
/* */
/* */
