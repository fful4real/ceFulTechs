<?php

/* ceorder/orderform.html.twig */
class __TwigTemplate_6d8e14f0a0d86a19e0193f5c0bb7f999ffae9fe1ffadc1ac9b105e716fb07d2c extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ceorder/orderform.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ceorder/orderform.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ceorder/orderform.html.twig"));

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
            <li class=\"breadcrumb-item active\" aria-current=\"page\">New</li>
          </ol>
          <h6 class=\"slim-pagetitle\">";
        // line 14
        if ((isset($context["editMode"]) || array_key_exists("editMode", $context) ? $context["editMode"] : (function () { throw new Twig_Error_Runtime('Variable "editMode" does not exist.', 14, $this->source); })())) {
            echo "Modifier";
        } else {
            echo "Nouveau";
        }
        echo " Mandat</h6>
        </div><!-- slim-pageheader -->

          <div class=\"card\">
          ";
        // line 18
        $this->loadTemplate("flash.html.twig", "ceorder/orderform.html.twig", 18)->display($context);
        // line 19
        echo "          ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["orderForm"]) || array_key_exists("orderForm", $context) ? $context["orderForm"] : (function () { throw new Twig_Error_Runtime('Variable "orderForm" does not exist.', 19, $this->source); })()), 'form_start');
        echo "

            \t<div class=\"card-body pd-30\">
                  <div class=\"form-group\">
                  \t\t<label class=\"form-control-label\" for=\"ceorder[ceMobnum]\" name=\"ceorder[ceMobnum]_label\" id=\"\">Numero de tel</label>
    \t              <div class=\"input-group\">
    \t                <div class=\"input-group-prepend\">
    \t                  <span class=\"input-group-text fa fa-phone tx-16 lh-0 op-6\"></span>
    \t                </div>
    \t                ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["orderForm"]) || array_key_exists("orderForm", $context) ? $context["orderForm"] : (function () { throw new Twig_Error_Runtime('Variable "orderForm" does not exist.', 28, $this->source); })()), "ceMobnum", array()), 'widget');
        echo "
    \t                <div class=\"input-group-append\">
    \t                  <span class=\"input-group-text\">";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["netCodeDisplay"]) || array_key_exists("netCodeDisplay", $context) ? $context["netCodeDisplay"] : (function () { throw new Twig_Error_Runtime('Variable "netCodeDisplay" does not exist.', 30, $this->source); })()), "html", null, true);
        echo "</span>
    \t                </div>
    \t              </div>
    \t              ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["orderForm"]) || array_key_exists("orderForm", $context) ? $context["orderForm"] : (function () { throw new Twig_Error_Runtime('Variable "orderForm" does not exist.', 33, $this->source); })()), "ceMobnum", array()), 'errors');
        echo "
                  </div><!-- form-group -->
    
                  <div class=\"form-group\">
                  \t\t<label class=\"form-control-label\" for=\"ceorder[ceAmount]\" name=\"ceorder[ceAmount]_label\" id=\"\">Montant</label>
    \t              <div class=\"input-group\">
    \t                <div class=\"input-group-prepend\">
    \t                  <span class=\"input-group-text\">XAF</span>
    \t                </div>
    \t                ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["orderForm"]) || array_key_exists("orderForm", $context) ? $context["orderForm"] : (function () { throw new Twig_Error_Runtime('Variable "orderForm" does not exist.', 42, $this->source); })()), "ceAmount", array()), 'widget');
        echo "
    \t                <div class=\"input-group-append\">
\t\t    \t            <div id=\"slWrapper2\" class=\"parsley-select\">
\t\t\t\t                ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["orderForm"]) || array_key_exists("orderForm", $context) ? $context["orderForm"] : (function () { throw new Twig_Error_Runtime('Variable "orderForm" does not exist.', 45, $this->source); })()), "orderType", array()), 'widget');
        echo "
\t\t\t\t            </div>
    \t                </div>
    \t                ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["orderForm"]) || array_key_exists("orderForm", $context) ? $context["orderForm"] : (function () { throw new Twig_Error_Runtime('Variable "orderForm" does not exist.', 48, $this->source); })()), "ceAmount", array()), 'errors');
        echo "
    \t              </div>
                  </div><!-- form-group -->
    
                  <div class=\"form-group\">
                    <label class=\"form-control-label\" for=\"ceCustomer[firstName]\" name=\"ceCustomer[firstName]_label\" id=\"\">Prenom</label>
                <input type=\"text\" value=\"";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ceCustomer"]) || array_key_exists("ceCustomer", $context) ? $context["ceCustomer"] : (function () { throw new Twig_Error_Runtime('Variable "ceCustomer" does not exist.', 54, $this->source); })()), "firstName", array()), "html", null, true);
        echo "\" name=\"ceCustomer[firstName]\" class=\"form-control\" placeholder=\"Enter First Name\" required=\"required\">
                  </div><!-- form-group -->
                  <div class=\"form-group\">
                    <label class=\"form-control-label\" for=\"ceCustomer[lastName]\" name=\"ceCustomer[lastName]_label\" id=\"\">Nom</label>
                    <input type=\"text\" value=\"";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ceCustomer"]) || array_key_exists("ceCustomer", $context) ? $context["ceCustomer"] : (function () { throw new Twig_Error_Runtime('Variable "ceCustomer" does not exist.', 58, $this->source); })()), "lastName", array()), "html", null, true);
        echo "\" name=\"ceCustomer[lastName]\" class=\"form-control\" placeholder=\"Enter Last Name\">
                  </div><!-- form-group -->
   
                  <div class=\"form-group\">
                    <label class=\"form-control-label\" for=\"order[fkCeTown]\" name=\"order[fkCeTown]_label\" id=\"\">Ville</label>
                    <div id=\"slWrapper\" class=\"parsley-select wd-250\">
\t\t                ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["orderForm"]) || array_key_exists("orderForm", $context) ? $context["orderForm"] : (function () { throw new Twig_Error_Runtime('Variable "orderForm" does not exist.', 64, $this->source); })()), "fkCeTown", array()), 'widget');
        echo "
\t\t                <div id=\"slErrorContainer\"></div>
\t\t            </div>
                  </div><!-- form-group -->
    
                  <div class=\"mg-t-30\">
                  \t<input type=\"submit\" name=\"\" value=\"";
        // line 70
        if ((isset($context["editMode"]) || array_key_exists("editMode", $context) ? $context["editMode"] : (function () { throw new Twig_Error_Runtime('Variable "editMode" does not exist.', 70, $this->source); })())) {
            echo "Modifier";
        } else {
            echo "Creer";
        }
        echo "\" class=\"btn btn-success\">
                  \t<input type=\"reset\" name=\"\" value=\"Reinitialiser\" class=\"btn btn-warning\">
                  \t<a href=\"";
        // line 72
        if ((isset($context["editMode"]) || array_key_exists("editMode", $context) ? $context["editMode"] : (function () { throw new Twig_Error_Runtime('Variable "editMode" does not exist.', 72, $this->source); })())) {
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ceorder_show", array("id" => (isset($context["orderId"]) || array_key_exists("orderId", $context) ? $context["orderId"] : (function () { throw new Twig_Error_Runtime('Variable "orderId" does not exist.', 72, $this->source); })()))), "html", null, true);
        } else {
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ceorder_list");
        }
        echo "\" class=\"btn btn-secondary mg-l-auto\">Annuler</a>
                  </div>
            \t</div><!-- card-body -->

        ";
        // line 76
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["orderForm"]) || array_key_exists("orderForm", $context) ? $context["orderForm"] : (function () { throw new Twig_Error_Runtime('Variable "orderForm" does not exist.', 76, $this->source); })()), 'form_end');
        echo "
          </div><!-- card -->

      </div><!-- container -->
    </div><!-- slim-mainpanel -->

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "ceorder/orderform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 76,  186 => 72,  177 => 70,  168 => 64,  159 => 58,  152 => 54,  143 => 48,  137 => 45,  131 => 42,  119 => 33,  113 => 30,  108 => 28,  95 => 19,  93 => 18,  82 => 14,  72 => 6,  63 => 5,  45 => 3,  15 => 1,);
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
            <li class=\"breadcrumb-item active\" aria-current=\"page\">New</li>
          </ol>
          <h6 class=\"slim-pagetitle\">{% if editMode %}Modifier{% else %}Nouveau{% endif %} Mandat</h6>
        </div><!-- slim-pageheader -->

          <div class=\"card\">
          {% include 'flash.html.twig' %}
          {{ form_start(orderForm)}}

            \t<div class=\"card-body pd-30\">
                  <div class=\"form-group\">
                  \t\t<label class=\"form-control-label\" for=\"ceorder[ceMobnum]\" name=\"ceorder[ceMobnum]_label\" id=\"\">Numero de tel</label>
    \t              <div class=\"input-group\">
    \t                <div class=\"input-group-prepend\">
    \t                  <span class=\"input-group-text fa fa-phone tx-16 lh-0 op-6\"></span>
    \t                </div>
    \t                {{ form_widget(orderForm.ceMobnum) }}
    \t                <div class=\"input-group-append\">
    \t                  <span class=\"input-group-text\">{{netCodeDisplay}}</span>
    \t                </div>
    \t              </div>
    \t              {{ form_errors(orderForm.ceMobnum)}}
                  </div><!-- form-group -->
    
                  <div class=\"form-group\">
                  \t\t<label class=\"form-control-label\" for=\"ceorder[ceAmount]\" name=\"ceorder[ceAmount]_label\" id=\"\">Montant</label>
    \t              <div class=\"input-group\">
    \t                <div class=\"input-group-prepend\">
    \t                  <span class=\"input-group-text\">XAF</span>
    \t                </div>
    \t                {{ form_widget(orderForm.ceAmount) }}
    \t                <div class=\"input-group-append\">
\t\t    \t            <div id=\"slWrapper2\" class=\"parsley-select\">
\t\t\t\t                {{ form_widget(orderForm.orderType) }}
\t\t\t\t            </div>
    \t                </div>
    \t                {{ form_errors(orderForm.ceAmount)}}
    \t              </div>
                  </div><!-- form-group -->
    
                  <div class=\"form-group\">
                    <label class=\"form-control-label\" for=\"ceCustomer[firstName]\" name=\"ceCustomer[firstName]_label\" id=\"\">Prenom</label>
                <input type=\"text\" value=\"{{ceCustomer.firstName}}\" name=\"ceCustomer[firstName]\" class=\"form-control\" placeholder=\"Enter First Name\" required=\"required\">
                  </div><!-- form-group -->
                  <div class=\"form-group\">
                    <label class=\"form-control-label\" for=\"ceCustomer[lastName]\" name=\"ceCustomer[lastName]_label\" id=\"\">Nom</label>
                    <input type=\"text\" value=\"{{ceCustomer.lastName}}\" name=\"ceCustomer[lastName]\" class=\"form-control\" placeholder=\"Enter Last Name\">
                  </div><!-- form-group -->
   
                  <div class=\"form-group\">
                    <label class=\"form-control-label\" for=\"order[fkCeTown]\" name=\"order[fkCeTown]_label\" id=\"\">Ville</label>
                    <div id=\"slWrapper\" class=\"parsley-select wd-250\">
\t\t                {{ form_widget(orderForm.fkCeTown) }}
\t\t                <div id=\"slErrorContainer\"></div>
\t\t            </div>
                  </div><!-- form-group -->
    
                  <div class=\"mg-t-30\">
                  \t<input type=\"submit\" name=\"\" value=\"{% if editMode %}Modifier{% else %}Creer{% endif %}\" class=\"btn btn-success\">
                  \t<input type=\"reset\" name=\"\" value=\"Reinitialiser\" class=\"btn btn-warning\">
                  \t<a href=\"{% if editMode %}{{path('ceorder_show',{'id':orderId})}}{% else %}{{path('ceorder_list')}}{% endif %}\" class=\"btn btn-secondary mg-l-auto\">Annuler</a>
                  </div>
            \t</div><!-- card-body -->

        {{ form_end(orderForm) }}
          </div><!-- card -->

      </div><!-- container -->
    </div><!-- slim-mainpanel -->

{% endblock %}", "ceorder/orderform.html.twig", "C:\\wamp64\\www\\cashExpress\\templates\\ceorder\\orderform.html.twig");
    }
}
