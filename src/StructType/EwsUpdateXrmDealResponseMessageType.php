<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \Ews\StructType\EwsXrmDealType
     */
    public $Deal;
    /**
     * Constructor method for UpdateXrmDealResponseMessageType
     * @uses EwsUpdateXrmDealResponseMessageType::setDeal()
     * @param \Ews\StructType\EwsXrmDealType $deal
     */
    public function __construct(\Ews\StructType\EwsXrmDealType $deal = null)
    {
        $this
            ->setDeal($deal);
    }
    /**
     * Get Deal value
     * @return \Ews\StructType\EwsXrmDealType
     */
    public function getDeal()
    {
        return $this->Deal;
    }
    /**
     * Set Deal value
     * @param \Ews\StructType\EwsXrmDealType $deal
     * @return \Ews\StructType\EwsUpdateXrmDealResponseMessageType
     */
    public function setDeal(\Ews\StructType\EwsXrmDealType $deal = null)
    {
        $this->Deal = $deal;
        return $this;
    }
}
