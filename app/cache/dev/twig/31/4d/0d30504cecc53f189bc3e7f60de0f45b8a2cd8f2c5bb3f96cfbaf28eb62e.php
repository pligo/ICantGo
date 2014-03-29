<?php

/* WebProfilerBundle:Router:panel.html.twig */
class __TwigTemplate_314d0d30504cecc53f189bc3e7f60de0f45b8a2cd8f2c5bb3f96cfbaf28eb62e extends Twig_Template
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
        echo "<h2>Routing for \"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "pathinfo"), "html", null, true);
        echo "\"</h2>

<ul>
    <li>
        <strong>Route:&nbsp;</strong>
        ";
        // line 6
        if ($this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "route")) {
            // line 7
            echo "            ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "route"), "html", null, true);
            echo "
        ";
        } else {
            // line 9
            echo "            <em>No matching route</em>
        ";
        }
        // line 11
        echo "    </li>
    <li>
        <strong>Route parameters:&nbsp;</strong>
        ";
        // line 14
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "routeParams"))) {
            // line 15
            echo "            ";
            $this->env->loadTemplate("@WebProfiler/Profiler/table.html.twig")->display(array("data" => $this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "routeParams"), "class" => "inline"));
            // line 16
            echo "        ";
        } else {
            // line 17
            echo "            <em>No parameters</em>
        ";
        }
        // line 19
        echo "    </li>
    ";
        // line 20
        if ($this->getAttribute((isset($context["router"]) ? $context["router"] : $this->getContext($context, "router")), "redirect")) {
            // line 21
            echo "    <li>
        <strong>Redirecting to:&nbsp;</strong> \"";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["router"]) ? $context["router"] : $this->getContext($context, "router")), "targetUrl"), "html", null, true);
            echo "\" ";
            if ($this->getAttribute((isset($context["router"]) ? $context["router"] : $this->getContext($context, "router")), "targetRoute")) {
                echo "(route: \"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["router"]) ? $context["router"] : $this->getContext($context, "router")), "targetRoute"), "html", null, true);
                echo "\")";
            }
            // line 23
            echo "    <li>
    ";
        }
        // line 25
        echo "    <li>
        <strong>Route matching logs</strong>
        <table class=\"routing inline\">
            <tr>
                <th>Route name</th>
                <th>Pattern</th>
                <th>Log</th>
            </tr>
            ";
        // line 33
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["traces"]) ? $context["traces"] : $this->getContext($context, "traces")));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 34
            echo "                <tr class=\"";
            echo (((1 == $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "level"))) ? ("almost") : ((((2 == $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "level"))) ? ("matches") : (""))));
            echo "\">
                    <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "name"), "html", null, true);
            echo "</td>
                    <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "path"), "html", null, true);
            echo "</td>
                    <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "log"), "html", null, true);
            echo "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "        </table>
        <em><small>Note: The above matching is based on the configuration for the current router which might differ from
        the configuration used while routing this request.</small></em>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Router:panel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  308 => 287,  796 => 489,  792 => 488,  788 => 486,  727 => 476,  710 => 475,  706 => 473,  702 => 472,  690 => 469,  686 => 468,  682 => 467,  679 => 466,  634 => 456,  625 => 453,  620 => 451,  601 => 446,  549 => 411,  532 => 410,  529 => 409,  389 => 160,  386 => 159,  378 => 157,  358 => 151,  345 => 147,  340 => 145,  334 => 141,  331 => 140,  328 => 139,  326 => 138,  307 => 128,  302 => 125,  290 => 119,  276 => 111,  363 => 153,  318 => 111,  265 => 105,  231 => 83,  212 => 78,  174 => 65,  672 => 345,  664 => 342,  651 => 337,  640 => 334,  631 => 327,  629 => 454,  626 => 325,  622 => 452,  609 => 319,  606 => 449,  602 => 317,  588 => 308,  585 => 307,  581 => 305,  577 => 303,  563 => 298,  559 => 296,  552 => 293,  541 => 290,  527 => 408,  519 => 278,  515 => 276,  509 => 272,  499 => 268,  497 => 267,  479 => 256,  473 => 254,  463 => 248,  454 => 244,  436 => 235,  418 => 224,  412 => 222,  400 => 214,  397 => 213,  376 => 205,  367 => 339,  347 => 191,  297 => 104,  295 => 178,  205 => 108,  449 => 198,  441 => 196,  415 => 180,  408 => 176,  351 => 120,  329 => 188,  325 => 129,  323 => 128,  320 => 127,  315 => 131,  303 => 106,  300 => 105,  270 => 102,  200 => 72,  197 => 69,  191 => 67,  181 => 65,  172 => 57,  81 => 23,  1312 => 378,  1300 => 376,  1282 => 373,  1276 => 372,  1270 => 371,  1264 => 370,  1248 => 364,  1239 => 363,  1237 => 362,  1234 => 361,  1218 => 356,  1211 => 355,  1209 => 354,  1206 => 353,  1183 => 349,  1158 => 348,  1156 => 347,  1141 => 340,  1138 => 339,  1133 => 338,  1131 => 337,  1128 => 336,  1119 => 330,  1113 => 328,  1110 => 327,  1100 => 324,  1092 => 318,  1082 => 312,  1074 => 309,  1071 => 308,  1069 => 307,  1060 => 302,  1055 => 301,  1050 => 299,  1043 => 294,  1040 => 293,  1032 => 287,  1027 => 286,  1021 => 284,  1019 => 283,  1014 => 281,  1011 => 280,  1003 => 276,  1001 => 272,  975 => 264,  972 => 263,  969 => 262,  966 => 261,  963 => 260,  960 => 259,  957 => 258,  954 => 257,  951 => 256,  948 => 255,  943 => 253,  935 => 247,  932 => 246,  927 => 244,  919 => 240,  914 => 238,  898 => 231,  895 => 230,  887 => 226,  884 => 225,  882 => 224,  879 => 223,  871 => 219,  868 => 218,  863 => 216,  852 => 211,  826 => 199,  821 => 197,  818 => 196,  810 => 492,  807 => 491,  805 => 190,  803 => 189,  800 => 188,  778 => 181,  769 => 178,  766 => 177,  761 => 175,  750 => 167,  749 => 479,  748 => 165,  743 => 164,  737 => 162,  734 => 161,  732 => 160,  729 => 159,  720 => 153,  712 => 151,  708 => 150,  703 => 149,  697 => 147,  694 => 470,  692 => 145,  689 => 144,  677 => 465,  674 => 136,  671 => 135,  668 => 344,  665 => 133,  663 => 132,  660 => 464,  652 => 127,  647 => 336,  636 => 118,  624 => 117,  619 => 115,  616 => 114,  596 => 107,  593 => 310,  591 => 309,  589 => 104,  557 => 295,  550 => 94,  543 => 92,  540 => 91,  522 => 406,  505 => 270,  502 => 81,  496 => 79,  494 => 78,  486 => 76,  475 => 72,  465 => 249,  456 => 65,  448 => 240,  439 => 195,  434 => 60,  432 => 59,  414 => 51,  406 => 48,  380 => 158,  377 => 36,  372 => 34,  369 => 33,  361 => 152,  356 => 27,  348 => 140,  343 => 146,  317 => 185,  299 => 6,  287 => 378,  277 => 373,  275 => 105,  271 => 370,  262 => 98,  251 => 346,  228 => 299,  225 => 298,  222 => 83,  211 => 279,  198 => 252,  190 => 76,  185 => 74,  170 => 84,  148 => 175,  113 => 40,  110 => 102,  100 => 36,  20 => 1,  284 => 128,  280 => 127,  253 => 100,  239 => 104,  223 => 94,  202 => 94,  194 => 68,  188 => 90,  165 => 83,  153 => 77,  1317 => 662,  1314 => 661,  1308 => 664,  1306 => 377,  1301 => 659,  1297 => 657,  1294 => 375,  1288 => 374,  1284 => 646,  1277 => 642,  1273 => 641,  1267 => 638,  1263 => 637,  1259 => 636,  1255 => 634,  1253 => 633,  1232 => 615,  1224 => 610,  1214 => 603,  1202 => 594,  1153 => 346,  1150 => 549,  1148 => 548,  1112 => 515,  1105 => 326,  1103 => 325,  1094 => 499,  1090 => 498,  1085 => 316,  1081 => 495,  1078 => 311,  1075 => 493,  1068 => 651,  1066 => 306,  1062 => 492,  1058 => 490,  1056 => 489,  1053 => 300,  1039 => 472,  1033 => 468,  1018 => 455,  1016 => 282,  999 => 271,  996 => 270,  992 => 437,  982 => 431,  980 => 430,  973 => 425,  971 => 420,  965 => 417,  962 => 416,  959 => 415,  952 => 483,  950 => 415,  946 => 254,  942 => 412,  940 => 411,  937 => 410,  930 => 245,  923 => 400,  921 => 399,  916 => 239,  911 => 237,  906 => 392,  903 => 233,  900 => 232,  897 => 389,  894 => 387,  891 => 386,  888 => 385,  886 => 384,  883 => 383,  880 => 382,  877 => 381,  875 => 380,  872 => 379,  869 => 378,  866 => 217,  864 => 376,  861 => 375,  858 => 374,  855 => 212,  853 => 372,  850 => 210,  847 => 209,  844 => 369,  841 => 368,  839 => 205,  837 => 204,  834 => 203,  827 => 357,  823 => 198,  819 => 355,  816 => 354,  813 => 353,  806 => 360,  804 => 353,  799 => 351,  795 => 349,  793 => 183,  790 => 347,  783 => 182,  777 => 338,  775 => 485,  770 => 334,  764 => 176,  756 => 327,  753 => 169,  751 => 168,  746 => 478,  742 => 322,  738 => 320,  736 => 319,  733 => 318,  726 => 313,  716 => 152,  714 => 304,  711 => 303,  700 => 294,  698 => 471,  693 => 290,  687 => 288,  681 => 287,  678 => 286,  673 => 285,  670 => 284,  662 => 279,  659 => 278,  657 => 277,  649 => 462,  644 => 335,  632 => 258,  630 => 257,  621 => 116,  617 => 250,  613 => 320,  611 => 247,  608 => 108,  598 => 238,  592 => 237,  586 => 103,  583 => 235,  578 => 234,  575 => 233,  569 => 300,  567 => 414,  558 => 224,  554 => 223,  551 => 222,  548 => 292,  545 => 291,  542 => 219,  539 => 218,  536 => 217,  533 => 284,  531 => 283,  525 => 280,  518 => 207,  511 => 203,  507 => 202,  501 => 199,  498 => 198,  483 => 258,  481 => 189,  478 => 188,  471 => 253,  445 => 163,  443 => 62,  438 => 236,  429 => 188,  420 => 53,  411 => 50,  394 => 168,  390 => 134,  388 => 133,  364 => 115,  359 => 114,  357 => 123,  350 => 327,  346 => 110,  338 => 135,  335 => 134,  332 => 116,  327 => 114,  321 => 135,  319 => 15,  313 => 183,  296 => 121,  291 => 102,  289 => 113,  286 => 112,  279 => 374,  274 => 110,  263 => 95,  260 => 116,  255 => 101,  250 => 65,  244 => 60,  233 => 87,  178 => 59,  137 => 2,  134 => 39,  129 => 667,  127 => 35,  124 => 655,  114 => 409,  104 => 37,  97 => 37,  77 => 25,  520 => 89,  517 => 404,  508 => 83,  503 => 200,  500 => 162,  493 => 158,  491 => 157,  489 => 262,  487 => 192,  482 => 153,  477 => 73,  467 => 71,  462 => 202,  459 => 246,  450 => 139,  446 => 197,  442 => 137,  431 => 189,  428 => 230,  425 => 152,  422 => 226,  419 => 131,  416 => 130,  410 => 221,  404 => 126,  401 => 172,  396 => 44,  391 => 42,  385 => 132,  383 => 207,  373 => 156,  371 => 156,  353 => 328,  349 => 106,  344 => 119,  342 => 137,  339 => 103,  330 => 104,  324 => 113,  316 => 97,  306 => 286,  304 => 181,  301 => 90,  293 => 120,  288 => 118,  281 => 114,  267 => 101,  261 => 72,  259 => 103,  256 => 96,  248 => 97,  245 => 62,  226 => 84,  218 => 51,  216 => 79,  206 => 269,  180 => 229,  161 => 63,  155 => 47,  152 => 46,  150 => 55,  118 => 49,  70 => 26,  65 => 22,  58 => 18,  53 => 17,  34 => 5,  236 => 89,  232 => 88,  213 => 78,  210 => 77,  207 => 75,  195 => 250,  186 => 36,  184 => 63,  175 => 58,  167 => 27,  160 => 202,  126 => 54,  90 => 37,  84 => 27,  76 => 28,  23 => 2,  480 => 152,  474 => 161,  469 => 158,  461 => 175,  457 => 245,  453 => 199,  444 => 238,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 151,  413 => 129,  409 => 49,  407 => 127,  402 => 215,  398 => 137,  393 => 211,  387 => 164,  384 => 121,  381 => 120,  379 => 124,  374 => 35,  368 => 116,  365 => 197,  362 => 109,  360 => 109,  355 => 329,  341 => 118,  337 => 103,  322 => 16,  314 => 13,  312 => 130,  309 => 129,  305 => 8,  298 => 120,  294 => 4,  285 => 175,  283 => 115,  278 => 98,  268 => 369,  264 => 366,  258 => 94,  252 => 80,  247 => 64,  241 => 93,  229 => 87,  220 => 81,  214 => 280,  177 => 33,  169 => 29,  140 => 58,  132 => 140,  128 => 9,  107 => 347,  61 => 23,  273 => 174,  269 => 107,  254 => 92,  243 => 92,  240 => 333,  238 => 324,  235 => 89,  230 => 305,  227 => 86,  224 => 81,  221 => 77,  219 => 76,  217 => 78,  208 => 76,  204 => 72,  179 => 98,  159 => 90,  143 => 51,  135 => 58,  119 => 40,  102 => 33,  71 => 23,  67 => 22,  63 => 21,  59 => 22,  38 => 6,  94 => 21,  89 => 30,  85 => 23,  75 => 28,  68 => 12,  56 => 16,  87 => 33,  21 => 2,  26 => 3,  93 => 38,  88 => 25,  78 => 18,  46 => 14,  27 => 7,  44 => 11,  31 => 8,  28 => 6,  201 => 106,  196 => 92,  183 => 230,  171 => 14,  166 => 54,  163 => 82,  158 => 80,  156 => 62,  151 => 59,  142 => 59,  138 => 144,  136 => 71,  121 => 50,  117 => 39,  105 => 25,  91 => 34,  62 => 21,  49 => 14,  24 => 2,  25 => 1,  19 => 1,  79 => 29,  72 => 27,  69 => 26,  47 => 15,  40 => 11,  37 => 7,  22 => 2,  246 => 136,  157 => 89,  145 => 74,  139 => 49,  131 => 45,  123 => 61,  120 => 31,  115 => 44,  111 => 47,  108 => 47,  101 => 43,  98 => 34,  96 => 35,  83 => 30,  74 => 30,  66 => 25,  55 => 38,  52 => 12,  50 => 16,  43 => 12,  41 => 19,  35 => 5,  32 => 6,  29 => 3,  209 => 270,  203 => 73,  199 => 93,  193 => 244,  189 => 66,  187 => 75,  182 => 87,  176 => 86,  173 => 85,  168 => 61,  164 => 59,  162 => 59,  154 => 60,  149 => 51,  147 => 75,  144 => 42,  141 => 73,  133 => 55,  130 => 46,  125 => 42,  122 => 41,  116 => 57,  112 => 36,  109 => 52,  106 => 51,  103 => 69,  99 => 23,  95 => 39,  92 => 28,  86 => 30,  82 => 19,  80 => 29,  73 => 23,  64 => 24,  60 => 20,  57 => 19,  54 => 19,  51 => 37,  48 => 16,  45 => 14,  42 => 8,  39 => 10,  36 => 9,  33 => 6,  30 => 7,);
    }
}
