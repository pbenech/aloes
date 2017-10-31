<?php

/* IfeAloesBundle:Resp:inituser.txt.twig */
class __TwigTemplate_dd9cc3b69b3a0e2df770099f8fc32328614fd204c20c7ee8d043b9a373a2e968 extends Twig_Template
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
        return "IfeAloesBundle:Resp:inituser.txt.twig";
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
/*  */
/* Nom d'utilisateur : {{ mail }}*/
/* Mot de passe : {{ password }}*/
/* */
/* Cordialement. */
