<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteAttachmentType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsDeleteAttachmentType extends EwsBaseRequestType
{
    /**
     * The AttachmentIds
     * @var \ArrayType\EwsNonEmptyArrayOfRequestAttachmentIdsType|null
     */
    protected ?\ArrayType\EwsNonEmptyArrayOfRequestAttachmentIdsType $AttachmentIds = null;
    /**
     * Constructor method for DeleteAttachmentType
     * @uses EwsDeleteAttachmentType::setAttachmentIds()
     * @param \ArrayType\EwsNonEmptyArrayOfRequestAttachmentIdsType $attachmentIds
     */
    public function __construct(?\ArrayType\EwsNonEmptyArrayOfRequestAttachmentIdsType $attachmentIds = null)
    {
        $this
            ->setAttachmentIds($attachmentIds);
    }
    /**
     * Get AttachmentIds value
     * @return \ArrayType\EwsNonEmptyArrayOfRequestAttachmentIdsType|null
     */
    public function getAttachmentIds(): ?\ArrayType\EwsNonEmptyArrayOfRequestAttachmentIdsType
    {
        return $this->AttachmentIds;
    }
    /**
     * Set AttachmentIds value
     * @param \ArrayType\EwsNonEmptyArrayOfRequestAttachmentIdsType $attachmentIds
     * @return \StructType\EwsDeleteAttachmentType
     */
    public function setAttachmentIds(?\ArrayType\EwsNonEmptyArrayOfRequestAttachmentIdsType $attachmentIds = null): self
    {
        $this->AttachmentIds = $attachmentIds;
        
        return $this;
    }
}
