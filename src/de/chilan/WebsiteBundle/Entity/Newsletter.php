<?php

namespace de\chilan\WebsiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Newsletter
 *
 * @ORM\Table(name="newsletter")
 * @ORM\Entity
 */
class Newsletter
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NewsletterID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $newsletterid;

    /**
     * @var string
     *
     * @ORM\Column(name="Newslettertitel", type="text", length=65535, nullable=false)
     */
    private $newslettertitel;

    /**
     * @var string
     *
     * @ORM\Column(name="Newslettertext", type="text", length=65535, nullable=false)
     */
    private $newslettertext;



    /**
     * Get newsletterid
     *
     * @return integer
     */
    public function getNewsletterid()
    {
        return $this->newsletterid;
    }

    /**
     * Set newslettertitel
     *
     * @param string $newslettertitel
     *
     * @return Newsletter
     */
    public function setNewslettertitel($newslettertitel)
    {
        $this->newslettertitel = $newslettertitel;

        return $this;
    }

    /**
     * Get newslettertitel
     *
     * @return string
     */
    public function getNewslettertitel()
    {
        return $this->newslettertitel;
    }

    /**
     * Set newslettertext
     *
     * @param string $newslettertext
     *
     * @return Newsletter
     */
    public function setNewslettertext($newslettertext)
    {
        $this->newslettertext = $newslettertext;

        return $this;
    }

    /**
     * Get newslettertext
     *
     * @return string
     */
    public function getNewslettertext()
    {
        return $this->newslettertext;
    }
}
