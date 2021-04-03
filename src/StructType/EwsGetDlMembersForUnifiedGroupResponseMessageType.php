<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDlMembersForUnifiedGroupResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetDlMembersForUnifiedGroupResponseMessageType extends EwsResponseMessageType
{
    /**
     * The MembershipType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $MembershipType;
    /**
     * The TotalMembersCount
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $TotalMembersCount = null;
    /**
     * The Members
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfPeopleType|null
     */
    protected ?\ArrayType\EwsArrayOfPeopleType $Members = null;
    /**
     * Constructor method for GetDlMembersForUnifiedGroupResponseMessageType
     * @uses EwsGetDlMembersForUnifiedGroupResponseMessageType::setMembershipType()
     * @uses EwsGetDlMembersForUnifiedGroupResponseMessageType::setTotalMembersCount()
     * @uses EwsGetDlMembersForUnifiedGroupResponseMessageType::setMembers()
     * @param string $membershipType
     * @param int $totalMembersCount
     * @param \ArrayType\EwsArrayOfPeopleType $members
     */
    public function __construct(string $membershipType, ?int $totalMembersCount = null, ?\ArrayType\EwsArrayOfPeopleType $members = null)
    {
        $this
            ->setMembershipType($membershipType)
            ->setTotalMembersCount($totalMembersCount)
            ->setMembers($members);
    }
    /**
     * Get MembershipType value
     * @return string
     */
    public function getMembershipType(): string
    {
        return $this->MembershipType;
    }
    /**
     * Set MembershipType value
     * @uses \EnumType\EwsGroupMembershipType::valueIsValid()
     * @uses \EnumType\EwsGroupMembershipType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $membershipType
     * @return \StructType\EwsGetDlMembersForUnifiedGroupResponseMessageType
     */
    public function setMembershipType(string $membershipType): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsGroupMembershipType::valueIsValid($membershipType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsGroupMembershipType', is_array($membershipType) ? implode(', ', $membershipType) : var_export($membershipType, true), implode(', ', \EnumType\EwsGroupMembershipType::getValidValues())), __LINE__);
        }
        $this->MembershipType = $membershipType;
        
        return $this;
    }
    /**
     * Get TotalMembersCount value
     * @return int|null
     */
    public function getTotalMembersCount(): ?int
    {
        return $this->TotalMembersCount;
    }
    /**
     * Set TotalMembersCount value
     * @param int $totalMembersCount
     * @return \StructType\EwsGetDlMembersForUnifiedGroupResponseMessageType
     */
    public function setTotalMembersCount(?int $totalMembersCount = null): self
    {
        // validation for constraint: int
        if (!is_null($totalMembersCount) && !(is_int($totalMembersCount) || ctype_digit($totalMembersCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($totalMembersCount, true), gettype($totalMembersCount)), __LINE__);
        }
        $this->TotalMembersCount = $totalMembersCount;
        
        return $this;
    }
    /**
     * Get Members value
     * @return \ArrayType\EwsArrayOfPeopleType|null
     */
    public function getMembers(): ?\ArrayType\EwsArrayOfPeopleType
    {
        return $this->Members;
    }
    /**
     * Set Members value
     * @param \ArrayType\EwsArrayOfPeopleType $members
     * @return \StructType\EwsGetDlMembersForUnifiedGroupResponseMessageType
     */
    public function setMembers(?\ArrayType\EwsArrayOfPeopleType $members = null): self
    {
        $this->Members = $members;
        
        return $this;
    }
}
