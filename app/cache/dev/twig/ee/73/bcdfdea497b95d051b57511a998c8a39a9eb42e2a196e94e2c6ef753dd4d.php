<?php

/* ICantGoStageBundle:Stage:show.html.twig */
class __TwigTemplate_ee73bcdfdea497b95d051b57511a998c8a39a9eb42e2a196e94e2c6ef753dd4d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<h1>Stage</h1>

    <table class=\"record_properties\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "name"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Address</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "address"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>District</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "district"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "description"), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("stage");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("stage_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>";
        // line 42
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "ICantGoStageBundle:Stage:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 26,  1312 => 378,  1300 => 376,  1282 => 373,  1276 => 372,  1270 => 371,  1264 => 370,  1248 => 364,  1239 => 363,  1237 => 362,  1234 => 361,  1218 => 356,  1211 => 355,  1209 => 354,  1206 => 353,  1183 => 349,  1158 => 348,  1156 => 347,  1141 => 340,  1138 => 339,  1133 => 338,  1131 => 337,  1128 => 336,  1119 => 330,  1113 => 328,  1110 => 327,  1100 => 324,  1092 => 318,  1082 => 312,  1074 => 309,  1071 => 308,  1069 => 307,  1060 => 302,  1055 => 301,  1050 => 299,  1043 => 294,  1040 => 293,  1032 => 287,  1027 => 286,  1021 => 284,  1019 => 283,  1014 => 281,  1011 => 280,  1003 => 276,  1001 => 272,  975 => 264,  972 => 263,  969 => 262,  966 => 261,  963 => 260,  960 => 259,  957 => 258,  954 => 257,  951 => 256,  948 => 255,  943 => 253,  935 => 247,  932 => 246,  927 => 244,  919 => 240,  914 => 238,  898 => 231,  895 => 230,  887 => 226,  884 => 225,  882 => 224,  879 => 223,  871 => 219,  868 => 218,  863 => 216,  852 => 211,  826 => 199,  821 => 197,  818 => 196,  810 => 192,  807 => 191,  805 => 190,  803 => 189,  800 => 188,  778 => 181,  769 => 178,  766 => 177,  761 => 175,  750 => 167,  749 => 166,  748 => 165,  743 => 164,  737 => 162,  734 => 161,  732 => 160,  729 => 159,  720 => 153,  712 => 151,  708 => 150,  703 => 149,  697 => 147,  694 => 146,  692 => 145,  689 => 144,  677 => 137,  674 => 136,  671 => 135,  668 => 134,  665 => 133,  663 => 132,  660 => 131,  652 => 127,  647 => 125,  636 => 118,  624 => 117,  619 => 115,  616 => 114,  596 => 107,  593 => 106,  591 => 105,  589 => 104,  557 => 97,  550 => 94,  543 => 92,  540 => 91,  522 => 90,  505 => 82,  502 => 81,  496 => 79,  494 => 78,  486 => 76,  475 => 72,  465 => 70,  456 => 65,  448 => 63,  439 => 61,  434 => 60,  432 => 59,  414 => 51,  406 => 48,  380 => 37,  377 => 36,  372 => 34,  369 => 33,  361 => 28,  356 => 27,  348 => 24,  343 => 23,  317 => 14,  299 => 6,  287 => 378,  277 => 373,  275 => 372,  271 => 370,  262 => 361,  251 => 346,  228 => 299,  225 => 298,  222 => 296,  211 => 279,  198 => 252,  190 => 243,  185 => 236,  170 => 215,  148 => 175,  113 => 103,  110 => 102,  100 => 68,  20 => 1,  284 => 128,  280 => 127,  253 => 352,  239 => 104,  223 => 94,  202 => 79,  194 => 74,  188 => 237,  165 => 208,  153 => 188,  1317 => 662,  1314 => 661,  1308 => 664,  1306 => 377,  1301 => 659,  1297 => 657,  1294 => 375,  1288 => 374,  1284 => 646,  1277 => 642,  1273 => 641,  1267 => 638,  1263 => 637,  1259 => 636,  1255 => 634,  1253 => 633,  1232 => 615,  1224 => 610,  1214 => 603,  1202 => 594,  1153 => 346,  1150 => 549,  1148 => 548,  1112 => 515,  1105 => 326,  1103 => 325,  1094 => 499,  1090 => 498,  1085 => 316,  1081 => 495,  1078 => 311,  1075 => 493,  1068 => 651,  1066 => 306,  1062 => 492,  1058 => 490,  1056 => 489,  1053 => 300,  1039 => 472,  1033 => 468,  1018 => 455,  1016 => 282,  999 => 271,  996 => 270,  992 => 437,  982 => 431,  980 => 430,  973 => 425,  971 => 420,  965 => 417,  962 => 416,  959 => 415,  952 => 483,  950 => 415,  946 => 254,  942 => 412,  940 => 411,  937 => 410,  930 => 245,  923 => 400,  921 => 399,  916 => 239,  911 => 237,  906 => 392,  903 => 233,  900 => 232,  897 => 389,  894 => 387,  891 => 386,  888 => 385,  886 => 384,  883 => 383,  880 => 382,  877 => 381,  875 => 380,  872 => 379,  869 => 378,  866 => 217,  864 => 376,  861 => 375,  858 => 374,  855 => 212,  853 => 372,  850 => 210,  847 => 209,  844 => 369,  841 => 368,  839 => 205,  837 => 204,  834 => 203,  827 => 357,  823 => 198,  819 => 355,  816 => 354,  813 => 353,  806 => 360,  804 => 353,  799 => 351,  795 => 349,  793 => 183,  790 => 347,  783 => 182,  777 => 338,  775 => 180,  770 => 334,  764 => 176,  756 => 327,  753 => 169,  751 => 168,  746 => 323,  742 => 322,  738 => 320,  736 => 319,  733 => 318,  726 => 313,  716 => 152,  714 => 304,  711 => 303,  700 => 294,  698 => 293,  693 => 290,  687 => 288,  681 => 287,  678 => 286,  673 => 285,  670 => 284,  662 => 279,  659 => 278,  657 => 277,  649 => 126,  644 => 124,  632 => 258,  630 => 257,  621 => 116,  617 => 250,  613 => 248,  611 => 247,  608 => 108,  598 => 238,  592 => 237,  586 => 103,  583 => 235,  578 => 234,  575 => 233,  569 => 99,  567 => 230,  558 => 224,  554 => 223,  551 => 222,  548 => 93,  545 => 220,  542 => 219,  539 => 218,  536 => 217,  533 => 216,  531 => 215,  525 => 211,  518 => 207,  511 => 203,  507 => 202,  501 => 199,  498 => 198,  483 => 75,  481 => 189,  478 => 188,  471 => 183,  445 => 163,  443 => 62,  438 => 160,  429 => 58,  420 => 53,  411 => 50,  394 => 43,  390 => 134,  388 => 133,  364 => 115,  359 => 114,  357 => 113,  350 => 25,  346 => 110,  338 => 21,  335 => 106,  332 => 105,  327 => 103,  321 => 99,  319 => 15,  313 => 96,  296 => 5,  291 => 3,  289 => 90,  286 => 89,  279 => 374,  274 => 124,  263 => 72,  260 => 116,  255 => 68,  250 => 65,  244 => 60,  233 => 306,  178 => 223,  137 => 2,  134 => 39,  129 => 667,  127 => 130,  124 => 655,  114 => 409,  104 => 42,  97 => 37,  77 => 33,  520 => 89,  517 => 88,  508 => 83,  503 => 200,  500 => 162,  493 => 158,  491 => 157,  489 => 77,  487 => 192,  482 => 153,  477 => 73,  467 => 71,  462 => 69,  459 => 141,  450 => 139,  446 => 138,  442 => 137,  431 => 135,  428 => 134,  425 => 152,  422 => 132,  419 => 131,  416 => 130,  410 => 128,  404 => 126,  401 => 125,  396 => 44,  391 => 42,  385 => 132,  383 => 38,  373 => 115,  371 => 114,  353 => 107,  349 => 106,  344 => 105,  342 => 109,  339 => 103,  330 => 104,  324 => 102,  316 => 97,  306 => 127,  304 => 96,  301 => 90,  293 => 85,  288 => 83,  281 => 375,  267 => 120,  261 => 72,  259 => 71,  256 => 353,  248 => 345,  245 => 62,  226 => 54,  218 => 51,  216 => 291,  206 => 269,  180 => 229,  161 => 25,  155 => 195,  152 => 22,  150 => 187,  118 => 4,  70 => 89,  65 => 23,  58 => 60,  53 => 18,  34 => 7,  236 => 89,  232 => 56,  213 => 49,  210 => 84,  207 => 77,  195 => 250,  186 => 36,  184 => 77,  175 => 222,  167 => 27,  160 => 202,  126 => 54,  90 => 30,  84 => 37,  76 => 9,  23 => 2,  480 => 152,  474 => 161,  469 => 158,  461 => 175,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 151,  413 => 129,  409 => 49,  407 => 127,  402 => 138,  398 => 137,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 124,  374 => 35,  368 => 116,  365 => 111,  362 => 109,  360 => 109,  355 => 106,  341 => 22,  337 => 103,  322 => 16,  314 => 13,  312 => 98,  309 => 93,  305 => 8,  298 => 91,  294 => 4,  285 => 377,  283 => 376,  278 => 80,  268 => 369,  264 => 366,  258 => 359,  252 => 80,  247 => 64,  241 => 59,  229 => 55,  220 => 293,  214 => 280,  177 => 33,  169 => 29,  140 => 158,  132 => 140,  128 => 9,  107 => 347,  61 => 22,  273 => 371,  269 => 75,  254 => 92,  243 => 335,  240 => 333,  238 => 324,  235 => 323,  230 => 305,  227 => 95,  224 => 53,  221 => 77,  219 => 76,  217 => 78,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 159,  135 => 58,  119 => 114,  102 => 18,  71 => 24,  67 => 26,  63 => 70,  59 => 3,  38 => 6,  94 => 245,  89 => 197,  85 => 38,  75 => 25,  68 => 23,  56 => 15,  87 => 188,  21 => 2,  26 => 12,  93 => 48,  88 => 42,  78 => 21,  46 => 14,  27 => 8,  44 => 8,  31 => 4,  28 => 3,  201 => 253,  196 => 33,  183 => 230,  171 => 14,  166 => 26,  163 => 203,  158 => 196,  156 => 9,  151 => 63,  142 => 59,  138 => 144,  136 => 40,  121 => 122,  117 => 410,  105 => 87,  91 => 14,  62 => 33,  49 => 14,  24 => 7,  25 => 1,  19 => 1,  79 => 28,  72 => 24,  69 => 12,  47 => 18,  40 => 13,  37 => 12,  22 => 3,  246 => 336,  157 => 56,  145 => 174,  139 => 41,  131 => 38,  123 => 47,  120 => 40,  115 => 44,  111 => 44,  108 => 39,  101 => 42,  98 => 58,  96 => 33,  83 => 33,  74 => 30,  66 => 15,  55 => 21,  52 => 20,  50 => 49,  43 => 20,  41 => 7,  35 => 6,  32 => 4,  29 => 3,  209 => 270,  203 => 267,  199 => 34,  193 => 244,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 216,  168 => 209,  164 => 59,  162 => 11,  154 => 63,  149 => 51,  147 => 20,  144 => 4,  141 => 48,  133 => 55,  130 => 131,  125 => 124,  122 => 488,  116 => 26,  112 => 25,  109 => 364,  106 => 36,  103 => 69,  99 => 46,  95 => 57,  92 => 42,  86 => 30,  82 => 11,  80 => 32,  73 => 25,  64 => 22,  60 => 22,  57 => 2,  54 => 20,  51 => 19,  48 => 19,  45 => 11,  42 => 10,  39 => 10,  36 => 7,  33 => 1,  30 => 9,);
    }
}
