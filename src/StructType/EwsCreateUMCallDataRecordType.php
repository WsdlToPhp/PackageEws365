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
     * Meta informations extracted from the WSDL
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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsCreateUMCallDataRecordType
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
