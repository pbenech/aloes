<?php

/* IfeAloesBundle:Course:delAjaxCourse.html.twig */
class __TwigTemplate_cdee94af370e093f9a70a3cb88b189a9fe25f13b5ad1bf320d1b7d2b6afbf73e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"modal-header color4\"> 
\t<b>Suppression programme </b><button type=\"button\" id=\"close\"  class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
</div> 
 
<div id=\"modal-body\" class=\"modal-body\" >

    Etes-vous sûr de vouloir supprimer définitivement le cours suivant  ?
     
    <br/>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "title", array()), "html", null, true);
        echo "  

\t<br/>\t
\t    
    ";
        // line 13
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
\t<hr/>
    ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), "delete", array()), 'widget');
        echo "
      
    ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), "nodelete", array()), 'widget');
        echo "
      
    ";
        // line 19
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
    
\t<script type=\"text/javascript\">\t
\t\t\t 
\t\t\t\$(\"#form_nodelete\").click(function() {
\t\t\t\t\$('#myModal').modal('hide');\t         \t\t\t\t 
\t\t\t\treturn false;\t\t\t\t\t\t\t
\t\t\t});\t\t

\t</script>
</div> 
";
    }

    public function getTemplateName()
    {
        return "IfeAloesBundle:Course:delAjaxCourse.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 19,  46 => 17,  41 => 15,  36 => 13,  29 => 9,  19 => 1,);
    }
}
/* <div class="modal-header color4"> */
/* 	<b>Suppression programme </b><button type="button" id="close"  class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>*/
/* </div> */
/*  */
/* <div id="modal-body" class="modal-body" >*/
/* */
/*     Etes-vous sûr de vouloir supprimer définitivement le cours suivant  ?*/
/*      */
/*     <br/>{{ entity.title }}  */
/* */
/* 	<br/>	*/
/* 	    */
/*     {{ form_start(delete_form) }}*/
/* 	<hr/>*/
/*     {{ form_widget(delete_form.delete) }}*/
/*       */
/*     {{ form_widget(delete_form.nodelete) }}*/
/*       */
/*     {{ form_end(delete_form) }}*/
/*     */
/* 	<script type="text/javascript">	*/
/* 			 */
/* 			$("#form_nodelete").click(function() {*/
/* 				$('#myModal').modal('hide');	         				 */
/* 				return false;							*/
/* 			});		*/
/* */
/* 	</script>*/
/* </div> */
/* */
