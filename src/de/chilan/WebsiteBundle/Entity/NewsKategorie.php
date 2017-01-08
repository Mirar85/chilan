<?php

namespace de\chilan\WebsiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NewsKategorie
 *
 * @ORM\Table(name="news_kategorie")
 * @ORM\Entity
 */
class NewsKategorie
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
     * @ORM\Column(name="Kategorie", type="string", length=64, nullable=false)
     */
    private $kategorie;

    /**
     * @var string
     *
     * @ORM\Column(name="Kategorie_en", type="string", length=32, nullable=false)
     */
    private $kategorieEn;



    /**
     * Set id
     *
     * @param integer $id
     *
     * @return NewsKategorie
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
     * @return NewsKategorie
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
     * Set kategorie
     *
     * @param string $kategorie
     *
     * @return NewsKategorie
     */
    public function setKategorie($kategorie)
    {
        $this->kategorie = $kategorie;

        return $this;
    }

    /**
     * Get kategorie
     *
     * @return string
     */
    public function getKategorie()
    {
        return $this->kategorie;
    }

    /**
     * Set kategorieEn
     *
     * @param string $kategorieEn
     *
     * @return NewsKategorie
     */
    public function setKategorieEn($kategorieEn)
    {
        $this->kategorieEn = $kategorieEn;

        return $this;
    }

    /**
     * Get kategorieEn
     *
     * @return string
     */
    public function getKategorieEn()
    {
        return $this->kategorieEn;
    }
}
