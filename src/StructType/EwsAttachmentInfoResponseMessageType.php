<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AttachmentInfoResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsAttachmentInfoResponseMessageType extends EwsResponseMessageType
{
    /**
     * The Attachments
     * @var \Ews\StructType\EwsArrayOfAttachmentsType
     */
    public $Attachments;
    /**
     * Constructor method for AttachmentInfoResponseMessageType
     * @uses EwsAttachmentInfoResponseMessageType::setAttachments()
     * @param \Ews\StructType\EwsArrayOfAttachmentsType $attachments
     */
    public function __construct(\Ews\StructType\EwsArrayOfAttachmentsType $attachments = null)
    {
        $this
            ->setAttachments($attachments);
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
     * @return \Ews\StructType\EwsAttachmentInfoResponseMessageType
     */
    public function setAttachments(\Ews\StructType\EwsArrayOfAttachmentsType $attachments = null)
    {
        $this->Attachments = $attachments;
        return $this;
    }
}
