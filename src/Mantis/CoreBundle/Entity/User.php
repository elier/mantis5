<?php

namespace Mantis\CoreBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\OneToMany;
use Doctrine\ORM\Mapping\PrePersist;
use Doctrine\ORM\Mapping\HasLifecycleCallbacks;
use Serializable;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\Util\SecureRandom;

/**
 * MantisUserTable
 *
 * @ORM\Table(name="mantis_user_table", uniqueConstraints={@ORM\UniqueConstraint(name="idx_user_cookie_string", columns={"cookie_string"}), @ORM\UniqueConstraint(name="idx_user_username", columns={"username"})}, indexes={@ORM\Index(name="idx_enable", columns={"enabled"}), @ORM\Index(name="idx_access", columns={"access_level"})})
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 */
class User implements UserInterface, Serializable
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
     * @ORM\Column(name="username", type="string", length=32, nullable=false)
     */
    private $username = '';

    /**
     * @var string
     *
     * @ORM\Column(name="realname", type="string", length=64, nullable=false)
     */
    private $realname = '';

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=64, nullable=false)
     */
    private $email = '';

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=32, nullable=false)
     */
    private $password = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="enabled", type="boolean", nullable=false)
     */
    private $enabled = true;

    /**
     * @var boolean
     *
     * @ORM\Column(name="protected", type="boolean", nullable=false)
     */
    private $protected = false;

    /**
     * @var integer
     *
     * @ORM\Column(name="access_level", type="smallint", nullable=false)
     */
    private $accessLevel = 10;

    /**
     * @var integer
     *
     * @ORM\Column(name="login_count", type="integer", nullable=false)
     */
    private $loginCount = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="lost_password_request_count", type="smallint", nullable=false)
     */
    private $lostPasswordRequestCount = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="failed_login_count", type="smallint", nullable=false)
     */
    private $failedLoginCount = 0;

    /**
     * @var string
     *
     * @ORM\Column(name="cookie_string", type="string", length=64, nullable=false)
     */
    private $cookieString = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="last_visit", type="integer", nullable=false)
     */
    private $lastVisit = 1;

    /**
     * @var integer
     *
     * @ORM\Column(name="date_created", type="integer", nullable=false)
     */
    private $dateCreated = 1;
    
    /**
     * @var Tags[]
     * 
     * @OneToMany(targetEntity="Tag", mappedBy="user")
     */
    private $tags;
    
    public function __construct()
    {
        $this->tags = new ArrayCollection;
    }

    /**
     * @PrePersist
     */
    public function onPrePersist()
    {
        $this->dateCreated = \time();
        $this->lastVisit = \time();
        $generator = new SecureRandom();
        $this->cookieString = \bin2hex($generator->nextBytes(32));
    }
    
    public function encodePassword($factory)
    {
        $encoder = $factory->getEncoder($this);
        $this->password = $encoder->encodePassword($this->password, '');
        
        return $this;
    }
    
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
     * Set username
     *
     * @param string $username
     * @return User
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set realname
     *
     * @param string $realname
     * @return User
     */
    public function setRealname($realname)
    {
        $this->realname = $realname;

        return $this;
    }

    /**
     * Get realname
     *
     * @return string 
     */
    public function getRealname()
    {
        return $this->realname;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set enabled
     *
     * @param boolean $enabled
     * @return User
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
        return $this->enabled ? true : false;
    }

    /**
     * Set protected
     *
     * @param boolean $protected
     * @return User
     */
    public function setProtected($protected)
    {
        $this->protected = $protected;

        return $this;
    }

    /**
     * Get protected
     *
     * @return boolean 
     */
    public function getProtected()
    {
        return $this->protected ? true : false;
    }

    /**
     * Set accessLevel
     *
     * @param integer $accessLevel
     * @return User
     */
    public function setAccessLevel($accessLevel)
    {
        $this->accessLevel = $accessLevel;

        return $this;
    }

    /**
     * Get accessLevel
     *
     * @return integer 
     */
    public function getAccessLevel()
    {
        return $this->accessLevel;
    }

    /**
     * Set loginCount
     *
     * @param integer $loginCount
     * @return User
     */
    public function setLoginCount($loginCount)
    {
        $this->loginCount = $loginCount;

        return $this;
    }

    /**
     * Get loginCount
     *
     * @return integer 
     */
    public function getLoginCount()
    {
        return $this->loginCount;
    }

    /**
     * Set lostPasswordRequestCount
     *
     * @param integer $lostPasswordRequestCount
     * @return User
     */
    public function setLostPasswordRequestCount($lostPasswordRequestCount)
    {
        $this->lostPasswordRequestCount = $lostPasswordRequestCount;

        return $this;
    }

    /**
     * Get lostPasswordRequestCount
     *
     * @return integer 
     */
    public function getLostPasswordRequestCount()
    {
        return $this->lostPasswordRequestCount;
    }

    /**
     * Set failedLoginCount
     *
     * @param integer $failedLoginCount
     * @return User
     */
    public function setFailedLoginCount($failedLoginCount)
    {
        $this->failedLoginCount = $failedLoginCount;

        return $this;
    }

    /**
     * Get failedLoginCount
     *
     * @return integer 
     */
    public function getFailedLoginCount()
    {
        return $this->failedLoginCount;
    }

    /**
     * Set cookieString
     *
     * @param string $cookieString
     * @return User
     */
    public function setCookieString($cookieString)
    {
        $this->cookieString = $cookieString;

        return $this;
    }

    /**
     * Get cookieString
     *
     * @return string 
     */
    public function getCookieString()
    {
        return $this->cookieString;
    }

    /**
     * Set lastVisit
     *
     * @param integer $lastVisit
     * @return User
     */
    public function setLastVisit($lastVisit)
    {
        $this->lastVisit = $lastVisit;

        return $this;
    }

    /**
     * Get lastVisit
     *
     * @return integer 
     */
    public function getLastVisit()
    {
        return \date('Y-m-d H:i A', $this->lastVisit);
    }

    /**
     * Set dateCreated
     *
     * @param integer $dateCreated
     * @return User
     */
    public function setDateCreated($dateCreated)
    {
        $this->dateCreated = $dateCreated;

        return $this;
    }

    /**
     * Get dateCreated
     *
     * @return integer 
     */
    public function getDateCreated()
    {
        return \date('Y-m-d H:i A', $this->dateCreated);
    }

    public function eraseCredentials()
    {
        
    }

    public function getRoles()
    {
        return array('ROLE_USER');
    }

    public function getSalt()
    {
        return '';
    }

    /**
     * @see \Serializable::serialize()
     */
    public function serialize()
    {
        return serialize(array(
            $this->id,
            $this->username,
            $this->password,
            // see section on salt below
            // $this->salt,
        ));
    }

    /**
     * @see \Serializable::unserialize()
     */
    public function unserialize($serialized)
    {
        list (
            $this->id,
            $this->username,
            $this->password,
            // see section on salt below
            // $this->salt
        ) = unserialize($serialized);
    }

}
