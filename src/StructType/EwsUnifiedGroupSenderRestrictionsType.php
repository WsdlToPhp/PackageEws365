<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UnifiedGroupSenderRestrictionsType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsUnifiedGroupSenderRestrictionsType extends AbstractStructBase
{
    /**
     * The AllowedSenders
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfUnifiedGroupSenderRestrictionsDataType|null
     */
    protected ?\ArrayType\EwsArrayOfUnifiedGroupSenderRestrictionsDataType $AllowedSenders = null;
    /**
     * The RejectedSenders
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfUnifiedGroupSenderRestrictionsDataType|null
     */
    protected ?\ArrayType\EwsArrayOfUnifiedGroupSenderRestrictionsDataType $RejectedSenders = null;
    /**
     * The AllowedDistributionLists
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfUnifiedGroupSenderRestrictionsDataType|null
     */
    protected ?\ArrayType\EwsArrayOfUnifiedGroupSenderRestrictionsDataType $AllowedDistributionLists = null;
    /**
     * The RejectedDistributionLists
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfUnifiedGroupSenderRestrictionsDataType|null
     */
    protected ?\ArrayType\EwsArrayOfUnifiedGroupSenderRestrictionsDataType $RejectedDistributionLists = null;
    /**
     * Constructor method for UnifiedGroupSenderRestrictionsType
     * @uses EwsUnifiedGroupSenderRestrictionsType::setAllowedSenders()
     * @uses EwsUnifiedGroupSenderRestrictionsType::setRejectedSenders()
     * @uses EwsUnifiedGroupSenderRestrictionsType::setAllowedDistributionLists()
     * @uses EwsUnifiedGroupSenderRestrictionsType::setRejectedDistributionLists()
     * @param \ArrayType\EwsArrayOfUnifiedGroupSenderRestrictionsDataType $allowedSenders
     * @param \ArrayType\EwsArrayOfUnifiedGroupSenderRestrictionsDataType $rejectedSenders
     * @param \ArrayType\EwsArrayOfUnifiedGroupSenderRestrictionsDataType $allowedDistributionLists
     * @param \ArrayType\EwsArrayOfUnifiedGroupSenderRestrictionsDataType $rejectedDistributionLists
     */
    public function __construct(?\ArrayType\EwsArrayOfUnifiedGroupSenderRestrictionsDataType $allowedSenders = null, ?\ArrayType\EwsArrayOfUnifiedGroupSenderRestrictionsDataType $rejectedSenders = null, ?\ArrayType\EwsArrayOfUnifiedGroupSenderRestrictionsDataType $allowedDistributionLists = null, ?\ArrayType\EwsArrayOfUnifiedGroupSenderRestrictionsDataType $rejectedDistributionLists = null)
    {
        $this
            ->setAllowedSenders($allowedSenders)
            ->setRejectedSenders($rejectedSenders)
            ->setAllowedDistributionLists($allowedDistributionLists)
            ->setRejectedDistributionLists($rejectedDistributionLists);
    }
    /**
     * Get AllowedSenders value
     * @return \ArrayType\EwsArrayOfUnifiedGroupSenderRestrictionsDataType|null
     */
    public function getAllowedSenders(): ?\ArrayType\EwsArrayOfUnifiedGroupSenderRestrictionsDataType
    {
        return $this->AllowedSenders;
    }
    /**
     * Set AllowedSenders value
     * @param \ArrayType\EwsArrayOfUnifiedGroupSenderRestrictionsDataType $allowedSenders
     * @return \StructType\EwsUnifiedGroupSenderRestrictionsType
     */
    public function setAllowedSenders(?\ArrayType\EwsArrayOfUnifiedGroupSenderRestrictionsDataType $allowedSenders = null): self
    {
        $this->AllowedSenders = $allowedSenders;
        
        return $this;
    }
    /**
     * Get RejectedSenders value
     * @return \ArrayType\EwsArrayOfUnifiedGroupSenderRestrictionsDataType|null
     */
    public function getRejectedSenders(): ?\ArrayType\EwsArrayOfUnifiedGroupSenderRestrictionsDataType
    {
        return $this->RejectedSenders;
    }
    /**
     * Set RejectedSenders value
     * @param \ArrayType\EwsArrayOfUnifiedGroupSenderRestrictionsDataType $rejectedSenders
     * @return \StructType\EwsUnifiedGroupSenderRestrictionsType
     */
    public function setRejectedSenders(?\ArrayType\EwsArrayOfUnifiedGroupSenderRestrictionsDataType $rejectedSenders = null): self
    {
        $this->RejectedSenders = $rejectedSenders;
        
        return $this;
    }
    /**
     * Get AllowedDistributionLists value
     * @return \ArrayType\EwsArrayOfUnifiedGroupSenderRestrictionsDataType|null
     */
    public function getAllowedDistributionLists(): ?\ArrayType\EwsArrayOfUnifiedGroupSenderRestrictionsDataType
    {
        return $this->AllowedDistributionLists;
    }
    /**
     * Set AllowedDistributionLists value
     * @param \ArrayType\EwsArrayOfUnifiedGroupSenderRestrictionsDataType $allowedDistributionLists
     * @return \StructType\EwsUnifiedGroupSenderRestrictionsType
     */
    public function setAllowedDistributionLists(?\ArrayType\EwsArrayOfUnifiedGroupSenderRestrictionsDataType $allowedDistributionLists = null): self
    {
        $this->AllowedDistributionLists = $allowedDistributionLists;
        
        return $this;
    }
    /**
     * Get RejectedDistributionLists value
     * @return \ArrayType\EwsArrayOfUnifiedGroupSenderRestrictionsDataType|null
     */
    public function getRejectedDistributionLists(): ?\ArrayType\EwsArrayOfUnifiedGroupSenderRestrictionsDataType
    {
        return $this->RejectedDistributionLists;
    }
    /**
     * Set RejectedDistributionLists value
     * @param \ArrayType\EwsArrayOfUnifiedGroupSenderRestrictionsDataType $rejectedDistributionLists
     * @return \StructType\EwsUnifiedGroupSenderRestrictionsType
     */
    public function setRejectedDistributionLists(?\ArrayType\EwsArrayOfUnifiedGroupSenderRestrictionsDataType $rejectedDistributionLists = null): self
    {
        $this->RejectedDistributionLists = $rejectedDistributionLists;
        
        return $this;
    }
}
