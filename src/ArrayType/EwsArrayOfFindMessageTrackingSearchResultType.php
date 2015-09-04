<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfFindMessageTrackingSearchResultType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsArrayOfFindMessageTrackingSearchResultType extends AbstractStructArrayBase
{
    /**
     * The MessageTrackingSearchResult
     * @var array
     */
    public $MessageTrackingSearchResult;
    /**
     * Constructor method for ArrayOfFindMessageTrackingSearchResultType
     * @uses
     * EwsArrayOfFindMessageTrackingSearchResultType::setMessageTrackingSearchResult()
     * @param array $messageTrackingSearchResult
     */
    public function __construct(array $messageTrackingSearchResult = array())
    {
        $this
            ->setMessageTrackingSearchResult($messageTrackingSearchResult);
    }
    /**
     * Get MessageTrackingSearchResult value
     * @return array
     */
    public function getMessageTrackingSearchResult()
    {
        return $this->MessageTrackingSearchResult;
    }
    /**
     * Set MessageTrackingSearchResult value
     * @param array $messageTrackingSearchResult
     * @return \Ews\ArrayType\EwsArrayOfFindMessageTrackingSearchResultType
     */
    public function setMessageTrackingSearchResult(array $messageTrackingSearchResult = array())
    {
        $this->MessageTrackingSearchResult = $messageTrackingSearchResult;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsFindMessageTrackingSearchResultType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsFindMessageTrackingSearchResultType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsFindMessageTrackingSearchResultType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsFindMessageTrackingSearchResultType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsFindMessageTrackingSearchResultType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string MessageTrackingSearchResult
     */
    public function getAttributeName()
    {
        return 'MessageTrackingSearchResult';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsArrayOfFindMessageTrackingSearchResultType
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
