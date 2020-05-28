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
     * Meta information extracted from the WSDL
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
     * This method is responsible for validating the values passed to the setEntry method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEntry method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEntryForArrayConstraintsFromSetEntry(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $phoneNumberDictionaryTypeEntryItem) {
            // validation for constraint: itemType
            if (!$phoneNumberDictionaryTypeEntryItem instanceof \Ews\StructType\EwsPhoneNumberDictionaryEntryType) {
                $invalidValues[] = is_object($phoneNumberDictionaryTypeEntryItem) ? get_class($phoneNumberDictionaryTypeEntryItem) : sprintf('%s(%s)', gettype($phoneNumberDictionaryTypeEntryItem), var_export($phoneNumberDictionaryTypeEntryItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Entry property can only contain items of type \Ews\StructType\EwsPhoneNumberDictionaryEntryType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Entry value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsPhoneNumberDictionaryEntryType[] $entry
     * @return \Ews\StructType\EwsPhoneNumberDictionaryType
     */
    public function setEntry(array $entry = array())
    {
        // validation for constraint: array
        if ('' !== ($entryArrayErrorMessage = self::validateEntryForArrayConstraintsFromSetEntry($entry))) {
            throw new \InvalidArgumentException($entryArrayErrorMessage, __LINE__);
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
            throw new \InvalidArgumentException(sprintf('The Entry property can only contain items of type \Ews\StructType\EwsPhoneNumberDictionaryEntryType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Entry[] = $item;
        return $this;
    }
}
