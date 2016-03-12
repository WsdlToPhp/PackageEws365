<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PhysicalAddressDictionaryType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsPhysicalAddressDictionaryType extends AbstractStructBase
{
    /**
     * The Entry
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \Ews\StructType\EwsPhysicalAddressDictionaryEntryType[]
     */
    public $Entry;
    /**
     * Constructor method for PhysicalAddressDictionaryType
     * @uses EwsPhysicalAddressDictionaryType::setEntry()
     * @param \Ews\StructType\EwsPhysicalAddressDictionaryEntryType[] $entry
     */
    public function __construct(array $entry = array())
    {
        $this
            ->setEntry($entry);
    }
    /**
     * Get Entry value
     * @return \Ews\StructType\EwsPhysicalAddressDictionaryEntryType[]|null
     */
    public function getEntry()
    {
        return $this->Entry;
    }
    /**
     * Set Entry value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsPhysicalAddressDictionaryEntryType[] $entry
     * @return \Ews\StructType\EwsPhysicalAddressDictionaryType
     */
    public function setEntry(array $entry = array())
    {
        foreach ($entry as $physicalAddressDictionaryTypeEntryItem) {
            // validation for constraint: itemType
            if (!$physicalAddressDictionaryTypeEntryItem instanceof \Ews\StructType\EwsPhysicalAddressDictionaryEntryType) {
                throw new \InvalidArgumentException(sprintf('The Entry property can only contain items of \Ews\StructType\EwsPhysicalAddressDictionaryEntryType, "%s" given', is_object($physicalAddressDictionaryTypeEntryItem) ? get_class($physicalAddressDictionaryTypeEntryItem) : gettype($physicalAddressDictionaryTypeEntryItem)), __LINE__);
            }
        }
        $this->Entry = $entry;
        return $this;
    }
    /**
     * Add item to Entry value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsPhysicalAddressDictionaryEntryType $item
     * @return \Ews\StructType\EwsPhysicalAddressDictionaryType
     */
    public function addToEntry(\Ews\StructType\EwsPhysicalAddressDictionaryEntryType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsPhysicalAddressDictionaryEntryType) {
            throw new \InvalidArgumentException(sprintf('The Entry property can only contain items of \Ews\StructType\EwsPhysicalAddressDictionaryEntryType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
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
     * @return \Ews\StructType\EwsPhysicalAddressDictionaryType
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
