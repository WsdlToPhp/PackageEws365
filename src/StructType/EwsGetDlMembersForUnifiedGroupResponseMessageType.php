<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
    public $MembershipType;
    /**
     * The TotalMembersCount
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $TotalMembersCount;
    /**
     * The Members
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfPeopleType
     */
    public $Members;
    /**
     * Constructor method for GetDlMembersForUnifiedGroupResponseMessageType
     * @uses EwsGetDlMembersForUnifiedGroupResponseMessageType::setMembershipType()
     * @uses EwsGetDlMembersForUnifiedGroupResponseMessageType::setTotalMembersCount()
     * @uses EwsGetDlMembersForUnifiedGroupResponseMessageType::setMembers()
     * @param string $membershipType
     * @param int $totalMembersCount
     * @param \Ews\ArrayType\EwsArrayOfPeopleType $members
     */
    public function __construct($membershipType = null, $totalMembersCount = null, \Ews\ArrayType\EwsArrayOfPeopleType $members = null)
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
    public function getMembershipType()
    {
        return $this->MembershipType;
    }
    /**
     * Set MembershipType value
     * @uses \Ews\EnumType\EwsGroupMembershipType::valueIsValid()
     * @uses \Ews\EnumType\EwsGroupMembershipType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $membershipType
     * @return \Ews\StructType\EwsGetDlMembersForUnifiedGroupResponseMessageType
     */
    public function setMembershipType($membershipType = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsGroupMembershipType::valueIsValid($membershipType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsGroupMembershipType', is_array($membershipType) ? implode(', ', $membershipType) : var_export($membershipType, true), implode(', ', \Ews\EnumType\EwsGroupMembershipType::getValidValues())), __LINE__);
        }
        $this->MembershipType = $membershipType;
        return $this;
    }
    /**
     * Get TotalMembersCount value
     * @return int|null
     */
    public function getTotalMembersCount()
    {
        return $this->TotalMembersCount;
    }
    /**
     * Set TotalMembersCount value
     * @param int $totalMembersCount
     * @return \Ews\StructType\EwsGetDlMembersForUnifiedGroupResponseMessageType
     */
    public function setTotalMembersCount($totalMembersCount = null)
    {
        // validation for constraint: int
        if (!is_null($totalMembersCount) && !(is_int($totalMembersCount) || ctype_digit($totalMembersCount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($totalMembersCount, true), gettype($totalMembersCount)), __LINE__);
        }
        $this->TotalMembersCount = $totalMembersCount;
        return $this;
    }
    /**
     * Get Members value
     * @return \Ews\ArrayType\EwsArrayOfPeopleType|null
     */
    public function getMembers()
    {
        return $this->Members;
    }
    /**
     * Set Members value
     * @param \Ews\ArrayType\EwsArrayOfPeopleType $members
     * @return \Ews\StructType\EwsGetDlMembersForUnifiedGroupResponseMessageType
     */
    public function setMembers(\Ews\ArrayType\EwsArrayOfPeopleType $members = null)
    {
        $this->Members = $members;
        return $this;
    }
}
