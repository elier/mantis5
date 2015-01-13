<?php

namespace Mantis\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MantisCustomFieldTable
 *
 * @ORM\Table(name="mantis_custom_field_table", indexes={@ORM\Index(name="idx_custom_field_name", columns={"name"})})
 * @ORM\Entity
 */
class CustomField
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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=64, nullable=false)
     */
    private $name = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="type", type="smallint", nullable=false)
     */
    private $type = 0;

    /**
     * @var string
     *
     * @ORM\Column(name="possible_values", type="text", nullable=false)
     */
    private $possibleValues;

    /**
     * @var string
     *
     * @ORM\Column(name="default_value", type="string", length=255, nullable=false)
     */
    private $defaultValue = '';

    /**
     * @var string
     *
     * @ORM\Column(name="valid_regexp", type="string", length=255, nullable=false)
     */
    private $validRegexp = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="access_level_r", type="smallint", nullable=false)
     */
    private $accessLevelR = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="access_level_rw", type="smallint", nullable=false)
     */
    private $accessLevelRw = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="length_min", type="integer", nullable=false)
     */
    private $lengthMin = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="length_max", type="integer", nullable=false)
     */
    private $lengthMax = 0;

    /**
     * @var boolean
     *
     * @ORM\Column(name="require_report", type="boolean", nullable=false)
     */
    private $requireReport = false;

    /**
     * @var boolean
     *
     * @ORM\Column(name="require_update", type="boolean", nullable=false)
     */
    private $requireUpdate = false;

    /**
     * @var boolean
     *
     * @ORM\Column(name="display_report", type="boolean", nullable=false)
     */
    private $displayReport = false;

    /**
     * @var boolean
     *
     * @ORM\Column(name="display_update", type="boolean", nullable=false)
     */
    private $displayUpdate = true;

    /**
     * @var boolean
     *
     * @ORM\Column(name="require_resolved", type="boolean", nullable=false)
     */
    private $requireResolved = false;

    /**
     * @var boolean
     *
     * @ORM\Column(name="display_resolved", type="boolean", nullable=false)
     */
    private $displayResolved = false;

    /**
     * @var boolean
     *
     * @ORM\Column(name="display_closed", type="boolean", nullable=false)
     */
    private $displayClosed = false;

    /**
     * @var boolean
     *
     * @ORM\Column(name="require_closed", type="boolean", nullable=false)
     */
    private $requireClosed = false;

    /**
     * @var boolean
     *
     * @ORM\Column(name="filter_by", type="boolean", nullable=false)
     */
    private $filterBy = true;

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
     * Set name
     *
     * @param string $name
     * @return CustomField
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set type
     *
     * @param integer $type
     * @return CustomField
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
     * Set possibleValues
     *
     * @param string $possibleValues
     * @return CustomField
     */
    public function setPossibleValues($possibleValues)
    {
        $this->possibleValues = $possibleValues;

        return $this;
    }

    /**
     * Get possibleValues
     *
     * @return string 
     */
    public function getPossibleValues()
    {
        return $this->possibleValues;
    }

    /**
     * Set defaultValue
     *
     * @param string $defaultValue
     * @return CustomField
     */
    public function setDefaultValue($defaultValue)
    {
        $this->defaultValue = $defaultValue;

        return $this;
    }

    /**
     * Get defaultValue
     *
     * @return string 
     */
    public function getDefaultValue()
    {
        return $this->defaultValue;
    }

    /**
     * Set validRegexp
     *
     * @param string $validRegexp
     * @return CustomField
     */
    public function setValidRegexp($validRegexp)
    {
        $this->validRegexp = $validRegexp;

        return $this;
    }

    /**
     * Get validRegexp
     *
     * @return string 
     */
    public function getValidRegexp()
    {
        return $this->validRegexp;
    }

    /**
     * Set accessLevelR
     *
     * @param integer $accessLevelR
     * @return CustomField
     */
    public function setAccessLevelR($accessLevelR)
    {
        $this->accessLevelR = $accessLevelR;

        return $this;
    }

    /**
     * Get accessLevelR
     *
     * @return integer 
     */
    public function getAccessLevelR()
    {
        return $this->accessLevelR;
    }

    /**
     * Set accessLevelRw
     *
     * @param integer $accessLevelRw
     * @return CustomField
     */
    public function setAccessLevelRw($accessLevelRw)
    {
        $this->accessLevelRw = $accessLevelRw;

        return $this;
    }

    /**
     * Get accessLevelRw
     *
     * @return integer 
     */
    public function getAccessLevelRw()
    {
        return $this->accessLevelRw;
    }

    /**
     * Set lengthMin
     *
     * @param integer $lengthMin
     * @return CustomField
     */
    public function setLengthMin($lengthMin)
    {
        $this->lengthMin = $lengthMin;

        return $this;
    }

    /**
     * Get lengthMin
     *
     * @return integer 
     */
    public function getLengthMin()
    {
        return $this->lengthMin;
    }

    /**
     * Set lengthMax
     *
     * @param integer $lengthMax
     * @return CustomField
     */
    public function setLengthMax($lengthMax)
    {
        $this->lengthMax = $lengthMax;

        return $this;
    }

    /**
     * Get lengthMax
     *
     * @return integer 
     */
    public function getLengthMax()
    {
        return $this->lengthMax;
    }

    /**
     * Set requireReport
     *
     * @param boolean $requireReport
     * @return CustomField
     */
    public function setRequireReport($requireReport)
    {
        $this->requireReport = $requireReport;

        return $this;
    }

    /**
     * Get requireReport
     *
     * @return boolean 
     */
    public function getRequireReport()
    {
        return $this->requireReport;
    }

    /**
     * Set requireUpdate
     *
     * @param boolean $requireUpdate
     * @return CustomField
     */
    public function setRequireUpdate($requireUpdate)
    {
        $this->requireUpdate = $requireUpdate;

        return $this;
    }

    /**
     * Get requireUpdate
     *
     * @return boolean 
     */
    public function getRequireUpdate()
    {
        return $this->requireUpdate;
    }

    /**
     * Set displayReport
     *
     * @param boolean $displayReport
     * @return CustomField
     */
    public function setDisplayReport($displayReport)
    {
        $this->displayReport = $displayReport;

        return $this;
    }

    /**
     * Get displayReport
     *
     * @return boolean 
     */
    public function getDisplayReport()
    {
        return $this->displayReport;
    }

    /**
     * Set displayUpdate
     *
     * @param boolean $displayUpdate
     * @return CustomField
     */
    public function setDisplayUpdate($displayUpdate)
    {
        $this->displayUpdate = $displayUpdate;

        return $this;
    }

    /**
     * Get displayUpdate
     *
     * @return boolean 
     */
    public function getDisplayUpdate()
    {
        return $this->displayUpdate;
    }

    /**
     * Set requireResolved
     *
     * @param boolean $requireResolved
     * @return CustomField
     */
    public function setRequireResolved($requireResolved)
    {
        $this->requireResolved = $requireResolved;

        return $this;
    }

    /**
     * Get requireResolved
     *
     * @return boolean 
     */
    public function getRequireResolved()
    {
        return $this->requireResolved;
    }

    /**
     * Set displayResolved
     *
     * @param boolean $displayResolved
     * @return CustomField
     */
    public function setDisplayResolved($displayResolved)
    {
        $this->displayResolved = $displayResolved;

        return $this;
    }

    /**
     * Get displayResolved
     *
     * @return boolean 
     */
    public function getDisplayResolved()
    {
        return $this->displayResolved;
    }

    /**
     * Set displayClosed
     *
     * @param boolean $displayClosed
     * @return CustomField
     */
    public function setDisplayClosed($displayClosed)
    {
        $this->displayClosed = $displayClosed;

        return $this;
    }

    /**
     * Get displayClosed
     *
     * @return boolean 
     */
    public function getDisplayClosed()
    {
        return $this->displayClosed;
    }

    /**
     * Set requireClosed
     *
     * @param boolean $requireClosed
     * @return CustomField
     */
    public function setRequireClosed($requireClosed)
    {
        $this->requireClosed = $requireClosed;

        return $this;
    }

    /**
     * Get requireClosed
     *
     * @return boolean 
     */
    public function getRequireClosed()
    {
        return $this->requireClosed;
    }

    /**
     * Set filterBy
     *
     * @param boolean $filterBy
     * @return CustomField
     */
    public function setFilterBy($filterBy)
    {
        $this->filterBy = $filterBy;

        return $this;
    }

    /**
     * Get filterBy
     *
     * @return boolean 
     */
    public function getFilterBy()
    {
        return $this->filterBy;
    }
}
