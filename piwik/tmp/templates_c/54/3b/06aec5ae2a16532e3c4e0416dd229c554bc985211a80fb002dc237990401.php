<?php

/* @Goals/addNewGoal.twig */
class __TwigTemplate_543b06aec5ae2a16532e3c4e0416dd229c554bc985211a80fb002dc237990401 extends Twig_Template
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
        if ((isset($context["userCanEditGoals"]) ? $context["userCanEditGoals"] : $this->getContext($context, "userCanEditGoals"))) {
            // line 2
            echo "    ";
            $this->env->loadTemplate("@Goals/_addEditGoal.twig")->display($context);
        } else {
            // line 4
            echo "    <h2>";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Goals_CreateNewGOal")), "html", null, true);
            echo "</h2>
    <p>
        ";
            // line 6
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Goals_NoGoalsNeedAccess"));
            echo "
    </p>
    <p>
        ";
            // line 9
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Goals_LearnMoreAboutGoalTrackingDocumentation", "<a href='?module=Proxy&action=redirect&url=http://piwik.org/docs/tracking-goals-web-analytics/' target='_blank'>", "</a>"));
            echo "
    </p>
";
        }
    }

    public function getTemplateName()
    {
        return "@Goals/addNewGoal.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 9,  31 => 6,  25 => 4,  21 => 2,  19 => 1,);
    }
}
