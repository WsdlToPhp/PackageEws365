<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUMPromptType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetUMPromptType extends EwsBaseRequestType
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
     * The PromptName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $PromptName;
    /**
     * Constructor method for GetUMPromptType
     * @uses EwsGetUMPromptType::setConfigurationObject()
     * @uses EwsGetUMPromptType::setPromptName()
     * @param string $configurationObject
     * @param string $promptName
     */
    public function __construct($configurationObject = null, $promptName = null)
    {
        $this
            ->setConfigurationObject($configurationObject)
            ->setPromptName($promptName);
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
     * @return \Ews\StructType\EwsGetUMPromptType
     */
    public function setConfigurationObject($configurationObject = null)
    {
        $this->ConfigurationObject = $configurationObject;
        return $this;
    }
    /**
     * Get PromptName value
     * @return string
     */
    public function getPromptName()
    {
        return $this->PromptName;
    }
    /**
     * Set PromptName value
     * @param string $promptName
     * @return \Ews\StructType\EwsGetUMPromptType
     */
    public function setPromptName($promptName = null)
    {
        $this->PromptName = $promptName;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsGetUMPromptType
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
