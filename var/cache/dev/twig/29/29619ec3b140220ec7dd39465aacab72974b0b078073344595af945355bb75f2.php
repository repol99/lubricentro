<?php

/* PrestaShopBundle:Admin/Configure/ShopParameters/Blocks:product_preferences_general.html.twig */
class __TwigTemplate_4d8bdf702dbcc8091b8ba5a4206c26a3291a1397f0d298ac28f84707a9ead5da extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Configure/ShopParameters/Blocks:product_preferences_general.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Configure/ShopParameters/Blocks:product_preferences_general.html.twig"));

        // line 25
        echo "
";
        // line 27
        echo "
<div class=\"col\">
    <div class=\"card\" id=\"configuration_fieldset_products\">
        <h3 class=\"card-header\">
            <i class=\"material-icons\">settings</i> ";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Products (general)", array(), "Admin.Shopparameters.Feature"), "html", null, true);
        echo "
        </h3>
        <div class=\"card-block\">
            <div class=\"card-text\">
                <div class=\"form-group\">
                    ";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? $this->getContext($context, "ps")), "label_with_help", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Catalog mode", array(), "Admin.Shopparameters.Feature"), 1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("The catalog mode is actually to disable products checkout (prices, add to cart, etc.) on your shop, like a retail website does.", array(), "Admin.Shopparameters.Help")), "method"), "html", null, true);
        echo "
                    ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? $this->getContext($context, "generalForm")), "catalog_mode", array()), 'errors');
        echo "
                    ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? $this->getContext($context, "generalForm")), "catalog_mode", array()), 'widget');
        echo "
                </div>
                <div class=\"form-group\">
                    <label class=\"form-control-label\">
                        ";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Number of days for which the product is considered 'new'", array(), "Admin.Shopparameters.Feature"), "html", null, true);
        echo "
                    </label>
                    ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? $this->getContext($context, "generalForm")), "new_days_number", array()), 'errors');
        echo "
                    ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? $this->getContext($context, "generalForm")), "new_days_number", array()), 'widget');
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? $this->getContext($context, "ps")), "label_with_help", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Max size of product summary", array(), "Admin.Shopparameters.Feature"), 1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Set the maximum size of the summary of your product description (in characters).", array(), "Admin.Shopparameters.Help")), "method"), "html", null, true);
        echo "
                    ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? $this->getContext($context, "generalForm")), "short_description_limit", array()), 'errors');
        echo "
                    ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? $this->getContext($context, "generalForm")), "short_description_limit", array()), 'widget');
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? $this->getContext($context, "ps")), "label_with_help", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Quantity discounts based on", array(), "Admin.Shopparameters.Feature"), 1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("How to calculate quantity discounts.", array(), "Admin.Shopparameters.Help")), "method"), "html", null, true);
        echo "
                    ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? $this->getContext($context, "generalForm")), "quantity_discount", array()), 'errors');
        echo "
                    ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? $this->getContext($context, "generalForm")), "quantity_discount", array()), 'widget');
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? $this->getContext($context, "ps")), "label_with_help", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Force update of friendly URL", array(), "Admin.Shopparameters.Feature"), 1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("When active, friendly URL will be updated on every save.", array(), "Admin.Shopparameters.Help")), "method"), "html", null, true);
        echo "
                    ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? $this->getContext($context, "generalForm")), "force_friendly_url", array()), 'errors');
        echo "
                    ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? $this->getContext($context, "generalForm")), "force_friendly_url", array()), 'widget');
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? $this->getContext($context, "ps")), "label_with_help", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Default activation status", array(), "Admin.Shopparameters.Feature"), 1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("When active, new products will be activated by default during creation.", array(), "Admin.Shopparameters.Help")), "method"), "html", null, true);
        echo "
                    ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? $this->getContext($context, "generalForm")), "default_status", array()), 'errors');
        echo "
                    ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? $this->getContext($context, "generalForm")), "default_status", array()), 'widget');
        echo "
                </div>
            </div>
        </div>
        <div class=\"card-footer\">
            <div class=\"d-flex justify-content-end\">
                <button class=\"btn btn-primary\">";
        // line 71
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
        return "PrestaShopBundle:Admin/Configure/ShopParameters/Blocks:product_preferences_general.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 71,  122 => 65,  118 => 64,  114 => 63,  108 => 60,  104 => 59,  100 => 58,  94 => 55,  90 => 54,  86 => 53,  80 => 50,  76 => 49,  72 => 48,  66 => 45,  62 => 44,  57 => 42,  50 => 38,  46 => 37,  42 => 36,  34 => 31,  28 => 27,  25 => 25,);
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
    <div class=\"card\" id=\"configuration_fieldset_products\">
        <h3 class=\"card-header\">
            <i class=\"material-icons\">settings</i> {{ 'Products (general)'|trans }}
        </h3>
        <div class=\"card-block\">
            <div class=\"card-text\">
                <div class=\"form-group\">
                    {{ ps.label_with_help(('Catalog mode'|trans), ('The catalog mode is actually to disable products checkout (prices, add to cart, etc.) on your shop, like a retail website does.'|trans({}, 'Admin.Shopparameters.Help'))) }}
                    {{ form_errors(generalForm.catalog_mode) }}
                    {{ form_widget(generalForm.catalog_mode) }}
                </div>
                <div class=\"form-group\">
                    <label class=\"form-control-label\">
                        {{ 'Number of days for which the product is considered \\'new\\''|trans }}
                    </label>
                    {{ form_errors(generalForm.new_days_number) }}
                    {{ form_widget(generalForm.new_days_number) }}
                </div>
                <div class=\"form-group\">
                    {{ ps.label_with_help(('Max size of product summary'|trans), ('Set the maximum size of the summary of your product description (in characters).'|trans({}, 'Admin.Shopparameters.Help'))) }}
                    {{ form_errors(generalForm.short_description_limit) }}
                    {{ form_widget(generalForm.short_description_limit) }}
                </div>
                <div class=\"form-group\">
                    {{ ps.label_with_help(('Quantity discounts based on'|trans), ('How to calculate quantity discounts.'|trans({}, 'Admin.Shopparameters.Help'))) }}
                    {{ form_errors(generalForm.quantity_discount) }}
                    {{ form_widget(generalForm.quantity_discount) }}
                </div>
                <div class=\"form-group\">
                    {{ ps.label_with_help(('Force update of friendly URL'|trans), ('When active, friendly URL will be updated on every save.'|trans({}, 'Admin.Shopparameters.Help'))) }}
                    {{ form_errors(generalForm.force_friendly_url) }}
                    {{ form_widget(generalForm.force_friendly_url) }}
                </div>
                <div class=\"form-group\">
                    {{ ps.label_with_help(('Default activation status'|trans), ('When active, new products will be activated by default during creation.'|trans({}, 'Admin.Shopparameters.Help'))) }}
                    {{ form_errors(generalForm.default_status) }}
                    {{ form_widget(generalForm.default_status) }}
                </div>
            </div>
        </div>
        <div class=\"card-footer\">
            <div class=\"d-flex justify-content-end\">
                <button class=\"btn btn-primary\">{{ 'Save'|trans({}, 'Admin.Actions') }}</button>
            </div>
        </div>
    </div>
</div>
", "PrestaShopBundle:Admin/Configure/ShopParameters/Blocks:product_preferences_general.html.twig", "D:\\xampp\\htdocs\\lubricentro\\src\\PrestaShopBundle/Resources/views/Admin/Configure/ShopParameters/Blocks/product_preferences_general.html.twig");
    }
}
