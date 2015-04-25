<?php

/* MAMRHBundle:Projet:VoirProfil.html.twig */
class __TwigTemplate_6386c1c8796b7bbef4c78ded51b74a1e66607b45d8caf3fbc35222ff5c69a43f extends Twig_Template
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

    // line 3
    public function block_sstitle($context, array $blocks = array())
    {
        echo " Mon profil";
    }

    // line 5
    public function block_corps($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"col-lg-8\">
    <div class=\"row\">
    <div class=\"col-lg-3\">
        <div class=\"photo\">
        <img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/ll.jpg"), "html", null, true);
        echo "\" />
        </div>
    </div>
    <div class=\"col-lg-9\">
            <div class=\"panel panel-primary\">
                <div class=\"panel-heading\">
                    <i class=\"fa fa-unlock\"></i>
                    &nbsp;&nbsp;Informations générales
                </div>
                <div class=\"panel-body\">
                    <table>
                        <tr><td><i class=\"fa fa-users\"></i>&nbsp;&nbsp;</td><td>Nom:&nbsp; </td><td>EL MARIOULI</td>
                        </tr>
                        <tr><td><i class=\"fa fa-user\"></i>&nbsp;&nbsp;</td><td>Prénom: </td><td>MAJDA</td>
                        </tr>
                        <tr><td><i class=\"fa fa-bookmark\"></i>&nbsp;&nbsp;</td><td>Matricule:&nbsp;</td><td>6526</td>
                        </tr>
                        <tr><td><i class=\"fa fa-tag\"></i>&nbsp;&nbsp;</td><td>CIN:</td><td>GN172658</td>
                        </tr>
                        <tr><td><i class=\"fa fa-home\"></i>&nbsp;&nbsp;</td><td>Adresse:</td><td>Block2</td>
                        </tr>
                        <tr><td><i class=\"fa fa-phone\">&nbsp;&nbsp;</i></td><td>Télé:</td><td>064567899</td>
                        </tr>
                        <tr><td><i class=\"fa fa-envelope\"></i>&nbsp;&nbsp;</td><td>Email:</td><td>Majda@gmail.com</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <div class=\"panel panel-primary\">
            <div class=\"panel-heading\">
                <i class=\"fa fa-gears\"></i>
                &nbsp;&nbsp;Informations fonctionelles
            </div>
            <div class=\"panel-body\">
                <table>
                    <tr><td><i class=\"fa fa-mortar-board\"></i>&nbsp;&nbsp;</td><td>Diplome:&nbsp; </td><td>Ingénieur d'état</td>
                    </tr>
                    <tr><td><i class=\"fa fa-briefcase\"></i>&nbsp;&nbsp;</td><td>Formation:&nbsp; </td><td>Oracle DataBase</td>
                    </tr>
                    <tr><td><i class=\"fa fa-wrench\"></i>&nbsp;&nbsp;</td><td>Fonction:&nbsp;</td><td>Inegénieur d'informatique </td>
                    </tr>
                    <tr><td><i class=\"fa fa-graduation-cap\"></i>&nbsp;&nbsp;</td><td>Spécialité:&nbsp;</td><td>systèmes d'information</td>
                    </tr>
                </table>
            </div>
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-lg-12\">
           <div class=\"panel panel-primary\">
            <div class=\"panel-heading\">
                <i class=\"fa fa-credit-card\"></i>
                &nbsp;&nbsp;Informations bancaires
            </div>
            <div class=\"panel-body\">
                <table>
                    <tr><td><i class=\"fa fa-money\"></i>&nbsp;&nbsp;</td><td>Salaire:&nbsp; </td><td>15000 DH</td>
                    </tr>
                    <tr><td><i class=\"fa fa-mortar-board\"></i>&nbsp;&nbsp;</td><td>Numéro Compte bancaire: &nbsp;</td><td>76527199</td>
                    </tr>
                    <tr><td><i class=\"fa fa-mortar-board\"></i>&nbsp;&nbsp;</td><td>Matricule:&nbsp;</td><td>6526</td>
                    </tr>
                    <tr><td><i class=\"fa fa-tag\"></i>&nbsp;&nbsp;</td><td>CIN:&nbsp;</td><td>GN172658</td>
                    </tr>
                </table>
            </div>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "MAMRHBundle:Projet:VoirProfil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 10,  46 => 6,  43 => 5,  37 => 3,  11 => 1,);
    }
}
