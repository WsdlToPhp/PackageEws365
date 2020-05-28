<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \Ews\ArrayType\EwsArrayOfSearchableMailboxesType
     */
    public $SearchableMailboxes;
    /**
     * The FailedMailboxes
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfFailedSearchMailboxesType
     */
    public $FailedMailboxes;
    /**
     * Constructor method for GetSearchableMailboxesResponseMessageType
     * @uses EwsGetSearchableMailboxesResponseMessageType::setSearchableMailboxes()
     * @uses EwsGetSearchableMailboxesResponseMessageType::setFailedMailboxes()
     * @param \Ews\ArrayType\EwsArrayOfSearchableMailboxesType $searchableMailboxes
     * @param \Ews\ArrayType\EwsArrayOfFailedSearchMailboxesType $failedMailboxes
     */
    public function __construct(\Ews\ArrayType\EwsArrayOfSearchableMailboxesType $searchableMailboxes = null, \Ews\ArrayType\EwsArrayOfFailedSearchMailboxesType $failedMailboxes = null)
    {
        $this
            ->setSearchableMailboxes($searchableMailboxes)
            ->setFailedMailboxes($failedMailboxes);
    }
    /**
     * Get SearchableMailboxes value
     * @return \Ews\ArrayType\EwsArrayOfSearchableMailboxesType|null
     */
    public function getSearchableMailboxes()
    {
        return $this->SearchableMailboxes;
    }
    /**
     * Set SearchableMailboxes value
     * @param \Ews\ArrayType\EwsArrayOfSearchableMailboxesType $searchableMailboxes
     * @return \Ews\StructType\EwsGetSearchableMailboxesResponseMessageType
     */
    public function setSearchableMailboxes(\Ews\ArrayType\EwsArrayOfSearchableMailboxesType $searchableMailboxes = null)
    {
        $this->SearchableMailboxes = $searchableMailboxes;
        return $this;
    }
    /**
     * Get FailedMailboxes value
     * @return \Ews\ArrayType\EwsArrayOfFailedSearchMailboxesType|null
     */
    public function getFailedMailboxes()
    {
        return $this->FailedMailboxes;
    }
    /**
     * Set FailedMailboxes value
     * @param \Ews\ArrayType\EwsArrayOfFailedSearchMailboxesType $failedMailboxes
     * @return \Ews\StructType\EwsGetSearchableMailboxesResponseMessageType
     */
    public function setFailedMailboxes(\Ews\ArrayType\EwsArrayOfFailedSearchMailboxesType $failedMailboxes = null)
    {
        $this->FailedMailboxes = $failedMailboxes;
        return $this;
    }
}
