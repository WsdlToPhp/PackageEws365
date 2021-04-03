<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \StructType\EwsNonIndexableItemDetailResultType|null
     */
    protected ?\StructType\EwsNonIndexableItemDetailResultType $NonIndexableItemDetailsResult = null;
    /**
     * Constructor method for GetNonIndexableItemDetailsResponseMessageType
     * @uses EwsGetNonIndexableItemDetailsResponseMessageType::setNonIndexableItemDetailsResult()
     * @param \StructType\EwsNonIndexableItemDetailResultType $nonIndexableItemDetailsResult
     */
    public function __construct(?\StructType\EwsNonIndexableItemDetailResultType $nonIndexableItemDetailsResult = null)
    {
        $this
            ->setNonIndexableItemDetailsResult($nonIndexableItemDetailsResult);
    }
    /**
     * Get NonIndexableItemDetailsResult value
     * @return \StructType\EwsNonIndexableItemDetailResultType|null
     */
    public function getNonIndexableItemDetailsResult(): ?\StructType\EwsNonIndexableItemDetailResultType
    {
        return $this->NonIndexableItemDetailsResult;
    }
    /**
     * Set NonIndexableItemDetailsResult value
     * @param \StructType\EwsNonIndexableItemDetailResultType $nonIndexableItemDetailsResult
     * @return \StructType\EwsGetNonIndexableItemDetailsResponseMessageType
     */
    public function setNonIndexableItemDetailsResult(?\StructType\EwsNonIndexableItemDetailResultType $nonIndexableItemDetailsResult = null): self
    {
        $this->NonIndexableItemDetailsResult = $nonIndexableItemDetailsResult;
        
        return $this;
    }
}
