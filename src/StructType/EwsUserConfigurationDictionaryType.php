<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UserConfigurationDictionaryType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsUserConfigurationDictionaryType extends AbstractStructBase
{
    /**
     * The DictionaryEntry
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Ews\StructType\EwsUserConfigurationDictionaryEntryType[]
     */
    public $DictionaryEntry;
    /**
     * Constructor method for UserConfigurationDictionaryType
     * @uses EwsUserConfigurationDictionaryType::setDictionaryEntry()
     * @param \Ews\StructType\EwsUserConfigurationDictionaryEntryType[] $dictionaryEntry
     */
    public function __construct(array $dictionaryEntry = array())
    {
        $this
            ->setDictionaryEntry($dictionaryEntry);
    }
    /**
     * Get DictionaryEntry value
     * @return \Ews\StructType\EwsUserConfigurationDictionaryEntryType[]|null
     */
    public function getDictionaryEntry()
    {
        return $this->DictionaryEntry;
    }
    /**
     * Set DictionaryEntry value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsUserConfigurationDictionaryEntryType[] $dictionaryEntry
     * @return \Ews\StructType\EwsUserConfigurationDictionaryType
     */
    public function setDictionaryEntry(array $dictionaryEntry = array())
    {
        foreach ($dictionaryEntry as $userConfigurationDictionaryTypeDictionaryEntryItem) {
            // validation for constraint: itemType
            if (!$userConfigurationDictionaryTypeDictionaryEntryItem instanceof \Ews\StructType\EwsUserConfigurationDictionaryEntryType) {
                throw new \InvalidArgumentException(sprintf('The DictionaryEntry property can only contain items of \Ews\StructType\EwsUserConfigurationDictionaryEntryType, "%s" given', is_object($userConfigurationDictionaryTypeDictionaryEntryItem) ? get_class($userConfigurationDictionaryTypeDictionaryEntryItem) : gettype($userConfigurationDictionaryTypeDictionaryEntryItem)), __LINE__);
            }
        }
        $this->DictionaryEntry = $dictionaryEntry;
        return $this;
    }
    /**
     * Add item to DictionaryEntry value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsUserConfigurationDictionaryEntryType $item
     * @return \Ews\StructType\EwsUserConfigurationDictionaryType
     */
    public function addToDictionaryEntry(\Ews\StructType\EwsUserConfigurationDictionaryEntryType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsUserConfigurationDictionaryEntryType) {
            throw new \InvalidArgumentException(sprintf('The DictionaryEntry property can only contain items of \Ews\StructType\EwsUserConfigurationDictionaryEntryType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->DictionaryEntry[] = $item;
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
