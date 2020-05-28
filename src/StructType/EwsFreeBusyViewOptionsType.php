<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \Ews\StructType\EwsDuration
     */
    public $TimeWindow;
    /**
     * The MergedFreeBusyIntervalInMinutes
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $MergedFreeBusyIntervalInMinutes;
    /**
     * The RequestedView
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string[]
     */
    public $RequestedView;
    /**
     * Constructor method for FreeBusyViewOptionsType
     * @uses EwsFreeBusyViewOptionsType::setTimeWindow()
     * @uses EwsFreeBusyViewOptionsType::setMergedFreeBusyIntervalInMinutes()
     * @uses EwsFreeBusyViewOptionsType::setRequestedView()
     * @param \Ews\StructType\EwsDuration $timeWindow
     * @param int $mergedFreeBusyIntervalInMinutes
     * @param string[] $requestedView
     */
    public function __construct(\Ews\StructType\EwsDuration $timeWindow = null, $mergedFreeBusyIntervalInMinutes = null, array $requestedView = array())
    {
        $this
            ->setTimeWindow($timeWindow)
            ->setMergedFreeBusyIntervalInMinutes($mergedFreeBusyIntervalInMinutes)
            ->setRequestedView($requestedView);
    }
    /**
     * Get TimeWindow value
     * @return \Ews\StructType\EwsDuration
     */
    public function getTimeWindow()
    {
        return $this->TimeWindow;
    }
    /**
     * Set TimeWindow value
     * @param \Ews\StructType\EwsDuration $timeWindow
     * @return \Ews\StructType\EwsFreeBusyViewOptionsType
     */
    public function setTimeWindow(\Ews\StructType\EwsDuration $timeWindow = null)
    {
        $this->TimeWindow = $timeWindow;
        return $this;
    }
    /**
     * Get MergedFreeBusyIntervalInMinutes value
     * @return int|null
     */
    public function getMergedFreeBusyIntervalInMinutes()
    {
        return $this->MergedFreeBusyIntervalInMinutes;
    }
    /**
     * Set MergedFreeBusyIntervalInMinutes value
     * @param int $mergedFreeBusyIntervalInMinutes
     * @return \Ews\StructType\EwsFreeBusyViewOptionsType
     */
    public function setMergedFreeBusyIntervalInMinutes($mergedFreeBusyIntervalInMinutes = null)
    {
        // validation for constraint: int
        if (!is_null($mergedFreeBusyIntervalInMinutes) && !(is_int($mergedFreeBusyIntervalInMinutes) || ctype_digit($mergedFreeBusyIntervalInMinutes))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($mergedFreeBusyIntervalInMinutes, true), gettype($mergedFreeBusyIntervalInMinutes)), __LINE__);
        }
        $this->MergedFreeBusyIntervalInMinutes = $mergedFreeBusyIntervalInMinutes;
        return $this;
    }
    /**
     * Get RequestedView value
     * @return string[]|null
     */
    public function getRequestedView()
    {
        return $this->RequestedView;
    }
    /**
     * This method is responsible for validating the values passed to the setRequestedView method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRequestedView method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRequestedViewForArrayConstraintsFromSetRequestedView(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $freeBusyViewOptionsTypeRequestedViewItem) {
            // validation for constraint: enumeration
            if (!\Ews\EnumType\EwsFreeBusyViewType::valueIsValid($freeBusyViewOptionsTypeRequestedViewItem)) {
                $invalidValues[] = is_object($freeBusyViewOptionsTypeRequestedViewItem) ? get_class($freeBusyViewOptionsTypeRequestedViewItem) : sprintf('%s(%s)', gettype($freeBusyViewOptionsTypeRequestedViewItem), var_export($freeBusyViewOptionsTypeRequestedViewItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsFreeBusyViewType', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \Ews\EnumType\EwsFreeBusyViewType::getValidValues()));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set RequestedView value
     * @uses \Ews\EnumType\EwsFreeBusyViewType::valueIsValid()
     * @uses \Ews\EnumType\EwsFreeBusyViewType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $requestedView
     * @return \Ews\StructType\EwsFreeBusyViewOptionsType
     */
    public function setRequestedView(array $requestedView = array())
    {
        // validation for constraint: list
        if ('' !== ($requestedViewArrayErrorMessage = self::validateRequestedViewForArrayConstraintsFromSetRequestedView($requestedView))) {
            throw new \InvalidArgumentException($requestedViewArrayErrorMessage, __LINE__);
        }
        $this->RequestedView = is_array($requestedView) ? implode(' ', $requestedView) : null;
        return $this;
    }
}
