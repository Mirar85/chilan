<?php

namespace de\chilan\WebsiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Online
 *
 * @ORM\Table(name="online")
 * @ORM\Entity
 */
class Online
{
    /**
     * @var string
     *
     * @ORM\Column(name="IP", type="string", length=15)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $ip;

    /**
     * @var string
     *
     * @ORM\Column(name="Session", type="string", length=64)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $session;

    /**
     * @var string
     *
     * @ORM\Column(name="Code", type="string", length=24, nullable=false)
     */
    private $code;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Datum", type="datetime", nullable=false)
     */
    private $datum;

    /**
     * @var string
     *
     * @ORM\Column(name="daten", type="text", length=65535, nullable=false)
     */
    private $daten;



    /**
     * Set ip
     *
     * @param string $ip
     *
     * @return Online
     */
    public function setIp($ip)
    {
        $this->ip = $ip;

        return $this;
    }

    /**
     * Get ip
     *
     * @return string
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * Set session
     *
     * @param string $session
     *
     * @return Online
     */
    public function setSession($session)
    {
        $this->session = $session;

        return $this;
    }

    /**
     * Get session
     *
     * @return string
     */
    public function getSession()
    {
        return $this->session;
    }

    /**
     * Set code
     *
     * @param string $code
     *
     * @return Online
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set datum
     *
     * @param \DateTime $datum
     *
     * @return Online
     */
    public function setDatum($datum)
    {
        $this->datum = $datum;

        return $this;
    }

    /**
     * Get datum
     *
     * @return \DateTime
     */
    public function getDatum()
    {
        return $this->datum;
    }

    /**
     * Set daten
     *
     * @param string $daten
     *
     * @return Online
     */
    public function setDaten($daten)
    {
        $this->daten = $daten;

        return $this;
    }

    /**
     * Get daten
     *
     * @return string
     */
    public function getDaten()
    {
        return $this->daten;
    }
}
