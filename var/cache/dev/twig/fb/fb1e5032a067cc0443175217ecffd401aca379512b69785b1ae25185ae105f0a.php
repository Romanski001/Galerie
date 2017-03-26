<?php

/* peinture/show.html.twig */
class __TwigTemplate_35eb1274557782d849cdf5520f02349a8194441cb6dd6966f6c3b302c6b4e733 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "peinture/show.html.twig", 1);
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
        $__internal_5eb46c1e542dc251214d5b09d94862e649d0a0daae03544709d973200446af30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5eb46c1e542dc251214d5b09d94862e649d0a0daae03544709d973200446af30->enter($__internal_5eb46c1e542dc251214d5b09d94862e649d0a0daae03544709d973200446af30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "peinture/show.html.twig"));

        $__internal_5f63364db6fe20eadb3c31e02b6413b10a08e6ccdcdb33dba24b9a6a8fb6c211 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f63364db6fe20eadb3c31e02b6413b10a08e6ccdcdb33dba24b9a6a8fb6c211->enter($__internal_5f63364db6fe20eadb3c31e02b6413b10a08e6ccdcdb33dba24b9a6a8fb6c211_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "peinture/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5eb46c1e542dc251214d5b09d94862e649d0a0daae03544709d973200446af30->leave($__internal_5eb46c1e542dc251214d5b09d94862e649d0a0daae03544709d973200446af30_prof);

        
        $__internal_5f63364db6fe20eadb3c31e02b6413b10a08e6ccdcdb33dba24b9a6a8fb6c211->leave($__internal_5f63364db6fe20eadb3c31e02b6413b10a08e6ccdcdb33dba24b9a6a8fb6c211_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_028b2c636e5d27bc40d477248ae19b1afb102160483e8dc467e43de94a72c94d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_028b2c636e5d27bc40d477248ae19b1afb102160483e8dc467e43de94a72c94d->enter($__internal_028b2c636e5d27bc40d477248ae19b1afb102160483e8dc467e43de94a72c94d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3919c20ff08e40c1263e713b6b036d93063ec6fdc938b016b11501dc5b56b3e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3919c20ff08e40c1263e713b6b036d93063ec6fdc938b016b11501dc5b56b3e2->enter($__internal_3919c20ff08e40c1263e713b6b036d93063ec6fdc938b016b11501dc5b56b3e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Peinture</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["peinture"] ?? $this->getContext($context, "peinture")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["peinture"] ?? $this->getContext($context, "peinture")), "nom", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Details</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["peinture"] ?? $this->getContext($context, "peinture")), "details", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Dimensions</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["peinture"] ?? $this->getContext($context, "peinture")), "dimensions", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>";
        // line 26
        if ($this->getAttribute(($context["peinture"] ?? $this->getContext($context, "peinture")), "date", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["peinture"] ?? $this->getContext($context, "peinture")), "date", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("peinture_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("peinture_edit", array("id" => $this->getAttribute(($context["peinture"] ?? $this->getContext($context, "peinture")), "id", array()))), "html", null, true);
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
        
        $__internal_3919c20ff08e40c1263e713b6b036d93063ec6fdc938b016b11501dc5b56b3e2->leave($__internal_3919c20ff08e40c1263e713b6b036d93063ec6fdc938b016b11501dc5b56b3e2_prof);

        
        $__internal_028b2c636e5d27bc40d477248ae19b1afb102160483e8dc467e43de94a72c94d->leave($__internal_028b2c636e5d27bc40d477248ae19b1afb102160483e8dc467e43de94a72c94d_prof);

    }

    public function getTemplateName()
    {
        return "peinture/show.html.twig";
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
    <h1>Peinture</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ peinture.id }}</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>{{ peinture.nom }}</td>
            </tr>
            <tr>
                <th>Details</th>
                <td>{{ peinture.details }}</td>
            </tr>
            <tr>
                <th>Dimensions</th>
                <td>{{ peinture.dimensions }}</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>{% if peinture.date %}{{ peinture.date|date('Y-m-d') }}{% endif %}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('peinture_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('peinture_edit', { 'id': peinture.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "peinture/show.html.twig", "/home/alexandre/Galerie/app/Resources/views/peinture/show.html.twig");
    }
}
