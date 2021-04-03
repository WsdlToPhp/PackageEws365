<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FreeBusyViewOptionsType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsFreeBusyViewOptionsType extends AbstractStructBase
{
    /**
     * The TimeWindow
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \StructType\EwsDuration
     */
    protected \StructType\EwsDuration $TimeWindow;
    /**
     * The MergedFreeBusyIntervalInMinutes
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $MergedFreeBusyIntervalInMinutes = null;
    /**
     * The RequestedView
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    protected ?string $RequestedView = null;
    /**
     * Constructor method for FreeBusyViewOptionsType
     * @uses EwsFreeBusyViewOptionsType::setTimeWindow()
     * @uses EwsFreeBusyViewOptionsType::setMergedFreeBusyIntervalInMinutes()
     * @uses EwsFreeBusyViewOptionsType::setRequestedView()
     * @param \StructType\EwsDuration $timeWindow
     * @param int $mergedFreeBusyIntervalInMinutes
     * @param array|string $requestedView
     */
    public function __construct(\StructType\EwsDuration $timeWindow, ?int $mergedFreeBusyIntervalInMinutes = null, $requestedView = [])
    {
        $this
            ->setTimeWindow($timeWindow)
            ->setMergedFreeBusyIntervalInMinutes($mergedFreeBusyIntervalInMinutes)
            ->setRequestedView($requestedView);
    }
    /**
     * Get TimeWindow value
     * @return \StructType\EwsDuration
     */
    public function getTimeWindow(): \StructType\EwsDuration
    {
        return $this->TimeWindow;
    }
    /**
     * Set TimeWindow value
     * @param \StructType\EwsDuration $timeWindow
     * @return \StructType\EwsFreeBusyViewOptionsType
     */
    public function setTimeWindow(\StructType\EwsDuration $timeWindow): self
    {
        $this->TimeWindow = $timeWindow;
        
        return $this;
    }
    /**
     * Get MergedFreeBusyIntervalInMinutes value
     * @return int|null
     */
    public function getMergedFreeBusyIntervalInMinutes(): ?int
    {
        return $this->MergedFreeBusyIntervalInMinutes;
    }
    /**
     * Set MergedFreeBusyIntervalInMinutes value
     * @param int $mergedFreeBusyIntervalInMinutes
     * @return \StructType\EwsFreeBusyViewOptionsType
     */
    public function setMergedFreeBusyIntervalInMinutes(?int $mergedFreeBusyIntervalInMinutes = null): self
    {
        // validation for constraint: int
        if (!is_null($mergedFreeBusyIntervalInMinutes) && !(is_int($mergedFreeBusyIntervalInMinutes) || ctype_digit($mergedFreeBusyIntervalInMinutes))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($mergedFreeBusyIntervalInMinutes, true), gettype($mergedFreeBusyIntervalInMinutes)), __LINE__);
        }
        $this->MergedFreeBusyIntervalInMinutes = $mergedFreeBusyIntervalInMinutes;
        
        return $this;
    }
    /**
     * Get RequestedView value
     * @return string
     */
    public function getRequestedView(): ?string
    {
        return $this->RequestedView;
    }
    /**
     * This method is responsible for validating the values passed to the setRequestedView method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRequestedView method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRequestedViewForArrayConstraintsFromSetRequestedView(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $freeBusyViewOptionsTypeRequestedViewItem) {
            // validation for constraint: enumeration
            if (!\EnumType\EwsFreeBusyViewType::valueIsValid($freeBusyViewOptionsTypeRequestedViewItem)) {
                $invalidValues[] = is_object($freeBusyViewOptionsTypeRequestedViewItem) ? get_class($freeBusyViewOptionsTypeRequestedViewItem) : sprintf('%s(%s)', gettype($freeBusyViewOptionsTypeRequestedViewItem), var_export($freeBusyViewOptionsTypeRequestedViewItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsFreeBusyViewType', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \EnumType\EwsFreeBusyViewType::getValidValues()));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set RequestedView value
     * @uses \EnumType\EwsFreeBusyViewType::valueIsValid()
     * @uses \EnumType\EwsFreeBusyViewType::getValidValues()
     * @throws InvalidArgumentException
     * @param array|string $requestedView
     * @return \StructType\EwsFreeBusyViewOptionsType
     */
    public function setRequestedView($requestedView = []): self
    {
        // validation for constraint: list
        if ('' !== ($requestedViewArrayErrorMessage = self::validateRequestedViewForArrayConstraintsFromSetRequestedView(is_string($requestedView) ? explode(' ', $requestedView) : $requestedView))) {
            throw new InvalidArgumentException($requestedViewArrayErrorMessage, __LINE__);
        }
        $this->RequestedView = is_array($requestedView) ? implode(' ', $requestedView) : $requestedView;
        
        return $this;
    }
}
