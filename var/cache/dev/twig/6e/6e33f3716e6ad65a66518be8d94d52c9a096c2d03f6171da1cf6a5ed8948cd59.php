<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_4e1e62063b6391b6a982bb994e81bc1a53103420b3604cdd730d97be81c2126e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4fa65bb7dc438cf62bf2a1546962e8aa754b29fb4f2bc8c07143611c63c0f16c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fa65bb7dc438cf62bf2a1546962e8aa754b29fb4f2bc8c07143611c63c0f16c->enter($__internal_4fa65bb7dc438cf62bf2a1546962e8aa754b29fb4f2bc8c07143611c63c0f16c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_01e8ca4da4b1eb8541868dd4505593d81b63192cb73d36671d16e8663d834d22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01e8ca4da4b1eb8541868dd4505593d81b63192cb73d36671d16e8663d834d22->enter($__internal_01e8ca4da4b1eb8541868dd4505593d81b63192cb73d36671d16e8663d834d22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4fa65bb7dc438cf62bf2a1546962e8aa754b29fb4f2bc8c07143611c63c0f16c->leave($__internal_4fa65bb7dc438cf62bf2a1546962e8aa754b29fb4f2bc8c07143611c63c0f16c_prof);

        
        $__internal_01e8ca4da4b1eb8541868dd4505593d81b63192cb73d36671d16e8663d834d22->leave($__internal_01e8ca4da4b1eb8541868dd4505593d81b63192cb73d36671d16e8663d834d22_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_78e290404ad6d72ce7036185e0790ebed9534bbf2b3c52906a3ddaadb586c210 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78e290404ad6d72ce7036185e0790ebed9534bbf2b3c52906a3ddaadb586c210->enter($__internal_78e290404ad6d72ce7036185e0790ebed9534bbf2b3c52906a3ddaadb586c210_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_1ab7ad6a22fcf33d0279da2155833f5b8a568aa9f8a19d26a06ec94a018ee165 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ab7ad6a22fcf33d0279da2155833f5b8a568aa9f8a19d26a06ec94a018ee165->enter($__internal_1ab7ad6a22fcf33d0279da2155833f5b8a568aa9f8a19d26a06ec94a018ee165_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_1ab7ad6a22fcf33d0279da2155833f5b8a568aa9f8a19d26a06ec94a018ee165->leave($__internal_1ab7ad6a22fcf33d0279da2155833f5b8a568aa9f8a19d26a06ec94a018ee165_prof);

        
        $__internal_78e290404ad6d72ce7036185e0790ebed9534bbf2b3c52906a3ddaadb586c210->leave($__internal_78e290404ad6d72ce7036185e0790ebed9534bbf2b3c52906a3ddaadb586c210_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1ca40d56bc3699358c1f4826c9a187931dce3e85d61a0d8e82a588b878af4f44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ca40d56bc3699358c1f4826c9a187931dce3e85d61a0d8e82a588b878af4f44->enter($__internal_1ca40d56bc3699358c1f4826c9a187931dce3e85d61a0d8e82a588b878af4f44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8ee48039b5edfda8121efeb27c34b2514f974d72ca3175d3b7dfff60c103f531 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ee48039b5edfda8121efeb27c34b2514f974d72ca3175d3b7dfff60c103f531->enter($__internal_8ee48039b5edfda8121efeb27c34b2514f974d72ca3175d3b7dfff60c103f531_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_8ee48039b5edfda8121efeb27c34b2514f974d72ca3175d3b7dfff60c103f531->leave($__internal_8ee48039b5edfda8121efeb27c34b2514f974d72ca3175d3b7dfff60c103f531_prof);

        
        $__internal_1ca40d56bc3699358c1f4826c9a187931dce3e85d61a0d8e82a588b878af4f44->leave($__internal_1ca40d56bc3699358c1f4826c9a187931dce3e85d61a0d8e82a588b878af4f44_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_32814d01b057f26ad83f5ad4abe28136b342e5de8de4df14c8dce6d455f3c7f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32814d01b057f26ad83f5ad4abe28136b342e5de8de4df14c8dce6d455f3c7f8->enter($__internal_32814d01b057f26ad83f5ad4abe28136b342e5de8de4df14c8dce6d455f3c7f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_45608449112b15c26fa8f282243867833dabd0b7cd56bd30ff64dad2053e1225 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45608449112b15c26fa8f282243867833dabd0b7cd56bd30ff64dad2053e1225->enter($__internal_45608449112b15c26fa8f282243867833dabd0b7cd56bd30ff64dad2053e1225_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_45608449112b15c26fa8f282243867833dabd0b7cd56bd30ff64dad2053e1225->leave($__internal_45608449112b15c26fa8f282243867833dabd0b7cd56bd30ff64dad2053e1225_prof);

        
        $__internal_32814d01b057f26ad83f5ad4abe28136b342e5de8de4df14c8dce6d455f3c7f8->leave($__internal_32814d01b057f26ad83f5ad4abe28136b342e5de8de4df14c8dce6d455f3c7f8_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "D:\\xampp\\htdocs\\lubricentro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
