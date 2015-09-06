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
     * @var boolean
     */
    public $IsMember;
    /**
     * The SmtpAddress
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $SmtpAddress;
    /**
     * The DisplayName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DisplayName;
    /**
     * The IsFavorite
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var boolean
     */
    public $IsFavorite;
    /**
     * The LastVisitedTimeUtc
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var dateTime
     */
    public $LastVisitedTimeUtc;
    /**
     * The AccessType
     * Meta informations extracted from the WSDL
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
     * @param boolean $isMember
     * @param string $smtpAddress
     * @param string $displayName
     * @param boolean $isFavorite
     * @param dateTime $lastVisitedTimeUtc
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
        $this->InstanceKey = $instanceKey;
        return $this;
    }
    /**
     * Get IsMember value
     * @return boolean|null
     */
    public function getIsMember()
    {
        return $this->IsMember;
    }
    /**
     * Set IsMember value
     * @param boolean $isMember
     * @return \Ews\StructType\EwsUserMembershipChangedChannelEventType
     */
    public function setIsMember($isMember = null)
    {
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
        $this->DisplayName = $displayName;
        return $this;
    }
    /**
     * Get IsFavorite value
     * @return boolean|null
     */
    public function getIsFavorite()
    {
        return $this->IsFavorite;
    }
    /**
     * Set IsFavorite value
     * @param boolean $isFavorite
     * @return \Ews\StructType\EwsUserMembershipChangedChannelEventType
     */
    public function setIsFavorite($isFavorite = null)
    {
        $this->IsFavorite = $isFavorite;
        return $this;
    }
    /**
     * Get LastVisitedTimeUtc value
     * @return dateTime|null
     */
    public function getLastVisitedTimeUtc()
    {
        return $this->LastVisitedTimeUtc;
    }
    /**
     * Set LastVisitedTimeUtc value
     * @param dateTime $lastVisitedTimeUtc
     * @return \Ews\StructType\EwsUserMembershipChangedChannelEventType
     */
    public function setLastVisitedTimeUtc($lastVisitedTimeUtc = null)
    {
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
     * @param string $accessType
     * @return \Ews\StructType\EwsUserMembershipChangedChannelEventType
     */
    public function setAccessType($accessType = null)
    {
        if (!\Ews\EnumType\EwsUnifiedGroupAccessType::valueIsValid($accessType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $accessType, implode(', ', \Ews\EnumType\EwsUnifiedGroupAccessType::getValidValues())), __LINE__);
        }
        $this->AccessType = $accessType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsUserMembershipChangedChannelEventType
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
