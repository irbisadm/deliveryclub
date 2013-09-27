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
        echo "<!DOCTYPE html>
<html ";
        // line 2
        $this->displayBlock('meta_lang', $context, $blocks);
        echo ">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"";
        // line 6
        $this->displayBlock('meta_description', $context, $blocks);
        echo "\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
    <meta name=\"author\" content=\"irbisadm\">

    <title>";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 11
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 17
        echo "
    ";
        // line 18
        $this->displayBlock('javascript_head', $context, $blocks);
        // line 23
        echo "
    <!--[if IE]>
    <script type=\"text/javascript\" src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/dcadmin/js/modernizr.custom.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/dcadmin/js/excanvas.js"), "html", null, true);
        echo "\"></script>
    <![endif]-->

    <!--[if IE 8]>
    <script src=\"http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE8.js\"></script>
    <link href=\"";
        // line 31
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
        // line 49
        $this->env->loadTemplate("DCAdminBundle:Default:menu.html.twig")->display($context);
        // line 50
        $this->env->loadTemplate("DCAdminBundle:Default:hightlights.html.twig")->display($context);
        // line 51
        echo "
<div class=\"contentainer_wrapper\">
    <div class=\"container-fluid\">
        <div class=\"row-fluid\">
            <div class=\"span12\">

                <div class=\"wrapper\">
                    ";
        // line 58
        $this->env->loadTemplate("DCAdminBundle:Default:sidebar_navigation.html.twig")->display($context);
        // line 59
        echo "                    <div class=\"content_wrapper\">

                        <div class=\"contents\">
                        ";
        // line 62
        $this->displayBlock('content', $context, $blocks);
        // line 64
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
        // line 84
        $this->displayBlock('javascript_footer', $context, $blocks);
        // line 122
        echo "</body>
</html>";
    }

    // line 2
    public function block_meta_lang($context, array $blocks = array())
    {
        echo "lang=\"en\"";
    }

    // line 6
    public function block_meta_description($context, array $blocks = array())
    {
        echo "A complete admin panel theme";
    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        echo "Deliveryclub admin";
    }

    // line 11
    public function block_stylesheet($context, array $blocks = array())
    {
        // line 12
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/dcadmin/css/bootstrap.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/dcadmin/css/bootstrap-responsive.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/dcadmin/css/style.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/dcadmin/css/plugins.css"), "html", null, true);
        echo "\">
    ";
    }

    // line 18
    public function block_javascript_head($context, array $blocks = array())
    {
        // line 19
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/dcadmin/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/dcadmin/js/jquery.isotope.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/dcadmin/js/jquery.infinitescroll.min.js"), "html", null, true);
        echo "\"></script>
    ";
    }

    // line 62
    public function block_content($context, array $blocks = array())
    {
        // line 63
        echo "                        ";
    }

    // line 84
    public function block_javascript_footer($context, array $blocks = array())
    {
        // line 85
        echo "<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/dcadmin/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/dcadmin/js/jquery.elastic.source.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/dcadmin/js/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/dcadmin/js/bootstrap-colorpicker.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/dcadmin/js/jquery.maskedinput-1.3.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/dcadmin/js/jquery.uniform.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/dcadmin/js/chosen.jquery.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/dcadmin/js/jquery.ibutton.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/dcadmin/js/jquery.ui.spinner.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/dcadmin/js/jquery.mousewheel.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/dcadmin/js/jquery.validationEngine-en.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/dcadmin/js/jquery.validationEngine.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/dcadmin/js/jquery.validate.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/dcadmin/js/jquery.smartWizard-2.0.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/dcadmin/js/jquery.filedrop.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/dcadmin/js/colResizable-1.3.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/dcadmin/js/jquery.tablesorter.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/dcadmin/js/jquery.dataTables.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/dcadmin/js/jshashtable-2.1_src.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/dcadmin/js/jquery.numberformatter-1.2.3.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/dcadmin/js/tmpl.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/dcadmin/js/jquery.dependClass-0.1.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/dcadmin/js/draggable-0.1.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/dcadmin/js/jquery.slider.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/dcadmin/js/fullcalendar.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/dcadmin/js/jquery.easytabs.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/dcadmin/js/jquery.cleditor.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/dcadmin/js/jquery.colorbox.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/dcadmin/js/blocksit.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/dcadmin/js/jquery.montage.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/dcadmin/js/raphael.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/dcadmin/js/jquery.embedly.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/dcadmin/js/flowplayer-3.2.11.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/dcadmin/js/flowplayer.controls-3.2.10.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/dcadmin/js/flowplayer.playlist-3.2.10.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 120
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
        return array (  351 => 120,  347 => 119,  343 => 118,  339 => 117,  335 => 116,  331 => 115,  327 => 114,  323 => 113,  319 => 112,  315 => 111,  311 => 110,  307 => 109,  303 => 108,  299 => 107,  295 => 106,  291 => 105,  287 => 104,  279 => 102,  275 => 101,  271 => 100,  267 => 99,  263 => 98,  259 => 97,  255 => 96,  251 => 95,  223 => 88,  215 => 86,  210 => 85,  207 => 84,  200 => 62,  194 => 21,  185 => 19,  160 => 11,  148 => 6,  137 => 122,  113 => 64,  104 => 58,  70 => 31,  58 => 25,  244 => 106,  239 => 92,  231 => 90,  228 => 98,  211 => 85,  202 => 83,  190 => 20,  181 => 79,  174 => 78,  172 => 14,  157 => 68,  153 => 66,  127 => 60,  97 => 50,  83 => 38,  52 => 18,  37 => 7,  96 => 4,  90 => 42,  77 => 43,  65 => 34,  34 => 8,  23 => 2,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 103,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 94,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 63,  132 => 61,  128 => 49,  111 => 62,  107 => 36,  61 => 28,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 93,  240 => 86,  238 => 85,  235 => 91,  230 => 82,  227 => 89,  224 => 71,  221 => 77,  219 => 87,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 69,  143 => 56,  135 => 84,  131 => 52,  119 => 42,  108 => 36,  102 => 32,  71 => 19,  67 => 29,  63 => 15,  59 => 14,  47 => 11,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 12,  158 => 67,  156 => 66,  151 => 63,  142 => 2,  138 => 64,  136 => 62,  123 => 47,  121 => 58,  117 => 44,  115 => 56,  105 => 48,  91 => 49,  69 => 25,  62 => 26,  49 => 17,  28 => 3,  98 => 31,  93 => 50,  88 => 52,  78 => 21,  43 => 10,  40 => 8,  101 => 47,  94 => 43,  89 => 20,  85 => 25,  79 => 37,  75 => 41,  68 => 32,  56 => 9,  50 => 11,  27 => 4,  32 => 3,  29 => 2,  38 => 6,  24 => 3,  87 => 46,  72 => 33,  66 => 24,  55 => 13,  41 => 8,  21 => 2,  44 => 13,  31 => 4,  25 => 3,  46 => 7,  35 => 5,  26 => 1,  22 => 2,  19 => 1,  209 => 82,  203 => 63,  199 => 67,  193 => 82,  189 => 71,  187 => 84,  182 => 18,  176 => 15,  173 => 65,  168 => 13,  164 => 72,  162 => 59,  154 => 10,  149 => 51,  147 => 58,  144 => 49,  141 => 65,  133 => 55,  130 => 64,  125 => 44,  122 => 43,  116 => 53,  112 => 52,  109 => 54,  106 => 59,  103 => 52,  99 => 31,  95 => 51,  92 => 21,  86 => 28,  82 => 22,  80 => 41,  73 => 19,  64 => 19,  60 => 32,  57 => 27,  54 => 23,  51 => 14,  48 => 13,  45 => 9,  42 => 7,  39 => 9,  36 => 6,  33 => 4,  30 => 7,);
    }
}
