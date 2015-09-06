<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $Name;
    /**
     * The IncludeSubdomains
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var boolean
     */
    public $IncludeSubdomains;
    /**
     * Constructor method for SmtpDomain
     * @uses EwsSmtpDomain::setName()
     * @uses EwsSmtpDomain::setIncludeSubdomains()
     * @param string $name
     * @param boolean $includeSubdomains
     */
    public function __construct($name = null, $includeSubdomains = null)
    {
        $this
            ->setName($name)
            ->setIncludeSubdomains($includeSubdomains);
    }
    /**
     * Get Name value
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \Ews\StructType\EwsSmtpDomain
     */
    public function setName($name = null)
    {
        $this->Name = $name;
        return $this;
    }
    /**
     * Get IncludeSubdomains value
     * @return boolean|null
     */
    public function getIncludeSubdomains()
    {
        return $this->IncludeSubdomains;
    }
    /**
     * Set IncludeSubdomains value
     * @param boolean $includeSubdomains
     * @return \Ews\StructType\EwsSmtpDomain
     */
    public function setIncludeSubdomains($includeSubdomains = null)
    {
        $this->IncludeSubdomains = $includeSubdomains;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsSmtpDomain
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
