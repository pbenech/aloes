<?php

/* IfeAloesBundle:Admin:user.html.twig */
class __TwigTemplate_63f2879cd64733fd61e22cdd4043e2f511cff8a8f61e3a116f0bea212127c00e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("IfeAloesBundle:Aloes:layout-outils.html.twig", "IfeAloesBundle:Admin:user.html.twig", 1);
        $this->blocks = array(
            'header_nav' => array($this, 'block_header_nav'),
            'content_10' => array($this, 'block_content_10'),
            'checkbox_hierarchy_widget' => array($this, 'block_checkbox_hierarchy_widget'),
            'scripts' => array($this, 'block_scripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "IfeAloesBundle:Aloes:layout-outils.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_header_nav($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"btn-group btn-breadcrumb\">   
        <a  class=\"btn btn-default\" href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("admin_outil");
        echo "\"> Réglages</a></li>
        <a  class=\"btn btn-default\" href=\"\">Gestion utilisateurs</a>
    </div> 
";
    }

    // line 10
    public function block_content_10($context, array $blocks = array())
    {
        // line 13
        echo "<div class='title-two1a col-md-12 col-sm-12'> 
\t\t\tAjouter utilisateur
\t</div>

\t<div class=\"col-sm-12 block3\">

    <table class=\"table col-sm-12 block3\">
        <thead>
  
        </thead>
        <tbody> 
\t\t\t<form class=\"form-inline\" id=\"roles\" action=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_utilisateurs_create_user", array("page" => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "sort" => (isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")), "direction" => (isset($context["direction"]) ? $context["direction"] : $this->getContext($context, "direction")))), "html", null, true);
        echo "\" method=\"post\">\t


\t\t\t   <div class=\"col-sm-12 block3\">
\t\t\t\t\t<div class='col-sm-2'> \t  \t  
\t\t\t\t    \t";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sn", array()), 'label');
        echo "
\t\t\t\t\t</div> \t  \t\t    \t
\t\t\t\t\t<div class='col-sm-10'> \t  \t  
\t\t\t\t    \t";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sn", array()), 'widget');
        echo "
\t\t\t\t \t    ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sn", array()), 'errors');
        echo "\t
\t\t\t\t \t    <br/>
\t\t\t\t\t</div> \t
\t\t\t\t\t
\t
\t\t\t\t\t<div class='col-sm-2'> \t  \t  
\t\t\t\t    \t";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "givenname", array()), 'label');
        echo "
\t\t\t\t\t</div> \t  \t\t    \t
\t\t\t\t\t<div class='col-sm-10'> \t  \t  
\t\t\t\t    \t";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "givenname", array()), 'widget');
        echo "
\t\t\t\t \t    ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "givenname", array()), 'errors');
        echo "\t
\t\t\t\t \t    <br/>
\t\t\t\t\t</div> \t
\t
\t\t\t\t\t<div class='col-sm-2'> \t  \t  
\t\t\t\t    \t";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'label');
        echo "
\t\t\t\t\t</div> \t  \t\t    \t
\t\t\t\t\t<div class='col-sm-10'> \t  \t  
\t\t\t\t    \t";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget');
        echo "
\t\t\t\t \t    ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'errors');
        echo "\t
\t\t\t\t \t    <br/>
\t\t\t\t\t</div> \t
\t
\t\t\t\t\t<div class='col-sm-2'> \t  \t  
\t\t\t\t    \t";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label');
        echo "
\t\t\t\t\t</div> \t  \t\t    \t
\t\t\t\t\t<div class='col-sm-10'> \t  \t  
\t\t\t\t    \t";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget');
        echo "
\t\t\t\t \t    ";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "\t
\t\t\t\t \t    <br/>
\t\t\t\t\t</div> \t
\t\t\t  </div>\t\t\t\t\t\t
\t\t\t  
\t\t\t  <div class=\"col-sm-12 block3\">\t
\t\t\t\t\t<div class='col-sm-2'> \t  \t  
\t\t\t\t    \t";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "role1", array()), 'label');
        echo "
\t\t\t\t\t</div> \t  \t\t    \t
\t\t\t\t\t<div class='col-sm-10'> \t  \t  
\t\t\t\t    \t";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "role1", array()), 'widget');
        echo "
\t\t\t\t \t    ";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "role1", array()), 'errors');
        echo "\t
\t\t\t\t\t</div> \t
\t\t\t  </div>

\t\t\t  <div id=\"role2\" class=\"col-sm-12 block3\">\t\t\t\t  

\t\t\t\t\t\t";
        // line 78
        if ((array_key_exists("msg2", $context) && ((isset($context["msg2"]) ? $context["msg2"] : $this->getContext($context, "msg2")) != ""))) {
            // line 79
            echo "\t\t\t\t\t\t<div class=\"col-sm-12 alert alert-danger\" role=\"alert\">\t";
            echo (isset($context["msg2"]) ? $context["msg2"] : $this->getContext($context, "msg2"));
            echo "</div>
\t\t\t\t\t\t";
        }
        // line 81
        echo "\t\t\t\t\t  \t<div id=\"R2\">\t
\t\t\t\t\t\t\t<div class='col-sm-2'> \t  \t  
\t\t\t\t\t\t    \t";
        // line 83
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "role2", array()), 'label');
        echo "
\t\t\t\t\t\t\t</div> \t  \t\t    \t
\t\t\t\t\t\t\t<div class='col-sm-10'> \t  \t  
\t\t\t\t\t\t    \t";
        // line 86
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "role2", array()), 'widget');
        echo "
\t\t\t\t\t\t \t    ";
        // line 87
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "role2", array()), 'errors');
        echo "\t
\t\t\t\t\t\t\t</div> \t
\t\t\t\t\t\t</div>\t
\t\t\t\t\t  \t<div id=\"A2\">\t\t\t

\t\t\t\t\t\t\t<div class='col-sm-2'> \t  \t  
\t\t\t\t\t\t    \t";
        // line 93
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "courses2", array()), 'label');
        echo "
\t\t\t\t\t\t\t</div> \t  \t\t    \t
\t\t\t\t\t\t\t<div class='col-sm-10'> \t  \t  
\t\t\t\t\t\t    \t";
        // line 96
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "courses2", array()), 'widget');
        echo "
\t\t\t\t\t\t \t    ";
        // line 97
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "courses2", array()), 'errors');
        echo "\t
\t\t\t\t\t\t\t</div> \t
\t\t\t\t\t\t</div>

\t\t\t</div>\t  

\t\t\t<div id=\"role3\" class=\"col-sm-12 block3\">\t\t\t\t\t  
\t\t\t\t";
        // line 104
        if ((array_key_exists("msg3", $context) && ((isset($context["msg3"]) ? $context["msg3"] : $this->getContext($context, "msg3")) != ""))) {
            // line 105
            echo "\t\t\t\t\t\t<div class=\"col-sm-12 alert alert-danger\" role=\"alert\">\t";
            echo (isset($context["msg3"]) ? $context["msg3"] : $this->getContext($context, "msg3"));
            echo "</div>
\t\t\t\t";
        }
        // line 106
        echo "\t\t\t  
\t\t\t\t<div id=\"R3\">
\t\t\t\t\t<div class='col-sm-2'> \t  \t  
\t\t\t\t    \t";
        // line 109
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "role3", array()), 'label');
        echo "
\t\t\t\t\t</div> \t  \t\t    \t
\t\t\t\t\t<div class='col-sm-10'> \t  \t  
\t\t\t\t    \t";
        // line 112
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "role3", array()), 'widget');
        echo "
\t\t\t\t \t    ";
        // line 113
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "role3", array()), 'errors');
        echo "\t
\t\t\t\t\t</div> 
\t\t\t\t</div>\t\t

\t\t\t\t<div id=\"A3\">
\t\t\t\t\t\t\t<div class='col-sm-2'> \t  \t  
\t\t\t\t\t\t    \t";
        // line 119
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "courses3", array()), 'label');
        echo "
\t\t\t\t\t\t\t</div> \t  \t\t    \t
\t\t\t\t\t\t\t<div class='col-sm-10'> \t  \t  
\t\t\t\t\t\t    \t";
        // line 122
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "courses3", array()), 'widget');
        echo "
\t\t\t\t\t\t \t    ";
        // line 123
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "courses3", array()), 'errors');
        echo "\t
\t\t\t\t\t\t\t</div> \t

 
\t\t\t\t</div>

\t\t\t</div>\t  

 
\t\t\t\t";
        // line 132
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "\t

\t\t\t\t<div class='col-sm-12'>\t
\t\t\t\t\t<hr/>
\t\t\t\t</div>\t\t\t\t
    
\t\t\t\t<div class='col-sm-12'>\t
\t\t\t\t\t\t<div class='col-sm-3'> 
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-success btn\">Ajouter</button>
\t\t\t\t\t\t</div>
\t\t\t\t    \t<div class='col-sm-9'>
\t\t\t\t    \t\t<a href=\"";
        // line 143
        echo $this->env->getExtension('routing')->getPath("admin_utilisateurs");
        echo "\"><span class=\"glyphicon glyphicon-arrow-left\"></span>  Retour à la liste des utilisateurs </a>
\t\t\t\t    \t</div>
\t\t\t\t</div>\t\t
\t\t\t\t
\t\t\t\t<div class='col-sm-12'>\t
\t\t\t\t</div>\t\t

\t\t\t</form>\t\t
        </tbody>
    </table>
\t</div>
 
\t          
    
";
    }

    // line 160
    public function block_checkbox_hierarchy_widget($context, array $blocks = array())
    {
        // line 161
        echo "  <ul class=\"listless spaced-listless\" id=\"mainList\">
        ";
        // line 162
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
            // line 163
            echo "            ";
            if (twig_test_iterable($context["children"])) {
                // line 164
                echo "                <ul>
                    ";
                // line 165
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["children"]);
                foreach ($context['_seq'] as $context["child"] => $context["choiceView"]) {
                    // line 166
                    echo "                        <li>
                            <label class=\"checkbox\">
                                ";
                    // line 168
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "offsetGet", array(0 => $context["child"]), "method"), 'widget');
                    echo "
                                ";
                    // line 169
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "offsetGet", array(0 => $context["child"]), "method"), "vars", array()), "label", array()), "html", null, true);
                    echo "
                            </label>
                        </li>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['child'], $context['choiceView'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 173
                echo "                </ul>
            ";
            } else {
                // line 175
                echo "
                ";
                // line 177
                echo "                ";
                if ( !$this->getAttribute($context["loop"], "first", array())) {
                    // line 178
                    echo "                    </li>
                ";
                }
                // line 180
                echo "
                <li>
                <label class=\"checkbox\">
                    ";
                // line 183
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "offsetGet", array(0 => $context["choiceOrOptionGroup"]), "method"), 'widget');
                echo "
                    ";
                // line 184
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "offsetGet", array(0 => $context["choiceOrOptionGroup"]), "method"), "vars", array()), "label", array()), "html", null, true);
                echo "
                </label>
            ";
            }
            // line 187
            echo "
            ";
            // line 189
            echo "            ";
            if ($this->getAttribute($context["loop"], "last", array())) {
                // line 190
                echo "                </li>
            ";
            }
            // line 192
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
        // line 193
        echo "    </ul>


";
    }

    // line 201
    public function block_scripts($context, array $blocks = array())
    {
        // line 202
        echo "\t
  ";
        // line 203
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
        return "IfeAloesBundle:Admin:user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  418 => 203,  415 => 202,  412 => 201,  405 => 193,  391 => 192,  387 => 190,  384 => 189,  381 => 187,  375 => 184,  371 => 183,  366 => 180,  362 => 178,  359 => 177,  356 => 175,  352 => 173,  342 => 169,  338 => 168,  334 => 166,  330 => 165,  327 => 164,  324 => 163,  307 => 162,  304 => 161,  301 => 160,  282 => 143,  268 => 132,  256 => 123,  252 => 122,  246 => 119,  237 => 113,  233 => 112,  227 => 109,  222 => 106,  216 => 105,  214 => 104,  204 => 97,  200 => 96,  194 => 93,  185 => 87,  181 => 86,  175 => 83,  171 => 81,  165 => 79,  163 => 78,  154 => 72,  150 => 71,  144 => 68,  134 => 61,  130 => 60,  124 => 57,  116 => 52,  112 => 51,  106 => 48,  98 => 43,  94 => 42,  88 => 39,  79 => 33,  75 => 32,  69 => 29,  61 => 24,  48 => 13,  45 => 10,  37 => 5,  34 => 4,  31 => 3,  11 => 1,);
    }
}
/* {% extends 'IfeAloesBundle:Aloes:layout-outils.html.twig' %}*/
/* */
/*  {% block header_nav %}*/
/*     <div class="btn-group btn-breadcrumb">   */
/*         <a  class="btn btn-default" href="{{path('admin_outil')}}"> Réglages</a></li>*/
/*         <a  class="btn btn-default" href="">Gestion utilisateurs</a>*/
/*     </div> */
/* {% endblock %} */
/* */
/* {% block content_10 -%}*/
/* 	   	 						*/
/*    	*/
/*     <div class='title-two1a col-md-12 col-sm-12'> */
/* 			Ajouter utilisateur*/
/* 	</div>*/
/* */
/* 	<div class="col-sm-12 block3">*/
/* */
/*     <table class="table col-sm-12 block3">*/
/*         <thead>*/
/*   */
/*         </thead>*/
/*         <tbody> */
/* 			<form class="form-inline" id="roles" action="{{ path('admin_utilisateurs_create_user', { 'page' : page, 'sort' : sort, 'direction' : direction  }) }}" method="post">	*/
/* */
/* */
/* 			   <div class="col-sm-12 block3">*/
/* 					<div class='col-sm-2'> 	  	  */
/* 				    	{{ form_label(form.sn) }}*/
/* 					</div> 	  		    	*/
/* 					<div class='col-sm-10'> 	  	  */
/* 				    	{{ form_widget(form.sn) }}*/
/* 				 	    {{ form_errors(form.sn) }}	*/
/* 				 	    <br/>*/
/* 					</div> 	*/
/* 					*/
/* 	*/
/* 					<div class='col-sm-2'> 	  	  */
/* 				    	{{ form_label(form.givenname) }}*/
/* 					</div> 	  		    	*/
/* 					<div class='col-sm-10'> 	  	  */
/* 				    	{{ form_widget(form.givenname) }}*/
/* 				 	    {{ form_errors(form.givenname) }}	*/
/* 				 	    <br/>*/
/* 					</div> 	*/
/* 	*/
/* 					<div class='col-sm-2'> 	  	  */
/* 				    	{{ form_label(form.username) }}*/
/* 					</div> 	  		    	*/
/* 					<div class='col-sm-10'> 	  	  */
/* 				    	{{ form_widget(form.username) }}*/
/* 				 	    {{ form_errors(form.username) }}	*/
/* 				 	    <br/>*/
/* 					</div> 	*/
/* 	*/
/* 					<div class='col-sm-2'> 	  	  */
/* 				    	{{ form_label(form.email) }}*/
/* 					</div> 	  		    	*/
/* 					<div class='col-sm-10'> 	  	  */
/* 				    	{{ form_widget(form.email) }}*/
/* 				 	    {{ form_errors(form.email) }}	*/
/* 				 	    <br/>*/
/* 					</div> 	*/
/* 			  </div>						*/
/* 			  */
/* 			  <div class="col-sm-12 block3">	*/
/* 					<div class='col-sm-2'> 	  	  */
/* 				    	{{ form_label(form.role1) }}*/
/* 					</div> 	  		    	*/
/* 					<div class='col-sm-10'> 	  	  */
/* 				    	{{ form_widget(form.role1) }}*/
/* 				 	    {{ form_errors(form.role1) }}	*/
/* 					</div> 	*/
/* 			  </div>*/
/* */
/* 			  <div id="role2" class="col-sm-12 block3">				  */
/* */
/* 						{% if msg2 is defined  and msg2!="" %}*/
/* 						<div class="col-sm-12 alert alert-danger" role="alert">	{{ msg2|raw}}</div>*/
/* 						{% endif %}*/
/* 					  	<div id="R2">	*/
/* 							<div class='col-sm-2'> 	  	  */
/* 						    	{{ form_label(form.role2) }}*/
/* 							</div> 	  		    	*/
/* 							<div class='col-sm-10'> 	  	  */
/* 						    	{{ form_widget(form.role2) }}*/
/* 						 	    {{ form_errors(form.role2) }}	*/
/* 							</div> 	*/
/* 						</div>	*/
/* 					  	<div id="A2">			*/
/* */
/* 							<div class='col-sm-2'> 	  	  */
/* 						    	{{ form_label(form.courses2) }}*/
/* 							</div> 	  		    	*/
/* 							<div class='col-sm-10'> 	  	  */
/* 						    	{{ form_widget(form.courses2) }}*/
/* 						 	    {{ form_errors(form.courses2) }}	*/
/* 							</div> 	*/
/* 						</div>*/
/* */
/* 			</div>	  */
/* */
/* 			<div id="role3" class="col-sm-12 block3">					  */
/* 				{% if msg3 is defined and msg3!=""%}*/
/* 						<div class="col-sm-12 alert alert-danger" role="alert">	{{ msg3|raw}}</div>*/
/* 				{% endif %}			  */
/* 				<div id="R3">*/
/* 					<div class='col-sm-2'> 	  	  */
/* 				    	{{ form_label(form.role3) }}*/
/* 					</div> 	  		    	*/
/* 					<div class='col-sm-10'> 	  	  */
/* 				    	{{ form_widget(form.role3) }}*/
/* 				 	    {{ form_errors(form.role3) }}	*/
/* 					</div> */
/* 				</div>		*/
/* */
/* 				<div id="A3">*/
/* 							<div class='col-sm-2'> 	  	  */
/* 						    	{{ form_label(form.courses3) }}*/
/* 							</div> 	  		    	*/
/* 							<div class='col-sm-10'> 	  	  */
/* 						    	{{ form_widget(form.courses3) }}*/
/* 						 	    {{ form_errors(form.courses3) }}	*/
/* 							</div> 	*/
/* */
/*  */
/* 				</div>*/
/* */
/* 			</div>	  */
/* */
/*  */
/* 				{{ form_rest(form) }}	*/
/* */
/* 				<div class='col-sm-12'>	*/
/* 					<hr/>*/
/* 				</div>				*/
/*     */
/* 				<div class='col-sm-12'>	*/
/* 						<div class='col-sm-3'> */
/* 							<button type="submit" class="btn btn-success btn">Ajouter</button>*/
/* 						</div>*/
/* 				    	<div class='col-sm-9'>*/
/* 				    		<a href="{{ path('admin_utilisateurs') }}"><span class="glyphicon glyphicon-arrow-left"></span>  Retour à la liste des utilisateurs </a>*/
/* 				    	</div>*/
/* 				</div>		*/
/* 				*/
/* 				<div class='col-sm-12'>	*/
/* 				</div>		*/
/* */
/* 			</form>		*/
/*         </tbody>*/
/*     </table>*/
/* 	</div>*/
/*  */
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
