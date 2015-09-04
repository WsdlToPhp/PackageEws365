<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfFreeBusyResponse ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsArrayOfFreeBusyResponse extends AbstractStructArrayBase
{
    /**
     * The FreeBusyResponse
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var array
     */
    public $FreeBusyResponse;
    /**
     * Constructor method for ArrayOfFreeBusyResponse
     * @uses EwsArrayOfFreeBusyResponse::setFreeBusyResponse()
     * @param array $freeBusyResponse
     */
    public function __construct(array $freeBusyResponse = array())
    {
        $this
            ->setFreeBusyResponse($freeBusyResponse);
    }
    /**
     * Get FreeBusyResponse value
     * @return array
     */
    public function getFreeBusyResponse()
    {
        return $this->FreeBusyResponse;
    }
    /**
     * Set FreeBusyResponse value
     * @param array $freeBusyResponse
     * @return \Ews\ArrayType\EwsArrayOfFreeBusyResponse
     */
    public function setFreeBusyResponse(array $freeBusyResponse = array())
    {
        $this->FreeBusyResponse = $freeBusyResponse;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsFreeBusyResponseType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsFreeBusyResponseType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsFreeBusyResponseType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsFreeBusyResponseType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsFreeBusyResponseType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string FreeBusyResponse
     */
    public function getAttributeName()
    {
        return 'FreeBusyResponse';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsArrayOfFreeBusyResponse
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
