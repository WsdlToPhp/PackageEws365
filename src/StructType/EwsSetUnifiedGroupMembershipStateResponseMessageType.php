<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetUnifiedGroupMembershipStateResponseMessageType
 * StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsSetUnifiedGroupMembershipStateResponseMessageType extends EwsResponseMessageType
{
    /**
     * The GroupActionResultType
     * Meta information extracted from the WSDL
     * - ref: t:GroupActionResultType
     * @var string
     */
    public $GroupActionResultType;
    /**
     * The InvalidMembers
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfUnifiedGroupMembers
     */
    public $InvalidMembers;
    /**
     * The FailedMembers
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfUnifiedGroupMembers
     */
    public $FailedMembers;
    /**
     * Constructor method for SetUnifiedGroupMembershipStateResponseMessageType
     * @uses EwsSetUnifiedGroupMembershipStateResponseMessageType::setGroupActionResultType()
     * @uses EwsSetUnifiedGroupMembershipStateResponseMessageType::setInvalidMembers()
     * @uses EwsSetUnifiedGroupMembershipStateResponseMessageType::setFailedMembers()
     * @param string $groupActionResultType
     * @param \Ews\ArrayType\EwsArrayOfUnifiedGroupMembers $invalidMembers
     * @param \Ews\ArrayType\EwsArrayOfUnifiedGroupMembers $failedMembers
     */
    public function __construct($groupActionResultType = null, \Ews\ArrayType\EwsArrayOfUnifiedGroupMembers $invalidMembers = null, \Ews\ArrayType\EwsArrayOfUnifiedGroupMembers $failedMembers = null)
    {
        $this
            ->setGroupActionResultType($groupActionResultType)
            ->setInvalidMembers($invalidMembers)
            ->setFailedMembers($failedMembers);
    }
    /**
     * Get GroupActionResultType value
     * @return string|null
     */
    public function getGroupActionResultType()
    {
        return $this->GroupActionResultType;
    }
    /**
     * Set GroupActionResultType value
     * @uses \Ews\EnumType\EwsUnifiedGroupActionResultType::valueIsValid()
     * @uses \Ews\EnumType\EwsUnifiedGroupActionResultType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $groupActionResultType
     * @return \Ews\StructType\EwsSetUnifiedGroupMembershipStateResponseMessageType
     */
    public function setGroupActionResultType($groupActionResultType = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsUnifiedGroupActionResultType::valueIsValid($groupActionResultType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsUnifiedGroupActionResultType', is_array($groupActionResultType) ? implode(', ', $groupActionResultType) : var_export($groupActionResultType, true), implode(', ', \Ews\EnumType\EwsUnifiedGroupActionResultType::getValidValues())), __LINE__);
        }
        $this->GroupActionResultType = $groupActionResultType;
        return $this;
    }
    /**
     * Get InvalidMembers value
     * @return \Ews\ArrayType\EwsArrayOfUnifiedGroupMembers|null
     */
    public function getInvalidMembers()
    {
        return $this->InvalidMembers;
    }
    /**
     * Set InvalidMembers value
     * @param \Ews\ArrayType\EwsArrayOfUnifiedGroupMembers $invalidMembers
     * @return \Ews\StructType\EwsSetUnifiedGroupMembershipStateResponseMessageType
     */
    public function setInvalidMembers(\Ews\ArrayType\EwsArrayOfUnifiedGroupMembers $invalidMembers = null)
    {
        $this->InvalidMembers = $invalidMembers;
        return $this;
    }
    /**
     * Get FailedMembers value
     * @return \Ews\ArrayType\EwsArrayOfUnifiedGroupMembers|null
     */
    public function getFailedMembers()
    {
        return $this->FailedMembers;
    }
    /**
     * Set FailedMembers value
     * @param \Ews\ArrayType\EwsArrayOfUnifiedGroupMembers $failedMembers
     * @return \Ews\StructType\EwsSetUnifiedGroupMembershipStateResponseMessageType
     */
    public function setFailedMembers(\Ews\ArrayType\EwsArrayOfUnifiedGroupMembers $failedMembers = null)
    {
        $this->FailedMembers = $failedMembers;
        return $this;
    }
}
