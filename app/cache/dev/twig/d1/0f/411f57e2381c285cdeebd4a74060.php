<?php

/* WebProfilerBundle:Router:panel.html.twig */
class __TwigTemplate_d10f411f57e2381c285cdeebd4a74060 extends Twig_Template
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
        return array (  53 => 17,  114 => 72,  233 => 102,  225 => 97,  218 => 95,  200 => 81,  170 => 75,  110 => 54,  104 => 37,  1419 => 423,  1410 => 422,  1408 => 421,  1405 => 420,  1389 => 416,  1382 => 415,  1380 => 414,  1377 => 413,  1354 => 409,  1329 => 408,  1327 => 407,  1324 => 406,  1312 => 401,  1307 => 400,  1305 => 399,  1302 => 398,  1293 => 392,  1287 => 390,  1284 => 389,  1279 => 388,  1277 => 387,  1274 => 386,  1266 => 381,  1264 => 380,  1261 => 379,  1255 => 375,  1249 => 373,  1246 => 372,  1244 => 371,  1241 => 370,  1232 => 365,  1230 => 364,  1207 => 363,  1204 => 362,  1201 => 361,  1198 => 360,  1195 => 359,  1192 => 358,  1189 => 357,  1187 => 356,  1184 => 355,  1177 => 351,  1173 => 350,  1168 => 349,  1166 => 348,  1163 => 347,  1156 => 342,  1153 => 341,  1145 => 336,  1142 => 335,  1140 => 334,  1137 => 333,  1129 => 329,  1127 => 325,  1125 => 324,  1122 => 323,  1117 => 319,  1095 => 314,  1092 => 313,  1089 => 312,  1086 => 311,  1083 => 310,  1080 => 309,  1077 => 308,  1074 => 307,  1071 => 306,  1068 => 305,  1065 => 304,  1063 => 303,  1060 => 302,  1052 => 296,  1049 => 295,  1047 => 294,  1044 => 293,  1036 => 289,  1033 => 288,  1031 => 287,  1028 => 286,  1012 => 279,  1002 => 271,  999 => 270,  996 => 269,  993 => 268,  991 => 267,  988 => 266,  980 => 262,  977 => 261,  975 => 260,  972 => 259,  964 => 255,  961 => 254,  959 => 253,  956 => 252,  948 => 248,  945 => 247,  943 => 246,  940 => 245,  932 => 241,  929 => 240,  927 => 239,  924 => 238,  916 => 234,  913 => 233,  911 => 232,  908 => 231,  900 => 227,  897 => 226,  895 => 225,  892 => 224,  884 => 220,  882 => 219,  879 => 218,  871 => 214,  868 => 213,  866 => 212,  863 => 211,  855 => 207,  852 => 206,  850 => 205,  848 => 204,  845 => 203,  838 => 198,  828 => 197,  823 => 196,  820 => 195,  814 => 193,  811 => 192,  809 => 191,  806 => 190,  798 => 184,  796 => 183,  795 => 182,  794 => 181,  793 => 180,  788 => 179,  782 => 177,  779 => 176,  777 => 175,  774 => 174,  765 => 168,  761 => 167,  757 => 166,  753 => 165,  748 => 164,  742 => 162,  739 => 161,  737 => 160,  734 => 159,  718 => 155,  716 => 154,  713 => 153,  697 => 149,  695 => 148,  692 => 147,  675 => 143,  663 => 141,  656 => 138,  654 => 137,  649 => 136,  646 => 135,  628 => 134,  626 => 133,  623 => 132,  614 => 127,  611 => 126,  608 => 125,  602 => 123,  600 => 122,  595 => 121,  592 => 120,  589 => 119,  579 => 117,  577 => 116,  569 => 115,  566 => 114,  563 => 113,  560 => 112,  558 => 111,  555 => 110,  549 => 106,  541 => 104,  536 => 103,  532 => 102,  527 => 101,  525 => 100,  522 => 99,  513 => 94,  507 => 92,  504 => 91,  502 => 90,  499 => 89,  489 => 85,  487 => 84,  484 => 83,  476 => 79,  473 => 78,  470 => 77,  467 => 76,  465 => 75,  462 => 74,  446 => 70,  443 => 69,  441 => 68,  438 => 67,  429 => 62,  420 => 59,  418 => 58,  415 => 57,  405 => 49,  395 => 46,  386 => 44,  382 => 43,  378 => 42,  375 => 41,  370 => 40,  357 => 33,  354 => 32,  349 => 28,  335 => 23,  331 => 22,  327 => 20,  321 => 18,  318 => 17,  293 => 3,  291 => 2,  281 => 419,  279 => 413,  274 => 406,  271 => 405,  266 => 397,  263 => 395,  261 => 386,  257 => 384,  255 => 379,  250 => 370,  245 => 355,  242 => 354,  237 => 346,  222 => 323,  211 => 318,  206 => 301,  198 => 292,  188 => 265,  186 => 259,  178 => 251,  153 => 68,  148 => 65,  146 => 64,  126 => 153,  81 => 57,  356 => 123,  352 => 122,  348 => 121,  344 => 25,  340 => 119,  336 => 118,  332 => 117,  328 => 116,  324 => 19,  320 => 114,  316 => 113,  308 => 10,  304 => 9,  300 => 109,  296 => 108,  292 => 107,  288 => 1,  284 => 420,  280 => 104,  276 => 412,  272 => 102,  260 => 99,  256 => 98,  248 => 96,  244 => 95,  236 => 93,  232 => 341,  228 => 91,  216 => 320,  212 => 67,  194 => 23,  191 => 79,  185 => 19,  181 => 252,  172 => 16,  118 => 146,  113 => 40,  100 => 36,  251 => 109,  234 => 344,  231 => 100,  213 => 86,  195 => 83,  192 => 82,  174 => 78,  161 => 73,  155 => 67,  134 => 62,  129 => 59,  97 => 50,  90 => 42,  77 => 25,  65 => 22,  34 => 4,  23 => 2,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 60,  413 => 134,  409 => 132,  407 => 131,  402 => 48,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 39,  365 => 111,  362 => 110,  360 => 34,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 112,  309 => 97,  305 => 95,  298 => 6,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 101,  264 => 100,  258 => 81,  252 => 378,  247 => 369,  241 => 77,  229 => 340,  220 => 70,  214 => 319,  177 => 17,  169 => 15,  140 => 55,  132 => 69,  128 => 158,  107 => 36,  61 => 1,  273 => 96,  269 => 398,  254 => 92,  243 => 88,  240 => 347,  238 => 104,  235 => 74,  230 => 82,  227 => 98,  224 => 332,  221 => 96,  219 => 322,  217 => 75,  208 => 87,  204 => 84,  179 => 77,  159 => 69,  143 => 202,  135 => 53,  119 => 57,  102 => 55,  71 => 19,  67 => 17,  63 => 15,  59 => 22,  201 => 293,  196 => 286,  183 => 258,  171 => 238,  166 => 231,  163 => 74,  158 => 223,  156 => 218,  151 => 211,  142 => 62,  138 => 189,  136 => 174,  121 => 147,  117 => 57,  105 => 66,  91 => 34,  62 => 21,  49 => 19,  28 => 6,  93 => 82,  88 => 46,  78 => 48,  94 => 43,  89 => 47,  85 => 25,  75 => 54,  68 => 32,  56 => 21,  27 => 6,  38 => 6,  24 => 3,  87 => 33,  21 => 2,  44 => 12,  31 => 3,  25 => 3,  46 => 14,  26 => 1,  19 => 1,  79 => 37,  72 => 33,  69 => 42,  47 => 15,  40 => 11,  37 => 13,  22 => 2,  246 => 107,  157 => 10,  145 => 46,  139 => 45,  131 => 159,  123 => 152,  120 => 68,  115 => 43,  111 => 110,  108 => 109,  101 => 89,  98 => 50,  96 => 35,  83 => 66,  74 => 14,  66 => 24,  55 => 13,  52 => 12,  50 => 16,  43 => 10,  41 => 8,  35 => 5,  32 => 3,  29 => 2,  209 => 302,  203 => 299,  199 => 24,  193 => 285,  189 => 71,  187 => 84,  182 => 78,  176 => 245,  173 => 244,  168 => 237,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 126,  141 => 190,  133 => 173,  130 => 64,  125 => 58,  122 => 43,  116 => 56,  112 => 52,  109 => 34,  106 => 99,  103 => 98,  99 => 51,  95 => 28,  92 => 47,  86 => 67,  82 => 22,  80 => 41,  73 => 23,  64 => 19,  60 => 20,  57 => 19,  54 => 15,  51 => 30,  48 => 13,  45 => 14,  42 => 7,  39 => 6,  36 => 9,  33 => 5,  30 => 7,);
    }
}
