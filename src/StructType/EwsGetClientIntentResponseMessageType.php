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
     * Meta informations extracted from the WSDL
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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsGetClientIntentResponseMessageType
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
