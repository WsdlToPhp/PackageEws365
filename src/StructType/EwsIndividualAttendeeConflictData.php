<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
    protected string $BusyType;
    /**
     * Constructor method for IndividualAttendeeConflictData
     * @uses EwsIndividualAttendeeConflictData::setBusyType()
     * @param string $busyType
     */
    public function __construct(string $busyType)
    {
        $this
            ->setBusyType($busyType);
    }
    /**
     * Get BusyType value
     * @return string
     */
    public function getBusyType(): string
    {
        return $this->BusyType;
    }
    /**
     * Set BusyType value
     * @uses \EnumType\EwsLegacyFreeBusyType::valueIsValid()
     * @uses \EnumType\EwsLegacyFreeBusyType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $busyType
     * @return \StructType\EwsIndividualAttendeeConflictData
     */
    public function setBusyType(string $busyType): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsLegacyFreeBusyType::valueIsValid($busyType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsLegacyFreeBusyType', is_array($busyType) ? implode(', ', $busyType) : var_export($busyType, true), implode(', ', \EnumType\EwsLegacyFreeBusyType::getValidValues())), __LINE__);
        }
        $this->BusyType = $busyType;
        
        return $this;
    }
}
