<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfEmailAddressEntitiesType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfEmailAddressEntitiesType extends AbstractStructArrayBase
{
    /**
     * The EmailAddressEntity
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\EwsEmailAddressEntityType[]
     */
    protected array $EmailAddressEntity = [];
    /**
     * Constructor method for ArrayOfEmailAddressEntitiesType
     * @uses EwsArrayOfEmailAddressEntitiesType::setEmailAddressEntity()
     * @param \StructType\EwsEmailAddressEntityType[] $emailAddressEntity
     */
    public function __construct(array $emailAddressEntity = [])
    {
        $this
            ->setEmailAddressEntity($emailAddressEntity);
    }
    /**
     * Get EmailAddressEntity value
     * @return \StructType\EwsEmailAddressEntityType[]
     */
    public function getEmailAddressEntity(): array
    {
        return $this->EmailAddressEntity;
    }
    /**
     * This method is responsible for validating the values passed to the setEmailAddressEntity method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEmailAddressEntity method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEmailAddressEntityForArrayConstraintsFromSetEmailAddressEntity(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfEmailAddressEntitiesTypeEmailAddressEntityItem) {
            // validation for constraint: itemType
            if (!$arrayOfEmailAddressEntitiesTypeEmailAddressEntityItem instanceof \StructType\EwsEmailAddressEntityType) {
                $invalidValues[] = is_object($arrayOfEmailAddressEntitiesTypeEmailAddressEntityItem) ? get_class($arrayOfEmailAddressEntitiesTypeEmailAddressEntityItem) : sprintf('%s(%s)', gettype($arrayOfEmailAddressEntitiesTypeEmailAddressEntityItem), var_export($arrayOfEmailAddressEntitiesTypeEmailAddressEntityItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The EmailAddressEntity property can only contain items of type \StructType\EwsEmailAddressEntityType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set EmailAddressEntity value
     * @throws InvalidArgumentException
     * @param \StructType\EwsEmailAddressEntityType[] $emailAddressEntity
     * @return \ArrayType\EwsArrayOfEmailAddressEntitiesType
     */
    public function setEmailAddressEntity(array $emailAddressEntity = []): self
    {
        // validation for constraint: array
        if ('' !== ($emailAddressEntityArrayErrorMessage = self::validateEmailAddressEntityForArrayConstraintsFromSetEmailAddressEntity($emailAddressEntity))) {
            throw new InvalidArgumentException($emailAddressEntityArrayErrorMessage, __LINE__);
        }
        $this->EmailAddressEntity = $emailAddressEntity;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\EwsEmailAddressEntityType|null
     */
    public function current(): ?\StructType\EwsEmailAddressEntityType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EwsEmailAddressEntityType|null
     */
    public function item($index): ?\StructType\EwsEmailAddressEntityType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EwsEmailAddressEntityType|null
     */
    public function first(): ?\StructType\EwsEmailAddressEntityType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EwsEmailAddressEntityType|null
     */
    public function last(): ?\StructType\EwsEmailAddressEntityType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EwsEmailAddressEntityType|null
     */
    public function offsetGet($offset): ?\StructType\EwsEmailAddressEntityType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EwsEmailAddressEntityType $item
     * @return \ArrayType\EwsArrayOfEmailAddressEntitiesType
     */
    public function add(\StructType\EwsEmailAddressEntityType $item): self
    {
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string EmailAddressEntity
     */
    public function getAttributeName(): string
    {
        return 'EmailAddressEntity';
    }
}
