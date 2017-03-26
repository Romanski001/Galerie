<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_12f738d54aff3bf3f6a56dc81f2505fdcba5d762d3d028c6a50f1a44ad74da5e extends Twig_Template
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
        $__internal_acdd7833320b98c55251c241e3eeb46e4a65cb0a614867af778d28b3317df08c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acdd7833320b98c55251c241e3eeb46e4a65cb0a614867af778d28b3317df08c->enter($__internal_acdd7833320b98c55251c241e3eeb46e4a65cb0a614867af778d28b3317df08c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_feaa993596b5e6686b213d93ee2629d81b66102060bf031d0464182429d23bc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_feaa993596b5e6686b213d93ee2629d81b66102060bf031d0464182429d23bc8->enter($__internal_feaa993596b5e6686b213d93ee2629d81b66102060bf031d0464182429d23bc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_acdd7833320b98c55251c241e3eeb46e4a65cb0a614867af778d28b3317df08c->leave($__internal_acdd7833320b98c55251c241e3eeb46e4a65cb0a614867af778d28b3317df08c_prof);

        
        $__internal_feaa993596b5e6686b213d93ee2629d81b66102060bf031d0464182429d23bc8->leave($__internal_feaa993596b5e6686b213d93ee2629d81b66102060bf031d0464182429d23bc8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_79e33164ead991614a15b1edcf5ec78e397787406585c18f39dfe5d4157d3091 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79e33164ead991614a15b1edcf5ec78e397787406585c18f39dfe5d4157d3091->enter($__internal_79e33164ead991614a15b1edcf5ec78e397787406585c18f39dfe5d4157d3091_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d11756b42234e7b7236c721c6aa2b09fc724fd903d1dd2f0bbe400109a7a4d3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d11756b42234e7b7236c721c6aa2b09fc724fd903d1dd2f0bbe400109a7a4d3c->enter($__internal_d11756b42234e7b7236c721c6aa2b09fc724fd903d1dd2f0bbe400109a7a4d3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_d11756b42234e7b7236c721c6aa2b09fc724fd903d1dd2f0bbe400109a7a4d3c->leave($__internal_d11756b42234e7b7236c721c6aa2b09fc724fd903d1dd2f0bbe400109a7a4d3c_prof);

        
        $__internal_79e33164ead991614a15b1edcf5ec78e397787406585c18f39dfe5d4157d3091->leave($__internal_79e33164ead991614a15b1edcf5ec78e397787406585c18f39dfe5d4157d3091_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0b98f2e79b7d2359b8a437b7ccf6f50cb26c2cdc9431c40a596ee1cf9b00c19c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b98f2e79b7d2359b8a437b7ccf6f50cb26c2cdc9431c40a596ee1cf9b00c19c->enter($__internal_0b98f2e79b7d2359b8a437b7ccf6f50cb26c2cdc9431c40a596ee1cf9b00c19c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_95ad8879437ba9099e1fec8891ba748126fbc78795f037f97587c1fc0b1ec999 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95ad8879437ba9099e1fec8891ba748126fbc78795f037f97587c1fc0b1ec999->enter($__internal_95ad8879437ba9099e1fec8891ba748126fbc78795f037f97587c1fc0b1ec999_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_95ad8879437ba9099e1fec8891ba748126fbc78795f037f97587c1fc0b1ec999->leave($__internal_95ad8879437ba9099e1fec8891ba748126fbc78795f037f97587c1fc0b1ec999_prof);

        
        $__internal_0b98f2e79b7d2359b8a437b7ccf6f50cb26c2cdc9431c40a596ee1cf9b00c19c->leave($__internal_0b98f2e79b7d2359b8a437b7ccf6f50cb26c2cdc9431c40a596ee1cf9b00c19c_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6349effcb13d9f761e6a0115a2e66190ed3d8891f6b3f8ce9ffad9f8d68879e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6349effcb13d9f761e6a0115a2e66190ed3d8891f6b3f8ce9ffad9f8d68879e6->enter($__internal_6349effcb13d9f761e6a0115a2e66190ed3d8891f6b3f8ce9ffad9f8d68879e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_fe69bef0be71a8156ef98f7a7b5ae9e95a8d897adc88f5bc3c5a6a8b66728e18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe69bef0be71a8156ef98f7a7b5ae9e95a8d897adc88f5bc3c5a6a8b66728e18->enter($__internal_fe69bef0be71a8156ef98f7a7b5ae9e95a8d897adc88f5bc3c5a6a8b66728e18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_fe69bef0be71a8156ef98f7a7b5ae9e95a8d897adc88f5bc3c5a6a8b66728e18->leave($__internal_fe69bef0be71a8156ef98f7a7b5ae9e95a8d897adc88f5bc3c5a6a8b66728e18_prof);

        
        $__internal_6349effcb13d9f761e6a0115a2e66190ed3d8891f6b3f8ce9ffad9f8d68879e6->leave($__internal_6349effcb13d9f761e6a0115a2e66190ed3d8891f6b3f8ce9ffad9f8d68879e6_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/home/alexandre/Galerie/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
