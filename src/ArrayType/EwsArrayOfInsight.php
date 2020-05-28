<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfInsight ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfInsight extends AbstractStructArrayBase
{
    /**
     * The Insight
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Ews\StructType\EwsInsight[]
     */
    public $Insight;
    /**
     * Constructor method for ArrayOfInsight
     * @uses EwsArrayOfInsight::setInsight()
     * @param \Ews\StructType\EwsInsight[] $insight
     */
    public function __construct(array $insight = array())
    {
        $this
            ->setInsight($insight);
    }
    /**
     * Get Insight value
     * @return \Ews\StructType\EwsInsight[]|null
     */
    public function getInsight()
    {
        return $this->Insight;
    }
    /**
     * This method is responsible for validating the values passed to the setInsight method
     * This method is willingly generated in order to preserve the one-line inline validation within the setInsight method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateInsightForArrayConstraintsFromSetInsight(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfInsightInsightItem) {
            // validation for constraint: itemType
            if (!$arrayOfInsightInsightItem instanceof \Ews\StructType\EwsInsight) {
                $invalidValues[] = is_object($arrayOfInsightInsightItem) ? get_class($arrayOfInsightInsightItem) : sprintf('%s(%s)', gettype($arrayOfInsightInsightItem), var_export($arrayOfInsightInsightItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Insight property can only contain items of type \Ews\StructType\EwsInsight, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Insight value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsInsight[] $insight
     * @return \Ews\ArrayType\EwsArrayOfInsight
     */
    public function setInsight(array $insight = array())
    {
        // validation for constraint: array
        if ('' !== ($insightArrayErrorMessage = self::validateInsightForArrayConstraintsFromSetInsight($insight))) {
            throw new \InvalidArgumentException($insightArrayErrorMessage, __LINE__);
        }
        $this->Insight = $insight;
        return $this;
    }
    /**
     * Add item to Insight value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsInsight $item
     * @return \Ews\ArrayType\EwsArrayOfInsight
     */
    public function addToInsight(\Ews\StructType\EwsInsight $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsInsight) {
            throw new \InvalidArgumentException(sprintf('The Insight property can only contain items of type \Ews\StructType\EwsInsight, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Insight[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsInsight|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsInsight|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsInsight|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsInsight|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsInsight|null
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
}
