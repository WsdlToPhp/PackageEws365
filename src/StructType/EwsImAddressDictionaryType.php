<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ImAddressDictionaryType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsImAddressDictionaryType extends AbstractStructBase
{
    /**
     * The Entry
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \Ews\StructType\EwsImAddressDictionaryEntryType[]
     */
    public $Entry;
    /**
     * Constructor method for ImAddressDictionaryType
     * @uses EwsImAddressDictionaryType::setEntry()
     * @param \Ews\StructType\EwsImAddressDictionaryEntryType[] $entry
     */
    public function __construct(array $entry = array())
    {
        $this
            ->setEntry($entry);
    }
    /**
     * Get Entry value
     * @return \Ews\StructType\EwsImAddressDictionaryEntryType[]|null
     */
    public function getEntry()
    {
        return $this->Entry;
    }
    /**
     * Set Entry value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsImAddressDictionaryEntryType[] $entry
     * @return \Ews\StructType\EwsImAddressDictionaryType
     */
    public function setEntry(array $entry = array())
    {
        foreach ($entry as $imAddressDictionaryTypeEntryItem) {
            // validation for constraint: itemType
            if (!$imAddressDictionaryTypeEntryItem instanceof \Ews\StructType\EwsImAddressDictionaryEntryType) {
                throw new \InvalidArgumentException(sprintf('The Entry property can only contain items of \Ews\StructType\EwsImAddressDictionaryEntryType, "%s" given', is_object($imAddressDictionaryTypeEntryItem) ? get_class($imAddressDictionaryTypeEntryItem) : gettype($imAddressDictionaryTypeEntryItem)), __LINE__);
            }
        }
        $this->Entry = $entry;
        return $this;
    }
    /**
     * Add item to Entry value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsImAddressDictionaryEntryType $item
     * @return \Ews\StructType\EwsImAddressDictionaryType
     */
    public function addToEntry(\Ews\StructType\EwsImAddressDictionaryEntryType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsImAddressDictionaryEntryType) {
            throw new \InvalidArgumentException(sprintf('The Entry property can only contain items of \Ews\StructType\EwsImAddressDictionaryEntryType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Entry[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsImAddressDictionaryType
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
