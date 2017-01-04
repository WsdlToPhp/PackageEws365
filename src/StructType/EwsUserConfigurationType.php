<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Ews\StructType\EwsUserConfigurationNameType
     */
    public $UserConfigurationName;
    /**
     * The ItemId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\StructType\EwsItemIdType
     */
    public $ItemId;
    /**
     * The Dictionary
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\StructType\EwsUserConfigurationDictionaryType
     */
    public $Dictionary;
    /**
     * The XmlData
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $XmlData;
    /**
     * The BinaryData
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $BinaryData;
    /**
     * Constructor method for UserConfigurationType
     * @uses EwsUserConfigurationType::setUserConfigurationName()
     * @uses EwsUserConfigurationType::setItemId()
     * @uses EwsUserConfigurationType::setDictionary()
     * @uses EwsUserConfigurationType::setXmlData()
     * @uses EwsUserConfigurationType::setBinaryData()
     * @param \Ews\StructType\EwsUserConfigurationNameType $userConfigurationName
     * @param \Ews\StructType\EwsItemIdType $itemId
     * @param \Ews\StructType\EwsUserConfigurationDictionaryType $dictionary
     * @param string $xmlData
     * @param string $binaryData
     */
    public function __construct(\Ews\StructType\EwsUserConfigurationNameType $userConfigurationName = null, \Ews\StructType\EwsItemIdType $itemId = null, \Ews\StructType\EwsUserConfigurationDictionaryType $dictionary = null, $xmlData = null, $binaryData = null)
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
     * @return \Ews\StructType\EwsUserConfigurationNameType
     */
    public function getUserConfigurationName()
    {
        return $this->UserConfigurationName;
    }
    /**
     * Set UserConfigurationName value
     * @param \Ews\StructType\EwsUserConfigurationNameType $userConfigurationName
     * @return \Ews\StructType\EwsUserConfigurationType
     */
    public function setUserConfigurationName(\Ews\StructType\EwsUserConfigurationNameType $userConfigurationName = null)
    {
        $this->UserConfigurationName = $userConfigurationName;
        return $this;
    }
    /**
     * Get ItemId value
     * @return \Ews\StructType\EwsItemIdType|null
     */
    public function getItemId()
    {
        return $this->ItemId;
    }
    /**
     * Set ItemId value
     * @param \Ews\StructType\EwsItemIdType $itemId
     * @return \Ews\StructType\EwsUserConfigurationType
     */
    public function setItemId(\Ews\StructType\EwsItemIdType $itemId = null)
    {
        $this->ItemId = $itemId;
        return $this;
    }
    /**
     * Get Dictionary value
     * @return \Ews\StructType\EwsUserConfigurationDictionaryType|null
     */
    public function getDictionary()
    {
        return $this->Dictionary;
    }
    /**
     * Set Dictionary value
     * @param \Ews\StructType\EwsUserConfigurationDictionaryType $dictionary
     * @return \Ews\StructType\EwsUserConfigurationType
     */
    public function setDictionary(\Ews\StructType\EwsUserConfigurationDictionaryType $dictionary = null)
    {
        $this->Dictionary = $dictionary;
        return $this;
    }
    /**
     * Get XmlData value
     * @return string|null
     */
    public function getXmlData()
    {
        return $this->XmlData;
    }
    /**
     * Set XmlData value
     * @param string $xmlData
     * @return \Ews\StructType\EwsUserConfigurationType
     */
    public function setXmlData($xmlData = null)
    {
        // validation for constraint: string
        if (!is_null($xmlData) && !is_string($xmlData)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($xmlData)), __LINE__);
        }
        $this->XmlData = $xmlData;
        return $this;
    }
    /**
     * Get BinaryData value
     * @return string|null
     */
    public function getBinaryData()
    {
        return $this->BinaryData;
    }
    /**
     * Set BinaryData value
     * @param string $binaryData
     * @return \Ews\StructType\EwsUserConfigurationType
     */
    public function setBinaryData($binaryData = null)
    {
        // validation for constraint: string
        if (!is_null($binaryData) && !is_string($binaryData)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($binaryData)), __LINE__);
        }
        $this->BinaryData = $binaryData;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsUserConfigurationType
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
