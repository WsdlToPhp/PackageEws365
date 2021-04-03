<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUMCallSummaryResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetUMCallSummaryResponseMessageType extends EwsResponseMessageType
{
    /**
     * The UMReportRawCountersCollection
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfUMReportRawCountersType|null
     */
    protected ?\ArrayType\EwsArrayOfUMReportRawCountersType $UMReportRawCountersCollection = null;
    /**
     * Constructor method for GetUMCallSummaryResponseMessageType
     * @uses EwsGetUMCallSummaryResponseMessageType::setUMReportRawCountersCollection()
     * @param \ArrayType\EwsArrayOfUMReportRawCountersType $uMReportRawCountersCollection
     */
    public function __construct(?\ArrayType\EwsArrayOfUMReportRawCountersType $uMReportRawCountersCollection = null)
    {
        $this
            ->setUMReportRawCountersCollection($uMReportRawCountersCollection);
    }
    /**
     * Get UMReportRawCountersCollection value
     * @return \ArrayType\EwsArrayOfUMReportRawCountersType|null
     */
    public function getUMReportRawCountersCollection(): ?\ArrayType\EwsArrayOfUMReportRawCountersType
    {
        return $this->UMReportRawCountersCollection;
    }
    /**
     * Set UMReportRawCountersCollection value
     * @param \ArrayType\EwsArrayOfUMReportRawCountersType $uMReportRawCountersCollection
     * @return \StructType\EwsGetUMCallSummaryResponseMessageType
     */
    public function setUMReportRawCountersCollection(?\ArrayType\EwsArrayOfUMReportRawCountersType $uMReportRawCountersCollection = null): self
    {
        $this->UMReportRawCountersCollection = $uMReportRawCountersCollection;
        
        return $this;
    }
}
