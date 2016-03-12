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
     * Meta informations extracted from the WSDL
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
     * Set CDRData value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsCDRDataType[] $cDRData
     * @return \Ews\ArrayType\EwsArrayOfUMCallDataRecordsType
     */
    public function setCDRData(array $cDRData = array())
    {
        foreach ($cDRData as $arrayOfUMCallDataRecordsTypeCDRDataItem) {
            // validation for constraint: itemType
            if (!$arrayOfUMCallDataRecordsTypeCDRDataItem instanceof \Ews\StructType\EwsCDRDataType) {
                throw new \InvalidArgumentException(sprintf('The CDRData property can only contain items of \Ews\StructType\EwsCDRDataType, "%s" given', is_object($arrayOfUMCallDataRecordsTypeCDRDataItem) ? get_class($arrayOfUMCallDataRecordsTypeCDRDataItem) : gettype($arrayOfUMCallDataRecordsTypeCDRDataItem)), __LINE__);
            }
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
            throw new \InvalidArgumentException(sprintf('The CDRData property can only contain items of \Ews\StructType\EwsCDRDataType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsArrayOfUMCallDataRecordsType
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
