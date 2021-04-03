<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateItemResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsUpdateItemResponseMessageType extends EwsItemInfoResponseMessageType
{
    /**
     * The ConflictResults
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\EwsConflictResultsType|null
     */
    protected ?\StructType\EwsConflictResultsType $ConflictResults = null;
    /**
     * Constructor method for UpdateItemResponseMessageType
     * @uses EwsUpdateItemResponseMessageType::setConflictResults()
     * @param \StructType\EwsConflictResultsType $conflictResults
     */
    public function __construct(?\StructType\EwsConflictResultsType $conflictResults = null)
    {
        $this
            ->setConflictResults($conflictResults);
    }
    /**
     * Get ConflictResults value
     * @return \StructType\EwsConflictResultsType|null
     */
    public function getConflictResults(): ?\StructType\EwsConflictResultsType
    {
        return $this->ConflictResults;
    }
    /**
     * Set ConflictResults value
     * @param \StructType\EwsConflictResultsType $conflictResults
     * @return \StructType\EwsUpdateItemResponseMessageType
     */
    public function setConflictResults(?\StructType\EwsConflictResultsType $conflictResults = null): self
    {
        $this->ConflictResults = $conflictResults;
        
        return $this;
    }
}
