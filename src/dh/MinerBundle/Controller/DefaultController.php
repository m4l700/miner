<?php

namespace dh\MinerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('dhMinerBundle:Default:index.html.twig');
    }
}
