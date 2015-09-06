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
     * Meta informations extracted from the WSDL
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
        $this->_ = $_;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsInternetHeaderType
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
