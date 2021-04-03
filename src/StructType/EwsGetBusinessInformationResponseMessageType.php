<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBusinessInformationResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetBusinessInformationResponseMessageType extends EwsResponseMessageType
{
    /**
     * The BusinessInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \StructType\EwsBusinessInfoType
     */
    protected \StructType\EwsBusinessInfoType $BusinessInfo;
    /**
     * Constructor method for GetBusinessInformationResponseMessageType
     * @uses EwsGetBusinessInformationResponseMessageType::setBusinessInfo()
     * @param \StructType\EwsBusinessInfoType $businessInfo
     */
    public function __construct(\StructType\EwsBusinessInfoType $businessInfo)
    {
        $this
            ->setBusinessInfo($businessInfo);
    }
    /**
     * Get BusinessInfo value
     * @return \StructType\EwsBusinessInfoType
     */
    public function getBusinessInfo(): \StructType\EwsBusinessInfoType
    {
        return $this->BusinessInfo;
    }
    /**
     * Set BusinessInfo value
     * @param \StructType\EwsBusinessInfoType $businessInfo
     * @return \StructType\EwsGetBusinessInformationResponseMessageType
     */
    public function setBusinessInfo(\StructType\EwsBusinessInfoType $businessInfo): self
    {
        $this->BusinessInfo = $businessInfo;
        
        return $this;
    }
}
