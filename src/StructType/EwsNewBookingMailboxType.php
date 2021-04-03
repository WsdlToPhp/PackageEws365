<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NewBookingMailboxType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsNewBookingMailboxType extends EwsBaseRequestType
{
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $Name;
    /**
     * The DisplayName
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DisplayName = null;
    /**
     * The Alias
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Alias = null;
    /**
     * The Culture
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Culture = null;
    /**
     * The TimeZone
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $TimeZone = null;
    /**
     * The ReplyToAddress
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ReplyToAddress = null;
    /**
     * The BookingServiceName
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $BookingServiceName = null;
    /**
     * Constructor method for NewBookingMailboxType
     * @uses EwsNewBookingMailboxType::setName()
     * @uses EwsNewBookingMailboxType::setDisplayName()
     * @uses EwsNewBookingMailboxType::setAlias()
     * @uses EwsNewBookingMailboxType::setCulture()
     * @uses EwsNewBookingMailboxType::setTimeZone()
     * @uses EwsNewBookingMailboxType::setReplyToAddress()
     * @uses EwsNewBookingMailboxType::setBookingServiceName()
     * @param string $name
     * @param string $displayName
     * @param string $alias
     * @param string $culture
     * @param string $timeZone
     * @param string $replyToAddress
     * @param string $bookingServiceName
     */
    public function __construct(string $name, ?string $displayName = null, ?string $alias = null, ?string $culture = null, ?string $timeZone = null, ?string $replyToAddress = null, ?string $bookingServiceName = null)
    {
        $this
            ->setName($name)
            ->setDisplayName($displayName)
            ->setAlias($alias)
            ->setCulture($culture)
            ->setTimeZone($timeZone)
            ->setReplyToAddress($replyToAddress)
            ->setBookingServiceName($bookingServiceName);
    }
    /**
     * Get Name value
     * @return string
     */
    public function getName(): string
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \StructType\EwsNewBookingMailboxType
     */
    public function setName(string $name): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->Name = $name;
        
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
     * @return \StructType\EwsNewBookingMailboxType
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
     * @return \StructType\EwsNewBookingMailboxType
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
     * Get Culture value
     * @return string|null
     */
    public function getCulture(): ?string
    {
        return $this->Culture;
    }
    /**
     * Set Culture value
     * @param string $culture
     * @return \StructType\EwsNewBookingMailboxType
     */
    public function setCulture(?string $culture = null): self
    {
        // validation for constraint: string
        if (!is_null($culture) && !is_string($culture)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($culture, true), gettype($culture)), __LINE__);
        }
        $this->Culture = $culture;
        
        return $this;
    }
    /**
     * Get TimeZone value
     * @return string|null
     */
    public function getTimeZone(): ?string
    {
        return $this->TimeZone;
    }
    /**
     * Set TimeZone value
     * @param string $timeZone
     * @return \StructType\EwsNewBookingMailboxType
     */
    public function setTimeZone(?string $timeZone = null): self
    {
        // validation for constraint: string
        if (!is_null($timeZone) && !is_string($timeZone)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($timeZone, true), gettype($timeZone)), __LINE__);
        }
        $this->TimeZone = $timeZone;
        
        return $this;
    }
    /**
     * Get ReplyToAddress value
     * @return string|null
     */
    public function getReplyToAddress(): ?string
    {
        return $this->ReplyToAddress;
    }
    /**
     * Set ReplyToAddress value
     * @param string $replyToAddress
     * @return \StructType\EwsNewBookingMailboxType
     */
    public function setReplyToAddress(?string $replyToAddress = null): self
    {
        // validation for constraint: string
        if (!is_null($replyToAddress) && !is_string($replyToAddress)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($replyToAddress, true), gettype($replyToAddress)), __LINE__);
        }
        $this->ReplyToAddress = $replyToAddress;
        
        return $this;
    }
    /**
     * Get BookingServiceName value
     * @return string|null
     */
    public function getBookingServiceName(): ?string
    {
        return $this->BookingServiceName;
    }
    /**
     * Set BookingServiceName value
     * @param string $bookingServiceName
     * @return \StructType\EwsNewBookingMailboxType
     */
    public function setBookingServiceName(?string $bookingServiceName = null): self
    {
        // validation for constraint: string
        if (!is_null($bookingServiceName) && !is_string($bookingServiceName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bookingServiceName, true), gettype($bookingServiceName)), __LINE__);
        }
        $this->BookingServiceName = $bookingServiceName;
        
        return $this;
    }
}
