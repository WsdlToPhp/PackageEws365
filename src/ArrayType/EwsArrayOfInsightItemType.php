<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

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
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\EwsInsightItemType[]
     */
    protected array $Insight = [];
    /**
     * Constructor method for ArrayOfInsightItemType
     * @uses EwsArrayOfInsightItemType::setInsight()
     * @param \StructType\EwsInsightItemType[] $insight
     */
    public function __construct(array $insight = [])
    {
        $this
            ->setInsight($insight);
    }
    /**
     * Get Insight value
     * @return \StructType\EwsInsightItemType[]
     */
    public function getInsight(): array
    {
        return $this->Insight;
    }
    /**
     * This method is responsible for validating the values passed to the setInsight method
     * This method is willingly generated in order to preserve the one-line inline validation within the setInsight method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateInsightForArrayConstraintsFromSetInsight(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfInsightItemTypeInsightItem) {
            // validation for constraint: itemType
            if (!$arrayOfInsightItemTypeInsightItem instanceof \StructType\EwsInsightItemType) {
                $invalidValues[] = is_object($arrayOfInsightItemTypeInsightItem) ? get_class($arrayOfInsightItemTypeInsightItem) : sprintf('%s(%s)', gettype($arrayOfInsightItemTypeInsightItem), var_export($arrayOfInsightItemTypeInsightItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Insight property can only contain items of type \StructType\EwsInsightItemType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Insight value
     * @throws InvalidArgumentException
     * @param \StructType\EwsInsightItemType[] $insight
     * @return \ArrayType\EwsArrayOfInsightItemType
     */
    public function setInsight(array $insight = []): self
    {
        // validation for constraint: array
        if ('' !== ($insightArrayErrorMessage = self::validateInsightForArrayConstraintsFromSetInsight($insight))) {
            throw new InvalidArgumentException($insightArrayErrorMessage, __LINE__);
        }
        $this->Insight = $insight;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\EwsInsightItemType|null
     */
    public function current(): ?\StructType\EwsInsightItemType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EwsInsightItemType|null
     */
    public function item($index): ?\StructType\EwsInsightItemType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EwsInsightItemType|null
     */
    public function first(): ?\StructType\EwsInsightItemType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EwsInsightItemType|null
     */
    public function last(): ?\StructType\EwsInsightItemType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EwsInsightItemType|null
     */
    public function offsetGet($offset): ?\StructType\EwsInsightItemType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EwsInsightItemType $item
     * @return \ArrayType\EwsArrayOfInsightItemType
     */
    public function add(\StructType\EwsInsightItemType $item): self
    {
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Insight
     */
    public function getAttributeName(): string
    {
        return 'Insight';
    }
}
