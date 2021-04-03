<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EducationInsightValue StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsEducationInsightValue extends EwsInsightValue
{
    /**
     * The Institute
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Institute = null;
    /**
     * The Degree
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Degree = null;
    /**
     * The StartUtcTicks
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $StartUtcTicks = null;
    /**
     * The EndUtcTicks
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $EndUtcTicks = null;
    /**
     * Constructor method for EducationInsightValue
     * @uses EwsEducationInsightValue::setInstitute()
     * @uses EwsEducationInsightValue::setDegree()
     * @uses EwsEducationInsightValue::setStartUtcTicks()
     * @uses EwsEducationInsightValue::setEndUtcTicks()
     * @param string $institute
     * @param string $degree
     * @param int $startUtcTicks
     * @param int $endUtcTicks
     */
    public function __construct(?string $institute = null, ?string $degree = null, ?int $startUtcTicks = null, ?int $endUtcTicks = null)
    {
        $this
            ->setInstitute($institute)
            ->setDegree($degree)
            ->setStartUtcTicks($startUtcTicks)
            ->setEndUtcTicks($endUtcTicks);
    }
    /**
     * Get Institute value
     * @return string|null
     */
    public function getInstitute(): ?string
    {
        return $this->Institute;
    }
    /**
     * Set Institute value
     * @param string $institute
     * @return \StructType\EwsEducationInsightValue
     */
    public function setInstitute(?string $institute = null): self
    {
        // validation for constraint: string
        if (!is_null($institute) && !is_string($institute)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($institute, true), gettype($institute)), __LINE__);
        }
        $this->Institute = $institute;
        
        return $this;
    }
    /**
     * Get Degree value
     * @return string|null
     */
    public function getDegree(): ?string
    {
        return $this->Degree;
    }
    /**
     * Set Degree value
     * @param string $degree
     * @return \StructType\EwsEducationInsightValue
     */
    public function setDegree(?string $degree = null): self
    {
        // validation for constraint: string
        if (!is_null($degree) && !is_string($degree)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($degree, true), gettype($degree)), __LINE__);
        }
        $this->Degree = $degree;
        
        return $this;
    }
    /**
     * Get StartUtcTicks value
     * @return int|null
     */
    public function getStartUtcTicks(): ?int
    {
        return $this->StartUtcTicks;
    }
    /**
     * Set StartUtcTicks value
     * @param int $startUtcTicks
     * @return \StructType\EwsEducationInsightValue
     */
    public function setStartUtcTicks(?int $startUtcTicks = null): self
    {
        // validation for constraint: int
        if (!is_null($startUtcTicks) && !(is_int($startUtcTicks) || ctype_digit($startUtcTicks))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($startUtcTicks, true), gettype($startUtcTicks)), __LINE__);
        }
        $this->StartUtcTicks = $startUtcTicks;
        
        return $this;
    }
    /**
     * Get EndUtcTicks value
     * @return int|null
     */
    public function getEndUtcTicks(): ?int
    {
        return $this->EndUtcTicks;
    }
    /**
     * Set EndUtcTicks value
     * @param int $endUtcTicks
     * @return \StructType\EwsEducationInsightValue
     */
    public function setEndUtcTicks(?int $endUtcTicks = null): self
    {
        // validation for constraint: int
        if (!is_null($endUtcTicks) && !(is_int($endUtcTicks) || ctype_digit($endUtcTicks))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($endUtcTicks, true), gettype($endUtcTicks)), __LINE__);
        }
        $this->EndUtcTicks = $endUtcTicks;
        
        return $this;
    }
}
