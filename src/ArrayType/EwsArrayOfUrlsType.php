<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfUrlsType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfUrlsType extends AbstractStructArrayBase
{
    /**
     * The Url
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $Url;
    /**
     * Constructor method for ArrayOfUrlsType
     * @uses EwsArrayOfUrlsType::setUrl()
     * @param string[] $url
     */
    public function __construct(array $url = array())
    {
        $this
            ->setUrl($url);
    }
    /**
     * Get Url value
     * @return string[]|null
     */
    public function getUrl()
    {
        return $this->Url;
    }
    /**
     * Set Url value
     * @throws \InvalidArgumentException
     * @param string[] $url
     * @return \Ews\ArrayType\EwsArrayOfUrlsType
     */
    public function setUrl(array $url = array())
    {
        foreach ($url as $arrayOfUrlsTypeUrlItem) {
            // validation for constraint: itemType
            if (!is_string($arrayOfUrlsTypeUrlItem)) {
                throw new \InvalidArgumentException(sprintf('The Url property can only contain items of string, "%s" given', is_object($arrayOfUrlsTypeUrlItem) ? get_class($arrayOfUrlsTypeUrlItem) : gettype($arrayOfUrlsTypeUrlItem)), __LINE__);
            }
        }
        $this->Url = $url;
        return $this;
    }
    /**
     * Add item to Url value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Ews\ArrayType\EwsArrayOfUrlsType
     */
    public function addToUrl($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The Url property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Url[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return string|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return string|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return string|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return string|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return string|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Url
     */
    public function getAttributeName()
    {
        return 'Url';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsArrayOfUrlsType
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
