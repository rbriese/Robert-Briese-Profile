<?php

/* @CoreHome/getDonateForm.twig */
class __TwigTemplate_af2331d59067febda2a2167499adc20d0cf78cca1947e5a9d233b6b8abf47543 extends Twig_Template
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
        $this->env->loadTemplate("@CoreHome/_donate.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "@CoreHome/getDonateForm.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
