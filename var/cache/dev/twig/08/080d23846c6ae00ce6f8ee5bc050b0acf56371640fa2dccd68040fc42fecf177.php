<?php

/* peinture/index.html.twig */
class __TwigTemplate_5cd148466740d6201159280167f8eb7f5558a87532a8af61447b2bec418b0038 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "peinture/index.html.twig", 1);
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
        $__internal_ac84450ce1b9cad5f66556198bc4115f56246517057678f482c8ed2eeb6196cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac84450ce1b9cad5f66556198bc4115f56246517057678f482c8ed2eeb6196cf->enter($__internal_ac84450ce1b9cad5f66556198bc4115f56246517057678f482c8ed2eeb6196cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "peinture/index.html.twig"));

        $__internal_5e88b1fe423e6bbd59a2fa8d0a2ae835d5cfa926d22880b01ec03f0ecfe92f58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e88b1fe423e6bbd59a2fa8d0a2ae835d5cfa926d22880b01ec03f0ecfe92f58->enter($__internal_5e88b1fe423e6bbd59a2fa8d0a2ae835d5cfa926d22880b01ec03f0ecfe92f58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "peinture/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ac84450ce1b9cad5f66556198bc4115f56246517057678f482c8ed2eeb6196cf->leave($__internal_ac84450ce1b9cad5f66556198bc4115f56246517057678f482c8ed2eeb6196cf_prof);

        
        $__internal_5e88b1fe423e6bbd59a2fa8d0a2ae835d5cfa926d22880b01ec03f0ecfe92f58->leave($__internal_5e88b1fe423e6bbd59a2fa8d0a2ae835d5cfa926d22880b01ec03f0ecfe92f58_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7e080c19441b5e0f37e8b98f3ebd00618fecfa26795674466e1e5dfe9c68c187 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e080c19441b5e0f37e8b98f3ebd00618fecfa26795674466e1e5dfe9c68c187->enter($__internal_7e080c19441b5e0f37e8b98f3ebd00618fecfa26795674466e1e5dfe9c68c187_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b77758a4c9e5a2ba2cf6b5b1148490751a72ec8b0633f5a8a99004e166e21169 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b77758a4c9e5a2ba2cf6b5b1148490751a72ec8b0633f5a8a99004e166e21169->enter($__internal_b77758a4c9e5a2ba2cf6b5b1148490751a72ec8b0633f5a8a99004e166e21169_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Peintures list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Details</th>
                <th>Dimensions</th>
                <th>Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["peintures"] ?? $this->getContext($context, "peintures")));
        foreach ($context['_seq'] as $context["_key"] => $context["peinture"]) {
            // line 19
            echo "            <tr>
                <td><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("peinture_show", array("id" => $this->getAttribute($context["peinture"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["peinture"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["peinture"], "nom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["peinture"], "details", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["peinture"], "dimensions", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            if ($this->getAttribute($context["peinture"], "date", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["peinture"], "date", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("peinture_show", array("id" => $this->getAttribute($context["peinture"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("peinture_edit", array("id" => $this->getAttribute($context["peinture"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['peinture'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("peinture_new");
        echo "\">Create a new peinture</a>
        </li>
    </ul>
";
        
        $__internal_b77758a4c9e5a2ba2cf6b5b1148490751a72ec8b0633f5a8a99004e166e21169->leave($__internal_b77758a4c9e5a2ba2cf6b5b1148490751a72ec8b0633f5a8a99004e166e21169_prof);

        
        $__internal_7e080c19441b5e0f37e8b98f3ebd00618fecfa26795674466e1e5dfe9c68c187->leave($__internal_7e080c19441b5e0f37e8b98f3ebd00618fecfa26795674466e1e5dfe9c68c187_prof);

    }

    public function getTemplateName()
    {
        return "peinture/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 42,  117 => 37,  105 => 31,  99 => 28,  90 => 24,  86 => 23,  82 => 22,  78 => 21,  72 => 20,  69 => 19,  65 => 18,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Peintures list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Details</th>
                <th>Dimensions</th>
                <th>Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for peinture in peintures %}
            <tr>
                <td><a href=\"{{ path('peinture_show', { 'id': peinture.id }) }}\">{{ peinture.id }}</a></td>
                <td>{{ peinture.nom }}</td>
                <td>{{ peinture.details }}</td>
                <td>{{ peinture.dimensions }}</td>
                <td>{% if peinture.date %}{{ peinture.date|date('Y-m-d') }}{% endif %}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('peinture_show', { 'id': peinture.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('peinture_edit', { 'id': peinture.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('peinture_new') }}\">Create a new peinture</a>
        </li>
    </ul>
{% endblock %}
", "peinture/index.html.twig", "/home/alexandre/Galerie/app/Resources/views/peinture/index.html.twig");
    }
}
