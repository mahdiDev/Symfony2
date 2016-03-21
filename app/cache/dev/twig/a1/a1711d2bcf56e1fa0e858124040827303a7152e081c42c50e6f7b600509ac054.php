<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_5577e7a6dc8ab4ce37c89ff18c6c93c6fa136eeaf646a84e301262f088205f8b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_38dedaa0191afca4de37edc56387301dadfe710bcd779529a9a661e5a2f6bad6 = $this->env->getExtension("native_profiler");
        $__internal_38dedaa0191afca4de37edc56387301dadfe710bcd779529a9a661e5a2f6bad6->enter($__internal_38dedaa0191afca4de37edc56387301dadfe710bcd779529a9a661e5a2f6bad6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_38dedaa0191afca4de37edc56387301dadfe710bcd779529a9a661e5a2f6bad6->leave($__internal_38dedaa0191afca4de37edc56387301dadfe710bcd779529a9a661e5a2f6bad6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6123bbb6abe87ab701c75ecf60e54b1b013dd7188f1adda6e0015a9becbeb7ba = $this->env->getExtension("native_profiler");
        $__internal_6123bbb6abe87ab701c75ecf60e54b1b013dd7188f1adda6e0015a9becbeb7ba->enter($__internal_6123bbb6abe87ab701c75ecf60e54b1b013dd7188f1adda6e0015a9becbeb7ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_6123bbb6abe87ab701c75ecf60e54b1b013dd7188f1adda6e0015a9becbeb7ba->leave($__internal_6123bbb6abe87ab701c75ecf60e54b1b013dd7188f1adda6e0015a9becbeb7ba_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_8bd086b70d7f1db6e595c6600d3b427c587f28ddefda33e971fe8b72581dcf71 = $this->env->getExtension("native_profiler");
        $__internal_8bd086b70d7f1db6e595c6600d3b427c587f28ddefda33e971fe8b72581dcf71->enter($__internal_8bd086b70d7f1db6e595c6600d3b427c587f28ddefda33e971fe8b72581dcf71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_8bd086b70d7f1db6e595c6600d3b427c587f28ddefda33e971fe8b72581dcf71->leave($__internal_8bd086b70d7f1db6e595c6600d3b427c587f28ddefda33e971fe8b72581dcf71_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c61d13bb460e66e11cee4b486f72e59a22034bd1fd7b287454f0ae7b88ddc67c = $this->env->getExtension("native_profiler");
        $__internal_c61d13bb460e66e11cee4b486f72e59a22034bd1fd7b287454f0ae7b88ddc67c->enter($__internal_c61d13bb460e66e11cee4b486f72e59a22034bd1fd7b287454f0ae7b88ddc67c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_c61d13bb460e66e11cee4b486f72e59a22034bd1fd7b287454f0ae7b88ddc67c->leave($__internal_c61d13bb460e66e11cee4b486f72e59a22034bd1fd7b287454f0ae7b88ddc67c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
