<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_9627d53d13478947853d5ee20d7513a2fd1afeefff09a927d9cf020d22105127 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_5175fb8fd324f8678c6c3d813c356678c67ff9df6f5df55e1394e9d5944db85b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5175fb8fd324f8678c6c3d813c356678c67ff9df6f5df55e1394e9d5944db85b->enter($__internal_5175fb8fd324f8678c6c3d813c356678c67ff9df6f5df55e1394e9d5944db85b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_f326957a6d8a23888bbcf8a3d01836dfc9e34263d27c08228e45ca39ad48eae0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f326957a6d8a23888bbcf8a3d01836dfc9e34263d27c08228e45ca39ad48eae0->enter($__internal_f326957a6d8a23888bbcf8a3d01836dfc9e34263d27c08228e45ca39ad48eae0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5175fb8fd324f8678c6c3d813c356678c67ff9df6f5df55e1394e9d5944db85b->leave($__internal_5175fb8fd324f8678c6c3d813c356678c67ff9df6f5df55e1394e9d5944db85b_prof);

        
        $__internal_f326957a6d8a23888bbcf8a3d01836dfc9e34263d27c08228e45ca39ad48eae0->leave($__internal_f326957a6d8a23888bbcf8a3d01836dfc9e34263d27c08228e45ca39ad48eae0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e38e8077a556840ab631fb24652a4a860fb3a8e4520b842cc5894a818b83f36d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e38e8077a556840ab631fb24652a4a860fb3a8e4520b842cc5894a818b83f36d->enter($__internal_e38e8077a556840ab631fb24652a4a860fb3a8e4520b842cc5894a818b83f36d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_ca697b98f281f5897dc979f0cf1c54d26b5bbc6d6b92e30de949c9b5f1720cbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca697b98f281f5897dc979f0cf1c54d26b5bbc6d6b92e30de949c9b5f1720cbe->enter($__internal_ca697b98f281f5897dc979f0cf1c54d26b5bbc6d6b92e30de949c9b5f1720cbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ca697b98f281f5897dc979f0cf1c54d26b5bbc6d6b92e30de949c9b5f1720cbe->leave($__internal_ca697b98f281f5897dc979f0cf1c54d26b5bbc6d6b92e30de949c9b5f1720cbe_prof);

        
        $__internal_e38e8077a556840ab631fb24652a4a860fb3a8e4520b842cc5894a818b83f36d->leave($__internal_e38e8077a556840ab631fb24652a4a860fb3a8e4520b842cc5894a818b83f36d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4fbffebabf7e936a81258e3d62c125936620308f54f8bca76d03b0a40bafb18e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fbffebabf7e936a81258e3d62c125936620308f54f8bca76d03b0a40bafb18e->enter($__internal_4fbffebabf7e936a81258e3d62c125936620308f54f8bca76d03b0a40bafb18e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5c39126dfcd93eb299e42036f06d4de8cc3680af43ada2569e9f924b6d8e48cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c39126dfcd93eb299e42036f06d4de8cc3680af43ada2569e9f924b6d8e48cc->enter($__internal_5c39126dfcd93eb299e42036f06d4de8cc3680af43ada2569e9f924b6d8e48cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5c39126dfcd93eb299e42036f06d4de8cc3680af43ada2569e9f924b6d8e48cc->leave($__internal_5c39126dfcd93eb299e42036f06d4de8cc3680af43ada2569e9f924b6d8e48cc_prof);

        
        $__internal_4fbffebabf7e936a81258e3d62c125936620308f54f8bca76d03b0a40bafb18e->leave($__internal_4fbffebabf7e936a81258e3d62c125936620308f54f8bca76d03b0a40bafb18e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4ff016ebd16bf5cc3fc561d44bdc7c1bb53b9e1c0206fe3ddcb118f7f5e8d933 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ff016ebd16bf5cc3fc561d44bdc7c1bb53b9e1c0206fe3ddcb118f7f5e8d933->enter($__internal_4ff016ebd16bf5cc3fc561d44bdc7c1bb53b9e1c0206fe3ddcb118f7f5e8d933_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_37e1ee10a2a1b49ac47113526247b6aa17424cf05d9784b866c5916ee768bbc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37e1ee10a2a1b49ac47113526247b6aa17424cf05d9784b866c5916ee768bbc3->enter($__internal_37e1ee10a2a1b49ac47113526247b6aa17424cf05d9784b866c5916ee768bbc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_37e1ee10a2a1b49ac47113526247b6aa17424cf05d9784b866c5916ee768bbc3->leave($__internal_37e1ee10a2a1b49ac47113526247b6aa17424cf05d9784b866c5916ee768bbc3_prof);

        
        $__internal_4ff016ebd16bf5cc3fc561d44bdc7c1bb53b9e1c0206fe3ddcb118f7f5e8d933->leave($__internal_4ff016ebd16bf5cc3fc561d44bdc7c1bb53b9e1c0206fe3ddcb118f7f5e8d933_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "D:\\xampp\\htdocs\\lubricentro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
