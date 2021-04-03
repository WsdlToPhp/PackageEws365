<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InsightContextItem StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsInsightContextItem extends AbstractStructBase
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
     * The Val
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Val = null;
    /**
     * Constructor method for InsightContextItem
     * @uses EwsInsightContextItem::setName()
     * @uses EwsInsightContextItem::setVal()
     * @param string $name
     * @param string $val
     */
    public function __construct(?string $name = null, ?string $val = null)
    {
        $this
            ->setName($name)
            ->setVal($val);
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
     * @return \StructType\EwsInsightContextItem
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
     * Get Val value
     * @return string|null
     */
    public function getVal(): ?string
    {
        return $this->Val;
    }
    /**
     * Set Val value
     * @param string $val
     * @return \StructType\EwsInsightContextItem
     */
    public function setVal(?string $val = null): self
    {
        // validation for constraint: string
        if (!is_null($val) && !is_string($val)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($val, true), gettype($val)), __LINE__);
        }
        $this->Val = $val;
        
        return $this;
    }
}
