<?php

/* DCShowcaseBundle:Default:index.html.twig */
class __TwigTemplate_0c499f1624da2f434447865e29b9192e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("DCShowcaseBundle:Layouts:main.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "DCShowcaseBundle:Layouts:main.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"container\">

      <div class=\"row row-offcanvas row-offcanvas-left\">
      \t<div class=\"col-xs-6 col-sm-3 sidebar-offcanvas\" id=\"sidebar\" role=\"navigation\">
          <div class=\"well sidebar-nav\">
            <ul class=\"nav\">
              <li><a href=\"#\">Most Popular</a></li>
              <li><a href=\"#\">Fish</a></li>
              <li><a href=\"#\">Meat</a></li>
              <li><a href=\"#\">Side dishes</a></li>
            </ul>
          </div><!--/.well -->
        </div><!--/span-->
        <div class=\"col-xs-12 col-sm-9\">
          <p class=\"pull-right visible-xs\">
            <button type=\"button\" class=\"btn btn-primary btn-xs\" data-toggle=\"offcanvas\">Toggle nav</button>
          </p>
          <div class=\"jumbotron\">
            <h1>Hello, world!</h1>
            <p></p>
          </div>
          <div class=\"row\">
            <div class=\"col-6 col-sm-6 col-lg-4 tipped\" data-toggle=\"popover\" data-content=\"There must be a description of meals\" data-original-title=\"Meals name\" data-placement=\"left\">
              <img src=\"";
        // line 27
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("DCShowcaseBundle:Image:resize", array("path" => "/uploads/05_Ea_xKqNw.jpg", "width" => 500)));
        echo "\" style=\"width:100%\" alt=\"\">
              <button type=\"button\" class=\"btn btn-success pull-right\">";
        // line 28
        echo $this->env->getExtension('translator')->getTranslator()->trans("Order", array(), "messages");
        echo "</button>
\t            <span class=\"pull-left\">Food name</span>
            </div><!--/span-->
            <div class=\"col-6 col-sm-6 col-lg-4\">
              <img src=\"";
        // line 32
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("DCShowcaseBundle:Image:resize", array("path" => "/uploads/3Z2NgYiigjM.jpg", "width" => 500)));
        echo "\" style=\"width:100%\" alt=\"\">
\t            <button type=\"button\" class=\"btn btn-success pull-right\">";
        // line 33
        echo $this->env->getExtension('translator')->getTranslator()->trans("Order", array(), "messages");
        echo "</button>
\t            <span class=\"pull-left\">Food name</span>
            </div><!--/span-->
            <div class=\"col-6 col-sm-6 col-lg-4\">
              <img src=\"";
        // line 37
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("DCShowcaseBundle:Image:resize", array("path" => "/uploads/60D5BTD6YEM.jpg", "width" => 500)));
        echo "\" style=\"width:100%\" alt=\"\">
              <button type=\"button\" class=\"btn btn-success pull-right\">";
        // line 38
        echo $this->env->getExtension('translator')->getTranslator()->trans("Order", array(), "messages");
        echo "</button>
\t            <span class=\"pull-left\">Food name</span>
            </div><!--/span-->
            <div class=\"col-6 col-sm-6 col-lg-4\">
              <img src=\"";
        // line 42
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("DCShowcaseBundle:Image:resize", array("path" => "/uploads/c0zCZZeV6Ug.jpg", "width" => 500)));
        echo "\" style=\"width:100%\" alt=\"\">
              <button type=\"button\" class=\"btn btn-success pull-right\">";
        // line 43
        echo $this->env->getExtension('translator')->getTranslator()->trans("Order", array(), "messages");
        echo "</button>
\t            <span class=\"pull-left\">Food name</span>
            </div><!--/span-->
            <div class=\"col-6 col-sm-6 col-lg-4\">
              <img src=\"";
        // line 47
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("DCShowcaseBundle:Image:resize", array("path" => "/uploads/mubTm6A97qc.jpg", "width" => 500)));
        echo "\" style=\"width:100%\" alt=\"\">
              <button type=\"button\" class=\"btn btn-success pull-right\">";
        // line 48
        echo $this->env->getExtension('translator')->getTranslator()->trans("Order", array(), "messages");
        echo "</button>
\t            <span class=\"pull-left\">Food name</span>
            </div><!--/span-->
            <div class=\"col-6 col-sm-6 col-lg-4\">
              <img src=\"";
        // line 52
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("DCShowcaseBundle:Image:resize", array("path" => "/uploads/Pb5W10C_tjI.jpg", "width" => 500)));
        echo "\" style=\"width:100%\" alt=\"\">
              <button type=\"button\" class=\"btn btn-success pull-right\">";
        // line 53
        echo $this->env->getExtension('translator')->getTranslator()->trans("Order", array(), "messages");
        echo "</button>
\t            <span class=\"pull-left\">Food name</span>
            </div><!--/span-->
          </div><!--/row-->
        </div><!--/span-->

        
      </div><!--/row-->

      <hr>

    ";
        // line 64
        $this->displayBlock('footer', $context, $blocks);
        // line 69
        echo "
    </div>
";
    }

    // line 64
    public function block_footer($context, array $blocks = array())
    {
        // line 65
        echo "      <footer>
        <p>© Company 2013</p>
      </footer>
\t";
    }

    public function getTemplateName()
    {
        return "DCShowcaseBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 38,  52 => 12,  37 => 7,  96 => 4,  90 => 42,  77 => 43,  65 => 34,  34 => 8,  23 => 2,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 69,  128 => 49,  111 => 52,  107 => 36,  61 => 28,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  131 => 52,  119 => 42,  108 => 36,  102 => 32,  71 => 19,  67 => 20,  63 => 15,  59 => 14,  47 => 9,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 64,  136 => 56,  123 => 47,  121 => 46,  117 => 44,  115 => 43,  105 => 48,  91 => 27,  69 => 25,  62 => 23,  49 => 19,  28 => 3,  98 => 31,  93 => 28,  88 => 52,  78 => 21,  43 => 6,  40 => 8,  101 => 47,  94 => 43,  89 => 20,  85 => 25,  79 => 37,  75 => 41,  68 => 32,  56 => 9,  50 => 11,  27 => 4,  32 => 4,  29 => 3,  38 => 6,  24 => 3,  87 => 25,  72 => 33,  66 => 24,  55 => 13,  41 => 8,  21 => 2,  44 => 12,  31 => 4,  25 => 3,  46 => 7,  35 => 5,  26 => 6,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 65,  133 => 55,  130 => 64,  125 => 44,  122 => 43,  116 => 53,  112 => 52,  109 => 34,  106 => 41,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 41,  73 => 19,  64 => 19,  60 => 32,  57 => 27,  54 => 10,  51 => 14,  48 => 13,  45 => 9,  42 => 7,  39 => 9,  36 => 5,  33 => 4,  30 => 7,);
    }
}