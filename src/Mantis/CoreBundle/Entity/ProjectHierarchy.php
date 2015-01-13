<?php

namespace Mantis\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MantisProjectHierarchyTable
 *
 * @ORM\Table(name="mantis_project_hierarchy_table", indexes={@ORM\Index(name="idx_project_hierarchy_child_id", columns={"child_id"}), @ORM\Index(name="idx_project_hierarchy_parent_id", columns={"parent_id"})})
 * @ORM\Entity
 */
class ProjectHierarchy
{
    /**
     * @var integer
     *
     * @ORM\Column(name="_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="child_id", type="integer", nullable=false)
     */
    private $childId;

    /**
     * @var integer
     *
     * @ORM\Column(name="parent_id", type="integer", nullable=false)
     */
    private $parentId;

    /**
     * @var integer
     *
     * @ORM\Column(name="inherit_parent", type="integer", nullable=false)
     */
    private $inheritParent = '0';



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
     * Set childId
     *
     * @param integer $childId
     * @return ProjectHierarchy
     */
    public function setChildId($childId)
    {
        $this->childId = $childId;

        return $this;
    }

    /**
     * Get childId
     *
     * @return integer 
     */
    public function getChildId()
    {
        return $this->childId;
    }

    /**
     * Set parentId
     *
     * @param integer $parentId
     * @return ProjectHierarchy
     */
    public function setParentId($parentId)
    {
        $this->parentId = $parentId;

        return $this;
    }

    /**
     * Get parentId
     *
     * @return integer 
     */
    public function getParentId()
    {
        return $this->parentId;
    }

    /**
     * Set inheritParent
     *
     * @param integer $inheritParent
     * @return ProjectHierarchy
     */
    public function setInheritParent($inheritParent)
    {
        $this->inheritParent = $inheritParent;

        return $this;
    }

    /**
     * Get inheritParent
     *
     * @return integer 
     */
    public function getInheritParent()
    {
        return $this->inheritParent;
    }
}
