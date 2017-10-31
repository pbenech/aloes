<?php

/* IfeAloesBundle:Resp:user.html.twig */
class __TwigTemplate_71ab81b4bf8463e5c149dd63b8c45560d692215a7422f66e79c0b7f250f02d99 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("IfeAloesBundle:Aloes:layout.html.twig", "IfeAloesBundle:Resp:user.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'checkbox_hierarchy_widget' => array($this, 'block_checkbox_hierarchy_widget'),
            'scripts' => array($this, 'block_scripts'),
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

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "<div class='title-one'> Ajout d'un utilisateur  </div>

\t   \t \t\t\t\t\t\t

\t<fieldset>


    <table class=\"table\">
        <thead>
  
        </thead>
        <tbody> 
\t\t\t<form class=\"form-inline\" id=\"roles\" action=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("resp_utilisateurs_create_user", array("page" => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "sort" => (isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")), "direction" => (isset($context["direction"]) ? $context["direction"] : $this->getContext($context, "direction")))), "html", null, true);
        echo "\" method=\"post\">\t

\t\t\t\t<div class='col-md-2'> \t  \t  
\t\t\t    \t";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "givenname", array()), 'label');
        echo "
\t\t\t\t</div> \t  \t\t    \t
\t\t\t\t<div class='col-md-10'> \t  \t  
\t\t\t    \t";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "givenname", array()), 'widget');
        echo "
\t\t\t \t    ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "givenname", array()), 'errors');
        echo "\t
\t\t\t \t    <br/>
\t\t\t\t</div> \t

\t\t\t\t<div class='col-md-2'> \t  \t  
\t\t\t    \t";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sn", array()), 'label');
        echo "
\t\t\t\t</div> \t  \t\t    \t
\t\t\t\t<div class='col-md-10'> \t  \t  
\t\t\t    \t";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sn", array()), 'widget');
        echo "
\t\t\t \t    ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sn", array()), 'errors');
        echo "\t
\t\t\t \t    <br/>
\t\t\t\t</div> \t


\t\t\t\t<div class='col-md-2'> \t  \t  
\t\t\t    \t";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'label');
        echo "
\t\t\t\t</div> \t  \t\t    \t
\t\t\t\t<div class='col-md-10'> \t  \t  
\t\t\t    \t";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget');
        echo "
\t\t\t \t    ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'errors');
        echo "\t
\t\t\t \t    <br/>
\t\t\t\t</div> \t

\t\t\t\t<div class='col-md-2'> \t  \t  
\t\t\t    \t";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label');
        echo "
\t\t\t\t</div> \t  \t\t    \t
\t\t\t\t<div class='col-md-10'> \t  \t  
\t\t\t    \t";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget');
        echo "
\t\t\t \t    ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "\t
\t\t\t \t    <br/>
\t\t\t\t</div> \t
\t\t\t\t\t\t\t\t

\t\t\t\t<div class='col-md-2'> \t  \t  
\t\t\t\t\t";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "courses3", array()), 'label');
        echo "
\t\t\t\t</div> \t  \t\t    \t
\t\t\t\t<div class='col-md-10'> \t  \t  
\t\t\t\t\t";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "courses3", array()), 'widget');
        echo "
\t\t\t\t\t";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "courses3", array()), 'errors');
        echo "\t
\t\t\t\t</div> \t

\t\t\t\t";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "\t
\t\t\t\t
    
\t\t\t\t<div class='row'>\t
\t\t\t\t\t\t<div class='col-md-3'> 
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-success btn\">Ajouter</button>
\t\t\t\t\t\t</div>
\t\t\t\t    \t<div class='col-md-3'>
\t\t\t\t    \t\t<a href=\"";
        // line 75
        echo $this->env->getExtension('routing')->getPath("resp_utilisateurs");
        echo "\"> Retour à la liste des utilisateurs </a>
\t\t\t\t    \t</div>
\t\t\t\t</div>\t\t

\t\t\t</form>\t\t
        </tbody>
    </table>

\t
\t    
\t</fieldset>    
\t          
    
";
    }

    // line 91
    public function block_checkbox_hierarchy_widget($context, array $blocks = array())
    {
        // line 92
        echo "  <ul class=\"listless spaced-listless\" id=\"mainList\">
        ";
        // line 93
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "choices", array()));
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
        foreach ($context['_seq'] as $context["choiceOrOptionGroup"] => $context["children"]) {
            // line 94
            echo "            ";
            if (twig_test_iterable($context["children"])) {
                // line 95
                echo "                <ul>
                    ";
                // line 96
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["children"]);
                foreach ($context['_seq'] as $context["child"] => $context["choiceView"]) {
                    // line 97
                    echo "                        <li>
                            <label class=\"checkbox\">
                                ";
                    // line 99
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "offsetGet", array(0 => $context["child"]), "method"), 'widget');
                    echo "
                                ";
                    // line 100
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "offsetGet", array(0 => $context["child"]), "method"), "vars", array()), "label", array()), "html", null, true);
                    echo "
                            </label>
                        </li>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['child'], $context['choiceView'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 104
                echo "                </ul>
            ";
            } else {
                // line 106
                echo "
                ";
                // line 108
                echo "                ";
                if ( !$this->getAttribute($context["loop"], "first", array())) {
                    // line 109
                    echo "                    </li>
                ";
                }
                // line 111
                echo "
                <li>
                <label class=\"checkbox\">
                    ";
                // line 114
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "offsetGet", array(0 => $context["choiceOrOptionGroup"]), "method"), 'widget');
                echo "
                    ";
                // line 115
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "offsetGet", array(0 => $context["choiceOrOptionGroup"]), "method"), "vars", array()), "label", array()), "html", null, true);
                echo "
                </label>
            ";
            }
            // line 118
            echo "
            ";
            // line 120
            echo "            ";
            if ($this->getAttribute($context["loop"], "last", array())) {
                // line 121
                echo "                </li>
            ";
            }
            // line 123
            echo "        ";
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
        unset($context['_seq'], $context['_iterated'], $context['choiceOrOptionGroup'], $context['children'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 124
        echo "    </ul>


";
    }

    // line 132
    public function block_scripts($context, array $blocks = array())
    {
        // line 133
        echo "\t
  ";
        // line 134
        $this->displayParentBlock("scripts", $context, $blocks);
        echo "

  <script type=\"text/javascript\">
  
    \$(document).ready(function(){

\t\t\$('#form_courses2 :input').each(function () {
\t\t\tif (\$(this).attr('type')==\"checkbox\")\t
\t\t\t\t{
\t\t\t\tvar res = \$(this).attr('value').split('#');
\t\t\t\tif(res[0]==\"COU\" )
\t\t\t\t\t\t{\t\t\t\t\t
\t\t\t\t\t\t\$(this).closest(\"label\").hide(); 
\t\t\t\t\t\t} 
\t\t\t\t}
\t\t});
\t\t
\t\t\$('#form_courses3 :input').each(function () {
\t\t\tif (\$(this).attr('type')==\"checkbox\")\t
\t\t\t\t{
\t\t\t\tvar res = \$(this).attr('value').split('#');
\t\t\t\tif(res[0]==\"COU\" )
\t\t\t\t\t\t{\t\t\t\t\t
\t\t\t\t\t\t\$(this).closest(\"label\").hide(); 
\t\t\t\t\t\t} 
\t\t\t\t}
\t\t});
\t\t
 
 
\t\t\$(\"#form_courses2 input[type='checkbox']\").change(function () {
\t\t
\t\t \tif (\$(this).is(':checked'))
\t\t \t\t{ 
\t\t \t\tvar res = \$(this).val().split('#');
\t\t \t\t
\t\t \t\tif (res[0]==\"COU\")
\t\t \t\t\t{
\t\t\t\t\t\$('#form_courses2 :input').each(function () {
\t\t\t\t\t\tif (\$(this).attr('type')==\"checkbox\")\t
\t\t\t\t\t\t\t{
\t\t\t\t\t\t\tif\t(\$(this).attr('value')==\"PRO#\"+res[1])\t\t
\t\t\t\t\t\t\t\t\t{\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\$(this).prop('checked',true); 
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}
\t\t\t\t\t  });
\t\t\t\t\t} 
\t\t\t\t\t
\t\t \t\tif (res[0]==\"PRO\")
\t\t \t\t\t{
\t\t\t \t\tvar res = \$(this).val().split('#');\t\t \t\t\t
\t\t\t \t\t
\t\t\t\t\t\$('#form_courses2 :input').each(function () {
\t\t\t\t\t\tif (\$(this).attr('type')==\"checkbox\")\t
\t\t\t\t\t\t\t{
\t\t\t\t\t\t\tvar res3 = \$(this).attr('value').split('#');
\t\t\t\t\t\t\tif(res3[0]==\"COU\" && res[1]==res3[1])
\t\t\t\t\t\t\t\t\t{\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\$(this).closest(\"label\").show(); 
\t\t\t\t\t\t\t\t\t} 
\t\t\t\t\t\t\t}
\t\t\t\t\t});\t
\t\t\t\t\t
\t\t\t\t\t\$('#form_courses3 :input').each(function () {
\t\t\t\t\t\tif (\$(this).attr('type')==\"checkbox\")\t
\t\t\t\t\t\t\t{
\t\t\t\t\t\t\tvar res4 = \$(this).attr('value').split('#');
\t\t\t\t\t\t\t
\t\t\t\t\t\t\tif(res4[0]==\"PRO\" && res[1]==res4[1])
\t\t\t\t\t\t\t\t\t{\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\$(this).closest(\"label\").hide(); 
\t\t\t\t\t\t\t\t\t\$(this).prop('checked',false); 
\t\t\t\t\t\t\t\t\t} \t
\t\t\t\t\t\t\tif(res4[0]==\"COU\" && res[1]==res4[1])
\t\t\t\t\t\t\t\t\t{\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\$(this).closest(\"label\").hide(); 
\t\t\t\t\t\t\t\t\t\$(this).prop('checked',false); 
\t\t\t\t\t\t\t\t\t} \t
\t\t\t\t\t\t\t\t\t\t\t\t \t\t\t
\t\t\t\t\t\t\t}\t\t\t \t\t
\t\t\t\t\t});\t\t\t\t\t\t\t\t\t\t\t\t \t\t
\t\t\t \t\t\t\t \t\t\t
\t\t \t\t\t}\t\t\t\t\t
\t\t\t\t\t
\t\t \t\t}
\t\t \telse
\t\t \t\t{ 
\t\t \t\tvar res = \$(this).val().split('#');
\t\t \t\t

\t\t \t\tif (res[0]==\"PRO\")
\t\t \t\t\t{

\t\t\t\t\t\$('#form_courses2 :input').each(function () {
\t\t\t\t\t\tif (\$(this).attr('type')==\"checkbox\")\t
\t\t\t\t\t\t\t{
\t\t\t\t\t\t\tvar res2 = \$(this).attr('value').split('#');
\t\t\t\t\t\t\tif(res2[0]==\"COU\" && res2[1]==res[1] )
\t\t\t\t\t\t\t\t{\t\t\t\t\t
\t\t\t\t\t\t\t\t\$(this).prop('checked',false); 
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}
\t\t\t\t\t  });
\t\t\t\t\t  
\t\t\t\t\t  
\t\t\t\t\t  
\t\t \t\t\t}\t
\t\t \t\t\t
\t\t\t\t\t
\t\t \t\tif (res[0]==\"PRO\")
\t\t \t\t\t{
\t\t\t \t\tvar res = \$(this).val().split('#');\t\t \t\t\t
\t\t\t \t\t
\t\t\t\t\t\$('#form_courses2 :input').each(function () {
\t\t\t\t\t\tif (\$(this).attr('type')==\"checkbox\")\t
\t\t\t\t\t\t\t{
\t\t\t\t\t\t\tvar res3 = \$(this).attr('value').split('#');
\t\t\t\t\t\t\tif(res3[0]==\"COU\" && res[1]==res3[1])
\t\t\t\t\t\t\t\t\t{\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\$(this).closest(\"label\").hide(); 
\t\t\t\t\t\t\t\t\t} 
\t\t\t\t\t\t\t}
\t\t\t\t\t});\t\t
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t\$('#form_courses3 :input').each(function () {
\t\t\t\t\t\tif (\$(this).attr('type')==\"checkbox\")\t
\t\t\t\t\t\t\t{
\t\t\t\t\t\t\tvar res4 = \$(this).attr('value').split('#');
\t\t\t\t\t\t\t
\t\t\t\t\t\t\tif(res4[0]==\"PRO\" && res[1]==res4[1])
\t\t\t\t\t\t\t\t\t{\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\$(this).closest(\"label\").show(); 
\t\t\t\t\t\t\t\t\t\$(this).prop('checked',false); \t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t} \t
\t\t\t\t\t\t\t\t\t\t\t\t  \t\t\t
\t\t\t\t\t\t\t}\t\t\t \t\t
\t\t\t\t\t});\t\t\t\t\t\t
\t\t\t\t\t\t \t\t\t
\t\t \t\t\t
\t\t \t\t\t}\t\t \t\t\t
\t
\t
\t\t \t\t} 

\t\t});



 
\t\t\$(\"#form_courses3 input[type='checkbox']\").change(function () {
\t\t
\t\t \tif (\$(this).is(':checked'))
\t\t \t\t{ 
\t\t \t\tvar res = \$(this).val().split('#');
\t\t \t\t
\t\t \t\tif (res[0]==\"COU\")
\t\t \t\t\t{
\t\t\t\t\t\$('#form_courses3 :input').each(function () {
\t\t\t\t\t\tif (\$(this).attr('type')==\"checkbox\")\t
\t\t\t\t\t\t\t{
\t\t\t\t\t\t\tif\t(\$(this).attr('value')==\"PRO#\"+res[1])\t\t
\t\t\t\t\t\t\t\t\t{\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\$(this).prop('checked',true); 
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}
\t\t\t\t\t  });
\t\t\t\t\t} 
\t\t\t\t\t
\t\t \t\tif (res[0]==\"PRO\")
\t\t \t\t\t{
\t\t\t \t\tvar res = \$(this).val().split('#');\t\t \t\t\t
\t\t\t \t\t
\t\t\t\t\t\$('#form_courses3 :input').each(function () {
\t\t\t\t\t\tif (\$(this).attr('type')==\"checkbox\")\t
\t\t\t\t\t\t\t{
\t\t\t\t\t\t\tvar res3 = \$(this).attr('value').split('#');
\t\t\t\t\t\t\tif(res3[0]==\"COU\" && res[1]==res3[1])
\t\t\t\t\t\t\t\t\t{\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\$(this).closest(\"label\").show(); 
\t\t\t\t\t\t\t\t\t} 
\t\t\t\t\t\t\t}
\t\t\t\t\t});\t\t\t \t\t
\t\t\t \t\t\t\t \t\t\t
\t\t \t\t\t}\t\t\t\t\t
\t\t\t\t\t
\t\t \t\t}
\t\t \telse
\t\t \t\t{ 
\t\t \t\tvar res = \$(this).val().split('#');
\t\t \t\t
\t\t \t\tif (res[0]==\"PRO\")
\t\t \t\t\t{
\t\t\t\t\t\$('#form_courses3 :input').each(function () {
\t\t\t\t\t\tif (\$(this).attr('type')==\"checkbox\")\t
\t\t\t\t\t\t\t{
\t\t\t\t\t\t\tvar res2 = \$(this).attr('value').split('#');
\t\t\t\t\t\t\tif(res2[0]==\"COU\" && res2[1]==res[1] )
\t\t\t\t\t\t\t\t{\t\t\t\t\t
\t\t\t\t\t\t\t\t\$(this).prop('checked',false); 
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}
\t\t\t\t\t  });
\t\t \t\t\t}\t
\t\t \t\t\t
\t\t\t\t\t
\t\t \t\tif (res[0]==\"PRO\")
\t\t \t\t\t{
\t\t\t \t\tvar res = \$(this).val().split('#');\t\t \t\t\t
\t\t\t \t\t
\t\t\t\t\t\$('#form_courses3 :input').each(function () {
\t\t\t\t\t\tif (\$(this).attr('type')==\"checkbox\")\t
\t\t\t\t\t\t\t{
\t\t\t\t\t\t\tvar res3 = \$(this).attr('value').split('#');
\t\t\t\t\t\t\tif(res3[0]==\"COU\" && res[1]==res3[1])
\t\t\t\t\t\t\t\t\t{\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\$(this).closest(\"label\").hide(); 
\t\t\t\t\t\t\t\t\t} 
\t\t\t\t\t\t\t}
\t\t\t\t\t});\t\t\t\t\t\t






\t\t \t\t\t}
\t\t \t\t\t\t  \t\t\t\t\t
\t\t\t\t\t\t\t \t\t\t\t\t \t\t\t
\t
\t
\t\t \t\t} 

\t\t});



    

\t\tif (\$(\"#form_role1 input[type='radio']:checked\").val()==\"1\")
\t\t\t{
\t\t\t\$(\"#role2\").hide();
\t\t\t\$(\"#A2\").hide();\t
\t\t\t\$(\"#R2\").hide();
\t\t\t\$(\"#role3\").hide();\t\t\t\t
\t\t\t\$(\"#A3\").hide();\t
\t\t\t\$(\"#R3\").hide();
\t\t\t}

\t
\t\t\$(\"#form_role1 input[type='radio']\").change( function() {
 \t\t\tif (\$(\"#form_role1 input[type='radio']:checked\").val()==\"0\")
\t\t\t\t{
\t\t\t\t\$(\"#role2\").show();\t
\t\t\t\t/*\$(\"#A2\").show();*/ 
\t\t\t\t\$(\"#R2\").show();\t
\t\t\t\t\$(\"#role3\").show();
\t\t\t\t/*\$(\"#A3\").show();*/  
\t\t\t\t\$(\"#R3\").show();
\t\t\t\t
\t\t\t\t}\t\t\t
\t\t\t\t
 \t\t\tif (\$(\"#form_role1 input[type='radio']:checked\").val()==\"1\")
\t\t\t\t{
\t\t\t\t\$('#form_role2_1').prop( \"checked\", true );\t\t
\t\t\t\t\$('#form_courses2 :input').each(function () {
\t\t\t\t\tvar res3 = \$(this).attr('value').split('#');
\t\t\t\t\tif (\$(this).attr('type')==\"checkbox\")\t
\t\t\t\t\t\t{\t\t\t\t\t\t
\t\t\t\t\t\t\$(this).prop('checked',false); 
\t\t\t\t\t\t}
\t\t\t\t\tif(res3[0]==\"COU\")
\t\t\t\t\t\t{\t\t\t\t\t
\t\t\t\t\t\t\$(this).closest(\"label\").hide(); 
\t\t\t\t\t\t} \t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t});\t\t \t\t\t\t

\t\t\t\t\$('#form_role3_1').prop( \"checked\", true );\t\t
\t\t\t\t\$('#form_courses3 :input').each(function () {
\t\t\t\t\tvar res3 = \$(this).attr('value').split('#');
\t\t\t\t\tif (\$(this).attr('type')==\"checkbox\")\t
\t\t\t\t\t\t{\t\t\t\t\t\t
\t\t\t\t\t\t\$(this).prop('checked',false); 
\t\t\t\t\t\t}
\t\t\t\t\tif(res3[0]==\"COU\")
\t\t\t\t\t\t{\t\t\t\t\t
\t\t\t\t\t\t\$(this).closest(\"label\").hide(); 
\t\t\t\t\t\t} \t\t\t\t\t\t\t
\t\t\t\t});\t\t
\t\t\t\t
\t\t\t\t/* Parcourir cours3 pour reactiver */\t
\t\t\t\t\$('#form_courses3 :input').each(function () {
\t\t\t\t\tvar res4 = \$(this).attr('value').split('#');\t\t\t\t
\t\t\t\t\tif(res4[0]==\"PRO\")\t\t\t\t\t\t\t
\t\t\t\t\t\t\$(this).closest(\"label\").show(); \t\t\t\t\t\t\t\t\t
\t\t\t\t});\t\t\t\t\t\t\t\t\t\t
\t\t\t\t
\t\t\t\t\$(\"#role2\").hide();\t\t\t\t
\t\t\t\t\$(\"#A2\").hide();\t
\t\t\t\t\$(\"#R2\").hide();
\t\t\t\t\t
\t\t\t\t\$(\"#role3\").hide();\t\t
\t\t\t\t\$(\"#A3\").hide();\t
\t\t\t\t\$(\"#R3\").hide();
\t\t\t\t}\t\t\t\t\t
\t\t});   
\t\t 
\t\tif (\$(\"#form_role2 input[type='radio']:checked\").val()==\"0\")
\t\t\t{
\t\t\t\$(\"#A2\").hide();\t
\t\t\t}

\t
\t\t\$(\"#form_role2 input[type='radio']\").change( function() {\t 
 \t\t\tif (\$(\"#form_role2 input[type='radio']:checked\").val()==\"0\")
\t\t\t\t{
\t\t\t\t\$(\"#A2\").hide();
\t\t\t\t\$('#form_courses2 :input').each(function () {
\t\t\t\t\tvar res3 = \$(this).attr('value').split('#');
\t\t\t\t\tif (\$(this).attr('type')==\"checkbox\")\t
\t\t\t\t\t\t{\t\t\t\t\t\t
\t\t\t\t\t\t\$(this).prop('checked',false); 
\t\t\t\t\t\t}
\t\t\t\t\tif(res3[0]==\"COU\")
\t\t\t\t\t\t{\t\t\t\t\t
\t\t\t\t\t\t\$(this).closest(\"label\").hide(); 
\t\t\t\t\t\t} \t\t\t\t\t\t
\t\t\t\t\t});
\t\t\t\t\t
\t\t\t\t/* Parcourir cours3 pour reactiver */\t
\t\t\t\t\$('#form_courses3 :input').each(function () {
\t\t\t\t\tvar res4 = \$(this).attr('value').split('#');\t\t\t\t
\t\t\t\t\tif(res4[0]==\"PRO\")\t\t\t\t\t\t\t
\t\t\t\t\t\t\$(this).closest(\"label\").show(); \t\t\t\t\t\t\t\t\t
\t\t\t\t});\t\t\t\t\t\t\t\t \t\t\t\t\t\t\t\t
\t\t\t\t}\t
 \t\t\tif (\$(\"#form_role2 input[type='radio']:checked\").val()==\"1\")
\t\t\t\t{
\t\t\t\t\$(\"#A2\").show();
\t\t\t\t\$(\"#R2\").show();
\t\t\t\t}
\t\t});   
\t\t 
\t\tif (\$(\"#form_role3 input[type='radio']:checked\").val()==\"0\")
\t\t\t{
\t\t\t\$(\"#A3\").hide();\t

\t\t\t} 

\t\t\$(\"#form_role3 input[type='radio']\").change( function() {\t 
 \t\t\tif (\$(\"#form_role3 input[type='radio']:checked\").val()==\"0\")
\t\t\t\t{
\t\t\t\t\$(\"#A3\").hide();
\t\t\t\t\$('#form_courses3 :input').each(function () {
\t\t\t\t\t\t\t\t\tvar res3 = \$(this).attr('value').split('#');
\t\t\t\t\t\t\t\t\tif (\$(this).attr('type')==\"checkbox\")\t
\t\t\t\t\t\t\t\t\t\t{\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\$(this).prop('checked',false); 
\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\tif(res3[0]==\"COU\")
\t\t\t\t\t\t\t\t\t\t{\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\$(this).closest(\"label\").hide(); 
\t\t\t\t\t\t\t\t\t\t} \t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t\t});\t\t\t\t\t
\t\t\t\t}\t
 \t\t\tif (\$(\"#form_role3 input[type='radio']:checked\").val()==\"1\")
\t\t\t\t{
\t\t\t\t\$(\"#A3\").show();
\t\t\t\t\$(\"#R3\").show();
\t\t\t\t}
\t\t});   
 

\t});         
  </script> 
";
    }

    public function getTemplateName()
    {
        return "IfeAloesBundle:Resp:user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  289 => 134,  286 => 133,  283 => 132,  276 => 124,  262 => 123,  258 => 121,  255 => 120,  252 => 118,  246 => 115,  242 => 114,  237 => 111,  233 => 109,  230 => 108,  227 => 106,  223 => 104,  213 => 100,  209 => 99,  205 => 97,  201 => 96,  198 => 95,  195 => 94,  178 => 93,  175 => 92,  172 => 91,  154 => 75,  143 => 67,  137 => 64,  133 => 63,  127 => 60,  118 => 54,  114 => 53,  108 => 50,  100 => 45,  96 => 44,  90 => 41,  81 => 35,  77 => 34,  71 => 31,  63 => 26,  59 => 25,  53 => 22,  47 => 19,  33 => 7,  30 => 5,  11 => 1,);
    }
}
/* {% extends 'IfeAloesBundle:Aloes:layout.html.twig' %}*/
/* */
/*   */
/* */
/* {% block content -%}*/
/* */
/*     <div class='title-one'> Ajout d'un utilisateur  </div>*/
/* */
/* 	   	 						*/
/* */
/* 	<fieldset>*/
/* */
/* */
/*     <table class="table">*/
/*         <thead>*/
/*   */
/*         </thead>*/
/*         <tbody> */
/* 			<form class="form-inline" id="roles" action="{{ path('resp_utilisateurs_create_user', { 'page' : page, 'sort' : sort, 'direction' : direction  }) }}" method="post">	*/
/* */
/* 				<div class='col-md-2'> 	  	  */
/* 			    	{{ form_label(form.givenname) }}*/
/* 				</div> 	  		    	*/
/* 				<div class='col-md-10'> 	  	  */
/* 			    	{{ form_widget(form.givenname) }}*/
/* 			 	    {{ form_errors(form.givenname) }}	*/
/* 			 	    <br/>*/
/* 				</div> 	*/
/* */
/* 				<div class='col-md-2'> 	  	  */
/* 			    	{{ form_label(form.sn) }}*/
/* 				</div> 	  		    	*/
/* 				<div class='col-md-10'> 	  	  */
/* 			    	{{ form_widget(form.sn) }}*/
/* 			 	    {{ form_errors(form.sn) }}	*/
/* 			 	    <br/>*/
/* 				</div> 	*/
/* */
/* */
/* 				<div class='col-md-2'> 	  	  */
/* 			    	{{ form_label(form.username) }}*/
/* 				</div> 	  		    	*/
/* 				<div class='col-md-10'> 	  	  */
/* 			    	{{ form_widget(form.username) }}*/
/* 			 	    {{ form_errors(form.username) }}	*/
/* 			 	    <br/>*/
/* 				</div> 	*/
/* */
/* 				<div class='col-md-2'> 	  	  */
/* 			    	{{ form_label(form.email) }}*/
/* 				</div> 	  		    	*/
/* 				<div class='col-md-10'> 	  	  */
/* 			    	{{ form_widget(form.email) }}*/
/* 			 	    {{ form_errors(form.email) }}	*/
/* 			 	    <br/>*/
/* 				</div> 	*/
/* 								*/
/* */
/* 				<div class='col-md-2'> 	  	  */
/* 					{{ form_label(form.courses3) }}*/
/* 				</div> 	  		    	*/
/* 				<div class='col-md-10'> 	  	  */
/* 					{{ form_widget(form.courses3) }}*/
/* 					{{ form_errors(form.courses3) }}	*/
/* 				</div> 	*/
/* */
/* 				{{ form_rest(form) }}	*/
/* 				*/
/*     */
/* 				<div class='row'>	*/
/* 						<div class='col-md-3'> */
/* 							<button type="submit" class="btn btn-success btn">Ajouter</button>*/
/* 						</div>*/
/* 				    	<div class='col-md-3'>*/
/* 				    		<a href="{{ path('resp_utilisateurs') }}"> Retour à la liste des utilisateurs </a>*/
/* 				    	</div>*/
/* 				</div>		*/
/* */
/* 			</form>		*/
/*         </tbody>*/
/*     </table>*/
/* */
/* 	*/
/* 	    */
/* 	</fieldset>    */
/* 	          */
/*     */
/* {% endblock %} */
/* */
/* */
/* {% block checkbox_hierarchy_widget %}*/
/*   <ul class="listless spaced-listless" id="mainList">*/
/*         {% for choiceOrOptionGroup,children in form.vars.choices %}*/
/*             {% if children is iterable %}*/
/*                 <ul>*/
/*                     {% for child,choiceView in children %}*/
/*                         <li>*/
/*                             <label class="checkbox">*/
/*                                 {{ form_widget(form.offsetGet(child)) }}*/
/*                                 {{ form.offsetGet(child).vars.label }}*/
/*                             </label>*/
/*                         </li>*/
/*                     {% endfor %}*/
/*                 </ul>*/
/*             {% else %}*/
/* */
/*                 {# If not first loop, close previous <li> #}*/
/*                 {% if not loop.first %}*/
/*                     </li>*/
/*                 {% endif %}*/
/* */
/*                 <li>*/
/*                 <label class="checkbox">*/
/*                     {{ form_widget(form.offsetGet(choiceOrOptionGroup)) }}*/
/*                     {{ form.offsetGet(choiceOrOptionGroup).vars.label }}*/
/*                 </label>*/
/*             {% endif %}*/
/* */
/*             {# Last of the loop, there will be an open <li>, close it. #}*/
/*             {% if loop.last %}*/
/*                 </li>*/
/*             {% endif %}*/
/*         {% endfor %}*/
/*     </ul>*/
/* */
/* */
/* {% endblock %}*/
/* */
/* */
/* */
/*     */
/* {% block scripts %}*/
/* 	*/
/*   {{ parent() }}*/
/* */
/*   <script type="text/javascript">*/
/*   */
/*     $(document).ready(function(){*/
/* */
/* 		$('#form_courses2 :input').each(function () {*/
/* 			if ($(this).attr('type')=="checkbox")	*/
/* 				{*/
/* 				var res = $(this).attr('value').split('#');*/
/* 				if(res[0]=="COU" )*/
/* 						{					*/
/* 						$(this).closest("label").hide(); */
/* 						} */
/* 				}*/
/* 		});*/
/* 		*/
/* 		$('#form_courses3 :input').each(function () {*/
/* 			if ($(this).attr('type')=="checkbox")	*/
/* 				{*/
/* 				var res = $(this).attr('value').split('#');*/
/* 				if(res[0]=="COU" )*/
/* 						{					*/
/* 						$(this).closest("label").hide(); */
/* 						} */
/* 				}*/
/* 		});*/
/* 		*/
/*  */
/*  */
/* 		$("#form_courses2 input[type='checkbox']").change(function () {*/
/* 		*/
/* 		 	if ($(this).is(':checked'))*/
/* 		 		{ */
/* 		 		var res = $(this).val().split('#');*/
/* 		 		*/
/* 		 		if (res[0]=="COU")*/
/* 		 			{*/
/* 					$('#form_courses2 :input').each(function () {*/
/* 						if ($(this).attr('type')=="checkbox")	*/
/* 							{*/
/* 							if	($(this).attr('value')=="PRO#"+res[1])		*/
/* 									{					*/
/* 									$(this).prop('checked',true); */
/* 									}*/
/* 							}*/
/* 					  });*/
/* 					} */
/* 					*/
/* 		 		if (res[0]=="PRO")*/
/* 		 			{*/
/* 			 		var res = $(this).val().split('#');		 			*/
/* 			 		*/
/* 					$('#form_courses2 :input').each(function () {*/
/* 						if ($(this).attr('type')=="checkbox")	*/
/* 							{*/
/* 							var res3 = $(this).attr('value').split('#');*/
/* 							if(res3[0]=="COU" && res[1]==res3[1])*/
/* 									{					*/
/* 									$(this).closest("label").show(); */
/* 									} */
/* 							}*/
/* 					});	*/
/* 					*/
/* 					$('#form_courses3 :input').each(function () {*/
/* 						if ($(this).attr('type')=="checkbox")	*/
/* 							{*/
/* 							var res4 = $(this).attr('value').split('#');*/
/* 							*/
/* 							if(res4[0]=="PRO" && res[1]==res4[1])*/
/* 									{					*/
/* 									$(this).closest("label").hide(); */
/* 									$(this).prop('checked',false); */
/* 									} 	*/
/* 							if(res4[0]=="COU" && res[1]==res4[1])*/
/* 									{					*/
/* 									$(this).closest("label").hide(); */
/* 									$(this).prop('checked',false); */
/* 									} 	*/
/* 												 			*/
/* 							}			 		*/
/* 					});												 		*/
/* 			 				 			*/
/* 		 			}					*/
/* 					*/
/* 		 		}*/
/* 		 	else*/
/* 		 		{ */
/* 		 		var res = $(this).val().split('#');*/
/* 		 		*/
/* */
/* 		 		if (res[0]=="PRO")*/
/* 		 			{*/
/* */
/* 					$('#form_courses2 :input').each(function () {*/
/* 						if ($(this).attr('type')=="checkbox")	*/
/* 							{*/
/* 							var res2 = $(this).attr('value').split('#');*/
/* 							if(res2[0]=="COU" && res2[1]==res[1] )*/
/* 								{					*/
/* 								$(this).prop('checked',false); */
/* 								}*/
/* 							}*/
/* 					  });*/
/* 					  */
/* 					  */
/* 					  */
/* 		 			}	*/
/* 		 			*/
/* 					*/
/* 		 		if (res[0]=="PRO")*/
/* 		 			{*/
/* 			 		var res = $(this).val().split('#');		 			*/
/* 			 		*/
/* 					$('#form_courses2 :input').each(function () {*/
/* 						if ($(this).attr('type')=="checkbox")	*/
/* 							{*/
/* 							var res3 = $(this).attr('value').split('#');*/
/* 							if(res3[0]=="COU" && res[1]==res3[1])*/
/* 									{					*/
/* 									$(this).closest("label").hide(); */
/* 									} */
/* 							}*/
/* 					});		*/
/* 					*/
/* 					*/
/* 					$('#form_courses3 :input').each(function () {*/
/* 						if ($(this).attr('type')=="checkbox")	*/
/* 							{*/
/* 							var res4 = $(this).attr('value').split('#');*/
/* 							*/
/* 							if(res4[0]=="PRO" && res[1]==res4[1])*/
/* 									{					*/
/* 									$(this).closest("label").show(); */
/* 									$(this).prop('checked',false); 									*/
/* 									} 	*/
/* 												  			*/
/* 							}			 		*/
/* 					});						*/
/* 						 			*/
/* 		 			*/
/* 		 			}		 			*/
/* 	*/
/* 	*/
/* 		 		} */
/* */
/* 		});*/
/* */
/* */
/* */
/*  */
/* 		$("#form_courses3 input[type='checkbox']").change(function () {*/
/* 		*/
/* 		 	if ($(this).is(':checked'))*/
/* 		 		{ */
/* 		 		var res = $(this).val().split('#');*/
/* 		 		*/
/* 		 		if (res[0]=="COU")*/
/* 		 			{*/
/* 					$('#form_courses3 :input').each(function () {*/
/* 						if ($(this).attr('type')=="checkbox")	*/
/* 							{*/
/* 							if	($(this).attr('value')=="PRO#"+res[1])		*/
/* 									{					*/
/* 									$(this).prop('checked',true); */
/* 									}*/
/* 							}*/
/* 					  });*/
/* 					} */
/* 					*/
/* 		 		if (res[0]=="PRO")*/
/* 		 			{*/
/* 			 		var res = $(this).val().split('#');		 			*/
/* 			 		*/
/* 					$('#form_courses3 :input').each(function () {*/
/* 						if ($(this).attr('type')=="checkbox")	*/
/* 							{*/
/* 							var res3 = $(this).attr('value').split('#');*/
/* 							if(res3[0]=="COU" && res[1]==res3[1])*/
/* 									{					*/
/* 									$(this).closest("label").show(); */
/* 									} */
/* 							}*/
/* 					});			 		*/
/* 			 				 			*/
/* 		 			}					*/
/* 					*/
/* 		 		}*/
/* 		 	else*/
/* 		 		{ */
/* 		 		var res = $(this).val().split('#');*/
/* 		 		*/
/* 		 		if (res[0]=="PRO")*/
/* 		 			{*/
/* 					$('#form_courses3 :input').each(function () {*/
/* 						if ($(this).attr('type')=="checkbox")	*/
/* 							{*/
/* 							var res2 = $(this).attr('value').split('#');*/
/* 							if(res2[0]=="COU" && res2[1]==res[1] )*/
/* 								{					*/
/* 								$(this).prop('checked',false); */
/* 								}*/
/* 							}*/
/* 					  });*/
/* 		 			}	*/
/* 		 			*/
/* 					*/
/* 		 		if (res[0]=="PRO")*/
/* 		 			{*/
/* 			 		var res = $(this).val().split('#');		 			*/
/* 			 		*/
/* 					$('#form_courses3 :input').each(function () {*/
/* 						if ($(this).attr('type')=="checkbox")	*/
/* 							{*/
/* 							var res3 = $(this).attr('value').split('#');*/
/* 							if(res3[0]=="COU" && res[1]==res3[1])*/
/* 									{					*/
/* 									$(this).closest("label").hide(); */
/* 									} */
/* 							}*/
/* 					});						*/
/* */
/* */
/* */
/* */
/* */
/* */
/* 		 			}*/
/* 		 				  					*/
/* 							 					 			*/
/* 	*/
/* 	*/
/* 		 		} */
/* */
/* 		});*/
/* */
/* */
/* */
/*     */
/* */
/* 		if ($("#form_role1 input[type='radio']:checked").val()=="1")*/
/* 			{*/
/* 			$("#role2").hide();*/
/* 			$("#A2").hide();	*/
/* 			$("#R2").hide();*/
/* 			$("#role3").hide();				*/
/* 			$("#A3").hide();	*/
/* 			$("#R3").hide();*/
/* 			}*/
/* */
/* 	*/
/* 		$("#form_role1 input[type='radio']").change( function() {*/
/*  			if ($("#form_role1 input[type='radio']:checked").val()=="0")*/
/* 				{*/
/* 				$("#role2").show();	*/
/* 				/*$("#A2").show();*//*  */
/* 				$("#R2").show();	*/
/* 				$("#role3").show();*/
/* 				/*$("#A3").show();*//*   */
/* 				$("#R3").show();*/
/* 				*/
/* 				}			*/
/* 				*/
/*  			if ($("#form_role1 input[type='radio']:checked").val()=="1")*/
/* 				{*/
/* 				$('#form_role2_1').prop( "checked", true );		*/
/* 				$('#form_courses2 :input').each(function () {*/
/* 					var res3 = $(this).attr('value').split('#');*/
/* 					if ($(this).attr('type')=="checkbox")	*/
/* 						{						*/
/* 						$(this).prop('checked',false); */
/* 						}*/
/* 					if(res3[0]=="COU")*/
/* 						{					*/
/* 						$(this).closest("label").hide(); */
/* 						} 						*/
/* 						*/
/* 				});		 				*/
/* */
/* 				$('#form_role3_1').prop( "checked", true );		*/
/* 				$('#form_courses3 :input').each(function () {*/
/* 					var res3 = $(this).attr('value').split('#');*/
/* 					if ($(this).attr('type')=="checkbox")	*/
/* 						{						*/
/* 						$(this).prop('checked',false); */
/* 						}*/
/* 					if(res3[0]=="COU")*/
/* 						{					*/
/* 						$(this).closest("label").hide(); */
/* 						} 							*/
/* 				});		*/
/* 				*/
/* 				/* Parcourir cours3 pour reactiver *//* 	*/
/* 				$('#form_courses3 :input').each(function () {*/
/* 					var res4 = $(this).attr('value').split('#');				*/
/* 					if(res4[0]=="PRO")							*/
/* 						$(this).closest("label").show(); 									*/
/* 				});										*/
/* 				*/
/* 				$("#role2").hide();				*/
/* 				$("#A2").hide();	*/
/* 				$("#R2").hide();*/
/* 					*/
/* 				$("#role3").hide();		*/
/* 				$("#A3").hide();	*/
/* 				$("#R3").hide();*/
/* 				}					*/
/* 		});   */
/* 		 */
/* 		if ($("#form_role2 input[type='radio']:checked").val()=="0")*/
/* 			{*/
/* 			$("#A2").hide();	*/
/* 			}*/
/* */
/* 	*/
/* 		$("#form_role2 input[type='radio']").change( function() {	 */
/*  			if ($("#form_role2 input[type='radio']:checked").val()=="0")*/
/* 				{*/
/* 				$("#A2").hide();*/
/* 				$('#form_courses2 :input').each(function () {*/
/* 					var res3 = $(this).attr('value').split('#');*/
/* 					if ($(this).attr('type')=="checkbox")	*/
/* 						{						*/
/* 						$(this).prop('checked',false); */
/* 						}*/
/* 					if(res3[0]=="COU")*/
/* 						{					*/
/* 						$(this).closest("label").hide(); */
/* 						} 						*/
/* 					});*/
/* 					*/
/* 				/* Parcourir cours3 pour reactiver *//* 	*/
/* 				$('#form_courses3 :input').each(function () {*/
/* 					var res4 = $(this).attr('value').split('#');				*/
/* 					if(res4[0]=="PRO")							*/
/* 						$(this).closest("label").show(); 									*/
/* 				});								 								*/
/* 				}	*/
/*  			if ($("#form_role2 input[type='radio']:checked").val()=="1")*/
/* 				{*/
/* 				$("#A2").show();*/
/* 				$("#R2").show();*/
/* 				}*/
/* 		});   */
/* 		 */
/* 		if ($("#form_role3 input[type='radio']:checked").val()=="0")*/
/* 			{*/
/* 			$("#A3").hide();	*/
/* */
/* 			} */
/* */
/* 		$("#form_role3 input[type='radio']").change( function() {	 */
/*  			if ($("#form_role3 input[type='radio']:checked").val()=="0")*/
/* 				{*/
/* 				$("#A3").hide();*/
/* 				$('#form_courses3 :input').each(function () {*/
/* 									var res3 = $(this).attr('value').split('#');*/
/* 									if ($(this).attr('type')=="checkbox")	*/
/* 										{						*/
/* 										$(this).prop('checked',false); */
/* 										}*/
/* 									if(res3[0]=="COU")*/
/* 										{					*/
/* 										$(this).closest("label").hide(); */
/* 										} 						*/
/* 										 */
/* 								});					*/
/* 				}	*/
/*  			if ($("#form_role3 input[type='radio']:checked").val()=="1")*/
/* 				{*/
/* 				$("#A3").show();*/
/* 				$("#R3").show();*/
/* 				}*/
/* 		});   */
/*  */
/* */
/* 	});         */
/*   </script> */
/* {% endblock %}*/
/* */
/* */
/* */
/* */
