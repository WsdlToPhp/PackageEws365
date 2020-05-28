<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \Ews\StructType\EwsConflictResultsType
     */
    public $ConflictResults;
    /**
     * Constructor method for UpdateItemResponseMessageType
     * @uses EwsUpdateItemResponseMessageType::setConflictResults()
     * @param \Ews\StructType\EwsConflictResultsType $conflictResults
     */
    public function __construct(\Ews\StructType\EwsConflictResultsType $conflictResults = null)
    {
        $this
            ->setConflictResults($conflictResults);
    }
    /**
     * Get ConflictResults value
     * @return \Ews\StructType\EwsConflictResultsType|null
     */
    public function getConflictResults()
    {
        return $this->ConflictResults;
    }
    /**
     * Set ConflictResults value
     * @param \Ews\StructType\EwsConflictResultsType $conflictResults
     * @return \Ews\StructType\EwsUpdateItemResponseMessageType
     */
    public function setConflictResults(\Ews\StructType\EwsConflictResultsType $conflictResults = null)
    {
        $this->ConflictResults = $conflictResults;
        return $this;
    }
}
