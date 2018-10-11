<?php

/* PrestaShopBundle:Admin/Module/Includes:grid_manage_installed.html.twig */
class __TwigTemplate_ad743777024eb52cc1e0725b918a55e82fe41665c1814439d68fb098fb91f7bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 25
        $this->parent = $this->loadTemplate("PrestaShopBundle:Admin/Module/Includes:grid.html.twig", "PrestaShopBundle:Admin/Module/Includes:grid_manage_installed.html.twig", 25);
        $this->blocks = array(
            'addon_card' => array($this, 'block_addon_card'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PrestaShopBundle:Admin/Module/Includes:grid.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1bc0163e4e50746bd9015e539d9b6b495d2079bf27405fdc320884b91e173b1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1bc0163e4e50746bd9015e539d9b6b495d2079bf27405fdc320884b91e173b1f->enter($__internal_1bc0163e4e50746bd9015e539d9b6b495d2079bf27405fdc320884b91e173b1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Module/Includes:grid_manage_installed.html.twig"));

        $__internal_7fc7264c1f199d7c5be23ef5728e46c53d311f8002772c5ef532e8e6fcecfc43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fc7264c1f199d7c5be23ef5728e46c53d311f8002772c5ef532e8e6fcecfc43->enter($__internal_7fc7264c1f199d7c5be23ef5728e46c53d311f8002772c5ef532e8e6fcecfc43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Module/Includes:grid_manage_installed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1bc0163e4e50746bd9015e539d9b6b495d2079bf27405fdc320884b91e173b1f->leave($__internal_1bc0163e4e50746bd9015e539d9b6b495d2079bf27405fdc320884b91e173b1f_prof);

        
        $__internal_7fc7264c1f199d7c5be23ef5728e46c53d311f8002772c5ef532e8e6fcecfc43->leave($__internal_7fc7264c1f199d7c5be23ef5728e46c53d311f8002772c5ef532e8e6fcecfc43_prof);

    }

    // line 27
    public function block_addon_card($context, array $blocks = array())
    {
        $__internal_d123c1e6b98f5fc2bf2b0d9be7a7e32820d81f3aae4381c8fc4e734ddfc75403 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d123c1e6b98f5fc2bf2b0d9be7a7e32820d81f3aae4381c8fc4e734ddfc75403->enter($__internal_d123c1e6b98f5fc2bf2b0d9be7a7e32820d81f3aae4381c8fc4e734ddfc75403_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "addon_card"));

        $__internal_41f4681809d197d8915be59b548244bf8374868d9bf8c3cb125d8947306359d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41f4681809d197d8915be59b548244bf8374868d9bf8c3cb125d8947306359d0->enter($__internal_41f4681809d197d8915be59b548244bf8374868d9bf8c3cb125d8947306359d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "addon_card"));

        // line 28
        echo "  ";
        $this->loadTemplate("PrestaShopBundle:Admin/Module/Includes:card_manage_installed.html.twig", "PrestaShopBundle:Admin/Module/Includes:grid_manage_installed.html.twig", 28)->display(array_merge($context, array("display_type" => ($context["display_type"] ?? $this->getContext($context, "display_type")), "module" => ($context["module"] ?? $this->getContext($context, "module")), "origin" => ((array_key_exists("origin", $context)) ? (_twig_default_filter(($context["origin"] ?? $this->getContext($context, "origin")), "none")) : ("none")))));
        
        $__internal_41f4681809d197d8915be59b548244bf8374868d9bf8c3cb125d8947306359d0->leave($__internal_41f4681809d197d8915be59b548244bf8374868d9bf8c3cb125d8947306359d0_prof);

        
        $__internal_d123c1e6b98f5fc2bf2b0d9be7a7e32820d81f3aae4381c8fc4e734ddfc75403->leave($__internal_d123c1e6b98f5fc2bf2b0d9be7a7e32820d81f3aae4381c8fc4e734ddfc75403_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Module/Includes:grid_manage_installed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 28,  40 => 27,  11 => 25,);
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
{% extends \"PrestaShopBundle:Admin/Module/Includes:grid.html.twig\" %}

{% block addon_card %}
  {% include 'PrestaShopBundle:Admin/Module/Includes:card_manage_installed.html.twig' with { 'display_type': display_type, 'module': module, 'origin': origin|default('none') } %}
{% endblock %}
", "PrestaShopBundle:Admin/Module/Includes:grid_manage_installed.html.twig", "D:\\xampp\\htdocs\\lubricentro\\src\\PrestaShopBundle/Resources/views/Admin/Module/Includes/grid_manage_installed.html.twig");
    }
}
