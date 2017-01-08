<?php

namespace de\chilan\WebsiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Namensliste
 *
 * @ORM\Table(name="namensliste")
 * @ORM\Entity
 */
class Namensliste
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NamenID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $namenid;

    /**
     * @var string
     *
     * @ORM\Column(name="Vorname", type="string", length=32, nullable=false)
     */
    private $vorname;

    /**
     * @var string
     *
     * @ORM\Column(name="Name", type="string", length=32, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="Website", type="string", length=64, nullable=false)
     */
    private $website;

    /**
     * @var string
     *
     * @ORM\Column(name="EMail", type="string", length=64, nullable=false)
     */
    private $email;



    /**
     * Get namenid
     *
     * @return integer
     */
    public function getNamenid()
    {
        return $this->namenid;
    }

    /**
     * Set vorname
     *
     * @param string $vorname
     *
     * @return Namensliste
     */
    public function setVorname($vorname)
    {
        $this->vorname = $vorname;

        return $this;
    }

    /**
     * Get vorname
     *
     * @return string
     */
    public function getVorname()
    {
        return $this->vorname;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Namensliste
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set website
     *
     * @param string $website
     *
     * @return Namensliste
     */
    public function setWebsite($website)
    {
        $this->website = $website;

        return $this;
    }

    /**
     * Get website
     *
     * @return string
     */
    public function getWebsite()
    {
        return $this->website;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Namensliste
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }
}
