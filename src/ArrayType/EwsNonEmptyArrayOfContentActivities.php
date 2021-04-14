<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for NonEmptyArrayOfContentActivities ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsNonEmptyArrayOfContentActivities extends AbstractStructArrayBase
{
    /**
     * The ContentActivity
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\EwsContentActivity[]
     */
    protected array $ContentActivity = [];
    /**
     * Constructor method for NonEmptyArrayOfContentActivities
     * @uses EwsNonEmptyArrayOfContentActivities::setContentActivity()
     * @param \StructType\EwsContentActivity[] $contentActivity
     */
    public function __construct(array $contentActivity = [])
    {
        $this
            ->setContentActivity($contentActivity);
    }
    /**
     * Get ContentActivity value
     * @return \StructType\EwsContentActivity[]
     */
    public function getContentActivity(): array
    {
        return $this->ContentActivity;
    }
    /**
     * This method is responsible for validating the values passed to the setContentActivity method
     * This method is willingly generated in order to preserve the one-line inline validation within the setContentActivity method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateContentActivityForArrayConstraintsFromSetContentActivity(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $nonEmptyArrayOfContentActivitiesContentActivityItem) {
            // validation for constraint: itemType
            if (!$nonEmptyArrayOfContentActivitiesContentActivityItem instanceof \StructType\EwsContentActivity) {
                $invalidValues[] = is_object($nonEmptyArrayOfContentActivitiesContentActivityItem) ? get_class($nonEmptyArrayOfContentActivitiesContentActivityItem) : sprintf('%s(%s)', gettype($nonEmptyArrayOfContentActivitiesContentActivityItem), var_export($nonEmptyArrayOfContentActivitiesContentActivityItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ContentActivity property can only contain items of type \StructType\EwsContentActivity, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ContentActivity value
     * @throws InvalidArgumentException
     * @param \StructType\EwsContentActivity[] $contentActivity
     * @return \ArrayType\EwsNonEmptyArrayOfContentActivities
     */
    public function setContentActivity(array $contentActivity = []): self
    {
        // validation for constraint: array
        if ('' !== ($contentActivityArrayErrorMessage = self::validateContentActivityForArrayConstraintsFromSetContentActivity($contentActivity))) {
            throw new InvalidArgumentException($contentActivityArrayErrorMessage, __LINE__);
        }
        $this->ContentActivity = $contentActivity;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\EwsContentActivity|null
     */
    public function current(): ?\StructType\EwsContentActivity
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EwsContentActivity|null
     */
    public function item($index): ?\StructType\EwsContentActivity
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EwsContentActivity|null
     */
    public function first(): ?\StructType\EwsContentActivity
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EwsContentActivity|null
     */
    public function last(): ?\StructType\EwsContentActivity
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EwsContentActivity|null
     */
    public function offsetGet($offset): ?\StructType\EwsContentActivity
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EwsContentActivity $item
     * @return \ArrayType\EwsNonEmptyArrayOfContentActivities
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\EwsContentActivity) {
            throw new InvalidArgumentException(sprintf('The ContentActivity property can only contain items of type \StructType\EwsContentActivity, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ContentActivity
     */
    public function getAttributeName(): string
    {
        return 'ContentActivity';
    }
}
