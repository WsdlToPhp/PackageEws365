<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CalendarPermissionType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsCalendarPermissionType extends EwsBasePermissionType
{
    /**
     * The CalendarPermissionLevel
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $CalendarPermissionLevel;
    /**
     * The ReadItems
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ReadItems;
    /**
     * Constructor method for CalendarPermissionType
     * @uses EwsCalendarPermissionType::setCalendarPermissionLevel()
     * @uses EwsCalendarPermissionType::setReadItems()
     * @param string $calendarPermissionLevel
     * @param string $readItems
     */
    public function __construct($calendarPermissionLevel = null, $readItems = null)
    {
        $this
            ->setCalendarPermissionLevel($calendarPermissionLevel)
            ->setReadItems($readItems);
    }
    /**
     * Get CalendarPermissionLevel value
     * @return string
     */
    public function getCalendarPermissionLevel()
    {
        return $this->CalendarPermissionLevel;
    }
    /**
     * Set CalendarPermissionLevel value
     * @uses \Ews\EnumType\EwsCalendarPermissionLevelType::valueIsValid()
     * @uses \Ews\EnumType\EwsCalendarPermissionLevelType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $calendarPermissionLevel
     * @return \Ews\StructType\EwsCalendarPermissionType
     */
    public function setCalendarPermissionLevel($calendarPermissionLevel = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsCalendarPermissionLevelType::valueIsValid($calendarPermissionLevel)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsCalendarPermissionLevelType', is_array($calendarPermissionLevel) ? implode(', ', $calendarPermissionLevel) : var_export($calendarPermissionLevel, true), implode(', ', \Ews\EnumType\EwsCalendarPermissionLevelType::getValidValues())), __LINE__);
        }
        $this->CalendarPermissionLevel = $calendarPermissionLevel;
        return $this;
    }
    /**
     * Get ReadItems value
     * @return string|null
     */
    public function getReadItems()
    {
        return $this->ReadItems;
    }
    /**
     * Set ReadItems value
     * @uses \Ews\EnumType\EwsCalendarPermissionReadAccessType::valueIsValid()
     * @uses \Ews\EnumType\EwsCalendarPermissionReadAccessType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $readItems
     * @return \Ews\StructType\EwsCalendarPermissionType
     */
    public function setReadItems($readItems = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsCalendarPermissionReadAccessType::valueIsValid($readItems)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsCalendarPermissionReadAccessType', is_array($readItems) ? implode(', ', $readItems) : var_export($readItems, true), implode(', ', \Ews\EnumType\EwsCalendarPermissionReadAccessType::getValidValues())), __LINE__);
        }
        $this->ReadItems = $readItems;
        return $this;
    }
}
