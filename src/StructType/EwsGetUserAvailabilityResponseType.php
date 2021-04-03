<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfFreeBusyResponse|null
     */
    protected ?\ArrayType\EwsArrayOfFreeBusyResponse $FreeBusyResponseArray = null;
    /**
     * The SuggestionsResponse
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\EwsSuggestionsResponseType|null
     */
    protected ?\StructType\EwsSuggestionsResponseType $SuggestionsResponse = null;
    /**
     * Constructor method for GetUserAvailabilityResponseType
     * @uses EwsGetUserAvailabilityResponseType::setFreeBusyResponseArray()
     * @uses EwsGetUserAvailabilityResponseType::setSuggestionsResponse()
     * @param \ArrayType\EwsArrayOfFreeBusyResponse $freeBusyResponseArray
     * @param \StructType\EwsSuggestionsResponseType $suggestionsResponse
     */
    public function __construct(?\ArrayType\EwsArrayOfFreeBusyResponse $freeBusyResponseArray = null, ?\StructType\EwsSuggestionsResponseType $suggestionsResponse = null)
    {
        $this
            ->setFreeBusyResponseArray($freeBusyResponseArray)
            ->setSuggestionsResponse($suggestionsResponse);
    }
    /**
     * Get FreeBusyResponseArray value
     * @return \ArrayType\EwsArrayOfFreeBusyResponse|null
     */
    public function getFreeBusyResponseArray(): ?\ArrayType\EwsArrayOfFreeBusyResponse
    {
        return $this->FreeBusyResponseArray;
    }
    /**
     * Set FreeBusyResponseArray value
     * @param \ArrayType\EwsArrayOfFreeBusyResponse $freeBusyResponseArray
     * @return \StructType\EwsGetUserAvailabilityResponseType
     */
    public function setFreeBusyResponseArray(?\ArrayType\EwsArrayOfFreeBusyResponse $freeBusyResponseArray = null): self
    {
        $this->FreeBusyResponseArray = $freeBusyResponseArray;
        
        return $this;
    }
    /**
     * Get SuggestionsResponse value
     * @return \StructType\EwsSuggestionsResponseType|null
     */
    public function getSuggestionsResponse(): ?\StructType\EwsSuggestionsResponseType
    {
        return $this->SuggestionsResponse;
    }
    /**
     * Set SuggestionsResponse value
     * @param \StructType\EwsSuggestionsResponseType $suggestionsResponse
     * @return \StructType\EwsGetUserAvailabilityResponseType
     */
    public function setSuggestionsResponse(?\StructType\EwsSuggestionsResponseType $suggestionsResponse = null): self
    {
        $this->SuggestionsResponse = $suggestionsResponse;
        
        return $this;
    }
}
