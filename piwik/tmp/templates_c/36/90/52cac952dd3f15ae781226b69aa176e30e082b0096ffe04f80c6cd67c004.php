<?php

/* _iframeBuster.twig */
class __TwigTemplate_369052cac952dd3f15ae781226b69aa176e30e082b0096ffe04f80c6cd67c004 extends Twig_Template
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
        if ((array_key_exists("enableFrames", $context) && ((isset($context["enableFrames"]) ? $context["enableFrames"] : $this->getContext($context, "enableFrames")) == false))) {
            // line 2
            echo "    <script type=\"text/javascript\">
        \$(function () {
        \$('body').css(\"display\", \"none\");
        if (self == top) {
            var theBody = document.getElementsByTagName('body')[0];
            theBody.style.display = 'block';
        } else { top.location = self.location; }
    });
    </script>
";
        }
    }

    public function getTemplateName()
    {
        return "_iframeBuster.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 2,  30 => 6,  24 => 3,  361 => 158,  355 => 155,  352 => 154,  346 => 151,  343 => 150,  341 => 149,  334 => 147,  327 => 145,  320 => 143,  312 => 138,  306 => 135,  295 => 127,  288 => 123,  281 => 119,  277 => 118,  266 => 110,  262 => 109,  256 => 108,  248 => 103,  244 => 102,  238 => 99,  231 => 95,  227 => 94,  224 => 93,  218 => 91,  216 => 90,  213 => 89,  205 => 86,  202 => 85,  200 => 84,  197 => 83,  193 => 81,  182 => 79,  178 => 78,  175 => 77,  173 => 76,  170 => 75,  167 => 74,  164 => 73,  161 => 72,  155 => 67,  146 => 63,  142 => 61,  140 => 60,  137 => 59,  134 => 58,  128 => 56,  125 => 55,  123 => 54,  120 => 53,  116 => 52,  109 => 51,  100 => 48,  97 => 47,  91 => 45,  89 => 44,  82 => 39,  80 => 38,  75 => 36,  71 => 35,  53 => 19,  51 => 18,  45 => 15,  42 => 14,  37 => 12,  28 => 5,  19 => 1,);
    }
}
