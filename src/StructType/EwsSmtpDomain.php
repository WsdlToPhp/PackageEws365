<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SmtpDomain StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsSmtpDomain extends AbstractStructBase
{
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $Name;
    /**
     * The IncludeSubdomains
     * Meta information extracted from the WSDL
     * - use: optional
     * @var bool|null
     */
    protected ?bool $IncludeSubdomains = null;
    /**
     * Constructor method for SmtpDomain
     * @uses EwsSmtpDomain::setName()
     * @uses EwsSmtpDomain::setIncludeSubdomains()
     * @param string $name
     * @param bool $includeSubdomains
     */
    public function __construct(string $name, ?bool $includeSubdomains = null)
    {
        $this
            ->setName($name)
            ->setIncludeSubdomains($includeSubdomains);
    }
    /**
     * Get Name value
     * @return string
     */
    public function getName(): string
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \StructType\EwsSmtpDomain
     */
    public function setName(string $name): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->Name = $name;
        
        return $this;
    }
    /**
     * Get IncludeSubdomains value
     * @return bool|null
     */
    public function getIncludeSubdomains(): ?bool
    {
        return $this->IncludeSubdomains;
    }
    /**
     * Set IncludeSubdomains value
     * @param bool $includeSubdomains
     * @return \StructType\EwsSmtpDomain
     */
    public function setIncludeSubdomains(?bool $includeSubdomains = null): self
    {
        // validation for constraint: boolean
        if (!is_null($includeSubdomains) && !is_bool($includeSubdomains)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($includeSubdomains, true), gettype($includeSubdomains)), __LINE__);
        }
        $this->IncludeSubdomains = $includeSubdomains;
        
        return $this;
    }
}
