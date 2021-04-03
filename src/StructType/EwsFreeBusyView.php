<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var string
     */
    protected string $FreeBusyViewType;
    /**
     * The MergedFreeBusy
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $MergedFreeBusy = null;
    /**
     * The CalendarEventArray
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfCalendarEvent|null
     */
    protected ?\ArrayType\EwsArrayOfCalendarEvent $CalendarEventArray = null;
    /**
     * The WorkingHours
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\EwsWorkingHours|null
     */
    protected ?\StructType\EwsWorkingHours $WorkingHours = null;
    /**
     * Constructor method for FreeBusyView
     * @uses EwsFreeBusyView::setFreeBusyViewType()
     * @uses EwsFreeBusyView::setMergedFreeBusy()
     * @uses EwsFreeBusyView::setCalendarEventArray()
     * @uses EwsFreeBusyView::setWorkingHours()
     * @param array|string $freeBusyViewType
     * @param string $mergedFreeBusy
     * @param \ArrayType\EwsArrayOfCalendarEvent $calendarEventArray
     * @param \StructType\EwsWorkingHours $workingHours
     */
    public function __construct($freeBusyViewType, ?string $mergedFreeBusy = null, ?\ArrayType\EwsArrayOfCalendarEvent $calendarEventArray = null, ?\StructType\EwsWorkingHours $workingHours = null)
    {
        $this
            ->setFreeBusyViewType($freeBusyViewType)
            ->setMergedFreeBusy($mergedFreeBusy)
            ->setCalendarEventArray($calendarEventArray)
            ->setWorkingHours($workingHours);
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
        foreach ($values as $freeBusyViewFreeBusyViewTypeItem) {
            // validation for constraint: enumeration
            if (!\EnumType\EwsFreeBusyViewType::valueIsValid($freeBusyViewFreeBusyViewTypeItem)) {
                $invalidValues[] = is_object($freeBusyViewFreeBusyViewTypeItem) ? get_class($freeBusyViewFreeBusyViewTypeItem) : sprintf('%s(%s)', gettype($freeBusyViewFreeBusyViewTypeItem), var_export($freeBusyViewFreeBusyViewTypeItem, true));
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
     * @return \StructType\EwsFreeBusyView
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
    /**
     * Get MergedFreeBusy value
     * @return string|null
     */
    public function getMergedFreeBusy(): ?string
    {
        return $this->MergedFreeBusy;
    }
    /**
     * Set MergedFreeBusy value
     * @param string $mergedFreeBusy
     * @return \StructType\EwsFreeBusyView
     */
    public function setMergedFreeBusy(?string $mergedFreeBusy = null): self
    {
        // validation for constraint: string
        if (!is_null($mergedFreeBusy) && !is_string($mergedFreeBusy)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mergedFreeBusy, true), gettype($mergedFreeBusy)), __LINE__);
        }
        $this->MergedFreeBusy = $mergedFreeBusy;
        
        return $this;
    }
    /**
     * Get CalendarEventArray value
     * @return \ArrayType\EwsArrayOfCalendarEvent|null
     */
    public function getCalendarEventArray(): ?\ArrayType\EwsArrayOfCalendarEvent
    {
        return $this->CalendarEventArray;
    }
    /**
     * Set CalendarEventArray value
     * @param \ArrayType\EwsArrayOfCalendarEvent $calendarEventArray
     * @return \StructType\EwsFreeBusyView
     */
    public function setCalendarEventArray(?\ArrayType\EwsArrayOfCalendarEvent $calendarEventArray = null): self
    {
        $this->CalendarEventArray = $calendarEventArray;
        
        return $this;
    }
    /**
     * Get WorkingHours value
     * @return \StructType\EwsWorkingHours|null
     */
    public function getWorkingHours(): ?\StructType\EwsWorkingHours
    {
        return $this->WorkingHours;
    }
    /**
     * Set WorkingHours value
     * @param \StructType\EwsWorkingHours $workingHours
     * @return \StructType\EwsFreeBusyView
     */
    public function setWorkingHours(?\StructType\EwsWorkingHours $workingHours = null): self
    {
        $this->WorkingHours = $workingHours;
        
        return $this;
    }
}
