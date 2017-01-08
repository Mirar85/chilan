<?php

namespace de\chilan\WebsiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PrivateNachrichten
 *
 * @ORM\Table(name="private_nachrichten")
 * @ORM\Entity
 */
class PrivateNachrichten
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NachrichtenID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $nachrichtenid;

    /**
     * @var integer
     *
     * @ORM\Column(name="VersenderRID", type="integer", nullable=false)
     */
    private $versenderrid;

    /**
     * @var integer
     *
     * @ORM\Column(name="EmpfaengerRID", type="integer", nullable=false)
     */
    private $empfaengerrid;

    /**
     * @var string
     *
     * @ORM\Column(name="NBetreff", type="string", length=64, nullable=false)
     */
    private $nbetreff;

    /**
     * @var string
     *
     * @ORM\Column(name="NText", type="text", length=65535, nullable=false)
     */
    private $ntext;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="NDatum", type="datetime", nullable=false)
     */
    private $ndatum;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Gelesen", type="boolean", nullable=false)
     */
    private $gelesen;



    /**
     * Get nachrichtenid
     *
     * @return integer
     */
    public function getNachrichtenid()
    {
        return $this->nachrichtenid;
    }

    /**
     * Set versenderrid
     *
     * @param integer $versenderrid
     *
     * @return PrivateNachrichten
     */
    public function setVersenderrid($versenderrid)
    {
        $this->versenderrid = $versenderrid;

        return $this;
    }

    /**
     * Get versenderrid
     *
     * @return integer
     */
    public function getVersenderrid()
    {
        return $this->versenderrid;
    }

    /**
     * Set empfaengerrid
     *
     * @param integer $empfaengerrid
     *
     * @return PrivateNachrichten
     */
    public function setEmpfaengerrid($empfaengerrid)
    {
        $this->empfaengerrid = $empfaengerrid;

        return $this;
    }

    /**
     * Get empfaengerrid
     *
     * @return integer
     */
    public function getEmpfaengerrid()
    {
        return $this->empfaengerrid;
    }

    /**
     * Set nbetreff
     *
     * @param string $nbetreff
     *
     * @return PrivateNachrichten
     */
    public function setNbetreff($nbetreff)
    {
        $this->nbetreff = $nbetreff;

        return $this;
    }

    /**
     * Get nbetreff
     *
     * @return string
     */
    public function getNbetreff()
    {
        return $this->nbetreff;
    }

    /**
     * Set ntext
     *
     * @param string $ntext
     *
     * @return PrivateNachrichten
     */
    public function setNtext($ntext)
    {
        $this->ntext = $ntext;

        return $this;
    }

    /**
     * Get ntext
     *
     * @return string
     */
    public function getNtext()
    {
        return $this->ntext;
    }

    /**
     * Set ndatum
     *
     * @param \DateTime $ndatum
     *
     * @return PrivateNachrichten
     */
    public function setNdatum($ndatum)
    {
        $this->ndatum = $ndatum;

        return $this;
    }

    /**
     * Get ndatum
     *
     * @return \DateTime
     */
    public function getNdatum()
    {
        return $this->ndatum;
    }

    /**
     * Set gelesen
     *
     * @param boolean $gelesen
     *
     * @return PrivateNachrichten
     */
    public function setGelesen($gelesen)
    {
        $this->gelesen = $gelesen;

        return $this;
    }

    /**
     * Get gelesen
     *
     * @return boolean
     */
    public function getGelesen()
    {
        return $this->gelesen;
    }
}
