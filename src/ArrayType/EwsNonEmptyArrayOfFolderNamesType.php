<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

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
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var string[]
     */
    public $FolderName;
    /**
     * Constructor method for NonEmptyArrayOfFolderNamesType
     * @uses EwsNonEmptyArrayOfFolderNamesType::setFolderName()
     * @param string[] $folderName
     */
    public function __construct(array $folderName = array())
    {
        $this
            ->setFolderName($folderName);
    }
    /**
     * Get FolderName value
     * @return string[]|null
     */
    public function getFolderName()
    {
        return $this->FolderName;
    }
    /**
     * Set FolderName value
     * @throws \InvalidArgumentException
     * @param string[] $folderName
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfFolderNamesType
     */
    public function setFolderName(array $folderName = array())
    {
        foreach ($folderName as $nonEmptyArrayOfFolderNamesTypeFolderNameItem) {
            // validation for constraint: itemType
            if (!is_string($nonEmptyArrayOfFolderNamesTypeFolderNameItem)) {
                throw new \InvalidArgumentException(sprintf('The FolderName property can only contain items of string, "%s" given', is_object($nonEmptyArrayOfFolderNamesTypeFolderNameItem) ? get_class($nonEmptyArrayOfFolderNamesTypeFolderNameItem) : gettype($nonEmptyArrayOfFolderNamesTypeFolderNameItem)), __LINE__);
            }
        }
        $this->FolderName = $folderName;
        return $this;
    }
    /**
     * Add item to FolderName value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfFolderNamesType
     */
    public function addToFolderName($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The FolderName property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->FolderName[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return string|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return string|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return string|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return string|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return string|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string FolderName
     */
    public function getAttributeName()
    {
        return 'FolderName';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfFolderNamesType
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
