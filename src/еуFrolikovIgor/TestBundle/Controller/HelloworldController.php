<?php

namespace еуFrolikovIgor\TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HelloworldController extends Controller
{


    public function indexAction($name = '')
    {
        return $this->render('еуFrolikovIgorTestBundle:Default:Helloworld.html.twig', array("name" => $name));
    }

}
