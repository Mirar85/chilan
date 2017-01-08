<?php

namespace de\chilan\WebsiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Position
 *
 * @ORM\Table(name="Position")
 * @ORM\Entity
 */
class Position
{
    /**
     * @var integer
     *
     * @ORM\Column(name="PositionID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $positionid;

    /**
     * @var integer
     *
     * @ORM\Column(name="XPos", type="integer", nullable=false)
     */
    private $xpos;

    /**
     * @var integer
     *
     * @ORM\Column(name="YPos", type="integer", nullable=false)
     */
    private $ypos;

    /**
     * @var integer
     *
     * @ORM\Column(name="Bildschirm", type="integer", nullable=false)
     */
    private $bildschirm;

    /**
     * @var integer
     *
     * @ORM\Column(name="LaufschriftRID", type="integer", nullable=false)
     */
    private $laufschriftrid;



    /**
     * Get positionid
     *
     * @return integer
     */
    public function getPositionid()
    {
        return $this->positionid;
    }

    /**
     * Set xpos
     *
     * @param integer $xpos
     *
     * @return Position
     */
    public function setXpos($xpos)
    {
        $this->xpos = $xpos;

        return $this;
    }

    /**
     * Get xpos
     *
     * @return integer
     */
    public function getXpos()
    {
        return $this->xpos;
    }

    /**
     * Set ypos
     *
     * @param integer $ypos
     *
     * @return Position
     */
    public function setYpos($ypos)
    {
        $this->ypos = $ypos;

        return $this;
    }

    /**
     * Get ypos
     *
     * @return integer
     */
    public function getYpos()
    {
        return $this->ypos;
    }

    /**
     * Set bildschirm
     *
     * @param integer $bildschirm
     *
     * @return Position
     */
    public function setBildschirm($bildschirm)
    {
        $this->bildschirm = $bildschirm;

        return $this;
    }

    /**
     * Get bildschirm
     *
     * @return integer
     */
    public function getBildschirm()
    {
        return $this->bildschirm;
    }

    /**
     * Set laufschriftrid
     *
     * @param integer $laufschriftrid
     *
     * @return Position
     */
    public function setLaufschriftrid($laufschriftrid)
    {
        $this->laufschriftrid = $laufschriftrid;

        return $this;
    }

    /**
     * Get laufschriftrid
     *
     * @return integer
     */
    public function getLaufschriftrid()
    {
        return $this->laufschriftrid;
    }
}
