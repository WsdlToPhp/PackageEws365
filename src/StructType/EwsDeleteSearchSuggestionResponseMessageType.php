<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteSearchSuggestionResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsDeleteSearchSuggestionResponseMessageType extends EwsResponseMessageType
{
    /**
     * The Response
     * @var \StructType\EwsDeleteSearchSuggestionResponseType|null
     */
    protected ?\StructType\EwsDeleteSearchSuggestionResponseType $Response = null;
    /**
     * Constructor method for DeleteSearchSuggestionResponseMessageType
     * @uses EwsDeleteSearchSuggestionResponseMessageType::setResponse()
     * @param \StructType\EwsDeleteSearchSuggestionResponseType $response
     */
    public function __construct(?\StructType\EwsDeleteSearchSuggestionResponseType $response = null)
    {
        $this
            ->setResponse($response);
    }
    /**
     * Get Response value
     * @return \StructType\EwsDeleteSearchSuggestionResponseType|null
     */
    public function getResponse(): ?\StructType\EwsDeleteSearchSuggestionResponseType
    {
        return $this->Response;
    }
    /**
     * Set Response value
     * @param \StructType\EwsDeleteSearchSuggestionResponseType $response
     * @return \StructType\EwsDeleteSearchSuggestionResponseMessageType
     */
    public function setResponse(?\StructType\EwsDeleteSearchSuggestionResponseType $response = null): self
    {
        $this->Response = $response;
        
        return $this;
    }
}
