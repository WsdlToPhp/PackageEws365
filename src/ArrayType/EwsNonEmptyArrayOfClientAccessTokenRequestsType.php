<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for NonEmptyArrayOfClientAccessTokenRequestsType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsNonEmptyArrayOfClientAccessTokenRequestsType extends AbstractStructArrayBase
{
    /**
     * The TokenRequest
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var array
     */
    public $TokenRequest;
    /**
     * Constructor method for NonEmptyArrayOfClientAccessTokenRequestsType
     * @uses EwsNonEmptyArrayOfClientAccessTokenRequestsType::setTokenRequest()
     * @param array $tokenRequest
     */
    public function __construct(array $tokenRequest = array())
    {
        $this
            ->setTokenRequest($tokenRequest);
    }
    /**
     * Get TokenRequest value
     * @return array
     */
    public function getTokenRequest()
    {
        return $this->TokenRequest;
    }
    /**
     * Set TokenRequest value
     * @param array $tokenRequest
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfClientAccessTokenRequestsType
     */
    public function setTokenRequest(array $tokenRequest = array())
    {
        $this->TokenRequest = $tokenRequest;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsClientAccessTokenRequestType
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsClientAccessTokenRequestType
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsClientAccessTokenRequestType
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsClientAccessTokenRequestType
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsClientAccessTokenRequestType
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string TokenRequest
     */
    public function getAttributeName()
    {
        return 'TokenRequest';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfClientAccessTokenRequestsType
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
