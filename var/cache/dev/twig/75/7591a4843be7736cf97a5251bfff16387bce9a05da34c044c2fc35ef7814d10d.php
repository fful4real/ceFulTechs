<?php

/* ceorder/show.html.twig */
class __TwigTemplate_87361d4c21d30286a5213da9a20beaa92cd5477a17ae4855cfc555d285677816 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ceorder/show.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ceorder/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ceorder/show.html.twig"));

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

        echo "Order - FulTechs";
        
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
            <li class=\"breadcrumb-item active\" aria-current=\"page\">Mandat</li>
          </ol>
          <h6 class=\"slim-pagetitle\">Mandat</h6>
        </div><!-- slim-pageheader -->

        <div class=\"card card-body pd-25\">
        ";
        // line 17
        $this->loadTemplate("flash.html.twig", "ceorder/show.html.twig", 17)->display($context);
        // line 18
        echo "        
            <h6 class=\"slim-card-title mg-b-20\">Reference: ";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 19, $this->source); })()), "ceOrderref", array()), "html", null, true);
        echo "  <span class=\"mg-l-10 float-right\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 19, $this->source); })()), "orderStyle", array()), "text", array()), "html", null, true);
        echo "</span><span class=\"square-10 bg-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 19, $this->source); })()), "orderStyle", array()), "color", array()), "html", null, true);
        echo " rounded-circle tx-right float-right\"></span></h6>
            <div class=\"d-flex align-items-center mg-t-5\">
              <span class=\"square-10 bg-info rounded-circle\"></span>
              <span class=\"mg-l-10\">Type:</span>
              <span class=\"mg-l-auto tx-lato tx-right\">";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 23, $this->source); })()), "orderType", array()), "html", null, true);
        echo "</span>
            </div>
            <div class=\"d-flex align-items-center mg-t-5\">
              <span class=\"square-10 bg-info rounded-circle\"></span>
              <span class=\"mg-l-10\">Numero:</span>
              <span class=\"mg-l-auto tx-lato tx-right\"><strong>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 28, $this->source); })()), "ceMobnum", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 28, $this->source); })()), "network", array()), "html", null, true);
        echo "</strong></span>
            </div>
            <div class=\"d-flex align-items-center\">
              <span class=\"square-10 bg-gray-600 rounded-circle\"></span>
              <span class=\"mg-l-10\">Montant:</span>
              <span class=\"mg-l-auto tx-lato tx-right\">";
        // line 33
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 33, $this->source); })()), "ceAmount", array()), 0, ".", ","), "html", null, true);
        echo " CFA</span>
            </div>
            <div class=\"d-flex align-items-center mg-t-5\">
              <span class=\"square-10 bg-gray-600 rounded-circle\"></span>
              <span class=\"mg-l-10\">Frais:</span>
              <span class=\"mg-l-auto tx-lato tx-right\">";
        // line 38
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 38, $this->source); })()), "ceOrderCharge", array()), 0, ".", ","), "html", null, true);
        echo " FCFA</span>
            </div>
            <div class=\"d-flex align-items-center mg-t-5\">
              <span class=\"square-10 bg-pink rounded-circle\"></span>
              <span class=\"mg-l-10\">Total:</span>
              <span class=\"mg-l-auto tx-lato tx-right\"><strong>";
        // line 43
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 43, $this->source); })()), "ceOrderTotal", array()), 0, ".", ","), "html", null, true);
        echo " FCFA</strong></span>
            </div>
            <div class=\"d-flex align-items-center mg-t-5\">
              <span class=\"square-10 bg-gray-600 rounded-circle\"></span>
              <span class=\"mg-l-10\">Date Creation:</span>
              <span class=\"mg-l-auto tx-lato tx-right\">";
        // line 48
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 48, $this->source); })()), "ceDatec", array()), "d/m/Y"), "html", null, true);
        echo "</span>
            </div>
            <div class=\"d-flex align-items-center mg-t-5\">
              <span class=\"square-10 bg-gray-600 rounded-circle\"></span>
              <span class=\"mg-l-10\">Cree Par:</span>
              <span class=\"mg-l-auto tx-lato tx-right\">";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 53, $this->source); })()), "ceCreatedBy", array()), "ceFirstName", array()), "html", null, true);
        echo "<span class=\"icon icon-user\"></span></span>
            </div>
            ";
        // line 55
        if (twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 55, $this->source); })()), "ceDoneBy", array())) {
            // line 56
            echo "            <div class=\"d-flex align-items-center mg-t-5\">
              <span class=\"square-10 bg-gray-600 rounded-circle\"></span>
              <span class=\"mg-l-10\">Gerer Par:</span>
              <span class=\"mg-l-auto tx-lato tx-right\"><span class=\"icon icon-user\">";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 59, $this->source); })()), "ceDoneBy", array()), "ceFirstName", array()), "html", null, true);
            echo "</span></span>
            </div>
            ";
        }
        // line 62
        echo "            <p>

            ";
        // line 64
        if ((twig_get_attribute($this->env, $this->source, (isset($context["orderStatus"]) || array_key_exists("orderStatus", $context) ? $context["orderStatus"] : (function () { throw new Twig_Error_Runtime('Variable "orderStatus" does not exist.', 64, $this->source); })()), "New", array()) && (isset($context["changeStatus"]) || array_key_exists("changeStatus", $context) ? $context["changeStatus"] : (function () { throw new Twig_Error_Runtime('Variable "changeStatus" does not exist.', 64, $this->source); })()))) {
            // line 65
            echo "            <div class=\"btn-wrapper\">
                <a href=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ceorder_complete", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 66, $this->source); })()), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-success btn-block\" data-toggle=\"modal\" data-target=\"#modaldemo5\">Gerer</a>
            </div><!-- btn-wrapper --></p>
            ";
        }
        // line 69
        echo "            <div class=\"btn-wrapper\">
            ";
        // line 70
        if ((isset($context["changeStatus"]) || array_key_exists("changeStatus", $context) ? $context["changeStatus"] : (function () { throw new Twig_Error_Runtime('Variable "changeStatus" does not exist.', 70, $this->source); })())) {
            // line 71
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ceorder_edit", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 71, $this->source); })()), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-warning\">Modifier</a>
            ";
        }
        // line 73
        echo "                <a href=\"\" class=\"btn btn-danger mg-l-auto\" data-toggle=\"modal\" data-target=\"#modaldemo2\">Supprimer</a>
            ";
        // line 74
        if (twig_get_attribute($this->env, $this->source, (isset($context["orderStatus"]) || array_key_exists("orderStatus", $context) ? $context["orderStatus"] : (function () { throw new Twig_Error_Runtime('Variable "orderStatus" does not exist.', 74, $this->source); })()), "New", array())) {
            // line 75
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ceorder_abandon", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 75, $this->source); })()), "id", array()))), "html", null, true);
            echo "\" data-toggle=\"modal\" data-target=\"#modaldemo3\" class=\"btn btn-secondary mg-l-auto\">Abandon</a>
            ";
        }
        // line 77
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["orderStatus"]) || array_key_exists("orderStatus", $context) ? $context["orderStatus"] : (function () { throw new Twig_Error_Runtime('Variable "orderStatus" does not exist.', 77, $this->source); })()), "Abandoned", array())) {
            // line 78
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ceorder_reopen", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 78, $this->source); })()), "id", array()))), "html", null, true);
            echo "\" data-toggle=\"modal\" data-target=\"#modaldemo4\" class=\"btn btn-primary mg-l-auto\">Reopen</a>
            ";
        }
        // line 80
        echo "            </div><!-- btn-wrapper --></p>
            
        </div><!-- card -->

      </div><!-- container -->
    </div><!-- slim-mainpanel -->

    <!-- SMALL MODAL -->
    <div id=\"modaldemo2\" class=\"modal fade\">
      <div class=\"modal-dialog modal-sm\" role=\"document\">
        <div class=\"modal-content bd-0 tx-14\">
          <div class=\"modal-header pd-x-20\">
            <h6 class=\"tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold\">Notice</h6>
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
              <span aria-hidden=\"true\">&times;</span>
            </button>
          </div>
          <div class=\"modal-body pd-20\">
            <p class=\"mg-b-5\">Are you sure you want to delete this order ?</p>
          </div>
          <div class=\"modal-footer justify-content-center\">
            <a href=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ceorder_delete", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 101, $this->source); })()), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-danger mg-l-auto\">Supprimer</a>
            <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Cancel</button>
          </div>
        </div>
      </div><!-- modal-dialog -->
    </div><!-- modal -->

    <!-- SMALL MODAL -->
    <div id=\"modaldemo3\" class=\"modal fade\">
      <div class=\"modal-dialog modal-sm\" role=\"document\">
        <div class=\"modal-content bd-0 tx-14\">
          <div class=\"modal-header pd-x-20\">
            <h6 class=\"tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold\">Notice</h6>
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
              <span aria-hidden=\"true\">&times;</span>
            </button>
          </div>
          <div class=\"modal-body pd-20\">
            <p class=\"mg-b-5\">Are you sure you want to Abandon this order ?</p>
          </div>
          <div class=\"modal-footer justify-content-center\">
            <a href=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ceorder_abandon", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 122, $this->source); })()), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-danger mg-l-auto\">Abandon</a>
            <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Cancel</button>
          </div>
        </div>
      </div><!-- modal-dialog -->
    </div><!-- modal -->

    <!-- SMALL MODAL -->
    <div id=\"modaldemo4\" class=\"modal fade\">
      <div class=\"modal-dialog modal-sm\" role=\"document\">
        <div class=\"modal-content bd-0 tx-14\">
          <div class=\"modal-header pd-x-20\">
            <h6 class=\"tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold\">Notice</h6>
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
              <span aria-hidden=\"true\">&times;</span>
            </button>
          </div>
          <div class=\"modal-body pd-20\">
            <p class=\"mg-b-5\">Are you sure you want to reopen this order ?</p>
          </div>
          <div class=\"modal-footer justify-content-center\">
            <a href=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ceorder_reopen", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 143, $this->source); })()), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-success mg-l-auto\">Reopen</a>
            <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Cancel</button>
          </div>
        </div>
      </div><!-- modal-dialog -->
    </div><!-- modal -->

    <!-- SMALL MODAL -->
    <div id=\"modaldemo5\" class=\"modal fade\">
      <div class=\"modal-dialog modal-sm\" role=\"document\">
        <div class=\"modal-content bd-0 tx-14\">
          <div class=\"modal-header pd-x-20\">
            <h6 class=\"tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold\">Compte</h6>
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
              <span aria-hidden=\"true\">&times;</span>
            </button>
          </div>
          <div class=\"modal-body pd-20\">
    ";
        // line 161
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["accountForm"]) || array_key_exists("accountForm", $context) ? $context["accountForm"] : (function () { throw new Twig_Error_Runtime('Variable "accountForm" does not exist.', 161, $this->source); })()), 'form_start');
        echo "
      ";
        // line 162
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["accountForm"]) || array_key_exists("accountForm", $context) ? $context["accountForm"] : (function () { throw new Twig_Error_Runtime('Variable "accountForm" does not exist.', 162, $this->source); })()), "Account", array()), 'widget');
        echo "
          </div>
          <div class=\"modal-footer justify-content-center\">
            <button type=\"submit\" class=\"btn btn-success mg-l-auto\">Complete</button>
            <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Cancel</button>
          </div>
    ";
        // line 168
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["accountForm"]) || array_key_exists("accountForm", $context) ? $context["accountForm"] : (function () { throw new Twig_Error_Runtime('Variable "accountForm" does not exist.', 168, $this->source); })()), 'form_end');
        echo "
        </div>
      </div><!-- modal-dialog -->
    </div><!-- modal -->

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "ceorder/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  320 => 168,  311 => 162,  307 => 161,  286 => 143,  262 => 122,  238 => 101,  215 => 80,  209 => 78,  206 => 77,  200 => 75,  198 => 74,  195 => 73,  189 => 71,  187 => 70,  184 => 69,  178 => 66,  175 => 65,  173 => 64,  169 => 62,  163 => 59,  158 => 56,  156 => 55,  151 => 53,  143 => 48,  135 => 43,  127 => 38,  119 => 33,  109 => 28,  101 => 23,  90 => 19,  87 => 18,  85 => 17,  72 => 6,  63 => 5,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Order - FulTechs{% endblock %}

{% block body%}
    <div class=\"slim-mainpanel\">
      <div class=\"container\">
        <div class=\"slim-pageheader\">
          <ol class=\"breadcrumb slim-breadcrumb\">
            <li class=\"breadcrumb-item\"><a href=\"#\">Home</a></li>
            <li class=\"breadcrumb-item active\" aria-current=\"page\">Mandat</li>
          </ol>
          <h6 class=\"slim-pagetitle\">Mandat</h6>
        </div><!-- slim-pageheader -->

        <div class=\"card card-body pd-25\">
        {% include 'flash.html.twig' %}
        
            <h6 class=\"slim-card-title mg-b-20\">Reference: {{order.ceOrderref}}  <span class=\"mg-l-10 float-right\">{{data.orderStyle.text}}</span><span class=\"square-10 bg-{{data.orderStyle.color}} rounded-circle tx-right float-right\"></span></h6>
            <div class=\"d-flex align-items-center mg-t-5\">
              <span class=\"square-10 bg-info rounded-circle\"></span>
              <span class=\"mg-l-10\">Type:</span>
              <span class=\"mg-l-auto tx-lato tx-right\">{{data.orderType}}</span>
            </div>
            <div class=\"d-flex align-items-center mg-t-5\">
              <span class=\"square-10 bg-info rounded-circle\"></span>
              <span class=\"mg-l-10\">Numero:</span>
              <span class=\"mg-l-auto tx-lato tx-right\"><strong>{{order.ceMobnum}} {{data.network}}</strong></span>
            </div>
            <div class=\"d-flex align-items-center\">
              <span class=\"square-10 bg-gray-600 rounded-circle\"></span>
              <span class=\"mg-l-10\">Montant:</span>
              <span class=\"mg-l-auto tx-lato tx-right\">{{order.ceAmount | number_format(0, '.', ',')}} CFA</span>
            </div>
            <div class=\"d-flex align-items-center mg-t-5\">
              <span class=\"square-10 bg-gray-600 rounded-circle\"></span>
              <span class=\"mg-l-10\">Frais:</span>
              <span class=\"mg-l-auto tx-lato tx-right\">{{order.ceOrderCharge | number_format(0, '.', ',')}} FCFA</span>
            </div>
            <div class=\"d-flex align-items-center mg-t-5\">
              <span class=\"square-10 bg-pink rounded-circle\"></span>
              <span class=\"mg-l-10\">Total:</span>
              <span class=\"mg-l-auto tx-lato tx-right\"><strong>{{order.ceOrderTotal | number_format(0, '.', ',')}} FCFA</strong></span>
            </div>
            <div class=\"d-flex align-items-center mg-t-5\">
              <span class=\"square-10 bg-gray-600 rounded-circle\"></span>
              <span class=\"mg-l-10\">Date Creation:</span>
              <span class=\"mg-l-auto tx-lato tx-right\">{{order.ceDatec | date('d/m/Y')}}</span>
            </div>
            <div class=\"d-flex align-items-center mg-t-5\">
              <span class=\"square-10 bg-gray-600 rounded-circle\"></span>
              <span class=\"mg-l-10\">Cree Par:</span>
              <span class=\"mg-l-auto tx-lato tx-right\">{{ order.ceCreatedBy.ceFirstName }}<span class=\"icon icon-user\"></span></span>
            </div>
            {% if order.ceDoneBy %}
            <div class=\"d-flex align-items-center mg-t-5\">
              <span class=\"square-10 bg-gray-600 rounded-circle\"></span>
              <span class=\"mg-l-10\">Gerer Par:</span>
              <span class=\"mg-l-auto tx-lato tx-right\"><span class=\"icon icon-user\">{{order.ceDoneBy.ceFirstName}}</span></span>
            </div>
            {% endif %}
            <p>

            {% if (orderStatus.New and changeStatus) %}
            <div class=\"btn-wrapper\">
                <a href=\"{{path('ceorder_complete',{'id':order.id})}}\" class=\"btn btn-success btn-block\" data-toggle=\"modal\" data-target=\"#modaldemo5\">Gerer</a>
            </div><!-- btn-wrapper --></p>
            {% endif %}
            <div class=\"btn-wrapper\">
            {% if (changeStatus) %}
                <a href=\"{{path('ceorder_edit',{'id':order.id})}}\" class=\"btn btn-warning\">Modifier</a>
            {% endif %}
                <a href=\"\" class=\"btn btn-danger mg-l-auto\" data-toggle=\"modal\" data-target=\"#modaldemo2\">Supprimer</a>
            {% if (orderStatus.New) %}
                <a href=\"{{path('ceorder_abandon',{'id':order.id})}}\" data-toggle=\"modal\" data-target=\"#modaldemo3\" class=\"btn btn-secondary mg-l-auto\">Abandon</a>
            {% endif %}
            {% if (orderStatus.Abandoned) %}
            <a href=\"{{path('ceorder_reopen',{'id':order.id})}}\" data-toggle=\"modal\" data-target=\"#modaldemo4\" class=\"btn btn-primary mg-l-auto\">Reopen</a>
            {% endif %}
            </div><!-- btn-wrapper --></p>
            
        </div><!-- card -->

      </div><!-- container -->
    </div><!-- slim-mainpanel -->

    <!-- SMALL MODAL -->
    <div id=\"modaldemo2\" class=\"modal fade\">
      <div class=\"modal-dialog modal-sm\" role=\"document\">
        <div class=\"modal-content bd-0 tx-14\">
          <div class=\"modal-header pd-x-20\">
            <h6 class=\"tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold\">Notice</h6>
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
              <span aria-hidden=\"true\">&times;</span>
            </button>
          </div>
          <div class=\"modal-body pd-20\">
            <p class=\"mg-b-5\">Are you sure you want to delete this order ?</p>
          </div>
          <div class=\"modal-footer justify-content-center\">
            <a href=\"{{path('ceorder_delete',{'id':order.id})}}\" class=\"btn btn-danger mg-l-auto\">Supprimer</a>
            <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Cancel</button>
          </div>
        </div>
      </div><!-- modal-dialog -->
    </div><!-- modal -->

    <!-- SMALL MODAL -->
    <div id=\"modaldemo3\" class=\"modal fade\">
      <div class=\"modal-dialog modal-sm\" role=\"document\">
        <div class=\"modal-content bd-0 tx-14\">
          <div class=\"modal-header pd-x-20\">
            <h6 class=\"tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold\">Notice</h6>
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
              <span aria-hidden=\"true\">&times;</span>
            </button>
          </div>
          <div class=\"modal-body pd-20\">
            <p class=\"mg-b-5\">Are you sure you want to Abandon this order ?</p>
          </div>
          <div class=\"modal-footer justify-content-center\">
            <a href=\"{{path('ceorder_abandon',{'id':order.id})}}\" class=\"btn btn-danger mg-l-auto\">Abandon</a>
            <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Cancel</button>
          </div>
        </div>
      </div><!-- modal-dialog -->
    </div><!-- modal -->

    <!-- SMALL MODAL -->
    <div id=\"modaldemo4\" class=\"modal fade\">
      <div class=\"modal-dialog modal-sm\" role=\"document\">
        <div class=\"modal-content bd-0 tx-14\">
          <div class=\"modal-header pd-x-20\">
            <h6 class=\"tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold\">Notice</h6>
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
              <span aria-hidden=\"true\">&times;</span>
            </button>
          </div>
          <div class=\"modal-body pd-20\">
            <p class=\"mg-b-5\">Are you sure you want to reopen this order ?</p>
          </div>
          <div class=\"modal-footer justify-content-center\">
            <a href=\"{{path('ceorder_reopen',{'id':order.id})}}\" class=\"btn btn-success mg-l-auto\">Reopen</a>
            <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Cancel</button>
          </div>
        </div>
      </div><!-- modal-dialog -->
    </div><!-- modal -->

    <!-- SMALL MODAL -->
    <div id=\"modaldemo5\" class=\"modal fade\">
      <div class=\"modal-dialog modal-sm\" role=\"document\">
        <div class=\"modal-content bd-0 tx-14\">
          <div class=\"modal-header pd-x-20\">
            <h6 class=\"tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold\">Compte</h6>
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
              <span aria-hidden=\"true\">&times;</span>
            </button>
          </div>
          <div class=\"modal-body pd-20\">
    {{ form_start(accountForm) }}
      {{form_widget(accountForm.Account)}}
          </div>
          <div class=\"modal-footer justify-content-center\">
            <button type=\"submit\" class=\"btn btn-success mg-l-auto\">Complete</button>
            <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Cancel</button>
          </div>
    {{ form_end(accountForm)}}
        </div>
      </div><!-- modal-dialog -->
    </div><!-- modal -->

{% endblock %}
", "ceorder/show.html.twig", "C:\\wamp64\\www\\cashExpress\\templates\\ceorder\\show.html.twig");
    }
}
