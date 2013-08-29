<?php

/* DCShowcaseBundle:Layouts:main.html.twig */
class __TwigTemplate_269e72e10b9c793eef4bb23d710a61c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "<html>
\t<head>
 \t\t<title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
 \t\t<link href=\"/bundles/dcshowcase/css/bootstrap.css\" rel=\"stylesheet\" type=\"text/css\" />
";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 8
        echo "<style type=\"text/css\" media=\"screen\">
</style>
 \t</head>
 \t<body>
<nav class=\"navbar navbar-default\" role=\"navigation\">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class=\"navbar-header\">
    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-ex1-collapse\">
      <span class=\"sr-only\">Toggle navigation</span>
      <span class=\"icon-bar\"></span>
      <span class=\"icon-bar\"></span>
      <span class=\"icon-bar\"></span>
    </button>
    <a class=\"navbar-brand\" href=\"#\">
\t\t<img src=\"/bundles/dcshowcase/img/logo.png\" >
\t\t\tDeliveryClub
    </a>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class=\"collapse navbar-collapse navbar-ex1-collapse\">
    <ul class=\"nav navbar-nav navbar-right\">
    <a href=\"/login\" title=\"\">
      <button type=\"button\" class=\"btn btn-success\" style=\"margin: 28px 50px 0 0;width:200px;\">
        ";
        // line 32
        echo $this->env->getExtension('translator')->getTranslator()->trans("Login/Register", array(), "messages");
        echo "</button>   
    </a>
    </ul>
  </div><!-- /.navbar-collapse -->
</nav>

";
        // line 38
        $this->displayBlock('header', $context, $blocks);
        // line 40
        $this->displayBlock('content', $context, $blocks);
        // line 42
        echo "\t\t<footer>
";
        // line 43
        $this->displayBlock('footer', $context, $blocks);
        // line 45
        echo "\t\t</footer>
";
        // line 46
        $this->displayBlock('javascripts', $context, $blocks);
        // line 48
        echo "\t</body>
</html> 
";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 38
    public function block_header($context, array $blocks = array())
    {
    }

    // line 40
    public function block_content($context, array $blocks = array())
    {
    }

    // line 43
    public function block_footer($context, array $blocks = array())
    {
    }

    // line 46
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "DCShowcaseBundle:Layouts:main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 6,  83 => 46,  34 => 6,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  111 => 43,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  131 => 52,  119 => 42,  108 => 36,  102 => 32,  71 => 38,  67 => 15,  63 => 15,  59 => 14,  47 => 9,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  123 => 47,  121 => 46,  117 => 44,  115 => 43,  105 => 40,  91 => 4,  69 => 25,  62 => 32,  49 => 19,  28 => 3,  98 => 31,  93 => 28,  88 => 6,  78 => 43,  43 => 6,  40 => 8,  101 => 38,  94 => 28,  89 => 20,  85 => 48,  79 => 18,  75 => 42,  68 => 14,  56 => 9,  50 => 10,  27 => 4,  32 => 4,  29 => 4,  38 => 6,  24 => 3,  87 => 25,  72 => 16,  66 => 24,  55 => 15,  41 => 5,  21 => 2,  44 => 12,  31 => 5,  25 => 2,  46 => 7,  35 => 5,  26 => 6,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 46,  112 => 42,  109 => 34,  106 => 40,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 45,  73 => 40,  64 => 17,  60 => 13,  57 => 11,  54 => 10,  51 => 14,  48 => 13,  45 => 8,  42 => 7,  39 => 9,  36 => 8,  33 => 4,  30 => 7,);
    }
}
