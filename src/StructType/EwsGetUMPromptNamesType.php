<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - documentation: The regular expression captures the standard representation of a GUID
     * - pattern: [0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}
     * @var string
     */
    public $ConfigurationObject;
    /**
     * The HoursElapsedSinceLastModified
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $HoursElapsedSinceLastModified;
    /**
     * Constructor method for GetUMPromptNamesType
     * @uses EwsGetUMPromptNamesType::setConfigurationObject()
     * @uses EwsGetUMPromptNamesType::setHoursElapsedSinceLastModified()
     * @param string $configurationObject
     * @param int $hoursElapsedSinceLastModified
     */
    public function __construct($configurationObject = null, $hoursElapsedSinceLastModified = null)
    {
        $this
            ->setConfigurationObject($configurationObject)
            ->setHoursElapsedSinceLastModified($hoursElapsedSinceLastModified);
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
     * @return \Ews\StructType\EwsGetUMPromptNamesType
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
     * Get HoursElapsedSinceLastModified value
     * @return int
     */
    public function getHoursElapsedSinceLastModified()
    {
        return $this->HoursElapsedSinceLastModified;
    }
    /**
     * Set HoursElapsedSinceLastModified value
     * @param int $hoursElapsedSinceLastModified
     * @return \Ews\StructType\EwsGetUMPromptNamesType
     */
    public function setHoursElapsedSinceLastModified($hoursElapsedSinceLastModified = null)
    {
        // validation for constraint: int
        if (!is_null($hoursElapsedSinceLastModified) && !is_int($hoursElapsedSinceLastModified)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide an int, "%s" given', gettype($hoursElapsedSinceLastModified)), __LINE__);
        }
        $this->HoursElapsedSinceLastModified = $hoursElapsedSinceLastModified;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsGetUMPromptNamesType
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
