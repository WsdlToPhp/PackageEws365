<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EntityExtractionResultType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsEntityExtractionResultType extends AbstractStructBase
{
    /**
     * The Addresses
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfAddressEntitiesType
     */
    public $Addresses;
    /**
     * The MeetingSuggestions
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfMeetingSuggestionsType
     */
    public $MeetingSuggestions;
    /**
     * The TaskSuggestions
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfTaskSuggestionsType
     */
    public $TaskSuggestions;
    /**
     * The EmailAddresses
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfEmailAddressEntitiesType
     */
    public $EmailAddresses;
    /**
     * The Contacts
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfContactsType
     */
    public $Contacts;
    /**
     * The Urls
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfUrlEntitiesType
     */
    public $Urls;
    /**
     * The PhoneNumbers
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfPhoneEntitiesType
     */
    public $PhoneNumbers;
    /**
     * The ParcelDeliveries
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfParcelDeliveryEntitiesType
     */
    public $ParcelDeliveries;
    /**
     * The FlightReservations
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfFlightReservationsType
     */
    public $FlightReservations;
    /**
     * The SenderAddIns
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfSenderAddInsType
     */
    public $SenderAddIns;
    /**
     * Constructor method for EntityExtractionResultType
     * @uses EwsEntityExtractionResultType::setAddresses()
     * @uses EwsEntityExtractionResultType::setMeetingSuggestions()
     * @uses EwsEntityExtractionResultType::setTaskSuggestions()
     * @uses EwsEntityExtractionResultType::setEmailAddresses()
     * @uses EwsEntityExtractionResultType::setContacts()
     * @uses EwsEntityExtractionResultType::setUrls()
     * @uses EwsEntityExtractionResultType::setPhoneNumbers()
     * @uses EwsEntityExtractionResultType::setParcelDeliveries()
     * @uses EwsEntityExtractionResultType::setFlightReservations()
     * @uses EwsEntityExtractionResultType::setSenderAddIns()
     * @param \Ews\ArrayType\EwsArrayOfAddressEntitiesType $addresses
     * @param \Ews\ArrayType\EwsArrayOfMeetingSuggestionsType $meetingSuggestions
     * @param \Ews\ArrayType\EwsArrayOfTaskSuggestionsType $taskSuggestions
     * @param \Ews\ArrayType\EwsArrayOfEmailAddressEntitiesType $emailAddresses
     * @param \Ews\ArrayType\EwsArrayOfContactsType $contacts
     * @param \Ews\ArrayType\EwsArrayOfUrlEntitiesType $urls
     * @param \Ews\ArrayType\EwsArrayOfPhoneEntitiesType $phoneNumbers
     * @param \Ews\ArrayType\EwsArrayOfParcelDeliveryEntitiesType $parcelDeliveries
     * @param \Ews\ArrayType\EwsArrayOfFlightReservationsType $flightReservations
     * @param \Ews\ArrayType\EwsArrayOfSenderAddInsType $senderAddIns
     */
    public function __construct(\Ews\ArrayType\EwsArrayOfAddressEntitiesType $addresses = null, \Ews\ArrayType\EwsArrayOfMeetingSuggestionsType $meetingSuggestions = null, \Ews\ArrayType\EwsArrayOfTaskSuggestionsType $taskSuggestions = null, \Ews\ArrayType\EwsArrayOfEmailAddressEntitiesType $emailAddresses = null, \Ews\ArrayType\EwsArrayOfContactsType $contacts = null, \Ews\ArrayType\EwsArrayOfUrlEntitiesType $urls = null, \Ews\ArrayType\EwsArrayOfPhoneEntitiesType $phoneNumbers = null, \Ews\ArrayType\EwsArrayOfParcelDeliveryEntitiesType $parcelDeliveries = null, \Ews\ArrayType\EwsArrayOfFlightReservationsType $flightReservations = null, \Ews\ArrayType\EwsArrayOfSenderAddInsType $senderAddIns = null)
    {
        $this
            ->setAddresses($addresses)
            ->setMeetingSuggestions($meetingSuggestions)
            ->setTaskSuggestions($taskSuggestions)
            ->setEmailAddresses($emailAddresses)
            ->setContacts($contacts)
            ->setUrls($urls)
            ->setPhoneNumbers($phoneNumbers)
            ->setParcelDeliveries($parcelDeliveries)
            ->setFlightReservations($flightReservations)
            ->setSenderAddIns($senderAddIns);
    }
    /**
     * Get Addresses value
     * @return \Ews\ArrayType\EwsArrayOfAddressEntitiesType|null
     */
    public function getAddresses()
    {
        return $this->Addresses;
    }
    /**
     * Set Addresses value
     * @param \Ews\ArrayType\EwsArrayOfAddressEntitiesType $addresses
     * @return \Ews\StructType\EwsEntityExtractionResultType
     */
    public function setAddresses(\Ews\ArrayType\EwsArrayOfAddressEntitiesType $addresses = null)
    {
        $this->Addresses = $addresses;
        return $this;
    }
    /**
     * Get MeetingSuggestions value
     * @return \Ews\ArrayType\EwsArrayOfMeetingSuggestionsType|null
     */
    public function getMeetingSuggestions()
    {
        return $this->MeetingSuggestions;
    }
    /**
     * Set MeetingSuggestions value
     * @param \Ews\ArrayType\EwsArrayOfMeetingSuggestionsType $meetingSuggestions
     * @return \Ews\StructType\EwsEntityExtractionResultType
     */
    public function setMeetingSuggestions(\Ews\ArrayType\EwsArrayOfMeetingSuggestionsType $meetingSuggestions = null)
    {
        $this->MeetingSuggestions = $meetingSuggestions;
        return $this;
    }
    /**
     * Get TaskSuggestions value
     * @return \Ews\ArrayType\EwsArrayOfTaskSuggestionsType|null
     */
    public function getTaskSuggestions()
    {
        return $this->TaskSuggestions;
    }
    /**
     * Set TaskSuggestions value
     * @param \Ews\ArrayType\EwsArrayOfTaskSuggestionsType $taskSuggestions
     * @return \Ews\StructType\EwsEntityExtractionResultType
     */
    public function setTaskSuggestions(\Ews\ArrayType\EwsArrayOfTaskSuggestionsType $taskSuggestions = null)
    {
        $this->TaskSuggestions = $taskSuggestions;
        return $this;
    }
    /**
     * Get EmailAddresses value
     * @return \Ews\ArrayType\EwsArrayOfEmailAddressEntitiesType|null
     */
    public function getEmailAddresses()
    {
        return $this->EmailAddresses;
    }
    /**
     * Set EmailAddresses value
     * @param \Ews\ArrayType\EwsArrayOfEmailAddressEntitiesType $emailAddresses
     * @return \Ews\StructType\EwsEntityExtractionResultType
     */
    public function setEmailAddresses(\Ews\ArrayType\EwsArrayOfEmailAddressEntitiesType $emailAddresses = null)
    {
        $this->EmailAddresses = $emailAddresses;
        return $this;
    }
    /**
     * Get Contacts value
     * @return \Ews\ArrayType\EwsArrayOfContactsType|null
     */
    public function getContacts()
    {
        return $this->Contacts;
    }
    /**
     * Set Contacts value
     * @param \Ews\ArrayType\EwsArrayOfContactsType $contacts
     * @return \Ews\StructType\EwsEntityExtractionResultType
     */
    public function setContacts(\Ews\ArrayType\EwsArrayOfContactsType $contacts = null)
    {
        $this->Contacts = $contacts;
        return $this;
    }
    /**
     * Get Urls value
     * @return \Ews\ArrayType\EwsArrayOfUrlEntitiesType|null
     */
    public function getUrls()
    {
        return $this->Urls;
    }
    /**
     * Set Urls value
     * @param \Ews\ArrayType\EwsArrayOfUrlEntitiesType $urls
     * @return \Ews\StructType\EwsEntityExtractionResultType
     */
    public function setUrls(\Ews\ArrayType\EwsArrayOfUrlEntitiesType $urls = null)
    {
        $this->Urls = $urls;
        return $this;
    }
    /**
     * Get PhoneNumbers value
     * @return \Ews\ArrayType\EwsArrayOfPhoneEntitiesType|null
     */
    public function getPhoneNumbers()
    {
        return $this->PhoneNumbers;
    }
    /**
     * Set PhoneNumbers value
     * @param \Ews\ArrayType\EwsArrayOfPhoneEntitiesType $phoneNumbers
     * @return \Ews\StructType\EwsEntityExtractionResultType
     */
    public function setPhoneNumbers(\Ews\ArrayType\EwsArrayOfPhoneEntitiesType $phoneNumbers = null)
    {
        $this->PhoneNumbers = $phoneNumbers;
        return $this;
    }
    /**
     * Get ParcelDeliveries value
     * @return \Ews\ArrayType\EwsArrayOfParcelDeliveryEntitiesType|null
     */
    public function getParcelDeliveries()
    {
        return $this->ParcelDeliveries;
    }
    /**
     * Set ParcelDeliveries value
     * @param \Ews\ArrayType\EwsArrayOfParcelDeliveryEntitiesType $parcelDeliveries
     * @return \Ews\StructType\EwsEntityExtractionResultType
     */
    public function setParcelDeliveries(\Ews\ArrayType\EwsArrayOfParcelDeliveryEntitiesType $parcelDeliveries = null)
    {
        $this->ParcelDeliveries = $parcelDeliveries;
        return $this;
    }
    /**
     * Get FlightReservations value
     * @return \Ews\ArrayType\EwsArrayOfFlightReservationsType|null
     */
    public function getFlightReservations()
    {
        return $this->FlightReservations;
    }
    /**
     * Set FlightReservations value
     * @param \Ews\ArrayType\EwsArrayOfFlightReservationsType $flightReservations
     * @return \Ews\StructType\EwsEntityExtractionResultType
     */
    public function setFlightReservations(\Ews\ArrayType\EwsArrayOfFlightReservationsType $flightReservations = null)
    {
        $this->FlightReservations = $flightReservations;
        return $this;
    }
    /**
     * Get SenderAddIns value
     * @return \Ews\ArrayType\EwsArrayOfSenderAddInsType|null
     */
    public function getSenderAddIns()
    {
        return $this->SenderAddIns;
    }
    /**
     * Set SenderAddIns value
     * @param \Ews\ArrayType\EwsArrayOfSenderAddInsType $senderAddIns
     * @return \Ews\StructType\EwsEntityExtractionResultType
     */
    public function setSenderAddIns(\Ews\ArrayType\EwsArrayOfSenderAddInsType $senderAddIns = null)
    {
        $this->SenderAddIns = $senderAddIns;
        return $this;
    }
}
