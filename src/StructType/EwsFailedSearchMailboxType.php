<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FailedSearchMailboxType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Mailbox failed on search and its error message.
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsFailedSearchMailboxType extends AbstractStructBase
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
     * The ErrorCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $ErrorCode;
    /**
     * The ErrorMessage
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $ErrorMessage;
    /**
     * The IsArchive
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $IsArchive;
    /**
     * Constructor method for FailedSearchMailboxType
     * @uses EwsFailedSearchMailboxType::setMailbox()
     * @uses EwsFailedSearchMailboxType::setErrorCode()
     * @uses EwsFailedSearchMailboxType::setErrorMessage()
     * @uses EwsFailedSearchMailboxType::setIsArchive()
     * @param string $mailbox
     * @param int $errorCode
     * @param string $errorMessage
     * @param bool $isArchive
     */
    public function __construct($mailbox = null, $errorCode = null, $errorMessage = null, $isArchive = null)
    {
        $this
            ->setMailbox($mailbox)
            ->setErrorCode($errorCode)
            ->setErrorMessage($errorMessage)
            ->setIsArchive($isArchive);
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
     * @return \Ews\StructType\EwsFailedSearchMailboxType
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
     * Get ErrorCode value
     * @return int
     */
    public function getErrorCode()
    {
        return $this->ErrorCode;
    }
    /**
     * Set ErrorCode value
     * @param int $errorCode
     * @return \Ews\StructType\EwsFailedSearchMailboxType
     */
    public function setErrorCode($errorCode = null)
    {
        // validation for constraint: int
        if (!is_null($errorCode) && !is_numeric($errorCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($errorCode)), __LINE__);
        }
        $this->ErrorCode = $errorCode;
        return $this;
    }
    /**
     * Get ErrorMessage value
     * @return string
     */
    public function getErrorMessage()
    {
        return $this->ErrorMessage;
    }
    /**
     * Set ErrorMessage value
     * @param string $errorMessage
     * @return \Ews\StructType\EwsFailedSearchMailboxType
     */
    public function setErrorMessage($errorMessage = null)
    {
        // validation for constraint: string
        if (!is_null($errorMessage) && !is_string($errorMessage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($errorMessage)), __LINE__);
        }
        $this->ErrorMessage = $errorMessage;
        return $this;
    }
    /**
     * Get IsArchive value
     * @return bool
     */
    public function getIsArchive()
    {
        return $this->IsArchive;
    }
    /**
     * Set IsArchive value
     * @param bool $isArchive
     * @return \Ews\StructType\EwsFailedSearchMailboxType
     */
    public function setIsArchive($isArchive = null)
    {
        // validation for constraint: boolean
        if (!is_null($isArchive) && !is_bool($isArchive)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isArchive)), __LINE__);
        }
        $this->IsArchive = $isArchive;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsFailedSearchMailboxType
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
