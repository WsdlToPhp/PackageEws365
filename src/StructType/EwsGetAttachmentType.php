<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAttachmentType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsGetAttachmentType extends EwsBaseRequestType
{
    /**
     * The AttachmentShape
     * Meta informations extracted from the WSDL
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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsGetAttachmentType
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
