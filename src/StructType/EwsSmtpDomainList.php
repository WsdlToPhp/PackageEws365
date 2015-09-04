<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SmtpDomainList StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsSmtpDomainList extends AbstractStructBase
{
    /**
     * The Domain
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Ews\StructType\EwsSmtpDomain
     */
    public $Domain;
    /**
     * Constructor method for SmtpDomainList
     * @uses EwsSmtpDomainList::setDomain()
     * @param \Ews\StructType\EwsSmtpDomain $domain
     */
    public function __construct(\Ews\StructType\EwsSmtpDomain $domain = null)
    {
        $this
            ->setDomain($domain);
    }
    /**
     * Get Domain value
     * @return \Ews\StructType\EwsSmtpDomain|null
     */
    public function getDomain()
    {
        return $this->Domain;
    }
    /**
     * Set Domain value
     * @param \Ews\StructType\EwsSmtpDomain $domain
     * @return \Ews\StructType\EwsSmtpDomainList
     */
    public function setDomain(\Ews\StructType\EwsSmtpDomain $domain = null)
    {
        $this->Domain = $domain;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsSmtpDomainList
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
