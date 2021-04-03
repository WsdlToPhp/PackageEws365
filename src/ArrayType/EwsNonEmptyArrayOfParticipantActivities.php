<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for NonEmptyArrayOfParticipantActivities ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsNonEmptyArrayOfParticipantActivities extends AbstractStructArrayBase
{
    /**
     * The ParticipantActivity
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\EwsParticipantActivity[]
     */
    protected array $ParticipantActivity = [];
    /**
     * Constructor method for NonEmptyArrayOfParticipantActivities
     * @uses EwsNonEmptyArrayOfParticipantActivities::setParticipantActivity()
     * @param \StructType\EwsParticipantActivity[] $participantActivity
     */
    public function __construct(array $participantActivity = [])
    {
        $this
            ->setParticipantActivity($participantActivity);
    }
    /**
     * Get ParticipantActivity value
     * @return \StructType\EwsParticipantActivity[]
     */
    public function getParticipantActivity(): array
    {
        return $this->ParticipantActivity;
    }
    /**
     * This method is responsible for validating the values passed to the setParticipantActivity method
     * This method is willingly generated in order to preserve the one-line inline validation within the setParticipantActivity method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateParticipantActivityForArrayConstraintsFromSetParticipantActivity(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $nonEmptyArrayOfParticipantActivitiesParticipantActivityItem) {
            // validation for constraint: itemType
            if (!$nonEmptyArrayOfParticipantActivitiesParticipantActivityItem instanceof \StructType\EwsParticipantActivity) {
                $invalidValues[] = is_object($nonEmptyArrayOfParticipantActivitiesParticipantActivityItem) ? get_class($nonEmptyArrayOfParticipantActivitiesParticipantActivityItem) : sprintf('%s(%s)', gettype($nonEmptyArrayOfParticipantActivitiesParticipantActivityItem), var_export($nonEmptyArrayOfParticipantActivitiesParticipantActivityItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ParticipantActivity property can only contain items of type \StructType\EwsParticipantActivity, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ParticipantActivity value
     * @throws InvalidArgumentException
     * @param \StructType\EwsParticipantActivity[] $participantActivity
     * @return \ArrayType\EwsNonEmptyArrayOfParticipantActivities
     */
    public function setParticipantActivity(array $participantActivity = []): self
    {
        // validation for constraint: array
        if ('' !== ($participantActivityArrayErrorMessage = self::validateParticipantActivityForArrayConstraintsFromSetParticipantActivity($participantActivity))) {
            throw new InvalidArgumentException($participantActivityArrayErrorMessage, __LINE__);
        }
        $this->ParticipantActivity = $participantActivity;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\EwsParticipantActivity|null
     */
    public function current(): ?\StructType\EwsParticipantActivity
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EwsParticipantActivity|null
     */
    public function item($index): ?\StructType\EwsParticipantActivity
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EwsParticipantActivity|null
     */
    public function first(): ?\StructType\EwsParticipantActivity
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EwsParticipantActivity|null
     */
    public function last(): ?\StructType\EwsParticipantActivity
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EwsParticipantActivity|null
     */
    public function offsetGet($offset): ?\StructType\EwsParticipantActivity
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EwsParticipantActivity $item
     * @return \ArrayType\EwsNonEmptyArrayOfParticipantActivities
     */
    public function add(\StructType\EwsParticipantActivity $item): self
    {
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ParticipantActivity
     */
    public function getAttributeName(): string
    {
        return 'ParticipantActivity';
    }
}
