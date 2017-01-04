<?php

namespace de\chilan\WebsiteBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class MainController
 * The Main controller that should be extended by each other controller that give some main functionality
 * @package de\chilan\WebsiteBundle\Controller
 */
class MainController extends Controller
{
    private $data = array();

    public function setOutputData($index,$value)
    {
        $this->data[$index] = $value;
    }

    public function getOutputDataArray()
    {
        return $this->data;
    }
    /**
     * @Route("/", name="mainpage")
     */
    public function indexAction(Request $request)
    {
        $this->setOutputData('base_dir',realpath($this->getParameter('kernel.root_dir').'/..'));
        return $this->render('@Website/Main/index.html.twig', $this->getOutputDataArray());
    }
}
