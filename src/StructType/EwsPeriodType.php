<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PeriodType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsPeriodType extends AbstractStructBase
{
    /**
     * The Bias
     * @var string|null
     */
    protected ?string $Bias = null;
    /**
     * The Name
     * @var string|null
     */
    protected ?string $Name = null;
    /**
     * The Id
     * @var string|null
     */
    protected ?string $Id = null;
    /**
     * Constructor method for PeriodType
     * @uses EwsPeriodType::setBias()
     * @uses EwsPeriodType::setName()
     * @uses EwsPeriodType::setId()
     * @param string $bias
     * @param string $name
     * @param string $id
     */
    public function __construct(?string $bias = null, ?string $name = null, ?string $id = null)
    {
        $this
            ->setBias($bias)
            ->setName($name)
            ->setId($id);
    }
    /**
     * Get Bias value
     * @return string|null
     */
    public function getBias(): ?string
    {
        return $this->Bias;
    }
    /**
     * Set Bias value
     * @param string $bias
     * @return \StructType\EwsPeriodType
     */
    public function setBias(?string $bias = null): self
    {
        // validation for constraint: string
        if (!is_null($bias) && !is_string($bias)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bias, true), gettype($bias)), __LINE__);
        }
        $this->Bias = $bias;
        
        return $this;
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
     * @return \StructType\EwsPeriodType
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
     * Get Id value
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->Id;
    }
    /**
     * Set Id value
     * @param string $id
     * @return \StructType\EwsPeriodType
     */
    public function setId(?string $id = null): self
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->Id = $id;
        
        return $this;
    }
}
