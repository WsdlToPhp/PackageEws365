<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfUMReportRawCountersType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfUMReportRawCountersType extends AbstractStructArrayBase
{
    /**
     * The UMReportRawCounters
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Ews\StructType\EwsUMReportRawCountersType[]
     */
    public $UMReportRawCounters;
    /**
     * Constructor method for ArrayOfUMReportRawCountersType
     * @uses EwsArrayOfUMReportRawCountersType::setUMReportRawCounters()
     * @param \Ews\StructType\EwsUMReportRawCountersType[] $uMReportRawCounters
     */
    public function __construct(array $uMReportRawCounters = array())
    {
        $this
            ->setUMReportRawCounters($uMReportRawCounters);
    }
    /**
     * Get UMReportRawCounters value
     * @return \Ews\StructType\EwsUMReportRawCountersType[]|null
     */
    public function getUMReportRawCounters()
    {
        return $this->UMReportRawCounters;
    }
    /**
     * This method is responsible for validating the values passed to the setUMReportRawCounters method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUMReportRawCounters method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateUMReportRawCountersForArrayConstraintsFromSetUMReportRawCounters(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfUMReportRawCountersTypeUMReportRawCountersItem) {
            // validation for constraint: itemType
            if (!$arrayOfUMReportRawCountersTypeUMReportRawCountersItem instanceof \Ews\StructType\EwsUMReportRawCountersType) {
                $invalidValues[] = is_object($arrayOfUMReportRawCountersTypeUMReportRawCountersItem) ? get_class($arrayOfUMReportRawCountersTypeUMReportRawCountersItem) : sprintf('%s(%s)', gettype($arrayOfUMReportRawCountersTypeUMReportRawCountersItem), var_export($arrayOfUMReportRawCountersTypeUMReportRawCountersItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The UMReportRawCounters property can only contain items of type \Ews\StructType\EwsUMReportRawCountersType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set UMReportRawCounters value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsUMReportRawCountersType[] $uMReportRawCounters
     * @return \Ews\ArrayType\EwsArrayOfUMReportRawCountersType
     */
    public function setUMReportRawCounters(array $uMReportRawCounters = array())
    {
        // validation for constraint: array
        if ('' !== ($uMReportRawCountersArrayErrorMessage = self::validateUMReportRawCountersForArrayConstraintsFromSetUMReportRawCounters($uMReportRawCounters))) {
            throw new \InvalidArgumentException($uMReportRawCountersArrayErrorMessage, __LINE__);
        }
        $this->UMReportRawCounters = $uMReportRawCounters;
        return $this;
    }
    /**
     * Add item to UMReportRawCounters value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsUMReportRawCountersType $item
     * @return \Ews\ArrayType\EwsArrayOfUMReportRawCountersType
     */
    public function addToUMReportRawCounters(\Ews\StructType\EwsUMReportRawCountersType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsUMReportRawCountersType) {
            throw new \InvalidArgumentException(sprintf('The UMReportRawCounters property can only contain items of type \Ews\StructType\EwsUMReportRawCountersType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->UMReportRawCounters[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsUMReportRawCountersType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsUMReportRawCountersType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsUMReportRawCountersType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsUMReportRawCountersType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsUMReportRawCountersType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string UMReportRawCounters
     */
    public function getAttributeName()
    {
        return 'UMReportRawCounters';
    }
}
