<?php

/* DCAdminBundle:Default:sidebar_navigation.html.twig */
class __TwigTemplate_13ad3d17415a2cb21df2ed7fa4225d14 extends Twig_Template
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
        echo "<!-- sidebar_navigation start -->
                    <div class=\"sidebar_navigation gradient\">
                        <ul>
                            <li class=\"tip-right\" title=\"Dashboard\">
                                <a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("dc_admin_homepage");
        echo "\" class=\"i_dashboard\">
                                    <span class=\"tab_label\">Dashboard</span>
                                    <span class=\"tab_info\">General info</span>
                                </a>
                            </li>

                            <li class=\"tip-right\" title=\"Orders\">
                                <a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("dc_admin_manage_orders");
        echo "\" class=\"i_elements tip-right\">
                                    <span class=\"tab_label\">Orders</span>
                                    <span class=\"tab_info\">Client orders</span>
                                </a>
                            </li>
                            
                            <li class=\"tip-right\" title=\"Restaurants\">
                                <a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("dc_admin_manage_restaurants");
        echo "\" class=\"i_typography tip-right\">
                                    <span class=\"tab_label\">Restaurants</span>
                                    <span class=\"tab_info\">Our partners</span>
                                </a>
                            </li>

                            <li class=\"tip-right\" title=\"Users\">
                                <a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("dc_admin_manage_users");
        echo "\" class=\"i_forms\">
                                    <span class=\"tab_label\">Users</span>
                                    <span class=\"tab_info\">Manage users</span>
                                </a>
                            </li>
<!-- 

                            <li class=\"tip-right\" title=\"Tables\">
                                <a href=\"tables.html\" class=\"i_tables tip-right\">
                                    <span class=\"tab_label\">Tables</span>
                                    <span class=\"tab_info\">Tabular sheets</span>
                                </a>
                            </li>

                            <li class=\"tip-right\" title=\"Gallery\">
                                <a href=\"gallery.html\" class=\"i_gallery tip-right\">
                                    <span class=\"tab_label\">Gallery</span>
                                    <span class=\"tab_info\">Photos &amp; Videos</span>
                                </a>
                            </li>

                            <li class=\"tip-right\" title=\"Grid\">
                                <a href=\"grid.html\" class=\"i_grid tip-right\">
                                    <span class=\"tab_label\">Grid</span>
                                    <span class=\"tab_info\">Overviews</span>
                                </a>
                            </li>

                            <li class=\"tip-right\" title=\"Typography\">
                                <a href=\"charts.html\" class=\"i_charts tip-right\">
                                    <span class=\"tab_label\">Charts</span>
                                    <span class=\"tab_info\">Visual Data</span>
                                </a>
                            </li> -->
                        </ul>
                    </div><!-- sidebar_navigation end --> 
";
    }

    public function getTemplateName()
    {
        return "DCAdminBundle:Default:sidebar_navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  351 => 120,  347 => 119,  343 => 118,  339 => 117,  335 => 116,  331 => 115,  327 => 114,  323 => 113,  319 => 112,  315 => 111,  311 => 110,  307 => 109,  303 => 108,  299 => 107,  295 => 106,  291 => 105,  287 => 104,  279 => 102,  275 => 101,  271 => 100,  267 => 99,  263 => 98,  259 => 97,  255 => 96,  251 => 95,  223 => 88,  215 => 86,  210 => 85,  207 => 84,  200 => 62,  194 => 21,  185 => 19,  160 => 11,  148 => 6,  137 => 122,  113 => 72,  104 => 66,  70 => 31,  58 => 25,  244 => 106,  239 => 92,  231 => 90,  228 => 98,  211 => 85,  202 => 83,  190 => 20,  181 => 79,  174 => 78,  172 => 14,  153 => 66,  127 => 60,  97 => 50,  90 => 42,  77 => 48,  65 => 34,  34 => 8,  23 => 2,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 103,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 94,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 63,  132 => 61,  128 => 49,  107 => 36,  61 => 28,  273 => 96,  269 => 94,  254 => 92,  243 => 93,  240 => 86,  238 => 85,  235 => 91,  230 => 82,  227 => 89,  224 => 71,  221 => 77,  219 => 87,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 69,  143 => 56,  135 => 84,  119 => 42,  102 => 32,  71 => 19,  67 => 29,  63 => 15,  59 => 36,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 12,  158 => 67,  156 => 66,  151 => 63,  142 => 2,  138 => 64,  136 => 62,  121 => 58,  117 => 44,  105 => 48,  91 => 49,  62 => 26,  49 => 17,  28 => 3,  93 => 50,  88 => 52,  78 => 21,  94 => 43,  89 => 20,  85 => 25,  75 => 41,  68 => 42,  56 => 9,  27 => 4,  38 => 6,  24 => 3,  87 => 46,  21 => 2,  44 => 13,  31 => 4,  25 => 5,  46 => 7,  26 => 1,  19 => 1,  79 => 37,  72 => 33,  69 => 25,  47 => 11,  40 => 8,  37 => 7,  22 => 2,  246 => 90,  157 => 68,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 56,  111 => 62,  108 => 36,  101 => 47,  98 => 31,  96 => 4,  83 => 38,  74 => 14,  66 => 24,  55 => 26,  52 => 18,  50 => 30,  43 => 10,  41 => 8,  35 => 12,  32 => 3,  29 => 2,  209 => 82,  203 => 63,  199 => 67,  193 => 82,  189 => 71,  187 => 84,  182 => 18,  176 => 15,  173 => 65,  168 => 13,  164 => 72,  162 => 57,  154 => 10,  149 => 51,  147 => 58,  144 => 49,  141 => 65,  133 => 55,  130 => 64,  125 => 44,  122 => 43,  116 => 53,  112 => 52,  109 => 54,  106 => 59,  103 => 52,  99 => 31,  95 => 60,  92 => 21,  86 => 54,  82 => 22,  80 => 41,  73 => 19,  64 => 19,  60 => 32,  57 => 27,  54 => 23,  51 => 14,  48 => 13,  45 => 19,  42 => 7,  39 => 9,  36 => 6,  33 => 4,  30 => 7,);
    }
}
