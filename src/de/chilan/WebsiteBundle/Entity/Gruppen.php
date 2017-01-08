<?php

namespace de\chilan\WebsiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Gruppen
 *
 * @ORM\Table(name="gruppen")
 * @ORM\Entity
 */
class Gruppen
{
    /**
     * @var integer
     *
     * @ORM\Column(name="GruppenID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $gruppenid;

    /**
     * @var string
     *
     * @ORM\Column(name="Gruppenname", type="string", length=32, nullable=false)
     */
    private $gruppenname;



    /**
     * Get gruppenid
     *
     * @return integer
     */
    public function getGruppenid()
    {
        return $this->gruppenid;
    }

    /**
     * Set gruppenname
     *
     * @param string $gruppenname
     *
     * @return Gruppen
     */
    public function setGruppenname($gruppenname)
    {
        $this->gruppenname = $gruppenname;

        return $this;
    }

    /**
     * Get gruppenname
     *
     * @return string
     */
    public function getGruppenname()
    {
        return $this->gruppenname;
    }
}
