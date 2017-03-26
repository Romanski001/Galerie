<?php

/* sculpture/index.html.twig */
class __TwigTemplate_a9bf3ca164ebcfc21a45b3f5f3b6edc5a3fb7c17c7f2a8a6eb1c5a4f054ceccb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "sculpture/index.html.twig", 1);
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
        $__internal_3e764509c119d5aa87a7e3e1ad7b39cd7f99091230dd6f9f9efe2f79b695cff2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e764509c119d5aa87a7e3e1ad7b39cd7f99091230dd6f9f9efe2f79b695cff2->enter($__internal_3e764509c119d5aa87a7e3e1ad7b39cd7f99091230dd6f9f9efe2f79b695cff2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "sculpture/index.html.twig"));

        $__internal_4b8dd9ef02b0332fd7c7ad9bbd1e794300178c02ddba0bca0bda0e3adacc04bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b8dd9ef02b0332fd7c7ad9bbd1e794300178c02ddba0bca0bda0e3adacc04bc->enter($__internal_4b8dd9ef02b0332fd7c7ad9bbd1e794300178c02ddba0bca0bda0e3adacc04bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "sculpture/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e764509c119d5aa87a7e3e1ad7b39cd7f99091230dd6f9f9efe2f79b695cff2->leave($__internal_3e764509c119d5aa87a7e3e1ad7b39cd7f99091230dd6f9f9efe2f79b695cff2_prof);

        
        $__internal_4b8dd9ef02b0332fd7c7ad9bbd1e794300178c02ddba0bca0bda0e3adacc04bc->leave($__internal_4b8dd9ef02b0332fd7c7ad9bbd1e794300178c02ddba0bca0bda0e3adacc04bc_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4349344f7a8d9cf3b27de62a6a1c75e61c7c41d1d7a6ee43c73c5afa784f11fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4349344f7a8d9cf3b27de62a6a1c75e61c7c41d1d7a6ee43c73c5afa784f11fc->enter($__internal_4349344f7a8d9cf3b27de62a6a1c75e61c7c41d1d7a6ee43c73c5afa784f11fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2277dd98afc136628c642b96a5a1683cf54479f87aefc41b70078905fc0845ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2277dd98afc136628c642b96a5a1683cf54479f87aefc41b70078905fc0845ba->enter($__internal_2277dd98afc136628c642b96a5a1683cf54479f87aefc41b70078905fc0845ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Sculptures list</h1>

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
        $context['_seq'] = twig_ensure_traversable(($context["sculptures"] ?? $this->getContext($context, "sculptures")));
        foreach ($context['_seq'] as $context["_key"] => $context["sculpture"]) {
            // line 19
            echo "            <tr>
                <td><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sculpture_show", array("id" => $this->getAttribute($context["sculpture"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["sculpture"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["sculpture"], "nom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["sculpture"], "details", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["sculpture"], "dimensions", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            if ($this->getAttribute($context["sculpture"], "date", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["sculpture"], "date", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sculpture_show", array("id" => $this->getAttribute($context["sculpture"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sculpture_edit", array("id" => $this->getAttribute($context["sculpture"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sculpture'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sculpture_new");
        echo "\">Create a new sculpture</a>
        </li>
    </ul>
";
        
        $__internal_2277dd98afc136628c642b96a5a1683cf54479f87aefc41b70078905fc0845ba->leave($__internal_2277dd98afc136628c642b96a5a1683cf54479f87aefc41b70078905fc0845ba_prof);

        
        $__internal_4349344f7a8d9cf3b27de62a6a1c75e61c7c41d1d7a6ee43c73c5afa784f11fc->leave($__internal_4349344f7a8d9cf3b27de62a6a1c75e61c7c41d1d7a6ee43c73c5afa784f11fc_prof);

    }

    public function getTemplateName()
    {
        return "sculpture/index.html.twig";
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
    <h1>Sculptures list</h1>

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
        {% for sculpture in sculptures %}
            <tr>
                <td><a href=\"{{ path('sculpture_show', { 'id': sculpture.id }) }}\">{{ sculpture.id }}</a></td>
                <td>{{ sculpture.nom }}</td>
                <td>{{ sculpture.details }}</td>
                <td>{{ sculpture.dimensions }}</td>
                <td>{% if sculpture.date %}{{ sculpture.date|date('Y-m-d') }}{% endif %}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('sculpture_show', { 'id': sculpture.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('sculpture_edit', { 'id': sculpture.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('sculpture_new') }}\">Create a new sculpture</a>
        </li>
    </ul>
{% endblock %}
", "sculpture/index.html.twig", "/home/alexandre/Galerie/app/Resources/views/sculpture/index.html.twig");
    }
}
