<?php

namespace Mantis\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MantisUserPrefTable
 *
 * @ORM\Table(name="mantis_user_pref_table")
 * @ORM\Entity
 */
class UserPref
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
     * @ORM\Column(name="user_id", type="integer", nullable=false)
     */
    private $userId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="project_id", type="integer", nullable=false)
     */
    private $projectId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="default_profile", type="integer", nullable=false)
     */
    private $defaultProfile = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="default_project", type="integer", nullable=false)
     */
    private $defaultProject = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="refresh_delay", type="integer", nullable=false)
     */
    private $refreshDelay = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="redirect_delay", type="integer", nullable=false)
     */
    private $redirectDelay = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="bugnote_order", type="string", length=4, nullable=false)
     */
    private $bugnoteOrder = 'ASC';

    /**
     * @var boolean
     *
     * @ORM\Column(name="email_on_new", type="boolean", nullable=false)
     */
    private $emailOnNew = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="email_on_assigned", type="boolean", nullable=false)
     */
    private $emailOnAssigned = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="email_on_feedback", type="boolean", nullable=false)
     */
    private $emailOnFeedback = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="email_on_resolved", type="boolean", nullable=false)
     */
    private $emailOnResolved = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="email_on_closed", type="boolean", nullable=false)
     */
    private $emailOnClosed = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="email_on_reopened", type="boolean", nullable=false)
     */
    private $emailOnReopened = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="email_on_bugnote", type="boolean", nullable=false)
     */
    private $emailOnBugnote = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="email_on_status", type="boolean", nullable=false)
     */
    private $emailOnStatus = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="email_on_priority", type="boolean", nullable=false)
     */
    private $emailOnPriority = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="email_on_priority_min_severity", type="smallint", nullable=false)
     */
    private $emailOnPriorityMinSeverity = '10';

    /**
     * @var integer
     *
     * @ORM\Column(name="email_on_status_min_severity", type="smallint", nullable=false)
     */
    private $emailOnStatusMinSeverity = '10';

    /**
     * @var integer
     *
     * @ORM\Column(name="email_on_bugnote_min_severity", type="smallint", nullable=false)
     */
    private $emailOnBugnoteMinSeverity = '10';

    /**
     * @var integer
     *
     * @ORM\Column(name="email_on_reopened_min_severity", type="smallint", nullable=false)
     */
    private $emailOnReopenedMinSeverity = '10';

    /**
     * @var integer
     *
     * @ORM\Column(name="email_on_closed_min_severity", type="smallint", nullable=false)
     */
    private $emailOnClosedMinSeverity = '10';

    /**
     * @var integer
     *
     * @ORM\Column(name="email_on_resolved_min_severity", type="smallint", nullable=false)
     */
    private $emailOnResolvedMinSeverity = '10';

    /**
     * @var integer
     *
     * @ORM\Column(name="email_on_feedback_min_severity", type="smallint", nullable=false)
     */
    private $emailOnFeedbackMinSeverity = '10';

    /**
     * @var integer
     *
     * @ORM\Column(name="email_on_assigned_min_severity", type="smallint", nullable=false)
     */
    private $emailOnAssignedMinSeverity = '10';

    /**
     * @var integer
     *
     * @ORM\Column(name="email_on_new_min_severity", type="smallint", nullable=false)
     */
    private $emailOnNewMinSeverity = '10';

    /**
     * @var integer
     *
     * @ORM\Column(name="email_bugnote_limit", type="smallint", nullable=false)
     */
    private $emailBugnoteLimit = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="language", type="string", length=32, nullable=false)
     */
    private $language = 'english';

    /**
     * @var string
     *
     * @ORM\Column(name="timezone", type="string", length=32, nullable=false)
     */
    private $timezone = '';



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
     * Set userId
     *
     * @param integer $userId
     * @return UserPref
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
     * Set projectId
     *
     * @param integer $projectId
     * @return UserPref
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
     * Set defaultProfile
     *
     * @param integer $defaultProfile
     * @return UserPref
     */
    public function setDefaultProfile($defaultProfile)
    {
        $this->defaultProfile = $defaultProfile;

        return $this;
    }

    /**
     * Get defaultProfile
     *
     * @return integer 
     */
    public function getDefaultProfile()
    {
        return $this->defaultProfile;
    }

    /**
     * Set defaultProject
     *
     * @param integer $defaultProject
     * @return UserPref
     */
    public function setDefaultProject($defaultProject)
    {
        $this->defaultProject = $defaultProject;

        return $this;
    }

    /**
     * Get defaultProject
     *
     * @return integer 
     */
    public function getDefaultProject()
    {
        return $this->defaultProject;
    }

    /**
     * Set refreshDelay
     *
     * @param integer $refreshDelay
     * @return UserPref
     */
    public function setRefreshDelay($refreshDelay)
    {
        $this->refreshDelay = $refreshDelay;

        return $this;
    }

    /**
     * Get refreshDelay
     *
     * @return integer 
     */
    public function getRefreshDelay()
    {
        return $this->refreshDelay;
    }

    /**
     * Set redirectDelay
     *
     * @param integer $redirectDelay
     * @return UserPref
     */
    public function setRedirectDelay($redirectDelay)
    {
        $this->redirectDelay = $redirectDelay;

        return $this;
    }

    /**
     * Get redirectDelay
     *
     * @return integer 
     */
    public function getRedirectDelay()
    {
        return $this->redirectDelay;
    }

    /**
     * Set bugnoteOrder
     *
     * @param string $bugnoteOrder
     * @return UserPref
     */
    public function setBugnoteOrder($bugnoteOrder)
    {
        $this->bugnoteOrder = $bugnoteOrder;

        return $this;
    }

    /**
     * Get bugnoteOrder
     *
     * @return string 
     */
    public function getBugnoteOrder()
    {
        return $this->bugnoteOrder;
    }

    /**
     * Set emailOnNew
     *
     * @param boolean $emailOnNew
     * @return UserPref
     */
    public function setEmailOnNew($emailOnNew)
    {
        $this->emailOnNew = $emailOnNew;

        return $this;
    }

    /**
     * Get emailOnNew
     *
     * @return boolean 
     */
    public function getEmailOnNew()
    {
        return $this->emailOnNew;
    }

    /**
     * Set emailOnAssigned
     *
     * @param boolean $emailOnAssigned
     * @return UserPref
     */
    public function setEmailOnAssigned($emailOnAssigned)
    {
        $this->emailOnAssigned = $emailOnAssigned;

        return $this;
    }

    /**
     * Get emailOnAssigned
     *
     * @return boolean 
     */
    public function getEmailOnAssigned()
    {
        return $this->emailOnAssigned;
    }

    /**
     * Set emailOnFeedback
     *
     * @param boolean $emailOnFeedback
     * @return UserPref
     */
    public function setEmailOnFeedback($emailOnFeedback)
    {
        $this->emailOnFeedback = $emailOnFeedback;

        return $this;
    }

    /**
     * Get emailOnFeedback
     *
     * @return boolean 
     */
    public function getEmailOnFeedback()
    {
        return $this->emailOnFeedback;
    }

    /**
     * Set emailOnResolved
     *
     * @param boolean $emailOnResolved
     * @return UserPref
     */
    public function setEmailOnResolved($emailOnResolved)
    {
        $this->emailOnResolved = $emailOnResolved;

        return $this;
    }

    /**
     * Get emailOnResolved
     *
     * @return boolean 
     */
    public function getEmailOnResolved()
    {
        return $this->emailOnResolved;
    }

    /**
     * Set emailOnClosed
     *
     * @param boolean $emailOnClosed
     * @return UserPref
     */
    public function setEmailOnClosed($emailOnClosed)
    {
        $this->emailOnClosed = $emailOnClosed;

        return $this;
    }

    /**
     * Get emailOnClosed
     *
     * @return boolean 
     */
    public function getEmailOnClosed()
    {
        return $this->emailOnClosed;
    }

    /**
     * Set emailOnReopened
     *
     * @param boolean $emailOnReopened
     * @return UserPref
     */
    public function setEmailOnReopened($emailOnReopened)
    {
        $this->emailOnReopened = $emailOnReopened;

        return $this;
    }

    /**
     * Get emailOnReopened
     *
     * @return boolean 
     */
    public function getEmailOnReopened()
    {
        return $this->emailOnReopened;
    }

    /**
     * Set emailOnBugnote
     *
     * @param boolean $emailOnBugnote
     * @return UserPref
     */
    public function setEmailOnBugnote($emailOnBugnote)
    {
        $this->emailOnBugnote = $emailOnBugnote;

        return $this;
    }

    /**
     * Get emailOnBugnote
     *
     * @return boolean 
     */
    public function getEmailOnBugnote()
    {
        return $this->emailOnBugnote;
    }

    /**
     * Set emailOnStatus
     *
     * @param boolean $emailOnStatus
     * @return UserPref
     */
    public function setEmailOnStatus($emailOnStatus)
    {
        $this->emailOnStatus = $emailOnStatus;

        return $this;
    }

    /**
     * Get emailOnStatus
     *
     * @return boolean 
     */
    public function getEmailOnStatus()
    {
        return $this->emailOnStatus;
    }

    /**
     * Set emailOnPriority
     *
     * @param boolean $emailOnPriority
     * @return UserPref
     */
    public function setEmailOnPriority($emailOnPriority)
    {
        $this->emailOnPriority = $emailOnPriority;

        return $this;
    }

    /**
     * Get emailOnPriority
     *
     * @return boolean 
     */
    public function getEmailOnPriority()
    {
        return $this->emailOnPriority;
    }

    /**
     * Set emailOnPriorityMinSeverity
     *
     * @param integer $emailOnPriorityMinSeverity
     * @return UserPref
     */
    public function setEmailOnPriorityMinSeverity($emailOnPriorityMinSeverity)
    {
        $this->emailOnPriorityMinSeverity = $emailOnPriorityMinSeverity;

        return $this;
    }

    /**
     * Get emailOnPriorityMinSeverity
     *
     * @return integer 
     */
    public function getEmailOnPriorityMinSeverity()
    {
        return $this->emailOnPriorityMinSeverity;
    }

    /**
     * Set emailOnStatusMinSeverity
     *
     * @param integer $emailOnStatusMinSeverity
     * @return UserPref
     */
    public function setEmailOnStatusMinSeverity($emailOnStatusMinSeverity)
    {
        $this->emailOnStatusMinSeverity = $emailOnStatusMinSeverity;

        return $this;
    }

    /**
     * Get emailOnStatusMinSeverity
     *
     * @return integer 
     */
    public function getEmailOnStatusMinSeverity()
    {
        return $this->emailOnStatusMinSeverity;
    }

    /**
     * Set emailOnBugnoteMinSeverity
     *
     * @param integer $emailOnBugnoteMinSeverity
     * @return UserPref
     */
    public function setEmailOnBugnoteMinSeverity($emailOnBugnoteMinSeverity)
    {
        $this->emailOnBugnoteMinSeverity = $emailOnBugnoteMinSeverity;

        return $this;
    }

    /**
     * Get emailOnBugnoteMinSeverity
     *
     * @return integer 
     */
    public function getEmailOnBugnoteMinSeverity()
    {
        return $this->emailOnBugnoteMinSeverity;
    }

    /**
     * Set emailOnReopenedMinSeverity
     *
     * @param integer $emailOnReopenedMinSeverity
     * @return UserPref
     */
    public function setEmailOnReopenedMinSeverity($emailOnReopenedMinSeverity)
    {
        $this->emailOnReopenedMinSeverity = $emailOnReopenedMinSeverity;

        return $this;
    }

    /**
     * Get emailOnReopenedMinSeverity
     *
     * @return integer 
     */
    public function getEmailOnReopenedMinSeverity()
    {
        return $this->emailOnReopenedMinSeverity;
    }

    /**
     * Set emailOnClosedMinSeverity
     *
     * @param integer $emailOnClosedMinSeverity
     * @return UserPref
     */
    public function setEmailOnClosedMinSeverity($emailOnClosedMinSeverity)
    {
        $this->emailOnClosedMinSeverity = $emailOnClosedMinSeverity;

        return $this;
    }

    /**
     * Get emailOnClosedMinSeverity
     *
     * @return integer 
     */
    public function getEmailOnClosedMinSeverity()
    {
        return $this->emailOnClosedMinSeverity;
    }

    /**
     * Set emailOnResolvedMinSeverity
     *
     * @param integer $emailOnResolvedMinSeverity
     * @return UserPref
     */
    public function setEmailOnResolvedMinSeverity($emailOnResolvedMinSeverity)
    {
        $this->emailOnResolvedMinSeverity = $emailOnResolvedMinSeverity;

        return $this;
    }

    /**
     * Get emailOnResolvedMinSeverity
     *
     * @return integer 
     */
    public function getEmailOnResolvedMinSeverity()
    {
        return $this->emailOnResolvedMinSeverity;
    }

    /**
     * Set emailOnFeedbackMinSeverity
     *
     * @param integer $emailOnFeedbackMinSeverity
     * @return UserPref
     */
    public function setEmailOnFeedbackMinSeverity($emailOnFeedbackMinSeverity)
    {
        $this->emailOnFeedbackMinSeverity = $emailOnFeedbackMinSeverity;

        return $this;
    }

    /**
     * Get emailOnFeedbackMinSeverity
     *
     * @return integer 
     */
    public function getEmailOnFeedbackMinSeverity()
    {
        return $this->emailOnFeedbackMinSeverity;
    }

    /**
     * Set emailOnAssignedMinSeverity
     *
     * @param integer $emailOnAssignedMinSeverity
     * @return UserPref
     */
    public function setEmailOnAssignedMinSeverity($emailOnAssignedMinSeverity)
    {
        $this->emailOnAssignedMinSeverity = $emailOnAssignedMinSeverity;

        return $this;
    }

    /**
     * Get emailOnAssignedMinSeverity
     *
     * @return integer 
     */
    public function getEmailOnAssignedMinSeverity()
    {
        return $this->emailOnAssignedMinSeverity;
    }

    /**
     * Set emailOnNewMinSeverity
     *
     * @param integer $emailOnNewMinSeverity
     * @return UserPref
     */
    public function setEmailOnNewMinSeverity($emailOnNewMinSeverity)
    {
        $this->emailOnNewMinSeverity = $emailOnNewMinSeverity;

        return $this;
    }

    /**
     * Get emailOnNewMinSeverity
     *
     * @return integer 
     */
    public function getEmailOnNewMinSeverity()
    {
        return $this->emailOnNewMinSeverity;
    }

    /**
     * Set emailBugnoteLimit
     *
     * @param integer $emailBugnoteLimit
     * @return UserPref
     */
    public function setEmailBugnoteLimit($emailBugnoteLimit)
    {
        $this->emailBugnoteLimit = $emailBugnoteLimit;

        return $this;
    }

    /**
     * Get emailBugnoteLimit
     *
     * @return integer 
     */
    public function getEmailBugnoteLimit()
    {
        return $this->emailBugnoteLimit;
    }

    /**
     * Set language
     *
     * @param string $language
     * @return UserPref
     */
    public function setLanguage($language)
    {
        $this->language = $language;

        return $this;
    }

    /**
     * Get language
     *
     * @return string 
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Set timezone
     *
     * @param string $timezone
     * @return UserPref
     */
    public function setTimezone($timezone)
    {
        $this->timezone = $timezone;

        return $this;
    }

    /**
     * Get timezone
     *
     * @return string 
     */
    public function getTimezone()
    {
        return $this->timezone;
    }
}
