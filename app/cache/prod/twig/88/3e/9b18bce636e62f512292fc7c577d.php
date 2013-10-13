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
        ob_start();
        // line 4
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
        // line 14
        if (((isset($context["search"]) ? $context["search"] : null) != (-1))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, (isset($context["search"]) ? $context["search"] : null), "html", null, true);
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
        // line 30
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
        // line 47
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 48
            echo "            <tr>
              <td>
                ";
            // line 50
            if (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "getRole", array(), "method") == "ROLE_OPERATOR")) {
                // line 51
                echo "                <img width=\"24\" alt=\"Operator\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/dcadmin/img/icons/colored/headset.png"), "html", null, true);
                echo "\"> </td>
                ";
            } elseif (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "getRole", array(), "method") == "ROLE_ADMIN")) {
                // line 53
                echo "                <img width=\"24\" alt=\"Administrator\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/dcadmin/img/icons/colored/administrator.png"), "html", null, true);
                echo "\">
                ";
            } elseif (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "getRole", array(), "method") == "ROLE_MANAGER")) {
                // line 55
                echo "                <img width=\"24\" alt=\"Restaurant manager\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/dcadmin/img/icons/colored/group.png"), "html", null, true);
                echo "\">
                ";
            } elseif (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "getRole", array(), "method") == "ROLE_USER")) {
                // line 57
                echo "                <img width=\"24\" alt=\"User\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/dcadmin/img/icons/colored/user_woman.png"), "html", null, true);
                echo "\">
                ";
            } else {
                // line 59
                echo "                <img width=\"24\" alt=\"Unknown type\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/dcadmin/img/icons/colored/cancel.png"), "html", null, true);
                echo "\">
                ";
            }
            // line 61
            echo "                <td>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "getUsername", array(), "method"), "html", null, true);
            echo "</td>
                <td>";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "getEmail", array(), "method"), "html", null, true);
            echo "</td>
                <td>";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "getPhone", array(), "method"), "html", null, true);
            echo "</td>
                <td><a href=\"";
            // line 64
            echo $this->env->getExtension('routing')->getPath("dc_admin_edit_users");
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "getId", array(), "method"), "html", null, true);
            echo "\" title=\"Edit ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "getUsername", array(), "method"), "html", null, true);
            echo " user\">Edit</a></td>
              </tr>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "            </tbody>
          </table>
          ";
        // line 69
        if (((isset($context["maxpage"]) ? $context["maxpage"] : null) != 0)) {
            // line 70
            echo "          <div class=\"form_inputs clearfix\">
            <div class=\"row-fluid\">
              <div class=\"span3\">
                Totall: ";
            // line 73
            echo twig_escape_filter($this->env, ((isset($context["maxpage"]) ? $context["maxpage"] : null) + 1), "html", null, true);
            echo " pages.
              </div>
              <div class=\"span6\">
                <div class=\"pagination\">
                  <ul>
                    ";
            // line 78
            if (((isset($context["page"]) ? $context["page"] : null) != 0)) {
                // line 79
                echo "                    <li><a href=\"";
                echo $this->env->getExtension('routing')->getPath("dc_admin_manage_users");
                echo "/";
                echo twig_escape_filter($this->env, (isset($context["search"]) ? $context["search"] : null), "html", null, true);
                echo "/0\">← First</a></li>
                    <li><a href=\"";
                // line 80
                echo $this->env->getExtension('routing')->getPath("dc_admin_manage_users");
                echo "/";
                echo twig_escape_filter($this->env, (isset($context["search"]) ? $context["search"] : null), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, ((isset($context["page"]) ? $context["page"] : null) - 1), "html", null, true);
                echo "\">Prev</a></li>
                    ";
            }
            // line 82
            echo "                    ";
            if (((isset($context["page"]) ? $context["page"] : null) != (isset($context["maxpage"]) ? $context["maxpage"] : null))) {
                // line 83
                echo "                    <li><a href=\"";
                echo $this->env->getExtension('routing')->getPath("dc_admin_manage_users");
                echo "/";
                echo twig_escape_filter($this->env, (isset($context["search"]) ? $context["search"] : null), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, ((isset($context["page"]) ? $context["page"] : null) + 1), "html", null, true);
                echo "\">Next</a></li>
                    <li><a href=\"";
                // line 84
                echo $this->env->getExtension('routing')->getPath("dc_admin_manage_users");
                echo "/";
                echo twig_escape_filter($this->env, (isset($context["search"]) ? $context["search"] : null), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, (isset($context["maxpage"]) ? $context["maxpage"] : null), "html", null, true);
                echo "\">Last →</a></li>
                    ";
            }
            // line 86
            echo "                  </ul>
                </div>
              </div>
            </div>
          </div>
          ";
        }
        // line 92
        echo "        </div>
      </div><!-- widget_wrapper end -->
    </div>
  </div>
</div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 100
    public function block_javascript_footer($context, array $blocks = array())
    {
        // line 101
        $this->displayParentBlock("javascript_footer", $context, $blocks);
        echo "
";
        // line 102
        ob_start();
        // line 103
        echo "<script type=\"text/javascript\" charset=\"utf-8\" async defer>
\$(function() {
  \$('#search_bt').click(function(event) {
    if(\$('#search_eq').val().length>0)
      document.location = '";
        // line 107
        echo $this->env->getExtension('routing')->getPath("dc_admin_manage_users");
        echo "/'+\$('#search_eq').val();
    else 
      document.location = '";
        // line 109
        echo $this->env->getExtension('routing')->getPath("dc_admin_manage_users");
        echo "';
  });
});
</script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
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
        return array (  251 => 109,  234 => 101,  231 => 100,  213 => 86,  195 => 83,  192 => 82,  174 => 78,  161 => 70,  155 => 67,  134 => 62,  97 => 50,  137 => 63,  129 => 61,  104 => 47,  100 => 46,  52 => 12,  37 => 7,  96 => 4,  90 => 54,  77 => 43,  65 => 34,  34 => 4,  23 => 2,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 64,  132 => 51,  128 => 49,  111 => 55,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  246 => 107,  243 => 88,  240 => 103,  238 => 102,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 92,  219 => 76,  217 => 75,  208 => 68,  204 => 84,  179 => 69,  159 => 69,  143 => 56,  135 => 53,  131 => 68,  119 => 42,  108 => 36,  102 => 32,  71 => 32,  67 => 31,  63 => 15,  59 => 14,  47 => 9,  201 => 92,  196 => 90,  183 => 80,  171 => 61,  166 => 73,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 64,  138 => 63,  136 => 56,  123 => 59,  121 => 46,  117 => 57,  115 => 52,  105 => 53,  91 => 27,  69 => 30,  62 => 23,  49 => 19,  28 => 3,  98 => 31,  93 => 48,  88 => 52,  78 => 36,  43 => 6,  40 => 8,  101 => 6,  94 => 28,  89 => 47,  85 => 25,  79 => 18,  75 => 41,  68 => 14,  56 => 26,  50 => 11,  27 => 4,  32 => 3,  29 => 2,  38 => 6,  24 => 3,  87 => 25,  72 => 16,  66 => 24,  55 => 13,  41 => 8,  21 => 2,  44 => 12,  31 => 4,  25 => 3,  46 => 14,  35 => 5,  26 => 6,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 79,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 41,  103 => 32,  99 => 51,  95 => 28,  92 => 21,  86 => 28,  82 => 37,  80 => 41,  73 => 19,  64 => 19,  60 => 27,  57 => 11,  54 => 10,  51 => 14,  48 => 13,  45 => 9,  42 => 7,  39 => 9,  36 => 5,  33 => 4,  30 => 7,);
    }
}
