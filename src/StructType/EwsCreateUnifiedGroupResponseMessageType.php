<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateUnifiedGroupResponseMessageType StructType
 * Meta informations extracted from the WSDL
 * - ref: t:ErrorCode
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsCreateUnifiedGroupResponseMessageType extends EwsResponseMessageType
{
    /**
     * The GroupIdentity
     * @var \Ews\StructType\EwsUnifiedGroupIdentity
     */
    public $GroupIdentity;
    /**
     * The ErrorCode
     * @var string
     */
    public $ErrorCode;
    /**
     * The LegacyDN
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $LegacyDN;
    /**
     * The MailboxDatabase
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $MailboxDatabase;
    /**
     * Constructor method for CreateUnifiedGroupResponseMessageType
     * @uses EwsCreateUnifiedGroupResponseMessageType::setGroupIdentity()
     * @uses EwsCreateUnifiedGroupResponseMessageType::setErrorCode()
     * @uses EwsCreateUnifiedGroupResponseMessageType::setLegacyDN()
     * @uses EwsCreateUnifiedGroupResponseMessageType::setMailboxDatabase()
     * @param \Ews\StructType\EwsUnifiedGroupIdentity $groupIdentity
     * @param string $errorCode
     * @param string $legacyDN
     * @param string $mailboxDatabase
     */
    public function __construct(\Ews\StructType\EwsUnifiedGroupIdentity $groupIdentity = null, $errorCode = null, $legacyDN = null, $mailboxDatabase = null)
    {
        $this
            ->setGroupIdentity($groupIdentity)
            ->setErrorCode($errorCode)
            ->setLegacyDN($legacyDN)
            ->setMailboxDatabase($mailboxDatabase);
    }
    /**
     * Get GroupIdentity value
     * @return \Ews\StructType\EwsUnifiedGroupIdentity|null
     */
    public function getGroupIdentity()
    {
        return $this->GroupIdentity;
    }
    /**
     * Set GroupIdentity value
     * @param \Ews\StructType\EwsUnifiedGroupIdentity $groupIdentity
     * @return \Ews\StructType\EwsCreateUnifiedGroupResponseMessageType
     */
    public function setGroupIdentity(\Ews\StructType\EwsUnifiedGroupIdentity $groupIdentity = null)
    {
        $this->GroupIdentity = $groupIdentity;
        return $this;
    }
    /**
     * Get ErrorCode value
     * @return string|null
     */
    public function getErrorCode()
    {
        return $this->ErrorCode;
    }
    /**
     * Set ErrorCode value
     * @uses \Ews\EnumType\EwsUnifiedGroupCreationErrorType::valueIsValid()
     * @uses \Ews\EnumType\EwsUnifiedGroupCreationErrorType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $errorCode
     * @return \Ews\StructType\EwsCreateUnifiedGroupResponseMessageType
     */
    public function setErrorCode($errorCode = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsUnifiedGroupCreationErrorType::valueIsValid($errorCode)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $errorCode, implode(', ', \Ews\EnumType\EwsUnifiedGroupCreationErrorType::getValidValues())), __LINE__);
        }
        $this->ErrorCode = $errorCode;
        return $this;
    }
    /**
     * Get LegacyDN value
     * @return string|null
     */
    public function getLegacyDN()
    {
        return $this->LegacyDN;
    }
    /**
     * Set LegacyDN value
     * @param string $legacyDN
     * @return \Ews\StructType\EwsCreateUnifiedGroupResponseMessageType
     */
    public function setLegacyDN($legacyDN = null)
    {
        // validation for constraint: string
        if (!is_null($legacyDN) && !is_string($legacyDN)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($legacyDN)), __LINE__);
        }
        $this->LegacyDN = $legacyDN;
        return $this;
    }
    /**
     * Get MailboxDatabase value
     * @return string|null
     */
    public function getMailboxDatabase()
    {
        return $this->MailboxDatabase;
    }
    /**
     * Set MailboxDatabase value
     * @param string $mailboxDatabase
     * @return \Ews\StructType\EwsCreateUnifiedGroupResponseMessageType
     */
    public function setMailboxDatabase($mailboxDatabase = null)
    {
        // validation for constraint: string
        if (!is_null($mailboxDatabase) && !is_string($mailboxDatabase)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($mailboxDatabase)), __LINE__);
        }
        $this->MailboxDatabase = $mailboxDatabase;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsCreateUnifiedGroupResponseMessageType
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
