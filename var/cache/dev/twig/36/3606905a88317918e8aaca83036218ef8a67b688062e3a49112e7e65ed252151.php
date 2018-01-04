<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_cf162f25fa3b6f82cee69ba6f883fb7c82621dcf246f7c18429b115a3511835f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_3d2946f40ecd0553119156eeb60b7aed2d8c2fb7134bd0784f31601df5c67981 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d2946f40ecd0553119156eeb60b7aed2d8c2fb7134bd0784f31601df5c67981->enter($__internal_3d2946f40ecd0553119156eeb60b7aed2d8c2fb7134bd0784f31601df5c67981_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_cdcccdc215e1c40bce0d267383edc879f141dac4b2f632c12a9020faca80a0cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdcccdc215e1c40bce0d267383edc879f141dac4b2f632c12a9020faca80a0cf->enter($__internal_cdcccdc215e1c40bce0d267383edc879f141dac4b2f632c12a9020faca80a0cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d2946f40ecd0553119156eeb60b7aed2d8c2fb7134bd0784f31601df5c67981->leave($__internal_3d2946f40ecd0553119156eeb60b7aed2d8c2fb7134bd0784f31601df5c67981_prof);

        
        $__internal_cdcccdc215e1c40bce0d267383edc879f141dac4b2f632c12a9020faca80a0cf->leave($__internal_cdcccdc215e1c40bce0d267383edc879f141dac4b2f632c12a9020faca80a0cf_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f06a8d1864a1537740b55903e9335f74bfeb129d39fbdf0bdc94a9e550fac000 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f06a8d1864a1537740b55903e9335f74bfeb129d39fbdf0bdc94a9e550fac000->enter($__internal_f06a8d1864a1537740b55903e9335f74bfeb129d39fbdf0bdc94a9e550fac000_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_680fe171f35932d1273b5432d096aa7fc53ddb56d4ca309fb76853f3d47780b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_680fe171f35932d1273b5432d096aa7fc53ddb56d4ca309fb76853f3d47780b4->enter($__internal_680fe171f35932d1273b5432d096aa7fc53ddb56d4ca309fb76853f3d47780b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_680fe171f35932d1273b5432d096aa7fc53ddb56d4ca309fb76853f3d47780b4->leave($__internal_680fe171f35932d1273b5432d096aa7fc53ddb56d4ca309fb76853f3d47780b4_prof);

        
        $__internal_f06a8d1864a1537740b55903e9335f74bfeb129d39fbdf0bdc94a9e550fac000->leave($__internal_f06a8d1864a1537740b55903e9335f74bfeb129d39fbdf0bdc94a9e550fac000_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9d34e191510c04f2565143743f6084a9c030ec53676454d9f0925fd643b71321 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d34e191510c04f2565143743f6084a9c030ec53676454d9f0925fd643b71321->enter($__internal_9d34e191510c04f2565143743f6084a9c030ec53676454d9f0925fd643b71321_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_825e224e53204464875c021a8ccba5934b9baa661585e83ea5d659d471bb310b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_825e224e53204464875c021a8ccba5934b9baa661585e83ea5d659d471bb310b->enter($__internal_825e224e53204464875c021a8ccba5934b9baa661585e83ea5d659d471bb310b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_825e224e53204464875c021a8ccba5934b9baa661585e83ea5d659d471bb310b->leave($__internal_825e224e53204464875c021a8ccba5934b9baa661585e83ea5d659d471bb310b_prof);

        
        $__internal_9d34e191510c04f2565143743f6084a9c030ec53676454d9f0925fd643b71321->leave($__internal_9d34e191510c04f2565143743f6084a9c030ec53676454d9f0925fd643b71321_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0f6ad09b447dd7534e6665e49f1ee3f6882916f7ee7e67d0460976671a6e0918 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f6ad09b447dd7534e6665e49f1ee3f6882916f7ee7e67d0460976671a6e0918->enter($__internal_0f6ad09b447dd7534e6665e49f1ee3f6882916f7ee7e67d0460976671a6e0918_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_892615b9c6103b8e3e9746c589d57290f8b60a7d6adbd537ae1f7ec24b5b53cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_892615b9c6103b8e3e9746c589d57290f8b60a7d6adbd537ae1f7ec24b5b53cd->enter($__internal_892615b9c6103b8e3e9746c589d57290f8b60a7d6adbd537ae1f7ec24b5b53cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_892615b9c6103b8e3e9746c589d57290f8b60a7d6adbd537ae1f7ec24b5b53cd->leave($__internal_892615b9c6103b8e3e9746c589d57290f8b60a7d6adbd537ae1f7ec24b5b53cd_prof);

        
        $__internal_0f6ad09b447dd7534e6665e49f1ee3f6882916f7ee7e67d0460976671a6e0918->leave($__internal_0f6ad09b447dd7534e6665e49f1ee3f6882916f7ee7e67d0460976671a6e0918_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/opt/lampp/htdocs/www/php/symfony3.4/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
