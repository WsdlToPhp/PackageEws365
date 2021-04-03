<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \ArrayType\EwsArrayOfAddressEntitiesType|null
     */
    protected ?\ArrayType\EwsArrayOfAddressEntitiesType $Addresses = null;
    /**
     * The MeetingSuggestions
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfMeetingSuggestionsType|null
     */
    protected ?\ArrayType\EwsArrayOfMeetingSuggestionsType $MeetingSuggestions = null;
    /**
     * The TaskSuggestions
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfTaskSuggestionsType|null
     */
    protected ?\ArrayType\EwsArrayOfTaskSuggestionsType $TaskSuggestions = null;
    /**
     * The EmailAddresses
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfEmailAddressEntitiesType|null
     */
    protected ?\ArrayType\EwsArrayOfEmailAddressEntitiesType $EmailAddresses = null;
    /**
     * The Contacts
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfContactsType|null
     */
    protected ?\ArrayType\EwsArrayOfContactsType $Contacts = null;
    /**
     * The Urls
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfUrlEntitiesType|null
     */
    protected ?\ArrayType\EwsArrayOfUrlEntitiesType $Urls = null;
    /**
     * The PhoneNumbers
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfPhoneEntitiesType|null
     */
    protected ?\ArrayType\EwsArrayOfPhoneEntitiesType $PhoneNumbers = null;
    /**
     * The ParcelDeliveries
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfParcelDeliveryEntitiesType|null
     */
    protected ?\ArrayType\EwsArrayOfParcelDeliveryEntitiesType $ParcelDeliveries = null;
    /**
     * The FlightReservations
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfFlightReservationsType|null
     */
    protected ?\ArrayType\EwsArrayOfFlightReservationsType $FlightReservations = null;
    /**
     * The SenderAddIns
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfSenderAddInsType|null
     */
    protected ?\ArrayType\EwsArrayOfSenderAddInsType $SenderAddIns = null;
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
     * @param \ArrayType\EwsArrayOfAddressEntitiesType $addresses
     * @param \ArrayType\EwsArrayOfMeetingSuggestionsType $meetingSuggestions
     * @param \ArrayType\EwsArrayOfTaskSuggestionsType $taskSuggestions
     * @param \ArrayType\EwsArrayOfEmailAddressEntitiesType $emailAddresses
     * @param \ArrayType\EwsArrayOfContactsType $contacts
     * @param \ArrayType\EwsArrayOfUrlEntitiesType $urls
     * @param \ArrayType\EwsArrayOfPhoneEntitiesType $phoneNumbers
     * @param \ArrayType\EwsArrayOfParcelDeliveryEntitiesType $parcelDeliveries
     * @param \ArrayType\EwsArrayOfFlightReservationsType $flightReservations
     * @param \ArrayType\EwsArrayOfSenderAddInsType $senderAddIns
     */
    public function __construct(?\ArrayType\EwsArrayOfAddressEntitiesType $addresses = null, ?\ArrayType\EwsArrayOfMeetingSuggestionsType $meetingSuggestions = null, ?\ArrayType\EwsArrayOfTaskSuggestionsType $taskSuggestions = null, ?\ArrayType\EwsArrayOfEmailAddressEntitiesType $emailAddresses = null, ?\ArrayType\EwsArrayOfContactsType $contacts = null, ?\ArrayType\EwsArrayOfUrlEntitiesType $urls = null, ?\ArrayType\EwsArrayOfPhoneEntitiesType $phoneNumbers = null, ?\ArrayType\EwsArrayOfParcelDeliveryEntitiesType $parcelDeliveries = null, ?\ArrayType\EwsArrayOfFlightReservationsType $flightReservations = null, ?\ArrayType\EwsArrayOfSenderAddInsType $senderAddIns = null)
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
     * @return \ArrayType\EwsArrayOfAddressEntitiesType|null
     */
    public function getAddresses(): ?\ArrayType\EwsArrayOfAddressEntitiesType
    {
        return $this->Addresses;
    }
    /**
     * Set Addresses value
     * @param \ArrayType\EwsArrayOfAddressEntitiesType $addresses
     * @return \StructType\EwsEntityExtractionResultType
     */
    public function setAddresses(?\ArrayType\EwsArrayOfAddressEntitiesType $addresses = null): self
    {
        $this->Addresses = $addresses;
        
        return $this;
    }
    /**
     * Get MeetingSuggestions value
     * @return \ArrayType\EwsArrayOfMeetingSuggestionsType|null
     */
    public function getMeetingSuggestions(): ?\ArrayType\EwsArrayOfMeetingSuggestionsType
    {
        return $this->MeetingSuggestions;
    }
    /**
     * Set MeetingSuggestions value
     * @param \ArrayType\EwsArrayOfMeetingSuggestionsType $meetingSuggestions
     * @return \StructType\EwsEntityExtractionResultType
     */
    public function setMeetingSuggestions(?\ArrayType\EwsArrayOfMeetingSuggestionsType $meetingSuggestions = null): self
    {
        $this->MeetingSuggestions = $meetingSuggestions;
        
        return $this;
    }
    /**
     * Get TaskSuggestions value
     * @return \ArrayType\EwsArrayOfTaskSuggestionsType|null
     */
    public function getTaskSuggestions(): ?\ArrayType\EwsArrayOfTaskSuggestionsType
    {
        return $this->TaskSuggestions;
    }
    /**
     * Set TaskSuggestions value
     * @param \ArrayType\EwsArrayOfTaskSuggestionsType $taskSuggestions
     * @return \StructType\EwsEntityExtractionResultType
     */
    public function setTaskSuggestions(?\ArrayType\EwsArrayOfTaskSuggestionsType $taskSuggestions = null): self
    {
        $this->TaskSuggestions = $taskSuggestions;
        
        return $this;
    }
    /**
     * Get EmailAddresses value
     * @return \ArrayType\EwsArrayOfEmailAddressEntitiesType|null
     */
    public function getEmailAddresses(): ?\ArrayType\EwsArrayOfEmailAddressEntitiesType
    {
        return $this->EmailAddresses;
    }
    /**
     * Set EmailAddresses value
     * @param \ArrayType\EwsArrayOfEmailAddressEntitiesType $emailAddresses
     * @return \StructType\EwsEntityExtractionResultType
     */
    public function setEmailAddresses(?\ArrayType\EwsArrayOfEmailAddressEntitiesType $emailAddresses = null): self
    {
        $this->EmailAddresses = $emailAddresses;
        
        return $this;
    }
    /**
     * Get Contacts value
     * @return \ArrayType\EwsArrayOfContactsType|null
     */
    public function getContacts(): ?\ArrayType\EwsArrayOfContactsType
    {
        return $this->Contacts;
    }
    /**
     * Set Contacts value
     * @param \ArrayType\EwsArrayOfContactsType $contacts
     * @return \StructType\EwsEntityExtractionResultType
     */
    public function setContacts(?\ArrayType\EwsArrayOfContactsType $contacts = null): self
    {
        $this->Contacts = $contacts;
        
        return $this;
    }
    /**
     * Get Urls value
     * @return \ArrayType\EwsArrayOfUrlEntitiesType|null
     */
    public function getUrls(): ?\ArrayType\EwsArrayOfUrlEntitiesType
    {
        return $this->Urls;
    }
    /**
     * Set Urls value
     * @param \ArrayType\EwsArrayOfUrlEntitiesType $urls
     * @return \StructType\EwsEntityExtractionResultType
     */
    public function setUrls(?\ArrayType\EwsArrayOfUrlEntitiesType $urls = null): self
    {
        $this->Urls = $urls;
        
        return $this;
    }
    /**
     * Get PhoneNumbers value
     * @return \ArrayType\EwsArrayOfPhoneEntitiesType|null
     */
    public function getPhoneNumbers(): ?\ArrayType\EwsArrayOfPhoneEntitiesType
    {
        return $this->PhoneNumbers;
    }
    /**
     * Set PhoneNumbers value
     * @param \ArrayType\EwsArrayOfPhoneEntitiesType $phoneNumbers
     * @return \StructType\EwsEntityExtractionResultType
     */
    public function setPhoneNumbers(?\ArrayType\EwsArrayOfPhoneEntitiesType $phoneNumbers = null): self
    {
        $this->PhoneNumbers = $phoneNumbers;
        
        return $this;
    }
    /**
     * Get ParcelDeliveries value
     * @return \ArrayType\EwsArrayOfParcelDeliveryEntitiesType|null
     */
    public function getParcelDeliveries(): ?\ArrayType\EwsArrayOfParcelDeliveryEntitiesType
    {
        return $this->ParcelDeliveries;
    }
    /**
     * Set ParcelDeliveries value
     * @param \ArrayType\EwsArrayOfParcelDeliveryEntitiesType $parcelDeliveries
     * @return \StructType\EwsEntityExtractionResultType
     */
    public function setParcelDeliveries(?\ArrayType\EwsArrayOfParcelDeliveryEntitiesType $parcelDeliveries = null): self
    {
        $this->ParcelDeliveries = $parcelDeliveries;
        
        return $this;
    }
    /**
     * Get FlightReservations value
     * @return \ArrayType\EwsArrayOfFlightReservationsType|null
     */
    public function getFlightReservations(): ?\ArrayType\EwsArrayOfFlightReservationsType
    {
        return $this->FlightReservations;
    }
    /**
     * Set FlightReservations value
     * @param \ArrayType\EwsArrayOfFlightReservationsType $flightReservations
     * @return \StructType\EwsEntityExtractionResultType
     */
    public function setFlightReservations(?\ArrayType\EwsArrayOfFlightReservationsType $flightReservations = null): self
    {
        $this->FlightReservations = $flightReservations;
        
        return $this;
    }
    /**
     * Get SenderAddIns value
     * @return \ArrayType\EwsArrayOfSenderAddInsType|null
     */
    public function getSenderAddIns(): ?\ArrayType\EwsArrayOfSenderAddInsType
    {
        return $this->SenderAddIns;
    }
    /**
     * Set SenderAddIns value
     * @param \ArrayType\EwsArrayOfSenderAddInsType $senderAddIns
     * @return \StructType\EwsEntityExtractionResultType
     */
    public function setSenderAddIns(?\ArrayType\EwsArrayOfSenderAddInsType $senderAddIns = null): self
    {
        $this->SenderAddIns = $senderAddIns;
        
        return $this;
    }
}
