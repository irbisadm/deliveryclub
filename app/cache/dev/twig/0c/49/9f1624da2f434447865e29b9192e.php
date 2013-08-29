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
        return array (  141 => 65,  138 => 64,  132 => 69,  130 => 64,  116 => 53,  112 => 52,  105 => 48,  101 => 47,  94 => 43,  90 => 42,  83 => 38,  79 => 37,  72 => 33,  68 => 32,  61 => 28,  57 => 27,  32 => 4,  29 => 3,);
    }
}
