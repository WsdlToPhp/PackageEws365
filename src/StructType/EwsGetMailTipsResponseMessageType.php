<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMailTipsResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetMailTipsResponseMessageType extends EwsResponseMessageType
{
    /**
     * The ResponseMessages
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfMailTipsResponseMessageType
     */
    public $ResponseMessages;
    /**
     * Constructor method for GetMailTipsResponseMessageType
     * @uses EwsGetMailTipsResponseMessageType::setResponseMessages()
     * @param \Ews\ArrayType\EwsArrayOfMailTipsResponseMessageType $responseMessages
     */
    public function __construct(\Ews\ArrayType\EwsArrayOfMailTipsResponseMessageType $responseMessages = null)
    {
        $this
            ->setResponseMessages($responseMessages);
    }
    /**
     * Get ResponseMessages value
     * @return \Ews\ArrayType\EwsArrayOfMailTipsResponseMessageType|null
     */
    public function getResponseMessages()
    {
        return $this->ResponseMessages;
    }
    /**
     * Set ResponseMessages value
     * @param \Ews\ArrayType\EwsArrayOfMailTipsResponseMessageType $responseMessages
     * @return \Ews\StructType\EwsGetMailTipsResponseMessageType
     */
    public function setResponseMessages(\Ews\ArrayType\EwsArrayOfMailTipsResponseMessageType $responseMessages = null)
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
     * @return \Ews\StructType\EwsGetMailTipsResponseMessageType
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
