<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PathToExtendedFieldType StructType
 * Meta information extracted from the WSDL
 * - documentation: Represents an extended property. Note that there are only a couple of valid attribute combinations. Note that all occurances require the PropertyType attribute. 1. (DistinguishedPropertySetId || PropertySetId) + (PropertyName ||
 * Property Id) 2. PropertyTag
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsPathToExtendedFieldType extends EwsBasePathToElementType
{
    /**
     * The PropertyType
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    public $PropertyType;
    /**
     * The DistinguishedPropertySetId
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $DistinguishedPropertySetId;
    /**
     * The PropertySetId
     * Meta information extracted from the WSDL
     * - documentation: The regular expression captures the standard representation of a GUID
     * - base: xs:string
     * - pattern: [0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}
     * - use: optional
     * @var string
     */
    public $PropertySetId;
    /**
     * The PropertyTag
     * Meta information extracted from the WSDL
     * - documentation: This type represents the property tag (MINUS the type part). There are two options for representation: 1. Hex ==> 0x3fa4 2. Decimal ==> 0-65535
     * - union: unsignedShort | string
     * - use: optional
     * @var string
     */
    public $PropertyTag;
    /**
     * The PropertyName
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $PropertyName;
    /**
     * The PropertyId
     * Meta information extracted from the WSDL
     * - use: optional
     * @var int
     */
    public $PropertyId;
    /**
     * Constructor method for PathToExtendedFieldType
     * @uses EwsPathToExtendedFieldType::setPropertyType()
     * @uses EwsPathToExtendedFieldType::setDistinguishedPropertySetId()
     * @uses EwsPathToExtendedFieldType::setPropertySetId()
     * @uses EwsPathToExtendedFieldType::setPropertyTag()
     * @uses EwsPathToExtendedFieldType::setPropertyName()
     * @uses EwsPathToExtendedFieldType::setPropertyId()
     * @param string $propertyType
     * @param string $distinguishedPropertySetId
     * @param string $propertySetId
     * @param string $propertyTag
     * @param string $propertyName
     * @param int $propertyId
     */
    public function __construct($propertyType = null, $distinguishedPropertySetId = null, $propertySetId = null, $propertyTag = null, $propertyName = null, $propertyId = null)
    {
        $this
            ->setPropertyType($propertyType)
            ->setDistinguishedPropertySetId($distinguishedPropertySetId)
            ->setPropertySetId($propertySetId)
            ->setPropertyTag($propertyTag)
            ->setPropertyName($propertyName)
            ->setPropertyId($propertyId);
    }
    /**
     * Get PropertyType value
     * @return string
     */
    public function getPropertyType()
    {
        return $this->PropertyType;
    }
    /**
     * Set PropertyType value
     * @uses \Ews\EnumType\EwsMapiPropertyTypeType::valueIsValid()
     * @uses \Ews\EnumType\EwsMapiPropertyTypeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $propertyType
     * @return \Ews\StructType\EwsPathToExtendedFieldType
     */
    public function setPropertyType($propertyType = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsMapiPropertyTypeType::valueIsValid($propertyType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsMapiPropertyTypeType', is_array($propertyType) ? implode(', ', $propertyType) : var_export($propertyType, true), implode(', ', \Ews\EnumType\EwsMapiPropertyTypeType::getValidValues())), __LINE__);
        }
        $this->PropertyType = $propertyType;
        return $this;
    }
    /**
     * Get DistinguishedPropertySetId value
     * @return string|null
     */
    public function getDistinguishedPropertySetId()
    {
        return $this->DistinguishedPropertySetId;
    }
    /**
     * Set DistinguishedPropertySetId value
     * @uses \Ews\EnumType\EwsDistinguishedPropertySetType::valueIsValid()
     * @uses \Ews\EnumType\EwsDistinguishedPropertySetType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $distinguishedPropertySetId
     * @return \Ews\StructType\EwsPathToExtendedFieldType
     */
    public function setDistinguishedPropertySetId($distinguishedPropertySetId = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsDistinguishedPropertySetType::valueIsValid($distinguishedPropertySetId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsDistinguishedPropertySetType', is_array($distinguishedPropertySetId) ? implode(', ', $distinguishedPropertySetId) : var_export($distinguishedPropertySetId, true), implode(', ', \Ews\EnumType\EwsDistinguishedPropertySetType::getValidValues())), __LINE__);
        }
        $this->DistinguishedPropertySetId = $distinguishedPropertySetId;
        return $this;
    }
    /**
     * Get PropertySetId value
     * @return string|null
     */
    public function getPropertySetId()
    {
        return $this->PropertySetId;
    }
    /**
     * Set PropertySetId value
     * @param string $propertySetId
     * @return \Ews\StructType\EwsPathToExtendedFieldType
     */
    public function setPropertySetId($propertySetId = null)
    {
        // validation for constraint: string
        if (!is_null($propertySetId) && !is_string($propertySetId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($propertySetId, true), gettype($propertySetId)), __LINE__);
        }
        // validation for constraint: pattern([0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12})
        if (!is_null($propertySetId) && !preg_match('/[0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}/', $propertySetId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression [0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}', var_export($propertySetId, true)), __LINE__);
        }
        $this->PropertySetId = $propertySetId;
        return $this;
    }
    /**
     * Get PropertyTag value
     * @return string|null
     */
    public function getPropertyTag()
    {
        return $this->PropertyTag;
    }
    /**
     * This method is responsible for validating the value passed to the setPropertyTag method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPropertyTag method
     * This is a set of validation rules based on the union types associated to the property being set by the setPropertyTag method
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePropertyTagForUnionConstraintsFromSetPropertyTag($value)
    {
        $message = '';
        // validation for constraint: int
        if (!is_null($value) && !(is_int($value) || ctype_digit($value))) {
            $exception0 = new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($value, true), gettype($value)), __LINE__);
        }
        if (isset($exception0)) {
            $message = sprintf("The value %s does not match any of the union rules: unsignedShort, string. See following errors:\n%s", var_export($value, true), implode("\n", array_map(function(\InvalidArgumentException $e) { return sprintf(' - %s', $e->getMessage()); }, [$exception0])));
        }
        unset($exception0);
        return $message;
    }
    /**
     * Set PropertyTag value
     * @param string $propertyTag
     * @return \Ews\StructType\EwsPathToExtendedFieldType
     */
    public function setPropertyTag($propertyTag = null)
    {
        // validation for constraint: string
        if (!is_null($propertyTag) && !is_string($propertyTag)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($propertyTag, true), gettype($propertyTag)), __LINE__);
        }
        // validation for constraint: union(unsignedShort, string)
        if ('' !== ($propertyTagUnionErrorMessage = self::validatePropertyTagForUnionConstraintsFromSetPropertyTag($propertyTag))) {
            throw new \InvalidArgumentException($propertyTagUnionErrorMessage, __LINE__);
        }
        $this->PropertyTag = $propertyTag;
        return $this;
    }
    /**
     * Get PropertyName value
     * @return string|null
     */
    public function getPropertyName()
    {
        return $this->PropertyName;
    }
    /**
     * Set PropertyName value
     * @param string $propertyName
     * @return \Ews\StructType\EwsPathToExtendedFieldType
     */
    public function setPropertyName($propertyName = null)
    {
        // validation for constraint: string
        if (!is_null($propertyName) && !is_string($propertyName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($propertyName, true), gettype($propertyName)), __LINE__);
        }
        $this->PropertyName = $propertyName;
        return $this;
    }
    /**
     * Get PropertyId value
     * @return int|null
     */
    public function getPropertyId()
    {
        return $this->PropertyId;
    }
    /**
     * Set PropertyId value
     * @param int $propertyId
     * @return \Ews\StructType\EwsPathToExtendedFieldType
     */
    public function setPropertyId($propertyId = null)
    {
        // validation for constraint: int
        if (!is_null($propertyId) && !(is_int($propertyId) || ctype_digit($propertyId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($propertyId, true), gettype($propertyId)), __LINE__);
        }
        $this->PropertyId = $propertyId;
        return $this;
    }
}
