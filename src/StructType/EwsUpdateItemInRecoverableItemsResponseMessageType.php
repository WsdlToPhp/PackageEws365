<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateItemInRecoverableItemsResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsUpdateItemInRecoverableItemsResponseMessageType extends EwsItemInfoResponseMessageType
{
    /**
     * The Attachments
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\EwsArrayOfAttachmentsType|null
     */
    protected ?\StructType\EwsArrayOfAttachmentsType $Attachments = null;
    /**
     * The ConflictResults
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\EwsConflictResultsType|null
     */
    protected ?\StructType\EwsConflictResultsType $ConflictResults = null;
    /**
     * Constructor method for UpdateItemInRecoverableItemsResponseMessageType
     * @uses EwsUpdateItemInRecoverableItemsResponseMessageType::setAttachments()
     * @uses EwsUpdateItemInRecoverableItemsResponseMessageType::setConflictResults()
     * @param \StructType\EwsArrayOfAttachmentsType $attachments
     * @param \StructType\EwsConflictResultsType $conflictResults
     */
    public function __construct(?\StructType\EwsArrayOfAttachmentsType $attachments = null, ?\StructType\EwsConflictResultsType $conflictResults = null)
    {
        $this
            ->setAttachments($attachments)
            ->setConflictResults($conflictResults);
    }
    /**
     * Get Attachments value
     * @return \StructType\EwsArrayOfAttachmentsType|null
     */
    public function getAttachments(): ?\StructType\EwsArrayOfAttachmentsType
    {
        return $this->Attachments;
    }
    /**
     * Set Attachments value
     * @param \StructType\EwsArrayOfAttachmentsType $attachments
     * @return \StructType\EwsUpdateItemInRecoverableItemsResponseMessageType
     */
    public function setAttachments(?\StructType\EwsArrayOfAttachmentsType $attachments = null): self
    {
        $this->Attachments = $attachments;
        
        return $this;
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
     * @return \StructType\EwsUpdateItemInRecoverableItemsResponseMessageType
     */
    public function setConflictResults(?\StructType\EwsConflictResultsType $conflictResults = null): self
    {
        $this->ConflictResults = $conflictResults;
        
        return $this;
    }
}
