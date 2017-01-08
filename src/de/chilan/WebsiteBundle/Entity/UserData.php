<?php

namespace de\chilan\WebsiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserData
 *
 * @ORM\Table(name="user_data")
 * @ORM\Entity
 */
class UserData
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
     * @ORM\Column(name="NamenID", type="integer", nullable=false)
     */
    private $namenid;

    /**
     * @var string
     *
     * @ORM\Column(name="EMail", type="string", length=64, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="Sprache", type="string", length=4, nullable=false)
     */
    private $sprache = 'de';

    /**
     * @var string
     *
     * @ORM\Column(name="Passwort", type="string", length=32, nullable=false)
     */
    private $passwort;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="RegDatum", type="datetime", nullable=false)
     */
    private $regdatum;

    /**
     * @var string
     *
     * @ORM\Column(name="Rechte", type="string", length=37, nullable=false)
     */
    private $rechte = '0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0';

    /**
     * @var integer
     *
     * @ORM\Column(name="Inaktiv_bit", type="integer", nullable=false)
     */
    private $inaktivBit = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="Newsletter", type="integer", nullable=false)
     */
    private $newsletter = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="EChanges", type="integer", nullable=false)
     */
    private $echanges = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="NChanges", type="boolean", nullable=false)
     */
    private $nchanges = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="Mailsend", type="boolean", nullable=false)
     */
    private $mailsend = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="login_time", type="datetime", nullable=false)
     */
    private $loginTime;

    /**
     * @var string
     *
     * @ORM\Column(name="secure_key", type="string", length=32, nullable=false)
     */
    private $secureKey = 'no';

    /**
     * @var string
     *
     * @ORM\Column(name="ip_adress", type="string", length=20, nullable=false)
     */
    private $ipAdress = '0.0.0.0';



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
     * Set namenid
     *
     * @param integer $namenid
     *
     * @return UserData
     */
    public function setNamenid($namenid)
    {
        $this->namenid = $namenid;

        return $this;
    }

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
     * Set email
     *
     * @param string $email
     *
     * @return UserData
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

    /**
     * Set sprache
     *
     * @param string $sprache
     *
     * @return UserData
     */
    public function setSprache($sprache)
    {
        $this->sprache = $sprache;

        return $this;
    }

    /**
     * Get sprache
     *
     * @return string
     */
    public function getSprache()
    {
        return $this->sprache;
    }

    /**
     * Set passwort
     *
     * @param string $passwort
     *
     * @return UserData
     */
    public function setPasswort($passwort)
    {
        $this->passwort = $passwort;

        return $this;
    }

    /**
     * Get passwort
     *
     * @return string
     */
    public function getPasswort()
    {
        return $this->passwort;
    }

    /**
     * Set regdatum
     *
     * @param \DateTime $regdatum
     *
     * @return UserData
     */
    public function setRegdatum($regdatum)
    {
        $this->regdatum = $regdatum;

        return $this;
    }

    /**
     * Get regdatum
     *
     * @return \DateTime
     */
    public function getRegdatum()
    {
        return $this->regdatum;
    }

    /**
     * Set rechte
     *
     * @param string $rechte
     *
     * @return UserData
     */
    public function setRechte($rechte)
    {
        $this->rechte = $rechte;

        return $this;
    }

    /**
     * Get rechte
     *
     * @return string
     */
    public function getRechte()
    {
        return $this->rechte;
    }

    /**
     * Set inaktivBit
     *
     * @param integer $inaktivBit
     *
     * @return UserData
     */
    public function setInaktivBit($inaktivBit)
    {
        $this->inaktivBit = $inaktivBit;

        return $this;
    }

    /**
     * Get inaktivBit
     *
     * @return integer
     */
    public function getInaktivBit()
    {
        return $this->inaktivBit;
    }

    /**
     * Set newsletter
     *
     * @param integer $newsletter
     *
     * @return UserData
     */
    public function setNewsletter($newsletter)
    {
        $this->newsletter = $newsletter;

        return $this;
    }

    /**
     * Get newsletter
     *
     * @return integer
     */
    public function getNewsletter()
    {
        return $this->newsletter;
    }

    /**
     * Set echanges
     *
     * @param integer $echanges
     *
     * @return UserData
     */
    public function setEchanges($echanges)
    {
        $this->echanges = $echanges;

        return $this;
    }

    /**
     * Get echanges
     *
     * @return integer
     */
    public function getEchanges()
    {
        return $this->echanges;
    }

    /**
     * Set nchanges
     *
     * @param boolean $nchanges
     *
     * @return UserData
     */
    public function setNchanges($nchanges)
    {
        $this->nchanges = $nchanges;

        return $this;
    }

    /**
     * Get nchanges
     *
     * @return boolean
     */
    public function getNchanges()
    {
        return $this->nchanges;
    }

    /**
     * Set mailsend
     *
     * @param boolean $mailsend
     *
     * @return UserData
     */
    public function setMailsend($mailsend)
    {
        $this->mailsend = $mailsend;

        return $this;
    }

    /**
     * Get mailsend
     *
     * @return boolean
     */
    public function getMailsend()
    {
        return $this->mailsend;
    }

    /**
     * Set loginTime
     *
     * @param \DateTime $loginTime
     *
     * @return UserData
     */
    public function setLoginTime($loginTime)
    {
        $this->loginTime = $loginTime;

        return $this;
    }

    /**
     * Get loginTime
     *
     * @return \DateTime
     */
    public function getLoginTime()
    {
        return $this->loginTime;
    }

    /**
     * Set secureKey
     *
     * @param string $secureKey
     *
     * @return UserData
     */
    public function setSecureKey($secureKey)
    {
        $this->secureKey = $secureKey;

        return $this;
    }

    /**
     * Get secureKey
     *
     * @return string
     */
    public function getSecureKey()
    {
        return $this->secureKey;
    }

    /**
     * Set ipAdress
     *
     * @param string $ipAdress
     *
     * @return UserData
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
}
