<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateUMCallDataRecordType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsCreateUMCallDataRecordType extends EwsBaseRequestType
{
    /**
     * The CDRData
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Ews\StructType\EwsCDRDataType
     */
    public $CDRData;
    /**
     * Constructor method for CreateUMCallDataRecordType
     * @uses EwsCreateUMCallDataRecordType::setCDRData()
     * @param \Ews\StructType\EwsCDRDataType $cDRData
     */
    public function __construct(\Ews\StructType\EwsCDRDataType $cDRData = null)
    {
        $this
            ->setCDRData($cDRData);
    }
    /**
     * Get CDRData value
     * @return \Ews\StructType\EwsCDRDataType
     */
    public function getCDRData()
    {
        return $this->CDRData;
    }
    /**
     * Set CDRData value
     * @param \Ews\StructType\EwsCDRDataType $cDRData
     * @return \Ews\StructType\EwsCreateUMCallDataRecordType
     */
    public function setCDRData(\Ews\StructType\EwsCDRDataType $cDRData = null)
    {
        $this->CDRData = $cDRData;
        return $this;
    }
}
