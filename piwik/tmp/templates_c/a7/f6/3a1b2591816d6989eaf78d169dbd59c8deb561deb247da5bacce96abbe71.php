<?php

/* @Live/indexVisitorLog.twig */
class __TwigTemplate_a7f63a1b2591816d6989eaf78d169dbd59c8deb561deb247da5bacce96abbe71 extends Twig_Template
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
        echo "<h2>";
        if ((isset($context["filterEcommerce"]) ? $context["filterEcommerce"] : $this->getContext($context, "filterEcommerce"))) {
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Goals_EcommerceLog")), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Live_VisitorLog")), "html", null, true);
        }
        echo "</h2>

";
        // line 3
        echo (isset($context["visitorLog"]) ? $context["visitorLog"] : $this->getContext($context, "visitorLog"));
        echo "
";
    }

    public function getTemplateName()
    {
        return "@Live/indexVisitorLog.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  19 => 1,);
    }
}
