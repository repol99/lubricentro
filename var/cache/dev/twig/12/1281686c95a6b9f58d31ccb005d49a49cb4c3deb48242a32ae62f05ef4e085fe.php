<?php

/* PrestaShopBundle:Admin/Configure/ShopParameters/Blocks:product_preferences_pagination.html.twig */
class __TwigTemplate_739bd5c1dcabea1606eb662cd5b6f517a84b1a412da8d371f015c9db556b68b6 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Configure/ShopParameters/Blocks:product_preferences_pagination.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Configure/ShopParameters/Blocks:product_preferences_pagination.html.twig"));

        // line 25
        echo "
";
        // line 27
        echo "
<div class=\"col\">
    <div class=\"card\" id=\"configuration_fieldset_order_by_pagination\">
        <h3 class=\"card-header\">
            <i class=\"material-icons\">view_headline</i> ";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Pagination", array(), "Admin.Shopparameters.Feature"), "html", null, true);
        echo "
        </h3>
        <div class=\"card-block\">
            <div class=\"card-text\">
                <div class=\"form-group\">
                    ";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? $this->getContext($context, "ps")), "label_with_help", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Products per page", array(), "Admin.Shopparameters.Feature"), 1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Number of products displayed per page. Default is 10.", array(), "Admin.Shopparameters.Help")), "method"), "html", null, true);
        echo "
                    ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["paginationForm"] ?? $this->getContext($context, "paginationForm")), "products_per_page", array()), 'errors');
        echo "
                    ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["paginationForm"] ?? $this->getContext($context, "paginationForm")), "products_per_page", array()), 'widget');
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? $this->getContext($context, "ps")), "label_with_help", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Default order by", array(), "Admin.Shopparameters.Feature"), 1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("The order in which products are displayed in the product list.", array(), "Admin.Shopparameters.Help")), "method"), "html", null, true);
        echo "
                    ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["paginationForm"] ?? $this->getContext($context, "paginationForm")), "default_order_by", array()), 'errors');
        echo "
                    ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["paginationForm"] ?? $this->getContext($context, "paginationForm")), "default_order_by", array()), 'widget');
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? $this->getContext($context, "ps")), "label_with_help", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Default order method", array(), "Admin.Shopparameters.Feature"), 1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Default order method for product list.", array(), "Admin.Shopparameters.Help")), "method"), "html", null, true);
        echo "
                    ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["paginationForm"] ?? $this->getContext($context, "paginationForm")), "default_order_way", array()), 'errors');
        echo "
                    ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["paginationForm"] ?? $this->getContext($context, "paginationForm")), "default_order_way", array()), 'widget');
        echo "
                </div>
            </div>
        </div>
        <div class=\"card-footer\">
            <div class=\"d-flex justify-content-end\">
                <button class=\"btn btn-primary\">";
        // line 54
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
        return "PrestaShopBundle:Admin/Configure/ShopParameters/Blocks:product_preferences_pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 54,  78 => 48,  74 => 47,  70 => 46,  64 => 43,  60 => 42,  56 => 41,  50 => 38,  46 => 37,  42 => 36,  34 => 31,  28 => 27,  25 => 25,);
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
    <div class=\"card\" id=\"configuration_fieldset_order_by_pagination\">
        <h3 class=\"card-header\">
            <i class=\"material-icons\">view_headline</i> {{ 'Pagination'|trans }}
        </h3>
        <div class=\"card-block\">
            <div class=\"card-text\">
                <div class=\"form-group\">
                    {{ ps.label_with_help(('Products per page'|trans), ('Number of products displayed per page. Default is 10.'|trans({}, 'Admin.Shopparameters.Help'))) }}
                    {{ form_errors(paginationForm.products_per_page) }}
                    {{ form_widget(paginationForm.products_per_page) }}
                </div>
                <div class=\"form-group\">
                    {{ ps.label_with_help(('Default order by'|trans), ('The order in which products are displayed in the product list.'|trans({}, 'Admin.Shopparameters.Help'))) }}
                    {{ form_errors(paginationForm.default_order_by) }}
                    {{ form_widget(paginationForm.default_order_by) }}
                </div>
                <div class=\"form-group\">
                    {{ ps.label_with_help(('Default order method'|trans), ('Default order method for product list.'|trans({}, 'Admin.Shopparameters.Help'))) }}
                    {{ form_errors(paginationForm.default_order_way) }}
                    {{ form_widget(paginationForm.default_order_way) }}
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
", "PrestaShopBundle:Admin/Configure/ShopParameters/Blocks:product_preferences_pagination.html.twig", "D:\\xampp\\htdocs\\lubricentro\\src\\PrestaShopBundle/Resources/views/Admin/Configure/ShopParameters/Blocks/product_preferences_pagination.html.twig");
    }
}
