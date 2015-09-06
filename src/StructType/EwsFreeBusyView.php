<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FreeBusyView StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsFreeBusyView extends AbstractStructBase
{
    /**
     * The FreeBusyViewType
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string[]
     */
    public $FreeBusyViewType;
    /**
     * The MergedFreeBusy
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $MergedFreeBusy;
    /**
     * The CalendarEventArray
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfCalendarEvent
     */
    public $CalendarEventArray;
    /**
     * The WorkingHours
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\StructType\EwsWorkingHours
     */
    public $WorkingHours;
    /**
     * Constructor method for FreeBusyView
     * @uses EwsFreeBusyView::setFreeBusyViewType()
     * @uses EwsFreeBusyView::setMergedFreeBusy()
     * @uses EwsFreeBusyView::setCalendarEventArray()
     * @uses EwsFreeBusyView::setWorkingHours()
     * @param string[] $freeBusyViewType
     * @param string $mergedFreeBusy
     * @param \Ews\ArrayType\EwsArrayOfCalendarEvent $calendarEventArray
     * @param \Ews\StructType\EwsWorkingHours $workingHours
     */
    public function __construct($freeBusyViewType = null, $mergedFreeBusy = null, \Ews\ArrayType\EwsArrayOfCalendarEvent $calendarEventArray = null, \Ews\StructType\EwsWorkingHours $workingHours = null)
    {
        $this
            ->setFreeBusyViewType($freeBusyViewType)
            ->setMergedFreeBusy($mergedFreeBusy)
            ->setCalendarEventArray($calendarEventArray)
            ->setWorkingHours($workingHours);
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
     * Set FreeBusyViewType value
     * @uses \Ews\EnumType\EwsFreeBusyViewType::valueIsValid()
     * @uses \Ews\EnumType\EwsFreeBusyViewType::getValidValues()
     * @param string[] $freeBusyViewType
     * @return \Ews\StructType\EwsFreeBusyView
     */
    public function setFreeBusyViewType($freeBusyViewType = null)
    {
        if (!\Ews\EnumType\EwsFreeBusyViewType::valueIsValid($freeBusyViewType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $freeBusyViewType, implode(', ', \Ews\EnumType\EwsFreeBusyViewType::getValidValues())), __LINE__);
        }
        $this->FreeBusyViewType = $freeBusyViewType;
        return $this;
    }
    /**
     * Get MergedFreeBusy value
     * @return string|null
     */
    public function getMergedFreeBusy()
    {
        return $this->MergedFreeBusy;
    }
    /**
     * Set MergedFreeBusy value
     * @param string $mergedFreeBusy
     * @return \Ews\StructType\EwsFreeBusyView
     */
    public function setMergedFreeBusy($mergedFreeBusy = null)
    {
        $this->MergedFreeBusy = $mergedFreeBusy;
        return $this;
    }
    /**
     * Get CalendarEventArray value
     * @return \Ews\ArrayType\EwsArrayOfCalendarEvent|null
     */
    public function getCalendarEventArray()
    {
        return $this->CalendarEventArray;
    }
    /**
     * Set CalendarEventArray value
     * @param \Ews\ArrayType\EwsArrayOfCalendarEvent $calendarEventArray
     * @return \Ews\StructType\EwsFreeBusyView
     */
    public function setCalendarEventArray(\Ews\ArrayType\EwsArrayOfCalendarEvent $calendarEventArray = null)
    {
        $this->CalendarEventArray = $calendarEventArray;
        return $this;
    }
    /**
     * Get WorkingHours value
     * @return \Ews\StructType\EwsWorkingHours|null
     */
    public function getWorkingHours()
    {
        return $this->WorkingHours;
    }
    /**
     * Set WorkingHours value
     * @param \Ews\StructType\EwsWorkingHours $workingHours
     * @return \Ews\StructType\EwsFreeBusyView
     */
    public function setWorkingHours(\Ews\StructType\EwsWorkingHours $workingHours = null)
    {
        $this->WorkingHours = $workingHours;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsFreeBusyView
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
