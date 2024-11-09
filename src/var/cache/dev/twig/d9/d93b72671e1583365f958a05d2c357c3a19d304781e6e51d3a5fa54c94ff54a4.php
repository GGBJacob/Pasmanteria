<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @PrestaShop/Admin/Common/Grid/Columns/Content/link.html.twig */
class __TwigTemplate_87b51d294a909fdda29a1dee6d333ca1135422fd54fcfe7ef2eba14bc40dbd5b extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'link' => [$this, 'block_link'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Common/Grid/Columns/Content/link.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Common/Grid/Columns/Content/link.html.twig"));

        // line 25
        echo "
";
        // line 26
        $context["color"] = $this->getAttribute($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "options", []), "color_template", []);
        // line 27
        $context["class"] = ("text-" . ($context["color"] ?? $this->getContext($context, "color")));
        // line 28
        echo "
";
        // line 29
        if ($this->getAttribute($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "options", []), "button_template", [])) {
            // line 30
            echo "  ";
            $context["style"] = $this->getAttribute($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "options", []), "button_template", []);
            // line 31
            echo "  ";
            if ((($context["style"] ?? $this->getContext($context, "style")) == "normal")) {
                // line 32
                echo "    ";
                $context["class"] = ("btn btn-" . ($context["color"] ?? $this->getContext($context, "color")));
                // line 33
                echo "  ";
            } elseif ((($context["style"] ?? $this->getContext($context, "style")) == "outline")) {
                // line 34
                echo "    ";
                $context["class"] = ("btn btn-outline-" . ($context["color"] ?? $this->getContext($context, "color")));
                // line 35
                echo "  ";
            }
        }
        // line 37
        echo "
";
        // line 38
        $this->displayBlock('link', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_link($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "link"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "link"));

        // line 39
        echo "<a 
  class=\"";
        // line 40
        echo twig_escape_filter($this->env, ($context["class"] ?? $this->getContext($context, "class")), "html", null, true);
        echo " text-nowrap\"
  href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "options", []), "route", []), [$this->getAttribute($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "options", []), "route_param_name", []) => $this->getAttribute(($context["record"] ?? $this->getContext($context, "record")), $this->getAttribute($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "options", []), "route_param_field", []), [], "array")]), "html", null, true);
        echo "\"
  ";
        // line 42
        if ($this->getAttribute($this->getAttribute(($context["column"] ?? null), "options", [], "any", false, true), "target", [], "any", true, true)) {
            // line 43
            echo "    target=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "options", []), "target", []), "html", null, true);
            echo "\"
  ";
        }
        // line 45
        echo ">
  ";
        // line 46
        if ($this->getAttribute($this->getAttribute(($context["column"] ?? null), "options", [], "any", false, true), "icon", [], "any", true, true)) {
            // line 47
            echo "    <i class=\"material-icons\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "options", []), "icon", []), "html", null, true);
            echo "</i>
  ";
        }
        // line 49
        echo "  ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["record"] ?? $this->getContext($context, "record")), $this->getAttribute($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "options", []), "field", []), [], "array"), "html", null, true);
        echo "
</a>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Common/Grid/Columns/Content/link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 49,  113 => 47,  111 => 46,  108 => 45,  102 => 43,  100 => 42,  96 => 41,  92 => 40,  89 => 39,  71 => 38,  68 => 37,  64 => 35,  61 => 34,  58 => 33,  55 => 32,  52 => 31,  49 => 30,  47 => 29,  44 => 28,  42 => 27,  40 => 26,  37 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{#**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://devdocs.prestashop.com/ for more information.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 *#}

{% set color = column.options.color_template%}
{% set class = \"text-\" ~ color %}

{% if column.options.button_template %}
  {% set style = column.options.button_template %}
  {% if style == 'normal' %}
    {% set class = \"btn btn-\" ~ color %}
  {% elseif style == 'outline' %}
    {% set class = \"btn btn-outline-\" ~ color %}
  {% endif %}
{% endif %}

{% block link %}
<a 
  class=\"{{ class }} text-nowrap\"
  href=\"{{ path(column.options.route, { (column.options.route_param_name) : record[column.options.route_param_field]}) }}\"
  {% if column.options.target is defined %}
    target=\"{{ column.options.target }}\"
  {% endif %}
>
  {% if column.options.icon is defined %}
    <i class=\"material-icons\">{{ column.options.icon }}</i>
  {% endif %}
  {{ record[column.options.field] }}
</a>
{% endblock %}
", "@PrestaShop/Admin/Common/Grid/Columns/Content/link.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Common/Grid/Columns/Content/link.html.twig");
    }
}
