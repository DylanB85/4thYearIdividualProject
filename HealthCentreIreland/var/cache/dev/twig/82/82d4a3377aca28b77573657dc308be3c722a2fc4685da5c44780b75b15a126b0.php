<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c78883b0a794df95bdc741371f79e94d9f33e13589dce19f76379b9c0a0f1d06 extends Twig_Template
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
        $__internal_8d4d3091421a6ea4322fdc1e1231dcd70dcd980a83295f5f47e21ebc453195ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d4d3091421a6ea4322fdc1e1231dcd70dcd980a83295f5f47e21ebc453195ec->enter($__internal_8d4d3091421a6ea4322fdc1e1231dcd70dcd980a83295f5f47e21ebc453195ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_a9a988d4dfc74d86aa4a1621ca408c7b38cc4bf79b94299d2754b9fb316a7f8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9a988d4dfc74d86aa4a1621ca408c7b38cc4bf79b94299d2754b9fb316a7f8a->enter($__internal_a9a988d4dfc74d86aa4a1621ca408c7b38cc4bf79b94299d2754b9fb316a7f8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d4d3091421a6ea4322fdc1e1231dcd70dcd980a83295f5f47e21ebc453195ec->leave($__internal_8d4d3091421a6ea4322fdc1e1231dcd70dcd980a83295f5f47e21ebc453195ec_prof);

        
        $__internal_a9a988d4dfc74d86aa4a1621ca408c7b38cc4bf79b94299d2754b9fb316a7f8a->leave($__internal_a9a988d4dfc74d86aa4a1621ca408c7b38cc4bf79b94299d2754b9fb316a7f8a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f86233341ba740e391acfb84437c06d466decf02636b3ec5625fb5274048fc34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f86233341ba740e391acfb84437c06d466decf02636b3ec5625fb5274048fc34->enter($__internal_f86233341ba740e391acfb84437c06d466decf02636b3ec5625fb5274048fc34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_1a0aeb15b4f41dda1927e6024eed38357724c160713f93a766694da3a7e383a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a0aeb15b4f41dda1927e6024eed38357724c160713f93a766694da3a7e383a7->enter($__internal_1a0aeb15b4f41dda1927e6024eed38357724c160713f93a766694da3a7e383a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_1a0aeb15b4f41dda1927e6024eed38357724c160713f93a766694da3a7e383a7->leave($__internal_1a0aeb15b4f41dda1927e6024eed38357724c160713f93a766694da3a7e383a7_prof);

        
        $__internal_f86233341ba740e391acfb84437c06d466decf02636b3ec5625fb5274048fc34->leave($__internal_f86233341ba740e391acfb84437c06d466decf02636b3ec5625fb5274048fc34_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a6dc477cb2ba087bbf7ab523bd55851daba53d6a884943cd2dfae041029cec76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6dc477cb2ba087bbf7ab523bd55851daba53d6a884943cd2dfae041029cec76->enter($__internal_a6dc477cb2ba087bbf7ab523bd55851daba53d6a884943cd2dfae041029cec76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6c945b1db2bcdb98b0fc28d5862fa4b74e4963dbba1018d2aa0e951b987f6ccc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c945b1db2bcdb98b0fc28d5862fa4b74e4963dbba1018d2aa0e951b987f6ccc->enter($__internal_6c945b1db2bcdb98b0fc28d5862fa4b74e4963dbba1018d2aa0e951b987f6ccc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6c945b1db2bcdb98b0fc28d5862fa4b74e4963dbba1018d2aa0e951b987f6ccc->leave($__internal_6c945b1db2bcdb98b0fc28d5862fa4b74e4963dbba1018d2aa0e951b987f6ccc_prof);

        
        $__internal_a6dc477cb2ba087bbf7ab523bd55851daba53d6a884943cd2dfae041029cec76->leave($__internal_a6dc477cb2ba087bbf7ab523bd55851daba53d6a884943cd2dfae041029cec76_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9a991b71cafef613b4bdb3c2171754acb3372fe9b3370b1094d0006488b11747 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a991b71cafef613b4bdb3c2171754acb3372fe9b3370b1094d0006488b11747->enter($__internal_9a991b71cafef613b4bdb3c2171754acb3372fe9b3370b1094d0006488b11747_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d2f0d3a2d128046f26cda96f6b9f4068ce3295fddc1387c2cbb25ccc3d6c3408 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2f0d3a2d128046f26cda96f6b9f4068ce3295fddc1387c2cbb25ccc3d6c3408->enter($__internal_d2f0d3a2d128046f26cda96f6b9f4068ce3295fddc1387c2cbb25ccc3d6c3408_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d2f0d3a2d128046f26cda96f6b9f4068ce3295fddc1387c2cbb25ccc3d6c3408->leave($__internal_d2f0d3a2d128046f26cda96f6b9f4068ce3295fddc1387c2cbb25ccc3d6c3408_prof);

        
        $__internal_9a991b71cafef613b4bdb3c2171754acb3372fe9b3370b1094d0006488b11747->leave($__internal_9a991b71cafef613b4bdb3c2171754acb3372fe9b3370b1094d0006488b11747_prof);

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
", "@WebProfiler/Collector/router.html.twig", "C:\\Users\\dylan\\Desktop\\4thYearIndividualProject\\HealthCentreIreland\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
