<?php

namespace Mantis\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MantisUserProfileTable
 *
 * @ORM\Table(name="mantis_user_profile_table")
 * @ORM\Entity
 */
class UserProfile
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
     * @var string
     *
     * @ORM\Column(name="platform", type="string", length=32, nullable=false)
     */
    private $platform = '';

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
     * @ORM\Column(name="description", type="text", nullable=false)
     */
    private $description;



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
     * @return UserProfile
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
     * Set platform
     *
     * @param string $platform
     * @return UserProfile
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
     * Set os
     *
     * @param string $os
     * @return UserProfile
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
     * @return UserProfile
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
     * Set description
     *
     * @param string $description
     * @return UserProfile
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
}
