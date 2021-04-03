<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RoleMemberItemType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsRoleMemberItemType extends EwsItemType
{
    /**
     * The DisplayName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DisplayName = null;
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Type = null;
    /**
     * The MemberId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $MemberId = null;
    /**
     * Constructor method for RoleMemberItemType
     * @uses EwsRoleMemberItemType::setDisplayName()
     * @uses EwsRoleMemberItemType::setType()
     * @uses EwsRoleMemberItemType::setMemberId()
     * @param string $displayName
     * @param string $type
     * @param string $memberId
     */
    public function __construct(?string $displayName = null, ?string $type = null, ?string $memberId = null)
    {
        $this
            ->setDisplayName($displayName)
            ->setType($type)
            ->setMemberId($memberId);
    }
    /**
     * Get DisplayName value
     * @return string|null
     */
    public function getDisplayName(): ?string
    {
        return $this->DisplayName;
    }
    /**
     * Set DisplayName value
     * @param string $displayName
     * @return \StructType\EwsRoleMemberItemType
     */
    public function setDisplayName(?string $displayName = null): self
    {
        // validation for constraint: string
        if (!is_null($displayName) && !is_string($displayName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($displayName, true), gettype($displayName)), __LINE__);
        }
        $this->DisplayName = $displayName;
        
        return $this;
    }
    /**
     * Get Type value
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @uses \EnumType\EwsRoleMemberTypeType::valueIsValid()
     * @uses \EnumType\EwsRoleMemberTypeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $type
     * @return \StructType\EwsRoleMemberItemType
     */
    public function setType(?string $type = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsRoleMemberTypeType::valueIsValid($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsRoleMemberTypeType', is_array($type) ? implode(', ', $type) : var_export($type, true), implode(', ', \EnumType\EwsRoleMemberTypeType::getValidValues())), __LINE__);
        }
        $this->Type = $type;
        
        return $this;
    }
    /**
     * Get MemberId value
     * @return string|null
     */
    public function getMemberId(): ?string
    {
        return $this->MemberId;
    }
    /**
     * Set MemberId value
     * @param string $memberId
     * @return \StructType\EwsRoleMemberItemType
     */
    public function setMemberId(?string $memberId = null): self
    {
        // validation for constraint: string
        if (!is_null($memberId) && !is_string($memberId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($memberId, true), gettype($memberId)), __LINE__);
        }
        $this->MemberId = $memberId;
        
        return $this;
    }
}
