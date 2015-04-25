<?php

/* MAMRHBundle:Employe:Demande.html.twig */
class __TwigTemplate_00c5e0d7367e76e0c594f07bf54fe6112a5459e69f00c015f940248de5aff42c extends Twig_Template
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
        echo "Demandes";
    }

    // line 4
    public function block_corps($context, array $blocks = array())
    {
        // line 5
        echo "

    <div class=\"row\">
    <div class=\"col-lg-8\">
    <div class=\"panel panel-primary\">
        <div class=\"panel-heading\">
            Suivis des Demandes
        </div>
        <!-- /.panel-heading -->
        <div class=\"panel-body\">
            <div class=\"row\">
                <div class=\"col-lg-20\">
                <form method=\"post\" ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">

                        ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
                        <div class=\"col-sm-6\">
                            <div class=\"row\">
                                <div class=\"col-sm-4\">
                                    <label>";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Libelle", array()), 'label', array("label" => "Attestation : "));
        echo "</label>
                                </div>
                                <div class=\"col-sm-8\">
                                    <div class=\"form-control\">
                                        ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Libelle", array()), 'widget');
        echo "
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-4\">
                            <div class=\"row\">
                                <div class=\"col-sm-4\">
                                    <label>";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "priorite", array()), 'label', array("label" => "Priorité :"));
        echo "</label>
                                </div>
                                <div class=\"col-sm-8\">
                                    <div class=\"form-control\">
                                        ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "priorite", array()), 'widget');
        echo "
                                    </div>
                                </div>
                            </div>
                        </div>

                <div class=\"col-sm-2\">
                    <div id=\"dataTables-example_filter\" class=\"dataTables_filter\">
                        <button type=\"submit\" class=\"btn btn-outline btn-primary\">Ajouter</button>
                    </div>
                </div>
                    ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
            </form>
                </div>
            </div>

            <div class=\"table-responsive\">
                <table class=\"table\">
                    <thead>
                    <tr>
                        <th>Demande</th>
                        <th>Date</th>
                        <th>Priorité</th>
                        <th>Validation</th>
                    </tr>
                    </thead>
                    <tbody>

                    ";
        // line 67
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["demandes"]) ? $context["demandes"] : $this->getContext($context, "demandes")));
        foreach ($context['_seq'] as $context["_key"] => $context["demande"]) {
            // line 68
            echo "                        ";
            if (($this->getAttribute($context["demande"], "valide", array()) == true)) {
                // line 69
                echo "                            <tr class=\"success\">
                                <td>";
                // line 70
                echo twig_escape_filter($this->env, $this->getAttribute($context["demande"], "Libelle", array()), "html", null, true);
                echo "</td>
                                <td>";
                // line 71
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["demande"], "DateDEM", array()), "d/m/Y H:i:s"), "html", null, true);
                echo "</td>
                                <td>";
                // line 72
                echo twig_escape_filter($this->env, $this->getAttribute($context["demande"], "priorite", array()), "html", null, true);
                echo "</td>
                                <td>Valider</td>
                            </tr>
                        ";
            } else {
                // line 76
                echo "                            <tr class=\"warning\">
                                <td>";
                // line 77
                echo twig_escape_filter($this->env, $this->getAttribute($context["demande"], "Libelle", array()), "html", null, true);
                echo "</td>
                                <td>";
                // line 78
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["demande"], "DateDEM", array()), "d/m/Y H:i:s"), "html", null, true);
                echo "</td>
                                <td>";
                // line 79
                echo twig_escape_filter($this->env, $this->getAttribute($context["demande"], "priorite", array()), "html", null, true);
                echo "</td>
                                <td>En cours</td>
                            </tr>
                         ";
            }
            // line 83
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['demande'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "
                    </tbody>
                </table>
            </div>

            <!-- /.table-responsive -->
        </div>
        <!-- /.panel-body -->
    </div>
    </div>
    <!-- /.panel -->


    <script src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/js/sb-admin-2.js"), "html", null, true);
        echo "\"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
        \$(document).ready(function() {
            \$('#dataTables-example').DataTable({
                responsive: true
            });
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "MAMRHBundle:Employe:Demande.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 97,  180 => 84,  174 => 83,  167 => 79,  163 => 78,  159 => 77,  156 => 76,  149 => 72,  145 => 71,  141 => 70,  138 => 69,  135 => 68,  131 => 67,  111 => 50,  97 => 39,  90 => 35,  79 => 27,  72 => 23,  65 => 19,  60 => 17,  46 => 5,  43 => 4,  37 => 2,  11 => 1,);
    }
}
