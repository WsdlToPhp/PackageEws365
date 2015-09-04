<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UserConfigurationDictionaryType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsUserConfigurationDictionaryType extends AbstractStructBase
{
    /**
     * The DictionaryEntry
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Ews\StructType\EwsUserConfigurationDictionaryEntryType
     */
    public $DictionaryEntry;
    /**
     * Constructor method for UserConfigurationDictionaryType
     * @uses EwsUserConfigurationDictionaryType::setDictionaryEntry()
     * @param \Ews\StructType\EwsUserConfigurationDictionaryEntryType $dictionaryEntry
     */
    public function __construct(\Ews\StructType\EwsUserConfigurationDictionaryEntryType $dictionaryEntry = null)
    {
        $this
            ->setDictionaryEntry($dictionaryEntry);
    }
    /**
     * Get DictionaryEntry value
     * @return \Ews\StructType\EwsUserConfigurationDictionaryEntryType|null
     */
    public function getDictionaryEntry()
    {
        return $this->DictionaryEntry;
    }
    /**
     * Set DictionaryEntry value
     * @param \Ews\StructType\EwsUserConfigurationDictionaryEntryType $dictionaryEntry
     * @return \Ews\StructType\EwsUserConfigurationDictionaryType
     */
    public function setDictionaryEntry(\Ews\StructType\EwsUserConfigurationDictionaryEntryType $dictionaryEntry = null)
    {
        $this->DictionaryEntry = $dictionaryEntry;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsUserConfigurationDictionaryType
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
