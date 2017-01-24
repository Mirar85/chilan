<?php

namespace de\chilan\WebsiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bilder
 *
 * @ORM\Table(name="bilder")
 * @ORM\Entity
 */
class Bilder
{
    /**
     * @var integer
     *
     * @ORM\Column(name="BildID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $bildid;

    /**
     * @var string
     *
     * @ORM\Column(name="Bildname", type="string", length=128, nullable=false)
     */
    private $bildname;

    /**
     * @var string
     *
     * @ORM\Column(name="Bildtyp", type="string", length=4, nullable=false)
     */
    private $bildtyp;

    /**
     * @var integer
     *
     * @ORM\Column(name="AnzahlBewertungen", type="integer", nullable=false)
     */
    private $anzahlbewertungen;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="LetzteBewertung", type="datetime", nullable=false)
     */
    private $letztebewertung;

    /**
     * @var integer
     *
     * @ORM\Column(name="Bewertung", type="integer", nullable=false)
     */
    private $bewertung;

    /**
     * @var string
     *
     * @ORM\Column(name="Bildtext", type="string", length=128, nullable=false)
     */
    private $bildtext;

    /**
     * @var string
     *
     * @ORM\Column(name="Bildpfad", type="string", length=256, nullable=false)
     */
    private $bildpfad;

    /**
     * @var integer
     *
     * @ORM\Column(name="AnzahlBetrachtet", type="integer", nullable=false)
     */
    private $anzahlbetrachtet;

    /**
     * @var integer
     *
     * @ORM\Column(name="AlbenRID", type="integer", nullable=false)
     */
    private $albenrid;

    /**
     * @ORM\ManyToOne(targetEntity="Alben", inversedBy="alben")
     * @ORM\JoinColumn(name="albenrid", referencedColumnName="id")
     */
    private $album;



    /**
     * Get bildid
     *
     * @return integer
     */
    public function getBildid()
    {
        return $this->bildid;
    }

    /**
     * Set bildname
     *
     * @param string $bildname
     *
     * @return Bilder
     */
    public function setBildname($bildname)
    {
        $this->bildname = $bildname;

        return $this;
    }

    /**
     * Get bildname
     *
     * @return string
     */
    public function getBildname()
    {
        return $this->bildname;
    }

    /**
     * Set bildtyp
     *
     * @param string $bildtyp
     *
     * @return Bilder
     */
    public function setBildtyp($bildtyp)
    {
        $this->bildtyp = $bildtyp;

        return $this;
    }

    /**
     * Get bildtyp
     *
     * @return string
     */
    public function getBildtyp()
    {
        return $this->bildtyp;
    }

    /**
     * Set anzahlbewertungen
     *
     * @param integer $anzahlbewertungen
     *
     * @return Bilder
     */
    public function setAnzahlbewertungen($anzahlbewertungen)
    {
        $this->anzahlbewertungen = $anzahlbewertungen;

        return $this;
    }

    /**
     * Get anzahlbewertungen
     *
     * @return integer
     */
    public function getAnzahlbewertungen()
    {
        return $this->anzahlbewertungen;
    }

    /**
     * Set letztebewertung
     *
     * @param \DateTime $letztebewertung
     *
     * @return Bilder
     */
    public function setLetztebewertung($letztebewertung)
    {
        $this->letztebewertung = $letztebewertung;

        return $this;
    }

    /**
     * Get letztebewertung
     *
     * @return \DateTime
     */
    public function getLetztebewertung()
    {
        return $this->letztebewertung;
    }

    /**
     * Set bewertung
     *
     * @param integer $bewertung
     *
     * @return Bilder
     */
    public function setBewertung($bewertung)
    {
        $this->bewertung = $bewertung;

        return $this;
    }

    /**
     * Get bewertung
     *
     * @return integer
     */
    public function getBewertung()
    {
        return $this->bewertung;
    }

    /**
     * Set bildtext
     *
     * @param string $bildtext
     *
     * @return Bilder
     */
    public function setBildtext($bildtext)
    {
        $this->bildtext = $bildtext;

        return $this;
    }

    /**
     * Get bildtext
     *
     * @return string
     */
    public function getBildtext()
    {
        return $this->bildtext;
    }

    /**
     * Set bildpfad
     *
     * @param string $bildpfad
     *
     * @return Bilder
     */
    public function setBildpfad($bildpfad)
    {
        $this->bildpfad = $bildpfad;

        return $this;
    }

    /**
     * Get bildpfad
     *
     * @return string
     */
    public function getBildpfad()
    {
        return $this->bildpfad;
    }

    /**
     * Set anzahlbetrachtet
     *
     * @param integer $anzahlbetrachtet
     *
     * @return Bilder
     */
    public function setAnzahlbetrachtet($anzahlbetrachtet)
    {
        $this->anzahlbetrachtet = $anzahlbetrachtet;

        return $this;
    }

    /**
     * Get anzahlbetrachtet
     *
     * @return integer
     */
    public function getAnzahlbetrachtet()
    {
        return $this->anzahlbetrachtet;
    }

    /**
     * Set albenrid
     *
     * @param integer $albenrid
     *
     * @return Bilder
     */
    public function setAlbenrid($albenrid)
    {
        $this->albenrid = $albenrid;

        return $this;
    }

    /**
     * Get albenrid
     *
     * @return integer
     */
    public function getAlbenrid()
    {
        return $this->albenrid;
    }
    /**
     * @var \de\chilan\WebsiteBundle\Entity\Alben
     */
    private $alben;


    /**
     * Set alben
     *
     * @param \de\chilan\WebsiteBundle\Entity\Alben $alben
     *
     * @return Bilder
     */
    public function setAlben(\de\chilan\WebsiteBundle\Entity\Alben $alben = null)
    {
        $this->alben = $alben;

        return $this;
    }

    /**
     * Get alben
     *
     * @return \de\chilan\WebsiteBundle\Entity\Alben
     */
    public function getAlben()
    {
        return $this->alben;
    }
}
