<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* core/themes/seven/templates/node-add-list.html.twig */
class __TwigTemplate_02e1280accc0bbd45aba8229ebfa1805aac8ac3165d9afb6255ee7830b94aba4 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        if (($context["content"] ?? null)) {
            // line 17
            echo "  <ul class=\"admin-list\">
    ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["types"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
                // line 19
                echo "      <li class=\"clearfix\"><a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["type"], "url", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
                echo "\"><span class=\"label\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["type"], "label", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
                echo "</span><div class=\"description\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["type"], "description", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
                echo "</div></a></li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "  </ul>
";
        } else {
            // line 23
            echo "  <p>
    ";
            // line 24
            $context["create_content"] = $this->extensions['Drupal\Core\Template\TwigExtension']->getPath("node.type_add");
            // line 25
            echo "    ";
            echo t("You have not created any content types yet. Go to the <a href=\"@create_content\">content type creation page</a> to add a new content type.", array("@create_content" =>             // line 26
($context["create_content"] ?? null), ));
            // line 28
            echo "  </p>
";
        }
    }

    public function getTemplateName()
    {
        return "core/themes/seven/templates/node-add-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 28,  72 => 26,  70 => 25,  68 => 24,  65 => 23,  61 => 21,  48 => 19,  44 => 18,  41 => 17,  39 => 16,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Seven's theme implementation to list node types available for adding content.
 *
 * Available variables:
 * - types: List of content types. Each content type contains:
 *   - url: Path to the add content of this type page.
 *   - label: The title of this type of content.
 *   - description: Description of this type of content.
 *
 * @see template_preprocess_node_add_list()
 * @see seven_preprocess_node_add_list()
 */
#}
{% if content %}
  <ul class=\"admin-list\">
    {% for type in types %}
      <li class=\"clearfix\"><a href=\"{{ type.url }}\"><span class=\"label\">{{ type.label }}</span><div class=\"description\">{{ type.description }}</div></a></li>
    {% endfor %}
  </ul>
{% else %}
  <p>
    {% set create_content = path('node.type_add') %}
    {% trans %}
      You have not created any content types yet. Go to the <a href=\"{{ create_content }}\">content type creation page</a> to add a new content type.
    {% endtrans %}
  </p>
{% endif %}
", "core/themes/seven/templates/node-add-list.html.twig", "/var/www/html/web/core/themes/seven/templates/node-add-list.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 16, "for" => 18, "set" => 24, "trans" => 25);
        static $filters = array("escape" => 19);
        static $functions = array("path" => 24);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'set', 'trans'],
                ['escape'],
                ['path']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
