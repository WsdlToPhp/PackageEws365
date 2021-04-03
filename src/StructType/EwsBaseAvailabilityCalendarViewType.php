<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var string
     */
    protected string $FreeBusyViewType;
    /**
     * Constructor method for BaseAvailabilityCalendarViewType
     * @uses EwsBaseAvailabilityCalendarViewType::setFreeBusyViewType()
     * @param array|string $freeBusyViewType
     */
    public function __construct($freeBusyViewType)
    {
        $this
            ->setFreeBusyViewType($freeBusyViewType);
    }
    /**
     * Get FreeBusyViewType value
     * @return string
     */
    public function getFreeBusyViewType(): string
    {
        return $this->FreeBusyViewType;
    }
    /**
     * This method is responsible for validating the values passed to the setFreeBusyViewType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFreeBusyViewType method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFreeBusyViewTypeForArrayConstraintsFromSetFreeBusyViewType(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $baseAvailabilityCalendarViewTypeFreeBusyViewTypeItem) {
            // validation for constraint: enumeration
            if (!\EnumType\EwsFreeBusyViewType::valueIsValid($baseAvailabilityCalendarViewTypeFreeBusyViewTypeItem)) {
                $invalidValues[] = is_object($baseAvailabilityCalendarViewTypeFreeBusyViewTypeItem) ? get_class($baseAvailabilityCalendarViewTypeFreeBusyViewTypeItem) : sprintf('%s(%s)', gettype($baseAvailabilityCalendarViewTypeFreeBusyViewTypeItem), var_export($baseAvailabilityCalendarViewTypeFreeBusyViewTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsFreeBusyViewType', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \EnumType\EwsFreeBusyViewType::getValidValues()));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set FreeBusyViewType value
     * @uses \EnumType\EwsFreeBusyViewType::valueIsValid()
     * @uses \EnumType\EwsFreeBusyViewType::getValidValues()
     * @throws InvalidArgumentException
     * @param array|string $freeBusyViewType
     * @return \StructType\EwsBaseAvailabilityCalendarViewType
     */
    public function setFreeBusyViewType($freeBusyViewType): self
    {
        // validation for constraint: list
        if ('' !== ($freeBusyViewTypeArrayErrorMessage = self::validateFreeBusyViewTypeForArrayConstraintsFromSetFreeBusyViewType(is_string($freeBusyViewType) ? explode(' ', $freeBusyViewType) : $freeBusyViewType))) {
            throw new InvalidArgumentException($freeBusyViewTypeArrayErrorMessage, __LINE__);
        }
        $this->FreeBusyViewType = is_array($freeBusyViewType) ? implode(' ', $freeBusyViewType) : $freeBusyViewType;
        
        return $this;
    }
}
