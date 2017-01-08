<?php

namespace de\chilan\WebsiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bilderkommentar
 *
 * @ORM\Table(name="bilderkommentar")
 * @ORM\Entity
 */
class Bilderkommentar
{
    /**
     * @var integer
     *
     * @ORM\Column(name="BildkomID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $bildkomid;

    /**
     * @var string
     *
     * @ORM\Column(name="Bildkomtext", type="text", length=65535, nullable=false)
     */
    private $bildkomtext;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Bildkomdatum", type="datetime", nullable=false)
     */
    private $bildkomdatum;

    /**
     * @var integer
     *
     * @ORM\Column(name="BildRID", type="integer", nullable=false)
     */
    private $bildrid;

    /**
     * @var integer
     *
     * @ORM\Column(name="BenutzerRID", type="integer", nullable=false)
     */
    private $benutzerrid;



    /**
     * Get bildkomid
     *
     * @return integer
     */
    public function getBildkomid()
    {
        return $this->bildkomid;
    }

    /**
     * Set bildkomtext
     *
     * @param string $bildkomtext
     *
     * @return Bilderkommentar
     */
    public function setBildkomtext($bildkomtext)
    {
        $this->bildkomtext = $bildkomtext;

        return $this;
    }

    /**
     * Get bildkomtext
     *
     * @return string
     */
    public function getBildkomtext()
    {
        return $this->bildkomtext;
    }

    /**
     * Set bildkomdatum
     *
     * @param \DateTime $bildkomdatum
     *
     * @return Bilderkommentar
     */
    public function setBildkomdatum($bildkomdatum)
    {
        $this->bildkomdatum = $bildkomdatum;

        return $this;
    }

    /**
     * Get bildkomdatum
     *
     * @return \DateTime
     */
    public function getBildkomdatum()
    {
        return $this->bildkomdatum;
    }

    /**
     * Set bildrid
     *
     * @param integer $bildrid
     *
     * @return Bilderkommentar
     */
    public function setBildrid($bildrid)
    {
        $this->bildrid = $bildrid;

        return $this;
    }

    /**
     * Get bildrid
     *
     * @return integer
     */
    public function getBildrid()
    {
        return $this->bildrid;
    }

    /**
     * Set benutzerrid
     *
     * @param integer $benutzerrid
     *
     * @return Bilderkommentar
     */
    public function setBenutzerrid($benutzerrid)
    {
        $this->benutzerrid = $benutzerrid;

        return $this;
    }

    /**
     * Get benutzerrid
     *
     * @return integer
     */
    public function getBenutzerrid()
    {
        return $this->benutzerrid;
    }
}
