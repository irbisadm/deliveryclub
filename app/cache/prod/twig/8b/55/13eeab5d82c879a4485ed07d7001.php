<?php

/* DCShowcaseBundle:Auth:login.html.twig */
class __TwigTemplate_8b5513eeab5d82c879a4485ed07d7001 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("DCShowcaseBundle:Layouts:main.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'stylesheets' => array($this, 'block_stylesheets'),
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

      <form class=\"form-signin\" style=\"\">
        <h2 class=\"form-signin-heading\">";
        // line 7
        echo $this->env->getExtension('translator')->getTranslator()->trans("Please sign in", array(), "messages");
        echo "</h2>
        <input type=\"text\" class=\"form-control\" placeholder=\"";
        // line 8
        echo $this->env->getExtension('translator')->getTranslator()->trans("Email address", array(), "messages");
        echo "\" autofocus>
        <input type=\"password\" class=\"form-control\" placeholder=\"";
        // line 9
        echo $this->env->getExtension('translator')->getTranslator()->trans("Password", array(), "messages");
        echo "\">
        <label class=\"checkbox\">
          <input type=\"checkbox\" value=\"remember-me\"> ";
        // line 11
        echo $this->env->getExtension('translator')->getTranslator()->trans("Remember me", array(), "messages");
        // line 12
        echo "        </label>
        <button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">";
        // line 13
        echo $this->env->getExtension('translator')->getTranslator()->trans("Sign in", array(), "messages");
        echo "</button>
      </form>

    </div> <!-- /container -->
";
    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 20
        echo "<style type=\"text/css\" media=\"screen\">
body {
  
  
  background-color: #eee;
}

.form-signin {
  max-width: 330px;
  padding: 15px;
  margin: 0 auto;
}
.form-signin .form-signin-heading,
.form-signin .checkbox {
  margin-bottom: 10px;
}
.form-signin .checkbox {
  font-weight: normal;
}
.form-signin .form-control {
  position: relative;
  font-size: 16px;
  height: auto;
  padding: 10px;
  -webkit-box-sizing: border-box;
     -moz-box-sizing: border-box;
          box-sizing: border-box;
}
.form-signin .form-control:focus {
  z-index: 2;
}
.form-signin input[type=\"text\"] {
  margin-bottom: -1px;
  border-bottom-left-radius: 0;
  border-bottom-right-radius: 0;
}
.form-signin input[type=\"password\"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
</style>
";
    }

    public function getTemplateName()
    {
        return "DCShowcaseBundle:Auth:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 20,  64 => 19,  55 => 13,  52 => 12,  50 => 11,  45 => 9,  41 => 8,  37 => 7,  32 => 4,  29 => 3,);
    }
}
