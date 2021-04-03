<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MasterMailboxType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsMasterMailboxType extends AbstractStructBase
{
    /**
     * The MailboxType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $MailboxType;
    /**
     * The Alias
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Alias = null;
    /**
     * The DisplayName
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DisplayName = null;
    /**
     * The SmtpAddress
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $SmtpAddress = null;
    /**
     * The GroupType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $GroupType = null;
    /**
     * The Description
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Description = null;
    /**
     * The Photo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Photo = null;
    /**
     * The SharePointUrl
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $SharePointUrl = null;
    /**
     * The InboxUrl
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $InboxUrl = null;
    /**
     * The CalendarUrl
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CalendarUrl = null;
    /**
     * The DomainController
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DomainController = null;
    /**
     * Constructor method for MasterMailboxType
     * @uses EwsMasterMailboxType::setMailboxType()
     * @uses EwsMasterMailboxType::setAlias()
     * @uses EwsMasterMailboxType::setDisplayName()
     * @uses EwsMasterMailboxType::setSmtpAddress()
     * @uses EwsMasterMailboxType::setGroupType()
     * @uses EwsMasterMailboxType::setDescription()
     * @uses EwsMasterMailboxType::setPhoto()
     * @uses EwsMasterMailboxType::setSharePointUrl()
     * @uses EwsMasterMailboxType::setInboxUrl()
     * @uses EwsMasterMailboxType::setCalendarUrl()
     * @uses EwsMasterMailboxType::setDomainController()
     * @param string $mailboxType
     * @param string $alias
     * @param string $displayName
     * @param string $smtpAddress
     * @param string $groupType
     * @param string $description
     * @param string $photo
     * @param string $sharePointUrl
     * @param string $inboxUrl
     * @param string $calendarUrl
     * @param string $domainController
     */
    public function __construct(string $mailboxType, ?string $alias = null, ?string $displayName = null, ?string $smtpAddress = null, ?string $groupType = null, ?string $description = null, ?string $photo = null, ?string $sharePointUrl = null, ?string $inboxUrl = null, ?string $calendarUrl = null, ?string $domainController = null)
    {
        $this
            ->setMailboxType($mailboxType)
            ->setAlias($alias)
            ->setDisplayName($displayName)
            ->setSmtpAddress($smtpAddress)
            ->setGroupType($groupType)
            ->setDescription($description)
            ->setPhoto($photo)
            ->setSharePointUrl($sharePointUrl)
            ->setInboxUrl($inboxUrl)
            ->setCalendarUrl($calendarUrl)
            ->setDomainController($domainController);
    }
    /**
     * Get MailboxType value
     * @return string
     */
    public function getMailboxType(): string
    {
        return $this->MailboxType;
    }
    /**
     * Set MailboxType value
     * @param string $mailboxType
     * @return \StructType\EwsMasterMailboxType
     */
    public function setMailboxType(string $mailboxType): self
    {
        // validation for constraint: string
        if (!is_null($mailboxType) && !is_string($mailboxType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mailboxType, true), gettype($mailboxType)), __LINE__);
        }
        $this->MailboxType = $mailboxType;
        
        return $this;
    }
    /**
     * Get Alias value
     * @return string|null
     */
    public function getAlias(): ?string
    {
        return $this->Alias;
    }
    /**
     * Set Alias value
     * @param string $alias
     * @return \StructType\EwsMasterMailboxType
     */
    public function setAlias(?string $alias = null): self
    {
        // validation for constraint: string
        if (!is_null($alias) && !is_string($alias)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($alias, true), gettype($alias)), __LINE__);
        }
        $this->Alias = $alias;
        
        return $this;
    }
    /**
     * Get DisplayName value
     * @return string|null
     */
    public function getDisplayName(): ?string
    {
        return $this->DisplayName;
    }
    /**
     * Set DisplayName value
     * @param string $displayName
     * @return \StructType\EwsMasterMailboxType
     */
    public function setDisplayName(?string $displayName = null): self
    {
        // validation for constraint: string
        if (!is_null($displayName) && !is_string($displayName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($displayName, true), gettype($displayName)), __LINE__);
        }
        $this->DisplayName = $displayName;
        
        return $this;
    }
    /**
     * Get SmtpAddress value
     * @return string|null
     */
    public function getSmtpAddress(): ?string
    {
        return $this->SmtpAddress;
    }
    /**
     * Set SmtpAddress value
     * @param string $smtpAddress
     * @return \StructType\EwsMasterMailboxType
     */
    public function setSmtpAddress(?string $smtpAddress = null): self
    {
        // validation for constraint: string
        if (!is_null($smtpAddress) && !is_string($smtpAddress)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($smtpAddress, true), gettype($smtpAddress)), __LINE__);
        }
        $this->SmtpAddress = $smtpAddress;
        
        return $this;
    }
    /**
     * Get GroupType value
     * @return string|null
     */
    public function getGroupType(): ?string
    {
        return $this->GroupType;
    }
    /**
     * Set GroupType value
     * @uses \EnumType\EwsModernGroupTypeType::valueIsValid()
     * @uses \EnumType\EwsModernGroupTypeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $groupType
     * @return \StructType\EwsMasterMailboxType
     */
    public function setGroupType(?string $groupType = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsModernGroupTypeType::valueIsValid($groupType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsModernGroupTypeType', is_array($groupType) ? implode(', ', $groupType) : var_export($groupType, true), implode(', ', \EnumType\EwsModernGroupTypeType::getValidValues())), __LINE__);
        }
        $this->GroupType = $groupType;
        
        return $this;
    }
    /**
     * Get Description value
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \StructType\EwsMasterMailboxType
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->Description = $description;
        
        return $this;
    }
    /**
     * Get Photo value
     * @return string|null
     */
    public function getPhoto(): ?string
    {
        return $this->Photo;
    }
    /**
     * Set Photo value
     * @param string $photo
     * @return \StructType\EwsMasterMailboxType
     */
    public function setPhoto(?string $photo = null): self
    {
        // validation for constraint: string
        if (!is_null($photo) && !is_string($photo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($photo, true), gettype($photo)), __LINE__);
        }
        $this->Photo = $photo;
        
        return $this;
    }
    /**
     * Get SharePointUrl value
     * @return string|null
     */
    public function getSharePointUrl(): ?string
    {
        return $this->SharePointUrl;
    }
    /**
     * Set SharePointUrl value
     * @param string $sharePointUrl
     * @return \StructType\EwsMasterMailboxType
     */
    public function setSharePointUrl(?string $sharePointUrl = null): self
    {
        // validation for constraint: string
        if (!is_null($sharePointUrl) && !is_string($sharePointUrl)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sharePointUrl, true), gettype($sharePointUrl)), __LINE__);
        }
        $this->SharePointUrl = $sharePointUrl;
        
        return $this;
    }
    /**
     * Get InboxUrl value
     * @return string|null
     */
    public function getInboxUrl(): ?string
    {
        return $this->InboxUrl;
    }
    /**
     * Set InboxUrl value
     * @param string $inboxUrl
     * @return \StructType\EwsMasterMailboxType
     */
    public function setInboxUrl(?string $inboxUrl = null): self
    {
        // validation for constraint: string
        if (!is_null($inboxUrl) && !is_string($inboxUrl)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($inboxUrl, true), gettype($inboxUrl)), __LINE__);
        }
        $this->InboxUrl = $inboxUrl;
        
        return $this;
    }
    /**
     * Get CalendarUrl value
     * @return string|null
     */
    public function getCalendarUrl(): ?string
    {
        return $this->CalendarUrl;
    }
    /**
     * Set CalendarUrl value
     * @param string $calendarUrl
     * @return \StructType\EwsMasterMailboxType
     */
    public function setCalendarUrl(?string $calendarUrl = null): self
    {
        // validation for constraint: string
        if (!is_null($calendarUrl) && !is_string($calendarUrl)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($calendarUrl, true), gettype($calendarUrl)), __LINE__);
        }
        $this->CalendarUrl = $calendarUrl;
        
        return $this;
    }
    /**
     * Get DomainController value
     * @return string|null
     */
    public function getDomainController(): ?string
    {
        return $this->DomainController;
    }
    /**
     * Set DomainController value
     * @param string $domainController
     * @return \StructType\EwsMasterMailboxType
     */
    public function setDomainController(?string $domainController = null): self
    {
        // validation for constraint: string
        if (!is_null($domainController) && !is_string($domainController)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($domainController, true), gettype($domainController)), __LINE__);
        }
        $this->DomainController = $domainController;
        
        return $this;
    }
}
