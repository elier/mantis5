<?php

namespace Mantis\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MantisBugRelationshipTable
 *
 * @ORM\Table(name="mantis_bug_relationship_table", indexes={@ORM\Index(name="idx_relationship_source", columns={"source_bug_id"}), @ORM\Index(name="idx_relationship_destination", columns={"destination_bug_id"})})
 * @ORM\Entity
 */
class BugRelationship
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
     * @ORM\Column(name="source_bug_id", type="integer", nullable=false)
     */
    private $sourceBugId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="destination_bug_id", type="integer", nullable=false)
     */
    private $destinationBugId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="relationship_type", type="smallint", nullable=false)
     */
    private $relationshipType = '0';



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
     * Set sourceBugId
     *
     * @param integer $sourceBugId
     * @return BugRelationship
     */
    public function setSourceBugId($sourceBugId)
    {
        $this->sourceBugId = $sourceBugId;

        return $this;
    }

    /**
     * Get sourceBugId
     *
     * @return integer 
     */
    public function getSourceBugId()
    {
        return $this->sourceBugId;
    }

    /**
     * Set destinationBugId
     *
     * @param integer $destinationBugId
     * @return BugRelationship
     */
    public function setDestinationBugId($destinationBugId)
    {
        $this->destinationBugId = $destinationBugId;

        return $this;
    }

    /**
     * Get destinationBugId
     *
     * @return integer 
     */
    public function getDestinationBugId()
    {
        return $this->destinationBugId;
    }

    /**
     * Set relationshipType
     *
     * @param integer $relationshipType
     * @return BugRelationship
     */
    public function setRelationshipType($relationshipType)
    {
        $this->relationshipType = $relationshipType;

        return $this;
    }

    /**
     * Get relationshipType
     *
     * @return integer 
     */
    public function getRelationshipType()
    {
        return $this->relationshipType;
    }
}
