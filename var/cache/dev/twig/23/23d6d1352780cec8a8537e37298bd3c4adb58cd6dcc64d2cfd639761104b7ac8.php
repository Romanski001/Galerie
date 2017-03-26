<?php

/* oeuvre/new.html.twig */
class __TwigTemplate_82a8cb9665ea65eeb006d331bdeabb3372a5f73b5db5b7c5a21d95f6936bd09d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "oeuvre/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4ad54673b0deeb8c902c56d37fc72f07ff91165401da7b7fe34bd86ddfa8c8ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ad54673b0deeb8c902c56d37fc72f07ff91165401da7b7fe34bd86ddfa8c8ea->enter($__internal_4ad54673b0deeb8c902c56d37fc72f07ff91165401da7b7fe34bd86ddfa8c8ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "oeuvre/new.html.twig"));

        $__internal_cec0f35f583856a34bf12cfd1d25b42044543ead9f78bf3439bc276e1c9b6eda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cec0f35f583856a34bf12cfd1d25b42044543ead9f78bf3439bc276e1c9b6eda->enter($__internal_cec0f35f583856a34bf12cfd1d25b42044543ead9f78bf3439bc276e1c9b6eda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "oeuvre/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4ad54673b0deeb8c902c56d37fc72f07ff91165401da7b7fe34bd86ddfa8c8ea->leave($__internal_4ad54673b0deeb8c902c56d37fc72f07ff91165401da7b7fe34bd86ddfa8c8ea_prof);

        
        $__internal_cec0f35f583856a34bf12cfd1d25b42044543ead9f78bf3439bc276e1c9b6eda->leave($__internal_cec0f35f583856a34bf12cfd1d25b42044543ead9f78bf3439bc276e1c9b6eda_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4e72aa26feb4a3025bf16e24a95abafbdc84c97d12a65fe02e8a6744ee0a18d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e72aa26feb4a3025bf16e24a95abafbdc84c97d12a65fe02e8a6744ee0a18d6->enter($__internal_4e72aa26feb4a3025bf16e24a95abafbdc84c97d12a65fe02e8a6744ee0a18d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_800391b67d6d1600b99a4b699a23d1f2f9766a34d96ccab10d39487da7b59c3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_800391b67d6d1600b99a4b699a23d1f2f9766a34d96ccab10d39487da7b59c3b->enter($__internal_800391b67d6d1600b99a4b699a23d1f2f9766a34d96ccab10d39487da7b59c3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Oeuvre creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oeuvre_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_800391b67d6d1600b99a4b699a23d1f2f9766a34d96ccab10d39487da7b59c3b->leave($__internal_800391b67d6d1600b99a4b699a23d1f2f9766a34d96ccab10d39487da7b59c3b_prof);

        
        $__internal_4e72aa26feb4a3025bf16e24a95abafbdc84c97d12a65fe02e8a6744ee0a18d6->leave($__internal_4e72aa26feb4a3025bf16e24a95abafbdc84c97d12a65fe02e8a6744ee0a18d6_prof);

    }

    public function getTemplateName()
    {
        return "oeuvre/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Oeuvre creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('oeuvre_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "oeuvre/new.html.twig", "/home/alexandre/Galerie/app/Resources/views/oeuvre/new.html.twig");
    }
}
