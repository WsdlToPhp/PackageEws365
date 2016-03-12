<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for NonEmptyArrayOfRequestAttachmentIdsType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsNonEmptyArrayOfRequestAttachmentIdsType extends AbstractStructArrayBase
{
    /**
     * The AttachmentId
     * @var \Ews\StructType\EwsRequestAttachmentIdType
     */
    public $AttachmentId;
    /**
     * Constructor method for NonEmptyArrayOfRequestAttachmentIdsType
     * @uses EwsNonEmptyArrayOfRequestAttachmentIdsType::setAttachmentId()
     * @param \Ews\StructType\EwsRequestAttachmentIdType $attachmentId
     */
    public function __construct(\Ews\StructType\EwsRequestAttachmentIdType $attachmentId = null)
    {
        $this
            ->setAttachmentId($attachmentId);
    }
    /**
     * Get AttachmentId value
     * @return \Ews\StructType\EwsRequestAttachmentIdType|null
     */
    public function getAttachmentId()
    {
        return $this->AttachmentId;
    }
    /**
     * Set AttachmentId value
     * @param \Ews\StructType\EwsRequestAttachmentIdType $attachmentId
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfRequestAttachmentIdsType
     */
    public function setAttachmentId(\Ews\StructType\EwsRequestAttachmentIdType $attachmentId = null)
    {
        $this->AttachmentId = $attachmentId;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsRequestAttachmentIdType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsRequestAttachmentIdType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsRequestAttachmentIdType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsRequestAttachmentIdType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsRequestAttachmentIdType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string AttachmentId
     */
    public function getAttributeName()
    {
        return 'AttachmentId';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfRequestAttachmentIdsType
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
