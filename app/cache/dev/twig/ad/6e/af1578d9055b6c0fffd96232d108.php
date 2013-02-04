<?php

/* AcmeTestBundle:Default:index.html.twig */
class __TwigTemplate_ad6eaf1578d9055b6c0fffd96232d108 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeTestBundle::layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeTestBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
<script src=\"https://checkout.stripe.com/v2/checkout.js\"></script>
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.js\"></script>

<a href=\"#\" id=\"testButton\" class=\"symfony-button-green\">Buy Now: \$19.00</a>

 <script>
    \$('#testButton').click(function(){
      var token = function(res){
        console.log('Got token ID:', res.id);
      };

      StripeCheckout.open({
        key:         'pk_test_ur0ebwOGBrsNzQrpdCNENIu4',
        address:     true,
        amount:      1900,
        name:        'Test Button',
        description: 'Test Button',
        panelLabel:  'Checkout',
        token:       token
      });

      return false;
    });
</script>
";
    }

    public function getTemplateName()
    {
        return "AcmeTestBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,);
    }
}
