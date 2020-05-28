<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetNonIndexableItemDetailsResponseMessageType StructType
 * Meta information extracted from the WSDL
 * - documentation: Response message type for the GetNonIndexableItemDetails web method.
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetNonIndexableItemDetailsResponseMessageType extends EwsResponseMessageType
{
    /**
     * The NonIndexableItemDetailsResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsNonIndexableItemDetailResultType
     */
    public $NonIndexableItemDetailsResult;
    /**
     * Constructor method for GetNonIndexableItemDetailsResponseMessageType
     * @uses EwsGetNonIndexableItemDetailsResponseMessageType::setNonIndexableItemDetailsResult()
     * @param \Ews\StructType\EwsNonIndexableItemDetailResultType $nonIndexableItemDetailsResult
     */
    public function __construct(\Ews\StructType\EwsNonIndexableItemDetailResultType $nonIndexableItemDetailsResult = null)
    {
        $this
            ->setNonIndexableItemDetailsResult($nonIndexableItemDetailsResult);
    }
    /**
     * Get NonIndexableItemDetailsResult value
     * @return \Ews\StructType\EwsNonIndexableItemDetailResultType|null
     */
    public function getNonIndexableItemDetailsResult()
    {
        return $this->NonIndexableItemDetailsResult;
    }
    /**
     * Set NonIndexableItemDetailsResult value
     * @param \Ews\StructType\EwsNonIndexableItemDetailResultType $nonIndexableItemDetailsResult
     * @return \Ews\StructType\EwsGetNonIndexableItemDetailsResponseMessageType
     */
    public function setNonIndexableItemDetailsResult(\Ews\StructType\EwsNonIndexableItemDetailResultType $nonIndexableItemDetailsResult = null)
    {
        $this->NonIndexableItemDetailsResult = $nonIndexableItemDetailsResult;
        return $this;
    }
}
