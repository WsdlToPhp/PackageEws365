<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

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
     * @var \Ews\StructType\EwsVotingOptionDataType[]
     */
    public $VotingOptionData;
    /**
     * Constructor method for ArrayOfVotingOptionDataType
     * @uses EwsArrayOfVotingOptionDataType::setVotingOptionData()
     * @param \Ews\StructType\EwsVotingOptionDataType[] $votingOptionData
     */
    public function __construct(array $votingOptionData = array())
    {
        $this
            ->setVotingOptionData($votingOptionData);
    }
    /**
     * Get VotingOptionData value
     * @return \Ews\StructType\EwsVotingOptionDataType[]|null
     */
    public function getVotingOptionData()
    {
        return $this->VotingOptionData;
    }
    /**
     * This method is responsible for validating the values passed to the setVotingOptionData method
     * This method is willingly generated in order to preserve the one-line inline validation within the setVotingOptionData method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateVotingOptionDataForArrayConstraintsFromSetVotingOptionData(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfVotingOptionDataTypeVotingOptionDataItem) {
            // validation for constraint: itemType
            if (!$arrayOfVotingOptionDataTypeVotingOptionDataItem instanceof \Ews\StructType\EwsVotingOptionDataType) {
                $invalidValues[] = is_object($arrayOfVotingOptionDataTypeVotingOptionDataItem) ? get_class($arrayOfVotingOptionDataTypeVotingOptionDataItem) : sprintf('%s(%s)', gettype($arrayOfVotingOptionDataTypeVotingOptionDataItem), var_export($arrayOfVotingOptionDataTypeVotingOptionDataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The VotingOptionData property can only contain items of type \Ews\StructType\EwsVotingOptionDataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set VotingOptionData value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsVotingOptionDataType[] $votingOptionData
     * @return \Ews\ArrayType\EwsArrayOfVotingOptionDataType
     */
    public function setVotingOptionData(array $votingOptionData = array())
    {
        // validation for constraint: array
        if ('' !== ($votingOptionDataArrayErrorMessage = self::validateVotingOptionDataForArrayConstraintsFromSetVotingOptionData($votingOptionData))) {
            throw new \InvalidArgumentException($votingOptionDataArrayErrorMessage, __LINE__);
        }
        $this->VotingOptionData = $votingOptionData;
        return $this;
    }
    /**
     * Add item to VotingOptionData value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsVotingOptionDataType $item
     * @return \Ews\ArrayType\EwsArrayOfVotingOptionDataType
     */
    public function addToVotingOptionData(\Ews\StructType\EwsVotingOptionDataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsVotingOptionDataType) {
            throw new \InvalidArgumentException(sprintf('The VotingOptionData property can only contain items of type \Ews\StructType\EwsVotingOptionDataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->VotingOptionData[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsVotingOptionDataType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsVotingOptionDataType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsVotingOptionDataType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsVotingOptionDataType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsVotingOptionDataType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string VotingOptionData
     */
    public function getAttributeName()
    {
        return 'VotingOptionData';
    }
}
