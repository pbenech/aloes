<?php

/* IfeAloesBundle:Course:linking.html.twig */
class __TwigTemplate_58d85d9a308946944f80d723b1c7ef99af8cbe3c5e5c5171a1f38558ee8db557 extends Twig_Template
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
        // line 23
        echo "

";
        // line 50
        echo "

";
        // line 67
        echo "   
 
";
    }

    // line 1
    public function getlink_selection_form($__target_name__ = null, $__form_action__ = null, $__source__ = null, $__targetParents__ = null, $__menu__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "target_name" => $__target_name__,
            "form_action" => $__form_action__,
            "source" => $__source__,
            "targetParents" => $__targetParents__,
            "menu" => $__menu__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    <form action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["form_action"]) ? $context["form_action"] : $this->getContext($context, "form_action")), array("id" => $this->getAttribute((isset($context["source"]) ? $context["source"] : $this->getContext($context, "source")), "id", array()), "menu" => (isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")))), "html", null, true);
            echo "\" method=\"POST\">
        ";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["targetParents"]) ? $context["targetParents"] : $this->getContext($context, "targetParents")));
            foreach ($context['_seq'] as $context["_key"] => $context["parent"]) {
                // line 4
                echo "            <fieldset>
                <legend> ";
                // line 5
                echo twig_escape_filter($this->env, $this->getAttribute($context["parent"], "title", array()), "html", null, true);
                echo "</legend>
                ";
                // line 6
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["parent"], "children", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["target"]) {
                    // line 7
                    echo "                    <div class=\"checkbox\">
                        <label>  
                            <input name=\"";
                    // line 9
                    echo twig_escape_filter($this->env, ((((isset($context["target_name"]) ? $context["target_name"] : $this->getContext($context, "target_name")) . "[") . $this->getAttribute($context["target"], "id", array())) . "]"), "html", null, true);
                    echo "\"
                                   type=\"checkbox\"
                                   ";
                    // line 11
                    echo (($this->getAttribute($context["target"], "isSelected", array())) ? ("checked") : (""));
                    echo ">
                            ";
                    // line 12
                    echo twig_escape_filter($this->env, $this->getAttribute($context["target"], "title", array()), "html", null, true);
                    echo "  
                        </label>
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['target'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 16
                echo "            </fieldset>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['parent'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "        <button class=\"btn btn-success\" type=\"submit\"> 
            Enregistrer la sélection 
        </button>
    </form>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 25
    public function getlink_rating_form($__rating_form__ = null, $__relation_attribute__ = null, $__target_entity_name__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "rating_form" => $__rating_form__,
            "relation_attribute" => $__relation_attribute__,
            "target_entity_name" => $__target_entity_name__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 26
            echo "
    ";
            // line 27
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["rating_form"]) ? $context["rating_form"] : $this->getContext($context, "rating_form")), 'form_start');
            echo "

    <table class=\"table\" >
        <tbody>
            ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["rating_form"]) ? $context["rating_form"] : $this->getContext($context, "rating_form")), (isset($context["relation_attribute"]) ? $context["relation_attribute"] : $this->getContext($context, "relation_attribute"))));
            foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
                // line 32
                echo "                ";
                $context["linked_entity"] = $this->getAttribute($this->getAttribute($this->getAttribute($context["link"], "vars", array()), "data", array()), (isset($context["target_entity_name"]) ? $context["target_entity_name"] : $this->getContext($context, "target_entity_name")));
                // line 33
                echo "                <tr>
                    <td>
                        ";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["linked_entity"]) ? $context["linked_entity"] : $this->getContext($context, "linked_entity")), "title", array()), "html", null, true);
                echo "
                    </td>
                    <td>
                        ";
                // line 38
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["link"], "rating", array()), 'widget');
                echo "                
                    </td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "           ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["rating_form"]) ? $context["rating_form"] : $this->getContext($context, "rating_form")), "_token", array()), 'widget');
            echo "      
        </tbody>

    </table>
    ";
            // line 46
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["rating_form"]) ? $context["rating_form"] : $this->getContext($context, "rating_form")), "submit", array()), 'row');
            echo "
    ";
            // line 47
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["rating_form"]) ? $context["rating_form"] : $this->getContext($context, "rating_form")), 'form_end', array("render_rest" => false));
            echo "

";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 52
    public function getlink_weights($__targets__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "targets" => $__targets__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 53
            echo "    ";
            $context["links"] = $this;
            // line 54
            echo "
    <table class=\"table\">
        <tbody>
            ";
            // line 57
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["targets"]) ? $context["targets"] : $this->getContext($context, "targets")));
            foreach ($context['_seq'] as $context["_key"] => $context["target"]) {
                // line 58
                echo "                <tr>
                    <td>";
                // line 59
                echo twig_escape_filter($this->env, $this->getAttribute($context["target"], "title", array()), "html", null, true);
                echo "</td>
                    <td>";
                // line 60
                echo $context["links"]->getprogress_bar($this->getAttribute($context["target"], "weight", array()));
                echo "</td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['target'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "        </tbody>
    </table>

";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 69
    public function getprogress_bar($__weight__ = null, $__type__ = "info", ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "weight" => $__weight__,
            "type" => $__type__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 70
            echo "  <div class=\"progress\">  
        <div class=\"";
            // line 71
            echo twig_escape_filter($this->env, ("progress-bar progress-bar-" . (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type"))), "html", null, true);
            echo "\"
             role=\"progressbar\" 
             style=\"width:";
            // line 73
            echo twig_escape_filter($this->env, ((isset($context["weight"]) ? $context["weight"] : $this->getContext($context, "weight")) * 100), "html", null, true);
            echo "%;\">
        </div>
        <span class=\"text-muted\">";
            // line 75
            echo twig_escape_filter($this->env, ((isset($context["weight"]) ? $context["weight"] : $this->getContext($context, "weight")) * 100), "html", null, true);
            echo " %</span>
  </div>    
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "IfeAloesBundle:Course:linking.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  271 => 75,  266 => 73,  261 => 71,  258 => 70,  245 => 69,  231 => 63,  222 => 60,  218 => 59,  215 => 58,  211 => 57,  206 => 54,  203 => 53,  191 => 52,  177 => 47,  173 => 46,  165 => 42,  155 => 38,  149 => 35,  145 => 33,  142 => 32,  138 => 31,  131 => 27,  128 => 26,  114 => 25,  99 => 18,  92 => 16,  82 => 12,  78 => 11,  73 => 9,  69 => 7,  65 => 6,  61 => 5,  58 => 4,  54 => 3,  49 => 2,  33 => 1,  27 => 67,  23 => 50,  19 => 23,);
    }
}
/* {% macro link_selection_form(target_name, form_action, source, targetParents,menu) %}*/
/*     <form action="{{path(form_action, {id:source.id,menu:menu})}}" method="POST">*/
/*         {% for parent in targetParents %}*/
/*             <fieldset>*/
/*                 <legend> {{ parent.title }}</legend>*/
/*                 {% for target in parent.children %}*/
/*                     <div class="checkbox">*/
/*                         <label>  */
/*                             <input name="{{ "#{target_name}[#{target.id}]" }}"*/
/*                                    type="checkbox"*/
/*                                    {{ (target.isSelected)?'checked':'' }}>*/
/*                             {{ target.title }}  */
/*                         </label>*/
/*                     </div>*/
/*                 {% endfor %}*/
/*             </fieldset>*/
/*         {% endfor %}*/
/*         <button class="btn btn-success" type="submit"> */
/*             Enregistrer la sélection */
/*         </button>*/
/*     </form>*/
/* {% endmacro %}*/
/* */
/* */
/* {% macro link_rating_form(rating_form, relation_attribute, target_entity_name) %}*/
/* */
/*     {{ form_start(rating_form) }}*/
/* */
/*     <table class="table" >*/
/*         <tbody>*/
/*             {% for link in attribute(rating_form, relation_attribute) %}*/
/*                 {% set linked_entity = attribute(link.vars.data, target_entity_name) %}*/
/*                 <tr>*/
/*                     <td>*/
/*                         {{ linked_entity.title }}*/
/*                     </td>*/
/*                     <td>*/
/*                         {{  form_widget(link.rating) }}                */
/*                     </td>*/
/*                 </tr>*/
/*             {% endfor %}*/
/*            {{ form_widget(rating_form._token)  }}      */
/*         </tbody>*/
/* */
/*     </table>*/
/*     {{ form_row(rating_form.submit) }}*/
/*     {{ form_end(rating_form, {'render_rest':false}) }}*/
/* */
/* {% endmacro %}*/
/* */
/* */
/* {% macro link_weights(targets) %}*/
/*     {% import _self as links %}*/
/* */
/*     <table class="table">*/
/*         <tbody>*/
/*             {% for target in targets %}*/
/*                 <tr>*/
/*                     <td>{{ target.title }}</td>*/
/*                     <td>{{ links.progress_bar(target.weight) }}</td>*/
/*                 </tr>*/
/*             {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/* {% endmacro %}*/
/*    */
/*  */
/* {% macro progress_bar(weight, type = 'info') %}*/
/*   <div class="progress">  */
/*         <div class="{{ "progress-bar progress-bar-"~type }}"*/
/*              role="progressbar" */
/*              style="width:{{weight * 100 }}%;">*/
/*         </div>*/
/*         <span class="text-muted">{{ weight * 100 }} %</span>*/
/*   </div>    */
/* {% endmacro %}*/
/* */
