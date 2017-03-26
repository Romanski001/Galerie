<?php

/* createur/index.html.twig */
class __TwigTemplate_0a3efd4d5a86942c8a3ad037ef9cef834cf3299bbb687c7cdaed7a07c002d3f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "createur/index.html.twig", 1);
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
        $__internal_4d91b35dfd5a854f08c3d014c29118775695d2fe6e7035d2b10637e0e1983b18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d91b35dfd5a854f08c3d014c29118775695d2fe6e7035d2b10637e0e1983b18->enter($__internal_4d91b35dfd5a854f08c3d014c29118775695d2fe6e7035d2b10637e0e1983b18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "createur/index.html.twig"));

        $__internal_896ac2dcf172110c62865473f3609c669e264ed9d9f729c0b35b65e6964dc9a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_896ac2dcf172110c62865473f3609c669e264ed9d9f729c0b35b65e6964dc9a2->enter($__internal_896ac2dcf172110c62865473f3609c669e264ed9d9f729c0b35b65e6964dc9a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "createur/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d91b35dfd5a854f08c3d014c29118775695d2fe6e7035d2b10637e0e1983b18->leave($__internal_4d91b35dfd5a854f08c3d014c29118775695d2fe6e7035d2b10637e0e1983b18_prof);

        
        $__internal_896ac2dcf172110c62865473f3609c669e264ed9d9f729c0b35b65e6964dc9a2->leave($__internal_896ac2dcf172110c62865473f3609c669e264ed9d9f729c0b35b65e6964dc9a2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_604ebad4e9168a63485202aaf0aeeb4cfa9906008f3d480bb784960b8dc8f559 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_604ebad4e9168a63485202aaf0aeeb4cfa9906008f3d480bb784960b8dc8f559->enter($__internal_604ebad4e9168a63485202aaf0aeeb4cfa9906008f3d480bb784960b8dc8f559_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_40a85bcfd8095f0bb4be76396f8937463fee0744d4e92224b1a1450f42c1a711 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40a85bcfd8095f0bb4be76396f8937463fee0744d4e92224b1a1450f42c1a711->enter($__internal_40a85bcfd8095f0bb4be76396f8937463fee0744d4e92224b1a1450f42c1a711_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Createurs list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["createurs"] ?? $this->getContext($context, "createurs")));
        foreach ($context['_seq'] as $context["_key"] => $context["createur"]) {
            // line 16
            echo "            <tr>
                <td><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("createur_show", array("id" => $this->getAttribute($context["createur"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["createur"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["createur"], "nom", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("createur_show", array("id" => $this->getAttribute($context["createur"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("createur_edit", array("id" => $this->getAttribute($context["createur"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['createur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("createur_new");
        echo "\">Create a new createur</a>
        </li>
    </ul>
";
        
        $__internal_40a85bcfd8095f0bb4be76396f8937463fee0744d4e92224b1a1450f42c1a711->leave($__internal_40a85bcfd8095f0bb4be76396f8937463fee0744d4e92224b1a1450f42c1a711_prof);

        
        $__internal_604ebad4e9168a63485202aaf0aeeb4cfa9906008f3d480bb784960b8dc8f559->leave($__internal_604ebad4e9168a63485202aaf0aeeb4cfa9906008f3d480bb784960b8dc8f559_prof);

    }

    public function getTemplateName()
    {
        return "createur/index.html.twig";
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
    <h1>Createurs list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for createur in createurs %}
            <tr>
                <td><a href=\"{{ path('createur_show', { 'id': createur.id }) }}\">{{ createur.id }}</a></td>
                <td>{{ createur.nom }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('createur_show', { 'id': createur.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('createur_edit', { 'id': createur.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('createur_new') }}\">Create a new createur</a>
        </li>
    </ul>
{% endblock %}
", "createur/index.html.twig", "/home/alexandre/Galerie/app/Resources/views/createur/index.html.twig");
    }
}
