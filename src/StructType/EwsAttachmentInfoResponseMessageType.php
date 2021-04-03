<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \StructType\EwsArrayOfAttachmentsType|null
     */
    protected ?\StructType\EwsArrayOfAttachmentsType $Attachments = null;
    /**
     * Constructor method for AttachmentInfoResponseMessageType
     * @uses EwsAttachmentInfoResponseMessageType::setAttachments()
     * @param \StructType\EwsArrayOfAttachmentsType $attachments
     */
    public function __construct(?\StructType\EwsArrayOfAttachmentsType $attachments = null)
    {
        $this
            ->setAttachments($attachments);
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
     * @return \StructType\EwsAttachmentInfoResponseMessageType
     */
    public function setAttachments(?\StructType\EwsArrayOfAttachmentsType $attachments = null): self
    {
        $this->Attachments = $attachments;
        
        return $this;
    }
}
