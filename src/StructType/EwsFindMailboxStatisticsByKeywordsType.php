<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FindMailboxStatisticsByKeywordsType StructType
 * Meta information extracted from the WSDL
 * - documentation: Request type for the FindMailboxStatisticsByKeywords web method.
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsFindMailboxStatisticsByKeywordsType extends EwsBaseRequestType
{
    /**
     * The Mailboxes
     * Meta information extracted from the WSDL
     * - minOccurs: 1
     * @var \ArrayType\EwsArrayOfUserMailboxesType
     */
    protected \ArrayType\EwsArrayOfUserMailboxesType $Mailboxes;
    /**
     * The Keywords
     * Meta information extracted from the WSDL
     * - minOccurs: 1
     * @var \ArrayType\EwsArrayOfStringsType
     */
    protected \ArrayType\EwsArrayOfStringsType $Keywords;
    /**
     * The Language
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Language = null;
    /**
     * The Senders
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfSmtpAddressType|null
     */
    protected ?\ArrayType\EwsArrayOfSmtpAddressType $Senders = null;
    /**
     * The Recipients
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfSmtpAddressType|null
     */
    protected ?\ArrayType\EwsArrayOfSmtpAddressType $Recipients = null;
    /**
     * The FromDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $FromDate = null;
    /**
     * The ToDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ToDate = null;
    /**
     * The MessageTypes
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfSearchItemKindsType|null
     */
    protected ?\ArrayType\EwsArrayOfSearchItemKindsType $MessageTypes = null;
    /**
     * The SearchDumpster
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $SearchDumpster = null;
    /**
     * The IncludePersonalArchive
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IncludePersonalArchive = null;
    /**
     * The IncludeUnsearchableItems
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IncludeUnsearchableItems = null;
    /**
     * Constructor method for FindMailboxStatisticsByKeywordsType
     * @uses EwsFindMailboxStatisticsByKeywordsType::setMailboxes()
     * @uses EwsFindMailboxStatisticsByKeywordsType::setKeywords()
     * @uses EwsFindMailboxStatisticsByKeywordsType::setLanguage()
     * @uses EwsFindMailboxStatisticsByKeywordsType::setSenders()
     * @uses EwsFindMailboxStatisticsByKeywordsType::setRecipients()
     * @uses EwsFindMailboxStatisticsByKeywordsType::setFromDate()
     * @uses EwsFindMailboxStatisticsByKeywordsType::setToDate()
     * @uses EwsFindMailboxStatisticsByKeywordsType::setMessageTypes()
     * @uses EwsFindMailboxStatisticsByKeywordsType::setSearchDumpster()
     * @uses EwsFindMailboxStatisticsByKeywordsType::setIncludePersonalArchive()
     * @uses EwsFindMailboxStatisticsByKeywordsType::setIncludeUnsearchableItems()
     * @param \ArrayType\EwsArrayOfUserMailboxesType $mailboxes
     * @param \ArrayType\EwsArrayOfStringsType $keywords
     * @param string $language
     * @param \ArrayType\EwsArrayOfSmtpAddressType $senders
     * @param \ArrayType\EwsArrayOfSmtpAddressType $recipients
     * @param string $fromDate
     * @param string $toDate
     * @param \ArrayType\EwsArrayOfSearchItemKindsType $messageTypes
     * @param bool $searchDumpster
     * @param bool $includePersonalArchive
     * @param bool $includeUnsearchableItems
     */
    public function __construct(\ArrayType\EwsArrayOfUserMailboxesType $mailboxes, \ArrayType\EwsArrayOfStringsType $keywords, ?string $language = null, ?\ArrayType\EwsArrayOfSmtpAddressType $senders = null, ?\ArrayType\EwsArrayOfSmtpAddressType $recipients = null, ?string $fromDate = null, ?string $toDate = null, ?\ArrayType\EwsArrayOfSearchItemKindsType $messageTypes = null, ?bool $searchDumpster = null, ?bool $includePersonalArchive = null, ?bool $includeUnsearchableItems = null)
    {
        $this
            ->setMailboxes($mailboxes)
            ->setKeywords($keywords)
            ->setLanguage($language)
            ->setSenders($senders)
            ->setRecipients($recipients)
            ->setFromDate($fromDate)
            ->setToDate($toDate)
            ->setMessageTypes($messageTypes)
            ->setSearchDumpster($searchDumpster)
            ->setIncludePersonalArchive($includePersonalArchive)
            ->setIncludeUnsearchableItems($includeUnsearchableItems);
    }
    /**
     * Get Mailboxes value
     * @return \ArrayType\EwsArrayOfUserMailboxesType
     */
    public function getMailboxes(): \ArrayType\EwsArrayOfUserMailboxesType
    {
        return $this->Mailboxes;
    }
    /**
     * Set Mailboxes value
     * @param \ArrayType\EwsArrayOfUserMailboxesType $mailboxes
     * @return \StructType\EwsFindMailboxStatisticsByKeywordsType
     */
    public function setMailboxes(\ArrayType\EwsArrayOfUserMailboxesType $mailboxes): self
    {
        $this->Mailboxes = $mailboxes;
        
        return $this;
    }
    /**
     * Get Keywords value
     * @return \ArrayType\EwsArrayOfStringsType
     */
    public function getKeywords(): \ArrayType\EwsArrayOfStringsType
    {
        return $this->Keywords;
    }
    /**
     * Set Keywords value
     * @param \ArrayType\EwsArrayOfStringsType $keywords
     * @return \StructType\EwsFindMailboxStatisticsByKeywordsType
     */
    public function setKeywords(\ArrayType\EwsArrayOfStringsType $keywords): self
    {
        $this->Keywords = $keywords;
        
        return $this;
    }
    /**
     * Get Language value
     * @return string|null
     */
    public function getLanguage(): ?string
    {
        return $this->Language;
    }
    /**
     * Set Language value
     * @param string $language
     * @return \StructType\EwsFindMailboxStatisticsByKeywordsType
     */
    public function setLanguage(?string $language = null): self
    {
        // validation for constraint: string
        if (!is_null($language) && !is_string($language)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($language, true), gettype($language)), __LINE__);
        }
        $this->Language = $language;
        
        return $this;
    }
    /**
     * Get Senders value
     * @return \ArrayType\EwsArrayOfSmtpAddressType|null
     */
    public function getSenders(): ?\ArrayType\EwsArrayOfSmtpAddressType
    {
        return $this->Senders;
    }
    /**
     * Set Senders value
     * @param \ArrayType\EwsArrayOfSmtpAddressType $senders
     * @return \StructType\EwsFindMailboxStatisticsByKeywordsType
     */
    public function setSenders(?\ArrayType\EwsArrayOfSmtpAddressType $senders = null): self
    {
        $this->Senders = $senders;
        
        return $this;
    }
    /**
     * Get Recipients value
     * @return \ArrayType\EwsArrayOfSmtpAddressType|null
     */
    public function getRecipients(): ?\ArrayType\EwsArrayOfSmtpAddressType
    {
        return $this->Recipients;
    }
    /**
     * Set Recipients value
     * @param \ArrayType\EwsArrayOfSmtpAddressType $recipients
     * @return \StructType\EwsFindMailboxStatisticsByKeywordsType
     */
    public function setRecipients(?\ArrayType\EwsArrayOfSmtpAddressType $recipients = null): self
    {
        $this->Recipients = $recipients;
        
        return $this;
    }
    /**
     * Get FromDate value
     * @return string|null
     */
    public function getFromDate(): ?string
    {
        return $this->FromDate;
    }
    /**
     * Set FromDate value
     * @param string $fromDate
     * @return \StructType\EwsFindMailboxStatisticsByKeywordsType
     */
    public function setFromDate(?string $fromDate = null): self
    {
        // validation for constraint: string
        if (!is_null($fromDate) && !is_string($fromDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fromDate, true), gettype($fromDate)), __LINE__);
        }
        $this->FromDate = $fromDate;
        
        return $this;
    }
    /**
     * Get ToDate value
     * @return string|null
     */
    public function getToDate(): ?string
    {
        return $this->ToDate;
    }
    /**
     * Set ToDate value
     * @param string $toDate
     * @return \StructType\EwsFindMailboxStatisticsByKeywordsType
     */
    public function setToDate(?string $toDate = null): self
    {
        // validation for constraint: string
        if (!is_null($toDate) && !is_string($toDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($toDate, true), gettype($toDate)), __LINE__);
        }
        $this->ToDate = $toDate;
        
        return $this;
    }
    /**
     * Get MessageTypes value
     * @return \ArrayType\EwsArrayOfSearchItemKindsType|null
     */
    public function getMessageTypes(): ?\ArrayType\EwsArrayOfSearchItemKindsType
    {
        return $this->MessageTypes;
    }
    /**
     * Set MessageTypes value
     * @param \ArrayType\EwsArrayOfSearchItemKindsType $messageTypes
     * @return \StructType\EwsFindMailboxStatisticsByKeywordsType
     */
    public function setMessageTypes(?\ArrayType\EwsArrayOfSearchItemKindsType $messageTypes = null): self
    {
        $this->MessageTypes = $messageTypes;
        
        return $this;
    }
    /**
     * Get SearchDumpster value
     * @return bool|null
     */
    public function getSearchDumpster(): ?bool
    {
        return $this->SearchDumpster;
    }
    /**
     * Set SearchDumpster value
     * @param bool $searchDumpster
     * @return \StructType\EwsFindMailboxStatisticsByKeywordsType
     */
    public function setSearchDumpster(?bool $searchDumpster = null): self
    {
        // validation for constraint: boolean
        if (!is_null($searchDumpster) && !is_bool($searchDumpster)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($searchDumpster, true), gettype($searchDumpster)), __LINE__);
        }
        $this->SearchDumpster = $searchDumpster;
        
        return $this;
    }
    /**
     * Get IncludePersonalArchive value
     * @return bool|null
     */
    public function getIncludePersonalArchive(): ?bool
    {
        return $this->IncludePersonalArchive;
    }
    /**
     * Set IncludePersonalArchive value
     * @param bool $includePersonalArchive
     * @return \StructType\EwsFindMailboxStatisticsByKeywordsType
     */
    public function setIncludePersonalArchive(?bool $includePersonalArchive = null): self
    {
        // validation for constraint: boolean
        if (!is_null($includePersonalArchive) && !is_bool($includePersonalArchive)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($includePersonalArchive, true), gettype($includePersonalArchive)), __LINE__);
        }
        $this->IncludePersonalArchive = $includePersonalArchive;
        
        return $this;
    }
    /**
     * Get IncludeUnsearchableItems value
     * @return bool|null
     */
    public function getIncludeUnsearchableItems(): ?bool
    {
        return $this->IncludeUnsearchableItems;
    }
    /**
     * Set IncludeUnsearchableItems value
     * @param bool $includeUnsearchableItems
     * @return \StructType\EwsFindMailboxStatisticsByKeywordsType
     */
    public function setIncludeUnsearchableItems(?bool $includeUnsearchableItems = null): self
    {
        // validation for constraint: boolean
        if (!is_null($includeUnsearchableItems) && !is_bool($includeUnsearchableItems)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($includeUnsearchableItems, true), gettype($includeUnsearchableItems)), __LINE__);
        }
        $this->IncludeUnsearchableItems = $includeUnsearchableItems;
        
        return $this;
    }
}
