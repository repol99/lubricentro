<?php

/* PrestaShopBundle:Admin/Module/Includes:grid_loader.html.twig */
class __TwigTemplate_48691209dd06b8b8d9e338d48f7fed0d1338b9118a6a250bbb3a754786fb9269 extends Twig_Template
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
        $__internal_cdf6c47ec7bc05e6a8f11ca607a41b39837c130f2135e5618a0ab6017a78194f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdf6c47ec7bc05e6a8f11ca607a41b39837c130f2135e5618a0ab6017a78194f->enter($__internal_cdf6c47ec7bc05e6a8f11ca607a41b39837c130f2135e5618a0ab6017a78194f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Module/Includes:grid_loader.html.twig"));

        $__internal_138e04543608f7fc5736649a7b0c14176cb2c6b68984702fed9e913cb625fd34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_138e04543608f7fc5736649a7b0c14176cb2c6b68984702fed9e913cb625fd34->enter($__internal_138e04543608f7fc5736649a7b0c14176cb2c6b68984702fed9e913cb625fd34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Module/Includes:grid_loader.html.twig"));

        // line 26
        echo "<div class=\"module-placeholders-wrapper row\">
    ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 8));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 28
            echo "
      <div class=\"timeline-item col-xl-3 col-lg-6 col-md-12 col-sm-12\">
        <div class=\"timeline-item-wrapper\">
            <div class=\"animated-background\">
              <div class=\"background-masker header-top\"></div>
              <div class=\"background-masker header-left\"></div>
              <div class=\"background-masker header-right\"></div>
              <div class=\"background-masker header-bottom\"></div>
              <div class=\"background-masker subheader-left\"></div>
              <div class=\"background-masker subheader-right\"></div>
              <div class=\"background-masker subheader-bottom\"></div>
              <div class=\"background-masker content-top\"></div>
              <div class=\"background-masker content-first-end\"></div>
              <div class=\"background-masker content-second-line\"></div>
              <div class=\"background-masker content-second-end\"></div>
              <div class=\"background-masker content-third-line\"></div>
              <div class=\"background-masker content-third-end\"></div>
            </div>
          </div>
      </div>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "</div>

<div class=\"module-placeholders-failure row\">
      <div class=\"module-placeholders-failure-wrapper col-md-12\">
          <div class='module-placeholders-failure-msg'>
          </div>
          <button id='module-placeholders-failure-retry' type=\"button\" class=\"btn btn-primary\">";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Try again", array(), "Admin.Actions"), "html", null, true);
        echo "</button>
      </div>

</div>
";
        
        $__internal_cdf6c47ec7bc05e6a8f11ca607a41b39837c130f2135e5618a0ab6017a78194f->leave($__internal_cdf6c47ec7bc05e6a8f11ca607a41b39837c130f2135e5618a0ab6017a78194f_prof);

        
        $__internal_138e04543608f7fc5736649a7b0c14176cb2c6b68984702fed9e913cb625fd34->leave($__internal_138e04543608f7fc5736649a7b0c14176cb2c6b68984702fed9e913cb625fd34_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Module/Includes:grid_loader.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 56,  59 => 50,  32 => 28,  28 => 27,  25 => 26,);
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
{#Simulate a bunch of module card #}
<div class=\"module-placeholders-wrapper row\">
    {% for i in 0..8 %}

      <div class=\"timeline-item col-xl-3 col-lg-6 col-md-12 col-sm-12\">
        <div class=\"timeline-item-wrapper\">
            <div class=\"animated-background\">
              <div class=\"background-masker header-top\"></div>
              <div class=\"background-masker header-left\"></div>
              <div class=\"background-masker header-right\"></div>
              <div class=\"background-masker header-bottom\"></div>
              <div class=\"background-masker subheader-left\"></div>
              <div class=\"background-masker subheader-right\"></div>
              <div class=\"background-masker subheader-bottom\"></div>
              <div class=\"background-masker content-top\"></div>
              <div class=\"background-masker content-first-end\"></div>
              <div class=\"background-masker content-second-line\"></div>
              <div class=\"background-masker content-second-end\"></div>
              <div class=\"background-masker content-third-line\"></div>
              <div class=\"background-masker content-third-end\"></div>
            </div>
          </div>
      </div>

    {% endfor %}
</div>

<div class=\"module-placeholders-failure row\">
      <div class=\"module-placeholders-failure-wrapper col-md-12\">
          <div class='module-placeholders-failure-msg'>
          </div>
          <button id='module-placeholders-failure-retry' type=\"button\" class=\"btn btn-primary\">{{ 'Try again'|trans({}, 'Admin.Actions') }}</button>
      </div>

</div>
", "PrestaShopBundle:Admin/Module/Includes:grid_loader.html.twig", "D:\\xampp\\htdocs\\lubricentro\\src\\PrestaShopBundle/Resources/views/Admin/Module/Includes/grid_loader.html.twig");
    }
}
