<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSearchableMailboxesResponseMessageType StructType
 * Meta information extracted from the WSDL
 * - documentation: Response message type for the GetSearchableMailboxes web method.
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetSearchableMailboxesResponseMessageType extends EwsResponseMessageType
{
    /**
     * The SearchableMailboxes
     * @var \ArrayType\EwsArrayOfSearchableMailboxesType|null
     */
    protected ?\ArrayType\EwsArrayOfSearchableMailboxesType $SearchableMailboxes = null;
    /**
     * The FailedMailboxes
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfFailedSearchMailboxesType|null
     */
    protected ?\ArrayType\EwsArrayOfFailedSearchMailboxesType $FailedMailboxes = null;
    /**
     * Constructor method for GetSearchableMailboxesResponseMessageType
     * @uses EwsGetSearchableMailboxesResponseMessageType::setSearchableMailboxes()
     * @uses EwsGetSearchableMailboxesResponseMessageType::setFailedMailboxes()
     * @param \ArrayType\EwsArrayOfSearchableMailboxesType $searchableMailboxes
     * @param \ArrayType\EwsArrayOfFailedSearchMailboxesType $failedMailboxes
     */
    public function __construct(?\ArrayType\EwsArrayOfSearchableMailboxesType $searchableMailboxes = null, ?\ArrayType\EwsArrayOfFailedSearchMailboxesType $failedMailboxes = null)
    {
        $this
            ->setSearchableMailboxes($searchableMailboxes)
            ->setFailedMailboxes($failedMailboxes);
    }
    /**
     * Get SearchableMailboxes value
     * @return \ArrayType\EwsArrayOfSearchableMailboxesType|null
     */
    public function getSearchableMailboxes(): ?\ArrayType\EwsArrayOfSearchableMailboxesType
    {
        return $this->SearchableMailboxes;
    }
    /**
     * Set SearchableMailboxes value
     * @param \ArrayType\EwsArrayOfSearchableMailboxesType $searchableMailboxes
     * @return \StructType\EwsGetSearchableMailboxesResponseMessageType
     */
    public function setSearchableMailboxes(?\ArrayType\EwsArrayOfSearchableMailboxesType $searchableMailboxes = null): self
    {
        $this->SearchableMailboxes = $searchableMailboxes;
        
        return $this;
    }
    /**
     * Get FailedMailboxes value
     * @return \ArrayType\EwsArrayOfFailedSearchMailboxesType|null
     */
    public function getFailedMailboxes(): ?\ArrayType\EwsArrayOfFailedSearchMailboxesType
    {
        return $this->FailedMailboxes;
    }
    /**
     * Set FailedMailboxes value
     * @param \ArrayType\EwsArrayOfFailedSearchMailboxesType $failedMailboxes
     * @return \StructType\EwsGetSearchableMailboxesResponseMessageType
     */
    public function setFailedMailboxes(?\ArrayType\EwsArrayOfFailedSearchMailboxesType $failedMailboxes = null): self
    {
        $this->FailedMailboxes = $failedMailboxes;
        
        return $this;
    }
}
