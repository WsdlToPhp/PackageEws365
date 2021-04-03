<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\EwsMemberType[]
     */
    protected array $Member = [];
    /**
     * Constructor method for MembersListType
     * @uses EwsMembersListType::setMember()
     * @param \StructType\EwsMemberType[] $member
     */
    public function __construct(array $member = [])
    {
        $this
            ->setMember($member);
    }
    /**
     * Get Member value
     * @return \StructType\EwsMemberType[]
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
        foreach ($values as $membersListTypeMemberItem) {
            // validation for constraint: itemType
            if (!$membersListTypeMemberItem instanceof \StructType\EwsMemberType) {
                $invalidValues[] = is_object($membersListTypeMemberItem) ? get_class($membersListTypeMemberItem) : sprintf('%s(%s)', gettype($membersListTypeMemberItem), var_export($membersListTypeMemberItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Member property can only contain items of type \StructType\EwsMemberType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Member value
     * @throws InvalidArgumentException
     * @param \StructType\EwsMemberType[] $member
     * @return \StructType\EwsMembersListType
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
     * Add item to Member value
     * @throws InvalidArgumentException
     * @param \StructType\EwsMemberType $item
     * @return \StructType\EwsMembersListType
     */
    public function addToMember(\StructType\EwsMemberType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\EwsMemberType) {
            throw new InvalidArgumentException(sprintf('The Member property can only contain items of type \StructType\EwsMemberType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Member[] = $item;
        
        return $this;
    }
}
