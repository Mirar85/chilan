<?php

namespace de\chilan\WebsiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Benutzerrechte
 *
 * @ORM\Table(name="benutzerrechte")
 * @ORM\Entity
 */
class Benutzerrechte
{
    /**
     * @var integer
     *
     * @ORM\Column(name="BenutzerrechteID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $benutzerrechteid;

    /**
     * @var integer
     *
     * @ORM\Column(name="GruppenRID", type="integer", nullable=false)
     */
    private $gruppenrid;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_dataRID", type="integer", nullable=false)
     */
    private $userDatarid;



    /**
     * Get benutzerrechteid
     *
     * @return integer
     */
    public function getBenutzerrechteid()
    {
        return $this->benutzerrechteid;
    }

    /**
     * Set gruppenrid
     *
     * @param integer $gruppenrid
     *
     * @return Benutzerrechte
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
     * Set userDatarid
     *
     * @param integer $userDatarid
     *
     * @return Benutzerrechte
     */
    public function setUserDatarid($userDatarid)
    {
        $this->userDatarid = $userDatarid;

        return $this;
    }

    /**
     * Get userDatarid
     *
     * @return integer
     */
    public function getUserDatarid()
    {
        return $this->userDatarid;
    }
}
