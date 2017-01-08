<?php

namespace de\chilan\WebsiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ordner
 *
 * @ORM\Table(name="ordner")
 * @ORM\Entity
 */
class Ordner
{
    /**
     * @var integer
     *
     * @ORM\Column(name="OrdnerID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $ordnerid;

    /**
     * @var integer
     *
     * @ORM\Column(name="OrdnerSID", type="integer", nullable=false)
     */
    private $ordnersid;

    /**
     * @var string
     *
     * @ORM\Column(name="Ordnername", type="string", length=64, nullable=false)
     */
    private $ordnername;

    /**
     * @var string
     *
     * @ORM\Column(name="Ordnerbeschreibung", type="text", length=65535, nullable=false)
     */
    private $ordnerbeschreibung;

    /**
     * @var integer
     *
     * @ORM\Column(name="Ordnerzugriff", type="integer", nullable=false)
     */
    private $ordnerzugriff;



    /**
     * Get ordnerid
     *
     * @return integer
     */
    public function getOrdnerid()
    {
        return $this->ordnerid;
    }

    /**
     * Set ordnersid
     *
     * @param integer $ordnersid
     *
     * @return Ordner
     */
    public function setOrdnersid($ordnersid)
    {
        $this->ordnersid = $ordnersid;

        return $this;
    }

    /**
     * Get ordnersid
     *
     * @return integer
     */
    public function getOrdnersid()
    {
        return $this->ordnersid;
    }

    /**
     * Set ordnername
     *
     * @param string $ordnername
     *
     * @return Ordner
     */
    public function setOrdnername($ordnername)
    {
        $this->ordnername = $ordnername;

        return $this;
    }

    /**
     * Get ordnername
     *
     * @return string
     */
    public function getOrdnername()
    {
        return $this->ordnername;
    }

    /**
     * Set ordnerbeschreibung
     *
     * @param string $ordnerbeschreibung
     *
     * @return Ordner
     */
    public function setOrdnerbeschreibung($ordnerbeschreibung)
    {
        $this->ordnerbeschreibung = $ordnerbeschreibung;

        return $this;
    }

    /**
     * Get ordnerbeschreibung
     *
     * @return string
     */
    public function getOrdnerbeschreibung()
    {
        return $this->ordnerbeschreibung;
    }

    /**
     * Set ordnerzugriff
     *
     * @param integer $ordnerzugriff
     *
     * @return Ordner
     */
    public function setOrdnerzugriff($ordnerzugriff)
    {
        $this->ordnerzugriff = $ordnerzugriff;

        return $this;
    }

    /**
     * Get ordnerzugriff
     *
     * @return integer
     */
    public function getOrdnerzugriff()
    {
        return $this->ordnerzugriff;
    }
}
