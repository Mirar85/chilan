<?php
/**
 * Created by PhpStorm.
 * User: wohlers
 * Date: 26.01.17
 * Time: 20:17
 */

namespace de\chilan\WebsiteBundle\Controller\Blog;

use de\chilan\WebsiteBundle\Controller\MainController;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * Class GalleryController
 * @package de\chilan\WebsiteBundle\Controller\News
 */
class NewsController extends MainController
{
    /**
     * @Route("/", name="_news_index")
     */
    public function indexAction(Request $request)
    {
        $session = $request->getSession();

        return $this->render('@Website/News/index.html.twig', $this->getOutputDataArray());
    }
}