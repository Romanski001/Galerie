<?php

/* sculpture/show.html.twig */
class __TwigTemplate_906d7d020b9f193ba270bbdf45b72d95fb9d4ba25e45db79cc58f077fb836839 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "sculpture/show.html.twig", 1);
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
        $__internal_7ca9281bf7b00e58a8517a505174efe8f52bbdade70c12ff04675e9118b5fcd9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ca9281bf7b00e58a8517a505174efe8f52bbdade70c12ff04675e9118b5fcd9->enter($__internal_7ca9281bf7b00e58a8517a505174efe8f52bbdade70c12ff04675e9118b5fcd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "sculpture/show.html.twig"));

        $__internal_fcc899958f5b0c63de789d7b99927e428fa0558b0d71822abcb4ee6423b59962 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcc899958f5b0c63de789d7b99927e428fa0558b0d71822abcb4ee6423b59962->enter($__internal_fcc899958f5b0c63de789d7b99927e428fa0558b0d71822abcb4ee6423b59962_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "sculpture/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7ca9281bf7b00e58a8517a505174efe8f52bbdade70c12ff04675e9118b5fcd9->leave($__internal_7ca9281bf7b00e58a8517a505174efe8f52bbdade70c12ff04675e9118b5fcd9_prof);

        
        $__internal_fcc899958f5b0c63de789d7b99927e428fa0558b0d71822abcb4ee6423b59962->leave($__internal_fcc899958f5b0c63de789d7b99927e428fa0558b0d71822abcb4ee6423b59962_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_083755adf7ac7003f449881b77373814650ed358a098f20231dcdbee0a5a8960 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_083755adf7ac7003f449881b77373814650ed358a098f20231dcdbee0a5a8960->enter($__internal_083755adf7ac7003f449881b77373814650ed358a098f20231dcdbee0a5a8960_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3a14e907587a98f91d030f2c94197a944cdbea3e6fe0a9e439d2e6786affcb92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a14e907587a98f91d030f2c94197a944cdbea3e6fe0a9e439d2e6786affcb92->enter($__internal_3a14e907587a98f91d030f2c94197a944cdbea3e6fe0a9e439d2e6786affcb92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Sculpture</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["sculpture"] ?? $this->getContext($context, "sculpture")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["sculpture"] ?? $this->getContext($context, "sculpture")), "nom", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Details</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["sculpture"] ?? $this->getContext($context, "sculpture")), "details", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Dimensions</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["sculpture"] ?? $this->getContext($context, "sculpture")), "dimensions", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>";
        // line 26
        if ($this->getAttribute(($context["sculpture"] ?? $this->getContext($context, "sculpture")), "date", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["sculpture"] ?? $this->getContext($context, "sculpture")), "date", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sculpture_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sculpture_edit", array("id" => $this->getAttribute(($context["sculpture"] ?? $this->getContext($context, "sculpture")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 39
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 41
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_3a14e907587a98f91d030f2c94197a944cdbea3e6fe0a9e439d2e6786affcb92->leave($__internal_3a14e907587a98f91d030f2c94197a944cdbea3e6fe0a9e439d2e6786affcb92_prof);

        
        $__internal_083755adf7ac7003f449881b77373814650ed358a098f20231dcdbee0a5a8960->leave($__internal_083755adf7ac7003f449881b77373814650ed358a098f20231dcdbee0a5a8960_prof);

    }

    public function getTemplateName()
    {
        return "sculpture/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 41,  109 => 39,  103 => 36,  97 => 33,  85 => 26,  78 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Sculpture</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ sculpture.id }}</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>{{ sculpture.nom }}</td>
            </tr>
            <tr>
                <th>Details</th>
                <td>{{ sculpture.details }}</td>
            </tr>
            <tr>
                <th>Dimensions</th>
                <td>{{ sculpture.dimensions }}</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>{% if sculpture.date %}{{ sculpture.date|date('Y-m-d') }}{% endif %}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('sculpture_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('sculpture_edit', { 'id': sculpture.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "sculpture/show.html.twig", "/home/alexandre/Galerie/app/Resources/views/sculpture/show.html.twig");
    }
}
