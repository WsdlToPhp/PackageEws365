<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetBusinessInformationType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsSetBusinessInformationType extends EwsBaseBookingRequestType
{
    /**
     * The BusinessInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Ews\StructType\EwsBusinessInfoType
     */
    public $BusinessInfo;
    /**
     * Constructor method for SetBusinessInformationType
     * @uses EwsSetBusinessInformationType::setBusinessInfo()
     * @param \Ews\StructType\EwsBusinessInfoType $businessInfo
     */
    public function __construct(\Ews\StructType\EwsBusinessInfoType $businessInfo = null)
    {
        $this
            ->setBusinessInfo($businessInfo);
    }
    /**
     * Get BusinessInfo value
     * @return \Ews\StructType\EwsBusinessInfoType
     */
    public function getBusinessInfo()
    {
        return $this->BusinessInfo;
    }
    /**
     * Set BusinessInfo value
     * @param \Ews\StructType\EwsBusinessInfoType $businessInfo
     * @return \Ews\StructType\EwsSetBusinessInformationType
     */
    public function setBusinessInfo(\Ews\StructType\EwsBusinessInfoType $businessInfo = null)
    {
        $this->BusinessInfo = $businessInfo;
        return $this;
    }
}
