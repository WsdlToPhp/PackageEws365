<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for GroupMembersArray ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGroupMembersArray extends AbstractStructArrayBase
{
    /**
     * The Member
     * Meta information extracted from the WSDL
     * - choice: Member
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var string
     */
    public $Member;
    /**
     * Constructor method for GroupMembersArray
     * @uses EwsGroupMembersArray::setMember()
     * @param string $member
     */
    public function __construct($member = null)
    {
        $this
            ->setMember($member);
    }
    /**
     * Get Member value
     * @return string|null
     */
    public function getMember()
    {
        return isset($this->Member) ? $this->Member : null;
    }
    /**
     * This method is responsible for validating the value passed to the setMember method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMember method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateMemberForChoiceConstraintsFromSetMember($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property Member can\'t be set as the property %s is already set. Only one property must be set among these properties: Member, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set Member value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param string $member
     * @return \Ews\ArrayType\EwsGroupMembersArray
     */
    public function setMember($member = null)
    {
        // validation for constraint: string
        if (!is_null($member) && !is_string($member)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($member, true), gettype($member)), __LINE__);
        }
        // validation for constraint: choice(Member)
        if ('' !== ($memberChoiceErrorMessage = self::validateMemberForChoiceConstraintsFromSetMember($member))) {
            throw new \InvalidArgumentException($memberChoiceErrorMessage, __LINE__);
        }
        if (is_null($member) || (is_array($member) && empty($member))) {
            unset($this->Member);
        } else {
            $this->Member = $member;
        }
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
