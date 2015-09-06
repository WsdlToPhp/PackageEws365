<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AlternateIdBaseType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Surfaces alternate representations of an item or folder id. No change key is included.
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
abstract class EwsAlternateIdBaseType extends AbstractStructBase
{
    /**
     * The Format
     * Meta informations extracted from the WSDL
     * - use: required
     * - documentation: Surfaces the various id types that are supported for conversion
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
     * @param string $format
     * @return \Ews\StructType\EwsAlternateIdBaseType
     */
    public function setFormat($format = null)
    {
        if (!\Ews\EnumType\EwsIdFormatType::valueIsValid($format)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $format, implode(', ', \Ews\EnumType\EwsIdFormatType::getValidValues())), __LINE__);
        }
        $this->Format = $format;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsAlternateIdBaseType
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
