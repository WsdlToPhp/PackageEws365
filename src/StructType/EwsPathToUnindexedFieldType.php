<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
    protected string $FieldURI;
    /**
     * Constructor method for PathToUnindexedFieldType
     * @uses EwsPathToUnindexedFieldType::setFieldURI()
     * @param string $fieldURI
     */
    public function __construct(string $fieldURI)
    {
        $this
            ->setFieldURI($fieldURI);
    }
    /**
     * Get FieldURI value
     * @return string
     */
    public function getFieldURI(): string
    {
        return $this->FieldURI;
    }
    /**
     * Set FieldURI value
     * @uses \EnumType\EwsUnindexedFieldURIType::valueIsValid()
     * @uses \EnumType\EwsUnindexedFieldURIType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $fieldURI
     * @return \StructType\EwsPathToUnindexedFieldType
     */
    public function setFieldURI(string $fieldURI): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsUnindexedFieldURIType::valueIsValid($fieldURI)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsUnindexedFieldURIType', is_array($fieldURI) ? implode(', ', $fieldURI) : var_export($fieldURI, true), implode(', ', \EnumType\EwsUnindexedFieldURIType::getValidValues())), __LINE__);
        }
        $this->FieldURI = $fieldURI;
        
        return $this;
    }
}
