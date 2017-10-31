<?php

/* IfeAloesBundle:Tableaux:competences.html.twig */
class __TwigTemplate_f1d44dea17e7d71b573bd234d210ce68896fe211fac23d9153781eafa9705dfe extends Twig_Template
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
        // line 1
        $context["macros"] = $this->loadTemplate("IfeAloesBundle:Course:linking.html.twig", "IfeAloesBundle:Tableaux:competences.html.twig", 1);
        // line 2
        echo "
   \t<div class='title-two1a col-md-12 col-sm-12'> 
\t\t\tRéférentiel de compétences 
\t</div>

    ";
        // line 7
        $this->loadTemplate("IfeAloesBundle:Tableaux:competences.html.twig", "IfeAloesBundle:Tableaux:competences.html.twig", 7, "1374528121")->display(array_merge($context, array("children" => "specificCompetences")));
        // line 44
        echo " 

    ";
    }

    public function getTemplateName()
    {
        return "IfeAloesBundle:Tableaux:competences.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 44,  28 => 7,  21 => 2,  19 => 1,);
    }
}


/* IfeAloesBundle:Tableaux:competences.html.twig */
class __TwigTemplate_f1d44dea17e7d71b573bd234d210ce68896fe211fac23d9153781eafa9705dfe_1374528121 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 7
        $this->parent = $this->loadTemplate("IfeAloesBundle:Aloes:list4.html.twig", "IfeAloesBundle:Tableaux:competences.html.twig", 7);
        $this->blocks = array(
            'parent_item' => array($this, 'block_parent_item'),
            'child_item' => array($this, 'block_child_item'),
            'children_header' => array($this, 'block_children_header'),
            'new_parent' => array($this, 'block_new_parent'),
            'new_child' => array($this, 'block_new_child'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "IfeAloesBundle:Aloes:list4.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 10
    public function block_parent_item($context, array $blocks = array())
    {
        // line 11
        echo "  \t\t\t<div id=\"CG_";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "id", array()), "html", null, true);
        echo "_A\" class=\"row\" >      
        \t\t";
        // line 12
        $this->loadTemplate("IfeAloesBundle:GeneralCompetence2:CG_XX_A.html.twig", "IfeAloesBundle:Tableaux:competences.html.twig", 12)->display(array_merge($context, array("action" => "consult")));
        // line 13
        echo "\t\t\t</div>   \t\t\t
\t\t\t           
        ";
    }

    // line 17
    public function block_child_item($context, array $blocks = array())
    {
        // line 18
        echo "\t\t\t<div id=\"CS_";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "id", array()), "html", null, true);
        echo "\" class=\"row block1\">                 
\t\t  \t\t";
        // line 19
        $this->loadTemplate("IfeAloesBundle:SpecificCompetence2:CS_XX.html.twig", "IfeAloesBundle:Tableaux:competences.html.twig", 19)->display(array_merge($context, array("action" => "consult")));
        echo "\t\t\t\t
\t\t  \t</div>\t         
        ";
    }

    // line 23
    public function block_children_header($context, array $blocks = array())
    {
        // line 24
        echo "        
\t            <div class=\"col-sm-8 entete2\" style=\"text-align:center\"> Compétences spécifiques</div> 
\t            <div class=\"col-sm-2 entete2\" style=\"text-align:center\"> % </div>
\t            <div class=\"col-sm-2 entete2\" style=\"text-align:center\"> </div>        
        

\t\t\t    \t";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), (isset($context["children"]) ? $context["children"] : $this->getContext($context, "children"))));
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
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 31
            echo "\t\t\t\t    \t";
            $this->displayBlock("child_item", $context, $blocks);
            echo "                                 
\t\t\t\t\t";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "\t\t    \t\t\t
  
        ";
    }

    // line 36
    public function block_new_parent($context, array $blocks = array())
    {
        // line 37
        echo "   
        ";
    }

    // line 40
    public function block_new_child($context, array $blocks = array())
    {
        // line 41
        echo "                     
        ";
    }

    public function getTemplateName()
    {
        return "IfeAloesBundle:Tableaux:competences.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 41,  171 => 40,  166 => 37,  163 => 36,  157 => 32,  140 => 31,  123 => 30,  115 => 24,  112 => 23,  105 => 19,  100 => 18,  97 => 17,  91 => 13,  89 => 12,  84 => 11,  81 => 10,  60 => 7,  30 => 44,  28 => 7,  21 => 2,  19 => 1,);
    }
}
/* {% import 'IfeAloesBundle:Course:linking.html.twig' as macros %}*/
/* */
/*    	<div class='title-two1a col-md-12 col-sm-12'> */
/* 			Référentiel de compétences */
/* 	</div>*/
/* */
/*     {% embed 'IfeAloesBundle:Aloes:list4.html.twig' with {'children':'specificCompetences'} %}*/
/* */
/* */
/*         {% block parent_item %}*/
/*   			<div id="CG_{{parent.id}}_A" class="row" >      */
/*         		{% include 'IfeAloesBundle:GeneralCompetence2:CG_XX_A.html.twig'  with {'action': 'consult'} %}*/
/* 			</div>   			*/
/* 			           */
/*         {% endblock %}*/
/* */
/*         {% block child_item %}*/
/* 			<div id="CS_{{child.id}}" class="row block1">                 */
/* 		  		{% include 'IfeAloesBundle:SpecificCompetence2:CS_XX.html.twig'  with {'action':  'consult'} %}				*/
/* 		  	</div>	         */
/*         {% endblock %}*/
/* */
/*         {% block children_header %}*/
/*         */
/* 	            <div class="col-sm-8 entete2" style="text-align:center"> Compétences spécifiques</div> */
/* 	            <div class="col-sm-2 entete2" style="text-align:center"> % </div>*/
/* 	            <div class="col-sm-2 entete2" style="text-align:center"> </div>        */
/*         */
/* */
/* 			    	{% for child in attribute(parent,children) %}*/
/* 				    	{{ block('child_item') }}                                 */
/* 					{% endfor %}		    			*/
/*   */
/*         {% endblock %}*/
/* */
/*         {% block new_parent %}*/
/*    */
/*         {% endblock %}  */
/* */
/*         {% block new_child %}*/
/*                      */
/*         {% endblock %}*/
/* */
/*     {% endembed %} */
/* */
/*     */
