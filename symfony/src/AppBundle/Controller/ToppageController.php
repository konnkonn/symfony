<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ToppageController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(){
        return $this->render('toppage/index.html.twig');

    }
}
