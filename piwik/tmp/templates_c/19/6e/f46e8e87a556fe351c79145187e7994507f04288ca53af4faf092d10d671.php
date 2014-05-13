<?php

/* @CoreHome/_headerMessage.twig */
class __TwigTemplate_196ef46e8e87a556fe351c79145187e7994507f04288ca53af4faf092d10d671 extends Twig_Template
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
        $context["test_latest_version_available"] = "3.0";
        // line 3
        $context["test_piwikUrl"] = "http://demo.piwik.org/";
        // line 4
        ob_start();
        echo twig_escape_filter($this->env, (((isset($context["piwikUrl"]) ? $context["piwikUrl"] : $this->getContext($context, "piwikUrl")) == "http://demo.piwik.org/") || ((isset($context["piwikUrl"]) ? $context["piwikUrl"] : $this->getContext($context, "piwikUrl")) == "https://demo.piwik.org/")), "html", null, true);
        $context["isPiwikDemo"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 5
        echo "
<span id=\"header_message\" class=\"";
        // line 6
        if (((isset($context["isPiwikDemo"]) ? $context["isPiwikDemo"] : $this->getContext($context, "isPiwikDemo")) || (!(isset($context["latest_version_available"]) ? $context["latest_version_available"] : $this->getContext($context, "latest_version_available"))))) {
            echo "header_info";
        } else {
            echo "header_alert";
        }
        echo "\">
    <span class=\"header_short\">
        ";
        // line 8
        if ((isset($context["isPiwikDemo"]) ? $context["isPiwikDemo"] : $this->getContext($context, "isPiwikDemo"))) {
            // line 9
            echo "            ";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_YouAreViewingDemoShortMessage")), "html", null, true);
            echo "
        ";
        } else {
            // line 11
            echo "            ";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_AboutPiwikX", (isset($context["piwik_version"]) ? $context["piwik_version"] : $this->getContext($context, "piwik_version")))), "html", null, true);
            echo "
        ";
        }
        // line 13
        echo "    </span>

    <span class=\"header_full\">
        ";
        // line 16
        if ((isset($context["isPiwikDemo"]) ? $context["isPiwikDemo"] : $this->getContext($context, "isPiwikDemo"))) {
            // line 17
            echo "            ";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_YouAreViewingDemoShortMessage")), "html", null, true);
            echo "
            <br/>
            ";
            // line 19
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_DownloadFullVersion", "<a href='http://piwik.org/'>", "</a>", "<a href='http://piwik.org'>piwik.org</a>"));
            echo "
            <br/>
        ";
        } else {
            // line 22
            echo "            ";
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_PiwikIsACollaborativeProjectYouCanContributeAndDonate", "<a href='?module=Proxy&action=redirect&url=http://piwik.org' target='_blank'>", ((isset($context["piwik_version"]) ? $context["piwik_version"] : $this->getContext($context, "piwik_version")) . "</a>"), "<br />", "<a target='_blank' href='?module=Proxy&action=redirect&url=http://piwik.org/contribute/'>", "</a>", "<br/>", "<a href='http://piwik.org/donate/' target='_blank'><strong><em>", "</em></strong></a>"));
            // line 31
            echo "
        ";
        }
        // line 33
        echo "        ";
        if ((isset($context["hasSomeAdminAccess"]) ? $context["hasSomeAdminAccess"] : $this->getContext($context, "hasSomeAdminAccess"))) {
            // line 34
            echo "            <br/>
        ";
        }
        // line 36
        echo "    </span>
</span>
";
    }

    public function getTemplateName()
    {
        return "@CoreHome/_headerMessage.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 31,  86 => 36,  80 => 24,  78 => 23,  61 => 17,  97 => 33,  95 => 32,  91 => 31,  57 => 23,  101 => 17,  58 => 16,  165 => 64,  153 => 62,  151 => 61,  136 => 52,  130 => 50,  128 => 49,  106 => 43,  102 => 42,  98 => 40,  71 => 20,  44 => 12,  35 => 9,  26 => 4,  90 => 37,  82 => 34,  69 => 8,  39 => 8,  63 => 6,  49 => 27,  33 => 6,  59 => 16,  52 => 5,  48 => 13,  21 => 3,  28 => 5,  24 => 3,  132 => 36,  113 => 44,  108 => 28,  104 => 36,  96 => 25,  92 => 16,  88 => 30,  79 => 33,  77 => 27,  70 => 15,  62 => 25,  46 => 9,  31 => 6,  27 => 5,  23 => 4,  19 => 2,  134 => 43,  131 => 42,  127 => 34,  124 => 47,  121 => 32,  114 => 20,  112 => 19,  107 => 16,  105 => 15,  100 => 26,  87 => 9,  84 => 22,  81 => 7,  74 => 21,  72 => 22,  68 => 44,  66 => 19,  60 => 17,  55 => 15,  53 => 13,  50 => 14,  41 => 9,  38 => 2,  36 => 7,  32 => 5,  30 => 6,  22 => 2,  56 => 13,  54 => 15,  51 => 11,  47 => 11,  45 => 9,  42 => 9,  40 => 11,  37 => 10,  34 => 3,  29 => 4,);
    }
}
