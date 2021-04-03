<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
    protected string $Format;
    /**
     * Constructor method for AlternateIdBaseType
     * @uses EwsAlternateIdBaseType::setFormat()
     * @param string $format
     */
    public function __construct(string $format)
    {
        $this
            ->setFormat($format);
    }
    /**
     * Get Format value
     * @return string
     */
    public function getFormat(): string
    {
        return $this->Format;
    }
    /**
     * Set Format value
     * @uses \EnumType\EwsIdFormatType::valueIsValid()
     * @uses \EnumType\EwsIdFormatType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $format
     * @return \StructType\EwsAlternateIdBaseType
     */
    public function setFormat(string $format): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsIdFormatType::valueIsValid($format)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsIdFormatType', is_array($format) ? implode(', ', $format) : var_export($format, true), implode(', ', \EnumType\EwsIdFormatType::getValidValues())), __LINE__);
        }
        $this->Format = $format;
        
        return $this;
    }
}
