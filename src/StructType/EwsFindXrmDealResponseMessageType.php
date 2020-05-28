<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FindXrmDealResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsFindXrmDealResponseMessageType extends EwsResponseMessageType
{
    /**
     * The Deals
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Ews\ArrayType\EwsArrayOfXrmDealType
     */
    public $Deals;
    /**
     * Constructor method for FindXrmDealResponseMessageType
     * @uses EwsFindXrmDealResponseMessageType::setDeals()
     * @param \Ews\ArrayType\EwsArrayOfXrmDealType $deals
     */
    public function __construct(\Ews\ArrayType\EwsArrayOfXrmDealType $deals = null)
    {
        $this
            ->setDeals($deals);
    }
    /**
     * Get Deals value
     * @return \Ews\ArrayType\EwsArrayOfXrmDealType
     */
    public function getDeals()
    {
        return $this->Deals;
    }
    /**
     * Set Deals value
     * @param \Ews\ArrayType\EwsArrayOfXrmDealType $deals
     * @return \Ews\StructType\EwsFindXrmDealResponseMessageType
     */
    public function setDeals(\Ews\ArrayType\EwsArrayOfXrmDealType $deals = null)
    {
        $this->Deals = $deals;
        return $this;
    }
}
