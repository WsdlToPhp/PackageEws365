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
     * Meta informations extracted from the WSDL
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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsGetPhoneCallInformationType
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
