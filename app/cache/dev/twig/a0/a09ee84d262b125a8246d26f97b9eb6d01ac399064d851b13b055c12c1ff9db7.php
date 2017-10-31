<?php

/* IfeAloesBundle:Admin:utilisateur-update.html.twig */
class __TwigTemplate_3e4c936ea9fca3efbf02faba2ace12a20e06874607eb9daaf711f86c82fa4555 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("IfeAloesBundle:Aloes:layout-outils.html.twig", "IfeAloesBundle:Admin:utilisateur-update.html.twig", 1);
        $this->blocks = array(
            'header_nav' => array($this, 'block_header_nav'),
            'content_10' => array($this, 'block_content_10'),
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

    // line 4
    public function block_header_nav($context, array $blocks = array())
    {
        // line 5
        echo "    <div class=\"btn-group btn-breadcrumb\">   
        <a  class=\"btn btn-default\" href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("admin_outil");
        echo "\"> Réglages</a></li>
        <a  class=\"btn btn-default\" href=\"\">Gestion utilisateurs</a>
    </div> 
";
    }

    // line 12
    public function block_content_10($context, array $blocks = array())
    {
        // line 15
        echo "<div class='title-two1a col-md-12 col-sm-12'> 
\t\t\tModifier utilisateur
\t</div>

\t<div class=\"col-sm-12 block3\" >\t   \t 

\t\t\t<form id=\"roles\" action=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_utilisateurs_updateuser_valid", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()), "page" => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "sort" => (isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")), "direction" => (isset($context["direction"]) ? $context["direction"] : $this->getContext($context, "direction")))), "html", null, true);
        echo "\" method=\"post\">\t


\t\t\t  <div class=\"col-sm-12 block3\" >\t
\t\t\t\t\t<div class='col-md-2'> \t  \t  
\t\t\t\t    \t";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "givenname", array()), 'label');
        echo "
\t\t\t\t\t</div> \t  \t\t    \t
\t\t\t\t\t<div class='col-md-10'> \t  \t  
\t\t\t\t    \t";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "givenname", array()), 'widget');
        echo "
\t\t\t\t \t    ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "givenname", array()), 'errors');
        echo "\t
\t\t\t\t\t</div> \t
\t
\t\t\t\t\t<div class='col-md-2'> \t  \t  
\t\t\t\t    \t";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sn", array()), 'label');
        echo "
\t\t\t\t\t</div> \t  \t\t    \t
\t\t\t\t\t<div class='col-md-10'> \t  \t  
\t\t\t\t    \t";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sn", array()), 'widget');
        echo "
\t\t\t\t \t    ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sn", array()), 'errors');
        echo "\t
\t\t\t\t\t</div> 
\t
\t\t\t\t\t<div class='col-md-2'> \t  \t  
\t\t\t\t    \t";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label');
        echo "
\t\t\t\t\t</div> \t  \t\t    \t
\t\t\t\t\t<div class='col-md-10'> \t  \t  
\t\t\t\t    \t";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget');
        echo "
\t\t\t\t \t    ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "\t
\t\t\t\t\t</div> 
\t
\t\t\t\t\t
\t\t\t\t\t<div class='col-md-2'> \t  \t  
\t\t\t\t    \t";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fonction", array()), 'label');
        echo "
\t\t\t\t\t</div> \t  \t\t    \t
\t\t\t\t\t<div class='col-md-10'> \t  \t  
\t\t\t\t    \t";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fonction", array()), 'widget');
        echo "
\t\t\t\t \t    ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fonction", array()), 'errors');
        echo "\t
\t\t\t\t\t</div> \t

\t\t\t  </div>

\t\t\t  
\t\t\t  <div class=\"col-sm-12 block3\" >\t
\t\t\t\t\t<div class='col-md-2'> \t  \t  
\t\t\t\t    \t";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "role1", array()), 'label');
        echo "
\t\t\t\t\t</div> \t  \t\t    \t
\t\t\t\t\t<div class='col-md-10'> \t  \t  
\t\t\t\t    \t";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "role1", array()), 'widget');
        echo "
\t\t\t\t \t    ";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "role1", array()), 'errors');
        echo "\t
\t\t\t\t\t</div> \t

\t\t\t  </div>

\t\t\t  <div id=\"role2\" class=\"block3 col-sm-12\">\t\t\t\t  
\t
\t\t\t\t\t  \t<div id=\"R2\">\t
\t\t\t\t\t\t\t<div class='col-sm-2'> \t  \t  
\t\t\t\t\t\t    \t";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "role2", array()), 'label');
        echo "
\t\t\t\t\t\t\t</div> \t  \t\t    \t
\t\t\t\t\t\t\t<div class='col-sm-10'> \t  \t  
\t\t\t\t\t\t    \t";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "role2", array()), 'widget');
        echo "
\t\t\t\t\t\t \t    ";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "role2", array()), 'errors');
        echo "\t
\t\t\t\t\t\t\t</div> \t
\t\t\t\t\t\t</div>\t
\t\t\t\t\t  \t<div id=\"A2\" class=\"col-sm-12\">\t\t\t

\t\t\t\t\t\t\t<div class='col-sm-2'> \t  \t  
\t\t\t\t\t\t    \t";
        // line 86
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "courses2", array()), 'label');
        echo "
\t\t\t\t\t\t\t</div> \t  \t\t    \t
\t\t\t\t\t\t\t<div class='col-sm-10'> \t  \t  
\t\t\t\t\t\t    \t";
        // line 89
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "courses2", array()), 'widget');
        echo "
\t\t\t\t\t\t \t    ";
        // line 90
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "courses2", array()), 'errors');
        echo "\t
\t\t\t\t\t\t\t</div> \t
\t\t\t\t\t\t</div>

\t\t\t</div>\t  

\t\t\t<div id=\"role3\" class=\"block3 col-sm-12\">\t\t\t\t\t  
\t
\t\t\t  
\t\t\t\t<div id=\"R3\">
\t\t\t\t\t<div class='col-md-2'> \t  \t  
\t\t\t\t    \t";
        // line 101
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "role3", array()), 'label');
        echo "
\t\t\t\t\t</div> \t  \t\t    \t
\t\t\t\t\t<div class='col-md-10'> \t  \t  
\t\t\t\t    \t";
        // line 104
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "role3", array()), 'widget');
        echo "
\t\t\t\t \t    ";
        // line 105
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "role3", array()), 'errors');
        echo "\t
\t\t\t\t\t</div> 
\t\t\t\t</div>\t\t

\t\t\t\t<div id=\"A3\">
\t\t\t\t\t\t\t<div class='col-md-2'> \t  \t  
\t\t\t\t\t\t    \t";
        // line 111
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "courses3", array()), 'label');
        echo "
\t\t\t\t\t\t\t</div> \t  \t\t    \t
\t\t\t\t\t\t\t<div class='col-md-10'> \t  \t  
\t\t\t\t\t\t    \t";
        // line 114
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "courses3", array()), 'widget');
        echo "
\t\t\t\t\t\t \t    ";
        // line 115
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "courses3", array()), 'errors');
        echo "\t
\t\t\t\t\t\t\t</div> \t


\t\t\t\t</div>

\t\t\t</div>\t  \t

\t\t\t\t";
        // line 123
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "\t

\t\t\t\t<div class='col-sm-12'>\t
\t\t\t\t\t<hr/>
\t\t\t\t</div>\t\t\t\t
    
\t\t\t\t<div class='col-sm-12'>\t
\t\t\t\t\t\t<div class='col-sm-3'> 
\t\t\t\t\t\t    <button type=\"submit\"  class=\"btn btn-success btn\" >Enregistrer</button>  
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class='col-sm-9'>
\t\t\t\t\t\t\t    <a href=\"";
        // line 134
        echo $this->env->getExtension('routing')->getPath("admin_utilisateurs");
        echo "\"><span class=\"glyphicon glyphicon-arrow-left\"></span> Retour à la liste des utilisateurs </a>
\t\t\t\t\t\t</div>
\t\t\t\t</div>\t\t\t\t\t



\t\t\t\t<div class='col-sm-12'>\t

\t\t\t\t</div>\t\t\t\t
    \t\t\t\t
\t\t\t\t
\t\t\t</form>\t\t
  
\t</div>   
    
";
    }

    // line 151
    public function block_scripts($context, array $blocks = array())
    {
        // line 152
        echo "\t
  ";
        // line 153
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

\t\t/* En PLUS */
\t\t\t \t\t
\t\t\$('#form_courses2 :input').each(function () {
\t\t\tif (\$(this).is(':checked'))
\t\t\t\t{
\t\t\t\tvar res = \$(this).val().split('#');
\t\t\t\tif (res[0]==\"PRO\")
\t\t\t\t\t{
\t\t\t\t\t\t\$('#form_courses2 :input').each(function () {
\t\t\t\t\t\t\tif (\$(this).attr('type')==\"checkbox\")\t
\t\t\t\t\t\t\t\t{
\t\t\t\t\t\t\t\tvar res3 = \$(this).attr('value').split('#');
\t\t\t\t\t\t\t\tif(res3[0]==\"COU\" && res[1]==res3[1])
\t\t\t\t\t\t\t\t\t{\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\$(this).closest(\"label\").show(); 
\t\t\t\t\t\t\t\t\t} 
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t});\t
\t\t\t\t\t\t
\t\t\t\t\t\t\$('#form_courses3 :input').each(function () {
\t\t\t\t\t\t\tif (\$(this).attr('type')==\"checkbox\")\t
\t\t\t\t\t\t\t\t{
\t\t\t\t\t\t\t\tvar res3 = \$(this).attr('value').split('#');
\t\t\t\t\t\t\t\tif(res3[0]==\"PRO\" &&  res[1]==res3[1])
\t\t\t\t\t\t\t\t\t\t{\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\$(this).closest(\"label\").hide(); 
\t\t\t\t\t\t\t\t\t\t} 
\t\t\t\t\t\t\t\tif(res3[0]==\"COU\" && res[1]==res3[1])
\t\t\t\t\t\t\t\t\t\t{\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\$(this).closest(\"label\").hide(); 
\t\t\t\t\t\t\t\t\t\t}  
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t});\t\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t \t\t\t\t\t\t\t\t
\t\t\t\t\t}
\t\t\t\t}
\t\t});\t

\t\t\t \t\t
\t\t\$('#form_courses3 :input').each(function () {
\t\t\tif (\$(this).is(':checked'))
\t\t\t\t{
\t\t\t\tvar res = \$(this).val().split('#');
\t\t\t\tif (res[0]==\"PRO\")
\t\t\t\t\t{
\t\t\t\t\t\t\$('#form_courses3 :input').each(function () {
\t\t\t\t\t\t\tif (\$(this).attr('type')==\"checkbox\")\t
\t\t\t\t\t\t\t\t{
\t\t\t\t\t\t\t\tvar res3 = \$(this).attr('value').split('#');
\t\t\t\t\t\t\t\tif(res3[0]==\"COU\" && res[1]==res3[1])
\t\t\t\t\t\t\t\t\t{\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\$(this).closest(\"label\").show(); 
\t\t\t\t\t\t\t\t\t} 
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t});\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t}
\t\t\t\t}
\t\t});\t


\t});         
  </script> 
";
    }

    public function getTemplateName()
    {
        return "IfeAloesBundle:Admin:utilisateur-update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  281 => 153,  278 => 152,  275 => 151,  255 => 134,  241 => 123,  230 => 115,  226 => 114,  220 => 111,  211 => 105,  207 => 104,  201 => 101,  187 => 90,  183 => 89,  177 => 86,  168 => 80,  164 => 79,  158 => 76,  146 => 67,  142 => 66,  136 => 63,  125 => 55,  121 => 54,  115 => 51,  107 => 46,  103 => 45,  97 => 42,  90 => 38,  86 => 37,  80 => 34,  73 => 30,  69 => 29,  63 => 26,  55 => 21,  47 => 15,  44 => 12,  36 => 6,  33 => 5,  30 => 4,  11 => 1,);
    }
}
/* {% extends 'IfeAloesBundle:Aloes:layout-outils.html.twig' %}*/
/* */
/* */
/* {% block header_nav %}*/
/*     <div class="btn-group btn-breadcrumb">   */
/*         <a  class="btn btn-default" href="{{path('admin_outil')}}"> Réglages</a></li>*/
/*         <a  class="btn btn-default" href="">Gestion utilisateurs</a>*/
/*     </div> */
/* {% endblock %}*/
/*   */
/* */
/* {% block content_10 -%}*/
/* */
/*   	*/
/*     <div class='title-two1a col-md-12 col-sm-12'> */
/* 			Modifier utilisateur*/
/* 	</div>*/
/* */
/* 	<div class="col-sm-12 block3" >	   	 */
/* */
/* 			<form id="roles" action="{{ path('admin_utilisateurs_updateuser_valid', { 'id': user.id ,'page' : page, 'sort' : sort, 'direction' : direction  }) }}" method="post">	*/
/* */
/* */
/* 			  <div class="col-sm-12 block3" >	*/
/* 					<div class='col-md-2'> 	  	  */
/* 				    	{{ form_label(form.givenname) }}*/
/* 					</div> 	  		    	*/
/* 					<div class='col-md-10'> 	  	  */
/* 				    	{{ form_widget(form.givenname) }}*/
/* 				 	    {{ form_errors(form.givenname) }}	*/
/* 					</div> 	*/
/* 	*/
/* 					<div class='col-md-2'> 	  	  */
/* 				    	{{ form_label(form.sn) }}*/
/* 					</div> 	  		    	*/
/* 					<div class='col-md-10'> 	  	  */
/* 				    	{{ form_widget(form.sn) }}*/
/* 				 	    {{ form_errors(form.sn) }}	*/
/* 					</div> */
/* 	*/
/* 					<div class='col-md-2'> 	  	  */
/* 				    	{{ form_label(form.email) }}*/
/* 					</div> 	  		    	*/
/* 					<div class='col-md-10'> 	  	  */
/* 				    	{{ form_widget(form.email) }}*/
/* 				 	    {{ form_errors(form.email) }}	*/
/* 					</div> */
/* 	*/
/* 					*/
/* 					<div class='col-md-2'> 	  	  */
/* 				    	{{ form_label(form.fonction) }}*/
/* 					</div> 	  		    	*/
/* 					<div class='col-md-10'> 	  	  */
/* 				    	{{ form_widget(form.fonction) }}*/
/* 				 	    {{ form_errors(form.fonction) }}	*/
/* 					</div> 	*/
/* */
/* 			  </div>*/
/* */
/* 			  */
/* 			  <div class="col-sm-12 block3" >	*/
/* 					<div class='col-md-2'> 	  	  */
/* 				    	{{ form_label(form.role1) }}*/
/* 					</div> 	  		    	*/
/* 					<div class='col-md-10'> 	  	  */
/* 				    	{{ form_widget(form.role1) }}*/
/* 				 	    {{ form_errors(form.role1) }}	*/
/* 					</div> 	*/
/* */
/* 			  </div>*/
/* */
/* 			  <div id="role2" class="block3 col-sm-12">				  */
/* 	*/
/* 					  	<div id="R2">	*/
/* 							<div class='col-sm-2'> 	  	  */
/* 						    	{{ form_label(form.role2) }}*/
/* 							</div> 	  		    	*/
/* 							<div class='col-sm-10'> 	  	  */
/* 						    	{{ form_widget(form.role2) }}*/
/* 						 	    {{ form_errors(form.role2) }}	*/
/* 							</div> 	*/
/* 						</div>	*/
/* 					  	<div id="A2" class="col-sm-12">			*/
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
/* 			<div id="role3" class="block3 col-sm-12">					  */
/* 	*/
/* 			  */
/* 				<div id="R3">*/
/* 					<div class='col-md-2'> 	  	  */
/* 				    	{{ form_label(form.role3) }}*/
/* 					</div> 	  		    	*/
/* 					<div class='col-md-10'> 	  	  */
/* 				    	{{ form_widget(form.role3) }}*/
/* 				 	    {{ form_errors(form.role3) }}	*/
/* 					</div> */
/* 				</div>		*/
/* */
/* 				<div id="A3">*/
/* 							<div class='col-md-2'> 	  	  */
/* 						    	{{ form_label(form.courses3) }}*/
/* 							</div> 	  		    	*/
/* 							<div class='col-md-10'> 	  	  */
/* 						    	{{ form_widget(form.courses3) }}*/
/* 						 	    {{ form_errors(form.courses3) }}	*/
/* 							</div> 	*/
/* */
/* */
/* 				</div>*/
/* */
/* 			</div>	  	*/
/* */
/* 				{{ form_rest(form) }}	*/
/* */
/* 				<div class='col-sm-12'>	*/
/* 					<hr/>*/
/* 				</div>				*/
/*     */
/* 				<div class='col-sm-12'>	*/
/* 						<div class='col-sm-3'> */
/* 						    <button type="submit"  class="btn btn-success btn" >Enregistrer</button>  */
/* 						</div>*/
/* 						<div class='col-sm-9'>*/
/* 							    <a href="{{ path('admin_utilisateurs') }}"><span class="glyphicon glyphicon-arrow-left"></span> Retour à la liste des utilisateurs </a>*/
/* 						</div>*/
/* 				</div>					*/
/* */
/* */
/* */
/* 				<div class='col-sm-12'>	*/
/* */
/* 				</div>				*/
/*     				*/
/* 				*/
/* 			</form>		*/
/*   */
/* 	</div>   */
/*     */
/* {% endblock %} */
/* */
/* {% block scripts %}*/
/* 	*/
/*   {{ parent() }}*/
/* */
/*   <script type="text/javascript">*/
/*   */
/*     $(document).ready(function(){*/
/* */
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
/* */
/* 		/* En PLUS *//* */
/* 			 		*/
/* 		$('#form_courses2 :input').each(function () {*/
/* 			if ($(this).is(':checked'))*/
/* 				{*/
/* 				var res = $(this).val().split('#');*/
/* 				if (res[0]=="PRO")*/
/* 					{*/
/* 						$('#form_courses2 :input').each(function () {*/
/* 							if ($(this).attr('type')=="checkbox")	*/
/* 								{*/
/* 								var res3 = $(this).attr('value').split('#');*/
/* 								if(res3[0]=="COU" && res[1]==res3[1])*/
/* 									{					*/
/* 									$(this).closest("label").show(); */
/* 									} */
/* 								}*/
/* 						});	*/
/* 						*/
/* 						$('#form_courses3 :input').each(function () {*/
/* 							if ($(this).attr('type')=="checkbox")	*/
/* 								{*/
/* 								var res3 = $(this).attr('value').split('#');*/
/* 								if(res3[0]=="PRO" &&  res[1]==res3[1])*/
/* 										{					*/
/* 										$(this).closest("label").hide(); */
/* 										} */
/* 								if(res3[0]=="COU" && res[1]==res3[1])*/
/* 										{					*/
/* 										$(this).closest("label").hide(); */
/* 										}  */
/* 								}*/
/* 						});							*/
/* 						*/
/* 														 								*/
/* 					}*/
/* 				}*/
/* 		});	*/
/* */
/* 			 		*/
/* 		$('#form_courses3 :input').each(function () {*/
/* 			if ($(this).is(':checked'))*/
/* 				{*/
/* 				var res = $(this).val().split('#');*/
/* 				if (res[0]=="PRO")*/
/* 					{*/
/* 						$('#form_courses3 :input').each(function () {*/
/* 							if ($(this).attr('type')=="checkbox")	*/
/* 								{*/
/* 								var res3 = $(this).attr('value').split('#');*/
/* 								if(res3[0]=="COU" && res[1]==res3[1])*/
/* 									{					*/
/* 									$(this).closest("label").show(); */
/* 									} */
/* 								}*/
/* 						});										*/
/* 								*/
/* 					}*/
/* 				}*/
/* 		});	*/
/* */
/* */
/* 	});         */
/*   </script> */
/* {% endblock %}*/
/* */
/*     */
/* */
