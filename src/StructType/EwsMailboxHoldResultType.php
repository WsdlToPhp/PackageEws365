<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MailboxHoldResultType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Mailbox hold result.
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsMailboxHoldResultType extends AbstractStructBase
{
    /**
     * The HoldId
     * @var string
     */
    public $HoldId;
    /**
     * The Query
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Query;
    /**
     * The MailboxHoldStatuses
     * Meta informations extracted from the WSDL
     * - documentation: Array of mailbox hold status.
     * @var \Ews\ArrayType\EwsArrayOfMailboxHoldStatusType
     */
    public $MailboxHoldStatuses;
    /**
     * Constructor method for MailboxHoldResultType
     * @uses EwsMailboxHoldResultType::setHoldId()
     * @uses EwsMailboxHoldResultType::setQuery()
     * @uses EwsMailboxHoldResultType::setMailboxHoldStatuses()
     * @param string $holdId
     * @param string $query
     * @param \Ews\ArrayType\EwsArrayOfMailboxHoldStatusType $mailboxHoldStatuses
     */
    public function __construct($holdId = null, $query = null, \Ews\ArrayType\EwsArrayOfMailboxHoldStatusType $mailboxHoldStatuses = null)
    {
        $this
            ->setHoldId($holdId)
            ->setQuery($query)
            ->setMailboxHoldStatuses($mailboxHoldStatuses);
    }
    /**
     * Get HoldId value
     * @return string|null
     */
    public function getHoldId()
    {
        return $this->HoldId;
    }
    /**
     * Set HoldId value
     * @param string $holdId
     * @return \Ews\StructType\EwsMailboxHoldResultType
     */
    public function setHoldId($holdId = null)
    {
        $this->HoldId = $holdId;
        return $this;
    }
    /**
     * Get Query value
     * @return string|null
     */
    public function getQuery()
    {
        return $this->Query;
    }
    /**
     * Set Query value
     * @param string $query
     * @return \Ews\StructType\EwsMailboxHoldResultType
     */
    public function setQuery($query = null)
    {
        $this->Query = $query;
        return $this;
    }
    /**
     * Get MailboxHoldStatuses value
     * @return \Ews\ArrayType\EwsArrayOfMailboxHoldStatusType|null
     */
    public function getMailboxHoldStatuses()
    {
        return $this->MailboxHoldStatuses;
    }
    /**
     * Set MailboxHoldStatuses value
     * @param \Ews\ArrayType\EwsArrayOfMailboxHoldStatusType $mailboxHoldStatuses
     * @return \Ews\StructType\EwsMailboxHoldResultType
     */
    public function setMailboxHoldStatuses(\Ews\ArrayType\EwsArrayOfMailboxHoldStatusType $mailboxHoldStatuses = null)
    {
        $this->MailboxHoldStatuses = $mailboxHoldStatuses;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsMailboxHoldResultType
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
