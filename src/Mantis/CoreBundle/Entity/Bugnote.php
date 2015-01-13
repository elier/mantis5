<?php

namespace Mantis\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MantisBugnoteTable
 *
 * @ORM\Table(name="mantis_bugnote_table", indexes={@ORM\Index(name="idx_bug", columns={"bug_id"}), @ORM\Index(name="idx_last_mod", columns={"last_modified"})})
 * @ORM\Entity
 */
class Bugnote
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
     * @ORM\Column(name="reporter_id", type="integer", nullable=false)
     */
    private $reporterId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="bugnote_text_id", type="integer", nullable=false)
     */
    private $bugnoteTextId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="view_state", type="smallint", nullable=false)
     */
    private $viewState = '10';

    /**
     * @var integer
     *
     * @ORM\Column(name="note_type", type="integer", nullable=true)
     */
    private $noteType = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="note_attr", type="string", length=250, nullable=true)
     */
    private $noteAttr = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="time_tracking", type="integer", nullable=false)
     */
    private $timeTracking = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="last_modified", type="integer", nullable=false)
     */
    private $lastModified = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="date_submitted", type="integer", nullable=false)
     */
    private $dateSubmitted = '1';



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
     * @return Bugnote
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
     * Set reporterId
     *
     * @param integer $reporterId
     * @return Bugnote
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
     * Set bugnoteTextId
     *
     * @param integer $bugnoteTextId
     * @return Bugnote
     */
    public function setBugnoteTextId($bugnoteTextId)
    {
        $this->bugnoteTextId = $bugnoteTextId;

        return $this;
    }

    /**
     * Get bugnoteTextId
     *
     * @return integer 
     */
    public function getBugnoteTextId()
    {
        return $this->bugnoteTextId;
    }

    /**
     * Set viewState
     *
     * @param integer $viewState
     * @return Bugnote
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
     * Set noteType
     *
     * @param integer $noteType
     * @return Bugnote
     */
    public function setNoteType($noteType)
    {
        $this->noteType = $noteType;

        return $this;
    }

    /**
     * Get noteType
     *
     * @return integer 
     */
    public function getNoteType()
    {
        return $this->noteType;
    }

    /**
     * Set noteAttr
     *
     * @param string $noteAttr
     * @return Bugnote
     */
    public function setNoteAttr($noteAttr)
    {
        $this->noteAttr = $noteAttr;

        return $this;
    }

    /**
     * Get noteAttr
     *
     * @return string 
     */
    public function getNoteAttr()
    {
        return $this->noteAttr;
    }

    /**
     * Set timeTracking
     *
     * @param integer $timeTracking
     * @return Bugnote
     */
    public function setTimeTracking($timeTracking)
    {
        $this->timeTracking = $timeTracking;

        return $this;
    }

    /**
     * Get timeTracking
     *
     * @return integer 
     */
    public function getTimeTracking()
    {
        return $this->timeTracking;
    }

    /**
     * Set lastModified
     *
     * @param integer $lastModified
     * @return Bugnote
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
     * Set dateSubmitted
     *
     * @param integer $dateSubmitted
     * @return Bugnote
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
}
