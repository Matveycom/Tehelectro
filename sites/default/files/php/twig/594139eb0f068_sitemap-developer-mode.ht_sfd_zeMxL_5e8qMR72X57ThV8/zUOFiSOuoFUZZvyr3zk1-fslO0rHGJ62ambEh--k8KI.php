<?php

/* modules/xmlsitemap/templates/sitemap-developer-mode.html.twig */
class __TwigTemplate_1915d300212dca649228fbd92587a4e3ec4f60ad8ebf3bbc6a0c14c6377c5885 extends Twig_Template
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

        // line 39
        echo "Current context: ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["current_context"]) ? $context["current_context"] : null), "html", null, true));
        echo " <br />
Sitemap: ";
        // line 40
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["sitemap"]) ? $context["sitemap"] : null), "html", null, true));
        echo " <br />
Chunk: ";
        // line 41
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["chunk"]) ? $context["chunk"] : null), "html", null, true));
        echo " <br />
Cache file location: ";
        // line 42
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["cache_file_location"]) ? $context["cache_file_location"] : null), "html", null, true));
        echo " <br />
Cache file exists: ";
        // line 43
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["cache_file_exists"]) ? $context["cache_file_exists"] : null), "html", null, true));
        echo " <br />
";
    }

    public function getTemplateName()
    {
        return "modules/xmlsitemap/templates/sitemap-developer-mode.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 43,  56 => 42,  52 => 41,  48 => 40,  43 => 39,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Sitemap template output when developer_mode flag is set.
 *
 * Available variables:
 * - current_context: The current context.
 *   - language: The langcode of the context.
 * - sitemap: The sitemap object to be displayed.
 *   - uri: Sitemap uri.
 *   - id: Entity id.
 *   - label: Entity label.
 *   - chunks: Number of chunks of the sitemap.
 *   - max_filesize: Maximum filesize allowed for sitemap XML file.
 *   - context: Context of the sitemap.
 *   - updated: Last time when sitemap was updated.
 *   - originalId: The original ID of the configuration entity.
 *   - pluginConfigKey: The name of the property that is used to store plugin
 *     configuration.
 *   - status: The enabled/disabled status of the configuration entity.
 *   - isSyncing: Whether the config is being created, updated or deleted
 *     through the import process.
 *   - isUninstalling: Whether the config is being deleted by the uninstall
 *     process.
 *   - uuid: Unique identified for the sitemap entity.
 *   - langcode: The language code of the entity's default language.
 *   - entityTypeId: The entity type.
 *   - enforceIsNew: Boolean indicating whether the entity should be forced to
 *     be new.
 *   - _serviceIds: Services that are used for this sitemap entity.
 *   - dependencies: Dependencies for the sitemap.
 * - chunk: Current chunk of the sitemap.
 * - cache_file_location: Path for the sitemap cache file.
 * - cache_file_exists: Boolean indicating if the sitemap cache file exists.
 *
 * @see Drupal\\xmlsitemap\\Controller\\XmlSitemapController::renderSitemapXml()
 */
#}
Current context: {{ current_context }} <br />
Sitemap: {{ sitemap }} <br />
Chunk: {{ chunk }} <br />
Cache file location: {{ cache_file_location }} <br />
Cache file exists: {{ cache_file_exists }} <br />
";
    }
}
