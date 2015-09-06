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
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsArrayOfAttachmentsType
     */
    public $Attachments;
    /**
     * The ConflictResults
     * Meta informations extracted from the WSDL
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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsUpdateItemInRecoverableItemsResponseMessageType
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
