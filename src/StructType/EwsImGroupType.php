<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ImGroupType StructType
 * Meta informations extracted from the WSDL
 * - documentation: A Group on the ImContactList, with one or more members
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsImGroupType extends AbstractStructBase
{
    /**
     * The DisplayName
     * Meta informations extracted from the WSDL
     * - minLength: 1
     * @var string
     */
    public $DisplayName;
    /**
     * The GroupType
     * Meta informations extracted from the WSDL
     * - minLength: 1
     * @var string
     */
    public $GroupType;
    /**
     * The ExchangeStoreId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsItemIdType
     */
    public $ExchangeStoreId;
    /**
     * The MemberCorrelationKey
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsNonEmptyArrayOfItemIdsType
     */
    public $MemberCorrelationKey;
    /**
     * The ExtendedProperties
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsNonEmptyArrayOfExtendedPropertyType
     */
    public $ExtendedProperties;
    /**
     * The SmtpAddress
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $SmtpAddress;
    /**
     * Constructor method for ImGroupType
     * @uses EwsImGroupType::setDisplayName()
     * @uses EwsImGroupType::setGroupType()
     * @uses EwsImGroupType::setExchangeStoreId()
     * @uses EwsImGroupType::setMemberCorrelationKey()
     * @uses EwsImGroupType::setExtendedProperties()
     * @uses EwsImGroupType::setSmtpAddress()
     * @param string $displayName
     * @param string $groupType
     * @param \Ews\StructType\EwsItemIdType $exchangeStoreId
     * @param \Ews\ArrayType\EwsNonEmptyArrayOfItemIdsType $memberCorrelationKey
     * @param \Ews\ArrayType\EwsNonEmptyArrayOfExtendedPropertyType $extendedProperties
     * @param string $smtpAddress
     */
    public function __construct($displayName = null, $groupType = null, \Ews\StructType\EwsItemIdType $exchangeStoreId = null, \Ews\ArrayType\EwsNonEmptyArrayOfItemIdsType $memberCorrelationKey = null, \Ews\ArrayType\EwsNonEmptyArrayOfExtendedPropertyType $extendedProperties = null, $smtpAddress = null)
    {
        $this
            ->setDisplayName($displayName)
            ->setGroupType($groupType)
            ->setExchangeStoreId($exchangeStoreId)
            ->setMemberCorrelationKey($memberCorrelationKey)
            ->setExtendedProperties($extendedProperties)
            ->setSmtpAddress($smtpAddress);
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
     * @return \Ews\StructType\EwsImGroupType
     */
    public function setDisplayName($displayName = null)
    {
        // validation for constraint: minLength
        if ((is_scalar($displayName) && strlen($displayName) < 1) || (is_array($displayName) && count($displayName) < 1)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($displayName) && !is_string($displayName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($displayName)), __LINE__);
        }
        $this->DisplayName = $displayName;
        return $this;
    }
    /**
     * Get GroupType value
     * @return string|null
     */
    public function getGroupType()
    {
        return $this->GroupType;
    }
    /**
     * Set GroupType value
     * @param string $groupType
     * @return \Ews\StructType\EwsImGroupType
     */
    public function setGroupType($groupType = null)
    {
        // validation for constraint: minLength
        if ((is_scalar($groupType) && strlen($groupType) < 1) || (is_array($groupType) && count($groupType) < 1)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($groupType) && !is_string($groupType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($groupType)), __LINE__);
        }
        $this->GroupType = $groupType;
        return $this;
    }
    /**
     * Get ExchangeStoreId value
     * @return \Ews\StructType\EwsItemIdType|null
     */
    public function getExchangeStoreId()
    {
        return $this->ExchangeStoreId;
    }
    /**
     * Set ExchangeStoreId value
     * @param \Ews\StructType\EwsItemIdType $exchangeStoreId
     * @return \Ews\StructType\EwsImGroupType
     */
    public function setExchangeStoreId(\Ews\StructType\EwsItemIdType $exchangeStoreId = null)
    {
        $this->ExchangeStoreId = $exchangeStoreId;
        return $this;
    }
    /**
     * Get MemberCorrelationKey value
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfItemIdsType|null
     */
    public function getMemberCorrelationKey()
    {
        return $this->MemberCorrelationKey;
    }
    /**
     * Set MemberCorrelationKey value
     * @param \Ews\ArrayType\EwsNonEmptyArrayOfItemIdsType $memberCorrelationKey
     * @return \Ews\StructType\EwsImGroupType
     */
    public function setMemberCorrelationKey(\Ews\ArrayType\EwsNonEmptyArrayOfItemIdsType $memberCorrelationKey = null)
    {
        $this->MemberCorrelationKey = $memberCorrelationKey;
        return $this;
    }
    /**
     * Get ExtendedProperties value
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfExtendedPropertyType|null
     */
    public function getExtendedProperties()
    {
        return $this->ExtendedProperties;
    }
    /**
     * Set ExtendedProperties value
     * @param \Ews\ArrayType\EwsNonEmptyArrayOfExtendedPropertyType $extendedProperties
     * @return \Ews\StructType\EwsImGroupType
     */
    public function setExtendedProperties(\Ews\ArrayType\EwsNonEmptyArrayOfExtendedPropertyType $extendedProperties = null)
    {
        $this->ExtendedProperties = $extendedProperties;
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
     * @return \Ews\StructType\EwsImGroupType
     */
    public function setSmtpAddress($smtpAddress = null)
    {
        // validation for constraint: string
        if (!is_null($smtpAddress) && !is_string($smtpAddress)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($smtpAddress)), __LINE__);
        }
        $this->SmtpAddress = $smtpAddress;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsImGroupType
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
