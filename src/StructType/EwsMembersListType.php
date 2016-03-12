<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MembersListType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsMembersListType extends AbstractStructBase
{
    /**
     * The Member
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Ews\StructType\EwsMemberType[]
     */
    public $Member;
    /**
     * Constructor method for MembersListType
     * @uses EwsMembersListType::setMember()
     * @param \Ews\StructType\EwsMemberType[] $member
     */
    public function __construct(array $member = array())
    {
        $this
            ->setMember($member);
    }
    /**
     * Get Member value
     * @return \Ews\StructType\EwsMemberType[]|null
     */
    public function getMember()
    {
        return $this->Member;
    }
    /**
     * Set Member value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsMemberType[] $member
     * @return \Ews\StructType\EwsMembersListType
     */
    public function setMember(array $member = array())
    {
        foreach ($member as $membersListTypeMemberItem) {
            // validation for constraint: itemType
            if (!$membersListTypeMemberItem instanceof \Ews\StructType\EwsMemberType) {
                throw new \InvalidArgumentException(sprintf('The Member property can only contain items of \Ews\StructType\EwsMemberType, "%s" given', is_object($membersListTypeMemberItem) ? get_class($membersListTypeMemberItem) : gettype($membersListTypeMemberItem)), __LINE__);
            }
        }
        $this->Member = $member;
        return $this;
    }
    /**
     * Add item to Member value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsMemberType $item
     * @return \Ews\StructType\EwsMembersListType
     */
    public function addToMember(\Ews\StructType\EwsMemberType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsMemberType) {
            throw new \InvalidArgumentException(sprintf('The Member property can only contain items of \Ews\StructType\EwsMemberType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Member[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsMembersListType
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
