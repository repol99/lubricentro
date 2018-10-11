<?php

/* PrestaShopBundle:Admin/Configure/ShopParameters/Blocks:product_preferences_page.html.twig */
class __TwigTemplate_892f3310a9aa440e5740a73024ca10f0711c5c766b0b8a693060e45bbf8971f6 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Configure/ShopParameters/Blocks:product_preferences_page.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Configure/ShopParameters/Blocks:product_preferences_page.html.twig"));

        // line 25
        echo "
";
        // line 27
        echo "
<div class=\"col\">
    <div class=\"card\" id=\"configuration_fieldset_fo_product_page\">
        <h3 class=\"card-header\">
            <i class=\"material-icons\">shopping_basket</i> ";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Product page", array(), "Admin.Shopparameters.Feature"), "html", null, true);
        echo "
        </h3>
        <div class=\"card-body\">
            <div class=\"card-text\">
                <div class=\"form-group\">
                    <label class=\"form-control-label\">
                        ";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Display available quantities on the product page", array(), "Admin.Shopparameters.Feature"), "html", null, true);
        echo "
                    </label>
                    ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["pageForm"] ?? $this->getContext($context, "pageForm")), "display_quantities", array()), 'errors');
        echo "
                    ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["pageForm"] ?? $this->getContext($context, "pageForm")), "display_quantities", array()), 'widget');
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? $this->getContext($context, "ps")), "label_with_help", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Display remaining quantities when the quantity is lower than", array(), "Admin.Shopparameters.Feature"), 1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Set to \"0\" to disable this feature.", array(), "Admin.Shopparameters.Help")), "method"), "html", null, true);
        echo "
                    ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["pageForm"] ?? $this->getContext($context, "pageForm")), "display_last_quantities", array()), 'errors');
        echo "
                    ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["pageForm"] ?? $this->getContext($context, "pageForm")), "display_last_quantities", array()), 'widget');
        echo "
                </div>
                <div class=\"form-group\">
                    <label class=\"form-control-label\">
                        ";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Display unavailable product attributes on the product page", array(), "Admin.Shopparameters.Feature"), "html", null, true);
        echo "
                    </label>
                    ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["pageForm"] ?? $this->getContext($context, "pageForm")), "display_unavailable_attributes", array()), 'errors');
        echo "
                    ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["pageForm"] ?? $this->getContext($context, "pageForm")), "display_unavailable_attributes", array()), 'widget');
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? $this->getContext($context, "ps")), "label_with_help", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Display the \"add to cart\" button when a product has attributes", array(), "Admin.Shopparameters.Feature"), 1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Display or hide the \"add to cart\" button on category pages for products that have attributes forcing customers to see product details.", array(), "Admin.Shopparameters.Help")), "method"), "html", null, true);
        echo "
                    ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["pageForm"] ?? $this->getContext($context, "pageForm")), "allow_add_variant_to_cart_from_listing", array()), 'errors');
        echo "
                    ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["pageForm"] ?? $this->getContext($context, "pageForm")), "allow_add_variant_to_cart_from_listing", array()), 'widget');
        echo "
                </div>
                <div class=\"form-group\">
                    <label class=\"form-control-label\">
                        ";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Separator of attribute anchor on the product links", array(), "Admin.Shopparameters.Feature"), "html", null, true);
        echo "
                    </label>
                    ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["pageForm"] ?? $this->getContext($context, "pageForm")), "attribute_anchor_separator", array()), 'errors');
        echo "
                    ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["pageForm"] ?? $this->getContext($context, "pageForm")), "attribute_anchor_separator", array()), 'widget');
        echo "
                </div>
                <div class=\"form-group\">
                    <label class=\"form-control-label\">
                        ";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Display discounted price", array(), "Admin.Shopparameters.Feature"), "html", null, true);
        echo "
                    </label>
                    ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["pageForm"] ?? $this->getContext($context, "pageForm")), "display_discount_price", array()), 'errors');
        echo "
                    ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["pageForm"] ?? $this->getContext($context, "pageForm")), "display_discount_price", array()), 'widget');
        echo "
                    <small class=\"form-text\">";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("In the volume discounts board, display the new price with the applied discount instead of showing the discount (ie. \"-5%\").", array(), "Admin.Shopparameters.Help"), "html", null, true);
        echo "</small>
                </div>
            </div>
        </div>
        <div class=\"card-footer\">
            <div class=\"d-flex justify-content-end\">
                <button class=\"btn btn-primary\">";
        // line 78
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
        return "PrestaShopBundle:Admin/Configure/ShopParameters/Blocks:product_preferences_page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 78,  132 => 72,  128 => 71,  124 => 70,  119 => 68,  112 => 64,  108 => 63,  103 => 61,  96 => 57,  92 => 56,  88 => 55,  82 => 52,  78 => 51,  73 => 49,  66 => 45,  62 => 44,  58 => 43,  52 => 40,  48 => 39,  43 => 37,  34 => 31,  28 => 27,  25 => 25,);
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
    <div class=\"card\" id=\"configuration_fieldset_fo_product_page\">
        <h3 class=\"card-header\">
            <i class=\"material-icons\">shopping_basket</i> {{ 'Product page'|trans }}
        </h3>
        <div class=\"card-body\">
            <div class=\"card-text\">
                <div class=\"form-group\">
                    <label class=\"form-control-label\">
                        {{ 'Display available quantities on the product page'|trans }}
                    </label>
                    {{ form_errors(pageForm.display_quantities) }}
                    {{ form_widget(pageForm.display_quantities) }}
                </div>
                <div class=\"form-group\">
                    {{ ps.label_with_help(('Display remaining quantities when the quantity is lower than'|trans), ('Set to \"0\" to disable this feature.'|trans({}, 'Admin.Shopparameters.Help'))) }}
                    {{ form_errors(pageForm.display_last_quantities) }}
                    {{ form_widget(pageForm.display_last_quantities) }}
                </div>
                <div class=\"form-group\">
                    <label class=\"form-control-label\">
                        {{ 'Display unavailable product attributes on the product page'|trans }}
                    </label>
                    {{ form_errors(pageForm.display_unavailable_attributes) }}
                    {{ form_widget(pageForm.display_unavailable_attributes) }}
                </div>
                <div class=\"form-group\">
                    {{ ps.label_with_help(('Display the \"add to cart\" button when a product has attributes'|trans), ('Display or hide the \"add to cart\" button on category pages for products that have attributes forcing customers to see product details.'|trans({}, 'Admin.Shopparameters.Help'))) }}
                    {{ form_errors(pageForm.allow_add_variant_to_cart_from_listing) }}
                    {{ form_widget(pageForm.allow_add_variant_to_cart_from_listing) }}
                </div>
                <div class=\"form-group\">
                    <label class=\"form-control-label\">
                        {{ 'Separator of attribute anchor on the product links'|trans }}
                    </label>
                    {{ form_errors(pageForm.attribute_anchor_separator) }}
                    {{ form_widget(pageForm.attribute_anchor_separator) }}
                </div>
                <div class=\"form-group\">
                    <label class=\"form-control-label\">
                        {{ 'Display discounted price'|trans }}
                    </label>
                    {{ form_errors(pageForm.display_discount_price) }}
                    {{ form_widget(pageForm.display_discount_price) }}
                    <small class=\"form-text\">{{ 'In the volume discounts board, display the new price with the applied discount instead of showing the discount (ie. \"-5%\").'|trans({}, 'Admin.Shopparameters.Help') }}</small>
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
", "PrestaShopBundle:Admin/Configure/ShopParameters/Blocks:product_preferences_page.html.twig", "D:\\xampp\\htdocs\\lubricentro\\src\\PrestaShopBundle/Resources/views/Admin/Configure/ShopParameters/Blocks/product_preferences_page.html.twig");
    }
}
