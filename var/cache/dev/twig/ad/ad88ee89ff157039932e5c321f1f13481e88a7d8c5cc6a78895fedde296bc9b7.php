<?php

/* createur/new.html.twig */
class __TwigTemplate_54c59c1b3aed190f98b17e3783d43d64e3e2d195e1a6cece4003587ca077f6a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "createur/new.html.twig", 1);
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
        $__internal_713fc406074773a1122661d4f27cea907b3b7c5626571befbfd58b4ddf73eb56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_713fc406074773a1122661d4f27cea907b3b7c5626571befbfd58b4ddf73eb56->enter($__internal_713fc406074773a1122661d4f27cea907b3b7c5626571befbfd58b4ddf73eb56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "createur/new.html.twig"));

        $__internal_9b9bbf8a14ab7f8316bcb31a72c33f79027c309e012bf702228a428094aadec7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b9bbf8a14ab7f8316bcb31a72c33f79027c309e012bf702228a428094aadec7->enter($__internal_9b9bbf8a14ab7f8316bcb31a72c33f79027c309e012bf702228a428094aadec7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "createur/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_713fc406074773a1122661d4f27cea907b3b7c5626571befbfd58b4ddf73eb56->leave($__internal_713fc406074773a1122661d4f27cea907b3b7c5626571befbfd58b4ddf73eb56_prof);

        
        $__internal_9b9bbf8a14ab7f8316bcb31a72c33f79027c309e012bf702228a428094aadec7->leave($__internal_9b9bbf8a14ab7f8316bcb31a72c33f79027c309e012bf702228a428094aadec7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a03f472512ed64a04d77b5152f93b463ed8128bf4e522093ecef36770f91b232 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a03f472512ed64a04d77b5152f93b463ed8128bf4e522093ecef36770f91b232->enter($__internal_a03f472512ed64a04d77b5152f93b463ed8128bf4e522093ecef36770f91b232_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bef5d193f0a4060695f0ed4e74016e1ff3e0c186736d91735f9bb89d8b1b9feb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bef5d193f0a4060695f0ed4e74016e1ff3e0c186736d91735f9bb89d8b1b9feb->enter($__internal_bef5d193f0a4060695f0ed4e74016e1ff3e0c186736d91735f9bb89d8b1b9feb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Createur creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("createur_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_bef5d193f0a4060695f0ed4e74016e1ff3e0c186736d91735f9bb89d8b1b9feb->leave($__internal_bef5d193f0a4060695f0ed4e74016e1ff3e0c186736d91735f9bb89d8b1b9feb_prof);

        
        $__internal_a03f472512ed64a04d77b5152f93b463ed8128bf4e522093ecef36770f91b232->leave($__internal_a03f472512ed64a04d77b5152f93b463ed8128bf4e522093ecef36770f91b232_prof);

    }

    public function getTemplateName()
    {
        return "createur/new.html.twig";
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
    <h1>Createur creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('createur_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "createur/new.html.twig", "/home/alexandre/Galerie/app/Resources/views/createur/new.html.twig");
    }
}
