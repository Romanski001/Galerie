<?php

/* createur/edit.html.twig */
class __TwigTemplate_c02221a20f91fab51a1a418f7a88c945fda25539069f6d276e8bab9b86534072 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "createur/edit.html.twig", 1);
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
        $__internal_a35f72fd5dde73ed1ef7ec557d54d975c2ed2113c8f752ae979e85b7ed06f3fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a35f72fd5dde73ed1ef7ec557d54d975c2ed2113c8f752ae979e85b7ed06f3fb->enter($__internal_a35f72fd5dde73ed1ef7ec557d54d975c2ed2113c8f752ae979e85b7ed06f3fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "createur/edit.html.twig"));

        $__internal_55efd45e4adf2f54bb9976dab1ebb0a94174a1f1c8518786e9de9a52fa99ff71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55efd45e4adf2f54bb9976dab1ebb0a94174a1f1c8518786e9de9a52fa99ff71->enter($__internal_55efd45e4adf2f54bb9976dab1ebb0a94174a1f1c8518786e9de9a52fa99ff71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "createur/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a35f72fd5dde73ed1ef7ec557d54d975c2ed2113c8f752ae979e85b7ed06f3fb->leave($__internal_a35f72fd5dde73ed1ef7ec557d54d975c2ed2113c8f752ae979e85b7ed06f3fb_prof);

        
        $__internal_55efd45e4adf2f54bb9976dab1ebb0a94174a1f1c8518786e9de9a52fa99ff71->leave($__internal_55efd45e4adf2f54bb9976dab1ebb0a94174a1f1c8518786e9de9a52fa99ff71_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9121ac834aab413f6f595d91276c3537ae46e2c6fb66dda5588d0754f8ec6ab3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9121ac834aab413f6f595d91276c3537ae46e2c6fb66dda5588d0754f8ec6ab3->enter($__internal_9121ac834aab413f6f595d91276c3537ae46e2c6fb66dda5588d0754f8ec6ab3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c61a60aa6d61834036dffae9134258d1c291169fbde4382711c514b219044207 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c61a60aa6d61834036dffae9134258d1c291169fbde4382711c514b219044207->enter($__internal_c61a60aa6d61834036dffae9134258d1c291169fbde4382711c514b219044207_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Createur edit</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("createur_index");
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
        
        $__internal_c61a60aa6d61834036dffae9134258d1c291169fbde4382711c514b219044207->leave($__internal_c61a60aa6d61834036dffae9134258d1c291169fbde4382711c514b219044207_prof);

        
        $__internal_9121ac834aab413f6f595d91276c3537ae46e2c6fb66dda5588d0754f8ec6ab3->leave($__internal_9121ac834aab413f6f595d91276c3537ae46e2c6fb66dda5588d0754f8ec6ab3_prof);

    }

    public function getTemplateName()
    {
        return "createur/edit.html.twig";
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
    <h1>Createur edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('createur_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "createur/edit.html.twig", "/home/alexandre/Galerie/app/Resources/views/createur/edit.html.twig");
    }
}
