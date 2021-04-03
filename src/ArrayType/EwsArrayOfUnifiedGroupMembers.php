<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

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
    protected array $Member = [];
    /**
     * Constructor method for ArrayOfUnifiedGroupMembers
     * @uses EwsArrayOfUnifiedGroupMembers::setMember()
     * @param string[] $member
     */
    public function __construct(array $member = [])
    {
        $this
            ->setMember($member);
    }
    /**
     * Get Member value
     * @return string[]
     */
    public function getMember(): array
    {
        return $this->Member;
    }
    /**
     * This method is responsible for validating the values passed to the setMember method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMember method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMemberForArrayConstraintsFromSetMember(array $values = []): string
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
     * @throws InvalidArgumentException
     * @param string[] $member
     * @return \ArrayType\EwsArrayOfUnifiedGroupMembers
     */
    public function setMember(array $member = []): self
    {
        // validation for constraint: array
        if ('' !== ($memberArrayErrorMessage = self::validateMemberForArrayConstraintsFromSetMember($member))) {
            throw new InvalidArgumentException($memberArrayErrorMessage, __LINE__);
        }
        $this->Member = $member;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return string|null
     */
    public function current(): ?string
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return string|null
     */
    public function item($index): ?string
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return string|null
     */
    public function first(): ?string
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return string|null
     */
    public function last(): ?string
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return string|null
     */
    public function offsetGet($offset): ?string
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Member
     */
    public function getAttributeName(): string
    {
        return 'Member';
    }
}
