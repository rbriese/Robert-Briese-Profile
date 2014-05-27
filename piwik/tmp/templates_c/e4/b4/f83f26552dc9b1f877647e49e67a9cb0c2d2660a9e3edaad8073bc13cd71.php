<?php

/* @UsersManager/userSettings.twig */
class __TwigTemplate_e4b4f83f26552dc9b1f877647e49e67a9cb0c2d2660a9e3edaad8073bc13cd71 extends Twig_Template
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
        echo "<h2 piwik-enriched-headline>";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_MenuUserSettings")), "html", null, true);
        echo "</h2>

<br/>
<div class=\"ui-confirm\" id=\"confirmPasswordChange\">
    <h2>";
        // line 8
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_ChangePasswordConfirm")), "html", null, true);
        echo "</h2>
    <input role=\"yes\" type=\"button\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Yes")), "html", null, true);
        echo "\"/>
    <input role=\"no\" type=\"button\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_No")), "html", null, true);
        echo "\"/>
</div>

<table id='userSettingsTable' class=\"adminTable\">
    <tr>
        <td><label for=\"username\">";
        // line 15
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Username")), "html", null, true);
        echo " </label></td>
        <td>
            <input size=\"25\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["userLogin"]) ? $context["userLogin"] : $this->getContext($context, "userLogin")), "html", null, true);
        echo "\" id=\"username\" disabled=\"disabled\"/>
            <span class='form-description'>";
        // line 18
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_YourUsernameCannotBeChanged")), "html", null, true);
        echo "</span>
        </td>
    </tr>

    <tr>
        <td><label for=\"alias\">";
        // line 23
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_Alias")), "html", null, true);
        echo " </label></td>
        <td><input size=\"25\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["userAlias"]) ? $context["userAlias"] : $this->getContext($context, "userAlias")), "html", null, true);
        echo "\" id=\"alias\" /></td>
    </tr>
    <tr>
        <td><label for=\"email\">";
        // line 27
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_Email")), "html", null, true);
        echo " </label></td>
        <td><input size=\"25\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["userEmail"]) ? $context["userEmail"] : $this->getContext($context, "userEmail")), "html", null, true);
        echo "\" id=\"email\"/></td>
    </tr>
    <tr>
        <td><div style=\"margin-top: 5px;margin-bottom: 10px;\">";
        // line 31
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Language")), "html", null, true);
        echo "</div></td>
        <td>
            <fieldset style=\"margin-top: 5px;margin-bottom: 10px;\">
                <select name=\"language\" id=\"language\" onchange=\"if (this.value=='') window.open('?module=Proxy&amp;action=redirect&amp;url=http://piwik.org/translations/');\">
                    <option title=\"\" value=\"\">";
        // line 35
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("LanguagesManager_AboutPiwikTranslations")), "html", null, true);
        echo "</option>
                    ";
        // line 36
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : $this->getContext($context, "languages")));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 37
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["language"]) ? $context["language"] : $this->getContext($context, "language")), "code"), "html", null, true);
            echo "\" ";
            if (($this->getAttribute((isset($context["language"]) ? $context["language"] : $this->getContext($context, "language")), "code") == (isset($context["currentLanguageCode"]) ? $context["currentLanguageCode"] : $this->getContext($context, "currentLanguageCode")))) {
                echo "selected=\"selected\"";
            }
            // line 38
            echo "                                title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["language"]) ? $context["language"] : $this->getContext($context, "language")), "name"), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["language"]) ? $context["language"] : $this->getContext($context, "language")), "english_name"), "html", null, true);
            echo ")\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["language"]) ? $context["language"] : $this->getContext($context, "language")), "name"), "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "                </select>
                <br />
            </fieldset>
        </td>
    </tr>
    <tr>
        <td>";
        // line 46
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_ReportToLoadByDefault")), "html", null, true);
        echo "</td>
        <td>
            <fieldset>
                <input id=\"defaultReportRadioAll\" type=\"radio\" value=\"MultiSites\"
                      name=\"defaultReport\"";
        // line 50
        if (((isset($context["defaultReport"]) ? $context["defaultReport"] : $this->getContext($context, "defaultReport")) == "MultiSites")) {
            echo " checked=\"checked\"";
        }
        echo " />
                <label for=\"defaultReportRadioAll\">";
        // line 51
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_AllWebsitesDashboard")), "html", null, true);
        echo "</label><br/>
                <input id=\"defaultReportSpecific\" type=\"radio\" value=\"1\"
                       name=\"defaultReport\"";
        // line 53
        if (((isset($context["defaultReport"]) ? $context["defaultReport"] : $this->getContext($context, "defaultReport")) != "MultiSites")) {
            echo " checked=\"checked\"";
        }
        echo " />
                <label for=\"defaultReportSpecific\" style=\"padding-right:12px;\">";
        // line 54
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_DashboardForASpecificWebsite")), "html", null, true);
        echo "</label>
                ";
        // line 55
        if (((isset($context["defaultReport"]) ? $context["defaultReport"] : $this->getContext($context, "defaultReport")) == "MultiSites")) {
            // line 56
            echo "                    ";
            $context["defaultReportIdSite"] = 1;
            // line 57
            echo "                ";
        } else {
            // line 58
            echo "                    ";
            $context["defaultReportIdSite"] = (isset($context["defaultReport"]) ? $context["defaultReport"] : $this->getContext($context, "defaultReport"));
            // line 59
            echo "                ";
        }
        // line 60
        echo "
                <div piwik-siteselector
                     class=\"sites_autocomplete\"
                     siteid=\"";
        // line 63
        echo twig_escape_filter($this->env, (isset($context["defaultReportIdSite"]) ? $context["defaultReportIdSite"] : $this->getContext($context, "defaultReportIdSite")), "html", null, true);
        echo "\"
                     sitename=\"";
        // line 64
        echo twig_escape_filter($this->env, (isset($context["defaultReportSiteName"]) ? $context["defaultReportSiteName"] : $this->getContext($context, "defaultReportSiteName")), "html", null, true);
        echo "\"
                     switch-site-on-select=\"false\"
                     show-all-sites-item=\"false\"
                     showselectedsite=\"true\"
                     id=\"defaultReportSiteSelector\"></div>
            </fieldset>
        </td>
    </tr>
    <tr>
        <td>";
        // line 73
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_ReportDateToLoadByDefault")), "html", null, true);
        echo "</td>
        <td>
            <fieldset>
                ";
        // line 76
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["availableDefaultDates"]) ? $context["availableDefaultDates"] : $this->getContext($context, "availableDefaultDates")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["value"] => $context["description"]) {
            // line 77
            echo "                    <input id=\"defaultDate-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index"), "html", null, true);
            echo "\" type=\"radio\"";
            if (((isset($context["defaultDate"]) ? $context["defaultDate"] : $this->getContext($context, "defaultDate")) == (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
                echo " checked=\"checked\"";
            }
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\" name=\"defaultDate\"/>
                    <label for=\"defaultDate-";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["description"]) ? $context["description"] : $this->getContext($context, "description")), "html", null, true);
            echo "</label>
                    <br/>
                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['value'], $context['description'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "            </fieldset>
        </td>
    </tr>

    ";
        // line 85
        if ((array_key_exists("isValidHost", $context) && (isset($context["isValidHost"]) ? $context["isValidHost"] : $this->getContext($context, "isValidHost")))) {
            // line 86
            echo "        <tr>
            <td><label for=\"email\">";
            // line 87
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_ChangePassword")), "html", null, true);
            echo " </label></td>
            <td><input size=\"25\" value=\"\" autocomplete=\"off\" id=\"password\" type=\"password\"/>
                <span class='form-description'>";
            // line 89
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_IfYouWouldLikeToChangeThePasswordTypeANewOne")), "html", null, true);
            echo "</span>
                <br/><br/><input size=\"25\" value=\"\" autocomplete=\"off\" id=\"passwordBis\" type=\"password\"/>
                <span class='form-description'> ";
            // line 91
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_TypeYourPasswordAgain")), "html", null, true);
            echo "</span>
            </td>
        </tr>
    ";
        }
        // line 95
        echo "</table>
";
        // line 96
        if (((!array_key_exists("isValidHost", $context)) || (!(isset($context["isValidHost"]) ? $context["isValidHost"] : $this->getContext($context, "isValidHost"))))) {
            // line 97
            echo "    <div id=\"injectedHostCannotChangePwd\">
        ";
            // line 98
            ob_start();
            // line 99
            echo "        ";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_InjectedHostCannotChangePwd", (isset($context["invalidHost"]) ? $context["invalidHost"] : $this->getContext($context, "invalidHost")))), "html", null, true);
            echo "
        &nbsp;";
            // line 100
            if ((!(isset($context["isSuperUser"]) ? $context["isSuperUser"] : $this->getContext($context, "isSuperUser")))) {
                echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_EmailYourAdministrator", (isset($context["invalidHostMailLinkStart"]) ? $context["invalidHostMailLinkStart"] : $this->getContext($context, "invalidHostMailLinkStart")), "</a>"));
            }
            // line 101
            echo "        ";
            $context["injectedHostCannotChangePwd"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 102
            echo "        ";
            echo call_user_func_array($this->env->getFilter('notification')->getCallable(), array((isset($context["injectedHostCannotChangePwd"]) ? $context["injectedHostCannotChangePwd"] : $this->getContext($context, "injectedHostCannotChangePwd")), array("raw" => true, "context" => "error", "placeat" => "#injectedHostCannotChangePwd", "noclear" => true)));
            echo "
    </div>
    <br/>
";
        }
        // line 106
        echo "
";
        // line 107
        $context["ajax"] = $this->env->loadTemplate("ajaxMacros.twig");
        // line 108
        echo $context["ajax"]->geterrorDiv("ajaxErrorUserSettings");
        echo "
";
        // line 109
        echo $context["ajax"]->getloadingDiv("ajaxLoadingUserSettings");
        echo "
<input type=\"submit\" value=\"";
        // line 110
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Save")), "html", null, true);
        echo "\" id=\"userSettingsSubmit\" class=\"submit\"/>

<br/><br/>

<h2 id=\"excludeCookie\">";
        // line 114
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_ExcludeVisitsViaCookie")), "html", null, true);
        echo "</h2>
<p>
";
        // line 116
        if ((isset($context["ignoreCookieSet"]) ? $context["ignoreCookieSet"] : $this->getContext($context, "ignoreCookieSet"))) {
            // line 117
            echo "   ";
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_YourVisitsAreIgnoredOnDomain", "<strong>", (isset($context["piwikHost"]) ? $context["piwikHost"] : $this->getContext($context, "piwikHost")), "</strong>"));
            echo "
";
        } else {
            // line 119
            echo "   ";
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_YourVisitsAreNotIgnored", "<strong>", "</strong>"));
            echo "
";
        }
        // line 121
        echo "</p>
<span style=\"margin-left:20px;\">
<a href='";
        // line 123
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('linkTo')->getCallable(), array(array("token_auth" => (isset($context["token_auth"]) ? $context["token_auth"] : $this->getContext($context, "token_auth")), "action" => "setIgnoreCookie"))), "html", null, true);
        echo "#excludeCookie'>&rsaquo; ";
        if ((isset($context["ignoreCookieSet"]) ? $context["ignoreCookieSet"] : $this->getContext($context, "ignoreCookieSet"))) {
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_ClickHereToDeleteTheCookie")), "html", null, true);
            echo "
    ";
        } else {
            // line 124
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_ClickHereToSetTheCookieOnDomain", (isset($context["piwikHost"]) ? $context["piwikHost"] : $this->getContext($context, "piwikHost")))), "html", null, true);
        }
        // line 125
        echo "    <br/>
</a></span>

<br/><br/>
";
        // line 129
        if ((isset($context["isSuperUser"]) ? $context["isSuperUser"] : $this->getContext($context, "isSuperUser"))) {
            // line 130
            echo "    <h2>";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_MenuAnonymousUserSettings")), "html", null, true);
            echo "</h2>
    ";
            // line 131
            if ((twig_length_filter($this->env, (isset($context["anonymousSites"]) ? $context["anonymousSites"] : $this->getContext($context, "anonymousSites"))) == 0)) {
                // line 132
                echo "        <h3 class='form-description'><strong>";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_NoteNoAnonymousUserAccessSettingsWontBeUsed2")), "html", null, true);
                echo "</strong></h3>
        <br/>
    ";
            } else {
                // line 135
                echo "        <br/>
        ";
                // line 136
                echo $context["ajax"]->geterrorDiv("ajaxErrorAnonymousUserSettings");
                echo "
        ";
                // line 137
                echo $context["ajax"]->getloadingDiv("ajaxLoadingAnonymousUserSettings");
                echo "
        <table id='anonymousUserSettingsTable' class=\"adminTable\" style='width:850px;'>
            <tr>
                <td style=\"width:400px;\">";
                // line 140
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_WhenUsersAreNotLoggedInAndVisitPiwikTheyShouldAccess")), "html", null, true);
                echo "</td>
                <td>
                    <fieldset>
                        <input id=\"anonymousDefaultReport-login\" type=\"radio\" value=\"Login\"
                               name=\"anonymousDefaultReport\"";
                // line 144
                if (((isset($context["anonymousDefaultReport"]) ? $context["anonymousDefaultReport"] : $this->getContext($context, "anonymousDefaultReport")) == (isset($context["loginModule"]) ? $context["loginModule"] : $this->getContext($context, "loginModule")))) {
                    echo " checked=\"checked\"";
                }
                echo " />
                        <label for=\"anonymousDefaultReport-login\">";
                // line 145
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_TheLoginScreen")), "html", null, true);
                echo "</label><br/>
                        <input id=\"anonymousDefaultReport-multisites\" ";
                // line 146
                if (twig_test_empty((isset($context["anonymousSites"]) ? $context["anonymousSites"] : $this->getContext($context, "anonymousSites")))) {
                    echo "disabled=\"disabled\" ";
                }
                echo "type=\"radio\" value=\"MultiSites\"
                               name=\"anonymousDefaultReport\"";
                // line 147
                if (((isset($context["anonymousDefaultReport"]) ? $context["anonymousDefaultReport"] : $this->getContext($context, "anonymousDefaultReport")) == "MultiSites")) {
                    echo " checked=\"checked\"";
                }
                echo " />
                        <label for=\"anonymousDefaultReport-multisites\">";
                // line 148
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_AllWebsitesDashboard")), "html", null, true);
                echo "</label><br/>

                        <input id=\"anonymousDefaultReport-specific\" ";
                // line 150
                if (twig_test_empty((isset($context["anonymousSites"]) ? $context["anonymousSites"] : $this->getContext($context, "anonymousSites")))) {
                    echo "disabled=\"disabled\" ";
                }
                echo "type=\"radio\" value=\"1\"
                               name=\"anonymousDefaultReport\"";
                // line 151
                if (((isset($context["anonymousDefaultReport"]) ? $context["anonymousDefaultReport"] : $this->getContext($context, "anonymousDefaultReport")) > 0)) {
                    echo " checked=\"checked\"";
                }
                echo " />
                        <label for=\"anonymousDefaultReport-specific\">";
                // line 152
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_DashboardForASpecificWebsite")), "html", null, true);
                echo "</label>
                        ";
                // line 153
                if ((!twig_test_empty((isset($context["anonymousSites"]) ? $context["anonymousSites"] : $this->getContext($context, "anonymousSites"))))) {
                    // line 154
                    echo "                            <select id=\"anonymousDefaultReportWebsite\">
                                ";
                    // line 155
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["anonymousSites"]) ? $context["anonymousSites"] : $this->getContext($context, "anonymousSites")));
                    foreach ($context['_seq'] as $context["_key"] => $context["info"]) {
                        // line 156
                        echo "                                    <option value=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : $this->getContext($context, "info")), "idsite"), "html", null, true);
                        echo "\" ";
                        if (((isset($context["anonymousDefaultReport"]) ? $context["anonymousDefaultReport"] : $this->getContext($context, "anonymousDefaultReport")) == $this->getAttribute((isset($context["info"]) ? $context["info"] : $this->getContext($context, "info")), "idsite"))) {
                            echo " selected=\"selected\"";
                        }
                        echo ">";
                        echo $this->getAttribute((isset($context["info"]) ? $context["info"] : $this->getContext($context, "info")), "name");
                        echo "</option>
                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['info'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 158
                    echo "                            </select>
                        ";
                }
                // line 160
                echo "                    </fieldset>
                </td>
            </tr>
            <tr>
                <td>";
                // line 164
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_ForAnonymousUsersReportDateToLoadByDefault")), "html", null, true);
                echo "</td>
                <td>
                    <fieldset>
                        ";
                // line 167
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["availableDefaultDates"]) ? $context["availableDefaultDates"] : $this->getContext($context, "availableDefaultDates")));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["value"] => $context["description"]) {
                    // line 168
                    echo "                            <input id=\"anonymousDefaultDate-";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index"), "html", null, true);
                    echo "\" type=\"radio\" ";
                    if (((isset($context["anonymousDefaultDate"]) ? $context["anonymousDefaultDate"] : $this->getContext($context, "anonymousDefaultDate")) == (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
                        echo "checked=\"checked\" ";
                    }
                    echo "value=\"";
                    echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
                    echo "\"
                                   name=\"anonymousDefaultDate\"/>
                            <label for=\"anonymousDefaultDate-";
                    // line 170
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, (isset($context["description"]) ? $context["description"] : $this->getContext($context, "description")), "html", null, true);
                    echo "</label>
                            <br/>
                        ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['value'], $context['description'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 173
                echo "                    </fieldset>
                </td>
            </tr>

        </table>
        <input type=\"submit\" value=\"";
                // line 178
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Save")), "html", null, true);
                echo "\" id=\"anonymousUserSettingsSubmit\" class=\"submit\"/>
    ";
            }
        }
    }

    public function getTemplateName()
    {
        return "@UsersManager/userSettings.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  543 => 178,  536 => 173,  517 => 170,  505 => 168,  488 => 167,  482 => 164,  476 => 160,  472 => 158,  457 => 156,  453 => 155,  450 => 154,  448 => 153,  444 => 152,  438 => 151,  432 => 150,  427 => 148,  421 => 147,  415 => 146,  411 => 145,  405 => 144,  398 => 140,  392 => 137,  388 => 136,  385 => 135,  378 => 132,  376 => 131,  371 => 130,  369 => 129,  363 => 125,  360 => 124,  352 => 123,  348 => 121,  342 => 119,  336 => 117,  334 => 116,  329 => 114,  322 => 110,  318 => 109,  314 => 108,  312 => 107,  309 => 106,  301 => 102,  298 => 101,  294 => 100,  289 => 99,  287 => 98,  284 => 97,  282 => 96,  279 => 95,  272 => 91,  267 => 89,  262 => 87,  259 => 86,  257 => 85,  251 => 81,  232 => 78,  221 => 77,  204 => 76,  198 => 73,  186 => 64,  182 => 63,  177 => 60,  174 => 59,  171 => 58,  168 => 57,  165 => 56,  163 => 55,  159 => 54,  153 => 53,  148 => 51,  142 => 50,  135 => 46,  127 => 40,  114 => 38,  107 => 37,  103 => 36,  99 => 35,  92 => 31,  86 => 28,  82 => 27,  76 => 24,  72 => 23,  64 => 18,  60 => 17,  55 => 15,  47 => 10,  43 => 9,  39 => 8,  31 => 4,  28 => 3,);
    }
}
