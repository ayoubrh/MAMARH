<?php

/* MAMRHBundle:RH:AjoutEmploye.html.twig */
class __TwigTemplate_3fcafeb0090a1860628e980ee5056efe62cb06b88d61c69e0207e3c8f91621da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'sstitle' => array($this, 'block_sstitle'),
            'corps' => array($this, 'block_corps'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_sstitle($context, array $blocks = array())
    {
        echo "Ajouter un Employe";
    }

    // line 4
    public function block_corps($context, array $blocks = array())
    {
        // line 5
        echo "<div class=\"col-lg-8\">
   <form method=\"post\" ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
           <div class=\"row\">
              <div class=\"col-lg-6\">
                  <div class=\"panel panel-primary\">
                      <div class=\"panel-heading\">
                          <i class=\"fa fa-unlock\"></i>
                          &nbsp;&nbsp;Informations générales
                      </div>
                      <div class=\"panel-body\">
                          ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
                          <div class=\"form-group\">

                                    <label>";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Nom", array()), 'label', array("label" => "Nom "));
        echo "</label>
                                    <div class=\"form-control\">
                                        ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Nom", array()), 'widget');
        echo "
                                    </div>
                          </div>
                          <div class=\"form-group\">

                                    <label>";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Prenom", array()), 'label', array("label" => "Prenom "));
        echo "</label>
                                    <div class=\"form-control\">
                                        ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Prenom", array()), 'widget');
        echo "
                                    </div>
                                </div>
                          <div class=\"form-group\">

                                    <label>";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "CIN", array()), 'label', array("label" => "CIN "));
        echo "</label>
                                    <div class=\"form-control\">
                                        ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "CIN", array()), 'widget');
        echo "
                                    </div>

                                </div>
                          <div class=\"form-group\">
                                    <label>";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Adresse", array()), 'label', array("label" => "Adresse "));
        echo "</label>

                                        ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Adresse", array()), 'widget');
        echo "
                                </div>
                          <div class=\"form-group\">
                                    <label>";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label', array("label" => "email "));
        echo "</label>
                                    <div class=\"form-control\">
                                        ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget');
        echo "
                                    </div>
                                </div>
                          <div class=\"form-group\">
                              <label>";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Tel", array()), 'label', array("label" => "Tel "));
        echo "</label>
                              <div class=\"form-control\">
                                  ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Tel", array()), 'widget');
        echo "
                              </div>
                          </div>
                          <div class=\"form-group\">
                              <label>";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "departement", array()), 'label', array("label" => "Departement"));
        echo "</label>
                              <div class=\"form-control\">
                                  ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "departement", array()), 'widget');
        echo "
                              </div>
                          </div>
                          <div class=\"form-group\">
                              <label>";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Diplome", array()), 'label', array("label" => "Dérnier diplome"));
        echo "</label>
                              <div class=\"form-control\">
                                  ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Diplome", array()), 'widget');
        echo "
                              </div>
                          </div>
                          <div class=\"form-group\">
                              ";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image", array()), 'widget');
        echo "
                          </div>
                      </div>
                  </div>
                  </div>
              <div class=\"col-lg-6\">
                  <div class=\"panel panel-primary\">
                      <div class=\"panel-heading\">
                          <i class=\"fa fa-lock\"></i>
                          &nbsp;&nbsp;Informations personnelles
                      </div>
                      <div class=\"panel-body\">
                          <div class=\"form-group\">
                              <label>";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Num_comptbanq", array()), 'label', array("label" => "Numéro de compte "));
        echo "</label>
                          <div class=\"form-control\">
                              ";
        // line 83
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Num_comptbanq", array()), 'widget');
        echo "
                          </div>
                          </div>
                          <div class=\"form-group\">
                              <label>";
        // line 87
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Cnss", array()), 'label', array("label" => "CNSS "));
        echo "</label>
                          <div class=\"form-control\">
                              ";
        // line 89
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Cnss", array()), 'widget');
        echo "
                          </div>
                          </div>
                          <div class=\"form-group\">
                              <label>";
        // line 93
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Cimr", array()), 'label', array("label" => "CIMR "));
        echo "</label>
                          <div class=\"form-control\">
                              ";
        // line 95
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Cimr", array()), 'widget');
        echo "
                          </div>
                          </div>
                          <div class=\"form-group\">
                              <label>";
        // line 99
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Type_contrat", array()), 'label', array("label" => "Type de contrat "));
        echo "</label>
                              <div class=\"form-control\">
                                  ";
        // line 101
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Type_contrat", array()), 'widget');
        echo "
                              </div>
                          </div>
                          <div class=\"form-group\">
                              <label>";
        // line 105
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Formation", array()), 'label', array("label" => "Formation"));
        echo "</label>
                              <div class=\"form-control\">
                                  ";
        // line 107
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Formation", array()), 'widget');
        echo "
                              </div>
                          </div>
                          <div class=\"form-group\">
                              <label>";
        // line 111
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Fonction", array()), 'label', array("label" => "Fonction"));
        echo "</label>
                              <div class=\"form-control\">
                                  ";
        // line 113
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Fonction", array()), 'widget');
        echo "
                              </div>
                          </div>
                          <div class=\"form-group\">
                              <label>";
        // line 117
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Specialite", array()), 'label', array("label" => "Spécialite"));
        echo "</label>
                              <div class=\"form-control\">
                                  ";
        // line 119
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Specialite", array()), 'widget');
        echo "
                              </div>
                          </div>

                          <div class=\"form-group\">
                              <label>";
        // line 124
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Salaire", array()), 'label', array("label" => "Salaire"));
        echo "</label>
                              <div class=\"form-control\">
                                  ";
        // line 126
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Salaire", array()), 'widget');
        echo "
                              </div>
                          </div>
                          <div class=\"form-group\">
                              ";
        // line 130
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cv", array()), 'widget');
        echo "
                          </div>
                      </div>
                  </div>
              </div>
           </div>
           <div class=\"row\">
               <div class=\"col-lg-12\">
               <button type=\"submit\" class=\"btn btn-outline  btn-primary\">Envoyer</button>
               <button type=\"reset\" class=\"btn btn-outline  btn-primary\">Renitialiser</button>
               </div>
           </div>
       ";
        // line 142
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
       </form>
</div>

";
    }

    public function getTemplateName()
    {
        return "MAMRHBundle:RH:AjoutEmploye.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  293 => 142,  278 => 130,  271 => 126,  266 => 124,  258 => 119,  253 => 117,  246 => 113,  241 => 111,  234 => 107,  229 => 105,  222 => 101,  217 => 99,  210 => 95,  205 => 93,  198 => 89,  193 => 87,  186 => 83,  181 => 81,  165 => 68,  158 => 64,  153 => 62,  146 => 58,  141 => 56,  134 => 52,  129 => 50,  122 => 46,  117 => 44,  111 => 41,  106 => 39,  98 => 34,  93 => 32,  85 => 27,  80 => 25,  72 => 20,  67 => 18,  61 => 15,  49 => 6,  46 => 5,  43 => 4,  37 => 2,  11 => 1,);
    }
}
