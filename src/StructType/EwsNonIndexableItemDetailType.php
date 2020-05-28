<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NonIndexableItemDetailType StructType
 * Meta information extracted from the WSDL
 * - documentation: Non indexable item detail.
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsNonIndexableItemDetailType extends AbstractStructBase
{
    /**
     * The ItemId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Ews\StructType\EwsItemIdType
     */
    public $ItemId;
    /**
     * The ErrorCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $ErrorCode;
    /**
     * The ErrorDescription
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $ErrorDescription;
    /**
     * The IsPartiallyIndexed
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $IsPartiallyIndexed;
    /**
     * The IsPermanentFailure
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $IsPermanentFailure;
    /**
     * The SortValue
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $SortValue;
    /**
     * The AttemptCount
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $AttemptCount;
    /**
     * The LastAttemptTime
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $LastAttemptTime;
    /**
     * The AdditionalInfo
     * Meta information extracted from the WSDL
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
     * @param bool $isPartiallyIndexed
     * @param bool $isPermanentFailure
     * @param string $sortValue
     * @param int $attemptCount
     * @param string $lastAttemptTime
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
     * @throws \InvalidArgumentException
     * @param string $errorCode
     * @return \Ews\StructType\EwsNonIndexableItemDetailType
     */
    public function setErrorCode($errorCode = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsItemIndexErrorType::valueIsValid($errorCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsItemIndexErrorType', is_array($errorCode) ? implode(', ', $errorCode) : var_export($errorCode, true), implode(', ', \Ews\EnumType\EwsItemIndexErrorType::getValidValues())), __LINE__);
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
        // validation for constraint: string
        if (!is_null($errorDescription) && !is_string($errorDescription)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($errorDescription, true), gettype($errorDescription)), __LINE__);
        }
        $this->ErrorDescription = $errorDescription;
        return $this;
    }
    /**
     * Get IsPartiallyIndexed value
     * @return bool
     */
    public function getIsPartiallyIndexed()
    {
        return $this->IsPartiallyIndexed;
    }
    /**
     * Set IsPartiallyIndexed value
     * @param bool $isPartiallyIndexed
     * @return \Ews\StructType\EwsNonIndexableItemDetailType
     */
    public function setIsPartiallyIndexed($isPartiallyIndexed = null)
    {
        // validation for constraint: boolean
        if (!is_null($isPartiallyIndexed) && !is_bool($isPartiallyIndexed)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isPartiallyIndexed, true), gettype($isPartiallyIndexed)), __LINE__);
        }
        $this->IsPartiallyIndexed = $isPartiallyIndexed;
        return $this;
    }
    /**
     * Get IsPermanentFailure value
     * @return bool
     */
    public function getIsPermanentFailure()
    {
        return $this->IsPermanentFailure;
    }
    /**
     * Set IsPermanentFailure value
     * @param bool $isPermanentFailure
     * @return \Ews\StructType\EwsNonIndexableItemDetailType
     */
    public function setIsPermanentFailure($isPermanentFailure = null)
    {
        // validation for constraint: boolean
        if (!is_null($isPermanentFailure) && !is_bool($isPermanentFailure)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isPermanentFailure, true), gettype($isPermanentFailure)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($sortValue) && !is_string($sortValue)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sortValue, true), gettype($sortValue)), __LINE__);
        }
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
        // validation for constraint: int
        if (!is_null($attemptCount) && !(is_int($attemptCount) || ctype_digit($attemptCount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($attemptCount, true), gettype($attemptCount)), __LINE__);
        }
        $this->AttemptCount = $attemptCount;
        return $this;
    }
    /**
     * Get LastAttemptTime value
     * @return string|null
     */
    public function getLastAttemptTime()
    {
        return $this->LastAttemptTime;
    }
    /**
     * Set LastAttemptTime value
     * @param string $lastAttemptTime
     * @return \Ews\StructType\EwsNonIndexableItemDetailType
     */
    public function setLastAttemptTime($lastAttemptTime = null)
    {
        // validation for constraint: string
        if (!is_null($lastAttemptTime) && !is_string($lastAttemptTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastAttemptTime, true), gettype($lastAttemptTime)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($additionalInfo) && !is_string($additionalInfo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($additionalInfo, true), gettype($additionalInfo)), __LINE__);
        }
        $this->AdditionalInfo = $additionalInfo;
        return $this;
    }
}
