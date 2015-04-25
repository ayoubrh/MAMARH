<?php

/* ::site.html.twig */
class __TwigTemplate_f3ec080689fe9cb494c71e81010ee04bfc944652ef34db519b5a78dc402f310f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'offre' => array($this, 'block_offre'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <title>Xeon | OnePage Responsive Theme</title>
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Site/css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Site/css/font-awesome.min.css"), "html", null, true);
        echo "\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Site/css/prettyPhoto.css"), "html", null, true);
        echo "\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Site/css/main.css"), "html", null, true);
        echo "\" type=\"text/css\" />
    
    <!--[if lt IE 9]>
    <script src=\"js/html5shiv.js\"></script>
    <script src=\"js/respond.min.js\"></script>
    <![endif]-->
    <link rel=\"shortcut icon\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Site/images/ico/favicon.ico"), "html", null, true);
        echo "\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Site/images/ico/apple-touch-icon-144-precomposed.png"), "html", null, true);
        echo "\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Site/images/ico/apple-touch-icon-114-precomposed.png"), "html", null, true);
        echo "\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Site/images/ico/apple-touch-icon-72-precomposed.png"), "html", null, true);
        echo "\">
    <link rel=\"apple-touch-icon-precomposed\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Site/images/ico/apple-touch-icon-57-precomposed.png"), "html", null, true);
        echo "\">
</head><!--/head-->

<body data-spy=\"scroll\" data-target=\"#navbar\" data-offset=\"0\">
    <header id=\"header\" role=\"banner\">
        <div class=\"container\">
            <div id=\"navbar\" class=\"navbar navbar-default\">
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand\" href=\"index.html\"></a>
                </div>
                <div class=\"collapse navbar-collapse\">
                    <ul class=\"nav navbar-nav\">
                        <li class=\"active\"><a href=\"#main-slider\"><i class=\"icon-home\"></i></a></li>
                        <li><a href=\"#services\">Services</a></li>
                        <li><a href=\"#portfolio\">Portfolio</a></li>
                        <li><a href=\"#pricing\">Pricing</a></li>
                        <li><a href=\"#about-us\">About Us</a></li>
                        <li><a href=\"#contact\">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header><!--/#header-->

    <section id=\"main-slider\" class=\"carousel\">
        <div class=\"carousel-inner\">
            <div class=\"item active\">
                <div class=\"container\">
                    <div class=\"carousel-content\">
                        <h1>Free Onepage Theme</h1>
                        <p class=\"lead\">Xeon is the best free onepage responsive theme available arround the globe<br>Download it right now for free</p>
                        

                    </div>
                </div>
            </div><!--/.item-->
            <div class=\"item\">
                <div class=\"container\">
                    <div class=\"carousel-content\">
                        <h1>ShapeBootstrap.net</h1>
                        <p class=\"lead\">Download free but 100% premium quaility twitter Bootstrap based WordPress and HTML themes <br>from shapebootstrap.net</p>
                    </div>
                </div>
            </div><!--/.item-->
        </div><!--/.carousel-inner-->
        <a class=\"prev\" href=\"#main-slider\" data-slide=\"prev\"><i class=\"icon-angle-left\"></i></a>
        <a class=\"next\" href=\"#main-slider\" data-slide=\"next\"><i class=\"icon-angle-right\"></i></a>
    </section><!--/#main-slider-->

    <section id=\"services\">
        <div class=\"container\">
            <div class=\"box first\">
                <div class=\"row\">
                    <div class=\"col-md-4 col-sm-6\">
                        <div class=\"center\">
                            <i class=\"icon-apple icon-md icon-color1\"></i>
                            <h4>iOS development</h4>
                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae.

                            

                            </p>
                        </div>
                    </div><!--/.col-md-4-->
                    <div class=\"col-md-4 col-sm-6\">
                        <div class=\"center\">
                            <i class=\"icon-android icon-md icon-color2\"></i>
                            <h4>Android development</h4>
                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae.</p>
                        </div>
                    </div><!--/.col-md-4-->
                    <div class=\"col-md-4 col-sm-6\">
                        <div class=\"center\">
                            <i class=\"icon-windows icon-md icon-color3\"></i>
                            <h4>Windows Phone development</h4>
                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae.</p>

                        </div>
                    </div><!--/.col-md-4-->
                    <div class=\"col-md-4 col-sm-6\">
                        <div class=\"center\">
                            <i class=\"icon-html5 icon-md icon-color4\"></i>
                            <h4>Ruby on Rails development</h4>
                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae.</p>
                        </div>
                    </div><!--/.col-md-4-->
                    <div class=\"col-md-4 col-sm-6\">
                        <div class=\"center\">
                            <i class=\"icon-css3 icon-md icon-color5\"></i>
                            <h4>Javascript development</h4>
                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae.</p>
                        </div>
                    </div><!--/.col-md-4-->
                    <div class=\"col-md-4 col-sm-6\">
                        <div class=\"center\">
                            <i class=\"icon-thumbs-up icon-md icon-color6\"></i>
                            <h4>Responsive web design</h4>
                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae.</p>
                        </div>
                    </div><!--/.col-md-4-->
                </div><!--/.row-->
            </div><!--/.box-->
        </div><!--/.container-->
    </section><!--/#services-->

   ";
        // line 133
        $this->displayBlock('offre', $context, $blocks);
        // line 135
        echo "
    <section id=\"pricing\">
        <div class=\"container\">
            <div class=\"box\">
                <div class=\"center\">
                    <h2>See our Pricings</h2>
                    <p class=\"lead\">Pellentesque habitant morbi tristique senectus et netus et <br>malesuada fames ac turpis egestas.</p>
                </div><!--/.center-->   
                <div class=\"big-gap\"></div>
                <div id=\"pricing-table\" class=\"row\">
                    <div class=\"col-sm-4\">
                        <ul class=\"plan\">
                            <li class=\"plan-name\">Basic</li>
                            <li class=\"plan-price\">\$29</li>
                            <li>5GB Storage</li>
                            <li>1GB RAM</li>
                            <li>400GB Bandwidth</li>
                            <li>10 Email Address</li>
                            <li>Forum Support</li>
                            <li class=\"plan-action\"><a href=\"#\" class=\"btn btn-primary btn-lg\">Signup</a></li>
                        </ul>
                    </div><!--/.col-sm-4-->
                    <div class=\"col-sm-4\">
                        <ul class=\"plan featured\">
                            <li class=\"plan-name\">Standard</li>
                            <li class=\"plan-price\">\$49</li>
                            <li>10GB Storage</li>
                            <li>2GB RAM</li>
                            <li>1TB Bandwidth</li>
                            <li>100 Email Address</li>
                            <li>Forum Support</li>
                            <li class=\"plan-action\"><a href=\"#\" class=\"btn btn-primary btn-lg\">Signup</a></li>
                        </ul>
                    </div><!--/.col-sm-4-->
                    <div class=\"col-sm-4\">
                        <ul class=\"plan\">
                            <li class=\"plan-name\">Advanced</li>
                            <li class=\"plan-price\">\$199</li>
                            <li>30GB Storage</li>
                            <li>5GB RAM</li>
                            <li>5TB Bandwidth</li>
                            <li>1000 Email Address</li>
                            <li>Forum Support</li>
                            <li class=\"plan-action\"><a href=\"#\" class=\"btn btn-primary btn-lg\">Signup</a></li>
                        </ul>
                    </div><!--/.col-sm-4-->
                </div> 
            </div> 
        </div>
    </section><!--/#pricing-->

    <section id=\"about-us\">
        <div class=\"container\">
            <div class=\"box\">
                <div class=\"center\">
                    <h2>Meet the Team</h2>
                    <p class=\"lead\">Pellentesque habitant morbi tristique senectus et netus et<br>malesuada fames ac turpis egestas.</p>
                </div>
                <div class=\"gap\"></div>
                <div id=\"team-scroller\" class=\"carousel scale\">
                    <div class=\"carousel-inner\">
                        <div class=\"item active\">
                            <div class=\"row\">
                                <div class=\"col-sm-2\">
                                    <div class=\"member\">
                                       
                                        <h3>1<small class=\"designation\">CEO  Founder</small></h3>
                                    </div>
                                </div>
                                <div class=\"col-sm-2\">
                                    <div class=\"member\">
                                      
                                        <h3>1<small class=\"designation\">CEO  Founder</small></h3>
                                    </div>
                                </div>
                                <div class=\"col-sm-2\">
                                    <div class=\"member\">
                                        
                                        <h3>2<small class=\"designation\">Senior Vice President</small></h3>
                                    </div>
                                </div>        
                                <div class=\"col-sm-2\">
                                    <div class=\"member\">
                                       
                                        <h3>3<small class=\"designation\">Assitant Vice President</small></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"item\">
                            <div class=\"row\">
                                <div class=\"col-sm-4\">
                                    <div class=\"member\">
                                        <p><img class=\"img-responsive img-thumbnail img-circle\" src=\"images/team3.jpg\" alt=\"\" ></p>
                                        <h3>11<small class=\"designation\">Co-Founder</small></h3>
                                    </div>
                                </div>   
                                <div class=\"col-sm-4\">
                                    <div class=\"member\">
                                        <p><img class=\"img-responsive img-thumbnail img-circle\" src=\"images/team1.jpg\" alt=\"\" ></p>
                                        <h3>22<small class=\"designation\">Marketing Manager</small></h3>

                                    </div>
                                </div>     
                                <div class=\"col-sm-4\">
                                    <div class=\"member\">
                                        <p><img class=\"img-responsive img-thumbnail img-circle\" src=\"images/team2.jpg\" alt=\"\" ></p>
                                        <h3>33<small class=\"designation\">Support Manager</small></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class=\"left-arrow\" href=\"#team-scroller\" data-slide=\"prev\">
                        <i class=\"icon-angle-left icon-4x\"></i>
                    </a>
                    <a class=\"right-arrow\" href=\"#team-scroller\" data-slide=\"next\">
                        <i class=\"icon-angle-right icon-4x\"></i>
                    </a>
                </div><!--/.carousel-->
            </div><!--/.box-->
        </div><!--/.container-->
    </section><!--/#about-us-->


    <section id=\"contact\">
        <div class=\"container\">
            <div class=\"box last\">
                <div class=\"row\">
                    <div class=\"col-sm-6\">
                        <h1>Contact Form</h1>
                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                        <div class=\"status alert alert-success\" style=\"display: none\"></div>
                        <form id=\"main-contact-form\" class=\"contact-form\" name=\"contact-form\" method=\"post\" action=\"sendemail.php\" role=\"form\">
                            <div class=\"row\">
                                <div class=\"col-sm-6\">
                                    <div class=\"form-group\">
                                        <input type=\"text\" class=\"form-control\" required=\"required\" placeholder=\"Name\">
                                    </div>
                                </div>
                                <div class=\"col-sm-6\">
                                    <div class=\"form-group\">
                                        <input type=\"text\" class=\"form-control\" required=\"required\" placeholder=\"Email address\">
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-sm-12\">
                                    <div class=\"form-group\">
                                        <textarea name=\"message\" id=\"message\" required=\"required\" class=\"form-control\" rows=\"8\" placeholder=\"Message\"></textarea>
                                    </div>
                                    <div class=\"form-group\">
                                        <button type=\"submit\" class=\"btn btn-danger btn-lg\">Send Message</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div><!--/.col-sm-6-->
                    <div class=\"col-sm-6\">
                        <h1>Our Address</h1>
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <address>
                                    <strong>Twitter, Inc.</strong><br>
                                    795 Folsom Ave, Suite 600<br>
                                    San Francisco, CA 94107<br>
                                    <abbr title=\"Phone\">P:</abbr> (123) 456-7890
                                </address>
                            </div>
                            <div class=\"col-md-6\">
                                <address>
                                    <strong>Twitter, Inc.</strong><br>
                                    795 Folsom Ave, Suite 600<br>
                                    San Francisco, CA 94107<br>
                                    <abbr title=\"Phone\">P:</abbr> (123) 456-7890
                                </address>
                            </div>
                        </div>
                        <h1>Connect with us</h1>
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <ul class=\"social\">
                                    <li><a href=\"#\"><i class=\"icon-facebook icon-social\"></i> Facebook</a></li>
                                    <li><a href=\"#\"><i class=\"icon-google-plus icon-social\"></i> Google Plus</a></li>
                                    <li><a href=\"#\"><i class=\"icon-pinterest icon-social\"></i> Pinterest</a></li>
                                </ul>
                            </div>
                            <div class=\"col-md-6\">
                                <ul class=\"social\">
                                    <li><a href=\"#\"><i class=\"icon-linkedin icon-social\"></i> Linkedin</a></li>
                                    <li><a href=\"#\"><i class=\"icon-twitter icon-social\"></i> Twitter</a></li>
                                    <li><a href=\"#\"><i class=\"icon-youtube icon-social\"></i> Youtube</a></li>
                                </ul>
                            </div>
                        </div>
                    </div><!--/.col-sm-6-->
                </div><!--/.row-->
            </div><!--/.box-->
        </div><!--/.container-->
    </section><!--/#contact-->

    <footer id=\"footer\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-6\">
                    &copy; 2013 <a target=\"_blank\" href=\"http://shapebootstrap.net/\" title=\"Free Twitter Bootstrap WordPress Themes and HTML templates\">ShapeBootstrap</a>. All Rights Reserved.
                </div>
                <div class=\"col-sm-6\">
                    <img class=\"pull-right\" src=\"images/shapebootstrap.png\" alt=\"ShapeBootstrap\" title=\"ShapeBootstrap\">
                </div>
            </div>
        </div>
    </footer><!--/#footer-->

    <script src=\"";
        // line 349
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Site/js/jquery.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 350
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Site/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 351
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Site/js/jquery.isotope.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 352
        echo "Site/js/jquery.prettyPhoto.js";
        echo "\"></script>
    <script src=\"";
        // line 353
        echo "Site/js/main.js";
        echo "\"></script>
</body>
</html>";
    }

    // line 133
    public function block_offre($context, array $blocks = array())
    {
        // line 134
        echo "   ";
    }

    public function getTemplateName()
    {
        return "::site.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  425 => 134,  422 => 133,  415 => 353,  411 => 352,  407 => 351,  403 => 350,  399 => 349,  183 => 135,  181 => 133,  67 => 22,  63 => 21,  59 => 20,  55 => 19,  51 => 18,  42 => 12,  38 => 11,  34 => 10,  30 => 9,  20 => 1,);
    }
}
