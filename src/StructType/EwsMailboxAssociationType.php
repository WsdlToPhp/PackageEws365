<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \StructType\EwsGroupLocatorType
     */
    protected \StructType\EwsGroupLocatorType $Group;
    /**
     * The User
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \StructType\EwsUserLocatorType
     */
    protected \StructType\EwsUserLocatorType $User;
    /**
     * The IsMember
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsMember = null;
    /**
     * The JoinDate
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $JoinDate = null;
    /**
     * The IsPin
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsPin = null;
    /**
     * The JoinedBy
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $JoinedBy = null;
    /**
     * The LastVisitedDate
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $LastVisitedDate = null;
    /**
     * Constructor method for MailboxAssociationType
     * @uses EwsMailboxAssociationType::setGroup()
     * @uses EwsMailboxAssociationType::setUser()
     * @uses EwsMailboxAssociationType::setIsMember()
     * @uses EwsMailboxAssociationType::setJoinDate()
     * @uses EwsMailboxAssociationType::setIsPin()
     * @uses EwsMailboxAssociationType::setJoinedBy()
     * @uses EwsMailboxAssociationType::setLastVisitedDate()
     * @param \StructType\EwsGroupLocatorType $group
     * @param \StructType\EwsUserLocatorType $user
     * @param bool $isMember
     * @param string $joinDate
     * @param bool $isPin
     * @param string $joinedBy
     * @param string $lastVisitedDate
     */
    public function __construct(\StructType\EwsGroupLocatorType $group, \StructType\EwsUserLocatorType $user, ?bool $isMember = null, ?string $joinDate = null, ?bool $isPin = null, ?string $joinedBy = null, ?string $lastVisitedDate = null)
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
     * @return \StructType\EwsGroupLocatorType
     */
    public function getGroup(): \StructType\EwsGroupLocatorType
    {
        return $this->Group;
    }
    /**
     * Set Group value
     * @param \StructType\EwsGroupLocatorType $group
     * @return \StructType\EwsMailboxAssociationType
     */
    public function setGroup(\StructType\EwsGroupLocatorType $group): self
    {
        $this->Group = $group;
        
        return $this;
    }
    /**
     * Get User value
     * @return \StructType\EwsUserLocatorType
     */
    public function getUser(): \StructType\EwsUserLocatorType
    {
        return $this->User;
    }
    /**
     * Set User value
     * @param \StructType\EwsUserLocatorType $user
     * @return \StructType\EwsMailboxAssociationType
     */
    public function setUser(\StructType\EwsUserLocatorType $user): self
    {
        $this->User = $user;
        
        return $this;
    }
    /**
     * Get IsMember value
     * @return bool|null
     */
    public function getIsMember(): ?bool
    {
        return $this->IsMember;
    }
    /**
     * Set IsMember value
     * @param bool $isMember
     * @return \StructType\EwsMailboxAssociationType
     */
    public function setIsMember(?bool $isMember = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isMember) && !is_bool($isMember)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isMember, true), gettype($isMember)), __LINE__);
        }
        $this->IsMember = $isMember;
        
        return $this;
    }
    /**
     * Get JoinDate value
     * @return string|null
     */
    public function getJoinDate(): ?string
    {
        return $this->JoinDate;
    }
    /**
     * Set JoinDate value
     * @param string $joinDate
     * @return \StructType\EwsMailboxAssociationType
     */
    public function setJoinDate(?string $joinDate = null): self
    {
        // validation for constraint: string
        if (!is_null($joinDate) && !is_string($joinDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($joinDate, true), gettype($joinDate)), __LINE__);
        }
        $this->JoinDate = $joinDate;
        
        return $this;
    }
    /**
     * Get IsPin value
     * @return bool|null
     */
    public function getIsPin(): ?bool
    {
        return $this->IsPin;
    }
    /**
     * Set IsPin value
     * @param bool $isPin
     * @return \StructType\EwsMailboxAssociationType
     */
    public function setIsPin(?bool $isPin = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isPin) && !is_bool($isPin)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isPin, true), gettype($isPin)), __LINE__);
        }
        $this->IsPin = $isPin;
        
        return $this;
    }
    /**
     * Get JoinedBy value
     * @return string|null
     */
    public function getJoinedBy(): ?string
    {
        return $this->JoinedBy;
    }
    /**
     * Set JoinedBy value
     * @param string $joinedBy
     * @return \StructType\EwsMailboxAssociationType
     */
    public function setJoinedBy(?string $joinedBy = null): self
    {
        // validation for constraint: string
        if (!is_null($joinedBy) && !is_string($joinedBy)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($joinedBy, true), gettype($joinedBy)), __LINE__);
        }
        $this->JoinedBy = $joinedBy;
        
        return $this;
    }
    /**
     * Get LastVisitedDate value
     * @return string|null
     */
    public function getLastVisitedDate(): ?string
    {
        return $this->LastVisitedDate;
    }
    /**
     * Set LastVisitedDate value
     * @param string $lastVisitedDate
     * @return \StructType\EwsMailboxAssociationType
     */
    public function setLastVisitedDate(?string $lastVisitedDate = null): self
    {
        // validation for constraint: string
        if (!is_null($lastVisitedDate) && !is_string($lastVisitedDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastVisitedDate, true), gettype($lastVisitedDate)), __LINE__);
        }
        $this->LastVisitedDate = $lastVisitedDate;
        
        return $this;
    }
}
