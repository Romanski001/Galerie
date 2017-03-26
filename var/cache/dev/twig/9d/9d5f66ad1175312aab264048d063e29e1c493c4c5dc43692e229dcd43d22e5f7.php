<?php

/* base.html.twig */
class __TwigTemplate_d81bae7d5325a7f23ba92e849144467ab8ed2421c201cbf1d70c17582ad76de7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_46987c6172a5b19aa9ed26778b3003d14403a391924b99bc78d27fae2113b850 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46987c6172a5b19aa9ed26778b3003d14403a391924b99bc78d27fae2113b850->enter($__internal_46987c6172a5b19aa9ed26778b3003d14403a391924b99bc78d27fae2113b850_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_08cf8c987432fb447fbc3e2a2ecadcfd1261dc24d9d019e87c9415754df3f266 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08cf8c987432fb447fbc3e2a2ecadcfd1261dc24d9d019e87c9415754df3f266->enter($__internal_08cf8c987432fb447fbc3e2a2ecadcfd1261dc24d9d019e87c9415754df3f266_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_46987c6172a5b19aa9ed26778b3003d14403a391924b99bc78d27fae2113b850->leave($__internal_46987c6172a5b19aa9ed26778b3003d14403a391924b99bc78d27fae2113b850_prof);

        
        $__internal_08cf8c987432fb447fbc3e2a2ecadcfd1261dc24d9d019e87c9415754df3f266->leave($__internal_08cf8c987432fb447fbc3e2a2ecadcfd1261dc24d9d019e87c9415754df3f266_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_447664329e6ad609dc711af1926584bc18a86e2efb7b047b6fe9a0ff20f28eb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_447664329e6ad609dc711af1926584bc18a86e2efb7b047b6fe9a0ff20f28eb1->enter($__internal_447664329e6ad609dc711af1926584bc18a86e2efb7b047b6fe9a0ff20f28eb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4543249a2a3bdc49f1658651590bdb648e9563c72e772dbf872bc26e3a83bcc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4543249a2a3bdc49f1658651590bdb648e9563c72e772dbf872bc26e3a83bcc0->enter($__internal_4543249a2a3bdc49f1658651590bdb648e9563c72e772dbf872bc26e3a83bcc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_4543249a2a3bdc49f1658651590bdb648e9563c72e772dbf872bc26e3a83bcc0->leave($__internal_4543249a2a3bdc49f1658651590bdb648e9563c72e772dbf872bc26e3a83bcc0_prof);

        
        $__internal_447664329e6ad609dc711af1926584bc18a86e2efb7b047b6fe9a0ff20f28eb1->leave($__internal_447664329e6ad609dc711af1926584bc18a86e2efb7b047b6fe9a0ff20f28eb1_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f9ad4eef859211cf9f78a03f3bcfeffb3f46592ae80bd7b24b63cfe505250c74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9ad4eef859211cf9f78a03f3bcfeffb3f46592ae80bd7b24b63cfe505250c74->enter($__internal_f9ad4eef859211cf9f78a03f3bcfeffb3f46592ae80bd7b24b63cfe505250c74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_d3944206cfcadc2033fd30a965c9de776ed54f39b5eeb5a41e015d239a31f322 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3944206cfcadc2033fd30a965c9de776ed54f39b5eeb5a41e015d239a31f322->enter($__internal_d3944206cfcadc2033fd30a965c9de776ed54f39b5eeb5a41e015d239a31f322_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_d3944206cfcadc2033fd30a965c9de776ed54f39b5eeb5a41e015d239a31f322->leave($__internal_d3944206cfcadc2033fd30a965c9de776ed54f39b5eeb5a41e015d239a31f322_prof);

        
        $__internal_f9ad4eef859211cf9f78a03f3bcfeffb3f46592ae80bd7b24b63cfe505250c74->leave($__internal_f9ad4eef859211cf9f78a03f3bcfeffb3f46592ae80bd7b24b63cfe505250c74_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_fde63e3f48f10cf5ecc87531306707afb00c50bbd16f93e3cdf45e632e51f110 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fde63e3f48f10cf5ecc87531306707afb00c50bbd16f93e3cdf45e632e51f110->enter($__internal_fde63e3f48f10cf5ecc87531306707afb00c50bbd16f93e3cdf45e632e51f110_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_69a5e456c7f3bd027ba3cf4dbdf41e58acd60e82f454446d3b36de3f4ec597d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69a5e456c7f3bd027ba3cf4dbdf41e58acd60e82f454446d3b36de3f4ec597d3->enter($__internal_69a5e456c7f3bd027ba3cf4dbdf41e58acd60e82f454446d3b36de3f4ec597d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_69a5e456c7f3bd027ba3cf4dbdf41e58acd60e82f454446d3b36de3f4ec597d3->leave($__internal_69a5e456c7f3bd027ba3cf4dbdf41e58acd60e82f454446d3b36de3f4ec597d3_prof);

        
        $__internal_fde63e3f48f10cf5ecc87531306707afb00c50bbd16f93e3cdf45e632e51f110->leave($__internal_fde63e3f48f10cf5ecc87531306707afb00c50bbd16f93e3cdf45e632e51f110_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_01f28a51e51c17c2f52c227fe57e06555ee875dbb04e2f76a0114ab873cff352 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01f28a51e51c17c2f52c227fe57e06555ee875dbb04e2f76a0114ab873cff352->enter($__internal_01f28a51e51c17c2f52c227fe57e06555ee875dbb04e2f76a0114ab873cff352_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_83a8610316be99d7a75a6c8a29c7eb08ea9c378452a7e7ffd41ae082a61bbde4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83a8610316be99d7a75a6c8a29c7eb08ea9c378452a7e7ffd41ae082a61bbde4->enter($__internal_83a8610316be99d7a75a6c8a29c7eb08ea9c378452a7e7ffd41ae082a61bbde4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_83a8610316be99d7a75a6c8a29c7eb08ea9c378452a7e7ffd41ae082a61bbde4->leave($__internal_83a8610316be99d7a75a6c8a29c7eb08ea9c378452a7e7ffd41ae082a61bbde4_prof);

        
        $__internal_01f28a51e51c17c2f52c227fe57e06555ee875dbb04e2f76a0114ab873cff352->leave($__internal_01f28a51e51c17c2f52c227fe57e06555ee875dbb04e2f76a0114ab873cff352_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/home/alexandre/Galerie/app/Resources/views/base.html.twig");
    }
}
