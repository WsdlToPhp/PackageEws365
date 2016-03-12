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
     * Meta informations extracted from the WSDL
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
     * Set FolderChange value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsFolderChangeType[] $folderChange
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfFolderChangesType
     */
    public function setFolderChange(array $folderChange = array())
    {
        foreach ($folderChange as $nonEmptyArrayOfFolderChangesTypeFolderChangeItem) {
            // validation for constraint: itemType
            if (!$nonEmptyArrayOfFolderChangesTypeFolderChangeItem instanceof \Ews\StructType\EwsFolderChangeType) {
                throw new \InvalidArgumentException(sprintf('The FolderChange property can only contain items of \Ews\StructType\EwsFolderChangeType, "%s" given', is_object($nonEmptyArrayOfFolderChangesTypeFolderChangeItem) ? get_class($nonEmptyArrayOfFolderChangesTypeFolderChangeItem) : gettype($nonEmptyArrayOfFolderChangesTypeFolderChangeItem)), __LINE__);
            }
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
            throw new \InvalidArgumentException(sprintf('The FolderChange property can only contain items of \Ews\StructType\EwsFolderChangeType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfFolderChangesType
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
