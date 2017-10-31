<?php

/* SCDatetimepickerBundle:Form:div_layout.html.twig */
class __TwigTemplate_02efa35b32e3da07f7f7279ee6be360bf1121cbfb851194cea74de4e449d4c6d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'collot_datetime_widget' => array($this, 'block_collot_datetime_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "

";
        // line 3
        $this->displayBlock('collot_datetime_widget', $context, $blocks);
        // line 24
        echo "

";
    }

    // line 3
    public function block_collot_datetime_widget($context, array $blocks = array())
    {
        // line 4
        ob_start();
        // line 5
        echo "    ";
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 6
            echo "        ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
    ";
        } else {
            // line 8
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 9
            echo twig_replace_filter((isset($context["date_pattern"]) ? $context["date_pattern"] : $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 10
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 11
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 12
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 13
            echo "

            ";
            // line 15
            $context["attr"] = twig_array_merge(array("size" => 10), (isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
            // line 16
            echo "            ";
            $context["id"] = ("datepicker_" . (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")));
            // line 17
            echo "            ";
            $context["value"] = "";
            // line 18
            echo "            ";
            $context["full_name"] = ("datepicker_" . (isset($context["full_name"]) ? $context["full_name"] : $this->getContext($context, "full_name")));
            // line 19
            echo "            ";
            $this->displayBlock("hidden_widget", $context, $blocks);
            echo "
        </div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "SCDatetimepickerBundle:Form:div_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  71 => 19,  68 => 18,  65 => 17,  62 => 16,  60 => 15,  56 => 13,  54 => 12,  53 => 11,  52 => 10,  51 => 9,  46 => 8,  40 => 6,  37 => 5,  35 => 4,  32 => 3,  26 => 24,  24 => 3,  20 => 1,);
    }
}
/* */
/* */
/* {% block collot_datetime_widget %}*/
/* {% spaceless %}*/
/*     {% if widget == "single_text" %}*/
/*         {{ block("form_widget_simple") }}*/
/*     {% else %}*/
/*         <div {{ block("widget_container_attributes") }}>*/
/*             {{ date_pattern|replace({*/
/*                 "{{ year }}":  form_widget(form.year),*/
/*                 "{{ month }}": form_widget(form.month),*/
/*                 "{{ day }}":   form_widget(form.day),*/
/*             })|raw }}*/
/* */
/*             {% set attr = {"size": 10}|merge(attr) %}*/
/*             {% set id = "datepicker_" ~ id %}*/
/*             {% set value = '' %}*/
/*             {% set full_name = "datepicker_" ~ full_name %}*/
/*             {{ block("hidden_widget") }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endspaceless %}*/
/* {% endblock collot_datetime_widget %}*/
/* */
/* */
/* */
