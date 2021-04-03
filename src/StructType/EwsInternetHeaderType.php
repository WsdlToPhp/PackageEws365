<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InternetHeaderType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsInternetHeaderType extends AbstractStructBase
{
    /**
     * The HeaderName
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $HeaderName;
    /**
     * The _
     * @var string|null
     */
    protected ?string $_ = null;
    /**
     * Constructor method for InternetHeaderType
     * @uses EwsInternetHeaderType::setHeaderName()
     * @uses EwsInternetHeaderType::set_()
     * @param string $headerName
     * @param string $_
     */
    public function __construct(string $headerName, ?string $_ = null)
    {
        $this
            ->setHeaderName($headerName)
            ->set_($_);
    }
    /**
     * Get HeaderName value
     * @return string
     */
    public function getHeaderName(): string
    {
        return $this->HeaderName;
    }
    /**
     * Set HeaderName value
     * @param string $headerName
     * @return \StructType\EwsInternetHeaderType
     */
    public function setHeaderName(string $headerName): self
    {
        // validation for constraint: string
        if (!is_null($headerName) && !is_string($headerName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($headerName, true), gettype($headerName)), __LINE__);
        }
        $this->HeaderName = $headerName;
        
        return $this;
    }
    /**
     * Get _ value
     * @return string|null
     */
    public function get_(): ?string
    {
        return $this->_;
    }
    /**
     * Set _ value
     * @param string $_
     * @return \StructType\EwsInternetHeaderType
     */
    public function set_(?string $_ = null): self
    {
        // validation for constraint: string
        if (!is_null($_) && !is_string($_)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($_, true), gettype($_)), __LINE__);
        }
        $this->_ = $_;
        
        return $this;
    }
}
