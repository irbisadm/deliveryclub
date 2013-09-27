<?php

/* DCAdminBundle:Default:header.html.twig */
class __TwigTemplate_4a833e6c4289ab1cc5f75576b28000bd extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"A complete admin panel theme\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
    <meta name=\"author\" content=\"smronju\">

    <title>Dashboard</title>
    <link rel=\"stylesheet\" href=\"css/bootstrap.css\"/>
    <link rel=\"stylesheet\" href=\"css/bootstrap-responsive.css\"/>
    <link rel=\"stylesheet\" href=\"css/style.css\"/>
    <link rel=\"stylesheet\" href=\"css/plugins.css\">

    <script type=\"text/javascript\" src=\"js/jquery.min.js\"></script>
    <script type=\"text/javascript\" src=\"js/jquery.isotope.min.js\"></script>
    <script type=\"text/javascript\" src=\"js/jquery.infinitescroll.min.js\"></script>

    <!--[if IE]>
    <script type=\"text/javascript\" src=\"js/modernizr.custom.js\"></script>
    <script type=\"text/javascript\" src=\"js/excanvas.js\"></script>
    <![endif]-->

    <!--[if IE 8]>
    <script src=\"http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE8.js\"></script>
    <link href=\"css/ie8.css\" rel=\"stylesheet\">
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

<div class=\"header_wrapper\">
    <div class=\"container-fluid\">
        <div class=\"row-fluid\">
            <a class=\"logo\" title=\"\" href=\"#\"><img alt=\"\" src=\"img/logo.png\"></a>
            <ul class=\"user_nav\">
                <li><span>&nbsp;</span></li>
                <li>
                    <a href=\"#\" title=\"Support\" rel=\"tooltip\" data-toggle=\"dropdown\" class=\"icon_support tips menuDrop\">
                        <span class=\"badge badge-warning\">5</span>
                    </a>

                    <ul class=\"dropdown-menu pull-right gradient user_dropdown\">
                        <li class=\"list\">
                            <div class=\"list_title\">
                                How may I start my job?
                                <span>Aug 1, 2012 by <a href=\"#\">username</a></span>
                            </div>

                            <div class=\"list_action\">
                                <div class=\"btn-toolbar\">
                                    <div class=\"btn-group\">
                                        <button class=\"btn btn-mini\"><img src=\"img/icons/gray/glyphicons_027_search.png\" class=\"i_action_view\" alt=\"View\"/></button>
                                        <button class=\"btn btn-mini\"><img src=\"img/icons/gray/glyphicons_016_bin.png\" class=\"i_action_delete\" alt=\"Delete\"/></button>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class=\"list\">
                            <div class=\"list_title\">
                                How can i do this and that?
                                <span>Jul 31, 2012 by <a href=\"#\">username</a></span>
                            </div>
                            <div class=\"list_action\">
                                <div class=\"btn-toolbar\">
                                    <div class=\"btn-group\">
                                        <button class=\"btn btn-mini\"><img src=\"img/icons/gray/glyphicons_027_search.png\" class=\"i_action_view\" alt=\"View\"/></button>
                                        <button class=\"btn btn-mini\"><img src=\"img/icons/gray/glyphicons_016_bin.png\" class=\"i_action_delete\" alt=\"Delete\"/></button>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class=\"list\">
                            <div class=\"list_title\">
                                How do they do it!
                                <span>Jul 30, 2012 by <a href=\"#\">username</a></span>
                            </div>
                            <div class=\"list_action\">
                                <div class=\"btn-toolbar\">
                                    <div class=\"btn-group\">
                                        <button class=\"btn btn-mini\"><img src=\"img/icons/gray/glyphicons_027_search.png\" class=\"i_action_view\" alt=\"View\"/></button>
                                        <button class=\"btn btn-mini\"><img src=\"img/icons/gray/glyphicons_016_bin.png\" class=\"i_action_delete\" alt=\"Delete\"/></button>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class=\"list list_hidden\">
                            <div class=\"list_title\">
                                Resolved ticket!
                                <span>Jul 18, 2012 by <a href=\"#\">username</a></span>
                            </div>
                            <div class=\"list_action\">
                                <div class=\"btn-toolbar\">
                                    <div class=\"btn-group\">
                                        <button class=\"btn btn-mini\"><img src=\"img/icons/gray/glyphicons_027_search.png\" class=\"i_action_view\" alt=\"View\"/></button>
                                        <button class=\"btn btn-mini\"><img src=\"img/icons/gray/glyphicons_016_bin.png\" class=\"i_action_delete\" alt=\"Delete\"/></button>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class=\"list list_hidden\">
                            <div class=\"list_title\">
                                Another resolved ticket.
                                <span>Jun 16, 2012 by <a href=\"#\">username</a></span>
                            </div>
                            <div class=\"list_action\">
                                <div class=\"btn-toolbar\">
                                    <div class=\"btn-group\">
                                        <button class=\"btn btn-mini\"><img src=\"img/icons/gray/glyphicons_027_search.png\" class=\"i_action_view\" alt=\"View\"/></button>
                                        <button class=\"btn btn-mini\"><img src=\"img/icons/gray/glyphicons_016_bin.png\" class=\"i_action_delete\" alt=\"Delete\"/></button>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class=\"list list_all\">
                            <div class=\"list_expand\">
                                <a href=\"#\">Show all support tickets</a>
                            </div>
                        </li>

                    </ul>
                </li>

                <li>
                    <a href=\"#\" title=\"Messages\" data-toggle=\"dropdown\" rel=\"tooltip\" class=\"tips icon_mail menuDrop\">
                        <span class=\"badge badge-info\">3</span>
                    </a>


                    <ul class=\"dropdown-menu pull-right gradient user_dropdown\">
                        <li class=\"list new\">
                            <div class=\"list_title\">
                                <div class=\"message\">
                                    From: <span>40m ago by <a href=\"#\">Benjamiin</a></span>
                                    <a href=\"#\" class=\"subject\">Getting Started on Zend Framework</a>
                                    <p>Vitae dicta sunt explicabo. Nemo enim dicta ut et.</p>
                                </div>
                            </div>
                            <div class=\"list_action\">
                                <div class=\"btn-toolbar\">
                                    <div class=\"btn-group\">
                                        <button class=\"btn btn-mini\"><img src=\"img/icons/gray/glyphicons_027_search.png\" class=\"i_action_view\" alt=\"View\"/></button>
                                        <button class=\"btn btn-mini\"><img src=\"img/icons/gray/glyphicons_016_bin.png\" class=\"i_action_delete\" alt=\"Delete\"/></button>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class=\"list new\">
                            <div class=\"list_title\">
                                <div class=\"message\">
                                    From: <span>2 hours ago by <a href=\"#\">Tim</a></span>
                                    <a href=\"#\" class=\"subject\">Thank you for using bolt.</a>
                                    <p>Hi,Eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                            </div>
                            <div class=\"list_action\">
                                <div class=\"btn-toolbar\">
                                    <div class=\"btn-group\">
                                        <button class=\"btn btn-mini\"><img src=\"img/icons/gray/glyphicons_027_search.png\" class=\"i_action_view\" alt=\"View\"/></button>
                                        <button class=\"btn btn-mini\"><img src=\"img/icons/gray/glyphicons_016_bin.png\" class=\"i_action_delete\" alt=\"Delete\"/></button>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class=\"list\">
                            <div class=\"list_title\">
                                <div class=\"message\">
                                    From: <span>40m ago <a href=\"#\">Katherine Kate</a></span>
                                    <p>Lorem ipsum dolor sit amet...</p>
                                </div>
                            </div>
                            <div class=\"list_action\">
                                <div class=\"btn-toolbar\">
                                    <div class=\"btn-group\">
                                        <button class=\"btn btn-mini\"><img src=\"img/icons/gray/glyphicons_027_search.png\" class=\"i_action_view\" alt=\"View\"/></button>
                                        <button class=\"btn btn-mini\"><img src=\"img/icons/gray/glyphicons_016_bin.png\" class=\"i_action_delete\" alt=\"Delete\"/></button>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class=\"list list_hidden\">
                            <div class=\"list_title\">
                                <div class=\"message\">
                                    From: <span>Yesterday <a href=\"#\">Tim</a></span>
                                    <a href=\"\" class=\"subject\">Events for the next month</a>
                                    <p>Hi,Eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                            </div>
                            <div class=\"list_action\">
                                <div class=\"btn-toolbar\">
                                    <div class=\"btn-group\">
                                        <button class=\"btn btn-mini\"><img src=\"img/icons/gray/glyphicons_027_search.png\" class=\"i_action_view\" alt=\"View\"/></button>
                                        <button class=\"btn btn-mini\"><img src=\"img/icons/gray/glyphicons_016_bin.png\" class=\"i_action_delete\" alt=\"Delete\"/></button>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class=\"list list_all\">
                            <div class=\"list_expand\">
                                <a href=\"#\">Show all old messages</a>
                            </div>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href=\"#\" rel=\"tooltip\" title=\"Search\" class=\"user_search tips icon_search\"></a>

                    <div class=\"search\">
                        <form method=\"post\" action=\"\" class=\"search_form\">
                            <div class=\"input-append input_box\">
                                <input type=\"text\" id=\"appendedInputButton\" class=\"input-small\"><button type=\"button\" class=\"btn\">Go!</button>
                            </div>
                        </form>
                    </div>
                </li>

                <li>
                    <a href=\"#\" title=\"Settings\" data-toggle=\"dropdown\" rel=\"tooltip\" class=\"tips icon_settings menuDrop\"></a>

                    <ul class=\"dropdown-menu pull-right gradient user_dropdown\">
                        <li><a href=\"#\"><i class=\"icon-user\"></i>Profile</a></li>
                        <li><a href=\"#\"><i class=\"icon-cog\"></i>Account settings</a></li>
                        <li><a href=\"index.html\"> <i class=\"icon-share-alt\"></i>Logout</a></li>
                    </ul>
                </li>

                <li>
                    <a href=\"index.html\" title=\"Logout\" rel=\"tooltip\" class=\"tips icon_logout\"></a>
                </li>
                <li><span>&nbsp;</span></li>
            </ul><!-- user_nav end -->
        </div>
    </div>
</div><!-- header_wrapper end -->
";
    }

    public function getTemplateName()
    {
        return "DCAdminBundle:Default:header.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  351 => 120,  347 => 119,  343 => 118,  339 => 117,  335 => 116,  331 => 115,  327 => 114,  323 => 113,  319 => 112,  315 => 111,  311 => 110,  307 => 109,  303 => 108,  299 => 107,  295 => 106,  291 => 105,  287 => 104,  279 => 102,  275 => 101,  271 => 100,  267 => 99,  263 => 98,  259 => 97,  255 => 96,  251 => 95,  223 => 88,  215 => 86,  210 => 85,  207 => 84,  200 => 62,  194 => 21,  185 => 19,  160 => 11,  148 => 6,  137 => 122,  113 => 72,  104 => 66,  70 => 31,  58 => 25,  244 => 106,  239 => 92,  231 => 90,  228 => 98,  211 => 85,  202 => 83,  190 => 20,  181 => 79,  174 => 78,  172 => 14,  157 => 68,  153 => 66,  127 => 60,  97 => 50,  83 => 38,  52 => 18,  37 => 7,  96 => 4,  90 => 42,  77 => 48,  65 => 34,  34 => 8,  23 => 2,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 103,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 94,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 63,  132 => 61,  128 => 49,  111 => 62,  107 => 36,  61 => 28,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 93,  240 => 86,  238 => 85,  235 => 91,  230 => 82,  227 => 89,  224 => 71,  221 => 77,  219 => 87,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 69,  143 => 56,  135 => 84,  131 => 52,  119 => 42,  108 => 36,  102 => 32,  71 => 19,  67 => 29,  63 => 15,  59 => 36,  47 => 11,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 12,  158 => 67,  156 => 66,  151 => 63,  142 => 2,  138 => 64,  136 => 62,  123 => 47,  121 => 58,  117 => 44,  115 => 56,  105 => 48,  91 => 49,  69 => 25,  62 => 26,  49 => 17,  28 => 3,  98 => 31,  93 => 50,  88 => 52,  78 => 21,  43 => 10,  40 => 8,  101 => 47,  94 => 43,  89 => 20,  85 => 25,  79 => 37,  75 => 41,  68 => 42,  56 => 9,  50 => 30,  27 => 4,  32 => 3,  29 => 2,  38 => 6,  24 => 3,  87 => 46,  72 => 33,  66 => 24,  55 => 13,  41 => 8,  21 => 2,  44 => 13,  31 => 4,  25 => 3,  46 => 7,  35 => 5,  26 => 1,  22 => 2,  19 => 1,  209 => 82,  203 => 63,  199 => 67,  193 => 82,  189 => 71,  187 => 84,  182 => 18,  176 => 15,  173 => 65,  168 => 13,  164 => 72,  162 => 59,  154 => 10,  149 => 51,  147 => 58,  144 => 49,  141 => 65,  133 => 55,  130 => 64,  125 => 44,  122 => 43,  116 => 53,  112 => 52,  109 => 54,  106 => 59,  103 => 52,  99 => 31,  95 => 60,  92 => 21,  86 => 54,  82 => 22,  80 => 41,  73 => 19,  64 => 19,  60 => 32,  57 => 27,  54 => 23,  51 => 14,  48 => 13,  45 => 9,  42 => 7,  39 => 9,  36 => 6,  33 => 4,  30 => 7,);
    }
}
