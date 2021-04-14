<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfEncryptedSharedFolderDataType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfEncryptedSharedFolderDataType extends AbstractStructArrayBase
{
    /**
     * The EncryptedSharedFolderData
     * Meta information extracted from the WSDL
     * - choice: EncryptedSharedFolderData
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 0
     * @var \StructType\EwsEncryptedSharedFolderDataType|null
     */
    protected ?\StructType\EwsEncryptedSharedFolderDataType $EncryptedSharedFolderData = null;
    /**
     * Constructor method for ArrayOfEncryptedSharedFolderDataType
     * @uses EwsArrayOfEncryptedSharedFolderDataType::setEncryptedSharedFolderData()
     * @param \StructType\EwsEncryptedSharedFolderDataType $encryptedSharedFolderData
     */
    public function __construct(?\StructType\EwsEncryptedSharedFolderDataType $encryptedSharedFolderData = null)
    {
        $this
            ->setEncryptedSharedFolderData($encryptedSharedFolderData);
    }
    /**
     * Get EncryptedSharedFolderData value
     * @return \StructType\EwsEncryptedSharedFolderDataType|null
     */
    public function getEncryptedSharedFolderData(): ?\StructType\EwsEncryptedSharedFolderDataType
    {
        return isset($this->EncryptedSharedFolderData) ? $this->EncryptedSharedFolderData : null;
    }
    /**
     * This method is responsible for validating the value passed to the setEncryptedSharedFolderData method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEncryptedSharedFolderData method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateEncryptedSharedFolderDataForChoiceConstraintsFromSetEncryptedSharedFolderData($value): string
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
                    throw new InvalidArgumentException(sprintf('The property EncryptedSharedFolderData can\'t be set as the property %s is already set. Only one property must be set among these properties: EncryptedSharedFolderData, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set EncryptedSharedFolderData value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\EwsEncryptedSharedFolderDataType $encryptedSharedFolderData
     * @return \ArrayType\EwsArrayOfEncryptedSharedFolderDataType
     */
    public function setEncryptedSharedFolderData(?\StructType\EwsEncryptedSharedFolderDataType $encryptedSharedFolderData = null): self
    {
        // validation for constraint: choice(EncryptedSharedFolderData)
        if ('' !== ($encryptedSharedFolderDataChoiceErrorMessage = self::validateEncryptedSharedFolderDataForChoiceConstraintsFromSetEncryptedSharedFolderData($encryptedSharedFolderData))) {
            throw new InvalidArgumentException($encryptedSharedFolderDataChoiceErrorMessage, __LINE__);
        }
        if (is_null($encryptedSharedFolderData) || (is_array($encryptedSharedFolderData) && empty($encryptedSharedFolderData))) {
            unset($this->EncryptedSharedFolderData);
        } else {
            $this->EncryptedSharedFolderData = $encryptedSharedFolderData;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\EwsEncryptedSharedFolderDataType|null
     */
    public function current(): ?\StructType\EwsEncryptedSharedFolderDataType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EwsEncryptedSharedFolderDataType|null
     */
    public function item($index): ?\StructType\EwsEncryptedSharedFolderDataType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EwsEncryptedSharedFolderDataType|null
     */
    public function first(): ?\StructType\EwsEncryptedSharedFolderDataType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EwsEncryptedSharedFolderDataType|null
     */
    public function last(): ?\StructType\EwsEncryptedSharedFolderDataType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EwsEncryptedSharedFolderDataType|null
     */
    public function offsetGet($offset): ?\StructType\EwsEncryptedSharedFolderDataType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EwsEncryptedSharedFolderDataType $item
     * @return \ArrayType\EwsArrayOfEncryptedSharedFolderDataType
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\EwsEncryptedSharedFolderDataType) {
            throw new InvalidArgumentException(sprintf('The EncryptedSharedFolderData property can only contain items of type \StructType\EwsEncryptedSharedFolderDataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string EncryptedSharedFolderData
     */
    public function getAttributeName(): string
    {
        return 'EncryptedSharedFolderData';
    }
}
