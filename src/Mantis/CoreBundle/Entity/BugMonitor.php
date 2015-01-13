<?php

namespace Mantis\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MantisBugMonitorTable
 *
 * @ORM\Table(name="mantis_bug_monitor_table")
 * @ORM\Entity
 */
class BugMonitor
{
    /**
     * @var integer
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $userId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="bug_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $bugId = '0';



    /**
     * Set userId
     *
     * @param integer $userId
     * @return BugMonitor
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
     * Set bugId
     *
     * @param integer $bugId
     * @return BugMonitor
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
}
