<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FreeBusyResponseType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsFreeBusyResponseType extends AbstractStructBase
{
    /**
     * The ResponseMessage
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\StructType\EwsResponseMessageType
     */
    public $ResponseMessage;
    /**
     * The FreeBusyView
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\StructType\EwsFreeBusyView
     */
    public $FreeBusyView;
    /**
     * Constructor method for FreeBusyResponseType
     * @uses EwsFreeBusyResponseType::setResponseMessage()
     * @uses EwsFreeBusyResponseType::setFreeBusyView()
     * @param \Ews\StructType\EwsResponseMessageType $responseMessage
     * @param \Ews\StructType\EwsFreeBusyView $freeBusyView
     */
    public function __construct(\Ews\StructType\EwsResponseMessageType $responseMessage = null, \Ews\StructType\EwsFreeBusyView $freeBusyView = null)
    {
        $this
            ->setResponseMessage($responseMessage)
            ->setFreeBusyView($freeBusyView);
    }
    /**
     * Get ResponseMessage value
     * @return \Ews\StructType\EwsResponseMessageType|null
     */
    public function getResponseMessage()
    {
        return $this->ResponseMessage;
    }
    /**
     * Set ResponseMessage value
     * @param \Ews\StructType\EwsResponseMessageType $responseMessage
     * @return \Ews\StructType\EwsFreeBusyResponseType
     */
    public function setResponseMessage(\Ews\StructType\EwsResponseMessageType $responseMessage = null)
    {
        $this->ResponseMessage = $responseMessage;
        return $this;
    }
    /**
     * Get FreeBusyView value
     * @return \Ews\StructType\EwsFreeBusyView|null
     */
    public function getFreeBusyView()
    {
        return $this->FreeBusyView;
    }
    /**
     * Set FreeBusyView value
     * @param \Ews\StructType\EwsFreeBusyView $freeBusyView
     * @return \Ews\StructType\EwsFreeBusyResponseType
     */
    public function setFreeBusyView(\Ews\StructType\EwsFreeBusyView $freeBusyView = null)
    {
        $this->FreeBusyView = $freeBusyView;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsFreeBusyResponseType
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
