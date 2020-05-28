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
     * Meta information extracted from the WSDL
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
     * This method is responsible for validating the values passed to the setMember method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMember method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMemberForArrayConstraintsFromSetMember(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfUnifiedGroupMembersMemberItem) {
            // validation for constraint: itemType
            if (!is_string($arrayOfUnifiedGroupMembersMemberItem)) {
                $invalidValues[] = is_object($arrayOfUnifiedGroupMembersMemberItem) ? get_class($arrayOfUnifiedGroupMembersMemberItem) : sprintf('%s(%s)', gettype($arrayOfUnifiedGroupMembersMemberItem), var_export($arrayOfUnifiedGroupMembersMemberItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Member property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Member value
     * @throws \InvalidArgumentException
     * @param string[] $member
     * @return \Ews\ArrayType\EwsArrayOfUnifiedGroupMembers
     */
    public function setMember(array $member = array())
    {
        // validation for constraint: array
        if ('' !== ($memberArrayErrorMessage = self::validateMemberForArrayConstraintsFromSetMember($member))) {
            throw new \InvalidArgumentException($memberArrayErrorMessage, __LINE__);
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
            throw new \InvalidArgumentException(sprintf('The Member property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
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
}
