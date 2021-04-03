<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \StructType\EwsUnifiedGroupIdentity|null
     */
    protected ?\StructType\EwsUnifiedGroupIdentity $GroupIdentity = null;
    /**
     * The ErrorCode
     * Meta information extracted from the WSDL
     * - ref: t:ErrorCode
     * @var string|null
     */
    protected ?string $ErrorCode = null;
    /**
     * The LegacyDN
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $LegacyDN = null;
    /**
     * The MailboxDatabase
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $MailboxDatabase = null;
    /**
     * Constructor method for CreateUnifiedGroupResponseMessageType
     * @uses EwsCreateUnifiedGroupResponseMessageType::setGroupIdentity()
     * @uses EwsCreateUnifiedGroupResponseMessageType::setErrorCode()
     * @uses EwsCreateUnifiedGroupResponseMessageType::setLegacyDN()
     * @uses EwsCreateUnifiedGroupResponseMessageType::setMailboxDatabase()
     * @param \StructType\EwsUnifiedGroupIdentity $groupIdentity
     * @param string $errorCode
     * @param string $legacyDN
     * @param string $mailboxDatabase
     */
    public function __construct(?\StructType\EwsUnifiedGroupIdentity $groupIdentity = null, ?string $errorCode = null, ?string $legacyDN = null, ?string $mailboxDatabase = null)
    {
        $this
            ->setGroupIdentity($groupIdentity)
            ->setErrorCode($errorCode)
            ->setLegacyDN($legacyDN)
            ->setMailboxDatabase($mailboxDatabase);
    }
    /**
     * Get GroupIdentity value
     * @return \StructType\EwsUnifiedGroupIdentity|null
     */
    public function getGroupIdentity(): ?\StructType\EwsUnifiedGroupIdentity
    {
        return $this->GroupIdentity;
    }
    /**
     * Set GroupIdentity value
     * @param \StructType\EwsUnifiedGroupIdentity $groupIdentity
     * @return \StructType\EwsCreateUnifiedGroupResponseMessageType
     */
    public function setGroupIdentity(?\StructType\EwsUnifiedGroupIdentity $groupIdentity = null): self
    {
        $this->GroupIdentity = $groupIdentity;
        
        return $this;
    }
    /**
     * Get ErrorCode value
     * @return string|null
     */
    public function getErrorCode(): ?string
    {
        return $this->ErrorCode;
    }
    /**
     * Set ErrorCode value
     * @uses \EnumType\EwsUnifiedGroupCreationErrorType::valueIsValid()
     * @uses \EnumType\EwsUnifiedGroupCreationErrorType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $errorCode
     * @return \StructType\EwsCreateUnifiedGroupResponseMessageType
     */
    public function setErrorCode(?string $errorCode = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsUnifiedGroupCreationErrorType::valueIsValid($errorCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsUnifiedGroupCreationErrorType', is_array($errorCode) ? implode(', ', $errorCode) : var_export($errorCode, true), implode(', ', \EnumType\EwsUnifiedGroupCreationErrorType::getValidValues())), __LINE__);
        }
        $this->ErrorCode = $errorCode;
        
        return $this;
    }
    /**
     * Get LegacyDN value
     * @return string|null
     */
    public function getLegacyDN(): ?string
    {
        return $this->LegacyDN;
    }
    /**
     * Set LegacyDN value
     * @param string $legacyDN
     * @return \StructType\EwsCreateUnifiedGroupResponseMessageType
     */
    public function setLegacyDN(?string $legacyDN = null): self
    {
        // validation for constraint: string
        if (!is_null($legacyDN) && !is_string($legacyDN)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($legacyDN, true), gettype($legacyDN)), __LINE__);
        }
        $this->LegacyDN = $legacyDN;
        
        return $this;
    }
    /**
     * Get MailboxDatabase value
     * @return string|null
     */
    public function getMailboxDatabase(): ?string
    {
        return $this->MailboxDatabase;
    }
    /**
     * Set MailboxDatabase value
     * @param string $mailboxDatabase
     * @return \StructType\EwsCreateUnifiedGroupResponseMessageType
     */
    public function setMailboxDatabase(?string $mailboxDatabase = null): self
    {
        // validation for constraint: string
        if (!is_null($mailboxDatabase) && !is_string($mailboxDatabase)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mailboxDatabase, true), gettype($mailboxDatabase)), __LINE__);
        }
        $this->MailboxDatabase = $mailboxDatabase;
        
        return $this;
    }
}
