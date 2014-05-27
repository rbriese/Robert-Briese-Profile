<?php

/* @UserCountry/_updaterManage.twig */
class __TwigTemplate_62e1af524d7697c201aba1956c92f62d3ace5b47847dae387b883df7571ef58c extends Twig_Template
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
        echo "<div id=\"geoipdb-update-info\" ";
        if ((!(isset($context["geoIPDatabasesInstalled"]) ? $context["geoIPDatabasesInstalled"] : $this->getContext($context, "geoIPDatabasesInstalled")))) {
            echo "style=\"display:none;\"";
        }
        echo ">
    <p>";
        // line 2
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UserCountry_GeoIPUpdaterInstructions", "<a href=\"http://www.maxmind.com/en/download_files?rId=piwik\" _target=\"blank\">", "</a>", "<a href=\"http://www.maxmind.com/?rId=piwik\">", "</a>"));
        // line 3
        echo "
        <br/><br/>
";
        // line 5
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UserCountry_GeoLiteCityLink", (("<a href='" . (isset($context["geoLiteUrl"]) ? $context["geoLiteUrl"] : $this->getContext($context, "geoLiteUrl"))) . "'>"), (isset($context["geoLiteUrl"]) ? $context["geoLiteUrl"] : $this->getContext($context, "geoLiteUrl")), "</a>"));
        echo "
\t";
        // line 6
        if ((isset($context["geoIPDatabasesInstalled"]) ? $context["geoIPDatabasesInstalled"] : $this->getContext($context, "geoIPDatabasesInstalled"))) {
            // line 7
            echo "\t<br/><br/>";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UserCountry_GeoIPUpdaterIntro")), "html", null, true);
            echo ":
\t";
        }
        // line 9
        echo "\t</p>
\t<table class=\"adminTable\" style=\"width:900px;\">
\t\t<tr>
\t\t\t<th>";
        // line 12
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Live_GoalType")), "html", null, true);
        echo "</th>
\t\t\t<th>";
        // line 13
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Actions_ColumnDownloadURL")), "html", null, true);
        echo "</th>
\t\t\t<th></th>
\t\t</tr>
\t\t<tr>
\t\t\t<td width=\"150\">";
        // line 17
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UserCountry_LocationDatabase")), "html", null, true);
        echo "</td>
\t\t\t<td><input type=\"text\" id=\"geoip-location-db\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["geoIPLocUrl"]) ? $context["geoIPLocUrl"] : $this->getContext($context, "geoIPLocUrl")), "html", null, true);
        echo "\"/></td>
\t\t\t<td width=\"164\">
\t\t\t\t";
        // line 20
        ob_start();
        // line 21
        echo "\t\t\t\t";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UserCountry_LocationDatabaseHint")), "html", null, true);
        echo "
\t\t\t\t";
        $context["locationHint"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 23
        echo "                ";
        $context["piwik"] = $this->env->loadTemplate("macros.twig");
        // line 24
        echo "\t\t\t\t";
        echo $context["piwik"]->getinlineHelp((isset($context["locationHint"]) ? $context["locationHint"] : $this->getContext($context, "locationHint")));
        echo "
\t\t\t</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td width=\"150\">";
        // line 28
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UserCountry_ISPDatabase")), "html", null, true);
        echo "</td>
\t\t\t<td><input type=\"text\" id=\"geoip-isp-db\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["geoIPIspUrl"]) ? $context["geoIPIspUrl"] : $this->getContext($context, "geoIPIspUrl")), "html", null, true);
        echo "\"/></td>
\t\t</tr>
\t\t<tr>
\t\t\t<td width=\"150\">";
        // line 32
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UserCountry_OrgDatabase")), "html", null, true);
        echo "</td>
\t\t\t<td><input type=\"text\" id=\"geoip-org-db\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["geoIPOrgUrl"]) ? $context["geoIPOrgUrl"] : $this->getContext($context, "geoIPOrgUrl")), "html", null, true);
        echo "\"/></td>
\t\t</tr>
\t\t<tr>
\t\t\t<td width=\"150\">";
        // line 36
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UserCountry_DownloadNewDatabasesEvery")), "html", null, true);
        echo "</td>
\t\t\t<td id=\"geoip-update-period-cell\">
\t\t\t\t<input type=\"radio\" name=\"geoip-update-period\" value=\"month\" id=\"geoip-update-period-month\" ";
        // line 38
        if (((isset($context["geoIPUpdatePeriod"]) ? $context["geoIPUpdatePeriod"] : $this->getContext($context, "geoIPUpdatePeriod")) == "month")) {
            echo "checked=\"checked\"";
        }
        echo " />
\t\t\t\t<label for=\"geoip-update-period-month\">";
        // line 39
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreHome_PeriodMonth")), "html", null, true);
        echo "</label>
\t\t\t\t
\t\t\t\t<input type=\"radio\" name=\"geoip-update-period\" value=\"week\" id=\"geoip-update-period-week\" ";
        // line 41
        if (((isset($context["geoIPUpdatePeriod"]) ? $context["geoIPUpdatePeriod"] : $this->getContext($context, "geoIPUpdatePeriod")) == "week")) {
            echo "checked=\"checked\"";
        }
        echo "/>
\t\t\t\t<label for=\"geoip-update-period-week\">";
        // line 42
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreHome_PeriodWeek")), "html", null, true);
        echo "</label>
\t\t\t</td>
\t\t\t<td width=\"164\">
\t\t\t";
        // line 45
        ob_start();
        // line 46
        echo "\t\t\t\t";
        if ((array_key_exists("lastTimeUpdaterRun", $context) && (!twig_test_empty((isset($context["lastTimeUpdaterRun"]) ? $context["lastTimeUpdaterRun"] : $this->getContext($context, "lastTimeUpdaterRun")))))) {
            // line 47
            echo "\t\t\t\t\t";
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UserCountry_UpdaterWasLastRun", (isset($context["lastTimeUpdaterRun"]) ? $context["lastTimeUpdaterRun"] : $this->getContext($context, "lastTimeUpdaterRun"))));
            echo "
\t\t\t\t";
        } else {
            // line 49
            echo "\t\t\t\t\t";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UserCountry_UpdaterHasNotBeenRun")), "html", null, true);
            echo "
\t\t\t\t";
        }
        // line 51
        echo "        <br/><br/>
        <div id=\"geoip-updater-next-run-time\">
        ";
        // line 53
        $this->env->loadTemplate("@UserCountry/_updaterNextRunTime.twig")->display($context);
        // line 54
        echo "        </div>
\t\t\t";
        $context["lastTimeRunNote"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 56
        echo "\t\t\t";
        echo $context["piwik"]->getinlineHelp((isset($context["lastTimeRunNote"]) ? $context["lastTimeRunNote"] : $this->getContext($context, "lastTimeRunNote")));
        echo "
\t\t\t</td>
\t\t</tr>
\t</table>
\t<p style=\"display:inline-block;vertical-align:top;\">
\t\t<input type=\"button\" class=\"submit\" value=\"";
        // line 61
        if ((!(isset($context["geoIPDatabasesInstalled"]) ? $context["geoIPDatabasesInstalled"] : $this->getContext($context, "geoIPDatabasesInstalled")))) {
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Continue")), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Save")), "html", null, true);
        }
        echo "\" id=\"update-geoip-links\"/>
\t</p>
\t<div style=\"display:inline-block;width:700px;\">
\t\t<div id=\"done-updating-updater\"></div>
\t\t<div id=\"geoipdb-update-info-error\"></div>
\t\t<div id=\"geoip-progressbar-container\" style=\"display:none;\">
\t\t\t<div id=\"geoip-updater-progressbar\"></div>
\t\t\t<span id=\"geoip-updater-progressbar-label\"></span>
\t\t</div>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@UserCountry/_updaterManage.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 61,  163 => 56,  159 => 54,  157 => 53,  153 => 51,  147 => 49,  141 => 47,  138 => 46,  136 => 45,  130 => 42,  124 => 41,  119 => 39,  113 => 38,  102 => 33,  98 => 32,  92 => 29,  88 => 28,  80 => 24,  77 => 23,  71 => 21,  69 => 20,  64 => 18,  60 => 17,  53 => 13,  49 => 12,  44 => 9,  36 => 6,  32 => 5,  26 => 2,  19 => 1,  355 => 132,  349 => 130,  345 => 128,  338 => 124,  330 => 119,  326 => 118,  320 => 115,  316 => 114,  310 => 111,  307 => 110,  305 => 109,  301 => 107,  299 => 106,  296 => 105,  290 => 103,  284 => 101,  282 => 100,  276 => 96,  269 => 94,  264 => 92,  261 => 91,  255 => 89,  252 => 88,  249 => 87,  243 => 85,  232 => 83,  229 => 82,  226 => 81,  220 => 79,  217 => 78,  211 => 76,  203 => 73,  197 => 70,  193 => 69,  185 => 65,  182 => 64,  179 => 63,  177 => 62,  173 => 60,  167 => 58,  165 => 57,  161 => 56,  155 => 52,  149 => 50,  143 => 48,  137 => 46,  135 => 45,  123 => 38,  114 => 37,  108 => 36,  103 => 33,  99 => 32,  94 => 30,  90 => 29,  86 => 28,  81 => 25,  74 => 21,  70 => 20,  66 => 19,  62 => 18,  57 => 16,  52 => 15,  50 => 14,  45 => 12,  38 => 7,  33 => 5,  31 => 4,  28 => 3,);
    }
}
