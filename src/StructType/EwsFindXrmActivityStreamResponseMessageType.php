<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FindXrmActivityStreamResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsFindXrmActivityStreamResponseMessageType extends EwsResponseMessageType
{
    /**
     * The Deals
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Ews\ArrayType\EwsArrayOfXrmActivityStreamType
     */
    public $Deals;
    /**
     * Constructor method for FindXrmActivityStreamResponseMessageType
     * @uses EwsFindXrmActivityStreamResponseMessageType::setDeals()
     * @param \Ews\ArrayType\EwsArrayOfXrmActivityStreamType $deals
     */
    public function __construct(\Ews\ArrayType\EwsArrayOfXrmActivityStreamType $deals = null)
    {
        $this
            ->setDeals($deals);
    }
    /**
     * Get Deals value
     * @return \Ews\ArrayType\EwsArrayOfXrmActivityStreamType
     */
    public function getDeals()
    {
        return $this->Deals;
    }
    /**
     * Set Deals value
     * @param \Ews\ArrayType\EwsArrayOfXrmActivityStreamType $deals
     * @return \Ews\StructType\EwsFindXrmActivityStreamResponseMessageType
     */
    public function setDeals(\Ews\ArrayType\EwsArrayOfXrmActivityStreamType $deals = null)
    {
        $this->Deals = $deals;
        return $this;
    }
}
