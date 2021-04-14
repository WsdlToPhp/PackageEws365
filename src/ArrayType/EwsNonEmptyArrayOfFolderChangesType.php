<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for NonEmptyArrayOfFolderChangesType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsNonEmptyArrayOfFolderChangesType extends AbstractStructArrayBase
{
    /**
     * The FolderChange
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\EwsFolderChangeType[]
     */
    protected array $FolderChange = [];
    /**
     * Constructor method for NonEmptyArrayOfFolderChangesType
     * @uses EwsNonEmptyArrayOfFolderChangesType::setFolderChange()
     * @param \StructType\EwsFolderChangeType[] $folderChange
     */
    public function __construct(array $folderChange = [])
    {
        $this
            ->setFolderChange($folderChange);
    }
    /**
     * Get FolderChange value
     * @return \StructType\EwsFolderChangeType[]
     */
    public function getFolderChange(): array
    {
        return $this->FolderChange;
    }
    /**
     * This method is responsible for validating the values passed to the setFolderChange method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFolderChange method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFolderChangeForArrayConstraintsFromSetFolderChange(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $nonEmptyArrayOfFolderChangesTypeFolderChangeItem) {
            // validation for constraint: itemType
            if (!$nonEmptyArrayOfFolderChangesTypeFolderChangeItem instanceof \StructType\EwsFolderChangeType) {
                $invalidValues[] = is_object($nonEmptyArrayOfFolderChangesTypeFolderChangeItem) ? get_class($nonEmptyArrayOfFolderChangesTypeFolderChangeItem) : sprintf('%s(%s)', gettype($nonEmptyArrayOfFolderChangesTypeFolderChangeItem), var_export($nonEmptyArrayOfFolderChangesTypeFolderChangeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The FolderChange property can only contain items of type \StructType\EwsFolderChangeType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set FolderChange value
     * @throws InvalidArgumentException
     * @param \StructType\EwsFolderChangeType[] $folderChange
     * @return \ArrayType\EwsNonEmptyArrayOfFolderChangesType
     */
    public function setFolderChange(array $folderChange = []): self
    {
        // validation for constraint: array
        if ('' !== ($folderChangeArrayErrorMessage = self::validateFolderChangeForArrayConstraintsFromSetFolderChange($folderChange))) {
            throw new InvalidArgumentException($folderChangeArrayErrorMessage, __LINE__);
        }
        $this->FolderChange = $folderChange;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\EwsFolderChangeType|null
     */
    public function current(): ?\StructType\EwsFolderChangeType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EwsFolderChangeType|null
     */
    public function item($index): ?\StructType\EwsFolderChangeType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EwsFolderChangeType|null
     */
    public function first(): ?\StructType\EwsFolderChangeType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EwsFolderChangeType|null
     */
    public function last(): ?\StructType\EwsFolderChangeType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EwsFolderChangeType|null
     */
    public function offsetGet($offset): ?\StructType\EwsFolderChangeType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EwsFolderChangeType $item
     * @return \ArrayType\EwsNonEmptyArrayOfFolderChangesType
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\EwsFolderChangeType) {
            throw new InvalidArgumentException(sprintf('The FolderChange property can only contain items of type \StructType\EwsFolderChangeType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string FolderChange
     */
    public function getAttributeName(): string
    {
        return 'FolderChange';
    }
}
