<?php

namespace Mantis\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MantisConfigTable
 *
 * @ORM\Table(name="mantis_config_table")
 * @ORM\Entity
 */
class Config
{
    /**
     * @var string
     *
     * @ORM\Column(name="config_id", type="string", length=64, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $configId;

    /**
     * @var integer
     *
     * @ORM\Column(name="project_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $projectId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $userId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="access_reqd", type="integer", nullable=true)
     */
    private $accessReqd = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="type", type="integer", nullable=true)
     */
    private $type = '90';

    /**
     * @var string
     *
     * @ORM\Column(name="value", type="text", nullable=false)
     */
    private $value;



    /**
     * Set configId
     *
     * @param string $configId
     * @return Config
     */
    public function setConfigId($configId)
    {
        $this->configId = $configId;

        return $this;
    }

    /**
     * Get configId
     *
     * @return string 
     */
    public function getConfigId()
    {
        return $this->configId;
    }

    /**
     * Set projectId
     *
     * @param integer $projectId
     * @return Config
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
     * Set userId
     *
     * @param integer $userId
     * @return Config
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
     * Set accessReqd
     *
     * @param integer $accessReqd
     * @return Config
     */
    public function setAccessReqd($accessReqd)
    {
        $this->accessReqd = $accessReqd;

        return $this;
    }

    /**
     * Get accessReqd
     *
     * @return integer 
     */
    public function getAccessReqd()
    {
        return $this->accessReqd;
    }

    /**
     * Set type
     *
     * @param integer $type
     * @return Config
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
     * Set value
     *
     * @param string $value
     * @return Config
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value
     *
     * @return string 
     */
    public function getValue()
    {
        return $this->value;
    }
}
