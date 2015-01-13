<?php

namespace Mantis\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MantisBugTable
 *
 * @ORM\Table(name="mantis_bug_table", indexes={@ORM\Index(name="idx_bug_sponsorship_total", columns={"sponsorship_total"}), @ORM\Index(name="idx_bug_fixed_in_version", columns={"fixed_in_version"}), @ORM\Index(name="idx_bug_status", columns={"status"}), @ORM\Index(name="idx_project", columns={"project_id"})})
 * @ORM\Entity
 */
class Bug
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
     * @ORM\Column(name="reporter_id", type="integer", nullable=false)
     */
    private $reporterId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="handler_id", type="integer", nullable=false)
     */
    private $handlerId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="duplicate_id", type="integer", nullable=false)
     */
    private $duplicateId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="priority", type="smallint", nullable=false)
     */
    private $priority = '30';

    /**
     * @var integer
     *
     * @ORM\Column(name="severity", type="smallint", nullable=false)
     */
    private $severity = '50';

    /**
     * @var integer
     *
     * @ORM\Column(name="reproducibility", type="smallint", nullable=false)
     */
    private $reproducibility = '10';

    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="smallint", nullable=false)
     */
    private $status = '10';

    /**
     * @var integer
     *
     * @ORM\Column(name="resolution", type="smallint", nullable=false)
     */
    private $resolution = '10';

    /**
     * @var integer
     *
     * @ORM\Column(name="projection", type="smallint", nullable=false)
     */
    private $projection = '10';

    /**
     * @var integer
     *
     * @ORM\Column(name="eta", type="smallint", nullable=false)
     */
    private $eta = '10';

    /**
     * @var integer
     *
     * @ORM\Column(name="bug_text_id", type="integer", nullable=false)
     */
    private $bugTextId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="os", type="string", length=32, nullable=false)
     */
    private $os = '';

    /**
     * @var string
     *
     * @ORM\Column(name="os_build", type="string", length=32, nullable=false)
     */
    private $osBuild = '';

    /**
     * @var string
     *
     * @ORM\Column(name="platform", type="string", length=32, nullable=false)
     */
    private $platform = '';

    /**
     * @var string
     *
     * @ORM\Column(name="version", type="string", length=64, nullable=false)
     */
    private $version = '';

    /**
     * @var string
     *
     * @ORM\Column(name="fixed_in_version", type="string", length=64, nullable=false)
     */
    private $fixedInVersion = '';

    /**
     * @var string
     *
     * @ORM\Column(name="build", type="string", length=32, nullable=false)
     */
    private $build = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="profile_id", type="integer", nullable=false)
     */
    private $profileId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="view_state", type="smallint", nullable=false)
     */
    private $viewState = '10';

    /**
     * @var string
     *
     * @ORM\Column(name="summary", type="string", length=128, nullable=false)
     */
    private $summary = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="sponsorship_total", type="integer", nullable=false)
     */
    private $sponsorshipTotal = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="sticky", type="boolean", nullable=false)
     */
    private $sticky = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="target_version", type="string", length=64, nullable=false)
     */
    private $targetVersion = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="category_id", type="integer", nullable=false)
     */
    private $categoryId = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="date_submitted", type="integer", nullable=false)
     */
    private $dateSubmitted = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="due_date", type="integer", nullable=false)
     */
    private $dueDate = '1';

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
     * Set projectId
     *
     * @param integer $projectId
     * @return Bug
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
     * Set reporterId
     *
     * @param integer $reporterId
     * @return Bug
     */
    public function setReporterId($reporterId)
    {
        $this->reporterId = $reporterId;

        return $this;
    }

    /**
     * Get reporterId
     *
     * @return integer 
     */
    public function getReporterId()
    {
        return $this->reporterId;
    }

    /**
     * Set handlerId
     *
     * @param integer $handlerId
     * @return Bug
     */
    public function setHandlerId($handlerId)
    {
        $this->handlerId = $handlerId;

        return $this;
    }

    /**
     * Get handlerId
     *
     * @return integer 
     */
    public function getHandlerId()
    {
        return $this->handlerId;
    }

    /**
     * Set duplicateId
     *
     * @param integer $duplicateId
     * @return Bug
     */
    public function setDuplicateId($duplicateId)
    {
        $this->duplicateId = $duplicateId;

        return $this;
    }

    /**
     * Get duplicateId
     *
     * @return integer 
     */
    public function getDuplicateId()
    {
        return $this->duplicateId;
    }

    /**
     * Set priority
     *
     * @param integer $priority
     * @return Bug
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;

        return $this;
    }

    /**
     * Get priority
     *
     * @return integer 
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * Set severity
     *
     * @param integer $severity
     * @return Bug
     */
    public function setSeverity($severity)
    {
        $this->severity = $severity;

        return $this;
    }

    /**
     * Get severity
     *
     * @return integer 
     */
    public function getSeverity()
    {
        return $this->severity;
    }

    /**
     * Set reproducibility
     *
     * @param integer $reproducibility
     * @return Bug
     */
    public function setReproducibility($reproducibility)
    {
        $this->reproducibility = $reproducibility;

        return $this;
    }

    /**
     * Get reproducibility
     *
     * @return integer 
     */
    public function getReproducibility()
    {
        return $this->reproducibility;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return Bug
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return integer 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set resolution
     *
     * @param integer $resolution
     * @return Bug
     */
    public function setResolution($resolution)
    {
        $this->resolution = $resolution;

        return $this;
    }

    /**
     * Get resolution
     *
     * @return integer 
     */
    public function getResolution()
    {
        return $this->resolution;
    }

    /**
     * Set projection
     *
     * @param integer $projection
     * @return Bug
     */
    public function setProjection($projection)
    {
        $this->projection = $projection;

        return $this;
    }

    /**
     * Get projection
     *
     * @return integer 
     */
    public function getProjection()
    {
        return $this->projection;
    }

    /**
     * Set eta
     *
     * @param integer $eta
     * @return Bug
     */
    public function setEta($eta)
    {
        $this->eta = $eta;

        return $this;
    }

    /**
     * Get eta
     *
     * @return integer 
     */
    public function getEta()
    {
        return $this->eta;
    }

    /**
     * Set bugTextId
     *
     * @param integer $bugTextId
     * @return Bug
     */
    public function setBugTextId($bugTextId)
    {
        $this->bugTextId = $bugTextId;

        return $this;
    }

    /**
     * Get bugTextId
     *
     * @return integer 
     */
    public function getBugTextId()
    {
        return $this->bugTextId;
    }

    /**
     * Set os
     *
     * @param string $os
     * @return Bug
     */
    public function setOs($os)
    {
        $this->os = $os;

        return $this;
    }

    /**
     * Get os
     *
     * @return string 
     */
    public function getOs()
    {
        return $this->os;
    }

    /**
     * Set osBuild
     *
     * @param string $osBuild
     * @return Bug
     */
    public function setOsBuild($osBuild)
    {
        $this->osBuild = $osBuild;

        return $this;
    }

    /**
     * Get osBuild
     *
     * @return string 
     */
    public function getOsBuild()
    {
        return $this->osBuild;
    }

    /**
     * Set platform
     *
     * @param string $platform
     * @return Bug
     */
    public function setPlatform($platform)
    {
        $this->platform = $platform;

        return $this;
    }

    /**
     * Get platform
     *
     * @return string 
     */
    public function getPlatform()
    {
        return $this->platform;
    }

    /**
     * Set version
     *
     * @param string $version
     * @return Bug
     */
    public function setVersion($version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * Get version
     *
     * @return string 
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Set fixedInVersion
     *
     * @param string $fixedInVersion
     * @return Bug
     */
    public function setFixedInVersion($fixedInVersion)
    {
        $this->fixedInVersion = $fixedInVersion;

        return $this;
    }

    /**
     * Get fixedInVersion
     *
     * @return string 
     */
    public function getFixedInVersion()
    {
        return $this->fixedInVersion;
    }

    /**
     * Set build
     *
     * @param string $build
     * @return Bug
     */
    public function setBuild($build)
    {
        $this->build = $build;

        return $this;
    }

    /**
     * Get build
     *
     * @return string 
     */
    public function getBuild()
    {
        return $this->build;
    }

    /**
     * Set profileId
     *
     * @param integer $profileId
     * @return Bug
     */
    public function setProfileId($profileId)
    {
        $this->profileId = $profileId;

        return $this;
    }

    /**
     * Get profileId
     *
     * @return integer 
     */
    public function getProfileId()
    {
        return $this->profileId;
    }

    /**
     * Set viewState
     *
     * @param integer $viewState
     * @return Bug
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
     * Set summary
     *
     * @param string $summary
     * @return Bug
     */
    public function setSummary($summary)
    {
        $this->summary = $summary;

        return $this;
    }

    /**
     * Get summary
     *
     * @return string 
     */
    public function getSummary()
    {
        return $this->summary;
    }

    /**
     * Set sponsorshipTotal
     *
     * @param integer $sponsorshipTotal
     * @return Bug
     */
    public function setSponsorshipTotal($sponsorshipTotal)
    {
        $this->sponsorshipTotal = $sponsorshipTotal;

        return $this;
    }

    /**
     * Get sponsorshipTotal
     *
     * @return integer 
     */
    public function getSponsorshipTotal()
    {
        return $this->sponsorshipTotal;
    }

    /**
     * Set sticky
     *
     * @param boolean $sticky
     * @return Bug
     */
    public function setSticky($sticky)
    {
        $this->sticky = $sticky;

        return $this;
    }

    /**
     * Get sticky
     *
     * @return boolean 
     */
    public function getSticky()
    {
        return $this->sticky;
    }

    /**
     * Set targetVersion
     *
     * @param string $targetVersion
     * @return Bug
     */
    public function setTargetVersion($targetVersion)
    {
        $this->targetVersion = $targetVersion;

        return $this;
    }

    /**
     * Get targetVersion
     *
     * @return string 
     */
    public function getTargetVersion()
    {
        return $this->targetVersion;
    }

    /**
     * Set categoryId
     *
     * @param integer $categoryId
     * @return Bug
     */
    public function setCategoryId($categoryId)
    {
        $this->categoryId = $categoryId;

        return $this;
    }

    /**
     * Get categoryId
     *
     * @return integer 
     */
    public function getCategoryId()
    {
        return $this->categoryId;
    }

    /**
     * Set dateSubmitted
     *
     * @param integer $dateSubmitted
     * @return Bug
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
     * Set dueDate
     *
     * @param integer $dueDate
     * @return Bug
     */
    public function setDueDate($dueDate)
    {
        $this->dueDate = $dueDate;

        return $this;
    }

    /**
     * Get dueDate
     *
     * @return integer 
     */
    public function getDueDate()
    {
        return $this->dueDate;
    }

    /**
     * Set lastUpdated
     *
     * @param integer $lastUpdated
     * @return Bug
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
