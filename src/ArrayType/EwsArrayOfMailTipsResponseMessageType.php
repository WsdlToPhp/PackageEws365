<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfMailTipsResponseMessageType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfMailTipsResponseMessageType extends AbstractStructArrayBase
{
    /**
     * The MailTipsResponseMessageType
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var array
     */
    public $MailTipsResponseMessageType;
    /**
     * Constructor method for ArrayOfMailTipsResponseMessageType
     * @uses EwsArrayOfMailTipsResponseMessageType::setMailTipsResponseMessageType()
     * @param array $mailTipsResponseMessageType
     */
    public function __construct(array $mailTipsResponseMessageType = array())
    {
        $this
            ->setMailTipsResponseMessageType($mailTipsResponseMessageType);
    }
    /**
     * Get MailTipsResponseMessageType value
     * @return array
     */
    public function getMailTipsResponseMessageType()
    {
        return $this->MailTipsResponseMessageType;
    }
    /**
     * Set MailTipsResponseMessageType value
     * @param array $mailTipsResponseMessageType
     * @return \Ews\ArrayType\EwsArrayOfMailTipsResponseMessageType
     */
    public function setMailTipsResponseMessageType(array $mailTipsResponseMessageType = array())
    {
        $this->MailTipsResponseMessageType = $mailTipsResponseMessageType;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsMailTipsResponseMessageType
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsMailTipsResponseMessageType
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsMailTipsResponseMessageType
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsMailTipsResponseMessageType
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsMailTipsResponseMessageType
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string MailTipsResponseMessageType
     */
    public function getAttributeName()
    {
        return 'MailTipsResponseMessageType';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsArrayOfMailTipsResponseMessageType
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
