<?php

/* @Installation/finished.twig */
class __TwigTemplate_9e95b544466c4ee37ab13b26933b395f6af5e2e0f0699805ba669c7e6a8ca853 extends Twig_Template
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
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Installation_Congratulations"));
        echo "</h2>

";
        // line 6
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Installation_CongratulationsHelp"));
        echo "


<p class=\"nextStep\">
    <a class=\"submit\" href=\"index.php\">";
        // line 10
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_ContinueToPiwik")), "html", null, true);
        echo " &raquo;</a>
</p>
";
    }

    public function getTemplateName()
    {
        return "@Installation/finished.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 10,  37 => 6,  31 => 4,  28 => 3,);
    }
}
