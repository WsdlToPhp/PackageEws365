<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \Ews\ArrayType\EwsNonEmptyArrayOfRequestAttachmentIdsType
     */
    public $AttachmentIds;
    /**
     * Constructor method for DeleteAttachmentType
     * @uses EwsDeleteAttachmentType::setAttachmentIds()
     * @param \Ews\ArrayType\EwsNonEmptyArrayOfRequestAttachmentIdsType $attachmentIds
     */
    public function __construct(\Ews\ArrayType\EwsNonEmptyArrayOfRequestAttachmentIdsType $attachmentIds = null)
    {
        $this
            ->setAttachmentIds($attachmentIds);
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
     * @return \Ews\StructType\EwsDeleteAttachmentType
     */
    public function setAttachmentIds(\Ews\ArrayType\EwsNonEmptyArrayOfRequestAttachmentIdsType $attachmentIds = null)
    {
        $this->AttachmentIds = $attachmentIds;
        return $this;
    }
}
