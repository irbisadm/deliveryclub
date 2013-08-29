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
        return array (  111 => 52,  106 => 41,  96 => 4,  88 => 52,  77 => 43,  75 => 41,  65 => 34,  60 => 32,  34 => 8,  27 => 4,  23 => 2,  141 => 65,  138 => 64,  132 => 69,  130 => 64,  116 => 53,  112 => 52,  105 => 48,  101 => 6,  94 => 43,  90 => 54,  83 => 38,  79 => 37,  72 => 33,  68 => 32,  61 => 28,  57 => 27,  32 => 6,  29 => 3,);
    }
}
