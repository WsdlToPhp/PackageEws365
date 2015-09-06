<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NonIndexableItemDetailType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Non indexable item detail.
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsNonIndexableItemDetailType extends AbstractStructBase
{
    /**
     * The ItemId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - documentation: Identifier for a fully resolved item
     * @var \Ews\StructType\EwsItemIdType
     */
    public $ItemId;
    /**
     * The ErrorCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $ErrorCode;
    /**
     * The ErrorDescription
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $ErrorDescription;
    /**
     * The IsPartiallyIndexed
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var boolean
     */
    public $IsPartiallyIndexed;
    /**
     * The IsPermanentFailure
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var boolean
     */
    public $IsPermanentFailure;
    /**
     * The SortValue
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $SortValue;
    /**
     * The AttemptCount
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $AttemptCount;
    /**
     * The LastAttemptTime
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var dateTime
     */
    public $LastAttemptTime;
    /**
     * The AdditionalInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $AdditionalInfo;
    /**
     * Constructor method for NonIndexableItemDetailType
     * @uses EwsNonIndexableItemDetailType::setItemId()
     * @uses EwsNonIndexableItemDetailType::setErrorCode()
     * @uses EwsNonIndexableItemDetailType::setErrorDescription()
     * @uses EwsNonIndexableItemDetailType::setIsPartiallyIndexed()
     * @uses EwsNonIndexableItemDetailType::setIsPermanentFailure()
     * @uses EwsNonIndexableItemDetailType::setSortValue()
     * @uses EwsNonIndexableItemDetailType::setAttemptCount()
     * @uses EwsNonIndexableItemDetailType::setLastAttemptTime()
     * @uses EwsNonIndexableItemDetailType::setAdditionalInfo()
     * @param \Ews\StructType\EwsItemIdType $itemId
     * @param string $errorCode
     * @param string $errorDescription
     * @param boolean $isPartiallyIndexed
     * @param boolean $isPermanentFailure
     * @param string $sortValue
     * @param int $attemptCount
     * @param dateTime $lastAttemptTime
     * @param string $additionalInfo
     */
    public function __construct(\Ews\StructType\EwsItemIdType $itemId = null, $errorCode = null, $errorDescription = null, $isPartiallyIndexed = null, $isPermanentFailure = null, $sortValue = null, $attemptCount = null, $lastAttemptTime = null, $additionalInfo = null)
    {
        $this
            ->setItemId($itemId)
            ->setErrorCode($errorCode)
            ->setErrorDescription($errorDescription)
            ->setIsPartiallyIndexed($isPartiallyIndexed)
            ->setIsPermanentFailure($isPermanentFailure)
            ->setSortValue($sortValue)
            ->setAttemptCount($attemptCount)
            ->setLastAttemptTime($lastAttemptTime)
            ->setAdditionalInfo($additionalInfo);
    }
    /**
     * Get ItemId value
     * @return \Ews\StructType\EwsItemIdType
     */
    public function getItemId()
    {
        return $this->ItemId;
    }
    /**
     * Set ItemId value
     * @param \Ews\StructType\EwsItemIdType $itemId
     * @return \Ews\StructType\EwsNonIndexableItemDetailType
     */
    public function setItemId(\Ews\StructType\EwsItemIdType $itemId = null)
    {
        $this->ItemId = $itemId;
        return $this;
    }
    /**
     * Get ErrorCode value
     * @return string
     */
    public function getErrorCode()
    {
        return $this->ErrorCode;
    }
    /**
     * Set ErrorCode value
     * @uses \Ews\EnumType\EwsItemIndexErrorType::valueIsValid()
     * @uses \Ews\EnumType\EwsItemIndexErrorType::getValidValues()
     * @param string $errorCode
     * @return \Ews\StructType\EwsNonIndexableItemDetailType
     */
    public function setErrorCode($errorCode = null)
    {
        if (!\Ews\EnumType\EwsItemIndexErrorType::valueIsValid($errorCode)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $errorCode, implode(', ', \Ews\EnumType\EwsItemIndexErrorType::getValidValues())), __LINE__);
        }
        $this->ErrorCode = $errorCode;
        return $this;
    }
    /**
     * Get ErrorDescription value
     * @return string
     */
    public function getErrorDescription()
    {
        return $this->ErrorDescription;
    }
    /**
     * Set ErrorDescription value
     * @param string $errorDescription
     * @return \Ews\StructType\EwsNonIndexableItemDetailType
     */
    public function setErrorDescription($errorDescription = null)
    {
        $this->ErrorDescription = $errorDescription;
        return $this;
    }
    /**
     * Get IsPartiallyIndexed value
     * @return boolean
     */
    public function getIsPartiallyIndexed()
    {
        return $this->IsPartiallyIndexed;
    }
    /**
     * Set IsPartiallyIndexed value
     * @param boolean $isPartiallyIndexed
     * @return \Ews\StructType\EwsNonIndexableItemDetailType
     */
    public function setIsPartiallyIndexed($isPartiallyIndexed = null)
    {
        $this->IsPartiallyIndexed = $isPartiallyIndexed;
        return $this;
    }
    /**
     * Get IsPermanentFailure value
     * @return boolean
     */
    public function getIsPermanentFailure()
    {
        return $this->IsPermanentFailure;
    }
    /**
     * Set IsPermanentFailure value
     * @param boolean $isPermanentFailure
     * @return \Ews\StructType\EwsNonIndexableItemDetailType
     */
    public function setIsPermanentFailure($isPermanentFailure = null)
    {
        $this->IsPermanentFailure = $isPermanentFailure;
        return $this;
    }
    /**
     * Get SortValue value
     * @return string
     */
    public function getSortValue()
    {
        return $this->SortValue;
    }
    /**
     * Set SortValue value
     * @param string $sortValue
     * @return \Ews\StructType\EwsNonIndexableItemDetailType
     */
    public function setSortValue($sortValue = null)
    {
        $this->SortValue = $sortValue;
        return $this;
    }
    /**
     * Get AttemptCount value
     * @return int
     */
    public function getAttemptCount()
    {
        return $this->AttemptCount;
    }
    /**
     * Set AttemptCount value
     * @param int $attemptCount
     * @return \Ews\StructType\EwsNonIndexableItemDetailType
     */
    public function setAttemptCount($attemptCount = null)
    {
        $this->AttemptCount = $attemptCount;
        return $this;
    }
    /**
     * Get LastAttemptTime value
     * @return dateTime|null
     */
    public function getLastAttemptTime()
    {
        return $this->LastAttemptTime;
    }
    /**
     * Set LastAttemptTime value
     * @param dateTime $lastAttemptTime
     * @return \Ews\StructType\EwsNonIndexableItemDetailType
     */
    public function setLastAttemptTime($lastAttemptTime = null)
    {
        $this->LastAttemptTime = $lastAttemptTime;
        return $this;
    }
    /**
     * Get AdditionalInfo value
     * @return string|null
     */
    public function getAdditionalInfo()
    {
        return $this->AdditionalInfo;
    }
    /**
     * Set AdditionalInfo value
     * @param string $additionalInfo
     * @return \Ews\StructType\EwsNonIndexableItemDetailType
     */
    public function setAdditionalInfo($additionalInfo = null)
    {
        $this->AdditionalInfo = $additionalInfo;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsNonIndexableItemDetailType
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
