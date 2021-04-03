<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * Meta information extracted from the WSDL
     * - minOccurs: 1
     * @var \StructType\EwsItemIdType
     */
    protected \StructType\EwsItemIdType $ParentItemId;
    /**
     * The Attachments
     * @var \StructType\EwsNonEmptyArrayOfAttachmentsType|null
     */
    protected ?\StructType\EwsNonEmptyArrayOfAttachmentsType $Attachments = null;
    /**
     * Constructor method for CreateAttachmentType
     * @uses EwsCreateAttachmentType::setParentItemId()
     * @uses EwsCreateAttachmentType::setAttachments()
     * @param \StructType\EwsItemIdType $parentItemId
     * @param \StructType\EwsNonEmptyArrayOfAttachmentsType $attachments
     */
    public function __construct(\StructType\EwsItemIdType $parentItemId, ?\StructType\EwsNonEmptyArrayOfAttachmentsType $attachments = null)
    {
        $this
            ->setParentItemId($parentItemId)
            ->setAttachments($attachments);
    }
    /**
     * Get ParentItemId value
     * @return \StructType\EwsItemIdType
     */
    public function getParentItemId(): \StructType\EwsItemIdType
    {
        return $this->ParentItemId;
    }
    /**
     * Set ParentItemId value
     * @param \StructType\EwsItemIdType $parentItemId
     * @return \StructType\EwsCreateAttachmentType
     */
    public function setParentItemId(\StructType\EwsItemIdType $parentItemId): self
    {
        $this->ParentItemId = $parentItemId;
        
        return $this;
    }
    /**
     * Get Attachments value
     * @return \StructType\EwsNonEmptyArrayOfAttachmentsType|null
     */
    public function getAttachments(): ?\StructType\EwsNonEmptyArrayOfAttachmentsType
    {
        return $this->Attachments;
    }
    /**
     * Set Attachments value
     * @param \StructType\EwsNonEmptyArrayOfAttachmentsType $attachments
     * @return \StructType\EwsCreateAttachmentType
     */
    public function setAttachments(?\StructType\EwsNonEmptyArrayOfAttachmentsType $attachments = null): self
    {
        $this->Attachments = $attachments;
        
        return $this;
    }
}
