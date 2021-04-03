<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var string|null
     */
    protected ?string $GroupActionResultType = null;
    /**
     * The InvalidMembers
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfUnifiedGroupMembers|null
     */
    protected ?\ArrayType\EwsArrayOfUnifiedGroupMembers $InvalidMembers = null;
    /**
     * The FailedMembers
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfUnifiedGroupMembers|null
     */
    protected ?\ArrayType\EwsArrayOfUnifiedGroupMembers $FailedMembers = null;
    /**
     * Constructor method for SetUnifiedGroupMembershipStateResponseMessageType
     * @uses EwsSetUnifiedGroupMembershipStateResponseMessageType::setGroupActionResultType()
     * @uses EwsSetUnifiedGroupMembershipStateResponseMessageType::setInvalidMembers()
     * @uses EwsSetUnifiedGroupMembershipStateResponseMessageType::setFailedMembers()
     * @param string $groupActionResultType
     * @param \ArrayType\EwsArrayOfUnifiedGroupMembers $invalidMembers
     * @param \ArrayType\EwsArrayOfUnifiedGroupMembers $failedMembers
     */
    public function __construct(?string $groupActionResultType = null, ?\ArrayType\EwsArrayOfUnifiedGroupMembers $invalidMembers = null, ?\ArrayType\EwsArrayOfUnifiedGroupMembers $failedMembers = null)
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
    public function getGroupActionResultType(): ?string
    {
        return $this->GroupActionResultType;
    }
    /**
     * Set GroupActionResultType value
     * @uses \EnumType\EwsUnifiedGroupActionResultType::valueIsValid()
     * @uses \EnumType\EwsUnifiedGroupActionResultType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $groupActionResultType
     * @return \StructType\EwsSetUnifiedGroupMembershipStateResponseMessageType
     */
    public function setGroupActionResultType(?string $groupActionResultType = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsUnifiedGroupActionResultType::valueIsValid($groupActionResultType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsUnifiedGroupActionResultType', is_array($groupActionResultType) ? implode(', ', $groupActionResultType) : var_export($groupActionResultType, true), implode(', ', \EnumType\EwsUnifiedGroupActionResultType::getValidValues())), __LINE__);
        }
        $this->GroupActionResultType = $groupActionResultType;
        
        return $this;
    }
    /**
     * Get InvalidMembers value
     * @return \ArrayType\EwsArrayOfUnifiedGroupMembers|null
     */
    public function getInvalidMembers(): ?\ArrayType\EwsArrayOfUnifiedGroupMembers
    {
        return $this->InvalidMembers;
    }
    /**
     * Set InvalidMembers value
     * @param \ArrayType\EwsArrayOfUnifiedGroupMembers $invalidMembers
     * @return \StructType\EwsSetUnifiedGroupMembershipStateResponseMessageType
     */
    public function setInvalidMembers(?\ArrayType\EwsArrayOfUnifiedGroupMembers $invalidMembers = null): self
    {
        $this->InvalidMembers = $invalidMembers;
        
        return $this;
    }
    /**
     * Get FailedMembers value
     * @return \ArrayType\EwsArrayOfUnifiedGroupMembers|null
     */
    public function getFailedMembers(): ?\ArrayType\EwsArrayOfUnifiedGroupMembers
    {
        return $this->FailedMembers;
    }
    /**
     * Set FailedMembers value
     * @param \ArrayType\EwsArrayOfUnifiedGroupMembers $failedMembers
     * @return \StructType\EwsSetUnifiedGroupMembershipStateResponseMessageType
     */
    public function setFailedMembers(?\ArrayType\EwsArrayOfUnifiedGroupMembers $failedMembers = null): self
    {
        $this->FailedMembers = $failedMembers;
        
        return $this;
    }
}
