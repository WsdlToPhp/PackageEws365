<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfUMCallDataRecordsType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfUMCallDataRecordsType extends AbstractStructArrayBase
{
    /**
     * The CDRData
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Ews\StructType\EwsCDRDataType[]
     */
    public $CDRData;
    /**
     * Constructor method for ArrayOfUMCallDataRecordsType
     * @uses EwsArrayOfUMCallDataRecordsType::setCDRData()
     * @param \Ews\StructType\EwsCDRDataType[] $cDRData
     */
    public function __construct(array $cDRData = array())
    {
        $this
            ->setCDRData($cDRData);
    }
    /**
     * Get CDRData value
     * @return \Ews\StructType\EwsCDRDataType[]|null
     */
    public function getCDRData()
    {
        return $this->CDRData;
    }
    /**
     * This method is responsible for validating the values passed to the setCDRData method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCDRData method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCDRDataForArrayConstraintsFromSetCDRData(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfUMCallDataRecordsTypeCDRDataItem) {
            // validation for constraint: itemType
            if (!$arrayOfUMCallDataRecordsTypeCDRDataItem instanceof \Ews\StructType\EwsCDRDataType) {
                $invalidValues[] = is_object($arrayOfUMCallDataRecordsTypeCDRDataItem) ? get_class($arrayOfUMCallDataRecordsTypeCDRDataItem) : sprintf('%s(%s)', gettype($arrayOfUMCallDataRecordsTypeCDRDataItem), var_export($arrayOfUMCallDataRecordsTypeCDRDataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The CDRData property can only contain items of type \Ews\StructType\EwsCDRDataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set CDRData value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsCDRDataType[] $cDRData
     * @return \Ews\ArrayType\EwsArrayOfUMCallDataRecordsType
     */
    public function setCDRData(array $cDRData = array())
    {
        // validation for constraint: array
        if ('' !== ($cDRDataArrayErrorMessage = self::validateCDRDataForArrayConstraintsFromSetCDRData($cDRData))) {
            throw new \InvalidArgumentException($cDRDataArrayErrorMessage, __LINE__);
        }
        $this->CDRData = $cDRData;
        return $this;
    }
    /**
     * Add item to CDRData value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsCDRDataType $item
     * @return \Ews\ArrayType\EwsArrayOfUMCallDataRecordsType
     */
    public function addToCDRData(\Ews\StructType\EwsCDRDataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsCDRDataType) {
            throw new \InvalidArgumentException(sprintf('The CDRData property can only contain items of type \Ews\StructType\EwsCDRDataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->CDRData[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsCDRDataType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsCDRDataType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsCDRDataType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsCDRDataType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsCDRDataType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string CDRData
     */
    public function getAttributeName()
    {
        return 'CDRData';
    }
}
