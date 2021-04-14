<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfVotingOptionDataType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfVotingOptionDataType extends AbstractStructArrayBase
{
    /**
     * The VotingOptionData
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\EwsVotingOptionDataType[]
     */
    protected array $VotingOptionData = [];
    /**
     * Constructor method for ArrayOfVotingOptionDataType
     * @uses EwsArrayOfVotingOptionDataType::setVotingOptionData()
     * @param \StructType\EwsVotingOptionDataType[] $votingOptionData
     */
    public function __construct(array $votingOptionData = [])
    {
        $this
            ->setVotingOptionData($votingOptionData);
    }
    /**
     * Get VotingOptionData value
     * @return \StructType\EwsVotingOptionDataType[]
     */
    public function getVotingOptionData(): array
    {
        return $this->VotingOptionData;
    }
    /**
     * This method is responsible for validating the values passed to the setVotingOptionData method
     * This method is willingly generated in order to preserve the one-line inline validation within the setVotingOptionData method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateVotingOptionDataForArrayConstraintsFromSetVotingOptionData(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfVotingOptionDataTypeVotingOptionDataItem) {
            // validation for constraint: itemType
            if (!$arrayOfVotingOptionDataTypeVotingOptionDataItem instanceof \StructType\EwsVotingOptionDataType) {
                $invalidValues[] = is_object($arrayOfVotingOptionDataTypeVotingOptionDataItem) ? get_class($arrayOfVotingOptionDataTypeVotingOptionDataItem) : sprintf('%s(%s)', gettype($arrayOfVotingOptionDataTypeVotingOptionDataItem), var_export($arrayOfVotingOptionDataTypeVotingOptionDataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The VotingOptionData property can only contain items of type \StructType\EwsVotingOptionDataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set VotingOptionData value
     * @throws InvalidArgumentException
     * @param \StructType\EwsVotingOptionDataType[] $votingOptionData
     * @return \ArrayType\EwsArrayOfVotingOptionDataType
     */
    public function setVotingOptionData(array $votingOptionData = []): self
    {
        // validation for constraint: array
        if ('' !== ($votingOptionDataArrayErrorMessage = self::validateVotingOptionDataForArrayConstraintsFromSetVotingOptionData($votingOptionData))) {
            throw new InvalidArgumentException($votingOptionDataArrayErrorMessage, __LINE__);
        }
        $this->VotingOptionData = $votingOptionData;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\EwsVotingOptionDataType|null
     */
    public function current(): ?\StructType\EwsVotingOptionDataType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EwsVotingOptionDataType|null
     */
    public function item($index): ?\StructType\EwsVotingOptionDataType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EwsVotingOptionDataType|null
     */
    public function first(): ?\StructType\EwsVotingOptionDataType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EwsVotingOptionDataType|null
     */
    public function last(): ?\StructType\EwsVotingOptionDataType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EwsVotingOptionDataType|null
     */
    public function offsetGet($offset): ?\StructType\EwsVotingOptionDataType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EwsVotingOptionDataType $item
     * @return \ArrayType\EwsArrayOfVotingOptionDataType
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\EwsVotingOptionDataType) {
            throw new InvalidArgumentException(sprintf('The VotingOptionData property can only contain items of type \StructType\EwsVotingOptionDataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string VotingOptionData
     */
    public function getAttributeName(): string
    {
        return 'VotingOptionData';
    }
}
