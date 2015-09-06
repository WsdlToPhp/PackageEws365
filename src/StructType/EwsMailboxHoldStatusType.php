<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MailboxHoldStatusType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Mailbox hold status.
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsMailboxHoldStatusType extends AbstractStructBase
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
     * The Status
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $Status;
    /**
     * The AdditionalInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $AdditionalInfo;
    /**
     * Constructor method for MailboxHoldStatusType
     * @uses EwsMailboxHoldStatusType::setMailbox()
     * @uses EwsMailboxHoldStatusType::setStatus()
     * @uses EwsMailboxHoldStatusType::setAdditionalInfo()
     * @param string $mailbox
     * @param string $status
     * @param string $additionalInfo
     */
    public function __construct($mailbox = null, $status = null, $additionalInfo = null)
    {
        $this
            ->setMailbox($mailbox)
            ->setStatus($status)
            ->setAdditionalInfo($additionalInfo);
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
     * @return \Ews\StructType\EwsMailboxHoldStatusType
     */
    public function setMailbox($mailbox = null)
    {
        $this->Mailbox = $mailbox;
        return $this;
    }
    /**
     * Get Status value
     * @return string
     */
    public function getStatus()
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @uses \Ews\EnumType\EwsHoldStatusType::valueIsValid()
     * @uses \Ews\EnumType\EwsHoldStatusType::getValidValues()
     * @param string $status
     * @return \Ews\StructType\EwsMailboxHoldStatusType
     */
    public function setStatus($status = null)
    {
        if (!\Ews\EnumType\EwsHoldStatusType::valueIsValid($status)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $status, implode(', ', \Ews\EnumType\EwsHoldStatusType::getValidValues())), __LINE__);
        }
        $this->Status = $status;
        return $this;
    }
    /**
     * Get AdditionalInfo value
     * @return string|null
     */
    public function getAdditionalInfo()
    {
        return $this->AdditionalInfo;
    }
    /**
     * Set AdditionalInfo value
     * @param string $additionalInfo
     * @return \Ews\StructType\EwsMailboxHoldStatusType
     */
    public function setAdditionalInfo($additionalInfo = null)
    {
        $this->AdditionalInfo = $additionalInfo;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsMailboxHoldStatusType
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
