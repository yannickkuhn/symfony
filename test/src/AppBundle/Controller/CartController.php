<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class CartController extends Controller
{
    /**
     * @Route("/panier", name="cart_show")
     */
    public function showAction()
    {
        return $this->render('cart/show.html.twig');
    }

    /**
     * @Route("/livraison", name="cart_shipping")
     */
    public function shippingAction()
    {
        return $this->render('cart/shipping.html.twig');
    }

    /**
     * @Route("/validation", name="cart_validation")
     */
    public function validationAction()
    {
        return $this->render('cart/validation.html.twig');
    }
}
