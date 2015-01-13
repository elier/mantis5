<?php

namespace Mantis\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MantisProjectVersionTable
 *
 * @ORM\Table(name="mantis_project_version_table", uniqueConstraints={@ORM\UniqueConstraint(name="idx_project_version", columns={"project_id", "version"})})
 * @ORM\Entity
 */
class ProjectVersion
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
     * @var string
     *
     * @ORM\Column(name="version", type="string", length=64, nullable=false)
     */
    private $version = '';

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=false)
     */
    private $description;

    /**
     * @var boolean
     *
     * @ORM\Column(name="released", type="boolean", nullable=false)
     */
    private $released = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="obsolete", type="boolean", nullable=false)
     */
    private $obsolete = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="date_order", type="integer", nullable=false)
     */
    private $dateOrder = '1';



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
     * @return ProjectVersion
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
     * Set version
     *
     * @param string $version
     * @return ProjectVersion
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
     * Set description
     *
     * @param string $description
     * @return ProjectVersion
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set released
     *
     * @param boolean $released
     * @return ProjectVersion
     */
    public function setReleased($released)
    {
        $this->released = $released;

        return $this;
    }

    /**
     * Get released
     *
     * @return boolean 
     */
    public function getReleased()
    {
        return $this->released;
    }

    /**
     * Set obsolete
     *
     * @param boolean $obsolete
     * @return ProjectVersion
     */
    public function setObsolete($obsolete)
    {
        $this->obsolete = $obsolete;

        return $this;
    }

    /**
     * Get obsolete
     *
     * @return boolean 
     */
    public function getObsolete()
    {
        return $this->obsolete;
    }

    /**
     * Set dateOrder
     *
     * @param integer $dateOrder
     * @return ProjectVersion
     */
    public function setDateOrder($dateOrder)
    {
        $this->dateOrder = $dateOrder;

        return $this;
    }

    /**
     * Get dateOrder
     *
     * @return integer 
     */
    public function getDateOrder()
    {
        return $this->dateOrder;
    }
}
