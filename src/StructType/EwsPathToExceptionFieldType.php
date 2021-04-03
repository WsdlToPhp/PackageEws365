<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PathToExceptionFieldType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsPathToExceptionFieldType extends EwsBasePathToElementType
{
    /**
     * The FieldURI
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $FieldURI;
    /**
     * Constructor method for PathToExceptionFieldType
     * @uses EwsPathToExceptionFieldType::setFieldURI()
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
     * @uses \EnumType\EwsExceptionPropertyURIType::valueIsValid()
     * @uses \EnumType\EwsExceptionPropertyURIType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $fieldURI
     * @return \StructType\EwsPathToExceptionFieldType
     */
    public function setFieldURI(string $fieldURI): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsExceptionPropertyURIType::valueIsValid($fieldURI)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsExceptionPropertyURIType', is_array($fieldURI) ? implode(', ', $fieldURI) : var_export($fieldURI, true), implode(', ', \EnumType\EwsExceptionPropertyURIType::getValidValues())), __LINE__);
        }
        $this->FieldURI = $fieldURI;
        
        return $this;
    }
}
