<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PhoneNumberDictionaryType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsPhoneNumberDictionaryType extends AbstractStructBase
{
    /**
     * The Entry
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \Ews\StructType\EwsPhoneNumberDictionaryEntryType[]
     */
    public $Entry;
    /**
     * Constructor method for PhoneNumberDictionaryType
     * @uses EwsPhoneNumberDictionaryType::setEntry()
     * @param \Ews\StructType\EwsPhoneNumberDictionaryEntryType[] $entry
     */
    public function __construct(array $entry = array())
    {
        $this
            ->setEntry($entry);
    }
    /**
     * Get Entry value
     * @return \Ews\StructType\EwsPhoneNumberDictionaryEntryType[]|null
     */
    public function getEntry()
    {
        return $this->Entry;
    }
    /**
     * Set Entry value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsPhoneNumberDictionaryEntryType[] $entry
     * @return \Ews\StructType\EwsPhoneNumberDictionaryType
     */
    public function setEntry(array $entry = array())
    {
        foreach ($entry as $phoneNumberDictionaryTypeEntryItem) {
            // validation for constraint: itemType
            if (!$phoneNumberDictionaryTypeEntryItem instanceof \Ews\StructType\EwsPhoneNumberDictionaryEntryType) {
                throw new \InvalidArgumentException(sprintf('The Entry property can only contain items of \Ews\StructType\EwsPhoneNumberDictionaryEntryType, "%s" given', is_object($phoneNumberDictionaryTypeEntryItem) ? get_class($phoneNumberDictionaryTypeEntryItem) : gettype($phoneNumberDictionaryTypeEntryItem)), __LINE__);
            }
        }
        $this->Entry = $entry;
        return $this;
    }
    /**
     * Add item to Entry value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsPhoneNumberDictionaryEntryType $item
     * @return \Ews\StructType\EwsPhoneNumberDictionaryType
     */
    public function addToEntry(\Ews\StructType\EwsPhoneNumberDictionaryEntryType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsPhoneNumberDictionaryEntryType) {
            throw new \InvalidArgumentException(sprintf('The Entry property can only contain items of \Ews\StructType\EwsPhoneNumberDictionaryEntryType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
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
     * @return \Ews\StructType\EwsPhoneNumberDictionaryType
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
