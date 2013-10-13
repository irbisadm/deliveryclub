<?php

/* WebProfilerBundle:Collector:memory.html.twig */
class __TwigTemplate_fccf66f3714528a637b5cfc1ad6e2bda extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("@WebProfiler/Profiler/layout.html.twig");

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        <span>
            <img width=\"13\" height=\"28\" alt=\"Memory Usage\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA0AAAAcBAMAAABITyhxAAAAJ1BMVEXNzc3///////////////////////8/Pz////////////+NjY0/Pz9lMO+OAAAADHRSTlMAABAgMDhAWXCvv9e8JUuyAAAAQ0lEQVQI12MQBAMBBmLpMwoMDAw6BxjOOABpHyCdAKRzsNDp5eXl1KBh5oHBAYY9YHoDQ+cqIFjZwGCaBgSpBrjcCwCZgkUHKKvX+wAAAABJRU5ErkJggg==\">
            <span>";
        // line 7
        echo twig_escape_filter($this->env, sprintf("%.1f", (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "memory") / 1024) / 1024)), "html", null, true);
        echo " MB</span>
        </span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 10
        echo "    ";
        ob_start();
        // line 11
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>Memory usage</b>
            <span>";
        // line 13
        echo twig_escape_filter($this->env, sprintf("%.1f", (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "memory") / 1024) / 1024)), "html", null, true);
        echo " / ";
        echo ((($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "memoryLimit") == (-1))) ? ("&infin;") : (twig_escape_filter($this->env, sprintf("%.1f", (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "memoryLimit") / 1024) / 1024)))));
        echo " MB</span>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 16
        echo "    ";
        $this->env->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig")->display(array_merge($context, array("link" => false)));
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:memory.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  351 => 120,  306 => 107,  303 => 106,  297 => 104,  202 => 77,  190 => 76,  803 => 487,  792 => 485,  784 => 482,  771 => 481,  745 => 476,  723 => 473,  706 => 472,  702 => 470,  698 => 469,  694 => 468,  690 => 467,  686 => 466,  682 => 465,  678 => 464,  673 => 462,  645 => 460,  630 => 455,  625 => 453,  621 => 452,  618 => 451,  616 => 450,  565 => 414,  547 => 411,  530 => 410,  520 => 406,  515 => 404,  165 => 83,  84 => 40,  58 => 14,  389 => 160,  380 => 158,  371 => 156,  367 => 155,  363 => 126,  361 => 152,  358 => 151,  353 => 121,  345 => 147,  343 => 146,  334 => 141,  326 => 138,  315 => 110,  307 => 128,  302 => 125,  290 => 119,  265 => 96,  259 => 103,  253 => 100,  210 => 77,  197 => 69,  184 => 63,  152 => 46,  127 => 35,  70 => 15,  175 => 58,  76 => 34,  53 => 17,  114 => 72,  233 => 102,  225 => 97,  218 => 95,  200 => 81,  170 => 84,  110 => 54,  1419 => 423,  1410 => 422,  1408 => 421,  1405 => 420,  1389 => 416,  1382 => 415,  1380 => 414,  1377 => 413,  1354 => 409,  1329 => 408,  1327 => 407,  1324 => 406,  1312 => 401,  1307 => 400,  1305 => 399,  1302 => 398,  1293 => 392,  1287 => 390,  1284 => 389,  1279 => 388,  1277 => 387,  1274 => 386,  1266 => 381,  1264 => 380,  1261 => 379,  1255 => 375,  1249 => 373,  1246 => 372,  1244 => 371,  1241 => 370,  1232 => 365,  1230 => 364,  1207 => 363,  1204 => 362,  1201 => 361,  1198 => 360,  1195 => 359,  1192 => 358,  1189 => 357,  1187 => 356,  1184 => 355,  1177 => 351,  1173 => 350,  1168 => 349,  1166 => 348,  1163 => 347,  1156 => 342,  1153 => 341,  1145 => 336,  1142 => 335,  1140 => 334,  1137 => 333,  1129 => 329,  1127 => 325,  1125 => 324,  1122 => 323,  1117 => 319,  1095 => 314,  1092 => 313,  1089 => 312,  1086 => 311,  1083 => 310,  1080 => 309,  1077 => 308,  1074 => 307,  1071 => 306,  1068 => 305,  1065 => 304,  1063 => 303,  1060 => 302,  1052 => 296,  1049 => 295,  1047 => 294,  1044 => 293,  1036 => 289,  1033 => 288,  1031 => 287,  1028 => 286,  1012 => 279,  1002 => 271,  999 => 270,  996 => 269,  993 => 268,  991 => 267,  988 => 266,  980 => 262,  977 => 261,  975 => 260,  972 => 259,  964 => 255,  961 => 254,  959 => 253,  956 => 252,  948 => 248,  945 => 247,  943 => 246,  940 => 245,  932 => 241,  929 => 240,  927 => 239,  924 => 238,  916 => 234,  913 => 233,  911 => 232,  908 => 231,  900 => 227,  897 => 226,  895 => 225,  892 => 224,  884 => 220,  882 => 219,  879 => 218,  871 => 214,  868 => 213,  866 => 212,  863 => 211,  855 => 207,  852 => 206,  850 => 205,  848 => 204,  845 => 203,  838 => 198,  828 => 197,  823 => 196,  820 => 195,  814 => 193,  811 => 192,  809 => 191,  806 => 488,  798 => 184,  796 => 183,  795 => 182,  794 => 181,  793 => 180,  788 => 484,  782 => 177,  779 => 176,  777 => 175,  774 => 174,  765 => 168,  761 => 167,  757 => 166,  753 => 165,  748 => 164,  742 => 475,  739 => 161,  737 => 160,  734 => 159,  718 => 155,  716 => 154,  713 => 153,  697 => 149,  695 => 148,  692 => 147,  675 => 463,  663 => 141,  656 => 461,  654 => 137,  649 => 136,  646 => 135,  628 => 134,  626 => 133,  623 => 132,  614 => 127,  611 => 126,  608 => 125,  602 => 449,  600 => 122,  595 => 121,  592 => 120,  589 => 119,  579 => 117,  577 => 116,  569 => 115,  566 => 114,  563 => 113,  560 => 112,  558 => 111,  555 => 110,  549 => 106,  541 => 104,  536 => 103,  532 => 102,  527 => 409,  525 => 408,  522 => 99,  513 => 94,  507 => 92,  504 => 91,  502 => 90,  499 => 89,  489 => 85,  487 => 84,  484 => 83,  476 => 79,  473 => 78,  470 => 77,  467 => 76,  465 => 75,  462 => 74,  446 => 70,  443 => 69,  441 => 68,  438 => 67,  429 => 62,  420 => 59,  418 => 58,  415 => 57,  405 => 49,  395 => 46,  386 => 159,  382 => 43,  378 => 157,  375 => 41,  370 => 40,  357 => 123,  354 => 32,  349 => 28,  335 => 23,  331 => 140,  327 => 114,  321 => 112,  318 => 111,  293 => 120,  291 => 102,  281 => 114,  279 => 413,  274 => 97,  271 => 405,  266 => 397,  263 => 95,  261 => 386,  257 => 384,  255 => 93,  250 => 370,  245 => 355,  242 => 354,  237 => 346,  222 => 83,  211 => 318,  206 => 301,  198 => 292,  188 => 90,  186 => 259,  178 => 59,  153 => 77,  148 => 65,  146 => 64,  126 => 153,  81 => 57,  356 => 123,  352 => 122,  348 => 121,  344 => 119,  340 => 145,  336 => 118,  332 => 116,  328 => 139,  324 => 113,  320 => 114,  316 => 113,  308 => 10,  304 => 9,  300 => 105,  296 => 121,  292 => 107,  288 => 101,  284 => 420,  280 => 104,  276 => 111,  272 => 102,  260 => 99,  256 => 98,  248 => 97,  244 => 136,  236 => 93,  232 => 88,  228 => 91,  216 => 79,  212 => 78,  194 => 68,  191 => 67,  185 => 74,  181 => 252,  172 => 57,  118 => 49,  113 => 48,  251 => 109,  234 => 344,  231 => 83,  213 => 78,  195 => 83,  192 => 82,  174 => 65,  161 => 63,  155 => 47,  134 => 39,  97 => 50,  137 => 63,  129 => 59,  104 => 32,  100 => 39,  90 => 42,  77 => 25,  65 => 22,  34 => 5,  23 => 2,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 60,  413 => 134,  409 => 132,  407 => 131,  402 => 48,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 39,  365 => 111,  362 => 110,  360 => 34,  355 => 150,  341 => 118,  337 => 103,  322 => 101,  314 => 99,  312 => 109,  309 => 108,  305 => 95,  298 => 6,  294 => 90,  285 => 89,  283 => 100,  278 => 98,  268 => 101,  264 => 100,  258 => 94,  252 => 378,  247 => 369,  241 => 93,  229 => 87,  220 => 70,  214 => 319,  177 => 17,  169 => 15,  140 => 58,  132 => 51,  128 => 158,  107 => 36,  61 => 15,  273 => 96,  269 => 107,  254 => 92,  243 => 92,  240 => 347,  238 => 104,  235 => 85,  230 => 82,  227 => 86,  224 => 81,  221 => 96,  219 => 322,  217 => 75,  208 => 76,  204 => 84,  179 => 77,  159 => 69,  143 => 51,  135 => 53,  119 => 40,  102 => 24,  71 => 32,  67 => 14,  63 => 15,  59 => 16,  201 => 293,  196 => 92,  183 => 258,  171 => 238,  166 => 54,  163 => 82,  158 => 80,  156 => 62,  151 => 59,  142 => 62,  138 => 189,  136 => 48,  121 => 50,  117 => 39,  105 => 25,  91 => 34,  62 => 27,  49 => 11,  28 => 3,  93 => 82,  88 => 25,  78 => 48,  94 => 21,  89 => 47,  85 => 24,  75 => 19,  68 => 30,  56 => 21,  27 => 3,  38 => 7,  24 => 3,  87 => 41,  21 => 2,  44 => 10,  31 => 4,  25 => 3,  46 => 10,  26 => 1,  19 => 1,  79 => 21,  72 => 18,  69 => 17,  47 => 11,  40 => 11,  37 => 13,  22 => 2,  246 => 96,  157 => 10,  145 => 52,  139 => 49,  131 => 45,  123 => 61,  120 => 31,  115 => 52,  111 => 47,  108 => 109,  101 => 31,  98 => 30,  96 => 37,  83 => 33,  74 => 14,  66 => 24,  55 => 13,  52 => 12,  50 => 22,  43 => 12,  41 => 8,  35 => 6,  32 => 5,  29 => 2,  209 => 302,  203 => 73,  199 => 93,  193 => 285,  189 => 66,  187 => 75,  182 => 87,  176 => 86,  173 => 85,  168 => 237,  164 => 59,  162 => 57,  154 => 60,  149 => 51,  147 => 75,  144 => 42,  141 => 73,  133 => 173,  130 => 41,  125 => 42,  122 => 41,  116 => 57,  112 => 36,  109 => 35,  106 => 51,  103 => 98,  99 => 23,  95 => 28,  92 => 27,  86 => 67,  82 => 19,  80 => 32,  73 => 33,  64 => 23,  60 => 20,  57 => 19,  54 => 15,  51 => 13,  48 => 13,  45 => 14,  42 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 5,);
    }
}
