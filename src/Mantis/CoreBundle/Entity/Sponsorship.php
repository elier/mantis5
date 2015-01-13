<?php

namespace Mantis\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MantisSponsorshipTable
 *
 * @ORM\Table(name="mantis_sponsorship_table", indexes={@ORM\Index(name="idx_sponsorship_bug_id", columns={"bug_id"}), @ORM\Index(name="idx_sponsorship_user_id", columns={"user_id"})})
 * @ORM\Entity
 */
class Sponsorship
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="bug_id", type="integer", nullable=false)
     */
    private $bugId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false)
     */
    private $userId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="amount", type="integer", nullable=false)
     */
    private $amount = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="logo", type="string", length=128, nullable=false)
     */
    private $logo = '';

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=128, nullable=false)
     */
    private $url = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="paid", type="boolean", nullable=false)
     */
    private $paid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="date_submitted", type="integer", nullable=false)
     */
    private $dateSubmitted = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="last_updated", type="integer", nullable=false)
     */
    private $lastUpdated = '1';



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
     * Set bugId
     *
     * @param integer $bugId
     * @return Sponsorship
     */
    public function setBugId($bugId)
    {
        $this->bugId = $bugId;

        return $this;
    }

    /**
     * Get bugId
     *
     * @return integer 
     */
    public function getBugId()
    {
        return $this->bugId;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     * @return Sponsorship
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
     * Set amount
     *
     * @param integer $amount
     * @return Sponsorship
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get amount
     *
     * @return integer 
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set logo
     *
     * @param string $logo
     * @return Sponsorship
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;

        return $this;
    }

    /**
     * Get logo
     *
     * @return string 
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * Set url
     *
     * @param string $url
     * @return Sponsorship
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set paid
     *
     * @param boolean $paid
     * @return Sponsorship
     */
    public function setPaid($paid)
    {
        $this->paid = $paid;

        return $this;
    }

    /**
     * Get paid
     *
     * @return boolean 
     */
    public function getPaid()
    {
        return $this->paid;
    }

    /**
     * Set dateSubmitted
     *
     * @param integer $dateSubmitted
     * @return Sponsorship
     */
    public function setDateSubmitted($dateSubmitted)
    {
        $this->dateSubmitted = $dateSubmitted;

        return $this;
    }

    /**
     * Get dateSubmitted
     *
     * @return integer 
     */
    public function getDateSubmitted()
    {
        return $this->dateSubmitted;
    }

    /**
     * Set lastUpdated
     *
     * @param integer $lastUpdated
     * @return Sponsorship
     */
    public function setLastUpdated($lastUpdated)
    {
        $this->lastUpdated = $lastUpdated;

        return $this;
    }

    /**
     * Get lastUpdated
     *
     * @return integer 
     */
    public function getLastUpdated()
    {
        return $this->lastUpdated;
    }
}
