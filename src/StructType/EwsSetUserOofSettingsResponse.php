<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetUserOofSettingsResponse StructType
 * Meta informations extracted from the WSDL
 * - type: tns:SetUserOofSettingsResponse
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsSetUserOofSettingsResponse extends AbstractStructBase
{
    /**
     * The ResponseMessage
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\StructType\EwsResponseMessageType
     */
    public $ResponseMessage;
    /**
     * Constructor method for SetUserOofSettingsResponse
     * @uses EwsSetUserOofSettingsResponse::setResponseMessage()
     * @param \Ews\StructType\EwsResponseMessageType $responseMessage
     */
    public function __construct(\Ews\StructType\EwsResponseMessageType $responseMessage = null)
    {
        $this
            ->setResponseMessage($responseMessage);
    }
    /**
     * Get ResponseMessage value
     * @return \Ews\StructType\EwsResponseMessageType|null
     */
    public function getResponseMessage()
    {
        return $this->ResponseMessage;
    }
    /**
     * Set ResponseMessage value
     * @param \Ews\StructType\EwsResponseMessageType $responseMessage
     * @return \Ews\StructType\EwsSetUserOofSettingsResponse
     */
    public function setResponseMessage(\Ews\StructType\EwsResponseMessageType $responseMessage = null)
    {
        $this->ResponseMessage = $responseMessage;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsSetUserOofSettingsResponse
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
