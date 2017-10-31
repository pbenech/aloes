<?php

/* ::public.html.twig */
class __TwigTemplate_669fdf4828c7c42e950d5952a561bf40ed89aef0770ca091d3e49419ce1136a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header_nav' => array($this, 'block_header_nav'),
            'content' => array($this, 'block_content'),
            'scripts' => array($this, 'block_scripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
        <meta charset=\"utf-8\">
        
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">  
        

        ";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        // line 13
        echo "
        ";
        // line 14
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 22
        echo "    </head>

    <body> 
 
        <!-- Header -->
        <div class=\"container-fluid\" id=\"header\">
            <div class=\"row  top-bar \"> 
                <div class=\"col-md-offset-2 col-sm-offset-3\">
                    ";
        // line 30
        $this->displayBlock('header_nav', $context, $blocks);
        // line 32
        echo "                </div>
            </div>
        </div>

        <div class=\"container-fluid\">

            <div class=\"row\">

                <!-- Main content -->
                <div class=\"col-md-12\" id=\"content\" data-course=\"1\" data-program=\"2\">
                    ";
        // line 42
        $this->displayBlock('content', $context, $blocks);
        // line 45
        echo "                </div>

            </div>

        </div>
        
        ";
        // line 51
        $this->displayBlock('scripts', $context, $blocks);
        // line 56
        echo "

    </body>

</html>
";
    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        // line 11
        echo "            <title> @loes </title>
        ";
    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 15
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ifealoes/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\">
            <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ifealoes/css/dashboard-layout.css"), "html", null, true);
        echo "\" type=\"text/css\">
            <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ifealoes/css/layout.css"), "html", null, true);
        echo "\" type=\"text/css\">
            <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ifealoes/css/sessions.css"), "html", null, true);
        echo "\" type=\"text/css\">
            <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ifealoes/css/sessions.css"), "html", null, true);
        echo "\" type=\"text/css\"> 
            <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/scdatetimepicker/css/datetimepicker.css"), "html", null, true);
        echo "\" type=\"text/css\"> 
        ";
    }

    // line 30
    public function block_header_nav($context, array $blocks = array())
    {
        // line 31
        echo "                    ";
    }

    // line 42
    public function block_content($context, array $blocks = array())
    {
        // line 43
        echo "                        <h1> Main content </h1>
                    ";
    }

    // line 51
    public function block_scripts($context, array $blocks = array())
    {
        // line 52
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ifealoes/js/jquery.min.js"), "html", null, true);
        echo "\"></script>            
            <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ifealoes/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/scdatetimepicker/js/bootstrap-datetimepicker.js"), "html", null, true);
        echo "\"></script>
        ";
    }

    public function getTemplateName()
    {
        return "::public.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  152 => 54,  148 => 53,  143 => 52,  140 => 51,  135 => 43,  132 => 42,  128 => 31,  125 => 30,  119 => 20,  115 => 19,  111 => 18,  107 => 17,  103 => 16,  98 => 15,  95 => 14,  90 => 11,  87 => 10,  78 => 56,  76 => 51,  68 => 45,  66 => 42,  54 => 32,  52 => 30,  42 => 22,  40 => 14,  37 => 13,  35 => 10,  24 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/*     <head>*/
/*         <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">*/
/*         <meta charset="utf-8">*/
/*         */
/*         <meta http-equiv="X-UA-Compatible" content="IE=edge">  */
/*         */
/* */
/*         {% block title %}*/
/*             <title> @loes </title>*/
/*         {% endblock %}*/
/* */
/*         {% block stylesheets %}*/
/*             <link rel="stylesheet" href="{{asset('bundles/ifealoes/bootstrap/css/bootstrap.min.css')}}" type="text/css">*/
/*             <link rel="stylesheet" href="{{asset('bundles/ifealoes/css/dashboard-layout.css')}}" type="text/css">*/
/*             <link rel="stylesheet" href="{{asset('bundles/ifealoes/css/layout.css')}}" type="text/css">*/
/*             <link rel="stylesheet" href="{{asset('bundles/ifealoes/css/sessions.css')}}" type="text/css">*/
/*             <link rel="stylesheet" href="{{asset('bundles/ifealoes/css/sessions.css')}}" type="text/css"> */
/*             <link rel="stylesheet" href="{{asset('bundles/scdatetimepicker/css/datetimepicker.css')}}" type="text/css"> */
/*         {% endblock %}*/
/*     </head>*/
/* */
/*     <body> */
/*  */
/*         <!-- Header -->*/
/*         <div class="container-fluid" id="header">*/
/*             <div class="row  top-bar "> */
/*                 <div class="col-md-offset-2 col-sm-offset-3">*/
/*                     {% block header_nav %}*/
/*                     {% endblock %}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="container-fluid">*/
/* */
/*             <div class="row">*/
/* */
/*                 <!-- Main content -->*/
/*                 <div class="col-md-12" id="content" data-course="1" data-program="2">*/
/*                     {% block content %}*/
/*                         <h1> Main content </h1>*/
/*                     {% endblock %}*/
/*                 </div>*/
/* */
/*             </div>*/
/* */
/*         </div>*/
/*         */
/*         {% block scripts %}*/
/*             <script src="{{asset('bundles/ifealoes/js/jquery.min.js')}}"></script>            */
/*             <script src="{{asset('bundles/ifealoes/bootstrap/js/bootstrap.min.js')}}"></script>*/
/*             <script src="{{asset('bundles/scdatetimepicker/js/bootstrap-datetimepicker.js')}}"></script>*/
/*         {% endblock %}*/
/* */
/* */
/*     </body>*/
/* */
/* </html>*/
/* */
