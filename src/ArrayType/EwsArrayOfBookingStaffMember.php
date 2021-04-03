<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfBookingStaffMember ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfBookingStaffMember extends AbstractStructArrayBase
{
    /**
     * The StaffMember
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\EwsBookingStaffMemberType[]
     */
    protected array $StaffMember = [];
    /**
     * Constructor method for ArrayOfBookingStaffMember
     * @uses EwsArrayOfBookingStaffMember::setStaffMember()
     * @param \StructType\EwsBookingStaffMemberType[] $staffMember
     */
    public function __construct(array $staffMember = [])
    {
        $this
            ->setStaffMember($staffMember);
    }
    /**
     * Get StaffMember value
     * @return \StructType\EwsBookingStaffMemberType[]
     */
    public function getStaffMember(): array
    {
        return $this->StaffMember;
    }
    /**
     * This method is responsible for validating the values passed to the setStaffMember method
     * This method is willingly generated in order to preserve the one-line inline validation within the setStaffMember method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateStaffMemberForArrayConstraintsFromSetStaffMember(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfBookingStaffMemberStaffMemberItem) {
            // validation for constraint: itemType
            if (!$arrayOfBookingStaffMemberStaffMemberItem instanceof \StructType\EwsBookingStaffMemberType) {
                $invalidValues[] = is_object($arrayOfBookingStaffMemberStaffMemberItem) ? get_class($arrayOfBookingStaffMemberStaffMemberItem) : sprintf('%s(%s)', gettype($arrayOfBookingStaffMemberStaffMemberItem), var_export($arrayOfBookingStaffMemberStaffMemberItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The StaffMember property can only contain items of type \StructType\EwsBookingStaffMemberType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set StaffMember value
     * @throws InvalidArgumentException
     * @param \StructType\EwsBookingStaffMemberType[] $staffMember
     * @return \ArrayType\EwsArrayOfBookingStaffMember
     */
    public function setStaffMember(array $staffMember = []): self
    {
        // validation for constraint: array
        if ('' !== ($staffMemberArrayErrorMessage = self::validateStaffMemberForArrayConstraintsFromSetStaffMember($staffMember))) {
            throw new InvalidArgumentException($staffMemberArrayErrorMessage, __LINE__);
        }
        $this->StaffMember = $staffMember;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\EwsBookingStaffMemberType|null
     */
    public function current(): ?\StructType\EwsBookingStaffMemberType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EwsBookingStaffMemberType|null
     */
    public function item($index): ?\StructType\EwsBookingStaffMemberType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EwsBookingStaffMemberType|null
     */
    public function first(): ?\StructType\EwsBookingStaffMemberType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EwsBookingStaffMemberType|null
     */
    public function last(): ?\StructType\EwsBookingStaffMemberType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EwsBookingStaffMemberType|null
     */
    public function offsetGet($offset): ?\StructType\EwsBookingStaffMemberType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EwsBookingStaffMemberType $item
     * @return \ArrayType\EwsArrayOfBookingStaffMember
     */
    public function add(\StructType\EwsBookingStaffMemberType $item): self
    {
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string StaffMember
     */
    public function getAttributeName(): string
    {
        return 'StaffMember';
    }
}
