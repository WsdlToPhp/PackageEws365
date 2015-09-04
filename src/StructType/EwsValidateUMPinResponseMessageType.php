<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ValidateUMPinResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsValidateUMPinResponseMessageType extends EwsResponseMessageType
{
    /**
     * The PinInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Ews\StructType\EwsPinInfoType
     */
    public $PinInfo;
    /**
     * Constructor method for ValidateUMPinResponseMessageType
     * @uses EwsValidateUMPinResponseMessageType::setPinInfo()
     * @param \Ews\StructType\EwsPinInfoType $pinInfo
     */
    public function __construct(\Ews\StructType\EwsPinInfoType $pinInfo = null)
    {
        $this
            ->setPinInfo($pinInfo);
    }
    /**
     * Get PinInfo value
     * @return \Ews\StructType\EwsPinInfoType
     */
    public function getPinInfo()
    {
        return $this->PinInfo;
    }
    /**
     * Set PinInfo value
     * @param \Ews\StructType\EwsPinInfoType $pinInfo
     * @return \Ews\StructType\EwsValidateUMPinResponseMessageType
     */
    public function setPinInfo(\Ews\StructType\EwsPinInfoType $pinInfo = null)
    {
        $this->PinInfo = $pinInfo;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsValidateUMPinResponseMessageType
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
