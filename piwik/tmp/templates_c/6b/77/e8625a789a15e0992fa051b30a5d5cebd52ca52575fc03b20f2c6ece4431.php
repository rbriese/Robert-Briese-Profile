<?php

/* @CoreAdminHome/_menu.twig */
class __TwigTemplate_6b77e8625a789a15e0992fa051b30a5d5cebd52ca52575fc03b20f2c6ece4431 extends Twig_Template
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
        if ((twig_length_filter($this->env, (isset($context["adminMenu"]) ? $context["adminMenu"] : $this->getContext($context, "adminMenu"))) > 1)) {
            // line 2
            echo "    <div class=\"Menu Menu--admin\">
        <ul class=\"Menu-tabList\">
        ";
            // line 4
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["adminMenu"]) ? $context["adminMenu"] : $this->getContext($context, "adminMenu")));
            foreach ($context['_seq'] as $context["name"] => $context["submenu"]) {
                // line 5
                echo "            ";
                if ($this->getAttribute((isset($context["submenu"]) ? $context["submenu"] : $this->getContext($context, "submenu")), "_hasSubmenu")) {
                    // line 6
                    echo "            <li>
                <span>";
                    // line 7
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")))), "html", null, true);
                    echo "</span>
                <ul>
                ";
                    // line 9
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["submenu"]) ? $context["submenu"] : $this->getContext($context, "submenu")));
                    foreach ($context['_seq'] as $context["sname"] => $context["url"]) {
                        // line 10
                        echo "                    ";
                        if ((twig_slice($this->env, (isset($context["sname"]) ? $context["sname"] : $this->getContext($context, "sname")), 0, 1) != "_")) {
                            // line 11
                            echo "                    <li>
                        <a href='index.php";
                            // line 12
                            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('urlRewriteWithParameters')->getCallable(), array($this->getAttribute((isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "_url"))), "html", null, true);
                            echo "'
                           ";
                            // line 13
                            if ((array_key_exists("currentAdminMenuName", $context) && ((isset($context["sname"]) ? $context["sname"] : $this->getContext($context, "sname")) == (isset($context["currentAdminMenuName"]) ? $context["currentAdminMenuName"] : $this->getContext($context, "currentAdminMenuName"))))) {
                                echo "class='active'";
                            }
                            echo ">";
                            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array((isset($context["sname"]) ? $context["sname"] : $this->getContext($context, "sname")))), "html", null, true);
                            echo "</a>
                    </li>
                    ";
                        }
                        // line 16
                        echo "                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['sname'], $context['url'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 17
                    echo "                </ul>
            </li>
            ";
                }
                // line 20
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['submenu'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "        </ul>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "@CoreAdminHome/_menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 20,  70 => 17,  50 => 12,  44 => 10,  32 => 6,  25 => 4,  19 => 1,  145 => 53,  134 => 16,  132 => 15,  130 => 14,  128 => 13,  118 => 9,  115 => 8,  112 => 7,  102 => 54,  100 => 52,  97 => 51,  95 => 50,  89 => 47,  84 => 44,  81 => 21,  79 => 42,  74 => 39,  71 => 38,  68 => 37,  66 => 36,  59 => 32,  54 => 13,  52 => 30,  49 => 29,  40 => 9,  37 => 24,  35 => 7,  29 => 5,  21 => 2,  543 => 178,  536 => 173,  517 => 170,  505 => 168,  488 => 167,  482 => 164,  476 => 160,  472 => 158,  457 => 156,  453 => 155,  450 => 154,  448 => 153,  444 => 152,  438 => 151,  432 => 150,  427 => 148,  421 => 147,  415 => 146,  411 => 145,  405 => 144,  398 => 140,  392 => 137,  388 => 136,  385 => 135,  378 => 132,  376 => 131,  371 => 130,  369 => 129,  363 => 125,  360 => 124,  352 => 123,  348 => 121,  342 => 119,  336 => 117,  334 => 116,  329 => 114,  322 => 110,  318 => 109,  314 => 108,  312 => 107,  309 => 106,  301 => 102,  298 => 101,  294 => 100,  289 => 99,  287 => 98,  284 => 97,  282 => 96,  279 => 95,  272 => 91,  267 => 89,  262 => 87,  259 => 86,  257 => 85,  251 => 81,  232 => 78,  221 => 77,  204 => 76,  198 => 73,  186 => 64,  182 => 63,  177 => 60,  174 => 59,  171 => 58,  168 => 57,  165 => 56,  163 => 55,  159 => 54,  153 => 53,  148 => 51,  142 => 52,  135 => 46,  127 => 40,  114 => 38,  107 => 37,  103 => 36,  99 => 35,  92 => 31,  86 => 28,  82 => 27,  76 => 24,  72 => 23,  64 => 16,  60 => 17,  55 => 15,  47 => 11,  43 => 26,  39 => 8,  31 => 21,  28 => 3,);
    }
}
