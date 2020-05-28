<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PlayOnPhoneResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsPlayOnPhoneResponseMessageType extends EwsResponseMessageType
{
    /**
     * The PhoneCallId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\StructType\EwsPhoneCallIdType
     */
    public $PhoneCallId;
    /**
     * Constructor method for PlayOnPhoneResponseMessageType
     * @uses EwsPlayOnPhoneResponseMessageType::setPhoneCallId()
     * @param \Ews\StructType\EwsPhoneCallIdType $phoneCallId
     */
    public function __construct(\Ews\StructType\EwsPhoneCallIdType $phoneCallId = null)
    {
        $this
            ->setPhoneCallId($phoneCallId);
    }
    /**
     * Get PhoneCallId value
     * @return \Ews\StructType\EwsPhoneCallIdType|null
     */
    public function getPhoneCallId()
    {
        return $this->PhoneCallId;
    }
    /**
     * Set PhoneCallId value
     * @param \Ews\StructType\EwsPhoneCallIdType $phoneCallId
     * @return \Ews\StructType\EwsPlayOnPhoneResponseMessageType
     */
    public function setPhoneCallId(\Ews\StructType\EwsPhoneCallIdType $phoneCallId = null)
    {
        $this->PhoneCallId = $phoneCallId;
        return $this;
    }
}
