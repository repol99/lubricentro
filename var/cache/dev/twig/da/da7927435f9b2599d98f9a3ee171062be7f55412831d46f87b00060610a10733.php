<?php

/* @CsaGuzzle/Calls/list.html.twig */
class __TwigTemplate_3fdc06b40a16fba091213027dc17cb50ac8b20ca0cc818657f765dac91e1031e extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CsaGuzzle/Calls/list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CsaGuzzle/Calls/list.html.twig"));

        // line 1
        $context["macros"] = $this->loadTemplate("@CsaGuzzle/Calls/macros.html.twig", "@CsaGuzzle/Calls/list.html.twig", 1);
        // line 2
        echo "
<div class=\"accordion\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["calls"] ?? $this->getContext($context, "calls")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["call"]) {
            // line 5
            echo "        <section class=\"call\">
            <header class=\"accordion-header ";
            // line 6
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($context["call"], "request", array()), "method", array())), "html", null, true);
            echo "\">
                <span class=\"method-name\">";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["call"], "request", array()), "method", array()), "html", null, true);
            echo "</span>
                ";
            // line 8
            if (($this->getAttribute($this->getAttribute($context["call"], "request", array()), "method", array()) == "GET")) {
                // line 9
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["call"], "uri", array()), "html", null, true);
                echo "\" target=\"_blank\" class=\"path\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["call"], "uri", array()), "html", null, true);
                echo "</a>
                ";
            } else {
                // line 11
                echo "                    <span class=\"path\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["call"], "uri", array()), "html", null, true);
                echo "</span>
                ";
            }
            // line 13
            echo "                ";
            $context["statusCode"] = $this->getAttribute($context["call"], "httpCode", array());
            // line 14
            echo "                <span class=\"badge status-code ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Csa\Bundle\GuzzleBundle\Twig\Extension\GuzzleExtension')->statusCodeClass(($context["statusCode"] ?? $this->getContext($context, "statusCode"))), "html", null, true);
            echo "\">
                    ";
            // line 15
            echo twig_escape_filter($this->env, ($context["statusCode"] ?? $this->getContext($context, "statusCode")), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, (($this->getAttribute($context["call"], "response", array(), "any", true, true)) ? ($this->getAttribute($this->getAttribute($context["call"], "response", array()), "reasonPhrase", array())) : ("Unknown error")), "html", null, true);
            echo "
                </span>
                ";
            // line 17
            if ($this->getAttribute($context["call"], "cache", array(), "any", true, true)) {
                echo "<span class=\"badge cache ";
                echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($context["call"], "cache", array())), "html", null, true);
                echo "\">Cache ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["call"], "cache", array()), "html", null, true);
                echo "</span>";
            }
            // line 18
            echo "            </header>

            <div class=\"accordion-content";
            // line 20
            echo (($this->getAttribute($context["loop"], "first", array())) ? (" expanded") : (""));
            echo "\">
                <div class=\"sf-tabs\">
                    <div class=\"tab\">
                        <h3 class=\"tab-title\">Request</h3>
                        <div class=\"tab-content\">
                            ";
            // line 25
            echo $context["macros"]->getrender_infos($this->getAttribute($context["call"], "info", array()));
            echo "
                            ";
            // line 26
            echo $context["macros"]->getrender_headers($this->getAttribute($this->getAttribute($context["call"], "request", array()), "headers", array()), $this->getAttribute($context["call"], "uri", array()));
            echo "
                            ";
            // line 27
            echo $context["macros"]->getrender_body($this->getAttribute($this->getAttribute($context["call"], "request", array()), "body", array()));
            echo "
                        </div>
                    </div>
                    ";
            // line 30
            if ($this->getAttribute($context["call"], "response", array(), "any", true, true)) {
                // line 31
                echo "                        <div class=\"tab\">
                            <h3 class=\"tab-title\">Response</h3>
                            <div class=\"tab-content\">
                                ";
                // line 34
                echo $context["macros"]->getrender_headers($this->getAttribute($this->getAttribute($context["call"], "response", array()), "headers", array()), $this->getAttribute($context["call"], "uri", array()));
                echo "
                                ";
                // line 35
                echo $context["macros"]->getrender_body($this->getAttribute($this->getAttribute($context["call"], "response", array()), "body", array()));
                echo "
                            </div>
                        </div>
                    ";
            }
            // line 39
            echo "                </div>
            </div>
        </section>
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['call'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@CsaGuzzle/Calls/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 43,  142 => 39,  135 => 35,  131 => 34,  126 => 31,  124 => 30,  118 => 27,  114 => 26,  110 => 25,  102 => 20,  98 => 18,  90 => 17,  83 => 15,  78 => 14,  75 => 13,  69 => 11,  61 => 9,  59 => 8,  55 => 7,  51 => 6,  48 => 5,  31 => 4,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import '@CsaGuzzle/Calls/macros.html.twig' as macros %}

<div class=\"accordion\">
    {% for call in calls %}
        <section class=\"call\">
            <header class=\"accordion-header {{ call.request.method|lower }}\">
                <span class=\"method-name\">{{ call.request.method }}</span>
                {% if call.request.method == 'GET' %}
                    <a href=\"{{ call.uri }}\" target=\"_blank\" class=\"path\">{{ call.uri }}</a>
                {% else %}
                    <span class=\"path\">{{ call.uri }}</span>
                {% endif %}
                {% set statusCode = call.httpCode %}
                <span class=\"badge status-code {{ statusCode|csa_guzzle_status_code_class }}\">
                    {{ statusCode }} - {{ call.response is defined ? call.response.reasonPhrase : 'Unknown error' }}
                </span>
                {% if call.cache is defined %}<span class=\"badge cache {{ call.cache|lower }}\">Cache {{ call.cache }}</span>{% endif %}
            </header>

            <div class=\"accordion-content{{ loop.first ? ' expanded': '' }}\">
                <div class=\"sf-tabs\">
                    <div class=\"tab\">
                        <h3 class=\"tab-title\">Request</h3>
                        <div class=\"tab-content\">
                            {{ macros.render_infos(call.info) }}
                            {{ macros.render_headers(call.request.headers, call.uri) }}
                            {{ macros.render_body(call.request.body) }}
                        </div>
                    </div>
                    {% if call.response is defined %}
                        <div class=\"tab\">
                            <h3 class=\"tab-title\">Response</h3>
                            <div class=\"tab-content\">
                                {{ macros.render_headers(call.response.headers, call.uri) }}
                                {{ macros.render_body(call.response.body) }}
                            </div>
                        </div>
                    {% endif %}
                </div>
            </div>
        </section>
    {% endfor %}
</div>
", "@CsaGuzzle/Calls/list.html.twig", "D:\\xampp\\htdocs\\lubricentro\\vendor\\csa\\guzzle-bundle\\src\\Resources\\views\\Calls\\list.html.twig");
    }
}
