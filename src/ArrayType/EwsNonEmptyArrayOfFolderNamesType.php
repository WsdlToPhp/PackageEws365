<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for NonEmptyArrayOfFolderNamesType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsNonEmptyArrayOfFolderNamesType extends AbstractStructArrayBase
{
    /**
     * The FolderName
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var string[]
     */
    protected array $FolderName = [];
    /**
     * Constructor method for NonEmptyArrayOfFolderNamesType
     * @uses EwsNonEmptyArrayOfFolderNamesType::setFolderName()
     * @param string[] $folderName
     */
    public function __construct(array $folderName = [])
    {
        $this
            ->setFolderName($folderName);
    }
    /**
     * Get FolderName value
     * @return string[]
     */
    public function getFolderName(): array
    {
        return $this->FolderName;
    }
    /**
     * This method is responsible for validating the values passed to the setFolderName method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFolderName method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFolderNameForArrayConstraintsFromSetFolderName(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $nonEmptyArrayOfFolderNamesTypeFolderNameItem) {
            // validation for constraint: itemType
            if (!is_string($nonEmptyArrayOfFolderNamesTypeFolderNameItem)) {
                $invalidValues[] = is_object($nonEmptyArrayOfFolderNamesTypeFolderNameItem) ? get_class($nonEmptyArrayOfFolderNamesTypeFolderNameItem) : sprintf('%s(%s)', gettype($nonEmptyArrayOfFolderNamesTypeFolderNameItem), var_export($nonEmptyArrayOfFolderNamesTypeFolderNameItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The FolderName property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set FolderName value
     * @throws InvalidArgumentException
     * @param string[] $folderName
     * @return \ArrayType\EwsNonEmptyArrayOfFolderNamesType
     */
    public function setFolderName(array $folderName = []): self
    {
        // validation for constraint: array
        if ('' !== ($folderNameArrayErrorMessage = self::validateFolderNameForArrayConstraintsFromSetFolderName($folderName))) {
            throw new InvalidArgumentException($folderNameArrayErrorMessage, __LINE__);
        }
        $this->FolderName = $folderName;
        
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
     * @return string FolderName
     */
    public function getAttributeName(): string
    {
        return 'FolderName';
    }
}
