<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateInboxRulesRequestType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsUpdateInboxRulesRequestType extends EwsBaseRequestType
{
    /**
     * The Operations
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Ews\StructType\EwsArrayOfRuleOperationsType
     */
    public $Operations;
    /**
     * The MailboxSmtpAddress
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $MailboxSmtpAddress;
    /**
     * The RemoveOutlookRuleBlob
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $RemoveOutlookRuleBlob;
    /**
     * Constructor method for UpdateInboxRulesRequestType
     * @uses EwsUpdateInboxRulesRequestType::setOperations()
     * @uses EwsUpdateInboxRulesRequestType::setMailboxSmtpAddress()
     * @uses EwsUpdateInboxRulesRequestType::setRemoveOutlookRuleBlob()
     * @param \Ews\StructType\EwsArrayOfRuleOperationsType $operations
     * @param string $mailboxSmtpAddress
     * @param bool $removeOutlookRuleBlob
     */
    public function __construct(\Ews\StructType\EwsArrayOfRuleOperationsType $operations = null, $mailboxSmtpAddress = null, $removeOutlookRuleBlob = null)
    {
        $this
            ->setOperations($operations)
            ->setMailboxSmtpAddress($mailboxSmtpAddress)
            ->setRemoveOutlookRuleBlob($removeOutlookRuleBlob);
    }
    /**
     * Get Operations value
     * @return \Ews\StructType\EwsArrayOfRuleOperationsType
     */
    public function getOperations()
    {
        return $this->Operations;
    }
    /**
     * Set Operations value
     * @param \Ews\StructType\EwsArrayOfRuleOperationsType $operations
     * @return \Ews\StructType\EwsUpdateInboxRulesRequestType
     */
    public function setOperations(\Ews\StructType\EwsArrayOfRuleOperationsType $operations = null)
    {
        $this->Operations = $operations;
        return $this;
    }
    /**
     * Get MailboxSmtpAddress value
     * @return string|null
     */
    public function getMailboxSmtpAddress()
    {
        return $this->MailboxSmtpAddress;
    }
    /**
     * Set MailboxSmtpAddress value
     * @param string $mailboxSmtpAddress
     * @return \Ews\StructType\EwsUpdateInboxRulesRequestType
     */
    public function setMailboxSmtpAddress($mailboxSmtpAddress = null)
    {
        // validation for constraint: string
        if (!is_null($mailboxSmtpAddress) && !is_string($mailboxSmtpAddress)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($mailboxSmtpAddress)), __LINE__);
        }
        $this->MailboxSmtpAddress = $mailboxSmtpAddress;
        return $this;
    }
    /**
     * Get RemoveOutlookRuleBlob value
     * @return bool|null
     */
    public function getRemoveOutlookRuleBlob()
    {
        return $this->RemoveOutlookRuleBlob;
    }
    /**
     * Set RemoveOutlookRuleBlob value
     * @param bool $removeOutlookRuleBlob
     * @return \Ews\StructType\EwsUpdateInboxRulesRequestType
     */
    public function setRemoveOutlookRuleBlob($removeOutlookRuleBlob = null)
    {
        // validation for constraint: boolean
        if (!is_null($removeOutlookRuleBlob) && !is_bool($removeOutlookRuleBlob)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($removeOutlookRuleBlob)), __LINE__);
        }
        $this->RemoveOutlookRuleBlob = $removeOutlookRuleBlob;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsUpdateInboxRulesRequestType
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
