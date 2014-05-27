<?php

/* @UserCountry/_updaterNextRunTime.twig */
class __TwigTemplate_916c440c1c13bdecb3003bd1b3a8a50d06f677d990ac1bbe9a9e91546349bb77 extends Twig_Template
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
        if ((!twig_test_empty(((array_key_exists("nextRunTime", $context)) ? (_twig_default_filter((isset($context["nextRunTime"]) ? $context["nextRunTime"] : $this->getContext($context, "nextRunTime")))) : (""))))) {
            // line 2
            echo "  ";
            if ((twig_date_converter($this->env, $this->getAttribute((isset($context["nextRunTime"]) ? $context["nextRunTime"] : $this->getContext($context, "nextRunTime")), "getTimestamp", array(), "method")) <= twig_date_converter($this->env))) {
                // line 3
                echo "      ";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UserCountry_UpdaterScheduledForNextRun")), "html", null, true);
                echo "
  ";
            } else {
                // line 5
                echo "      ";
                echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UserCountry_UpdaterWillRunNext", (("<strong><em>" . $this->getAttribute((isset($context["nextRunTime"]) ? $context["nextRunTime"] : $this->getContext($context, "nextRunTime")), "toString", array(), "method")) . "</em></strong>")));
                echo "
  ";
            }
        } else {
            // line 8
            echo "  ";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UserCountry_UpdaterIsNotScheduledToRun")), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "@UserCountry/_updaterNextRunTime.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 8,  30 => 5,  24 => 3,  21 => 2,  172 => 61,  163 => 56,  159 => 54,  157 => 53,  153 => 51,  147 => 49,  141 => 47,  138 => 46,  136 => 45,  130 => 42,  124 => 41,  119 => 39,  113 => 38,  102 => 33,  98 => 32,  92 => 29,  88 => 28,  80 => 24,  77 => 23,  71 => 21,  69 => 20,  64 => 18,  60 => 17,  53 => 13,  49 => 12,  44 => 9,  36 => 6,  32 => 5,  26 => 2,  19 => 1,  355 => 132,  349 => 130,  345 => 128,  338 => 124,  330 => 119,  326 => 118,  320 => 115,  316 => 114,  310 => 111,  307 => 110,  305 => 109,  301 => 107,  299 => 106,  296 => 105,  290 => 103,  284 => 101,  282 => 100,  276 => 96,  269 => 94,  264 => 92,  261 => 91,  255 => 89,  252 => 88,  249 => 87,  243 => 85,  232 => 83,  229 => 82,  226 => 81,  220 => 79,  217 => 78,  211 => 76,  203 => 73,  197 => 70,  193 => 69,  185 => 65,  182 => 64,  179 => 63,  177 => 62,  173 => 60,  167 => 58,  165 => 57,  161 => 56,  155 => 52,  149 => 50,  143 => 48,  137 => 46,  135 => 45,  123 => 38,  114 => 37,  108 => 36,  103 => 33,  99 => 32,  94 => 30,  90 => 29,  86 => 28,  81 => 25,  74 => 21,  70 => 20,  66 => 19,  62 => 18,  57 => 16,  52 => 15,  50 => 14,  45 => 12,  38 => 7,  33 => 5,  31 => 4,  28 => 3,);
    }
}
