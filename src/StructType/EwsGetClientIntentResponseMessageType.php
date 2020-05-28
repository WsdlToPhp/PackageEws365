<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \Ews\StructType\EwsClientIntentType
     */
    public $ClientIntent;
    /**
     * Constructor method for GetClientIntentResponseMessageType
     * @uses EwsGetClientIntentResponseMessageType::setClientIntent()
     * @param \Ews\StructType\EwsClientIntentType $clientIntent
     */
    public function __construct(\Ews\StructType\EwsClientIntentType $clientIntent = null)
    {
        $this
            ->setClientIntent($clientIntent);
    }
    /**
     * Get ClientIntent value
     * @return \Ews\StructType\EwsClientIntentType|null
     */
    public function getClientIntent()
    {
        return $this->ClientIntent;
    }
    /**
     * Set ClientIntent value
     * @param \Ews\StructType\EwsClientIntentType $clientIntent
     * @return \Ews\StructType\EwsGetClientIntentResponseMessageType
     */
    public function setClientIntent(\Ews\StructType\EwsClientIntentType $clientIntent = null)
    {
        $this->ClientIntent = $clientIntent;
        return $this;
    }
}
