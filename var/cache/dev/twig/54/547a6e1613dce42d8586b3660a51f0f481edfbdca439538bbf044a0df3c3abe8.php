<?php

/* account/buy.html.twig */
class __TwigTemplate_66de856b1e55a759dbb215f3193e70922e9efa775bfd4c21d311f7ffeba09a3c extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "account/buy.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "account/buy.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "account/buy.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "New Order-FulTechs";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"slim-mainpanel\">
      <div class=\"container\">

        <div class=\"slim-pageheader\">
          <ol class=\"breadcrumb slim-breadcrumb\">
            <li class=\"breadcrumb-item\"><a href=\"#\">Home</a></li>
            <li class=\"breadcrumb-item\"><a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ceaccount_list");
        echo "\">Comptes</a></li>
            <li class=\"breadcrumb-item active\" aria-current=\"page\">Depot</li>
          </ol>
          <h6 class=\"slim-pagetitle\">Achat Compte - ";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["account"]) || array_key_exists("account", $context) ? $context["account"] : (function () { throw new Twig_Error_Runtime('Variable "account" does not exist.', 15, $this->source); })()), "ceAccountCode", array()), "html", null, true);
        echo "</h6>
        </div><!-- slim-pageheader -->

\t        <div class=\"section-wrapper\">
\t        ";
        // line 19
        $this->loadTemplate("flash.html.twig", "account/buy.html.twig", 19)->display($context);
        // line 20
        echo "\t\t\t";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["buyForm"]) || array_key_exists("buyForm", $context) ? $context["buyForm"] : (function () { throw new Twig_Error_Runtime('Variable "buyForm" does not exist.', 20, $this->source); })()), 'form_start');
        echo "
\t\t        <div class=\"form-layout\">
\t\t            <div class=\"row mg-b-25\">
\t\t              <div class=\"col-lg-4\">
\t\t                <div class=\"form-group\">
\t\t                  <label class=\"form-control-label\">Compte: </label>
\t\t                  \t";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["buyForm"]) || array_key_exists("buyForm", $context) ? $context["buyForm"] : (function () { throw new Twig_Error_Runtime('Variable "buyForm" does not exist.', 26, $this->source); })()), "Compte", array()), 'widget');
        echo "
\t\t                </div>

\t\t              </div><!-- col-4 -->
\t\t              <div class=\"col-lg-4\">
\t\t                <div class=\"form-group\">
\t\t                  <label class=\"form-control-label\">De Compte :<span class=\"tx-danger\">*</span></label>
\t\t                  ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["buyForm"]) || array_key_exists("buyForm", $context) ? $context["buyForm"] : (function () { throw new Twig_Error_Runtime('Variable "buyForm" does not exist.', 33, $this->source); })()), "deCompte", array()), 'widget');
        echo "
\t\t                  ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["buyForm"]) || array_key_exists("buyForm", $context) ? $context["buyForm"] : (function () { throw new Twig_Error_Runtime('Variable "buyForm" does not exist.', 34, $this->source); })()), "deCompte", array()), 'errors');
        echo "
\t\t                </div>
\t\t              </div><!-- col-4 -->
\t\t              <div class=\"col-lg-4\">
\t\t                <div class=\"form-group\">
\t\t                  <label class=\"form-control-label\">Montant :<span class=\"tx-danger\">*</span></label>
\t\t                  ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["buyForm"]) || array_key_exists("buyForm", $context) ? $context["buyForm"] : (function () { throw new Twig_Error_Runtime('Variable "buyForm" does not exist.', 40, $this->source); })()), "Montant", array()), 'widget');
        echo "
\t\t                  ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["buyForm"]) || array_key_exists("buyForm", $context) ? $context["buyForm"] : (function () { throw new Twig_Error_Runtime('Variable "buyForm" does not exist.', 41, $this->source); })()), "Montant", array()), 'errors');
        echo "
\t\t                </div>
\t\t              </div><!-- col-4 -->

\t\t            </div><!-- row -->

\t\t            <div class=\"form-layout-footer\">
\t\t              <button type=\"submit\" class=\"btn btn-success bd-0\">Acheter</button>
\t\t              <button type=\"reset\" class=\"btn btn-warning bd-0\">Reset</button>
\t\t              <a href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ceaccount_show", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["account"]) || array_key_exists("account", $context) ? $context["account"] : (function () { throw new Twig_Error_Runtime('Variable "account" does not exist.', 50, $this->source); })()), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-secondary bd-0\">Annuller</a>
\t\t            </div><!-- form-layout-footer -->
\t\t        </div><!-- form-layout -->
\t\t\t";
        // line 53
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["buyForm"]) || array_key_exists("buyForm", $context) ? $context["buyForm"] : (function () { throw new Twig_Error_Runtime('Variable "buyForm" does not exist.', 53, $this->source); })()), 'form_end');
        echo "
\t        </div> <!-- Sectino Wrapper -->
      </div><!-- container -->
    </div><!-- slim-mainpanel -->

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "account/buy.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 53,  144 => 50,  132 => 41,  128 => 40,  119 => 34,  115 => 33,  105 => 26,  95 => 20,  93 => 19,  86 => 15,  80 => 12,  72 => 6,  63 => 5,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}New Order-FulTechs{% endblock %}

{% block body %}
    <div class=\"slim-mainpanel\">
      <div class=\"container\">

        <div class=\"slim-pageheader\">
          <ol class=\"breadcrumb slim-breadcrumb\">
            <li class=\"breadcrumb-item\"><a href=\"#\">Home</a></li>
            <li class=\"breadcrumb-item\"><a href=\"{{path('ceaccount_list')}}\">Comptes</a></li>
            <li class=\"breadcrumb-item active\" aria-current=\"page\">Depot</li>
          </ol>
          <h6 class=\"slim-pagetitle\">Achat Compte - {{account.ceAccountCode}}</h6>
        </div><!-- slim-pageheader -->

\t        <div class=\"section-wrapper\">
\t        {% include 'flash.html.twig' %}
\t\t\t{{form_start(buyForm)}}
\t\t        <div class=\"form-layout\">
\t\t            <div class=\"row mg-b-25\">
\t\t              <div class=\"col-lg-4\">
\t\t                <div class=\"form-group\">
\t\t                  <label class=\"form-control-label\">Compte: </label>
\t\t                  \t{{form_widget(buyForm.Compte)}}
\t\t                </div>

\t\t              </div><!-- col-4 -->
\t\t              <div class=\"col-lg-4\">
\t\t                <div class=\"form-group\">
\t\t                  <label class=\"form-control-label\">De Compte :<span class=\"tx-danger\">*</span></label>
\t\t                  {{form_widget(buyForm.deCompte)}}
\t\t                  {{form_errors(buyForm.deCompte)}}
\t\t                </div>
\t\t              </div><!-- col-4 -->
\t\t              <div class=\"col-lg-4\">
\t\t                <div class=\"form-group\">
\t\t                  <label class=\"form-control-label\">Montant :<span class=\"tx-danger\">*</span></label>
\t\t                  {{form_widget(buyForm.Montant)}}
\t\t                  {{form_errors(buyForm.Montant)}}
\t\t                </div>
\t\t              </div><!-- col-4 -->

\t\t            </div><!-- row -->

\t\t            <div class=\"form-layout-footer\">
\t\t              <button type=\"submit\" class=\"btn btn-success bd-0\">Acheter</button>
\t\t              <button type=\"reset\" class=\"btn btn-warning bd-0\">Reset</button>
\t\t              <a href=\"{{path('ceaccount_show',{'id':account.id})}}\" class=\"btn btn-secondary bd-0\">Annuller</a>
\t\t            </div><!-- form-layout-footer -->
\t\t        </div><!-- form-layout -->
\t\t\t{{form_end(buyForm)}}
\t        </div> <!-- Sectino Wrapper -->
      </div><!-- container -->
    </div><!-- slim-mainpanel -->

{% endblock %}", "account/buy.html.twig", "C:\\wamp64\\www\\cashExpress\\templates\\account\\buy.html.twig");
    }
}
