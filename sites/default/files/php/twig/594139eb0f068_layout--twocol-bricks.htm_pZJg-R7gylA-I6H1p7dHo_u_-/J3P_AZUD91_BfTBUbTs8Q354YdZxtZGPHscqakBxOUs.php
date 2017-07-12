<?php

/* core/modules/layout_discovery/layouts/twocol_bricks/layout--twocol-bricks.html.twig */
class __TwigTemplate_b3e92ca08aae572d29557669a8c623da910ce17dfaa1a98a5fef014c5e46af8f extends Twig_Template
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
        $tags = array("set" => 17, "if" => 21);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if'),
                array(),
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

        // line 17
        $context["classes"] = array(0 => "layout--twocol-bricks");
        // line 21
        if ((isset($context["content"]) ? $context["content"] : null)) {
            // line 22
            echo "<div";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
            echo ">
  <div class=\"layout-region layout-region--fullwidth\">
    ";
            // line 24
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "top", array()), "html", null, true));
            echo "
  </div>

  <div class=\"layout-region layout-region--left_above\">
    ";
            // line 28
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "left_above", array()), "html", null, true));
            echo "
  </div>

  <div class=\"layout-region layout-region--right_above\">
    ";
            // line 32
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "right_above", array()), "html", null, true));
            echo "
  </div>

  <div class=\"layout-region layout-region--middle\">
    ";
            // line 36
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "middle", array()), "html", null, true));
            echo "
  </div>

  <div class=\"layout-region layout-region--left_below\">
    ";
            // line 40
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "left_below", array()), "html", null, true));
            echo "
  </div>

  <div class=\"layout-region layout-region--right_below\">
    ";
            // line 44
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "right_below", array()), "html", null, true));
            echo "
  </div>

  <div class=\"layout-region layout-region--fullwidth\">
    ";
            // line 48
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "bottom", array()), "html", null, true));
            echo "
  </div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "core/modules/layout_discovery/layouts/twocol_bricks/layout--twocol-bricks.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 48,  88 => 44,  81 => 40,  74 => 36,  67 => 32,  60 => 28,  53 => 24,  47 => 22,  45 => 21,  43 => 17,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Default theme implementation for a two column layout.
 *
 * This template provides a two column display layout with full width areas at
 * the top, bottom and in the middle.
 *
 * Available variables:
 * - content: The content for this layout.
 * - attributes: HTML attributes for the layout <div>.
 *
 * @ingroup themeable
 */
#}
{%
set classes = [
'layout--twocol-bricks',
]
%}
{% if content %}
<div{{ attributes.addClass(classes) }}>
  <div class=\"layout-region layout-region--fullwidth\">
    {{ content.top }}
  </div>

  <div class=\"layout-region layout-region--left_above\">
    {{ content.left_above }}
  </div>

  <div class=\"layout-region layout-region--right_above\">
    {{ content.right_above }}
  </div>

  <div class=\"layout-region layout-region--middle\">
    {{ content.middle }}
  </div>

  <div class=\"layout-region layout-region--left_below\">
    {{ content.left_below }}
  </div>

  <div class=\"layout-region layout-region--right_below\">
    {{ content.right_below }}
  </div>

  <div class=\"layout-region layout-region--fullwidth\">
    {{ content.bottom }}
  </div>
</div>
{% endif %}
";
    }
}
