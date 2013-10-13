<?php

/* ::base.html.twig */
class __TwigTemplate_f0a624fd03af68f2398c5258fd2190c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1352 => 388,  1343 => 387,  1341 => 386,  1338 => 385,  1322 => 381,  1315 => 380,  1313 => 379,  1310 => 378,  1262 => 373,  1260 => 372,  1257 => 371,  1245 => 366,  1240 => 365,  1238 => 364,  1235 => 363,  1226 => 357,  1220 => 355,  1217 => 354,  1212 => 353,  1210 => 352,  1200 => 346,  1191 => 344,  1181 => 341,  1179 => 340,  1176 => 339,  1157 => 329,  1151 => 327,  1148 => 326,  1146 => 325,  1143 => 324,  1134 => 319,  1132 => 318,  1109 => 317,  1106 => 316,  1103 => 315,  1100 => 314,  1097 => 313,  1094 => 312,  1091 => 311,  1079 => 305,  1075 => 304,  1070 => 303,  1058 => 296,  1055 => 295,  1042 => 288,  1039 => 287,  1027 => 281,  1023 => 280,  1020 => 279,  1018 => 278,  1015 => 277,  1007 => 273,  1005 => 269,  1003 => 268,  1000 => 267,  995 => 263,  973 => 258,  970 => 257,  967 => 256,  958 => 253,  955 => 252,  952 => 251,  949 => 250,  946 => 249,  941 => 247,  938 => 246,  930 => 240,  925 => 238,  922 => 237,  914 => 233,  909 => 231,  906 => 230,  894 => 226,  891 => 225,  888 => 224,  885 => 223,  883 => 222,  880 => 221,  872 => 217,  869 => 216,  867 => 215,  864 => 214,  856 => 210,  853 => 209,  851 => 208,  840 => 203,  837 => 202,  835 => 201,  832 => 200,  824 => 196,  821 => 195,  819 => 194,  816 => 193,  808 => 189,  805 => 188,  800 => 186,  789 => 181,  787 => 180,  776 => 175,  763 => 169,  760 => 168,  758 => 167,  755 => 166,  747 => 162,  744 => 161,  740 => 159,  730 => 153,  720 => 152,  715 => 151,  712 => 150,  703 => 147,  701 => 146,  688 => 138,  687 => 137,  685 => 135,  680 => 134,  674 => 132,  671 => 131,  669 => 130,  666 => 129,  657 => 123,  653 => 122,  640 => 119,  634 => 117,  631 => 116,  629 => 115,  610 => 110,  605 => 108,  587 => 103,  584 => 102,  567 => 98,  548 => 93,  546 => 92,  538 => 90,  518 => 88,  506 => 82,  503 => 81,  500 => 80,  494 => 78,  492 => 77,  481 => 74,  471 => 72,  459 => 69,  456 => 68,  450 => 64,  442 => 62,  433 => 60,  428 => 59,  426 => 58,  414 => 52,  403 => 48,  400 => 47,  390 => 43,  388 => 42,  385 => 41,  377 => 37,  366 => 33,  350 => 26,  313 => 15,  311 => 14,  299 => 8,  215 => 277,  124 => 129,  339 => 316,  295 => 275,  20 => 1,  449 => 198,  439 => 195,  431 => 189,  422 => 184,  408 => 50,  401 => 172,  394 => 168,  373 => 156,  342 => 23,  338 => 135,  329 => 131,  325 => 129,  323 => 128,  289 => 113,  286 => 112,  275 => 105,  270 => 102,  267 => 101,  262 => 98,  226 => 84,  207 => 266,  150 => 55,  351 => 141,  306 => 107,  303 => 122,  297 => 276,  202 => 263,  190 => 76,  803 => 187,  792 => 182,  784 => 179,  771 => 173,  745 => 476,  723 => 473,  706 => 148,  702 => 470,  698 => 145,  694 => 468,  690 => 139,  686 => 136,  682 => 465,  678 => 464,  673 => 462,  645 => 120,  630 => 455,  625 => 453,  621 => 452,  618 => 451,  616 => 450,  565 => 414,  547 => 411,  530 => 410,  520 => 89,  515 => 87,  165 => 60,  84 => 41,  58 => 15,  389 => 160,  380 => 160,  371 => 35,  367 => 155,  363 => 32,  361 => 146,  358 => 151,  353 => 121,  345 => 147,  343 => 146,  334 => 141,  326 => 138,  315 => 125,  307 => 128,  302 => 125,  290 => 5,  265 => 96,  259 => 103,  253 => 339,  210 => 267,  197 => 246,  184 => 230,  152 => 46,  127 => 35,  70 => 19,  175 => 58,  76 => 31,  53 => 5,  114 => 108,  233 => 301,  225 => 295,  218 => 95,  200 => 72,  170 => 84,  110 => 38,  1419 => 423,  1410 => 422,  1408 => 421,  1405 => 420,  1389 => 416,  1382 => 415,  1380 => 414,  1377 => 413,  1354 => 409,  1329 => 408,  1327 => 407,  1324 => 406,  1312 => 401,  1307 => 400,  1305 => 399,  1302 => 398,  1293 => 392,  1287 => 374,  1284 => 389,  1279 => 388,  1277 => 387,  1274 => 386,  1266 => 381,  1264 => 380,  1261 => 379,  1255 => 375,  1249 => 373,  1246 => 372,  1244 => 371,  1241 => 370,  1232 => 365,  1230 => 364,  1207 => 351,  1204 => 362,  1201 => 361,  1198 => 360,  1195 => 359,  1192 => 358,  1189 => 357,  1187 => 343,  1184 => 342,  1177 => 351,  1173 => 350,  1168 => 335,  1166 => 334,  1163 => 333,  1156 => 342,  1153 => 341,  1145 => 336,  1142 => 335,  1140 => 334,  1137 => 333,  1129 => 329,  1127 => 325,  1125 => 324,  1122 => 323,  1117 => 319,  1095 => 314,  1092 => 313,  1089 => 310,  1086 => 309,  1083 => 310,  1080 => 309,  1077 => 308,  1074 => 307,  1071 => 306,  1068 => 302,  1065 => 301,  1063 => 303,  1060 => 302,  1052 => 296,  1049 => 295,  1047 => 290,  1044 => 289,  1036 => 289,  1033 => 288,  1031 => 282,  1028 => 286,  1012 => 279,  1002 => 271,  999 => 270,  996 => 269,  993 => 268,  991 => 267,  988 => 266,  980 => 262,  977 => 261,  975 => 260,  972 => 259,  964 => 255,  961 => 254,  959 => 253,  956 => 252,  948 => 248,  945 => 247,  943 => 248,  940 => 245,  932 => 241,  929 => 240,  927 => 239,  924 => 238,  916 => 234,  913 => 233,  911 => 232,  908 => 231,  900 => 227,  897 => 226,  895 => 225,  892 => 224,  884 => 220,  882 => 219,  879 => 218,  871 => 214,  868 => 213,  866 => 212,  863 => 211,  855 => 207,  852 => 206,  850 => 205,  848 => 207,  845 => 203,  838 => 198,  828 => 197,  823 => 196,  820 => 195,  814 => 193,  811 => 192,  809 => 191,  806 => 488,  798 => 184,  796 => 183,  795 => 182,  794 => 181,  793 => 180,  788 => 484,  782 => 177,  779 => 176,  777 => 175,  774 => 174,  765 => 168,  761 => 167,  757 => 166,  753 => 165,  748 => 164,  742 => 160,  739 => 161,  737 => 158,  734 => 159,  718 => 155,  716 => 154,  713 => 153,  697 => 149,  695 => 148,  692 => 147,  675 => 463,  663 => 141,  656 => 461,  654 => 137,  649 => 121,  646 => 135,  628 => 134,  626 => 114,  623 => 132,  614 => 127,  611 => 126,  608 => 109,  602 => 449,  600 => 122,  595 => 121,  592 => 120,  589 => 104,  579 => 117,  577 => 116,  569 => 115,  566 => 114,  563 => 113,  560 => 112,  558 => 111,  555 => 96,  549 => 106,  541 => 91,  536 => 103,  532 => 102,  527 => 409,  525 => 408,  522 => 99,  513 => 94,  507 => 92,  504 => 91,  502 => 90,  499 => 89,  489 => 85,  487 => 76,  484 => 75,  476 => 79,  473 => 78,  470 => 77,  467 => 76,  465 => 75,  462 => 202,  446 => 197,  443 => 69,  441 => 196,  438 => 67,  429 => 188,  420 => 59,  418 => 58,  415 => 180,  405 => 49,  395 => 46,  386 => 159,  382 => 43,  378 => 157,  375 => 41,  370 => 40,  357 => 123,  354 => 32,  349 => 28,  335 => 21,  331 => 140,  327 => 114,  321 => 112,  318 => 111,  293 => 6,  291 => 102,  281 => 385,  279 => 413,  274 => 97,  271 => 371,  266 => 363,  263 => 362,  261 => 386,  257 => 384,  255 => 350,  250 => 338,  245 => 332,  242 => 354,  237 => 346,  222 => 294,  211 => 318,  206 => 301,  198 => 292,  188 => 90,  186 => 236,  178 => 64,  153 => 56,  148 => 65,  146 => 178,  126 => 144,  81 => 30,  356 => 328,  352 => 122,  348 => 140,  344 => 24,  340 => 145,  336 => 118,  332 => 20,  328 => 139,  324 => 113,  320 => 127,  316 => 16,  308 => 13,  304 => 9,  300 => 121,  296 => 121,  292 => 107,  288 => 4,  284 => 420,  280 => 104,  276 => 378,  272 => 102,  260 => 360,  256 => 96,  248 => 333,  244 => 136,  236 => 93,  232 => 88,  228 => 91,  216 => 79,  212 => 276,  194 => 245,  191 => 243,  185 => 66,  181 => 229,  172 => 62,  118 => 49,  113 => 38,  251 => 109,  234 => 344,  231 => 83,  213 => 78,  195 => 83,  192 => 82,  174 => 214,  161 => 199,  155 => 47,  134 => 158,  97 => 50,  137 => 63,  129 => 145,  104 => 87,  100 => 39,  90 => 27,  77 => 28,  65 => 17,  34 => 4,  23 => 1,  480 => 162,  474 => 161,  469 => 71,  461 => 70,  457 => 153,  453 => 199,  444 => 149,  440 => 148,  437 => 61,  435 => 146,  430 => 144,  427 => 143,  423 => 57,  413 => 134,  409 => 132,  407 => 131,  402 => 48,  398 => 129,  393 => 126,  387 => 164,  384 => 121,  381 => 120,  379 => 119,  374 => 36,  368 => 34,  365 => 111,  362 => 110,  360 => 34,  355 => 27,  341 => 118,  337 => 22,  322 => 101,  314 => 99,  312 => 124,  309 => 108,  305 => 95,  298 => 120,  294 => 90,  285 => 3,  283 => 100,  278 => 384,  268 => 370,  264 => 100,  258 => 351,  252 => 378,  247 => 369,  241 => 90,  229 => 85,  220 => 287,  214 => 319,  177 => 17,  169 => 207,  140 => 58,  132 => 51,  128 => 158,  107 => 37,  61 => 2,  273 => 377,  269 => 107,  254 => 92,  243 => 324,  240 => 323,  238 => 309,  235 => 308,  230 => 300,  227 => 298,  224 => 81,  221 => 96,  219 => 322,  217 => 286,  208 => 76,  204 => 264,  179 => 221,  159 => 193,  143 => 51,  135 => 53,  119 => 114,  102 => 30,  71 => 19,  67 => 18,  63 => 21,  59 => 6,  201 => 293,  196 => 92,  183 => 258,  171 => 213,  166 => 206,  163 => 82,  158 => 80,  156 => 192,  151 => 185,  142 => 62,  138 => 189,  136 => 165,  121 => 128,  117 => 39,  105 => 34,  91 => 29,  62 => 16,  49 => 12,  28 => 3,  93 => 28,  88 => 28,  78 => 24,  94 => 57,  89 => 35,  85 => 26,  75 => 22,  68 => 20,  56 => 14,  27 => 4,  38 => 5,  24 => 3,  87 => 26,  21 => 2,  44 => 11,  31 => 5,  25 => 3,  46 => 10,  26 => 3,  19 => 1,  79 => 32,  72 => 21,  69 => 11,  47 => 12,  40 => 8,  37 => 7,  22 => 2,  246 => 93,  157 => 10,  145 => 52,  139 => 166,  131 => 157,  123 => 42,  120 => 31,  115 => 40,  111 => 107,  108 => 33,  101 => 33,  98 => 29,  96 => 67,  83 => 31,  74 => 22,  66 => 12,  55 => 12,  52 => 12,  50 => 10,  43 => 9,  41 => 7,  35 => 7,  32 => 6,  29 => 5,  209 => 302,  203 => 73,  199 => 262,  193 => 285,  189 => 237,  187 => 75,  182 => 87,  176 => 220,  173 => 85,  168 => 61,  164 => 200,  162 => 59,  154 => 186,  149 => 179,  147 => 54,  144 => 173,  141 => 172,  133 => 173,  130 => 46,  125 => 42,  122 => 41,  116 => 113,  112 => 39,  109 => 102,  106 => 101,  103 => 98,  99 => 68,  95 => 34,  92 => 31,  86 => 46,  82 => 25,  80 => 24,  73 => 27,  64 => 10,  60 => 20,  57 => 20,  54 => 15,  51 => 37,  48 => 10,  45 => 9,  42 => 10,  39 => 10,  36 => 5,  33 => 6,  30 => 3,);
    }
}
