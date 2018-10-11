<?php

/* @PrestaShop/Admin/Configure/ShopParameters/product_preferences.html.twig */
class __TwigTemplate_418cc7e2a36d980d61ee2e278b3a05de3e6e39c9832889bbe276be6108999c10 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 25
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Configure/ShopParameters/product_preferences.html.twig", 25);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Configure/ShopParameters/product_preferences.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Configure/ShopParameters/product_preferences.html.twig"));

        // line 28
        list($context["generalForm"], $context["paginationForm"], $context["pageForm"], $context["stockForm"]) =         array($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "general", array()), $this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "pagination", array()), $this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "page", array()), $this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "stock", array()));
        // line 25
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 30
    public function block_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 31
        echo "    <div class=\"container\">
        ";
        // line 32
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form", "id" => "configuration_form")));
        echo "
        <div class=\"row\">
            ";
        // line 35
        echo "            ";
        $this->loadTemplate("PrestaShopBundle:Admin/Configure/ShopParameters/Blocks:product_preferences_general.html.twig", "@PrestaShop/Admin/Configure/ShopParameters/product_preferences.html.twig", 35)->display($context);
        // line 36
        echo "            ";
        // line 37
        echo "            ";
        $this->loadTemplate("PrestaShopBundle:Admin/Configure/ShopParameters/Blocks:product_preferences_page.html.twig", "@PrestaShop/Admin/Configure/ShopParameters/product_preferences.html.twig", 37)->display($context);
        // line 38
        echo "        </div>

        <div class=\"row\">
            ";
        // line 42
        echo "            ";
        $this->loadTemplate("PrestaShopBundle:Admin/Configure/ShopParameters/Blocks:product_preferences_stock.html.twig", "@PrestaShop/Admin/Configure/ShopParameters/product_preferences.html.twig", 42)->display($context);
        // line 43
        echo "            ";
        // line 44
        echo "            ";
        $this->loadTemplate("PrestaShopBundle:Admin/Configure/ShopParameters/Blocks:product_preferences_pagination.html.twig", "@PrestaShop/Admin/Configure/ShopParameters/product_preferences.html.twig", 44)->display($context);
        // line 45
        echo "        </div>
        ";
        // line 46
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 50
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 51
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/new-theme/public/product_preferences.bundle.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/ShopParameters/product_preferences.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 53,  107 => 51,  98 => 50,  85 => 46,  82 => 45,  79 => 44,  77 => 43,  74 => 42,  69 => 38,  66 => 37,  64 => 36,  61 => 35,  56 => 32,  53 => 31,  44 => 30,  34 => 25,  32 => 28,  11 => 25,);
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
{% extends '@PrestaShop/Admin/layout.html.twig' %}
{% trans_default_domain \"Admin.Shopparameters.Feature\" %}

{% set generalForm, paginationForm, pageForm, stockForm = form.general, form.pagination, form.page, form.stock %}

{% block content %}
    <div class=\"container\">
        {{ form_start(form, {'attr': {'class': 'form', 'id': 'configuration_form'}}) }}
        <div class=\"row\">
            {# Product preferences General block #}
            {% include 'PrestaShopBundle:Admin/Configure/ShopParameters/Blocks:product_preferences_general.html.twig' %}
            {# Product preferences Page block #}
            {% include 'PrestaShopBundle:Admin/Configure/ShopParameters/Blocks:product_preferences_page.html.twig' %}
        </div>

        <div class=\"row\">
            {# Product preferences Stock block #}
            {% include 'PrestaShopBundle:Admin/Configure/ShopParameters/Blocks:product_preferences_stock.html.twig' %}
            {# Product preferences Pagination block #}
            {% include 'PrestaShopBundle:Admin/Configure/ShopParameters/Blocks:product_preferences_pagination.html.twig' %}
        </div>
        {{ form_end(form) }}
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}

    <script src=\"{{ asset('themes/new-theme/public/product_preferences.bundle.js') }}\"></script>
{% endblock %}
", "@PrestaShop/Admin/Configure/ShopParameters/product_preferences.html.twig", "D:\\xampp\\htdocs\\lubricentro\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Configure\\ShopParameters\\product_preferences.html.twig");
    }
}
