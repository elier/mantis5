<?php

namespace Mantis\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MantisBugTagTable
 *
 * @ORM\Table(name="mantis_bug_tag_table", indexes={@ORM\Index(name="idx_bug_tag_tag_id", columns={"tag_id"})})
 * @ORM\Entity
 */
class BugTag
{
    /**
     * @var integer
     *
     * @ORM\Column(name="bug_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $bugId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="tag_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $tagId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false)
     */
    private $userId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="date_attached", type="integer", nullable=false)
     */
    private $dateAttached = '1';



    /**
     * Set bugId
     *
     * @param integer $bugId
     * @return BugTag
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
     * Set tagId
     *
     * @param integer $tagId
     * @return BugTag
     */
    public function setTagId($tagId)
    {
        $this->tagId = $tagId;

        return $this;
    }

    /**
     * Get tagId
     *
     * @return integer 
     */
    public function getTagId()
    {
        return $this->tagId;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     * @return BugTag
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
     * Set dateAttached
     *
     * @param integer $dateAttached
     * @return BugTag
     */
    public function setDateAttached($dateAttached)
    {
        $this->dateAttached = $dateAttached;

        return $this;
    }

    /**
     * Get dateAttached
     *
     * @return integer 
     */
    public function getDateAttached()
    {
        return $this->dateAttached;
    }
}
