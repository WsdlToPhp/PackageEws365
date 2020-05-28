<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AlternateIdBaseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Surfaces alternate representations of an item or folder id. No change key is included.
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
abstract class EwsAlternateIdBaseType extends AbstractStructBase
{
    /**
     * The Format
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    public $Format;
    /**
     * Constructor method for AlternateIdBaseType
     * @uses EwsAlternateIdBaseType::setFormat()
     * @param string $format
     */
    public function __construct($format = null)
    {
        $this
            ->setFormat($format);
    }
    /**
     * Get Format value
     * @return string
     */
    public function getFormat()
    {
        return $this->Format;
    }
    /**
     * Set Format value
     * @uses \Ews\EnumType\EwsIdFormatType::valueIsValid()
     * @uses \Ews\EnumType\EwsIdFormatType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $format
     * @return \Ews\StructType\EwsAlternateIdBaseType
     */
    public function setFormat($format = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsIdFormatType::valueIsValid($format)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsIdFormatType', is_array($format) ? implode(', ', $format) : var_export($format, true), implode(', ', \Ews\EnumType\EwsIdFormatType::getValidValues())), __LINE__);
        }
        $this->Format = $format;
        return $this;
    }
}
