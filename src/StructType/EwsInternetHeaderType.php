<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
    public $HeaderName;
    /**
     * The _
     * @var string
     */
    public $_;
    /**
     * Constructor method for InternetHeaderType
     * @uses EwsInternetHeaderType::setHeaderName()
     * @uses EwsInternetHeaderType::set_()
     * @param string $headerName
     * @param string $_
     */
    public function __construct($headerName = null, $_ = null)
    {
        $this
            ->setHeaderName($headerName)
            ->set_($_);
    }
    /**
     * Get HeaderName value
     * @return string
     */
    public function getHeaderName()
    {
        return $this->HeaderName;
    }
    /**
     * Set HeaderName value
     * @param string $headerName
     * @return \Ews\StructType\EwsInternetHeaderType
     */
    public function setHeaderName($headerName = null)
    {
        // validation for constraint: string
        if (!is_null($headerName) && !is_string($headerName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($headerName, true), gettype($headerName)), __LINE__);
        }
        $this->HeaderName = $headerName;
        return $this;
    }
    /**
     * Get _ value
     * @return string|null
     */
    public function get_()
    {
        return $this->_;
    }
    /**
     * Set _ value
     * @param string $_
     * @return \Ews\StructType\EwsInternetHeaderType
     */
    public function set_($_ = null)
    {
        // validation for constraint: string
        if (!is_null($_) && !is_string($_)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($_, true), gettype($_)), __LINE__);
        }
        $this->_ = $_;
        return $this;
    }
}
