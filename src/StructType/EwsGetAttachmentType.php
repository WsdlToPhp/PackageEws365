<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAttachmentType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetAttachmentType extends EwsBaseRequestType
{
    /**
     * The AttachmentShape
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\EwsAttachmentResponseShapeType|null
     */
    protected ?\StructType\EwsAttachmentResponseShapeType $AttachmentShape = null;
    /**
     * The AttachmentIds
     * @var \ArrayType\EwsNonEmptyArrayOfRequestAttachmentIdsType|null
     */
    protected ?\ArrayType\EwsNonEmptyArrayOfRequestAttachmentIdsType $AttachmentIds = null;
    /**
     * Constructor method for GetAttachmentType
     * @uses EwsGetAttachmentType::setAttachmentShape()
     * @uses EwsGetAttachmentType::setAttachmentIds()
     * @param \StructType\EwsAttachmentResponseShapeType $attachmentShape
     * @param \ArrayType\EwsNonEmptyArrayOfRequestAttachmentIdsType $attachmentIds
     */
    public function __construct(?\StructType\EwsAttachmentResponseShapeType $attachmentShape = null, ?\ArrayType\EwsNonEmptyArrayOfRequestAttachmentIdsType $attachmentIds = null)
    {
        $this
            ->setAttachmentShape($attachmentShape)
            ->setAttachmentIds($attachmentIds);
    }
    /**
     * Get AttachmentShape value
     * @return \StructType\EwsAttachmentResponseShapeType|null
     */
    public function getAttachmentShape(): ?\StructType\EwsAttachmentResponseShapeType
    {
        return $this->AttachmentShape;
    }
    /**
     * Set AttachmentShape value
     * @param \StructType\EwsAttachmentResponseShapeType $attachmentShape
     * @return \StructType\EwsGetAttachmentType
     */
    public function setAttachmentShape(?\StructType\EwsAttachmentResponseShapeType $attachmentShape = null): self
    {
        $this->AttachmentShape = $attachmentShape;
        
        return $this;
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
     * @return \StructType\EwsGetAttachmentType
     */
    public function setAttachmentIds(?\ArrayType\EwsNonEmptyArrayOfRequestAttachmentIdsType $attachmentIds = null): self
    {
        $this->AttachmentIds = $attachmentIds;
        
        return $this;
    }
}
