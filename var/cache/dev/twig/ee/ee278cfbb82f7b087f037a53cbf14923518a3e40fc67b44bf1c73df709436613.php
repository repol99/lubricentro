<?php

/* PrestaShopBundle:Admin/Module:catalog.html.twig */
class __TwigTemplate_4951e5799d2d8b442391b5a24af06a36540c2cb640f9237976c267d1f61146dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 25
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "PrestaShopBundle:Admin/Module:catalog.html.twig", 25);
        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_32bd6422335f5646bebb9cf03edc6e0187297644d9feed53c12123cb62612a31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32bd6422335f5646bebb9cf03edc6e0187297644d9feed53c12123cb62612a31->enter($__internal_32bd6422335f5646bebb9cf03edc6e0187297644d9feed53c12123cb62612a31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Module:catalog.html.twig"));

        $__internal_23f7bae615ed0c3fa1edc0e98028b1ab79495ef04fd3fdba11a21bea3cde0527 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23f7bae615ed0c3fa1edc0e98028b1ab79495ef04fd3fdba11a21bea3cde0527->enter($__internal_23f7bae615ed0c3fa1edc0e98028b1ab79495ef04fd3fdba11a21bea3cde0527_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Module:catalog.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_32bd6422335f5646bebb9cf03edc6e0187297644d9feed53c12123cb62612a31->leave($__internal_32bd6422335f5646bebb9cf03edc6e0187297644d9feed53c12123cb62612a31_prof);

        
        $__internal_23f7bae615ed0c3fa1edc0e98028b1ab79495ef04fd3fdba11a21bea3cde0527->leave($__internal_23f7bae615ed0c3fa1edc0e98028b1ab79495ef04fd3fdba11a21bea3cde0527_prof);

    }

    // line 27
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_276e64c57eb809810778140c4eb7fe1391933fddf2a71628bf4178b42390bc48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_276e64c57eb809810778140c4eb7fe1391933fddf2a71628bf4178b42390bc48->enter($__internal_276e64c57eb809810778140c4eb7fe1391933fddf2a71628bf4178b42390bc48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_a9b85f322c09e3fbb4e021c67187fb774e2aca9010d01180002509ac4322d20d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9b85f322c09e3fbb4e021c67187fb774e2aca9010d01180002509ac4322d20d->enter($__internal_a9b85f322c09e3fbb4e021c67187fb774e2aca9010d01180002509ac4322d20d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 28
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/plugins/jquery.pstagger.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/module/loader.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/module/module_card.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/module/module.js"), "html", null, true);
        echo "\"></script>
    ";
        // line 33
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "filterCategoryTab"), "method")) {
            // line 34
            echo "      <script>
        \$('body').on('moduleCatalogLoaded', function() {
          \$('.module-category-menu[data-category-tab=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "filterCategoryTab"), "method"), "html", null, true);
            echo "\"]').click();
      });
      </script>
    ";
        }
        
        $__internal_a9b85f322c09e3fbb4e021c67187fb774e2aca9010d01180002509ac4322d20d->leave($__internal_a9b85f322c09e3fbb4e021c67187fb774e2aca9010d01180002509ac4322d20d_prof);

        
        $__internal_276e64c57eb809810778140c4eb7fe1391933fddf2a71628bf4178b42390bc48->leave($__internal_276e64c57eb809810778140c4eb7fe1391933fddf2a71628bf4178b42390bc48_prof);

    }

    // line 42
    public function block_content($context, array $blocks = array())
    {
        $__internal_892c3be7d433d056049f9af7e6287d293cd1aea5b1b6fb7adc6f08c329ae1a32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_892c3be7d433d056049f9af7e6287d293cd1aea5b1b6fb7adc6f08c329ae1a32->enter($__internal_892c3be7d433d056049f9af7e6287d293cd1aea5b1b6fb7adc6f08c329ae1a32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_d8da48a32470aa0667f33d2932191d0d275e384fbb43126e54fe15aa5ae79b42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8da48a32470aa0667f33d2932191d0d275e384fbb43126e54fe15aa5ae79b42->enter($__internal_d8da48a32470aa0667f33d2932191d0d275e384fbb43126e54fe15aa5ae79b42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 43
        echo "    <div class=\"row justify-content-center\">
        <div class=\"col-lg-10 module-catalog-page\">
            ";
        // line 46
        echo "            ";
        $this->loadTemplate("PrestaShopBundle:Admin/Module/Includes:modal_addons_connect.html.twig", "PrestaShopBundle:Admin/Module:catalog.html.twig", 46)->display(array_merge($context, array("level" => ($context["level"] ?? $this->getContext($context, "level")), "errorMessage" => ($context["errorMessage"] ?? $this->getContext($context, "errorMessage")))));
        // line 47
        echo "            ";
        // line 48
        echo "            ";
        $this->loadTemplate("PrestaShopBundle:Admin/Module/Includes:modal_confirm_prestatrust.html.twig", "PrestaShopBundle:Admin/Module:catalog.html.twig", 48)->display($context);
        // line 49
        echo "            ";
        // line 50
        echo "            ";
        $this->loadTemplate("PrestaShopBundle:Admin/Module/Includes:modal_import.html.twig", "PrestaShopBundle:Admin/Module:catalog.html.twig", 50)->display(array_merge($context, array("level" => ($context["level"] ?? $this->getContext($context, "level")), "errorMessage" => ($context["errorMessage"] ?? $this->getContext($context, "errorMessage")))));
        // line 51
        echo "            ";
        // line 52
        echo "            ";
        $this->loadTemplate("PrestaShopBundle:Admin/Module/Includes:menu_top.html.twig", "PrestaShopBundle:Admin/Module:catalog.html.twig", 52)->display($context);
        // line 53
        echo "            ";
        // line 54
        echo "            ";
        $this->loadTemplate("PrestaShopBundle:Admin/Module/Includes:grid_loader.html.twig", "PrestaShopBundle:Admin/Module:catalog.html.twig", 54)->display($context);
        // line 55
        echo "            ";
        // line 56
        echo "            ";
        if ($this->getAttribute(($context["topMenuData"] ?? null), "categories", array(), "any", true, true)) {
            // line 57
            echo "                ";
            $this->loadTemplate("PrestaShopBundle:Admin/Module/Includes:categories_grid.html.twig", "PrestaShopBundle:Admin/Module:catalog.html.twig", 57)->display(array_merge($context, array("categories" => $this->getAttribute(($context["topMenuData"] ?? $this->getContext($context, "topMenuData")), "categories", array()))));
            // line 58
            echo "            ";
        }
        // line 59
        echo "        </div>
    </div>
";
        
        $__internal_d8da48a32470aa0667f33d2932191d0d275e384fbb43126e54fe15aa5ae79b42->leave($__internal_d8da48a32470aa0667f33d2932191d0d275e384fbb43126e54fe15aa5ae79b42_prof);

        
        $__internal_892c3be7d433d056049f9af7e6287d293cd1aea5b1b6fb7adc6f08c329ae1a32->leave($__internal_892c3be7d433d056049f9af7e6287d293cd1aea5b1b6fb7adc6f08c329ae1a32_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Module:catalog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 59,  136 => 58,  133 => 57,  130 => 56,  128 => 55,  125 => 54,  123 => 53,  120 => 52,  118 => 51,  115 => 50,  113 => 49,  110 => 48,  108 => 47,  105 => 46,  101 => 43,  92 => 42,  77 => 36,  73 => 34,  71 => 33,  67 => 32,  63 => 31,  59 => 30,  55 => 29,  50 => 28,  41 => 27,  11 => 25,);
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

{% block javascripts %}
    {{ parent() }}
    <script src=\"{{ asset('themes/default/js/bundle/plugins/jquery.pstagger.js') }}\"></script>
    <script src=\"{{ asset('themes/default/js/bundle/module/loader.js') }}\"></script>
    <script src=\"{{ asset('themes/default/js/bundle/module/module_card.js') }}\"></script>
    <script src=\"{{ asset('themes/default/js/bundle/module/module.js') }}\"></script>
    {% if app.request.get('filterCategoryTab') %}
      <script>
        \$('body').on('moduleCatalogLoaded', function() {
          \$('.module-category-menu[data-category-tab=\"{{ app.request.get('filterCategoryTab') }}\"]').click();
      });
      </script>
    {% endif %}
{% endblock %}

{% block content %}
    <div class=\"row justify-content-center\">
        <div class=\"col-lg-10 module-catalog-page\">
            {# Addons connect modal #}
            {% include 'PrestaShopBundle:Admin/Module/Includes:modal_addons_connect.html.twig' with { 'level' : level, 'errorMessage' : errorMessage } %}
            {# PrestaTrust modal #}
            {% include 'PrestaShopBundle:Admin/Module/Includes:modal_confirm_prestatrust.html.twig' %}
            {# Contains toolbar-nav for module page #}
            {% include 'PrestaShopBundle:Admin/Module/Includes:modal_import.html.twig' with { 'level' : level, 'errorMessage' : errorMessage } %}
            {# Contains menu with Selection/Categories/Popular and Tag Search #}
            {% include 'PrestaShopBundle:Admin/Module/Includes:menu_top.html.twig' %}
            {# Temporary loader until ajax has finished and display the full catalog #}
            {% include 'PrestaShopBundle:Admin/Module/Includes:grid_loader.html.twig' %}
            {# Module Categories Grid #}
            {% if topMenuData.categories is defined %}
                {% include 'PrestaShopBundle:Admin/Module/Includes:categories_grid.html.twig' with { 'categories' : topMenuData.categories }  %}
            {% endif %}
        </div>
    </div>
{% endblock %}
", "PrestaShopBundle:Admin/Module:catalog.html.twig", "D:\\xampp\\htdocs\\lubricentro\\src\\PrestaShopBundle/Resources/views/Admin/Module/catalog.html.twig");
    }
}
