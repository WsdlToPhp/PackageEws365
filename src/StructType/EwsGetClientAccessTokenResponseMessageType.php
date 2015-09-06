<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetClientAccessTokenResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetClientAccessTokenResponseMessageType extends EwsResponseMessageType
{
    /**
     * The Token
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsClientAccessTokenType
     */
    public $Token;
    /**
     * Constructor method for GetClientAccessTokenResponseMessageType
     * @uses EwsGetClientAccessTokenResponseMessageType::setToken()
     * @param \Ews\StructType\EwsClientAccessTokenType $token
     */
    public function __construct(\Ews\StructType\EwsClientAccessTokenType $token = null)
    {
        $this
            ->setToken($token);
    }
    /**
     * Get Token value
     * @return \Ews\StructType\EwsClientAccessTokenType|null
     */
    public function getToken()
    {
        return $this->Token;
    }
    /**
     * Set Token value
     * @param \Ews\StructType\EwsClientAccessTokenType $token
     * @return \Ews\StructType\EwsGetClientAccessTokenResponseMessageType
     */
    public function setToken(\Ews\StructType\EwsClientAccessTokenType $token = null)
    {
        $this->Token = $token;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsGetClientAccessTokenResponseMessageType
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
