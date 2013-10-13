<?php

/* DCAdminBundle:Default:index.html.twig */
class __TwigTemplate_73121b7c5d1ebb40ee972b75825fad4c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'meta_lang' => array($this, 'block_meta_lang'),
            'meta_description' => array($this, 'block_meta_description'),
            'title' => array($this, 'block_title'),
            'stylesheet' => array($this, 'block_stylesheet'),
            'javascript_head' => array($this, 'block_javascript_head'),
            'content' => array($this, 'block_content'),
            'javascript_footer' => array($this, 'block_javascript_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if (array_key_exists("form", $context)) {
            // line 2
            $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "DCAdminBundle:Form:fields.html.twig"));
        }
        // line 4
        ob_start();
        // line 5
        echo "<!DOCTYPE html>
<html ";
        // line 6
        $this->displayBlock('meta_lang', $context, $blocks);
        echo ">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"";
        // line 10
        $this->displayBlock('meta_description', $context, $blocks);
        echo "\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
    <meta name=\"author\" content=\"irbisadm\">

    <title>";
        // line 14
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 15
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 21
        echo "
    ";
        // line 22
        $this->displayBlock('javascript_head', $context, $blocks);
        // line 27
        echo "
    <!--[if IE]>
    <script type=\"text/javascript\" src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/dcadmin/js/modernizr.custom.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/dcadmin/js/excanvas.js"), "html", null, true);
        echo "\"></script>
    <![endif]-->

    <!--[if IE 8]>
    <script src=\"http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE8.js\"></script>
    <link href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/dcadmin/css/ie8.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <![endif]-->

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
    <![endif]-->

    <!--[if gte IE 9]>
    <style type=\"text/css\">
        .gradient ul li {
            filter: none;
        }
    </style>
    <![endif]-->
</head>

<body>
";
        // line 53
        $this->env->loadTemplate("DCAdminBundle:Default:menu.html.twig")->display($context);
        // line 54
        $this->env->loadTemplate("DCAdminBundle:Default:hightlights.html.twig")->display($context);
        // line 55
        echo "
<div class=\"contentainer_wrapper\">
    <div class=\"container-fluid\">
        <div class=\"row-fluid\">
            <div class=\"span12\">

                <div class=\"wrapper\">
                    ";
        // line 62
        $this->env->loadTemplate("DCAdminBundle:Default:sidebar_navigation.html.twig")->display($context);
        // line 63
        echo "                    <div class=\"content_wrapper\">

                        <div class=\"contents\">
                        ";
        // line 66
        $this->displayBlock('content', $context, $blocks);
        // line 68
        echo "                        </div><!-- content end -->

                    </div><!-- content_wrapper end -->
                </div><!-- wrapper end -->
            </div>
        </div>
    </div>
</div><!-- container_wrapper end -->

<div class=\"footer_wrapper\">
    <div class=\"container-fluid\">
        <div class=\"row-fluid\">
            <div class=\"span12\">
                <div class=\"footer\">
                    All right reserved &reg; by <a href=\"http://deliveryclub.cz\">Deliveryclub</a>
                </div><!-- footer end -->
            </div>
        </div>
    </div>
</div><!-- footer_wrapper end -->
";
        // line 88
        $this->displayBlock('javascript_footer', $context, $blocks);
        // line 126
        echo "</body>
</html>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 6
    public function block_meta_lang($context, array $blocks = array())
    {
        echo "lang=\"en\"";
    }

    // line 10
    public function block_meta_description($context, array $blocks = array())
    {
        echo "A complete admin panel theme";
    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        echo "Deliveryclub admin";
    }

    // line 15
    public function block_stylesheet($context, array $blocks = array())
    {
        // line 16
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/dcadmin/css/bootstrap.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/dcadmin/css/bootstrap-responsive.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/dcadmin/css/style.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/dcadmin/css/plugins.css"), "html", null, true);
        echo "\">
    ";
    }

    // line 22
    public function block_javascript_head($context, array $blocks = array())
    {
        // line 23
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/dcadmin/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/dcadmin/js/jquery.isotope.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/dcadmin/js/jquery.infinitescroll.min.js"), "html", null, true);
        echo "\"></script>
    ";
    }

    // line 66
    public function block_content($context, array $blocks = array())
    {
        // line 67
        echo "                        ";
    }

    // line 88
    public function block_javascript_footer($context, array $blocks = array())
    {
        // line 89
        echo "<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/dcadmin/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/dcadmin/js/jquery.elastic.source.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/dcadmin/js/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/dcadmin/js/bootstrap-colorpicker.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/dcadmin/js/jquery.maskedinput-1.3.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/dcadmin/js/jquery.uniform.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/dcadmin/js/chosen.jquery.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/dcadmin/js/jquery.ibutton.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/dcadmin/js/jquery.ui.spinner.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/dcadmin/js/jquery.mousewheel.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/dcadmin/js/jquery.validationEngine-en.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/dcadmin/js/jquery.validationEngine.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/dcadmin/js/jquery.validate.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/dcadmin/js/jquery.smartWizard-2.0.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/dcadmin/js/jquery.filedrop.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/dcadmin/js/colResizable-1.3.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/dcadmin/js/jquery.tablesorter.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/dcadmin/js/jquery.dataTables.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/dcadmin/js/jshashtable-2.1_src.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/dcadmin/js/jquery.numberformatter-1.2.3.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/dcadmin/js/tmpl.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/dcadmin/js/jquery.dependClass-0.1.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/dcadmin/js/draggable-0.1.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/dcadmin/js/jquery.slider.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/dcadmin/js/fullcalendar.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/dcadmin/js/jquery.easytabs.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/dcadmin/js/jquery.cleditor.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/dcadmin/js/jquery.colorbox.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/dcadmin/js/blocksit.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/dcadmin/js/jquery.montage.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/dcadmin/js/raphael.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/dcadmin/js/jquery.embedly.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/dcadmin/js/flowplayer-3.2.11.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/dcadmin/js/flowplayer.controls-3.2.10.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/dcadmin/js/flowplayer.playlist-3.2.10.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/dcadmin/js/script.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "DCAdminBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  356 => 123,  352 => 122,  348 => 121,  344 => 120,  340 => 119,  336 => 118,  332 => 117,  328 => 116,  324 => 115,  320 => 114,  316 => 113,  308 => 111,  304 => 110,  300 => 109,  296 => 108,  292 => 107,  288 => 106,  284 => 105,  280 => 104,  276 => 103,  272 => 102,  260 => 99,  256 => 98,  248 => 96,  244 => 95,  236 => 93,  232 => 92,  228 => 91,  216 => 88,  212 => 67,  194 => 23,  191 => 22,  185 => 19,  181 => 18,  172 => 16,  118 => 66,  113 => 63,  251 => 109,  234 => 101,  231 => 100,  213 => 86,  195 => 83,  192 => 82,  174 => 78,  161 => 70,  155 => 67,  134 => 62,  97 => 50,  137 => 63,  129 => 61,  104 => 47,  100 => 54,  90 => 54,  77 => 35,  65 => 29,  34 => 4,  23 => 2,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 124,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 112,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 101,  264 => 100,  258 => 81,  252 => 97,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 17,  169 => 15,  140 => 64,  132 => 51,  128 => 49,  107 => 36,  61 => 27,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 94,  238 => 102,  235 => 74,  230 => 82,  227 => 81,  224 => 90,  221 => 92,  219 => 89,  217 => 75,  208 => 68,  204 => 84,  179 => 69,  159 => 69,  143 => 56,  135 => 53,  119 => 42,  102 => 55,  71 => 32,  67 => 31,  63 => 15,  59 => 22,  201 => 92,  196 => 90,  183 => 80,  171 => 61,  166 => 73,  163 => 14,  158 => 67,  156 => 66,  151 => 6,  142 => 88,  138 => 63,  136 => 56,  121 => 46,  117 => 57,  105 => 53,  91 => 27,  62 => 23,  49 => 19,  28 => 2,  93 => 48,  88 => 52,  78 => 36,  94 => 28,  89 => 47,  85 => 25,  75 => 41,  68 => 14,  56 => 21,  27 => 4,  38 => 6,  24 => 3,  87 => 25,  21 => 2,  44 => 12,  31 => 4,  25 => 3,  46 => 14,  26 => 1,  19 => 1,  79 => 18,  72 => 16,  69 => 30,  47 => 9,  40 => 8,  37 => 7,  22 => 2,  246 => 107,  157 => 10,  145 => 46,  139 => 45,  131 => 68,  123 => 59,  120 => 68,  115 => 52,  111 => 62,  108 => 36,  101 => 6,  98 => 53,  96 => 4,  83 => 25,  74 => 14,  66 => 24,  55 => 13,  52 => 12,  50 => 14,  43 => 10,  41 => 8,  35 => 5,  32 => 3,  29 => 2,  209 => 66,  203 => 25,  199 => 24,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 79,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 126,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 41,  103 => 32,  99 => 51,  95 => 28,  92 => 21,  86 => 28,  82 => 37,  80 => 41,  73 => 19,  64 => 19,  60 => 27,  57 => 11,  54 => 15,  51 => 14,  48 => 13,  45 => 9,  42 => 7,  39 => 9,  36 => 6,  33 => 5,  30 => 7,);
    }
}
