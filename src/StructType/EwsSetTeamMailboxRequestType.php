<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetTeamMailboxRequestType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsSetTeamMailboxRequestType extends EwsBaseRequestType
{
    /**
     * The EmailAddress
     * @var \StructType\EwsEmailAddressType|null
     */
    protected ?\StructType\EwsEmailAddressType $EmailAddress = null;
    /**
     * The SharePointSiteUrl
     * @var string|null
     */
    protected ?string $SharePointSiteUrl = null;
    /**
     * The State
     * @var string|null
     */
    protected ?string $State = null;
    /**
     * Constructor method for SetTeamMailboxRequestType
     * @uses EwsSetTeamMailboxRequestType::setEmailAddress()
     * @uses EwsSetTeamMailboxRequestType::setSharePointSiteUrl()
     * @uses EwsSetTeamMailboxRequestType::setState()
     * @param \StructType\EwsEmailAddressType $emailAddress
     * @param string $sharePointSiteUrl
     * @param string $state
     */
    public function __construct(?\StructType\EwsEmailAddressType $emailAddress = null, ?string $sharePointSiteUrl = null, ?string $state = null)
    {
        $this
            ->setEmailAddress($emailAddress)
            ->setSharePointSiteUrl($sharePointSiteUrl)
            ->setState($state);
    }
    /**
     * Get EmailAddress value
     * @return \StructType\EwsEmailAddressType|null
     */
    public function getEmailAddress(): ?\StructType\EwsEmailAddressType
    {
        return $this->EmailAddress;
    }
    /**
     * Set EmailAddress value
     * @param \StructType\EwsEmailAddressType $emailAddress
     * @return \StructType\EwsSetTeamMailboxRequestType
     */
    public function setEmailAddress(?\StructType\EwsEmailAddressType $emailAddress = null): self
    {
        $this->EmailAddress = $emailAddress;
        
        return $this;
    }
    /**
     * Get SharePointSiteUrl value
     * @return string|null
     */
    public function getSharePointSiteUrl(): ?string
    {
        return $this->SharePointSiteUrl;
    }
    /**
     * Set SharePointSiteUrl value
     * @param string $sharePointSiteUrl
     * @return \StructType\EwsSetTeamMailboxRequestType
     */
    public function setSharePointSiteUrl(?string $sharePointSiteUrl = null): self
    {
        // validation for constraint: string
        if (!is_null($sharePointSiteUrl) && !is_string($sharePointSiteUrl)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sharePointSiteUrl, true), gettype($sharePointSiteUrl)), __LINE__);
        }
        $this->SharePointSiteUrl = $sharePointSiteUrl;
        
        return $this;
    }
    /**
     * Get State value
     * @return string|null
     */
    public function getState(): ?string
    {
        return $this->State;
    }
    /**
     * Set State value
     * @uses \EnumType\EwsTeamMailboxLifecycleStateType::valueIsValid()
     * @uses \EnumType\EwsTeamMailboxLifecycleStateType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $state
     * @return \StructType\EwsSetTeamMailboxRequestType
     */
    public function setState(?string $state = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsTeamMailboxLifecycleStateType::valueIsValid($state)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsTeamMailboxLifecycleStateType', is_array($state) ? implode(', ', $state) : var_export($state, true), implode(', ', \EnumType\EwsTeamMailboxLifecycleStateType::getValidValues())), __LINE__);
        }
        $this->State = $state;
        
        return $this;
    }
}
