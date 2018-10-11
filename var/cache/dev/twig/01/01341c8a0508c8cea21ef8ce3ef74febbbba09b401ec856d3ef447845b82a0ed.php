<?php

/* CsaGuzzleBundle:Collector:guzzle.html.twig */
class __TwigTemplate_c3257ea293794961e94f3b298c612f6555afdc864dc22a747f6d0348407a06c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "CsaGuzzleBundle:Collector:guzzle.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_c5b0b2a78b8eb7a6f02c90bb9cb6c6015e06f5021b754c93d208d8ace173b8ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5b0b2a78b8eb7a6f02c90bb9cb6c6015e06f5021b754c93d208d8ace173b8ff->enter($__internal_c5b0b2a78b8eb7a6f02c90bb9cb6c6015e06f5021b754c93d208d8ace173b8ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CsaGuzzleBundle:Collector:guzzle.html.twig"));

        $__internal_fa1773a93f6431be7fb7424da0100de177d95b906aca16161ad3a1f4ac82853a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa1773a93f6431be7fb7424da0100de177d95b906aca16161ad3a1f4ac82853a->enter($__internal_fa1773a93f6431be7fb7424da0100de177d95b906aca16161ad3a1f4ac82853a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CsaGuzzleBundle:Collector:guzzle.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c5b0b2a78b8eb7a6f02c90bb9cb6c6015e06f5021b754c93d208d8ace173b8ff->leave($__internal_c5b0b2a78b8eb7a6f02c90bb9cb6c6015e06f5021b754c93d208d8ace173b8ff_prof);

        
        $__internal_fa1773a93f6431be7fb7424da0100de177d95b906aca16161ad3a1f4ac82853a->leave($__internal_fa1773a93f6431be7fb7424da0100de177d95b906aca16161ad3a1f4ac82853a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2e23568157b24f969de2a6a175c0d4ae33063a3800cfa34c7f5168ef77568f68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e23568157b24f969de2a6a175c0d4ae33063a3800cfa34c7f5168ef77568f68->enter($__internal_2e23568157b24f969de2a6a175c0d4ae33063a3800cfa34c7f5168ef77568f68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_b716d3263ae6d70219273d598c4c336658ac8989738ad5f3d5d6bb7abb94bbd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b716d3263ae6d70219273d598c4c336658ac8989738ad5f3d5d6bb7abb94bbd7->enter($__internal_b716d3263ae6d70219273d598c4c336658ac8989738ad5f3d5d6bb7abb94bbd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        $context["profiler_markup_version"] = ((array_key_exists("profiler_markup_version", $context)) ? (_twig_default_filter(($context["profiler_markup_version"] ?? $this->getContext($context, "profiler_markup_version")), 1)) : (1));
        // line 5
        echo "
    ";
        // line 6
        $context["callCount"] = twig_length_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "calls", array()));
        // line 7
        echo "    ";
        $context["errorCount"] = twig_length_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "errors", array()));
        // line 8
        echo "
    ";
        // line 9
        if ((($context["callCount"] ?? $this->getContext($context, "callCount")) == 0)) {
            // line 10
            echo "        ";
            $context["color_code"] = "";
            // line 11
            echo "    ";
        } elseif ((($context["errorCount"] ?? $this->getContext($context, "errorCount")) > 0)) {
            // line 12
            echo "        ";
            $context["color_code"] = "red";
            // line 13
            echo "    ";
        } else {
            // line 14
            echo "        ";
            $context["color_code"] = "green";
            // line 15
            echo "    ";
        }
        // line 16
        echo "
    ";
        // line 17
        ob_start();
        // line 18
        echo "        ";
        if ((($context["profiler_markup_version"] ?? $this->getContext($context, "profiler_markup_version")) == 1)) {
            // line 19
            echo "            ";
            echo twig_include($this->env, $context, "@CsaGuzzle/Icon/guzzle.svg", array("height" => 28, "color" => "#3F3F3F"));
            echo "
            <span class=\"sf-toolbar-status sf-toolbar-status-";
            // line 20
            echo twig_escape_filter($this->env, ($context["color_code"] ?? $this->getContext($context, "color_code")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["callCount"] ?? $this->getContext($context, "callCount")), "html", null, true);
            echo "</span>
        ";
        } else {
            // line 22
            echo "            ";
            echo twig_include($this->env, $context, "@CsaGuzzle/Icon/guzzle.svg");
            echo "
            <span class=\"sf-toolbar-value\">";
            // line 23
            echo twig_escape_filter($this->env, ($context["callCount"] ?? $this->getContext($context, "callCount")), "html", null, true);
            echo "</span>
        ";
        }
        // line 25
        echo "    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 26
        echo "
    ";
        // line 27
        ob_start();
        // line 28
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>Success</b>
            <span class=\"sf-toolbar-status sf-toolbar-status-green\">";
        // line 30
        echo twig_escape_filter($this->env, (($context["callCount"] ?? $this->getContext($context, "callCount")) - ($context["errorCount"] ?? $this->getContext($context, "errorCount"))), "html", null, true);
        echo "</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Errors</b>
            <span class=\"sf-toolbar-status sf-toolbar-status-red\">";
        // line 34
        echo twig_escape_filter($this->env, ($context["errorCount"] ?? $this->getContext($context, "errorCount")), "html", null, true);
        echo "</span>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 37
        echo "
    ";
        // line 38
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => "guzzle", "status" => ($context["color_code"] ?? $this->getContext($context, "color_code"))));
        echo "
";
        
        $__internal_b716d3263ae6d70219273d598c4c336658ac8989738ad5f3d5d6bb7abb94bbd7->leave($__internal_b716d3263ae6d70219273d598c4c336658ac8989738ad5f3d5d6bb7abb94bbd7_prof);

        
        $__internal_2e23568157b24f969de2a6a175c0d4ae33063a3800cfa34c7f5168ef77568f68->leave($__internal_2e23568157b24f969de2a6a175c0d4ae33063a3800cfa34c7f5168ef77568f68_prof);

    }

    // line 41
    public function block_head($context, array $blocks = array())
    {
        $__internal_eb6f9ae5ab29dbc0b2279dde64acb30355dc78cb5170f094963edde9a9921a60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb6f9ae5ab29dbc0b2279dde64acb30355dc78cb5170f094963edde9a9921a60->enter($__internal_eb6f9ae5ab29dbc0b2279dde64acb30355dc78cb5170f094963edde9a9921a60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ce79d6416d2171ded8d69b4db2e406727a34ee266c1c646bda952ee096a0d6fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce79d6416d2171ded8d69b4db2e406727a34ee266c1c646bda952ee096a0d6fc->enter($__internal_ce79d6416d2171ded8d69b4db2e406727a34ee266c1c646bda952ee096a0d6fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 42
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/csaguzzle/css/screen.min.css"), "html", null, true);
        echo "\">
    <script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/csaguzzle/js/guzzle.min.js"), "html", null, true);
        echo "\"></script>
    ";
        // line 45
        $context["profiler_markup_version"] = ((array_key_exists("profiler_markup_version", $context)) ? (_twig_default_filter(($context["profiler_markup_version"] ?? $this->getContext($context, "profiler_markup_version")), 1)) : (1));
        // line 46
        echo "    ";
        if ((($context["profiler_markup_version"] ?? $this->getContext($context, "profiler_markup_version")) == 1)) {
            // line 47
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/csaguzzle/css/legacy.min.css"), "html", null, true);
            echo "\">
        <script src=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/csaguzzle/js/legacy.min.js"), "html", null, true);
            echo "\"></script>
        <script type=\"text/javascript\">window.addEventListener('load', Guzzle.createTabs, false);</script>
    ";
        }
        
        $__internal_ce79d6416d2171ded8d69b4db2e406727a34ee266c1c646bda952ee096a0d6fc->leave($__internal_ce79d6416d2171ded8d69b4db2e406727a34ee266c1c646bda952ee096a0d6fc_prof);

        
        $__internal_eb6f9ae5ab29dbc0b2279dde64acb30355dc78cb5170f094963edde9a9921a60->leave($__internal_eb6f9ae5ab29dbc0b2279dde64acb30355dc78cb5170f094963edde9a9921a60_prof);

    }

    // line 53
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c35fd2401faab0fc6f7cf8c8a79f5a2ac793bbd6f345a22726a8b734ce2361ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c35fd2401faab0fc6f7cf8c8a79f5a2ac793bbd6f345a22726a8b734ce2361ad->enter($__internal_c35fd2401faab0fc6f7cf8c8a79f5a2ac793bbd6f345a22726a8b734ce2361ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_7e91ef22b2b56d3ab8e0ac098375ce8966381132096b71f4eb91289cefb05c74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e91ef22b2b56d3ab8e0ac098375ce8966381132096b71f4eb91289cefb05c74->enter($__internal_7e91ef22b2b56d3ab8e0ac098375ce8966381132096b71f4eb91289cefb05c74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 54
        echo "    <span class=\"label ";
        if ((twig_length_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "errors", array())) > 0)) {
            echo "label-status-error";
        }
        echo "\">
        <span class=\"icon\">
            ";
        // line 56
        $context["profiler_markup_version"] = ((array_key_exists("profiler_markup_version", $context)) ? (_twig_default_filter(($context["profiler_markup_version"] ?? $this->getContext($context, "profiler_markup_version")), 1)) : (1));
        // line 57
        echo "            ";
        if ((($context["profiler_markup_version"] ?? $this->getContext($context, "profiler_markup_version")) == 1)) {
            // line 58
            echo "                ";
            echo twig_include($this->env, $context, "@CsaGuzzle/Icon/guzzle.svg", array("height" => 30, "color" => "#3F3F3F"));
            echo "
            ";
        } else {
            // line 60
            echo "                ";
            echo twig_include($this->env, $context, "@CsaGuzzle/Icon/guzzle.svg");
            echo "
            ";
        }
        // line 62
        echo "
        </span>
        <strong>";
        // line 64
        echo twig_escape_filter($this->env, _twig_default_filter(twig_capitalize_string_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "name", array())), "HTTP calls"), "html", null, true);
        echo "</strong>
        <span class=\"count\">
            ";
        // line 66
        if ( !twig_test_empty($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "calls", array()))) {
            // line 67
            echo "                <span>";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "calls", array())), "html", null, true);
            echo "</span>
            ";
        }
        // line 69
        echo "        </span>
    </span>
";
        
        $__internal_7e91ef22b2b56d3ab8e0ac098375ce8966381132096b71f4eb91289cefb05c74->leave($__internal_7e91ef22b2b56d3ab8e0ac098375ce8966381132096b71f4eb91289cefb05c74_prof);

        
        $__internal_c35fd2401faab0fc6f7cf8c8a79f5a2ac793bbd6f345a22726a8b734ce2361ad->leave($__internal_c35fd2401faab0fc6f7cf8c8a79f5a2ac793bbd6f345a22726a8b734ce2361ad_prof);

    }

    // line 73
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a79ab08d3db1dd63b35a6891240b882bd8673c26be329e86d64336670bf747ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a79ab08d3db1dd63b35a6891240b882bd8673c26be329e86d64336670bf747ff->enter($__internal_a79ab08d3db1dd63b35a6891240b882bd8673c26be329e86d64336670bf747ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7363b581cf25d913c51f354d8a126e9ff1b2e5f9bd66743f6fd5e71b7599a080 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7363b581cf25d913c51f354d8a126e9ff1b2e5f9bd66743f6fd5e71b7599a080->enter($__internal_7363b581cf25d913c51f354d8a126e9ff1b2e5f9bd66743f6fd5e71b7599a080_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 74
        echo "    <h2>";
        echo twig_escape_filter($this->env, _twig_default_filter(twig_capitalize_string_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "name", array())), "HTTP calls"), "html", null, true);
        echo "</h2>
    ";
        // line 75
        echo twig_include($this->env, $context, "@CsaGuzzle/Calls/list.html.twig", array("calls" => $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "calls", array())));
        echo "
";
        
        $__internal_7363b581cf25d913c51f354d8a126e9ff1b2e5f9bd66743f6fd5e71b7599a080->leave($__internal_7363b581cf25d913c51f354d8a126e9ff1b2e5f9bd66743f6fd5e71b7599a080_prof);

        
        $__internal_a79ab08d3db1dd63b35a6891240b882bd8673c26be329e86d64336670bf747ff->leave($__internal_a79ab08d3db1dd63b35a6891240b882bd8673c26be329e86d64336670bf747ff_prof);

    }

    public function getTemplateName()
    {
        return "CsaGuzzleBundle:Collector:guzzle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  279 => 75,  274 => 74,  265 => 73,  253 => 69,  247 => 67,  245 => 66,  240 => 64,  236 => 62,  230 => 60,  224 => 58,  221 => 57,  219 => 56,  211 => 54,  202 => 53,  188 => 48,  183 => 47,  180 => 46,  178 => 45,  174 => 44,  170 => 43,  165 => 42,  156 => 41,  144 => 38,  141 => 37,  135 => 34,  128 => 30,  124 => 28,  122 => 27,  119 => 26,  116 => 25,  111 => 23,  106 => 22,  99 => 20,  94 => 19,  91 => 18,  89 => 17,  86 => 16,  83 => 15,  80 => 14,  77 => 13,  74 => 12,  71 => 11,  68 => 10,  66 => 9,  63 => 8,  60 => 7,  58 => 6,  55 => 5,  52 => 4,  43 => 3,  11 => 1,);
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
    {% set profiler_markup_version = profiler_markup_version|default(1) %}

    {% set callCount = collector.calls|length %}
    {% set errorCount = collector.errors|length %}

    {% if callCount == 0 %}
        {% set color_code = '' %}
    {% elseif errorCount > 0 %}
        {% set color_code = 'red' %}
    {% else %}
        {% set color_code = 'green' %}
    {% endif %}

    {% set icon %}
        {% if profiler_markup_version == 1 %}
            {{ include('@CsaGuzzle/Icon/guzzle.svg', { height: 28, color: '#3F3F3F' }) }}
            <span class=\"sf-toolbar-status sf-toolbar-status-{{ color_code }}\">{{ callCount }}</span>
        {% else %}
            {{ include('@CsaGuzzle/Icon/guzzle.svg') }}
            <span class=\"sf-toolbar-value\">{{ callCount }}</span>
        {% endif %}
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b>Success</b>
            <span class=\"sf-toolbar-status sf-toolbar-status-green\">{{ callCount - errorCount }}</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Errors</b>
            <span class=\"sf-toolbar-status sf-toolbar-status-red\">{{ errorCount }}</span>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: 'guzzle', status: color_code }) }}
{% endblock %}

{% block head %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/csaguzzle/css/screen.min.css') }}\">
    <script src=\"{{ asset('bundles/csaguzzle/js/guzzle.min.js') }}\"></script>
    {% set profiler_markup_version = profiler_markup_version|default(1) %}
    {% if profiler_markup_version == 1 %}
        <link rel=\"stylesheet\" href=\"{{ asset('bundles/csaguzzle/css/legacy.min.css') }}\">
        <script src=\"{{ asset('bundles/csaguzzle/js/legacy.min.js') }}\"></script>
        <script type=\"text/javascript\">window.addEventListener('load', Guzzle.createTabs, false);</script>
    {% endif %}
{% endblock %}

{% block menu %}
    <span class=\"label {% if collector.errors|length > 0 %}label-status-error{% endif %}\">
        <span class=\"icon\">
            {% set profiler_markup_version = profiler_markup_version|default(1) %}
            {% if profiler_markup_version == 1 %}
                {{ include('@CsaGuzzle/Icon/guzzle.svg', { height: 30, color: '#3F3F3F' }) }}
            {% else %}
                {{ include('@CsaGuzzle/Icon/guzzle.svg')}}
            {% endif %}

        </span>
        <strong>{{ collector.name|capitalize|default('HTTP calls') }}</strong>
        <span class=\"count\">
            {% if collector.calls is not empty %}
                <span>{{ collector.calls|length }}</span>
            {% endif %}
        </span>
    </span>
{% endblock %}

{% block panel %}
    <h2>{{ (collector.name|capitalize)|default('HTTP calls') }}</h2>
    {{  include('@CsaGuzzle/Calls/list.html.twig', { calls: collector.calls }) }}
{% endblock %}
", "CsaGuzzleBundle:Collector:guzzle.html.twig", "D:\\xampp\\htdocs\\lubricentro\\vendor\\csa\\guzzle-bundle\\src/Resources/views/Collector/guzzle.html.twig");
    }
}
