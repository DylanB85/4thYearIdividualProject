<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_8ece518a7d47cbec3cd793902ac2d1780625c2e915ea685331c4e93ae6c98d3a extends Twig_Template
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
        $__internal_11f9a5160c4cd0f2c6bf32637b1acefe2b6aa1c8b2313a615557d0707af6c655 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11f9a5160c4cd0f2c6bf32637b1acefe2b6aa1c8b2313a615557d0707af6c655->enter($__internal_11f9a5160c4cd0f2c6bf32637b1acefe2b6aa1c8b2313a615557d0707af6c655_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_8fa72ca29db0e4bdba711bc85140df11251851519f21e73af8d72e424cee92c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fa72ca29db0e4bdba711bc85140df11251851519f21e73af8d72e424cee92c8->enter($__internal_8fa72ca29db0e4bdba711bc85140df11251851519f21e73af8d72e424cee92c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_11f9a5160c4cd0f2c6bf32637b1acefe2b6aa1c8b2313a615557d0707af6c655->leave($__internal_11f9a5160c4cd0f2c6bf32637b1acefe2b6aa1c8b2313a615557d0707af6c655_prof);

        
        $__internal_8fa72ca29db0e4bdba711bc85140df11251851519f21e73af8d72e424cee92c8->leave($__internal_8fa72ca29db0e4bdba711bc85140df11251851519f21e73af8d72e424cee92c8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_62fae272bcd25a7769ff41ab72e6936bb455016be4fd1a720c2d3fee940b8d30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62fae272bcd25a7769ff41ab72e6936bb455016be4fd1a720c2d3fee940b8d30->enter($__internal_62fae272bcd25a7769ff41ab72e6936bb455016be4fd1a720c2d3fee940b8d30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4c5bd5913d7731c121fb76ac21a28713387968b1a84e3ea9cc9f31ec974cf3fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c5bd5913d7731c121fb76ac21a28713387968b1a84e3ea9cc9f31ec974cf3fe->enter($__internal_4c5bd5913d7731c121fb76ac21a28713387968b1a84e3ea9cc9f31ec974cf3fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_4c5bd5913d7731c121fb76ac21a28713387968b1a84e3ea9cc9f31ec974cf3fe->leave($__internal_4c5bd5913d7731c121fb76ac21a28713387968b1a84e3ea9cc9f31ec974cf3fe_prof);

        
        $__internal_62fae272bcd25a7769ff41ab72e6936bb455016be4fd1a720c2d3fee940b8d30->leave($__internal_62fae272bcd25a7769ff41ab72e6936bb455016be4fd1a720c2d3fee940b8d30_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_fb87de6a37f2484567dd5ea67bdb8853ddb37871655eaa69bc3953d1a61a8d13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb87de6a37f2484567dd5ea67bdb8853ddb37871655eaa69bc3953d1a61a8d13->enter($__internal_fb87de6a37f2484567dd5ea67bdb8853ddb37871655eaa69bc3953d1a61a8d13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e05187c56c41a84224142d2c8bd19a9dd4050c83b88d286e537e0976b1fb7efd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e05187c56c41a84224142d2c8bd19a9dd4050c83b88d286e537e0976b1fb7efd->enter($__internal_e05187c56c41a84224142d2c8bd19a9dd4050c83b88d286e537e0976b1fb7efd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_e05187c56c41a84224142d2c8bd19a9dd4050c83b88d286e537e0976b1fb7efd->leave($__internal_e05187c56c41a84224142d2c8bd19a9dd4050c83b88d286e537e0976b1fb7efd_prof);

        
        $__internal_fb87de6a37f2484567dd5ea67bdb8853ddb37871655eaa69bc3953d1a61a8d13->leave($__internal_fb87de6a37f2484567dd5ea67bdb8853ddb37871655eaa69bc3953d1a61a8d13_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f9cd37f0b6b11bfa3507f0a70d770a041e676dc747328477fb66eaced804458b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9cd37f0b6b11bfa3507f0a70d770a041e676dc747328477fb66eaced804458b->enter($__internal_f9cd37f0b6b11bfa3507f0a70d770a041e676dc747328477fb66eaced804458b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1f93afaf05dcbce2807865497d37e14d1e4b846a85f3cac73df2666cdafe9b21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f93afaf05dcbce2807865497d37e14d1e4b846a85f3cac73df2666cdafe9b21->enter($__internal_1f93afaf05dcbce2807865497d37e14d1e4b846a85f3cac73df2666cdafe9b21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_1f93afaf05dcbce2807865497d37e14d1e4b846a85f3cac73df2666cdafe9b21->leave($__internal_1f93afaf05dcbce2807865497d37e14d1e4b846a85f3cac73df2666cdafe9b21_prof);

        
        $__internal_f9cd37f0b6b11bfa3507f0a70d770a041e676dc747328477fb66eaced804458b->leave($__internal_f9cd37f0b6b11bfa3507f0a70d770a041e676dc747328477fb66eaced804458b_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "C:\\Users\\dylan\\Desktop\\4thYearIndividualProject\\HealthCentreIreland\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
