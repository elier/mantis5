<?php

namespace Mantis\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MantisProjectTable
 *
 * @ORM\Table(name="mantis_project_table", uniqueConstraints={@ORM\UniqueConstraint(name="idx_project_name", columns={"name"})}, indexes={@ORM\Index(name="idx_project_view", columns={"view_state"})})
 * @ORM\Entity
 */
class Project
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
     * @ORM\Column(name="name", type="string", length=128, nullable=false)
     */
    private $name = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="smallint", nullable=false)
     */
    private $status = '10';

    /**
     * @var boolean
     *
     * @ORM\Column(name="enabled", type="boolean", nullable=false)
     */
    private $enabled = true;

    /**
     * @var integer
     *
     * @ORM\Column(name="view_state", type="smallint", nullable=false)
     */
    private $viewState = '10';

    /**
     * @var integer
     *
     * @ORM\Column(name="access_min", type="smallint", nullable=false)
     */
    private $accessMin = '10';

    /**
     * @var string
     *
     * @ORM\Column(name="file_path", type="string", length=250, nullable=false)
     */
    private $filePath = '';

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=false)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="category_id", type="integer", nullable=false)
     */
    private $categoryId = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="inherit_global", type="integer", nullable=false)
     */
    private $inheritGlobal = '0';

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
     * @return Project
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
     * Set status
     *
     * @param integer $status
     * @return Project
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
     * Set enabled
     *
     * @param boolean $enabled
     * @return Project
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;

        return $this;
    }

    /**
     * Get enabled
     *
     * @return boolean 
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * Set viewState
     *
     * @param integer $viewState
     * @return Project
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
     * Set accessMin
     *
     * @param integer $accessMin
     * @return Project
     */
    public function setAccessMin($accessMin)
    {
        $this->accessMin = $accessMin;

        return $this;
    }

    /**
     * Get accessMin
     *
     * @return integer 
     */
    public function getAccessMin()
    {
        return $this->accessMin;
    }

    /**
     * Set filePath
     *
     * @param string $filePath
     * @return Project
     */
    public function setFilePath($filePath)
    {
        $this->filePath = $filePath;

        return $this;
    }

    /**
     * Get filePath
     *
     * @return string 
     */
    public function getFilePath()
    {
        return $this->filePath;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Project
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
     * Set categoryId
     *
     * @param integer $categoryId
     * @return Project
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
     * Set inheritGlobal
     *
     * @param integer $inheritGlobal
     * @return Project
     */
    public function setInheritGlobal($inheritGlobal)
    {
        $this->inheritGlobal = $inheritGlobal;

        return $this;
    }

    /**
     * Get inheritGlobal
     *
     * @return integer 
     */
    public function getInheritGlobal()
    {
        return $this->inheritGlobal;
    }
}
