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
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\StructType\EwsResponseMessageType
     */
    public $ResponseMessage;
    /**
     * The FreeBusyView
     * Meta information extracted from the WSDL
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
}
