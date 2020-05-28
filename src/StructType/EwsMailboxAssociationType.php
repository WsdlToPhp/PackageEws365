<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MailboxAssociationType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsMailboxAssociationType extends AbstractStructBase
{
    /**
     * The Group
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Ews\StructType\EwsGroupLocatorType
     */
    public $Group;
    /**
     * The User
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Ews\StructType\EwsUserLocatorType
     */
    public $User;
    /**
     * The IsMember
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $IsMember;
    /**
     * The JoinDate
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $JoinDate;
    /**
     * The IsPin
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $IsPin;
    /**
     * The JoinedBy
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $JoinedBy;
    /**
     * The LastVisitedDate
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $LastVisitedDate;
    /**
     * Constructor method for MailboxAssociationType
     * @uses EwsMailboxAssociationType::setGroup()
     * @uses EwsMailboxAssociationType::setUser()
     * @uses EwsMailboxAssociationType::setIsMember()
     * @uses EwsMailboxAssociationType::setJoinDate()
     * @uses EwsMailboxAssociationType::setIsPin()
     * @uses EwsMailboxAssociationType::setJoinedBy()
     * @uses EwsMailboxAssociationType::setLastVisitedDate()
     * @param \Ews\StructType\EwsGroupLocatorType $group
     * @param \Ews\StructType\EwsUserLocatorType $user
     * @param bool $isMember
     * @param string $joinDate
     * @param bool $isPin
     * @param string $joinedBy
     * @param string $lastVisitedDate
     */
    public function __construct(\Ews\StructType\EwsGroupLocatorType $group = null, \Ews\StructType\EwsUserLocatorType $user = null, $isMember = null, $joinDate = null, $isPin = null, $joinedBy = null, $lastVisitedDate = null)
    {
        $this
            ->setGroup($group)
            ->setUser($user)
            ->setIsMember($isMember)
            ->setJoinDate($joinDate)
            ->setIsPin($isPin)
            ->setJoinedBy($joinedBy)
            ->setLastVisitedDate($lastVisitedDate);
    }
    /**
     * Get Group value
     * @return \Ews\StructType\EwsGroupLocatorType
     */
    public function getGroup()
    {
        return $this->Group;
    }
    /**
     * Set Group value
     * @param \Ews\StructType\EwsGroupLocatorType $group
     * @return \Ews\StructType\EwsMailboxAssociationType
     */
    public function setGroup(\Ews\StructType\EwsGroupLocatorType $group = null)
    {
        $this->Group = $group;
        return $this;
    }
    /**
     * Get User value
     * @return \Ews\StructType\EwsUserLocatorType
     */
    public function getUser()
    {
        return $this->User;
    }
    /**
     * Set User value
     * @param \Ews\StructType\EwsUserLocatorType $user
     * @return \Ews\StructType\EwsMailboxAssociationType
     */
    public function setUser(\Ews\StructType\EwsUserLocatorType $user = null)
    {
        $this->User = $user;
        return $this;
    }
    /**
     * Get IsMember value
     * @return bool|null
     */
    public function getIsMember()
    {
        return $this->IsMember;
    }
    /**
     * Set IsMember value
     * @param bool $isMember
     * @return \Ews\StructType\EwsMailboxAssociationType
     */
    public function setIsMember($isMember = null)
    {
        // validation for constraint: boolean
        if (!is_null($isMember) && !is_bool($isMember)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isMember, true), gettype($isMember)), __LINE__);
        }
        $this->IsMember = $isMember;
        return $this;
    }
    /**
     * Get JoinDate value
     * @return string|null
     */
    public function getJoinDate()
    {
        return $this->JoinDate;
    }
    /**
     * Set JoinDate value
     * @param string $joinDate
     * @return \Ews\StructType\EwsMailboxAssociationType
     */
    public function setJoinDate($joinDate = null)
    {
        // validation for constraint: string
        if (!is_null($joinDate) && !is_string($joinDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($joinDate, true), gettype($joinDate)), __LINE__);
        }
        $this->JoinDate = $joinDate;
        return $this;
    }
    /**
     * Get IsPin value
     * @return bool|null
     */
    public function getIsPin()
    {
        return $this->IsPin;
    }
    /**
     * Set IsPin value
     * @param bool $isPin
     * @return \Ews\StructType\EwsMailboxAssociationType
     */
    public function setIsPin($isPin = null)
    {
        // validation for constraint: boolean
        if (!is_null($isPin) && !is_bool($isPin)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isPin, true), gettype($isPin)), __LINE__);
        }
        $this->IsPin = $isPin;
        return $this;
    }
    /**
     * Get JoinedBy value
     * @return string|null
     */
    public function getJoinedBy()
    {
        return $this->JoinedBy;
    }
    /**
     * Set JoinedBy value
     * @param string $joinedBy
     * @return \Ews\StructType\EwsMailboxAssociationType
     */
    public function setJoinedBy($joinedBy = null)
    {
        // validation for constraint: string
        if (!is_null($joinedBy) && !is_string($joinedBy)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($joinedBy, true), gettype($joinedBy)), __LINE__);
        }
        $this->JoinedBy = $joinedBy;
        return $this;
    }
    /**
     * Get LastVisitedDate value
     * @return string|null
     */
    public function getLastVisitedDate()
    {
        return $this->LastVisitedDate;
    }
    /**
     * Set LastVisitedDate value
     * @param string $lastVisitedDate
     * @return \Ews\StructType\EwsMailboxAssociationType
     */
    public function setLastVisitedDate($lastVisitedDate = null)
    {
        // validation for constraint: string
        if (!is_null($lastVisitedDate) && !is_string($lastVisitedDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastVisitedDate, true), gettype($lastVisitedDate)), __LINE__);
        }
        $this->LastVisitedDate = $lastVisitedDate;
        return $this;
    }
}
