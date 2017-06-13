<?php

/* themes/aegan/templates/page.html.twig */
class __TwigTemplate_4b308e526e5c2280eb7cb0e8dd4b2f325a466fb23b90debb3ea381121cf48582 extends Twig_Template
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
        $tags = array("if" => 86, "for" => 96);
        $filters = array("raw" => 100);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'for'),
                array('raw'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 73
        echo "<div id=\"page-wrapper\" class=\"container\">

  <div id=\"header-region\">
    <div class=\"row\">
      <div class=\"col-md-4 col-sm-4\">
        ";
        // line 78
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true));
        echo "
      </div>
      <div class=\"col-md-8 col-sm-8\">
        ";
        // line 81
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_right", array()), "html", null, true));
        echo "
      </div>
    </div>
  </div>

  ";
        // line 86
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "primary_menu", array())) {
            // line 87
            echo "    <div id=\"primary-menu-region\">
      ";
            // line 88
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "primary_menu", array()), "html", null, true));
            echo "
    </div>
  ";
        }
        // line 91
        echo "
  ";
        // line 93
        echo "  ";
        if ((isset($context["slider"]) ? $context["slider"] : null)) {
            // line 94
            echo "    <div class=\"flexslider\">
      <ul class=\"slides\">
        ";
            // line 96
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["slider"]) ? $context["slider"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["slide"]) {
                // line 97
                echo "          <li>
            <a href=\"";
                // line 98
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["slide"], "url", array()), "html", null, true));
                echo "\"><img src=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["slide"], "src", array()), "html", null, true));
                echo "\" alt=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["slide"], "name", array()), "html", null, true));
                echo "\"></a>
            ";
                // line 99
                if ($this->getAttribute($context["slide"], "description", array())) {
                    // line 100
                    echo "              <p class=\"flex-caption\">";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->getAttribute($context["slide"], "description", array())));
                    echo "</p>
            ";
                }
                // line 102
                echo "          </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slide'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 104
            echo "      </ul>
    </div>
  ";
        }
        // line 107
        echo "
  ";
        // line 108
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "breadcrumb", array())) {
            // line 109
            echo "    <div id=\"breadcrumb-region\">
      ";
            // line 110
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "breadcrumb", array()), "html", null, true));
            echo "
    </div>
  ";
        }
        // line 113
        echo "
  ";
        // line 114
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_top", array())) {
            // line 115
            echo "    <div id=\"content-top-region\" class=\"dark-blue-bg\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_top", array()), "html", null, true));
            echo "</div>
  ";
        }
        // line 117
        echo "
  <main id=\"main\" class=\"clearfix\">
    ";
        // line 119
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) {
            // line 120
            echo "      <div id=\"sidebar-first\" class=\"sidebar ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["sidebarfirst"]) ? $context["sidebarfirst"] : null), "html", null, true));
            echo "\" role=\"complementary\">
        ";
            // line 121
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()), "html", null, true));
            echo "
      </div>
    ";
        }
        // line 124
        echo "
    <div class=\"";
        // line 125
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["contentlayout"]) ? $context["contentlayout"] : null), "html", null, true));
        echo "\" role=\"main\">

      ";
        // line 127
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "

    </div>";
        // line 130
        echo "
    ";
        // line 131
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())) {
            // line 132
            echo "      <div id=\"sidebar-second\" class=\"sidebar ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["sidebarsecond"]) ? $context["sidebarsecond"] : null), "html", null, true));
            echo "\" role=\"complementary\">
        ";
            // line 133
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()), "html", null, true));
            echo "
      </div>
    ";
        }
        // line 136
        echo "
  </main>

  ";
        // line 139
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_bottom", array())) {
            // line 140
            echo "    <div id=\"content-bottom-region\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_bottom", array()), "html", null, true));
            echo "</div>
  ";
        }
        // line 142
        echo "
  ";
        // line 144
        echo "  ";
        if (((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_second", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_third", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_fourth", array()))) {
            // line 145
            echo "    <div id=\"footer-column\" class=\"gray-bg\">
      <div class=\"row\">
        ";
            // line 147
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array())) {
                // line 148
                echo "          <div class=\"footer-1 col-md-3\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array()), "html", null, true));
                echo "</div>
        ";
            }
            // line 150
            echo "        ";
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_second", array())) {
                // line 151
                echo "          <div class=\"footer-2 col-md-3\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_second", array()), "html", null, true));
                echo "</div>
        ";
            }
            // line 153
            echo "        ";
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_third", array())) {
                // line 154
                echo "          <div class=\"footer-3 col-md-3\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_third", array()), "html", null, true));
                echo "</div>
        ";
            }
            // line 156
            echo "        ";
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_fourth", array())) {
                // line 157
                echo "          <div class=\"footer-4 col-md-3\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_fourth", array()), "html", null, true));
                echo "</div>
        ";
            }
            // line 159
            echo "      </div>
    </div>
    <div class=\"clear\"></div>
  ";
        }
        // line 163
        echo "
  <footer role=\"contentinfo\" id=\"footer\" class=\"dark-blue-bg\">
    ";
        // line 165
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array())) {
            // line 166
            echo "      ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array()), "html", null, true));
            echo "
    ";
        }
        // line 168
        echo "    <hr>
    <span class=\"credits\">Developed by <a href=\"http://dropthemes.in\" target=\"_blank\">Dropthemes.in</a></span>
    ";
        // line 170
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar((isset($context["socialicons"]) ? $context["socialicons"] : null)));
        echo "
  </footer>
  <a href=\"#Top\" class=\"btn-btt\" title=\"Back to Top\" style=\"display: block;\"><span class=\"glyphicon glyphicon-chevron-up\" aria-hidden=\"true\"></span></a>

</div>";
    }

    public function getTemplateName()
    {
        return "themes/aegan/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  271 => 170,  267 => 168,  261 => 166,  259 => 165,  255 => 163,  249 => 159,  243 => 157,  240 => 156,  234 => 154,  231 => 153,  225 => 151,  222 => 150,  216 => 148,  214 => 147,  210 => 145,  207 => 144,  204 => 142,  198 => 140,  196 => 139,  191 => 136,  185 => 133,  180 => 132,  178 => 131,  175 => 130,  170 => 127,  165 => 125,  162 => 124,  156 => 121,  151 => 120,  149 => 119,  145 => 117,  139 => 115,  137 => 114,  134 => 113,  128 => 110,  125 => 109,  123 => 108,  120 => 107,  115 => 104,  108 => 102,  102 => 100,  100 => 99,  92 => 98,  89 => 97,  85 => 96,  81 => 94,  78 => 93,  75 => 91,  69 => 88,  66 => 87,  64 => 86,  56 => 81,  50 => 78,  43 => 73,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Default theme implementation to display a single page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.html.twig template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - base_path: The base URL path of the Drupal installation. Will usually be
 *   \"/\" unless you have installed Drupal in a sub-directory.
 * - is_front: A flag indicating if the current page is the front page.
 * - logged_in: A flag indicating if the user is registered and signed in.
 * - is_admin: A flag indicating if the user has permission to access
 *   administration pages.
 *
 * Site identity:
 * - front_page: The URL of the front page. Use this instead of base_path when
 *   linking to the front page. This includes the language domain or prefix.
 * - logo: The url of the logo image, as defined in theme settings.
 * - site_name: The name of the site. This is empty when displaying the site
 *   name has been disabled in the theme settings.
 * - site_slogan: The slogan of the site. This is empty when displaying the site
 *   slogan has been disabled in theme settings.
 *
 * Navigation:
 * - main_menu: The Main menu links for the site, if they have been configured.
 * - secondary_menu: The Secondary menu links for the site, if they have been
 *   configured.
 * - breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.html.twig):
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title: The page title, for use in the actual content.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 * - messages: Status and error messages. Should be displayed prominently.
 * - tabs: Tabs linking to any sub-pages beneath the current page (e.g., the
 *   view and edit tabs when displaying a node).
 * - action_links: Actions local to the page, such as \"Add menu\" on the menu
 *   administration interface.
 * - feed_icons: All feed icons for the current page.
 * - node: Fully loaded node, if there is an automatically-loaded node
 *   associated with the page and the node ID is the second argument in the
 *   page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - page.header: Items for the header region.
 * - page.homequotes: Home Quotes region
 * - page.home_high1: Home Highlight 1 region
 * - page.home_high2: Home Highlight 2 region
 * - page.home_high3: Home Highlight 3 region
 * - page.content_top: Content top region
 * - page.help: Dynamic help text, mostly for admin pages.
 * - page.content: The main content of the current page.
 * - page.sidebar_first: Items for the first sidebar.
 * - page.footer_first: First Bottom region
 * - page.footer_second: Second Bottom region
 * - page.footer_third: Third Bottom region
 * - page.footer_fourth: Fourth Bottom region
 * - page.footer: Items for the footer region.
 *
 * @see template_preprocess_page()
 * @see html.html.twig
 *
 * @ingroup themeable
 */
#}
<div id=\"page-wrapper\" class=\"container\">

  <div id=\"header-region\">
    <div class=\"row\">
      <div class=\"col-md-4 col-sm-4\">
        {{ page.header }}
      </div>
      <div class=\"col-md-8 col-sm-8\">
        {{ page.header_right }}
      </div>
    </div>
  </div>

  {% if page.primary_menu %}
    <div id=\"primary-menu-region\">
      {{ page.primary_menu }}
    </div>
  {% endif %}

  {# Include a slider. #}
  {% if slider %}
    <div class=\"flexslider\">
      <ul class=\"slides\">
        {% for slide in slider %}
          <li>
            <a href=\"{{ slide.url }}\"><img src=\"{{ slide.src }}\" alt=\"{{ slide.name }}\"></a>
            {% if slide.description %}
              <p class=\"flex-caption\">{{ slide.description | raw }}</p>
            {% endif %}
          </li>
        {% endfor %}
      </ul>
    </div>
  {% endif %}

  {% if page.breadcrumb %}
    <div id=\"breadcrumb-region\">
      {{ page.breadcrumb }}
    </div>
  {% endif %}

  {% if page.content_top %}
    <div id=\"content-top-region\" class=\"dark-blue-bg\">{{ page.content_top }}</div>
  {% endif %}

  <main id=\"main\" class=\"clearfix\">
    {% if page.sidebar_first %}
      <div id=\"sidebar-first\" class=\"sidebar {{ sidebarfirst }}\" role=\"complementary\">
        {{ page.sidebar_first }}
      </div>
    {% endif %}

    <div class=\"{{ contentlayout }}\" role=\"main\">

      {{ page.content }}

    </div>{# /#post-content #}

    {% if page.sidebar_second %}
      <div id=\"sidebar-second\" class=\"sidebar {{ sidebarsecond }}\" role=\"complementary\">
        {{ page.sidebar_second }}
      </div>
    {% endif %}

  </main>

  {% if page.content_bottom %}
    <div id=\"content-bottom-region\">{{ page.content_bottom }}</div>
  {% endif %}

  {# Bottom regions. #}
  {% if page.footer_first or page.footer_second or page.footer_third or page.footer_fourth %}
    <div id=\"footer-column\" class=\"gray-bg\">
      <div class=\"row\">
        {% if page.footer_first %}
          <div class=\"footer-1 col-md-3\">{{ page.footer_first }}</div>
        {% endif %}
        {% if page.footer_second %}
          <div class=\"footer-2 col-md-3\">{{ page.footer_second }}</div>
        {% endif %}
        {% if page.footer_third %}
          <div class=\"footer-3 col-md-3\">{{ page.footer_third }}</div>
        {% endif %}
        {% if page.footer_fourth %}
          <div class=\"footer-4 col-md-3\">{{ page.footer_fourth }}</div>
        {% endif %}
      </div>
    </div>
    <div class=\"clear\"></div>
  {% endif %}

  <footer role=\"contentinfo\" id=\"footer\" class=\"dark-blue-bg\">
    {% if page.footer %}
      {{ page.footer }}
    {% endif %}
    <hr>
    <span class=\"credits\">Developed by <a href=\"http://dropthemes.in\" target=\"_blank\">Dropthemes.in</a></span>
    {{ socialicons |raw }}
  </footer>
  <a href=\"#Top\" class=\"btn-btt\" title=\"Back to Top\" style=\"display: block;\"><span class=\"glyphicon glyphicon-chevron-up\" aria-hidden=\"true\"></span></a>

</div>{# /#wrap #}
";
    }
}
