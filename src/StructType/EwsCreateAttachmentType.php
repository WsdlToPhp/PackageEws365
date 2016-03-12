<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateAttachmentType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsCreateAttachmentType extends EwsBaseRequestType
{
    /**
     * The ParentItemId
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var \Ews\StructType\EwsItemIdType
     */
    public $ParentItemId;
    /**
     * The Attachments
     * @var \Ews\StructType\EwsNonEmptyArrayOfAttachmentsType
     */
    public $Attachments;
    /**
     * Constructor method for CreateAttachmentType
     * @uses EwsCreateAttachmentType::setParentItemId()
     * @uses EwsCreateAttachmentType::setAttachments()
     * @param \Ews\StructType\EwsItemIdType $parentItemId
     * @param \Ews\StructType\EwsNonEmptyArrayOfAttachmentsType $attachments
     */
    public function __construct(\Ews\StructType\EwsItemIdType $parentItemId = null, \Ews\StructType\EwsNonEmptyArrayOfAttachmentsType $attachments = null)
    {
        $this
            ->setParentItemId($parentItemId)
            ->setAttachments($attachments);
    }
    /**
     * Get ParentItemId value
     * @return \Ews\StructType\EwsItemIdType
     */
    public function getParentItemId()
    {
        return $this->ParentItemId;
    }
    /**
     * Set ParentItemId value
     * @param \Ews\StructType\EwsItemIdType $parentItemId
     * @return \Ews\StructType\EwsCreateAttachmentType
     */
    public function setParentItemId(\Ews\StructType\EwsItemIdType $parentItemId = null)
    {
        $this->ParentItemId = $parentItemId;
        return $this;
    }
    /**
     * Get Attachments value
     * @return \Ews\StructType\EwsNonEmptyArrayOfAttachmentsType|null
     */
    public function getAttachments()
    {
        return $this->Attachments;
    }
    /**
     * Set Attachments value
     * @param \Ews\StructType\EwsNonEmptyArrayOfAttachmentsType $attachments
     * @return \Ews\StructType\EwsCreateAttachmentType
     */
    public function setAttachments(\Ews\StructType\EwsNonEmptyArrayOfAttachmentsType $attachments = null)
    {
        $this->Attachments = $attachments;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsCreateAttachmentType
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
