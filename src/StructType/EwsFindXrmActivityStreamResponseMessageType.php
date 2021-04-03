<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \ArrayType\EwsArrayOfXrmActivityStreamType
     */
    protected \ArrayType\EwsArrayOfXrmActivityStreamType $Deals;
    /**
     * Constructor method for FindXrmActivityStreamResponseMessageType
     * @uses EwsFindXrmActivityStreamResponseMessageType::setDeals()
     * @param \ArrayType\EwsArrayOfXrmActivityStreamType $deals
     */
    public function __construct(\ArrayType\EwsArrayOfXrmActivityStreamType $deals)
    {
        $this
            ->setDeals($deals);
    }
    /**
     * Get Deals value
     * @return \ArrayType\EwsArrayOfXrmActivityStreamType
     */
    public function getDeals(): \ArrayType\EwsArrayOfXrmActivityStreamType
    {
        return $this->Deals;
    }
    /**
     * Set Deals value
     * @param \ArrayType\EwsArrayOfXrmActivityStreamType $deals
     * @return \StructType\EwsFindXrmActivityStreamResponseMessageType
     */
    public function setDeals(\ArrayType\EwsArrayOfXrmActivityStreamType $deals): self
    {
        $this->Deals = $deals;
        
        return $this;
    }
}
