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
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Ews\StructType\EwsDuration
     */
    public $TimeWindow;
    /**
     * The MergedFreeBusyIntervalInMinutes
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $MergedFreeBusyIntervalInMinutes;
    /**
     * The RequestedView
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $RequestedView;
    /**
     * Constructor method for FreeBusyViewOptionsType
     * @uses EwsFreeBusyViewOptionsType::setTimeWindow()
     * @uses EwsFreeBusyViewOptionsType::setMergedFreeBusyIntervalInMinutes()
     * @uses EwsFreeBusyViewOptionsType::setRequestedView()
     * @param \Ews\StructType\EwsDuration $timeWindow
     * @param int $mergedFreeBusyIntervalInMinutes
     * @param string $requestedView
     */
    public function __construct(\Ews\StructType\EwsDuration $timeWindow = null, $mergedFreeBusyIntervalInMinutes = null, $requestedView = null)
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
        if (!is_null($mergedFreeBusyIntervalInMinutes) && !is_int($mergedFreeBusyIntervalInMinutes)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide an int, "%s" given', gettype($mergedFreeBusyIntervalInMinutes)), __LINE__);
        }
        $this->MergedFreeBusyIntervalInMinutes = $mergedFreeBusyIntervalInMinutes;
        return $this;
    }
    /**
     * Get RequestedView value
     * @return string|null
     */
    public function getRequestedView()
    {
        return $this->RequestedView;
    }
    /**
     * Set RequestedView value
     * @uses \Ews\EnumType\EwsFreeBusyViewType::valueIsValid()
     * @uses \Ews\EnumType\EwsFreeBusyViewType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $requestedView
     * @return \Ews\StructType\EwsFreeBusyViewOptionsType
     */
    public function setRequestedView($requestedView = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsFreeBusyViewType::valueIsValid($requestedView)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $requestedView, implode(', ', \Ews\EnumType\EwsFreeBusyViewType::getValidValues())), __LINE__);
        }
        $this->RequestedView = $requestedView;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsFreeBusyViewOptionsType
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
