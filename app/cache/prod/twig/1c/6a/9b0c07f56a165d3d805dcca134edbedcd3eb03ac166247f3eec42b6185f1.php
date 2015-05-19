<?php

/* ::base.html.twig */
class __TwigTemplate_1c6a9b0c07f56a165d3d805dcca134edbedcd3eb03ac166247f3eec42b6185f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
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
        <meta name=\"description\" content=\"website description\" />
        <meta name=\"keywords\" content=\"website keywords, website keywords\" />
        <meta http-equiv=\"content-type\" content=\"text/html; charset=windows-1252\" />

        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/AccueilTemplate/css/style1.css"), "html", null, true);
        echo "\" />
        ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon-32x32"), "html", null, true);
        echo "\" />
        
    </head>
    
        ";
        // line 16
        $this->displayBlock('body', $context, $blocks);
        // line 17
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 18
        echo "   
</html>



";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "SuiviVente";
    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        echo " ";
    }

    // line 17
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 17,  76 => 16,  71 => 11,  65 => 5,  56 => 18,  53 => 17,  51 => 16,  43 => 12,  41 => 11,  37 => 10,  29 => 5,  23 => 1,);
    }
}
