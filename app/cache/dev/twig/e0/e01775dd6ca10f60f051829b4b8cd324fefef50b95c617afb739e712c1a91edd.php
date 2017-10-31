<?php

/* IfeAloesBundle:Admin:inituser.txt.twig */
class __TwigTemplate_332be7d7e57093ebd525f68961ba253bd63d3320a767de8a4f6e79a229bcdb52 extends Twig_Template
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
        echo "Bonjour,

Vous disposez d'un compte sur l'application Aloes :

\t";
        // line 5
        echo $this->env->getExtension('routing')->getUrl("tableaux_bord");
        echo "

Nom d'utilisateur : ";
        // line 7
        echo (isset($context["mail"]) ? $context["mail"] : $this->getContext($context, "mail"));
        echo "
Mot de passe : ";
        // line 8
        echo (isset($context["password"]) ? $context["password"] : $this->getContext($context, "password"));
        echo "

Cordialement. ";
    }

    public function getTemplateName()
    {
        return "IfeAloesBundle:Admin:inituser.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 8,  30 => 7,  25 => 5,  19 => 1,);
    }
}
/* Bonjour,*/
/* */
/* Vous disposez d'un compte sur l'application Aloes :*/
/* */
/* 	{{ url('tableaux_bord') }}*/
/* */
/* Nom d'utilisateur : {{ mail }}*/
/* Mot de passe : {{ password }}*/
/* */
/* Cordialement. */
