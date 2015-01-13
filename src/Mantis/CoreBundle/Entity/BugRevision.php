<?php

namespace Mantis\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MantisBugRevisionTable
 *
 * @ORM\Table(name="mantis_bug_revision_table", indexes={@ORM\Index(name="idx_bug_rev_type", columns={"type"}), @ORM\Index(name="idx_bug_rev_id_time", columns={"bug_id", "timestamp"})})
 * @ORM\Entity
 */
class BugRevision
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
    private $bugId;

    /**
     * @var integer
     *
     * @ORM\Column(name="bugnote_id", type="integer", nullable=false)
     */
    private $bugnoteId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false)
     */
    private $userId;

    /**
     * @var integer
     *
     * @ORM\Column(name="type", type="integer", nullable=false)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="value", type="text", nullable=false)
     */
    private $value;

    /**
     * @var integer
     *
     * @ORM\Column(name="timestamp", type="integer", nullable=false)
     */
    private $timestamp = '1';



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
     * @return BugRevision
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
     * Set bugnoteId
     *
     * @param integer $bugnoteId
     * @return BugRevision
     */
    public function setBugnoteId($bugnoteId)
    {
        $this->bugnoteId = $bugnoteId;

        return $this;
    }

    /**
     * Get bugnoteId
     *
     * @return integer 
     */
    public function getBugnoteId()
    {
        return $this->bugnoteId;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     * @return BugRevision
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
     * Set type
     *
     * @param integer $type
     * @return BugRevision
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return integer 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set value
     *
     * @param string $value
     * @return BugRevision
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value
     *
     * @return string 
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set timestamp
     *
     * @param integer $timestamp
     * @return BugRevision
     */
    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;

        return $this;
    }

    /**
     * Get timestamp
     *
     * @return integer 
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }
}
