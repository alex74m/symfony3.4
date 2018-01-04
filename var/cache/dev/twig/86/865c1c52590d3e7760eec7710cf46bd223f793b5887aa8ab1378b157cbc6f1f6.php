<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_3af4a99c1cb655a4825f0a6e01551d674b52d52b622e47d73e3845cb1496152a extends Twig_Template
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
        $__internal_1bd60619dc077e2d821f686936cbea6184c8b26c32d1ac9cf0661fd57801fd0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1bd60619dc077e2d821f686936cbea6184c8b26c32d1ac9cf0661fd57801fd0b->enter($__internal_1bd60619dc077e2d821f686936cbea6184c8b26c32d1ac9cf0661fd57801fd0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_ef5a50de9c0d3b8795335984d658874b504723fc17dfcda97007d16e8663f24a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef5a50de9c0d3b8795335984d658874b504723fc17dfcda97007d16e8663f24a->enter($__internal_ef5a50de9c0d3b8795335984d658874b504723fc17dfcda97007d16e8663f24a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1bd60619dc077e2d821f686936cbea6184c8b26c32d1ac9cf0661fd57801fd0b->leave($__internal_1bd60619dc077e2d821f686936cbea6184c8b26c32d1ac9cf0661fd57801fd0b_prof);

        
        $__internal_ef5a50de9c0d3b8795335984d658874b504723fc17dfcda97007d16e8663f24a->leave($__internal_ef5a50de9c0d3b8795335984d658874b504723fc17dfcda97007d16e8663f24a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1f08cc5ca3490f5bc18b1ccb74e9173f1d7105c098c1628e29b524a899a587e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f08cc5ca3490f5bc18b1ccb74e9173f1d7105c098c1628e29b524a899a587e6->enter($__internal_1f08cc5ca3490f5bc18b1ccb74e9173f1d7105c098c1628e29b524a899a587e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_da5e4bd03e480a558bbdca02c1afe619c5bac26f88d2f299d54071088adba756 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da5e4bd03e480a558bbdca02c1afe619c5bac26f88d2f299d54071088adba756->enter($__internal_da5e4bd03e480a558bbdca02c1afe619c5bac26f88d2f299d54071088adba756_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_da5e4bd03e480a558bbdca02c1afe619c5bac26f88d2f299d54071088adba756->leave($__internal_da5e4bd03e480a558bbdca02c1afe619c5bac26f88d2f299d54071088adba756_prof);

        
        $__internal_1f08cc5ca3490f5bc18b1ccb74e9173f1d7105c098c1628e29b524a899a587e6->leave($__internal_1f08cc5ca3490f5bc18b1ccb74e9173f1d7105c098c1628e29b524a899a587e6_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8ea036c2d18aff987e47eca0e93023af6b83eb51ef03ca5ecaa713b501aa6ea7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ea036c2d18aff987e47eca0e93023af6b83eb51ef03ca5ecaa713b501aa6ea7->enter($__internal_8ea036c2d18aff987e47eca0e93023af6b83eb51ef03ca5ecaa713b501aa6ea7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_adf847c778c31b52050a560f626aa6d60e44627a397fda2d611b33990483b256 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adf847c778c31b52050a560f626aa6d60e44627a397fda2d611b33990483b256->enter($__internal_adf847c778c31b52050a560f626aa6d60e44627a397fda2d611b33990483b256_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_adf847c778c31b52050a560f626aa6d60e44627a397fda2d611b33990483b256->leave($__internal_adf847c778c31b52050a560f626aa6d60e44627a397fda2d611b33990483b256_prof);

        
        $__internal_8ea036c2d18aff987e47eca0e93023af6b83eb51ef03ca5ecaa713b501aa6ea7->leave($__internal_8ea036c2d18aff987e47eca0e93023af6b83eb51ef03ca5ecaa713b501aa6ea7_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6c91ea7c929786df3473afca594e95b4c6ff435770224929239c59ec1916e5e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c91ea7c929786df3473afca594e95b4c6ff435770224929239c59ec1916e5e9->enter($__internal_6c91ea7c929786df3473afca594e95b4c6ff435770224929239c59ec1916e5e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b0213b32b4bc83cceb758c201a9af27f2416b4246253674011421752ce499574 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0213b32b4bc83cceb758c201a9af27f2416b4246253674011421752ce499574->enter($__internal_b0213b32b4bc83cceb758c201a9af27f2416b4246253674011421752ce499574_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b0213b32b4bc83cceb758c201a9af27f2416b4246253674011421752ce499574->leave($__internal_b0213b32b4bc83cceb758c201a9af27f2416b4246253674011421752ce499574_prof);

        
        $__internal_6c91ea7c929786df3473afca594e95b4c6ff435770224929239c59ec1916e5e9->leave($__internal_6c91ea7c929786df3473afca594e95b4c6ff435770224929239c59ec1916e5e9_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/opt/lampp/htdocs/www/php/symfony3.4/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
