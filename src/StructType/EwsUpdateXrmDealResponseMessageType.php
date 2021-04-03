<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateXrmDealResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsUpdateXrmDealResponseMessageType extends EwsResponseMessageType
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
     * Constructor method for UpdateXrmDealResponseMessageType
     * @uses EwsUpdateXrmDealResponseMessageType::setDeal()
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
     * @return \StructType\EwsUpdateXrmDealResponseMessageType
     */
    public function setDeal(\StructType\EwsXrmDealType $deal): self
    {
        $this->Deal = $deal;
        
        return $this;
    }
}
