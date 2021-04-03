<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUserAvailabilityRequestType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetUserAvailabilityRequestType extends EwsBaseRequestType
{
    /**
     * The TimeZone
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: t:TimeZone
     * @var \StructType\EwsSerializableTimeZone|null
     */
    protected ?\StructType\EwsSerializableTimeZone $TimeZone = null;
    /**
     * The MailboxDataArray
     * @var \ArrayType\EwsArrayOfMailboxData|null
     */
    protected ?\ArrayType\EwsArrayOfMailboxData $MailboxDataArray = null;
    /**
     * The FreeBusyViewOptions
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: t:FreeBusyViewOptions
     * @var \StructType\EwsFreeBusyViewOptionsType|null
     */
    protected ?\StructType\EwsFreeBusyViewOptionsType $FreeBusyViewOptions = null;
    /**
     * The SuggestionsViewOptions
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: t:SuggestionsViewOptions
     * @var \StructType\EwsSuggestionsViewOptionsType|null
     */
    protected ?\StructType\EwsSuggestionsViewOptionsType $SuggestionsViewOptions = null;
    /**
     * Constructor method for GetUserAvailabilityRequestType
     * @uses EwsGetUserAvailabilityRequestType::setTimeZone()
     * @uses EwsGetUserAvailabilityRequestType::setMailboxDataArray()
     * @uses EwsGetUserAvailabilityRequestType::setFreeBusyViewOptions()
     * @uses EwsGetUserAvailabilityRequestType::setSuggestionsViewOptions()
     * @param \StructType\EwsSerializableTimeZone $timeZone
     * @param \ArrayType\EwsArrayOfMailboxData $mailboxDataArray
     * @param \StructType\EwsFreeBusyViewOptionsType $freeBusyViewOptions
     * @param \StructType\EwsSuggestionsViewOptionsType $suggestionsViewOptions
     */
    public function __construct(?\StructType\EwsSerializableTimeZone $timeZone = null, ?\ArrayType\EwsArrayOfMailboxData $mailboxDataArray = null, ?\StructType\EwsFreeBusyViewOptionsType $freeBusyViewOptions = null, ?\StructType\EwsSuggestionsViewOptionsType $suggestionsViewOptions = null)
    {
        $this
            ->setTimeZone($timeZone)
            ->setMailboxDataArray($mailboxDataArray)
            ->setFreeBusyViewOptions($freeBusyViewOptions)
            ->setSuggestionsViewOptions($suggestionsViewOptions);
    }
    /**
     * Get TimeZone value
     * @return \StructType\EwsSerializableTimeZone|null
     */
    public function getTimeZone(): ?\StructType\EwsSerializableTimeZone
    {
        return $this->TimeZone;
    }
    /**
     * Set TimeZone value
     * @param \StructType\EwsSerializableTimeZone $timeZone
     * @return \StructType\EwsGetUserAvailabilityRequestType
     */
    public function setTimeZone(?\StructType\EwsSerializableTimeZone $timeZone = null): self
    {
        $this->TimeZone = $timeZone;
        
        return $this;
    }
    /**
     * Get MailboxDataArray value
     * @return \ArrayType\EwsArrayOfMailboxData|null
     */
    public function getMailboxDataArray(): ?\ArrayType\EwsArrayOfMailboxData
    {
        return $this->MailboxDataArray;
    }
    /**
     * Set MailboxDataArray value
     * @param \ArrayType\EwsArrayOfMailboxData $mailboxDataArray
     * @return \StructType\EwsGetUserAvailabilityRequestType
     */
    public function setMailboxDataArray(?\ArrayType\EwsArrayOfMailboxData $mailboxDataArray = null): self
    {
        $this->MailboxDataArray = $mailboxDataArray;
        
        return $this;
    }
    /**
     * Get FreeBusyViewOptions value
     * @return \StructType\EwsFreeBusyViewOptionsType|null
     */
    public function getFreeBusyViewOptions(): ?\StructType\EwsFreeBusyViewOptionsType
    {
        return $this->FreeBusyViewOptions;
    }
    /**
     * Set FreeBusyViewOptions value
     * @param \StructType\EwsFreeBusyViewOptionsType $freeBusyViewOptions
     * @return \StructType\EwsGetUserAvailabilityRequestType
     */
    public function setFreeBusyViewOptions(?\StructType\EwsFreeBusyViewOptionsType $freeBusyViewOptions = null): self
    {
        $this->FreeBusyViewOptions = $freeBusyViewOptions;
        
        return $this;
    }
    /**
     * Get SuggestionsViewOptions value
     * @return \StructType\EwsSuggestionsViewOptionsType|null
     */
    public function getSuggestionsViewOptions(): ?\StructType\EwsSuggestionsViewOptionsType
    {
        return $this->SuggestionsViewOptions;
    }
    /**
     * Set SuggestionsViewOptions value
     * @param \StructType\EwsSuggestionsViewOptionsType $suggestionsViewOptions
     * @return \StructType\EwsGetUserAvailabilityRequestType
     */
    public function setSuggestionsViewOptions(?\StructType\EwsSuggestionsViewOptionsType $suggestionsViewOptions = null): self
    {
        $this->SuggestionsViewOptions = $suggestionsViewOptions;
        
        return $this;
    }
}
