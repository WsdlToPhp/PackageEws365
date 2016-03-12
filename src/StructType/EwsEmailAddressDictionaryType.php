<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EmailAddressDictionaryType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsEmailAddressDictionaryType extends AbstractStructBase
{
    /**
     * The Entry
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \Ews\StructType\EwsEmailAddressDictionaryEntryType[]
     */
    public $Entry;
    /**
     * Constructor method for EmailAddressDictionaryType
     * @uses EwsEmailAddressDictionaryType::setEntry()
     * @param \Ews\StructType\EwsEmailAddressDictionaryEntryType[] $entry
     */
    public function __construct(array $entry = array())
    {
        $this
            ->setEntry($entry);
    }
    /**
     * Get Entry value
     * @return \Ews\StructType\EwsEmailAddressDictionaryEntryType[]|null
     */
    public function getEntry()
    {
        return $this->Entry;
    }
    /**
     * Set Entry value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsEmailAddressDictionaryEntryType[] $entry
     * @return \Ews\StructType\EwsEmailAddressDictionaryType
     */
    public function setEntry(array $entry = array())
    {
        foreach ($entry as $emailAddressDictionaryTypeEntryItem) {
            // validation for constraint: itemType
            if (!$emailAddressDictionaryTypeEntryItem instanceof \Ews\StructType\EwsEmailAddressDictionaryEntryType) {
                throw new \InvalidArgumentException(sprintf('The Entry property can only contain items of \Ews\StructType\EwsEmailAddressDictionaryEntryType, "%s" given', is_object($emailAddressDictionaryTypeEntryItem) ? get_class($emailAddressDictionaryTypeEntryItem) : gettype($emailAddressDictionaryTypeEntryItem)), __LINE__);
            }
        }
        $this->Entry = $entry;
        return $this;
    }
    /**
     * Add item to Entry value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsEmailAddressDictionaryEntryType $item
     * @return \Ews\StructType\EwsEmailAddressDictionaryType
     */
    public function addToEntry(\Ews\StructType\EwsEmailAddressDictionaryEntryType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsEmailAddressDictionaryEntryType) {
            throw new \InvalidArgumentException(sprintf('The Entry property can only contain items of \Ews\StructType\EwsEmailAddressDictionaryEntryType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
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
     * @return \Ews\StructType\EwsEmailAddressDictionaryType
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
