<?php

/* ::layout/index.html.twig */
class __TwigTemplate_adcc46b88b644d79ebb1392657b331fced73f09c27b14afe25486f7aa2688a00 extends Twig_Template
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
            'body' => array($this, 'block_body'),
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
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <div id=\"wrapper\">

            <!--SLIDE-IN ICONS-->
            <div class=\"user-icon\"></div>
            <div class=\"pass-icon\"></div>
            <!--END SLIDE-IN ICONS-->

            <!--LOGIN FORM-->
            <form name=\"login-form\" class=\"login-form\" action=\"\" method=\"POST\">

                <!--HEADER-->
                <div class=\"header\">
                    <!--TITLE--><img src=";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/AccueilTemplate/images/suivilogo.png"), "html", null, true);
        echo ">
                    <!--END TITLE-->
                    <!--DESCRIPTION--><span></span><!--END DESCRIPTION-->
                </div>
                <!--END HEADER-->

                <!--CONTENT-->
                <div class=\"content\" align=\"center\">
                    <!--USERNAME--><input name=\"login\" type=\"text\" class=\"input username\" value=\"\"  required /><!--END USERNAME-->
                    <!--PASSWORD--><input name=\"password\" type=\"password\" class=\"input password\" value=\"\"  required /><!--END PASSWORD-->
                </div>
                <!--END CONTENT-->

                <!--FOOTER-->
                <div class=\"footer\">
                    <!--LOGIN BUTTON--><center><input type=\"submit\" name=\"submit\" value=\"Valider\" class=\"button\"   /></center><!--END LOGIN BUTTON-->

                </div>
                <!--END FOOTER-->

            </form>
            <!--END LOGIN FORM-->

        </div>
";
    }

    public function getTemplateName()
    {
        return "::layout/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 16,  39 => 4,  36 => 3,  11 => 1,);
    }
}
