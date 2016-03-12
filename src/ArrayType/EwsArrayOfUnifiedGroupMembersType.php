<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfUnifiedGroupMembersType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfUnifiedGroupMembersType extends AbstractStructArrayBase
{
    /**
     * The Member
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Ews\StructType\EwsUnifiedGroupMemberType[]
     */
    public $Member;
    /**
     * Constructor method for ArrayOfUnifiedGroupMembersType
     * @uses EwsArrayOfUnifiedGroupMembersType::setMember()
     * @param \Ews\StructType\EwsUnifiedGroupMemberType[] $member
     */
    public function __construct(array $member = array())
    {
        $this
            ->setMember($member);
    }
    /**
     * Get Member value
     * @return \Ews\StructType\EwsUnifiedGroupMemberType[]|null
     */
    public function getMember()
    {
        return $this->Member;
    }
    /**
     * Set Member value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsUnifiedGroupMemberType[] $member
     * @return \Ews\ArrayType\EwsArrayOfUnifiedGroupMembersType
     */
    public function setMember(array $member = array())
    {
        foreach ($member as $arrayOfUnifiedGroupMembersTypeMemberItem) {
            // validation for constraint: itemType
            if (!$arrayOfUnifiedGroupMembersTypeMemberItem instanceof \Ews\StructType\EwsUnifiedGroupMemberType) {
                throw new \InvalidArgumentException(sprintf('The Member property can only contain items of \Ews\StructType\EwsUnifiedGroupMemberType, "%s" given', is_object($arrayOfUnifiedGroupMembersTypeMemberItem) ? get_class($arrayOfUnifiedGroupMembersTypeMemberItem) : gettype($arrayOfUnifiedGroupMembersTypeMemberItem)), __LINE__);
            }
        }
        $this->Member = $member;
        return $this;
    }
    /**
     * Add item to Member value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsUnifiedGroupMemberType $item
     * @return \Ews\ArrayType\EwsArrayOfUnifiedGroupMembersType
     */
    public function addToMember(\Ews\StructType\EwsUnifiedGroupMemberType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsUnifiedGroupMemberType) {
            throw new \InvalidArgumentException(sprintf('The Member property can only contain items of \Ews\StructType\EwsUnifiedGroupMemberType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Member[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsUnifiedGroupMemberType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsUnifiedGroupMemberType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsUnifiedGroupMemberType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsUnifiedGroupMemberType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsUnifiedGroupMemberType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Member
     */
    public function getAttributeName()
    {
        return 'Member';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsArrayOfUnifiedGroupMembersType
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
