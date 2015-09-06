<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ArrayOfAttendeeConflictData StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfAttendeeConflictData extends AbstractStructBase
{
    /**
     * The UnknownAttendeeConflictData
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \Ews\StructType\EwsUnknownAttendeeConflictData
     */
    public $UnknownAttendeeConflictData;
    /**
     * The IndividualAttendeeConflictData
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \Ews\StructType\EwsIndividualAttendeeConflictData
     */
    public $IndividualAttendeeConflictData;
    /**
     * The TooBigGroupAttendeeConflictData
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \Ews\StructType\EwsTooBigGroupAttendeeConflictData
     */
    public $TooBigGroupAttendeeConflictData;
    /**
     * The GroupAttendeeConflictData
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \Ews\StructType\EwsGroupAttendeeConflictData
     */
    public $GroupAttendeeConflictData;
    /**
     * Constructor method for ArrayOfAttendeeConflictData
     * @uses EwsArrayOfAttendeeConflictData::setUnknownAttendeeConflictData()
     * @uses EwsArrayOfAttendeeConflictData::setIndividualAttendeeConflictData()
     * @uses EwsArrayOfAttendeeConflictData::setTooBigGroupAttendeeConflictData()
     * @uses EwsArrayOfAttendeeConflictData::setGroupAttendeeConflictData()
     * @param \Ews\StructType\EwsUnknownAttendeeConflictData
     * $unknownAttendeeConflictData
     * @param \Ews\StructType\EwsIndividualAttendeeConflictData
     * $individualAttendeeConflictData
     * @param \Ews\StructType\EwsTooBigGroupAttendeeConflictData
     * $tooBigGroupAttendeeConflictData
     * @param \Ews\StructType\EwsGroupAttendeeConflictData $groupAttendeeConflictData
     */
    public function __construct(\Ews\StructType\EwsUnknownAttendeeConflictData $unknownAttendeeConflictData = null, \Ews\StructType\EwsIndividualAttendeeConflictData $individualAttendeeConflictData = null, \Ews\StructType\EwsTooBigGroupAttendeeConflictData $tooBigGroupAttendeeConflictData = null, \Ews\StructType\EwsGroupAttendeeConflictData $groupAttendeeConflictData = null)
    {
        $this
            ->setUnknownAttendeeConflictData($unknownAttendeeConflictData)
            ->setIndividualAttendeeConflictData($individualAttendeeConflictData)
            ->setTooBigGroupAttendeeConflictData($tooBigGroupAttendeeConflictData)
            ->setGroupAttendeeConflictData($groupAttendeeConflictData);
    }
    /**
     * Get UnknownAttendeeConflictData value
     * @return \Ews\StructType\EwsUnknownAttendeeConflictData
     */
    public function getUnknownAttendeeConflictData()
    {
        return $this->UnknownAttendeeConflictData;
    }
    /**
     * Set UnknownAttendeeConflictData value
     * @param \Ews\StructType\EwsUnknownAttendeeConflictData
     * $unknownAttendeeConflictData
     * @return \Ews\StructType\EwsArrayOfAttendeeConflictData
     */
    public function setUnknownAttendeeConflictData(\Ews\StructType\EwsUnknownAttendeeConflictData $unknownAttendeeConflictData = null)
    {
        $this->UnknownAttendeeConflictData = $unknownAttendeeConflictData;
        return $this;
    }
    /**
     * Get IndividualAttendeeConflictData value
     * @return \Ews\StructType\EwsIndividualAttendeeConflictData
     */
    public function getIndividualAttendeeConflictData()
    {
        return $this->IndividualAttendeeConflictData;
    }
    /**
     * Set IndividualAttendeeConflictData value
     * @param \Ews\StructType\EwsIndividualAttendeeConflictData
     * $individualAttendeeConflictData
     * @return \Ews\StructType\EwsArrayOfAttendeeConflictData
     */
    public function setIndividualAttendeeConflictData(\Ews\StructType\EwsIndividualAttendeeConflictData $individualAttendeeConflictData = null)
    {
        $this->IndividualAttendeeConflictData = $individualAttendeeConflictData;
        return $this;
    }
    /**
     * Get TooBigGroupAttendeeConflictData value
     * @return \Ews\StructType\EwsTooBigGroupAttendeeConflictData
     */
    public function getTooBigGroupAttendeeConflictData()
    {
        return $this->TooBigGroupAttendeeConflictData;
    }
    /**
     * Set TooBigGroupAttendeeConflictData value
     * @param \Ews\StructType\EwsTooBigGroupAttendeeConflictData
     * $tooBigGroupAttendeeConflictData
     * @return \Ews\StructType\EwsArrayOfAttendeeConflictData
     */
    public function setTooBigGroupAttendeeConflictData(\Ews\StructType\EwsTooBigGroupAttendeeConflictData $tooBigGroupAttendeeConflictData = null)
    {
        $this->TooBigGroupAttendeeConflictData = $tooBigGroupAttendeeConflictData;
        return $this;
    }
    /**
     * Get GroupAttendeeConflictData value
     * @return \Ews\StructType\EwsGroupAttendeeConflictData
     */
    public function getGroupAttendeeConflictData()
    {
        return $this->GroupAttendeeConflictData;
    }
    /**
     * Set GroupAttendeeConflictData value
     * @param \Ews\StructType\EwsGroupAttendeeConflictData $groupAttendeeConflictData
     * @return \Ews\StructType\EwsArrayOfAttendeeConflictData
     */
    public function setGroupAttendeeConflictData(\Ews\StructType\EwsGroupAttendeeConflictData $groupAttendeeConflictData = null)
    {
        $this->GroupAttendeeConflictData = $groupAttendeeConflictData;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsArrayOfAttendeeConflictData
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
