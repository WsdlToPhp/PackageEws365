<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ValidateUMPinResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsValidateUMPinResponseMessageType extends EwsResponseMessageType
{
    /**
     * The PinInfo
     * Meta information extracted from the WSDL
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
}
