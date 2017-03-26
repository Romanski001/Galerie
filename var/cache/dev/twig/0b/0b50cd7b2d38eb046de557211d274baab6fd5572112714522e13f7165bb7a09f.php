<?php

/* oeuvre/show.html.twig */
class __TwigTemplate_8669211f5da9e339a985a76b5fceabcb247ed3b41092183489ef405c94ffb265 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "oeuvre/show.html.twig", 1);
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
        $__internal_51e3b6a226cb8fc69476f38025e2707ba4c022b87e369ae8cf512f7bb4fc41aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51e3b6a226cb8fc69476f38025e2707ba4c022b87e369ae8cf512f7bb4fc41aa->enter($__internal_51e3b6a226cb8fc69476f38025e2707ba4c022b87e369ae8cf512f7bb4fc41aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "oeuvre/show.html.twig"));

        $__internal_5d220062bf30b05b41457a118e94185268ca4309a8d8e740e3a48e9bffd1f97f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d220062bf30b05b41457a118e94185268ca4309a8d8e740e3a48e9bffd1f97f->enter($__internal_5d220062bf30b05b41457a118e94185268ca4309a8d8e740e3a48e9bffd1f97f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "oeuvre/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_51e3b6a226cb8fc69476f38025e2707ba4c022b87e369ae8cf512f7bb4fc41aa->leave($__internal_51e3b6a226cb8fc69476f38025e2707ba4c022b87e369ae8cf512f7bb4fc41aa_prof);

        
        $__internal_5d220062bf30b05b41457a118e94185268ca4309a8d8e740e3a48e9bffd1f97f->leave($__internal_5d220062bf30b05b41457a118e94185268ca4309a8d8e740e3a48e9bffd1f97f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_68fe770bc22d62cfe0274f28a557525770ac0ad2daae4c96b2318136db88ba91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68fe770bc22d62cfe0274f28a557525770ac0ad2daae4c96b2318136db88ba91->enter($__internal_68fe770bc22d62cfe0274f28a557525770ac0ad2daae4c96b2318136db88ba91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_908dcc63dbec2e07f0703c94b0d0c6382f3821c92be4f6074fd3b1062cebfa3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_908dcc63dbec2e07f0703c94b0d0c6382f3821c92be4f6074fd3b1062cebfa3b->enter($__internal_908dcc63dbec2e07f0703c94b0d0c6382f3821c92be4f6074fd3b1062cebfa3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Oeuvre</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oeuvre"] ?? $this->getContext($context, "oeuvre")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Type</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oeuvre"] ?? $this->getContext($context, "oeuvre")), "type", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oeuvre_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oeuvre_edit", array("id" => $this->getAttribute(($context["oeuvre"] ?? $this->getContext($context, "oeuvre")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 27
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 29
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_908dcc63dbec2e07f0703c94b0d0c6382f3821c92be4f6074fd3b1062cebfa3b->leave($__internal_908dcc63dbec2e07f0703c94b0d0c6382f3821c92be4f6074fd3b1062cebfa3b_prof);

        
        $__internal_68fe770bc22d62cfe0274f28a557525770ac0ad2daae4c96b2318136db88ba91->leave($__internal_68fe770bc22d62cfe0274f28a557525770ac0ad2daae4c96b2318136db88ba91_prof);

    }

    public function getTemplateName()
    {
        return "oeuvre/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 29,  86 => 27,  80 => 24,  74 => 21,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Oeuvre</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ oeuvre.id }}</td>
            </tr>
            <tr>
                <th>Type</th>
                <td>{{ oeuvre.type }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('oeuvre_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('oeuvre_edit', { 'id': oeuvre.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "oeuvre/show.html.twig", "/home/alexandre/Galerie/app/Resources/views/oeuvre/show.html.twig");
    }
}
