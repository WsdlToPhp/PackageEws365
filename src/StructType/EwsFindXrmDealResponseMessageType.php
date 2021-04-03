<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \ArrayType\EwsArrayOfXrmDealType
     */
    protected \ArrayType\EwsArrayOfXrmDealType $Deals;
    /**
     * Constructor method for FindXrmDealResponseMessageType
     * @uses EwsFindXrmDealResponseMessageType::setDeals()
     * @param \ArrayType\EwsArrayOfXrmDealType $deals
     */
    public function __construct(\ArrayType\EwsArrayOfXrmDealType $deals)
    {
        $this
            ->setDeals($deals);
    }
    /**
     * Get Deals value
     * @return \ArrayType\EwsArrayOfXrmDealType
     */
    public function getDeals(): \ArrayType\EwsArrayOfXrmDealType
    {
        return $this->Deals;
    }
    /**
     * Set Deals value
     * @param \ArrayType\EwsArrayOfXrmDealType $deals
     * @return \StructType\EwsFindXrmDealResponseMessageType
     */
    public function setDeals(\ArrayType\EwsArrayOfXrmDealType $deals): self
    {
        $this->Deals = $deals;
        
        return $this;
    }
}
