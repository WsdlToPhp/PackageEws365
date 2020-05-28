<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateUnifiedGroupResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsCreateUnifiedGroupResponseMessageType extends EwsResponseMessageType
{
    /**
     * The GroupIdentity
     * Meta information extracted from the WSDL
     * - ref: t:GroupIdentity
     * @var \Ews\StructType\EwsUnifiedGroupIdentity
     */
    public $GroupIdentity;
    /**
     * The ErrorCode
     * Meta information extracted from the WSDL
     * - ref: t:ErrorCode
     * @var string
     */
    public $ErrorCode;
    /**
     * The LegacyDN
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $LegacyDN;
    /**
     * The MailboxDatabase
     * Meta information extracted from the WSDL
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
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsUnifiedGroupCreationErrorType', is_array($errorCode) ? implode(', ', $errorCode) : var_export($errorCode, true), implode(', ', \Ews\EnumType\EwsUnifiedGroupCreationErrorType::getValidValues())), __LINE__);
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
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($legacyDN, true), gettype($legacyDN)), __LINE__);
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
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mailboxDatabase, true), gettype($mailboxDatabase)), __LINE__);
        }
        $this->MailboxDatabase = $mailboxDatabase;
        return $this;
    }
}
