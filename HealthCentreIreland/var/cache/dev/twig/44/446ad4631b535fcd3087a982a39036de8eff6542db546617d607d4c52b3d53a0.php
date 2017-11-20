<?php

/* security/login.html.twig */
class __TwigTemplate_f46bf42aa24a69fad1e78f2be91fe23bf3bfaa68d4645b03cb0c615d03d6a8fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
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
        $__internal_c2593aa5f8b88468d8dca1ed23c8d505af8423b83940f1f6e5d2c1b53f061cbb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2593aa5f8b88468d8dca1ed23c8d505af8423b83940f1f6e5d2c1b53f061cbb->enter($__internal_c2593aa5f8b88468d8dca1ed23c8d505af8423b83940f1f6e5d2c1b53f061cbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_fbde5fd7b3420a6f9ffd253669213502fdb15fd88e994c9c311914a25b97b4dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbde5fd7b3420a6f9ffd253669213502fdb15fd88e994c9c311914a25b97b4dd->enter($__internal_fbde5fd7b3420a6f9ffd253669213502fdb15fd88e994c9c311914a25b97b4dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c2593aa5f8b88468d8dca1ed23c8d505af8423b83940f1f6e5d2c1b53f061cbb->leave($__internal_c2593aa5f8b88468d8dca1ed23c8d505af8423b83940f1f6e5d2c1b53f061cbb_prof);

        
        $__internal_fbde5fd7b3420a6f9ffd253669213502fdb15fd88e994c9c311914a25b97b4dd->leave($__internal_fbde5fd7b3420a6f9ffd253669213502fdb15fd88e994c9c311914a25b97b4dd_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8e3e65093658fd0aa4f1ed9e3b84146cfba101459609907d1a7bb479440950d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e3e65093658fd0aa4f1ed9e3b84146cfba101459609907d1a7bb479440950d5->enter($__internal_8e3e65093658fd0aa4f1ed9e3b84146cfba101459609907d1a7bb479440950d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0c0d1f019cb705c1629a834d324309a5b3f1fa330efa9636382fea176f542bdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c0d1f019cb705c1629a834d324309a5b3f1fa330efa9636382fea176f542bdc->enter($__internal_0c0d1f019cb705c1629a834d324309a5b3f1fa330efa9636382fea176f542bdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <form class=\"form-signin\">
        <h2 class=\"form-signin-heading\">Please sign in</h2>
        <label for=\"inputEmail\" class=\"sr-only\">Email address</label>
        <input type=\"email\" id=\"inputEmail\" class=\"form-control\" placeholder=\"Email address\" required autofocus>
        <label for=\"inputPassword\" class=\"sr-only\">Password</label>
        <input type=\"password\" id=\"inputPassword\" class=\"form-control\" placeholder=\"Password\" required>
        <button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">Sign in</button>
    </form>

";
        
        $__internal_0c0d1f019cb705c1629a834d324309a5b3f1fa330efa9636382fea176f542bdc->leave($__internal_0c0d1f019cb705c1629a834d324309a5b3f1fa330efa9636382fea176f542bdc_prof);

        
        $__internal_8e3e65093658fd0aa4f1ed9e3b84146cfba101459609907d1a7bb479440950d5->leave($__internal_8e3e65093658fd0aa4f1ed9e3b84146cfba101459609907d1a7bb479440950d5_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
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

    <form class=\"form-signin\">
        <h2 class=\"form-signin-heading\">Please sign in</h2>
        <label for=\"inputEmail\" class=\"sr-only\">Email address</label>
        <input type=\"email\" id=\"inputEmail\" class=\"form-control\" placeholder=\"Email address\" required autofocus>
        <label for=\"inputPassword\" class=\"sr-only\">Password</label>
        <input type=\"password\" id=\"inputPassword\" class=\"form-control\" placeholder=\"Password\" required>
        <button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">Sign in</button>
    </form>

{% endblock %}", "security/login.html.twig", "C:\\Users\\dylan\\Desktop\\4thYearIndividualProject\\HealthCentreIreland\\app\\Resources\\views\\security\\login.html.twig");
    }
}
