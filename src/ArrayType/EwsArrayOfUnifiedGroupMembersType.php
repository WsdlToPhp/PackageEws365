<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

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
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\EwsUnifiedGroupMemberType[]
     */
    protected array $Member = [];
    /**
     * Constructor method for ArrayOfUnifiedGroupMembersType
     * @uses EwsArrayOfUnifiedGroupMembersType::setMember()
     * @param \StructType\EwsUnifiedGroupMemberType[] $member
     */
    public function __construct(array $member = [])
    {
        $this
            ->setMember($member);
    }
    /**
     * Get Member value
     * @return \StructType\EwsUnifiedGroupMemberType[]
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
        foreach ($values as $arrayOfUnifiedGroupMembersTypeMemberItem) {
            // validation for constraint: itemType
            if (!$arrayOfUnifiedGroupMembersTypeMemberItem instanceof \StructType\EwsUnifiedGroupMemberType) {
                $invalidValues[] = is_object($arrayOfUnifiedGroupMembersTypeMemberItem) ? get_class($arrayOfUnifiedGroupMembersTypeMemberItem) : sprintf('%s(%s)', gettype($arrayOfUnifiedGroupMembersTypeMemberItem), var_export($arrayOfUnifiedGroupMembersTypeMemberItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Member property can only contain items of type \StructType\EwsUnifiedGroupMemberType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Member value
     * @throws InvalidArgumentException
     * @param \StructType\EwsUnifiedGroupMemberType[] $member
     * @return \ArrayType\EwsArrayOfUnifiedGroupMembersType
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
     * @return \StructType\EwsUnifiedGroupMemberType|null
     */
    public function current(): ?\StructType\EwsUnifiedGroupMemberType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EwsUnifiedGroupMemberType|null
     */
    public function item($index): ?\StructType\EwsUnifiedGroupMemberType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EwsUnifiedGroupMemberType|null
     */
    public function first(): ?\StructType\EwsUnifiedGroupMemberType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EwsUnifiedGroupMemberType|null
     */
    public function last(): ?\StructType\EwsUnifiedGroupMemberType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EwsUnifiedGroupMemberType|null
     */
    public function offsetGet($offset): ?\StructType\EwsUnifiedGroupMemberType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EwsUnifiedGroupMemberType $item
     * @return \ArrayType\EwsArrayOfUnifiedGroupMembersType
     */
    public function add(\StructType\EwsUnifiedGroupMemberType $item): self
    {
        return parent::add($item);
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
