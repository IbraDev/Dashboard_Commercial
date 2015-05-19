<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_3820847bd9b68a57f84c9a9887780b61f33f97e0de50f2b61576dc8639a7dd7f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("FOSUserBundle::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 6
        echo "      <div id=\"wrapper\">

            <!--SLIDE-IN ICONS-->
            <div class=\"user-icon\"></div>
            <div class=\"pass-icon\"></div>
";
        // line 11
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 12
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 14
        echo "
<form action=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\" class=\"login-form\" method=\"post\">
     <div class=\"header\">
                    <!--TITLE--><img src=";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/AccueilTemplate/images/suivilogo.png"), "html", null, true);
        echo ">
                    <!--END TITLE-->
                    <!--DESCRIPTION--><span></span><!--END DESCRIPTION-->
                </div>
                    <div class=\"content\" align=\"center\">
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

    
    <input type=\"text\" id=\"username\" name=\"_username\" class=\"input username\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" /></br>

  
    <input type=\"password\" id=\"password\" name=\"_password\" class=\"input password\" required=\"required\" />
 </div>
    
     <div class=\"footer\">
    <input type=\"submit\" id=\"_submit\" name=\"_submit\" class=\"button\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
     </div>
</form>
      </div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 32,  76 => 25,  70 => 22,  62 => 17,  57 => 15,  54 => 14,  48 => 12,  46 => 11,  39 => 6,  36 => 5,  11 => 1,);
    }
}
