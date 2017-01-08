<?php

namespace de\chilan\WebsiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CssStyle
 *
 * @ORM\Table(name="css_style")
 * @ORM\Entity
 */
class CssStyle
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="Nummer", type="smallint", nullable=false)
     */
    private $nummer;

    /**
     * @var string
     *
     * @ORM\Column(name="Bezeichnung", type="string", length=32, nullable=false)
     */
    private $bezeichnung;



    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nummer
     *
     * @param integer $nummer
     *
     * @return CssStyle
     */
    public function setNummer($nummer)
    {
        $this->nummer = $nummer;

        return $this;
    }

    /**
     * Get nummer
     *
     * @return integer
     */
    public function getNummer()
    {
        return $this->nummer;
    }

    /**
     * Set bezeichnung
     *
     * @param string $bezeichnung
     *
     * @return CssStyle
     */
    public function setBezeichnung($bezeichnung)
    {
        $this->bezeichnung = $bezeichnung;

        return $this;
    }

    /**
     * Get bezeichnung
     *
     * @return string
     */
    public function getBezeichnung()
    {
        return $this->bezeichnung;
    }
}
