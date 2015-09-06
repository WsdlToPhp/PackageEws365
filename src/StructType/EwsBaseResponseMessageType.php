<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BaseResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsBaseResponseMessageType extends AbstractStructBase
{
    /**
     * The ResponseMessages
     * @var \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public $ResponseMessages;
    /**
     * Constructor method for BaseResponseMessageType
     * @uses EwsBaseResponseMessageType::setResponseMessages()
     * @param \Ews\StructType\EwsArrayOfResponseMessagesType $responseMessages
     */
    public function __construct(\Ews\StructType\EwsArrayOfResponseMessagesType $responseMessages = null)
    {
        $this
            ->setResponseMessages($responseMessages);
    }
    /**
     * Get ResponseMessages value
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType|null
     */
    public function getResponseMessages()
    {
        return $this->ResponseMessages;
    }
    /**
     * Set ResponseMessages value
     * @param \Ews\StructType\EwsArrayOfResponseMessagesType $responseMessages
     * @return \Ews\StructType\EwsBaseResponseMessageType
     */
    public function setResponseMessages(\Ews\StructType\EwsArrayOfResponseMessagesType $responseMessages = null)
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
     * @return \Ews\StructType\EwsBaseResponseMessageType
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
