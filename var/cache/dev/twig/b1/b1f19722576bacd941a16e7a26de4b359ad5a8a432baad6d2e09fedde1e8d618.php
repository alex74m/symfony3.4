<?php

/* base.html.twig */
class __TwigTemplate_e7512925d8fb00307cc049a1006d437f3028b1723b810d6e2acede88a13e1891 extends Twig_Template
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
        $__internal_1ffafa5483b1b149f3dada4ddfef27bc969a7873f2558c8cdac240df127b597b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ffafa5483b1b149f3dada4ddfef27bc969a7873f2558c8cdac240df127b597b->enter($__internal_1ffafa5483b1b149f3dada4ddfef27bc969a7873f2558c8cdac240df127b597b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_44076a815da942de62315a5120af35287bca452297d212b20e2a4de8c569e3bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44076a815da942de62315a5120af35287bca452297d212b20e2a4de8c569e3bf->enter($__internal_44076a815da942de62315a5120af35287bca452297d212b20e2a4de8c569e3bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_1ffafa5483b1b149f3dada4ddfef27bc969a7873f2558c8cdac240df127b597b->leave($__internal_1ffafa5483b1b149f3dada4ddfef27bc969a7873f2558c8cdac240df127b597b_prof);

        
        $__internal_44076a815da942de62315a5120af35287bca452297d212b20e2a4de8c569e3bf->leave($__internal_44076a815da942de62315a5120af35287bca452297d212b20e2a4de8c569e3bf_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d3ee2ff4f858f2dc7faa6fb6ddc9f5344e816db02761c1d3d277fbd7e6326701 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3ee2ff4f858f2dc7faa6fb6ddc9f5344e816db02761c1d3d277fbd7e6326701->enter($__internal_d3ee2ff4f858f2dc7faa6fb6ddc9f5344e816db02761c1d3d277fbd7e6326701_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4a4ed3e2007fb06dc521b65d9aed37487aff9f01f3a2c9a88d9416f4198e2066 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a4ed3e2007fb06dc521b65d9aed37487aff9f01f3a2c9a88d9416f4198e2066->enter($__internal_4a4ed3e2007fb06dc521b65d9aed37487aff9f01f3a2c9a88d9416f4198e2066_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_4a4ed3e2007fb06dc521b65d9aed37487aff9f01f3a2c9a88d9416f4198e2066->leave($__internal_4a4ed3e2007fb06dc521b65d9aed37487aff9f01f3a2c9a88d9416f4198e2066_prof);

        
        $__internal_d3ee2ff4f858f2dc7faa6fb6ddc9f5344e816db02761c1d3d277fbd7e6326701->leave($__internal_d3ee2ff4f858f2dc7faa6fb6ddc9f5344e816db02761c1d3d277fbd7e6326701_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_87bbce565f24e8e5abd639382db8c7d8a7e5606754fab0cf96ebbf3add28f744 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87bbce565f24e8e5abd639382db8c7d8a7e5606754fab0cf96ebbf3add28f744->enter($__internal_87bbce565f24e8e5abd639382db8c7d8a7e5606754fab0cf96ebbf3add28f744_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_b3f1fe0b553c4981c28dd46aa39e43c06a75041ce3ef73493a0a2c9195253d03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3f1fe0b553c4981c28dd46aa39e43c06a75041ce3ef73493a0a2c9195253d03->enter($__internal_b3f1fe0b553c4981c28dd46aa39e43c06a75041ce3ef73493a0a2c9195253d03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_b3f1fe0b553c4981c28dd46aa39e43c06a75041ce3ef73493a0a2c9195253d03->leave($__internal_b3f1fe0b553c4981c28dd46aa39e43c06a75041ce3ef73493a0a2c9195253d03_prof);

        
        $__internal_87bbce565f24e8e5abd639382db8c7d8a7e5606754fab0cf96ebbf3add28f744->leave($__internal_87bbce565f24e8e5abd639382db8c7d8a7e5606754fab0cf96ebbf3add28f744_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_e095792f8030513828be2b53527b2ef635a7a53fd2928e5dec4e0bc71e82298b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e095792f8030513828be2b53527b2ef635a7a53fd2928e5dec4e0bc71e82298b->enter($__internal_e095792f8030513828be2b53527b2ef635a7a53fd2928e5dec4e0bc71e82298b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c0662b515c9e492b417668c4e20c0a690b8fbcce445522228dcbbd5c0230a070 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0662b515c9e492b417668c4e20c0a690b8fbcce445522228dcbbd5c0230a070->enter($__internal_c0662b515c9e492b417668c4e20c0a690b8fbcce445522228dcbbd5c0230a070_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c0662b515c9e492b417668c4e20c0a690b8fbcce445522228dcbbd5c0230a070->leave($__internal_c0662b515c9e492b417668c4e20c0a690b8fbcce445522228dcbbd5c0230a070_prof);

        
        $__internal_e095792f8030513828be2b53527b2ef635a7a53fd2928e5dec4e0bc71e82298b->leave($__internal_e095792f8030513828be2b53527b2ef635a7a53fd2928e5dec4e0bc71e82298b_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_27a0e9798758e2556d71fc61243ec10e7da83bc1e7571284f1a1e1fb8c5660b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27a0e9798758e2556d71fc61243ec10e7da83bc1e7571284f1a1e1fb8c5660b4->enter($__internal_27a0e9798758e2556d71fc61243ec10e7da83bc1e7571284f1a1e1fb8c5660b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_141ab9ae685ca641b48afc648fb2d1fb78dd9e65834eadc4bf9fa74874d38af9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_141ab9ae685ca641b48afc648fb2d1fb78dd9e65834eadc4bf9fa74874d38af9->enter($__internal_141ab9ae685ca641b48afc648fb2d1fb78dd9e65834eadc4bf9fa74874d38af9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_141ab9ae685ca641b48afc648fb2d1fb78dd9e65834eadc4bf9fa74874d38af9->leave($__internal_141ab9ae685ca641b48afc648fb2d1fb78dd9e65834eadc4bf9fa74874d38af9_prof);

        
        $__internal_27a0e9798758e2556d71fc61243ec10e7da83bc1e7571284f1a1e1fb8c5660b4->leave($__internal_27a0e9798758e2556d71fc61243ec10e7da83bc1e7571284f1a1e1fb8c5660b4_prof);

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
", "base.html.twig", "/opt/lampp/htdocs/www/php/symfony3.4/app/Resources/views/base.html.twig");
    }
}
