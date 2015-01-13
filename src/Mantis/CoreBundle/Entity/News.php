<?php

namespace Mantis\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MantisNewsTable
 *
 * @ORM\Table(name="mantis_news_table")
 * @ORM\Entity
 */
class News
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
     * @ORM\Column(name="project_id", type="integer", nullable=false)
     */
    private $projectId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="poster_id", type="integer", nullable=false)
     */
    private $posterId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="view_state", type="smallint", nullable=false)
     */
    private $viewState = '10';

    /**
     * @var boolean
     *
     * @ORM\Column(name="announcement", type="boolean", nullable=false)
     */
    private $announcement = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="headline", type="string", length=64, nullable=false)
     */
    private $headline = '';

    /**
     * @var string
     *
     * @ORM\Column(name="body", type="text", nullable=false)
     */
    private $body;

    /**
     * @var integer
     *
     * @ORM\Column(name="last_modified", type="integer", nullable=false)
     */
    private $lastModified = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="date_posted", type="integer", nullable=false)
     */
    private $datePosted = '1';



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
     * Set projectId
     *
     * @param integer $projectId
     * @return News
     */
    public function setProjectId($projectId)
    {
        $this->projectId = $projectId;

        return $this;
    }

    /**
     * Get projectId
     *
     * @return integer 
     */
    public function getProjectId()
    {
        return $this->projectId;
    }

    /**
     * Set posterId
     *
     * @param integer $posterId
     * @return News
     */
    public function setPosterId($posterId)
    {
        $this->posterId = $posterId;

        return $this;
    }

    /**
     * Get posterId
     *
     * @return integer 
     */
    public function getPosterId()
    {
        return $this->posterId;
    }

    /**
     * Set viewState
     *
     * @param integer $viewState
     * @return News
     */
    public function setViewState($viewState)
    {
        $this->viewState = $viewState;

        return $this;
    }

    /**
     * Get viewState
     *
     * @return integer 
     */
    public function getViewState()
    {
        return $this->viewState;
    }

    /**
     * Set announcement
     *
     * @param boolean $announcement
     * @return News
     */
    public function setAnnouncement($announcement)
    {
        $this->announcement = $announcement;

        return $this;
    }

    /**
     * Get announcement
     *
     * @return boolean 
     */
    public function getAnnouncement()
    {
        return $this->announcement;
    }

    /**
     * Set headline
     *
     * @param string $headline
     * @return News
     */
    public function setHeadline($headline)
    {
        $this->headline = $headline;

        return $this;
    }

    /**
     * Get headline
     *
     * @return string 
     */
    public function getHeadline()
    {
        return $this->headline;
    }

    /**
     * Set body
     *
     * @param string $body
     * @return News
     */
    public function setBody($body)
    {
        $this->body = $body;

        return $this;
    }

    /**
     * Get body
     *
     * @return string 
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Set lastModified
     *
     * @param integer $lastModified
     * @return News
     */
    public function setLastModified($lastModified)
    {
        $this->lastModified = $lastModified;

        return $this;
    }

    /**
     * Get lastModified
     *
     * @return integer 
     */
    public function getLastModified()
    {
        return $this->lastModified;
    }

    /**
     * Set datePosted
     *
     * @param integer $datePosted
     * @return News
     */
    public function setDatePosted($datePosted)
    {
        $this->datePosted = $datePosted;

        return $this;
    }

    /**
     * Get datePosted
     *
     * @return integer 
     */
    public function getDatePosted()
    {
        return $this->datePosted;
    }
}
