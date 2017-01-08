<?php

namespace de\chilan\WebsiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ordnerrechte
 *
 * @ORM\Table(name="ordnerrechte")
 * @ORM\Entity
 */
class Ordnerrechte
{
    /**
     * @var integer
     *
     * @ORM\Column(name="OrdnerrechteID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $ordnerrechteid;

    /**
     * @var integer
     *
     * @ORM\Column(name="GruppenRID", type="integer", nullable=false)
     */
    private $gruppenrid;

    /**
     * @var integer
     *
     * @ORM\Column(name="OrdnerRID", type="integer", nullable=false)
     */
    private $ordnerrid;



    /**
     * Get ordnerrechteid
     *
     * @return integer
     */
    public function getOrdnerrechteid()
    {
        return $this->ordnerrechteid;
    }

    /**
     * Set gruppenrid
     *
     * @param integer $gruppenrid
     *
     * @return Ordnerrechte
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
     * Set ordnerrid
     *
     * @param integer $ordnerrid
     *
     * @return Ordnerrechte
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
}
