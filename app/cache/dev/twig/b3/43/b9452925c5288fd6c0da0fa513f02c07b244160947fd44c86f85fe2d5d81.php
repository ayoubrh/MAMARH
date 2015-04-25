<?php

/* MAMRHBundle:Mail:confirmationemail.txt.twig */
class __TwigTemplate_b343b9452925c5288fd6c0da0fa513f02c07b244160947fd44c86f85fe2d5d81 extends Twig_Template
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
        echo "Salut,

Votre nom d'utilisateur : ";
        // line 3
        echo $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array());
        echo ".
Votre Mot de Passe : ";
        // line 4
        echo (isset($context["password"]) ? $context["password"] : $this->getContext($context, "password"));
        echo ".


MAMRH.";
    }

    public function getTemplateName()
    {
        return "MAMRHBundle:Mail:confirmationemail.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  23 => 3,  19 => 1,);
    }
}
