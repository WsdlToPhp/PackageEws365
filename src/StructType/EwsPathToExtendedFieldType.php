<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
    protected string $PropertyType;
    /**
     * The DistinguishedPropertySetId
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $DistinguishedPropertySetId = null;
    /**
     * The PropertySetId
     * Meta information extracted from the WSDL
     * - documentation: The regular expression captures the standard representation of a GUID
     * - base: xs:string
     * - pattern: [0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}
     * - use: optional
     * @var string|null
     */
    protected ?string $PropertySetId = null;
    /**
     * The PropertyTag
     * Meta information extracted from the WSDL
     * - documentation: This type represents the property tag (MINUS the type part). There are two options for representation: 1. Hex ==> 0x3fa4 2. Decimal ==> 0-65535
     * - union: unsignedShort | string
     * - use: optional
     * @var string|null
     */
    protected ?string $PropertyTag = null;
    /**
     * The PropertyName
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $PropertyName = null;
    /**
     * The PropertyId
     * Meta information extracted from the WSDL
     * - use: optional
     * @var int|null
     */
    protected ?int $PropertyId = null;
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
    public function __construct(string $propertyType, ?string $distinguishedPropertySetId = null, ?string $propertySetId = null, ?string $propertyTag = null, ?string $propertyName = null, ?int $propertyId = null)
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
    public function getPropertyType(): string
    {
        return $this->PropertyType;
    }
    /**
     * Set PropertyType value
     * @uses \EnumType\EwsMapiPropertyTypeType::valueIsValid()
     * @uses \EnumType\EwsMapiPropertyTypeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $propertyType
     * @return \StructType\EwsPathToExtendedFieldType
     */
    public function setPropertyType(string $propertyType): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsMapiPropertyTypeType::valueIsValid($propertyType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsMapiPropertyTypeType', is_array($propertyType) ? implode(', ', $propertyType) : var_export($propertyType, true), implode(', ', \EnumType\EwsMapiPropertyTypeType::getValidValues())), __LINE__);
        }
        $this->PropertyType = $propertyType;

        return $this;
    }
    /**
     * Get DistinguishedPropertySetId value
     * @return string|null
     */
    public function getDistinguishedPropertySetId(): ?string
    {
        return $this->DistinguishedPropertySetId;
    }
    /**
     * Set DistinguishedPropertySetId value
     * @uses \EnumType\EwsDistinguishedPropertySetType::valueIsValid()
     * @uses \EnumType\EwsDistinguishedPropertySetType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $distinguishedPropertySetId
     * @return \StructType\EwsPathToExtendedFieldType
     */
    public function setDistinguishedPropertySetId(?string $distinguishedPropertySetId = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsDistinguishedPropertySetType::valueIsValid($distinguishedPropertySetId)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsDistinguishedPropertySetType', is_array($distinguishedPropertySetId) ? implode(', ', $distinguishedPropertySetId) : var_export($distinguishedPropertySetId, true), implode(', ', \EnumType\EwsDistinguishedPropertySetType::getValidValues())), __LINE__);
        }
        $this->DistinguishedPropertySetId = $distinguishedPropertySetId;

        return $this;
    }
    /**
     * Get PropertySetId value
     * @return string|null
     */
    public function getPropertySetId(): ?string
    {
        return $this->PropertySetId;
    }
    /**
     * Set PropertySetId value
     * @param string $propertySetId
     * @return \StructType\EwsPathToExtendedFieldType
     */
    public function setPropertySetId(?string $propertySetId = null): self
    {
        // validation for constraint: string
        if (!is_null($propertySetId) && !is_string($propertySetId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($propertySetId, true), gettype($propertySetId)), __LINE__);
        }
        // validation for constraint: pattern([0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12})
        if (!is_null($propertySetId) && !preg_match('/[0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}/', $propertySetId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}/', var_export($propertySetId, true)), __LINE__);
        }
        $this->PropertySetId = $propertySetId;

        return $this;
    }
    /**
     * Get PropertyTag value
     * @return string|null
     */
    public function getPropertyTag(): ?string
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
    public static function validatePropertyTagForUnionConstraintsFromSetPropertyTag($value): string
    {
        $message = '';
        // validation for constraint: int
        if (!is_null($value) && !(is_int($value) || ctype_digit($value))) {
            $exception0 = new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($value, true), gettype($value)), __LINE__);
        }
        if (isset($exception0)) {
            $message = sprintf("The value %s does not match any of the union rules: unsignedShort, string. See following errors:\n%s", var_export($value, true), implode("\n", array_map(function(InvalidArgumentException $e) {
                return sprintf(' - %s', $e->getMessage());
            }, [$exception0])));
        }
        unset($exception0);

        return $message;
    }
    /**
     * Set PropertyTag value
     * @param string $propertyTag
     * @return \StructType\EwsPathToExtendedFieldType
     */
    public function setPropertyTag(?string $propertyTag = null): self
    {
        // validation for constraint: string
        if (!is_null($propertyTag) && !is_string($propertyTag)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($propertyTag, true), gettype($propertyTag)), __LINE__);
        }
        // validation for constraint: union(unsignedShort, string)
        if ('' !== ($propertyTagUnionErrorMessage = self::validatePropertyTagForUnionConstraintsFromSetPropertyTag($propertyTag))) {
            throw new InvalidArgumentException($propertyTagUnionErrorMessage, __LINE__);
        }
        $this->PropertyTag = $propertyTag;

        return $this;
    }
    /**
     * Get PropertyName value
     * @return string|null
     */
    public function getPropertyName(): ?string
    {
        return $this->PropertyName;
    }
    /**
     * Set PropertyName value
     * @param string $propertyName
     * @return \StructType\EwsPathToExtendedFieldType
     */
    public function setPropertyName(?string $propertyName = null): self
    {
        // validation for constraint: string
        if (!is_null($propertyName) && !is_string($propertyName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($propertyName, true), gettype($propertyName)), __LINE__);
        }
        $this->PropertyName = $propertyName;

        return $this;
    }
    /**
     * Get PropertyId value
     * @return int|null
     */
    public function getPropertyId(): ?int
    {
        return $this->PropertyId;
    }
    /**
     * Set PropertyId value
     * @param int $propertyId
     * @return \StructType\EwsPathToExtendedFieldType
     */
    public function setPropertyId(?int $propertyId = null): self
    {
        // validation for constraint: int
        if (!is_null($propertyId) && !(is_int($propertyId) || ctype_digit($propertyId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($propertyId, true), gettype($propertyId)), __LINE__);
        }
        $this->PropertyId = $propertyId;

        return $this;
    }
}
