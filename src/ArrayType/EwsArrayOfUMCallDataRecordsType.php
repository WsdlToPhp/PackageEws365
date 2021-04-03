<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

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
     * @var \StructType\EwsCDRDataType[]
     */
    protected array $CDRData = [];
    /**
     * Constructor method for ArrayOfUMCallDataRecordsType
     * @uses EwsArrayOfUMCallDataRecordsType::setCDRData()
     * @param \StructType\EwsCDRDataType[] $cDRData
     */
    public function __construct(array $cDRData = [])
    {
        $this
            ->setCDRData($cDRData);
    }
    /**
     * Get CDRData value
     * @return \StructType\EwsCDRDataType[]
     */
    public function getCDRData(): array
    {
        return $this->CDRData;
    }
    /**
     * This method is responsible for validating the values passed to the setCDRData method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCDRData method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCDRDataForArrayConstraintsFromSetCDRData(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfUMCallDataRecordsTypeCDRDataItem) {
            // validation for constraint: itemType
            if (!$arrayOfUMCallDataRecordsTypeCDRDataItem instanceof \StructType\EwsCDRDataType) {
                $invalidValues[] = is_object($arrayOfUMCallDataRecordsTypeCDRDataItem) ? get_class($arrayOfUMCallDataRecordsTypeCDRDataItem) : sprintf('%s(%s)', gettype($arrayOfUMCallDataRecordsTypeCDRDataItem), var_export($arrayOfUMCallDataRecordsTypeCDRDataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The CDRData property can only contain items of type \StructType\EwsCDRDataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set CDRData value
     * @throws InvalidArgumentException
     * @param \StructType\EwsCDRDataType[] $cDRData
     * @return \ArrayType\EwsArrayOfUMCallDataRecordsType
     */
    public function setCDRData(array $cDRData = []): self
    {
        // validation for constraint: array
        if ('' !== ($cDRDataArrayErrorMessage = self::validateCDRDataForArrayConstraintsFromSetCDRData($cDRData))) {
            throw new InvalidArgumentException($cDRDataArrayErrorMessage, __LINE__);
        }
        $this->CDRData = $cDRData;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\EwsCDRDataType|null
     */
    public function current(): ?\StructType\EwsCDRDataType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EwsCDRDataType|null
     */
    public function item($index): ?\StructType\EwsCDRDataType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EwsCDRDataType|null
     */
    public function first(): ?\StructType\EwsCDRDataType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EwsCDRDataType|null
     */
    public function last(): ?\StructType\EwsCDRDataType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EwsCDRDataType|null
     */
    public function offsetGet($offset): ?\StructType\EwsCDRDataType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EwsCDRDataType $item
     * @return \ArrayType\EwsArrayOfUMCallDataRecordsType
     */
    public function add(\StructType\EwsCDRDataType $item): self
    {
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string CDRData
     */
    public function getAttributeName(): string
    {
        return 'CDRData';
    }
}
