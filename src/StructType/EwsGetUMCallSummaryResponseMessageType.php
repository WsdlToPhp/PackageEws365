<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUMCallSummaryResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsGetUMCallSummaryResponseMessageType extends EwsResponseMessageType
{
    /**
     * The UMReportRawCountersCollection
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfUMReportRawCountersType
     */
    public $UMReportRawCountersCollection;
    /**
     * Constructor method for GetUMCallSummaryResponseMessageType
     * @uses EwsGetUMCallSummaryResponseMessageType::setUMReportRawCountersCollection()
     * @param \Ews\ArrayType\EwsArrayOfUMReportRawCountersType
     * $uMReportRawCountersCollection
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
     * @param \Ews\ArrayType\EwsArrayOfUMReportRawCountersType
     * $uMReportRawCountersCollection
     * @return \Ews\StructType\EwsGetUMCallSummaryResponseMessageType
     */
    public function setUMReportRawCountersCollection(\Ews\ArrayType\EwsArrayOfUMReportRawCountersType $uMReportRawCountersCollection = null)
    {
        $this->UMReportRawCountersCollection = $uMReportRawCountersCollection;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsGetUMCallSummaryResponseMessageType
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
