<?php

/* @UserCountry/adminIndex.twig */
class __TwigTemplate_cbf76aa12ef3553c3a8bdc2ea7d4320bb2e4e2a1d817886345da4fa2232abbd0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("admin.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        $context["piwik"] = $this->env->loadTemplate("macros.twig");
        // line 5
        echo "
<h2 piwik-enriched-headline
    help-url=\"http://piwik.org/docs/geo-locate/\"
    id=\"location-providers\">";
        // line 8
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UserCountry_Geolocation")), "html", null, true);
        echo "</h2>

<div style=\"width:900px;\">

    <p>";
        // line 12
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UserCountry_GeolocationPageDesc")), "html", null, true);
        echo "</p>

    ";
        // line 14
        if ((!(isset($context["isThereWorkingProvider"]) ? $context["isThereWorkingProvider"] : $this->getContext($context, "isThereWorkingProvider")))) {
            // line 15
            echo "        <h3 style=\"margin-top:0;\">";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UserCountry_HowToSetupGeoIP")), "html", null, true);
            echo "</h3>
        <p>";
            // line 16
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UserCountry_HowToSetupGeoIPIntro")), "html", null, true);
            echo "</p>
        <ul style=\"list-style:disc;margin-left:2em;\">
            <li>";
            // line 18
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UserCountry_HowToSetupGeoIP_Step1", "<a href=\"http://geolite.maxmind.com/download/geoip/database/GeoLiteCity.dat.gz\">", "</a>", "<a target=\"_blank\" href=\"http://www.maxmind.com/?rId=piwik\">", "</a>"));
            echo "</li>
            <li>";
            // line 19
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UserCountry_HowToSetupGeoIP_Step2", "'GeoLiteCity.dat'", "<strong>", "</strong>"));
            echo "</li>
            <li>";
            // line 20
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UserCountry_HowToSetupGeoIP_Step3", "<strong>", "</strong>", "<span style=\"color:green\"><strong>", "</strong></span>"));
            echo "</li>
            <li>";
            // line 21
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UserCountry_HowToSetupGeoIP_Step4")), "html", null, true);
            echo "</li>
        </ul>
        <p>&nbsp;</p>
    ";
        }
        // line 25
        echo "
    <table class=\"adminTable locationProviderTable\">
        <tr>
            <th>";
        // line 28
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UserCountry_LocationProvider")), "html", null, true);
        echo "</th>
            <th>";
        // line 29
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Description")), "html", null, true);
        echo "</th>
            <th>";
        // line 30
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_InfoFor", (isset($context["thisIP"]) ? $context["thisIP"] : $this->getContext($context, "thisIP")))), "html", null, true);
        echo "</th>
        </tr>
        ";
        // line 32
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["locationProviders"]) ? $context["locationProviders"] : $this->getContext($context, "locationProviders")));
        foreach ($context['_seq'] as $context["id"] => $context["provider"]) {
            // line 33
            echo "        <tr>
            <td width=\"150\">
                <p>
                    <input class=\"location-provider\" name=\"location-provider\" value=\"";
            // line 36
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\" type=\"radio\" ";
            if (((isset($context["currentProviderId"]) ? $context["currentProviderId"] : $this->getContext($context, "currentProviderId")) == (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))) {
                echo "checked=\"checked\"";
            }
            // line 37
            echo "                           id=\"provider_input_";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\" ";
            if (($this->getAttribute((isset($context["provider"]) ? $context["provider"] : $this->getContext($context, "provider")), "status") != 1)) {
                echo "disabled=\"disabled\"";
            }
            echo "/>
                    <label for=\"provider_input_";
            // line 38
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array($this->getAttribute((isset($context["provider"]) ? $context["provider"] : $this->getContext($context, "provider")), "title"))), "html", null, true);
            echo "</label><br/>
                    <span class=\"loadingPiwik\" style=\"display:none;\"><img src=\"./plugins/Zeitgeist/images/loading-blue.gif\"/></span>
                    <span class=\"success\" ></span>
                </p>

                <p class=\"loc-provider-status\">
                    <strong><em>
                            ";
            // line 45
            if (($this->getAttribute((isset($context["provider"]) ? $context["provider"] : $this->getContext($context, "provider")), "status") == 0)) {
                // line 46
                echo "                                <span class=\"is-not-installed\">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_NotInstalled")), "html", null, true);
                echo "</span>
                            ";
            } elseif (($this->getAttribute((isset($context["provider"]) ? $context["provider"] : $this->getContext($context, "provider")), "status") == 1)) {
                // line 48
                echo "                                <span class=\"is-installed\">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Installed")), "html", null, true);
                echo "</span>
                            ";
            } elseif (($this->getAttribute((isset($context["provider"]) ? $context["provider"] : $this->getContext($context, "provider")), "status") == 2)) {
                // line 50
                echo "                                <span class=\"is-broken\">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Broken")), "html", null, true);
                echo "</span>
                            ";
            }
            // line 52
            echo "                        </em></strong>
                </p>
            </td>
            <td>
                <p>";
            // line 56
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array($this->getAttribute((isset($context["provider"]) ? $context["provider"] : $this->getContext($context, "provider")), "description")));
            echo "</p>
                ";
            // line 57
            if ((($this->getAttribute((isset($context["provider"]) ? $context["provider"] : $this->getContext($context, "provider")), "status") != 1) && $this->getAttribute((isset($context["provider"]) ? $context["provider"] : null), "install_docs", array(), "any", true, true))) {
                // line 58
                echo "                    <p>";
                echo $this->getAttribute((isset($context["provider"]) ? $context["provider"] : $this->getContext($context, "provider")), "install_docs");
                echo "</p>
                ";
            }
            // line 60
            echo "            </td>
            <td width=\"164\">
                ";
            // line 62
            if (($this->getAttribute((isset($context["provider"]) ? $context["provider"] : $this->getContext($context, "provider")), "status") == 1)) {
                // line 63
                echo "                    ";
                ob_start();
                // line 64
                echo "                        ";
                if (((isset($context["thisIP"]) ? $context["thisIP"] : $this->getContext($context, "thisIP")) != "127.0.0.1")) {
                    // line 65
                    echo "                            ";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UserCountry_CurrentLocationIntro")), "html", null, true);
                    echo ":
                            <div style=\"text-align:left;\">
                                <br/>
                                <span class=\"loadingPiwik\" style=\"display:none;position:absolute;\">
                                    <img src=\"./plugins/Zeitgeist/images/loading-blue.gif\"/> ";
                    // line 69
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Loading")), "html", null, true);
                    echo "</span>
                                <span class=\"location\"><strong><em>";
                    // line 70
                    echo $this->getAttribute((isset($context["provider"]) ? $context["provider"] : $this->getContext($context, "provider")), "location");
                    echo "</em></strong></span>
                            </div>
                            <div style=\"text-align:right;\">
                                <a href=\"#\" class=\"refresh-loc\" data-impl-id=\"";
                    // line 73
                    echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
                    echo "\"><em>";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Refresh")), "html", null, true);
                    echo "</em></a>
                            </div>
                        ";
                } else {
                    // line 76
                    echo "                            ";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UserCountry_CannotLocalizeLocalIP", (isset($context["thisIP"]) ? $context["thisIP"] : $this->getContext($context, "thisIP")))), "html", null, true);
                    echo "
                        ";
                }
                // line 78
                echo "                    ";
                $context["currentLocation"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 79
                echo "                    ";
                echo $context["piwik"]->getinlineHelp((isset($context["currentLocation"]) ? $context["currentLocation"] : $this->getContext($context, "currentLocation")));
                echo "
                ";
            }
            // line 81
            echo "                ";
            if (($this->getAttribute((isset($context["provider"]) ? $context["provider"] : null), "statusMessage", array(), "any", true, true) && $this->getAttribute((isset($context["provider"]) ? $context["provider"] : $this->getContext($context, "provider")), "statusMessage"))) {
                // line 82
                echo "                    ";
                ob_start();
                // line 83
                echo "                        ";
                if (($this->getAttribute((isset($context["provider"]) ? $context["provider"] : $this->getContext($context, "provider")), "status") == 2)) {
                    echo "<strong><em>";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Error")), "html", null, true);
                    echo ":</em></strong> ";
                }
                echo $this->getAttribute((isset($context["provider"]) ? $context["provider"] : $this->getContext($context, "provider")), "statusMessage");
                echo "
                    ";
                $context["brokenReason"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 85
                echo "                    ";
                echo $context["piwik"]->getinlineHelp((isset($context["brokenReason"]) ? $context["brokenReason"] : $this->getContext($context, "brokenReason")));
                echo "
                ";
            }
            // line 87
            echo "                ";
            if (($this->getAttribute((isset($context["provider"]) ? $context["provider"] : null), "extra_message", array(), "any", true, true) && $this->getAttribute((isset($context["provider"]) ? $context["provider"] : $this->getContext($context, "provider")), "extra_message"))) {
                // line 88
                echo "                    ";
                ob_start();
                // line 89
                echo "                        ";
                echo $this->getAttribute((isset($context["provider"]) ? $context["provider"] : $this->getContext($context, "provider")), "extra_message");
                echo "
                    ";
                $context["extraMessage"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 91
                echo "                    <br/>
                    ";
                // line 92
                echo $context["piwik"]->getinlineHelp((isset($context["extraMessage"]) ? $context["extraMessage"] : $this->getContext($context, "extraMessage")));
                echo "
                ";
            }
            // line 94
            echo "            </td>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['provider'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "    </table>

</div>

";
        // line 100
        if ((!(isset($context["geoIPDatabasesInstalled"]) ? $context["geoIPDatabasesInstalled"] : $this->getContext($context, "geoIPDatabasesInstalled")))) {
            // line 101
            echo "    <h2 id=\"geoip-db-mangement\">";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UserCountry_GeoIPDatabases")), "html", null, true);
            echo "</h2>
";
        } else {
            // line 103
            echo "    <h2 id=\"geoip-db-mangement\">";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UserCountry_SetupAutomaticUpdatesOfGeoIP")), "html", null, true);
            echo "</h2>
";
        }
        // line 105
        echo "
";
        // line 106
        if ((isset($context["showGeoIPUpdateSection"]) ? $context["showGeoIPUpdateSection"] : $this->getContext($context, "showGeoIPUpdateSection"))) {
            // line 107
            echo "    <div id=\"manage-geoip-dbs\" style=\"width:900px;\" class=\"adminTable\">

    ";
            // line 109
            if ((!(isset($context["geoIPDatabasesInstalled"]) ? $context["geoIPDatabasesInstalled"] : $this->getContext($context, "geoIPDatabasesInstalled")))) {
                // line 110
                echo "        <div id=\"geoipdb-screen1\">
            <p>";
                // line 111
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UserCountry_PiwikNotManagingGeoIPDBs")), "html", null, true);
                echo "</p>

            <div class=\"geoipdb-column-1\">
                <p>";
                // line 114
                echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UserCountry_IWantToDownloadFreeGeoIP"));
                echo "</p>
                <input type=\"button\" class=\"submit\" value=\"";
                // line 115
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_GetStarted")), "html", null, true);
                echo "...\" id=\"start-download-free-geoip\"/>
            </div>
            <div class=\"geoipdb-column-2\">
                <p>";
                // line 118
                echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UserCountry_IPurchasedGeoIPDBs", "<a href=\"http://www.maxmind.com/en/geolocation_landing?rId=piwik\">", "</a>"));
                echo "</p>
                <input type=\"button\" class=\"submit\" value=\"";
                // line 119
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_GetStarted")), "html", null, true);
                echo "...\" id=\"start-automatic-update-geoip\"/>
            </div>
        </div>
        <div id=\"geoipdb-screen2-download\" style=\"display:none;\">
            <p class='loadingPiwik'><img src='./plugins/Zeitgeist/images/loading-blue.gif'/>
            ";
                // line 124
                echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UserCountry_DownloadingDb", (("<a href=\"" . (isset($context["geoLiteUrl"]) ? $context["geoLiteUrl"] : $this->getContext($context, "geoLiteUrl"))) . "\">GeoLiteCity.dat</a>")));
                echo "...</p>
\t        <div id=\"geoip-download-progress\"></div>
        </div>
    ";
            }
            // line 128
            echo "    ";
            $this->env->loadTemplate("@UserCountry/_updaterManage.twig")->display($context);
        } else {
            // line 130
            echo "<p style=\"width:900px;\" class=\"form-description\">";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UserCountry_CannotSetupGeoIPAutoUpdating")), "html", null, true);
            echo "</p>
";
        }
        // line 132
        echo "</div>

";
    }

    public function getTemplateName()
    {
        return "@UserCountry/adminIndex.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  355 => 132,  349 => 130,  345 => 128,  338 => 124,  330 => 119,  326 => 118,  320 => 115,  316 => 114,  310 => 111,  307 => 110,  305 => 109,  301 => 107,  299 => 106,  296 => 105,  290 => 103,  284 => 101,  282 => 100,  276 => 96,  269 => 94,  264 => 92,  261 => 91,  255 => 89,  252 => 88,  249 => 87,  243 => 85,  232 => 83,  229 => 82,  226 => 81,  220 => 79,  217 => 78,  211 => 76,  203 => 73,  197 => 70,  193 => 69,  185 => 65,  182 => 64,  179 => 63,  177 => 62,  173 => 60,  167 => 58,  165 => 57,  161 => 56,  155 => 52,  149 => 50,  143 => 48,  137 => 46,  135 => 45,  123 => 38,  114 => 37,  108 => 36,  103 => 33,  99 => 32,  94 => 30,  90 => 29,  86 => 28,  81 => 25,  74 => 21,  70 => 20,  66 => 19,  62 => 18,  57 => 16,  52 => 15,  50 => 14,  45 => 12,  38 => 8,  33 => 5,  31 => 4,  28 => 3,);
    }
}
