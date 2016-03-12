<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MailboxSearchScopeType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Set of mailbox, search scope and its extended attributes.
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsMailboxSearchScopeType extends AbstractStructBase
{
    /**
     * The Mailbox
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $Mailbox;
    /**
     * The SearchScope
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $SearchScope;
    /**
     * The ExtendedAttributes
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - nillable: false
     * @var \Ews\ArrayType\EwsArrayOfExtendedAttributesType
     */
    public $ExtendedAttributes;
    /**
     * Constructor method for MailboxSearchScopeType
     * @uses EwsMailboxSearchScopeType::setMailbox()
     * @uses EwsMailboxSearchScopeType::setSearchScope()
     * @uses EwsMailboxSearchScopeType::setExtendedAttributes()
     * @param string $mailbox
     * @param string $searchScope
     * @param \Ews\ArrayType\EwsArrayOfExtendedAttributesType $extendedAttributes
     */
    public function __construct($mailbox = null, $searchScope = null, \Ews\ArrayType\EwsArrayOfExtendedAttributesType $extendedAttributes = null)
    {
        $this
            ->setMailbox($mailbox)
            ->setSearchScope($searchScope)
            ->setExtendedAttributes($extendedAttributes);
    }
    /**
     * Get Mailbox value
     * @return string
     */
    public function getMailbox()
    {
        return $this->Mailbox;
    }
    /**
     * Set Mailbox value
     * @param string $mailbox
     * @return \Ews\StructType\EwsMailboxSearchScopeType
     */
    public function setMailbox($mailbox = null)
    {
        // validation for constraint: string
        if (!is_null($mailbox) && !is_string($mailbox)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($mailbox)), __LINE__);
        }
        $this->Mailbox = $mailbox;
        return $this;
    }
    /**
     * Get SearchScope value
     * @return string
     */
    public function getSearchScope()
    {
        return $this->SearchScope;
    }
    /**
     * Set SearchScope value
     * @uses \Ews\EnumType\EwsMailboxSearchLocationType::valueIsValid()
     * @uses \Ews\EnumType\EwsMailboxSearchLocationType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $searchScope
     * @return \Ews\StructType\EwsMailboxSearchScopeType
     */
    public function setSearchScope($searchScope = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsMailboxSearchLocationType::valueIsValid($searchScope)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $searchScope, implode(', ', \Ews\EnumType\EwsMailboxSearchLocationType::getValidValues())), __LINE__);
        }
        $this->SearchScope = $searchScope;
        return $this;
    }
    /**
     * Get ExtendedAttributes value
     * @return \Ews\ArrayType\EwsArrayOfExtendedAttributesType|null
     */
    public function getExtendedAttributes()
    {
        return $this->ExtendedAttributes;
    }
    /**
     * Set ExtendedAttributes value
     * @param \Ews\ArrayType\EwsArrayOfExtendedAttributesType $extendedAttributes
     * @return \Ews\StructType\EwsMailboxSearchScopeType
     */
    public function setExtendedAttributes(\Ews\ArrayType\EwsArrayOfExtendedAttributesType $extendedAttributes = null)
    {
        $this->ExtendedAttributes = $extendedAttributes;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsMailboxSearchScopeType
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
