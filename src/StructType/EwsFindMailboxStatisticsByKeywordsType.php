<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FindMailboxStatisticsByKeywordsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Request type for the FindMailboxStatisticsByKeywords web method.
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsFindMailboxStatisticsByKeywordsType extends EwsBaseRequestType
{
    /**
     * The Mailboxes
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var \Ews\ArrayType\EwsArrayOfUserMailboxesType
     */
    public $Mailboxes;
    /**
     * The Keywords
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var \Ews\ArrayType\EwsArrayOfStringsType
     */
    public $Keywords;
    /**
     * The Language
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Language;
    /**
     * The Senders
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfSmtpAddressType
     */
    public $Senders;
    /**
     * The Recipients
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfSmtpAddressType
     */
    public $Recipients;
    /**
     * The FromDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $FromDate;
    /**
     * The ToDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ToDate;
    /**
     * The MessageTypes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfSearchItemKindsType
     */
    public $MessageTypes;
    /**
     * The SearchDumpster
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $SearchDumpster;
    /**
     * The IncludePersonalArchive
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IncludePersonalArchive;
    /**
     * The IncludeUnsearchableItems
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IncludeUnsearchableItems;
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
     * @param \Ews\ArrayType\EwsArrayOfUserMailboxesType $mailboxes
     * @param \Ews\ArrayType\EwsArrayOfStringsType $keywords
     * @param string $language
     * @param \Ews\ArrayType\EwsArrayOfSmtpAddressType $senders
     * @param \Ews\ArrayType\EwsArrayOfSmtpAddressType $recipients
     * @param string $fromDate
     * @param string $toDate
     * @param \Ews\ArrayType\EwsArrayOfSearchItemKindsType $messageTypes
     * @param bool $searchDumpster
     * @param bool $includePersonalArchive
     * @param bool $includeUnsearchableItems
     */
    public function __construct(\Ews\ArrayType\EwsArrayOfUserMailboxesType $mailboxes = null, \Ews\ArrayType\EwsArrayOfStringsType $keywords = null, $language = null, \Ews\ArrayType\EwsArrayOfSmtpAddressType $senders = null, \Ews\ArrayType\EwsArrayOfSmtpAddressType $recipients = null, $fromDate = null, $toDate = null, \Ews\ArrayType\EwsArrayOfSearchItemKindsType $messageTypes = null, $searchDumpster = null, $includePersonalArchive = null, $includeUnsearchableItems = null)
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
     * @return \Ews\ArrayType\EwsArrayOfUserMailboxesType
     */
    public function getMailboxes()
    {
        return $this->Mailboxes;
    }
    /**
     * Set Mailboxes value
     * @param \Ews\ArrayType\EwsArrayOfUserMailboxesType $mailboxes
     * @return \Ews\StructType\EwsFindMailboxStatisticsByKeywordsType
     */
    public function setMailboxes(\Ews\ArrayType\EwsArrayOfUserMailboxesType $mailboxes = null)
    {
        $this->Mailboxes = $mailboxes;
        return $this;
    }
    /**
     * Get Keywords value
     * @return \Ews\ArrayType\EwsArrayOfStringsType
     */
    public function getKeywords()
    {
        return $this->Keywords;
    }
    /**
     * Set Keywords value
     * @param \Ews\ArrayType\EwsArrayOfStringsType $keywords
     * @return \Ews\StructType\EwsFindMailboxStatisticsByKeywordsType
     */
    public function setKeywords(\Ews\ArrayType\EwsArrayOfStringsType $keywords = null)
    {
        $this->Keywords = $keywords;
        return $this;
    }
    /**
     * Get Language value
     * @return string|null
     */
    public function getLanguage()
    {
        return $this->Language;
    }
    /**
     * Set Language value
     * @param string $language
     * @return \Ews\StructType\EwsFindMailboxStatisticsByKeywordsType
     */
    public function setLanguage($language = null)
    {
        // validation for constraint: string
        if (!is_null($language) && !is_string($language)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($language)), __LINE__);
        }
        $this->Language = $language;
        return $this;
    }
    /**
     * Get Senders value
     * @return \Ews\ArrayType\EwsArrayOfSmtpAddressType|null
     */
    public function getSenders()
    {
        return $this->Senders;
    }
    /**
     * Set Senders value
     * @param \Ews\ArrayType\EwsArrayOfSmtpAddressType $senders
     * @return \Ews\StructType\EwsFindMailboxStatisticsByKeywordsType
     */
    public function setSenders(\Ews\ArrayType\EwsArrayOfSmtpAddressType $senders = null)
    {
        $this->Senders = $senders;
        return $this;
    }
    /**
     * Get Recipients value
     * @return \Ews\ArrayType\EwsArrayOfSmtpAddressType|null
     */
    public function getRecipients()
    {
        return $this->Recipients;
    }
    /**
     * Set Recipients value
     * @param \Ews\ArrayType\EwsArrayOfSmtpAddressType $recipients
     * @return \Ews\StructType\EwsFindMailboxStatisticsByKeywordsType
     */
    public function setRecipients(\Ews\ArrayType\EwsArrayOfSmtpAddressType $recipients = null)
    {
        $this->Recipients = $recipients;
        return $this;
    }
    /**
     * Get FromDate value
     * @return string|null
     */
    public function getFromDate()
    {
        return $this->FromDate;
    }
    /**
     * Set FromDate value
     * @param string $fromDate
     * @return \Ews\StructType\EwsFindMailboxStatisticsByKeywordsType
     */
    public function setFromDate($fromDate = null)
    {
        // validation for constraint: string
        if (!is_null($fromDate) && !is_string($fromDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fromDate)), __LINE__);
        }
        $this->FromDate = $fromDate;
        return $this;
    }
    /**
     * Get ToDate value
     * @return string|null
     */
    public function getToDate()
    {
        return $this->ToDate;
    }
    /**
     * Set ToDate value
     * @param string $toDate
     * @return \Ews\StructType\EwsFindMailboxStatisticsByKeywordsType
     */
    public function setToDate($toDate = null)
    {
        // validation for constraint: string
        if (!is_null($toDate) && !is_string($toDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($toDate)), __LINE__);
        }
        $this->ToDate = $toDate;
        return $this;
    }
    /**
     * Get MessageTypes value
     * @return \Ews\ArrayType\EwsArrayOfSearchItemKindsType|null
     */
    public function getMessageTypes()
    {
        return $this->MessageTypes;
    }
    /**
     * Set MessageTypes value
     * @param \Ews\ArrayType\EwsArrayOfSearchItemKindsType $messageTypes
     * @return \Ews\StructType\EwsFindMailboxStatisticsByKeywordsType
     */
    public function setMessageTypes(\Ews\ArrayType\EwsArrayOfSearchItemKindsType $messageTypes = null)
    {
        $this->MessageTypes = $messageTypes;
        return $this;
    }
    /**
     * Get SearchDumpster value
     * @return bool|null
     */
    public function getSearchDumpster()
    {
        return $this->SearchDumpster;
    }
    /**
     * Set SearchDumpster value
     * @param bool $searchDumpster
     * @return \Ews\StructType\EwsFindMailboxStatisticsByKeywordsType
     */
    public function setSearchDumpster($searchDumpster = null)
    {
        // validation for constraint: boolean
        if (!is_null($searchDumpster) && !is_bool($searchDumpster)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($searchDumpster)), __LINE__);
        }
        $this->SearchDumpster = $searchDumpster;
        return $this;
    }
    /**
     * Get IncludePersonalArchive value
     * @return bool|null
     */
    public function getIncludePersonalArchive()
    {
        return $this->IncludePersonalArchive;
    }
    /**
     * Set IncludePersonalArchive value
     * @param bool $includePersonalArchive
     * @return \Ews\StructType\EwsFindMailboxStatisticsByKeywordsType
     */
    public function setIncludePersonalArchive($includePersonalArchive = null)
    {
        // validation for constraint: boolean
        if (!is_null($includePersonalArchive) && !is_bool($includePersonalArchive)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($includePersonalArchive)), __LINE__);
        }
        $this->IncludePersonalArchive = $includePersonalArchive;
        return $this;
    }
    /**
     * Get IncludeUnsearchableItems value
     * @return bool|null
     */
    public function getIncludeUnsearchableItems()
    {
        return $this->IncludeUnsearchableItems;
    }
    /**
     * Set IncludeUnsearchableItems value
     * @param bool $includeUnsearchableItems
     * @return \Ews\StructType\EwsFindMailboxStatisticsByKeywordsType
     */
    public function setIncludeUnsearchableItems($includeUnsearchableItems = null)
    {
        // validation for constraint: boolean
        if (!is_null($includeUnsearchableItems) && !is_bool($includeUnsearchableItems)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($includeUnsearchableItems)), __LINE__);
        }
        $this->IncludeUnsearchableItems = $includeUnsearchableItems;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsFindMailboxStatisticsByKeywordsType
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
