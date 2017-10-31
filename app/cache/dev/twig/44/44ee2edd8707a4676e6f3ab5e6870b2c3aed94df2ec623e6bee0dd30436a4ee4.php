<?php

/* IfeAloesBundle:Resp:utilisateur.html.twig */
class __TwigTemplate_9943dea52a46ce17f750c33d0101b934d411b483fe7c7c06ae4e08d5c41f7e6c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("IfeAloesBundle:Aloes:layout.html.twig", "IfeAloesBundle:Resp:utilisateur.html.twig", 1);
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
        echo "<div class='title-one'> Ajout d'un utilisateur LDAP </div>

\t   \t 
 \t 
\t<fieldset>
\t\t<div  class=\"col-sm-9 col-xs-12\">\t
\t\t\t<form class=\"form-inline\" action=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("resp_utilisateurs_add_ldap", array("page" => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "sort" => (isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")), "direction" => (isset($context["direction"]) ? $context["direction"] : $this->getContext($context, "direction")))), "html", null, true);
        echo "\" method=\"post\">\t
\t\t\t\t<div  class=\"col-sm-4  col-xs-12\">\t
\t\t\t\t\t";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "search", array()), 'widget');
        echo "
\t\t\t\t</div>\t\t\t\t   \t\t\t
\t\t\t\t";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "\t
\t\t\t\t<div  class=\"col-sm-4  col-xs-12\">\t
\t\t\t\t\t<button type=\"submit\" class=\"btn  btn-button-cancel \">Rechercher</button>
\t\t\t\t</div>
\t\t\t</form>
\t\t</div>\t\t\t\t\t\t\t    
\t</fieldset>\t\t\t\t\t\t\t

\t<fieldset>

\t
\t";
        // line 28
        if (((isset($context["findLdap"]) ? $context["findLdap"] : $this->getContext($context, "findLdap")) > 0)) {
            // line 29
            echo "
    <table class=\"table\">
        <thead>
  
        </thead>
        <tbody> 
\t\t\t<form class=\"form-inline\" id=\"roles\" action=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("resp_utilisateurs_create_ldap", array("page" => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "sort" => (isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")), "direction" => (isset($context["direction"]) ? $context["direction"] : $this->getContext($context, "direction")))), "html", null, true);
            echo "\" method=\"post\">\t


\t\t\t\t<div class='col-md-2'> \t  \t  
\t\t\t    \t";
            // line 39
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formLdap"]) ? $context["formLdap"] : $this->getContext($context, "formLdap")), "users", array()), 'label');
            echo "
\t\t\t\t</div> \t  \t\t    \t
\t\t\t\t<div class='col-md-10'> \t  \t  
\t\t\t    \t";
            // line 42
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formLdap"]) ? $context["formLdap"] : $this->getContext($context, "formLdap")), "users", array()), 'widget');
            echo "
\t\t\t \t    ";
            // line 43
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formLdap"]) ? $context["formLdap"] : $this->getContext($context, "formLdap")), "users", array()), 'errors');
            echo "\t
\t\t\t \t    <br/>
\t\t\t\t</div> \t
\t\t\t  
\t\t\t  <fieldset>\t
\t\t\t\t\t<div class='col-md-2'> \t  \t  
\t\t\t\t\t\t";
            // line 49
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formLdap"]) ? $context["formLdap"] : $this->getContext($context, "formLdap")), "courses3", array()), 'label');
            echo "
\t\t\t\t\t</div> \t  \t\t    \t
\t\t\t\t\t<div class='col-md-10'> \t  \t  
\t\t\t\t\t\t";
            // line 52
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formLdap"]) ? $context["formLdap"] : $this->getContext($context, "formLdap")), "courses3", array()), 'widget');
            echo "
\t\t\t\t\t\t";
            // line 53
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formLdap"]) ? $context["formLdap"] : $this->getContext($context, "formLdap")), "courses3", array()), 'errors');
            echo "\t
\t\t\t\t\t</div> \t
\t\t\t  </fieldset>


\t\t\t\t";
            // line 58
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formLdap"]) ? $context["formLdap"] : $this->getContext($context, "formLdap")), 'rest');
            echo "\t
\t\t\t\t
    
\t\t\t\t<div class='row'>\t
\t\t\t\t\t\t<div class='col-md-3'> 
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-success btn\">Ajouter</button>
\t\t\t\t\t\t</div>
\t\t\t\t    \t<div class='col-md-3'>
\t\t\t\t    \t\t<a href=\"";
            // line 66
            echo $this->env->getExtension('routing')->getPath("resp_utilisateurs");
            echo "\"> Retour à la liste des utilisateurs </a>
\t\t\t\t    \t</div>
\t\t\t\t</div>\t\t\t\t
\t\t\t\t

\t\t\t</form>\t\t
        </tbody>
    </table>
\t";
        }
        // line 75
        echo "\t
\t    
\t</fieldset>    
\t          
    
";
    }

    // line 83
    public function block_checkbox_hierarchy_widget($context, array $blocks = array())
    {
        // line 84
        echo "  <ul class=\"listless spaced-listless\" id=\"mainList\">
        ";
        // line 85
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
            // line 86
            echo "            ";
            if (twig_test_iterable($context["children"])) {
                // line 87
                echo "                <ul>
                    ";
                // line 88
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["children"]);
                foreach ($context['_seq'] as $context["child"] => $context["choiceView"]) {
                    // line 89
                    echo "                        <li>
                            <label class=\"checkbox\">
                                ";
                    // line 91
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "offsetGet", array(0 => $context["child"]), "method"), 'widget');
                    echo "
                                ";
                    // line 92
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "offsetGet", array(0 => $context["child"]), "method"), "vars", array()), "label", array()), "html", null, true);
                    echo "
                            </label>
                        </li>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['child'], $context['choiceView'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 96
                echo "                </ul>
            ";
            } else {
                // line 98
                echo "
                ";
                // line 100
                echo "                ";
                if ( !$this->getAttribute($context["loop"], "first", array())) {
                    // line 101
                    echo "                    </li>
                ";
                }
                // line 103
                echo "
                <li>
                <label class=\"checkbox\">
                    ";
                // line 106
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "offsetGet", array(0 => $context["choiceOrOptionGroup"]), "method"), 'widget');
                echo "
                    ";
                // line 107
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "offsetGet", array(0 => $context["choiceOrOptionGroup"]), "method"), "vars", array()), "label", array()), "html", null, true);
                echo "
                </label>
            ";
            }
            // line 110
            echo "
            ";
            // line 112
            echo "            ";
            if ($this->getAttribute($context["loop"], "last", array())) {
                // line 113
                echo "                </li>
            ";
            }
            // line 115
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
        // line 116
        echo "    </ul>


";
    }

    // line 124
    public function block_scripts($context, array $blocks = array())
    {
        // line 125
        echo "\t
  ";
        // line 126
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
        return "IfeAloesBundle:Resp:utilisateur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  268 => 126,  265 => 125,  262 => 124,  255 => 116,  241 => 115,  237 => 113,  234 => 112,  231 => 110,  225 => 107,  221 => 106,  216 => 103,  212 => 101,  209 => 100,  206 => 98,  202 => 96,  192 => 92,  188 => 91,  184 => 89,  180 => 88,  177 => 87,  174 => 86,  157 => 85,  154 => 84,  151 => 83,  142 => 75,  130 => 66,  119 => 58,  111 => 53,  107 => 52,  101 => 49,  92 => 43,  88 => 42,  82 => 39,  75 => 35,  67 => 29,  65 => 28,  51 => 17,  46 => 15,  41 => 13,  33 => 7,  30 => 5,  11 => 1,);
    }
}
/* {% extends 'IfeAloesBundle:Aloes:layout.html.twig' %}*/
/* */
/*   */
/* */
/* {% block content -%}*/
/* */
/*     <div class='title-one'> Ajout d'un utilisateur LDAP </div>*/
/* */
/* 	   	 */
/*  	 */
/* 	<fieldset>*/
/* 		<div  class="col-sm-9 col-xs-12">	*/
/* 			<form class="form-inline" action="{{ path('resp_utilisateurs_add_ldap', { 'page' : page, 'sort' : sort, 'direction' : direction  }) }}" method="post">	*/
/* 				<div  class="col-sm-4  col-xs-12">	*/
/* 					{{ form_widget(form.search) }}*/
/* 				</div>				   			*/
/* 				{{ form_rest(form) }}	*/
/* 				<div  class="col-sm-4  col-xs-12">	*/
/* 					<button type="submit" class="btn  btn-button-cancel ">Rechercher</button>*/
/* 				</div>*/
/* 			</form>*/
/* 		</div>							    */
/* 	</fieldset>							*/
/* */
/* 	<fieldset>*/
/* */
/* 	*/
/* 	{% if findLdap > 0%}*/
/* */
/*     <table class="table">*/
/*         <thead>*/
/*   */
/*         </thead>*/
/*         <tbody> */
/* 			<form class="form-inline" id="roles" action="{{ path('resp_utilisateurs_create_ldap', { 'page' : page, 'sort' : sort, 'direction' : direction  }) }}" method="post">	*/
/* */
/* */
/* 				<div class='col-md-2'> 	  	  */
/* 			    	{{ form_label(formLdap.users) }}*/
/* 				</div> 	  		    	*/
/* 				<div class='col-md-10'> 	  	  */
/* 			    	{{ form_widget(formLdap.users) }}*/
/* 			 	    {{ form_errors(formLdap.users) }}	*/
/* 			 	    <br/>*/
/* 				</div> 	*/
/* 			  */
/* 			  <fieldset>	*/
/* 					<div class='col-md-2'> 	  	  */
/* 						{{ form_label(formLdap.courses3) }}*/
/* 					</div> 	  		    	*/
/* 					<div class='col-md-10'> 	  	  */
/* 						{{ form_widget(formLdap.courses3) }}*/
/* 						{{ form_errors(formLdap.courses3) }}	*/
/* 					</div> 	*/
/* 			  </fieldset>*/
/* */
/* */
/* 				{{ form_rest(formLdap) }}	*/
/* 				*/
/*     */
/* 				<div class='row'>	*/
/* 						<div class='col-md-3'> */
/* 							<button type="submit" class="btn btn-success btn">Ajouter</button>*/
/* 						</div>*/
/* 				    	<div class='col-md-3'>*/
/* 				    		<a href="{{ path('resp_utilisateurs') }}"> Retour à la liste des utilisateurs </a>*/
/* 				    	</div>*/
/* 				</div>				*/
/* 				*/
/* */
/* 			</form>		*/
/*         </tbody>*/
/*     </table>*/
/* 	{% endif %}*/
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
/*  */
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
