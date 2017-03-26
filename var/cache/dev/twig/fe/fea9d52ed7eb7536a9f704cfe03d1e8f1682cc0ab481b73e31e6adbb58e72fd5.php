<?php

/* createur/show.html.twig */
class __TwigTemplate_bd6ec6dbd55c4bddc6deaf119f6a66171affa224ff760c5846c9f4d43f0c3d59 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "createur/show.html.twig", 1);
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
        $__internal_69706a11820e176813c79a02b0a1ce8f763bf4c00e30ecc777f5e669f2985a1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69706a11820e176813c79a02b0a1ce8f763bf4c00e30ecc777f5e669f2985a1c->enter($__internal_69706a11820e176813c79a02b0a1ce8f763bf4c00e30ecc777f5e669f2985a1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "createur/show.html.twig"));

        $__internal_7357b0cc94ecb33dedd51699ec55db975864e60a12a32e4484b30c26ebdf3f1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7357b0cc94ecb33dedd51699ec55db975864e60a12a32e4484b30c26ebdf3f1d->enter($__internal_7357b0cc94ecb33dedd51699ec55db975864e60a12a32e4484b30c26ebdf3f1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "createur/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_69706a11820e176813c79a02b0a1ce8f763bf4c00e30ecc777f5e669f2985a1c->leave($__internal_69706a11820e176813c79a02b0a1ce8f763bf4c00e30ecc777f5e669f2985a1c_prof);

        
        $__internal_7357b0cc94ecb33dedd51699ec55db975864e60a12a32e4484b30c26ebdf3f1d->leave($__internal_7357b0cc94ecb33dedd51699ec55db975864e60a12a32e4484b30c26ebdf3f1d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e6b3494fa780aea4645ebd6e26e6ab06459ef92d9e798fdd6c6286e7c1af8230 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6b3494fa780aea4645ebd6e26e6ab06459ef92d9e798fdd6c6286e7c1af8230->enter($__internal_e6b3494fa780aea4645ebd6e26e6ab06459ef92d9e798fdd6c6286e7c1af8230_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cf0b56ff6186677e9dd0e07a2448bf0fb1a3f83875100cdcf4de04199305e70f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf0b56ff6186677e9dd0e07a2448bf0fb1a3f83875100cdcf4de04199305e70f->enter($__internal_cf0b56ff6186677e9dd0e07a2448bf0fb1a3f83875100cdcf4de04199305e70f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Createur</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["createur"] ?? $this->getContext($context, "createur")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["createur"] ?? $this->getContext($context, "createur")), "nom", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("createur_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("createur_edit", array("id" => $this->getAttribute(($context["createur"] ?? $this->getContext($context, "createur")), "id", array()))), "html", null, true);
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
        
        $__internal_cf0b56ff6186677e9dd0e07a2448bf0fb1a3f83875100cdcf4de04199305e70f->leave($__internal_cf0b56ff6186677e9dd0e07a2448bf0fb1a3f83875100cdcf4de04199305e70f_prof);

        
        $__internal_e6b3494fa780aea4645ebd6e26e6ab06459ef92d9e798fdd6c6286e7c1af8230->leave($__internal_e6b3494fa780aea4645ebd6e26e6ab06459ef92d9e798fdd6c6286e7c1af8230_prof);

    }

    public function getTemplateName()
    {
        return "createur/show.html.twig";
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
    <h1>Createur</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ createur.id }}</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>{{ createur.nom }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('createur_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('createur_edit', { 'id': createur.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "createur/show.html.twig", "/home/alexandre/Galerie/app/Resources/views/createur/show.html.twig");
    }
}
