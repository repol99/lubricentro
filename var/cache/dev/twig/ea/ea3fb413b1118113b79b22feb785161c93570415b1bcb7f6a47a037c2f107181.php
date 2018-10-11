<?php

/* PrestaShopBundle:Admin/Configure/ShopParameters/Blocks:product_preferences_stock.html.twig */
class __TwigTemplate_b38190fe1d3da608a967262d8a9b8c2b728bc5669d49ba87fcf79ac2008503cc extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Configure/ShopParameters/Blocks:product_preferences_stock.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Configure/ShopParameters/Blocks:product_preferences_stock.html.twig"));

        // line 25
        echo "
";
        // line 27
        echo "
<div class=\"col\">
    <div class=\"card\" id=\"configuration_fieldset_stock\">
        <h3 class=\"card-header\">
            <i class=\"material-icons\">shop</i> ";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Products stock", array(), "Admin.Shopparameters.Feature"), "html", null, true);
        echo "
        </h3>
        <div class=\"card-body\">
            <div class=\"form-group\">
                ";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? $this->getContext($context, "ps")), "label_with_help", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Allow ordering of out-of-stock products", array(), "Admin.Shopparameters.Feature"), 1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("By default, the Add to Cart button is hidden when a product is unavailable. You can choose to have it displayed in all cases.", array(), "Admin.Shopparameters.Help")), "method"), "html", null, true);
        echo "
                ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["stockForm"] ?? $this->getContext($context, "stockForm")), "allow_ordering_oos", array()), 'errors');
        echo "
                ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["stockForm"] ?? $this->getContext($context, "stockForm")), "allow_ordering_oos", array()), 'widget');
        echo "
            </div>
            <div class=\"form-group\">
                <label class=\"form-control-label\">
                    ";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Enable stock management", array(), "Admin.Shopparameters.Feature"), "html", null, true);
        echo "
                </label>
                ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["stockForm"] ?? $this->getContext($context, "stockForm")), "stock_management", array()), 'errors');
        echo "
                ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["stockForm"] ?? $this->getContext($context, "stockForm")), "stock_management", array()), 'widget');
        echo "
            </div>
            <div class=\"form-group\">
                <label class=\"form-control-label\">
                    ";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Label of in-stock products", array(), "Admin.Shopparameters.Feature"), "html", null, true);
        echo "
                </label>
                ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["stockForm"] ?? $this->getContext($context, "stockForm")), "stock_management", array()), 'errors');
        echo "
                ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["stockForm"] ?? $this->getContext($context, "stockForm")), "in_stock_label", array()), 'widget');
        echo "
            </div>
            <div class=\"form-group\">
                <label class=\"form-control-label\">
                    ";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Label of out-of-stock products with allowed backorders", array(), "Admin.Shopparameters.Feature"), "html", null, true);
        echo "
                </label>
                ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["stockForm"] ?? $this->getContext($context, "stockForm")), "oos_allowed_backorders", array()), 'errors');
        echo "
                ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["stockForm"] ?? $this->getContext($context, "stockForm")), "oos_allowed_backorders", array()), 'widget');
        echo "
            </div>
            <div class=\"form-group\">
                <label class=\"form-control-label\">
                    ";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Label of out-of-stock products with denied backorders", array(), "Admin.Shopparameters.Feature"), "html", null, true);
        echo "
                </label>
                ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["stockForm"] ?? $this->getContext($context, "stockForm")), "oos_denied_backorders", array()), 'errors');
        echo "
                ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["stockForm"] ?? $this->getContext($context, "stockForm")), "oos_denied_backorders", array()), 'widget');
        echo "
            </div>
            <div class=\"form-group\">
                ";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? $this->getContext($context, "ps")), "label_with_help", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delivery time of in-stock products", array(), "Admin.Shopparameters.Feature"), 1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Advised for European merchants to be legally compliant (eg: Delivered within 3-4 days)", array(), "Admin.Shopparameters.Help")), "method"), "html", null, true);
        echo "
                ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["stockForm"] ?? $this->getContext($context, "stockForm")), "delivery_time", array()), 'errors');
        echo "
                ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["stockForm"] ?? $this->getContext($context, "stockForm")), "delivery_time", array()), 'widget');
        echo "
                <small class=\"form-text\">";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Leave empty to disable", array(), "Admin.Shopparameters.Feature"), "html", null, true);
        echo "</small>
            </div>
            <div class=\"form-group\">
                ";
        // line 74
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? $this->getContext($context, "ps")), "label_with_help", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delivery time of out-of-stock products with allowed backorders", array(), "Admin.Shopparameters.Feature"), 1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Advised for European merchants to be legally compliant (eg: Delivered within 5-7 days)", array(), "Admin.Shopparameters.Help")), "method"), "html", null, true);
        echo "
                ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["stockForm"] ?? $this->getContext($context, "stockForm")), "oos_delivery_time", array()), 'errors');
        echo "
                ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["stockForm"] ?? $this->getContext($context, "stockForm")), "oos_delivery_time", array()), 'widget');
        echo "
                <small class=\"form-text\">";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Leave empty to disable", array(), "Admin.Shopparameters.Feature"), "html", null, true);
        echo "</small>
            </div>
            <div class=\"form-group\">
                ";
        // line 80
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? $this->getContext($context, "ps")), "label_with_help", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Default pack stock management", array(), "Admin.Shopparameters.Feature"), 1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("When selling packs of products, how do you want your stock to be calculated?", array(), "Admin.Shopparameters.Help")), "method"), "html", null, true);
        echo "
                ";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["stockForm"] ?? $this->getContext($context, "stockForm")), "pack_stock_management", array()), 'errors');
        echo "
                ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["stockForm"] ?? $this->getContext($context, "stockForm")), "pack_stock_management", array()), 'widget');
        echo "
            </div>
        </div>
        <div class=\"card-footer\">
            <div class=\"d-flex justify-content-end\">
                <button class=\"btn btn-primary\">";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", array(), "Admin.Actions"), "html", null, true);
        echo "</button>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Configure/ShopParameters/Blocks:product_preferences_stock.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 87,  163 => 82,  159 => 81,  155 => 80,  149 => 77,  145 => 76,  141 => 75,  137 => 74,  131 => 71,  127 => 70,  123 => 69,  119 => 68,  113 => 65,  109 => 64,  104 => 62,  97 => 58,  93 => 57,  88 => 55,  81 => 51,  77 => 50,  72 => 48,  65 => 44,  61 => 43,  56 => 41,  49 => 37,  45 => 36,  41 => 35,  34 => 31,  28 => 27,  25 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#**
 * 2007-2018 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
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
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2018 PrestaShop SA
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *#}

{% trans_default_domain \"Admin.Shopparameters.Feature\" %}

<div class=\"col\">
    <div class=\"card\" id=\"configuration_fieldset_stock\">
        <h3 class=\"card-header\">
            <i class=\"material-icons\">shop</i> {{ 'Products stock'|trans }}
        </h3>
        <div class=\"card-body\">
            <div class=\"form-group\">
                {{ ps.label_with_help(('Allow ordering of out-of-stock products'|trans), ('By default, the Add to Cart button is hidden when a product is unavailable. You can choose to have it displayed in all cases.'|trans({}, 'Admin.Shopparameters.Help'))) }}
                {{ form_errors(stockForm.allow_ordering_oos) }}
                {{ form_widget(stockForm.allow_ordering_oos) }}
            </div>
            <div class=\"form-group\">
                <label class=\"form-control-label\">
                    {{ 'Enable stock management'|trans }}
                </label>
                {{ form_errors(stockForm.stock_management) }}
                {{ form_widget(stockForm.stock_management) }}
            </div>
            <div class=\"form-group\">
                <label class=\"form-control-label\">
                    {{ 'Label of in-stock products'|trans }}
                </label>
                {{ form_errors(stockForm.stock_management) }}
                {{ form_widget(stockForm.in_stock_label) }}
            </div>
            <div class=\"form-group\">
                <label class=\"form-control-label\">
                    {{ 'Label of out-of-stock products with allowed backorders'|trans }}
                </label>
                {{ form_errors(stockForm.oos_allowed_backorders) }}
                {{ form_widget(stockForm.oos_allowed_backorders) }}
            </div>
            <div class=\"form-group\">
                <label class=\"form-control-label\">
                    {{ 'Label of out-of-stock products with denied backorders'|trans }}
                </label>
                {{ form_errors(stockForm.oos_denied_backorders) }}
                {{ form_widget(stockForm.oos_denied_backorders) }}
            </div>
            <div class=\"form-group\">
                {{ ps.label_with_help(('Delivery time of in-stock products'|trans), ('Advised for European merchants to be legally compliant (eg: Delivered within 3-4 days)'|trans({}, 'Admin.Shopparameters.Help'))) }}
                {{ form_errors(stockForm.delivery_time) }}
                {{ form_widget(stockForm.delivery_time) }}
                <small class=\"form-text\">{{ 'Leave empty to disable'|trans }}</small>
            </div>
            <div class=\"form-group\">
                {{ ps.label_with_help(('Delivery time of out-of-stock products with allowed backorders'|trans), ('Advised for European merchants to be legally compliant (eg: Delivered within 5-7 days)'|trans({}, 'Admin.Shopparameters.Help'))) }}
                {{ form_errors(stockForm.oos_delivery_time) }}
                {{ form_widget(stockForm.oos_delivery_time) }}
                <small class=\"form-text\">{{ 'Leave empty to disable'|trans }}</small>
            </div>
            <div class=\"form-group\">
                {{ ps.label_with_help(('Default pack stock management'|trans), ('When selling packs of products, how do you want your stock to be calculated?'|trans({}, 'Admin.Shopparameters.Help'))) }}
                {{ form_errors(stockForm.pack_stock_management) }}
                {{ form_widget(stockForm.pack_stock_management) }}
            </div>
        </div>
        <div class=\"card-footer\">
            <div class=\"d-flex justify-content-end\">
                <button class=\"btn btn-primary\">{{ 'Save'|trans({}, 'Admin.Actions') }}</button>
            </div>
        </div>
    </div>
</div>
", "PrestaShopBundle:Admin/Configure/ShopParameters/Blocks:product_preferences_stock.html.twig", "D:\\xampp\\htdocs\\lubricentro\\src\\PrestaShopBundle/Resources/views/Admin/Configure/ShopParameters/Blocks/product_preferences_stock.html.twig");
    }
}
