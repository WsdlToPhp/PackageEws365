<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AdditionalEntries StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsAdditionalEntries extends AbstractStructBase
{
    /**
     * The Entry
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $Entry;
    /**
     * Constructor method for AdditionalEntries
     * @uses EwsAdditionalEntries::setEntry()
     * @param string[] $entry
     */
    public function __construct(array $entry = array())
    {
        $this
            ->setEntry($entry);
    }
    /**
     * Get Entry value
     * @return string[]|null
     */
    public function getEntry()
    {
        return $this->Entry;
    }
    /**
     * Set Entry value
     * @throws \InvalidArgumentException
     * @param string[] $entry
     * @return \Ews\StructType\EwsAdditionalEntries
     */
    public function setEntry(array $entry = array())
    {
        foreach ($entry as $additionalEntriesEntryItem) {
            // validation for constraint: itemType
            if (!is_string($additionalEntriesEntryItem)) {
                throw new \InvalidArgumentException(sprintf('The Entry property can only contain items of string, "%s" given', is_object($additionalEntriesEntryItem) ? get_class($additionalEntriesEntryItem) : gettype($additionalEntriesEntryItem)), __LINE__);
            }
        }
        $this->Entry = $entry;
        return $this;
    }
    /**
     * Add item to Entry value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Ews\StructType\EwsAdditionalEntries
     */
    public function addToEntry($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The Entry property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
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
     * @return \Ews\StructType\EwsAdditionalEntries
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
