<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUMCallDataRecordsResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetUMCallDataRecordsResponseMessageType extends EwsResponseMessageType
{
    /**
     * The CallDataRecords
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfUMCallDataRecordsType
     */
    public $CallDataRecords;
    /**
     * Constructor method for GetUMCallDataRecordsResponseMessageType
     * @uses EwsGetUMCallDataRecordsResponseMessageType::setCallDataRecords()
     * @param \Ews\ArrayType\EwsArrayOfUMCallDataRecordsType $callDataRecords
     */
    public function __construct(\Ews\ArrayType\EwsArrayOfUMCallDataRecordsType $callDataRecords = null)
    {
        $this
            ->setCallDataRecords($callDataRecords);
    }
    /**
     * Get CallDataRecords value
     * @return \Ews\ArrayType\EwsArrayOfUMCallDataRecordsType|null
     */
    public function getCallDataRecords()
    {
        return $this->CallDataRecords;
    }
    /**
     * Set CallDataRecords value
     * @param \Ews\ArrayType\EwsArrayOfUMCallDataRecordsType $callDataRecords
     * @return \Ews\StructType\EwsGetUMCallDataRecordsResponseMessageType
     */
    public function setCallDataRecords(\Ews\ArrayType\EwsArrayOfUMCallDataRecordsType $callDataRecords = null)
    {
        $this->CallDataRecords = $callDataRecords;
        return $this;
    }
}
