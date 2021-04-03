<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UserConfigurationType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsUserConfigurationType extends AbstractStructBase
{
    /**
     * The UserConfigurationName
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \StructType\EwsUserConfigurationNameType
     */
    protected \StructType\EwsUserConfigurationNameType $UserConfigurationName;
    /**
     * The ItemId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\EwsItemIdType|null
     */
    protected ?\StructType\EwsItemIdType $ItemId = null;
    /**
     * The Dictionary
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\EwsUserConfigurationDictionaryType|null
     */
    protected ?\StructType\EwsUserConfigurationDictionaryType $Dictionary = null;
    /**
     * The XmlData
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $XmlData = null;
    /**
     * The BinaryData
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $BinaryData = null;
    /**
     * Constructor method for UserConfigurationType
     * @uses EwsUserConfigurationType::setUserConfigurationName()
     * @uses EwsUserConfigurationType::setItemId()
     * @uses EwsUserConfigurationType::setDictionary()
     * @uses EwsUserConfigurationType::setXmlData()
     * @uses EwsUserConfigurationType::setBinaryData()
     * @param \StructType\EwsUserConfigurationNameType $userConfigurationName
     * @param \StructType\EwsItemIdType $itemId
     * @param \StructType\EwsUserConfigurationDictionaryType $dictionary
     * @param string $xmlData
     * @param string $binaryData
     */
    public function __construct(\StructType\EwsUserConfigurationNameType $userConfigurationName, ?\StructType\EwsItemIdType $itemId = null, ?\StructType\EwsUserConfigurationDictionaryType $dictionary = null, ?string $xmlData = null, ?string $binaryData = null)
    {
        $this
            ->setUserConfigurationName($userConfigurationName)
            ->setItemId($itemId)
            ->setDictionary($dictionary)
            ->setXmlData($xmlData)
            ->setBinaryData($binaryData);
    }
    /**
     * Get UserConfigurationName value
     * @return \StructType\EwsUserConfigurationNameType
     */
    public function getUserConfigurationName(): \StructType\EwsUserConfigurationNameType
    {
        return $this->UserConfigurationName;
    }
    /**
     * Set UserConfigurationName value
     * @param \StructType\EwsUserConfigurationNameType $userConfigurationName
     * @return \StructType\EwsUserConfigurationType
     */
    public function setUserConfigurationName(\StructType\EwsUserConfigurationNameType $userConfigurationName): self
    {
        $this->UserConfigurationName = $userConfigurationName;
        
        return $this;
    }
    /**
     * Get ItemId value
     * @return \StructType\EwsItemIdType|null
     */
    public function getItemId(): ?\StructType\EwsItemIdType
    {
        return $this->ItemId;
    }
    /**
     * Set ItemId value
     * @param \StructType\EwsItemIdType $itemId
     * @return \StructType\EwsUserConfigurationType
     */
    public function setItemId(?\StructType\EwsItemIdType $itemId = null): self
    {
        $this->ItemId = $itemId;
        
        return $this;
    }
    /**
     * Get Dictionary value
     * @return \StructType\EwsUserConfigurationDictionaryType|null
     */
    public function getDictionary(): ?\StructType\EwsUserConfigurationDictionaryType
    {
        return $this->Dictionary;
    }
    /**
     * Set Dictionary value
     * @param \StructType\EwsUserConfigurationDictionaryType $dictionary
     * @return \StructType\EwsUserConfigurationType
     */
    public function setDictionary(?\StructType\EwsUserConfigurationDictionaryType $dictionary = null): self
    {
        $this->Dictionary = $dictionary;
        
        return $this;
    }
    /**
     * Get XmlData value
     * @return string|null
     */
    public function getXmlData(): ?string
    {
        return $this->XmlData;
    }
    /**
     * Set XmlData value
     * @param string $xmlData
     * @return \StructType\EwsUserConfigurationType
     */
    public function setXmlData(?string $xmlData = null): self
    {
        // validation for constraint: string
        if (!is_null($xmlData) && !is_string($xmlData)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($xmlData, true), gettype($xmlData)), __LINE__);
        }
        $this->XmlData = $xmlData;
        
        return $this;
    }
    /**
     * Get BinaryData value
     * @return string|null
     */
    public function getBinaryData(): ?string
    {
        return $this->BinaryData;
    }
    /**
     * Set BinaryData value
     * @param string $binaryData
     * @return \StructType\EwsUserConfigurationType
     */
    public function setBinaryData(?string $binaryData = null): self
    {
        // validation for constraint: string
        if (!is_null($binaryData) && !is_string($binaryData)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($binaryData, true), gettype($binaryData)), __LINE__);
        }
        $this->BinaryData = $binaryData;
        
        return $this;
    }
}
