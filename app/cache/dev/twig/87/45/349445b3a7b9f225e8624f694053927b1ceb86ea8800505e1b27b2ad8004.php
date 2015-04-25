<?php

/* MAMSiteBundle:Default:index.html.twig */
class __TwigTemplate_8745349445b3a7b9f225e8624f694053927b1ceb86ea8800505e1b27b2ad8004 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::site.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'offre' => array($this, 'block_offre'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::site.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_offre($context, array $blocks = array())
    {
        // line 3
        echo "                     ";
        $context["i"] = 0;
        // line 4
        echo "                     ";
        $context["j"] = 0;
        // line 5
        echo "                      ";
        $context["s"] = 0;
        // line 6
        echo "                      ";
        $context["h"] = 0;
        // line 7
        echo "<section id=\"portfolio\">
   <div class=\"container\">
        <div class=\"box\">
            <div class=\"center\">
                <h2>Les offres </h2>
                <p class=\"lead\">offres emplois et stages ";
        // line 12
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre"))), "html", null, true);
        echo "<br></p>
            </div>

            <div class=\"gap\"></div>
                
            <div id=\"team-scroller\" class=\"carousel scale\">
                <div class=\"carousel-inner\">
                    
                ";
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["of"]) {
            // line 21
            echo "                 ";
            if (($this->getAttribute($context["loop"], "index", array()) == 1)) {
                echo " 
                   <div class=\"item active\"> 
                        <div class=\"row\">       <div class=\"col-sm-1\">
                                    <div class=\"member\">
                                       
                                        <h3><small class=\"designation\"></small></h3>
                                    </div>
                                </div>  
                     ";
            } elseif ((            // line 29
(isset($context["s"]) ? $context["s"] : $this->getContext($context, "s")) == 3)) {
                echo " ";
                $context["s"] = 0;
                // line 30
                echo "                                 <div class=\"item \"> 
                        <div class=\"row\">       <div class=\"col-sm-1\">
                                    <div class=\"member\">
                                       
                                        <h3><small class=\"designation\"></small></h3>
                                    </div>
                                </div>     
                                                 
                         ";
            }
            // line 39
            echo "                                                  
                           <div class=\"col-sm-3\">
                                    <div class=\"member\">
                                       
                                        <h3>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["of"], "libelle", array()), "html", null, true);
            echo "<small class=\"designation\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["of"], "descriptif", array()), "html", null, true);
            echo "</small> 
                                        </br>

                                            


                                        </h3>";
            // line 49
            $context["s"] = ((isset($context["s"]) ? $context["s"] : $this->getContext($context, "s")) + 1);
            // line 50
            echo "                                    </div>
                                </div>                                  
                                             ";
            // line 52
            if ((((isset($context["s"]) ? $context["s"] : $this->getContext($context, "s")) == 3) || ($this->getAttribute($context["loop"], "index", array()) == twig_length_filter($this->env, (isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")))))) {
                echo " 
                        </div>
                     </div>       
                                             ";
            }
            // line 56
            echo "                

                     ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['of'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "                </div>

                <a class=\"left-arrow\" href=\"#team-scroller\" data-slide=\"prev\">
                    <i class=\"icon-angle-left icon-4x\"></i>
                </a>
                <a class=\"right-arrow\" href=\"#team-scroller\" data-slide=\"next\">
                    <i class=\"icon-angle-right icon-4x\"></i>
                </a>
            </div><!--/.carousel-->
           
            
        </div><!--/.box-->
    </div><!--/.container-->
</section><!--/#portfolio-->
";
    }

    public function getTemplateName()
    {
        return "MAMSiteBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 59,  143 => 56,  136 => 52,  132 => 50,  130 => 49,  119 => 43,  113 => 39,  102 => 30,  98 => 29,  86 => 21,  69 => 20,  58 => 12,  51 => 7,  48 => 6,  45 => 5,  42 => 4,  39 => 3,  36 => 2,  11 => 1,);
    }
}
