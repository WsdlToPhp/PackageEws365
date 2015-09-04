<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BaseDelegateResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
abstract class EwsBaseDelegateResponseMessageType extends EwsResponseMessageType
{
    /**
     * The ResponseMessages
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfDelegateUserResponseMessageType
     */
    public $ResponseMessages;
    /**
     * Constructor method for BaseDelegateResponseMessageType
     * @uses EwsBaseDelegateResponseMessageType::setResponseMessages()
     * @param \Ews\ArrayType\EwsArrayOfDelegateUserResponseMessageType
     * $responseMessages
     */
    public function __construct(\Ews\ArrayType\EwsArrayOfDelegateUserResponseMessageType $responseMessages = null)
    {
        $this
            ->setResponseMessages($responseMessages);
    }
    /**
     * Get ResponseMessages value
     * @return \Ews\ArrayType\EwsArrayOfDelegateUserResponseMessageType|null
     */
    public function getResponseMessages()
    {
        return $this->ResponseMessages;
    }
    /**
     * Set ResponseMessages value
     * @param \Ews\ArrayType\EwsArrayOfDelegateUserResponseMessageType
     * $responseMessages
     * @return \Ews\StructType\EwsBaseDelegateResponseMessageType
     */
    public function setResponseMessages(\Ews\ArrayType\EwsArrayOfDelegateUserResponseMessageType $responseMessages = null)
    {
        $this->ResponseMessages = $responseMessages;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsBaseDelegateResponseMessageType
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
