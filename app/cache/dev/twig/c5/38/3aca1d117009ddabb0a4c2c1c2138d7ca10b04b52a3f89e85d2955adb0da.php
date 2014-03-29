<?php

/* ::admin.html.twig */
class __TwigTemplate_c5383aca1d117009ddabb0a4c2c1c2138d7ca10b04b52a3f89e85d2955adb0da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
";
        // line 3
        echo "<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo " </title>
        

";
        // line 9
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "13fc40b_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_13fc40b_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/13fc40b_bootstrap_1.css");
            // line 10
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
";
        } else {
            // asset "13fc40b"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_13fc40b") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/13fc40b.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
";
        }
        unset($context["asset_url"]);
        // line 12
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <nav class=\"navbar navbar-inverse\" role=\"navigation\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                    <span class=\"sr-only\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"#\">I Cant GO</a>
            </div>

      
            
                 ";
        // line 29
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 30
            echo " 
                <ul class=\"nav navbar-nav navbar-right\">
                   
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><span class=\"glyphicon glyphicon-user\"></span> ";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username")), "FOSUserBundle"), "html", null, true);
            echo "  <b class=\"caret\"></b></a>
                        <ul class=\"dropdown-menu\">
                            
                            <li><a href=\"";
            // line 37
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
            echo "\">Profil</a></li>
                            <li><a href=\"";
            // line 38
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\">Register</a></li>
                            
                            
                            <li class=\"divider\"></li>
                            <li><a href=\"";
            // line 42
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\"><span class=\"glyphicon glyphicon-off\"></span> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></li>
                        </ul>
                    </li>
                </ul>
                    ";
        }
        // line 47
        echo "            </div><!-- /.navbar-collapse -->
        </nav>
        <div>
        ";
        // line 50
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "all", array(), "method"));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 51
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 52
                echo "                <div class=\"flash-";
                echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
                echo "\">
                    ";
                // line 53
                echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
                echo "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "        </div>
        <div class=\"row\">
        <div class=\"col-md-2\">
  
        <ul class=\"nav nav-pills nav-stacked\">
            <li class=\"active\"><a href=\"\">Home</a></li>
            <li class=\"active\"><a href=\"\">Home</a></li>
        </ul>
      </div>
        <div class=\"col-md-10\">
            <div class=\"col-md-11\">
            ";
        // line 68
        $this->displayBlock('body', $context, $blocks);
        // line 72
        echo "            </div>
         </div>
        </div>
        

        ";
        // line 77
        $this->displayBlock('javascripts', $context, $blocks);
        // line 82
        echo "    </body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 68
    public function block_body($context, array $blocks = array())
    {
        // line 69
        echo "            ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 71
        echo "            ";
    }

    // line 69
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 70
        echo "            ";
    }

    // line 77
    public function block_javascripts($context, array $blocks = array())
    {
        // line 78
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/tinymce/tinymce.min.js"), "html", null, true);
        echo "\"></script>
       ";
    }

    public function getTemplateName()
    {
        return "::admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1414 => 421,  1408 => 419,  1402 => 417,  1400 => 416,  1398 => 415,  1394 => 414,  1385 => 413,  1383 => 412,  1380 => 411,  1367 => 405,  1361 => 403,  1355 => 401,  1353 => 400,  1351 => 399,  1347 => 398,  1341 => 397,  1339 => 396,  1336 => 395,  1323 => 389,  1311 => 385,  1309 => 384,  1307 => 383,  1303 => 382,  1291 => 380,  1287 => 379,  1283 => 378,  1279 => 377,  1271 => 375,  1268 => 374,  1256 => 369,  1251 => 368,  1249 => 367,  1246 => 366,  1231 => 358,  1228 => 357,  1223 => 356,  1221 => 355,  1198 => 346,  1195 => 345,  1192 => 344,  1190 => 343,  1187 => 342,  1179 => 338,  1177 => 337,  1174 => 336,  1168 => 332,  1162 => 330,  1159 => 329,  1157 => 328,  1154 => 327,  1145 => 322,  1143 => 321,  1118 => 320,  1115 => 319,  1109 => 317,  1106 => 316,  1098 => 313,  1095 => 312,  1088 => 308,  1084 => 307,  1079 => 306,  1077 => 305,  1067 => 299,  1064 => 298,  1051 => 291,  1048 => 290,  1036 => 284,  1029 => 282,  1024 => 280,  1012 => 271,  1009 => 270,  1004 => 266,  979 => 260,  976 => 259,  970 => 257,  967 => 256,  964 => 255,  961 => 254,  958 => 253,  955 => 252,  947 => 249,  939 => 243,  936 => 242,  934 => 241,  931 => 240,  920 => 235,  918 => 234,  915 => 233,  892 => 225,  889 => 224,  881 => 220,  878 => 219,  876 => 218,  873 => 217,  865 => 213,  862 => 212,  860 => 211,  857 => 210,  849 => 206,  846 => 205,  833 => 199,  830 => 198,  828 => 197,  825 => 196,  817 => 192,  814 => 191,  812 => 190,  809 => 189,  801 => 185,  798 => 184,  785 => 178,  780 => 176,  772 => 172,  767 => 170,  739 => 156,  724 => 154,  721 => 153,  715 => 151,  707 => 148,  699 => 142,  696 => 140,  695 => 139,  683 => 135,  680 => 134,  675 => 132,  666 => 126,  658 => 124,  654 => 123,  643 => 120,  638 => 118,  635 => 117,  614 => 111,  576 => 101,  564 => 99,  555 => 95,  547 => 93,  524 => 90,  512 => 84,  490 => 77,  470 => 73,  464 => 71,  433 => 60,  426 => 58,  405 => 49,  403 => 48,  366 => 33,  311 => 14,  266 => 366,  215 => 280,  146 => 181,  308 => 13,  796 => 183,  792 => 488,  788 => 486,  727 => 476,  710 => 149,  706 => 473,  702 => 472,  690 => 469,  686 => 468,  682 => 467,  679 => 466,  634 => 456,  625 => 453,  620 => 451,  601 => 446,  549 => 411,  532 => 410,  529 => 92,  389 => 160,  386 => 159,  378 => 157,  358 => 151,  345 => 147,  340 => 145,  334 => 141,  331 => 140,  328 => 139,  326 => 138,  307 => 128,  302 => 125,  290 => 5,  276 => 395,  363 => 32,  318 => 111,  265 => 105,  231 => 83,  212 => 279,  174 => 217,  672 => 345,  664 => 342,  651 => 337,  640 => 119,  631 => 327,  629 => 454,  626 => 325,  622 => 452,  609 => 319,  606 => 449,  602 => 317,  588 => 308,  585 => 307,  581 => 305,  577 => 303,  563 => 298,  559 => 296,  552 => 293,  541 => 290,  527 => 91,  519 => 278,  515 => 85,  509 => 83,  499 => 268,  497 => 267,  479 => 256,  473 => 254,  463 => 248,  454 => 244,  436 => 235,  418 => 224,  412 => 222,  400 => 47,  397 => 213,  376 => 205,  367 => 339,  347 => 191,  297 => 104,  295 => 178,  205 => 108,  449 => 198,  441 => 196,  415 => 180,  408 => 50,  351 => 120,  329 => 188,  325 => 129,  323 => 128,  320 => 127,  315 => 131,  303 => 106,  300 => 105,  270 => 102,  200 => 72,  197 => 249,  191 => 69,  181 => 68,  172 => 57,  81 => 30,  1312 => 378,  1300 => 376,  1282 => 373,  1276 => 372,  1270 => 371,  1264 => 370,  1248 => 364,  1239 => 363,  1237 => 360,  1234 => 361,  1218 => 354,  1211 => 349,  1209 => 354,  1206 => 353,  1183 => 349,  1158 => 348,  1156 => 347,  1141 => 340,  1138 => 339,  1133 => 338,  1131 => 337,  1128 => 336,  1119 => 330,  1113 => 328,  1110 => 327,  1100 => 314,  1092 => 318,  1082 => 312,  1074 => 304,  1071 => 308,  1069 => 307,  1060 => 302,  1055 => 301,  1050 => 299,  1043 => 294,  1040 => 285,  1032 => 283,  1027 => 281,  1021 => 284,  1019 => 283,  1014 => 272,  1011 => 280,  1003 => 276,  1001 => 272,  975 => 264,  972 => 263,  969 => 262,  966 => 261,  963 => 260,  960 => 259,  957 => 258,  954 => 257,  951 => 256,  948 => 255,  943 => 253,  935 => 247,  932 => 246,  927 => 244,  919 => 240,  914 => 238,  898 => 231,  895 => 230,  887 => 226,  884 => 225,  882 => 224,  879 => 223,  871 => 219,  868 => 218,  863 => 216,  852 => 211,  826 => 199,  821 => 197,  818 => 196,  810 => 492,  807 => 491,  805 => 190,  803 => 189,  800 => 188,  778 => 181,  769 => 171,  766 => 177,  761 => 175,  750 => 167,  749 => 162,  748 => 165,  743 => 164,  737 => 162,  734 => 161,  732 => 160,  729 => 155,  720 => 153,  712 => 150,  708 => 150,  703 => 149,  697 => 141,  694 => 138,  692 => 145,  689 => 137,  677 => 465,  674 => 136,  671 => 135,  668 => 344,  665 => 133,  663 => 132,  660 => 464,  652 => 127,  647 => 336,  636 => 118,  624 => 117,  619 => 113,  616 => 114,  596 => 106,  593 => 105,  591 => 309,  589 => 104,  557 => 96,  550 => 94,  543 => 92,  540 => 91,  522 => 406,  505 => 270,  502 => 81,  496 => 79,  494 => 78,  486 => 76,  475 => 72,  465 => 249,  456 => 68,  448 => 240,  439 => 195,  434 => 60,  432 => 59,  414 => 52,  406 => 48,  380 => 158,  377 => 37,  372 => 34,  369 => 33,  361 => 152,  356 => 27,  348 => 140,  343 => 146,  317 => 185,  299 => 8,  287 => 378,  277 => 373,  275 => 105,  271 => 374,  262 => 98,  251 => 346,  228 => 299,  225 => 298,  222 => 297,  211 => 279,  198 => 77,  190 => 76,  185 => 74,  170 => 84,  148 => 175,  113 => 40,  110 => 38,  100 => 36,  20 => 1,  284 => 128,  280 => 127,  253 => 342,  239 => 104,  223 => 94,  202 => 266,  194 => 70,  188 => 90,  165 => 83,  153 => 77,  1317 => 387,  1314 => 661,  1308 => 664,  1306 => 377,  1301 => 659,  1297 => 381,  1294 => 375,  1288 => 374,  1284 => 646,  1277 => 642,  1273 => 376,  1267 => 638,  1263 => 637,  1259 => 636,  1255 => 634,  1253 => 633,  1232 => 615,  1224 => 610,  1214 => 603,  1202 => 347,  1153 => 346,  1150 => 549,  1148 => 548,  1112 => 318,  1105 => 326,  1103 => 315,  1094 => 499,  1090 => 498,  1085 => 316,  1081 => 495,  1078 => 311,  1075 => 493,  1068 => 651,  1066 => 306,  1062 => 492,  1058 => 490,  1056 => 293,  1053 => 292,  1039 => 472,  1033 => 468,  1018 => 455,  1016 => 276,  999 => 271,  996 => 270,  992 => 437,  982 => 261,  980 => 430,  973 => 258,  971 => 420,  965 => 417,  962 => 416,  959 => 415,  952 => 251,  950 => 250,  946 => 254,  942 => 412,  940 => 411,  937 => 410,  930 => 245,  923 => 236,  921 => 399,  916 => 239,  911 => 237,  906 => 392,  903 => 229,  900 => 228,  897 => 227,  894 => 226,  891 => 386,  888 => 385,  886 => 384,  883 => 383,  880 => 382,  877 => 381,  875 => 380,  872 => 379,  869 => 378,  866 => 217,  864 => 376,  861 => 375,  858 => 374,  855 => 212,  853 => 372,  850 => 210,  847 => 209,  844 => 204,  841 => 203,  839 => 205,  837 => 204,  834 => 203,  827 => 357,  823 => 198,  819 => 355,  816 => 354,  813 => 353,  806 => 360,  804 => 353,  799 => 351,  795 => 349,  793 => 182,  790 => 347,  783 => 177,  777 => 338,  775 => 485,  770 => 334,  764 => 169,  756 => 165,  753 => 164,  751 => 163,  746 => 161,  742 => 322,  738 => 320,  736 => 319,  733 => 318,  726 => 313,  716 => 152,  714 => 304,  711 => 303,  700 => 294,  698 => 471,  693 => 290,  687 => 288,  681 => 287,  678 => 133,  673 => 285,  670 => 284,  662 => 125,  659 => 278,  657 => 277,  649 => 122,  644 => 335,  632 => 258,  630 => 257,  621 => 116,  617 => 112,  613 => 320,  611 => 247,  608 => 108,  598 => 107,  592 => 237,  586 => 103,  583 => 235,  578 => 234,  575 => 233,  569 => 300,  567 => 414,  558 => 224,  554 => 223,  551 => 222,  548 => 292,  545 => 291,  542 => 219,  539 => 218,  536 => 217,  533 => 284,  531 => 283,  525 => 280,  518 => 207,  511 => 203,  507 => 202,  501 => 80,  498 => 198,  483 => 258,  481 => 189,  478 => 74,  471 => 253,  445 => 163,  443 => 62,  438 => 236,  429 => 188,  420 => 53,  411 => 50,  394 => 168,  390 => 43,  388 => 42,  364 => 115,  359 => 114,  357 => 123,  350 => 26,  346 => 110,  338 => 135,  335 => 21,  332 => 20,  327 => 114,  321 => 135,  319 => 15,  313 => 15,  296 => 121,  291 => 102,  289 => 113,  286 => 112,  279 => 374,  274 => 110,  263 => 365,  260 => 363,  255 => 353,  250 => 341,  244 => 60,  233 => 304,  178 => 59,  137 => 2,  134 => 161,  129 => 148,  127 => 35,  124 => 132,  114 => 111,  104 => 90,  97 => 37,  77 => 25,  520 => 89,  517 => 404,  508 => 83,  503 => 81,  500 => 162,  493 => 78,  491 => 157,  489 => 262,  487 => 192,  482 => 153,  477 => 73,  467 => 72,  462 => 202,  459 => 69,  450 => 64,  446 => 197,  442 => 62,  431 => 189,  428 => 59,  425 => 152,  422 => 226,  419 => 131,  416 => 130,  410 => 221,  404 => 126,  401 => 172,  396 => 44,  391 => 42,  385 => 41,  383 => 207,  373 => 156,  371 => 35,  353 => 328,  349 => 106,  344 => 24,  342 => 23,  339 => 103,  330 => 104,  324 => 113,  316 => 16,  306 => 286,  304 => 181,  301 => 90,  293 => 6,  288 => 4,  281 => 411,  267 => 101,  261 => 72,  259 => 103,  256 => 96,  248 => 336,  245 => 335,  226 => 84,  218 => 51,  216 => 79,  206 => 79,  180 => 229,  161 => 202,  155 => 47,  152 => 46,  150 => 55,  118 => 49,  70 => 19,  65 => 17,  58 => 14,  53 => 11,  34 => 4,  236 => 89,  232 => 88,  213 => 78,  210 => 80,  207 => 269,  195 => 250,  186 => 239,  184 => 69,  175 => 6,  167 => 77,  160 => 72,  126 => 147,  90 => 37,  84 => 34,  76 => 29,  23 => 1,  480 => 75,  474 => 161,  469 => 158,  461 => 70,  457 => 245,  453 => 199,  444 => 238,  440 => 148,  437 => 61,  435 => 146,  430 => 144,  427 => 143,  423 => 57,  413 => 129,  409 => 49,  407 => 127,  402 => 215,  398 => 137,  393 => 211,  387 => 164,  384 => 121,  381 => 120,  379 => 124,  374 => 36,  368 => 34,  365 => 197,  362 => 109,  360 => 109,  355 => 27,  341 => 118,  337 => 22,  322 => 16,  314 => 13,  312 => 130,  309 => 129,  305 => 8,  298 => 120,  294 => 4,  285 => 3,  283 => 115,  278 => 410,  268 => 373,  264 => 366,  258 => 354,  252 => 80,  247 => 64,  241 => 93,  229 => 87,  220 => 290,  214 => 280,  177 => 33,  169 => 82,  140 => 58,  132 => 140,  128 => 9,  107 => 37,  61 => 2,  273 => 394,  269 => 107,  254 => 92,  243 => 327,  240 => 326,  238 => 312,  235 => 311,  230 => 303,  227 => 301,  224 => 81,  221 => 77,  219 => 76,  217 => 289,  208 => 76,  204 => 267,  179 => 224,  159 => 196,  143 => 51,  135 => 58,  119 => 117,  102 => 30,  71 => 19,  67 => 16,  63 => 21,  59 => 17,  38 => 6,  94 => 38,  89 => 35,  85 => 26,  75 => 22,  68 => 20,  56 => 12,  87 => 26,  21 => 2,  26 => 3,  93 => 28,  88 => 28,  78 => 30,  46 => 10,  27 => 7,  44 => 8,  31 => 6,  28 => 3,  201 => 78,  196 => 92,  183 => 230,  171 => 216,  166 => 209,  163 => 82,  158 => 68,  156 => 195,  151 => 188,  142 => 59,  138 => 144,  136 => 168,  121 => 131,  117 => 39,  105 => 25,  91 => 56,  62 => 14,  49 => 12,  24 => 2,  25 => 1,  19 => 1,  79 => 32,  72 => 21,  69 => 21,  47 => 10,  40 => 11,  37 => 9,  22 => 2,  246 => 136,  157 => 89,  145 => 57,  139 => 56,  131 => 160,  123 => 61,  120 => 51,  115 => 40,  111 => 47,  108 => 33,  101 => 42,  98 => 29,  96 => 67,  83 => 30,  74 => 20,  66 => 12,  55 => 12,  52 => 13,  50 => 10,  43 => 9,  41 => 10,  35 => 5,  32 => 6,  29 => 4,  209 => 270,  203 => 73,  199 => 265,  193 => 244,  189 => 240,  187 => 71,  182 => 87,  176 => 223,  173 => 85,  168 => 61,  164 => 203,  162 => 59,  154 => 189,  149 => 182,  147 => 75,  144 => 176,  141 => 175,  133 => 55,  130 => 53,  125 => 52,  122 => 41,  116 => 50,  112 => 39,  109 => 105,  106 => 104,  103 => 69,  99 => 68,  95 => 39,  92 => 31,  86 => 46,  82 => 25,  80 => 24,  73 => 23,  64 => 19,  60 => 20,  57 => 19,  54 => 15,  51 => 37,  48 => 11,  45 => 9,  42 => 7,  39 => 10,  36 => 5,  33 => 4,  30 => 3,);
    }
}
