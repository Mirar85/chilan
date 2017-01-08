<?php

namespace de\chilan\WebsiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Abstand
 *
 * @ORM\Table(name="Abstand")
 * @ORM\Entity
 */
class Abstand
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Bildschirm1", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $bildschirm1;

    /**
     * @var integer
     *
     * @ORM\Column(name="Bildschirm2", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $bildschirm2;

    /**
     * @var integer
     *
     * @ORM\Column(name="Abstand", type="integer", nullable=false)
     */
    private $abstand;



    /**
     * Set bildschirm1
     *
     * @param integer $bildschirm1
     *
     * @return Abstand
     */
    public function setBildschirm1($bildschirm1)
    {
        $this->bildschirm1 = $bildschirm1;

        return $this;
    }

    /**
     * Get bildschirm1
     *
     * @return integer
     */
    public function getBildschirm1()
    {
        return $this->bildschirm1;
    }

    /**
     * Set bildschirm2
     *
     * @param integer $bildschirm2
     *
     * @return Abstand
     */
    public function setBildschirm2($bildschirm2)
    {
        $this->bildschirm2 = $bildschirm2;

        return $this;
    }

    /**
     * Get bildschirm2
     *
     * @return integer
     */
    public function getBildschirm2()
    {
        return $this->bildschirm2;
    }

    /**
     * Set abstand
     *
     * @param integer $abstand
     *
     * @return Abstand
     */
    public function setAbstand($abstand)
    {
        $this->abstand = $abstand;

        return $this;
    }

    /**
     * Get abstand
     *
     * @return integer
     */
    public function getAbstand()
    {
        return $this->abstand;
    }
}
