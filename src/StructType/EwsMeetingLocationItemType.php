<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MeetingLocationItemType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsMeetingLocationItemType extends AbstractStructBase
{
    /**
     * The DisplayName
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $DisplayName;
    /**
     * The PostalAddress
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \StructType\EwsPersonaPostalAddressType
     */
    protected \StructType\EwsPersonaPostalAddressType $PostalAddress;
    /**
     * The StartTimeInUTC
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $StartTimeInUTC;
    /**
     * The Source
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $Source;
    /**
     * The Capacity
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $Capacity = null;
    /**
     * The Score
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $Score = null;
    /**
     * Constructor method for MeetingLocationItemType
     * @uses EwsMeetingLocationItemType::setDisplayName()
     * @uses EwsMeetingLocationItemType::setPostalAddress()
     * @uses EwsMeetingLocationItemType::setStartTimeInUTC()
     * @uses EwsMeetingLocationItemType::setSource()
     * @uses EwsMeetingLocationItemType::setCapacity()
     * @uses EwsMeetingLocationItemType::setScore()
     * @param string $displayName
     * @param \StructType\EwsPersonaPostalAddressType $postalAddress
     * @param string $startTimeInUTC
     * @param string $source
     * @param int $capacity
     * @param float $score
     */
    public function __construct(string $displayName, \StructType\EwsPersonaPostalAddressType $postalAddress, string $startTimeInUTC, string $source, ?int $capacity = null, ?float $score = null)
    {
        $this
            ->setDisplayName($displayName)
            ->setPostalAddress($postalAddress)
            ->setStartTimeInUTC($startTimeInUTC)
            ->setSource($source)
            ->setCapacity($capacity)
            ->setScore($score);
    }
    /**
     * Get DisplayName value
     * @return string
     */
    public function getDisplayName(): string
    {
        return $this->DisplayName;
    }
    /**
     * Set DisplayName value
     * @param string $displayName
     * @return \StructType\EwsMeetingLocationItemType
     */
    public function setDisplayName(string $displayName): self
    {
        // validation for constraint: string
        if (!is_null($displayName) && !is_string($displayName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($displayName, true), gettype($displayName)), __LINE__);
        }
        $this->DisplayName = $displayName;
        
        return $this;
    }
    /**
     * Get PostalAddress value
     * @return \StructType\EwsPersonaPostalAddressType
     */
    public function getPostalAddress(): \StructType\EwsPersonaPostalAddressType
    {
        return $this->PostalAddress;
    }
    /**
     * Set PostalAddress value
     * @param \StructType\EwsPersonaPostalAddressType $postalAddress
     * @return \StructType\EwsMeetingLocationItemType
     */
    public function setPostalAddress(\StructType\EwsPersonaPostalAddressType $postalAddress): self
    {
        $this->PostalAddress = $postalAddress;
        
        return $this;
    }
    /**
     * Get StartTimeInUTC value
     * @return string
     */
    public function getStartTimeInUTC(): string
    {
        return $this->StartTimeInUTC;
    }
    /**
     * Set StartTimeInUTC value
     * @param string $startTimeInUTC
     * @return \StructType\EwsMeetingLocationItemType
     */
    public function setStartTimeInUTC(string $startTimeInUTC): self
    {
        // validation for constraint: string
        if (!is_null($startTimeInUTC) && !is_string($startTimeInUTC)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startTimeInUTC, true), gettype($startTimeInUTC)), __LINE__);
        }
        $this->StartTimeInUTC = $startTimeInUTC;
        
        return $this;
    }
    /**
     * Get Source value
     * @return string
     */
    public function getSource(): string
    {
        return $this->Source;
    }
    /**
     * Set Source value
     * @param string $source
     * @return \StructType\EwsMeetingLocationItemType
     */
    public function setSource(string $source): self
    {
        // validation for constraint: string
        if (!is_null($source) && !is_string($source)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($source, true), gettype($source)), __LINE__);
        }
        $this->Source = $source;
        
        return $this;
    }
    /**
     * Get Capacity value
     * @return int|null
     */
    public function getCapacity(): ?int
    {
        return $this->Capacity;
    }
    /**
     * Set Capacity value
     * @param int $capacity
     * @return \StructType\EwsMeetingLocationItemType
     */
    public function setCapacity(?int $capacity = null): self
    {
        // validation for constraint: int
        if (!is_null($capacity) && !(is_int($capacity) || ctype_digit($capacity))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($capacity, true), gettype($capacity)), __LINE__);
        }
        $this->Capacity = $capacity;
        
        return $this;
    }
    /**
     * Get Score value
     * @return float|null
     */
    public function getScore(): ?float
    {
        return $this->Score;
    }
    /**
     * Set Score value
     * @param float $score
     * @return \StructType\EwsMeetingLocationItemType
     */
    public function setScore(?float $score = null): self
    {
        // validation for constraint: float
        if (!is_null($score) && !(is_float($score) || is_numeric($score))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($score, true), gettype($score)), __LINE__);
        }
        $this->Score = $score;
        
        return $this;
    }
}
