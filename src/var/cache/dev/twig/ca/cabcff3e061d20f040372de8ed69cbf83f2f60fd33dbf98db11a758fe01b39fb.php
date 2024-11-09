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

/* @PrestaShop/Admin/Improve/International/Currency/Blocks/exchange_rates.html.twig */
class __TwigTemplate_93eb104d93c65e08d85bcc198bd1aca27d7820d16680ead6994c709a74c5c192 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'currency_settings' => [$this, 'block_currency_settings'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Improve/International/Currency/Blocks/exchange_rates.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Improve/International/Currency/Blocks/exchange_rates.html.twig"));

        // line 25
        echo "
";
        // line 26
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["exchangeRatesForm"] ?? $this->getContext($context, "exchangeRatesForm")), [0 => "PrestaShopBundle:Admin/TwigTemplateForm:prestashop_ui_kit.html.twig"], true);
        // line 27
        echo "
";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["exchangeRatesForm"] ?? $this->getContext($context, "exchangeRatesForm")), 'form_start', ["action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_currencies_refresh_exchange_rates")]);
        echo "
  <div class=\"card\">
    <h3 class=\"card-header\">
      ";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Exchange rate", [], "Admin.International.Feature"), "html", null, true);
        echo "
    </h3>
    <div class=\"card-block row\">
      <div class=\"card-text\">
        <div class=\"form-group row\">
          <label class=\"form-control-label\" for=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["exchangeRatesForm"] ?? $this->getContext($context, "exchangeRatesForm")), "live_exchange_rate", []), "vars", []), "id", []), "html", null, true);
        echo "\">
            ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["exchangeRatesForm"] ?? $this->getContext($context, "exchangeRatesForm")), "live_exchange_rate", []), 'label');
        echo "
          </label>
          <div class=\"col-sm\">
            ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["exchangeRatesForm"] ?? $this->getContext($context, "exchangeRatesForm")), "live_exchange_rate", []), 'widget', ["attr" => ["class" => "js-live-exchange-rate", "data-url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_currencies_update_live_exchange_rates")]]);
        echo "

            ";
        // line 42
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["exchangeRatesForm"] ?? $this->getContext($context, "exchangeRatesForm")), "live_exchange_rate", []), "vars", []), "disabled", [])) {
            // line 43
            echo "                <small class=\"form-text\">
                  ";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Please install the %module_name% module before using this feature.", ["%module_name%" => "cronjobs"], "Admin.International.Notification"), "html", null, true);
            echo "
                </small>
              ";
        } else {
            // line 47
            echo "                <small class=\"form-text js-exchange-rate-text-when-disabled ";
            echo ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["exchangeRatesForm"] ?? $this->getContext($context, "exchangeRatesForm")), "live_exchange_rate", []), "vars", []), "value", []) == 0)) ? ("") : ("d-none"));
            echo "\">
                  ";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("The exchange rates are not automatically updated", [], "Admin.International.Feature"), "html", null, true);
            echo "
                </small>
                <small class=\"form-text js-exchange-rate-text-when-enabled ";
            // line 50
            echo ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["exchangeRatesForm"] ?? $this->getContext($context, "exchangeRatesForm")), "live_exchange_rate", []), "vars", []), "value", []) != 0)) ? ("") : ("d-none"));
            echo "\">
                  ";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("The exchange rates are automatically updated", [], "Admin.International.Feature"), "html", null, true);
            echo "
                </small>
            ";
        }
        // line 54
        echo "          </div>
        </div>
        <div class=\"form-group row\">
          <label for=\"\" class=\"form-control-label\">
            ";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Update exchange rates", [], "Admin.International.Feature"), "html", null, true);
        echo "
          </label>
          <div class=\"col-sm\">
            <button class=\"btn btn-primary\" id=\"update-exchange-rates-button\">
              ";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Update", [], "Admin.Actions"), "html", null, true);
        echo "
            </button>
          </div>
        </div>
        ";
        // line 66
        $this->displayBlock('currency_settings', $context, $blocks);
        // line 69
        echo "      </div>
    </div>
  </div>
";
        // line 72
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["exchangeRatesForm"] ?? $this->getContext($context, "exchangeRatesForm")), 'form_end');
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 66
    public function block_currency_settings($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "currency_settings"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "currency_settings"));

        // line 67
        echo "          ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["exchangeRatesForm"] ?? $this->getContext($context, "exchangeRatesForm")), 'rest');
        echo "
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/International/Currency/Blocks/exchange_rates.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 67,  144 => 66,  132 => 72,  127 => 69,  125 => 66,  118 => 62,  111 => 58,  105 => 54,  99 => 51,  95 => 50,  90 => 48,  85 => 47,  79 => 44,  76 => 43,  74 => 42,  69 => 40,  63 => 37,  59 => 36,  51 => 31,  45 => 28,  42 => 27,  40 => 26,  37 => 25,);
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

{% form_theme exchangeRatesForm 'PrestaShopBundle:Admin/TwigTemplateForm:prestashop_ui_kit.html.twig' %}

{{ form_start(exchangeRatesForm, {'action': path('admin_currencies_refresh_exchange_rates') }) }}
  <div class=\"card\">
    <h3 class=\"card-header\">
      {{ 'Exchange rate'|trans({}, 'Admin.International.Feature') }}
    </h3>
    <div class=\"card-block row\">
      <div class=\"card-text\">
        <div class=\"form-group row\">
          <label class=\"form-control-label\" for=\"{{ exchangeRatesForm.live_exchange_rate.vars.id }}\">
            {{ form_label(exchangeRatesForm.live_exchange_rate) }}
          </label>
          <div class=\"col-sm\">
            {{ form_widget(exchangeRatesForm.live_exchange_rate, {'attr': {'class': 'js-live-exchange-rate', 'data-url': path('admin_currencies_update_live_exchange_rates')}}) }}

            {% if exchangeRatesForm.live_exchange_rate.vars.disabled %}
                <small class=\"form-text\">
                  {{ 'Please install the %module_name% module before using this feature.'|trans({'%module_name%': 'cronjobs'}, 'Admin.International.Notification') }}
                </small>
              {% else %}
                <small class=\"form-text js-exchange-rate-text-when-disabled {{ (exchangeRatesForm.live_exchange_rate.vars.value == 0) ? '' : 'd-none' }}\">
                  {{ 'The exchange rates are not automatically updated'|trans({}, 'Admin.International.Feature') }}
                </small>
                <small class=\"form-text js-exchange-rate-text-when-enabled {{ (exchangeRatesForm.live_exchange_rate.vars.value != 0) ? '' : 'd-none' }}\">
                  {{ 'The exchange rates are automatically updated'|trans({}, 'Admin.International.Feature') }}
                </small>
            {% endif %}
          </div>
        </div>
        <div class=\"form-group row\">
          <label for=\"\" class=\"form-control-label\">
            {{ 'Update exchange rates'|trans({}, 'Admin.International.Feature') }}
          </label>
          <div class=\"col-sm\">
            <button class=\"btn btn-primary\" id=\"update-exchange-rates-button\">
              {{ 'Update'|trans({}, 'Admin.Actions') }}
            </button>
          </div>
        </div>
        {% block currency_settings %}
          {{ form_rest(exchangeRatesForm) }}
        {% endblock %}
      </div>
    </div>
  </div>
{{ form_end(exchangeRatesForm) }}
", "@PrestaShop/Admin/Improve/International/Currency/Blocks/exchange_rates.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Improve/International/Currency/Blocks/exchange_rates.html.twig");
    }
}
