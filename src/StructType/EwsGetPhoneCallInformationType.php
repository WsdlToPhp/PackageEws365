<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPhoneCallInformationType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetPhoneCallInformationType extends EwsBaseRequestType
{
    /**
     * The PhoneCallId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Ews\StructType\EwsPhoneCallIdType
     */
    public $PhoneCallId;
    /**
     * Constructor method for GetPhoneCallInformationType
     * @uses EwsGetPhoneCallInformationType::setPhoneCallId()
     * @param \Ews\StructType\EwsPhoneCallIdType $phoneCallId
     */
    public function __construct(\Ews\StructType\EwsPhoneCallIdType $phoneCallId = null)
    {
        $this
            ->setPhoneCallId($phoneCallId);
    }
    /**
     * Get PhoneCallId value
     * @return \Ews\StructType\EwsPhoneCallIdType
     */
    public function getPhoneCallId()
    {
        return $this->PhoneCallId;
    }
    /**
     * Set PhoneCallId value
     * @param \Ews\StructType\EwsPhoneCallIdType $phoneCallId
     * @return \Ews\StructType\EwsGetPhoneCallInformationType
     */
    public function setPhoneCallId(\Ews\StructType\EwsPhoneCallIdType $phoneCallId = null)
    {
        $this->PhoneCallId = $phoneCallId;
        return $this;
    }
}
