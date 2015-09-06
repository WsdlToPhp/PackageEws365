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
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $FilterBy;
    /**
     * The StartDateTime
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var dateTime
     */
    public $StartDateTime;
    /**
     * The EndDateTime
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var dateTime
     */
    public $EndDateTime;
    /**
     * The Offset
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $Offset;
    /**
     * The NumberOfRecords
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $NumberOfRecords;
    /**
     * The UserLegacyExchangeDN
     * Meta informations extracted from the WSDL
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
     * @param dateTime $startDateTime
     * @param dateTime $endDateTime
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
     * @param string $filterBy
     * @return \Ews\StructType\EwsGetUMCallDataRecordsType
     */
    public function setFilterBy($filterBy = null)
    {
        if (!\Ews\EnumType\EwsUMCDRFilterByType::valueIsValid($filterBy)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $filterBy, implode(', ', \Ews\EnumType\EwsUMCDRFilterByType::getValidValues())), __LINE__);
        }
        $this->FilterBy = $filterBy;
        return $this;
    }
    /**
     * Get StartDateTime value
     * @return dateTime|null
     */
    public function getStartDateTime()
    {
        return $this->StartDateTime;
    }
    /**
     * Set StartDateTime value
     * @param dateTime $startDateTime
     * @return \Ews\StructType\EwsGetUMCallDataRecordsType
     */
    public function setStartDateTime($startDateTime = null)
    {
        $this->StartDateTime = $startDateTime;
        return $this;
    }
    /**
     * Get EndDateTime value
     * @return dateTime|null
     */
    public function getEndDateTime()
    {
        return $this->EndDateTime;
    }
    /**
     * Set EndDateTime value
     * @param dateTime $endDateTime
     * @return \Ews\StructType\EwsGetUMCallDataRecordsType
     */
    public function setEndDateTime($endDateTime = null)
    {
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
        $this->UserLegacyExchangeDN = $userLegacyExchangeDN;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsGetUMCallDataRecordsType
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
