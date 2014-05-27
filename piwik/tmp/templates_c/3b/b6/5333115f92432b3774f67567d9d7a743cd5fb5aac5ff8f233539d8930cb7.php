<?php

/* @PrivacyManager/privacySettings.twig */
class __TwigTemplate_3bb65333115f92432b3774f67567d9d7a743cd5fb5aac5ff8f233539d8930cb7 extends Twig_Template
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
        if ((isset($context["isSuperUser"]) ? $context["isSuperUser"] : $this->getContext($context, "isSuperUser"))) {
            // line 6
            echo "    <h2 piwik-enriched-headline
        help-url=\"http://piwik.org/docs/privacy/\">";
            // line 7
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_TeaserHeadline")), "html", null, true);
            echo "</h2>
    <p>";
            // line 8
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_Teaser", "<a href=\"#anonymizeIPAnchor\">", "</a>", "<a href=\"#deleteLogsAnchor\">", "</a>", "<a href=\"#optOutAnchor\">", "</a>"));
            echo "
        ";
            // line 9
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_SeeAlsoOurOfficialGuidePrivacy", "<strong><a href=\"http://piwik.org/privacy/\" target=\"_blank\">", "</a></strong>"));
            echo "</p>
    <h2 id=\"anonymizeIPAnchor\">";
            // line 10
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_UseAnonymizeIp")), "html", null, true);
            echo "</h2>
    <form method=\"post\" action=\"";
            // line 11
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('urlRewriteWithParameters')->getCallable(), array(array("action" => "saveSettings", "form" => "formMaskLength", "token_auth" => (isset($context["token_auth"]) ? $context["token_auth"] : $this->getContext($context, "token_auth"))))), "html", null, true);
            echo "\" id=\"formMaskLength\">
        <div id='anonymizeIpSettings'>
            <table class=\"adminTable\" style='width:800px;'>
                <tr>
                    <td width=\"250\">";
            // line 15
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_UseAnonymizeIp")), "html", null, true);
            echo "<br/>
                        <span class=\"form-description\">";
            // line 16
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_AnonymizeIpDescription")), "html", null, true);
            echo "</span>
                    </td>
                    <td width='500'>
                        <input id=\"anonymizeIPEnable-1\" type=\"radio\" name=\"anonymizeIPEnable\" value=\"1\" ";
            // line 19
            if (($this->getAttribute((isset($context["anonymizeIP"]) ? $context["anonymizeIP"] : $this->getContext($context, "anonymizeIP")), "enabled") == "1")) {
                echo "checked ";
            }
            echo "/>
                        <label for=\"anonymizeIPEnable-1\">";
            // line 20
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Yes")), "html", null, true);
            echo "</label>
                        <input class=\"indented-radio-button\" id=\"anonymizeIPEnable-0\" type=\"radio\" name=\"anonymizeIPEnable\" value=\"0\" ";
            // line 21
            if (($this->getAttribute((isset($context["anonymizeIP"]) ? $context["anonymizeIP"] : $this->getContext($context, "anonymizeIP")), "enabled") == "0")) {
                echo " checked ";
            }
            echo "/>
                        <label for=\"anonymizeIPEnable-0\">";
            // line 22
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_No")), "html", null, true);
            echo "</label>
                        <input type=\"hidden\" name=\"token_auth\" value=\"";
            // line 23
            echo twig_escape_filter($this->env, (isset($context["token_auth"]) ? $context["token_auth"] : $this->getContext($context, "token_auth")), "html", null, true);
            echo "\"/>
                    </td>
                    <td width=\"200\">
                        <div style=\"width:180px\">
                            ";
            // line 27
            echo $context["piwik"]->getinlineHelp(call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_AnonymizeIpInlineHelp")));
            echo "
                        </div>
                    </td>
                </tr>
            </table>
        </div>
        <div id=\"anonymizeIPenabled\">
            <table class=\"adminTable\" style='width:800px;'>
                <tr>
                    <td width=\"250\">";
            // line 36
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_AnonymizeIpMaskLengtDescription")), "html", null, true);
            echo "</td>
                    <td width=\"500\">
                        <input id=\"maskLength-1\" type=\"radio\" name=\"maskLength\" value=\"1\" ";
            // line 38
            if (($this->getAttribute((isset($context["anonymizeIP"]) ? $context["anonymizeIP"] : $this->getContext($context, "anonymizeIP")), "maskLength") == "1")) {
                // line 39
                echo "                            checked ";
            }
            echo "/>
                        <label for=\"maskLength-1\">";
            // line 40
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_AnonymizeIpMaskLength", "1", "192.168.100.xxx")), "html", null, true);
            echo "</label><br/>
                        <input id=\"maskLength-2\" type=\"radio\" name=\"maskLength\" value=\"2\" ";
            // line 41
            if (($this->getAttribute((isset($context["anonymizeIP"]) ? $context["anonymizeIP"] : $this->getContext($context, "anonymizeIP")), "maskLength") == "2")) {
                // line 42
                echo "                            checked ";
            }
            echo "/>
                        <label for=\"maskLength-2\">";
            // line 43
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_AnonymizeIpMaskLength", "2", "192.168.xxx.xxx")), "html", null, true);
            echo " <span
                                    class=\"form-description\">";
            // line 44
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Recommended")), "html", null, true);
            echo "</span></label><br/>
                        <input id=\"maskLength-3\" type=\"radio\" name=\"maskLength\" value=\"3\" ";
            // line 45
            if (($this->getAttribute((isset($context["anonymizeIP"]) ? $context["anonymizeIP"] : $this->getContext($context, "anonymizeIP")), "maskLength") == "3")) {
                // line 46
                echo "                            checked ";
            }
            echo "/>
                        <label for=\"maskLength-3\">";
            // line 47
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_AnonymizeIpMaskLength", "3", "192.xxx.xxx.xxx")), "html", null, true);
            echo "</label>
                    </td>
                    <td width=\"200\">
                        <div style=\"width:180px\">
                            ";
            // line 51
            echo $context["piwik"]->getinlineHelp(call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_GeolocationAnonymizeIpNote")));
            echo "
                        </div>
                    </td>
                </tr>
                <tr>
                    <td width=\"250\">
                        ";
            // line 57
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_UseAnonymizedIpForVisitEnrichment")), "html", null, true);
            echo "
                    </td>
                    <td width='500'>
                        <input id=\"useAnonymizedIpForVisitEnrichment-1\" type=\"radio\" name=\"useAnonymizedIpForVisitEnrichment\" value=\"1\" ";
            // line 60
            if (($this->getAttribute((isset($context["anonymizeIP"]) ? $context["anonymizeIP"] : $this->getContext($context, "anonymizeIP")), "useAnonymizedIpForVisitEnrichment") == "1")) {
                echo "checked ";
            }
            echo "/>
                        <label for=\"useAnonymizedIpForVisitEnrichment-1\">";
            // line 61
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Yes")), "html", null, true);
            echo "</label>
                        <span class=\"form-description\">
                            ";
            // line 63
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_RecommendedForPrivacy")), "html", null, true);
            echo "
                        </span>
                        <br/>
                        <input id=\"useAnonymizedIpForVisitEnrichment-2\" type=\"radio\" name=\"useAnonymizedIpForVisitEnrichment\" value=\"0\" ";
            // line 66
            if (($this->getAttribute((isset($context["anonymizeIP"]) ? $context["anonymizeIP"] : $this->getContext($context, "anonymizeIP")), "useAnonymizedIpForVisitEnrichment") == "0")) {
                echo " checked ";
            }
            echo "/>
                        <label for=\"useAnonymizedIpForVisitEnrichment-2\">";
            // line 67
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_No")), "html", null, true);
            echo "</label>
                    </td>
                    <td width=\"200\">
                        <div style=\"width:180px\">
                            ";
            // line 71
            echo $context["piwik"]->getinlineHelp(call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_UseAnonymizedIpForVisitEnrichmentNote")));
            echo "
                        </div>
                    </td>
                </tr>
            </table>
        </div>

        <input type=\"hidden\" name=\"nonce\" value=\"";
            // line 78
            if ($this->getAttribute((isset($context["anonymizeIP"]) ? $context["anonymizeIP"] : $this->getContext($context, "anonymizeIP")), "enabled")) {
                echo twig_escape_filter($this->env, (isset($context["deactivateNonce"]) ? $context["deactivateNonce"] : $this->getContext($context, "deactivateNonce")), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, (isset($context["activateNonce"]) ? $context["activateNonce"] : $this->getContext($context, "activateNonce")), "html", null, true);
            }
            echo "\">

        <input type=\"submit\" value=\"";
            // line 80
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Save")), "html", null, true);
            echo "\" id=\"privacySettingsSubmit\" class=\"submit\"/>
    </form>

    ";
            // line 83
            if ((isset($context["isDataPurgeSettingsEnabled"]) ? $context["isDataPurgeSettingsEnabled"] : $this->getContext($context, "isDataPurgeSettingsEnabled"))) {
                // line 84
                echo "    <div class=\"ui-confirm\" id=\"confirmDeleteSettings\">
        <h2 id=\"deleteLogsConfirm\">";
                // line 85
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_DeleteLogsConfirm")), "html", null, true);
                echo "</h2>

        <h2 id=\"deleteReportsConfirm\">";
                // line 87
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_DeleteReportsConfirm")), "html", null, true);
                echo "</h2>

        <h2 id=\"deleteBothConfirm\">";
                // line 89
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_DeleteBothConfirm")), "html", null, true);
                echo "</h2>
        <input role=\"yes\" type=\"button\" value=\"";
                // line 90
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Yes")), "html", null, true);
                echo "\"/>
        <input role=\"no\" type=\"button\" value=\"";
                // line 91
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_No")), "html", null, true);
                echo "\"/>
    </div>
    <div class=\"ui-confirm\" id=\"saveSettingsBeforePurge\">
        <h2>";
                // line 94
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_SaveSettingsBeforePurge")), "html", null, true);
                echo "</h2>
        <input role=\"yes\" type=\"button\" value=\"";
                // line 95
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Ok")), "html", null, true);
                echo "\"/>
    </div>
    <div class=\"ui-confirm\" id=\"confirmPurgeNow\">
        <h2>";
                // line 98
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_PurgeNowConfirm")), "html", null, true);
                echo "</h2>
        <input role=\"yes\" type=\"button\" value=\"";
                // line 99
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Yes")), "html", null, true);
                echo "\"/>
        <input role=\"no\" type=\"button\" value=\"";
                // line 100
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_No")), "html", null, true);
                echo "\"/>
    </div>
    <h2 id=\"deleteLogsAnchor\">";
                // line 102
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_DeleteDataSettings")), "html", null, true);
                echo "</h2>
    <p>";
                // line 103
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_DeleteDataDescription")), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_DeleteDataDescription2")), "html", null, true);
                echo "</p>
    <form method=\"post\" action=\"";
                // line 104
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('urlRewriteWithParameters')->getCallable(), array(array("action" => "saveSettings", "form" => "formDeleteSettings", "token_auth" => (isset($context["token_auth"]) ? $context["token_auth"] : $this->getContext($context, "token_auth"))))), "html", null, true);
                echo "\" id=\"formDeleteSettings\">
        <table class=\"adminTable\" style='width:800px;'>
            <tr id='deleteLogSettingEnabled'>
                <td width=\"250\">";
                // line 107
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_UseDeleteLog")), "html", null, true);
                echo "<br/>

                </td>
                <td width='500'>
                    <input id=\"deleteEnable-1\" type=\"radio\" name=\"deleteEnable\" value=\"1\" ";
                // line 111
                if (($this->getAttribute($this->getAttribute((isset($context["deleteData"]) ? $context["deleteData"] : $this->getContext($context, "deleteData")), "config"), "delete_logs_enable") == "1")) {
                    // line 112
                    echo "                        checked ";
                }
                echo "/>
                    <label for=\"deleteEnable-1\">";
                // line 113
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Yes")), "html", null, true);
                echo "</label>
                    <input class=\"indented-radio-button\" id=\"deleteEnable-2\" type=\"radio\" name=\"deleteEnable\" value=\"0\"
                                  ";
                // line 115
                if (($this->getAttribute($this->getAttribute((isset($context["deleteData"]) ? $context["deleteData"] : $this->getContext($context, "deleteData")), "config"), "delete_logs_enable") == "0")) {
                    // line 116
                    echo "                        checked ";
                }
                echo "/>
                    <label for=\"deleteEnable-2\">";
                // line 117
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_No")), "html", null, true);
                echo "</label>
\t\t\t\t<span id=\"privacyManagerDeleteLogDescription\" style=\"margin-top: 10px;display:inline-block;\">
                    ";
                // line 119
                ob_start();
                // line 120
                echo "                        ";
                echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_DeleteLogDescription2"));
                echo "
                        <a href=\"http://piwik.org/faq/general/#faq_125\" target=\"_blank\">
                            ";
                // line 122
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_ClickHere")), "html", null, true);
                echo "
                        </a>
                    ";
                $context["deleteLogDescription"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 125
                echo "                    ";
                echo call_user_func_array($this->env->getFilter('notification')->getCallable(), array((isset($context["deleteLogDescription"]) ? $context["deleteLogDescription"] : $this->getContext($context, "deleteLogDescription")), array("raw" => true, "placeat" => "#privacyManagerDeleteLogDescription", "noclear" => true, "context" => "warning")));
                echo "
\t\t\t\t</span>
                </td>
                <td width=\"200\">
                    ";
                // line 129
                ob_start();
                // line 130
                echo "                        ";
                echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_DeleteLogInfo", $this->getAttribute((isset($context["deleteData"]) ? $context["deleteData"] : $this->getContext($context, "deleteData")), "deleteTables")));
                echo "
                        ";
                // line 131
                if ((!(isset($context["canDeleteLogActions"]) ? $context["canDeleteLogActions"] : $this->getContext($context, "canDeleteLogActions")))) {
                    // line 132
                    echo "                            <br/>
                            <br/>
                            ";
                    // line 134
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_CannotLockSoDeleteLogActions", (isset($context["dbUser"]) ? $context["dbUser"] : $this->getContext($context, "dbUser")))), "html", null, true);
                    echo "
                        ";
                }
                // line 136
                echo "                    ";
                $context["deleteLogInfo"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 137
                echo "                    ";
                echo $context["piwik"]->getinlineHelp((isset($context["deleteLogInfo"]) ? $context["deleteLogInfo"] : $this->getContext($context, "deleteLogInfo")));
                echo "
                </td>
            </tr>
            <tr id=\"deleteLogSettings\">
                <td width=\"250\">&nbsp;</td>
                <td width=\"500\">
                    <label>";
                // line 143
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_DeleteLogsOlderThan")), "html", null, true);
                echo "
                        <input type=\"text\" id=\"deleteOlderThan\" value=\"";
                // line 144
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["deleteData"]) ? $context["deleteData"] : $this->getContext($context, "deleteData")), "config"), "delete_logs_older_than"), "html", null, true);
                echo "\" style=\"width:55px;\"
                               name=\"deleteOlderThan\"/>
                        ";
                // line 146
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreHome_PeriodDays")), "html", null, true);
                echo "</label><br/>
                    <span class=\"form-description\">";
                // line 147
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_LeastDaysInput", "1")), "html", null, true);
                echo "</span>
                </td>
                <td width=\"200\">

                </td>
            </tr>
            <tr id='deleteReportsSettingEnabled'>
                <td width=\"250\">";
                // line 154
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_UseDeleteReports")), "html", null, true);
                echo "
                </td>
                <td width=\"500\">
                    <input id=\"deleteReportsEnable-1\" type=\"radio\" name=\"deleteReportsEnable\" value=\"1\" ";
                // line 157
                if (($this->getAttribute($this->getAttribute((isset($context["deleteData"]) ? $context["deleteData"] : $this->getContext($context, "deleteData")), "config"), "delete_reports_enable") == "1")) {
                    echo "checked=\"true\"";
                }
                echo " />
                    <label for=\"deleteReportsEnable-1\">";
                // line 158
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Yes")), "html", null, true);
                echo "</label>
                    <input class=\"indented-radio-button\" id=\"deleteReportsEnable-2\" type=\"radio\" name=\"deleteReportsEnable\" value=\"0\" ";
                // line 159
                if (($this->getAttribute($this->getAttribute((isset($context["deleteData"]) ? $context["deleteData"] : $this->getContext($context, "deleteData")), "config"), "delete_reports_enable") == "0")) {
                    echo "checked=\"true\"";
                }
                echo "/>
                    <label for=\"deleteReportsEnable-2\">";
                // line 160
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_No")), "html", null, true);
                echo "</label>

                    ";
                // line 162
                ob_start();
                // line 163
                echo "                        ";
                ob_start();
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_UseDeleteLog")), "html", null, true);
                $context["deleteOldLogs"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 164
                echo "                        ";
                echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_DeleteReportsInfo", "<em>", "</em>"));
                echo "
                        <span id='deleteOldReportsMoreInfo'><br/><br/>
                            ";
                // line 166
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_DeleteReportsInfo2", (isset($context["deleteOldLogs"]) ? $context["deleteOldLogs"] : $this->getContext($context, "deleteOldLogs")))), "html", null, true);
                echo "<br/><br/>
                            ";
                // line 167
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_DeleteReportsInfo3", (isset($context["deleteOldLogs"]) ? $context["deleteOldLogs"] : $this->getContext($context, "deleteOldLogs")))), "html", null, true);
                echo "</span>
                    ";
                $context["useDeleteLog"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 169
                echo "                    <span id=\"privacyManagerUseDeleteLog\" style=\"margin-top: 10px;display:inline-block;\">
                        ";
                // line 170
                echo call_user_func_array($this->env->getFilter('notification')->getCallable(), array((isset($context["useDeleteLog"]) ? $context["useDeleteLog"] : $this->getContext($context, "useDeleteLog")), array("raw" => true, "placeat" => "#privacyManagerUseDeleteLog", "noclear" => true, "context" => "warning")));
                echo "
                    </span>
                </td>
                <td width=\"200\">
                    ";
                // line 174
                echo $context["piwik"]->getinlineHelp(call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_DeleteReportsDetailedInfo", "archive_numeric_*", "archive_blob_*")));
                echo "
                </td>
            </tr>
            <tr id='deleteReportsSettings'>
                <td width=\"250\">&nbsp;</td>
                <td width=\"500\">
                    <label>";
                // line 180
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_DeleteReportsOlderThan")), "html", null, true);
                echo "
                        <input type=\"text\" id=\"deleteReportsOlderThan\" value=\"";
                // line 181
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["deleteData"]) ? $context["deleteData"] : $this->getContext($context, "deleteData")), "config"), "delete_reports_older_than"), "html", null, true);
                echo "\" style=\"width:42px;\"
                               name=\"deleteReportsOlderThan\"/>
                        ";
                // line 183
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreHome_PeriodMonths")), "html", null, true);
                echo "
                    </label><br/>
                    <span class=\"form-description\">";
                // line 185
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_LeastMonthsInput", "3")), "html", null, true);
                echo "</span><br/><br/>
                    <input id=\"deleteReportsKeepBasic\" type=\"checkbox\" name=\"deleteReportsKeepBasic\" value=\"1\"
                                  ";
                // line 187
                if ($this->getAttribute($this->getAttribute((isset($context["deleteData"]) ? $context["deleteData"] : $this->getContext($context, "deleteData")), "config"), "delete_reports_keep_basic_metrics")) {
                    echo "checked=\"true\"";
                }
                echo ">
                    <label for=\"deleteReportsKeepBasic\">";
                // line 188
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_KeepBasicMetrics")), "html", null, true);
                echo "
                        <span class=\"form-description\">";
                // line 189
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Recommended")), "html", null, true);
                echo "</span>
                    </label><br/><br/>
                    ";
                // line 191
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_KeepDataFor")), "html", null, true);
                echo "<br/><br/>
                    <input id=\"deleteReportsKeepDay\" type=\"checkbox\" name=\"deleteReportsKeepDay\" value=\"1\"
                                  ";
                // line 193
                if ($this->getAttribute($this->getAttribute((isset($context["deleteData"]) ? $context["deleteData"] : $this->getContext($context, "deleteData")), "config"), "delete_reports_keep_day_reports")) {
                    echo "checked=\"true\"";
                }
                echo ">
                    <label for=\"deleteReportsKeepDay\">";
                // line 194
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_DailyReports")), "html", null, true);
                echo "</label><br/>
                    <input type=\"checkbox\" name=\"deleteReportsKeepWeek\" value=\"1\" id=\"deleteReportsKeepWeek\"
                                  ";
                // line 196
                if ($this->getAttribute($this->getAttribute((isset($context["deleteData"]) ? $context["deleteData"] : $this->getContext($context, "deleteData")), "config"), "delete_reports_keep_week_reports")) {
                    echo "checked=\"true\"";
                }
                echo ">
                    <label for=\"deleteReportsKeepWeek\">";
                // line 197
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_WeeklyReports")), "html", null, true);
                echo "</label><br/>
                    <input type=\"checkbox\" name=\"deleteReportsKeepMonth\" value=\"1\" id=\"deleteReportsKeepMonth\"
                                  ";
                // line 199
                if ($this->getAttribute($this->getAttribute((isset($context["deleteData"]) ? $context["deleteData"] : $this->getContext($context, "deleteData")), "config"), "delete_reports_keep_month_reports")) {
                    echo "checked=\"true\"";
                }
                echo ">
                    <label for=\"deleteReportsKeepMonth\">";
                // line 200
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_MonthlyReports")), "html", null, true);
                echo "<span
                                class=\"form-description\">";
                // line 201
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Recommended")), "html", null, true);
                echo "</span></label><br/>
                    <input type=\"checkbox\" name=\"deleteReportsKeepYear\" value=\"1\" id=\"deleteReportsKeepYear\"
                                  ";
                // line 203
                if ($this->getAttribute($this->getAttribute((isset($context["deleteData"]) ? $context["deleteData"] : $this->getContext($context, "deleteData")), "config"), "delete_reports_keep_year_reports")) {
                    echo "checked=\"true\"";
                }
                echo ">
                    <label for=\"deleteReportsKeepYear\">";
                // line 204
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_YearlyReports")), "html", null, true);
                echo "<span
                                class=\"form-description\">";
                // line 205
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Recommended")), "html", null, true);
                echo "</span></label><br/>
                    <input type=\"checkbox\" name=\"deleteReportsKeepRange\" value=\"1\" id=\"deleteReportsKeepRange\"
                                  ";
                // line 207
                if ($this->getAttribute($this->getAttribute((isset($context["deleteData"]) ? $context["deleteData"] : $this->getContext($context, "deleteData")), "config"), "delete_reports_keep_range_reports")) {
                    echo "checked=\"true\"";
                }
                echo ">
                    <label for=\"deleteReportsKeepRange\">";
                // line 208
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_RangeReports")), "html", null, true);
                echo "
                    </label><br/><br/>
                    <input type=\"checkbox\" name=\"deleteReportsKeepSegments\" value=\"1\" id=\"deleteReportsKeepSegments\"
                                  ";
                // line 211
                if ($this->getAttribute($this->getAttribute((isset($context["deleteData"]) ? $context["deleteData"] : $this->getContext($context, "deleteData")), "config"), "delete_reports_keep_segment_reports")) {
                    echo "checked=\"true\"";
                }
                echo ">
                    <label for=\"deleteReportsKeepSegments\">";
                // line 212
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_KeepReportSegments")), "html", null, true);
                echo "</label><br/>
                </td>
                <td width=\"200\">

                </td>
            </tr>
            <tr id=\"deleteDataEstimateSect\"
                ";
                // line 219
                if ((($this->getAttribute($this->getAttribute((isset($context["deleteData"]) ? $context["deleteData"] : $this->getContext($context, "deleteData")), "config"), "delete_reports_enable") == "0") && ($this->getAttribute($this->getAttribute((isset($context["deleteData"]) ? $context["deleteData"] : $this->getContext($context, "deleteData")), "config"), "delete_logs_enable") == "0"))) {
                    echo "style=\"display:none;\"";
                }
                echo ">
                <td width=\"250\">";
                // line 220
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_ReportsDataSavedEstimate")), "html", null, true);
                echo "<br/></td>
                <td width=\"500\">
                    <div id=\"deleteDataEstimate\"></div>
                    <span class=\"loadingPiwik\" style=\"display:none;\"><img
                                src=\"./plugins/Zeitgeist/images/loading-blue.gif\"/> ";
                // line 224
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_LoadingData")), "html", null, true);
                echo "</span>
                </td>
                <td width=\"200\">
                    ";
                // line 227
                if (($this->getAttribute($this->getAttribute((isset($context["deleteData"]) ? $context["deleteData"] : $this->getContext($context, "deleteData")), "config"), "enable_auto_database_size_estimate") == "0")) {
                    // line 228
                    echo "                        ";
                    ob_start();
                    // line 229
                    echo "                            <em><a id=\"getPurgeEstimateLink\" style=\"width:280px\" class=\"ui-inline-help\" href=\"#\">";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_GetPurgeEstimate")), "html", null, true);
                    echo "</a></em>
                        ";
                    $context["manualEstimate"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                    // line 231
                    echo "                        ";
                    echo $context["piwik"]->getinlineHelp((isset($context["manualEstimate"]) ? $context["manualEstimate"] : $this->getContext($context, "manualEstimate")));
                    echo "
                    ";
                }
                // line 233
                echo "                </td>
            </tr>
            <tr id=\"deleteSchedulingSettings\">
                <td width=\"250\">";
                // line 236
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_DeleteSchedulingSettings")), "html", null, true);
                echo "<br/></td>
                <td width=\"500\">
                    <label>";
                // line 238
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_DeleteDataInterval")), "html", null, true);
                echo "
                        <select id=\"deleteLowestInterval\" name=\"deleteLowestInterval\">
                            <option ";
                // line 240
                if (($this->getAttribute($this->getAttribute((isset($context["deleteData"]) ? $context["deleteData"] : $this->getContext($context, "deleteData")), "config"), "delete_logs_schedule_lowest_interval") == "1")) {
                    echo " selected=\"selected\" ";
                }
                // line 241
                echo "                                    value=\"1\"> ";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreHome_PeriodDay")), "html", null, true);
                echo "</option>
                            <option ";
                // line 242
                if (($this->getAttribute($this->getAttribute((isset($context["deleteData"]) ? $context["deleteData"] : $this->getContext($context, "deleteData")), "config"), "delete_logs_schedule_lowest_interval") == "7")) {
                    echo " selected=\"selected\" ";
                }
                // line 243
                echo "                                    value=\"7\">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreHome_PeriodWeek")), "html", null, true);
                echo "</option>
                            <option ";
                // line 244
                if (($this->getAttribute($this->getAttribute((isset($context["deleteData"]) ? $context["deleteData"] : $this->getContext($context, "deleteData")), "config"), "delete_logs_schedule_lowest_interval") == "30")) {
                    echo " selected=\"selected\" ";
                }
                // line 245
                echo "                                    value=\"30\">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreHome_PeriodMonth")), "html", null, true);
                echo "</option>
                        </select></label><br/><br/>
                </td>
                <td width=\"200\">
                    ";
                // line 249
                ob_start();
                // line 250
                echo "                        ";
                if ($this->getAttribute((isset($context["deleteData"]) ? $context["deleteData"] : $this->getContext($context, "deleteData")), "lastRun")) {
                    echo "<strong>";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_LastDelete")), "html", null, true);
                    echo ":</strong>
                            ";
                    // line 251
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["deleteData"]) ? $context["deleteData"] : $this->getContext($context, "deleteData")), "lastRunPretty"), "html", null, true);
                    echo "
                            <br/>
                            <br/>
                        ";
                }
                // line 255
                echo "                        <strong>";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_NextDelete")), "html", null, true);
                echo ":</strong>
                        ";
                // line 256
                echo $this->getAttribute((isset($context["deleteData"]) ? $context["deleteData"] : $this->getContext($context, "deleteData")), "nextRunPretty");
                echo "
                        <br/>
                        <br/>
                        <em><a id=\"purgeDataNowLink\" href=\"#\">";
                // line 259
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_PurgeNow")), "html", null, true);
                echo "</a></em>
                        <span class=\"loadingPiwik\" style=\"display:none;\"><img
                                    src=\"./plugins/Zeitgeist/images/loading-blue.gif\"/> ";
                // line 261
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_PurgingData")), "html", null, true);
                echo "</span>
                        <span id=\"db-purged-message\" style=\"display: none;\"><em>";
                // line 262
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_DBPurged")), "html", null, true);
                echo "</em></span>
                    ";
                $context["purgeStats"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 264
                echo "                    ";
                echo $context["piwik"]->getinlineHelp((isset($context["purgeStats"]) ? $context["purgeStats"] : $this->getContext($context, "purgeStats")));
                echo "
                </td>
            </tr>
        </table>
        <input type=\"button\" value=\"";
                // line 268
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Save")), "html", null, true);
                echo "\" id=\"deleteLogSettingsSubmit\" class=\"submit\"/>
    </form>

    ";
            }
            // line 272
            echo "

    <h2 id=\"DNT\">";
            // line 274
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_DoNotTrack_SupportDNTPreference")), "html", null, true);
            echo "</h2>
    <table class=\"adminTable\" style='width:800px;'>
        <tr>
            <td width=\"650\">
                <p>
                    ";
            // line 279
            if ((isset($context["dntSupport"]) ? $context["dntSupport"] : $this->getContext($context, "dntSupport"))) {
                // line 280
                echo "                        ";
                $context["action"] = "deactivateDoNotTrack";
                // line 281
                echo "                        ";
                $context["nonce"] = (isset($context["deactivateNonce"]) ? $context["deactivateNonce"] : $this->getContext($context, "deactivateNonce"));
                // line 282
                echo "                        <strong>";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_DoNotTrack_Enabled")), "html", null, true);
                echo "</strong>
                        <br/>
                        ";
                // line 284
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_DoNotTrack_EnabledMoreInfo")), "html", null, true);
                echo "
                    ";
            } else {
                // line 286
                echo "                        ";
                $context["action"] = "activateDoNotTrack";
                // line 287
                echo "                        ";
                $context["nonce"] = (isset($context["activateNonce"]) ? $context["activateNonce"] : $this->getContext($context, "activateNonce"));
                // line 288
                echo "                        ";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_DoNotTrack_Disabled")), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_DoNotTrack_DisabledMoreInfo")), "html", null, true);
                echo "
                    ";
            }
            // line 290
            echo "                </p>
\t\t\t<span style=\"margin-left:20px;\">
\t\t\t<a href='";
            // line 292
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('urlRewriteWithParameters')->getCallable(), array(array("module" => "PrivacyManager", "nonce" => (isset($context["nonce"]) ? $context["nonce"] : $this->getContext($context, "nonce")), "action" => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))))), "html", null, true);
            echo "#DNT'>&rsaquo;
                ";
            // line 293
            if ((isset($context["dntSupport"]) ? $context["dntSupport"] : $this->getContext($context, "dntSupport"))) {
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_DoNotTrack_Disable")), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_NotRecommended")), "html", null, true);
                echo "
                ";
            } else {
                // line 294
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_DoNotTrack_Enable")), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Recommended")), "html", null, true);
            }
            // line 295
            echo "                <br/>
            </a></span>
            </td>
            <td width=\"200\">
                ";
            // line 299
            echo $context["piwik"]->getinlineHelp(call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_DoNotTrack_Description")));
            echo "
            </td>
        </tr>
    </table>
";
        }
        // line 304
        echo "
<h2 id=\"optOutAnchor\">";
        // line 305
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_OptOutForYourVisitors")), "html", null, true);
        echo "</h2>
<p>";
        // line 306
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_OptOutExplanation")), "html", null, true);
        echo "
    ";
        // line 307
        ob_start();
        echo twig_escape_filter($this->env, (isset($context["piwikUrl"]) ? $context["piwikUrl"] : $this->getContext($context, "piwikUrl")), "html", null, true);
        echo "index.php?module=CoreAdminHome&action=optOut&language=";
        echo twig_escape_filter($this->env, (isset($context["language"]) ? $context["language"] : $this->getContext($context, "language")), "html", null, true);
        $context["optOutUrl"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 308
        echo "    ";
        ob_start();
        echo "<iframe style=\"border: 0; height: 200px; width: 600px;\" src=\"";
        echo twig_escape_filter($this->env, (isset($context["optOutUrl"]) ? $context["optOutUrl"] : $this->getContext($context, "optOutUrl")), "html", null, true);
        echo "\"></iframe>";
        $context["iframeOptOut"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 309
        echo "    <code>";
        echo twig_escape_filter($this->env, (isset($context["iframeOptOut"]) ? $context["iframeOptOut"] : $this->getContext($context, "iframeOptOut")), "html");
        echo "</code>
    <br/>
    ";
        // line 311
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_OptOutExplanationBis", (("<a href='" . (isset($context["optOutUrl"]) ? $context["optOutUrl"] : $this->getContext($context, "optOutUrl"))) . "' target='_blank'>"), "</a>"));
        echo "
</p>

<div style=\"height:100px;\"></div>
";
    }

    public function getTemplateName()
    {
        return "@PrivacyManager/privacySettings.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  834 => 311,  828 => 309,  821 => 308,  815 => 307,  811 => 306,  807 => 305,  804 => 304,  796 => 299,  790 => 295,  785 => 294,  777 => 293,  773 => 292,  769 => 290,  761 => 288,  758 => 287,  755 => 286,  750 => 284,  744 => 282,  741 => 281,  738 => 280,  736 => 279,  728 => 274,  724 => 272,  717 => 268,  709 => 264,  704 => 262,  700 => 261,  695 => 259,  689 => 256,  684 => 255,  677 => 251,  670 => 250,  668 => 249,  660 => 245,  656 => 244,  651 => 243,  647 => 242,  642 => 241,  638 => 240,  633 => 238,  628 => 236,  623 => 233,  617 => 231,  611 => 229,  608 => 228,  606 => 227,  600 => 224,  593 => 220,  587 => 219,  577 => 212,  571 => 211,  565 => 208,  559 => 207,  554 => 205,  550 => 204,  544 => 203,  539 => 201,  535 => 200,  529 => 199,  524 => 197,  518 => 196,  513 => 194,  507 => 193,  502 => 191,  497 => 189,  493 => 188,  487 => 187,  482 => 185,  477 => 183,  472 => 181,  468 => 180,  459 => 174,  452 => 170,  449 => 169,  444 => 167,  440 => 166,  434 => 164,  429 => 163,  427 => 162,  422 => 160,  416 => 159,  412 => 158,  406 => 157,  400 => 154,  390 => 147,  386 => 146,  381 => 144,  377 => 143,  367 => 137,  364 => 136,  359 => 134,  355 => 132,  353 => 131,  348 => 130,  346 => 129,  338 => 125,  332 => 122,  326 => 120,  324 => 119,  319 => 117,  314 => 116,  312 => 115,  307 => 113,  302 => 112,  300 => 111,  293 => 107,  287 => 104,  281 => 103,  277 => 102,  272 => 100,  268 => 99,  264 => 98,  258 => 95,  254 => 94,  248 => 91,  244 => 90,  240 => 89,  235 => 87,  230 => 85,  227 => 84,  225 => 83,  219 => 80,  210 => 78,  200 => 71,  193 => 67,  187 => 66,  181 => 63,  176 => 61,  170 => 60,  164 => 57,  155 => 51,  148 => 47,  143 => 46,  141 => 45,  137 => 44,  133 => 43,  128 => 42,  126 => 41,  122 => 40,  117 => 39,  115 => 38,  110 => 36,  98 => 27,  91 => 23,  87 => 22,  81 => 21,  77 => 20,  71 => 19,  65 => 16,  61 => 15,  54 => 11,  50 => 10,  46 => 9,  42 => 8,  38 => 7,  35 => 6,  33 => 5,  31 => 4,  28 => 3,);
    }
}
