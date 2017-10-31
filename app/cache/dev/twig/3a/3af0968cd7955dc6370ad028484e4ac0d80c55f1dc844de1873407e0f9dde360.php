<?php

/* IfeAloesBundle:Aloes:edit-general-item.html.twig */
class __TwigTemplate_9084593b7471920d8647591540c2d8438a888d3f1b5f20edda538b60252fce03 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'parent_form' => array($this, 'block_parent_form'),
            'child_form' => array($this, 'block_child_form'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"\">


    ";
        // line 4
        $this->displayBlock("parent_title", $context, $blocks);
        echo "

\t<fieldset>

    ";
        // line 9
        echo "    ";
        $this->displayBlock('parent_form', $context, $blocks);
        // line 18
        echo "
    ";
        // line 19
        if ((twig_length_filter($this->env, (isset($context["children"]) ? $context["children"] : $this->getContext($context, "children"))) > 0)) {
            // line 20
            echo "
    ";
            // line 21
            $this->displayBlock("children_title", $context, $blocks);
            echo "
    <fieldset>
\t     <div class=\"container-fluid\">    
\t        <div class=\"row\">
\t            ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["children"]) ? $context["children"] : $this->getContext($context, "children")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 26
                echo "\t                <div class=\"col-md-12\"> ";
                $this->displayBlock('child_form', $context, $blocks);
                echo "</div> 
\t            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "\t        </div> 
\t    </div>    
    </fieldset>    
    ";
        }
        // line 32
        echo "    
    <div class=\"row\">
    \t<div class=\"col-md-3\">    
\t\t    ";
        // line 35
        echo         // line 36
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "submit", array()), 'row', array("attr" => array("class" => "btn btn-success"), "label" => "Enregistrer"));
        // line 40
        echo "
\t\t    ";
        // line 41
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end', array("render_rest" => false));
        echo "
\t\t</div>
\t\t
    ";
        // line 45
        echo "     \t<div class=\"col-md-3\">     \t
\t\t    ";
        // line 46
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
\t\t
\t\t    ";
        // line 48
        echo         // line 49
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), "submit", array()), 'row', array("attr" => array("class" => "btn btn-danger"), "label" => "Supprimer"));
        // line 53
        echo "
\t\t
\t\t    ";
        // line 55
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
    \t</div>
    \t<div class=\"col-md-3\">
    \t\t ";
        // line 58
        $this->displayBlock("back_to_index", $context, $blocks);
        echo "
    \t</div>    \t
    </div>

\t</fieldset>
   
</div>
";
    }

    // line 9
    public function block_parent_form($context, array $blocks = array())
    {
        // line 10
        echo "        ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
    \t<fieldset> 
        \t";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "title", array()), 'widget');
        echo "
        \t";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "title", array()), 'errors');
        echo "
        \t
\t\t\t";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "_token", array()), 'widget');
        echo "        \t
     \t</fieldset>      
    ";
    }

    // line 26
    public function block_child_form($context, array $blocks = array())
    {
        echo " ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "title", array()), 'widget');
        echo "        \t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "title", array()), 'errors');
        echo "<br/> ";
    }

    public function getTemplateName()
    {
        return "IfeAloesBundle:Aloes:edit-general-item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 26,  159 => 15,  154 => 13,  150 => 12,  144 => 10,  141 => 9,  129 => 58,  123 => 55,  119 => 53,  117 => 49,  116 => 48,  111 => 46,  108 => 45,  102 => 41,  99 => 40,  97 => 36,  96 => 35,  91 => 32,  85 => 28,  68 => 26,  51 => 25,  44 => 21,  41 => 20,  39 => 19,  36 => 18,  33 => 9,  26 => 4,  21 => 1,);
    }
}
/* <div class="">*/
/* */
/* */
/*     {{ block('parent_title') }}*/
/* */
/* 	<fieldset>*/
/* */
/*     {# Edit #}*/
/*     {% block parent_form %}*/
/*         {{ form_start(edit_form) }}*/
/*     	<fieldset> */
/*         	{{ form_widget(edit_form.title) }}*/
/*         	{{ form_errors(edit_form.title) }}*/
/*         	*/
/* 			{{ form_widget(edit_form._token) }}        	*/
/*      	</fieldset>      */
/*     {% endblock %}*/
/* */
/*     {% if children|length > 0 %}*/
/* */
/*     {{ block('children_title') }}*/
/*     <fieldset>*/
/* 	     <div class="container-fluid">    */
/* 	        <div class="row">*/
/* 	            {% for child in children %}*/
/* 	                <div class="col-md-12"> {% block child_form %} {{ form_widget(child.title) }}        	{{ form_errors(child.title) }}<br/> {% endblock %}</div> */
/* 	            {% endfor %}*/
/* 	        </div> */
/* 	    </div>    */
/*     </fieldset>    */
/*     {% endif %}*/
/*     */
/*     <div class="row">*/
/*     	<div class="col-md-3">    */
/* 		    {{ */
/* 		        form_row(edit_form.submit, {*/
/* 		            'attr' : { 'class':'btn btn-success'},*/
/* 		            'label': 'Enregistrer'*/
/* 		        }) */
/* 		    }}*/
/* 		    {{ form_end(edit_form, {'render_rest': false}) }}*/
/* 		</div>*/
/* 		*/
/*     {# Delete #}*/
/*      	<div class="col-md-3">     	*/
/* 		    {{ form_start(delete_form) }}*/
/* 		*/
/* 		    {{ */
/* 		        form_row(delete_form.submit, {*/
/* 		            'attr' : { 'class':'btn btn-danger'},*/
/* 		            'label': 'Supprimer'*/
/* 		        }) */
/* 		    }}*/
/* 		*/
/* 		    {{ form_end(delete_form) }}*/
/*     	</div>*/
/*     	<div class="col-md-3">*/
/*     		 {{ block('back_to_index') }}*/
/*     	</div>    	*/
/*     </div>*/
/* */
/* 	</fieldset>*/
/*    */
/* </div>*/
/* */
