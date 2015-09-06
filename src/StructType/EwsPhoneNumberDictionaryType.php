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
     * @var \Ews\StructType\EwsPhoneNumberDictionaryEntryType
     */
    public $Entry;
    /**
     * Constructor method for PhoneNumberDictionaryType
     * @uses EwsPhoneNumberDictionaryType::setEntry()
     * @param \Ews\StructType\EwsPhoneNumberDictionaryEntryType $entry
     */
    public function __construct(\Ews\StructType\EwsPhoneNumberDictionaryEntryType $entry = null)
    {
        $this
            ->setEntry($entry);
    }
    /**
     * Get Entry value
     * @return \Ews\StructType\EwsPhoneNumberDictionaryEntryType|null
     */
    public function getEntry()
    {
        return $this->Entry;
    }
    /**
     * Set Entry value
     * @param \Ews\StructType\EwsPhoneNumberDictionaryEntryType $entry
     * @return \Ews\StructType\EwsPhoneNumberDictionaryType
     */
    public function setEntry(\Ews\StructType\EwsPhoneNumberDictionaryEntryType $entry = null)
    {
        $this->Entry = $entry;
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
