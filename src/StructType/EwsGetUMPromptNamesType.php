<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUMPromptNamesType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetUMPromptNamesType extends EwsBaseRequestType
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
     * The HoursElapsedSinceLastModified
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    protected int $HoursElapsedSinceLastModified;
    /**
     * Constructor method for GetUMPromptNamesType
     * @uses EwsGetUMPromptNamesType::setConfigurationObject()
     * @uses EwsGetUMPromptNamesType::setHoursElapsedSinceLastModified()
     * @param string $configurationObject
     * @param int $hoursElapsedSinceLastModified
     */
    public function __construct(string $configurationObject, int $hoursElapsedSinceLastModified)
    {
        $this
            ->setConfigurationObject($configurationObject)
            ->setHoursElapsedSinceLastModified($hoursElapsedSinceLastModified);
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
     * @return \StructType\EwsGetUMPromptNamesType
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
     * Get HoursElapsedSinceLastModified value
     * @return int
     */
    public function getHoursElapsedSinceLastModified(): int
    {
        return $this->HoursElapsedSinceLastModified;
    }
    /**
     * Set HoursElapsedSinceLastModified value
     * @param int $hoursElapsedSinceLastModified
     * @return \StructType\EwsGetUMPromptNamesType
     */
    public function setHoursElapsedSinceLastModified(int $hoursElapsedSinceLastModified): self
    {
        // validation for constraint: int
        if (!is_null($hoursElapsedSinceLastModified) && !(is_int($hoursElapsedSinceLastModified) || ctype_digit($hoursElapsedSinceLastModified))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($hoursElapsedSinceLastModified, true), gettype($hoursElapsedSinceLastModified)), __LINE__);
        }
        $this->HoursElapsedSinceLastModified = $hoursElapsedSinceLastModified;
        
        return $this;
    }
}
