<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PathToUnindexedFieldType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsPathToUnindexedFieldType extends EwsBasePathToElementType
{
    /**
     * The FieldURI
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    public $FieldURI;
    /**
     * Constructor method for PathToUnindexedFieldType
     * @uses EwsPathToUnindexedFieldType::setFieldURI()
     * @param string $fieldURI
     */
    public function __construct($fieldURI = null)
    {
        $this
            ->setFieldURI($fieldURI);
    }
    /**
     * Get FieldURI value
     * @return string
     */
    public function getFieldURI()
    {
        return $this->FieldURI;
    }
    /**
     * Set FieldURI value
     * @uses \Ews\EnumType\EwsUnindexedFieldURIType::valueIsValid()
     * @uses \Ews\EnumType\EwsUnindexedFieldURIType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $fieldURI
     * @return \Ews\StructType\EwsPathToUnindexedFieldType
     */
    public function setFieldURI($fieldURI = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsUnindexedFieldURIType::valueIsValid($fieldURI)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsUnindexedFieldURIType', is_array($fieldURI) ? implode(', ', $fieldURI) : var_export($fieldURI, true), implode(', ', \Ews\EnumType\EwsUnindexedFieldURIType::getValidValues())), __LINE__);
        }
        $this->FieldURI = $fieldURI;
        return $this;
    }
}
