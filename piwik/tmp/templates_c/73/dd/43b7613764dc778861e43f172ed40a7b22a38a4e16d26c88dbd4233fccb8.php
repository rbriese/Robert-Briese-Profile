<?php

/* @CoreHome/ReportsByDimension/_reportsByDimension.twig */
class __TwigTemplate_73dd43b7613764dc778861e43f172ed40a7b22a38a4e16d26c88dbd4233fccb8 extends Twig_Template
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
        echo "<div class=\"reportsByDimensionView\">

    <div class=\"entityList\">
        ";
        // line 4
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dimensionCategories"]) ? $context["dimensionCategories"] : $this->getContext($context, "dimensionCategories")));
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
        foreach ($context['_seq'] as $context["category"] => $context["dimensions"]) {
            // line 5
            echo "        ";
            $context["firstCategory"] = ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index0") == 0);
            // line 6
            echo "            <div class='dimensionCategory'>
                ";
            // line 7
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")))), "html", null, true);
            echo "
                <ul class='listCircle'>
                    ";
            // line 9
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["dimensions"]) ? $context["dimensions"] : $this->getContext($context, "dimensions")));
            foreach ($context['_seq'] as $context["idx"] => $context["dimension"]) {
                // line 10
                echo "                        <li class=\"reportDimension ";
                if ((((isset($context["idx"]) ? $context["idx"] : $this->getContext($context, "idx")) == 0) && (isset($context["firstCategory"]) ? $context["firstCategory"] : $this->getContext($context, "firstCategory")))) {
                    echo "activeDimension";
                }
                echo "\"
                            data-url=\"";
                // line 11
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dimension"]) ? $context["dimension"] : $this->getContext($context, "dimension")), "url"), "html", null, true);
                echo "\">
                            <span class='dimension'>";
                // line 12
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array($this->getAttribute((isset($context["dimension"]) ? $context["dimension"] : $this->getContext($context, "dimension")), "title"))), "html", null, true);
                echo "</span>
                        </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['idx'], $context['dimension'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "                </ul>
            </div>
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
        unset($context['_seq'], $context['_iterated'], $context['category'], $context['dimensions'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "    </div>

    <div style=\"float:left;max-width:900px;\">
        <div class=\"loadingPiwik\" style=\"display:none;\">
            <img src=\"plugins/Zeitgeist/images/loading-blue.gif\" alt=\"\"/>";
        // line 22
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_LoadingData")), "html", null, true);
        echo "
        </div>

        <div class=\"dimensionReport\">";
        // line 25
        echo (isset($context["firstReport"]) ? $context["firstReport"] : $this->getContext($context, "firstReport"));
        echo "</div>
    </div>
    <div class=\"clear\"></div>

</div>
";
    }

    public function getTemplateName()
    {
        return "@CoreHome/ReportsByDimension/_reportsByDimension.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 25,  98 => 22,  92 => 18,  76 => 15,  67 => 12,  63 => 11,  56 => 10,  52 => 9,  47 => 7,  44 => 6,  41 => 5,  24 => 4,  19 => 1,);
    }
}
