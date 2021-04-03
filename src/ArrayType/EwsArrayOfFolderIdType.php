<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfFolderIdType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfFolderIdType extends AbstractStructArrayBase
{
    /**
     * The FolderId
     * Meta information extracted from the WSDL
     * - choice: FolderId
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 0
     * @var \StructType\EwsFolderIdType|null
     */
    protected ?\StructType\EwsFolderIdType $FolderId = null;
    /**
     * Constructor method for ArrayOfFolderIdType
     * @uses EwsArrayOfFolderIdType::setFolderId()
     * @param \StructType\EwsFolderIdType $folderId
     */
    public function __construct(?\StructType\EwsFolderIdType $folderId = null)
    {
        $this
            ->setFolderId($folderId);
    }
    /**
     * Get FolderId value
     * @return \StructType\EwsFolderIdType|null
     */
    public function getFolderId(): ?\StructType\EwsFolderIdType
    {
        return isset($this->FolderId) ? $this->FolderId : null;
    }
    /**
     * This method is responsible for validating the value passed to the setFolderId method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFolderId method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateFolderIdForChoiceConstraintsFromSetFolderId($value): string
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
                    throw new InvalidArgumentException(sprintf('The property FolderId can\'t be set as the property %s is already set. Only one property must be set among these properties: FolderId, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set FolderId value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\EwsFolderIdType $folderId
     * @return \ArrayType\EwsArrayOfFolderIdType
     */
    public function setFolderId(?\StructType\EwsFolderIdType $folderId = null): self
    {
        // validation for constraint: choice(FolderId)
        if ('' !== ($folderIdChoiceErrorMessage = self::validateFolderIdForChoiceConstraintsFromSetFolderId($folderId))) {
            throw new InvalidArgumentException($folderIdChoiceErrorMessage, __LINE__);
        }
        if (is_null($folderId) || (is_array($folderId) && empty($folderId))) {
            unset($this->FolderId);
        } else {
            $this->FolderId = $folderId;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\EwsFolderIdType|null
     */
    public function current(): ?\StructType\EwsFolderIdType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EwsFolderIdType|null
     */
    public function item($index): ?\StructType\EwsFolderIdType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EwsFolderIdType|null
     */
    public function first(): ?\StructType\EwsFolderIdType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EwsFolderIdType|null
     */
    public function last(): ?\StructType\EwsFolderIdType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EwsFolderIdType|null
     */
    public function offsetGet($offset): ?\StructType\EwsFolderIdType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EwsFolderIdType $item
     * @return \ArrayType\EwsArrayOfFolderIdType
     */
    public function add(\StructType\EwsFolderIdType $item): self
    {
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string FolderId
     */
    public function getAttributeName(): string
    {
        return 'FolderId';
    }
}
