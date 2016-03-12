<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetHoldOnMailboxesResponseMessageType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Response message type for the SetHoldOnMailboxes web method.
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsSetHoldOnMailboxesResponseMessageType extends EwsResponseMessageType
{
    /**
     * The MailboxHoldResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsMailboxHoldResultType
     */
    public $MailboxHoldResult;
    /**
     * Constructor method for SetHoldOnMailboxesResponseMessageType
     * @uses EwsSetHoldOnMailboxesResponseMessageType::setMailboxHoldResult()
     * @param \Ews\StructType\EwsMailboxHoldResultType $mailboxHoldResult
     */
    public function __construct(\Ews\StructType\EwsMailboxHoldResultType $mailboxHoldResult = null)
    {
        $this
            ->setMailboxHoldResult($mailboxHoldResult);
    }
    /**
     * Get MailboxHoldResult value
     * @return \Ews\StructType\EwsMailboxHoldResultType|null
     */
    public function getMailboxHoldResult()
    {
        return $this->MailboxHoldResult;
    }
    /**
     * Set MailboxHoldResult value
     * @param \Ews\StructType\EwsMailboxHoldResultType $mailboxHoldResult
     * @return \Ews\StructType\EwsSetHoldOnMailboxesResponseMessageType
     */
    public function setMailboxHoldResult(\Ews\StructType\EwsMailboxHoldResultType $mailboxHoldResult = null)
    {
        $this->MailboxHoldResult = $mailboxHoldResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsSetHoldOnMailboxesResponseMessageType
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
