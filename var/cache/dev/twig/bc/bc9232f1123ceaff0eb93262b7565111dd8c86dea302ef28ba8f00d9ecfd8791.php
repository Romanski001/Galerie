<?php

/* peinture/new.html.twig */
class __TwigTemplate_6fcb77c7f0f0eee2fdfc0d03e4c8c0e85fbb461eb78954a93c2e118392cfe0c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "peinture/new.html.twig", 1);
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
        $__internal_c061a2d13547fc98db5c54f437887b07425d614f9418de252bf1ceba90a4bea3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c061a2d13547fc98db5c54f437887b07425d614f9418de252bf1ceba90a4bea3->enter($__internal_c061a2d13547fc98db5c54f437887b07425d614f9418de252bf1ceba90a4bea3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "peinture/new.html.twig"));

        $__internal_da262a31160a5273f18f3104981ee4d2a5112a1d15c21cda34cacdbe4a79fafc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da262a31160a5273f18f3104981ee4d2a5112a1d15c21cda34cacdbe4a79fafc->enter($__internal_da262a31160a5273f18f3104981ee4d2a5112a1d15c21cda34cacdbe4a79fafc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "peinture/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c061a2d13547fc98db5c54f437887b07425d614f9418de252bf1ceba90a4bea3->leave($__internal_c061a2d13547fc98db5c54f437887b07425d614f9418de252bf1ceba90a4bea3_prof);

        
        $__internal_da262a31160a5273f18f3104981ee4d2a5112a1d15c21cda34cacdbe4a79fafc->leave($__internal_da262a31160a5273f18f3104981ee4d2a5112a1d15c21cda34cacdbe4a79fafc_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5b9928c985648cd15c5363f3ebcaceaa3f41523d5293ce4b2ea1282ee8453e45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b9928c985648cd15c5363f3ebcaceaa3f41523d5293ce4b2ea1282ee8453e45->enter($__internal_5b9928c985648cd15c5363f3ebcaceaa3f41523d5293ce4b2ea1282ee8453e45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_63a3362332ba6fdbcb52a740499760eb869e8b1ae8702160fb640b44efd545b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63a3362332ba6fdbcb52a740499760eb869e8b1ae8702160fb640b44efd545b4->enter($__internal_63a3362332ba6fdbcb52a740499760eb869e8b1ae8702160fb640b44efd545b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Peinture creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("peinture_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_63a3362332ba6fdbcb52a740499760eb869e8b1ae8702160fb640b44efd545b4->leave($__internal_63a3362332ba6fdbcb52a740499760eb869e8b1ae8702160fb640b44efd545b4_prof);

        
        $__internal_5b9928c985648cd15c5363f3ebcaceaa3f41523d5293ce4b2ea1282ee8453e45->leave($__internal_5b9928c985648cd15c5363f3ebcaceaa3f41523d5293ce4b2ea1282ee8453e45_prof);

    }

    public function getTemplateName()
    {
        return "peinture/new.html.twig";
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
    <h1>Peinture creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('peinture_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "peinture/new.html.twig", "/home/alexandre/Galerie/app/Resources/views/peinture/new.html.twig");
    }
}
