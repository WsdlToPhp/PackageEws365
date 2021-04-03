<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EndInstantSearchSessionRequest StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsEndInstantSearchSessionRequest extends EwsBaseRequestType
{
    /**
     * The SessionId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $SessionId;
    /**
     * Constructor method for EndInstantSearchSessionRequest
     * @uses EwsEndInstantSearchSessionRequest::setSessionId()
     * @param string $sessionId
     */
    public function __construct(string $sessionId)
    {
        $this
            ->setSessionId($sessionId);
    }
    /**
     * Get SessionId value
     * @return string
     */
    public function getSessionId(): string
    {
        return $this->SessionId;
    }
    /**
     * Set SessionId value
     * @param string $sessionId
     * @return \StructType\EwsEndInstantSearchSessionRequest
     */
    public function setSessionId(string $sessionId): self
    {
        // validation for constraint: string
        if (!is_null($sessionId) && !is_string($sessionId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sessionId, true), gettype($sessionId)), __LINE__);
        }
        $this->SessionId = $sessionId;
        
        return $this;
    }
}
