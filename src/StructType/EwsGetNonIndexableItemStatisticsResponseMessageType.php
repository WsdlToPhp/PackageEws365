<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \ArrayType\EwsArrayOfNonIndexableItemStatisticsType|null
     */
    protected ?\ArrayType\EwsArrayOfNonIndexableItemStatisticsType $NonIndexableItemStatistics = null;
    /**
     * Constructor method for GetNonIndexableItemStatisticsResponseMessageType
     * @uses EwsGetNonIndexableItemStatisticsResponseMessageType::setNonIndexableItemStatistics()
     * @param \ArrayType\EwsArrayOfNonIndexableItemStatisticsType $nonIndexableItemStatistics
     */
    public function __construct(?\ArrayType\EwsArrayOfNonIndexableItemStatisticsType $nonIndexableItemStatistics = null)
    {
        $this
            ->setNonIndexableItemStatistics($nonIndexableItemStatistics);
    }
    /**
     * Get NonIndexableItemStatistics value
     * @return \ArrayType\EwsArrayOfNonIndexableItemStatisticsType|null
     */
    public function getNonIndexableItemStatistics(): ?\ArrayType\EwsArrayOfNonIndexableItemStatisticsType
    {
        return $this->NonIndexableItemStatistics;
    }
    /**
     * Set NonIndexableItemStatistics value
     * @param \ArrayType\EwsArrayOfNonIndexableItemStatisticsType $nonIndexableItemStatistics
     * @return \StructType\EwsGetNonIndexableItemStatisticsResponseMessageType
     */
    public function setNonIndexableItemStatistics(?\ArrayType\EwsArrayOfNonIndexableItemStatisticsType $nonIndexableItemStatistics = null): self
    {
        $this->NonIndexableItemStatistics = $nonIndexableItemStatistics;
        
        return $this;
    }
}
