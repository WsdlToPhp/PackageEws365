<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
    protected string $FilterBy;
    /**
     * The StartDateTime
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $StartDateTime = null;
    /**
     * The EndDateTime
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $EndDateTime = null;
    /**
     * The Offset
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $Offset = null;
    /**
     * The NumberOfRecords
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $NumberOfRecords = null;
    /**
     * The UserLegacyExchangeDN
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $UserLegacyExchangeDN = null;
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
    public function __construct(string $filterBy, ?string $startDateTime = null, ?string $endDateTime = null, ?int $offset = null, ?int $numberOfRecords = null, ?string $userLegacyExchangeDN = null)
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
    public function getFilterBy(): string
    {
        return $this->FilterBy;
    }
    /**
     * Set FilterBy value
     * @uses \EnumType\EwsUMCDRFilterByType::valueIsValid()
     * @uses \EnumType\EwsUMCDRFilterByType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $filterBy
     * @return \StructType\EwsGetUMCallDataRecordsType
     */
    public function setFilterBy(string $filterBy): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsUMCDRFilterByType::valueIsValid($filterBy)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsUMCDRFilterByType', is_array($filterBy) ? implode(', ', $filterBy) : var_export($filterBy, true), implode(', ', \EnumType\EwsUMCDRFilterByType::getValidValues())), __LINE__);
        }
        $this->FilterBy = $filterBy;
        
        return $this;
    }
    /**
     * Get StartDateTime value
     * @return string|null
     */
    public function getStartDateTime(): ?string
    {
        return $this->StartDateTime;
    }
    /**
     * Set StartDateTime value
     * @param string $startDateTime
     * @return \StructType\EwsGetUMCallDataRecordsType
     */
    public function setStartDateTime(?string $startDateTime = null): self
    {
        // validation for constraint: string
        if (!is_null($startDateTime) && !is_string($startDateTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startDateTime, true), gettype($startDateTime)), __LINE__);
        }
        $this->StartDateTime = $startDateTime;
        
        return $this;
    }
    /**
     * Get EndDateTime value
     * @return string|null
     */
    public function getEndDateTime(): ?string
    {
        return $this->EndDateTime;
    }
    /**
     * Set EndDateTime value
     * @param string $endDateTime
     * @return \StructType\EwsGetUMCallDataRecordsType
     */
    public function setEndDateTime(?string $endDateTime = null): self
    {
        // validation for constraint: string
        if (!is_null($endDateTime) && !is_string($endDateTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endDateTime, true), gettype($endDateTime)), __LINE__);
        }
        $this->EndDateTime = $endDateTime;
        
        return $this;
    }
    /**
     * Get Offset value
     * @return int|null
     */
    public function getOffset(): ?int
    {
        return $this->Offset;
    }
    /**
     * Set Offset value
     * @param int $offset
     * @return \StructType\EwsGetUMCallDataRecordsType
     */
    public function setOffset(?int $offset = null): self
    {
        // validation for constraint: int
        if (!is_null($offset) && !(is_int($offset) || ctype_digit($offset))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($offset, true), gettype($offset)), __LINE__);
        }
        $this->Offset = $offset;
        
        return $this;
    }
    /**
     * Get NumberOfRecords value
     * @return int|null
     */
    public function getNumberOfRecords(): ?int
    {
        return $this->NumberOfRecords;
    }
    /**
     * Set NumberOfRecords value
     * @param int $numberOfRecords
     * @return \StructType\EwsGetUMCallDataRecordsType
     */
    public function setNumberOfRecords(?int $numberOfRecords = null): self
    {
        // validation for constraint: int
        if (!is_null($numberOfRecords) && !(is_int($numberOfRecords) || ctype_digit($numberOfRecords))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numberOfRecords, true), gettype($numberOfRecords)), __LINE__);
        }
        $this->NumberOfRecords = $numberOfRecords;
        
        return $this;
    }
    /**
     * Get UserLegacyExchangeDN value
     * @return string|null
     */
    public function getUserLegacyExchangeDN(): ?string
    {
        return $this->UserLegacyExchangeDN;
    }
    /**
     * Set UserLegacyExchangeDN value
     * @param string $userLegacyExchangeDN
     * @return \StructType\EwsGetUMCallDataRecordsType
     */
    public function setUserLegacyExchangeDN(?string $userLegacyExchangeDN = null): self
    {
        // validation for constraint: string
        if (!is_null($userLegacyExchangeDN) && !is_string($userLegacyExchangeDN)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($userLegacyExchangeDN, true), gettype($userLegacyExchangeDN)), __LINE__);
        }
        $this->UserLegacyExchangeDN = $userLegacyExchangeDN;
        
        return $this;
    }
}
