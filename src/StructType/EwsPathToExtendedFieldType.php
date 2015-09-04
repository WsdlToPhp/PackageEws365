<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PathToExtendedFieldType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Represents an extended property. Note that there are only a couple of valid attribute combinations. Note that all occurances require the PropertyType attribute. 1. (DistinguishedPropertySetId || PropertySetId) + (PropertyName ||
 * Property Id) 2. PropertyTag
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsPathToExtendedFieldType extends EwsBasePathToElementType
{
    /**
     * The PropertyType
     * Meta informations extracted from the WSDL
     * - use: required
     * - documentation: Includes all of the extended property types that we support. Note that Error, Null, Object and Object array can not be used in restrictions, or for setting/getting values. They are only there for error reporting purposes.
     * @var string
     */
    public $PropertyType;
    /**
     * The DistinguishedPropertySetId
     * Meta informations extracted from the WSDL
     * - use: optional
     * - documentation: Defines the well known property set ids for extended properties.
     * @var string
     */
    public $DistinguishedPropertySetId;
    /**
     * The PropertySetId
     * Meta informations extracted from the WSDL
     * - use: optional
     * - documentation: The regular expression captures the standard representation of a GUID
     * - pattern: [0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}
     * @var string
     */
    public $PropertySetId;
    /**
     * The PropertyTag
     * Meta informations extracted from the WSDL
     * - use: optional
     * - documentation: This type represents the property tag (MINUS the type part). There are two options for representation: 1. Hex ==> 0x3fa4 2. Decimal ==> 0-65535
     * - pattern: (0x|0X)[0-9A-Fa-f]{1,4}
     * @var string
     */
    public $PropertyTag;
    /**
     * The PropertyName
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $PropertyName;
    /**
     * The PropertyId
     * Meta informations extracted from the WSDL
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
     * @param string $propertyType
     * @return \Ews\StructType\EwsPathToExtendedFieldType
     */
    public function setPropertyType($propertyType = null)
    {
        if (!\Ews\EnumType\EwsMapiPropertyTypeType::valueIsValid($propertyType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $propertyType, implode(', ', \Ews\EnumType\EwsMapiPropertyTypeType::getValidValues())), __LINE__);
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
     * @param string $distinguishedPropertySetId
     * @return \Ews\StructType\EwsPathToExtendedFieldType
     */
    public function setDistinguishedPropertySetId($distinguishedPropertySetId = null)
    {
        if (!\Ews\EnumType\EwsDistinguishedPropertySetType::valueIsValid($distinguishedPropertySetId)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $distinguishedPropertySetId, implode(', ', \Ews\EnumType\EwsDistinguishedPropertySetType::getValidValues())), __LINE__);
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
     * Set PropertyTag value
     * @param string $propertyTag
     * @return \Ews\StructType\EwsPathToExtendedFieldType
     */
    public function setPropertyTag($propertyTag = null)
    {
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
        $this->PropertyId = $propertyId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsPathToExtendedFieldType
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
