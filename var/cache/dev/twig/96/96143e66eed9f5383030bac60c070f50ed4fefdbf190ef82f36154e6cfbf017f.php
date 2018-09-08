<?php

/* account/receive.html.twig */
class __TwigTemplate_64aca7f5121d73ac9b10130a69eb58568d9679238b4821a7a305855d08226335 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "account/receive.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "account/receive.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "account/receive.html.twig"));

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
            <li class=\"breadcrumb-item active\" aria-current=\"page\">Reception</li>
          </ol>
          <h6 class=\"slim-pagetitle\">Reception Compte - ";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["account"]) || array_key_exists("account", $context) ? $context["account"] : (function () { throw new Twig_Error_Runtime('Variable "account" does not exist.', 15, $this->source); })()), "ceAccountCode", array()), "html", null, true);
        echo "</h6>
        </div><!-- slim-pageheader -->

";
        // line 18
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["accountEntryForm"]) || array_key_exists("accountEntryForm", $context) ? $context["accountEntryForm"] : (function () { throw new Twig_Error_Runtime('Variable "accountEntryForm" does not exist.', 18, $this->source); })()), 'form_start');
        echo "

\t        <div class=\"section-wrapper\">
";
        // line 21
        $this->loadTemplate("flash.html.twig", "account/receive.html.twig", 21)->display($context);
        // line 22
        echo "\t\t        <div class=\"form-layout\">
\t\t            <div class=\"row mg-b-25\">
\t\t              <div class=\"col-lg-3\">
\t\t                <div class=\"form-group\">
\t\t                  <label class=\"form-control-label\">Montant: <span class=\"tx-danger\">*</span></label>
\t\t                  \t";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["accountEntryForm"]) || array_key_exists("accountEntryForm", $context) ? $context["accountEntryForm"] : (function () { throw new Twig_Error_Runtime('Variable "accountEntryForm" does not exist.', 27, $this->source); })()), "ceAmount", array()), 'widget');
        echo "
                 \t\t\t";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["accountEntryForm"]) || array_key_exists("accountEntryForm", $context) ? $context["accountEntryForm"] : (function () { throw new Twig_Error_Runtime('Variable "accountEntryForm" does not exist.', 28, $this->source); })()), "ceAmount", array()), 'errors');
        echo "
\t\t                </div>

\t\t              </div><!-- col-4 -->

\t\t              <div class=\"col-lg-3\">
\t\t                <div class=\"form-group\">
\t\t                  \t<label class=\"form-control-label\">Numero Tel: <span class=\"tx-danger\">*</span></label>
\t\t                  \t";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["accountEntryForm"]) || array_key_exists("accountEntryForm", $context) ? $context["accountEntryForm"] : (function () { throw new Twig_Error_Runtime('Variable "accountEntryForm" does not exist.', 36, $this->source); })()), "fkCeCustomer", array()), "mobNum", array()), 'widget');
        echo "
                 \t\t\t";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["accountEntryForm"]) || array_key_exists("accountEntryForm", $context) ? $context["accountEntryForm"] : (function () { throw new Twig_Error_Runtime('Variable "accountEntryForm" does not exist.', 37, $this->source); })()), "fkCeCustomer", array()), "mobNum", array()), 'errors');
        echo "
\t\t                  
\t\t                </div>
\t\t              </div><!-- col-4 -->
\t\t              <div class=\"col-lg-3\">
\t\t                <div class=\"form-group\">
\t\t                  <label class=\"form-control-label\">Prenom: <span class=\"tx-danger\">*</span></label>
\t\t                  ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["accountEntryForm"]) || array_key_exists("accountEntryForm", $context) ? $context["accountEntryForm"] : (function () { throw new Twig_Error_Runtime('Variable "accountEntryForm" does not exist.', 44, $this->source); })()), "fkCeCustomer", array()), "firstName", array()), 'widget');
        echo "
                 \t\t\t";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["accountEntryForm"]) || array_key_exists("accountEntryForm", $context) ? $context["accountEntryForm"] : (function () { throw new Twig_Error_Runtime('Variable "accountEntryForm" does not exist.', 45, $this->source); })()), "fkCeCustomer", array()), "firstName", array()), 'errors');
        echo "
\t\t                </div>
\t\t              </div><!-- col-4 -->
\t\t              <div class=\"col-lg-3\">
\t\t                <div class=\"form-group\">
\t\t                  <label class=\"form-control-label\">Nom :</label>
\t\t                  ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["accountEntryForm"]) || array_key_exists("accountEntryForm", $context) ? $context["accountEntryForm"] : (function () { throw new Twig_Error_Runtime('Variable "accountEntryForm" does not exist.', 51, $this->source); })()), "fkCeCustomer", array()), "lastName", array()), 'widget');
        echo "
                 \t\t\t";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["accountEntryForm"]) || array_key_exists("accountEntryForm", $context) ? $context["accountEntryForm"] : (function () { throw new Twig_Error_Runtime('Variable "accountEntryForm" does not exist.', 52, $this->source); })()), "fkCeCustomer", array()), "lastName", array()), 'errors');
        echo "
\t\t                  
\t\t                </div>
\t\t              </div><!-- col-4 -->

\t\t            </div><!-- row -->

\t\t            <div class=\"form-layout-footer\">
\t\t              <button type=\"submit\" class=\"btn btn-success bd-0\">Recevoir</button>
\t\t              <button type=\"reset\" class=\"btn btn-warning bd-0\">Reset</button>
\t\t              <a href=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ceaccount_show", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["account"]) || array_key_exists("account", $context) ? $context["account"] : (function () { throw new Twig_Error_Runtime('Variable "account" does not exist.', 62, $this->source); })()), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-secondary bd-0\">Annuller</a>
\t\t            </div><!-- form-layout-footer -->
\t\t        </div><!-- form-layout -->
\t        </div><!-- section-wrapper -->

";
        // line 67
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["accountEntryForm"]) || array_key_exists("accountEntryForm", $context) ? $context["accountEntryForm"] : (function () { throw new Twig_Error_Runtime('Variable "accountEntryForm" does not exist.', 67, $this->source); })()), 'form_end');
        echo "
      </div><!-- container -->
    </div><!-- slim-mainpanel -->

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "account/receive.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 67,  166 => 62,  153 => 52,  149 => 51,  140 => 45,  136 => 44,  126 => 37,  122 => 36,  111 => 28,  107 => 27,  100 => 22,  98 => 21,  92 => 18,  86 => 15,  80 => 12,  72 => 6,  63 => 5,  45 => 3,  15 => 1,);
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
            <li class=\"breadcrumb-item active\" aria-current=\"page\">Reception</li>
          </ol>
          <h6 class=\"slim-pagetitle\">Reception Compte - {{account.ceAccountCode}}</h6>
        </div><!-- slim-pageheader -->

{{ form_start(accountEntryForm)}}

\t        <div class=\"section-wrapper\">
{% include 'flash.html.twig' %}
\t\t        <div class=\"form-layout\">
\t\t            <div class=\"row mg-b-25\">
\t\t              <div class=\"col-lg-3\">
\t\t                <div class=\"form-group\">
\t\t                  <label class=\"form-control-label\">Montant: <span class=\"tx-danger\">*</span></label>
\t\t                  \t{{ form_widget(accountEntryForm.ceAmount) }}
                 \t\t\t{{ form_errors(accountEntryForm.ceAmount)}}
\t\t                </div>

\t\t              </div><!-- col-4 -->

\t\t              <div class=\"col-lg-3\">
\t\t                <div class=\"form-group\">
\t\t                  \t<label class=\"form-control-label\">Numero Tel: <span class=\"tx-danger\">*</span></label>
\t\t                  \t{{ form_widget(accountEntryForm.fkCeCustomer.mobNum) }}
                 \t\t\t{{ form_errors(accountEntryForm.fkCeCustomer.mobNum) }}
\t\t                  
\t\t                </div>
\t\t              </div><!-- col-4 -->
\t\t              <div class=\"col-lg-3\">
\t\t                <div class=\"form-group\">
\t\t                  <label class=\"form-control-label\">Prenom: <span class=\"tx-danger\">*</span></label>
\t\t                  {{ form_widget(accountEntryForm.fkCeCustomer.firstName) }}
                 \t\t\t{{ form_errors(accountEntryForm.fkCeCustomer.firstName) }}
\t\t                </div>
\t\t              </div><!-- col-4 -->
\t\t              <div class=\"col-lg-3\">
\t\t                <div class=\"form-group\">
\t\t                  <label class=\"form-control-label\">Nom :</label>
\t\t                  {{ form_widget(accountEntryForm.fkCeCustomer.lastName) }}
                 \t\t\t{{ form_errors(accountEntryForm.fkCeCustomer.lastName) }}
\t\t                  
\t\t                </div>
\t\t              </div><!-- col-4 -->

\t\t            </div><!-- row -->

\t\t            <div class=\"form-layout-footer\">
\t\t              <button type=\"submit\" class=\"btn btn-success bd-0\">Recevoir</button>
\t\t              <button type=\"reset\" class=\"btn btn-warning bd-0\">Reset</button>
\t\t              <a href=\"{{path('ceaccount_show',{'id':account.id})}}\" class=\"btn btn-secondary bd-0\">Annuller</a>
\t\t            </div><!-- form-layout-footer -->
\t\t        </div><!-- form-layout -->
\t        </div><!-- section-wrapper -->

{{ form_end(accountEntryForm)}}
      </div><!-- container -->
    </div><!-- slim-mainpanel -->

{% endblock %}", "account/receive.html.twig", "C:\\wamp64\\www\\cashExpress\\templates\\account\\receive.html.twig");
    }
}
