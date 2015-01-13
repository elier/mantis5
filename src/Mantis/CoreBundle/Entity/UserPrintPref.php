<?php

namespace Mantis\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MantisUserPrintPrefTable
 *
 * @ORM\Table(name="mantis_user_print_pref_table")
 * @ORM\Entity
 */
class UserPrintPref
{
    /**
     * @var integer
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $userId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="print_pref", type="string", length=64, nullable=false)
     */
    private $printPref;



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
     * Set printPref
     *
     * @param string $printPref
     * @return UserPrintPref
     */
    public function setPrintPref($printPref)
    {
        $this->printPref = $printPref;

        return $this;
    }

    /**
     * Get printPref
     *
     * @return string 
     */
    public function getPrintPref()
    {
        return $this->printPref;
    }
}
