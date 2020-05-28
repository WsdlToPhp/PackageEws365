<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UserConfigurationDictionaryEntryType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsUserConfigurationDictionaryEntryType extends AbstractStructBase
{
    /**
     * The DictionaryKey
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Ews\StructType\EwsUserConfigurationDictionaryObjectType
     */
    public $DictionaryKey;
    /**
     * The DictionaryValue
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \Ews\StructType\EwsUserConfigurationDictionaryObjectType
     */
    public $DictionaryValue;
    /**
     * Constructor method for UserConfigurationDictionaryEntryType
     * @uses EwsUserConfigurationDictionaryEntryType::setDictionaryKey()
     * @uses EwsUserConfigurationDictionaryEntryType::setDictionaryValue()
     * @param \Ews\StructType\EwsUserConfigurationDictionaryObjectType $dictionaryKey
     * @param \Ews\StructType\EwsUserConfigurationDictionaryObjectType $dictionaryValue
     */
    public function __construct(\Ews\StructType\EwsUserConfigurationDictionaryObjectType $dictionaryKey = null, \Ews\StructType\EwsUserConfigurationDictionaryObjectType $dictionaryValue = null)
    {
        $this
            ->setDictionaryKey($dictionaryKey)
            ->setDictionaryValue($dictionaryValue);
    }
    /**
     * Get DictionaryKey value
     * @return \Ews\StructType\EwsUserConfigurationDictionaryObjectType
     */
    public function getDictionaryKey()
    {
        return $this->DictionaryKey;
    }
    /**
     * Set DictionaryKey value
     * @param \Ews\StructType\EwsUserConfigurationDictionaryObjectType $dictionaryKey
     * @return \Ews\StructType\EwsUserConfigurationDictionaryEntryType
     */
    public function setDictionaryKey(\Ews\StructType\EwsUserConfigurationDictionaryObjectType $dictionaryKey = null)
    {
        $this->DictionaryKey = $dictionaryKey;
        return $this;
    }
    /**
     * Get DictionaryValue value
     * @return \Ews\StructType\EwsUserConfigurationDictionaryObjectType
     */
    public function getDictionaryValue()
    {
        return $this->DictionaryValue;
    }
    /**
     * Set DictionaryValue value
     * @param \Ews\StructType\EwsUserConfigurationDictionaryObjectType $dictionaryValue
     * @return \Ews\StructType\EwsUserConfigurationDictionaryEntryType
     */
    public function setDictionaryValue(\Ews\StructType\EwsUserConfigurationDictionaryObjectType $dictionaryValue = null)
    {
        $this->DictionaryValue = $dictionaryValue;
        return $this;
    }
}
