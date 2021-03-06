<?php

/* @Installation/_integrityDetails.twig */
class __TwigTemplate_353a99cb0ef186fdc235435ea3f73798d01f9bdd9121cd6d271028f102acb999 extends Twig_Template
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
        if ((!array_key_exists("warningMessages", $context))) {
            // line 2
            echo "    ";
            $context["warningMessages"] = $this->getAttribute((isset($context["infos"]) ? $context["infos"] : $this->getContext($context, "infos")), "integrityErrorMessages");
        }
        // line 4
        echo "<div id=\"integrity-results\" title=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Installation_SystemCheckFileIntegrity")), "html", null, true);
        echo "\" style=\"display:none; font-size: 62.5%;\">
    <table>
        ";
        // line 6
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["warningMessages"]) ? $context["warningMessages"] : $this->getContext($context, "warningMessages")));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 7
            echo "            <tr>
                <td>";
            // line 8
            echo twig_escape_filter($this->env, (isset($context["msg"]) ? $context["msg"] : $this->getContext($context, "msg")), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "    </table>
</div>
<script type=\"text/javascript\">
    <!--
    \$(function () {
        \$(\"#integrity-results\").dialog({
            modal: true,
            autoOpen: false,
            width: 600,
            buttons: {
                Ok: function () {
                    \$(this).dialog('close');
                }
            }
        });
    });
    \$('#more-results').click(function () {
        \$('#integrity-results').dialog('open');
    }).hover(function () {
        \$(this).addClass(\"ui-state-hover\");
    },
    function () {
        \$(this).removeClass(\"ui-state-hover\");
    }).mousedown(function () {
        \$(this).addClass(\"ui-state-active\");
    }).mouseup(function () {
        \$(this).removeClass(\"ui-state-active\");
    });
    //-->
</script>
";
    }

    public function getTemplateName()
    {
        return "@Installation/_integrityDetails.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 7,  892 => 329,  887 => 326,  882 => 323,  878 => 321,  873 => 319,  868 => 318,  866 => 317,  862 => 316,  858 => 315,  850 => 311,  843 => 308,  841 => 307,  836 => 305,  833 => 304,  830 => 303,  820 => 296,  814 => 295,  809 => 293,  806 => 292,  803 => 291,  798 => 288,  792 => 285,  788 => 284,  783 => 283,  777 => 280,  773 => 279,  768 => 278,  759 => 275,  757 => 274,  752 => 272,  749 => 271,  747 => 270,  743 => 268,  740 => 267,  734 => 265,  728 => 263,  726 => 262,  722 => 261,  717 => 260,  708 => 257,  706 => 256,  701 => 254,  696 => 251,  690 => 250,  681 => 247,  676 => 245,  672 => 244,  667 => 243,  664 => 242,  660 => 241,  655 => 239,  650 => 236,  644 => 235,  635 => 232,  630 => 230,  623 => 229,  620 => 228,  616 => 227,  611 => 225,  606 => 222,  601 => 220,  593 => 218,  587 => 216,  585 => 215,  580 => 213,  575 => 210,  568 => 208,  565 => 207,  562 => 206,  557 => 204,  552 => 203,  544 => 201,  542 => 200,  537 => 198,  532 => 195,  524 => 190,  519 => 189,  513 => 187,  511 => 186,  506 => 184,  501 => 181,  496 => 179,  492 => 178,  487 => 176,  482 => 175,  474 => 173,  472 => 172,  467 => 170,  462 => 167,  457 => 165,  452 => 163,  448 => 162,  443 => 161,  437 => 159,  435 => 158,  430 => 156,  425 => 153,  422 => 152,  416 => 150,  413 => 149,  408 => 147,  403 => 146,  398 => 144,  393 => 143,  390 => 142,  384 => 140,  382 => 139,  377 => 137,  371 => 134,  366 => 131,  361 => 128,  354 => 126,  348 => 123,  345 => 122,  343 => 121,  340 => 120,  336 => 119,  332 => 118,  328 => 116,  326 => 115,  322 => 113,  312 => 110,  306 => 108,  300 => 106,  297 => 105,  293 => 104,  287 => 101,  281 => 97,  276 => 96,  270 => 95,  261 => 92,  255 => 89,  252 => 88,  250 => 87,  246 => 86,  241 => 85,  238 => 84,  234 => 83,  229 => 81,  226 => 80,  221 => 77,  212 => 74,  209 => 73,  205 => 72,  201 => 70,  199 => 69,  195 => 67,  190 => 66,  180 => 63,  174 => 61,  171 => 60,  169 => 59,  164 => 58,  161 => 57,  157 => 56,  152 => 54,  149 => 53,  141 => 48,  134 => 45,  128 => 43,  122 => 41,  120 => 40,  115 => 38,  111 => 36,  108 => 35,  99 => 32,  93 => 31,  90 => 30,  86 => 29,  82 => 27,  78 => 25,  75 => 23,  73 => 22,  68 => 20,  63 => 17,  47 => 11,  45 => 12,  38 => 8,  32 => 8,  27 => 5,  25 => 4,  23 => 3,  21 => 2,  19 => 1,  65 => 19,  60 => 17,  55 => 14,  53 => 15,  50 => 12,  48 => 11,  43 => 9,  40 => 8,  36 => 6,  33 => 5,  31 => 6,  28 => 3,);
    }
}
