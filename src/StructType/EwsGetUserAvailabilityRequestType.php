<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUserAvailabilityRequestType StructType
 * Meta informations extracted from the WSDL
 * - maxOccurs: 1
 * - minOccurs: 0
 * - ref: t:SuggestionsViewOptions
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetUserAvailabilityRequestType extends EwsBaseRequestType
{
    /**
     * The TimeZone
     * @var \Ews\StructType\EwsSerializableTimeZone
     */
    public $TimeZone;
    /**
     * The MailboxDataArray
     * @var \Ews\ArrayType\EwsArrayOfMailboxData
     */
    public $MailboxDataArray;
    /**
     * The FreeBusyViewOptions
     * @var \Ews\StructType\EwsFreeBusyViewOptionsType
     */
    public $FreeBusyViewOptions;
    /**
     * The SuggestionsViewOptions
     * @var \Ews\StructType\EwsSuggestionsViewOptionsType
     */
    public $SuggestionsViewOptions;
    /**
     * Constructor method for GetUserAvailabilityRequestType
     * @uses EwsGetUserAvailabilityRequestType::setTimeZone()
     * @uses EwsGetUserAvailabilityRequestType::setMailboxDataArray()
     * @uses EwsGetUserAvailabilityRequestType::setFreeBusyViewOptions()
     * @uses EwsGetUserAvailabilityRequestType::setSuggestionsViewOptions()
     * @param \Ews\StructType\EwsSerializableTimeZone $timeZone
     * @param \Ews\ArrayType\EwsArrayOfMailboxData $mailboxDataArray
     * @param \Ews\StructType\EwsFreeBusyViewOptionsType $freeBusyViewOptions
     * @param \Ews\StructType\EwsSuggestionsViewOptionsType $suggestionsViewOptions
     */
    public function __construct(\Ews\StructType\EwsSerializableTimeZone $timeZone = null, \Ews\ArrayType\EwsArrayOfMailboxData $mailboxDataArray = null, \Ews\StructType\EwsFreeBusyViewOptionsType $freeBusyViewOptions = null, \Ews\StructType\EwsSuggestionsViewOptionsType $suggestionsViewOptions = null)
    {
        $this
            ->setTimeZone($timeZone)
            ->setMailboxDataArray($mailboxDataArray)
            ->setFreeBusyViewOptions($freeBusyViewOptions)
            ->setSuggestionsViewOptions($suggestionsViewOptions);
    }
    /**
     * Get TimeZone value
     * @return \Ews\StructType\EwsSerializableTimeZone|null
     */
    public function getTimeZone()
    {
        return $this->TimeZone;
    }
    /**
     * Set TimeZone value
     * @param \Ews\StructType\EwsSerializableTimeZone $timeZone
     * @return \Ews\StructType\EwsGetUserAvailabilityRequestType
     */
    public function setTimeZone(\Ews\StructType\EwsSerializableTimeZone $timeZone = null)
    {
        $this->TimeZone = $timeZone;
        return $this;
    }
    /**
     * Get MailboxDataArray value
     * @return \Ews\ArrayType\EwsArrayOfMailboxData|null
     */
    public function getMailboxDataArray()
    {
        return $this->MailboxDataArray;
    }
    /**
     * Set MailboxDataArray value
     * @param \Ews\ArrayType\EwsArrayOfMailboxData $mailboxDataArray
     * @return \Ews\StructType\EwsGetUserAvailabilityRequestType
     */
    public function setMailboxDataArray(\Ews\ArrayType\EwsArrayOfMailboxData $mailboxDataArray = null)
    {
        $this->MailboxDataArray = $mailboxDataArray;
        return $this;
    }
    /**
     * Get FreeBusyViewOptions value
     * @return \Ews\StructType\EwsFreeBusyViewOptionsType|null
     */
    public function getFreeBusyViewOptions()
    {
        return $this->FreeBusyViewOptions;
    }
    /**
     * Set FreeBusyViewOptions value
     * @param \Ews\StructType\EwsFreeBusyViewOptionsType $freeBusyViewOptions
     * @return \Ews\StructType\EwsGetUserAvailabilityRequestType
     */
    public function setFreeBusyViewOptions(\Ews\StructType\EwsFreeBusyViewOptionsType $freeBusyViewOptions = null)
    {
        $this->FreeBusyViewOptions = $freeBusyViewOptions;
        return $this;
    }
    /**
     * Get SuggestionsViewOptions value
     * @return \Ews\StructType\EwsSuggestionsViewOptionsType|null
     */
    public function getSuggestionsViewOptions()
    {
        return $this->SuggestionsViewOptions;
    }
    /**
     * Set SuggestionsViewOptions value
     * @param \Ews\StructType\EwsSuggestionsViewOptionsType $suggestionsViewOptions
     * @return \Ews\StructType\EwsGetUserAvailabilityRequestType
     */
    public function setSuggestionsViewOptions(\Ews\StructType\EwsSuggestionsViewOptionsType $suggestionsViewOptions = null)
    {
        $this->SuggestionsViewOptions = $suggestionsViewOptions;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsGetUserAvailabilityRequestType
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
