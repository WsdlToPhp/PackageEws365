<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \StructType\EwsPinInfoType
     */
    protected \StructType\EwsPinInfoType $PinInfo;
    /**
     * Constructor method for ValidateUMPinResponseMessageType
     * @uses EwsValidateUMPinResponseMessageType::setPinInfo()
     * @param \StructType\EwsPinInfoType $pinInfo
     */
    public function __construct(\StructType\EwsPinInfoType $pinInfo)
    {
        $this
            ->setPinInfo($pinInfo);
    }
    /**
     * Get PinInfo value
     * @return \StructType\EwsPinInfoType
     */
    public function getPinInfo(): \StructType\EwsPinInfoType
    {
        return $this->PinInfo;
    }
    /**
     * Set PinInfo value
     * @param \StructType\EwsPinInfoType $pinInfo
     * @return \StructType\EwsValidateUMPinResponseMessageType
     */
    public function setPinInfo(\StructType\EwsPinInfoType $pinInfo): self
    {
        $this->PinInfo = $pinInfo;
        
        return $this;
    }
}
