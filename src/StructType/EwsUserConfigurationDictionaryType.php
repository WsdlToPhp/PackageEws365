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
     * Meta information extracted from the WSDL
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
     * This method is responsible for validating the values passed to the setDictionaryEntry method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDictionaryEntry method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDictionaryEntryForArrayConstraintsFromSetDictionaryEntry(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $userConfigurationDictionaryTypeDictionaryEntryItem) {
            // validation for constraint: itemType
            if (!$userConfigurationDictionaryTypeDictionaryEntryItem instanceof \Ews\StructType\EwsUserConfigurationDictionaryEntryType) {
                $invalidValues[] = is_object($userConfigurationDictionaryTypeDictionaryEntryItem) ? get_class($userConfigurationDictionaryTypeDictionaryEntryItem) : sprintf('%s(%s)', gettype($userConfigurationDictionaryTypeDictionaryEntryItem), var_export($userConfigurationDictionaryTypeDictionaryEntryItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The DictionaryEntry property can only contain items of type \Ews\StructType\EwsUserConfigurationDictionaryEntryType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set DictionaryEntry value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsUserConfigurationDictionaryEntryType[] $dictionaryEntry
     * @return \Ews\StructType\EwsUserConfigurationDictionaryType
     */
    public function setDictionaryEntry(array $dictionaryEntry = array())
    {
        // validation for constraint: array
        if ('' !== ($dictionaryEntryArrayErrorMessage = self::validateDictionaryEntryForArrayConstraintsFromSetDictionaryEntry($dictionaryEntry))) {
            throw new \InvalidArgumentException($dictionaryEntryArrayErrorMessage, __LINE__);
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
            throw new \InvalidArgumentException(sprintf('The DictionaryEntry property can only contain items of type \Ews\StructType\EwsUserConfigurationDictionaryEntryType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->DictionaryEntry[] = $item;
        return $this;
    }
}
