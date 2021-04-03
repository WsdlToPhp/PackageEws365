<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetClientIntentResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetClientIntentResponseMessageType extends EwsResponseMessageType
{
    /**
     * The ClientIntent
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\EwsClientIntentType|null
     */
    protected ?\StructType\EwsClientIntentType $ClientIntent = null;
    /**
     * Constructor method for GetClientIntentResponseMessageType
     * @uses EwsGetClientIntentResponseMessageType::setClientIntent()
     * @param \StructType\EwsClientIntentType $clientIntent
     */
    public function __construct(?\StructType\EwsClientIntentType $clientIntent = null)
    {
        $this
            ->setClientIntent($clientIntent);
    }
    /**
     * Get ClientIntent value
     * @return \StructType\EwsClientIntentType|null
     */
    public function getClientIntent(): ?\StructType\EwsClientIntentType
    {
        return $this->ClientIntent;
    }
    /**
     * Set ClientIntent value
     * @param \StructType\EwsClientIntentType $clientIntent
     * @return \StructType\EwsGetClientIntentResponseMessageType
     */
    public function setClientIntent(?\StructType\EwsClientIntentType $clientIntent = null): self
    {
        $this->ClientIntent = $clientIntent;
        
        return $this;
    }
}
