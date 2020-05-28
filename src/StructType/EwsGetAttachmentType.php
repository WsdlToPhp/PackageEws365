<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \Ews\StructType\EwsAttachmentResponseShapeType
     */
    public $AttachmentShape;
    /**
     * The AttachmentIds
     * @var \Ews\ArrayType\EwsNonEmptyArrayOfRequestAttachmentIdsType
     */
    public $AttachmentIds;
    /**
     * Constructor method for GetAttachmentType
     * @uses EwsGetAttachmentType::setAttachmentShape()
     * @uses EwsGetAttachmentType::setAttachmentIds()
     * @param \Ews\StructType\EwsAttachmentResponseShapeType $attachmentShape
     * @param \Ews\ArrayType\EwsNonEmptyArrayOfRequestAttachmentIdsType $attachmentIds
     */
    public function __construct(\Ews\StructType\EwsAttachmentResponseShapeType $attachmentShape = null, \Ews\ArrayType\EwsNonEmptyArrayOfRequestAttachmentIdsType $attachmentIds = null)
    {
        $this
            ->setAttachmentShape($attachmentShape)
            ->setAttachmentIds($attachmentIds);
    }
    /**
     * Get AttachmentShape value
     * @return \Ews\StructType\EwsAttachmentResponseShapeType|null
     */
    public function getAttachmentShape()
    {
        return $this->AttachmentShape;
    }
    /**
     * Set AttachmentShape value
     * @param \Ews\StructType\EwsAttachmentResponseShapeType $attachmentShape
     * @return \Ews\StructType\EwsGetAttachmentType
     */
    public function setAttachmentShape(\Ews\StructType\EwsAttachmentResponseShapeType $attachmentShape = null)
    {
        $this->AttachmentShape = $attachmentShape;
        return $this;
    }
    /**
     * Get AttachmentIds value
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfRequestAttachmentIdsType|null
     */
    public function getAttachmentIds()
    {
        return $this->AttachmentIds;
    }
    /**
     * Set AttachmentIds value
     * @param \Ews\ArrayType\EwsNonEmptyArrayOfRequestAttachmentIdsType $attachmentIds
     * @return \Ews\StructType\EwsGetAttachmentType
     */
    public function setAttachmentIds(\Ews\ArrayType\EwsNonEmptyArrayOfRequestAttachmentIdsType $attachmentIds = null)
    {
        $this->AttachmentIds = $attachmentIds;
        return $this;
    }
}
