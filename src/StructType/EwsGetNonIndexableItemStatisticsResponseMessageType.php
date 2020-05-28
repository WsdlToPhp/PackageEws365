<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetNonIndexableItemStatisticsResponseMessageType
 * StructType
 * Meta information extracted from the WSDL
 * - documentation: Response message type for the GetNonIndexableItemStatistics web method.
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetNonIndexableItemStatisticsResponseMessageType extends EwsResponseMessageType
{
    /**
     * The NonIndexableItemStatistics
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfNonIndexableItemStatisticsType
     */
    public $NonIndexableItemStatistics;
    /**
     * Constructor method for GetNonIndexableItemStatisticsResponseMessageType
     * @uses EwsGetNonIndexableItemStatisticsResponseMessageType::setNonIndexableItemStatistics()
     * @param \Ews\ArrayType\EwsArrayOfNonIndexableItemStatisticsType $nonIndexableItemStatistics
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
     * @param \Ews\ArrayType\EwsArrayOfNonIndexableItemStatisticsType $nonIndexableItemStatistics
     * @return \Ews\StructType\EwsGetNonIndexableItemStatisticsResponseMessageType
     */
    public function setNonIndexableItemStatistics(\Ews\ArrayType\EwsArrayOfNonIndexableItemStatisticsType $nonIndexableItemStatistics = null)
    {
        $this->NonIndexableItemStatistics = $nonIndexableItemStatistics;
        return $this;
    }
}
