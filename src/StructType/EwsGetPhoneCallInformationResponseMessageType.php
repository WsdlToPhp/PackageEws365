<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPhoneCallInformationResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetPhoneCallInformationResponseMessageType extends EwsResponseMessageType
{
    /**
     * The PhoneCallInformation
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\StructType\EwsPhoneCallInformationType
     */
    public $PhoneCallInformation;
    /**
     * Constructor method for GetPhoneCallInformationResponseMessageType
     * @uses EwsGetPhoneCallInformationResponseMessageType::setPhoneCallInformation()
     * @param \Ews\StructType\EwsPhoneCallInformationType $phoneCallInformation
     */
    public function __construct(\Ews\StructType\EwsPhoneCallInformationType $phoneCallInformation = null)
    {
        $this
            ->setPhoneCallInformation($phoneCallInformation);
    }
    /**
     * Get PhoneCallInformation value
     * @return \Ews\StructType\EwsPhoneCallInformationType|null
     */
    public function getPhoneCallInformation()
    {
        return $this->PhoneCallInformation;
    }
    /**
     * Set PhoneCallInformation value
     * @param \Ews\StructType\EwsPhoneCallInformationType $phoneCallInformation
     * @return \Ews\StructType\EwsGetPhoneCallInformationResponseMessageType
     */
    public function setPhoneCallInformation(\Ews\StructType\EwsPhoneCallInformationType $phoneCallInformation = null)
    {
        $this->PhoneCallInformation = $phoneCallInformation;
        return $this;
    }
}
