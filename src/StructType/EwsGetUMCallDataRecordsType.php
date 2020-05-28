<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUMCallDataRecordsType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetUMCallDataRecordsType extends EwsBaseRequestType
{
    /**
     * The FilterBy
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $FilterBy;
    /**
     * The StartDateTime
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $StartDateTime;
    /**
     * The EndDateTime
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $EndDateTime;
    /**
     * The Offset
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $Offset;
    /**
     * The NumberOfRecords
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $NumberOfRecords;
    /**
     * The UserLegacyExchangeDN
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $UserLegacyExchangeDN;
    /**
     * Constructor method for GetUMCallDataRecordsType
     * @uses EwsGetUMCallDataRecordsType::setFilterBy()
     * @uses EwsGetUMCallDataRecordsType::setStartDateTime()
     * @uses EwsGetUMCallDataRecordsType::setEndDateTime()
     * @uses EwsGetUMCallDataRecordsType::setOffset()
     * @uses EwsGetUMCallDataRecordsType::setNumberOfRecords()
     * @uses EwsGetUMCallDataRecordsType::setUserLegacyExchangeDN()
     * @param string $filterBy
     * @param string $startDateTime
     * @param string $endDateTime
     * @param int $offset
     * @param int $numberOfRecords
     * @param string $userLegacyExchangeDN
     */
    public function __construct($filterBy = null, $startDateTime = null, $endDateTime = null, $offset = null, $numberOfRecords = null, $userLegacyExchangeDN = null)
    {
        $this
            ->setFilterBy($filterBy)
            ->setStartDateTime($startDateTime)
            ->setEndDateTime($endDateTime)
            ->setOffset($offset)
            ->setNumberOfRecords($numberOfRecords)
            ->setUserLegacyExchangeDN($userLegacyExchangeDN);
    }
    /**
     * Get FilterBy value
     * @return string
     */
    public function getFilterBy()
    {
        return $this->FilterBy;
    }
    /**
     * Set FilterBy value
     * @uses \Ews\EnumType\EwsUMCDRFilterByType::valueIsValid()
     * @uses \Ews\EnumType\EwsUMCDRFilterByType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $filterBy
     * @return \Ews\StructType\EwsGetUMCallDataRecordsType
     */
    public function setFilterBy($filterBy = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsUMCDRFilterByType::valueIsValid($filterBy)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsUMCDRFilterByType', is_array($filterBy) ? implode(', ', $filterBy) : var_export($filterBy, true), implode(', ', \Ews\EnumType\EwsUMCDRFilterByType::getValidValues())), __LINE__);
        }
        $this->FilterBy = $filterBy;
        return $this;
    }
    /**
     * Get StartDateTime value
     * @return string|null
     */
    public function getStartDateTime()
    {
        return $this->StartDateTime;
    }
    /**
     * Set StartDateTime value
     * @param string $startDateTime
     * @return \Ews\StructType\EwsGetUMCallDataRecordsType
     */
    public function setStartDateTime($startDateTime = null)
    {
        // validation for constraint: string
        if (!is_null($startDateTime) && !is_string($startDateTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startDateTime, true), gettype($startDateTime)), __LINE__);
        }
        $this->StartDateTime = $startDateTime;
        return $this;
    }
    /**
     * Get EndDateTime value
     * @return string|null
     */
    public function getEndDateTime()
    {
        return $this->EndDateTime;
    }
    /**
     * Set EndDateTime value
     * @param string $endDateTime
     * @return \Ews\StructType\EwsGetUMCallDataRecordsType
     */
    public function setEndDateTime($endDateTime = null)
    {
        // validation for constraint: string
        if (!is_null($endDateTime) && !is_string($endDateTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endDateTime, true), gettype($endDateTime)), __LINE__);
        }
        $this->EndDateTime = $endDateTime;
        return $this;
    }
    /**
     * Get Offset value
     * @return int|null
     */
    public function getOffset()
    {
        return $this->Offset;
    }
    /**
     * Set Offset value
     * @param int $offset
     * @return \Ews\StructType\EwsGetUMCallDataRecordsType
     */
    public function setOffset($offset = null)
    {
        // validation for constraint: int
        if (!is_null($offset) && !(is_int($offset) || ctype_digit($offset))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($offset, true), gettype($offset)), __LINE__);
        }
        $this->Offset = $offset;
        return $this;
    }
    /**
     * Get NumberOfRecords value
     * @return int|null
     */
    public function getNumberOfRecords()
    {
        return $this->NumberOfRecords;
    }
    /**
     * Set NumberOfRecords value
     * @param int $numberOfRecords
     * @return \Ews\StructType\EwsGetUMCallDataRecordsType
     */
    public function setNumberOfRecords($numberOfRecords = null)
    {
        // validation for constraint: int
        if (!is_null($numberOfRecords) && !(is_int($numberOfRecords) || ctype_digit($numberOfRecords))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numberOfRecords, true), gettype($numberOfRecords)), __LINE__);
        }
        $this->NumberOfRecords = $numberOfRecords;
        return $this;
    }
    /**
     * Get UserLegacyExchangeDN value
     * @return string|null
     */
    public function getUserLegacyExchangeDN()
    {
        return $this->UserLegacyExchangeDN;
    }
    /**
     * Set UserLegacyExchangeDN value
     * @param string $userLegacyExchangeDN
     * @return \Ews\StructType\EwsGetUMCallDataRecordsType
     */
    public function setUserLegacyExchangeDN($userLegacyExchangeDN = null)
    {
        // validation for constraint: string
        if (!is_null($userLegacyExchangeDN) && !is_string($userLegacyExchangeDN)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($userLegacyExchangeDN, true), gettype($userLegacyExchangeDN)), __LINE__);
        }
        $this->UserLegacyExchangeDN = $userLegacyExchangeDN;
        return $this;
    }
}
