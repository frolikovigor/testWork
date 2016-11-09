<?php

namespace еуFrolikovIgor\TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\BrowserKit\Request;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('еуFrolikovIgorTestBundle:Default:index.html.twig');
    }


    public function selectAction()
    {
        return $this->render('еуFrolikovIgorTestBundle:Default:index.html.twig');
    }

}
