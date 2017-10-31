<?php

/* ::layout.html.twig */
class __TwigTemplate_cf6d6efbecabdb6cd2f9b382cda3ed2ae0938c606ba6a23f7786e7f5d2cb6d99 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'scripts' => array($this, 'block_scripts'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'sidebar_nav' => array($this, 'block_sidebar_nav'),
            'header_nav' => array($this, 'block_header_nav'),
            'content' => array($this, 'block_content'),
            'content_2' => array($this, 'block_content_2'),
            'content_10' => array($this, 'block_content_10'),
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

\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">  

        ";
        // line 9
        $this->displayBlock('scripts', $context, $blocks);
        // line 28
        echo "        
         ";
        // line 29
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 45
        echo "        
    </head>

    <body> 

        <!-- Header -->
        <div class=\"container-fluid\" id=\"header\">
            <div class=\"row  top-bar \"> 
                <div class=\"col-md-offset-2 col-sm-offset-3\">
\t\t    \t\tBackOffice Aloes 
                </div>
            </div>
        </div>

        <div class=\"container-fluid\">

            <div class=\"row\">

                <div class=\"col-md-12 \" id=\"menu\">
                \t";
        // line 64
        $this->displayBlock('sidebar_nav', $context, $blocks);
        // line 66
        echo "                    
\t                ";
        // line 67
        $this->displayBlock('header_nav', $context, $blocks);
        // line 68
        echo "\t                    
                </div>

  

                <div class=\"col-sm-12\">
                    ";
        // line 74
        $this->displayBlock('content', $context, $blocks);
        // line 76
        echo "                </div>

                <div class=\"col-sm-12\">
\t                <div class=\"col-sm-2\">                    
    \t                ";
        // line 80
        $this->displayBlock('content_2', $context, $blocks);
        // line 82
        echo "        \t        </div>    
\t                <div class=\"col-sm-10\">                       
\t                    ";
        // line 84
        $this->displayBlock('content_10', $context, $blocks);
        // line 86
        echo "    \t            </div>    
                </div>

            </div>

        </div>
        


    </body>

</html>



";
    }

    // line 9
    public function block_scripts($context, array $blocks = array())
    {
        // line 10
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ifealoes/js/jquery.min.js"), "html", null, true);
        echo "\"></script> 
            
            <!--           
\t\t\t<script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ifealoes/js/moment.js"), "html", null, true);
        echo "\"></script>  
\t\t\t--> 
            <script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ifealoes/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

            <script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/scdatetimepicker/js/bootstrap-datetimepicker.js"), "html", null, true);
        echo "\"></script>

            <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ifealoes/js/vis.min.js"), "html", null, true);
        echo "\"></script>  

            <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ifealoes/js/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>   
                         
            <script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ifealoes/js/aloes.js"), "html", null, true);
        echo "\"></script>     
            
            <script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ifealoes/js/bootstrap3-typeahead.min.js"), "html", null, true);
        echo "\"></script>                
            
        ";
    }

    // line 29
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 30
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ifealoes/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\">
            <link rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ifealoes/css/dashboard-layout.css"), "html", null, true);
        echo "\" type=\"text/css\">
            <link rel=\"stylesheet\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ifealoes/css/layout.css"), "html", null, true);
        echo "\" type=\"text/css\">
            <link rel=\"stylesheet\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ifealoes/css/sessions.css"), "html", null, true);
        echo "\" type=\"text/css\">

  
            <link rel=\"stylesheet\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/scdatetimepicker/css/datetimepicker.css"), "html", null, true);
        echo "\" type=\"text/css\"> 

     \t\t
            <link rel=\"stylesheet\" href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ifealoes/css/vis.css"), "html", null, true);
        echo "\" type=\"text/css\"> 
            
            <link rel=\"stylesheet\" href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ifealoes/css/bootstrap-datetimepicker.min.css"), "html", null, true);
        echo "\" type=\"text/css\">  
                    
            
        ";
    }

    // line 64
    public function block_sidebar_nav($context, array $blocks = array())
    {
        // line 65
        echo "                    ";
    }

    // line 67
    public function block_header_nav($context, array $blocks = array())
    {
        // line 68
        echo "    \t            ";
    }

    // line 74
    public function block_content($context, array $blocks = array())
    {
        echo "\t\t                                      
                    ";
    }

    // line 80
    public function block_content_2($context, array $blocks = array())
    {
        echo "\t\t                                      
        \t            ";
    }

    // line 84
    public function block_content_10($context, array $blocks = array())
    {
        // line 85
        echo "    \t                ";
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  233 => 85,  230 => 84,  223 => 80,  216 => 74,  212 => 68,  209 => 67,  205 => 65,  202 => 64,  194 => 41,  189 => 39,  183 => 36,  177 => 33,  173 => 32,  169 => 31,  164 => 30,  161 => 29,  154 => 25,  149 => 23,  144 => 21,  139 => 19,  134 => 17,  129 => 15,  124 => 13,  117 => 10,  114 => 9,  95 => 86,  93 => 84,  89 => 82,  87 => 80,  81 => 76,  79 => 74,  71 => 68,  69 => 67,  66 => 66,  64 => 64,  43 => 45,  41 => 29,  38 => 28,  36 => 9,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/*     <head>*/
/*         <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">*/
/*         <meta charset="utf-8">*/
/* */
/* 		<meta http-equiv="X-UA-Compatible" content="IE=edge">  */
/* */
/*         {% block scripts %}*/
/*             <script src="{{asset('bundles/ifealoes/js/jquery.min.js')}}"></script> */
/*             */
/*             <!--           */
/* 			<script src="{{asset('bundles/ifealoes/js/moment.js')}}"></script>  */
/* 			--> */
/*             <script src="{{asset('bundles/ifealoes/bootstrap/js/bootstrap.min.js')}}"></script>*/
/* */
/*             <script src="{{asset('bundles/scdatetimepicker/js/bootstrap-datetimepicker.js')}}"></script>*/
/* */
/*             <script src="{{asset('bundles/ifealoes/js/vis.min.js')}}"></script>  */
/* */
/*             <script src="{{asset('bundles/ifealoes/js/jquery-ui.min.js')}}"></script>   */
/*                          */
/*             <script src="{{asset('bundles/ifealoes/js/aloes.js')}}"></script>     */
/*             */
/*             <script src="{{asset('bundles/ifealoes/js/bootstrap3-typeahead.min.js')}}"></script>                */
/*             */
/*         {% endblock %}*/
/*         */
/*          {% block stylesheets %}*/
/*             <link rel="stylesheet" href="{{asset('bundles/ifealoes/bootstrap/css/bootstrap.min.css')}}" type="text/css">*/
/*             <link rel="stylesheet" href="{{asset('bundles/ifealoes/css/dashboard-layout.css')}}" type="text/css">*/
/*             <link rel="stylesheet" href="{{asset('bundles/ifealoes/css/layout.css')}}" type="text/css">*/
/*             <link rel="stylesheet" href="{{asset('bundles/ifealoes/css/sessions.css')}}" type="text/css">*/
/* */
/*   */
/*             <link rel="stylesheet" href="{{asset('bundles/scdatetimepicker/css/datetimepicker.css')}}" type="text/css"> */
/* */
/*      		*/
/*             <link rel="stylesheet" href="{{asset('bundles/ifealoes/css/vis.css')}}" type="text/css"> */
/*             */
/*             <link rel="stylesheet" href="{{asset('bundles/ifealoes/css/bootstrap-datetimepicker.min.css')}}" type="text/css">  */
/*                     */
/*             */
/*         {% endblock %}*/
/*         */
/*     </head>*/
/* */
/*     <body> */
/* */
/*         <!-- Header -->*/
/*         <div class="container-fluid" id="header">*/
/*             <div class="row  top-bar "> */
/*                 <div class="col-md-offset-2 col-sm-offset-3">*/
/* 		    		BackOffice Aloes */
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="container-fluid">*/
/* */
/*             <div class="row">*/
/* */
/*                 <div class="col-md-12 " id="menu">*/
/*                 	{% block sidebar_nav %}*/
/*                     {% endblock %}*/
/*                     */
/* 	                {% block header_nav %}*/
/*     	            {% endblock %}	                    */
/*                 </div>*/
/* */
/*   */
/* */
/*                 <div class="col-sm-12">*/
/*                     {% block content %}		                                      */
/*                     {% endblock %}*/
/*                 </div>*/
/* */
/*                 <div class="col-sm-12">*/
/* 	                <div class="col-sm-2">                    */
/*     	                {% block content_2 %}		                                      */
/*         	            {% endblock %}*/
/*         	        </div>    */
/* 	                <div class="col-sm-10">                       */
/* 	                    {% block content_10 %}*/
/*     	                {% endblock %}*/
/*     	            </div>    */
/*                 </div>*/
/* */
/*             </div>*/
/* */
/*         </div>*/
/*         */
/* */
/* */
/*     </body>*/
/* */
/* </html>*/
/* */
/* */
/* */
/* */
