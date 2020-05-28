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
     * Meta information extracted from the WSDL
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
}
