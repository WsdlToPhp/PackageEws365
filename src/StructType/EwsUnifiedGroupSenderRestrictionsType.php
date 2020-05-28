<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \Ews\ArrayType\EwsArrayOfUnifiedGroupSenderRestrictionsDataType
     */
    public $AllowedSenders;
    /**
     * The RejectedSenders
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfUnifiedGroupSenderRestrictionsDataType
     */
    public $RejectedSenders;
    /**
     * The AllowedDistributionLists
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfUnifiedGroupSenderRestrictionsDataType
     */
    public $AllowedDistributionLists;
    /**
     * The RejectedDistributionLists
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfUnifiedGroupSenderRestrictionsDataType
     */
    public $RejectedDistributionLists;
    /**
     * Constructor method for UnifiedGroupSenderRestrictionsType
     * @uses EwsUnifiedGroupSenderRestrictionsType::setAllowedSenders()
     * @uses EwsUnifiedGroupSenderRestrictionsType::setRejectedSenders()
     * @uses EwsUnifiedGroupSenderRestrictionsType::setAllowedDistributionLists()
     * @uses EwsUnifiedGroupSenderRestrictionsType::setRejectedDistributionLists()
     * @param \Ews\ArrayType\EwsArrayOfUnifiedGroupSenderRestrictionsDataType $allowedSenders
     * @param \Ews\ArrayType\EwsArrayOfUnifiedGroupSenderRestrictionsDataType $rejectedSenders
     * @param \Ews\ArrayType\EwsArrayOfUnifiedGroupSenderRestrictionsDataType $allowedDistributionLists
     * @param \Ews\ArrayType\EwsArrayOfUnifiedGroupSenderRestrictionsDataType $rejectedDistributionLists
     */
    public function __construct(\Ews\ArrayType\EwsArrayOfUnifiedGroupSenderRestrictionsDataType $allowedSenders = null, \Ews\ArrayType\EwsArrayOfUnifiedGroupSenderRestrictionsDataType $rejectedSenders = null, \Ews\ArrayType\EwsArrayOfUnifiedGroupSenderRestrictionsDataType $allowedDistributionLists = null, \Ews\ArrayType\EwsArrayOfUnifiedGroupSenderRestrictionsDataType $rejectedDistributionLists = null)
    {
        $this
            ->setAllowedSenders($allowedSenders)
            ->setRejectedSenders($rejectedSenders)
            ->setAllowedDistributionLists($allowedDistributionLists)
            ->setRejectedDistributionLists($rejectedDistributionLists);
    }
    /**
     * Get AllowedSenders value
     * @return \Ews\ArrayType\EwsArrayOfUnifiedGroupSenderRestrictionsDataType|null
     */
    public function getAllowedSenders()
    {
        return $this->AllowedSenders;
    }
    /**
     * Set AllowedSenders value
     * @param \Ews\ArrayType\EwsArrayOfUnifiedGroupSenderRestrictionsDataType $allowedSenders
     * @return \Ews\StructType\EwsUnifiedGroupSenderRestrictionsType
     */
    public function setAllowedSenders(\Ews\ArrayType\EwsArrayOfUnifiedGroupSenderRestrictionsDataType $allowedSenders = null)
    {
        $this->AllowedSenders = $allowedSenders;
        return $this;
    }
    /**
     * Get RejectedSenders value
     * @return \Ews\ArrayType\EwsArrayOfUnifiedGroupSenderRestrictionsDataType|null
     */
    public function getRejectedSenders()
    {
        return $this->RejectedSenders;
    }
    /**
     * Set RejectedSenders value
     * @param \Ews\ArrayType\EwsArrayOfUnifiedGroupSenderRestrictionsDataType $rejectedSenders
     * @return \Ews\StructType\EwsUnifiedGroupSenderRestrictionsType
     */
    public function setRejectedSenders(\Ews\ArrayType\EwsArrayOfUnifiedGroupSenderRestrictionsDataType $rejectedSenders = null)
    {
        $this->RejectedSenders = $rejectedSenders;
        return $this;
    }
    /**
     * Get AllowedDistributionLists value
     * @return \Ews\ArrayType\EwsArrayOfUnifiedGroupSenderRestrictionsDataType|null
     */
    public function getAllowedDistributionLists()
    {
        return $this->AllowedDistributionLists;
    }
    /**
     * Set AllowedDistributionLists value
     * @param \Ews\ArrayType\EwsArrayOfUnifiedGroupSenderRestrictionsDataType $allowedDistributionLists
     * @return \Ews\StructType\EwsUnifiedGroupSenderRestrictionsType
     */
    public function setAllowedDistributionLists(\Ews\ArrayType\EwsArrayOfUnifiedGroupSenderRestrictionsDataType $allowedDistributionLists = null)
    {
        $this->AllowedDistributionLists = $allowedDistributionLists;
        return $this;
    }
    /**
     * Get RejectedDistributionLists value
     * @return \Ews\ArrayType\EwsArrayOfUnifiedGroupSenderRestrictionsDataType|null
     */
    public function getRejectedDistributionLists()
    {
        return $this->RejectedDistributionLists;
    }
    /**
     * Set RejectedDistributionLists value
     * @param \Ews\ArrayType\EwsArrayOfUnifiedGroupSenderRestrictionsDataType $rejectedDistributionLists
     * @return \Ews\StructType\EwsUnifiedGroupSenderRestrictionsType
     */
    public function setRejectedDistributionLists(\Ews\ArrayType\EwsArrayOfUnifiedGroupSenderRestrictionsDataType $rejectedDistributionLists = null)
    {
        $this->RejectedDistributionLists = $rejectedDistributionLists;
        return $this;
    }
}
