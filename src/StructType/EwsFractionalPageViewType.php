<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
    protected int $Numerator;
    /**
     * The Denominator
     * Meta information extracted from the WSDL
     * - use: required
     * @var int
     */
    protected int $Denominator;
    /**
     * Constructor method for FractionalPageViewType
     * @uses EwsFractionalPageViewType::setNumerator()
     * @uses EwsFractionalPageViewType::setDenominator()
     * @param int $numerator
     * @param int $denominator
     */
    public function __construct(int $numerator, int $denominator)
    {
        $this
            ->setNumerator($numerator)
            ->setDenominator($denominator);
    }
    /**
     * Get Numerator value
     * @return int
     */
    public function getNumerator(): int
    {
        return $this->Numerator;
    }
    /**
     * Set Numerator value
     * @param int $numerator
     * @return \StructType\EwsFractionalPageViewType
     */
    public function setNumerator(int $numerator): self
    {
        // validation for constraint: int
        if (!is_null($numerator) && !(is_int($numerator) || ctype_digit($numerator))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numerator, true), gettype($numerator)), __LINE__);
        }
        $this->Numerator = $numerator;
        
        return $this;
    }
    /**
     * Get Denominator value
     * @return int
     */
    public function getDenominator(): int
    {
        return $this->Denominator;
    }
    /**
     * Set Denominator value
     * @param int $denominator
     * @return \StructType\EwsFractionalPageViewType
     */
    public function setDenominator(int $denominator): self
    {
        // validation for constraint: int
        if (!is_null($denominator) && !(is_int($denominator) || ctype_digit($denominator))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($denominator, true), gettype($denominator)), __LINE__);
        }
        $this->Denominator = $denominator;
        
        return $this;
    }
}
