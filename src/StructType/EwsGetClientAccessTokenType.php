<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetClientAccessTokenType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetClientAccessTokenType extends EwsBaseRequestType
{
    /**
     * The TokenRequests
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \ArrayType\EwsNonEmptyArrayOfClientAccessTokenRequestsType
     */
    protected \ArrayType\EwsNonEmptyArrayOfClientAccessTokenRequestsType $TokenRequests;
    /**
     * Constructor method for GetClientAccessTokenType
     * @uses EwsGetClientAccessTokenType::setTokenRequests()
     * @param \ArrayType\EwsNonEmptyArrayOfClientAccessTokenRequestsType $tokenRequests
     */
    public function __construct(\ArrayType\EwsNonEmptyArrayOfClientAccessTokenRequestsType $tokenRequests)
    {
        $this
            ->setTokenRequests($tokenRequests);
    }
    /**
     * Get TokenRequests value
     * @return \ArrayType\EwsNonEmptyArrayOfClientAccessTokenRequestsType
     */
    public function getTokenRequests(): \ArrayType\EwsNonEmptyArrayOfClientAccessTokenRequestsType
    {
        return $this->TokenRequests;
    }
    /**
     * Set TokenRequests value
     * @param \ArrayType\EwsNonEmptyArrayOfClientAccessTokenRequestsType $tokenRequests
     * @return \StructType\EwsGetClientAccessTokenType
     */
    public function setTokenRequests(\ArrayType\EwsNonEmptyArrayOfClientAccessTokenRequestsType $tokenRequests): self
    {
        $this->TokenRequests = $tokenRequests;
        
        return $this;
    }
}
