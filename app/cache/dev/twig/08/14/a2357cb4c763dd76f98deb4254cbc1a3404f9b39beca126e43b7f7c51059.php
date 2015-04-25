<?php

/* MAMRHBundle:RH:affichemp.html.twig */
class __TwigTemplate_0814a2357cb4c763dd76f98deb4254cbc1a3404f9b39beca126e43b7f7c51059 extends Twig_Template
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
            'panel' => array($this, 'block_panel'),
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
        echo "
    ";
        // line 6
        $this->displayBlock('panel', $context, $blocks);
        // line 8
        echo "
    <div id=\"wrapper\">
      <div id=\"page-wrapper\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">Tables</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
            <!-- /.row -->
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"panel panel-primary\">
                        <div class=\"panel-heading\">
                            DataTables Advanced Tables
                        </div>

                        <!-- /.panel-heading -->
                        <div class=\"panel-body\">
                            <div class=\"dataTable_wrapper\">
                                <table class=\"table table-striped table-bordered table-hover\" id=\"dataTables-example\">
                                    <thead>
                                    <tr>
                                        <th>Matricule</th>
                                        <th>Nom</th>
                                        <th>Prénom</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    ";
        // line 38
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["employe"]) {
            // line 39
            echo "                                    <tbody>

                                    <tr class=\"odd gradeX\">

                                        <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["employe"], "matricule", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["employe"], "nom", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["employe"], "prenom", array()), "html", null, true);
            echo "</td>
                                        <td><p class=\"fa fa-edit\"></p> &nbsp;&nbsp;&nbsp;<p class=\"fa fa-trash-o\"></p></td>
                                    </tr>

                                    </tbody>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['employe'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- /#page-wrapper -->


    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
        \$(document).ready(function() {
            \$('#dataTables-example').DataTable({
                responsive: true
            });
        });
    </script>
    <!-- jQuery -->
    <script src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bower_components/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bower_components/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bower_components/metisMenu/dist/metisMenu.min.js"), "html", null, true);
        echo "\"></script>

    <!-- DataTables JavaScript -->
    <script src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bower_components/DataTables/media/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Custom Theme JavaScript -->
    <script src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/js/sb-admin-2.js"), "html", null, true);
        echo "\"></script>

    <!-- DataTables JavaScript -->
    <script src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bower_components/DataTables/media/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 6
    public function block_panel($context, array $blocks = array())
    {
        // line 7
        echo "    ";
    }

    public function getTemplateName()
    {
        return "MAMRHBundle:RH:affichemp.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 7,  182 => 6,  176 => 90,  172 => 89,  166 => 86,  160 => 83,  156 => 82,  150 => 79,  144 => 76,  138 => 73,  114 => 51,  102 => 45,  98 => 44,  94 => 43,  88 => 39,  84 => 38,  52 => 8,  50 => 6,  47 => 5,  44 => 4,  38 => 2,  11 => 1,);
    }
}
