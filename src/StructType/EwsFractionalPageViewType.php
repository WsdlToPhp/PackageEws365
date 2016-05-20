<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FractionalPageViewType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsFractionalPageViewType extends EwsBasePagingType
{
    /**
     * The Numerator
     * Meta informations extracted from the WSDL
     * - use: required
     * @var int
     */
    public $Numerator;
    /**
     * The Denominator
     * Meta informations extracted from the WSDL
     * - use: required
     * @var int
     */
    public $Denominator;
    /**
     * Constructor method for FractionalPageViewType
     * @uses EwsFractionalPageViewType::setNumerator()
     * @uses EwsFractionalPageViewType::setDenominator()
     * @param int $numerator
     * @param int $denominator
     */
    public function __construct($numerator = null, $denominator = null)
    {
        $this
            ->setNumerator($numerator)
            ->setDenominator($denominator);
    }
    /**
     * Get Numerator value
     * @return int
     */
    public function getNumerator()
    {
        return $this->Numerator;
    }
    /**
     * Set Numerator value
     * @param int $numerator
     * @return \Ews\StructType\EwsFractionalPageViewType
     */
    public function setNumerator($numerator = null)
    {
        // validation for constraint: int
        if (!is_null($numerator) && !is_numeric($numerator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($numerator)), __LINE__);
        }
        $this->Numerator = $numerator;
        return $this;
    }
    /**
     * Get Denominator value
     * @return int
     */
    public function getDenominator()
    {
        return $this->Denominator;
    }
    /**
     * Set Denominator value
     * @param int $denominator
     * @return \Ews\StructType\EwsFractionalPageViewType
     */
    public function setDenominator($denominator = null)
    {
        // validation for constraint: int
        if (!is_null($denominator) && !is_numeric($denominator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($denominator)), __LINE__);
        }
        $this->Denominator = $denominator;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsFractionalPageViewType
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
