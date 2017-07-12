<?php

/* modules/contact_poup/templates/contact-popup-block.html.twig */
class __TwigTemplate_bac84e2e8e1fe0ac4c4af533767d4e97b1d79497aa426e22c04275c181590145 extends Twig_Template
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
        $tags = array("if" => 11);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
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

        // line 11
        if ((isset($context["link"]) ? $context["link"] : null)) {
            // line 12
            echo "<div> ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["link"]) ? $context["link"] : null), "html", null, true));
            echo " </div>";
        }
    }

    public function getTemplateName()
    {
        return "modules/contact_poup/templates/contact-popup-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 12,  43 => 11,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Theme for contact_popup_block.
 *
 * Available variables:
 * - link: Link object to the contact form.
 * - contact_form: the contact_form entity
 */
#}
{% if link -%}
    <div> {{ link }} </div>
{%- endif %}";
    }
}
