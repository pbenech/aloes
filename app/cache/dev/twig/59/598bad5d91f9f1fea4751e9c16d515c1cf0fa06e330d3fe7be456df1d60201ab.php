<?php

/* SCDatetimepickerBundle:Form:jquery_layout.html.twig */
class __TwigTemplate_2f10cc9710589e7af43d74ae9418976617404ee9d4fdfeb90ab0ce1cb549fd13 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_javascript' => array($this, 'block_form_javascript'),
            'field_javascript' => array($this, 'block_field_javascript'),
            'button_javascript' => array($this, 'block_button_javascript'),
            'collot_datetime_javascript' => array($this, 'block_collot_datetime_javascript'),
            'collot_datetime_javascript_prototype' => array($this, 'block_collot_datetime_javascript_prototype'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('form_javascript', $context, $blocks);
        // line 8
        echo "
";
        // line 9
        $this->displayBlock('field_javascript', $context, $blocks);
        // line 10
        echo "
";
        // line 11
        $this->displayBlock('button_javascript', $context, $blocks);
        // line 12
        echo "
";
        // line 13
        $this->displayBlock('collot_datetime_javascript', $context, $blocks);
    }

    // line 1
    public function block_form_javascript($context, array $blocks = array())
    {
        // line 2
        ob_start();
        // line 3
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 4
            echo "        ";
            echo $this->env->getExtension('collot.twig.extension.form')->renderJavascript($context["child"]);
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 9
    public function block_field_javascript($context, array $blocks = array())
    {
        echo "";
    }

    // line 11
    public function block_button_javascript($context, array $blocks = array())
    {
        echo "";
    }

    // line 13
    public function block_collot_datetime_javascript($context, array $blocks = array())
    {
        // line 14
        ob_start();
        // line 15
        echo "
    <script type=\"text/javascript\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/scdatetimepicker/js/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\" charset=\"UTF-8\"></script>
    ";
        // line 17
        if ($this->getAttribute((isset($context["pickerOptions"]) ? $context["pickerOptions"] : null), "language", array(), "any", true, true)) {
            // line 18
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("bundles/scdatetimepicker/js/locales/bootstrap-datetimepicker." . $this->getAttribute((isset($context["pickerOptions"]) ? $context["pickerOptions"] : $this->getContext($context, "pickerOptions")), "language", array())) . ".js")), "html", null, true);
            echo "\" charset=\"UTF-8\"></script>
    ";
        }
        // line 20
        echo "    
    <script type=\"text/javascript\">
        jQuery(document).ready(function(\$) {
            \$field = \$('#";
        // line 23
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) != "single_text")) {
            echo "datepicker_";
        }
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "');
        
            ";
        // line 25
        $this->displayBlock('collot_datetime_javascript_prototype', $context, $blocks);
        // line 42
        echo "        });
    </script>
    
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 25
    public function block_collot_datetime_javascript_prototype($context, array $blocks = array())
    {
        // line 26
        echo "
                ";
        // line 27
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) != "single_text")) {
            // line 28
            echo "                    var \$year = \$('#";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year", array()), "vars", array()), "id", array()), "html", null, true);
            echo "');
                    var \$month = \$('#";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "month", array()), "vars", array()), "id", array()), "html", null, true);
            echo "');
                    var \$day = \$('#";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "day", array()), "vars", array()), "id", array()), "html", null, true);
            echo "');

                    \$configs.onSelect = function(date) {
                        \$year.val(parseInt(date.substring(0, 4), 10));
                        \$month.val(parseInt(date.substring(5, 7), 10));
                        \$day.val(parseInt(date.substring(8), 10));
                    }
                ";
        }
        // line 38
        echo "
                \$field.datetimepicker(";
        // line 39
        echo twig_jsonencode_filter((isset($context["pickerOptions"]) ? $context["pickerOptions"] : $this->getContext($context, "pickerOptions")));
        echo ");  

            ";
    }

    public function getTemplateName()
    {
        return "SCDatetimepickerBundle:Form:jquery_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  151 => 39,  148 => 38,  137 => 30,  133 => 29,  128 => 28,  126 => 27,  123 => 26,  120 => 25,  112 => 42,  110 => 25,  102 => 23,  97 => 20,  91 => 18,  89 => 17,  85 => 16,  82 => 15,  80 => 14,  77 => 13,  71 => 11,  65 => 9,  53 => 4,  48 => 3,  46 => 2,  43 => 1,  39 => 13,  36 => 12,  34 => 11,  31 => 10,  29 => 9,  26 => 8,  24 => 1,);
    }
}
/* {% block form_javascript %}*/
/* {% spaceless %}*/
/*     {% for child in form %}*/
/*         {{ form_javascript(child) }}*/
/*     {% endfor %}*/
/* {% endspaceless %}*/
/* {% endblock form_javascript %}*/
/* */
/* {% block field_javascript "" %}*/
/* */
/* {% block button_javascript "" %}*/
/* */
/* {% block collot_datetime_javascript %}*/
/* {% spaceless %}*/
/* */
/*     <script type="text/javascript" src="{{ asset('bundles/scdatetimepicker/js/bootstrap-datetimepicker.min.js') }}" charset="UTF-8"></script>*/
/*     {% if pickerOptions.language is defined %}*/
/*         <script type="text/javascript" src="{{ asset('bundles/scdatetimepicker/js/locales/bootstrap-datetimepicker.'~ pickerOptions.language ~'.js') }}" charset="UTF-8"></script>*/
/*     {% endif %}*/
/*     */
/*     <script type="text/javascript">*/
/*         jQuery(document).ready(function($) {*/
/*             $field = $('#{% if widget != "single_text" %}datepicker_{% endif %}{{ id }}');*/
/*         */
/*             {% block collot_datetime_javascript_prototype %}*/
/* */
/*                 {% if widget != "single_text" %}*/
/*                     var $year = $('#{{ form.year.vars.id }}');*/
/*                     var $month = $('#{{ form.month.vars.id }}');*/
/*                     var $day = $('#{{ form.day.vars.id }}');*/
/* */
/*                     $configs.onSelect = function(date) {*/
/*                         $year.val(parseInt(date.substring(0, 4), 10));*/
/*                         $month.val(parseInt(date.substring(5, 7), 10));*/
/*                         $day.val(parseInt(date.substring(8), 10));*/
/*                     }*/
/*                 {% endif %}*/
/* */
/*                 $field.datetimepicker({{ pickerOptions|json_encode|raw }});  */
/* */
/*             {% endblock %}*/
/*         });*/
/*     </script>*/
/*     */
/* {% endspaceless %}*/
/* {% endblock %}*/
/* */
