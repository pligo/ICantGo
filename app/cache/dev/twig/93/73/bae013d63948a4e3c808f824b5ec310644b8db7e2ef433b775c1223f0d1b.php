<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_9373bae013d63948a4e3c808f824b5ec310644b8db7e2ef433b775c1223f0d1b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("@WebProfiler/Profiler/base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <div id=\"content\">
        ";
        // line 5
        $this->env->loadTemplate("@WebProfiler/Profiler/header.html.twig")->display(array());
        // line 6
        echo "
        <div id=\"main\">
            <div class=\"clear-fix\">
                <div id=\"collector-wrapper\">
                    <div id=\"collector-content\">
                        ";
        // line 11
        $this->displayBlock('panel', $context, $blocks);
        // line 34
        echo "                    </div>
                </div>
                <div id=\"navigation\">
                    ";
        // line 37
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_search_bar"));
        echo "
                    ";
        // line 38
        $this->env->loadTemplate("@WebProfiler/Profiler/admin.html.twig")->display(array("token" => ""));
        // line 39
        echo "                </div>
            </div>
        </div>
    </div>
";
    }

    // line 11
    public function block_panel($context, array $blocks = array())
    {
        // line 12
        echo "                            ";
        if (((isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")) == "purge")) {
            // line 13
            echo "                                <h2>The profiler database was purged successfully</h2>
                                <p>
                                    <em>Now you need to browse some pages with the Symfony Profiler enabled to collect data.</em>
                                </p>
                            ";
        } elseif (((isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")) == "upload_error")) {
            // line 18
            echo "                                <h2>A problem occurred when uploading the data</h2>
                                <p>
                                    <em>No file given or the file was not uploaded successfully.</em>
                                </p>
                            ";
        } elseif (((isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")) == "already_exists")) {
            // line 23
            echo "                                <h2>A problem occurred when uploading the data</h2>
                                <p>
                                    <em>The token already exists in the database.</em>
                                </p>
                            ";
        } elseif (((isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")) == "no_token")) {
            // line 28
            echo "                                <h2>Token not found</h2>
                                <p>
                                    <em>Token \"";
            // line 30
            echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
            echo "\" was not found in the database.</em>
                                </p>
                            ";
        }
        // line 33
        echo "                        ";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  796 => 489,  792 => 488,  788 => 486,  727 => 476,  710 => 475,  706 => 473,  702 => 472,  690 => 469,  686 => 468,  682 => 467,  679 => 466,  634 => 456,  625 => 453,  620 => 451,  601 => 446,  549 => 411,  532 => 410,  529 => 409,  389 => 160,  386 => 159,  378 => 157,  358 => 151,  345 => 147,  340 => 145,  334 => 141,  331 => 140,  328 => 139,  326 => 138,  307 => 128,  302 => 125,  290 => 119,  276 => 111,  363 => 153,  318 => 111,  265 => 105,  231 => 83,  212 => 78,  174 => 65,  672 => 345,  664 => 342,  651 => 337,  640 => 334,  631 => 327,  629 => 454,  626 => 325,  622 => 452,  609 => 319,  606 => 449,  602 => 317,  588 => 308,  585 => 307,  581 => 305,  577 => 303,  563 => 298,  559 => 296,  552 => 293,  541 => 290,  527 => 408,  519 => 278,  515 => 276,  509 => 272,  499 => 268,  497 => 267,  479 => 256,  473 => 254,  463 => 248,  454 => 244,  436 => 235,  418 => 224,  412 => 222,  400 => 214,  397 => 213,  376 => 205,  367 => 155,  347 => 191,  297 => 104,  295 => 178,  205 => 108,  449 => 198,  441 => 196,  415 => 180,  408 => 176,  351 => 120,  329 => 188,  325 => 129,  323 => 128,  320 => 127,  315 => 131,  303 => 106,  300 => 105,  270 => 102,  200 => 72,  197 => 69,  191 => 67,  181 => 65,  172 => 57,  81 => 23,  1312 => 378,  1300 => 376,  1282 => 373,  1276 => 372,  1270 => 371,  1264 => 370,  1248 => 364,  1239 => 363,  1237 => 362,  1234 => 361,  1218 => 356,  1211 => 355,  1209 => 354,  1206 => 353,  1183 => 349,  1158 => 348,  1156 => 347,  1141 => 340,  1138 => 339,  1133 => 338,  1131 => 337,  1128 => 336,  1119 => 330,  1113 => 328,  1110 => 327,  1100 => 324,  1092 => 318,  1082 => 312,  1074 => 309,  1071 => 308,  1069 => 307,  1060 => 302,  1055 => 301,  1050 => 299,  1043 => 294,  1040 => 293,  1032 => 287,  1027 => 286,  1021 => 284,  1019 => 283,  1014 => 281,  1011 => 280,  1003 => 276,  1001 => 272,  975 => 264,  972 => 263,  969 => 262,  966 => 261,  963 => 260,  960 => 259,  957 => 258,  954 => 257,  951 => 256,  948 => 255,  943 => 253,  935 => 247,  932 => 246,  927 => 244,  919 => 240,  914 => 238,  898 => 231,  895 => 230,  887 => 226,  884 => 225,  882 => 224,  879 => 223,  871 => 219,  868 => 218,  863 => 216,  852 => 211,  826 => 199,  821 => 197,  818 => 196,  810 => 492,  807 => 491,  805 => 190,  803 => 189,  800 => 188,  778 => 181,  769 => 178,  766 => 177,  761 => 175,  750 => 167,  749 => 479,  748 => 165,  743 => 164,  737 => 162,  734 => 161,  732 => 160,  729 => 159,  720 => 153,  712 => 151,  708 => 150,  703 => 149,  697 => 147,  694 => 470,  692 => 145,  689 => 144,  677 => 465,  674 => 136,  671 => 135,  668 => 344,  665 => 133,  663 => 132,  660 => 464,  652 => 127,  647 => 336,  636 => 118,  624 => 117,  619 => 115,  616 => 114,  596 => 107,  593 => 310,  591 => 309,  589 => 104,  557 => 295,  550 => 94,  543 => 92,  540 => 91,  522 => 406,  505 => 270,  502 => 81,  496 => 79,  494 => 78,  486 => 76,  475 => 72,  465 => 249,  456 => 65,  448 => 240,  439 => 195,  434 => 60,  432 => 59,  414 => 51,  406 => 48,  380 => 158,  377 => 36,  372 => 34,  369 => 33,  361 => 152,  356 => 27,  348 => 140,  343 => 146,  317 => 185,  299 => 6,  287 => 378,  277 => 373,  275 => 105,  271 => 370,  262 => 98,  251 => 346,  228 => 299,  225 => 298,  222 => 83,  211 => 279,  198 => 252,  190 => 76,  185 => 74,  170 => 84,  148 => 175,  113 => 48,  110 => 102,  100 => 39,  20 => 1,  284 => 128,  280 => 127,  253 => 100,  239 => 104,  223 => 94,  202 => 94,  194 => 68,  188 => 90,  165 => 83,  153 => 77,  1317 => 662,  1314 => 661,  1308 => 664,  1306 => 377,  1301 => 659,  1297 => 657,  1294 => 375,  1288 => 374,  1284 => 646,  1277 => 642,  1273 => 641,  1267 => 638,  1263 => 637,  1259 => 636,  1255 => 634,  1253 => 633,  1232 => 615,  1224 => 610,  1214 => 603,  1202 => 594,  1153 => 346,  1150 => 549,  1148 => 548,  1112 => 515,  1105 => 326,  1103 => 325,  1094 => 499,  1090 => 498,  1085 => 316,  1081 => 495,  1078 => 311,  1075 => 493,  1068 => 651,  1066 => 306,  1062 => 492,  1058 => 490,  1056 => 489,  1053 => 300,  1039 => 472,  1033 => 468,  1018 => 455,  1016 => 282,  999 => 271,  996 => 270,  992 => 437,  982 => 431,  980 => 430,  973 => 425,  971 => 420,  965 => 417,  962 => 416,  959 => 415,  952 => 483,  950 => 415,  946 => 254,  942 => 412,  940 => 411,  937 => 410,  930 => 245,  923 => 400,  921 => 399,  916 => 239,  911 => 237,  906 => 392,  903 => 233,  900 => 232,  897 => 389,  894 => 387,  891 => 386,  888 => 385,  886 => 384,  883 => 383,  880 => 382,  877 => 381,  875 => 380,  872 => 379,  869 => 378,  866 => 217,  864 => 376,  861 => 375,  858 => 374,  855 => 212,  853 => 372,  850 => 210,  847 => 209,  844 => 369,  841 => 368,  839 => 205,  837 => 204,  834 => 203,  827 => 357,  823 => 198,  819 => 355,  816 => 354,  813 => 353,  806 => 360,  804 => 353,  799 => 351,  795 => 349,  793 => 183,  790 => 347,  783 => 182,  777 => 338,  775 => 485,  770 => 334,  764 => 176,  756 => 327,  753 => 169,  751 => 168,  746 => 478,  742 => 322,  738 => 320,  736 => 319,  733 => 318,  726 => 313,  716 => 152,  714 => 304,  711 => 303,  700 => 294,  698 => 471,  693 => 290,  687 => 288,  681 => 287,  678 => 286,  673 => 285,  670 => 284,  662 => 279,  659 => 278,  657 => 277,  649 => 462,  644 => 335,  632 => 258,  630 => 257,  621 => 116,  617 => 250,  613 => 320,  611 => 247,  608 => 108,  598 => 238,  592 => 237,  586 => 103,  583 => 235,  578 => 234,  575 => 233,  569 => 300,  567 => 414,  558 => 224,  554 => 223,  551 => 222,  548 => 292,  545 => 291,  542 => 219,  539 => 218,  536 => 217,  533 => 284,  531 => 283,  525 => 280,  518 => 207,  511 => 203,  507 => 202,  501 => 199,  498 => 198,  483 => 258,  481 => 189,  478 => 188,  471 => 253,  445 => 163,  443 => 62,  438 => 236,  429 => 188,  420 => 53,  411 => 50,  394 => 168,  390 => 134,  388 => 133,  364 => 115,  359 => 114,  357 => 123,  350 => 25,  346 => 110,  338 => 135,  335 => 134,  332 => 116,  327 => 114,  321 => 135,  319 => 15,  313 => 183,  296 => 121,  291 => 102,  289 => 113,  286 => 112,  279 => 374,  274 => 110,  263 => 95,  260 => 116,  255 => 101,  250 => 65,  244 => 60,  233 => 87,  178 => 59,  137 => 2,  134 => 39,  129 => 667,  127 => 35,  124 => 655,  114 => 409,  104 => 32,  97 => 37,  77 => 20,  520 => 89,  517 => 404,  508 => 83,  503 => 200,  500 => 162,  493 => 158,  491 => 157,  489 => 262,  487 => 192,  482 => 153,  477 => 73,  467 => 71,  462 => 202,  459 => 246,  450 => 139,  446 => 197,  442 => 137,  431 => 189,  428 => 230,  425 => 152,  422 => 226,  419 => 131,  416 => 130,  410 => 221,  404 => 126,  401 => 172,  396 => 44,  391 => 42,  385 => 132,  383 => 207,  373 => 156,  371 => 156,  353 => 149,  349 => 106,  344 => 119,  342 => 137,  339 => 103,  330 => 104,  324 => 113,  316 => 97,  306 => 107,  304 => 181,  301 => 90,  293 => 120,  288 => 118,  281 => 114,  267 => 101,  261 => 72,  259 => 103,  256 => 96,  248 => 97,  245 => 62,  226 => 84,  218 => 51,  216 => 79,  206 => 269,  180 => 229,  161 => 63,  155 => 47,  152 => 46,  150 => 55,  118 => 49,  70 => 15,  65 => 11,  58 => 25,  53 => 12,  34 => 5,  236 => 89,  232 => 88,  213 => 78,  210 => 77,  207 => 75,  195 => 250,  186 => 36,  184 => 63,  175 => 58,  167 => 27,  160 => 202,  126 => 54,  90 => 42,  84 => 40,  76 => 34,  23 => 2,  480 => 152,  474 => 161,  469 => 158,  461 => 175,  457 => 245,  453 => 199,  444 => 238,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 151,  413 => 129,  409 => 49,  407 => 127,  402 => 215,  398 => 137,  393 => 211,  387 => 164,  384 => 121,  381 => 120,  379 => 124,  374 => 35,  368 => 116,  365 => 197,  362 => 109,  360 => 109,  355 => 150,  341 => 118,  337 => 103,  322 => 16,  314 => 13,  312 => 130,  309 => 129,  305 => 8,  298 => 120,  294 => 4,  285 => 175,  283 => 115,  278 => 98,  268 => 369,  264 => 366,  258 => 94,  252 => 80,  247 => 64,  241 => 93,  229 => 87,  220 => 81,  214 => 280,  177 => 33,  169 => 29,  140 => 58,  132 => 140,  128 => 9,  107 => 347,  61 => 12,  273 => 174,  269 => 107,  254 => 92,  243 => 92,  240 => 333,  238 => 324,  235 => 89,  230 => 305,  227 => 86,  224 => 81,  221 => 77,  219 => 76,  217 => 78,  208 => 76,  204 => 72,  179 => 98,  159 => 90,  143 => 51,  135 => 58,  119 => 40,  102 => 33,  71 => 13,  67 => 14,  63 => 18,  59 => 16,  38 => 18,  94 => 21,  89 => 197,  85 => 23,  75 => 19,  68 => 12,  56 => 16,  87 => 41,  21 => 2,  26 => 12,  93 => 27,  88 => 25,  78 => 18,  46 => 34,  27 => 7,  44 => 11,  31 => 8,  28 => 3,  201 => 106,  196 => 92,  183 => 230,  171 => 14,  166 => 54,  163 => 82,  158 => 80,  156 => 62,  151 => 59,  142 => 59,  138 => 144,  136 => 71,  121 => 50,  117 => 39,  105 => 25,  91 => 33,  62 => 27,  49 => 14,  24 => 7,  25 => 1,  19 => 1,  79 => 18,  72 => 18,  69 => 17,  47 => 21,  40 => 13,  37 => 6,  22 => 3,  246 => 136,  157 => 89,  145 => 74,  139 => 49,  131 => 45,  123 => 61,  120 => 31,  115 => 44,  111 => 47,  108 => 39,  101 => 31,  98 => 45,  96 => 30,  83 => 33,  74 => 30,  66 => 15,  55 => 38,  52 => 12,  50 => 22,  43 => 12,  41 => 19,  35 => 5,  32 => 4,  29 => 3,  209 => 270,  203 => 73,  199 => 93,  193 => 244,  189 => 66,  187 => 75,  182 => 87,  176 => 86,  173 => 85,  168 => 61,  164 => 59,  162 => 59,  154 => 60,  149 => 51,  147 => 75,  144 => 42,  141 => 73,  133 => 55,  130 => 46,  125 => 42,  122 => 41,  116 => 57,  112 => 36,  109 => 52,  106 => 51,  103 => 69,  99 => 23,  95 => 57,  92 => 28,  86 => 30,  82 => 19,  80 => 27,  73 => 33,  64 => 13,  60 => 22,  57 => 39,  54 => 20,  51 => 37,  48 => 16,  45 => 9,  42 => 11,  39 => 10,  36 => 10,  33 => 9,  30 => 5,);
    }
}