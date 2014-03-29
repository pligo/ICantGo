<?php

/* ::base.html.twig */
class __TwigTemplate_17a60526c1f3b232728bc99befb0240408a293e01fb5cf96b855fdd0751f1a15 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
";
        // line 3
        echo "<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo " </title>
        

";
        // line 9
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "13fc40b_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_13fc40b_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/13fc40b_bootstrap_1.css");
            // line 10
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
";
        } else {
            // asset "13fc40b"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_13fc40b") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/13fc40b.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
";
        }
        unset($context["asset_url"]);
        // line 12
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <nav class=\"navbar navbar-inverse\" role=\"navigation\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                    <span class=\"sr-only\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                 <a class=\"navbar-brand\" href=\"#\"><img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/icannotgo.png"), "html", null, true);
        echo "\" /></a>
            </div>

      
            
                 ";
        // line 27
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 28
            echo " 
                <ul class=\"nav navbar-nav navbar-right\">
                   
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><span class=\"glyphicon glyphicon-user\"></span> ";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username")), "FOSUserBundle"), "html", null, true);
            echo "  <b class=\"caret\"></b></a>
                        <ul class=\"dropdown-menu\">
                            
                            <li><a href=\"";
            // line 35
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
            echo "\">Profil</a></li>
                            <li><a href=\"";
            // line 36
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\">Register</a></li>
                            
                            
                            <li class=\"divider\"></li>
                            <li><a href=\"";
            // line 40
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\"><span class=\"glyphicon glyphicon-off\"></span> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></li>
                        </ul>
                    </li>
                </ul>
                 ";
        } else {
            // line 45
            echo "                 <ul class=\"nav navbar-nav navbar-right\">

               <li> <a  href=\"";
            // line 47
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\">Se connecter</a></li>
               <li> <a  href=\"";
            // line 48
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">S'inscrire</a> </li>
                
                </ul>
                    ";
        }
        // line 52
        echo "            </div><!-- /.navbar-collapse -->
        </nav>
        <div>
        ";
        // line 55
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "all", array(), "method"));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 56
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 57
                echo "                <div class=\"flash-";
                echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
                echo "\">
                    ";
                // line 58
                echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
                echo "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "        </div>
        <div class=\"row\">
        <div class=\"col-md-2\">
  
        <ul class=\"nav nav-pills nav-stacked\">
            <li ><a href=\"";
        // line 67
        echo $this->env->getExtension('routing')->getPath("advert");
        echo "\">Annonces</a></li>
            <li ><a href=\"";
        // line 68
        echo $this->env->getExtension('routing')->getPath("concert");
        echo "\">Concerts</a></li>
            <li ><a href=\"";
        // line 69
        echo $this->env->getExtension('routing')->getPath("stage");
        echo "\">Salles de concert</a></li>

        </ul>
      </div>
        <div class=\"col-md-10\">
            <div class=\"col-md-11\">
            ";
        // line 75
        $this->displayBlock('body', $context, $blocks);
        // line 79
        echo "            </div>
         </div>
        </div>
        

        ";
        // line 84
        $this->displayBlock('javascripts', $context, $blocks);
        // line 89
        echo "    </body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 75
    public function block_body($context, array $blocks = array())
    {
        // line 76
        echo "            ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 78
        echo "            ";
    }

    // line 76
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 77
        echo "            ";
    }

    // line 84
    public function block_javascripts($context, array $blocks = array())
    {
        // line 85
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/tinymce/tinymce.min.js"), "html", null, true);
        echo "\"></script>
       ";
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
        return array (  237 => 87,  233 => 86,  228 => 85,  225 => 84,  221 => 77,  218 => 76,  214 => 78,  211 => 76,  208 => 75,  202 => 6,  196 => 89,  194 => 84,  187 => 79,  185 => 75,  176 => 69,  172 => 68,  168 => 67,  161 => 62,  155 => 61,  146 => 58,  141 => 57,  136 => 56,  132 => 55,  127 => 52,  120 => 48,  116 => 47,  112 => 45,  102 => 40,  95 => 36,  91 => 35,  85 => 32,  79 => 28,  77 => 27,  69 => 22,  55 => 12,  41 => 10,  37 => 9,  31 => 6,  26 => 3,  23 => 1,);
    }
}
