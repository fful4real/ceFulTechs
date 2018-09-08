<?php

/* loginbase.html.twig */
class __TwigTemplate_3db08b11d9080173f1bae91a13a8f997f00bafe678755ea3df803d6d15cd2d76 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "loginbase.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "loginbase.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <!-- Twitter -->
    <meta name=\"twitter:site\" content=\"@fultechs\">
    <meta name=\"twitter:creator\" content=\"@fultechs\">
    <meta name=\"twitter:card\" content=\"summary_large_image\">
    <meta name=\"twitter:title\" content=\"FulTechs\">
    <meta name=\"twitter:description\" content=\"Premium Quality and Responsive UI for Dashboard.\">
    <meta name=\"twitter:image\" content=\"http://FulTechs.com\">

    <!-- Facebook -->
    <meta property=\"og:url\" content=\"http://FulTechs.com\">
    <meta property=\"og:title\" content=\"FulTechs\">
    <meta property=\"og:description\" content=\"Premium Quality and Responsive UI for Dashboard.\">

    <meta property=\"og:image\" content=\"http://FulTechs.com\">
    <meta property=\"og:image:secure_url\" content=\"http://FulTechs.com\">
    <meta property=\"og:image:type\" content=\"image/png\">
    <meta property=\"og:image:width\" content=\"1200\">
    <meta property=\"og:image:height\" content=\"600\">

    <!-- Meta -->
    <meta name=\"description\" content=\"Cash Express Application\">
    <meta name=\"author\" content=\"FulTechs\">
\t
\t
\t\t<title>";
        // line 32
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    <!-- vendor css -->
    <link href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/font-awesome/css/font-awesome.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/Ionicons/css/ionicons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Slim CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/slim.css"), "html", null, true);
        echo "\">
    ";
        // line 40
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 41
        echo "
  </head>
  <body>
\t";
        // line 44
        $this->displayBlock('body', $context, $blocks);
        // line 47
        echo "
    <div class=\"slim-footer\">
      <div class=\"container\">
        <p>Copyright 2018 &copy; All Rights Reserved. FulTechs CashExpress</p>
        <p>Designed by: <a href=\"fultechs.com\">FulTechs</a></p>
      </div><!-- container -->
    </div><!-- slim-footer -->

    <script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/jquery/js/jquery.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/popper.js/js/popper.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/bootstrap/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/slim.js"), "html", null, true);
        echo "\"></script>

    ";
        // line 60
        $this->displayBlock('javascripts', $context, $blocks);
        // line 61
        echo "  </body>
</html>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 32
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 40
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 44
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 45
        echo "    
  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 60
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "loginbase.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 60,  180 => 45,  171 => 44,  154 => 40,  137 => 32,  124 => 61,  122 => 60,  117 => 58,  113 => 57,  109 => 56,  105 => 55,  95 => 47,  93 => 44,  88 => 41,  86 => 40,  82 => 39,  76 => 36,  72 => 35,  66 => 32,  33 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <!-- Twitter -->
    <meta name=\"twitter:site\" content=\"@fultechs\">
    <meta name=\"twitter:creator\" content=\"@fultechs\">
    <meta name=\"twitter:card\" content=\"summary_large_image\">
    <meta name=\"twitter:title\" content=\"FulTechs\">
    <meta name=\"twitter:description\" content=\"Premium Quality and Responsive UI for Dashboard.\">
    <meta name=\"twitter:image\" content=\"http://FulTechs.com\">

    <!-- Facebook -->
    <meta property=\"og:url\" content=\"http://FulTechs.com\">
    <meta property=\"og:title\" content=\"FulTechs\">
    <meta property=\"og:description\" content=\"Premium Quality and Responsive UI for Dashboard.\">

    <meta property=\"og:image\" content=\"http://FulTechs.com\">
    <meta property=\"og:image:secure_url\" content=\"http://FulTechs.com\">
    <meta property=\"og:image:type\" content=\"image/png\">
    <meta property=\"og:image:width\" content=\"1200\">
    <meta property=\"og:image:height\" content=\"600\">

    <!-- Meta -->
    <meta name=\"description\" content=\"Cash Express Application\">
    <meta name=\"author\" content=\"FulTechs\">
\t
\t
\t\t<title>{% block title %}{% endblock %}</title>

    <!-- vendor css -->
    <link href=\"{{asset('lib/font-awesome/css/font-awesome.css')}}\" rel=\"stylesheet\">
    <link href=\"{{asset('lib/Ionicons/css/ionicons.css')}}\" rel=\"stylesheet\">

    <!-- Slim CSS -->
    <link rel=\"stylesheet\" href=\"{{asset('css/slim.css')}}\">
    {% block stylesheets %}{% endblock %}

  </head>
  <body>
\t{% block body %}
    
  {% endblock %}

    <div class=\"slim-footer\">
      <div class=\"container\">
        <p>Copyright 2018 &copy; All Rights Reserved. FulTechs CashExpress</p>
        <p>Designed by: <a href=\"fultechs.com\">FulTechs</a></p>
      </div><!-- container -->
    </div><!-- slim-footer -->

    <script src=\"{{asset('lib/jquery/js/jquery.js')}}\"></script>
    <script src=\"{{asset('lib/popper.js/js/popper.js')}}\"></script>
    <script src=\"{{asset('lib/bootstrap/js/bootstrap.js')}}\"></script>
    <script src=\"{{asset('js/slim.js')}}\"></script>

    {% block javascripts %}{% endblock %}
  </body>
</html>

", "loginbase.html.twig", "C:\\wamp64\\www\\cashExpress\\templates\\loginbase.html.twig");
    }
}
