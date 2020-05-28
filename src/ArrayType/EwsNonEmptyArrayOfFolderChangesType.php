<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

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
     * @var \Ews\StructType\EwsFolderChangeType[]
     */
    public $FolderChange;
    /**
     * Constructor method for NonEmptyArrayOfFolderChangesType
     * @uses EwsNonEmptyArrayOfFolderChangesType::setFolderChange()
     * @param \Ews\StructType\EwsFolderChangeType[] $folderChange
     */
    public function __construct(array $folderChange = array())
    {
        $this
            ->setFolderChange($folderChange);
    }
    /**
     * Get FolderChange value
     * @return \Ews\StructType\EwsFolderChangeType[]|null
     */
    public function getFolderChange()
    {
        return $this->FolderChange;
    }
    /**
     * This method is responsible for validating the values passed to the setFolderChange method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFolderChange method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFolderChangeForArrayConstraintsFromSetFolderChange(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $nonEmptyArrayOfFolderChangesTypeFolderChangeItem) {
            // validation for constraint: itemType
            if (!$nonEmptyArrayOfFolderChangesTypeFolderChangeItem instanceof \Ews\StructType\EwsFolderChangeType) {
                $invalidValues[] = is_object($nonEmptyArrayOfFolderChangesTypeFolderChangeItem) ? get_class($nonEmptyArrayOfFolderChangesTypeFolderChangeItem) : sprintf('%s(%s)', gettype($nonEmptyArrayOfFolderChangesTypeFolderChangeItem), var_export($nonEmptyArrayOfFolderChangesTypeFolderChangeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The FolderChange property can only contain items of type \Ews\StructType\EwsFolderChangeType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set FolderChange value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsFolderChangeType[] $folderChange
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfFolderChangesType
     */
    public function setFolderChange(array $folderChange = array())
    {
        // validation for constraint: array
        if ('' !== ($folderChangeArrayErrorMessage = self::validateFolderChangeForArrayConstraintsFromSetFolderChange($folderChange))) {
            throw new \InvalidArgumentException($folderChangeArrayErrorMessage, __LINE__);
        }
        $this->FolderChange = $folderChange;
        return $this;
    }
    /**
     * Add item to FolderChange value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsFolderChangeType $item
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfFolderChangesType
     */
    public function addToFolderChange(\Ews\StructType\EwsFolderChangeType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsFolderChangeType) {
            throw new \InvalidArgumentException(sprintf('The FolderChange property can only contain items of type \Ews\StructType\EwsFolderChangeType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->FolderChange[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsFolderChangeType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsFolderChangeType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsFolderChangeType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsFolderChangeType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsFolderChangeType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string FolderChange
     */
    public function getAttributeName()
    {
        return 'FolderChange';
    }
}
