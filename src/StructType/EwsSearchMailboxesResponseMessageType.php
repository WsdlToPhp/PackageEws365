<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \Ews\StructType\EwsSearchMailboxesResultType
     */
    public $SearchMailboxesResult;
    /**
     * Constructor method for SearchMailboxesResponseMessageType
     * @uses EwsSearchMailboxesResponseMessageType::setSearchMailboxesResult()
     * @param \Ews\StructType\EwsSearchMailboxesResultType $searchMailboxesResult
     */
    public function __construct(\Ews\StructType\EwsSearchMailboxesResultType $searchMailboxesResult = null)
    {
        $this
            ->setSearchMailboxesResult($searchMailboxesResult);
    }
    /**
     * Get SearchMailboxesResult value
     * @return \Ews\StructType\EwsSearchMailboxesResultType|null
     */
    public function getSearchMailboxesResult()
    {
        return $this->SearchMailboxesResult;
    }
    /**
     * Set SearchMailboxesResult value
     * @param \Ews\StructType\EwsSearchMailboxesResultType $searchMailboxesResult
     * @return \Ews\StructType\EwsSearchMailboxesResponseMessageType
     */
    public function setSearchMailboxesResult(\Ews\StructType\EwsSearchMailboxesResultType $searchMailboxesResult = null)
    {
        $this->SearchMailboxesResult = $searchMailboxesResult;
        return $this;
    }
}
