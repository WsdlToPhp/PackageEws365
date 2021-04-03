<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \StructType\EwsUserConfigurationDictionaryObjectType
     */
    protected \StructType\EwsUserConfigurationDictionaryObjectType $DictionaryKey;
    /**
     * The DictionaryValue
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \StructType\EwsUserConfigurationDictionaryObjectType
     */
    protected \StructType\EwsUserConfigurationDictionaryObjectType $DictionaryValue;
    /**
     * Constructor method for UserConfigurationDictionaryEntryType
     * @uses EwsUserConfigurationDictionaryEntryType::setDictionaryKey()
     * @uses EwsUserConfigurationDictionaryEntryType::setDictionaryValue()
     * @param \StructType\EwsUserConfigurationDictionaryObjectType $dictionaryKey
     * @param \StructType\EwsUserConfigurationDictionaryObjectType $dictionaryValue
     */
    public function __construct(\StructType\EwsUserConfigurationDictionaryObjectType $dictionaryKey, \StructType\EwsUserConfigurationDictionaryObjectType $dictionaryValue)
    {
        $this
            ->setDictionaryKey($dictionaryKey)
            ->setDictionaryValue($dictionaryValue);
    }
    /**
     * Get DictionaryKey value
     * @return \StructType\EwsUserConfigurationDictionaryObjectType
     */
    public function getDictionaryKey(): \StructType\EwsUserConfigurationDictionaryObjectType
    {
        return $this->DictionaryKey;
    }
    /**
     * Set DictionaryKey value
     * @param \StructType\EwsUserConfigurationDictionaryObjectType $dictionaryKey
     * @return \StructType\EwsUserConfigurationDictionaryEntryType
     */
    public function setDictionaryKey(\StructType\EwsUserConfigurationDictionaryObjectType $dictionaryKey): self
    {
        $this->DictionaryKey = $dictionaryKey;
        
        return $this;
    }
    /**
     * Get DictionaryValue value
     * @return \StructType\EwsUserConfigurationDictionaryObjectType
     */
    public function getDictionaryValue(): \StructType\EwsUserConfigurationDictionaryObjectType
    {
        return $this->DictionaryValue;
    }
    /**
     * Set DictionaryValue value
     * @param \StructType\EwsUserConfigurationDictionaryObjectType $dictionaryValue
     * @return \StructType\EwsUserConfigurationDictionaryEntryType
     */
    public function setDictionaryValue(\StructType\EwsUserConfigurationDictionaryObjectType $dictionaryValue): self
    {
        $this->DictionaryValue = $dictionaryValue;
        
        return $this;
    }
}
