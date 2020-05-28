<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for IndividualAttendeeConflictData StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsIndividualAttendeeConflictData extends EwsAttendeeConflictData
{
    /**
     * The BusyType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $BusyType;
    /**
     * Constructor method for IndividualAttendeeConflictData
     * @uses EwsIndividualAttendeeConflictData::setBusyType()
     * @param string $busyType
     */
    public function __construct($busyType = null)
    {
        $this
            ->setBusyType($busyType);
    }
    /**
     * Get BusyType value
     * @return string
     */
    public function getBusyType()
    {
        return $this->BusyType;
    }
    /**
     * Set BusyType value
     * @uses \Ews\EnumType\EwsLegacyFreeBusyType::valueIsValid()
     * @uses \Ews\EnumType\EwsLegacyFreeBusyType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $busyType
     * @return \Ews\StructType\EwsIndividualAttendeeConflictData
     */
    public function setBusyType($busyType = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsLegacyFreeBusyType::valueIsValid($busyType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsLegacyFreeBusyType', is_array($busyType) ? implode(', ', $busyType) : var_export($busyType, true), implode(', ', \Ews\EnumType\EwsLegacyFreeBusyType::getValidValues())), __LINE__);
        }
        $this->BusyType = $busyType;
        return $this;
    }
}
