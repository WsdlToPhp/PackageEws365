<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var string
     */
    public $DisplayName;
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Type;
    /**
     * The MemberId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $MemberId;
    /**
     * Constructor method for RoleMemberItemType
     * @uses EwsRoleMemberItemType::setDisplayName()
     * @uses EwsRoleMemberItemType::setType()
     * @uses EwsRoleMemberItemType::setMemberId()
     * @param string $displayName
     * @param string $type
     * @param string $memberId
     */
    public function __construct($displayName = null, $type = null, $memberId = null)
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
    public function getDisplayName()
    {
        return $this->DisplayName;
    }
    /**
     * Set DisplayName value
     * @param string $displayName
     * @return \Ews\StructType\EwsRoleMemberItemType
     */
    public function setDisplayName($displayName = null)
    {
        // validation for constraint: string
        if (!is_null($displayName) && !is_string($displayName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($displayName, true), gettype($displayName)), __LINE__);
        }
        $this->DisplayName = $displayName;
        return $this;
    }
    /**
     * Get Type value
     * @return string|null
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @uses \Ews\EnumType\EwsRoleMemberTypeType::valueIsValid()
     * @uses \Ews\EnumType\EwsRoleMemberTypeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \Ews\StructType\EwsRoleMemberItemType
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsRoleMemberTypeType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsRoleMemberTypeType', is_array($type) ? implode(', ', $type) : var_export($type, true), implode(', ', \Ews\EnumType\EwsRoleMemberTypeType::getValidValues())), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Get MemberId value
     * @return string|null
     */
    public function getMemberId()
    {
        return $this->MemberId;
    }
    /**
     * Set MemberId value
     * @param string $memberId
     * @return \Ews\StructType\EwsRoleMemberItemType
     */
    public function setMemberId($memberId = null)
    {
        // validation for constraint: string
        if (!is_null($memberId) && !is_string($memberId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($memberId, true), gettype($memberId)), __LINE__);
        }
        $this->MemberId = $memberId;
        return $this;
    }
}
