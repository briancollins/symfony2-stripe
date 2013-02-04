<?php

namespace Acme\TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\DependencyInjection\ContainerAware;
use Symfony\Component\Security\Core\SecurityContext;
use Stripe\Stripe;

class DefaultController extends Controller
{
    public function indexAction()
    {
        //Set ApiKey in my function Action:
        Stripe::setApiKey('pk_test_ur0ebwOGBrsNzQrpdCNENIu4');
        return $this->render('AcmeTestBundle:Default:index.html.twig');
    }
}
