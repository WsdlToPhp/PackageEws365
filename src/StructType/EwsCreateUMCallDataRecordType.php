<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \StructType\EwsCDRDataType
     */
    protected \StructType\EwsCDRDataType $CDRData;
    /**
     * Constructor method for CreateUMCallDataRecordType
     * @uses EwsCreateUMCallDataRecordType::setCDRData()
     * @param \StructType\EwsCDRDataType $cDRData
     */
    public function __construct(\StructType\EwsCDRDataType $cDRData)
    {
        $this
            ->setCDRData($cDRData);
    }
    /**
     * Get CDRData value
     * @return \StructType\EwsCDRDataType
     */
    public function getCDRData(): \StructType\EwsCDRDataType
    {
        return $this->CDRData;
    }
    /**
     * Set CDRData value
     * @param \StructType\EwsCDRDataType $cDRData
     * @return \StructType\EwsCreateUMCallDataRecordType
     */
    public function setCDRData(\StructType\EwsCDRDataType $cDRData): self
    {
        $this->CDRData = $cDRData;
        
        return $this;
    }
}
