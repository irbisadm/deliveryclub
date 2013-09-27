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
            'content' => array($this, 'block_content'),
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
        echo " \t</head>
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
      <li>

      </li>
      <li>
        <a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("login");
        echo "\" title=\"\">
          <button type=\"button\" class=\"btn btn-success\" style=\"margin: 12px 20px 0 0;width:200px;\">
            ";
        // line 34
        echo $this->env->getExtension('translator')->getTranslator()->trans("Login/Register", array(), "messages");
        echo "</button>   
        </a>
      </li>
    </ul>
  </div><!-- /.navbar-collapse -->
</nav>

";
        // line 41
        $this->displayBlock('content', $context, $blocks);
        // line 43
        echo "
<script src=\"http://code.jquery.com/jquery-1.10.1.min.js\"></script>
<script src=\"/bundles/dcshowcase/js/bootstrap.js\" type=\"text/javascript\" charset=\"utf-8\"></script>
<script type=\"text/javascript\" charset=\"utf-8\">
\$(document).ready(function() {
  \$('[data-toggle=\"tooltip\"]').tooltip();
  \$('[data-toggle=\"popover\"]').popover();
});
</script>
";
        // line 52
        $this->displayBlock('javascripts', $context, $blocks);
        // line 54
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

    // line 41
    public function block_content($context, array $blocks = array())
    {
    }

    // line 52
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
        return array (  90 => 54,  77 => 43,  65 => 34,  34 => 8,  23 => 2,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 19,  67 => 15,  63 => 15,  59 => 14,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 23,  49 => 19,  28 => 3,  93 => 28,  88 => 52,  78 => 21,  94 => 28,  89 => 20,  85 => 25,  75 => 41,  68 => 14,  56 => 9,  27 => 4,  38 => 6,  24 => 3,  87 => 25,  21 => 2,  44 => 12,  31 => 5,  25 => 3,  46 => 7,  26 => 6,  19 => 1,  79 => 18,  72 => 16,  69 => 25,  47 => 9,  40 => 8,  37 => 10,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 52,  108 => 36,  101 => 6,  98 => 31,  96 => 4,  83 => 25,  74 => 14,  66 => 24,  55 => 15,  52 => 21,  50 => 10,  43 => 6,  41 => 5,  35 => 5,  32 => 6,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 41,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 41,  73 => 19,  64 => 17,  60 => 32,  57 => 11,  54 => 10,  51 => 14,  48 => 13,  45 => 17,  42 => 7,  39 => 9,  36 => 5,  33 => 4,  30 => 7,);
    }
}
