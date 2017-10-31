<?php

/* IfeAloesBundle:Public:profil.html.twig */
class __TwigTemplate_079d7ce49b390b873854b52d962ef771141f9b21405c19ed5a297ae057f41715 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "IfeAloesBundle:Public:profil.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'sidebar_nav' => array($this, 'block_sidebar_nav'),
            'header_nav' => array($this, 'block_header_nav'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<div class='title-one'> Profil</div>

   \t<fieldset>
   \tVous ne disposez pas actuellement de profil utilisateur au sein de l'application @loes.
   \tContacter le responsable du site ...
   \t</fieldset>
 
";
    }

    // line 15
    public function block_sidebar_nav($context, array $blocks = array())
    {
    }

    // line 18
    public function block_header_nav($context, array $blocks = array())
    {
        // line 19
        echo "
";
    }

    public function getTemplateName()
    {
        return "IfeAloesBundle:Public:profil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 19,  49 => 18,  44 => 15,  33 => 6,  30 => 3,  11 => 1,);
    }
}
/* {% extends '::layout.html.twig' %}*/
/* */
/* {% block content -%}*/
/* */
/* */
/*     <div class='title-one'> Profil</div>*/
/* */
/*    	<fieldset>*/
/*    	Vous ne disposez pas actuellement de profil utilisateur au sein de l'application @loes.*/
/*    	Contacter le responsable du site ...*/
/*    	</fieldset>*/
/*  */
/* {% endblock %}*/
/*     */
/* {% block sidebar_nav %}*/
/* {% endblock %}*/
/* */
/* {% block header_nav %}*/
/* */
/* {% endblock %} */
/* */
