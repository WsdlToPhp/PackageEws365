<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfInsightItemType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfInsightItemType extends AbstractStructArrayBase
{
    /**
     * The Insight
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Ews\StructType\EwsInsightItemType[]
     */
    public $Insight;
    /**
     * Constructor method for ArrayOfInsightItemType
     * @uses EwsArrayOfInsightItemType::setInsight()
     * @param \Ews\StructType\EwsInsightItemType[] $insight
     */
    public function __construct(array $insight = array())
    {
        $this
            ->setInsight($insight);
    }
    /**
     * Get Insight value
     * @return \Ews\StructType\EwsInsightItemType[]|null
     */
    public function getInsight()
    {
        return $this->Insight;
    }
    /**
     * Set Insight value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsInsightItemType[] $insight
     * @return \Ews\ArrayType\EwsArrayOfInsightItemType
     */
    public function setInsight(array $insight = array())
    {
        foreach ($insight as $arrayOfInsightItemTypeInsightItem) {
            // validation for constraint: itemType
            if (!$arrayOfInsightItemTypeInsightItem instanceof \Ews\StructType\EwsInsightItemType) {
                throw new \InvalidArgumentException(sprintf('The Insight property can only contain items of \Ews\StructType\EwsInsightItemType, "%s" given', is_object($arrayOfInsightItemTypeInsightItem) ? get_class($arrayOfInsightItemTypeInsightItem) : gettype($arrayOfInsightItemTypeInsightItem)), __LINE__);
            }
        }
        $this->Insight = $insight;
        return $this;
    }
    /**
     * Add item to Insight value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsInsightItemType $item
     * @return \Ews\ArrayType\EwsArrayOfInsightItemType
     */
    public function addToInsight(\Ews\StructType\EwsInsightItemType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsInsightItemType) {
            throw new \InvalidArgumentException(sprintf('The Insight property can only contain items of \Ews\StructType\EwsInsightItemType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Insight[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsInsightItemType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsInsightItemType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsInsightItemType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsInsightItemType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsInsightItemType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Insight
     */
    public function getAttributeName()
    {
        return 'Insight';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsArrayOfInsightItemType
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
