<?php

/* admin.twig */
class __TwigTemplate_6db2b5eab7f3619a010821f3bad6a8bfa30d2a0bd61cea0fdf91f945f0522b02 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<!--[if lt IE 9 ]>
<html class=\"old-ie\" id=\"ng-app\" ng-app=\"piwikApp\"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html id=\"ng-app\" ng-app=\"piwikApp\"><!--<![endif]-->
    <head>
";
        // line 7
        $this->displayBlock('head', $context, $blocks);
        // line 21
        echo "    </head>
    <body ng-app=\"app\">
    ";
        // line 23
        $context["isAdminLayout"] = true;
        // line 24
        echo "    ";
        $this->env->loadTemplate("_iframeBuster.twig")->display($context);
        // line 25
        echo "    ";
        $this->env->loadTemplate("@CoreHome/_javaScriptDisabled.twig")->display($context);
        // line 26
        echo "
        <div id=\"root\">
            ";
        // line 28
        $this->env->loadTemplate("@CoreHome/_topScreen.twig")->display($context);
        // line 29
        echo "
            ";
        // line 30
        $context["ajax"] = $this->env->loadTemplate("ajaxMacros.twig");
        // line 31
        echo "            ";
        echo $context["ajax"]->getrequestErrorDiv();
        echo "
            ";
        // line 32
        echo call_user_func_array($this->env->getFunction('postEvent')->getCallable(), array("Template.beforeContent", "admin", (isset($context["currentModule"]) ? $context["currentModule"] : $this->getContext($context, "currentModule"))));
        echo "

            <div id=\"container\">

                ";
        // line 36
        if (((!array_key_exists("showMenu", $context)) || (isset($context["showMenu"]) ? $context["showMenu"] : $this->getContext($context, "showMenu")))) {
            // line 37
            echo "                    ";
            $this->env->loadTemplate("@CoreAdminHome/_menu.twig")->display($context);
            // line 38
            echo "                ";
        }
        // line 39
        echo "
                <div id=\"content\" class=\"admin\">

                    ";
        // line 42
        $this->env->loadTemplate("@CoreHome/_headerMessage.twig")->display($context);
        // line 43
        echo "                    ";
        $this->env->loadTemplate("@CoreHome/_notifications.twig")->display($context);
        // line 44
        echo "
                    <div class=\"ui-confirm\" id=\"alert\">
                        <h2></h2>
                        <input role=\"no\" type=\"button\" value=\"";
        // line 47
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Ok")), "html", null, true);
        echo "\"/>
                    </div>

                    ";
        // line 50
        $this->env->loadTemplate("@CoreHome/_warningInvalidHost.twig")->display($context);
        // line 51
        echo "
                    ";
        // line 52
        $this->displayBlock('content', $context, $blocks);
        // line 54
        echo "
                </div>
            </div>
        </div>
    </body>
</html>
";
    }

    // line 7
    public function block_head($context, array $blocks = array())
    {
        // line 8
        echo "            <meta charset=\"utf-8\">
            <title>";
        // line 9
        if ((!(isset($context["isCustomLogo"]) ? $context["isCustomLogo"] : $this->getContext($context, "isCustomLogo")))) {
            echo "Piwik &rsaquo; ";
        }
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_Administration")), "html", null, true);
        echo "</title>
            <meta name=\"generator\" content=\"Piwik - Open Source Web Analytics\"/>
            <link rel=\"shortcut icon\" href=\"plugins/CoreHome/images/favicon.ico\"/>

";
        // line 13
        $this->env->loadTemplate("_jsGlobalVariables.twig")->display($context);
        // line 14
        $this->env->loadTemplate("_piwikTag.twig")->display($context);
        // line 15
        $this->env->loadTemplate("_jsCssIncludes.twig")->display($context);
        // line 16
        echo "
            <!--[if IE]>
            <link rel=\"stylesheet\" type=\"text/css\" href=\"plugins/Zeitgeist/stylesheets/ieonly.css\"/>
            <![endif]-->
        ";
    }

    // line 52
    public function block_content($context, array $blocks = array())
    {
        // line 53
        echo "                    ";
    }

    public function getTemplateName()
    {
        return "admin.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 53,  134 => 16,  132 => 15,  130 => 14,  128 => 13,  118 => 9,  115 => 8,  112 => 7,  102 => 54,  100 => 52,  97 => 51,  95 => 50,  89 => 47,  84 => 44,  81 => 43,  79 => 42,  74 => 39,  71 => 38,  68 => 37,  66 => 36,  59 => 32,  54 => 31,  52 => 30,  49 => 29,  40 => 25,  37 => 24,  35 => 23,  29 => 7,  21 => 1,  543 => 178,  536 => 173,  517 => 170,  505 => 168,  488 => 167,  482 => 164,  476 => 160,  472 => 158,  457 => 156,  453 => 155,  450 => 154,  448 => 153,  444 => 152,  438 => 151,  432 => 150,  427 => 148,  421 => 147,  415 => 146,  411 => 145,  405 => 144,  398 => 140,  392 => 137,  388 => 136,  385 => 135,  378 => 132,  376 => 131,  371 => 130,  369 => 129,  363 => 125,  360 => 124,  352 => 123,  348 => 121,  342 => 119,  336 => 117,  334 => 116,  329 => 114,  322 => 110,  318 => 109,  314 => 108,  312 => 107,  309 => 106,  301 => 102,  298 => 101,  294 => 100,  289 => 99,  287 => 98,  284 => 97,  282 => 96,  279 => 95,  272 => 91,  267 => 89,  262 => 87,  259 => 86,  257 => 85,  251 => 81,  232 => 78,  221 => 77,  204 => 76,  198 => 73,  186 => 64,  182 => 63,  177 => 60,  174 => 59,  171 => 58,  168 => 57,  165 => 56,  163 => 55,  159 => 54,  153 => 53,  148 => 51,  142 => 52,  135 => 46,  127 => 40,  114 => 38,  107 => 37,  103 => 36,  99 => 35,  92 => 31,  86 => 28,  82 => 27,  76 => 24,  72 => 23,  64 => 18,  60 => 17,  55 => 15,  47 => 28,  43 => 26,  39 => 8,  31 => 21,  28 => 3,);
    }
}
