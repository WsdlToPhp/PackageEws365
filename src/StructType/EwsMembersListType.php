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
     * Meta information extracted from the WSDL
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
     * This method is responsible for validating the values passed to the setMember method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMember method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMemberForArrayConstraintsFromSetMember(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $membersListTypeMemberItem) {
            // validation for constraint: itemType
            if (!$membersListTypeMemberItem instanceof \Ews\StructType\EwsMemberType) {
                $invalidValues[] = is_object($membersListTypeMemberItem) ? get_class($membersListTypeMemberItem) : sprintf('%s(%s)', gettype($membersListTypeMemberItem), var_export($membersListTypeMemberItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Member property can only contain items of type \Ews\StructType\EwsMemberType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Member value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsMemberType[] $member
     * @return \Ews\StructType\EwsMembersListType
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
     * @param \Ews\StructType\EwsMemberType $item
     * @return \Ews\StructType\EwsMembersListType
     */
    public function addToMember(\Ews\StructType\EwsMemberType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsMemberType) {
            throw new \InvalidArgumentException(sprintf('The Member property can only contain items of type \Ews\StructType\EwsMemberType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Member[] = $item;
        return $this;
    }
}
