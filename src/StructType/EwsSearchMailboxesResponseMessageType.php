<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchMailboxesResponseMessageType StructType
 * Meta information extracted from the WSDL
 * - documentation: Response message type for the SearchMailboxes web method.
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsSearchMailboxesResponseMessageType extends EwsResponseMessageType
{
    /**
     * The SearchMailboxesResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\EwsSearchMailboxesResultType|null
     */
    protected ?\StructType\EwsSearchMailboxesResultType $SearchMailboxesResult = null;
    /**
     * Constructor method for SearchMailboxesResponseMessageType
     * @uses EwsSearchMailboxesResponseMessageType::setSearchMailboxesResult()
     * @param \StructType\EwsSearchMailboxesResultType $searchMailboxesResult
     */
    public function __construct(?\StructType\EwsSearchMailboxesResultType $searchMailboxesResult = null)
    {
        $this
            ->setSearchMailboxesResult($searchMailboxesResult);
    }
    /**
     * Get SearchMailboxesResult value
     * @return \StructType\EwsSearchMailboxesResultType|null
     */
    public function getSearchMailboxesResult(): ?\StructType\EwsSearchMailboxesResultType
    {
        return $this->SearchMailboxesResult;
    }
    /**
     * Set SearchMailboxesResult value
     * @param \StructType\EwsSearchMailboxesResultType $searchMailboxesResult
     * @return \StructType\EwsSearchMailboxesResponseMessageType
     */
    public function setSearchMailboxesResult(?\StructType\EwsSearchMailboxesResultType $searchMailboxesResult = null): self
    {
        $this->SearchMailboxesResult = $searchMailboxesResult;
        
        return $this;
    }
}
