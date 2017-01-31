<?php
/**
 * Created by PhpStorm.
 * User: wohlers
 * Date: 22.01.17
 * Time: 11:17
 */

namespace de\chilan\WebsiteBundle\Controller\Gallery;

use de\chilan\WebsiteBundle\Controller\MainController;
use de\chilan\WebsiteBundle\Entity\Bilder;
use de\chilan\WebsiteBundle\Entity\Bilderkommentar;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * Class GalleryController
 * @package de\chilan\WebsiteBundle\Controller\Gallery
 */
class PictureController extends MainController
{
    /**
     * @Route("/{picture}", name="_picture_resource")
     */
    public function pictureResourceAction(Request $request,Bilder $picture)
    {
        $session = $request->getSession();

        $loadPicture = $this->get('kernel')->getRootDir().'/../documents/'.$picture->getBildpfad().$picture->getBildname();
        $error_picture = __DIR__.'/../../Resources/public/gfx/errorbild.gif';
        $response = new BinaryFileResponse($loadPicture);
        $response->headers->set('Content-Type', 'image/png');

        return $response;//$this->render('@Website/Gallery/Gallery/index.html.twig', $this->getOutputDataArray());
    }

    /**
     * @Route("/full/{picture}", name="_picture_index")
     */
    public function indexAction(Request $request,Bilder $picture)
    {
        $comments = $this->getDoctrine()
            ->getRepository(Bilderkommentar::class)
            ->findBy(['bildrid' => $picture->getBildid()]);
        $this->setOutputData('picture',$picture);
        $this->setOutputData('comments',$comments);

        return $this->render('@Website/Gallery/Picture/index.html.twig', $this->getOutputDataArray());
    }
}
/*
require_once("config/config.php");
require_once("class/class.php");

# Nachfolgende Funktion ist für die Ausgabe eventueller Fehler als Bild zuständig
function error_message($text = '')
{
    $img = imagecreatetruecolor(strlen($text) * 7, 20); // Erstellt ein neues Bild
    imagefill($img, 0, 0, imagecolorallocate($img, 255, 255, 255)); // Malt das bild weiß aus
    imagestring($img, 2, 0, 0, $text, imagecolorallocate($img, 0, 0, 0)); // Schreibt den Text der der Funktion übergeben wurde auf das Bild
    imagepng($img); // Gibt das Bild aus
    imagedestroy($img); // Löscht das Bild aus dem Arbeitsspeicher des Servers
}
function wasserzeichen($img)
{
    global $_pfad;
    $wasserzeichen = ImageCreateFromGIF("gfx/chilan_wasserzeichen_klein.gif");
    //Bearbeitung
    ImageCopyMerge($img, $wasserzeichen,
        imagesx($img)-imagesx($wasserzeichen)-10,
        imagesy($img)-imagesy($wasserzeichen)-10, 0, 0,
        imagesx($wasserzeichen),
        imagesy($wasserzeichen),25);

    return $img;
}
function getpicture()
{
    $wasserzeichen = $_GET[wasserzeichen];
    $img_src = $_GET['src']; // Pfad zum Bild aus welchem das Thumbnail erstellt werden soll
    $cache_dir = './cache'; // Pfad zum Cache Verzeichnis wo später die Bilder gespeichert werden
    $cache = true; // Gibt an ob die Bilder aus dem Cache geladen werden sollen
    # Überprüft ob ein Bildpfad übergeben wurde
    if (!isset($_GET['src']))
    {
        error_message('Es wurde kein Bildpfad übergeben aus dem ein Thumbnail ezeugt werden könnte'); // Gibt eine Fehlermeldung aus
    }
    # Auslesen der Bildgröße und des Bildtyps
    $image_infos = @getimagesize($img_src) or error_message('Auf das Bild kann nicht zugegriffen werden');
    $width = $image_infos[0];
    $height = $image_infos[1];
    $type = $image_infos[2];
    $mime = $image_infos['mime'];
    # Berechnung der Maße des Thumbnails
    if (isset($_GET['p']) && !isset($_GET['w']) && !isset($_GET['h'])){ // Überprüfen ob die Bildgröße proportional berechnet werden soll
        if($width < $height) { // Überprüfen ob das Bild Hoch- oder Querformat ist
            $new_width  = ceil(($_GET['p'] / $height) * $width);
            $new_height = intval($_GET['p']); // Zuweisen der neuen Höhe
        }
        else
        {
            $new_height = ceil(($_GET['p'] / $width) * $height);
            $new_width = intval($_GET['p']); // Zuweisen der neuen Breite

        }
    }
    else if (isset($_GET['w']) && !isset($_GET['h']) && !isset($_GET['p'])){ // Überprüfen ob die Breite oder die Höhe berechnent werden soll
        $new_width = intval($_GET['w']); // Zuweisen der neuen Breite
        $new_height = ceil($height * $new_width / $width); // Berechnen der neuen Höhe
    }
    else if (isset($_GET['h']) && !isset($_GET['w']) && !isset($_GET['p'])){ // Überprüfen ob die Breite oder die Höhe berechnent werden soll
        $new_height = intval($_GET['h']); // Zuweisen der neuen Höhe
        $new_width = ceil($width * $new_height / $height); // Berechnen der neuen Breite
    }
    else if (isset($_GET['h']) && isset($_GET['w']) && isset($_GET['p'])){
        $new_height = intval($_GET['h']); // Zuweisen der neuen Höhe
        $new_width = intval($_GET['w']); // Zuweisen der neuen Breite
    }
    else
    {
        error_message('Es muss entweder die neu Höhe oder die neu Breite angegeben werden.'); // Fehlermeldung ausgeben
    }
    # Prüft ob das Chache Verzeichnis existiert bzw. benötigt wird und legt dieses eventuell an
    if ($cache === true && !file_exists($cache_dir))
    {
        mkdir($cache_dir) or error_message('Das Cache Verzeichnis konnte nicht angelegt werden'); // Legt das Cache Verzeichnis an. Sollte dies nicht möglich sein, so wird ein Fehler ausgegeben
        chmod($cache_dir, 0777); // Gibt dem Cache Verzeichniss die nötigen Schreib- und Lese Rechte
    }
    # Ermitteln des Bildtypes und Erstellung des Thumbnails
    switch ($type){
        case 1:
            header('Content-type: '.$mime); // Header ausgeben
            if (imagetypes() & IMG_GIF){ // Überprüfen ob das Bildformat untestützt wird
                if (!file_exists($cache_dir.'/'.md5($img_src.$_GET[bildid].$_GET[p]).'.gif')){ // Wenn das Thumbnail nicht existiert wird es erstellt
                    $orginal = imagecreatefromgif($img_src) or error_message('Das Bild wurde nicht gefunden'); // Bild aus dem Orginalbild erstellen
                    $thumb = imagecreatetruecolor($new_width, $new_height); // Das Thumbnailbild erstellen
                    imagecopyresampled($thumb, $orginal, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
                    if ($wasserzeichen == true) $thumb = wasserzeichen($thumb);
                    if ($cache === true){ // Prüft ob das Bild gespeichert werden soll
                        imagegif($thumb, $cache_dir.'/'.md5($img_src.$_GET[bildid].$_GET[p]).'.gif') or error_message('Das Bild konnte nicht gespeichert werden'); // Bild speichern
                    }
                    imagegif($thumb); // Bild ausgeben
                }
                else
                {
                    readfile($cache_dir.'/'.md5($img_src.$_GET[bildid].$_GET[p]).'.gif') or error_message('Das Bild wurde nicht gefunden'); // Bild ausgeben
                }
            }
            else
            {
                error_message('GIF Bilder werden nicht unterstützt'); // Fehlermeldung ausgeben, wenn das Bildformat nicht unterstützt wird
            }
            break;
        case 2:
            header('Content-type: '.$mime); // Header ausgeben
            if (imagetypes() & IMG_JPG){ // Überprüfen ob das Bildformat untestützt wird
                if (!file_exists($cache_dir.'/'.md5($img_src.$_GET[bildid].$_GET[p]).'.jpg')){ // Wenn das Thumbnail nicht existiert wird es erstellt
                    $orginal = imagecreatefromjpeg($img_src) or error_message('Das Bild wurde nicht gefunden'); // Bild aus dem Orginabild erstellen
                    $thumb = imagecreatetruecolor($new_width, $new_height); // Das Thumbnailbild erstellen
                    imagecopyresampled($thumb, $orginal, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
                    if ($wasserzeichen == true) $thumb = wasserzeichen($thumb);
                    if ($cache === true){ // Prüft ob das Bild gespeichert werden soll
                        imagejpeg($thumb, $cache_dir.'/'.md5($img_src.$_GET[bildid].$_GET[p]).'.jpg') or error_message('Das Bild konnte nicht gespeichert werden'); // Bild speichern
                    }
                    imagejpeg($thumb); // Bild ausgeben
                }
                else
                {
                    readfile($cache_dir.'/'.md5($img_src.$_GET[bildid].$_GET[p]).'.jpg') or error_message('Das Bild wurde nicht gefunden'); // Bild ausgeben
                }
            } else
            {
                error_message('JPEG Bilder werden nicht unterstützt'); // Fehlermeldung ausgeben, wenn das Bildformat nicht unterstützt wird
            }
            break;
        case 3:
            header('Content-type: '.$mime); // Header ausgeben
            if (imagetypes() & IMG_PNG){ // Überprüfen ob das Bildformat untestützt wird
                if (!file_exists($cache_dir.'/'.md5($img_src.$_GET[bildid].$_GET[p]).'.png')){ // Wenn das Thumbnail nicht existiert wird es erstellt
                    $orginal = imageCreateFromPNG($img_src) or error_message('Das Bild wurde nicht gefunden'); // Bild aus dem Orginalbild erstellen
                    $thumb = imagecreatetruecolor($new_width, $new_height); // Das Thumbnailbild erstellen
                    imagecopyresampled($thumb, $orginal, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
                    if ($wasserzeichen == true) $thumb = wasserzeichen($thumb);
                    if ($cache === true){ // Prüft ob das Bild gespeichert werden soll
                        imagepng($thumb, $cache_dir.'/'.md5($img_src.$_GET[bildid].$_GET[p]).'.png') or error_message('Das Bild konnte nicht gespeichert werden'); // Bild speichern
                    }
                    imagepng($thumb); // Bild ausgeben
                }
                else
                {
                    readfile($cache_dir.'/'.md5($img_src.$_GET[bildid].$_GET[p]).'.png') or error_message('Das Bild konnte nicht gespeichert werden'); // Bild ausgeben
                }
            }
            else
            {
                error_message('PNG Bilder werden nicht unterstützt'); // Fehlermeldung ausgeben, wenn das Bildformat nicht unterstützt wird
            }
            break;
        default:
            error_message('Das Bildformat wird nicht unterstützt'); // Fehlermeldung ausgeben, wenn das Bildformat nicht unterstützt wird
    }
    if (isset($thumb))
    {
        imagedestroy($thumb);
    }
}
if ((isset($_GET[bildid])) && (is_numeric($_GET[bildid])))
{
    $sql = new mysql();
    $bild = $sql->select("SELECT * FROM alben JOIN bilder ON alben.AlbenID = bilder.AlbenRID WHERE BildID = '$_GET[bildid]'",$existbild);
    unset($sql);

    if ($existbild > 0)
    {
        if($bild[0]->Albenzugriff == 0)
        {
            $_GET[src] = $bild[0]->Bildpfad.$bild[0]->Bildname;
            $_GET[p] = 100;
            if ($_GET[detail] == 1) {$_GET[p] = 560; $_GET[wasserzeichen] = true;}
            if ($_GET[detail] == 2)
            {
                $image_infos = @getimagesize($_GET[src]);
                $width = $image_infos[0];
                $height = $image_infos[1];

                if ($width > $height)
                {
                    $_GET[p] = $width;
                }
                else
                {
                    $_GET[p] = $height;
                }
                $_GET[wasserzeichen] = true;
                getpicture();
                // $fp = fopen("$_GET[src]","r");
                // $fp = wasserzeichen($fp);
                // header("Content-Type: image/png");
                // imagejpeg(fpassthru($fp),"",100);
            }
            else
            {
                getpicture();
            }
        }
        else
        {
            if ($_SESSION[status] === true)
            {
                if ($_SESSION[galerie_control] === true)
                {
                    $_GET[src] = $bild[0]->Bildpfad.$bild[0]->Bildname;
                    $_GET[p] = 100;
                    if ($_GET[detail] == 1) {$_GET[p] = 560; $_GET[wasserzeichen] = true;}
                    if ($_GET[detail] == 2)
                    {
                        $image_infos = @getimagesize($_GET[src]);
                        $width = $image_infos[0];
                        $height = $image_infos[1];

                        if ($width > $height)
                        {
                            $_GET[p] = $width;
                        }
                        else
                        {
                            $_GET[p] = $height;
                        }
                        $_GET[wasserzeichen] = true;
                        getpicture();
                        // $fp = fopen("$_GET[src]","r");
                        // $fp = wasserzeichen($fp);
                        // header("Content-Type: image/png");
                        // imagejpeg(fpassthru($fp),"",100);
                    }
                    else
                    {
                        getpicture();
                    }
                }
                else
                {
                    $sql = new  mysql();
                    $rights = $sql->select("SELECT * FROM  user_data JOIN benutzerrechte On benutzerrechte.user_dataRID = user_data.ID JOIN gruppen ON gruppen.GruppenID = benutzerrechte.GruppenRID WHERE user_data.ID = '$_SESSION[id]'",$rightsanzahl);

                    for ($x=0;$x<$rightsanzahl;$x++)
                    {
                        $userrechte[$x] = $rights[$x]->GruppenID;
                    }

                    $albenextrarechte = $sql->select("SELECT * FROM albenrechte WHERE AlbenRID = '".$bild[0]->AlbenID."'",$rightsanzahl);
                    $diesesalbumzugriff = false;
                    for ($x=0;$x<$rightsanzahl;$x++)
                    {
                        for ($y=0;$y<count($userrechte);$y++)
                        {
                            if ($albenextrarechte[$x]->GruppenRID == $userrechte[$y])
                            {
                                $diesesalbumzugriff = true;
                                break;
                            }
                        }
                    }
                    unset($sql);

                    if ($diesesalbumzugriff === true)
                    {
                        $_GET[src] = $bild[0]->Bildpfad.$bild[0]->Bildname;
                        $_GET[p] = 100;
                        if ($_GET[detail] == 1) {$_GET[p] = 560; $_GET[wasserzeichen] = true;}
                        if ($_GET[detail] == 2)
                        {
                            $image_infos = @getimagesize($_GET[src]);
                            $width = $image_infos[0];
                            $height = $image_infos[1];

                            if ($width > $height)
                            {
                                $_GET[p] = $width;
                            }
                            else
                            {
                                $_GET[p] = $height;
                            }
                            $_GET[wasserzeichen] = true;
                            getpicture();
                            // $fp = fopen("$_GET[src]","r");
                            // $fp = wasserzeichen($fp);
                            // header("Content-Type: image/png");
                            // imagejpeg(fpassthru($fp),"",100);
                        }
                        else
                        {
                            getpicture();
                        }
                    }
                    else
                    {
                        $fp = fopen("gfx/errorbild.gif","r");
                        header("Content-Type: image/png");
                        imagejpeg(fpassthru($fp),"",100);
                    }
                }
            }
            else
            {
                $fp = fopen("gfx/errorbild.gif","r");
                header("Content-Type: image/png");
                imagejpeg(fpassthru($fp),"",100);
            }
        }
    }
    else
    {
        $fp = fopen("gfx/errorbild.gif","r");
        header("Content-Type: image/png");
        imagejpeg(fpassthru($fp),"",100);
    }
}
else
{
    if($_SESSION[status] === true)
    {
        if (($_SESSION[galerie_control] === true) && ($_GET[admin] == 1))
        {
            @getpicture();
        }
        else
        {
            $fp = fopen("gfx/errorbild.gif","r");
            header("Content-Type: image/png");
            imagejpeg(fpassthru($fp),"",100);
        }
    }
    else
    {
        $fp = fopen("gfx/errorbild.gif","r");
        header("Content-Type: image/png");
        imagejpeg(fpassthru($fp),"",100);
    }
}

?>