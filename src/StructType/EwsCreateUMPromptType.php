<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateUMPromptType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsCreateUMPromptType extends EwsBaseRequestType
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
     * The AudioData
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var base64Binary
     */
    public $AudioData;
    /**
     * Constructor method for CreateUMPromptType
     * @uses EwsCreateUMPromptType::setConfigurationObject()
     * @uses EwsCreateUMPromptType::setPromptName()
     * @uses EwsCreateUMPromptType::setAudioData()
     * @param string $configurationObject
     * @param string $promptName
     * @param base64Binary $audioData
     */
    public function __construct($configurationObject = null, $promptName = null, base64Binary $audioData = null)
    {
        $this
            ->setConfigurationObject($configurationObject)
            ->setPromptName($promptName)
            ->setAudioData($audioData);
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
     * @return \Ews\StructType\EwsCreateUMPromptType
     */
    public function setConfigurationObject($configurationObject = null)
    {
        // validation for constraint: pattern
        if (is_scalar($configurationObject) && !preg_match('/[0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}/', $configurationObject)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}", "%s" given', var_export($configurationObject, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($configurationObject) && !is_string($configurationObject)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($configurationObject)), __LINE__);
        }
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
     * @return \Ews\StructType\EwsCreateUMPromptType
     */
    public function setPromptName($promptName = null)
    {
        // validation for constraint: string
        if (!is_null($promptName) && !is_string($promptName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($promptName)), __LINE__);
        }
        $this->PromptName = $promptName;
        return $this;
    }
    /**
     * Get AudioData value
     * @return base64Binary
     */
    public function getAudioData()
    {
        return $this->AudioData;
    }
    /**
     * Set AudioData value
     * @param base64Binary $audioData
     * @return \Ews\StructType\EwsCreateUMPromptType
     */
    public function setAudioData(base64Binary $audioData = null)
    {
        $this->AudioData = $audioData;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsCreateUMPromptType
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
