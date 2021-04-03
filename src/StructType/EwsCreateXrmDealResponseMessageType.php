<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateXrmDealResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsCreateXrmDealResponseMessageType extends EwsResponseMessageType
{
    /**
     * The Deal
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \StructType\EwsXrmDealType
     */
    protected \StructType\EwsXrmDealType $Deal;
    /**
     * Constructor method for CreateXrmDealResponseMessageType
     * @uses EwsCreateXrmDealResponseMessageType::setDeal()
     * @param \StructType\EwsXrmDealType $deal
     */
    public function __construct(\StructType\EwsXrmDealType $deal)
    {
        $this
            ->setDeal($deal);
    }
    /**
     * Get Deal value
     * @return \StructType\EwsXrmDealType
     */
    public function getDeal(): \StructType\EwsXrmDealType
    {
        return $this->Deal;
    }
    /**
     * Set Deal value
     * @param \StructType\EwsXrmDealType $deal
     * @return \StructType\EwsCreateXrmDealResponseMessageType
     */
    public function setDeal(\StructType\EwsXrmDealType $deal): self
    {
        $this->Deal = $deal;
        
        return $this;
    }
}
