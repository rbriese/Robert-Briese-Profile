<?php

/* _jsCssIncludes.twig */
class __TwigTemplate_e2a5dee9b36a80cbcdc7fccb8469d58272eadc0f533b8eaa2367884d86440fad extends Twig_Template
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
        // line 2
        echo "    ";
        echo call_user_func_array($this->env->getFunction('includeAssets')->getCallable(), array(array("type" => "css")));
        echo "
    ";
        // line 3
        echo call_user_func_array($this->env->getFunction('includeAssets')->getCallable(), array(array("type" => "js")));
        echo "
";
        // line 5
        if ((call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_LayoutDirection")) == "rtl")) {
            // line 6
            echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"plugins/Zeitgeist/stylesheets/rtl.css\"/>
";
        }
    }

    public function getTemplateName()
    {
        return "_jsCssIncludes.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 6,  24 => 3,  361 => 158,  355 => 155,  352 => 154,  346 => 151,  343 => 150,  341 => 149,  334 => 147,  327 => 145,  320 => 143,  312 => 138,  306 => 135,  295 => 127,  288 => 123,  281 => 119,  277 => 118,  266 => 110,  262 => 109,  256 => 108,  248 => 103,  244 => 102,  238 => 99,  231 => 95,  227 => 94,  224 => 93,  218 => 91,  216 => 90,  213 => 89,  205 => 86,  202 => 85,  200 => 84,  197 => 83,  193 => 81,  182 => 79,  178 => 78,  175 => 77,  173 => 76,  170 => 75,  167 => 74,  164 => 73,  161 => 72,  155 => 67,  146 => 63,  142 => 61,  140 => 60,  137 => 59,  134 => 58,  128 => 56,  125 => 55,  123 => 54,  120 => 53,  116 => 52,  109 => 51,  100 => 48,  97 => 47,  91 => 45,  89 => 44,  82 => 39,  80 => 38,  75 => 36,  71 => 35,  53 => 19,  51 => 18,  45 => 15,  42 => 14,  37 => 12,  28 => 5,  19 => 2,);
    }
}
