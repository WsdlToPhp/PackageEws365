<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetNonIndexableItemStatisticsResponseMessageType
 * StructType
 * Meta informations extracted from the WSDL
 * - documentation: Response message type for the GetNonIndexableItemStatistics web method.
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetNonIndexableItemStatisticsResponseMessageType extends EwsResponseMessageType
{
    /**
     * The NonIndexableItemStatistics
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - documentation: Array of non indexable item statistics.
     * @var \Ews\ArrayType\EwsArrayOfNonIndexableItemStatisticsType
     */
    public $NonIndexableItemStatistics;
    /**
     * Constructor method for GetNonIndexableItemStatisticsResponseMessageType
     * @uses
     * EwsGetNonIndexableItemStatisticsResponseMessageType::setNonIndexableItemStatisti
     * cs()
     * @param \Ews\ArrayType\EwsArrayOfNonIndexableItemStatisticsType
     * $nonIndexableItemStatistics
     */
    public function __construct(\Ews\ArrayType\EwsArrayOfNonIndexableItemStatisticsType $nonIndexableItemStatistics = null)
    {
        $this
            ->setNonIndexableItemStatistics($nonIndexableItemStatistics);
    }
    /**
     * Get NonIndexableItemStatistics value
     * @return \Ews\ArrayType\EwsArrayOfNonIndexableItemStatisticsType|null
     */
    public function getNonIndexableItemStatistics()
    {
        return $this->NonIndexableItemStatistics;
    }
    /**
     * Set NonIndexableItemStatistics value
     * @param \Ews\ArrayType\EwsArrayOfNonIndexableItemStatisticsType
     * $nonIndexableItemStatistics
     * @return \Ews\StructType\EwsGetNonIndexableItemStatisticsResponseMessageType
     */
    public function setNonIndexableItemStatistics(\Ews\ArrayType\EwsArrayOfNonIndexableItemStatisticsType $nonIndexableItemStatistics = null)
    {
        $this->NonIndexableItemStatistics = $nonIndexableItemStatistics;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsGetNonIndexableItemStatisticsResponseMessageType
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
