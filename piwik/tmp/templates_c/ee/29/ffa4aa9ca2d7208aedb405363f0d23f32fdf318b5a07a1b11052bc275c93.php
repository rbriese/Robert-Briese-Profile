<?php

/* @Live/_actionsList.twig */
class __TwigTemplate_ee29ffa4aa9ca2d7208aedb405363f0d23f32fdf318b5a07a1b11052bc275c93 extends Twig_Template
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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["actionDetails"]) ? $context["actionDetails"] : $this->getContext($context, "actionDetails")));
        foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
            // line 2
            echo "    ";
            ob_start();
            // line 3
            echo "        ";
            if ($this->getAttribute((isset($context["action"]) ? $context["action"] : null), "customVariables", array(), "any", true, true)) {
                // line 4
                echo "            ";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CustomVariables_CustomVariables")), "html", null, true);
                echo "
            ";
                // line 5
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "customVariables"));
                foreach ($context['_seq'] as $context["id"] => $context["customVariable"]) {
                    // line 6
                    echo "                ";
                    $context["name"] = ("customVariablePageName" . (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")));
                    // line 7
                    echo "                ";
                    $context["value"] = ("customVariablePageValue" . (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")));
                    // line 8
                    echo "                - ";
                    echo $this->getAttribute((isset($context["customVariable"]) ? $context["customVariable"] : $this->getContext($context, "customVariable")), (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), array(), "array");
                    echo " ";
                    if ((twig_length_filter($this->env, $this->getAttribute((isset($context["customVariable"]) ? $context["customVariable"] : $this->getContext($context, "customVariable")), (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), array(), "array")) > 0)) {
                        echo " = ";
                        echo $this->getAttribute((isset($context["customVariable"]) ? $context["customVariable"] : $this->getContext($context, "customVariable")), (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), array(), "array");
                    }
                    // line 9
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['id'], $context['customVariable'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 10
                echo "        ";
            }
            // line 11
            echo "    ";
            $context["customVariablesTooltip"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 12
            echo "    ";
            if ((((!$this->getAttribute((isset($context["clientSideParameters"]) ? $context["clientSideParameters"] : $this->getContext($context, "clientSideParameters")), "filterEcommerce")) || ($this->getAttribute((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "type") == "ecommerceOrder")) || ($this->getAttribute((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "type") == "ecommerceAbandonedCart"))) {
                // line 13
                echo "        <li class=\"";
                if ($this->getAttribute((isset($context["action"]) ? $context["action"] : null), "goalName", array(), "any", true, true)) {
                    echo "goal";
                } else {
                    echo "action";
                }
                echo "\"
            title=\"";
                // line 14
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "serverTimePretty"), "html", null, true);
                if (($this->getAttribute((isset($context["action"]) ? $context["action"] : null), "url", array(), "any", true, true) && twig_length_filter($this->env, trim($this->getAttribute((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "url"))))) {
                    // line 15
                    echo "
";
                    // line 16
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "url"), "html", null, true);
                }
                if (twig_length_filter($this->env, trim((isset($context["customVariablesTooltip"]) ? $context["customVariablesTooltip"] : $this->getContext($context, "customVariablesTooltip"))))) {
                    // line 17
                    echo "
";
                    // line 18
                    echo twig_escape_filter($this->env, trim((isset($context["customVariablesTooltip"]) ? $context["customVariablesTooltip"] : $this->getContext($context, "customVariablesTooltip"))), "html", null, true);
                }
                // line 19
                if ($this->getAttribute((isset($context["action"]) ? $context["action"] : null), "generationTime", array(), "any", true, true)) {
                    // line 20
                    echo "
";
                    // line 21
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_ColumnGenerationTime")), "html", null, true);
                    echo ": ";
                    echo $this->getAttribute((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "generationTime");
                }
                // line 22
                if ($this->getAttribute((isset($context["action"]) ? $context["action"] : null), "timeSpentPretty", array(), "any", true, true)) {
                    // line 23
                    echo "
";
                    // line 24
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_TimeOnPage")), "html", null, true);
                    echo ": ";
                    echo $this->getAttribute((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "timeSpentPretty");
                }
                echo "\">
            <div>
            ";
                // line 26
                if ((($this->getAttribute((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "type") == "ecommerceOrder") || ($this->getAttribute((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "type") == "ecommerceAbandonedCart"))) {
                    // line 27
                    echo "            ";
                    // line 28
                    echo "                <img src=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "icon"), "html", null, true);
                    echo "\"/>
                ";
                    // line 29
                    if (($this->getAttribute((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "type") == "ecommerceOrder")) {
                        // line 30
                        echo "                    <strong>";
                        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Goals_EcommerceOrder")), "html", null, true);
                        echo "</strong>
                    <span style='color:#666;'>(";
                        // line 31
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "orderId"), "html", null, true);
                        echo ")</span>
                ";
                    } else {
                        // line 33
                        echo "                    <strong>";
                        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Goals_AbandonedCart")), "html", null, true);
                        echo "</strong>

                    ";
                        // line 36
                        echo "                ";
                    }
                    // line 37
                    echo "                <p>
                <span ";
                    // line 38
                    if ((!(isset($context["isWidget"]) ? $context["isWidget"] : $this->getContext($context, "isWidget")))) {
                        echo "style='margin-left:20px;'";
                    }
                    echo ">
                    ";
                    // line 39
                    if (($this->getAttribute((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "type") == "ecommerceOrder")) {
                        // line 41
                        ob_start();
                        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_ColumnRevenue")), "html", null, true);
                        echo ": ";
                        echo call_user_func_array($this->env->getFilter('money')->getCallable(), array($this->getAttribute((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "revenue"), $this->getAttribute((isset($context["clientSideParameters"]) ? $context["clientSideParameters"] : $this->getContext($context, "clientSideParameters")), "idSite")));
                        echo "
";
                        // line 42
                        if ((!twig_test_empty($this->getAttribute((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "revenueSubTotal")))) {
                            echo " - ";
                            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Subtotal")), "html", null, true);
                            echo ": ";
                            echo call_user_func_array($this->env->getFilter('money')->getCallable(), array($this->getAttribute((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "revenueSubTotal"), $this->getAttribute((isset($context["clientSideParameters"]) ? $context["clientSideParameters"] : $this->getContext($context, "clientSideParameters")), "idSite")));
                        }
                        // line 43
                        echo "
";
                        // line 44
                        if ((!twig_test_empty($this->getAttribute((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "revenueTax")))) {
                            echo " - ";
                            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Tax")), "html", null, true);
                            echo ": ";
                            echo call_user_func_array($this->env->getFilter('money')->getCallable(), array($this->getAttribute((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "revenueTax"), $this->getAttribute((isset($context["clientSideParameters"]) ? $context["clientSideParameters"] : $this->getContext($context, "clientSideParameters")), "idSite")));
                        }
                        // line 45
                        echo "
";
                        // line 46
                        if ((!twig_test_empty($this->getAttribute((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "revenueShipping")))) {
                            echo " - ";
                            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Shipping")), "html", null, true);
                            echo ": ";
                            echo call_user_func_array($this->env->getFilter('money')->getCallable(), array($this->getAttribute((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "revenueShipping"), $this->getAttribute((isset($context["clientSideParameters"]) ? $context["clientSideParameters"] : $this->getContext($context, "clientSideParameters")), "idSite")));
                        }
                        // line 47
                        echo "
";
                        // line 48
                        if ((!twig_test_empty($this->getAttribute((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "revenueDiscount")))) {
                            echo " - ";
                            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Discount")), "html", null, true);
                            echo ": ";
                            echo call_user_func_array($this->env->getFilter('money')->getCallable(), array($this->getAttribute((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "revenueDiscount"), $this->getAttribute((isset($context["clientSideParameters"]) ? $context["clientSideParameters"] : $this->getContext($context, "clientSideParameters")), "idSite")));
                        }
                        $context["ecommerceOrderTooltip"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                        // line 50
                        echo "                    <abbr title=\"";
                        echo twig_escape_filter($this->env, (isset($context["ecommerceOrderTooltip"]) ? $context["ecommerceOrderTooltip"] : $this->getContext($context, "ecommerceOrderTooltip")), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_ColumnRevenue")), "html", null, true);
                        echo ":
                    ";
                    } else {
                        // line 52
                        echo "                        ";
                        ob_start();
                        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_ColumnRevenue")), "html", null, true);
                        $context["revenueLeft"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                        // line 53
                        echo "                        ";
                        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Goals_LeftInCart", (isset($context["revenueLeft"]) ? $context["revenueLeft"] : $this->getContext($context, "revenueLeft")))), "html", null, true);
                        echo ":
                    ";
                    }
                    // line 55
                    echo "                        <strong>";
                    echo call_user_func_array($this->env->getFilter('money')->getCallable(), array($this->getAttribute((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "revenue"), $this->getAttribute((isset($context["clientSideParameters"]) ? $context["clientSideParameters"] : $this->getContext($context, "clientSideParameters")), "idSite")));
                    echo "</strong>
                    ";
                    // line 56
                    if (($this->getAttribute((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "type") == "ecommerceOrder")) {
                        // line 57
                        echo "                    </abbr>
                    ";
                    }
                    // line 58
                    echo ", ";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Quantity")), "html", null, true);
                    echo ": ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "items"), "html", null, true);
                    echo "

                    ";
                    // line 61
                    echo "                    ";
                    if ((!twig_test_empty($this->getAttribute((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "itemDetails")))) {
                        // line 62
                        echo "                        <ul style='list-style:square;margin-left:";
                        if ((isset($context["isWidget"]) ? $context["isWidget"] : $this->getContext($context, "isWidget"))) {
                            echo "15";
                        } else {
                            echo "50";
                        }
                        echo "px;'>
                            ";
                        // line 63
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "itemDetails"));
                        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                            // line 64
                            echo "                                <li>
                                    ";
                            // line 65
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "itemSKU"), "html", null, true);
                            if ((!twig_test_empty($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "itemName")))) {
                                echo ": ";
                                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "itemName"), "html", null, true);
                            }
                            // line 66
                            echo "                                    ";
                            if ((!twig_test_empty($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "itemCategory")))) {
                                echo " (";
                                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "itemCategory"), "html", null, true);
                                echo ")";
                            }
                            // line 67
                            echo "                                    ,
                                    ";
                            // line 68
                            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Quantity")), "html", null, true);
                            echo ": ";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "quantity"), "html", null, true);
                            echo ",
                                    ";
                            // line 69
                            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Price")), "html", null, true);
                            echo ": ";
                            echo call_user_func_array($this->env->getFilter('money')->getCallable(), array($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "price"), $this->getAttribute((isset($context["clientSideParameters"]) ? $context["clientSideParameters"] : $this->getContext($context, "clientSideParameters")), "idSite")));
                            echo "
                                </li>
                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 72
                        echo "                        </ul>
                    ";
                    }
                    // line 74
                    echo "                </span>
                </p>
            ";
                } elseif ((!$this->getAttribute((isset($context["action"]) ? $context["action"] : null), "goalName", array(), "any", true, true))) {
                    // line 77
                    echo "                ";
                    // line 78
                    echo "                ";
                    if ((!twig_test_empty((($this->getAttribute((isset($context["action"]) ? $context["action"] : null), "pageTitle", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["action"]) ? $context["action"] : null), "pageTitle"), false)) : (false))))) {
                        // line 79
                        echo "                    <span class=\"truncated-text-line\">";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "pageTitle"), "html", null, true);
                        echo "</span>
                ";
                    }
                    // line 81
                    echo "                ";
                    if ($this->getAttribute((isset($context["action"]) ? $context["action"] : null), "siteSearchKeyword", array(), "any", true, true)) {
                        // line 82
                        echo "                    ";
                        if (($this->getAttribute((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "type") == "search")) {
                            // line 83
                            echo "                        <img src='";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "icon"), "html", null, true);
                            echo "' title='";
                            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Actions_SubmenuSitesearch")), "html", null, true);
                            echo "' class=\"action-list-action-icon\">
                    ";
                        }
                        // line 85
                        echo "                    <span class=\"truncated-text-line\">";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "siteSearchKeyword"), "html", null, true);
                        echo "</span>
                ";
                    }
                    // line 87
                    echo "                ";
                    if ((!twig_test_empty((($this->getAttribute((isset($context["action"]) ? $context["action"] : null), "eventCategory", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["action"]) ? $context["action"] : null), "eventCategory"), false)) : (false))))) {
                        // line 88
                        echo "                    <img src='";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "icon"), "html", null, true);
                        echo "' title='";
                        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Events_Event")), "html", null, true);
                        echo "' class=\"action-list-action-icon\">
                    <span class=\"truncated-text-line\">";
                        // line 89
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "eventCategory"), "html", null, true);
                        echo " - ";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "eventAction"), "html", null, true);
                        echo " ";
                        if ($this->getAttribute((isset($context["action"]) ? $context["action"] : null), "eventName", array(), "any", true, true)) {
                            echo "- ";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "eventName"), "html", null, true);
                        }
                        echo " ";
                        if ($this->getAttribute((isset($context["action"]) ? $context["action"] : null), "eventValue", array(), "any", true, true)) {
                            echo "- ";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "eventValue"), "html", null, true);
                        }
                        echo "</span>
                ";
                    }
                    // line 91
                    echo "                ";
                    if ((!twig_test_empty($this->getAttribute((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "url")))) {
                        // line 92
                        echo "                    ";
                        if ((($this->getAttribute((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "type") == "action") && (!twig_test_empty((($this->getAttribute((isset($context["action"]) ? $context["action"] : null), "pageTitle", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["action"]) ? $context["action"] : null), "pageTitle"), false)) : (false)))))) {
                            echo "<p>";
                        }
                        // line 93
                        echo "                    ";
                        if ((($this->getAttribute((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "type") == "download") || ($this->getAttribute((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "type") == "outlink"))) {
                            // line 94
                            echo "                        <img src='";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "icon"), "html", null, true);
                            echo "' class=\"action-list-action-icon\">
                    ";
                        }
                        // line 96
                        echo "                    <a href=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "url"), "html", null, true);
                        echo "\" target=\"_blank\" class=\"";
                        if (twig_test_empty((($this->getAttribute((isset($context["action"]) ? $context["action"] : null), "eventCategory", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["action"]) ? $context["action"] : null), "eventCategory"), false)) : (false)))) {
                            echo "action-list-url";
                        }
                        echo " truncated-text-line\"
                       ";
                        // line 97
                        if (((!array_key_exists("overrideLinkStyle", $context)) || (isset($context["overrideLinkStyle"]) ? $context["overrideLinkStyle"] : $this->getContext($context, "overrideLinkStyle")))) {
                            echo "style=\"";
                            if ((($this->getAttribute((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "type") == "action") && (!twig_test_empty((($this->getAttribute((isset($context["action"]) ? $context["action"] : null), "pageTitle", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["action"]) ? $context["action"] : null), "pageTitle"), false)) : (false)))))) {
                                echo "margin-left: 9px;";
                            }
                            echo "text-decoration:underline;\"";
                        }
                        echo ">
                       ";
                        // line 98
                        if ((!twig_test_empty((($this->getAttribute((isset($context["action"]) ? $context["action"] : null), "eventCategory", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["action"]) ? $context["action"] : null), "eventCategory"), false)) : (false))))) {
                            // line 99
                            echo "                            (url)
                       ";
                        } else {
                            // line 101
                            echo "                           ";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "url"), "html", null, true);
                            echo "
                       ";
                        }
                        // line 103
                        echo "                    </a>
                    ";
                        // line 104
                        if ((($this->getAttribute((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "type") == "action") && (!twig_test_empty((($this->getAttribute((isset($context["action"]) ? $context["action"] : null), "pageTitle", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["action"]) ? $context["action"] : null), "pageTitle"), false)) : (false)))))) {
                            echo "</p>";
                        }
                        // line 105
                        echo "                ";
                    } elseif ((($this->getAttribute((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "type") != "search") && ($this->getAttribute((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "type") != "event"))) {
                        // line 106
                        echo "                    <p>
                    <span style=\"margin-left: 9px;\">";
                        // line 107
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["clientSideParameters"]) ? $context["clientSideParameters"] : $this->getContext($context, "clientSideParameters")), "pageUrlNotDefined"), "html", null, true);
                        echo "</span>
                    </p>
                ";
                    }
                    // line 110
                    echo "            ";
                } else {
                    // line 111
                    echo "                ";
                    // line 112
                    echo "                <img src=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "icon"), "html", null, true);
                    echo "\" />
                <strong>";
                    // line 113
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "goalName"), "html", null, true);
                    echo "</strong>
                ";
                    // line 114
                    if (($this->getAttribute((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "revenue") > 0)) {
                        echo ", ";
                        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_ColumnRevenue")), "html", null, true);
                        echo ":
                    <strong>";
                        // line 115
                        echo call_user_func_array($this->env->getFilter('money')->getCallable(), array($this->getAttribute((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "revenue"), $this->getAttribute((isset($context["clientSideParameters"]) ? $context["clientSideParameters"] : $this->getContext($context, "clientSideParameters")), "idSite")));
                        echo "</strong>
                ";
                    }
                    // line 117
                    echo "            ";
                }
                // line 118
                echo "            </div>
        </li>
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "@Live/_actionsList.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  453 => 118,  445 => 115,  439 => 114,  435 => 113,  430 => 112,  428 => 111,  425 => 110,  419 => 107,  416 => 106,  413 => 105,  409 => 104,  406 => 103,  400 => 101,  396 => 99,  394 => 98,  375 => 96,  369 => 94,  341 => 89,  334 => 88,  331 => 87,  325 => 85,  314 => 82,  311 => 81,  305 => 79,  302 => 78,  295 => 74,  291 => 72,  280 => 69,  264 => 66,  258 => 65,  255 => 64,  242 => 62,  239 => 61,  231 => 58,  227 => 57,  220 => 55,  214 => 53,  209 => 52,  193 => 48,  190 => 47,  183 => 46,  180 => 45,  173 => 44,  170 => 43,  163 => 42,  156 => 41,  154 => 39,  145 => 37,  142 => 36,  124 => 29,  119 => 28,  117 => 27,  104 => 23,  102 => 22,  97 => 21,  92 => 19,  86 => 17,  67 => 13,  64 => 12,  58 => 10,  52 => 9,  44 => 8,  41 => 7,  38 => 6,  34 => 5,  29 => 4,  68 => 16,  63 => 13,  36 => 2,  274 => 68,  271 => 67,  256 => 1,  251 => 63,  246 => 59,  226 => 56,  223 => 55,  206 => 54,  203 => 53,  201 => 50,  198 => 51,  152 => 42,  140 => 39,  136 => 33,  133 => 37,  131 => 31,  129 => 35,  123 => 34,  115 => 26,  107 => 24,  99 => 27,  88 => 22,  84 => 21,  79 => 15,  65 => 19,  45 => 15,  40 => 4,  28 => 9,  23 => 2,  21 => 7,  462 => 142,  456 => 140,  450 => 117,  448 => 137,  443 => 134,  441 => 133,  434 => 129,  424 => 122,  414 => 120,  397 => 118,  390 => 115,  387 => 112,  384 => 97,  382 => 109,  380 => 108,  377 => 107,  374 => 105,  371 => 103,  368 => 101,  366 => 93,  363 => 99,  361 => 92,  358 => 91,  350 => 94,  347 => 92,  345 => 91,  343 => 90,  326 => 88,  322 => 86,  317 => 83,  304 => 79,  300 => 77,  294 => 77,  289 => 75,  286 => 74,  284 => 73,  272 => 70,  268 => 2,  262 => 68,  252 => 66,  249 => 65,  247 => 64,  243 => 61,  237 => 58,  232 => 58,  229 => 56,  225 => 56,  184 => 50,  181 => 52,  178 => 48,  175 => 47,  171 => 48,  166 => 47,  161 => 45,  158 => 46,  155 => 43,  153 => 42,  148 => 38,  128 => 39,  126 => 30,  109 => 37,  106 => 36,  98 => 35,  94 => 20,  89 => 18,  82 => 16,  80 => 26,  76 => 14,  70 => 23,  66 => 22,  61 => 11,  55 => 20,  46 => 14,  42 => 13,  30 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
