<?php

namespace de\chilan\WebsiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * News
 *
 * @ORM\Table(name="news", indexes={@ORM\Index(name="Autor", columns={"Autor", "Kategorie"})})
 * @ORM\Entity
 */
class News
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="Language", type="string", length=3)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $language = 'de';

    /**
     * @var string
     *
     * @ORM\Column(name="Titel", type="string", length=64, nullable=false)
     */
    private $titel;

    /**
     * @var string
     *
     * @ORM\Column(name="Text", type="text", length=65535, nullable=false)
     */
    private $text;

    /**
     * @var string
     *
     * @ORM\Column(name="Titel_en", type="string", length=64, nullable=true)
     */
    private $titelEn;

    /**
     * @var string
     *
     * @ORM\Column(name="Text_en", type="text", length=65535, nullable=true)
     */
    private $textEn;

    /**
     * @var integer
     *
     * @ORM\Column(name="Autor", type="integer", nullable=false)
     */
    private $autor;

    /**
     * @var integer
     *
     * @ORM\Column(name="Kategorie", type="integer", nullable=false)
     */
    private $kategorie;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Eintragdatum", type="datetime", nullable=false)
     */
    private $eintragdatum;



    /**
     * Set id
     *
     * @param integer $id
     *
     * @return News
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set language
     *
     * @param string $language
     *
     * @return News
     */
    public function setLanguage($language)
    {
        $this->language = $language;

        return $this;
    }

    /**
     * Get language
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Set titel
     *
     * @param string $titel
     *
     * @return News
     */
    public function setTitel($titel)
    {
        $this->titel = $titel;

        return $this;
    }

    /**
     * Get titel
     *
     * @return string
     */
    public function getTitel()
    {
        return $this->titel;
    }

    /**
     * Set text
     *
     * @param string $text
     *
     * @return News
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get text
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set titelEn
     *
     * @param string $titelEn
     *
     * @return News
     */
    public function setTitelEn($titelEn)
    {
        $this->titelEn = $titelEn;

        return $this;
    }

    /**
     * Get titelEn
     *
     * @return string
     */
    public function getTitelEn()
    {
        return $this->titelEn;
    }

    /**
     * Set textEn
     *
     * @param string $textEn
     *
     * @return News
     */
    public function setTextEn($textEn)
    {
        $this->textEn = $textEn;

        return $this;
    }

    /**
     * Get textEn
     *
     * @return string
     */
    public function getTextEn()
    {
        return $this->textEn;
    }

    /**
     * Set autor
     *
     * @param integer $autor
     *
     * @return News
     */
    public function setAutor($autor)
    {
        $this->autor = $autor;

        return $this;
    }

    /**
     * Get autor
     *
     * @return integer
     */
    public function getAutor()
    {
        return $this->autor;
    }

    /**
     * Set kategorie
     *
     * @param integer $kategorie
     *
     * @return News
     */
    public function setKategorie($kategorie)
    {
        $this->kategorie = $kategorie;

        return $this;
    }

    /**
     * Get kategorie
     *
     * @return integer
     */
    public function getKategorie()
    {
        return $this->kategorie;
    }

    /**
     * Set eintragdatum
     *
     * @param \DateTime $eintragdatum
     *
     * @return News
     */
    public function setEintragdatum($eintragdatum)
    {
        $this->eintragdatum = $eintragdatum;

        return $this;
    }

    /**
     * Get eintragdatum
     *
     * @return \DateTime
     */
    public function getEintragdatum()
    {
        return $this->eintragdatum;
    }
}
