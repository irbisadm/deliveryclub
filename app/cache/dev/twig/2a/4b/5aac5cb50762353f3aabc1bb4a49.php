<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_2a4b5aac5cb50762353f3aabc1bb4a49 extends Twig_Template
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
        echo ".sf-reset .traces {
    padding-bottom: 14px;
}
.sf-reset .traces li {
    font-size: 12px;
    color: #868686;
    padding: 5px 4px;
    list-style-type: decimal;
    margin-left: 20px;
    white-space: break-word;
}
.sf-reset #logs .traces li.error {
    font-style: normal;
    color: #AA3333;
    background: #f9ecec;
}
.sf-reset #logs .traces li.warning {
    font-style: normal;
    background: #ffcc00;
}
/* fix for Opera not liking empty <li> */
.sf-reset .traces li:after {
    content: \"\\00A0\";
}
.sf-reset .trace {
    border: 1px solid #D3D3D3;
    padding: 10px;
    overflow: auto;
    margin: 10px 0 20px;
}
.sf-reset .block-exception {
    border-radius: 16px;
    margin-bottom: 20px;
    background-color: #f6f6f6;
    border: 1px solid #dfdfdf;
    padding: 30px 28px;
    word-wrap: break-word;
    overflow: hidden;
}
.sf-reset .block-exception div {
    color: #313131;
    font-size: 10px;
}
.sf-reset .block-exception-detected .illustration-exception,
.sf-reset .block-exception-detected .text-exception {
    float: left;
}
.sf-reset .block-exception-detected .illustration-exception {
    width: 152px;
}
.sf-reset .block-exception-detected .text-exception {
    width: 670px;
    padding: 30px 44px 24px 46px;
    position: relative;
}
.sf-reset .text-exception .open-quote,
.sf-reset .text-exception .close-quote {
    position: absolute;
}
.sf-reset .open-quote {
    top: 0;
    left: 0;
}
.sf-reset .close-quote {
    bottom: 0;
    right: 50px;
}
.sf-reset .block-exception p {
    font-family: Arial, Helvetica, sans-serif;
}
.sf-reset .block-exception p a,
.sf-reset .block-exception p a:hover {
    color: #565656;
}
.sf-reset .logs h2 {
    float: left;
    width: 654px;
}
.sf-reset .error-count {
    float: right;
    width: 170px;
    text-align: right;
}
.sf-reset .error-count span {
    display: inline-block;
    background-color: #aacd4e;
    border-radius: 6px;
    padding: 4px;
    color: white;
    margin-right: 2px;
    font-size: 11px;
    font-weight: bold;
}
.sf-reset .toggle {
    vertical-align: middle;
}
.sf-reset .linked ul,
.sf-reset .linked li {
    display: inline;
}
.sf-reset #output-content {
    color: #000;
    font-size: 12px;
}
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
    }

    public function getDebugInfo()
    {
        return array (  462 => 202,  449 => 198,  446 => 197,  441 => 196,  439 => 195,  431 => 189,  429 => 188,  422 => 184,  415 => 180,  408 => 176,  401 => 172,  394 => 168,  373 => 156,  348 => 140,  342 => 137,  338 => 135,  329 => 131,  325 => 129,  320 => 127,  289 => 113,  286 => 112,  270 => 102,  262 => 98,  256 => 96,  233 => 87,  226 => 84,  150 => 55,  81 => 23,  357 => 123,  344 => 119,  332 => 116,  324 => 113,  318 => 111,  306 => 107,  300 => 121,  297 => 104,  212 => 78,  806 => 488,  803 => 487,  792 => 485,  788 => 484,  784 => 482,  771 => 481,  745 => 476,  742 => 475,  723 => 473,  706 => 472,  702 => 470,  698 => 469,  694 => 468,  690 => 467,  686 => 466,  682 => 465,  678 => 464,  675 => 463,  673 => 462,  656 => 461,  645 => 460,  630 => 455,  625 => 453,  621 => 452,  618 => 451,  616 => 450,  602 => 449,  565 => 414,  547 => 411,  530 => 410,  527 => 409,  525 => 408,  520 => 406,  515 => 404,  188 => 90,  165 => 60,  84 => 24,  389 => 160,  386 => 159,  380 => 160,  378 => 157,  371 => 156,  367 => 155,  363 => 126,  361 => 146,  358 => 151,  353 => 121,  345 => 147,  340 => 145,  334 => 141,  328 => 139,  326 => 138,  321 => 112,  302 => 125,  296 => 121,  293 => 120,  290 => 119,  288 => 101,  281 => 114,  276 => 111,  274 => 97,  265 => 96,  253 => 100,  248 => 94,  232 => 88,  222 => 83,  216 => 79,  213 => 78,  197 => 71,  184 => 63,  170 => 84,  155 => 47,  152 => 46,  191 => 69,  178 => 64,  175 => 58,  161 => 63,  134 => 47,  118 => 49,  76 => 25,  100 => 39,  53 => 12,  351 => 141,  347 => 119,  343 => 146,  339 => 117,  335 => 134,  331 => 140,  327 => 114,  323 => 128,  319 => 112,  315 => 125,  311 => 110,  307 => 128,  303 => 122,  299 => 107,  295 => 106,  291 => 102,  287 => 104,  279 => 102,  275 => 105,  271 => 100,  267 => 101,  263 => 95,  259 => 103,  255 => 93,  251 => 95,  223 => 88,  215 => 86,  210 => 77,  207 => 75,  200 => 72,  194 => 70,  185 => 66,  160 => 11,  148 => 6,  137 => 122,  113 => 38,  104 => 32,  70 => 19,  58 => 14,  244 => 136,  239 => 92,  231 => 83,  228 => 98,  211 => 85,  202 => 77,  190 => 76,  181 => 65,  174 => 65,  172 => 62,  153 => 56,  127 => 35,  97 => 50,  90 => 27,  77 => 25,  65 => 22,  34 => 5,  23 => 2,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 199,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 164,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 143,  341 => 118,  337 => 103,  322 => 101,  314 => 99,  312 => 124,  309 => 108,  305 => 95,  298 => 120,  294 => 90,  285 => 89,  283 => 100,  278 => 106,  268 => 85,  264 => 84,  258 => 94,  252 => 80,  247 => 94,  241 => 90,  229 => 85,  220 => 81,  214 => 69,  177 => 65,  169 => 60,  140 => 58,  132 => 61,  128 => 49,  107 => 36,  61 => 17,  273 => 96,  269 => 107,  254 => 92,  243 => 92,  240 => 86,  238 => 85,  235 => 85,  230 => 82,  227 => 86,  224 => 81,  221 => 77,  219 => 87,  217 => 75,  208 => 76,  204 => 72,  179 => 69,  159 => 69,  143 => 51,  135 => 84,  119 => 40,  102 => 33,  71 => 19,  67 => 20,  63 => 18,  59 => 14,  201 => 92,  196 => 92,  183 => 82,  171 => 61,  166 => 54,  163 => 82,  158 => 80,  156 => 58,  151 => 59,  142 => 2,  138 => 64,  136 => 48,  121 => 50,  117 => 39,  105 => 34,  91 => 33,  62 => 27,  49 => 11,  28 => 3,  93 => 50,  88 => 32,  78 => 21,  94 => 21,  89 => 20,  85 => 24,  75 => 19,  68 => 30,  56 => 9,  27 => 3,  38 => 6,  24 => 3,  87 => 41,  21 => 2,  44 => 10,  31 => 4,  25 => 5,  46 => 10,  26 => 1,  19 => 1,  79 => 21,  72 => 18,  69 => 17,  47 => 11,  40 => 11,  37 => 7,  22 => 2,  246 => 93,  157 => 68,  145 => 52,  139 => 49,  131 => 45,  123 => 42,  120 => 31,  115 => 56,  111 => 47,  108 => 36,  101 => 31,  98 => 30,  96 => 30,  83 => 33,  74 => 14,  66 => 24,  55 => 13,  52 => 12,  50 => 22,  43 => 9,  41 => 8,  35 => 5,  32 => 5,  29 => 2,  209 => 82,  203 => 73,  199 => 93,  193 => 82,  189 => 66,  187 => 75,  182 => 87,  176 => 63,  173 => 85,  168 => 61,  164 => 72,  162 => 59,  154 => 60,  149 => 51,  147 => 54,  144 => 42,  141 => 51,  133 => 55,  130 => 46,  125 => 42,  122 => 41,  116 => 39,  112 => 36,  109 => 35,  106 => 51,  103 => 52,  99 => 31,  95 => 60,  92 => 27,  86 => 54,  82 => 28,  80 => 27,  73 => 24,  64 => 17,  60 => 20,  57 => 19,  54 => 23,  51 => 13,  48 => 13,  45 => 9,  42 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
