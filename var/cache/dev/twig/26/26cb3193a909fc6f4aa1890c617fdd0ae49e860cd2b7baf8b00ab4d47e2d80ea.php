<?php

/* @Product/CatalogPage/Lists/list_quicknav.html.twig */
class __TwigTemplate_c3c184532b2b88e22d5ef3172fbea9e5a2fd7d0a2b5fe6c702ca472675918a58 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Product/CatalogPage/Lists/list_quicknav.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Product/CatalogPage/Lists/list_quicknav.html.twig"));

        // line 25
        echo "<div class=\"quicknav-container\">
    <div class=\"quicknav-header\">
        <div class=\"float-left\"><a href=\"#\" data-toggle=\"sidebar\" data-target=\".sidebar\">&times;</a></div>
        <h2>";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Quick navigation", array(), "Admin.Global"), "html", null, true);
        echo "</h2>
    </div>
    <div class=\"quicknav-scroller\">
        <table class=\"table table-condensed table-striped product quicknav-products\">
            <thead>
                <tr class=\"column-headers\">
                    <th class=\"hidden-xs hidden-sm hidden-md\">
                        ";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("ID", array(), "Admin.Global"), "html", null, true);
        echo "
                    </th>
                    <th>
                        ";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Name", array(), "Admin.Global"), "html", null, true);
        echo "
                    </th>
                    <th class=\"hidden-xs hidden-sm\">
                        ";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Price", array(), "Admin.Global"), "html", null, true);
        echo "
                    </th>
                    ";
        // line 43
        if ($this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getConfiguration("PS_STOCK_MANAGEMENT")) {
            // line 44
            echo "                        <th class=\"hidden-xs\">
                            ";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Quantity", array(), "Admin.Catalog.Feature"), "html", null, true);
            echo "
                        </th>
                    ";
        }
        // line 48
        echo "                </tr>
            </thead>
            <tbody>
                ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? $this->getContext($context, "products")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 52
            echo "                    <tr>
                        <td class=\"hidden-xs hidden-sm hidden-md\">
                            <a href=\"";
            // line 54
            echo twig_escape_filter($this->env, (($this->getAttribute($context["product"], "url", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["product"], "url", array()), "")) : ("")), "html", null, true);
            echo "#tab-step1\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id_product", array()), "html", null, true);
            echo "</a>
                        </td>
                        <td>
                            <a href=\"";
            // line 57
            echo twig_escape_filter($this->env, (($this->getAttribute($context["product"], "url", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["product"], "url", array()), "")) : ("")), "html", null, true);
            echo "#tab-step1\">";
            echo twig_escape_filter($this->env, (($this->getAttribute($context["product"], "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["product"], "name", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A", array(), "Admin.Global"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A", array(), "Admin.Global"))), "html", null, true);
            echo "</a>
                        </td>
                        <td class=\"hidden-xs hidden-sm\">
                            <a href=\"";
            // line 60
            echo twig_escape_filter($this->env, (($this->getAttribute($context["product"], "url", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["product"], "url", array()), "")) : ("")), "html", null, true);
            echo "#tab-step2\">";
            echo twig_escape_filter($this->env, (($this->getAttribute($context["product"], "price", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["product"], "price", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A", array(), "Admin.Global"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A", array(), "Admin.Global"))), "html", null, true);
            echo "</a>
                        </td>
                        ";
            // line 62
            if ($this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getConfiguration("PS_STOCK_MANAGEMENT")) {
                // line 63
                echo "                            <td class=\"hidden-xs product-sav-quantity\"
                                productquantityvalue=\"";
                // line 64
                echo twig_escape_filter($this->env, (($this->getAttribute($context["product"], "sav_quantity", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["product"], "sav_quantity", array()), "")) : ("")), "html", null, true);
                echo "\">
                                <a href=\"";
                // line 65
                echo twig_escape_filter($this->env, (($this->getAttribute($context["product"], "url", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["product"], "url", array()), "")) : ("")), "html", null, true);
                echo "#tab-step3\">
                                    ";
                // line 66
                if (($this->getAttribute($context["product"], "sav_quantity", array(), "any", true, true) && ($this->getAttribute($context["product"], "sav_quantity", array()) > 0))) {
                    // line 67
                    echo "                                        ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "sav_quantity", array()), "html", null, true);
                    echo "
                                    ";
                } else {
                    // line 69
                    echo "                                        <span
                                            class=\"badge badge-danger\">";
                    // line 70
                    echo twig_escape_filter($this->env, (($this->getAttribute($context["product"], "sav_quantity", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["product"], "sav_quantity", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A", array(), "Admin.Global"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A", array(), "Admin.Global"))), "html", null, true);
                    echo "</span>
                                    ";
                }
                // line 72
                echo "                                </a>
                            </td>
                        ";
            }
            // line 75
            echo "                    </tr>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 77
            echo "                    <tr><td colspan=\"5\">
                        ";
            // line 78
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("There is no result for this search. Update your filters to view other products.", array(), "Admin.Catalog.Notification"), "html", null, true);
            echo "
                    </td></tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "            </tbody>
        </table>
    </div>
    <div class=\"quicknav-fixed-bottom navbar-form-footer\">
        ";
        // line 85
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("PrestaShopBundle:Admin\\Common:pagination", array("limit" =>         // line 86
($context["limit"] ?? $this->getContext($context, "limit")), "offset" => ($context["offset"] ?? $this->getContext($context, "offset")), "total" => ($context["total"] ?? $this->getContext($context, "total")), "caller_parameters" => array("_route" => "admin_product_list", "view" => "quicknav"), "view" => "quicknav")));
        // line 87
        echo "
    </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Product/CatalogPage/Lists/list_quicknav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 87,  164 => 86,  163 => 85,  157 => 81,  148 => 78,  145 => 77,  139 => 75,  134 => 72,  129 => 70,  126 => 69,  120 => 67,  118 => 66,  114 => 65,  110 => 64,  107 => 63,  105 => 62,  98 => 60,  90 => 57,  82 => 54,  78 => 52,  73 => 51,  68 => 48,  62 => 45,  59 => 44,  57 => 43,  52 => 41,  46 => 38,  40 => 35,  30 => 28,  25 => 25,);
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
<div class=\"quicknav-container\">
    <div class=\"quicknav-header\">
        <div class=\"float-left\"><a href=\"#\" data-toggle=\"sidebar\" data-target=\".sidebar\">&times;</a></div>
        <h2>{{ \"Quick navigation\"|trans({}, 'Admin.Global') }}</h2>
    </div>
    <div class=\"quicknav-scroller\">
        <table class=\"table table-condensed table-striped product quicknav-products\">
            <thead>
                <tr class=\"column-headers\">
                    <th class=\"hidden-xs hidden-sm hidden-md\">
                        {{ \"ID\"|trans({}, 'Admin.Global') }}
                    </th>
                    <th>
                        {{ \"Name\"|trans({}, 'Admin.Global') }}
                    </th>
                    <th class=\"hidden-xs hidden-sm\">
                        {{ \"Price\"|trans({}, 'Admin.Global') }}
                    </th>
                    {% if 'PS_STOCK_MANAGEMENT'|configuration %}
                        <th class=\"hidden-xs\">
                            {{ \"Quantity\"|trans({}, 'Admin.Catalog.Feature') }}
                        </th>
                    {% endif %}
                </tr>
            </thead>
            <tbody>
                {% for product in products %}
                    <tr>
                        <td class=\"hidden-xs hidden-sm hidden-md\">
                            <a href=\"{{ product.url|default('') }}#tab-step1\">{{ product.id_product }}</a>
                        </td>
                        <td>
                            <a href=\"{{ product.url|default('') }}#tab-step1\">{{ product.name|default('N/A'|trans({}, 'Admin.Global')) }}</a>
                        </td>
                        <td class=\"hidden-xs hidden-sm\">
                            <a href=\"{{ product.url|default('') }}#tab-step2\">{{ product.price|default('N/A'|trans({}, 'Admin.Global')) }}</a>
                        </td>
                        {% if 'PS_STOCK_MANAGEMENT'|configuration %}
                            <td class=\"hidden-xs product-sav-quantity\"
                                productquantityvalue=\"{{ product.sav_quantity|default('') }}\">
                                <a href=\"{{ product.url|default('') }}#tab-step3\">
                                    {% if product.sav_quantity is defined and product.sav_quantity > 0 %}
                                        {{ product.sav_quantity }}
                                    {% else %}
                                        <span
                                            class=\"badge badge-danger\">{{ product.sav_quantity|default('N/A'|trans({}, 'Admin.Global')) }}</span>
                                    {% endif %}
                                </a>
                            </td>
                        {% endif %}
                    </tr>
                {% else %}
                    <tr><td colspan=\"5\">
                        {{ \"There is no result for this search. Update your filters to view other products.\"|trans({}, 'Admin.Catalog.Notification') }}
                    </td></tr>
                {% endfor %}
            </tbody>
        </table>
    </div>
    <div class=\"quicknav-fixed-bottom navbar-form-footer\">
        {{ render(controller('PrestaShopBundle:Admin\\\\Common:pagination',
            {'limit': limit, 'offset': offset, 'total': total, 'caller_parameters': {'_route': 'admin_product_list', 'view': 'quicknav'}, 'view': 'quicknav'}))
        }}
    </div>
</div>
", "@Product/CatalogPage/Lists/list_quicknav.html.twig", "D:\\xampp\\htdocs\\lubricentro\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Product\\CatalogPage\\Lists\\list_quicknav.html.twig");
    }
}
