<?php

namespace de\chilan\WebsiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Albenrechte
 *
 * @ORM\Table(name="albenrechte")
 * @ORM\Entity
 */
class Albenrechte
{
    /**
     * @var integer
     *
     * @ORM\Column(name="AlbenrechteID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $albenrechteid;

    /**
     * @var integer
     *
     * @ORM\Column(name="GruppenRID", type="integer", nullable=false)
     */
    private $gruppenrid;

    /**
     * @var integer
     *
     * @ORM\Column(name="AlbenRID", type="integer", nullable=false)
     */
    private $albenrid;



    /**
     * Get albenrechteid
     *
     * @return integer
     */
    public function getAlbenrechteid()
    {
        return $this->albenrechteid;
    }

    /**
     * Set gruppenrid
     *
     * @param integer $gruppenrid
     *
     * @return Albenrechte
     */
    public function setGruppenrid($gruppenrid)
    {
        $this->gruppenrid = $gruppenrid;

        return $this;
    }

    /**
     * Get gruppenrid
     *
     * @return integer
     */
    public function getGruppenrid()
    {
        return $this->gruppenrid;
    }

    /**
     * Set albenrid
     *
     * @param integer $albenrid
     *
     * @return Albenrechte
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
}
