<?php

/* @CoreUpdater/runUpdaterAndExit_done_cli.twig */
class __TwigTemplate_2e26aa556944ecda0a8d1cb6a9271d89b3b8b5de524f6cfa6bfdc36e69abdbaf extends Twig_Template
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
        ob_start();
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreUpdater_HelpMessageContent", "[", "]", "

    *"));
        $context["helpMessage"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 3
        if ((isset($context["coreError"]) ? $context["coreError"] : $this->getContext($context, "coreError"))) {
            // line 4
            echo "    [X] ";
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreUpdater_CriticalErrorDuringTheUpgradeProcess"));
            echo "

    ";
            // line 6
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errorMessages"]) ? $context["errorMessages"] : $this->getContext($context, "errorMessages")));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 7
                echo "    * ";
                echo (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message"));
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 9
            echo "
    ";
            // line 10
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreUpdater_HelpMessageIntroductionWhenError"));
            echo "

    * ";
            // line 12
            echo (isset($context["helpMessage"]) ? $context["helpMessage"] : $this->getContext($context, "helpMessage"));
            echo "

    ";
            // line 14
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreUpdater_ErrorDIYHelp"));
            echo "
    * ";
            // line 15
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreUpdater_ErrorDIYHelp_1"));
            echo "
    * ";
            // line 16
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreUpdater_ErrorDIYHelp_2"));
            echo "
    * ";
            // line 17
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreUpdater_ErrorDIYHelp_3"));
            echo "
    * ";
            // line 18
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreUpdater_ErrorDIYHelp_4"));
            echo "
    * ";
            // line 19
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreUpdater_ErrorDIYHelp_5"));
            echo "

";
        } else {
            // line 22
            if ((twig_length_filter($this->env, (isset($context["warningMessages"]) ? $context["warningMessages"] : $this->getContext($context, "warningMessages"))) > 0)) {
                // line 23
                echo "    [!] ";
                echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreUpdater_WarningMessages"));
                echo "

    ";
                // line 25
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["warningMessages"]) ? $context["warningMessages"] : $this->getContext($context, "warningMessages")));
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 26
                    echo "* ";
                    echo (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message"));
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
            // line 29
            if ((twig_length_filter($this->env, (isset($context["errorMessages"]) ? $context["errorMessages"] : $this->getContext($context, "errorMessages"))) > 0)) {
                // line 31
                echo "[X] ";
                echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreUpdater_ErrorDuringPluginsUpdates"));
                echo "

    ";
                // line 33
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["errorMessages"]) ? $context["errorMessages"] : $this->getContext($context, "errorMessages")));
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 34
                    echo "    * ";
                    echo (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message"));
                    echo "
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 36
                echo "
    ";
                // line 37
                if ((twig_length_filter($this->env, (isset($context["deactivatedPlugins"]) ? $context["deactivatedPlugins"] : $this->getContext($context, "deactivatedPlugins"))) > 0)) {
                    // line 38
                    ob_start();
                    echo implode((isset($context["deactivatedPlugins"]) ? $context["deactivatedPlugins"] : $this->getContext($context, "deactivatedPlugins")), ", ");
                    $context["listOfDeactivatedPlugins"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                    // line 39
                    echo "
    [!] ";
                    // line 40
                    echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreUpdater_WeAutomaticallyDeactivatedTheFollowingPlugins", (isset($context["listOfDeactivatedPlugins"]) ? $context["listOfDeactivatedPlugins"] : $this->getContext($context, "listOfDeactivatedPlugins"))));
                    echo "
    ";
                }
                // line 42
                echo "
";
            }
            // line 44
            echo "
";
            // line 45
            if (((twig_length_filter($this->env, (isset($context["errorMessages"]) ? $context["errorMessages"] : $this->getContext($context, "errorMessages"))) > 0) || (twig_length_filter($this->env, (isset($context["warningMessages"]) ? $context["warningMessages"] : $this->getContext($context, "warningMessages"))) > 0))) {
                // line 46
                echo "    ";
                echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreUpdater_HelpMessageIntroductionWhenWarning"));
                echo "

    * ";
                // line 48
                echo (isset($context["helpMessage"]) ? $context["helpMessage"] : $this->getContext($context, "helpMessage"));
                echo "
";
            } else {
                // line 50
                echo "*** ";
                echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreUpdater_PiwikHasBeenSuccessfullyUpgraded"));
                echo " ***
";
            }
            // line 52
            echo "
";
        }
        // line 55
        echo "
";
    }

    public function getTemplateName()
    {
        return "@CoreUpdater/runUpdaterAndExit_done_cli.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 55,  169 => 52,  163 => 50,  158 => 48,  152 => 46,  150 => 45,  147 => 44,  143 => 42,  138 => 40,  135 => 39,  131 => 38,  129 => 37,  126 => 36,  117 => 34,  113 => 33,  107 => 31,  105 => 29,  97 => 26,  93 => 25,  87 => 23,  85 => 22,  79 => 19,  75 => 18,  71 => 17,  67 => 16,  63 => 15,  59 => 14,  54 => 12,  49 => 10,  46 => 9,  37 => 7,  33 => 6,  27 => 4,  25 => 3,  19 => 2,);
    }
}
