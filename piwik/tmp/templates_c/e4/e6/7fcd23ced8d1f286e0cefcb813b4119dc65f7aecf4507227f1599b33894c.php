<?php

/* @Installation/generalSetup.twig */
class __TwigTemplate_e4e67fcd23ced8d1f286e0cefcb813b4119dc65f7aecf4507227f1599b33894c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("@Installation/layout.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Installation/layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<h2>";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Installation_SuperUser")), "html", null, true);
        echo "</h2>

";
        // line 6
        if (array_key_exists("form_data", $context)) {
            // line 7
            echo "    ";
            $this->env->loadTemplate("genericForm.twig")->display($context);
        }
    }

    public function getTemplateName()
    {
        return "@Installation/generalSetup.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 7,  37 => 6,  31 => 4,  28 => 3,);
    }
}
