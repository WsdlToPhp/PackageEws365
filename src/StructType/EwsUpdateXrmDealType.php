<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateXrmDealType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsUpdateXrmDealType extends EwsBaseRequestType
{
    /**
     * The EntityId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Ews\StructType\EwsItemIdType
     */
    public $EntityId;
    /**
     * The Deal
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Ews\StructType\EwsXrmDealType
     */
    public $Deal;
    /**
     * Constructor method for UpdateXrmDealType
     * @uses EwsUpdateXrmDealType::setEntityId()
     * @uses EwsUpdateXrmDealType::setDeal()
     * @param \Ews\StructType\EwsItemIdType $entityId
     * @param \Ews\StructType\EwsXrmDealType $deal
     */
    public function __construct(\Ews\StructType\EwsItemIdType $entityId = null, \Ews\StructType\EwsXrmDealType $deal = null)
    {
        $this
            ->setEntityId($entityId)
            ->setDeal($deal);
    }
    /**
     * Get EntityId value
     * @return \Ews\StructType\EwsItemIdType
     */
    public function getEntityId()
    {
        return $this->EntityId;
    }
    /**
     * Set EntityId value
     * @param \Ews\StructType\EwsItemIdType $entityId
     * @return \Ews\StructType\EwsUpdateXrmDealType
     */
    public function setEntityId(\Ews\StructType\EwsItemIdType $entityId = null)
    {
        $this->EntityId = $entityId;
        return $this;
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
     * @return \Ews\StructType\EwsUpdateXrmDealType
     */
    public function setDeal(\Ews\StructType\EwsXrmDealType $deal = null)
    {
        $this->Deal = $deal;
        return $this;
    }
}
