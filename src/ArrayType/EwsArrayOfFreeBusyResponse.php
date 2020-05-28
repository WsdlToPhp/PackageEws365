<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfFreeBusyResponse ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfFreeBusyResponse extends AbstractStructArrayBase
{
    /**
     * The FreeBusyResponse
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Ews\StructType\EwsFreeBusyResponseType[]
     */
    public $FreeBusyResponse;
    /**
     * Constructor method for ArrayOfFreeBusyResponse
     * @uses EwsArrayOfFreeBusyResponse::setFreeBusyResponse()
     * @param \Ews\StructType\EwsFreeBusyResponseType[] $freeBusyResponse
     */
    public function __construct(array $freeBusyResponse = array())
    {
        $this
            ->setFreeBusyResponse($freeBusyResponse);
    }
    /**
     * Get FreeBusyResponse value
     * @return \Ews\StructType\EwsFreeBusyResponseType[]|null
     */
    public function getFreeBusyResponse()
    {
        return $this->FreeBusyResponse;
    }
    /**
     * This method is responsible for validating the values passed to the setFreeBusyResponse method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFreeBusyResponse method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFreeBusyResponseForArrayConstraintsFromSetFreeBusyResponse(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfFreeBusyResponseFreeBusyResponseItem) {
            // validation for constraint: itemType
            if (!$arrayOfFreeBusyResponseFreeBusyResponseItem instanceof \Ews\StructType\EwsFreeBusyResponseType) {
                $invalidValues[] = is_object($arrayOfFreeBusyResponseFreeBusyResponseItem) ? get_class($arrayOfFreeBusyResponseFreeBusyResponseItem) : sprintf('%s(%s)', gettype($arrayOfFreeBusyResponseFreeBusyResponseItem), var_export($arrayOfFreeBusyResponseFreeBusyResponseItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The FreeBusyResponse property can only contain items of type \Ews\StructType\EwsFreeBusyResponseType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set FreeBusyResponse value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsFreeBusyResponseType[] $freeBusyResponse
     * @return \Ews\ArrayType\EwsArrayOfFreeBusyResponse
     */
    public function setFreeBusyResponse(array $freeBusyResponse = array())
    {
        // validation for constraint: array
        if ('' !== ($freeBusyResponseArrayErrorMessage = self::validateFreeBusyResponseForArrayConstraintsFromSetFreeBusyResponse($freeBusyResponse))) {
            throw new \InvalidArgumentException($freeBusyResponseArrayErrorMessage, __LINE__);
        }
        $this->FreeBusyResponse = $freeBusyResponse;
        return $this;
    }
    /**
     * Add item to FreeBusyResponse value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsFreeBusyResponseType $item
     * @return \Ews\ArrayType\EwsArrayOfFreeBusyResponse
     */
    public function addToFreeBusyResponse(\Ews\StructType\EwsFreeBusyResponseType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsFreeBusyResponseType) {
            throw new \InvalidArgumentException(sprintf('The FreeBusyResponse property can only contain items of type \Ews\StructType\EwsFreeBusyResponseType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->FreeBusyResponse[] = $item;
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
}
