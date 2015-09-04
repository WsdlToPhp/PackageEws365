<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProxySecurityContextType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Allow attributes in the soap namespace to be used here
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsProxySecurityContextType extends AbstractStructBase
{
    /**
     * The _
     * @var base64Binary
     */
    public $_;
    /**
     * Constructor method for ProxySecurityContextType
     * @uses EwsProxySecurityContextType::set_()
     * @param base64Binary $_
     */
    public function __construct(base64Binary $_ = null)
    {
        $this
            ->set_($_);
    }
    /**
     * Get _ value
     * @return base64Binary|null
     */
    public function get_()
    {
        return $this->_;
    }
    /**
     * Set _ value
     * @param base64Binary $_
     * @return \Ews\StructType\EwsProxySecurityContextType
     */
    public function set_(base64Binary $_ = null)
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
     * @return \Ews\StructType\EwsProxySecurityContextType
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
