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

/* PrestaShopBundle:Admin/TwigTemplateForm:prestashop_ui_kit.html.twig */
class __TwigTemplate_9306007387f260be73d67c8618890b8b274da6f60a512cbc84e7680ef392768f extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_4_horizontal_layout.html.twig", "PrestaShopBundle:Admin/TwigTemplateForm:prestashop_ui_kit.html.twig", 37);
        // line 37
        if (!$_trait_0->isTraitable()) {
            throw new RuntimeError('Template "'."bootstrap_4_horizontal_layout.html.twig".'" cannot be used as a trait.', 37, $this->getSourceContext());
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $_trait_1 = $this->loadTemplate("@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig", "PrestaShopBundle:Admin/TwigTemplateForm:prestashop_ui_kit.html.twig", 38);
        // line 38
        if (!$_trait_1->isTraitable()) {
            throw new RuntimeError('Template "'."@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig".'" cannot be used as a trait.', 38, $this->getSourceContext());
        }
        $_trait_1_blocks = $_trait_1->getBlocks();

        $this->traits = array_merge(
            $_trait_0_blocks,
            $_trait_1_blocks
        );

        $this->blocks = array_merge(
            $this->traits,
            [
                'form_start' => [$this, 'block_form_start'],
                'form_label' => [$this, 'block_form_label'],
                'form_label_class' => [$this, 'block_form_label_class'],
                'form_row' => [$this, 'block_form_row'],
                'form_group_class' => [$this, 'block_form_group_class'],
                'form_row_class' => [$this, 'block_form_row_class'],
            ]
        );
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/TwigTemplateForm:prestashop_ui_kit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/TwigTemplateForm:prestashop_ui_kit.html.twig"));

        // line 25
        echo "
";
        // line 36
        echo "
";
        // line 39
        echo "
";
        // line 41
        echo "
";
        // line 42
        $this->displayBlock('form_start', $context, $blocks);
        // line 46
        echo "
";
        // line 48
        echo "
";
        // line 49
        $this->displayBlock('form_label', $context, $blocks);
        // line 61
        echo "
";
        // line 62
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 65
        echo "
";
        // line 67
        echo "
";
        // line 68
        $this->displayBlock('form_row', $context, $blocks);
        // line 108
        echo "
";
        // line 109
        $this->displayBlock('form_group_class', $context, $blocks);
        // line 112
        echo "
";
        // line 113
        $this->displayBlock('form_row_class', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 42
    public function block_form_start($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_start"));

        // line 43
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), ["class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", []), "")) : ("")) . " form-horizontal"))]);
        // line 44
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 49
    public function block_form_label($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_label"));

        // line 50
        ob_start();
        // line 51
        echo "    ";
        if ((($context["label"] ?? $this->getContext($context, "label")) === null)) {
            // line 52
            echo "      <div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>
    ";
        } elseif ((        // line 53
($context["label"] ?? $this->getContext($context, "label")) === false)) {
            // line 54
            echo "      ";
            // line 55
            echo "    ";
        } else {
            // line 56
            echo "      ";
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), ["class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", []), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))]);
            // line 57
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        // line 59
        echo "  ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 62
    public function block_form_label_class($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 63
        echo "form-control-label";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 68
    public function block_form_row($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_row"));

        // line 69
        ob_start();
        // line 70
        echo "    ";
        // line 71
        echo "    ";
        if (array_key_exists("label_tag_name", $context)) {
            // line 72
            echo "      ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
            echo "
    ";
        }
        // line 74
        echo "
    ";
        // line 75
        $context["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "PrestaShopBundle:Admin/TwigTemplateForm:prestashop_ui_kit.html.twig", 75)->unwrap();
        // line 76
        echo "    ";
        $context["multistoreCheckboxName"] = (($context["multistore_field_prefix"] ?? $this->getContext($context, "multistore_field_prefix")) . $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", []), "name", []));
        // line 77
        echo "    ";
        $context["disabledField"] = false;
        // line 78
        echo "    ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", [], "any", false, true), "attr", [], "any", false, true), "disabled", [], "any", true, true) && $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", []), "attr", []), "disabled", []))) {
            // line 79
            echo "      ";
            $context["disabledField"] = true;
            // line 80
            echo "    ";
        }
        // line 81
        echo "
    <div class=\"";
        // line 82
        $this->displayBlock("form_row_class", $context, $blocks);
        $this->displayBlock("widget_type_class", $context, $blocks);
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        if (($this->getAttribute(($context["attr"] ?? null), "visible", [], "any", true, true) &&  !$this->getAttribute(($context["attr"] ?? $this->getContext($context, "attr")), "visible", []))) {
            echo " d-none";
        }
        echo "\">
      ";
        // line 83
        if ($this->getAttribute($this->getAttribute(($context["form"] ?? null), "parent", [], "any", false, true), ($context["multistoreCheckboxName"] ?? $this->getContext($context, "multistoreCheckboxName")), [], "any", true, true)) {
            // line 84
            echo "        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", []), ($context["multistoreCheckboxName"] ?? $this->getContext($context, "multistoreCheckboxName"))), 'errors');
            echo "
        ";
            // line 85
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", []), ($context["multistoreCheckboxName"] ?? $this->getContext($context, "multistoreCheckboxName"))), 'widget');
            echo "
      ";
        }
        // line 87
        echo "
      ";
        // line 88
        if ( !array_key_exists("label_tag_name", $context)) {
            // line 89
            echo "        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
            echo "
      ";
        }
        // line 91
        echo "      <div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        if (($context["disabledField"] ?? $this->getContext($context, "disabledField"))) {
            echo " disabled";
        }
        echo "\">
        ";
        // line 92
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        ";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors', ["attr" => ["fieldError" => true]]);
        echo "
      </div>
      ";
        // line 95
        if (($this->getAttribute($this->getAttribute(($context["form"] ?? null), "parent", [], "any", false, true), $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", []), "name", []), [], "any", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", []), $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", []), "name", [])), "vars", []), "multistore_dropdown", []) != false))) {
            // line 96
            echo "        ";
            echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", []), $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", []), "name", [])), "vars", []), "multistore_dropdown", []);
            echo "
      ";
        }
        // line 99
        $this->displayBlock("form_external_link", $context, $blocks);
        // line 100
        $this->displayBlock("form_alert", $context, $blocks);
        // line 101
        echo "</div>
  ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 103
        echo "
  ";
        // line 104
        if (($context["column_breaker"] ?? $this->getContext($context, "column_breaker"))) {
            // line 105
            echo "    <div class=\"form-group form-column-breaker\"></div>
  ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 109
    public function block_form_group_class($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 110
        echo "col-sm input-container";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 113
    public function block_form_row_class($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_row_class"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_row_class"));

        // line 114
        echo "form-group row";
        if ($this->getAttribute(($context["row_attr"] ?? null), "class", [], "any", true, true)) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["row_attr"] ?? $this->getContext($context, "row_attr")), "class", []), "html", null, true);
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/TwigTemplateForm:prestashop_ui_kit.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  357 => 114,  348 => 113,  338 => 110,  329 => 109,  317 => 105,  315 => 104,  312 => 103,  308 => 101,  306 => 100,  304 => 99,  298 => 96,  296 => 95,  291 => 93,  287 => 92,  279 => 91,  273 => 89,  271 => 88,  268 => 87,  263 => 85,  258 => 84,  256 => 83,  245 => 82,  242 => 81,  239 => 80,  236 => 79,  233 => 78,  230 => 77,  227 => 76,  225 => 75,  222 => 74,  216 => 72,  213 => 71,  211 => 70,  209 => 69,  200 => 68,  190 => 63,  181 => 62,  170 => 59,  167 => 57,  164 => 56,  161 => 55,  159 => 54,  157 => 53,  152 => 52,  149 => 51,  147 => 50,  138 => 49,  128 => 44,  126 => 43,  117 => 42,  107 => 113,  104 => 112,  102 => 109,  99 => 108,  97 => 68,  94 => 67,  91 => 65,  89 => 62,  86 => 61,  84 => 49,  81 => 48,  78 => 46,  76 => 42,  73 => 41,  70 => 39,  67 => 36,  64 => 25,  32 => 38,  25 => 37,);
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

{#
# This form theme is an implementation of PrestaShop UI kit, it based on the bootstrap4 layout and overrides a few
# blocks to match our expected integration of the UI kit.
#
# This theme uses/extends the basic bootstrap_4_horizontal_layout meaning the form labels/inputs are displayed
# are displayed horizontally in a column way.
#
# Unlike our prestashop_ui_kit_base.html.twig theme which is the parent of this theme and is based on bootstrap_4_layout
# where labels/inputs are displayed one under the other.
#}

{% use 'bootstrap_4_horizontal_layout.html.twig' %}
{% use '@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig' %}

{# overrides from bootstrap_4_horizontal_layout #}

{% block form_start -%}
  {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-horizontal')|trim}) %}
  {{- parent() -}}
{%- endblock form_start %}

{# Labels #}

{% block form_label -%}
  {% spaceless %}
    {% if label is same as(null) %}
      <div class=\"{{ block('form_label_class') }}\"></div>
    {% elseif label is same as(false) %}
      {# Use false as label is you don't want an empty column #}
    {% else %}
      {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) %}
      {{- parent() -}}
    {% endif %}
  {% endspaceless %}
{%- endblock form_label %}

{% block form_label_class -%}
  form-control-label
{%- endblock form_label_class %}

{# Rows #}

{% block form_row -%}
  {% spaceless %}
    {# In horizontal theme when using a title for label it needs to be outside of the row div #}
    {% if label_tag_name is defined %}
      {{ form_label(form) }}
    {% endif %}

    {% import '@PrestaShop/Admin/macros.html.twig' as ps %}
    {% set multistoreCheckboxName = multistore_field_prefix ~ form.vars.name %}
    {% set disabledField = false %}
    {% if form.vars.attr.disabled is defined and form.vars.attr.disabled %}
      {% set disabledField = true %}
    {% endif %}

    <div class=\"{{ block('form_row_class') }}{{ block('widget_type_class') }}{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}{% if (attr.visible is defined and not attr.visible) %} d-none{% endif %}\">
      {% if attribute(form.parent, multistoreCheckboxName) is defined %}
        {{ form_errors(attribute(form.parent, multistoreCheckboxName)) }}
        {{ form_widget(attribute(form.parent, multistoreCheckboxName)) }}
      {% endif %}

      {% if label_tag_name is not defined %}
        {{ form_label(form) }}
      {% endif %}
      <div class=\"{{ block('form_group_class') }}{% if disabledField %} disabled{% endif %}\">
        {{ form_widget(form) }}
        {{ form_errors(form, {'attr': {'fieldError': true}}) }}
      </div>
      {% if attribute(form.parent, form.vars.name) is defined and attribute(form.parent, form.vars.name).vars.multistore_dropdown != false %}
        {{ attribute(form.parent, form.vars.name).vars.multistore_dropdown | raw }}
      {% endif %}

      {{- block('form_external_link') -}}
      {{- block('form_alert') -}}
    </div>
  {% endspaceless %}

  {% if column_breaker %}
    <div class=\"form-group form-column-breaker\"></div>
  {% endif %}
{%- endblock form_row %}

{% block form_group_class -%}
  col-sm input-container
{%- endblock form_group_class %}

{% block form_row_class -%}
  form-group row{% if row_attr.class is defined %} {{ row_attr.class }}{% endif %}
{%- endblock form_row_class %}
", "PrestaShopBundle:Admin/TwigTemplateForm:prestashop_ui_kit.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/TwigTemplateForm/prestashop_ui_kit.html.twig");
    }
}
