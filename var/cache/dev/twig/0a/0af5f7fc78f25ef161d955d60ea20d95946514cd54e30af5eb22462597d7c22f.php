<?php

/* sculpture/edit.html.twig */
class __TwigTemplate_e245c71863c622b04c4ebca5ca0b144bb36dd5dcb7990d2d8e26cbdf38b38da1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "sculpture/edit.html.twig", 1);
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
        $__internal_ee662c44514f3b03cfbf1d0785529a1d6a0db87c99c4219591810cd8bc97eee3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee662c44514f3b03cfbf1d0785529a1d6a0db87c99c4219591810cd8bc97eee3->enter($__internal_ee662c44514f3b03cfbf1d0785529a1d6a0db87c99c4219591810cd8bc97eee3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "sculpture/edit.html.twig"));

        $__internal_41ece51fcc3f78d7cbd379698f79d3321a3809092db3019e336a384f1d708bb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41ece51fcc3f78d7cbd379698f79d3321a3809092db3019e336a384f1d708bb3->enter($__internal_41ece51fcc3f78d7cbd379698f79d3321a3809092db3019e336a384f1d708bb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "sculpture/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee662c44514f3b03cfbf1d0785529a1d6a0db87c99c4219591810cd8bc97eee3->leave($__internal_ee662c44514f3b03cfbf1d0785529a1d6a0db87c99c4219591810cd8bc97eee3_prof);

        
        $__internal_41ece51fcc3f78d7cbd379698f79d3321a3809092db3019e336a384f1d708bb3->leave($__internal_41ece51fcc3f78d7cbd379698f79d3321a3809092db3019e336a384f1d708bb3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2e566d5e09b1b2be5bfdad09036bc02f02601cfc3e72be6901c883da6aa5fc98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e566d5e09b1b2be5bfdad09036bc02f02601cfc3e72be6901c883da6aa5fc98->enter($__internal_2e566d5e09b1b2be5bfdad09036bc02f02601cfc3e72be6901c883da6aa5fc98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f12b589a03693ee4cc850a83cfe381382d97ca5985a06881412c4e81f22d7efe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f12b589a03693ee4cc850a83cfe381382d97ca5985a06881412c4e81f22d7efe->enter($__internal_f12b589a03693ee4cc850a83cfe381382d97ca5985a06881412c4e81f22d7efe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Sculpture edit</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sculpture_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_f12b589a03693ee4cc850a83cfe381382d97ca5985a06881412c4e81f22d7efe->leave($__internal_f12b589a03693ee4cc850a83cfe381382d97ca5985a06881412c4e81f22d7efe_prof);

        
        $__internal_2e566d5e09b1b2be5bfdad09036bc02f02601cfc3e72be6901c883da6aa5fc98->leave($__internal_2e566d5e09b1b2be5bfdad09036bc02f02601cfc3e72be6901c883da6aa5fc98_prof);

    }

    public function getTemplateName()
    {
        return "sculpture/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 18,  75 => 16,  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Sculpture edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('sculpture_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "sculpture/edit.html.twig", "/home/alexandre/Galerie/app/Resources/views/sculpture/edit.html.twig");
    }
}
