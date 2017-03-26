<?php

/* sculpture/new.html.twig */
class __TwigTemplate_0ca41e97f768f420b2a845834451cad0174c38a7adabd11c4ab44693223856b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "sculpture/new.html.twig", 1);
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
        $__internal_0fe67fb146473d8ae20cad64ade72671667964c1006c2411cb99f7c79abd5ffe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fe67fb146473d8ae20cad64ade72671667964c1006c2411cb99f7c79abd5ffe->enter($__internal_0fe67fb146473d8ae20cad64ade72671667964c1006c2411cb99f7c79abd5ffe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "sculpture/new.html.twig"));

        $__internal_73d691afe2deca454b9f3fa03b6f5f90f35212111fb424a6b04763afe75708aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73d691afe2deca454b9f3fa03b6f5f90f35212111fb424a6b04763afe75708aa->enter($__internal_73d691afe2deca454b9f3fa03b6f5f90f35212111fb424a6b04763afe75708aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "sculpture/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0fe67fb146473d8ae20cad64ade72671667964c1006c2411cb99f7c79abd5ffe->leave($__internal_0fe67fb146473d8ae20cad64ade72671667964c1006c2411cb99f7c79abd5ffe_prof);

        
        $__internal_73d691afe2deca454b9f3fa03b6f5f90f35212111fb424a6b04763afe75708aa->leave($__internal_73d691afe2deca454b9f3fa03b6f5f90f35212111fb424a6b04763afe75708aa_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7916262ff2405d2b5f2d1d118edb84a08d572964e29ce0169d1ae0c1437f5ed9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7916262ff2405d2b5f2d1d118edb84a08d572964e29ce0169d1ae0c1437f5ed9->enter($__internal_7916262ff2405d2b5f2d1d118edb84a08d572964e29ce0169d1ae0c1437f5ed9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5fb6e38244810b6807297b24a64aeb5fb51fb830d48846bfc8760850242826f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fb6e38244810b6807297b24a64aeb5fb51fb830d48846bfc8760850242826f6->enter($__internal_5fb6e38244810b6807297b24a64aeb5fb51fb830d48846bfc8760850242826f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Sculpture creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sculpture_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_5fb6e38244810b6807297b24a64aeb5fb51fb830d48846bfc8760850242826f6->leave($__internal_5fb6e38244810b6807297b24a64aeb5fb51fb830d48846bfc8760850242826f6_prof);

        
        $__internal_7916262ff2405d2b5f2d1d118edb84a08d572964e29ce0169d1ae0c1437f5ed9->leave($__internal_7916262ff2405d2b5f2d1d118edb84a08d572964e29ce0169d1ae0c1437f5ed9_prof);

    }

    public function getTemplateName()
    {
        return "sculpture/new.html.twig";
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
    <h1>Sculpture creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('sculpture_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "sculpture/new.html.twig", "/home/alexandre/Galerie/app/Resources/views/sculpture/new.html.twig");
    }
}
