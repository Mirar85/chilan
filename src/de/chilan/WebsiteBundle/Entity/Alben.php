<?php

namespace de\chilan\WebsiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Alben
 *
 * @ORM\Table(name="alben")
 * @ORM\Entity
 */
class Alben
{
    /**
     * @var integer
     *
     * @ORM\Column(name="AlbenID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $albenid;

    /**
     * @var string
     *
     * @ORM\Column(name="Albenbeschreibung", type="text", length=65535, nullable=false)
     */
    private $albenbeschreibung;

    /**
     * @var string
     *
     * @ORM\Column(name="Albenname", type="string", length=64, nullable=false)
     */
    private $albenname;

    /**
     * @var integer
     *
     * @ORM\Column(name="Bilderanzahl", type="integer", nullable=false)
     */
    private $bilderanzahl;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Albendatum", type="datetime", nullable=false)
     */
    private $albendatum;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Albenvondatum", type="date", nullable=true)
     */
    private $albenvondatum;

    /**
     * @var integer
     *
     * @ORM\Column(name="OrdnerRID", type="integer", nullable=false)
     */
    private $ordnerrid;

    /**
     * @var integer
     *
     * @ORM\Column(name="Albenzugriff", type="integer", nullable=false)
     */
    private $albenzugriff;

    /**
     * @var integer
     *
     * @ORM\Column(name="VorschaubildRID", type="integer", nullable=false)
     */
    private $vorschaubildrid;



    /**
     * Get albenid
     *
     * @return integer
     */
    public function getAlbenid()
    {
        return $this->albenid;
    }

    /**
     * Set albenbeschreibung
     *
     * @param string $albenbeschreibung
     *
     * @return Alben
     */
    public function setAlbenbeschreibung($albenbeschreibung)
    {
        $this->albenbeschreibung = $albenbeschreibung;

        return $this;
    }

    /**
     * Get albenbeschreibung
     *
     * @return string
     */
    public function getAlbenbeschreibung()
    {
        return $this->albenbeschreibung;
    }

    /**
     * Set albenname
     *
     * @param string $albenname
     *
     * @return Alben
     */
    public function setAlbenname($albenname)
    {
        $this->albenname = $albenname;

        return $this;
    }

    /**
     * Get albenname
     *
     * @return string
     */
    public function getAlbenname()
    {
        return $this->albenname;
    }

    /**
     * Set bilderanzahl
     *
     * @param integer $bilderanzahl
     *
     * @return Alben
     */
    public function setBilderanzahl($bilderanzahl)
    {
        $this->bilderanzahl = $bilderanzahl;

        return $this;
    }

    /**
     * Get bilderanzahl
     *
     * @return integer
     */
    public function getBilderanzahl()
    {
        return $this->bilderanzahl;
    }

    /**
     * Set albendatum
     *
     * @param \DateTime $albendatum
     *
     * @return Alben
     */
    public function setAlbendatum($albendatum)
    {
        $this->albendatum = $albendatum;

        return $this;
    }

    /**
     * Get albendatum
     *
     * @return \DateTime
     */
    public function getAlbendatum()
    {
        return $this->albendatum;
    }

    /**
     * Set albenvondatum
     *
     * @param \DateTime $albenvondatum
     *
     * @return Alben
     */
    public function setAlbenvondatum($albenvondatum)
    {
        $this->albenvondatum = $albenvondatum;

        return $this;
    }

    /**
     * Get albenvondatum
     *
     * @return \DateTime
     */
    public function getAlbenvondatum()
    {
        return $this->albenvondatum;
    }

    /**
     * Set ordnerrid
     *
     * @param integer $ordnerrid
     *
     * @return Alben
     */
    public function setOrdnerrid($ordnerrid)
    {
        $this->ordnerrid = $ordnerrid;

        return $this;
    }

    /**
     * Get ordnerrid
     *
     * @return integer
     */
    public function getOrdnerrid()
    {
        return $this->ordnerrid;
    }

    /**
     * Set albenzugriff
     *
     * @param integer $albenzugriff
     *
     * @return Alben
     */
    public function setAlbenzugriff($albenzugriff)
    {
        $this->albenzugriff = $albenzugriff;

        return $this;
    }

    /**
     * Get albenzugriff
     *
     * @return integer
     */
    public function getAlbenzugriff()
    {
        return $this->albenzugriff;
    }

    /**
     * Set vorschaubildrid
     *
     * @param integer $vorschaubildrid
     *
     * @return Alben
     */
    public function setVorschaubildrid($vorschaubildrid)
    {
        $this->vorschaubildrid = $vorschaubildrid;

        return $this;
    }

    /**
     * Get vorschaubildrid
     *
     * @return integer
     */
    public function getVorschaubildrid()
    {
        return $this->vorschaubildrid;
    }
}
