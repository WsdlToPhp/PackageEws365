<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UserMembershipChangedChannelEventType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsUserMembershipChangedChannelEventType extends EwsSubscriptionLevelChannelEventType
{
    /**
     * The InstanceKey
     * @var string
     */
    public $InstanceKey;
    /**
     * The IsMember
     * @var bool
     */
    public $IsMember;
    /**
     * The SmtpAddress
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $SmtpAddress;
    /**
     * The DisplayName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DisplayName;
    /**
     * The IsFavorite
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsFavorite;
    /**
     * The LastVisitedTimeUtc
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $LastVisitedTimeUtc;
    /**
     * The AccessType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $AccessType;
    /**
     * Constructor method for UserMembershipChangedChannelEventType
     * @uses EwsUserMembershipChangedChannelEventType::setInstanceKey()
     * @uses EwsUserMembershipChangedChannelEventType::setIsMember()
     * @uses EwsUserMembershipChangedChannelEventType::setSmtpAddress()
     * @uses EwsUserMembershipChangedChannelEventType::setDisplayName()
     * @uses EwsUserMembershipChangedChannelEventType::setIsFavorite()
     * @uses EwsUserMembershipChangedChannelEventType::setLastVisitedTimeUtc()
     * @uses EwsUserMembershipChangedChannelEventType::setAccessType()
     * @param string $instanceKey
     * @param bool $isMember
     * @param string $smtpAddress
     * @param string $displayName
     * @param bool $isFavorite
     * @param string $lastVisitedTimeUtc
     * @param string $accessType
     */
    public function __construct($instanceKey = null, $isMember = null, $smtpAddress = null, $displayName = null, $isFavorite = null, $lastVisitedTimeUtc = null, $accessType = null)
    {
        $this
            ->setInstanceKey($instanceKey)
            ->setIsMember($isMember)
            ->setSmtpAddress($smtpAddress)
            ->setDisplayName($displayName)
            ->setIsFavorite($isFavorite)
            ->setLastVisitedTimeUtc($lastVisitedTimeUtc)
            ->setAccessType($accessType);
    }
    /**
     * Get InstanceKey value
     * @return string|null
     */
    public function getInstanceKey()
    {
        return $this->InstanceKey;
    }
    /**
     * Set InstanceKey value
     * @param string $instanceKey
     * @return \Ews\StructType\EwsUserMembershipChangedChannelEventType
     */
    public function setInstanceKey($instanceKey = null)
    {
        // validation for constraint: string
        if (!is_null($instanceKey) && !is_string($instanceKey)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($instanceKey, true), gettype($instanceKey)), __LINE__);
        }
        $this->InstanceKey = $instanceKey;
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
     * @return \Ews\StructType\EwsUserMembershipChangedChannelEventType
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
     * Get SmtpAddress value
     * @return string|null
     */
    public function getSmtpAddress()
    {
        return $this->SmtpAddress;
    }
    /**
     * Set SmtpAddress value
     * @param string $smtpAddress
     * @return \Ews\StructType\EwsUserMembershipChangedChannelEventType
     */
    public function setSmtpAddress($smtpAddress = null)
    {
        // validation for constraint: string
        if (!is_null($smtpAddress) && !is_string($smtpAddress)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($smtpAddress, true), gettype($smtpAddress)), __LINE__);
        }
        $this->SmtpAddress = $smtpAddress;
        return $this;
    }
    /**
     * Get DisplayName value
     * @return string|null
     */
    public function getDisplayName()
    {
        return $this->DisplayName;
    }
    /**
     * Set DisplayName value
     * @param string $displayName
     * @return \Ews\StructType\EwsUserMembershipChangedChannelEventType
     */
    public function setDisplayName($displayName = null)
    {
        // validation for constraint: string
        if (!is_null($displayName) && !is_string($displayName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($displayName, true), gettype($displayName)), __LINE__);
        }
        $this->DisplayName = $displayName;
        return $this;
    }
    /**
     * Get IsFavorite value
     * @return bool|null
     */
    public function getIsFavorite()
    {
        return $this->IsFavorite;
    }
    /**
     * Set IsFavorite value
     * @param bool $isFavorite
     * @return \Ews\StructType\EwsUserMembershipChangedChannelEventType
     */
    public function setIsFavorite($isFavorite = null)
    {
        // validation for constraint: boolean
        if (!is_null($isFavorite) && !is_bool($isFavorite)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isFavorite, true), gettype($isFavorite)), __LINE__);
        }
        $this->IsFavorite = $isFavorite;
        return $this;
    }
    /**
     * Get LastVisitedTimeUtc value
     * @return string|null
     */
    public function getLastVisitedTimeUtc()
    {
        return $this->LastVisitedTimeUtc;
    }
    /**
     * Set LastVisitedTimeUtc value
     * @param string $lastVisitedTimeUtc
     * @return \Ews\StructType\EwsUserMembershipChangedChannelEventType
     */
    public function setLastVisitedTimeUtc($lastVisitedTimeUtc = null)
    {
        // validation for constraint: string
        if (!is_null($lastVisitedTimeUtc) && !is_string($lastVisitedTimeUtc)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastVisitedTimeUtc, true), gettype($lastVisitedTimeUtc)), __LINE__);
        }
        $this->LastVisitedTimeUtc = $lastVisitedTimeUtc;
        return $this;
    }
    /**
     * Get AccessType value
     * @return string|null
     */
    public function getAccessType()
    {
        return $this->AccessType;
    }
    /**
     * Set AccessType value
     * @uses \Ews\EnumType\EwsUnifiedGroupAccessType::valueIsValid()
     * @uses \Ews\EnumType\EwsUnifiedGroupAccessType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $accessType
     * @return \Ews\StructType\EwsUserMembershipChangedChannelEventType
     */
    public function setAccessType($accessType = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsUnifiedGroupAccessType::valueIsValid($accessType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsUnifiedGroupAccessType', is_array($accessType) ? implode(', ', $accessType) : var_export($accessType, true), implode(', ', \Ews\EnumType\EwsUnifiedGroupAccessType::getValidValues())), __LINE__);
        }
        $this->AccessType = $accessType;
        return $this;
    }
}
