<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUserAvailabilityResponseType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetUserAvailabilityResponseType extends AbstractStructBase
{
    /**
     * The FreeBusyResponseArray
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfFreeBusyResponse
     */
    public $FreeBusyResponseArray;
    /**
     * The SuggestionsResponse
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\StructType\EwsSuggestionsResponseType
     */
    public $SuggestionsResponse;
    /**
     * Constructor method for GetUserAvailabilityResponseType
     * @uses EwsGetUserAvailabilityResponseType::setFreeBusyResponseArray()
     * @uses EwsGetUserAvailabilityResponseType::setSuggestionsResponse()
     * @param \Ews\ArrayType\EwsArrayOfFreeBusyResponse $freeBusyResponseArray
     * @param \Ews\StructType\EwsSuggestionsResponseType $suggestionsResponse
     */
    public function __construct(\Ews\ArrayType\EwsArrayOfFreeBusyResponse $freeBusyResponseArray = null, \Ews\StructType\EwsSuggestionsResponseType $suggestionsResponse = null)
    {
        $this
            ->setFreeBusyResponseArray($freeBusyResponseArray)
            ->setSuggestionsResponse($suggestionsResponse);
    }
    /**
     * Get FreeBusyResponseArray value
     * @return \Ews\ArrayType\EwsArrayOfFreeBusyResponse|null
     */
    public function getFreeBusyResponseArray()
    {
        return $this->FreeBusyResponseArray;
    }
    /**
     * Set FreeBusyResponseArray value
     * @param \Ews\ArrayType\EwsArrayOfFreeBusyResponse $freeBusyResponseArray
     * @return \Ews\StructType\EwsGetUserAvailabilityResponseType
     */
    public function setFreeBusyResponseArray(\Ews\ArrayType\EwsArrayOfFreeBusyResponse $freeBusyResponseArray = null)
    {
        $this->FreeBusyResponseArray = $freeBusyResponseArray;
        return $this;
    }
    /**
     * Get SuggestionsResponse value
     * @return \Ews\StructType\EwsSuggestionsResponseType|null
     */
    public function getSuggestionsResponse()
    {
        return $this->SuggestionsResponse;
    }
    /**
     * Set SuggestionsResponse value
     * @param \Ews\StructType\EwsSuggestionsResponseType $suggestionsResponse
     * @return \Ews\StructType\EwsGetUserAvailabilityResponseType
     */
    public function setSuggestionsResponse(\Ews\StructType\EwsSuggestionsResponseType $suggestionsResponse = null)
    {
        $this->SuggestionsResponse = $suggestionsResponse;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsGetUserAvailabilityResponseType
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
