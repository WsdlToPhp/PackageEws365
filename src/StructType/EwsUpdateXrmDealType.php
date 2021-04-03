<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \StructType\EwsItemIdType
     */
    protected \StructType\EwsItemIdType $EntityId;
    /**
     * The Deal
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \StructType\EwsXrmDealType
     */
    protected \StructType\EwsXrmDealType $Deal;
    /**
     * Constructor method for UpdateXrmDealType
     * @uses EwsUpdateXrmDealType::setEntityId()
     * @uses EwsUpdateXrmDealType::setDeal()
     * @param \StructType\EwsItemIdType $entityId
     * @param \StructType\EwsXrmDealType $deal
     */
    public function __construct(\StructType\EwsItemIdType $entityId, \StructType\EwsXrmDealType $deal)
    {
        $this
            ->setEntityId($entityId)
            ->setDeal($deal);
    }
    /**
     * Get EntityId value
     * @return \StructType\EwsItemIdType
     */
    public function getEntityId(): \StructType\EwsItemIdType
    {
        return $this->EntityId;
    }
    /**
     * Set EntityId value
     * @param \StructType\EwsItemIdType $entityId
     * @return \StructType\EwsUpdateXrmDealType
     */
    public function setEntityId(\StructType\EwsItemIdType $entityId): self
    {
        $this->EntityId = $entityId;
        
        return $this;
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
     * @return \StructType\EwsUpdateXrmDealType
     */
    public function setDeal(\StructType\EwsXrmDealType $deal): self
    {
        $this->Deal = $deal;
        
        return $this;
    }
}
