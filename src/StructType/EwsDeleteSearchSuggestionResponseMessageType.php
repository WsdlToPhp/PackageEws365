<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \Ews\StructType\EwsDeleteSearchSuggestionResponseType
     */
    public $Response;
    /**
     * Constructor method for DeleteSearchSuggestionResponseMessageType
     * @uses EwsDeleteSearchSuggestionResponseMessageType::setResponse()
     * @param \Ews\StructType\EwsDeleteSearchSuggestionResponseType $response
     */
    public function __construct(\Ews\StructType\EwsDeleteSearchSuggestionResponseType $response = null)
    {
        $this
            ->setResponse($response);
    }
    /**
     * Get Response value
     * @return \Ews\StructType\EwsDeleteSearchSuggestionResponseType|null
     */
    public function getResponse()
    {
        return $this->Response;
    }
    /**
     * Set Response value
     * @param \Ews\StructType\EwsDeleteSearchSuggestionResponseType $response
     * @return \Ews\StructType\EwsDeleteSearchSuggestionResponseMessageType
     */
    public function setResponse(\Ews\StructType\EwsDeleteSearchSuggestionResponseType $response = null)
    {
        $this->Response = $response;
        return $this;
    }
}
