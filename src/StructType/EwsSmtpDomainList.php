<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SmtpDomainList StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsSmtpDomainList extends AbstractStructBase
{
    /**
     * The Domain
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Ews\StructType\EwsSmtpDomain[]
     */
    public $Domain;
    /**
     * Constructor method for SmtpDomainList
     * @uses EwsSmtpDomainList::setDomain()
     * @param \Ews\StructType\EwsSmtpDomain[] $domain
     */
    public function __construct(array $domain = array())
    {
        $this
            ->setDomain($domain);
    }
    /**
     * Get Domain value
     * @return \Ews\StructType\EwsSmtpDomain[]|null
     */
    public function getDomain()
    {
        return $this->Domain;
    }
    /**
     * Set Domain value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsSmtpDomain[] $domain
     * @return \Ews\StructType\EwsSmtpDomainList
     */
    public function setDomain(array $domain = array())
    {
        foreach ($domain as $smtpDomainListDomainItem) {
            // validation for constraint: itemType
            if (!$smtpDomainListDomainItem instanceof \Ews\StructType\EwsSmtpDomain) {
                throw new \InvalidArgumentException(sprintf('The Domain property can only contain items of \Ews\StructType\EwsSmtpDomain, "%s" given', is_object($smtpDomainListDomainItem) ? get_class($smtpDomainListDomainItem) : gettype($smtpDomainListDomainItem)), __LINE__);
            }
        }
        $this->Domain = $domain;
        return $this;
    }
    /**
     * Add item to Domain value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsSmtpDomain $item
     * @return \Ews\StructType\EwsSmtpDomainList
     */
    public function addToDomain(\Ews\StructType\EwsSmtpDomain $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsSmtpDomain) {
            throw new \InvalidArgumentException(sprintf('The Domain property can only contain items of \Ews\StructType\EwsSmtpDomain, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Domain[] = $item;
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
