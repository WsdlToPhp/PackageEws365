<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \StructType\EwsClientAccessTokenType|null
     */
    protected ?\StructType\EwsClientAccessTokenType $Token = null;
    /**
     * Constructor method for GetClientAccessTokenResponseMessageType
     * @uses EwsGetClientAccessTokenResponseMessageType::setToken()
     * @param \StructType\EwsClientAccessTokenType $token
     */
    public function __construct(?\StructType\EwsClientAccessTokenType $token = null)
    {
        $this
            ->setToken($token);
    }
    /**
     * Get Token value
     * @return \StructType\EwsClientAccessTokenType|null
     */
    public function getToken(): ?\StructType\EwsClientAccessTokenType
    {
        return $this->Token;
    }
    /**
     * Set Token value
     * @param \StructType\EwsClientAccessTokenType $token
     * @return \StructType\EwsGetClientAccessTokenResponseMessageType
     */
    public function setToken(?\StructType\EwsClientAccessTokenType $token = null): self
    {
        $this->Token = $token;
        
        return $this;
    }
}
