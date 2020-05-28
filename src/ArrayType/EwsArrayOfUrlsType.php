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
     * Meta information extracted from the WSDL
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
     * This method is responsible for validating the values passed to the setUrl method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUrl method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateUrlForArrayConstraintsFromSetUrl(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfUrlsTypeUrlItem) {
            // validation for constraint: itemType
            if (!is_string($arrayOfUrlsTypeUrlItem)) {
                $invalidValues[] = is_object($arrayOfUrlsTypeUrlItem) ? get_class($arrayOfUrlsTypeUrlItem) : sprintf('%s(%s)', gettype($arrayOfUrlsTypeUrlItem), var_export($arrayOfUrlsTypeUrlItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Url property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Url value
     * @throws \InvalidArgumentException
     * @param string[] $url
     * @return \Ews\ArrayType\EwsArrayOfUrlsType
     */
    public function setUrl(array $url = array())
    {
        // validation for constraint: array
        if ('' !== ($urlArrayErrorMessage = self::validateUrlForArrayConstraintsFromSetUrl($url))) {
            throw new \InvalidArgumentException($urlArrayErrorMessage, __LINE__);
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
            throw new \InvalidArgumentException(sprintf('The Url property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
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
}
