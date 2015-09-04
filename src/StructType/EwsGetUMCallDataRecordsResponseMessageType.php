<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUMCallDataRecordsResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsGetUMCallDataRecordsResponseMessageType extends EwsResponseMessageType
{
    /**
     * The CallDataRecords
     * Meta informations extracted from the WSDL
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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsGetUMCallDataRecordsResponseMessageType
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
