<?php

namespace Mantis\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MantisBugTextTable
 *
 * @ORM\Table(name="mantis_bug_text_table")
 * @ORM\Entity
 */
class BugText
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
     * @ORM\Column(name="description", type="text", nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="steps_to_reproduce", type="text", nullable=false)
     */
    private $stepsToReproduce;

    /**
     * @var string
     *
     * @ORM\Column(name="additional_information", type="text", nullable=false)
     */
    private $additionalInformation;



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
     * Set description
     *
     * @param string $description
     * @return BugText
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
     * Set stepsToReproduce
     *
     * @param string $stepsToReproduce
     * @return BugText
     */
    public function setStepsToReproduce($stepsToReproduce)
    {
        $this->stepsToReproduce = $stepsToReproduce;

        return $this;
    }

    /**
     * Get stepsToReproduce
     *
     * @return string 
     */
    public function getStepsToReproduce()
    {
        return $this->stepsToReproduce;
    }

    /**
     * Set additionalInformation
     *
     * @param string $additionalInformation
     * @return BugText
     */
    public function setAdditionalInformation($additionalInformation)
    {
        $this->additionalInformation = $additionalInformation;

        return $this;
    }

    /**
     * Get additionalInformation
     *
     * @return string 
     */
    public function getAdditionalInformation()
    {
        return $this->additionalInformation;
    }
}
