<?php

/* PrestaShopBundle:Admin:Common/pagination_quicknav.html.twig */
class __TwigTemplate_5a95f502742c893d91b1f0b14ceb605d71a049cd8a0f9b6bc894fac1aede3e86 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin:Common/pagination_quicknav.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin:Common/pagination_quicknav.html.twig"));

        // line 25
        if ((($context["previous_url"] ?? $this->getContext($context, "previous_url")) || ($context["next_url"] ?? $this->getContext($context, "next_url")))) {
            // line 26
            echo "<nav>
    <ul class=\"pagination\">
        <li class=\"page-item ";
            // line 28
            if (($context["first_url"] ?? $this->getContext($context, "first_url"))) {
            } else {
                echo "disabled";
            }
            echo "\">
            <a class=\"page-link\" ";
            // line 29
            if (($context["first_url"] ?? $this->getContext($context, "first_url"))) {
                echo "href=\"";
                echo twig_escape_filter($this->env, ($context["first_url"] ?? $this->getContext($context, "first_url")), "html", null, true);
                echo "\"";
            } else {
                echo "nohref";
            }
            echo ">1</a>
        </li>
        <li class=\"page-item ";
            // line 31
            if (($context["previous_url"] ?? $this->getContext($context, "previous_url"))) {
            } else {
                echo "disabled";
            }
            echo "\">
            <a class=\"page-link\" ";
            // line 32
            if (($context["previous_url"] ?? $this->getContext($context, "previous_url"))) {
                echo "href=\"";
                echo twig_escape_filter($this->env, ($context["previous_url"] ?? $this->getContext($context, "previous_url")), "html", null, true);
                echo "\"";
            } else {
                echo "nohref";
            }
            echo ">&lt;</a>
        </li>
        <li class=\"page-item active\" style=\"float: left;\">
            <input name=\"paginator_jump_page\" class=\"jump-to-page\" type=\"text\" style=\"width: 4em;\"
                   value=\"";
            // line 36
            echo twig_escape_filter($this->env, ($context["current_page"] ?? $this->getContext($context, "current_page")), "html", null, true);
            echo "\" psurl=\"";
            echo twig_escape_filter($this->env, ($context["jump_page_url"] ?? $this->getContext($context, "jump_page_url")), "html", null, true);
            echo "\" psmax=\"";
            echo twig_escape_filter($this->env, ($context["page_count"] ?? $this->getContext($context, "page_count")), "html", null, true);
            echo "\" pslimit=\"";
            echo twig_escape_filter($this->env, ($context["limit"] ?? $this->getContext($context, "limit")), "html", null, true);
            echo "\" />
        </li>
        <li class=\"page-item ";
            // line 38
            if ((array_key_exists("next_url", $context) && (($context["next_url"] ?? $this->getContext($context, "next_url")) != false))) {
            } else {
                echo "disabled";
            }
            echo "\">
            <a class=\"page-link\" id=\"pagination_next_url\" ";
            // line 39
            if ((array_key_exists("next_url", $context) && (($context["next_url"] ?? $this->getContext($context, "next_url")) != false))) {
                echo "href=\"";
                echo twig_escape_filter($this->env, ($context["next_url"] ?? $this->getContext($context, "next_url")), "html", null, true);
                echo "\"";
            } else {
                echo "nohref";
            }
            echo ">&gt;</a>
        </li>
        <li class=\"page-item ";
            // line 41
            if ((array_key_exists("last_url", $context) && (($context["last_url"] ?? $this->getContext($context, "last_url")) != false))) {
            } else {
                echo "disabled";
            }
            echo "\">
            <a class=\"page-link\" ";
            // line 42
            if ((array_key_exists("last_url", $context) && (($context["last_url"] ?? $this->getContext($context, "last_url")) != false))) {
                echo "href=\"";
                echo twig_escape_filter($this->env, ($context["last_url"] ?? $this->getContext($context, "last_url")), "html", null, true);
                echo "\"";
            } else {
                echo "nohref";
            }
            echo ">";
            echo twig_escape_filter($this->env, ($context["page_count"] ?? $this->getContext($context, "page_count")), "html", null, true);
            echo "</a>
        </li>
    </ul>
</nav>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin:Common/pagination_quicknav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 42,  98 => 41,  87 => 39,  80 => 38,  69 => 36,  56 => 32,  49 => 31,  38 => 29,  31 => 28,  27 => 26,  25 => 25,);
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
{% if previous_url or next_url %}
<nav>
    <ul class=\"pagination\">
        <li class=\"page-item {% if first_url %}{% else %}disabled{% endif %}\">
            <a class=\"page-link\" {% if first_url %}href=\"{{ first_url }}\"{% else %}nohref{% endif %}>1</a>
        </li>
        <li class=\"page-item {% if previous_url %}{% else %}disabled{% endif %}\">
            <a class=\"page-link\" {% if previous_url %}href=\"{{ previous_url }}\"{% else %}nohref{% endif %}>&lt;</a>
        </li>
        <li class=\"page-item active\" style=\"float: left;\">
            <input name=\"paginator_jump_page\" class=\"jump-to-page\" type=\"text\" style=\"width: 4em;\"
                   value=\"{{ current_page }}\" psurl=\"{{ jump_page_url }}\" psmax=\"{{ page_count }}\" pslimit=\"{{ limit }}\" />
        </li>
        <li class=\"page-item {% if next_url is defined and next_url != false %}{% else %}disabled{% endif %}\">
            <a class=\"page-link\" id=\"pagination_next_url\" {% if next_url is defined and next_url != false %}href=\"{{ next_url }}\"{% else %}nohref{% endif %}>&gt;</a>
        </li>
        <li class=\"page-item {% if last_url is defined and last_url != false %}{% else %}disabled{% endif %}\">
            <a class=\"page-link\" {% if last_url is defined and last_url != false %}href=\"{{ last_url }}\"{% else %}nohref{% endif %}>{{ page_count }}</a>
        </li>
    </ul>
</nav>
{% endif %}
", "PrestaShopBundle:Admin:Common/pagination_quicknav.html.twig", "D:\\xampp\\htdocs\\lubricentro\\src\\PrestaShopBundle/Resources/views/Admin/Common/pagination_quicknav.html.twig");
    }
}
