<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfDistinguishedFolderIdType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfDistinguishedFolderIdType extends AbstractStructArrayBase
{
    /**
     * The DistinguishedFolderId
     * Meta information extracted from the WSDL
     * - choice: DistinguishedFolderId
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 0
     * @var \StructType\EwsDistinguishedFolderIdType|null
     */
    protected ?\StructType\EwsDistinguishedFolderIdType $DistinguishedFolderId = null;
    /**
     * Constructor method for ArrayOfDistinguishedFolderIdType
     * @uses EwsArrayOfDistinguishedFolderIdType::setDistinguishedFolderId()
     * @param \StructType\EwsDistinguishedFolderIdType $distinguishedFolderId
     */
    public function __construct(?\StructType\EwsDistinguishedFolderIdType $distinguishedFolderId = null)
    {
        $this
            ->setDistinguishedFolderId($distinguishedFolderId);
    }
    /**
     * Get DistinguishedFolderId value
     * @return \StructType\EwsDistinguishedFolderIdType|null
     */
    public function getDistinguishedFolderId(): ?\StructType\EwsDistinguishedFolderIdType
    {
        return isset($this->DistinguishedFolderId) ? $this->DistinguishedFolderId : null;
    }
    /**
     * This method is responsible for validating the value passed to the setDistinguishedFolderId method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDistinguishedFolderId method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateDistinguishedFolderIdForChoiceConstraintsFromSetDistinguishedFolderId($value): string
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
                    throw new InvalidArgumentException(sprintf('The property DistinguishedFolderId can\'t be set as the property %s is already set. Only one property must be set among these properties: DistinguishedFolderId, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set DistinguishedFolderId value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\EwsDistinguishedFolderIdType $distinguishedFolderId
     * @return \ArrayType\EwsArrayOfDistinguishedFolderIdType
     */
    public function setDistinguishedFolderId(?\StructType\EwsDistinguishedFolderIdType $distinguishedFolderId = null): self
    {
        // validation for constraint: choice(DistinguishedFolderId)
        if ('' !== ($distinguishedFolderIdChoiceErrorMessage = self::validateDistinguishedFolderIdForChoiceConstraintsFromSetDistinguishedFolderId($distinguishedFolderId))) {
            throw new InvalidArgumentException($distinguishedFolderIdChoiceErrorMessage, __LINE__);
        }
        if (is_null($distinguishedFolderId) || (is_array($distinguishedFolderId) && empty($distinguishedFolderId))) {
            unset($this->DistinguishedFolderId);
        } else {
            $this->DistinguishedFolderId = $distinguishedFolderId;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\EwsDistinguishedFolderIdType|null
     */
    public function current(): ?\StructType\EwsDistinguishedFolderIdType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EwsDistinguishedFolderIdType|null
     */
    public function item($index): ?\StructType\EwsDistinguishedFolderIdType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EwsDistinguishedFolderIdType|null
     */
    public function first(): ?\StructType\EwsDistinguishedFolderIdType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EwsDistinguishedFolderIdType|null
     */
    public function last(): ?\StructType\EwsDistinguishedFolderIdType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EwsDistinguishedFolderIdType|null
     */
    public function offsetGet($offset): ?\StructType\EwsDistinguishedFolderIdType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EwsDistinguishedFolderIdType $item
     * @return \ArrayType\EwsArrayOfDistinguishedFolderIdType
     */
    public function add(\StructType\EwsDistinguishedFolderIdType $item): self
    {
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string DistinguishedFolderId
     */
    public function getAttributeName(): string
    {
        return 'DistinguishedFolderId';
    }
}
