<?php

/* base.html.twig */
class __TwigTemplate_89e6562c95b931df8c93d88da5ff569f3a61bee252021d0adb1e9f0fd599ed75 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'formContent' => array($this, 'block_formContent'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <div class=\"page\">
            <header class=\"top-bar\">
                <div class=\"container-fluid\">
                    <div class=\"row\">
                        <!-- <div class=\"pull-right\">
                            <a class=\"btn btn-default\" href=\"#\" role=\"button\">Edit</a>
                        </div> -->
                        
                        <div class=\"pull-right actions\">
                            <a class=\"btn btn-cancel\" href=\"#\" role=\"button\">Cancel</a>
                            <button class=\"btn btn-submit\">Save</button>
                        </div>

                        <!-- <h1 class=\"pull-left\">Application form</h1> -->
                        <h1 class=\"text-center\">Edit</h1>
                    </div>
                </div>
            </header>
            ";
        // line 30
        $this->displayBlock('formContent', $context, $blocks);
        // line 182
        echo "        </div>
        ";
        // line 183
        $this->displayBlock('javascripts', $context, $blocks);
        // line 201
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Test App";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        ";
    }

    // line 30
    public function block_formContent($context, array $blocks = array())
    {
        // line 31
        echo "                <!-- <section class=\"content\">
                    <div class=\"container-fluid\">
                        <div class=\"row\">
                            <div class=\"col-md-3 col-md-offset-0\">
                                <div class=\"box\">
                                    <ul>
                                        <li>
                                            <h3>John Doe</h3>
                                        </li>
                                        <li>15 April 1983</li>
                                        <li><a href=\"mailto:johndoe@gmail.com\">johndoe@gmail.com</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class=\"col-md-7\">
                                <div class=\"box\">
                                    <div class=\"row\">
                                        <div class=\"col-sm-3 text-right\">
                                            <ul>
                                                <li>
                                                    <a href=\"#\">www.mywebsite.com</a>
                                                </li>
                                                <li>
                                                    <a href=\"#\">+65 336889425</a>
                                                </li>
                                                <li>Skill 123</li>
                                                <li>Male</li>
                                            </ul>
                                        </div>
                                        <div class=\"col-sm-7\">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt sit dolorum, optio earum molestiae nulla laboriosam mollitia animi maxime, ipsa delectus doloremque rerum non adipisci vel perferendis beatae, ut officiis!</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section> -->

                <section class=\"form\">
                    <form action=\"/\">
                        <h2>Application form</h2>
                        <div class=\"row\">
                            <div class=\"col-md-5\">
                                <div class=\"form-group\">
                                    <input type=\"email\" class=\"form-control\" id=\"userName\" value=\"\">
                                    <label for=\"userName\">
                                        <span>User Name</span>
                                    </label>
                                </div>
                            </div>
                            <div class=\"col-md-4\">
                                <div class=\"form-group\">
                                    <input type=\"date\" class=\"form-control\" id=\"birthdate\">
                                    <label for=\"birthdate\">
                                        <span>Birthdate</span>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class=\"row\">
                            <div class=\"col-md-5\">
                                <div class=\"form-group\">
                                    <input type=\"email\" class=\"form-control\" id=\"email\">
                                    <label for=\"email\">
                                        <span>Email</span>
                                    </label>
                                </div>
                            </div>
                            <div class=\"col-md-5\">
                                <div class=\"form-group\">
                                    <input type=\"text\" class=\"form-control\" id=\"url\">
                                    <label for=\"url\">
                                        <span>URL</span>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class=\"row\">
                            <div class=\"col-md-5\">
                                <div class=\"form-group\">
                                    <input type=\"text\" class=\"form-control\" id=\"phoneNumber\">
                                    <label for=\"phoneNumber\">
                                        <span>Phone Number</span>
                                    </label>
                                </div>
                            </div>
                            <div class=\"col-md-5\">
                                <div class=\"row\">
                                    <div class=\"col-md-4\">
                                        <div class=\"form-group\">
                                            <input type=\"text\" class=\"form-control\" id=\"skillNumber\">
                                            <label for=\"skillNumber\">
                                                <span>Skill number</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class=\"col-md-3\">
                                        <div class=\"radio\">
                                            <label>
                                                <input type=\"radio\" name=\"sex\" id=\"male\" value=\"male\" checked>
                                                <span>Male</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class=\"col-md-3\">
                                        <div class=\"radio\">
                                            <label>
                                                <input type=\"radio\" name=\"sex\" id=\"female\" value=\"female\">
                                                <span>Female</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"row\">
                            <div class=\"col-md-4\">
                                <div class=\"form-group\">
                                    <input type=\"password\" class=\"form-control\" id=\"password\">
                                    <label for=\"password\">
                                        <span>Password</span>
                                    </label>
                                </div>
                            </div>
                            <div class=\"col-md-4\">
                                <div class=\"form-group\">
                                    <input type=\"password\" class=\"form-control\" id=\"repeatPassword\">
                                    <label for=\"repeatPassword\">
                                        <span>Repeat Password</span>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class=\"row\">
                            <div class=\"col-md-10\">
                                <div class=\"form-group\">
                                    <input type=\"text\" class=\"form-control\" id=\"text\">
                                    <label for=\"text\">
                                        <span>Enter a brief description of yourself and interest.</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </form>
                </section>
            ";
    }

    // line 183
    public function block_javascripts($context, array $blocks = array())
    {
        // line 184
        echo "            <!-- // <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/vendor/json2.js"), "html", null, true);
        echo "\"></script> -->
            <script src=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("../vendor/components/underscore/underscore-min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 186
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("../vendor/components/backbone/backbone-min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/vendors/backbone-validation-min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/vendors/jquery-1.12.4.min.js"), "html", null, true);
        echo "\"></script>
            <!-- // <script src=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/vendor/backbone.marionette.js"), "html", null, true);
        echo "\"></script> -->
            <!-- // <script src=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/vendor/spin.js"), "html", null, true);
        echo "\"></script> -->
            <script src=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/app.js"), "html", null, true);
        echo "\"></script>
            <!-- <script src=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/common/views.js"), "html", null, true);
        echo "\"></script>
            // <script src=\"";
        // line 193
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/apps/gallery/gallery_app.js"), "html", null, true);
        echo "\"></script>
            // <script src=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/apps/gallery/list/list_controller.js"), "html", null, true);
        echo "\"></script>
            // <script src=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/apps/gallery/list/list_view.js"), "html", null, true);
        echo "\"></script>
            // <script src=\"";
        // line 196
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/apps/gallery/show/show_controller.js"), "html", null, true);
        echo "\"></script>
            // <script src=\"";
        // line 197
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/apps/gallery/show/show_view.js"), "html", null, true);
        echo "\"></script> -->
            <!-- // <script src=\"";
        // line 198
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/vendor/bootstrap.min.js"), "html", null, true);
        echo "\"></script> -->
            <!-- // <script src=\"";
        // line 199
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/vendor/swipebox.min.js"), "html", null, true);
        echo "\"></script> -->
        ";
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  310 => 199,  306 => 198,  302 => 197,  298 => 196,  294 => 195,  290 => 194,  286 => 193,  282 => 192,  278 => 191,  274 => 190,  270 => 189,  266 => 188,  262 => 187,  258 => 186,  254 => 185,  249 => 184,  246 => 183,  92 => 31,  89 => 30,  82 => 7,  79 => 6,  73 => 5,  67 => 201,  65 => 183,  62 => 182,  60 => 30,  35 => 9,  33 => 6,  29 => 5,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Test App{% endblock %}</title>*/
/*         {% block stylesheets %}*/
/*             <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">*/
/*         {% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         <div class="page">*/
/*             <header class="top-bar">*/
/*                 <div class="container-fluid">*/
/*                     <div class="row">*/
/*                         <!-- <div class="pull-right">*/
/*                             <a class="btn btn-default" href="#" role="button">Edit</a>*/
/*                         </div> -->*/
/*                         */
/*                         <div class="pull-right actions">*/
/*                             <a class="btn btn-cancel" href="#" role="button">Cancel</a>*/
/*                             <button class="btn btn-submit">Save</button>*/
/*                         </div>*/
/* */
/*                         <!-- <h1 class="pull-left">Application form</h1> -->*/
/*                         <h1 class="text-center">Edit</h1>*/
/*                     </div>*/
/*                 </div>*/
/*             </header>*/
/*             {% block formContent %}*/
/*                 <!-- <section class="content">*/
/*                     <div class="container-fluid">*/
/*                         <div class="row">*/
/*                             <div class="col-md-3 col-md-offset-0">*/
/*                                 <div class="box">*/
/*                                     <ul>*/
/*                                         <li>*/
/*                                             <h3>John Doe</h3>*/
/*                                         </li>*/
/*                                         <li>15 April 1983</li>*/
/*                                         <li><a href="mailto:johndoe@gmail.com">johndoe@gmail.com</a></li>*/
/*                                     </ul>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="col-md-7">*/
/*                                 <div class="box">*/
/*                                     <div class="row">*/
/*                                         <div class="col-sm-3 text-right">*/
/*                                             <ul>*/
/*                                                 <li>*/
/*                                                     <a href="#">www.mywebsite.com</a>*/
/*                                                 </li>*/
/*                                                 <li>*/
/*                                                     <a href="#">+65 336889425</a>*/
/*                                                 </li>*/
/*                                                 <li>Skill 123</li>*/
/*                                                 <li>Male</li>*/
/*                                             </ul>*/
/*                                         </div>*/
/*                                         <div class="col-sm-7">*/
/*                                             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt sit dolorum, optio earum molestiae nulla laboriosam mollitia animi maxime, ipsa delectus doloremque rerum non adipisci vel perferendis beatae, ut officiis!</p>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </section> -->*/
/* */
/*                 <section class="form">*/
/*                     <form action="/">*/
/*                         <h2>Application form</h2>*/
/*                         <div class="row">*/
/*                             <div class="col-md-5">*/
/*                                 <div class="form-group">*/
/*                                     <input type="email" class="form-control" id="userName" value="">*/
/*                                     <label for="userName">*/
/*                                         <span>User Name</span>*/
/*                                     </label>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="col-md-4">*/
/*                                 <div class="form-group">*/
/*                                     <input type="date" class="form-control" id="birthdate">*/
/*                                     <label for="birthdate">*/
/*                                         <span>Birthdate</span>*/
/*                                     </label>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                         <div class="row">*/
/*                             <div class="col-md-5">*/
/*                                 <div class="form-group">*/
/*                                     <input type="email" class="form-control" id="email">*/
/*                                     <label for="email">*/
/*                                         <span>Email</span>*/
/*                                     </label>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="col-md-5">*/
/*                                 <div class="form-group">*/
/*                                     <input type="text" class="form-control" id="url">*/
/*                                     <label for="url">*/
/*                                         <span>URL</span>*/
/*                                     </label>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                         <div class="row">*/
/*                             <div class="col-md-5">*/
/*                                 <div class="form-group">*/
/*                                     <input type="text" class="form-control" id="phoneNumber">*/
/*                                     <label for="phoneNumber">*/
/*                                         <span>Phone Number</span>*/
/*                                     </label>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="col-md-5">*/
/*                                 <div class="row">*/
/*                                     <div class="col-md-4">*/
/*                                         <div class="form-group">*/
/*                                             <input type="text" class="form-control" id="skillNumber">*/
/*                                             <label for="skillNumber">*/
/*                                                 <span>Skill number</span>*/
/*                                             </label>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <div class="col-md-3">*/
/*                                         <div class="radio">*/
/*                                             <label>*/
/*                                                 <input type="radio" name="sex" id="male" value="male" checked>*/
/*                                                 <span>Male</span>*/
/*                                             </label>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <div class="col-md-3">*/
/*                                         <div class="radio">*/
/*                                             <label>*/
/*                                                 <input type="radio" name="sex" id="female" value="female">*/
/*                                                 <span>Female</span>*/
/*                                             </label>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                         <div class="row">*/
/*                             <div class="col-md-4">*/
/*                                 <div class="form-group">*/
/*                                     <input type="password" class="form-control" id="password">*/
/*                                     <label for="password">*/
/*                                         <span>Password</span>*/
/*                                     </label>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="col-md-4">*/
/*                                 <div class="form-group">*/
/*                                     <input type="password" class="form-control" id="repeatPassword">*/
/*                                     <label for="repeatPassword">*/
/*                                         <span>Repeat Password</span>*/
/*                                     </label>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                         <div class="row">*/
/*                             <div class="col-md-10">*/
/*                                 <div class="form-group">*/
/*                                     <input type="text" class="form-control" id="text">*/
/*                                     <label for="text">*/
/*                                         <span>Enter a brief description of yourself and interest.</span>*/
/*                                     </label>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </form>*/
/*                 </section>*/
/*             {% endblock %}*/
/*         </div>*/
/*         {% block javascripts %}*/
/*             <!-- // <script src="{{ asset('assets/js/vendor/json2.js') }}"></script> -->*/
/*             <script src="{{ asset('../vendor/components/underscore/underscore-min.js') }}"></script>*/
/*             <script src="{{ asset('../vendor/components/backbone/backbone-min.js') }}"></script>*/
/*             <script src="{{ asset('assets/js/vendors/backbone-validation-min.js') }}"></script>*/
/*             <script src="{{ asset('assets/js/vendors/jquery-1.12.4.min.js') }}"></script>*/
/*             <!-- // <script src="{{ asset('assets/js/vendor/backbone.marionette.js') }}"></script> -->*/
/*             <!-- // <script src="{{ asset('assets/js/vendor/spin.js') }}"></script> -->*/
/*             <script src="{{ asset('assets/js/app.js') }}"></script>*/
/*             <!-- <script src="{{ asset('assets/js/common/views.js') }}"></script>*/
/*             // <script src="{{ asset('assets/js/apps/gallery/gallery_app.js') }}"></script>*/
/*             // <script src="{{ asset('assets/js/apps/gallery/list/list_controller.js') }}"></script>*/
/*             // <script src="{{ asset('assets/js/apps/gallery/list/list_view.js') }}"></script>*/
/*             // <script src="{{ asset('assets/js/apps/gallery/show/show_controller.js') }}"></script>*/
/*             // <script src="{{ asset('assets/js/apps/gallery/show/show_view.js') }}"></script> -->*/
/*             <!-- // <script src="{{ asset('assets/js/vendor/bootstrap.min.js') }}"></script> -->*/
/*             <!-- // <script src="{{ asset('assets/js/vendor/swipebox.min.js') }}"></script> -->*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
