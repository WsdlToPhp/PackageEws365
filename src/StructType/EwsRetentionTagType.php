<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RetentionTagType StructType
 * Meta informations extracted from the WSDL
 * - documentation: The regular expression captures the standard representation of a GUID
 * - pattern: [0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsRetentionTagType extends AbstractStructBase
{
    /**
     * The IsExplicit
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $IsExplicit;
    /**
     * The _
     * Meta informations extracted from the WSDL
     * - documentation: The regular expression captures the standard representation of a GUID
     * - pattern: [0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}
     * @var string
     */
    public $_;
    /**
     * Constructor method for RetentionTagType
     * @uses EwsRetentionTagType::setIsExplicit()
     * @uses EwsRetentionTagType::set_()
     * @param bool $isExplicit
     * @param string $_
     */
    public function __construct($isExplicit = null, $_ = null)
    {
        $this
            ->setIsExplicit($isExplicit)
            ->set_($_);
    }
    /**
     * Get IsExplicit value
     * @return bool
     */
    public function getIsExplicit()
    {
        return $this->IsExplicit;
    }
    /**
     * Set IsExplicit value
     * @param bool $isExplicit
     * @return \Ews\StructType\EwsRetentionTagType
     */
    public function setIsExplicit($isExplicit = null)
    {
        $this->IsExplicit = $isExplicit;
        return $this;
    }
    /**
     * Get _ value
     * @return string|null
     */
    public function get_()
    {
        return $this->_;
    }
    /**
     * Set _ value
     * @param string $_
     * @return \Ews\StructType\EwsRetentionTagType
     */
    public function set_($_ = null)
    {
        // validation for constraint: pattern
        if (is_scalar($_) && !preg_match('/[0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}/', $_)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}", "%s" given', var_export($_, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($_) && !is_string($_)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($_)), __LINE__);
        }
        $this->_ = $_;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsRetentionTagType
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
