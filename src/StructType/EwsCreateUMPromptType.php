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
     * Meta information extracted from the WSDL
     * - documentation: The regular expression captures the standard representation of a GUID
     * - base: xs:string
     * - maxOccurs: 1
     * - minOccurs: 1
     * - pattern: [0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}
     * @var string
     */
    public $ConfigurationObject;
    /**
     * The PromptName
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $PromptName;
    /**
     * The AudioData
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $AudioData;
    /**
     * Constructor method for CreateUMPromptType
     * @uses EwsCreateUMPromptType::setConfigurationObject()
     * @uses EwsCreateUMPromptType::setPromptName()
     * @uses EwsCreateUMPromptType::setAudioData()
     * @param string $configurationObject
     * @param string $promptName
     * @param string $audioData
     */
    public function __construct($configurationObject = null, $promptName = null, $audioData = null)
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
        // validation for constraint: string
        if (!is_null($configurationObject) && !is_string($configurationObject)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($configurationObject, true), gettype($configurationObject)), __LINE__);
        }
        // validation for constraint: pattern([0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12})
        if (!is_null($configurationObject) && !preg_match('/[0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}/', $configurationObject)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression [0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}', var_export($configurationObject, true)), __LINE__);
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
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($promptName, true), gettype($promptName)), __LINE__);
        }
        $this->PromptName = $promptName;
        return $this;
    }
    /**
     * Get AudioData value
     * @return string
     */
    public function getAudioData()
    {
        return $this->AudioData;
    }
    /**
     * Set AudioData value
     * @param string $audioData
     * @return \Ews\StructType\EwsCreateUMPromptType
     */
    public function setAudioData($audioData = null)
    {
        // validation for constraint: string
        if (!is_null($audioData) && !is_string($audioData)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($audioData, true), gettype($audioData)), __LINE__);
        }
        $this->AudioData = $audioData;
        return $this;
    }
}
