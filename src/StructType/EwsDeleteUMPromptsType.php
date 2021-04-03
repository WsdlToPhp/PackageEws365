<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * Meta information extracted from the WSDL
     * - documentation: The regular expression captures the standard representation of a GUID
     * - base: xs:string
     * - maxOccurs: 1
     * - minOccurs: 1
     * - pattern: [0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}
     * @var string
     */
    protected string $ConfigurationObject;
    /**
     * The PromptNames
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfStringsType|null
     */
    protected ?\ArrayType\EwsArrayOfStringsType $PromptNames = null;
    /**
     * Constructor method for DeleteUMPromptsType
     * @uses EwsDeleteUMPromptsType::setConfigurationObject()
     * @uses EwsDeleteUMPromptsType::setPromptNames()
     * @param string $configurationObject
     * @param \ArrayType\EwsArrayOfStringsType $promptNames
     */
    public function __construct(string $configurationObject, ?\ArrayType\EwsArrayOfStringsType $promptNames = null)
    {
        $this
            ->setConfigurationObject($configurationObject)
            ->setPromptNames($promptNames);
    }
    /**
     * Get ConfigurationObject value
     * @return string
     */
    public function getConfigurationObject(): string
    {
        return $this->ConfigurationObject;
    }
    /**
     * Set ConfigurationObject value
     * @param string $configurationObject
     * @return \StructType\EwsDeleteUMPromptsType
     */
    public function setConfigurationObject(string $configurationObject): self
    {
        // validation for constraint: string
        if (!is_null($configurationObject) && !is_string($configurationObject)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($configurationObject, true), gettype($configurationObject)), __LINE__);
        }
        // validation for constraint: pattern([0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12})
        if (!is_null($configurationObject) && !preg_match('/[0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}/', $configurationObject)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}/', var_export($configurationObject, true)), __LINE__);
        }
        $this->ConfigurationObject = $configurationObject;
        
        return $this;
    }
    /**
     * Get PromptNames value
     * @return \ArrayType\EwsArrayOfStringsType|null
     */
    public function getPromptNames(): ?\ArrayType\EwsArrayOfStringsType
    {
        return $this->PromptNames;
    }
    /**
     * Set PromptNames value
     * @param \ArrayType\EwsArrayOfStringsType $promptNames
     * @return \StructType\EwsDeleteUMPromptsType
     */
    public function setPromptNames(?\ArrayType\EwsArrayOfStringsType $promptNames = null): self
    {
        $this->PromptNames = $promptNames;
        
        return $this;
    }
}
