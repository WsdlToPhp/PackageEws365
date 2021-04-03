<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfXrmActivityStreamType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfXrmActivityStreamType extends AbstractStructArrayBase
{
    /**
     * The Activity
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\EwsXrmActivityStreamType[]
     */
    protected array $Activity = [];
    /**
     * Constructor method for ArrayOfXrmActivityStreamType
     * @uses EwsArrayOfXrmActivityStreamType::setActivity()
     * @param \StructType\EwsXrmActivityStreamType[] $activity
     */
    public function __construct(array $activity = [])
    {
        $this
            ->setActivity($activity);
    }
    /**
     * Get Activity value
     * @return \StructType\EwsXrmActivityStreamType[]
     */
    public function getActivity(): array
    {
        return $this->Activity;
    }
    /**
     * This method is responsible for validating the values passed to the setActivity method
     * This method is willingly generated in order to preserve the one-line inline validation within the setActivity method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateActivityForArrayConstraintsFromSetActivity(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfXrmActivityStreamTypeActivityItem) {
            // validation for constraint: itemType
            if (!$arrayOfXrmActivityStreamTypeActivityItem instanceof \StructType\EwsXrmActivityStreamType) {
                $invalidValues[] = is_object($arrayOfXrmActivityStreamTypeActivityItem) ? get_class($arrayOfXrmActivityStreamTypeActivityItem) : sprintf('%s(%s)', gettype($arrayOfXrmActivityStreamTypeActivityItem), var_export($arrayOfXrmActivityStreamTypeActivityItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Activity property can only contain items of type \StructType\EwsXrmActivityStreamType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Activity value
     * @throws InvalidArgumentException
     * @param \StructType\EwsXrmActivityStreamType[] $activity
     * @return \ArrayType\EwsArrayOfXrmActivityStreamType
     */
    public function setActivity(array $activity = []): self
    {
        // validation for constraint: array
        if ('' !== ($activityArrayErrorMessage = self::validateActivityForArrayConstraintsFromSetActivity($activity))) {
            throw new InvalidArgumentException($activityArrayErrorMessage, __LINE__);
        }
        $this->Activity = $activity;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\EwsXrmActivityStreamType|null
     */
    public function current(): ?\StructType\EwsXrmActivityStreamType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EwsXrmActivityStreamType|null
     */
    public function item($index): ?\StructType\EwsXrmActivityStreamType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EwsXrmActivityStreamType|null
     */
    public function first(): ?\StructType\EwsXrmActivityStreamType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EwsXrmActivityStreamType|null
     */
    public function last(): ?\StructType\EwsXrmActivityStreamType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EwsXrmActivityStreamType|null
     */
    public function offsetGet($offset): ?\StructType\EwsXrmActivityStreamType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EwsXrmActivityStreamType $item
     * @return \ArrayType\EwsArrayOfXrmActivityStreamType
     */
    public function add(\StructType\EwsXrmActivityStreamType $item): self
    {
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Activity
     */
    public function getAttributeName(): string
    {
        return 'Activity';
    }
}
