<?php

namespace de\chilan\WebsiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NewsKommentare
 *
 * @ORM\Table(name="news_kommentare")
 * @ORM\Entity
 */
class NewsKommentare
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
     * @ORM\Column(name="News_id", type="integer", nullable=false)
     */
    private $newsId;

    /**
     * @var integer
     *
     * @ORM\Column(name="User_id", type="integer", nullable=false)
     */
    private $userId;

    /**
     * @var string
     *
     * @ORM\Column(name="IP", type="string", length=15, nullable=false)
     */
    private $ip;

    /**
     * @var string
     *
     * @ORM\Column(name="Text", type="text", length=65535, nullable=false)
     */
    private $text;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Eintragdatum", type="datetime", nullable=false)
     */
    private $eintragdatum;



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
     * Set newsId
     *
     * @param integer $newsId
     *
     * @return NewsKommentare
     */
    public function setNewsId($newsId)
    {
        $this->newsId = $newsId;

        return $this;
    }

    /**
     * Get newsId
     *
     * @return integer
     */
    public function getNewsId()
    {
        return $this->newsId;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     *
     * @return NewsKommentare
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return integer
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set ip
     *
     * @param string $ip
     *
     * @return NewsKommentare
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
     * Set text
     *
     * @param string $text
     *
     * @return NewsKommentare
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get text
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set eintragdatum
     *
     * @param \DateTime $eintragdatum
     *
     * @return NewsKommentare
     */
    public function setEintragdatum($eintragdatum)
    {
        $this->eintragdatum = $eintragdatum;

        return $this;
    }

    /**
     * Get eintragdatum
     *
     * @return \DateTime
     */
    public function getEintragdatum()
    {
        return $this->eintragdatum;
    }
}
