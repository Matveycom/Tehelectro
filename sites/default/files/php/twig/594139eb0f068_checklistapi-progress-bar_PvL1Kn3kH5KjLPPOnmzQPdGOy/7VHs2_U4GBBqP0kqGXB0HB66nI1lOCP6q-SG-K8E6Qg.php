<?php

/* modules/checklistapi/templates/checklistapi-progress-bar.html.twig */
class __TwigTemplate_e55de93b080f735245fd2e5ef7ac5e64a3364e3880aef53b944ce06f9ff74f4a extends Twig_Template
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
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
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

        // line 15
        echo "<div class=\"progress\" data-drupal-progress>
  <div class=\"progress__track\"><div class=\"progress__bar\" style=\"width: ";
        // line 16
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["percent_complete"]) ? $context["percent_complete"] : null), "html", null, true));
        echo "%;\"></div></div>
  <div class=\"progress__percentage\">";
        // line 17
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["number_complete"]) ? $context["number_complete"] : null), "html", null, true));
        echo " of ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["number_of_items"]) ? $context["number_of_items"] : null), "html", null, true));
        echo " (";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["percent_complete"]) ? $context["percent_complete"] : null), "html", null, true));
        echo "%)</div>
  <div class=\"progress__description\">";
        // line 18
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true));
        echo "</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/checklistapi/templates/checklistapi-progress-bar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 18,  50 => 17,  46 => 16,  43 => 15,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Default theme implementation of a checklist progress bar.
 *
 * Available variables:
 * - message: A string containing information to be displayed.
 * - number_complete: The number of items completed.
 * - number_of_items: The total number of items in the checklist.
 * - percent_complete: The percentage of the progress.
 *
 * @ingroup themeable
 */
#}
<div class=\"progress\" data-drupal-progress>
  <div class=\"progress__track\"><div class=\"progress__bar\" style=\"width: {{ percent_complete }}%;\"></div></div>
  <div class=\"progress__percentage\">{{ number_complete }} of {{ number_of_items }} ({{ percent_complete }}%)</div>
  <div class=\"progress__description\">{{ message }}</div>
</div>
";
    }
}
