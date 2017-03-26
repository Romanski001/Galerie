<?php

/* oeuvre/index.html.twig */
class __TwigTemplate_ddb3e4d586ccea7edf8a178951a3cad4184c8f6593d4fcb95ef34652a668a5c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "oeuvre/index.html.twig", 1);
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
        $__internal_06d87db3c1e084c9a574e8a05606c568a42bfba9e3422063e9bccd0c47c7c075 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06d87db3c1e084c9a574e8a05606c568a42bfba9e3422063e9bccd0c47c7c075->enter($__internal_06d87db3c1e084c9a574e8a05606c568a42bfba9e3422063e9bccd0c47c7c075_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "oeuvre/index.html.twig"));

        $__internal_b2726132890752740c31be08f8745e3b2f959165737c8d57692cfb161259dd10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2726132890752740c31be08f8745e3b2f959165737c8d57692cfb161259dd10->enter($__internal_b2726132890752740c31be08f8745e3b2f959165737c8d57692cfb161259dd10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "oeuvre/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_06d87db3c1e084c9a574e8a05606c568a42bfba9e3422063e9bccd0c47c7c075->leave($__internal_06d87db3c1e084c9a574e8a05606c568a42bfba9e3422063e9bccd0c47c7c075_prof);

        
        $__internal_b2726132890752740c31be08f8745e3b2f959165737c8d57692cfb161259dd10->leave($__internal_b2726132890752740c31be08f8745e3b2f959165737c8d57692cfb161259dd10_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1f0645fe8b43920360dad76dc11b5e004124b3b7959aaa0578c713fa878b01d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f0645fe8b43920360dad76dc11b5e004124b3b7959aaa0578c713fa878b01d9->enter($__internal_1f0645fe8b43920360dad76dc11b5e004124b3b7959aaa0578c713fa878b01d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8d221c53eb13583c3ce6fcb13ab3e732b6d6e2013462ba01a4dbf2fbe7b26c85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d221c53eb13583c3ce6fcb13ab3e732b6d6e2013462ba01a4dbf2fbe7b26c85->enter($__internal_8d221c53eb13583c3ce6fcb13ab3e732b6d6e2013462ba01a4dbf2fbe7b26c85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Oeuvres list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Type</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["oeuvres"] ?? $this->getContext($context, "oeuvres")));
        foreach ($context['_seq'] as $context["_key"] => $context["oeuvre"]) {
            // line 16
            echo "            <tr>
                <td><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oeuvre_show", array("id" => $this->getAttribute($context["oeuvre"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["oeuvre"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["oeuvre"], "type", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oeuvre_show", array("id" => $this->getAttribute($context["oeuvre"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oeuvre_edit", array("id" => $this->getAttribute($context["oeuvre"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oeuvre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oeuvre_new");
        echo "\">Create a new oeuvre</a>
        </li>
    </ul>
";
        
        $__internal_8d221c53eb13583c3ce6fcb13ab3e732b6d6e2013462ba01a4dbf2fbe7b26c85->leave($__internal_8d221c53eb13583c3ce6fcb13ab3e732b6d6e2013462ba01a4dbf2fbe7b26c85_prof);

        
        $__internal_1f0645fe8b43920360dad76dc11b5e004124b3b7959aaa0578c713fa878b01d9->leave($__internal_1f0645fe8b43920360dad76dc11b5e004124b3b7959aaa0578c713fa878b01d9_prof);

    }

    public function getTemplateName()
    {
        return "oeuvre/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 36,  100 => 31,  88 => 25,  82 => 22,  75 => 18,  69 => 17,  66 => 16,  62 => 15,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Oeuvres list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Type</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for oeuvre in oeuvres %}
            <tr>
                <td><a href=\"{{ path('oeuvre_show', { 'id': oeuvre.id }) }}\">{{ oeuvre.id }}</a></td>
                <td>{{ oeuvre.type }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('oeuvre_show', { 'id': oeuvre.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('oeuvre_edit', { 'id': oeuvre.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('oeuvre_new') }}\">Create a new oeuvre</a>
        </li>
    </ul>
{% endblock %}
", "oeuvre/index.html.twig", "/home/alexandre/Galerie/app/Resources/views/oeuvre/index.html.twig");
    }
}
