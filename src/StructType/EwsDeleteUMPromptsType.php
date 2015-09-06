<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteUMPromptsType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsDeleteUMPromptsType extends EwsBaseRequestType
{
    /**
     * The ConfigurationObject
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - documentation: The regular expression captures the standard representation of a GUID
     * - pattern: [0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}
     * @var string
     */
    public $ConfigurationObject;
    /**
     * The PromptNames
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfStringsType
     */
    public $PromptNames;
    /**
     * Constructor method for DeleteUMPromptsType
     * @uses EwsDeleteUMPromptsType::setConfigurationObject()
     * @uses EwsDeleteUMPromptsType::setPromptNames()
     * @param string $configurationObject
     * @param \Ews\ArrayType\EwsArrayOfStringsType $promptNames
     */
    public function __construct($configurationObject = null, \Ews\ArrayType\EwsArrayOfStringsType $promptNames = null)
    {
        $this
            ->setConfigurationObject($configurationObject)
            ->setPromptNames($promptNames);
    }
    /**
     * Get ConfigurationObject value
     * @return string
     */
    public function getConfigurationObject()
    {
        return $this->ConfigurationObject;
    }
    /**
     * Set ConfigurationObject value
     * @param string $configurationObject
     * @return \Ews\StructType\EwsDeleteUMPromptsType
     */
    public function setConfigurationObject($configurationObject = null)
    {
        $this->ConfigurationObject = $configurationObject;
        return $this;
    }
    /**
     * Get PromptNames value
     * @return \Ews\ArrayType\EwsArrayOfStringsType|null
     */
    public function getPromptNames()
    {
        return $this->PromptNames;
    }
    /**
     * Set PromptNames value
     * @param \Ews\ArrayType\EwsArrayOfStringsType $promptNames
     * @return \Ews\StructType\EwsDeleteUMPromptsType
     */
    public function setPromptNames(\Ews\ArrayType\EwsArrayOfStringsType $promptNames = null)
    {
        $this->PromptNames = $promptNames;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsDeleteUMPromptsType
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
