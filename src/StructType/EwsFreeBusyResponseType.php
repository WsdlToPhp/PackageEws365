<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \StructType\EwsResponseMessageType|null
     */
    protected ?\StructType\EwsResponseMessageType $ResponseMessage = null;
    /**
     * The FreeBusyView
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\EwsFreeBusyView|null
     */
    protected ?\StructType\EwsFreeBusyView $FreeBusyView = null;
    /**
     * Constructor method for FreeBusyResponseType
     * @uses EwsFreeBusyResponseType::setResponseMessage()
     * @uses EwsFreeBusyResponseType::setFreeBusyView()
     * @param \StructType\EwsResponseMessageType $responseMessage
     * @param \StructType\EwsFreeBusyView $freeBusyView
     */
    public function __construct(?\StructType\EwsResponseMessageType $responseMessage = null, ?\StructType\EwsFreeBusyView $freeBusyView = null)
    {
        $this
            ->setResponseMessage($responseMessage)
            ->setFreeBusyView($freeBusyView);
    }
    /**
     * Get ResponseMessage value
     * @return \StructType\EwsResponseMessageType|null
     */
    public function getResponseMessage(): ?\StructType\EwsResponseMessageType
    {
        return $this->ResponseMessage;
    }
    /**
     * Set ResponseMessage value
     * @param \StructType\EwsResponseMessageType $responseMessage
     * @return \StructType\EwsFreeBusyResponseType
     */
    public function setResponseMessage(?\StructType\EwsResponseMessageType $responseMessage = null): self
    {
        $this->ResponseMessage = $responseMessage;
        
        return $this;
    }
    /**
     * Get FreeBusyView value
     * @return \StructType\EwsFreeBusyView|null
     */
    public function getFreeBusyView(): ?\StructType\EwsFreeBusyView
    {
        return $this->FreeBusyView;
    }
    /**
     * Set FreeBusyView value
     * @param \StructType\EwsFreeBusyView $freeBusyView
     * @return \StructType\EwsFreeBusyResponseType
     */
    public function setFreeBusyView(?\StructType\EwsFreeBusyView $freeBusyView = null): self
    {
        $this->FreeBusyView = $freeBusyView;
        
        return $this;
    }
}
