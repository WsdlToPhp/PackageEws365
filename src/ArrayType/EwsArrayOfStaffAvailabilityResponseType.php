<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfStaffAvailabilityResponseType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfStaffAvailabilityResponseType extends AbstractStructArrayBase
{
    /**
     * The Response
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Ews\StructType\EwsStaffAvailabilityResponseType[]
     */
    public $Response;
    /**
     * Constructor method for ArrayOfStaffAvailabilityResponseType
     * @uses EwsArrayOfStaffAvailabilityResponseType::setResponse()
     * @param \Ews\StructType\EwsStaffAvailabilityResponseType[] $response
     */
    public function __construct(array $response = array())
    {
        $this
            ->setResponse($response);
    }
    /**
     * Get Response value
     * @return \Ews\StructType\EwsStaffAvailabilityResponseType[]|null
     */
    public function getResponse()
    {
        return $this->Response;
    }
    /**
     * This method is responsible for validating the values passed to the setResponse method
     * This method is willingly generated in order to preserve the one-line inline validation within the setResponse method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateResponseForArrayConstraintsFromSetResponse(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfStaffAvailabilityResponseTypeResponseItem) {
            // validation for constraint: itemType
            if (!$arrayOfStaffAvailabilityResponseTypeResponseItem instanceof \Ews\StructType\EwsStaffAvailabilityResponseType) {
                $invalidValues[] = is_object($arrayOfStaffAvailabilityResponseTypeResponseItem) ? get_class($arrayOfStaffAvailabilityResponseTypeResponseItem) : sprintf('%s(%s)', gettype($arrayOfStaffAvailabilityResponseTypeResponseItem), var_export($arrayOfStaffAvailabilityResponseTypeResponseItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Response property can only contain items of type \Ews\StructType\EwsStaffAvailabilityResponseType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Response value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsStaffAvailabilityResponseType[] $response
     * @return \Ews\ArrayType\EwsArrayOfStaffAvailabilityResponseType
     */
    public function setResponse(array $response = array())
    {
        // validation for constraint: array
        if ('' !== ($responseArrayErrorMessage = self::validateResponseForArrayConstraintsFromSetResponse($response))) {
            throw new \InvalidArgumentException($responseArrayErrorMessage, __LINE__);
        }
        $this->Response = $response;
        return $this;
    }
    /**
     * Add item to Response value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsStaffAvailabilityResponseType $item
     * @return \Ews\ArrayType\EwsArrayOfStaffAvailabilityResponseType
     */
    public function addToResponse(\Ews\StructType\EwsStaffAvailabilityResponseType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsStaffAvailabilityResponseType) {
            throw new \InvalidArgumentException(sprintf('The Response property can only contain items of type \Ews\StructType\EwsStaffAvailabilityResponseType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Response[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsStaffAvailabilityResponseType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsStaffAvailabilityResponseType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsStaffAvailabilityResponseType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsStaffAvailabilityResponseType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsStaffAvailabilityResponseType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Response
     */
    public function getAttributeName()
    {
        return 'Response';
    }
}
