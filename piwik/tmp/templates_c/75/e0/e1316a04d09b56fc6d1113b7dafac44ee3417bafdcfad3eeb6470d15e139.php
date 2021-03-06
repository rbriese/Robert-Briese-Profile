<?php

/* @Dashboard/_dashboardSettings.twig */
class __TwigTemplate_75e0e1316a04d09b56fc6d1113b7dafac44ee3417bafdcfad3eeb6470d15e139 extends Twig_Template
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
        echo "<span>";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Dashboard_WidgetsAndDashboard")), "html", null, true);
        echo "</span>
<ul class=\"submenu\">
    <li>
        <div class=\"addWidget\">";
        // line 4
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Dashboard_AddAWidget")), "html", null, true);
        echo " &darr;</div>
        <ul class=\"widgetpreview-categorylist\"></ul>
    </li>
    ";
        // line 7
        if ((twig_length_filter($this->env, (isset($context["dashboardActions"]) ? $context["dashboardActions"] : $this->getContext($context, "dashboardActions"))) > 0)) {
            // line 8
            echo "    <li>
        <div class=\"manageDashboard\">";
            // line 9
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Dashboard_ManageDashboard")), "html", null, true);
            echo " &darr;</div>
        <ul>
            ";
            // line 11
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["dashboardActions"]) ? $context["dashboardActions"] : $this->getContext($context, "dashboardActions")));
            foreach ($context['_seq'] as $context["action"] => $context["title"]) {
                // line 12
                echo "            <li data-action=\"";
                echo twig_escape_filter($this->env, (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array((isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")))), "html", null, true);
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['action'], $context['title'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "        </ul>
    </li>
    ";
        }
        // line 17
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["generalActions"]) ? $context["generalActions"] : $this->getContext($context, "generalActions")));
        foreach ($context['_seq'] as $context["action"] => $context["title"]) {
            // line 18
            echo "    <li data-action=\"";
            echo twig_escape_filter($this->env, (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array((isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")))), "html", null, true);
            echo "</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['action'], $context['title'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "</ul>
<ul class=\"widgetpreview-widgetlist\"></ul>
<div class=\"widgetpreview-preview\"></div>";
    }

    public function getTemplateName()
    {
        return "@Dashboard/_dashboardSettings.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 20,  46 => 12,  97 => 33,  95 => 32,  91 => 31,  88 => 30,  57 => 14,  101 => 17,  79 => 11,  67 => 18,  58 => 8,  90 => 24,  82 => 12,  74 => 20,  69 => 8,  39 => 8,  26 => 4,  63 => 6,  49 => 12,  33 => 6,  52 => 5,  48 => 17,  21 => 2,  24 => 3,  144 => 38,  138 => 36,  131 => 33,  128 => 32,  121 => 31,  116 => 29,  104 => 36,  100 => 25,  96 => 13,  92 => 16,  87 => 22,  85 => 21,  80 => 20,  77 => 27,  71 => 14,  68 => 13,  62 => 17,  59 => 16,  44 => 9,  35 => 6,  31 => 6,  27 => 1,  23 => 3,  19 => 1,  139 => 46,  136 => 35,  132 => 37,  129 => 36,  126 => 35,  119 => 22,  117 => 21,  112 => 28,  110 => 17,  108 => 27,  102 => 13,  89 => 9,  83 => 7,  75 => 10,  72 => 19,  70 => 45,  66 => 26,  60 => 15,  55 => 15,  53 => 10,  50 => 9,  41 => 8,  38 => 2,  36 => 7,  32 => 7,  30 => 7,  22 => 2,  56 => 13,  54 => 13,  51 => 11,  47 => 10,  45 => 9,  42 => 11,  40 => 12,  37 => 9,  34 => 8,  29 => 4,);
    }
}
