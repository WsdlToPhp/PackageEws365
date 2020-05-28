<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BaseAvailabilityCalendarViewType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsBaseAvailabilityCalendarViewType extends AbstractStructBase
{
    /**
     * The FreeBusyViewType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string[]
     */
    public $FreeBusyViewType;
    /**
     * Constructor method for BaseAvailabilityCalendarViewType
     * @uses EwsBaseAvailabilityCalendarViewType::setFreeBusyViewType()
     * @param string[] $freeBusyViewType
     */
    public function __construct(array $freeBusyViewType = array())
    {
        $this
            ->setFreeBusyViewType($freeBusyViewType);
    }
    /**
     * Get FreeBusyViewType value
     * @return string[]
     */
    public function getFreeBusyViewType()
    {
        return $this->FreeBusyViewType;
    }
    /**
     * This method is responsible for validating the values passed to the setFreeBusyViewType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFreeBusyViewType method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFreeBusyViewTypeForArrayConstraintsFromSetFreeBusyViewType(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $baseAvailabilityCalendarViewTypeFreeBusyViewTypeItem) {
            // validation for constraint: enumeration
            if (!\Ews\EnumType\EwsFreeBusyViewType::valueIsValid($baseAvailabilityCalendarViewTypeFreeBusyViewTypeItem)) {
                $invalidValues[] = is_object($baseAvailabilityCalendarViewTypeFreeBusyViewTypeItem) ? get_class($baseAvailabilityCalendarViewTypeFreeBusyViewTypeItem) : sprintf('%s(%s)', gettype($baseAvailabilityCalendarViewTypeFreeBusyViewTypeItem), var_export($baseAvailabilityCalendarViewTypeFreeBusyViewTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsFreeBusyViewType', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \Ews\EnumType\EwsFreeBusyViewType::getValidValues()));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set FreeBusyViewType value
     * @uses \Ews\EnumType\EwsFreeBusyViewType::valueIsValid()
     * @uses \Ews\EnumType\EwsFreeBusyViewType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $freeBusyViewType
     * @return \Ews\StructType\EwsBaseAvailabilityCalendarViewType
     */
    public function setFreeBusyViewType(array $freeBusyViewType = array())
    {
        // validation for constraint: list
        if ('' !== ($freeBusyViewTypeArrayErrorMessage = self::validateFreeBusyViewTypeForArrayConstraintsFromSetFreeBusyViewType($freeBusyViewType))) {
            throw new \InvalidArgumentException($freeBusyViewTypeArrayErrorMessage, __LINE__);
        }
        $this->FreeBusyViewType = is_array($freeBusyViewType) ? implode(' ', $freeBusyViewType) : null;
        return $this;
    }
}
