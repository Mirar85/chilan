<?php

namespace de\chilan\WebsiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bewerten
 *
 * @ORM\Table(name="bewerten")
 * @ORM\Entity
 */
class Bewerten
{
    /**
     * @var string
     *
     * @ORM\Column(name="ip_adress", type="string", length=20)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $ipAdress;

    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $status;

    /**
     * @var integer
     *
     * @ORM\Column(name="BildRID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $bildrid;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="zeit", type="datetime", nullable=false)
     */
    private $zeit;



    /**
     * Set ipAdress
     *
     * @param string $ipAdress
     *
     * @return Bewerten
     */
    public function setIpAdress($ipAdress)
    {
        $this->ipAdress = $ipAdress;

        return $this;
    }

    /**
     * Get ipAdress
     *
     * @return string
     */
    public function getIpAdress()
    {
        return $this->ipAdress;
    }

    /**
     * Set status
     *
     * @param integer $status
     *
     * @return Bewerten
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return integer
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set bildrid
     *
     * @param integer $bildrid
     *
     * @return Bewerten
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
     * Set zeit
     *
     * @param \DateTime $zeit
     *
     * @return Bewerten
     */
    public function setZeit($zeit)
    {
        $this->zeit = $zeit;

        return $this;
    }

    /**
     * Get zeit
     *
     * @return \DateTime
     */
    public function getZeit()
    {
        return $this->zeit;
    }
}
