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
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $CalendarPermissionLevel;
    /**
     * The ReadItems
     * Meta informations extracted from the WSDL
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
     * @param string $calendarPermissionLevel
     * @return \Ews\StructType\EwsCalendarPermissionType
     */
    public function setCalendarPermissionLevel($calendarPermissionLevel = null)
    {
        if (!\Ews\EnumType\EwsCalendarPermissionLevelType::valueIsValid($calendarPermissionLevel)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $calendarPermissionLevel, implode(', ', \Ews\EnumType\EwsCalendarPermissionLevelType::getValidValues())), __LINE__);
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
     * @param string $readItems
     * @return \Ews\StructType\EwsCalendarPermissionType
     */
    public function setReadItems($readItems = null)
    {
        if (!\Ews\EnumType\EwsCalendarPermissionReadAccessType::valueIsValid($readItems)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $readItems, implode(', ', \Ews\EnumType\EwsCalendarPermissionReadAccessType::getValidValues())), __LINE__);
        }
        $this->ReadItems = $readItems;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsCalendarPermissionType
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
