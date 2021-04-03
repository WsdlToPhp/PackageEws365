<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
    protected string $CalendarPermissionLevel;
    /**
     * The ReadItems
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ReadItems = null;
    /**
     * Constructor method for CalendarPermissionType
     * @uses EwsCalendarPermissionType::setCalendarPermissionLevel()
     * @uses EwsCalendarPermissionType::setReadItems()
     * @param string $calendarPermissionLevel
     * @param string $readItems
     */
    public function __construct(string $calendarPermissionLevel, ?string $readItems = null)
    {
        $this
            ->setCalendarPermissionLevel($calendarPermissionLevel)
            ->setReadItems($readItems);
    }
    /**
     * Get CalendarPermissionLevel value
     * @return string
     */
    public function getCalendarPermissionLevel(): string
    {
        return $this->CalendarPermissionLevel;
    }
    /**
     * Set CalendarPermissionLevel value
     * @uses \EnumType\EwsCalendarPermissionLevelType::valueIsValid()
     * @uses \EnumType\EwsCalendarPermissionLevelType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $calendarPermissionLevel
     * @return \StructType\EwsCalendarPermissionType
     */
    public function setCalendarPermissionLevel(string $calendarPermissionLevel): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsCalendarPermissionLevelType::valueIsValid($calendarPermissionLevel)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsCalendarPermissionLevelType', is_array($calendarPermissionLevel) ? implode(', ', $calendarPermissionLevel) : var_export($calendarPermissionLevel, true), implode(', ', \EnumType\EwsCalendarPermissionLevelType::getValidValues())), __LINE__);
        }
        $this->CalendarPermissionLevel = $calendarPermissionLevel;
        
        return $this;
    }
    /**
     * Get ReadItems value
     * @return string|null
     */
    public function getReadItems(): ?string
    {
        return $this->ReadItems;
    }
    /**
     * Set ReadItems value
     * @uses \EnumType\EwsCalendarPermissionReadAccessType::valueIsValid()
     * @uses \EnumType\EwsCalendarPermissionReadAccessType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $readItems
     * @return \StructType\EwsCalendarPermissionType
     */
    public function setReadItems(?string $readItems = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsCalendarPermissionReadAccessType::valueIsValid($readItems)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsCalendarPermissionReadAccessType', is_array($readItems) ? implode(', ', $readItems) : var_export($readItems, true), implode(', ', \EnumType\EwsCalendarPermissionReadAccessType::getValidValues())), __LINE__);
        }
        $this->ReadItems = $readItems;
        
        return $this;
    }
}
