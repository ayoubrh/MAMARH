<?php

/* MAMRHBundle:Projet:AjoutSuivi.html.twig */
class __TwigTemplate_695df99c5f7ef742f1ba15772f77f28178f86b8504eddf0b684486d166b99ae4 extends Twig_Template
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
        echo "Ajouter un suivi de projet";
    }

    // line 4
    public function block_corps($context, array $blocks = array())
    {
        // line 5
        echo "<!-- /.row -->
      <div class=\"col-lg-8\">
            <div class=\"panel panel-primary\">
                <div class=\"panel-heading\">
                    Formulaire d'ajout d'un suivi de projet
                </div>
                <div class=\"panel-body\">
                    <div class=\"row\">
                        <div class=\"col-lg-8\">
                            <form  method=\"post\" ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
                                ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "


                                <div class=\"form-group\">
                                    <label>";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tache", array()), 'label', array("label" => "Libellé de la tache "));
        echo "</label>
                                    <div class=\"form-control\">
                                        ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tache", array()), 'widget');
        echo "
                                    </div>
                                </div>

                                <div class=\"form-group\">
                                    <label>";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date_tache", array()), 'label', array("label" => "Date de la nouvelle tache"));
        echo "</label>
                                    ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date_tache", array()), 'widget');
        echo "
                                </div>

                                <div class=\"form-group\">
                                    <label>";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "duree_tache", array()), 'label', array("label" => "Durée de la tache"));
        echo "</label>
                                    <div class=\"form-control\">
                                        ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "duree_tache", array()), 'widget');
        echo "
                                    </div>
                                </div>

                                <button type=\"submit\" class=\"btn btn-outline btn-primary\">Envoyer</button>
                                <button type=\"reset\" class=\"btn btn-outline btn-primary\">Renitialiser</button>
                            </form>
                        </div>

                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->


";
    }

    public function getTemplateName()
    {
        return "MAMRHBundle:Projet:AjoutSuivi.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 33,  92 => 31,  85 => 27,  81 => 26,  73 => 21,  68 => 19,  61 => 15,  57 => 14,  46 => 5,  43 => 4,  37 => 2,  11 => 1,);
    }
}
