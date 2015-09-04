<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NonEmptyArrayOfAttachmentsType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsNonEmptyArrayOfAttachmentsType extends AbstractStructBase
{
    /**
     * The ItemAttachment
     * @var \Ews\StructType\EwsItemAttachmentType
     */
    public $ItemAttachment;
    /**
     * The FileAttachment
     * @var \Ews\StructType\EwsFileAttachmentType
     */
    public $FileAttachment;
    /**
     * The ReferenceAttachment
     * @var \Ews\StructType\EwsReferenceAttachmentType
     */
    public $ReferenceAttachment;
    /**
     * Constructor method for NonEmptyArrayOfAttachmentsType
     * @uses EwsNonEmptyArrayOfAttachmentsType::setItemAttachment()
     * @uses EwsNonEmptyArrayOfAttachmentsType::setFileAttachment()
     * @uses EwsNonEmptyArrayOfAttachmentsType::setReferenceAttachment()
     * @param \Ews\StructType\EwsItemAttachmentType $itemAttachment
     * @param \Ews\StructType\EwsFileAttachmentType $fileAttachment
     * @param \Ews\StructType\EwsReferenceAttachmentType $referenceAttachment
     */
    public function __construct(\Ews\StructType\EwsItemAttachmentType $itemAttachment = null, \Ews\StructType\EwsFileAttachmentType $fileAttachment = null, \Ews\StructType\EwsReferenceAttachmentType $referenceAttachment = null)
    {
        $this
            ->setItemAttachment($itemAttachment)
            ->setFileAttachment($fileAttachment)
            ->setReferenceAttachment($referenceAttachment);
    }
    /**
     * Get ItemAttachment value
     * @return \Ews\StructType\EwsItemAttachmentType|null
     */
    public function getItemAttachment()
    {
        return $this->ItemAttachment;
    }
    /**
     * Set ItemAttachment value
     * @param \Ews\StructType\EwsItemAttachmentType $itemAttachment
     * @return \Ews\StructType\EwsNonEmptyArrayOfAttachmentsType
     */
    public function setItemAttachment(\Ews\StructType\EwsItemAttachmentType $itemAttachment = null)
    {
        $this->ItemAttachment = $itemAttachment;
        return $this;
    }
    /**
     * Get FileAttachment value
     * @return \Ews\StructType\EwsFileAttachmentType|null
     */
    public function getFileAttachment()
    {
        return $this->FileAttachment;
    }
    /**
     * Set FileAttachment value
     * @param \Ews\StructType\EwsFileAttachmentType $fileAttachment
     * @return \Ews\StructType\EwsNonEmptyArrayOfAttachmentsType
     */
    public function setFileAttachment(\Ews\StructType\EwsFileAttachmentType $fileAttachment = null)
    {
        $this->FileAttachment = $fileAttachment;
        return $this;
    }
    /**
     * Get ReferenceAttachment value
     * @return \Ews\StructType\EwsReferenceAttachmentType|null
     */
    public function getReferenceAttachment()
    {
        return $this->ReferenceAttachment;
    }
    /**
     * Set ReferenceAttachment value
     * @param \Ews\StructType\EwsReferenceAttachmentType $referenceAttachment
     * @return \Ews\StructType\EwsNonEmptyArrayOfAttachmentsType
     */
    public function setReferenceAttachment(\Ews\StructType\EwsReferenceAttachmentType $referenceAttachment = null)
    {
        $this->ReferenceAttachment = $referenceAttachment;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsNonEmptyArrayOfAttachmentsType
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
