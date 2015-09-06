<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MailboxQueryType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Pair of query and a set of mailbox search scopes.
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsMailboxQueryType extends AbstractStructBase
{
    /**
     * The Query
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $Query;
    /**
     * The MailboxSearchScopes
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - documentation: Array of mailbox and its search scope.
     * @var \Ews\ArrayType\EwsNonEmptyArrayOfMailboxSearchScopesType
     */
    public $MailboxSearchScopes;
    /**
     * Constructor method for MailboxQueryType
     * @uses EwsMailboxQueryType::setQuery()
     * @uses EwsMailboxQueryType::setMailboxSearchScopes()
     * @param string $query
     * @param \Ews\ArrayType\EwsNonEmptyArrayOfMailboxSearchScopesType
     * $mailboxSearchScopes
     */
    public function __construct($query = null, \Ews\ArrayType\EwsNonEmptyArrayOfMailboxSearchScopesType $mailboxSearchScopes = null)
    {
        $this
            ->setQuery($query)
            ->setMailboxSearchScopes($mailboxSearchScopes);
    }
    /**
     * Get Query value
     * @return string
     */
    public function getQuery()
    {
        return $this->Query;
    }
    /**
     * Set Query value
     * @param string $query
     * @return \Ews\StructType\EwsMailboxQueryType
     */
    public function setQuery($query = null)
    {
        $this->Query = $query;
        return $this;
    }
    /**
     * Get MailboxSearchScopes value
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfMailboxSearchScopesType
     */
    public function getMailboxSearchScopes()
    {
        return $this->MailboxSearchScopes;
    }
    /**
     * Set MailboxSearchScopes value
     * @param \Ews\ArrayType\EwsNonEmptyArrayOfMailboxSearchScopesType
     * $mailboxSearchScopes
     * @return \Ews\StructType\EwsMailboxQueryType
     */
    public function setMailboxSearchScopes(\Ews\ArrayType\EwsNonEmptyArrayOfMailboxSearchScopesType $mailboxSearchScopes = null)
    {
        $this->MailboxSearchScopes = $mailboxSearchScopes;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsMailboxQueryType
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
