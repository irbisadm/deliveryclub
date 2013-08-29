<?php

/* SensioDistributionBundle:Configurator:check.html.twig */
class __TwigTemplate_42befdd60a3ec9bf15bbd8c89a040894 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SensioDistributionBundle::Configurator/layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        if (twig_length_filter($this->env, (isset($context["majors"]) ? $context["majors"] : $this->getContext($context, "majors")))) {
            // line 5
            echo "        <h1>Major Problems that need to be fixed now</h1>
        <p>
            We have detected <strong>";
            // line 7
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["majors"]) ? $context["majors"] : $this->getContext($context, "majors"))), "html", null, true);
            echo "</strong> major problems.
            You <em>must</em> fix them before continuing:
        </p>
        <ol>
            ";
            // line 11
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["majors"]) ? $context["majors"] : $this->getContext($context, "majors")));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 12
                echo "                <li>";
                echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "        </ol>
    ";
        }
        // line 16
        echo "
    ";
        // line 17
        if (twig_length_filter($this->env, (isset($context["minors"]) ? $context["minors"] : $this->getContext($context, "minors")))) {
            // line 18
            echo "        <h1>Some Recommendations</h1>

        <p>
            ";
            // line 21
            if (twig_length_filter($this->env, (isset($context["majors"]) ? $context["majors"] : $this->getContext($context, "majors")))) {
                // line 22
                echo "            Additionally, we
            ";
            } else {
                // line 24
                echo "            We
            ";
            }
            // line 26
            echo "            have detected some minor problems that we <em>recommend</em> you to fix to have a better Symfony
            experience:

            <ol>
                ";
            // line 30
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["minors"]) ? $context["minors"] : $this->getContext($context, "minors")));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 31
                echo "                    <li>";
                echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "            </ol>
        </p>

    ";
        }
        // line 37
        echo "
    ";
        // line 38
        if ((!twig_length_filter($this->env, (isset($context["majors"]) ? $context["majors"] : $this->getContext($context, "majors"))))) {
            // line 39
            echo "        <ul class=\"symfony_list\">
            <li><a href=\"";
            // line 40
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
            echo "\">Configure your Symfony Application online</a></li>
        </ul>
    ";
        }
    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator:check.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 38,  1352 => 388,  1343 => 387,  1341 => 386,  1338 => 385,  1322 => 381,  1315 => 380,  1313 => 379,  1310 => 378,  1287 => 374,  1262 => 373,  1260 => 372,  1257 => 371,  1245 => 366,  1240 => 365,  1238 => 364,  1235 => 363,  1226 => 357,  1220 => 355,  1217 => 354,  1212 => 353,  1210 => 352,  1207 => 351,  1200 => 346,  1191 => 344,  1187 => 343,  1184 => 342,  1181 => 341,  1179 => 340,  1176 => 339,  1168 => 335,  1166 => 334,  1163 => 333,  1157 => 329,  1151 => 327,  1148 => 326,  1146 => 325,  1143 => 324,  1134 => 319,  1132 => 318,  1109 => 317,  1106 => 316,  1103 => 315,  1100 => 314,  1097 => 313,  1094 => 312,  1091 => 311,  1089 => 310,  1086 => 309,  1079 => 305,  1075 => 304,  1070 => 303,  1068 => 302,  1065 => 301,  1058 => 296,  1055 => 295,  1047 => 290,  1044 => 289,  1042 => 288,  1039 => 287,  1031 => 282,  1027 => 281,  1023 => 280,  1020 => 279,  1018 => 278,  1015 => 277,  1007 => 273,  1005 => 269,  1003 => 268,  1000 => 267,  995 => 263,  973 => 258,  970 => 257,  967 => 256,  964 => 255,  961 => 254,  958 => 253,  955 => 252,  952 => 251,  949 => 250,  946 => 249,  943 => 248,  941 => 247,  938 => 246,  930 => 240,  927 => 239,  925 => 238,  922 => 237,  914 => 233,  911 => 232,  909 => 231,  906 => 230,  894 => 226,  891 => 225,  888 => 224,  885 => 223,  883 => 222,  880 => 221,  872 => 217,  869 => 216,  867 => 215,  864 => 214,  856 => 210,  853 => 209,  851 => 208,  848 => 207,  840 => 203,  837 => 202,  835 => 201,  832 => 200,  824 => 196,  821 => 195,  819 => 194,  816 => 193,  808 => 189,  805 => 188,  800 => 186,  789 => 181,  787 => 180,  776 => 175,  774 => 174,  763 => 169,  760 => 168,  758 => 167,  755 => 166,  747 => 162,  744 => 161,  740 => 159,  737 => 158,  730 => 153,  720 => 152,  715 => 151,  712 => 150,  703 => 147,  701 => 146,  688 => 138,  687 => 137,  685 => 135,  680 => 134,  674 => 132,  671 => 131,  669 => 130,  666 => 129,  657 => 123,  653 => 122,  649 => 121,  640 => 119,  634 => 117,  631 => 116,  629 => 115,  626 => 114,  610 => 110,  608 => 109,  605 => 108,  589 => 104,  587 => 103,  584 => 102,  567 => 98,  555 => 96,  548 => 93,  546 => 92,  541 => 91,  538 => 90,  518 => 88,  506 => 82,  503 => 81,  500 => 80,  494 => 78,  492 => 77,  487 => 76,  484 => 75,  481 => 74,  471 => 72,  459 => 69,  456 => 68,  450 => 64,  442 => 62,  433 => 60,  428 => 59,  426 => 58,  414 => 52,  405 => 49,  403 => 48,  400 => 47,  390 => 43,  388 => 42,  385 => 41,  377 => 37,  366 => 33,  350 => 26,  316 => 16,  313 => 15,  311 => 14,  308 => 13,  299 => 8,  271 => 371,  266 => 363,  260 => 360,  250 => 338,  245 => 332,  225 => 295,  215 => 277,  186 => 236,  146 => 178,  129 => 145,  126 => 144,  124 => 129,  114 => 108,  356 => 328,  339 => 316,  295 => 275,  20 => 1,  462 => 202,  449 => 198,  446 => 197,  441 => 196,  439 => 195,  431 => 189,  429 => 188,  422 => 184,  415 => 180,  408 => 50,  401 => 172,  394 => 168,  373 => 156,  348 => 140,  342 => 23,  338 => 135,  335 => 21,  329 => 131,  325 => 129,  323 => 128,  320 => 127,  289 => 113,  286 => 112,  275 => 105,  270 => 102,  267 => 101,  262 => 98,  256 => 96,  233 => 301,  226 => 84,  207 => 266,  200 => 72,  181 => 229,  150 => 55,  81 => 40,  357 => 123,  351 => 141,  344 => 24,  332 => 20,  327 => 114,  324 => 113,  318 => 111,  306 => 107,  303 => 122,  300 => 121,  297 => 276,  291 => 102,  263 => 362,  231 => 83,  212 => 276,  202 => 263,  190 => 76,  185 => 66,  174 => 214,  806 => 488,  803 => 187,  792 => 182,  788 => 484,  784 => 179,  771 => 173,  745 => 476,  742 => 160,  723 => 473,  706 => 148,  702 => 470,  698 => 145,  694 => 468,  690 => 139,  686 => 136,  682 => 465,  678 => 464,  675 => 463,  673 => 462,  656 => 461,  645 => 120,  630 => 455,  625 => 453,  621 => 452,  618 => 451,  616 => 450,  602 => 449,  565 => 414,  547 => 411,  530 => 410,  527 => 409,  525 => 408,  520 => 89,  515 => 87,  244 => 136,  188 => 90,  165 => 60,  153 => 56,  84 => 41,  58 => 14,  389 => 160,  386 => 159,  380 => 160,  378 => 157,  371 => 35,  367 => 155,  363 => 32,  361 => 146,  358 => 151,  353 => 121,  345 => 147,  343 => 146,  340 => 145,  334 => 141,  331 => 140,  328 => 139,  326 => 138,  321 => 112,  315 => 125,  307 => 128,  302 => 125,  296 => 121,  293 => 6,  290 => 5,  288 => 4,  281 => 385,  276 => 378,  274 => 97,  265 => 96,  259 => 103,  255 => 350,  253 => 339,  248 => 333,  232 => 88,  222 => 294,  216 => 79,  213 => 78,  210 => 267,  197 => 246,  194 => 245,  184 => 230,  170 => 84,  155 => 47,  152 => 46,  127 => 35,  90 => 27,  70 => 26,  191 => 243,  178 => 64,  175 => 58,  172 => 62,  161 => 199,  134 => 158,  118 => 49,  76 => 31,  113 => 38,  104 => 87,  100 => 39,  53 => 15,  97 => 54,  77 => 28,  65 => 17,  34 => 5,  23 => 2,  480 => 162,  474 => 161,  469 => 71,  461 => 70,  457 => 153,  453 => 199,  444 => 149,  440 => 148,  437 => 61,  435 => 146,  430 => 144,  427 => 143,  423 => 57,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 164,  384 => 121,  381 => 120,  379 => 119,  374 => 36,  368 => 34,  365 => 111,  362 => 110,  360 => 109,  355 => 27,  341 => 118,  337 => 22,  322 => 101,  314 => 99,  312 => 124,  309 => 108,  305 => 95,  298 => 120,  294 => 90,  285 => 3,  283 => 100,  278 => 384,  268 => 370,  264 => 84,  258 => 351,  252 => 80,  247 => 78,  241 => 90,  229 => 85,  220 => 287,  214 => 69,  177 => 65,  169 => 207,  140 => 58,  132 => 51,  128 => 49,  107 => 37,  61 => 2,  273 => 377,  269 => 107,  254 => 92,  243 => 324,  240 => 323,  238 => 309,  235 => 308,  230 => 300,  227 => 298,  224 => 81,  221 => 77,  219 => 76,  217 => 286,  208 => 76,  204 => 264,  179 => 221,  159 => 193,  143 => 51,  135 => 53,  119 => 114,  102 => 30,  71 => 19,  67 => 18,  63 => 21,  59 => 13,  201 => 92,  196 => 92,  183 => 82,  171 => 213,  166 => 206,  163 => 82,  158 => 80,  156 => 192,  151 => 185,  142 => 59,  138 => 54,  136 => 165,  121 => 128,  117 => 39,  105 => 34,  91 => 56,  62 => 16,  49 => 12,  28 => 3,  93 => 28,  88 => 30,  78 => 24,  94 => 57,  89 => 47,  85 => 23,  75 => 24,  68 => 12,  56 => 12,  27 => 4,  38 => 7,  24 => 3,  87 => 26,  21 => 2,  44 => 11,  31 => 4,  25 => 3,  46 => 13,  26 => 6,  19 => 1,  79 => 32,  72 => 21,  69 => 13,  47 => 11,  40 => 8,  37 => 7,  22 => 2,  246 => 93,  157 => 56,  145 => 52,  139 => 166,  131 => 157,  123 => 42,  120 => 31,  115 => 40,  111 => 107,  108 => 33,  101 => 33,  98 => 29,  96 => 67,  83 => 31,  74 => 22,  66 => 12,  55 => 38,  52 => 12,  50 => 18,  43 => 11,  41 => 7,  35 => 9,  32 => 6,  29 => 5,  209 => 82,  203 => 73,  199 => 262,  193 => 73,  189 => 237,  187 => 75,  182 => 87,  176 => 220,  173 => 85,  168 => 61,  164 => 200,  162 => 59,  154 => 186,  149 => 179,  147 => 54,  144 => 173,  141 => 172,  133 => 55,  130 => 46,  125 => 42,  122 => 41,  116 => 113,  112 => 39,  109 => 102,  106 => 101,  103 => 44,  99 => 68,  95 => 34,  92 => 31,  86 => 46,  82 => 26,  80 => 27,  73 => 27,  64 => 3,  60 => 20,  57 => 20,  54 => 19,  51 => 37,  48 => 16,  45 => 11,  42 => 11,  39 => 10,  36 => 5,  33 => 4,  30 => 3,);
    }
}
