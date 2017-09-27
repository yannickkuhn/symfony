<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ProductsController extends Controller
{
    /**
     * @Route("/", name="products_list")
     */
    public function listAction()
    {
        return $this->render('products/list.html.twig');
    }

    /**
     * @Route("/produit/{id}", name="products_show")
     */
    public function showAction()
    {
        return $this->render('products/show.html.twig');
    }
}
