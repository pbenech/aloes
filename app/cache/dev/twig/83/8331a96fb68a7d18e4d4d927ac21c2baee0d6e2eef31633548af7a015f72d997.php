<?php

/* IfeAloesBundle:Course:link-layout.html.twig */
class __TwigTemplate_3e000c3afa26fffe5f87f3fa0eb0944b607df06e2df9c0149ebea38bed34b537 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("IfeAloesBundle:Course:layout.html.twig", "IfeAloesBundle:Course:link-layout.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'link_title' => array($this, 'block_link_title'),
            'link_help_message' => array($this, 'block_link_help_message'),
            'link_content' => array($this, 'block_link_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "IfeAloesBundle:Course:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    
    
    <div class=\"aloes-panel2\">
    ";
        // line 7
        $this->displayBlock('link_title', $context, $blocks);
        echo "  
    
        <p class=\"lead\"> ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["source"]) ? $context["source"] : $this->getContext($context, "source")), "title", array()), "html", null, true);
        echo " </p> 
        
        ";
        // line 11
        if ( !(null === (isset($context["routes"]) ? $context["routes"] : $this->getContext($context, "routes")))) {
            // line 12
            echo "            ";
            $context["current"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method");
            // line 13
            echo "            <ul class=\"nav nav-pills\">
                <li class=\"";
            // line 14
            echo ((twig_in_filter("selection", (isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")))) ? ("active") : (""));
            echo "\">
                    <a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["routes"]) ? $context["routes"] : $this->getContext($context, "routes")), "selection", array()), array("id" => $this->getAttribute((isset($context["source"]) ? $context["source"] : $this->getContext($context, "source")), "id", array()), "menu" => (isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")))), "html", null, true);
            echo "\"> Selection </a>
                </li>

                <li class=\"";
            // line 18
            echo ((twig_in_filter("rating", (isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")))) ? ("active") : (""));
            echo "\">
                    <a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["routes"]) ? $context["routes"] : $this->getContext($context, "routes")), "rating", array()), array("id" => $this->getAttribute((isset($context["source"]) ? $context["source"] : $this->getContext($context, "source")), "id", array()), "menu" => (isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")))), "html", null, true);
            echo "\"> Pondération </a>
                </li>

                <li class=\"";
            // line 22
            echo ((twig_in_filter("weights", (isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")))) ? ("active") : (""));
            echo "\">
                    <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["routes"]) ? $context["routes"] : $this->getContext($context, "routes")), "weights", array()), array("id" => $this->getAttribute((isset($context["source"]) ? $context["source"] : $this->getContext($context, "source")), "id", array()), "menu" => (isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")))), "html", null, true);
            echo "\"> Vue étudiant </a>
                </li>
            </ul>
        ";
        }
        // line 27
        echo "    </div>

    <div class=\"aloes-panel\">
        ";
        // line 30
        $this->displayBlock('link_help_message', $context, $blocks);
        // line 31
        echo "        ";
        $this->displayBlock('link_content', $context, $blocks);
        echo "           
    </div>

    <div class=\"aloes-panel\">
    
      ";
        // line 36
        if ($this->getAttribute($this->getAttribute((isset($context["source"]) ? $context["source"] : null), "generalObjective", array(), "any", false, true), "id", array(), "any", true, true)) {
            // line 37
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["routes"]) ? $context["routes"] : $this->getContext($context, "routes")), "index", array()), array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "sequence" => $this->getAttribute($this->getAttribute((isset($context["source"]) ? $context["source"] : $this->getContext($context, "source")), "generalObjective", array()), "id", array()))), "html", null, true);
            echo "\"> 
            <span class=\"glyphicon glyphicon-arrow-left\"></span>
            Retour à la liste  
        </a>
     ";
        }
        // line 41
        echo "     
    
    ";
        // line 43
        if ($this->getAttribute($this->getAttribute((isset($context["source"]) ? $context["source"] : null), "topic", array(), "any", false, true), "id", array(), "any", true, true)) {
            // line 44
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["routes"]) ? $context["routes"] : $this->getContext($context, "routes")), "index", array()), array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "sequence" => $this->getAttribute($this->getAttribute((isset($context["source"]) ? $context["source"] : $this->getContext($context, "source")), "topic", array()), "id", array()))), "html", null, true);
            echo "\"> 
            <span class=\"glyphicon glyphicon-arrow-left\"></span>
            Retour à la liste  
        </a>
     ";
        }
        // line 48
        echo "   
        
    </div>
";
    }

    // line 7
    public function block_link_title($context, array $blocks = array())
    {
        echo " <h1>Liens</h1>  ";
    }

    // line 30
    public function block_link_help_message($context, array $blocks = array())
    {
        echo " ";
    }

    // line 31
    public function block_link_content($context, array $blocks = array())
    {
        echo " ";
    }

    public function getTemplateName()
    {
        return "IfeAloesBundle:Course:link-layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 31,  143 => 30,  137 => 7,  130 => 48,  121 => 44,  119 => 43,  115 => 41,  106 => 37,  104 => 36,  95 => 31,  93 => 30,  88 => 27,  81 => 23,  77 => 22,  71 => 19,  67 => 18,  61 => 15,  57 => 14,  54 => 13,  51 => 12,  49 => 11,  44 => 9,  39 => 7,  34 => 4,  31 => 3,  11 => 1,);
    }
}
/* {% extends 'IfeAloesBundle:Course:layout.html.twig' %}*/
/* */
/* {% block content %}*/
/*     */
/*     */
/*     <div class="aloes-panel2">*/
/*     {% block link_title %} <h1>Liens</h1>  {% endblock %}  */
/*     */
/*         <p class="lead"> {{ source.title }} </p> */
/*         */
/*         {% if routes is not null %}*/
/*             {% set current = app.request.attributes.get('_route') %}*/
/*             <ul class="nav nav-pills">*/
/*                 <li class="{{('selection' in current)?'active':''}}">*/
/*                     <a href="{{path(routes.selection, {id:source.id,menu:menu})}}"> Selection </a>*/
/*                 </li>*/
/* */
/*                 <li class="{{('rating' in current)?'active':''}}">*/
/*                     <a href="{{path(routes.rating, {id:source.id,menu:menu})}}"> Pondération </a>*/
/*                 </li>*/
/* */
/*                 <li class="{{('weights' in current)?'active':''}}">*/
/*                     <a href="{{path(routes.weights, {id:source.id,menu:menu})}}"> Vue étudiant </a>*/
/*                 </li>*/
/*             </ul>*/
/*         {% endif %}*/
/*     </div>*/
/* */
/*     <div class="aloes-panel">*/
/*         {% block link_help_message %} {% endblock %}*/
/*         {% block link_content %} {% endblock %}           */
/*     </div>*/
/* */
/*     <div class="aloes-panel">*/
/*     */
/*       {% if source.generalObjective.id is defined 	%}*/
/*         <a href="{{path(routes.index, {id: course.id, sequence: source.generalObjective.id})}}"> */
/*             <span class="glyphicon glyphicon-arrow-left"></span>*/
/*             Retour à la liste  */
/*         </a>*/
/*      {% endif %}     */
/*     */
/*     {% if source.topic.id is defined 	%}*/
/*         <a href="{{path(routes.index, {id: course.id, sequence: source.topic.id})}}"> */
/*             <span class="glyphicon glyphicon-arrow-left"></span>*/
/*             Retour à la liste  */
/*         </a>*/
/*      {% endif %}   */
/*         */
/*     </div>*/
/* {% endblock %}*/
/* */
/* */
