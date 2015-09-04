<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteAttachmentType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsDeleteAttachmentType
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
