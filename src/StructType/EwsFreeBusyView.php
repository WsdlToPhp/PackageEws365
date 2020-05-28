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
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string[]
     */
    public $FreeBusyViewType;
    /**
     * The MergedFreeBusy
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $MergedFreeBusy;
    /**
     * The CalendarEventArray
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfCalendarEvent
     */
    public $CalendarEventArray;
    /**
     * The WorkingHours
     * Meta information extracted from the WSDL
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
    public function __construct(array $freeBusyViewType = array(), $mergedFreeBusy = null, \Ews\ArrayType\EwsArrayOfCalendarEvent $calendarEventArray = null, \Ews\StructType\EwsWorkingHours $workingHours = null)
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
     * This method is responsible for validating the values passed to the setFreeBusyViewType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFreeBusyViewType method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFreeBusyViewTypeForArrayConstraintsFromSetFreeBusyViewType(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $freeBusyViewFreeBusyViewTypeItem) {
            // validation for constraint: enumeration
            if (!\Ews\EnumType\EwsFreeBusyViewType::valueIsValid($freeBusyViewFreeBusyViewTypeItem)) {
                $invalidValues[] = is_object($freeBusyViewFreeBusyViewTypeItem) ? get_class($freeBusyViewFreeBusyViewTypeItem) : sprintf('%s(%s)', gettype($freeBusyViewFreeBusyViewTypeItem), var_export($freeBusyViewFreeBusyViewTypeItem, true));
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
     * @return \Ews\StructType\EwsFreeBusyView
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
        // validation for constraint: string
        if (!is_null($mergedFreeBusy) && !is_string($mergedFreeBusy)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mergedFreeBusy, true), gettype($mergedFreeBusy)), __LINE__);
        }
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
}
