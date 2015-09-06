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
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $MembershipType;
    /**
     * The TotalMembersCount
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $TotalMembersCount;
    /**
     * The Members
     * Meta informations extracted from the WSDL
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
     * @param string $membershipType
     * @return \Ews\StructType\EwsGetDlMembersForUnifiedGroupResponseMessageType
     */
    public function setMembershipType($membershipType = null)
    {
        if (!\Ews\EnumType\EwsGroupMembershipType::valueIsValid($membershipType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $membershipType, implode(', ', \Ews\EnumType\EwsGroupMembershipType::getValidValues())), __LINE__);
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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsGetDlMembersForUnifiedGroupResponseMessageType
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
