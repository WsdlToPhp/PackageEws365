<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPhoneCallInformationResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsGetPhoneCallInformationResponseMessageType extends EwsResponseMessageType
{
    /**
     * The PhoneCallInformation
     * Meta informations extracted from the WSDL
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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsGetPhoneCallInformationResponseMessageType
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
