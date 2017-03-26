<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_490088ef8c2d536ba9aa3e4da532e3c9d5d6875dde7bb492995d7d77f4e311f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7126a08f064f2947c9aaefff3fe1215099c29ee8f7208cfb8e7ef050362d4fff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7126a08f064f2947c9aaefff3fe1215099c29ee8f7208cfb8e7ef050362d4fff->enter($__internal_7126a08f064f2947c9aaefff3fe1215099c29ee8f7208cfb8e7ef050362d4fff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_a286f647d17b0133390ec4063596194735ef1f354080d202e1592e62efc31626 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a286f647d17b0133390ec4063596194735ef1f354080d202e1592e62efc31626->enter($__internal_a286f647d17b0133390ec4063596194735ef1f354080d202e1592e62efc31626_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7126a08f064f2947c9aaefff3fe1215099c29ee8f7208cfb8e7ef050362d4fff->leave($__internal_7126a08f064f2947c9aaefff3fe1215099c29ee8f7208cfb8e7ef050362d4fff_prof);

        
        $__internal_a286f647d17b0133390ec4063596194735ef1f354080d202e1592e62efc31626->leave($__internal_a286f647d17b0133390ec4063596194735ef1f354080d202e1592e62efc31626_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_cf5bf14ff7deb4919c857d8e972367df78d3bbe327cc727b3773397bafee20fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf5bf14ff7deb4919c857d8e972367df78d3bbe327cc727b3773397bafee20fd->enter($__internal_cf5bf14ff7deb4919c857d8e972367df78d3bbe327cc727b3773397bafee20fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_e3210882a5f1599c4234687fd471929fc2a3493cac39aaeea28d07f78398f9d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3210882a5f1599c4234687fd471929fc2a3493cac39aaeea28d07f78398f9d4->enter($__internal_e3210882a5f1599c4234687fd471929fc2a3493cac39aaeea28d07f78398f9d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e3210882a5f1599c4234687fd471929fc2a3493cac39aaeea28d07f78398f9d4->leave($__internal_e3210882a5f1599c4234687fd471929fc2a3493cac39aaeea28d07f78398f9d4_prof);

        
        $__internal_cf5bf14ff7deb4919c857d8e972367df78d3bbe327cc727b3773397bafee20fd->leave($__internal_cf5bf14ff7deb4919c857d8e972367df78d3bbe327cc727b3773397bafee20fd_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9fa4408250af8223dbea67468bfd47f80492c2f4d4dcb1803129e29032c89699 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fa4408250af8223dbea67468bfd47f80492c2f4d4dcb1803129e29032c89699->enter($__internal_9fa4408250af8223dbea67468bfd47f80492c2f4d4dcb1803129e29032c89699_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_7efbe42c835b60a004dbb41015f77314108e24ac0eba8d071ea453a3e50dc18d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7efbe42c835b60a004dbb41015f77314108e24ac0eba8d071ea453a3e50dc18d->enter($__internal_7efbe42c835b60a004dbb41015f77314108e24ac0eba8d071ea453a3e50dc18d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7efbe42c835b60a004dbb41015f77314108e24ac0eba8d071ea453a3e50dc18d->leave($__internal_7efbe42c835b60a004dbb41015f77314108e24ac0eba8d071ea453a3e50dc18d_prof);

        
        $__internal_9fa4408250af8223dbea67468bfd47f80492c2f4d4dcb1803129e29032c89699->leave($__internal_9fa4408250af8223dbea67468bfd47f80492c2f4d4dcb1803129e29032c89699_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_999077928c5079fdd983dda2bd3aac266526b3530ace0ae6e89ae9bce892b9c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_999077928c5079fdd983dda2bd3aac266526b3530ace0ae6e89ae9bce892b9c3->enter($__internal_999077928c5079fdd983dda2bd3aac266526b3530ace0ae6e89ae9bce892b9c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ae12852844d9ae19f6891830b762be2d03a02a812d9897806265038c034e1a4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae12852844d9ae19f6891830b762be2d03a02a812d9897806265038c034e1a4d->enter($__internal_ae12852844d9ae19f6891830b762be2d03a02a812d9897806265038c034e1a4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ae12852844d9ae19f6891830b762be2d03a02a812d9897806265038c034e1a4d->leave($__internal_ae12852844d9ae19f6891830b762be2d03a02a812d9897806265038c034e1a4d_prof);

        
        $__internal_999077928c5079fdd983dda2bd3aac266526b3530ace0ae6e89ae9bce892b9c3->leave($__internal_999077928c5079fdd983dda2bd3aac266526b3530ace0ae6e89ae9bce892b9c3_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/alexandre/Galerie/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
