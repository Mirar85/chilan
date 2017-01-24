<?php
/**
 * Created by PhpStorm.
 * User: wohlers
 * Date: 22.01.17
 * Time: 11:17
 */

namespace de\chilan\WebsiteBundle\Controller\Gallery;

use de\chilan\WebsiteBundle\Controller\MainController;
use de\chilan\WebsiteBundle\Entity\Alben;
use de\chilan\WebsiteBundle\Entity\Bilder;
use de\chilan\WebsiteBundle\Entity\Ordner;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * Class GalleryController
 * @package de\chilan\WebsiteBundle\Controller\Gallery
 */
class GalleryController extends MainController
{
    /**
     * @Route("/index.html", name="_gallery_index")
     */
    public function indexAction(Request $request)
    {
        $folder = $this->getDoctrine()
            ->getRepository(Ordner::class)
            ->findBy(['ordnersid' => 0]);

        if (!$folder) {
            throw $this->createNotFoundException(
                $this->getTranslationFrom('Can\'t find index folder')
            );
        }

        $alben = $this->getDoctrine()
            ->getRepository(Alben::class)
            ->findBy(['ordnerrid' => 0]);

        $this->setOutputData('folders',$folder);
        $this->setOutputData('alben',$alben);
        return $this->render('@Website/Gallery/Gallery/index.html.twig', $this->getOutputDataArray());
    }

    /**
     * @Route("/ordner/{folder}/index.html", defaults={"folder":"0"}, name="_gallery_overview")
     * @Route("/operation,1,ordner,{folder}/index.html", defaults={"folder":"0"}, name="_gallery_overview_old")
     */
    public function folderAction(Request $request,Ordner $folder)
    {
        if (!$folder) {
            throw $this->createNotFoundException(
                $this->getTranslationFrom('Can\'t find folder with the id ').$folder->getOrdnerid()
            );
        }
        $folders = $this->getDoctrine()
            ->getRepository(Ordner::class)
            ->findBy(['ordnersid' => $folder->getOrdnerid()]);

        $alben = $this->getDoctrine()
            ->getRepository(Alben::class)
            ->findBy(['ordnerrid' => $folder->getOrdnerid()]);

        $this->setOutputData('folders',$folders);
        $this->setOutputData('alben',$alben);

        return $this->render('@Website/Gallery/Gallery/folder.html.twig', $this->getOutputDataArray());
    }

    /**
     * @Route("/album/{album}/index.html", defaults={"album":"0"}, name="_album_overview")
     * @Route("/operation,2,album,{album}/index.html", defaults={"album":"0"}, name="_album_overview_old")
     */
    public function albumAction(Request $request,Alben $album)
    {
        $this->setOutputData('pictures',$album->getBilder());
        return $this->render('@Website/Gallery/Gallery/show.html.twig', $this->getOutputDataArray());
    }

    /**
     * @Route("/album/{picture}/index.html", defaults={"picture":"0"}, name="_picture_overview")
     * @Route("/operation,3,bild,{picture}/index.html", defaults={"picture":"0"}, name="_picture_overview_old")
     */
    public function pictureAction(Request $request,$picture)
    {
        $this->setOutputData('base_dir',realpath($this->getParameter('kernel.root_dir').'/..'));
        return $this->render('@Website/Main/index.html.twig', $this->getOutputDataArray());
    }
}