<?php

namespace de\chilan\WebsiteBundle\Controller;

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

    public function getTranslationFrom($text)
    {
        return $this->get('translator')->trans($text);
    }
}
