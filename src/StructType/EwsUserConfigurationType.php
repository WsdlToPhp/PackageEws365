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
     * - documentation: Identifier for a fully resolved item
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
     * @var base64Binary
     */
    public $XmlData;
    /**
     * The BinaryData
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var base64Binary
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
     * @param base64Binary $xmlData
     * @param base64Binary $binaryData
     */
    public function __construct(\Ews\StructType\EwsUserConfigurationNameType $userConfigurationName = null, \Ews\StructType\EwsItemIdType $itemId = null, \Ews\StructType\EwsUserConfigurationDictionaryType $dictionary = null, base64Binary $xmlData = null, base64Binary $binaryData = null)
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
     * @return base64Binary|null
     */
    public function getXmlData()
    {
        return $this->XmlData;
    }
    /**
     * Set XmlData value
     * @param base64Binary $xmlData
     * @return \Ews\StructType\EwsUserConfigurationType
     */
    public function setXmlData(base64Binary $xmlData = null)
    {
        $this->XmlData = $xmlData;
        return $this;
    }
    /**
     * Get BinaryData value
     * @return base64Binary|null
     */
    public function getBinaryData()
    {
        return $this->BinaryData;
    }
    /**
     * Set BinaryData value
     * @param base64Binary $binaryData
     * @return \Ews\StructType\EwsUserConfigurationType
     */
    public function setBinaryData(base64Binary $binaryData = null)
    {
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
