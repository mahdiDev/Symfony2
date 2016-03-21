<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_0efd039a83e82752f15a1b1dfeb31e60e6f17fbc64b3ee2e35cae09c171d3d6d extends Twig_Template
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
        $__internal_d4d78bbddf7aa4e8d6f2a019d7148db32d0e6d3cdb0f6fd849cf7a1ee4618dde = $this->env->getExtension("native_profiler");
        $__internal_d4d78bbddf7aa4e8d6f2a019d7148db32d0e6d3cdb0f6fd849cf7a1ee4618dde->enter($__internal_d4d78bbddf7aa4e8d6f2a019d7148db32d0e6d3cdb0f6fd849cf7a1ee4618dde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d4d78bbddf7aa4e8d6f2a019d7148db32d0e6d3cdb0f6fd849cf7a1ee4618dde->leave($__internal_d4d78bbddf7aa4e8d6f2a019d7148db32d0e6d3cdb0f6fd849cf7a1ee4618dde_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d59aff04cace577c91c8c2cbba445465c0622d7338d59b0098c5e2f0102b5977 = $this->env->getExtension("native_profiler");
        $__internal_d59aff04cace577c91c8c2cbba445465c0622d7338d59b0098c5e2f0102b5977->enter($__internal_d59aff04cace577c91c8c2cbba445465c0622d7338d59b0098c5e2f0102b5977_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d59aff04cace577c91c8c2cbba445465c0622d7338d59b0098c5e2f0102b5977->leave($__internal_d59aff04cace577c91c8c2cbba445465c0622d7338d59b0098c5e2f0102b5977_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8f3b20ccc8d511726e4c0230f26ce31be29ace84c042f3c683b94e7befc99c18 = $this->env->getExtension("native_profiler");
        $__internal_8f3b20ccc8d511726e4c0230f26ce31be29ace84c042f3c683b94e7befc99c18->enter($__internal_8f3b20ccc8d511726e4c0230f26ce31be29ace84c042f3c683b94e7befc99c18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8f3b20ccc8d511726e4c0230f26ce31be29ace84c042f3c683b94e7befc99c18->leave($__internal_8f3b20ccc8d511726e4c0230f26ce31be29ace84c042f3c683b94e7befc99c18_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3b576885d6b86640cfce7d49ad3599cc1825ad42680261ac94a29ca7ded4a4cf = $this->env->getExtension("native_profiler");
        $__internal_3b576885d6b86640cfce7d49ad3599cc1825ad42680261ac94a29ca7ded4a4cf->enter($__internal_3b576885d6b86640cfce7d49ad3599cc1825ad42680261ac94a29ca7ded4a4cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3b576885d6b86640cfce7d49ad3599cc1825ad42680261ac94a29ca7ded4a4cf->leave($__internal_3b576885d6b86640cfce7d49ad3599cc1825ad42680261ac94a29ca7ded4a4cf_prof);

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
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
