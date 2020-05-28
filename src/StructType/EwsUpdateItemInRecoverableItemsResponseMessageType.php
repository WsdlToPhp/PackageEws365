<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \Ews\StructType\EwsArrayOfAttachmentsType
     */
    public $Attachments;
    /**
     * The ConflictResults
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsConflictResultsType
     */
    public $ConflictResults;
    /**
     * Constructor method for UpdateItemInRecoverableItemsResponseMessageType
     * @uses EwsUpdateItemInRecoverableItemsResponseMessageType::setAttachments()
     * @uses EwsUpdateItemInRecoverableItemsResponseMessageType::setConflictResults()
     * @param \Ews\StructType\EwsArrayOfAttachmentsType $attachments
     * @param \Ews\StructType\EwsConflictResultsType $conflictResults
     */
    public function __construct(\Ews\StructType\EwsArrayOfAttachmentsType $attachments = null, \Ews\StructType\EwsConflictResultsType $conflictResults = null)
    {
        $this
            ->setAttachments($attachments)
            ->setConflictResults($conflictResults);
    }
    /**
     * Get Attachments value
     * @return \Ews\StructType\EwsArrayOfAttachmentsType|null
     */
    public function getAttachments()
    {
        return $this->Attachments;
    }
    /**
     * Set Attachments value
     * @param \Ews\StructType\EwsArrayOfAttachmentsType $attachments
     * @return \Ews\StructType\EwsUpdateItemInRecoverableItemsResponseMessageType
     */
    public function setAttachments(\Ews\StructType\EwsArrayOfAttachmentsType $attachments = null)
    {
        $this->Attachments = $attachments;
        return $this;
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
     * @return \Ews\StructType\EwsUpdateItemInRecoverableItemsResponseMessageType
     */
    public function setConflictResults(\Ews\StructType\EwsConflictResultsType $conflictResults = null)
    {
        $this->ConflictResults = $conflictResults;
        return $this;
    }
}
