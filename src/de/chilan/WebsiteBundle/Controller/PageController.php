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
class PageController extends MainController
{
    /**
     * @Route("/", name="mainpage")
     */
    public function indexAction(Request $request)
    {
        $this->setOutputData('base_dir',realpath($this->getParameter('kernel.root_dir').'/..'));
        return $this->render('@Website/Page/index.html.twig', $this->getOutputDataArray());
    }

    /**
     * @Route("/login", name="_login")
     */
    public function loginAction(Request $request)
    {
        $this->setOutputData('base_dir',realpath($this->getParameter('kernel.root_dir').'/..'));
        return $this->render('@Website/Page/login.html.twig', $this->getOutputDataArray());
    }
}
