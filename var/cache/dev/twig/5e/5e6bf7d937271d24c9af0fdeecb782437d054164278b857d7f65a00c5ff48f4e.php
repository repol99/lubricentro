<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_58aa110af32ce6bb47015bf8b7fae47d351c8ecf5386b4eeedc6afdb015fad45 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_631c0c3e3f341f94e3fd2513edad9dec92ff782d359b180646e83b3ce976abaf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_631c0c3e3f341f94e3fd2513edad9dec92ff782d359b180646e83b3ce976abaf->enter($__internal_631c0c3e3f341f94e3fd2513edad9dec92ff782d359b180646e83b3ce976abaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_8b5a02c788516cdcdaf15826ca48a998d32dc9e6a4243967f06eaeab85cbc189 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b5a02c788516cdcdaf15826ca48a998d32dc9e6a4243967f06eaeab85cbc189->enter($__internal_8b5a02c788516cdcdaf15826ca48a998d32dc9e6a4243967f06eaeab85cbc189_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_631c0c3e3f341f94e3fd2513edad9dec92ff782d359b180646e83b3ce976abaf->leave($__internal_631c0c3e3f341f94e3fd2513edad9dec92ff782d359b180646e83b3ce976abaf_prof);

        
        $__internal_8b5a02c788516cdcdaf15826ca48a998d32dc9e6a4243967f06eaeab85cbc189->leave($__internal_8b5a02c788516cdcdaf15826ca48a998d32dc9e6a4243967f06eaeab85cbc189_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4842eccc626abb5f4fa1cc33df86b62933546e2c9a9ec2bf578d754ee4570cc6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4842eccc626abb5f4fa1cc33df86b62933546e2c9a9ec2bf578d754ee4570cc6->enter($__internal_4842eccc626abb5f4fa1cc33df86b62933546e2c9a9ec2bf578d754ee4570cc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_e48899ef159cd060a89e61e0c7d334a2b737e6c45ea3d09b311994402406b5f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e48899ef159cd060a89e61e0c7d334a2b737e6c45ea3d09b311994402406b5f5->enter($__internal_e48899ef159cd060a89e61e0c7d334a2b737e6c45ea3d09b311994402406b5f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_e48899ef159cd060a89e61e0c7d334a2b737e6c45ea3d09b311994402406b5f5->leave($__internal_e48899ef159cd060a89e61e0c7d334a2b737e6c45ea3d09b311994402406b5f5_prof);

        
        $__internal_4842eccc626abb5f4fa1cc33df86b62933546e2c9a9ec2bf578d754ee4570cc6->leave($__internal_4842eccc626abb5f4fa1cc33df86b62933546e2c9a9ec2bf578d754ee4570cc6_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "D:\\xampp\\htdocs\\lubricentro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
