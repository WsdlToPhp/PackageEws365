<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

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
     * @var \StructType\EwsInsight[]
     */
    protected array $Insight = [];
    /**
     * Constructor method for ArrayOfInsight
     * @uses EwsArrayOfInsight::setInsight()
     * @param \StructType\EwsInsight[] $insight
     */
    public function __construct(array $insight = [])
    {
        $this
            ->setInsight($insight);
    }
    /**
     * Get Insight value
     * @return \StructType\EwsInsight[]
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
        foreach ($values as $arrayOfInsightInsightItem) {
            // validation for constraint: itemType
            if (!$arrayOfInsightInsightItem instanceof \StructType\EwsInsight) {
                $invalidValues[] = is_object($arrayOfInsightInsightItem) ? get_class($arrayOfInsightInsightItem) : sprintf('%s(%s)', gettype($arrayOfInsightInsightItem), var_export($arrayOfInsightInsightItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Insight property can only contain items of type \StructType\EwsInsight, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Insight value
     * @throws InvalidArgumentException
     * @param \StructType\EwsInsight[] $insight
     * @return \ArrayType\EwsArrayOfInsight
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
     * @return \StructType\EwsInsight|null
     */
    public function current(): ?\StructType\EwsInsight
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EwsInsight|null
     */
    public function item($index): ?\StructType\EwsInsight
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EwsInsight|null
     */
    public function first(): ?\StructType\EwsInsight
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EwsInsight|null
     */
    public function last(): ?\StructType\EwsInsight
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EwsInsight|null
     */
    public function offsetGet($offset): ?\StructType\EwsInsight
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EwsInsight $item
     * @return \ArrayType\EwsArrayOfInsight
     */
    public function add(\StructType\EwsInsight $item): self
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
