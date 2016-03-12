<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfUnifiedGroupMembers ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfUnifiedGroupMembers extends AbstractStructArrayBase
{
    /**
     * The Member
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $Member;
    /**
     * Constructor method for ArrayOfUnifiedGroupMembers
     * @uses EwsArrayOfUnifiedGroupMembers::setMember()
     * @param string[] $member
     */
    public function __construct(array $member = array())
    {
        $this
            ->setMember($member);
    }
    /**
     * Get Member value
     * @return string[]|null
     */
    public function getMember()
    {
        return $this->Member;
    }
    /**
     * Set Member value
     * @throws \InvalidArgumentException
     * @param string[] $member
     * @return \Ews\ArrayType\EwsArrayOfUnifiedGroupMembers
     */
    public function setMember(array $member = array())
    {
        foreach ($member as $arrayOfUnifiedGroupMembersMemberItem) {
            // validation for constraint: itemType
            if (!is_string($arrayOfUnifiedGroupMembersMemberItem)) {
                throw new \InvalidArgumentException(sprintf('The Member property can only contain items of string, "%s" given', is_object($arrayOfUnifiedGroupMembersMemberItem) ? get_class($arrayOfUnifiedGroupMembersMemberItem) : gettype($arrayOfUnifiedGroupMembersMemberItem)), __LINE__);
            }
        }
        $this->Member = $member;
        return $this;
    }
    /**
     * Add item to Member value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Ews\ArrayType\EwsArrayOfUnifiedGroupMembers
     */
    public function addToMember($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The Member property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Member[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return string|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return string|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return string|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return string|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return string|null
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
     * @return \Ews\ArrayType\EwsArrayOfUnifiedGroupMembers
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
