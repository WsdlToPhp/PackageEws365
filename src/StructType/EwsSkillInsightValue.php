<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SkillInsightValue StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsSkillInsightValue extends EwsInsightValue
{
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Name = null;
    /**
     * The Strength
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $Strength = null;
    /**
     * Constructor method for SkillInsightValue
     * @uses EwsSkillInsightValue::setName()
     * @uses EwsSkillInsightValue::setStrength()
     * @param string $name
     * @param int $strength
     */
    public function __construct(?string $name = null, ?int $strength = null)
    {
        $this
            ->setName($name)
            ->setStrength($strength);
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \StructType\EwsSkillInsightValue
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->Name = $name;
        
        return $this;
    }
    /**
     * Get Strength value
     * @return int|null
     */
    public function getStrength(): ?int
    {
        return $this->Strength;
    }
    /**
     * Set Strength value
     * @param int $strength
     * @return \StructType\EwsSkillInsightValue
     */
    public function setStrength(?int $strength = null): self
    {
        // validation for constraint: int
        if (!is_null($strength) && !(is_int($strength) || ctype_digit($strength))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($strength, true), gettype($strength)), __LINE__);
        }
        $this->Strength = $strength;
        
        return $this;
    }
}
