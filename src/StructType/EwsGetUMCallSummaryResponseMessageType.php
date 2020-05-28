<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \Ews\ArrayType\EwsArrayOfUMReportRawCountersType
     */
    public $UMReportRawCountersCollection;
    /**
     * Constructor method for GetUMCallSummaryResponseMessageType
     * @uses EwsGetUMCallSummaryResponseMessageType::setUMReportRawCountersCollection()
     * @param \Ews\ArrayType\EwsArrayOfUMReportRawCountersType $uMReportRawCountersCollection
     */
    public function __construct(\Ews\ArrayType\EwsArrayOfUMReportRawCountersType $uMReportRawCountersCollection = null)
    {
        $this
            ->setUMReportRawCountersCollection($uMReportRawCountersCollection);
    }
    /**
     * Get UMReportRawCountersCollection value
     * @return \Ews\ArrayType\EwsArrayOfUMReportRawCountersType|null
     */
    public function getUMReportRawCountersCollection()
    {
        return $this->UMReportRawCountersCollection;
    }
    /**
     * Set UMReportRawCountersCollection value
     * @param \Ews\ArrayType\EwsArrayOfUMReportRawCountersType $uMReportRawCountersCollection
     * @return \Ews\StructType\EwsGetUMCallSummaryResponseMessageType
     */
    public function setUMReportRawCountersCollection(\Ews\ArrayType\EwsArrayOfUMReportRawCountersType $uMReportRawCountersCollection = null)
    {
        $this->UMReportRawCountersCollection = $uMReportRawCountersCollection;
        return $this;
    }
}
