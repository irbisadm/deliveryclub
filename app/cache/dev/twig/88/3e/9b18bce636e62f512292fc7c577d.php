<?php

/* DCAdminBundle:User:list.html.twig */
class __TwigTemplate_883e9b18bce636e62f512292fc7c577d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("DCAdminBundle:Default:index.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'javascript_footer' => array($this, 'block_javascript_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "DCAdminBundle:Default:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "<div class=\"row-fluid\">
  <div class=\"span12\">
    <div class=\"form_inputs clearfix\">
      <div class=\"row-fluid\">
        <div class=\"span2\">
          <label class=\"control-label\">User search:</label>
        </div>

        <div class=\"span10\">
          <div class=\"input-append\">
            <input type=\"text\" style=\"width:85%\" id=\"search_eq\" placeholder=\"enter username, email or phone\" ";
        // line 13
        if (((isset($context["search"]) ? $context["search"] : $this->getContext($context, "search")) != (-1))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, (isset($context["search"]) ? $context["search"] : $this->getContext($context, "search")), "html", null, true);
            echo "\"";
        }
        echo "><button type=\"button\" id=\"search_bt\" class=\"btn\">Search!</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class=\"row-fluid\">
  <div class=\"span12\">
    <div class=\"widget_wrapper\">
      <div class=\"widget_header\">
        <h3 class=\"icos_table\">Users of system</h3>

        <div class=\"widget_option\">
          <a data-toggle=\"dropdown\" href=\"#\" class=\"icos_settings\"></a>
          <ul class=\"dropdown-menu gradient settings_dropdown widget_option_dropdown pull-right\">
            <li><a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("dc_admin_edit_users");
        echo "\" ><i class=\"icon-plus-sign\"></i> Add</a></li>
          </ul>
        </div>
      </div>

      <div class=\"widget_content no-padding\">
        <table width=\"100%\" cellspacing=\"0\" cellpadding=\"0\" class=\"default_table\">
          <thead>
            <tr>
              <td>Type/Status</td>
              <td>Username</td>
              <td>Email</td>
              <td>Phone</td>
              <td>Action</td>
            </tr>
          </thead>
          <tbody>
            ";
        // line 46
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 47
            echo "            <tr>
              <td>
                ";
            // line 49
            if (($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "getRole", array(), "method") == "ROLE_OPERATOR")) {
                // line 50
                echo "                <img width=\"24\" alt=\"Operator\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/dcadmin/img/icons/colored/headset.png"), "html", null, true);
                echo "\"> </td>
                ";
            } elseif (($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "getRole", array(), "method") == "ROLE_ADMIN")) {
                // line 52
                echo "                <img width=\"24\" alt=\"Administrator\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/dcadmin/img/icons/colored/administrator.png"), "html", null, true);
                echo "\">
                ";
            } elseif (($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "getRole", array(), "method") == "ROLE_MANAGER")) {
                // line 54
                echo "                <img width=\"24\" alt=\"Restaurant manager\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/dcadmin/img/icons/colored/group.png"), "html", null, true);
                echo "\">
                ";
            } elseif (($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "getRole", array(), "method") == "ROLE_USER")) {
                // line 56
                echo "                <img width=\"24\" alt=\"User\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/dcadmin/img/icons/colored/user_woman.png"), "html", null, true);
                echo "\">
                ";
            } else {
                // line 58
                echo "                <img width=\"24\" alt=\"Unknown type\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/dcadmin/img/icons/colored/cancel.png"), "html", null, true);
                echo "\">
                ";
            }
            // line 60
            echo "                <td>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "getUsername", array(), "method"), "html", null, true);
            echo "</td>
                <td>";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "getEmail", array(), "method"), "html", null, true);
            echo "</td>
                <td>";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "getPhone", array(), "method"), "html", null, true);
            echo "</td>
                <td><a href=\"";
            // line 63
            echo $this->env->getExtension('routing')->getPath("dc_admin_edit_users");
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "getId", array(), "method"), "html", null, true);
            echo "\" title=\"Edit ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "getUsername", array(), "method"), "html", null, true);
            echo " user\">Edit</a></td>
              </tr>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "            </tbody>
          </table>
          ";
        // line 68
        if (((isset($context["maxpage"]) ? $context["maxpage"] : $this->getContext($context, "maxpage")) != 0)) {
            // line 69
            echo "          <div class=\"form_inputs clearfix\">
            <div class=\"row-fluid\">
              <div class=\"span3\">
                Totall: ";
            // line 72
            echo twig_escape_filter($this->env, ((isset($context["maxpage"]) ? $context["maxpage"] : $this->getContext($context, "maxpage")) + 1), "html", null, true);
            echo " pages.
              </div>
              <div class=\"span6\">
                <div class=\"pagination\">
                  <ul>
                    ";
            // line 77
            if (((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) != 0)) {
                // line 78
                echo "                    <li><a href=\"";
                echo $this->env->getExtension('routing')->getPath("dc_admin_manage_users");
                echo "/";
                echo twig_escape_filter($this->env, (isset($context["search"]) ? $context["search"] : $this->getContext($context, "search")), "html", null, true);
                echo "/0\">← First</a></li>
                    <li><a href=\"";
                // line 79
                echo $this->env->getExtension('routing')->getPath("dc_admin_manage_users");
                echo "/";
                echo twig_escape_filter($this->env, (isset($context["search"]) ? $context["search"] : $this->getContext($context, "search")), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, ((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) - 1), "html", null, true);
                echo "\">Prev</a></li>
                    ";
            }
            // line 81
            echo "                    ";
            if (((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) != (isset($context["maxpage"]) ? $context["maxpage"] : $this->getContext($context, "maxpage")))) {
                // line 82
                echo "                    <li><a href=\"";
                echo $this->env->getExtension('routing')->getPath("dc_admin_manage_users");
                echo "/";
                echo twig_escape_filter($this->env, (isset($context["search"]) ? $context["search"] : $this->getContext($context, "search")), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, ((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) + 1), "html", null, true);
                echo "\">Next</a></li>
                    <li><a href=\"";
                // line 83
                echo $this->env->getExtension('routing')->getPath("dc_admin_manage_users");
                echo "/";
                echo twig_escape_filter($this->env, (isset($context["search"]) ? $context["search"] : $this->getContext($context, "search")), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, (isset($context["maxpage"]) ? $context["maxpage"] : $this->getContext($context, "maxpage")), "html", null, true);
                echo "\">Last →</a></li>
                    ";
            }
            // line 85
            echo "                  </ul>
                </div>
              </div>
            </div>
          </div>
          ";
        }
        // line 91
        echo "        </div>
      </div><!-- widget_wrapper end -->
    </div>
  </div>
</div>
";
    }

    // line 98
    public function block_javascript_footer($context, array $blocks = array())
    {
        // line 99
        $this->displayParentBlock("javascript_footer", $context, $blocks);
        echo "
<script type=\"text/javascript\" charset=\"utf-8\" async defer>
\$(function() {
  \$('#search_bt').click(function(event) {
    if(\$('#search_eq').val().length>0)
      document.location = '";
        // line 104
        echo $this->env->getExtension('routing')->getPath("dc_admin_manage_users");
        echo "/'+\$('#search_eq').val();
    else 
      document.location = '";
        // line 106
        echo $this->env->getExtension('routing')->getPath("dc_admin_manage_users");
        echo "';
  });
});
</script>
";
    }

    public function getTemplateName()
    {
        return "DCAdminBundle:User:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  244 => 106,  239 => 104,  231 => 99,  228 => 98,  211 => 85,  202 => 83,  190 => 81,  181 => 79,  174 => 78,  172 => 77,  153 => 66,  127 => 60,  97 => 50,  90 => 42,  77 => 43,  65 => 34,  34 => 8,  23 => 2,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 63,  132 => 61,  128 => 49,  107 => 36,  61 => 28,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 91,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 69,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 19,  67 => 29,  63 => 15,  59 => 14,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 64,  136 => 62,  121 => 58,  117 => 44,  105 => 48,  91 => 47,  62 => 23,  49 => 19,  28 => 3,  93 => 28,  88 => 52,  78 => 21,  94 => 43,  89 => 20,  85 => 25,  75 => 41,  68 => 32,  56 => 9,  27 => 4,  38 => 6,  24 => 3,  87 => 46,  21 => 2,  44 => 13,  31 => 4,  25 => 3,  46 => 7,  26 => 6,  19 => 1,  79 => 37,  72 => 33,  69 => 25,  47 => 9,  40 => 8,  37 => 7,  22 => 2,  246 => 90,  157 => 68,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 56,  111 => 52,  108 => 36,  101 => 47,  98 => 31,  96 => 4,  83 => 38,  74 => 14,  66 => 24,  55 => 13,  52 => 12,  50 => 11,  43 => 6,  41 => 8,  35 => 5,  32 => 3,  29 => 2,  209 => 82,  203 => 78,  199 => 67,  193 => 82,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 72,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 65,  133 => 55,  130 => 64,  125 => 44,  122 => 43,  116 => 53,  112 => 52,  109 => 54,  106 => 41,  103 => 52,  99 => 31,  95 => 49,  92 => 21,  86 => 28,  82 => 22,  80 => 41,  73 => 19,  64 => 19,  60 => 32,  57 => 27,  54 => 10,  51 => 14,  48 => 13,  45 => 9,  42 => 7,  39 => 9,  36 => 5,  33 => 4,  30 => 7,);
    }
}
