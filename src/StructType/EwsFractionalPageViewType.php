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
     * Meta information extracted from the WSDL
     * - use: required
     * @var int
     */
    public $Numerator;
    /**
     * The Denominator
     * Meta information extracted from the WSDL
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
        if (!is_null($numerator) && !(is_int($numerator) || ctype_digit($numerator))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numerator, true), gettype($numerator)), __LINE__);
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
        if (!is_null($denominator) && !(is_int($denominator) || ctype_digit($denominator))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($denominator, true), gettype($denominator)), __LINE__);
        }
        $this->Denominator = $denominator;
        return $this;
    }
}
